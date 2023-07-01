@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">Apriori 7 cluster</h1>
                 <br>
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 1</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba1_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 2</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba2_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 3</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba3_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 4</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba4_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 5</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba5_rules_subset.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 6</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba6_rules_subset.html')) !!}
                 <br>
                 
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 7</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/1. APRIORI 7 CLUSTER/mba7_rules_subset.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection