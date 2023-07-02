
@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Data User</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>


        <div class="button-items">

            <!-- Extra Large modal -->
     <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Tambah User</button>
     <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
             <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Form Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                                    <form action="{{ url('user/tambah') }}" method="POST" role="form">
                                        {{ csrf_field() }}

                                    
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="name" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="email" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="" >
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <select class="form-control" name="jabatan">
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="admin">Admin</option>
                                                <option value="kepala_bidang">Kepala Bidang</option>
                                            </select>
                                        </div>
                                        
                                    
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        @foreach ($data as $key=>$value)
                            <tbody>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->jabatan}}</td>
                                <td>
                                    <a href="{{ url('user/detail/'.$value->id) }}" class="btn btn-info-xs btn-soft-xs-info waves-effect waves-light"><i class="uil-eye"></i></a>
                                    <a href="{{ url('user/edit/'.$value->id) }}" class="btn btn-xs btn-info"><i class="uil-pen"></i></a>
                                    <a href="{{ url('user/hapus/'.$value->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tbody>
                        @endforeach
                      </table>
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

