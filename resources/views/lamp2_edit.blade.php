<form method="POST" action="{{route('lamp2_edit',$lamp->id)}}">
    <label for="name">Название: </label>
    <input type="text" name="name" style="display: block;" value="{{$lamp->name}}">
    <label for="kreplenie">Тип крепления: </label>
    <input type="text" name="kreplenie" style="display: block;" value="{{$lamp->kreplenie}}">
    <label for="width">Ширина: </label>
    <input type="text" name="width" style="display: block;" value="{{$lamp->width}}">
    <label for="color">Цвет: </label>
    <input type="text" name="color" style="display: block;" value="{{$lamp->color}}">
    <label for="material">Материал: </label>
    <input type="text" name="material" style="display: block;" value="{{$lamp->material}}">
    <label for="height">Высота: </label>
    <input type="text" name="height" style="display: block;" value="{{$lamp->height}}">
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>     
