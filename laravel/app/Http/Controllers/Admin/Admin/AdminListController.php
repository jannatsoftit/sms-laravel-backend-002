<?php

namespace App\Http\Controllers\Admin\Admin;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminListController extends Controller
 {

    public function adminList()
    {
        $admins = User::where( 'school_id', Auth::user()->school_id )->where( 'role_id', 1 )->paginate( 5 );

        return view( 'admin.admin.adminlist', [ 'admins' => $admins ] )
        ->with( 'i', ( request()->input( 'page', 1 ) - 1 ) * 5 );
    }

 }
