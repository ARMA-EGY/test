<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use App\SocialAccountService;

use LaravelLocalization;

class SocialAccountController extends Controller
{
    public function redirectToProvider($provider)
    {
        session(['link' => url()->previous()]);
        return Socialite::driver($provider)->redirect();
    }

    
    public function handleProviderCallback(SocialAccountService $profileService, $provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $profileService->findOrCreate($user, $provider);

        auth()->login($authUser, true);
        return redirect(session('link'));
        
    }
}
