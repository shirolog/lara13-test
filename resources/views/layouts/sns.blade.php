<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font family cdn --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    {{-- font-awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
        integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>@yield('title', 'Default Title')</title>
    <style>
        * {
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
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav form {
            margin: 0;
        }

        nav button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            background: #e74c3c;
            color: #fff;
            cursor: pointer;
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

        .alert {
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert button {
            background: none;
            border: none;
            color: inherit;
            font-size: 22px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h2>My SNS</h2>
        <nav>
            <a href="{{ route('posts.index') }}">トップ</a>
            <a href="{{ route('profile.edit') }}">プロフィール</a>


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </nav>
    </header>
    <div class="container">
        @include('components.alert')
        @yield('content')
    </div>
</body>

</html>
