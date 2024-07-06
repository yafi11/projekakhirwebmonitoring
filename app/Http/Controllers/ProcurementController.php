<?php

namespace App\Http\Controllers;

use App\Models\TowerData;
use App\Models\TowerFactory;
use App\Models\TowerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProcurementController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // Mendapatkan hasil pencarian
        $data = TowerData::where('sitename', 'LIKE', '%'.$keyword.'%')
                ->orWhere('siteid', 'LIKE', '%'.$keyword.'%')
                ->orWhere('ponumber', 'LIKE', '%'.$keyword.'%')
                ->simplePaginate(10);
        if ($data->isEmpty()) {
            // Mengarahkan kembali ke indeks jika hasil pencarian tidak ada
            Session::flash('message', 'No results found. Showing all records.');
            return redirect()->back();
        }        
        // Mengirim hasil pencarian ke tampilan
        return view('procurement.index', [
            'datas' => $data,
        ]);
    }

    public function create()
    {
        return view('procurement.create',[
            'towertypes'=>TowerType::get(),
            'towerfactories'=>TowerFactory::get(),
        ]);
    }

    public function store(Request $request)
    {
        $data=new TowerData();

        $data->siteid = $request ->siteid;
        $data->sitename = $request ->sitename;
        $data->towertype_id = $request ->towertype_id;
        $data->towerfactory_id = $request ->towerfactory_id;
        $data->ponumber = $request ->ponumber;
        $data->statuspo = $request ->statuspo;

        $data->save();
        Session::flash('success', 'Update Success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $data = TowerData::find($id);
        return view('procurement.edit',[
            'data' => $data,
            'towertypes'=>Towertype::get(),
            'factories'=>TowerFactory::get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = TowerData ::find($id);
        
        $data->siteid = $request ->siteid;
        $data->sitename = $request ->sitename;
        $data->towertype_id = $request ->towertype_id;
        $data->towerfactory_id = $request ->towerfactory_id;
        $data->ponumber = $request ->ponumber;
        $data->statuspo = $request ->statuspo;

        $data->save();
        Session::flash('success', 'Update Success');
        return redirect()->route('procurement.index');
    }

    public function destroy($id)
    {
        $data = TowerData::find($id);
        $data -> delete();
        Session::flash('danger', 'Delete Success');
        return redirect()->route('procurement.index');
    }
}
