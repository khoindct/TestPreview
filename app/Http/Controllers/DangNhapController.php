<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    public function login(Request $request) {
        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if(Auth::attempt($data)) {
            return redirect('thanhcong');
        } else {
            return redirect('dangnhap');
        }
    }
}
