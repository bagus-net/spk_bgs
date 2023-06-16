
@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<h4 class="mb-0">Hasil Perhitungan TOPSIS</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
       
               
            </div>
        </div>
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nilai Kecocokan Terhadap Alternatif</div>

                <div class="panel-body">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $dataK)
                                <th>{{$dataK->nama_kriteria}}</th>
                                @php
                                    $id[] = $dataK->id_kriteria;
                                @endphp
                            @endforeach
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyT => $dataT)
                            <tbody>
                                <td>{{$keyT+1}}</td>
                                <td>{{$dataT->nama_alternatif}}</td>
                                @foreach ($kriteria as $keyK => $dataK)
                                    <td>
                                        {{\App\Helper::nilai($dataT->id_alternatif,$id[$keyK])}}
                                    </td>
                                @endforeach
                            </tbody>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Normalisasi</div>

                <div class="panel-body">
                    <table id="example1" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>No</th>
                            {{-- <th>Kode</th> --}}
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $dataK)
                                <th>{{$dataK->kode}}</th>
                            @endforeach
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyA => $dataA)
                            <tbody>
                                <td>{{$keyA+1}}</td>
                                <td>{{$dataA->nama_alternatif}}</td>
                                    @for ($j = 0; $j < $jmlh_kriteria; $j++)
                                        <td>{{$normalisasi[$keyA][$j]}}</td>
                                    @endfor
                            </tbody>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Normalisasi Terbobot</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            @foreach ($kriteria as $dataK)
                                <th>{{$dataK->kode}}</th>
                            @endforeach
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyA => $dataA)
                            <tbody>
                                <td>{{$keyA+1}}</td>
                                <td>{{$dataA->nama_alternatif}}</td>
                                    @for ($j = 0; $j < $jmlh_kriteria; $j++)
                                        <td>{{$normalisasi_terbobot[$keyA][$j]}}</td>
                                    @endfor
                            </tbody>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Matriks Solusi Ideal Positif</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            @foreach ($kriteria as $dataK)
                                <th>{{$dataK->kode}}</th>
                            @endforeach
                          </tr>
                        </thead>
                            <tbody>
                            @foreach ($kriteria as $keyK => $dataK)
                                <td>{{$positif[$keyK]}}</td>
                            @endforeach
                            </tbody>
                      </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Matriks Solusi Ideal Negatif</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            @foreach ($kriteria as $dataK)
                                <th>{{$dataK->kode}}</th>
                            @endforeach
                          </tr>
                        </thead>
                            <tbody>
                            @foreach ($kriteria as $keyK => $dataK)
                                <td>{{$negatif[$keyK]}}</td>
                            @endforeach
                            </tbody>
                      </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jarak Solusi</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            
                            <th>Jarak Solusi Ideal Positif (+)</th>
                            <th>Jarak Solusi Ideal Negatif (-)</th>
                            
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyA => $dataA)
                            <tbody>
                                <td>{{$keyA+1}}</td>
                                <td>{{$hasil_positif[$keyA]}}</td>
                                <td>{{$hasil_negatif[$keyA]}}</td>
                               
                            </tbody>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>


        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nilai Preferensi</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai Preferensi</th>
                       
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyA => $dataA)
                            <tbody>
                                <td>{{$keyA+1}}</td>
                            
                                <td>{{$dataA->nama_alternatif}}</td>
                            
                                <td>{{$preferensi[$keyA]}}</td>
                            </tbody>
                            @endforeach
                      </table>
                </div>
            </div>
        </div>




        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Hasil Akhir</div>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Nilai Preferensi</th>
                            <th>Rangking</th>
                          </tr>
                        </thead>
                            @foreach ($rangking as $key => $data)
                            <tbody>
                                <td>{{$key+1}}</td>
                                
                                <td>{{\App\Helper::alternatif($data->alternatif)}}</td>
                        
                                <td>{{$data->hasil}}</td>
                                <td>{{$key+1}}</td>
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