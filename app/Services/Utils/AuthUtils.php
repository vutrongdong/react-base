<?php
/**
 * Created by PhpStorm.
 * User: Dangb
 * Date: 8/7/2019
 * Time: 9:49 AM
 */
namespace App\Services\Utils;
use Illuminate\Support\Facades\Auth;


class AuthUtils
{

    public static function attemptLogin($authUser, $guard, $email, $password, $remember = false){
        if($authUser->email == $email && HashUtils::check($password, $authUser->password)){
            Auth::guard($guard)->login($authUser, $remember);
            return true;
        }
        return false;
    }
}