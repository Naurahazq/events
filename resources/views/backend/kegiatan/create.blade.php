@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('kegiatan.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="" name="code_activity" class="form-control" value="{{ $getKode }}" placeholder="" id="">
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="name" class="form-control" id="" placeholder="">
                                </div>
                                {{$errors->first('name')}}
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="date" class="form-control" id="" placeholder="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="status" class="form-control" id="" placeholder="">
                                </div>

                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" id="" placeholder="">
                                </div>

                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="images" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="number" name="capacity" id="" class="form-control" placeholder="">
                            </div>  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="information" id="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 mb-2">
                            <button type="submit" class="btn btn-outline-info">
                                Masukan Kegiatan Baru
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 