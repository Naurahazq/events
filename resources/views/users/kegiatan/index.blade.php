@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" arial-current="page">
                        <li class="badge badge-info">
                            Aktif
                    </li>
                </li>
             </ol>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                        <div>
                            <img src="{{asset('banner/kkk.jpg')}}" alt="" class="rounded-circle" width="80" height="80">
                        </div>
                        <div>
                            <h3>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <button type="submit" class="btn btn-outline-info btn-lg btn-block">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="d-flex">
                        <div>
                            <img src="{{asset('banner/kkk.jpg')}}" alt="" class="rounded-circle" width="80" height="80">
                        </div>
                        <div>
                            <h3>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <button type="submit" class="btn btn-outline-info btn-lg btn-block">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button type="submit" class="btn btn-outline-info btn-lg btn-block">Daftar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{asset('banner/undraw_date_picker_gorr.png')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3>Lorem Ipsum is simply</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button type="submit" class="btn btn-outline-info btn-lg btn-block">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection