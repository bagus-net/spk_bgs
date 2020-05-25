@extends('layouts.app')

@section('title', 'User')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data User</div>

                <div class="panel-body">
                    <a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> User</a>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Tambah Data User</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('user/tambah') }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                        <legend>Form Tambah Data User</legend>
                                    
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" name="email" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <select class="form-control" name="jabatan">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="admin">Admin</option>
                                                <option value="kepala_bidang">Kepala Bidang</option>
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
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        @foreach ($data as $key=>$value)
                            <tbody>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->jabatan}}</td>
                                <td>
                                    <a href="{{ url('user/edit/'.$value->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ url('user/hapus/'.$value->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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
