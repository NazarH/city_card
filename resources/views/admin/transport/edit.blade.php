@extends('layouts.admin')
@section('content')
    <form action="{{route('admin.transport.update', $item->id)}}" method="POST">
        @csrf
        <select name="type">
            <option value="Автобус" {{ $item->type === 'Автобус' ? 'selected' : ''}}>Автобус</option>
            <option value="Тролейбус" {{ $item->type === 'Тролейбус' ? 'selected' : ''}}>Тролейбус</option>
        </select>
        <input type="text" name="number" placeholder="Номер" value='{{$item->number}}'>
        <input type="text" name="city" placeholder="Місто" value='{{$item->city}}'>
        <input type="text" name="price" placeholder="Ціна" value='{{$item->price}}'>
        <button type='submit'>
            Редагувати
        </button>
    </form>
@endsection
