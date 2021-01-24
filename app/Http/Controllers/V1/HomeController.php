<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if(!empty($user) ){
                if($user->roles()->first()->slug == 'superadmin') {
                    return redirect(route('admin.dashboard'));
                }
                else {
                    return redirect(route('users.dashboard'));
                }
            }
        return redirect(route('homepage'));
    }
}
