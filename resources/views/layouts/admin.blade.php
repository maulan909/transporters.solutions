<!DOCTYPE html>
<html lang="id">

<head>
    <title>Transporter | {{ $title }}</title>


    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"
        integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/style.css">
    <link rel="stylesheet" href="/assets/backend/vendor/stisla/css/components.css">
    <link rel="stylesheet" href="/assets/backend/css/custom.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            {{-- Top Nav --}}
            @include('partials.admin.top-nav')
            {{-- Enc Top Nav --}}

            {{-- Side Nav --}}
            @include('partials.admin.side-nav')
            {{-- End Side Nav --}}

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>{{ $title }}</h1>
                    </div>
                    @yield('content')
            </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; Transporter
                <?= date('Y'); ?>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal" id="cropperModal" tabindex="-1" aria-labelledby="cropperModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cropperModalLabel">Crop Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-3">
                    <img src="{{ asset('assets/img/default-placeholder.png') }}" id="cropperImage" class="d-none">
                    <div id="crop"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="crop-upload">Crop & Upload</button>
                </div>
            </div>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"
        integrity="sha512-vUJTqeDCu0MKkOhuI83/MEX5HSNPW+Lw46BA775bAWIp1Zwgz3qggia/t2EnSGB9GoS2Ln6npDmbJTdNhHy1Yw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://foliotek.github.io/Croppie/bower_components/exif-js/exif.js"></script>
    <script src="/assets/backend/vendor/stisla/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/assets/backend/vendor/stisla/vendor/chartjs/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Template JS File -->
    <script src="/assets/backend/vendor/stisla/js/scripts.js"></script>
    <script src="/assets/backend/vendor/stisla/js/custom.js"></script>
</body>

</html>