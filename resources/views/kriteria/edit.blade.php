@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Edit Kriteria</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>

<div class="button-items">


                <div class="panel-body">
                    <form action="{{ url('kriteria/update') }}" method="POST" role="form">
                        {{ csrf_field() }}
                        <legend>Form Update Data Kriteria</legend>
                        <input type="hidden" name="id" value="{{$data->id_kriteria}}">
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input type="text" class="form-control" name="kode" value="{{$data->kode}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kriteria</label>
                            <input type="text" class="form-control" name="nama_kriteria" value="{{$data->nama_kriteria}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Atribut</label>
                            <select class="form-control" name="atribut">
                                <option value="{{$data->atribut}}">{{\App\Helper::atribut($data->atribut)}}</option>
                                <option value="1">Benefit</option>
                                <option value="2">Cost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Bobot</label>
                            <select class="form-control" name="bobot">
                                <option value="{{$data->bobot}}">{{\App\Helper::bobot($data->bobot)}}</option>
                                <option value="1">Tidak Penting</option>
                                <option value="2">Kurang Penting</option>
                                <option value="3">Cukup Penting</option>
                                <option value="4">Penting</option>
                                <option value="5">Sangat Penting</option>
                            </select>
                        </div>
                    
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ url('kriteria') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
