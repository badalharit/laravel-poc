<html>

<head>
    <title>
        ᑭᖇIᗩᒪ - Personal Productivity Tool
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.7.0.js') }}"></script>
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body style="background: #120722;">
    <section class="ftco-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">ᑭᖇIᗩᒪ - <code>Personal Productivity Tool</code></a>
                    <div class="social-media order-lg-last">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-user"><i class="sr-only">Profile</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-sign-out"><i class="sr-only">Sign Out</i></span></a>
                            <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> -->
                        </p>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav ml-auto mr-md-3">
                            <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Work</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="taskInputBox" placeholder="Add a task........">
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success">Add Task</button>
                    </div>
                </div>
            </div>
            <!-- END nav -->
        </div>
    </section>
    <script>
        $(document).ready(function() {
            // $('#example').DataTable();
        });
    </script>

    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>