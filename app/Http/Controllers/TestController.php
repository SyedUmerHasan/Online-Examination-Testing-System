<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Test;
use App\Category;
use App\Answer;
use App\TestResult;
use Auth;
use View;
use App\UserTestResult;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('users');
    }

    public function starttest($slug = 'HTML')
    {
        $user = Auth::user();

        $options = Category::all();
        $test = Test::with('options')->where('test_category', $slug)->Paginate(1);

        return view('Test.test_page')->with(compact('test'))
                                    ->with('attempting_id', $user->id)
                                    ->with(compact('options'));
    }
    public function AllTests()
    {
        $test = Test::select('test_category')->where('test_status', '1')->distinct()->get();
        // dd($test);
        return view('Test.test_lists')->with(compact('test'));
    }
    public function submittest(Request $request)
    {
        if ($request->isMethod('post')) {
            $CorrrectAnswers = 0;
            $WrongAnswers = 0;
            $QuestionSkipped = 0;
            $user = Auth::user();
            $test = Test::where('test_category', $request->category_type)->join('answer', 'test.test_id', '=', 'answer.test_id')->where('answer.answer','1')->orderBy('test.test_id', 'asc')->get();
            $testresult = TestResult::where('test_category', $request->category_type)->where('user_id',$user->id)->distinct('question_id') ->orderBy('question_id', 'asc')->get();
            $i = 0;
            foreach ($test as $item1) {
                $i++;
                foreach ($testresult as $item2) {
                    if ($item2->submittedanswer == 0 && $item1->test_id == $item2->question_id ) {
                        $QuestionSkipped++;
                        echo 'I am skipping'.$i;
                        echo "<br>";
                        break;
                    } 
                    else 
                    {
                        if ($item2->submittedanswer == $item1->answer_id && $item1->test_id == $item2->question_id) {
                            if($item1->answer == 1)
                            {
                                $CorrrectAnswers++;
                                echo  $i . ' is correct';
                                break;
                            }
                        } 
                        else if ($item2->submittedanswer != $item1->answer_id && $item1->test_id == $item2->question_id) {
                            if ($item1->answer == 1) {
                                $WrongAnswers++;
                                echo $i . ' is wrong';
                                break;
                            }
                        }
                    }
                }
            }
            
            // $AddUserResult = (UserTestResult::where('user_id', $user->id)->where('test_category', $request->category_type)) ? UserTestResult::find($user->id) :new UserTestResult();
            $usertestid = Session::get('usertestid');
            $AddUserResult = UserTestResult::where('user_id', $user->id)
                            ->where('test_category', $request->category_type)
                            ->where('user_test_result_id', $usertestid)
                            ->update([
                    'correctanswers' => $CorrrectAnswers,
                    'wronganswers' => $WrongAnswers,
                    'skipanswers' => $QuestionSkipped
                ]);

            // UserTestResult::firstOrCreate([
            //     'user_id'=>$user->id,
            //     'test_category'=>$request->category_type
            // ],[
            //     'correctanswers' => $CorrrectAnswers,
            //     'wronganswers' => $WrongAnswers,
            //     'skipanswers' => $QuestionSkipped
            //     ]);
                
                $correctresult = "You have submitted " . $CorrrectAnswers . " correct  Answers";
                $wrongresult = "You have submitted " . $WrongAnswers . " wrong Answers";
                $skippedresult = "You have skipped " . $QuestionSkipped . " question";
                
                // View::make('Test.test_page')
                session()->forget('usertestid');
                TestResult::where('test_category', $request->category_type)->where('user_id',$user->id)->delete();
            return View::make('Test.test_page')->with(compact('wrongresult'))->with(compact('correctresult'))->with(compact('skippedresult'));
        }
        else{
            return back();
        }
    }
    public function ConfirmTest($testcategory)
    {
        $user = Auth::user();

        $AddUserResult = new UserTestResult();
        $AddUserResult->user_id = $user->id;
        $AddUserResult->test_category = $testcategory;
        $AddUserResult->save();
        $usertestid = $AddUserResult->user_test_result_id;
        Session::put('usertestid', $usertestid);
        return view('Test.test_confirm');
        
    }
}