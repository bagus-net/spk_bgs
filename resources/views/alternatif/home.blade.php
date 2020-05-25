@extends('layouts.app')

@section('title', 'Alternatif')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Jalan</div>

                <div class="panel-body">
                    <a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Jalan</a>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Tambah Data Jalan</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('alternatif/tambah') }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <legend>Form Tambah Data Jalan</legend>
                                    
                                        <div class="form-group">
                                            <label for="">Nama Jalan</label>
                                            <input type="text" class="form-control" name="nama_alternatif" id="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kecamatan</label>
                                            <input type="text" class="form-control" name="alamat" id="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">No. Jalan</label>
                                            <input type="text" class="form-control" name="no_hp" id="" >
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
                            <th>Nama Jalan</th>
                            <th>No. Jalan</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        @foreach ($data as $key=>$value)
                        <tbody>
                            <td>{{$key+1}}</td>
                            <td>{{$value->nama_alternatif}} <a href="{{ url('alternatif/detail/'.$value->id_alternatif) }}" class="btn btn-xs btn-default">Detail</a></td>
                            <td>{{$value->no_hp}}</td>
                            <td>{{$value->alamat}}</td>
                            <td>
                                <a href="{{ url('alternatif/penilaian/'.$value->id_alternatif) }}" class="btn btn-xs btn-default">Penilaian</a>
                                <a href="{{ url('alternatif/edit/'.$value->id_alternatif) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                <a href="{{ url('alternatif/hapus/'.$value->id_alternatif) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                            {{-- <div class="modal fade" id="modal_{{$value->id_alternatif}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Data Jalan</h4>
                                        </div>
                                        <div class="modal-body">
                                            <legend>Nama : {{$value->nama_alternatif}}</legend>
                                            <legend>Alamat : {{$value->alamat}}</legend>
                                            <legend>No.HP : {{$value->no_hp}}</legend>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
