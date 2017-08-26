<?php

namespace App\Http\Requests\Rules;

class ProjectManagementRules
{
    public function compose($id = null)
    {
        $rules['name']     = 'required|min:4';
        $rules['desc']     = 'required|min:10|max:600';
        $rules['location'] = 'required|min:4|max:150';
        $rules['status']   = 'required';
        $rules['starting_date']   = 'required|date';
        $rules['ending_date']   = 'required|date';

        return $rules;
    }
}
