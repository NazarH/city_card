@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.city.add') }}" method="POST" class="add-form">
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Назва міста">
        <button type='submit' class="btn btn-primary">
            Додати
        </button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Назва</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td scope="row">{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                    <td class="table-btns">
                        <form action="{{route('admin.city.delete', $city->id)}}" method="POST">
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
@endsection
