<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Rules\ProjectManagementRules;

class ProjectManagementFormRequest extends FormRequest
{
    protected $rules;

    public function __construct(ProjectManagementRules $rules)
    {
        $this->rules = $rules;
    }

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
        return $this->rules->compose($this->segment(3));
    }
}
