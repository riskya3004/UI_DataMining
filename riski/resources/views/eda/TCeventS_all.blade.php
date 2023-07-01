@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Internal External Market</h1> --}}

                 {{-- Top_Customer_By_Event_Sales --}}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/1. Top_Customer_By_Event_Sales_10.html')) !!}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/2. Top_Customer_By_Event_Sales_20.html')) !!}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/3. Top_Customer_By_Event_Sales_30.html')) !!}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/3. Top_Customer_By_Event_Sales_30.html')) !!}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/4. Top_Customer_By_Event_Sales_40.html')) !!}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/5. Top_Customer_By_Event_Sales_50.html')) !!}


                </div>
                <!-- /.container-fluid -->

            

@endsection