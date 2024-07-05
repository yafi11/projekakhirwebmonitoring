@extends('template.default')


@section('content')
<div class="row g-2 align-items-center">
  <div class="col">
    <!-- Page pre-title -->
    <h2 class="page-title">Pregress Monitoring</h2>
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
                <th>Tower Factory</th>
                <th>PO Number</th>
                <th>Status PO</th>
                <th>Status Material</th>
                <th>Forecast Date</th>
                <th>QC Check Result</th>
                <th>Acceptance Date</th>
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
                <td>{{$data ->statuspo}}</td>
                <td>{{$data ->towerprogress}}</td>
                <td>{{$data ->forecastdate}}</td>
                <td>{{$data ->qcresult}}</td>
                <td>{{$data ->acceptdate}}</td>
            </tr>
            @endforeach                   
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection