<?php

namespace App\Http\Controllers;

use App\Models\TowerData;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
        return view('progress',[
            'datas' =>TowerData::get(),
        ]);
    }
}
