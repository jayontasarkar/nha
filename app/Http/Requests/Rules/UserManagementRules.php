<?php

namespace App\Http\Requests\Rules;

class UserManagementRules
{
    public function compose($id = null)
    {
        $rules['name']     = 'required|min:4';
        $rules['phone']    = 'required|min:11|max:11|unique:users,phone';
        $rules['designation']    = 'required|min:3';
        $rules['role_id']    = 'required|exists:roles,id';
        if ($id) {
            $rules['phone'] = 'required|min:11|max:11|unique:users,phone,' . $id ;
        } else {
            $rules['password'] = 'required|min:4|max:15|confirmed';
            $rules['password_confirmation'] = 'required';
        }

        return $rules;
    }
}
