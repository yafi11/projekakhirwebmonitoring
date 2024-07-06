@extends('template.default')


@section('content')
<div class="col-auto mb-3 ms-auto d-print-none">
  <div class="col">
    <h2 class="page-title">
      Quality Control Monitoring
    </h2>
  </div>
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
                <th>Status Material</th>
                <th>QC Check Result</th>
                <th>Updated at</th>
                <th>Details</th>
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
                <td>{{$data ->towerprogress}}</td>
                <td>{{$data ->qcresult}}</td>
                <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                <td>
                  <a href="#" class="btn btn-secondary btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#modal-detail">
                    Detail
                  </a>
                </td>
                <td>
                    <a href="{{ route('qcmonitor.edit', $data->id)}}" class="btn btn-warning btn-sm mb-1">Edit</a>
                    <form action="{{ route ('qcmonitor.destroy', $data->id)}}" method="post">
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

<div class="modal modal-blur fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        @include('qcmonitor.modal.detail')
      </div>
  </div>
</div>

@endsection