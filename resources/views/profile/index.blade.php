@extends('template.default')


@section('content')
<div class="col-lg-12" >
    <form class="card">
      <div class="card-header">
        <h3 class="card-title">Profile</h3>
      </div>
      <div class="card-body">
        <div class="mb-3 row">
          <label class="col-3 col-form-label">Name</label>
          <div class="col">
            <input type="text" class="form-control" disabled="" placeholder="" value="{{auth()->user()->name}}" fdprocessedid="bvil8p">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-3 col-form-label">Email</label>
          <div class="col">
            <input type="email" class="form-control" disabled="" value="{{auth()->user()->email}}" aria-describedby="emailHelp" placeholder="Enter email" fdprocessedid="00w6he">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-3 col-form-label">Password</label>
          <div class="col">
            <input type="password" class="form-control" disabled="" value="{{ substr(auth()->user()->password, 0, 5)}}" placeholder="Password" fdprocessedid="bvil8p">
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <a class="btn btn-warning" href="{{ route('profile.edit')}}" >Edit</a>
      </div>
    </form>
</div>



@endsection


