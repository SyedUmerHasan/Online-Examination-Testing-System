<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestResult;
use App\Http\Requests;
use App\Http\Resources\TestResult as TestResultResource;

class TestResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'abc';
        $testresult = TestResult::paginate(10);
        // echo $testresult;
        return TestResultResource::collection($testresult);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testresult = $request->isMethod('put') ? TestResult::findOrFail($request->test_result_id) : new TestResult;
        $testresult->test_result_id = $request->test_result_id;
        $testresult->user_id = $request->user_id;
        $testresult->test_category = $request->test_category;
        $testresult->question_id = $request->question_id;
        $testresult->test_id = $request->test_id;
        $testresult->submittedanswer = $request->submittedanswer;
        if($testresult->save()){
            return new TestResultResource($testresult);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testresult = TestResult::findOrFail($id);
        return new TestResultResource($testresult);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testresult = TestResult::findOrFail($id);
        if( $testresult->delete() )
        {
            return new TestResultResource($testresult);
        }
    }
}
