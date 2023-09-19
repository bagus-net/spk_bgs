@extends('layouts.master')
@section('title')
@lang('translation.Datatables')
@endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')




<h4 class="mb-0">Data Kategori</h4>
<div class="row">
    <div class="col-12">
        <div class="card">


        </div>
    </div>

    <div class="button-items">


        <!-- Extra Large modal -->
        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Tambah Kriteria</button>
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Form Kriteria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Tambah Data Kriteria</legend>

                        <div class="form-group">
                            <label for="">Kode</label>
                            <input type="text" class="form-control" name="kode" id="kode">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kriteria</label>
                            <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria">
                        </div>
                        <div class="form-group">
                            <label for="">Atribut</label>
                            <select class="form-control" name="atribut" id="atribut">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="1">Benefit</option>
                                <option value="2">Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Bobot</label>
                            <select class="form-control" name="bobot" id="bobot">>
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="1">Tidak Penting</option>
                                <option value="2">Kurang Penting</option>
                                <option value="3">Cukup Penting</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Keterangan</th>
                                    <th>KLP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$value)
                                <tr>

                                    <td>{{$key+1}}</td>
                                    <td>{{$value->kode}}</td>
                                    <td>{{$value->keterangan}}</td>
                                    <td>{{$value->klp}}</td>
                                    <td>

                                        <a href="" class="btn btn-xs btn-info"><i class="uil-pen"></i></a>
                                        <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                        </form>
                                    </td>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    @endsection
    @section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

    @endsection