@extends('template.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('procurement.store')}}" class="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Site ID</label>
                <input type="text" name="siteid" class="form-control" placeholder="" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Site Name</label>
                <input type="text" name="sitename" class="form-control" placeholder="" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Tower Type</label>
                <select type="text" name="towertype_id" id="" class="form-select" placeholder="" value="">
                    <option></option>
                    @foreach ($towertypes as $towertype)
                        <option value="{{$towertype->id}}">{{$towertype->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tower Factory</label>
                <select type="text" name="towerfactory_id" id="" class="form-select" placeholder="" value="">                                            
                    <option></option>
                    @foreach ($towerfactories as $factory)
                        <option value="{{$factory->id}}">{{$factory->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">PO Number</label>
                <input type="text" name="ponumber" class="form-control" placeholder="" fdprocessedid="ilxcm8">
            </div>
            <div class="mb-3">
                <label class="form-label">Status PO</label>
                <select type="text" name="statuspo" id="" class="form-select" placeholder="" value="">
                    <option></option>
                    <option value="ON PROGESS">ON PROGRESS</option>
                    <option value="CANCEL">CANCEL</option>
                    <option value="RELEASE">RELEASED</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


@endsection