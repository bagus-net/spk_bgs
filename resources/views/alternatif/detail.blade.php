@extends('layouts.app')

@section('title', 'Alternatif | Detail')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Detail Jalan</div>

                <div class="panel-body">
                    <legend>Informasi Umum</legend>
                    <div class="form-group">
                        <label for="">Nama Jalan</label>
                        <input type="text" class="form-control" name="nama_alternatif" value="{{$nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control" name="alamat" value="{{$alamat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No. Jalan</label>
                        <input type="text" class="form-control" name="no_hp" value="{{$no_hp}}" readonly>
                    </div>
                    <legend>Penilaian</legend>
                    @for ($i = 0; $i < $jumlah; $i++)
                        <div class="form-group">
                            <label for="">{{\App\Helper::kriteria($kriteria[$i])}}</label>
                            <input type="text" class="form-control" name="no_hp" value="{{$nilai[$i]}}" readonly>
                        </div>
                    @endfor
                    <a href="{{ url('alternatif') }}" class="btn btn-danger pull-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
