@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Data Alternatif</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>

<div class="button-items">

                         <!-- Extra Large modal -->
                  <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Tambah Alternatif</button>
                  <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Form Alternatif</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                  </button>
                              </div>
                                    <form action="{{ url('alternatif/tambah') }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                    
                                        <div class="form-group">
                                            <label for="">Nama Alternatif</label>
                                            <input type="text" class="form-control" name="nama_alternatif" id="nama_alternatif" >
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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="table-responsive">    
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          
                    <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->nama_alternatif}} <a href="{{ url('alternatif/detail/'.$value->id_alternatif) }}" class="btn btn-info-xs btn-soft-xs-info waves-effect waves-light"><i class="uil-eye"></i></a>
                            
                            <td>
                                <a href="{{ url('alternatif/penilaian/'.$value->id_alternatif) }}" class="btn btn-warning" type="reset" value="Reset">Penilaian</a>
                                <a href="{{ url('alternatif/edit/'.$value->id_alternatif) }}" class="btn btn-xs btn-info"><i class="uil-pen"></i></a>
                                <a href="{{ url('alternatif/hapus/'.$value->id_alternatif) }}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                        </form>
                    </td>

                   
                </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection

