@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Detail Alternatif</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">Nama Alternatif</label>
                        <input type="text" class="form-control" name="nama_alternatif" value="{{$nama_alternatif}}" readonly>
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
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection
