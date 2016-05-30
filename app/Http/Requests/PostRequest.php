<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
   /* public function rules()
    {
        $rules=[
            'title'=>'required|min:3',
            'text'=>'required'
        ];
        return $rules;
    }*/
    public function rules()
    {
        $rules =  [
            'title'             => 'required',
            'text'           => 'required'
        ];
        if($this->isMethod('post') and $this->is("post/showeditpost")){
            $rules['title'] = 'required'.$this->post->id;
        }
        return $rules;
    }
}
