@extends('layouts.guest.app')

@section('title', 'Data Warga Rumbai')

@section('content')


@if ($usia < 17)

<main class="main py-5">
    <div class="container text-center">
        <div class="alert alert-danger shadow-lg p-5">
            <h1 class="fw-bold text-danger mb-3">
                <i class="bi bi-shield-exclamation"></i>
                Akses Ditolak
            </h1>
            <p class="fs-5">
                Maaf, halaman ini <strong>tidak bisa diakses oleh pengguna di bawah 17 tahun</strong>.
            </p>
            <p class="text-muted mt-2">
                Usia Anda saat ini: <strong>{{ $usia }} tahun</strong>
            </p>
        </div>
    </div>
</main>

@else

{{-- =====================
     HALAMAN DATA WARGA
===================== --}}
<main class="main about-page">

<!-- Data Warga Section -->
<section class="about section py-5">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Data Warga Rumbai</h2>
            <p class="text-muted">Informasi lengkap data kependudukan Kelurahan Rumbai</p>
        </div>

        <div class="row align-items-center gy-4">
            <div class="col-lg-4 text-center">
                <img src="https://bandungbergerak.id/cdn/7/2/8/4/7284_683x468.jpg"
                     class="img-fluid rounded shadow-lg" alt="Warga Rumbai">
            </div>
            <div class="col-lg-8">
                <h3 class="fw-semibold">Profil Kelurahan</h3>
                <p class="fst-italic">
                    Kelurahan Rumbai di Kecamatan Rumbai, Kota Pekanbaru, Provinsi Riau.
                </p>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt text-primary"></i> <strong>Kode Pos:</strong> 28261</li>
                            <li><i class="bi bi-building text-primary"></i> <strong>Kecamatan:</strong> Rumbai</li>
                            <li><i class="bi bi-geo text-primary"></i> <strong>Kota:</strong> Pekanbaru</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-aspect-ratio text-primary"></i> <strong>Luas:</strong> 15.2 km²</li>
                            <li><i class="bi bi-house text-primary"></i> <strong>RT/RW:</strong> 45/12</li>
                            <li><i class="bi bi-postcard text-primary"></i> <strong>Kode Wilayah:</strong> 1471011006</li>
                        </ul>
                    </div>
                </div>

                <p class="mt-3">
                    Fasilitas publik lengkap: puskesmas, sekolah, tempat ibadah, dan pusat perbelanjaan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="stats section bg-light py-5">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4 text-center">
            <div class="col-md-3">
                <div class="card shadow-sm p-4 hover-shadow">
                    <h3 class="fw-bold text-primary">12,543</h3>
                    <p>Total Penduduk</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 hover-shadow">
                    <h3 class="fw-bold text-success">3,256</h3>
                    <p>Keluarga</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 hover-shadow">
                    <h3 class="fw-bold text-warning">156</h3>
                    <p>Kelahiran</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4 hover-shadow">
                    <h3 class="fw-bold text-danger">89</h3>
                    <p>Pendatang Baru</p>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

@endif

{{-- =====================
     STYLE & SCRIPT
===================== --}}
<style>
.hover-shadow:hover {
    transform: translateY(-5px);
    transition: .3s;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
}
</style>

{{-- Bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

{{-- AOS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@endsection
