@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">DBSCAN</h1>
                 <br>

                 {{-- result_DBSCAN --}}
                
                 {{-- <h5 class="h5 mb-2 text-gray-800 font-weight-bold">DBSCAN Cluster</h5> --}}
                 {{-- {!! file_get_contents(public_path('content/cust_seg/3. DBSCAN/recency/DBSCAN CLUSTER.html')) !!} --}}
                 {!! file_get_contents(public_path('content/cust_seg/3. DBSCAN/DBSCAN CLUSTER.html')) !!}
                 {{-- {!! file_get_contents(public_path('content/rfmanalis/2. RFM BOXPLOT/recency/1. chart_recency_3_clusters.html')) !!} --}}
                <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">DBSCAN Result</h5>
                 <img src="content/cust_seg/3. DBSCAN/result_DBSCAN.png" alt="" style="width:900px">
                 {{-- <img src="" alt="content/cust_seg/2. KMEANS ELBOW/3. DBSCAN/result_DBSCAN.png"> --}}
                 {{-- {!! file_get_contents(public_path('content/cust_seg/3. DBSCAN/result_DBSCAN.html')) !!} --}}

                </div>
                <!-- /.container-fluid -->

            

@endsection