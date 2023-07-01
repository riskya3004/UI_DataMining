@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Top Customer in sales amount</h1> --}}
                 
                 {{-- Top_Products_Sales_Amount --}}
                 {!! file_get_contents(public_path('content/eda/7. TOP PRODUCTS IN SALES AMOUNT/3. Top_Products_Sales_Amount_30.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection