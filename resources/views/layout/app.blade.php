<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body> 
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>
        <a class="btn btn-primary" href="{{route('product')}}">Product</a>
        <a class="btn btn-primary" href="{{route('teams')}}">Our Teams</a>
        <a class="btn btn-primary" href="{{route('about')}}">About Us</a>
        <a class="btn btn-primary" href="{{route('contact')}}">Contact</a>
        <div>
            @yield('content')
        </div>
    </body>
</html>