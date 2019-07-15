<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 06/05/2019
 * Time: 12:51
 */
?>

@extends ('backend.default')

@section ('content')



    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Data Tour</h3>
                <p class="animated fadeInDown">
                    Tour <span class="fa-angle-right fa"></span> Data Tour
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Table </h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($kategori as $kategori)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$kategori->kategori}}</td>
                                    @if($kategori->status=='1');
                                        <td><span class="badge badge-success">Aktif </span></td>
                                @else
                                        <td><span class="badge badge-danger">Tidak Aktif </span></td>
                                    @endif
                                        <td>
                                        <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('kategori.destroy', $kategori->id)}}" onclick="return confirm('hapus data ini?')" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection