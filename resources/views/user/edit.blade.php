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
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select class="form-control" name="jabatan">
                                <option value="{{$data->jabatan}}">{{\App\Helper::jabatan($data->jabatan)}}</option>
                                <option value="admin">Admin</option>
                                <option value="kepala_bidang">Kepala Bidang</option>
                            </select>
                        </div>

                        <label for="example-text-input" class="col-md-2 col-form-label">Password : </label>
                        <div class="col-md-10">
                            <input type="password" name="password" class="form-control" value="" id="password" placeholder="Enter password" required>
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

