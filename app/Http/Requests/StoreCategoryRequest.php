<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCategoryRequest extends Request
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
        $rules = [
            'category_name'=>'required|min:2|max:255',
            'category_slug'=>'required|min:2|max:255',
            'category'=>'exists_or_null:category,id',
        ];

      foreach($this->request->get('mutilan') as $key => $val)
      {
            if($val !== '')
            {
                $rules['mutilan.'.$key] = 'exists:language,id,key,1|min:2';
            }
      }

        return $rules;
    }
}
