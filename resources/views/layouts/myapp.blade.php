<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!--  <title>{{ config('app.name', 'Laravel') }}</title> -->
<title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
.backgrounds {
/*float:none;*/
min-height:800px;
margin:0 auto;
position: relative;
width:100%;
background: #cfced3 center 0;
background-position: center top;
}

.bg-holder {
padding: 75px 0 1px;
position:relative;
background: #2b2935;

}

.banner {
margin:0 auto;
position:relative;
width:1230px;
background: #2b2935;
}

.logo {
margin: 0 auto;
min-height:47px;
padding:20px 0 18px;
width:240px;
background:#f76e5d;
color: #e0dfe5;
font-family: 'Fjalla One', sans-serif;
font-size:49px;
letter-spacing:0;
text-align:center;
text-transform:uppercase;
}

</style>
  <body>
   @section('sidebar')
      <div class="backgrounds">
      <header class="bg-holder">
        <div class="banner">
          <div class="logo">
  Проект
          </div>

      </br></br></br>
        </div>
   </header>
          
    @show

   <div class="container">
      @yield('content')
    </div>

</div>
  </body>
</html>

    <!-- Scripts -->
   <!--  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
 -->