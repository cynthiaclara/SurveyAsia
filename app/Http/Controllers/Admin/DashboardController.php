<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        //jumlah user
        $users = User::hitungUser();
        //jumlah transaksi
        $transaksi = Transaction::count();
        // dd($users);
        $data = [
            'users' => $users,
            'transaksi' => $transaksi
        ];
        dd($data);
        return view('admin.dashboard.index', [
            'users' => $users,
            'transaksi' => $transaksi,
        ]);
    }
}
