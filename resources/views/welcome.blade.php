<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div class="d-flex flex-column flex-md-row align-item-center p-3 px-md-4 bg-teal-900 border-bottom">
                <h3 class="my-0 mr-md-auto font-weigth-normal">
                    Event
                </h3>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a href="" class="p-2 text-dark">Login</a>
                    <a href="" class="p-2 text-dark">Register</a>
                </nav>
            </div>
            <div class="nav-scroller bg-white shadow-sm">
                <nav class="nav nav-underline ml-4 py-2">
                    <a href="" class="nav-link">
                        <h6 class="text-muted">Home</h6>
                </a>
                <a href="" class="nav-link">
                        <h6 class="text-muted">Kegiatan</h6>
                </a>
                <a href="" class="nav-link">
                        <h6 class="text-muted">Daftar</h6>
                </a>
            </nav>
        </div>
        <div class="jumbotron" style="background-image: url('banner/banner.png')">
            <div class="container">
                <h3 class="text-center">
                    Aplikasi Management Kegiatan
                </h3>
                <h1 class="display-3 text-center">ABV</h1>
            </div>
        </div>
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" arial-current="page">Home</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" 
                                     alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Event</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{asset('banner/signup.png')}}" 
                                alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Manage Register</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{asset('banner/schedule.png')}}" 
                                alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Schedule Event</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" arial-current="page">Kegiatan</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{asset('banner/sport.png')}}" 
                                     alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Sport</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Daftar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{asset('banner/travel.png')}}" 
                                alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Travel</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <button type="button" class="btn btn-outline-danger btn-lg btn-block" disabled>Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<!-- <div class="container py-3 px-2">
                            <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{asset('images/view.jpg')}}" class="card-img-top" alt="">
                                        <div class="card-body">
                                        <p class="card-text">Lukisan Gunung Alphen</p>
                                        <p class="card-text">Rp. 350.000</p>
                                    </div>
                                </div>
                            </div> -->