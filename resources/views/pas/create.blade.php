@extends('pas.template')

@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Pendaftaran Pasien</h1>
                <a href="" class="h4 text-white">Klinik</a>
                <a href="" class="h4 text-white">DentCare</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Lengkapi Form</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Daftar Pasien</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Input gagal.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pas.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="datetime-local" name="Tanggal" class="form-control bg-light border-0" placeholder="Tanggal Daftar" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="JenisKelamin" class="form-control bg-light border-0" placeholder="Jenis Kelamin" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="NamaPasien" class="form-control bg-light border-0" placeholder="Nama Pasien" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="Alamat" class="form-control bg-light border-0" placeholder="Alamat" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" name="NoTelepon" class="form-control bg-light border-0" placeholder="No Telepon" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select  name="Layanan" class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Pilih Layanan</option>
                                        <option value="Perawatan Kecantikan Gigi">Perawatan Kecantikan Gigi</option>
                                        <option value="Implan Gigi">Implan Gigi</option>
                                        <option value="Pemasangan Gigi Palsu">Pemasangan Gigi Palsu</option>
                                        <option value="Pemutihan Gigi">Pemutihan Gigi</option>
                                        <option value="Cabut Gigi">Cabut Gigi</option>
                                    </select>
                                </div>
                                  <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                                    <!-- <a href="/ambil_antrian" class="btn btn-dark py-3 px-5 me-3">Ambil Antrian</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;"></form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    
@endsection