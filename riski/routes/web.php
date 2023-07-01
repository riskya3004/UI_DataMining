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
Route::get('/transactionPercentage', function () {
    return view('eda.tpercentage');
});

Route::get('/uniqueCustomer', function () {
    return view('eda.ucostumer');
});

Route::get('/amountSales', function () {
    return view('eda.asales');
});

Route::get('/internalExternalMarkert', function () {
    return view('eda.iemarket');
});

Route::get('/topCustomer', function () {
    return view('eda.TCiSamount');
});

Route::get('/topCostumerEvent', function () {
    return view('eda.TCeventS');
});

Route::get('/topProduct', function () {
    return view('eda.TPiSamount');
});

Route::get('/mostSold', function () {
    return view('eda.mostsoldP');
});

Route::get('/topProductSales', function () {
    return view('eda.TPsalesamount');
});

//Customer Segmentation
Route::get('/chartCustomer', function () {
    return view('cSegmentation.chart');
});

Route::get('/kmeansElbow', function () {
    return view('cSegmentation.kmeans');
});

Route::get('/dbscan', function () {
    return view('cSegmentation.dbscan');
});

Route::get('/silhoutteScore', function () {
    return view('cSegmentation.silhoute');
});


//RFM
Route::get('/qqPlot', function () {
    return view('rfm.qq');
});

Route::get('/rfmBoxplot', function () {
    return view('rfm.boxplot');
});

Route::get('/rfmChart', function () {
    return view('rfm.rfmchart');
});

//Market Basket Analysis
Route::get('/apriori', function () {
    return view('mbAnalis.apriori');
});

Route::get('/fpGrowth', function () {
    return view('mbAnalis.fp');
});

Route::get('/eclat', function () {
    return view('mbAnalis.eclat');
});

Route::get('/fpGrowth', function () {
    return view('mbAnalis.fp');
});

//Dataset Terbentuk

Route::get('/datasetRFM', function () {
    return view('dataset.rfm');
});