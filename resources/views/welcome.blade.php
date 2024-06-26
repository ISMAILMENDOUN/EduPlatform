<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPlatform</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 4.5rem;
        }
        .jumbotron {
            background-image: url('your-background-image.jpg'); /* Replace with your image */
            background-size: cover;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">EduPlatform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5">
        <!-- Jumbotron Header -->
        <header class="jumbotron">
            <div class="container text-center">
                <h1 class="display-3">Welcome to EduPlatform</h1>
                <p class="lead">A platform to learn and grow together.</p>
                <a href="{{route('courses.index')}}" class="btn btn-primary btn-lg">Explore Courses</a>
            </div>
        </header>

        <!-- Marketing Icons Section -->
        <div class="row text-center">
            <div class="col-lg-4">
                <img class="rounded" src="{{ asset('images/anytime_anywhere.png') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Learn Anytime, Anywhere</h2>
                <p>Access courses and learning materials from any device.</p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/expert_instructors.png')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Expert Instructors</h2>
                <p>Learn from industry experts and professors.</p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{asset('images/certificate.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                <h2>Certification</h2>
                <p>Earn certificates upon completion of courses.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <h2>Why Choose Us?</h2>
                <p>We provide high-quality education with flexible learning options to suit your schedule.</p>
                <ul>
                    <li>Wide range of courses</li>
                    <li>Interactive learning resources</li>
                    <li>Access to community forums</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="feature.jpg" alt="Feature Image">
            </div>
        </div>
        <!-- /.row -->

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Ready to start learning? Browse our courses now!</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Browse Courses</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">© 2024 EduPlatform. All rights reserved.</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
