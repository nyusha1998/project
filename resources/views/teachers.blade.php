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
   #teacher
   {
    overflow: hidden;
    display: inline-block;
   }
</style>
<body>
@extends('layouts.myapp')

@section('title', 'Преподаватели')

@section('sidebar')
@parent

@endsection

@section('content')
<table class="table">
 <thead>
    <tr>
    	<th>Номер</th>
    	<th>ФИО</th>
                 <th>Электронная почта</th>
            	 </tr>
            	 </thead>
 
 @foreach ($teachers as $teacher)
            
            	<tbody>
            		 <th scope="row">{{$teacher->id}}</th>
            	<th scope="row">{{$teacher->NSP}} </th>
                 <th scope="row"> {{$teacher->email}}</th>
            
        </tbody>


                 
        @endforeach 
@endsection
 </body>
</html>