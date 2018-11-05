<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Category;
use App\Answer;
use App\TestResult;
use Auth;
use View;

class AdminTestController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function CreateTest()
    {
        $testresult = TestResult::select('test_category')->distinct('test_category')->get();
        $options = Category::all();
        return view('admin.admin_pages.create_test')->with(compact('options'))->with(compact('testresult'));
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
            $findtest = Test::where('test_question', $request->TestTitle)->first();
            $ans = $request->results;
            $count = 0;
            foreach ($ans as $item) {
                if (isset($item)) {
                    $answer = new Answer();
                    $answer->user_id = $user->id;
                    $answer->test_id = $findtest->test_id;
                    $answer->answer_title = $request->results[$count]['answerstext'];
                    if (isset($request->results[$count]['answers'])) {
                        $answer->answer = '1';
                    }
                    $answer->save();
                }
                $count += 1;
            }
            return back();
        } else {
            return back();
        }
    }
    public function ShowTest($slug = 'HTML')
    {
        $options = Category::all();
        $testresult = TestResult::select('test_category')->distinct('test_category')->get();
        $test = Test::where('test_category',$slug)->with('options')->get();
        // dd($options,$testresult,$test);
        return view('admin.admin_pages.show_test')->with(compact('test'))
            ->with(compact('testresult'))
            ->with(compact('options'));
    }
    public function taketest($slug = 'HTML')
    {
        $testresult = TestResult::select('test_category')->distinct('test_category')->get();
        $options = Category::all();
        $test = Test::with('options')->where('test_category', $slug)->get();
        return view('admin.admin_pages.show_test')->with(compact('test'))
            ->with(compact('testresult'))
            ->with(compact('options'));
    }

}
