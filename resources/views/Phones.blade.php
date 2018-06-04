@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<style>

   #phones
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

<center><h1>Телефоны</h1>
    <div id="phones">
        @foreach ($phones as $phone)
            <div>Модель: {{$phone->model}}</div>
            <div>Год: {{$phone->year}} г.</div>
            <div>Цена: {{$phone->price}} гривен</div>
        <a href="{{route('phone_delete',$phone->id)}}">Удалить</a> 
        <a href="{{route('phone_edit',$phone->id)}}">Редактировать</a>
         <form class="form-horizontal" method="POST" action="{{ route('phone.order', ['phone' => $phone->id]) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::id() }}">
            <button type="submit" id="order-.order" class="btn btn-danger">
              <i class="fa fa-btn fa-trash"></i>Заказать
            </button>
           </form>
</br> </br>
        @endforeach        
</div>
 <p>      
<a href="{{route('phone_add')}}">Добавить</a></p>
</center>

@endsection