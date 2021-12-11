<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/style.css">
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/components.css">
</head>

<body>
    <div id="app">
        @yield('auth-content')
        <div class="simple-footer">
            Copyright &copy; Transporter {{ date('Y') }}
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script>
    <script src="/assets/backend/vendor/stisla/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/assets/backend/vendor/stisla/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="/assets/backend/vendor/stisla/js/scripts.js"></script>
    <script src="/assets/backend/vendor/stisla/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>