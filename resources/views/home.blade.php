@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Data Posting</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i>
                            Setting</button>
                        <button type="button"
                            class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                            data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javaScript:void();" class="dropdown-item" id="tambahpostinganbarang"
                                data-url="{{ url('postinganbarang/tambah', []) }}">Tambah Postingan barang</a>
                            <a href="javaScript:void();" class="dropdown-item">Tambah Postingan Blog</a>

                            <div class="dropdown-divider"></div>
                            <a href="javaScript:void();" class="dropdown-item"><i class="fa fa-search"></i> Cari Data</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12" id="menupostinganbarang">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-table"></i> Data Postingan Barang</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="default-datatable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Postingan</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Status Postingan</th>
                                            <th class="text-center">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($databarang as $databarang)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $databarang->nama_item }}</td>
                                                <td>{{ $databarang->kd_cat }}</td>
                                                <td>{{ $databarang->harga_item }}</td>
                                                <td>{{ $databarang->status_item }}</td>
                                                <td class="text-center">
                                                    <button class="btn-info" data-toggle="modal" data-target="#modal-animation-12" id="lihatdatabarang" data-url="{{ url('/postinganbarang/lihatdata', ['id'=>$databarang->kd_item]) }}"><i class="fa fa-eye"></i></button>
                                                    <button class="btn-warning"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-table"></i> Data Postingan Blog</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="default-datatable1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Postingan</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Status Postingan</th>
                                            <th class="text-center">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Row-->



            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->

    </div>



    <div class="modal fade" id="modal-animation-12">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content animated jackInTheBox">
               <div id="postinganbarang"></div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/admin.js', []) }}"></script>
@endsection

<!--End content-wrapper-->
<!--Start Back To Top Button-->
