<?php

namespace :lc:vendor\:uc:package\Infra\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Ping
 * @package :lc:vendor\:uc:package\Infra\Http\Requests
 */
class PingRequest extends FormRequest
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
            //
        ];
    }
}
