<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Category;
use App\Answer;
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
        $test = Test::with('options')->where('test_category', $slug)->get();
        return view('Test.test_page')   ->with(compact('test'))
                                        ->with(compact('options'));
    }
    public function submittest(Request $request)
    {
        // abort('sduygdsgu');
        if ($request->isMethod('post')) {
            $CorrrectAnswers = 0;
            $test = Test::where('test_category', $request->category_type)->join('answer', 'test.test_id', '=', 'answer.test_id')->where('answer.answer','1')->get();
           // dd($test);
            foreach ($test as $item) {
                // abort('di');
                $DynamicFormName = 'answer_'.$item->test_id;
                $SubmittedAnswer = $request->$DynamicFormName;
                if($SubmittedAnswer == $item->answer_id){
                    $CorrrectAnswers++;
                }
                    echo '<br>';
            }
            // echo 'You have successfully submiited '
            // dd($test);
            $result = "You have submitted ".$CorrrectAnswers." Answers";
            return view('Test.test_page')->with(compact('result'));
        }
        else{
            return back();
        }
    }
}