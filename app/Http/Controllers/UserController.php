<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $diterima = Masyarakat::where('status', 'Diterima')->count();
        $cancel = Masyarakat::where('status', 'gagal')->count();
        return view('Template.dashboardAdmin', compact('cancel', 'diterima'));
    }

    public function aduan(Request $request) {
        $data = $request->all();
        Masyarakat::create($data);

        return redirect('/');
        
    }
}
