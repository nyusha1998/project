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
  
</style>
@extends('layouts.myapp')

@section('title', 'Предметы')

@section('sidebar')
@parent

@endsection

@section('content')
<table class="table">
 <thead>
    <tr>
    	<th>Номер</th>
    	<th>Название</th>
                 <th>Краткое содержание</th>
            	 </tr>
            	 </thead>
@foreach ($subjects as $subject)
<tbody>
            		 <th scope="row">{{$subject->id}}</th>
            	<th scope="row">{{$subject->name}} </th>
                 <th scope="row"> {{$subject->about}}</th>
            
        </tbody>
          


        @endforeach     
@endsection
 </body>
</html>