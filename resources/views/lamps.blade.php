<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
   #lamp
   {
    overflow: hidden;
    display: inline-block;
   }
</style>

@foreach ($lamps as $lamp)
            <div id="lamp">
            	<p>
                <b>Название:</b></br> {{$lamp->name}} </br>
                <b>Тип крепления:</b></br> {{$lamp->kreplenie}}</br>
                <b>Ширина:</b></br> {{$lamp->width}}</br>
                <b>Цвет:</b></br> {{$lamp->color}}</br>
                <b>Материал:</b></br> {{$lamp->material}}</br>
                <b>Высота:</b> </br>{{$lamp->height}}</br>
                <!-- <a class="btn btn-danger" onclick="return confirm('Вы уверены?')" href="{{route('lamp_delete',$lamp->id)}}">Удалить лампу<i class="fa fa-trash"></i></a> -->
<a href="{{route('query')}}">Удалить лампу</a> 
<a href="{{route('lamp_edit',$lamp->id)}}">Редактировать лампу</a>


</p> 
            </div>


        @endforeach 
        <p>      
<a href="{{route('lamp_add')}}">Добавить лампу</a></p>