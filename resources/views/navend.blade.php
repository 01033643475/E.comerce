<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Buttons with Links</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <style>
        .main-nav {
            display: none;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <ul class="breadcrumb-tree">
                    <h1>date create</h1>
                    <a href="{{ url('/') }}" class="btn btn-primary" target="_blank">Home</a>
                    <a href="{{ url('laptop/create') }}" class="btn btn-primary" target="_blank">laptop</a>
                    <a href="{{ url('access/create') }}" class="btn btn-secondary" target="_blank"
                        style="    background-color: darkorange;color: white;">book</a>
                    <a href="{{ url('camera/creae') }}" class="btn btn-success" target="_blank">camera</a>
                    <a href="{{ url('car/create') }}" class="btn btn-danger" target="_blank">car</a>
                    <a href="{{ url('smart/create') }}" class="btn btn-warning" target="_blank">smart</a>

                </ul>
                <br><br>
                <ul class="breadcrumb-tree">
                    <h1>table create</h1>
                    <a href="{{ url('/') }}" class="btn btn-primary" target="_blank">Home</a>
                    <a href="{{ url('laptop/index') }}" class="btn btn-primary" target="_blank">laptop</a>
                    <a href="{{ url('access/index') }}" class="btn btn-secondary" target="_blank"
                        style="    background-color: darkorange;color: white;">book</a>
                    <a href="{{ url('camera/index') }}" class="btn btn-success" target="_blank">camera</a>
                    <a href="{{ url('car/index') }}" class="btn btn-danger" target="_blank">car</a>
                    <a href="{{ url('smart/index') }}" class="btn btn-warning" target="_blank">smart</a>

                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
