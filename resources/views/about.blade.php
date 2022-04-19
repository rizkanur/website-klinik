@extends('utama.master')

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
                <h1 class="display-3 text-white animated zoomIn">Tentang Kami</h1>
                <a href="" class="h4 text-white">Klinik</a>
                <a href="" class="h4 text-white">DentCare</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Profil Klinik</h5>
                        <h1 class="display-5 mb-0">Heartfully Serve for Your Beautiful Smile</h1>
                    </div>
                    <p class="mb-4">Klinik DentCare adalah salah satu klinik gigi di Malang yang menyediakan pelayanan perawatan gigi dan mulut umum dan spesialistik. 
                        Jadwal praktek Klinik DentCare Senin – Jumat mulai jam 08.00 – 21.00 dan Minggu libur.</p>
                    <p class="mb-4">Saat ini Klinik DentCare memiliki Dokter gigi umum, Dokter gigi spesialis Orthodonsi, Dokter spesialis Konservasi gigi, dan Dokter Spesialis Prostodonsi. 
                            Dilengkapi dengan tim manajemen yang handal dan pelayanan front liner yang ramah, 
                            menjadikan Klinik DentCare pilihan terbaik bagi kesehatan gigi dan mulut keluarga Indonesia.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pemenang penghargaan klinik terbaik</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Staff Professional</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pelayanan Terbaik</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Harga Terjangkau</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
    </div>
    <!-- Newsletter End -->
    
@endsection
