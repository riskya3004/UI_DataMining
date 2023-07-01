@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Top Customer in sales amount</h1> --}}
                 
                 {{-- 1. Unique Count by Month in 2011 Bar Chart.html --}}
                 {!! file_get_contents(public_path('content/eda/2. UNIQUE CUST/1. Unique Count by Month in 2011 Bar Chart.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection