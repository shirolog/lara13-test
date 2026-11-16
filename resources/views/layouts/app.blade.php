<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font family cdn --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    {{-- font-awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>@yield('title', 'Default Title')</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: 0;
            list-style: none;
            text-decoration: none;
        }

        body {
            background: #f5f5f5;
            font-family: sans-serif;
        }

        header {
            background: #fff;
            padding: 15px 30px;
            border-bottom: 1px solid #ddd;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <header>
        <h2>My SNS</h2>
        <nav>
            <a href="/">トップ</a>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
