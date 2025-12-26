<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        $rules = [
            "title" =>"required|string|min:1",
            "deadline" =>"required|date",
            "priority"=>"string",
            "completed" =>"reqired|boolean"
        ];
        switch($this->getMethod()){
            case "POST" :
                return $rules;
            case "PUT":
                return [
                    "id"=> "required|integer|exists:tasks,id",
                    "title"=> "required|string|min:1",
                    "deadline" =>"required|date",
                    "completed" =>"reqired|boolean"
                ];

        }
        return [];
    }
}
