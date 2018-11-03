<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TestResult extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'ID' => $this->test_id,
            'test_category' => $this->test_category,
            'question_id' => $this->question_id,
            'test_id' => $this->test_id,
            'user_id' => $this->user_id,
            'submittedanswer' => $this->submittedanswer,
            'author' =>[
                'name' => 'Syed Umer Hasan',
                'powered_by' => 'Code For Geeks'
            ]
        ];
    }
    public function with($request){
        return[
            'created_by'=>'Syed Umer Hasan'
        ];
    }
}
