@extends('template.default')

@section('content')
<div class="row g-2 align-items-center">
  <div class="col">
    <!-- Page pre-title -->
    <h2 class="page-title">
      Procurement
    </h2>
  </div>
  <!-- Page title actions -->  
</div>

<div class="row g-2 align-items-center my-3">
  <div class="col-lg-4">
    <form action="" method="GET">
      <div class="input-group">
        <input type="text" value="" class="form-control" name="keyword" placeholder="keyword" fdprocessedid="1228xl">
        <button class="input-group-text">Search</button>
      </div>
    </form>
  </div>
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4">
    <div class="float-end">
      <div class="btn-list">
        <a href="{{route('procurement.create')}}" class="btn btn-primary d-none d-sm-inline-block">
          Create new
        </a>
      </div>
    </div>
  </div>
</div>

<div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter card-table table-striped">
          <thead>
            <tr>
                <th>Site ID</th>
                <th>Site Name</th>
                <th>Tower Type</th>
                <th>Tower Fabrication</th>
                <th>PO Number</th>
                <th>Status PO</th>
                <th>Created at</th>
                <th class="w-1">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data ->siteid }}</td>
                <td>{{$data ->sitename }}</td>
                <td>{{$data ->towertypes->name }}</td>
                <td>{{$data ->towerfactory->name}}</td>
                <td>{{$data ->ponumber }}</td>
                <td>{{$data ->statuspo }}</td>
                <td>{{ $data->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('procurement.edit', $data->id)}}" class="btn btn-warning btn-sm mb-1">Edit</a>
                    <form action="{{ route ('procurement.destroy', $data->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @endforeach                   
          </tbody>
        </table>
      </div>
      <div class="my-3">
        {{$datas->links()}}
      </div>
    </div>
</div>

@endsection