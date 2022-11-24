<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Share Your Blogs</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Share Your Blogs</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{route("index")}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('blogfeed')}}" class="nav-item nav-link">Blogs</a>
                <a href="{{route('create-blog')}}" class="nav-item nav-link">Create Blog</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto">
                @guest
                <a href="{{route("register")}}" class="nav-item nav-link">Register</a>
                <a href="{{route("login")}}" class="nav-item nav-link">Login</a>
                @else
                <a href="" class="nav-item nav-link">{{auth()->user()->username}}</a>
                <a class="nav-item nav-link" href="{{ route('logout') }}">Logout</a>
                @endguest
            </div>
        </div>
    </div>
</nav>

@yield("content")

    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2022 Share Your Blogs</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>