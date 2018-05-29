<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
   #phone
   {
    overflow: hidden;
    display: inline-block;
   }
</style>

<h1>Телефоны</h1>
    <div id="phones">
        @foreach ($phones as $phone)
            <div>Модель: {{$phone->model}}</div>
            <div>Год: {{$phone->year}} г.</div>
            <div>Цена: {{$phone->price}} гривен</div>
        <a href="{{route('phone_delete',$phone->id)}}">Удалить телефон</a> 
        <a href="{{route('phone_edit',$phone->id)}}">Редактировать телефон</a>
</br> </br>
        @endforeach        
</div>
 <p>      
<a href="{{route('phone_add')}}">Добавить телефон</a></p>


