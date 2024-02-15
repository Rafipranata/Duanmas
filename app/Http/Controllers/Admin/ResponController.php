<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Respon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function respon()
    {
        $cancel = Masyarakat::where('status', 'gagal')->count();
        $data = Masyarakat::all();
        return view('Admin.respon', compact('data', 'cancel'));

    }

    public function tolak($id)
    {
        $data = Masyarakat::find($id);

        $data->update(['status' => 'gagal']);

        return redirect('/admin/respon');
    }

    public function terima($id)
    {
        $data = Masyarakat::find($id);

        $data->update(['status' => 'Diterima']);

        return redirect()->route('jawabAduan', ['id' => $id]);
    }

    public function responAduan($id)
    {
        $data = Masyarakat::find($id);
        return view('Admin.detail', compact('data'));

    }

    public function jawabAduan($id)
    {
        $data = Masyarakat::find($id);
        return view('Admin.jawab', compact('data'));

    }

    public function insertRespon(Request $request)
    {
        $data = $request->all();
        Respon::create($data);
        return redirect()->route('respon');
    }

    public function search(Request $request)
    {
        $cancel = Masyarakat::where('status', 'gagal')->count();
        $diterima = Masyarakat::where('status', 'Diterima')->count();

        $query = $request->input('query');

        $results = Masyarakat::where('nik', $query)->get();

        return view('search', compact('diterima', 'cancel', 'results'));
    }

    public function detail($id)
    {
        $respon = Respon::where('id_masyarakat', $id)->first();
        $data = Masyarakat::find($id);

        return view('Admin.lihat', compact('data', 'respon'));

    }

}
