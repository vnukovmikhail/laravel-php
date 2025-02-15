<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
    @include('inc.header')
    @yield('h1')
    @if(Request::is('/'))
        @include('inc.welcome')
    @endif
    <main>
        <aside>
            <fieldset>
                <legend>боковая панель</legend>
                @include('inc.aside')
            </fieldset>
        </aside>
        <section>
            <fieldset>
                <legend>контент</legend>
                @yield('content')
            </fieldset>
        </section>
    </main>
    @include('inc.footer')
</body>
</html>