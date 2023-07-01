@extends('layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <h1 class="h3 mb-2 text-gray-800">Eclat 7 cluster</h1>
                 <br>
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 1</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat1.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 2</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat2.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 3</h5>  
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat3.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 4</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat4.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 5</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat5.html')) !!}
                 <br>

                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 6</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat6.html')) !!}
                 <br>
                 
                 <h5 class="h5 mb-2 text-gray-800 font-weight-bold">Cluster 7</h5> 
                 {!! file_get_contents(public_path('content/marketBasketAnalysis/3. ECLAT 7 CLUSTER/new_eclat7.html')) !!}

                </div>
                <!-- /.container-fluid -->

            

@endsection