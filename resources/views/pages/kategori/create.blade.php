<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 08/05/2019
 * Time: 12:40
 */
?>

@extends ('backend.default')

@section('content')

    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Kategori</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12 padding-0">
            <div class="col-md-12">
                <div class="panel form-element-padding">
                    <div class="panel-heading">
                        <h4>Tambah Kategori</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom:30px;">
                        <form action="{{route('kategori.store')}}" method="post">
                            @csrf
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" name="kategori" required>
                                <span class="bar"></span>
                                <label>Kategori</label>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input class="btn btn-danger pull-right" type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    </div>

@endsection

