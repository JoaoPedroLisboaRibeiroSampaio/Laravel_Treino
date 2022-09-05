<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/js/script.js"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
<nav class="Menu">
    <ul class="Menu-auth">
            <li>
                <a  class="Link"  href="pagina">
                    Usuario
                </a>
            </li>
    </ul>
        <ul class="Menu-left">
            <li>
                <a  class="Link"  href="pagina">
                    Products
                </a>
            </li>
            <li>
                <a class="Link" href="pagina">
                    Opção 2
                </a>
            </li>
            <li>
                <a  class="Link"  href="pagina">
                     Opção 3
                </a>
            </li>
            <li>
                <a  class="Link"  href="pagina">
                    Opção 4
                </a>
            </li> 
        </ul>
    </nav>
</header>
@for($i = 0; $i<=5;$i++)
    <br>
@endfor
    @yield('content')
<footer>
    <p>Project Laravel &copy; 2022 </p>
</footer>
</body>
</html>

