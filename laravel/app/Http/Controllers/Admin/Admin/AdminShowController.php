<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminShowController extends Controller
{

    public function adminShow( string $id, User $admin )
    {
        $admin = User::find( $id );
        return view( 'admin.admin.show', [ 'admin' => $admin ] );
    }

}
