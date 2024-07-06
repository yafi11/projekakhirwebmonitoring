<?php

namespace App\Http\Controllers;

use App\Models\TowerData;
use App\Models\TowerFactory;
use App\Models\Towertype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QCmonitoringController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // Mendapatkan hasil pencarian
        $data = TowerData::where('sitename', 'LIKE', '%'.$keyword.'%')
                ->orWhere('siteid', 'LIKE', '%'.$keyword.'%')
                ->orWhere('towerprogress', 'LIKE', '%'.$keyword.'%')
                ->orWhere('qcresult', 'LIKE', '%'.$keyword.'%')
                ->simplePaginate(10);
        if ($data->isEmpty()) {
            // Mengarahkan kembali ke indeks jika hasil pencarian tidak ada
            Session::flash('message', 'No results found. Showing all records.');
            return redirect()->back();
        }
        // Mengirim hasil pencarian ke tampilan
        return view('qcmonitor.index', [
            'datas' => $data,
        ]);
    }

    public function edit($id)
    {
        $data = TowerData::find($id);
        return view('qcmonitor.edit',[
            'data' => $data,
            'towertypes'=>Towertype::get(),
            'towerfabs'=>TowerFactory::get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = TowerData::find($id);

        $data->towerprogress = $request ->towerprogress;
        $data->qcresult = $request ->qcresult;
        $data->forecastdate = $request ->forecastdate;
        $data->acceptdate = $request ->acceptdate;
        $data->remark = $request ->remark;
        $data->leg = $request ->leg;
        $data->leg_galv = $request ->leg_galv;
        $data->bracing = $request ->bracing;
        $data->brac_galv = $request ->brac_galv;
        $data->bordes = $request ->bordes;
        $data->bds_galv = $request ->bds_galv;
        $data->ladder = $request ->ladder;
        $data->lad_galv = $request ->lad_galv;
        $data->plate = $request ->plate;
        $data->pl_galv = $request ->pl_galv;
        $data->tow_body = $request ->tow_body;
        $data->bod_galv = $request ->bod_galv;
        $data->wrope = $request ->wrope;
        $data->wr_galv = $request ->wr_galv;
        $data->wclip = $request ->wclip;
        $data->wc_galv = $request ->wc_galv;
        $data->tn = $request ->tn;
        $data->tn_galv = $request ->tn_galv;
        $data->th = $request ->th;
        $data->th_galv = $request ->th_galv;
        $data->bp = $request ->bp;
        $data->bp_galv = $request ->bp_galv;
        $data->bolt = $request ->bolt;
        $data->bolt_galv = $request ->bolt_galv;
        $data->rru = $request ->rru;
        $data->rru_galv = $request ->rru_galv;
        $data->rf = $request ->rf;
        $data->rf_galv = $request ->rf_galv;
        $data->anc = $request ->anc;
        $data->anc_galv = $request ->anc_galv;
        $data->tmp = $request ->tmp;
        $data->obl = $request ->obl;
        $data->obl_galv = $request ->obl_galv;
        $data->spz = $request ->spz;
        $data->spz_galv = $request ->spz_galv;

        $data->save();
        Session::flash('success', 'Update Success');
        return redirect()->route('qcmonitor.index');
    }

    public function destroy($id)
    {
        $data = TowerData::find($id);
        $data -> delete();
        Session::flash('danger', 'Delete Success');        return redirect()->route('qcmonitor.index');
    }
}
