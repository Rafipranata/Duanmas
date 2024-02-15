<?php

namespace App\Http\Controllers\Admin;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $cancel = Masyarakat::where('status', 'gagal')->count();
        $pending = Masyarakat::where('status', 'Pending')->count();
        $diterima = Masyarakat::where('status', 'Diterima')->count();
        $jumlahSemua = Masyarakat::count();
        return view('Admin.dashboard', compact('cancel', 'jumlahSemua', 'pending', 'diterima' ));
    }
}
