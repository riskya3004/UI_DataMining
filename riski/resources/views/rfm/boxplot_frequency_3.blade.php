@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Frequency--}}
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Frequency Chart 7 Clusters</h5>
                 {!! file_get_contents(public_path('content/rfmanalis/2. RFM BOXPLOT/frequency/3. chart_frequency_7_clusters.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection