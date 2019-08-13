<?php
/**
 * Created by PhpStorm.
 * User: Dangb
 * Date: 8/7/2019
 * Time: 8:26 AM
 */
namespace Modules\Web\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BaseController;

class WebBaseController extends BaseController
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            if(!empty($this->user)){
                // Sharing is caring
                View::share('user', $this->user);
            }
            return $next($request);
        });
    }
}
