<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Адмін-панель</title>
</head>

<body>
    <div class="container">
        <ul class="admin__nav">
            <li><a href="{{route('admin.transport.index')}}">Список транспорту</a></li>
        </ul>
        <div class="admin__content">
            @yield('content')
        </div>
    </div>
</body>

</html>
