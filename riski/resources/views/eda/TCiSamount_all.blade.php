@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Top_Customers_Sales_Amoun ALLt --}}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/1. Top_Customers_10_Sales_Amount.html')) !!}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/2. Top_Customers_20_Sales_Amount.html')) !!}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/3. Top_Customers_30_Sales_Amount.html')) !!}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/4. Top_Customers_40_Sales_Amount.html')) !!}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/5. Top_Customers_50_Sales_Amount.html')) !!}


                </div>
                <!-- /.container-fluid -->

            

@endsection