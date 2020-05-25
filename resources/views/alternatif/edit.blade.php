@extends('layouts.app')

@section('title', 'Alternatif | Edit')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Jalan</div>

                <div class="panel-body">
                    <form action="{{ url('alternatif/update') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Update Data Jalan</legend>
                        <input type="hidden" name="id" value="{{$data->id_alternatif}}">
                        <div class="form-group">
                            <label for="">Nama Jalan</label>
                            <input type="text" class="form-control" name="nama_alternatif" value="{{$data->nama_alternatif}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">No. Jalan</label>
                            <input type="text" class="form-control" name="no_hp" value="{{$data->no_hp}}" placeholder="Input field">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
