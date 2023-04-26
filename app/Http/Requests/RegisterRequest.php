<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|unique:users,email',
            'nom' => 'required',
            'prenom' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'numtel' => 'required|min:10',
            'adresse' =>'required',

        ];
    }
   /**
      *   @return array
    */
   public function messages()
   {
       return [
           'email.required' => 'L\'adresse email est requise.',
           'email.email' => 'L\'adresse email est invalide.',
           'email.unique' => 'Un compte avec cette adresse email est déjà enregistré.',

           'nom.required' => 'Le nom est requis.',
           'prenom.required' => 'Le prénom est requis.',
           'adresse.required' => 'Le prénom est requis.',
           'password.required' => 'Le mot de passe est requis.',
           'password.min' => 'Le mot de passe doit avoir au moins 8 caractères.',

           'password_confirmation.required' => 'La confirmation du mot de passe est requise.',
           'password_confirmation.same' => 'Les mots de passe ne correspondent pas.',

           'numtel.required' => 'Le numéro de téléphone est requis.',
          
       ];
   }

}