@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.transport.post') }}" method="POST" class="add-form">
        @csrf
        <select name="type" class="form-select">
            <option value="Автобус">Автобус</option>
            <option value="Тролейбус">Тролейбус</option>
        </select>
        <input class="form-control" type="text" name="number" placeholder="Номер">
        <select name="city_id" class="form-select">
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        <input class="form-control" type="text" name="price" placeholder="Ціна">
        <button type='submit' class="btn btn-primary">
            Додати
        </button>
    </form>

    <table id="example2" class="table table-bordered">
        <thead>
            <tr>
                <th>Тип</th>
                <th>Номер</th>
                <th>Місто</th>
                <th>Ціна</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transport as $item)
                <tr>
                    <td scope="row">{{ $item->type }}</td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->city->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td class="table-btns">
                        <button class="btn btn-primary"><a
                                href="{{ route('admin.transport.edit', $item->id) }}">Edit</a></button>
                        <form action="{{ route('admin.transport.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type='submit' class="btn btn-primary">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- /.card-body -->
@endsection
