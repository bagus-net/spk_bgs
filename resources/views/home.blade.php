
<!-- start page title -->
@extends('layouts.master')
@section('title')
    @lang('translation.Datatables')
@endsection
@section('css')
   

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Dashboard</h2>

            

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="total-revenue-chart" data-colors='["--bs-primary"]'></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $jmlh_alternatif }}</span></h4>
                    <p class="text-muted mb-0">Total Alternatif</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                </p> --}}
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $jmlh_kriteria }}</span></h4>
                    <p class="text-muted mb-0">Total Kriteria</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                </p> --}}
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart" data-colors='["--bs-success"]'> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $jmlh_user }}</span></h4>
                    <p class="text-muted mb-0">Total User</p>
                </div>
                {{-- <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                </p> --}}
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-10 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
            <div class="panel-heading"><h5>Rekomendasi Metode Weighted Product</h5></div>

            <table  class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Alternatif</th>
                        <th>Ranking</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($rankingwp as $key => $data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{\App\Helper::alternatif($data->alternatif)}}</td>

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
    </div>

        <div class="col-md-10 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
            <div class="panel-heading"><h5>Rekomendasi Metode Topsis</h5></div>

            <table  class="table table-striped table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Alternatif</th>
                        <th>Ranking</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($ranking as $key => $data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{\App\Helper::alternatif($data->alternatif)}}</td>
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
    </div>
   

    

<div class="col-lg-8">
    <div class="card bg-info border-info text-white-50">
        <div class="card-body">
            <h5 class="mb-4 text-white"><i class="uil uil-question-circle me-3"></i>Panduan:</h5>
            <p class="card-text text-white">1. Menu Users : menu untuk mengelola user yang menggunakan aplikasi.</p>
            <p class="card-text text-white">2. Menu Alternatif : menu untuk menentukan alternatif (spesifikasi komputer) alternatif adalah pilihan atau objek yang disarankan.</p>
            <p class="card-text text-white">3. Menu Kriteria : menu untuk mengelola kriteria yang digunakan untuk menilai.</p>
            <p class="card-text text-white">4. Menu Perhitungan WP : menu yang digunakan untuk melihat hasil perhitungan dari metode weighted product.</p>
            <p class="card-text text-white">5. Menu Perhitungan TOPSIS : menu yang digunakan untuk melihat hasil perhitungan dari metode TOPSIS.</p>
            <p class="card-text text-white">6. Menu Hasil Rekomendasi : menu yang menampilkan rekomendasi alternatif dari dua metode </p>



        </div><!-- end card-body -->
    </div><!-- end card -->
</div><!-- end col-md-4 -->
</div>
<!-- end row -->

    </div> <!-- end col-->
<!-- end page title -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
@endsection