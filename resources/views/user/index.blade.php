@extends('template.default')


@section('content')
<div class="row g-2 align-items-center">
  <div class="col">
    <!-- Page pre-title -->
    <h2 class="page-title">
      User Database
    </h2>
  </div>
  <!-- Page title actions -->
  <div class="col-auto mb-3 ms-auto d-print-none">
    <div class="btn-list">
      <a href="{{route('user.create')}}" class="btn btn-primary d-none d-sm-inline-block">
        Create new user
      </a>
    </div>
  </div>
</div>

<div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter card-table table-striped">
          <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->level}}</td>
                <td>
                    <form action="{{ route ('user.destroy', $item->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @endforeach                   
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection