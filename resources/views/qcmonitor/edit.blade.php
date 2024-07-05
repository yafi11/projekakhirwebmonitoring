@extends('template.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route ('qcmonitor.edit', $data->id)}}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Site ID</label>
                        <input type="text" name="siteid" class="form-control" placeholder="" value="{{$data->siteid}}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Site Name</label>
                        <input type="text" name="sitename" class="form-control" placeholder="" value="{{$data->sitename}}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Tower Type</label>
                        <input type="text" name="towertype_id" class="form-control" placeholder="" value="{{$data ->towertypes->name }}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Tower Factory</label>
                        <input type="text" name="towerfactory_id" class="form-control" placeholder="" value="{{$data ->towerfactory->name}}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">PO Number</label>
                        <input type="text" name="ponumber" class="form-control" placeholder="" value="{{$data->ponumber}}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Status PO</label>
                        <input type="text" name="statuspo" class="form-control" placeholder="" value="{{$data->statuspo}}" disabled="" fdprocessedid="0p4zbp">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <form action="{{ route ('qcmonitor.update', $data->id)}}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <h2>STATUS MATERIAL</h2>
                <div class="col-lg-4">
                    <div class="mb-6">
                        <label class="form-label">Status Material</label>
                        <select type="text" name="statusmaterial" id="" class="form-select" placeholder="" value="{{$data->statusmaterial}}">
                            <option value="{{$data->statusmaterial}}" selected hidden>{{$data->statusmaterial}}</option>                                            
                            <option value="ON PRODUCTION">ON PRODUCTION</option>
                            <option value="QC CHECK DONE">QC CHECK DONE</option>
                            <option value="RECTIFICATION">RECTIFICATION</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-6">
                        <label class="form-label">Forecast Date</label>
                        <input type="date" name="forecast_date" class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" value="{{$data->forecast_date}}" fdprocessedid="s54m9">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-6">
                        <label class="form-label">Acceptance Date</label>
                        <input type="date" name="acc_date" class="form-control" placeholder="Select a date" id="datepicker-icon-prepend" value="{{$data->acc_date}}" fdprocessedid="s54m9">
                    </div>
                </div>
            </div>
            
            <div class="row row-cards">
                <h2>QC CHECKLIST</h2>
                <div class="form-label">
                    <div class="table-responsive">
                        <h2>STEEL STRUCTURE</h2>
                        <table class="table mb-2">TOWER SST PART
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TOWER LEG</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select type="text" name="leg" id="" class="form-select" placeholder="">
                                            <option value="{{$data->leg}}" selected hidden>{{$data->leg}}</option>                                            
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="leg_galv" class="form-control" value="{{$data->leg_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>BRACING</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="bracing" id="" class="form-select" placeholder="">
                                            <option value="{{$data->bracing}}" selected hidden>{{$data->bracing}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="brac_galv" class="form-control" value="{{$data->brac_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>BORDESPLATE</td>
                                    <td>
                                        NEW/THICK/GALVANIZED/CONFORM
                                    <td>
                                        <select name="bordes" id="" class="form-select" placeholder="">
                                            <option value="{{$data->bordes}}" selected hidden>{{$data->bordes}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="bds_galv" class="form-control" value="{{$data->bds_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>LADDER</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="ladder" id="" class="form-select" placeholder="">
                                            <option value="{{$data->ladder}}" selected hidden>{{$data->ladder}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="lad_galv" class="form-control" value="{{$data->lad_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>PLATE & GUSSET</td>
                                    <td>
                                        NEW/THICK/GALVANIZE/CONFORM
                                    <td>
                                        <select name="plate" id="" class="form-select" placeholder="">
                                            <option value="{{$data->plate}}" selected hidden>{{$data->plate}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="pl_galv" class="form-control" value="{{$data->pl_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table mb-2">TOWER GMT PART
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TOWER BODY</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="tow_body" id="" class="form-select" placeholder="">
                                            <option value="{{$data->tow_body}}" selected hidden>{{$data->tow_body}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="bod_galv" class="form-control" value="{{$data->bod_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>WIRE ROPE</td>
                                    <td>
                                        Dia. 8mm/NEW/GALVANIZED/CONFORM
                                    <td>
                                        <select name="wrope" id="" class="form-select" placeholder="">
                                            <option value="{{$data->wrope}}" selected hidden>{{$data->wrope}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="wr_galv" class="form-control" value="{{$data->wr_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>WIRE CLIP</td>
                                    <td>
                                        NEW/GALVANIZED/CONFORM
                                    <td>
                                        <select name="wclip" id="" class="form-select" placeholder="">
                                            <option value="{{$data->wclip}}" selected hidden>{{$data->wclip}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="wc_galv" class="form-control" value="{{$data->wc_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>TURNBUCKLE</td>
                                    <td>
                                        NEW/GALVANIZED/CONFORM
                                    <td>
                                        <select name="tn" id="" class="form-select" placeholder="">
                                            <option value="{{$data->tn}}" selected hidden>{{$data->tn}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="tn_galv" class="form-control" value="{{$data->tn_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>THIMBLE</td>
                                    <td>
                                        NEW/GALVANIZE/CONFORM
                                    <td>
                                        <select name="th" id="" class="form-select" placeholder="">
                                            <option value="{{$data->th}}" selected hidden>{{$data->th}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="th_galv" class="form-control" value="{{$data->th_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table mb-2">
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BASE PLATE</td>
                                    <td>
                                        NEW/THICK/GALVANIZED/CONFORM
                                    <td>
                                        <select name="bp" id="" class="form-select" placeholder="">
                                            <option value="{{$data->bp}}" selected hidden>{{$data->bp}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="bp_galv" class="form-control" value="{{$data->bp_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>BOLTS & NUTS</td>
                                    <td>
                                        HDG/GRADE8.8/NEW/GALVANIZED
                                    <td>
                                        <select name="bolt" id="" class="form-select" placeholder="">
                                            <option value="{{$data->bolt}}" selected hidden>{{$data->bolt}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="bolt_galv" class="form-control" value="{{$data->bolt_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>BRACKET & MOUNTING ANTENNA</h2>
                        <table class="table mb-2">
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ANTENNA RRU</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="rru" id="" class="form-select" placeholder="">
                                            <option value="{{$data->rru}}" selected hidden>{{$data->rru}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="rru_galv" class="form-control" value="{{$data->rru_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>ANTENNA RF</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="rf" id="" class="form-select" placeholder="">
                                            <option value="{{$data->rf}}" selected hidden>{{$data->rf}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="rf_galv" class="form-control" value="{{$data->rf_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>ANCHOR & TEMPLATE</h2>
                        <table class="table mb-2">
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ANCHOR</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="anc" id="" class="form-select" placeholder="">
                                            <option value="{{$data->anc}}" selected hidden>{{$data->anc}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="anc_galv" class="form-control" value="{{$data->anc_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>TEMPLATE</td>
                                    <td>
                                        NEW/STRAIGHT/CONFORM
                                    <td>
                                        <select name="tmp" id="" class="form-select" placeholder="">
                                            <option value="{{$data->tmp}}" selected hidden>{{$data->tmp}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="tmp_galv" class="form-control" disabled value="{{$data->tmp_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>OBL & LIGHTNING PROTECTION</h2>
                        <table class="table mb-2">
                            <thead>
                                <tr>
                                    <th width="200">ITEM INSPECTION</th>
                                    <th width="325">CRITERIA</th>
                                    <th width="200">RESULT</th>
                                    <th width="150">GALVANIZE THICKNESS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>OBL SUPPORT</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="obl" id="" class="form-select" placeholder="">
                                            <option value="{{$data->obl}}" selected hidden>{{$data->obl}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="obl_galv" class="form-control" value="{{$data->obl_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>LIGHTNING PROTECTION</td>
                                    <td>
                                        NEW/STRAIGHT/GALVANIZED/CONFORM
                                    <td>
                                        <select name="spz" id="" class="form-select" placeholder="">
                                            <option value="{{$data->spz}}" selected hidden>{{$data->spz}}</option>
                                            <option value="REJECT">REJECT</option>
                                            <option value="ACCEPT">ACCEPT</option>
                                    </td>
                                    <td>
                                        <input type="text" name="spz_galv" class="form-control" value="{{$data->spz_galv}}" fdprocessedid="6bg3rh">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Checked by</label>
                    <input type="text" name="" class="form-control" placeholder="" value="" fdprocessedid="0p4zbp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Validation by</label>
                    <input type="text" name="" class="form-control" placeholder="" value="" fdprocessedid="0p4zbp">
                </div>
                <div class="mb-3 col-sm-4 col-md-2">
                    <label class="form-label">Result</label>
                    <select name="qcresult" class="form-select" fdprocessedid="fetob3">
                        <option value="{{$data->qcresult}}" selected hidden>{{$data->qcresult}}</option>
                        <option value="ON PROGRESS">ON PROGRESS</option>
                        <option value="REJECT">REJECT</option>
                        <option value="APPROVE">APPROVE</option>                        
                    </select>
                </div>
                <div class="mb-3 col-sm-8 col-md-10">
                    <label class="form-label">Remark</label>
                    <textarea name="remark" class="form-control" rows="5" placeholder="" value="{{$data->remark}}">{{$data->remark}}</textarea>
                </div>
                <div class="mb-2">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div> 
</div>


@endsection