@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Top Customer in sales amount</h1> --}}
                 
                 {{-- 2. Transaction by Month in 2010 --}}
                 {!! file_get_contents(public_path('content/eda/1. TRANSACTION PERCENTAGE/2. Transaction by Month in 2010.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection