
{{-- test --}}
@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">QQ Plot RFM</h1>
                 <br>
                
                {{-- Recency --}}
                <h5 class="h5 mb-2 text-gray-800 font-weight-bold">QQ plot Recency</h5>
                <img src="content/rfmanalis/1. QQ PLOT RFM/QQ_plot_Recency.png" alt="" style="width: 900px">
                <br>
                <br>

                <h5 class="h5 mb-2 text-gray-800 font-weight-bold">QQ plot Frequency</h5>
                {{-- Frequency--}}
                <img src="content/rfmanalis/1. QQ PLOT RFM/QQ_plot_Frequency.png" alt="" style="width: 900px">
                <br>

                <br>
                <br>
                {{-- Monetory --}}
                <h5 class="h5 mb-2 text-gray-800 font-weight-bold">QQ Plot Monetary</h5>
                <img src="content/rfmanalis/1. QQ PLOT RFM/QQ_Plot_Monetary.png" alt="" style="width: 900px">
                <br>
                
                <br>
                <br>
                

                </div>
                <!-- /.container-fluid -->

            

@endsection