@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Top Customer in sales amount</h1> --}}
                 
                 {{-- Top_Products_Sales_Amount --}}
                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/1. Top_Products_Sales_Amount_10.html')) !!}
                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/2. Top_Products_Sales_Amount_20.html')) !!}
                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/3. Top_Products_Sales_Amount_30.html')) !!}
                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/4. Top_Products_Sales_Amount_40.html')) !!}
                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/5. Top_Products_Sales_Amount_50.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection