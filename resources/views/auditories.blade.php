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
    <link href="/path/to/bootstrap.min.css" rel="stylesheet">
</head>
<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
  #auditori
   {
    overflow: hidden;
    display: inline-block;
   }
</style>
@extends('layouts.myapp')

@section('title', 'Аудитории')

@section('sidebar')
@parent

@endsection

@section('content')
<table class="table">
 <thead>
    <tr>
    	<th>Номер</th>
    	<th>Число столов</th>
                 
            	 </tr>
            	 </thead>
  @foreach ($auditories as $auditori)
  <tbody>
            	<th scope="row">{{$auditori->namber}} </th>
                 <th scope="row"> {{$auditori->tables}}</th>
            
        </tbody>

        @endforeach
</table>
</br>
</br>
@endsection
 </body>
</html>