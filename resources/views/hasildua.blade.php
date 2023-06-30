
@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Hasil Rekomendasi Komputer</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hasil Akhir Weighted Product</div>

                <table  class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai Preferensi</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($rankingwp as $key => $data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{\App\Helper::alternatif($data->alternatif)}}</td>
                                <td>{{$data->hasil}}</td>
                                <td>{{$key+1}}</td>

                                
                                
                            </form>
                        </td>
    
                       
                    </tr>
                           
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>


            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Hasil Akhir Topsis</div>
    
                    <table  class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Alternatif</th>
                                <th>Nilai Preferensi</th>
                                <th>Rangking</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($ranking as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{\App\Helper::alternatif($data->alternatif)}}</td>
                                    <td>{{$data->hasil}}</td>
                                    <td>{{$key+1}}</td>
                                    
                                </form>
                            </td>
        
                           
                        </tr>
                               
                                @endforeach
                            </tbody>

                           
                          </table>
                        </div>
                        <div class="d-print-none mt-4">
                            <div class="float-end">
                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                {{-- <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a> --}}
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