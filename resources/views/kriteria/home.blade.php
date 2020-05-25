@extends('layouts.app')

@section('title', 'Kriteria')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Kriteria</div>

                <div class="panel-body">
                    <a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Kriteria</a>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Tambah Data Kriteria</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('kriteria/tambah') }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <legend>Form Tambah Data Kriteria</legend>
                                    
                                        <div class="form-group">
                                            <label for="">Kode</label>
                                            <input type="text" class="form-control" name="kode" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Kriteria</label>
                                            <input type="text" class="form-control" name="nama_kriteria" id="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Atribut</label>
                                            <select class="form-control" name="atribut">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="1">Benefit</option>
                                                <option value="2">Cost</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bobot</label>
                                            <select class="form-control" name="bobot">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="1">Tidak Penting</option>
                                                <option value="2">Kurang Penting</option>
                                                <option value="3">Cukup Penting</option>
                                                <option value="4">Penting</option>
                                                <option value="5">Sangat Penting</option>
                                            </select>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kriteria</th>
                            <th>Atribut</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        @foreach ($data as $key=>$value)
                            <tbody>
                                <td>{{$key+1}}</td>
                                <td>{{$value->kode}}</td>
                                <td>{{$value->nama_kriteria}}</td>
                                <td>{{\App\Helper::atribut($value->atribut)}}</td>
                                <td>{{\App\Helper::bobot($value->bobot)}}</td>
                                <td>
                                    <a href="{{ url('kriteria/edit/'.$value->id_kriteria) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ url('kriteria/hapus/'.$value->id_kriteria) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
