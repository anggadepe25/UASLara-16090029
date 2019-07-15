<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 08/05/2019
 * Time: 11:12
 */
?>

@extends ('backend.default')

@section('content')

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Tour</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 panel">
            <div class="col-md-12 panel-heading">
                <h4>Tambah Tour</h4>
            </div>
            <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                <div class="col-md-12">
                    <form class="cmxform" id="signupForm" method="post" action="{{route('tour.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" name="nama" required>
                                <span class="bar"></span>
                                <label>Nama Tour</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <label></label>
                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top:40px !important;">
                            <h4>Kategori</h4>
                            <div class="form-group form-animate-text" >

                                <select class="form-control" name="kategori">
                                    @foreach($kategori as $kategori);
                                        <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                        @endforeach
                                </select>

                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" name="harga" required>
                                <span class="bar"></span>
                                <label>Harga</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h4 class="card-title"> Upload Gambar</h4>
                                <input type="file" id="input-file-now" class="form-control" name="gambar"/>
                            </div>
                            <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    </div>

@endsection
