<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    function index(){
        //get posts
        $keluarga = DataKeluarga::latest()->get();
        $user = Auth()->id();
        // $datas = Keluarga::sum('jumlah');
        // $jum = Keluarga::count();

        $datas = DataKeluarga::where('id_user', $user)->sum('jumlah');
        $jum = DataKeluarga::where('id_user', $user)->count();

        $proposal = DataKeluarga::where('id_user', $user)->latest()->get();
        //render view with posts
        // return view('keluarga.kelu', compact('proposal', 'datas', 'jum',));
        return view('data_keluarga.index',compact('proposal', 'datas', 'jum',));
    }

    public function create()
    {
        $user = Auth()->id();
        return view('data_keluarga.create', compact('user'));
    }

      /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            'jumlah'   => 'required'
        ]);

        DataKeluarga::create([
            'nama' => request('nama'),
            'jumlah' => request('jumlah'),
            'id_user' => Auth()->id()
        ]);
        //create post

        //redirect to index
        return redirect()->route('datakeluarga')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
