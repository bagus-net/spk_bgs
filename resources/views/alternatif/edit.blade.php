@extends('layouts.app')

@section('title', 'Alternatif | Edit')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Alternatif</div>

                <div class="panel-body">
                    <form action="{{ url('alternatif/update') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Update Data Alternatif</legend>
                        <input type="hidden" name="id" value="{{$data->id_alternatif}}">
                        <div class="form-group">
                            <label for="">Nama Alternatif</label>
                            <input type="text" class="form-control" name="nama_alternatif" value="{{$data->nama_alternatif}}" placeholder="Input field">
                        </div>
                        
                    
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
