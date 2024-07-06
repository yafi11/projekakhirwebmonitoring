<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    @include('template.partials.head')
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Sidebar -->
      @include('template.partials.sidebar')
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                  PT. Fiberhome Technologies Indonesia
                </h2>
              </div>
              <!-- Page title actions -->
              
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            
            @if (session('success'))
            <div class="alert alert-success" role="alert">
              <div class="d-flex">
                <div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                </div>
                <div>
                  {{session('success')}}
                </div>
              </div>
            </div>
            @endif

            @if (session('danger'))
            <div class="alert alert-danger" role="alert">
              <div class="d-flex">
                <div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
                </div>
                <div>
                  {{session('danger')}}
                </div>
              </div>
            </div>
            @endif

            @if (session()->has('message'))
            <div class="alert alert-info">
              <div class="d-flex">
                <div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
                </div>
                <div>
                  {{ session('message') }}
                </div>
              </div>
            </div>
            @endif

            @yield('content')

          </div>
        </div>
        <!-- Page footer -->
        @include('template.partials.footer')
      </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    @include('template.partials.scripts')
  </body>
</html>