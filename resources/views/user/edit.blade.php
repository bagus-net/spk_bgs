@extends('layouts.app')

@section('title', 'Kriteria | Edit')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data User</div>

                <div class="panel-body">
                    <form action="{{ url('user/update') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Update Data User</legend>
                        <input type="hidden" name="id" value="{{$data->id_kriteria}}">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select class="form-control" name="jabatan">
                                <option value="{{$data->jabatan}}"></option>
                                <option value="admin">Admin</option>
                                <option value="kepala_bidang">Kepala Bidang</option>
                            </select>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('user') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
