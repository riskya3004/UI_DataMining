@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Chart Amount--}}
                 {!! file_get_contents(public_path('content/rfmanalis/2. RFM BOXPLOT/amount/1. chart_amount_3_clusters.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection