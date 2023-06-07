<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;



class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        // Add your authorization logic here
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required', 
                'max:255' , 
                Rule::unique('posts')->ignore($this->post)
            ],
            'description' => 'required|min:100',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The project name is required.',
            'description.required' => 'The project description is required.',
            'name.max' => 'The project name is too long, max: 255 chars',
            'description.min' => 'The project description is too short, min: 100 chars',
        ];
    }

}

