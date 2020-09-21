<?php

namespace App\Http\Requests\Api\House;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{


    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'priceFrom' => 'nullable|integer',
            'priceTo' => 'nullable|integer',
            'bedroom' => 'nullable|integer',
            'bathroom' => 'nullable|integer',
            'storey' => 'nullable|integer',
            'garage' => 'nullable|integer',
            'sort' => 'nullable|string',
            'direction' => 'nullable|string',
        ];
    }
}
