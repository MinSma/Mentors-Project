<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email'                 => 'required|email',
            'password'              => 'required|confirmed',
            'first_name'            => 'required',
            'last_name'             => 'required',
            'gender'                => 'required',
            'age'                   => 'required|min:value',
            'city'                  => 'required',
        ];
    }

    /**
     * @return array|string
     */
    public function getFirstName()
    {
        return $this->input('first_name');
    }

    /**
     * @return array|null|string
     */
    public function getPassword()
    {
        return $this->input('password');
    }

    /**
     * @return array|string
     */
    public function getLastName()
    {
        return $this->input('last_name');
    }

    /**
     * @return array|string
     */
    public function getEmail()
    {
        return $this->input('email');
    }

    /**
     * @return array|string
     */
    public function getGender()
    {
        return $this->input('gender');
    }

    /**
     * @return array|string
     */
    public function getAge()
    {
        return $this->input('age');
    }

    /**
     * @return array|string
     */
    public function getCity()
    {
        return $this->input('city');
    }
}
