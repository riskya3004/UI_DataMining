<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//EDA

// Transaction Percentage
Route::get('/transactionPercentage1', function () {
    return view('eda.tpercentage_2010and2011');
});
Route::get('/transactionPercentage2', function () {
    return view('eda.tpercentage_Monthin2010');
});
Route::get('/transactionPercentage3', function () {
    return view('eda.tpercentage_Monthin2011');
});

// uniqueCustomer
Route::get('/uniqueCustomer1', function () {
    return view('eda.ucostumer_Monthin2011BarChart');
});
Route::get('/uniqueCustomer2', function () {
    return view('eda.ucostumer_Monthin2011LineChart');
});


// amount sales by country
Route::get('/amountSales', function () {
    return view('eda.asales');
});

// Internal External Market
Route::get('/internalExternalMarkert', function () {
    return view('eda.iemarket');
});

// Top Customer in Sales Amount
Route::get('/topCustomerall', function () {
    return view('eda.TCiSamount_all');
});
Route::get('/topCustomer1', function () {
    return view('eda.TCiSamount_10_sales');
});
Route::get('/topCustomer2', function () {
    return view('eda.TCiSamount_20_sales');
});
Route::get('/topCustomer3', function () {
    return view('eda.TCiSamount_30_sales');
});
Route::get('/topCustomer4', function () {
    return view('eda.TCiSamount_40_sales');
});
Route::get('/topCustomer5', function () {
    return view('eda.TCiSamount_50_sales');
});


// Top Customer Event Sales
Route::get('/topCostumerEventall', function () {
    return view('eda.TCeventS_all');
});
Route::get('/topCostumerEvent1', function () {
    return view('eda.TCeventS_10');
});
Route::get('/topCostumerEvent2', function () {
    return view('eda.TCeventS_20');
});
Route::get('/topCostumerEvent3', function () {
    return view('eda.TCeventS_30');
});
Route::get('/topCostumerEvent4', function () {
    return view('eda.TCeventS_40');
});
Route::get('/topCostumerEvent5', function () {
    return view('eda.TCeventS_50');
});


// Top Products in Sales Amount
Route::get('/topProductall', function () {
    return view('eda.TPiSamount_all');
});
Route::get('/topProduct1', function () {
    return view('eda.TPiSamount_10');
});
Route::get('/topProduct2', function () {
    return view('eda.TPiSamount_20');
});
Route::get('/topProduct3', function () {
    return view('eda.TPiSamount_30');
});
Route::get('/topProduct4', function () {
    return view('eda.TPiSamount_40');
});
Route::get('/topProduct5', function () {
    return view('eda.TPiSamount_50');
});



// MOST SOLD PRODUCTS
Route::get('/mostSoldall', function () {
    return view('eda.mostsoldP_all');
});
Route::get('/mostSold1', function () {
    return view('eda.mostsoldP_10');
});
Route::get('/mostSold2', function () {
    return view('eda.mostsoldP_20');
});
Route::get('/mostSold3', function () {
    return view('eda.mostsoldP_30');
});
Route::get('/mostSold4', function () {
    return view('eda.mostsoldP_40');
});
Route::get('/mostSold5', function () {
    return view('eda.mostsoldP_50');
});


// Top Products Sales
Route::get('/topProductSalesall', function () {
    return view('eda.TPsalesamount_all');
});
Route::get('/topProductSales1', function () {
    return view('eda.TPsalesamount_10');
});
Route::get('/topProductSales2', function () {
    return view('eda.TPsalesamount_20');
});
Route::get('/topProductSales3', function () {
    return view('eda.TPsalesamount_30');
});
Route::get('/topProductSales4', function () {
    return view('eda.TPsalesamount_40');
});
Route::get('/topProductSales5', function () {
    return view('eda.TPsalesamount_50');
});




//Customer Segmentation

// Chart Customer Segmentation
Route::get('/chartCustomerall', function () {
    return view('cSegmentation.chart_all');
});
Route::get('/chartCustomer1', function () {
    return view('cSegmentation.chart_1');
});
Route::get('/chartCustomer2', function () {
    return view('cSegmentation.chart_2');
});
Route::get('/chartCustomer3', function () {
    return view('cSegmentation.chart_3');
});


