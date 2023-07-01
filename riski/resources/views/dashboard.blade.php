@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Exploratory Data Analysis (EDA)</h5>

                 {{-- 1. Transaction  in 2010 and 2011.html --}}
                 {!! file_get_contents(public_path('content/eda/1. TRANSACTION PERCENTAGE/1. Transaction  in 2010 and 2011.html')) !!}
                
                 {{-- 1. Unique Count by Month in 2011 Bar Chart.html --}}
                 {!! file_get_contents(public_path('content/eda/2. UNIQUE CUST/1. Unique Count by Month in 2011 Bar Chart.html')) !!}

                 {{-- Amount Sales by Country.html --}}
                 {!! file_get_contents(public_path('content/eda/3. Amount Sales By Country/Amount Sales by Country.html')) !!}

                 {{-- Internal External Market.html --}}
                 {!! file_get_contents(public_path('content/eda/4. Internal External Market/Internal External Market.html')) !!}

                 {{-- Top_Customers_10_Sales_Amount.html --}}
                 {!! file_get_contents(public_path('content/eda/5. TOP CUST IN SALES AMOUNT/1. Top_Customers_10_Sales_Amount.html')) !!}

                 {{-- Top_Customer_By_Event_Sales_10.html --}}
                 {!! file_get_contents(public_path('content/eda/6. TOP CUST EVENT SALES/1. Top_Customer_By_Event_Sales_10.html')) !!}

                 {{-- Top_Products_Sales_Amount --}}
                 {!! file_get_contents(public_path('content/eda/7. TOP PRODUCTS IN SALES AMOUNT/1. Top_Products_Sales_Amount_10.html')) !!}

                 {{-- Top_Most_Sold_Products_10 --}}
                 {!! file_get_contents(public_path('content/eda/8. MOST SOLD PRODUCTS/1. Top_Most_Sold_Products_10.html')) !!}


                 {!! file_get_contents(public_path('content/eda/9. TOP PROD SALES AMOUNT/1. Top_Products_Sales_Amount_10.html')) !!}
                 <br>


                 <br>
                 {{-- Customer Segmentation --}}
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Customer Segmentation</h5>

                 {{-- 1. chart_3_clusters.html --}}
                 {!! file_get_contents(public_path('content/cust_seg/1. CHART CUST SEG/1. chart_3_clusters.html')) !!}

                 {{-- K-means Cluster Plot --}}
                 <h5 class="h7 mb-2 text-gray-800 font-weight-normal font-italic">K-means Cluster Plot</h5>
                 {!! file_get_contents(public_path('content/cust_seg/2. KMEANS ELBOW/1. kmeans_cluster_plot.html')) !!}

                 {{-- result_DBSCAN --}}
                 {{-- <h7 class="h7 mb-2 text-gray-800 font-weight-bold">5 CLUSTER SILHOUETTE COOEFFICIENT</h5>
                 <img src="content/cust_seg/3. DBSCAN/result_DBSCAN.png" alt="" width="700px"> --}}


                 {{-- 5 CLUSTER SILHOUETTE COOEFFICIENT.png --}}
                 {{-- <img src="content/cust_seg/4. SILHOUETTE 3 5 7/1. Cluster Silhouette Cooefficient/5 CLUSTER SILHOUETTE COOEFFICIENT.png" alt=""> --}}

                 {{-- result_3_clusters --}}
                 {{-- <img src="content/cust_seg/4. SILHOUETTE 3 5 7/2. Result Clusters/result_3_clusters.png" alt=""> --}}

                 


                </div>
                    
                </div>

            

@endsection