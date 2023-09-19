@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Form Edit User</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>


                <div class="panel-body">
                    <form action="{{ url('user/update') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" id="nama" placeholder="Input field">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Level</label>
                            <input type="text" class="form-control" name="level" value="{{$data->level}}" placeholder="Input field">
                        </div> --}}

                        {{-- <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control" name="level">
                                <option value="{{$data->level}}">{{\App\Helper::level($data->level)}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}" placeholder="Input field" >
                        </div>

                        <label for="example-text-input" class="col-md-2 col-form-label">Password : </label>
                        <div class="col-md-10">
                            <input type="password" name="pass" class="form-control" value="{{$data->pass}}" id="" placeholder="Enter password" required>
                        </div>

                        
                    
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ url('user') }}" class="btn btn-danger">Back</a>
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

