@extends('template.default')


@section('content')
<div class="row row-cards">
    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm mb-3">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-primary text-white avatar">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-broadcast-tower"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16.616 13.924a5 5 0 1 0 -9.23 0" /><path d="M20.307 15.469a9 9 0 1 0 -16.615 0" /><path d="M9 21l3 -9l3 9" /><path d="M10 19h4" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                TOTAL PO
              </div>
              <div class="text-secondary font-weight-medium">
                {{ array_sum($jumlah_po) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-twitter text-white avatar">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21h18" /><path d="M5 21v-12l5 4v-4l5 4h4" /><path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" /><path d="M9 17h1" /><path d="M14 17h1" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                ON PRODUCTION
              </div>
              <div class="text-secondary font-weight-medium">
                {{ array_sum($qc_result) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-4">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-green text-white avatar">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" /><path d="M9 12l2 2l4 -4" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                FINISH GOOD
              </div>
              <div class="text-secondary font-weight-medium">
                {{ array_sum($status_material) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="col-12">
  <div class="card mb-3">
    <div class="card-body">
      <h2>Weekly Production Progress</h2>
      <div id="chart-completion-tasks-8"></div>
    </div>
  </div>
</div>

<div class="row row-cards">
  <div class="col-lg-7 " >
    <div class="card mb-3" >
      <div class="card-body">
        <h3>Production Progress Table</h3>
        <table class="table table-vcenter card-table table-striped">
          <thead>
            <tr>
              <th>Tower Fabrication</th>
              <th>Total PO</th>
              <th>ON PRODUCTION</th>
              <th>QC APPROVE</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($towerfactories as $item)
            <tr>
              <td>{{$item ->name}}</td>
              <td style="text-align: center">{{$jumlah_po[$item->name]}}</td>
              <td style="text-align: center">{{$status_material[$item->name]}}</td>
              <td style="text-align: center">{{$qc_result[$item->name]}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>  
      </div>
    </div>
  </div>
  
  <div class="col-lg-5">
    <div class="card mb-3">
      <div class="card-body">
        <h3>Production Progress Chart</h3>
        <div id="chart-completion-tasks-9"></div>
      </div>
    </div>
  </div>
</div>

<script>
  //Production Progress Chart
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    var onProductionData = @json($status_material);
    var qcapprove = @json($qc_result);
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-completion-tasks-9'), {
        chart: {
            type: "bar",
            fontFamily: 'inherit',
            height: 240,
            parentHeightOffset: 0,
            toolbar: {
                show: false,
            },
            animations: {
                enabled: false
            },
            stacked: true,
        },
        plotOptions: {
            bar: {
                columnWidth: '50%',
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: 1,
        },
        series: [{
            name: "FINISH GOOD",
            data: Object.values(qcapprove)
            
        },{
            name: "ON PRODUCTION",
            data: Object.values(onProductionData)
        }],
        tooltip: {
            theme: 'dark',
            formatter: function (value) {
                return Math.round(value);
            }
        },
        grid: {
            padding: {
                top: -20,
                right: 0,
                left: 0,
                bottom: -4
            },
            strokeDashArray: 4,
        },
        xaxis: {
            labels: {
                padding: 0,
                formatter: function (value) {
                      return Math.round(value);
                }
            },
            tooltip: {
                enabled: false
            },
            axisBorder: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        labels: [
            'DHJ', 'TJI', 'KDT', 'BTU', 'KBK'
        ],
        colors: [tabler.getColor("primary"), tabler.getColor("red")],
        legend: {
            show: false,
        },
    })).render();
  });
  // @formatter:on
</script>

<script>
  //Weekly Progress Chart
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    // Variabel untuk menyimpan data chart
    var chartData = @json($qc_result);
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-completion-tasks-8'), {
        chart: {
            type: "bar",
            fontFamily: 'inherit',
            height: 240,
            parentHeightOffset: 0,
            toolbar: {
                show: false,
            },
            animations: {
                enabled: false
            },
        },
        plotOptions: {
            bar: {
                columnWidth: '30%',
            }
        },
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: 0.5,
        },
        series: Object.keys(chartData).map(function (towerName) {
            return {
                name: towerName,
                data: Object.values(chartData[towerName])
            };
        }),
        grid: {
            padding: {
                top: -20,
                right: 0,
                left: -4,
                bottom: -4
            },
            strokeDashArray: 4,
        },
        xaxis: {
            type: 'datetime',
            categories: [
                
            ].map(function (date) {
                return new Date(date).getTime();
            }),
            labels: {
                padding: 0,
            },
            tooltip: {
                enabled: false
            },
            axisBorder: {
                show: false,
            },
          },
        yaxis: {
            labels: {
                padding: 4
            },
        },
        labels: [
            
        ],
        colors: [tabler.getColor("primary"), tabler.getColor("green"), tabler.getColor("yellow"), tabler.getColor("red"), tabler.getColor("purple")],
        legend: {
            show: false,
        },
    })).render();
  });
  // @formatter:on
</script>


@endsection