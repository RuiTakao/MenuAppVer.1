<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="header-logo">Izakaya TKO</h1>
    </header>
    <main>
        <div class="main_content">
            <ul class="main_content_lists">
                @foreach ($drinks as $drink)
                <li class="main_content_list">
                    <a href="#" class="main_content_link" style="background-image: url('img/ビール.jpg');">
                        <p class="main_content_list_title">{{ $drink['name'] }}</p>
                        <p class="main_content_list_price">{{ $drink['price'] }}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </main>
    <footer>
        <nav class="footer_nav">
            <ul class="footer_nav_lists">
                <li class="footer_nav_list">
                    <a href="shop_information" class="footer_nav_link">店舗情報</a>
                </li>
                <li class="footer_nav_list">
                    <a href="recommendation" class="footer_nav_link is-active">オススメ</a>
                </li>
                <li class="footer_nav_list">
                    <a href="food" class="footer_nav_link">フード</a>
                </li>
                <li class="footer_nav_list">
                    <a href="drink" class="footer_nav_link">ドリンク</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>
</html>
