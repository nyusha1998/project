@extends('layouts.myapp')

@section('title', 'Проект')

@section('sidebar')
@parent

@endsection

@section('content')
<style>

   #orders
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

<center><h1>Заказы</h1>
    <div id="orders">
        @foreach ($orders as $order)
            <div>Модель: {{$order->model}}</div>
            <div>Цена: {{$order->price}}</div>
            <div>Год: {{$order->year}} г.</div>
            <div>Цена: {{$order->price}} гривен</div>
            <form class="form-horizontal" method="POST" action="{{ route('phone.back', ['phone' => $order->id]) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <button type="submit" id="order-back" class="btn btn-danger">
              <i class="fa fa-btn fa-trash"></i>Отмена
            </button>
      </form>
</br> </br>
        @endforeach   
          <div>Итого: {{$price}}</div>     
</div>

</center>

@endsection