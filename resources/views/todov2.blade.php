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

    <style>
        body{
            background: #120722; color:#ffffff;
        }
        select{
            color: wheat;
        }
        option{
            background-color: #120722;
        }
        .dataTables_wrapper .dataTables_filter input{
            color: wheat;
        }
        table.dataTable thead th, table.dataTable thead td, table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td, th, td, table.dataTable.row-border tbody tr:first-child th, table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th, table.dataTable.display tbody tr:first-child td{
            border: 1px solid floralwhite;
            border-bottom: 1px solid floralwhite;
            border-top: 1px solid floralwhite;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">ᑭᖇIᗩᒪ - <code>Personal Productivity Tool</code></a>
                    <div class="social-media order-lg-last">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-user"><i class="sr-only">Profile</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-sign-out"><i class="sr-only">Sign Out</i></span></a>
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
            &nbsp;&nbsp;&nbsp;&nbsp;
            <!-- Table Code Start -->
            <table id="toDoTasks" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>Actions</th>
                    </tr>
                <tbody>
                    <?php $i = 1; ?>
                        @foreach ($items as $items)
                            <tr>
                            <td>{{ $i }}</td>
                                <td>{{ $items['taskName'] }}</td>
                                <td>
                                    <div class="social-media order-lg-last">
                                        <p class="mb-0 d-flex">
                                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-check"><i class="sr-only">Completed</i></span></a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <?php $i += 1; ?>
                        @endforeach
                    </thead>
            </table>
            <!-- Table Code End -->
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#toDoTasks').DataTable();
        });
    </script>

    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>