<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Пасьянс')</title>
    
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <!-- Можно добавить дополнительные стили -->
    @stack('styles')
    
    <style>
        body {
            background-color: #2e7d32; /* тёмно-зелёный фон */
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 36px;
        }
        #game-area {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        /* Области для карт */
        .card-area {
            width: 150px;
            height: 250px;
            border: 2px dashed #fff;
            margin: 10px;
            border-radius: 8px;
            background-color: rgba(255,255,255,0.1);
            position: relative;
        }
        /* Можно добавить стили для карт позже */
    </style>
</head>
<body>
    <header>
        <h1>Пасьянс</h1>
        <p>Добро пожаловать! Игра находится в разработке.</p>
    </header>

    <!-- Основная область игры -->
    <div id="game-area">
        <!-- Области для карт -->
        <div class="card-area" id="stock">Колода</div>
        <div class="card-area" id="waste">Мусор</div>

        <!-- Фундаменты -->
        @for ($i = 1; $i <= 4; $i++)
            <div class="card-area" id="foundation{{ $i }}">Фундамент {{ $i }}</div>
        @endfor

        <!-- Таблицы (табло) -->
        @for ($i = 1; $i <=7; $i++)
            <div class="card-area" id="tableau{{ $i }}">Столбец {{ $i }}</div>
        @endfor
    </div>

    <!-- Подключение JS -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Можно вставлять дополнительные скрипты -->
    @stack('scripts')
</body>
</html>