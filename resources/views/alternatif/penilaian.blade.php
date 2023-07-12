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
                    
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ url('alternatif') }}" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
    
                        <h4 class="card-title">Panduan Penilaian</h4>
                        <p class="card-title-desc">simak panduan dengan baik !</p>
                        <p class="card-title-desc">isi nilai sesuai dengan data tabel berikut :</p>
    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true">Processor</a>
                                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                        aria-selected="false">RAM</a>
                                    <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                        aria-selected="false">Harga</a>
                                    <a class="nav-link mb-2" id="v-pills-storage-tab" data-bs-toggle="pill" 
                                    href="#v-pills-storage"role="tab" aria-controls="v-pills-storage" 
                                    aria-selected="false">Storage</a>
                                    <a class="nav-link mb-2" id="v-pills-vga-tab" data-bs-toggle="pill" 
                                    href="#v-pills-vga"role="tab" aria-controls="v-pills-vga" 
                                        aria-selected="false">VGA</a>
                                        <a class="nav-link mb-2" id="v-pills-garansi-tab" data-bs-toggle="pill" 
                                    href="#v-pills-garansi"role="tab" aria-controls="v-pills-garansi" 
                                        aria-selected="false">Garansi</a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="row">
                                            {{-- <div class="col-XL-3"> --}}
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Nilai Kriteria Processor</h4>
                                    
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                    
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Bobot</th>
                                                                        <th>Processor</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>1</td>
                                                                        <td>InteL Celeron</td>
                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>2</td>
                                                                        <td>Pentium Gold - Core 2 duo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>3</td>
                                                                        <td>I3 - Ryzen 3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>4</td>
                                                                        <td>I5 - Ryzen 5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>5</td>
                                                                        <td>I7 - Ryzen 7</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                    
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="row">
                                            {{-- <div class="col-XL-3"> --}}
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Nilai Kriteria RAM</h4>
                                    
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                    
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Bobot</th>
                                                                        <th>Ram</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>1</td>
                                                                        <td>2gb ddr3-4</td>
                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>2</td>
                                                                        <td>4gb ddr 3-4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>3</td>
                                                                        <td>8gb ddr3-4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>4</td>
                                                                        <td>16gb ddr-4</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>5</td>
                                                                        <td>32gb ddr 4-5</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <div class="row">
                                            {{-- <div class="col-XL-3"> --}}
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Nilai Kriteria Harga</h4>
                                    
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                    
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Bobot</th>
                                                                        <th>Harga</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>1</td>
                                                                        <td>4.100.000 - 5.000.000</td>
                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>2</td>
                                                                        <td>3.600.000 - 4.000.000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>3</td>
                                                                        <td>3.100.000 - 3.500.000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>4</td>
                                                                        <td>2.100.000 - 3.000.000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>5</td>
                                                                        <td>1.000.000 - 2.000.000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>



                                    <div class="tab-pane fade" id="v-pills-storage" role="tabpanel"
                                        aria-labelledby="v-pills-storage-tab">
                                        <div class="row">
                                            {{-- <div class="col-XL-3"> --}}
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Nilai Kriteria Storage</h4>
                                    
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                    
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Bobot</th>
                                                                        <th>Storage</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>1</td>
                                                                        <td>120GB-128gb</td>
                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>2</td>
                                                                        <td>240gb-256gb</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>3</td>
                                                                        <td>512gb</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>4</td>
                                                                        <td>1tb</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>5</td>
                                                                        <td>2tb</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>



                                                    <div class="tab-pane fade" id="v-pills-vga" role="tabpanel"
                                                    aria-labelledby="v-pills-vga-tab">
                                                    <div class="row">
                                                        {{-- <div class="col-XL-3"> --}}
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Nilai Kriteria VGA</h4>
                                                
                                                                    <div class="table-responsive">
                                                                        <table class="table mb-0">
                                                
                                                                            <thead class="table-light">
                                                                                <tr>
                                                                                    <th>No</th>
                                                                                    <th>Bobot</th>
                                                                                    <th>VGA</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">1</th>
                                                                                    <td>1</td>
                                                                                    <td>tidak ada - nvidia 512mb</td>
                                                                                  
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">2</th>
                                                                                    <td>2</td>
                                                                                    <td>nvidia 1gb</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">3</th>
                                                                                    <td>3</td>
                                                                                    <td>nvidia 2gb</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">4</th>
                                                                                    <td>4</td>
                                                                                    <td>nvidia 4gb</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">5</th>
                                                                                    <td>5</td>
                                                                                    <td>nvidia 8gb-12gb</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                               


                                <div class="tab-pane fade" id="v-pills-garansi" role="tabpanel"
                                aria-labelledby="v-pills-garansi-tab">
                                <div class="row">
                                    {{-- <div class="col-XL-3"> --}}
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Nilai Kriteria Garansi</h4>
                            
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                            
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Bobot</th>
                                                                <th>Garansi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>1</td>
                                                                <td>3 Bulan</td>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>3</td>
                                                                <td>6 Bulan</td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>5</td>
                                                                <td>1 Tahun</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
            </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
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
