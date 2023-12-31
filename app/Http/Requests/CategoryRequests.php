<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        //Tạo ra 1 mảng
        $rules = [];
        //Lấy ra tên phương thức cần xử lí
        // $currentAction = $this->route()->getActionMethod();

        switch ($this->method()):
            case "POST":
                $rules = [
                    "name"=>"required|unique:categories",
                ];
            break;
        endswitch;
        return $rules;
    }
}
