@extends('layouts.app')

@section('content')
<form method="POST" style="padding-top:3%">
        {{ csrf_field() }}
        <label>Назавание</label>
        <input type="text" name="name" required value="{{old('name')}}"><br>
        <label>Текст</label>
        <input type="text" name="text" value="{{old('text')}}"><br>
        <label>Флаг</label>
        <input type="text" name="flag" value="{{old('flag')}}"><br>
        <label>Стоимость</label>
        <input name="price" type="text" value="{{old('price')}}"><br>
        <label>Категория</label>
        <input name="category" type="text" value="{{old('category')}}"><br>
        <input class="waves-effect waves-teal btn-flat" type="submit" value="Добавить">
</form>
@endsection
