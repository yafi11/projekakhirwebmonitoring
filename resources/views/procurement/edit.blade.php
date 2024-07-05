@extends('template.default')

@php
    $title = 'Procurement';
    $pretitle = 'Edit Data'
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('procurement.update', $data->id)}}" class="" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Site ID</label>
                <input type="text" name="siteid" class="form-control" placeholder="" value="{{$data->siteid}}" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Site Name</label>
                <input type="text" name="sitename" class="form-control" placeholder="" value="{{$data->sitename}}" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Tower Type</label>
                <select type="text" name="towertype_id" id="" class="form-select" placeholder="" value="{{$data->towertype_id}}" fdprocessedid="tk6dr">
                    <option value="{{$data ->towertype_id }}" selected hidden>{{$data ->towertypes->name }}</option>
                    @foreach ($towertypes as $towertype)
                        <option value="{{$towertype->id}}">{{$towertype->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tower Factory</label>
                <select type="text" name="towerfactory_id" id="" class="form-select" placeholder="" value="{{$data->towerfactory_id}}" fdprocessedid="tk6dr">
                    <option value="{{$data ->towerfactory_id }}" selected hidden>{{$data ->towerfactory->name}}</option>
                    @foreach ($factories as $factory)
                        <option value="{{$factory->id}}">{{$factory->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">PO Number</label>
                <input type="text" name="ponumber" class="form-control" placeholder="" value="{{$data->ponumber}}" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Status PO</label>
                <select type="text" name="statuspo" id="" class="form-select" placeholder="" value="{{$data->statuspo}}" fdprocessedid="tk6dr">
                    <option value="{{$data ->statuspo }}" selected hidden>{{$data ->statuspo }}</option>                                            
                    <option value="ON PROGESS">ON PROGRESS</option>
                    <option value="CANCEL">CANCEL</option>
                    <option value="RELEASE">RELEASE</option>
                </select>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>


@endsection