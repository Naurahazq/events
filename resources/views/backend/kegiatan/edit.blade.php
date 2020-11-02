@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('activity.update',$activitys->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Kegiatan</label>
                                    <input type="text" name="code_activity" class="form-control" value="{{$activitys->code_activity}}" id="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="name" class="form-control" value="{{$activitys->name}}" id="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="date" class="form-control" value="{{$activitys->date}}" id="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="status" class="form-control" value="{{$activitys->status}}" id="">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" value="{{$activitys->price}}" id="">
                                </div>

                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="images" class="form-control"  id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Capacity</label>
                                    <input type="number" name="capacity" id="" class="form-control" value="{{$activitys->capacity}}">
                            </div>  
                        </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Informasi</label>
                                    <textarea name="information" id="" class="form-control" value="" >
                                        {{$activitys->information}}
                                    </textarea>
                                </div>

                            </div>
                            
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-outline-info">Masukan Kegiatan Baru</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
