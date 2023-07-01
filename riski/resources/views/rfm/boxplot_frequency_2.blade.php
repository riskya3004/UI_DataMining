@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Frequency--}}
                 {!! file_get_contents(public_path('content/rfmanalis/2. RFM BOXPLOT/frequency/2. chart_frequency_5_clusters.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection