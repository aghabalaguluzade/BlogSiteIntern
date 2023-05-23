<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        if(request()->routeIs('categories.store')) {
            $name = 'required';
        }elseif(request()->routeIs('categories.update')) {
            $name = 'sometimes';
            $status = 'sometimes';
        }

        return [
            'name' => [$name,'string','max:255'],
            'status' => [$status,'string','max:255']
        ];
    }
}
