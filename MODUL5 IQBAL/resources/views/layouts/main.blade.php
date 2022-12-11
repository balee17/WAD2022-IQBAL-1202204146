<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    {{-- My Style --}}
    <link rel="stylesheet" href="assets/css/style.css">
    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>MODUL5</title>
</head>

<body>


    <div class="container mt-4">
      @yield('container')
    </div>

    @if(Session::has('success'))
    <div class='container-fluid d-flex justify-content-end' style='position:absolute;bottom:0;right:0;'>
        <div class='toast mb-3 show' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>

            <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#7CFC00'></rect>
            </svg>

            <strong class='me-auto'>Alert !</strong>
            <small>1 mins ago</small>
            <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
        </div>
        <div class='toast-body bg-light text-success'>
            {{ Session::get('success') }}
        </div>
        </div>
    </div>
  @endif
  @if(Session::has('error'))
  <div class='container d-flex opacity-25 justify-content-end' style='position:absolute;top:0;right:0;'>
      <div class='toast mt-3 show opacity-50' role='alert' aria-live='assertive' aria-atomic='true'>
      <div class='toast-header bg-warning text-white'>

          <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#CD5C5C'></rect>
          </svg>

          <strong class='me-auto'>Alert !</strong>
          <small>just now</small>
          <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
      </div>
      <div class='toast-body bg-light text-danger'>
          {{ Session::get('error') }}
      </div>
      </div>
  </div>
@endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    {{-- toastr js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>