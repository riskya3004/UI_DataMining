@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Amount sales by country</h1> --}}

                 {{-- Kmeans Elbow  --}}
                 {!! file_get_contents(public_path('content/cust_seg/2. KMEANS ELBOW/2. kmeans_elbow_plot.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection