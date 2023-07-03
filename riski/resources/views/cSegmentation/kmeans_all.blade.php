@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 {{-- <h1 class="h3 mb-2 text-gray-800">Amount sales by country</h1> --}}

                 {{-- Kmeans Elbow  --}}
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">K-Means Elbow Plot</h5>
                 {!! file_get_contents(public_path('content/cust_seg/2. KMEANS ELBOW/2. kmeans_elbow_plot.html')) !!}
                 

                 <br>
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">K-Means Cluster Plot</h5>
                 {!! file_get_contents(public_path('content/cust_seg/2. KMEANS ELBOW/1. kmeans_cluster_plot.html')) !!}
                <br>

                <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Result 7 Clusters</h5>
                <img src="content/cust_seg/4. SILHOUETTE 3 5 7/2. Result Clusters/result_7_clusters.png" alt="" width="900px">
                <br>
                <br>

                <br>
                <h5 class="h5 mb-2 text-gray-800 font-weight-bold">7 CLUSTER SILHOUETTE COOEFFICIENT</h5>
                <img src="content/cust_seg/4. SILHOUETTE 3 5 7/1. Cluster Silhouette Cooefficient/7 CLUSTER SILHOUETTE COOEFFICIENT.png" alt="" width="500">

                </div>
                <!-- /.container-fluid -->

            

@endsection