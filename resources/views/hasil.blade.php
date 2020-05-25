@extends('layouts.app')

@section('title', 'Hasil Penilaian')

@section('css')

@endsection

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nilai Kecocokan Terhadap Jalan</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Jalan</th>
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
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            {{-- <th>Kode</th> --}}
                            <th>Nama Jalan</th>
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
                            <th>Nama Jalan</th>
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
                            <!--
                            <th>Nama Alternatif</th>
                        -->
                            <th>Jarak Solusi Ideal Positif (+)</th>
                            <th>Jarak Solusi Ideal Negatif (-)</th>
                            <!--
                            <th>Nilai Preferensi</th>
                        -->
                          </tr>
                        </thead>
                            @foreach ($alternatif as $keyA => $dataA)
                            <tbody>
                                <td>{{$keyA+1}}</td>
                            <!--
                                <td>{{$dataA->nama_alternatif}}</td>
                            -->
                                <td>{{$hasil_positif[$keyA]}}</td>
                                <td>{{$hasil_negatif[$keyA]}}</td>
                                <!--
                                <td>{{$preferensi[$keyA]}}</td>
                            -->
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
                            <th>Nama Jalan</th>
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

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Jalan</th>
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

@section('js')

@endsection
