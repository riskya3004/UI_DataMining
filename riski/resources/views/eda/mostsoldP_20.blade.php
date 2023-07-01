@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Top_Most_Sold_Products --}}
                 {!! file_get_contents(public_path('content/eda/8. MOST SOLD PRODUCTS/2. Top_Most_Sold_Products_20.html')) !!}


                </div>
                <!-- /.container-fluid -->

            

@endsection