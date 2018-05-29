<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
   #lamp2
   {
    overflow: hidden;
    display: inline-block;
   }
</style>

@foreach ($lamps2 as $lamp2)
            <div id="lamp2">
            	<p>
                <b>Название:</b></br> {{$lamp2->name}} </br>
                <b>Тип крепления:</b></br> {{$lamp2->kreplenie}}</br>
                <b>Ширина:</b></br> {{$lamp2->width}}</br>
                <b>Цвет:</b></br> {{$lamp2->color}}</br>
                <b>Материал:</b></br> {{$lamp2->material}}</br>
                <b>Высота:</b> </br>{{$lamp2->height}}</br>
                <a href="{{route('lamp2_delete',$lamp2->id)}}">Удалить лампу</a>
<a href="{{route('lamp2_edit',$lamp2->id)}}">Редактировать лампу</a>


</p> 
            </div>


        @endforeach 
        <p>      
<a href="{{route('lamp2_add')}}">Добавить лампу</a></p>