@extends('layouts.admin')
@section('content')
    <form action="{{route('admin.transport.update', $item->id)}}" method="POST" class="add-form">
        @csrf
        <select name="type" class="form-select">
            <option value="Автобус" {{ $item->type === 'Автобус' ? 'selected' : ''}}>Автобус</option>
            <option value="Тролейбус" {{ $item->type === 'Тролейбус' ? 'selected' : ''}}>Тролейбус</option>
        </select>
        <input class="form-control" type="text" name="number" placeholder="Номер" value='{{$item->number}}'>
        <input class="form-control" type="text" name="city" placeholder="Місто" value='{{$item->city}}'>
        <input class="form-control" type="text" name="price" placeholder="Ціна" value='{{$item->price}}'>
        <button class="btn btn-primary" type='submit'>
            Редагувати
        </button>
    </form>
@endsection
