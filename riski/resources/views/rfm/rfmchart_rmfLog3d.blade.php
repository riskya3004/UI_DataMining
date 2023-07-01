@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- RFM Log 3D--}}
                 {!! file_get_contents(public_path('content/rfmanalis/3. RFM CHART/3. RFM Log 3D.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection