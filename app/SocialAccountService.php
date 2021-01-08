<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountservice
{
    public function findOrCreate(ProviderUser $providerUser, $provider)
    {
        
        $account = SocialAccount::where('provider_id', $providerUser->getId())->where('provider_name', $provider)->first();

        if ($account) 
        {
            $user =  User::where('email', $providerUser->getEmail())->update([
                'name' => $providerUser->getName(),
                'avatar' => $providerUser->getAvatar(),
                ]);

            return $account->user;
        } 
        else 
        {
            $user = User::where('email', $providerUser->getEmail())->first();
            if (!$user) 
            {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'avatar' => $providerUser->getAvatar(),
                ]);
            }
            $user->accounts()->create([
                'provider_name' => $provider,
                'provider_id' => $providerUser->getId()
            ]);
            return $user;
        }
    }
}
