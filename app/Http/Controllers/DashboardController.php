<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TowerData;
use App\Models\TowerFactory;

class DashboardController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data dari tabel TowerData
        $datas = TowerData::get();

        // Mendapatkan semua data dari tabel TowerFactory
        $towerfactories = TowerFactory::get();

        // Inisialisasi array untuk menyimpan jumlah PO berdasarkan tower factory
        $jumlah_po = [];
        $status_material = [];
        $qc_result = [];

        // Iterasi untuk setiap tower factory
        foreach ($towerfactories as $factory) {
        // Menghitung jumlah PO yang sudah di-release berdasarkan tower fabrication
        $jumlah_po[$factory->name] = TowerData::where('towerfactory_id', $factory->id)
                                            ->where('statuspo', 'RELEASED')
                                            ->count();
        
        // Menghitung jumlah PO yang masih on production berdasarkan tower factory
        $status_material[$factory->name] = TowerData::where('towerfactory_id', $factory->id)
                                            ->where('towerprogress', 'ON PRODUCTION')
                                            ->count();

        // Menghitung jumlah PO yang sudah approve berdasarkan tower fabrication
        $qc_result[$factory->name] = TowerData::where('towerfactory_id', $factory->id)
                                            ->where('qcresult', 'APPROVE')
                                            ->count();                                    
        }
        // Mengirimkan data ke tampilan
        return view('home', [
            'datas' => $datas,
            'towerfactories' => $towerfactories,
            'jumlah_po' => $jumlah_po,
            'status_material' => $status_material,
            'qc_result' => $qc_result,
        ]);
    }

}
