<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Заголовок вашої сторінки</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body id="profile">
    <div class="back">
        <a href="/">
            <<< Home</a>
    </div>
    <div class="container">
        <div class="card-block">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Номер картки</th>
                        <th scope="col">Тип</th>
                        <th scope="col">Баланс</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Auth::user()->cards as $card)
                        <tr>
                            <th scope="row">{{ $card->id }}</th>
                            <td>{{ $card->number }}</td>
                            <td>{{ $card->type }}</td>
                            <td>{{ $card->cash }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{ route('user.card') }}" method="POST" class="add-form">
                @csrf
                <input class="form-control" type="text" name="number" placeholder="Номер">
                <button type='submit' class="btn btn-primary">
                    Додати
                </button>
            </form>
        </div>
        <div class="info-block">
            <select id='select-form' class="form-select mb-2 profile-form" aria-label="Default select example"
                onchange="showForm()">
                <option value="1" selected>Історія поїздок</option>
                <option value="2">Історія карток</option>
            </select>
            <table id='profile-form-1' class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Картки</th>
                        <th scope="col">Номер транспорту</th>
                        <th scope="col">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trip as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->card_id }}</td>
                            <td>{{ $item->transport_id }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table id='profile-form-2' class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Картки</th>
                        <th scope="col">Дата поповнення</th>
                        <th scope="col">Дата витрат</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($card_history as $item)
                        <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <th>{{ $item->card_id }}</th>
                            <td>{{ $item->rep_date }}</td>
                            <td>{{ $item->costs_date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

<script type="text/javascript" src="{{ asset('js/profile.js') }}"></script>

</html>
