<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Заголовок вашої сторінки</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <table class="table">
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
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->card_id}}</td>
                        <td>{{$item->transport_id}}</td>
                        <td>{{$item->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table">
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
                        <td>{{$item->id}}</td>
                        <th scope="row">{{$item->card_id}}</th>
                        <td>{{$item->rep_date}}</td>
                        <td>{{$item->costs_date}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
