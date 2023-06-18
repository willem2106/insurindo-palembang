<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="alt-menu layout-boxed">

    <!--  BEGIN LOADER  -->
    @include('layouts.loader')
    <!-- /LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.navbar')
    <!-- /NAVBAR -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.sidebar')
        <!-- /SIDEBAR -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                    </div>
                    {{-- notification --}}
                    <div>
                        @if (session('status'))
                            <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4"
                                role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"
                                        data-bs-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button> <strong>Success!</strong> <br>
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"
                                        data-bs-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button> <strong>Failed!</strong> <br>
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <!-- /BREADCRUMB -->

                    <!-- MODAL TAMBAH PUSAT-->
                    <div class="modal fade" id="tambahDataPusat" tabindex="-1" role="dialog"
                        aria-labelledby="tambahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataHeadPusat">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('add unit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input id="addOptionPusat" type="hidden" name="addOption">
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="keteranganAdd" class="form-label">Keterangan</label>
                                            <textarea name="keterangan" id="keteranganAdd" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="gambar" class="form-label">Gambar</label> <br>
                                            <input type="file" class="form-control-file" id="gambar"
                                                name="gambar" accept="image/png, image/jpeg" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL TAMBAH PUSAT -->

                    <!-- MODAL UBAH PUSAT-->
                    <div class="modal fade" id="ubahDataPusat" tabindex="-1" role="dialog"
                        aria-labelledby="ubahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ubahDataHeadPusat">Ubah Kantor Pusat</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('edit unit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input id="editOptionPusat" type="hidden" name="editOption">
                                    <input id="editIDPusat" type="hidden" name="editID">
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="gambar" class="form-label">Gambar</label> <br>
                                            <input type="file" class="form-control-file" id="gambar"
                                                name="gambar" accept="image/png, image/jpeg" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL UBAH -->

                    <!-- MODAL TAMBAH -->
                    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog"
                        aria-labelledby="tambahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataHead">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('add unit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input id="addOption" type="hidden" name="addOption">
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="namaKantorAdd" class="form-label">Nama Kantor</label>
                                            <input type="text" name="nama" id="namaKantorAdd"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="alamatAdd" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" id="alamatAdd"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="noTelpAdd" class="form-label">No Telepon</label>
                                            <input type="text" name="telepon" id="noTelpAdd"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="mailKantorAdd" class="form-label">Email</label>
                                            <input type="email" name="email" id="mailKantorAdd"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL TAMBAH -->

                    <!-- MODAL UBAH -->
                    <div class="modal fade" id="ubahData" tabindex="-1" role="dialog"
                        aria-labelledby="ubahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ubahDataHead">Ubah Kantor Cabang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('edit unit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input id="editOption" type="hidden" name="editOption">
                                    <input id="editID" type="hidden" name="editID">
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="namaKantor" class="form-label">Nama Kantor</label>
                                            <input type="text" name="nama" id="namaKantor"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" id="alamat"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="noTelp" class="form-label">No Telepon</label>
                                            <input type="text" name="telepon" id="noTelp"
                                                class="form-control">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="mailKantor" class="form-label">Email</label>
                                            <input type="email" name="email" id="mailKantor"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL UBAH -->

                    {{-- KANTOR PUSAT (1) --}}
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="row layout-top-spacing">
                                <div class="col-lg-8 mb-4">
                                    <h2>Kantor Pusat</h2>
                                </div>

                                <div class="col-xl-2 col-lg-3 mb-4 ms-auto">
                                    <button type="button" class="btn btn-primary btn-lg col-12"
                                        data-bs-toggle="modal" onclick="addDataPusat('Tambah Kantor Pusat', 1)"
                                        data-bs-target="#tambahDataPusat">
                                        Tambah Kantor Pusat
                                    </button>
                                </div>
                            </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-sejarah" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px; word-wrap: break-word;">
                                                    Keterangan</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center dt-no-sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pusat as $p)
                                                <tr>
                                                    <td>
                                                        <textarea disabled style="border: none; background-color: transparent;" cols="80" rows="7">{{ $p->keterangan }}</textarea>
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ asset($p->gambar_path) }}"
                                                            style="border-radius: 10%; max-width: 150px;">
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#ubahDataPusat"
                                                                    href="javascript:void(0);" class="bs-tooltip"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" data-original-title="Edit"
                                                                    onclick="editDataPusat(1, {{ $p->id }})"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path
                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                        </path>
                                                                    </svg></a>
                                                            </li>
                                                            <li>
                                                                <form style="display:inline" name="deleteData-1-{{ $p->id }}"
                                                                    action="{{ route('delete unit') }}"
                                                                    method="post">
                                                                    <a href="javascript:void(0);" class="bs-tooltip"
                                                                        onclick="deleteData('KANTOR PUSAT',1,{{ $p->id }})"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6">
                                                                            </polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg></a>
                                                                    @csrf
                                                                    <input type="hidden" name="option"
                                                                        value="1">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $p->id }}">
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- KANTOR CABANG (2) --}}
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="row layout-top-spacing">
                                <div class="col-lg-8 mb-4">
                                    <h2>Kantor Cabang</h2>
                                </div>

                                <div class="col-xl-2 col-lg-3 mb-4 ms-auto">
                                    <button type="button" class="btn btn-primary btn-lg col-12"
                                        data-bs-toggle="modal" onclick="addData('Tambah Kantor Cabang', 2)"
                                        data-bs-target="#tambahData">
                                        Tambah Kantor Cabang
                                    </button>
                                </div>
                            </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-kantorCabang" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px; word-wrap: break-word;">
                                                    Nama Kantor</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">No Telepon</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center dt-no-sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cabang as $p)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $p->nama }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->alamat }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->telepon }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->email }}
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#ubahData"
                                                                    href="javascript:void(0);" class="bs-tooltip"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" data-original-title="Edit"
                                                                    onclick="editData('Ubah Kantor Cabang', 2, '{{ $p->id }}', '{{ $p->nama }}', '{{ $p->alamat }}', '{{ $p->telepon }}', '{{ $p->email }}')"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path
                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                        </path>
                                                                    </svg></a>
                                                            </li>
                                                            <li>
                                                                <form style="display:inline" name="deleteData-2-{{ $p->id }}"
                                                                    action="{{ route('delete unit') }}"
                                                                    method="post">
                                                                    <a href="javascript:void(0);" class="bs-tooltip"
                                                                        onclick="deleteData('KANTOR CABANG',2,{{ $p->id }})"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6">
                                                                            </polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg></a>
                                                                    @csrf
                                                                    <input type="hidden" name="option"
                                                                        value="2">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $p->id }}">
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- UNIT LABORATORIUM ANALISIS DAN PENGUJIAN (3) --}}
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="row layout-top-spacing">
                                <div class="col-lg-8 mb-4">
                                    <h2>Unit Laboratorium Analisis dan Pengujian</h2>
                                </div>

                                <div class="col-xl-2 col-lg-3 mb-4 ms-auto">
                                    <button type="button" class="btn btn-primary btn-lg col-12"
                                        data-bs-toggle="modal"
                                        onclick="addData('Tambah Unit Laboratorium Analisis dan Pengujian', 3)"
                                        data-bs-target="#tambahData">
                                        Tambah Unit Laboratorium Analisis dan Pengujian
                                    </button>
                                </div>
                            </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-laboratorium" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px; word-wrap: break-word;">
                                                    Nama Kantor</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">No Telepon</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center dt-no-sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laboratorium as $p)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $p->nama }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->alamat }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->telepon }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->email }}
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#ubahData"
                                                                    href="javascript:void(0);" class="bs-tooltip"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" data-original-title="Edit"
                                                                    onclick="editData('Ubah Unit Laboratorium Analisis dan Pengujian', 3, '{{ $p->id }}', '{{ $p->nama }}', '{{ $p->alamat }}', '{{ $p->telepon }}', '{{ $p->email }}')"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path
                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                        </path>
                                                                    </svg></a>
                                                            </li>
                                                            <li>
                                                                <form style="display:inline" name="deleteData-3-{{ $p->id }}"
                                                                    action="{{ route('delete unit') }}"
                                                                    method="post">
                                                                    <a href="javascript:void(0);" class="bs-tooltip"
                                                                        onclick="deleteData('UNIT LABORATORIUM ANALISIS DAN PENGUJIAN',3,{{ $p->id }})"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6">
                                                                            </polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg></a>
                                                                    @csrf
                                                                    <input type="hidden" name="option"
                                                                        value="3">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $p->id }}">
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- UNIT LAYANAN KALIBRASI (4) --}}
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="row layout-top-spacing">
                                <div class="col-lg-8 mb-4">
                                    <h2>Unit Layanan Kalibrasi</h2>
                                </div>

                                <div class="col-xl-2 col-lg-3 mb-4 ms-auto">
                                    <button type="button" class="btn btn-primary btn-lg col-12"
                                        data-bs-toggle="modal" onclick="addData('Tambah Unit Layanan Kalibrasi', 4)"
                                        data-bs-target="#tambahData">
                                        Tambah Unit Layanan Kalibrasi
                                    </button>
                                </div>
                            </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-kalibrasi" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px; word-wrap: break-word;">
                                                    Nama Kantor</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">No Telepon</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center dt-no-sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kalibrasi as $p)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $p->nama }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->alamat }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->telepon }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $p->email }}
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#ubahData"
                                                                    href="javascript:void(0);" class="bs-tooltip"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" data-original-title="Edit"
                                                                    onclick="editData('Ubah Unit Layanan Kalibrasi', 4, '{{ $p->id }}', '{{ $p->nama }}', '{{ $p->alamat }}', '{{ $p->telepon }}', '{{ $p->email }}')"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path
                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                        </path>
                                                                    </svg></a>
                                                            </li>
                                                            <li>
                                                                <form style="display:inline" name="deleteData-4-{{ $p->id }}"
                                                                    action="{{ route('delete unit') }}"
                                                                    method="post">
                                                                    <a href="javascript:void(0);" class="bs-tooltip"
                                                                        onclick="deleteData('UNIT LAYANAN KALIBRASI',4,{{ $p->id }})"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6">
                                                                            </polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
                                                                        </svg></a>
                                                                    @csrf
                                                                    <input type="hidden" name="option"
                                                                        value="4">
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $p->id }}">
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  /CONTENT AREA  -->

        <!--  BEGIN FOOTER  -->
        @include('layouts.footer')
        <!--  /FOOTER  -->
    </div>

    @include('layouts.globalscript')

    <script>
        $('#style-sejarah').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        $('#style-kantorCabang').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        $('#style-laboratorium').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        $('#style-kalibrasi').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 10
        });

        function addDataPusat(name, id) {
            document.getElementById("tambahDataHeadPusat").textContent = name;
            document.getElementById("addOptionPusat").value = id;
        }

        function editDataPusat(opt, id) {
            document.getElementById("editOptionPusat").value = opt;
            document.getElementById("editIDPusat").value = id;
        }

        function addData(name, id) {
            document.getElementById("tambahDataHead").textContent = name;
            document.getElementById("addOption").value = id;
        }

        function editData(name, opt, id, kantor, alamat, telp, email) {
            document.getElementById("ubahDataHead").textContent = name;
            document.getElementById("editOption").value = opt;
            document.getElementById("editID").value = id;
            document.getElementById("namaKantor").value = kantor;
            document.getElementById("alamat").value = alamat;
            document.getElementById("noTelp").value = telp;
            document.getElementById("mailKantor").value = email;
        }


        function deleteData(name, opt, id) {
            event.preventDefault(); // prevent form submit
            var form = document.forms['deleteData-' + opt + '-' + id]; // storing the form
            Swal.fire({
                title: 'APAKAH ANDA YAKIN MENGHAPUS ' + name + ' INI?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'YA',
                cancelButtonText: 'TIDAK'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        }
    </script>

</body>

</html>
