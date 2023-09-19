<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiaryRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'diary.created_at' => 'required',
            'diary.title' => 'required|string|max:30',
            'diary.content' => 'required|string|max:150',
        ];
    }
}
