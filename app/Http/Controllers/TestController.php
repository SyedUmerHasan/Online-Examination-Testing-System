<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Category;
use App\Answer;
use App\TestResult;
use Auth;

class TestController extends Controller
{
    public function CreateTest()
    {
        $options = Category::all();
        return view('admin.admin_pages.create_test')->with(compact('options'));
    }
    public function addtest(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = Auth::user();
            $test = new Test();        
            $test->user_id = $user->id;
            $test->test_question = $request->TestTitle;
            $test->test_status = $request->TestStatus;
            $test->test_category = $request->TestCategory;
            $test->save();
            $findtest = Test::where('test_question',$request->TestTitle)->first();
            $ans = $request->results; 
            $count = 0;
            foreach ($ans as $item) {
                if(isset($item))
                {
                    $answer =  new Answer();
                    $answer->user_id = $user->id;
                    $answer->test_id = $findtest->test_id;
                    $answer->answer_title = $request->results[$count]['answerstext'];
                    if(isset($request->results[$count]['answers']))
                    {
                        $answer->answer = '1';
                    }
                    $answer->save();
                }
                $count+=1;
            }
            return back();
        }
        else{
            return back();
        }
    }
    public function ShowTest()
    {        
        $test = Test::with('options')->get();
        return view('admin.admin_pages.show_test')->with(compact('test'));
    }
    public function taketest($slug = 'HTML')
    {
        $options = Category::all();
        $test = Test::with('options')->where('test_category', $slug)->get();
        return view('admin.admin_pages.show_test')->with(compact('test'))
        ->with(compact('options'));
    }
    public function starttest($slug = 'HTML')
    {
        $options = Category::all();
        $test = Test::with('options')->where('test_category', $slug)->Paginate(1);
        $user = Auth::user();

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
            // dd($test);
            foreach ($test as $key => $item) 
            {
                try {
                    $res=$testresult[$key];
                    if($res->question_id == $item->test_id)
                    {
                        // $DynamicFormName = 'answer_'.$item->test_id;
                        if ($res->submittedanswer == 0)
                        {
                            $QuestionSkipped++;
                        }
                        else{
                            if ($res->submittedanswer == $item->answer_id) {
                                $CorrrectAnswers++;
                            }
                            else if ($res->submittedanswer != $item->answer_id) {
                                $WrongAnswers++;
                            }
                        }
                        echo '<br>';
                    }
                }
                //catch exception
                catch(Exception $e) {
                    $QuestionSkipped++;
                }
            }
            TestResult::where('test_category', $request->category_type)->where('user_id',$user->id)->delete();
            
            $correctresult = "You have submitted " . $CorrrectAnswers . " correct  Answers";
            $wrongresult = "You have submitted " . $WrongAnswers . " wrong Answers";
            $skippedresult = "You have skipped " . $QuestionSkipped . " question";
            
            return view('Test.test_page')->with(compact('wrongresult'))->with(compact('correctresult'))->with(compact('skippedresult'));
        }
        else{
            return back();
        }
    }
}