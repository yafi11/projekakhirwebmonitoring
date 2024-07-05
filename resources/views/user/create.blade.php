@extends('template.default')


@section('content')
<div class="col-lg-12" >
    <form class="card" action="{{route('user.store')}}" method="post">
        @csrf
        <div class="card-header">
            <h3 class="card-title">New User</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 row">
                <label class="col-3 col-form-label">Name</label>
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="" value="" fdprocessedid="bvil8p">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-3 col-form-label">Email</label>
                <div class="col">
                    <input type="email" class="form-control" name="email" value="" aria-describedby="emailHelp" placeholder="Enter email" fdprocessedid="00w6he">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-3 col-form-label">Birth Date</label>
                <div class="col">
                    <input type="date" class="form-control" name="birthdate" value="" placeholder="" fdprocessedid="bvil8p">
                </div>
            </div>            
            <div class="mb-3 row">
                <label class="col-3 col-form-label">Position</label>
                <div class="col">
                    <select type="text" class="form-select" name="level" value="" placeholder="" fdprocessedid="bvil8p">
                        <option value="admin">Admin</option>
                        <option value="qualitycontrol">Quality Control</option>
                        <option value="procurement">Procurement</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary" fdprocessedid="zb97y">Save</button>
        </div>
    </form>
</div>

@endsection


