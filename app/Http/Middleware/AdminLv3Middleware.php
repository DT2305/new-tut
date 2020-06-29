<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLv3Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = Auth::guard('admin')->user()->id;
        $admin = admin::find($id);
        $level = $admin['level'];
        if($level < 2){
            return redirect()->back()->with('warning','Tài khoản không đủ thẩm quyền thực hiện hành động này !');
        }
        return $next($request);
    }
}
