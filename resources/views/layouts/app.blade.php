<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Praktikum Blade')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        nav {
            background: #eeeeee;
            padding: 15px;
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #cccccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #eeeeee;
        }
        footer {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Praktikum Laravel</p>
    </footer>
</body>
</html>
