<form method="POST" action="{{route('lamp_add')}}">
    <label for="name">Название: </label>
    <input type="text" name="name" style="display: block;" >
    <label for="kreplenie">Тип крепления: </label>
    <input type="text" name="kreplenie" style="display: block;" >
    <label for="width">Ширина: </label>
    <input type="text" name="width" style="display: block;" >
    <label for="color">Цвет: </label>
    <input type="text" name="color" style="display: block;" >
    <label for="material">Материал: </label>
    <input type="text" name="material" style="display: block;" >
    <label for="height">Высота: </label>
    <input type="text" name="height" style="display: block;" >
    <input type="submit" name="submit">
    {{ csrf_field() }}
</form>       
