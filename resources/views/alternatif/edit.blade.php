@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Edit Alternatif</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>

<div class="button-items">


                <div class="panel-body">
                    <form action="{{ url('alternatif/update') }}" method="POST" role="form">
                        {{ csrf_field() }}
                      
                        <input type="hidden" name="id" value="{{$data->id_alternatif}}">
                        <div class="form-group">
                            <label for="">Nama Alternatif</label>
                            <input type="text" class="form-control" name="nama_alternatif" value="{{$data->nama_alternatif}}" placeholder="Input field">
                        </div>
                        
                    </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
