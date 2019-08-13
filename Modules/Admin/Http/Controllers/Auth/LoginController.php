<?php
/**
 * Created by PhpStorm.
 * User: Dangb
 * Date: 8/7/2019
 * Time: 9:35 AM
 */

namespace Modules\Admin\Http\Controllers\Auth;

use App\Entities\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services\Utils\AuthUtils;

class LoginController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function showLoginForm()
    {
        return view('admin::auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            $adminUser = AdminUser::where('email', $email)->first();

            if(!empty($adminUser) && AuthUtils::attemptLogin($adminUser, 'admin', $email, $password, $request->has('remember_me'))){
                return redirect(route('admin.index'));
            } else {
                return redirect()->back();
            }
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        return redirect(route('admin.login'));
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}