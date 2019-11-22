<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="header-flex">
            <div>
            <img src="" alt="Logo Barroc intens">
            <h1>Barroc Intens</h1>
            </div>
            <a href="">Inloggen</a>

        </div>
    </header>

    <section>
        @yield('content')
    </section>

    <footer>
    <div>
        <div>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
        </div>
        <div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>   
        </div>
    </div>
    </footer>
</body>
</html>