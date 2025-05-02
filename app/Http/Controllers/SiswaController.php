<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        $data['siswa'] = Siswa::all();

        dd($data);
    }

}
