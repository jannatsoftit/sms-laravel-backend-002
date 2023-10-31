<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminDestroyController extends Controller
{

    public function adminDelete( string $id, User $admin )
    {
        $admin = User::find( $id );
        $admin->delete();
        return redirect()->back()->with( 'delete', 'Admin Delete Successfully' );
    }

}
