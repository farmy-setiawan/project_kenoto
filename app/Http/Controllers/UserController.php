<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class UserController extends Controller
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
        return view('pointakses/user/index',compact('proposal', 'datas', 'jum',));
    }
}
