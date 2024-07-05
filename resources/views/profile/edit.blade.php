@extends('template.default')


@section('content')
<div class="col-lg-12" >
    <form class="card" action="{{route ('profile.update')}}" method="post">
      @csrf
      @method('PUT')
      <div class="card-header">
        <h3 class="card-title">Profile</h3>
      </div>
      <div class="card-body">
        <div class="mb-3 row">
          <label class="col-3 col-form-label">Name</label>
          <div class="col">
            <input type="text" class="form-control" name="name" placeholder="" value="{{auth()->user()->name}}" fdprocessedid="bvil8p">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-3 col-form-label">Email</label>
          <div class="col">
            <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" aria-describedby="emailHelp" placeholder="Enter email" fdprocessedid="00w6he">
          </div>
        </div>        
        <div class="mb-3 row">
          <label class="col-3 col-form-label">New Password</label>
          <div class="col">
            <input type="password" class="form-control" name="password" value="" placeholder="Password" fdprocessedid="bvil8p">
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary" fdprocessedid="zb97y">Save</button>
      </div>
    </form>
</div>



@endsection


