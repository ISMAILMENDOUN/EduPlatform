<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Catalog</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Course Image">
                <div class="card-body">
                    <h4 class="card-title">Course Title 1</h4>
                    <p class="card-text">Description of Course 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="card-footer">
                   <?php $course=1;?>
                    <a href="{{route('courses.course',['course'=>$course])}}" class="btn btn-primary btn-sm">View Course</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Course Image">
                <div class="card-body">
                    <h4 class="card-title">Course Title 2</h4>
                    <p class="card-text">Description of Course 2. Phasellus bibendum felis nec neque aliquam, sit amet scelerisque turpis luctus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">View Course</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="https://via.placeholder.com/350x200" alt="Course Image">
                <div class="card-body">
                    <h4 class="card-title">Course Title 3</h4>
                    <p class="card-text">Description of Course 3. Donec convallis urna a congue vehicula.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">View Course</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
