<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Usersubscription;


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

        // dd($input);

      
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'usertype' => ['required', 'string', 'max:255'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ])->validate();
    
    
            $user = User::create([
                'name' => $input['name'],
                'last_name' => $input['last_name'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'usertype' => $input['usertype'],
                'password' => Hash::make($input['password']),
            ]);
            
            
            if($user->save()){
                 
                 Usersubscription::create([
                'user_id' => $user->id,
                'payment_method' => 'Bkash',
                'package_name' => 'Basic',
                'payment_money' => 10000,
                'time' => now(),
                'payment_from_phone_num' => '01675971550',
                'payment_transaction_id' => '1251458',
                'created_at' => now(),
        ]);
    
    
          
    
            // return Userprofile::create([
    
            // ]);
           
            $user->userProfile()->create();
            
            
            }
            
         
          
         
           
    
            return $user;
    



        
        }
       
}