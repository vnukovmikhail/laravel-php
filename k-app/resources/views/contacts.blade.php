@extends('layouts.app')
@section('title')Контакты@endsection
@section('h1')<h1>Страница контактов</h1>@endsection
@section('content')
@if($errors->any())
<ul class="errors">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ route('contacts-form') }}" method="post">
    @csrf
    <div>
        <label>имя:</label>
        <input type="text" placeholder="введите имя" name="name">
    </div><br>
    <div>
        <label>email:</label>
        <input type="email" placeholder="введите почту" name="email">
    </div><br>
    <div>
        <label>сообщение:</label><br>
        <textarea placeholder="ваше сообщение" name="message"></textarea>
    </div>
    <div>
        <input type="submit" value="подтвердить">
    </div>
</form>
@endsection