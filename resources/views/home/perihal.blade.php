@extends('layouts.main')

@section('container')
    <h1>Perihal</h1>
    <div class="mt-4 row">
        <div class="mb-5 col-lg-12">
            <div class="card">
                <div class="p-4 d-flex align-items-center card-header">
                    <div class="mb-0 h5 fw-semibold card-title">
                        <i class="bi bi-info-circle"></i> INFORMASI MEDIA
                    </div>
                </div>
                <div class="container p-5">
                    <p class="mb-4 text-center">Media pembelajaran ini dibuat untuk memenuhi persyaratan dalam menyelesaikan
                        studi di program Strata-1 Pendidikan Komputer dengan judul:</p>
                    <p class="fw-semibold fs-5 text-center">PENGEMBANGAN MEDIA PEMBELAJARAN INTERAKTIF BERBASIS WEB
                        PADA MATERI NODE.JS DASAR DENGAN METODE TUTORIAL MENGGUNAKAN PENDEKATAN GAMIFIKASI</p>

                    <div class="row align-items-center mt-5">
                        <div class="col-md-9">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Nama</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Muhammad Ramadhani</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Email</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: <a
                                                    href="mailto:ramadhaniking2015@gmail.com">ramadhaniking2015@gmail.com</a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Dosen Pembimbing 1</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Nuruddin Wiranda, S.Kom., M.Cs.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Dosen Pembimbing 2</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Novan Alkaf Bahraini Saputra, S.Kom., M.T.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Program Studi</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: S-1 Pendidikan Komputer</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Fakultas</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Fakultas Keguruan dan Ilmu Pendidikan</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="me-5 mb-2">Instansi</p>
                                        </td>
                                        <td>
                                            <p class="mb-2">: Universitas Lambung Mangkurat</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-3 text-center mt-4 mt-md-0 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/Logo Node Quest Transparant.png') }}" alt="Logo Node Quest"
                                class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mb-5 col-lg-12">
            <div class="card">
                <div class="p-4 d-flex align-items-center card-header">
                    <div class="mb-0 h5 fw-semibold card-title">
                        <i class="bi bi-book"></i> DAFTAR PUSTAKA DAN ATRIBUSI
                    </div>
                </div>
                <div class="p-5 card-body">
                    <p class="mb-4 card-text">Supardi, Y (2024), Semua Bisa Menjadi Programmer Node.js Basic. Penerbit PT
                        Elex Media Komputindo</p>
                    <p class="mb-4 card-text"><a href="https://nodejs.org/en/learn" target="_blank">nodejs.org/en/learn</a>
                        (2024)</p>
                    <p class="mb-4 card-text">Ilustrasi pada media pembelajaran diadaptasi dari <a
                            href="https://storyset.com/work" target="_blank">storyset.com/work.</a> </p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
