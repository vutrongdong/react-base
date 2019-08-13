<?php
/**
 * Created by PhpStorm.
 * User: Dangb
 * Date: 8/7/2019
 * Time: 9:52 AM
 */

namespace App\Services\Utils;
use Illuminate\Support\Facades\Hash;

class HashUtils
{
    public static function check($str, $hashStr){
        return Hash::check($str, $hashStr);
    }
}