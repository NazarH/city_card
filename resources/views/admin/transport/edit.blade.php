@extends('layouts.admin')
@section('content')
    <form action="{{route('admin.transport.update', $item->id)}}" method="POST" class="add-form">
        @csrf
        <select name="type" class="form-select">
            <option value="Автобус" {{ $item->type === 'Автобус' ? 'selected' : ''}}>Автобус</option>
            <option value="Тролейбус" {{ $item->type === 'Тролейбус' ? 'selected' : ''}}>Тролейбус</option>
        </select>
        <input class="form-control" type="text" name="number" placeholder="Номер" value='{{$item->number}}'>
        <select name="city_id" class="form-select">
            @foreach ($cities as $city)
                <option value="{{$city->id}}" {{$item->city->id === $city->id ? 'selected' : ''}}>{{$city->name}}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="price" placeholder="Ціна" value='{{$item->price}}'>
        <button class="btn btn-primary" type='submit'>
            Редагувати
        </button>
    </form>
@endsection
