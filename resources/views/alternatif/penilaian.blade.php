@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Form Penilaian</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>

                <div class="panel-body">
                    <form action="{{ url('alternatif/nilai_simpan') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_alternatif" value="{{$alternatif->id_alternatif}}">
                        <div class="form-group">
                            <label for="">Nama Alternatif</label>
                            <input type="text" class="form-control" name="nama_alternatif" value="{{$alternatif->nama_alternatif}}" placeholder="Input field" readonly>
                        </div>
                        

                        @foreach ($kriteria as $data)
                            <div class="form-group">
                                <label for="">{{$data->nama_kriteria}}</label>
                                <input type="text" class="form-control" name="nilai_{{$data->id_kriteria}}" value="{{\App\Helper::nilai($alternatif->id_alternatif,$data->id_kriteria)}}" >
                            </div>
                        @endforeach
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Back</a>
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
