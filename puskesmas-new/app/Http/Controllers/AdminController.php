<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Pasien;

class AdminController extends Controller
{
    public function index(){
        
        $kelurahanCount = Kelurahan::count();
        $pasienCount = Pasien::count();

        return view('admin.index', compact('kelurahanCount', 'pasienCount'));

    }
}
