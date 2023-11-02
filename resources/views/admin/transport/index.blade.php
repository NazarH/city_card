@extends('layouts.admin')
@section('content')

        <table class="table">
            <tr>
                <th>Тип</th>
                <th>Номер</th>
                <th>Місто</th>
                <th>Ціна</th>
                <th></th>
            </tr>
            @foreach ($transport as $item)
            <tr>
                <td>{{$item->type}}</td>
                <td>{{$item->number}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <button><a href="{{route('admin.transport.edit', $item->id)}}">Edit</a></button>
                    <form action="{{route('admin.transport.delete', $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type='submit'>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    <form action="{{route('admin.transport.post')}}" method="POST">
        @csrf
        <select name="type">
            <option value="Автобус">Автобус</option>
            <option value="Тролейбус">Тролейбус</option>
        </select>
        <input type="text" name="number" placeholder="Номер">
        <input type="text" name="city" placeholder="Місто">
        <input type="text" name="price" placeholder="Ціна">
        <button type='submit'>
            Відправити
        </button>
    </form>
@endsection
