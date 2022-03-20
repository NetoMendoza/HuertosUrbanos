<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        switch ($input['role_id']) {
            case 3:
                Validator::make($input, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => $this->passwordRules(),
                    'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
                    'ci' => ['string', 'max:255','digits_between:0,9'],
                    'nit' => ['string', 'max:255','digits_between:0,11'],
                    'address' => ['string', 'max:255'],
                    'phonenumber' => ['string', 'max:255', 'digits_between:0,9'],
                    'datebirth' => ['date', 'max:12','before_or_equal:01-01-2010'],
                ])->validate();
                //    
                break;
            case 4:
                Validator::make($input, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => $this->passwordRules(),
                    'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
                    'nit' => ['string', 'unique:users', 'max:255'],
                    'address' => ['string', 'max:255'],
                    'phonenumber' => ['string', 'max:255', 'digits_between:0,9'],
                    'datebirth' => ['date', 'max:12'],
                ])->validate();
                break;
            default:
                Validator::make($input, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => $this->passwordRules(),
                    'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
                ])->validate();
                break;
        }
        

        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => $input['role_id'],
            'ci' => $input['ci'] ?? null,
            'nit' => $input['nit'] ?? null,
            'address' => $input['address'] ?? null,
            'phonenumber' => $input['phonenumber'] ?? null,
            'datebirth' => $input['datebirth'] ?? null,
        ]);
    }
}
