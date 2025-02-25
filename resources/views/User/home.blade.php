<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spectacles Movies PH</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    {{-- Sweet Alerts --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark bg-opacity-50" >
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Spectikol</a>
            
            <!-- Toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar links and search form -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">TV Shows</a>
                    </li>
                </ul>
    
                <!-- Search form -->
                <form class="d-flex ms-auto mx-auto"> <!-- Added mx-auto for centering -->
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary text-light" type="submit">Search</button>
                </form>
    
                <!-- Display user information or login/register link -->
                @if (session('user_id'))
                    <span class="navbar-text text-light mr-auto" style="width: 100px">Hello, {{ session('user_name') }}</span>
                    <a href="{{ route('user.logout') }}" class="btn btn-outline-light">Logout</a>
                @endif
                @if (!session('user_id'))
                    <a href="{{ route('user.index') }}" class="nav-link text-light">Login/Register</a>
                @endif
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <h1>Movie List</h1>
    
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($movie_list as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark bg-opacity-75 text-light">
                        <div class="card-body">
                            <img src="../../images/rush_2013.jpg" class="image" alt="">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->director }}</p>
                            <p class="card-text">{{ $movie->genre }}</p>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p class="card-text">{{ $movie->year_release }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
