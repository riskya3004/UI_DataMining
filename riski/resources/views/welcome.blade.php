<!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A growing collection of ready to use components for the CSS framework Bootstrap 5">
  <meta name="author" content="Holger Koenemann">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Welcome</title>
  <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">

   <style>

/* inter-300 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('../fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('../fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('../fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('../fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('../fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('../fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

</style>

  </head>

  <body data-bs-spy="scroll" data-bs-target="#navScroll">


      <div class="w-100 overflow-hidden bg-gray-100" id="top">
  
<div class="container position-relative" style="">
  <div class="col-12 col-lg-8 mt-0  h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left" style="background-image: url({{ asset('img/home.svg') }}); margin-right: -100px">  </div>
<div class="row" style=" padding-left:50px">

<div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right" style="margin-right: 1000px ">
  <h1 class="display-1 fw-bold mt-5" style="color:#4E73DF">Data Mining Project</h1>
  <p class="lead" style="color: #4E73DF; font-size:20px; font-weight:400">Customer Segmentation and Market Basket Analysis</p>
  <a href="{{ url('/transactionPercentage1') }}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5" style="background-color: #4E73DF">Get Started</a>
</div>

</div>



<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
 <script>
 AOS.init({
   duration: 800, // values from 0 to 3000, with step 50ms
 });
 </script>

  </body>
</html>
