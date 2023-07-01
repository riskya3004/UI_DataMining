@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Amount sales by country</h1> --}}

                 {{-- Chart Customer Segmentation --}}
                 {!! file_get_contents(public_path('content/cust_seg/1. CHART CUST SEG/2. chart_5_clusters.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection