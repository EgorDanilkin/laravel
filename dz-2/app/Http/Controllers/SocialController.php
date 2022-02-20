<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function loginVk()
    {
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVk()
    {
        $user = Socialite::driver('vkontakte')->user();

        User::loginInSocial($user, 'vkontakte');

        return redirect()->route('home');
    }

    public function loginFacebook()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function responseFacebook()
    {
        $user = Socialite::driver('facebook')->user();

        User::loginInSocial($user, 'facebook');

        return redirect()->route('home');
    }
}
