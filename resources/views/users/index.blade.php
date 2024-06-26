<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPlatform - Learn Anytime, Anywhere</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for minor adjustments -->
    <style>
        /* Adjustments */
        body {
            padding-top: 56px; /* Offset the height of the fixed navbar */
            background-color: #f8f9fa; /* Light gray background */
        }
        .course-card {
            margin-bottom: 20px; /* Space between course cards */
        }
        footer {
            background-color: #343a40; /* Dark footer background */
            color: #ffffff; /* Light text color */
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">EduPlatform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2">User Name</span>
                        <img src="https://via.placeholder.com/30" class="rounded-circle" alt="User Avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card course-card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">Description of the course goes here. This could include details about what the course covers, its objectives, and any other relevant information.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Description of the course goes here. This could include details about what the course covers, its objectives, and any other relevant information.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card course-card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Description of the course goes here. This could include details about what the course covers, its objectives, and any other relevant information.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p>&copy; 2024 EduPlatform. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
