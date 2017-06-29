<?php namespace nanosoluctions\nanocms;

use Illuminate\Foundation\Http\FormRequest;
use nanosoluctions\nanocms\models\CMSUser;

class CMSUserRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $regras = [
            'name' => 'required|max:255',
            'password' => 'required|confirmed',
        ];

        if ($this->id) {
            $user = CMSUser::find($this->id);
            $regras['email'] = 'required|email|unique:users,email,' . $user->id;
        } else {
            $regras['email'] = 'required|email|unique:users,email';
        }

        return $regras;
    }

}