// Kmeans Elbow
Route::get('/kmeansElbowall', function () {
    return view('cSegmentation.kmeans_all');
});
Route::get('/kmeansElbow1', function () {
    return view('cSegmentation.kmeans_cluster');
});
Route::get('/kmeansElbow2', function () {
    return view('cSegmentation.kmeans_elbow');
});


// DBSCAN
Route::get('/dbscan', function () {
    return view('cSegmentation.dbscan');
});


// Silhoutte Score
Route::get('/silhoutteScore1', function () {
    return view('cSegmentation.silhoute_cluster');
});
Route::get('/silhoutteScore2', function () {
    return view('cSegmentation.silhoute_result');
});


//RFM

// QQ Plot RFM 
Route::get('/qqPlotall', function () {
    return view('rfm.qq_all');
});
Route::get('/qqPlot1', function () {
    return view('rfm.qq_frequency');
});
Route::get('/qqPlot2', function () {
    return view('rfm.qq_monetory');
});
Route::get('/qqPlot3', function () {
    return view('rfm.qq_recency');
});


// Boxplot 
// Amount
Route::get('/rfmBoxplot_all_7_clusters', function () {
    return view('rfm.boxplot_all_7_clusters');
});
Route::get('/rfmBoxplot_amount_all', function () {
    return view('rfm.boxplot_amount_all');
});
Route::get('/rfmBoxplot_amount_1', function () {
    return view('rfm.boxplot_amount_1');
});
Route::get('/rfmBoxplot_amount_2', function () {
    return view('rfm.boxplot_amount_2');
});
Route::get('/rfmBoxplot_amount_3', function () {
    return view('rfm.boxplot_amount_3');
});

// Frequency
Route::get('/rfmBoxplot_frequency_all', function () {
    return view('rfm.boxplot_frequency_all');
});
Route::get('/rfmBoxplot_frequency_1', function () {
    return view('rfm.boxplot_frequency_1');
});
Route::get('/rfmBoxplot_frequency_2', function () {
    return view('rfm.boxplot_frequency_2');
});
Route::get('/rfmBoxplot_frequency_3', function () {
    return view('rfm.boxplot_frequency_3');
});

// Recency
Route::get('/rfmBoxplot_recency_all', function () {
    return view('rfm.boxplot_recency_all');
});
Route::get('/rfmBoxplot_recency_1', function () {
    return view('rfm.boxplot_recency_1');
});
Route::get('/rfmBoxplot_recency_2', function () {
    return view('rfm.boxplot_recency_2');
});
Route::get('/rfmBoxplot_recency_3', function () {
    return view('rfm.boxplot_recency_3');
});



// RFM Chart
Route::get('/rfmChartall', function () {
    return view('rfm.rfmchart_all');
});
Route::get('/rfmChart1', function () {
    return view('rfm.rfmchart_frequencyAmount');
});
Route::get('/rfmChart2', function () {
    return view('rfm.rfmchart_recencyAmount');
});
Route::get('/rfmChart3', function () {
    return view('rfm.rfmchart_rmfLog3d');
});
Route::get('/rfmChart4', function () {
    return view('rfm.rfmchart_frequencylogAmountlog');
});
Route::get('/rfmChart5', function () {
    return view('rfm.rfmchart_recencylogAmountlog');
});




//Market Basket Analysis

// Apriori
Route::get('/apriori', function () {
    return view('mbAnalis.apriori');
});

// Fp-Growth
Route::get('/fpGrowth', function () {
    return view('mbAnalis.fp');
});

// Eclat
Route::get('/eclat', function () {
    return view('mbAnalis.eclat');
});

Route::get('/fpGrowth', function () {
    return view('mbAnalis.fp');
});

//Dataset Terbentuk

// Dataset RFM 7 Cluster
Route::get('/datasetRFM', function () {
    return view('dataset.drfm_7clusters');
});

// Dataset MBA 7 Cluster
Route::get('/datasetMBA', function () {
    return view('dataset.dmba_7clusters');
});