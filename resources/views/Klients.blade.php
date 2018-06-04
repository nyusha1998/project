@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<style>

   #klients
   {
    overflow: hidden;
    display: inline-block;
    font-style: italic;
    text-shadow: 1px 1px 0 #45A0A4,
               1px -1px 0 #45A0A4,
               -1px 1px 0 #45A0A4,
              -1px -1px 0 #45A0A4;
  color: white;
  transition: all 1s;
font-size:20px;
   }
   h1{
   	 color: #45A0A4;
  background: -webkit-linear-gradient(right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background: -o-linear-gradient(right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background: linear-gradient(to right, #E3612C 0, #E3612C 33.3%, #FCCE30 33.3%, #FCCE30 66.6%, #58554B 66.6%, #58554B) bottom no-repeat;
  background-size: 40% 5px;
   }
  a{
  	margin-right:20px;
  	font-style: italic;
  	text-shadow: 1px 1px 0 red,
               1px -1px 0 red,
               -1px 1px 0 red,
              -1px -1px 0 red;
  color: white;
  transition: all 1s;
  font-size:20px;
  }
</style>

<center><h1>Клиенты</h1>
    <div id="klients">
        @foreach ($klients as $klient)
            <div>Имя: {{$klient->name}}</div>
            <div>Фамилия: {{$klient->surname}}</div>
            <div>Возраст: {{$klient->age}} </div>
        <a class="" onclick="return confirm('Вы уверены?')" href="{{route('klient_delete',$klient->id)}}">Удалить<i class="fa fa-trash"></i></a> 
        <a href="{{route('klient_edit',$klient->id)}}">Редактировать</a>
</br> </br>
        @endforeach        
</div>
 <p>      
<a href="{{route('klient_add')}}">Добавить</a></p>
<p>
<a href="{{route('project')}}">Перейти к главной</a></p>
</center>

@endsection