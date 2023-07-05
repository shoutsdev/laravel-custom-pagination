<?php

namespace App\Http\Controllers;

use App\Models\User;

class PaginationController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::paginate(10)
        ];
        return view('users',$data);
    }
}
