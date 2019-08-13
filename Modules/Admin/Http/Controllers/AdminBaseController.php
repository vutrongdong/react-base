<?php
/**
 * Created by PhpStorm.
 * User: Dangb
 * Date: 8/7/2019
 * Time: 8:30 AM
 */

namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

class AdminBaseController extends BaseController
{
    protected $adminUser;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->adminUser = Auth::guard('admin')->user();
            if(!empty($this->adminUser)){
                // Sharing is caring
                View::share('adminUser', $this->adminUser);
            }
            return $next($request);
        });
    }
}
