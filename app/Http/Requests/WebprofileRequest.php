<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebprofileRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan untuk mengembalikan true sehingga request diotorisasi
    }

    public function rules()
    {
        return [
            'slogan' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Tambahkan nullable di sini
            'video' => 'required',
            'shortdesc' => 'required',
        ];
    }
}
