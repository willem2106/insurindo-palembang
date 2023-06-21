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

                    <!-- MODAL TAMBAH -->
                    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog"
                        aria-labelledby="tambahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahdataLabel">Tambah Home</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('add home') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" id="judul" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="gambar" class="form-label">Gambar</label> <br>
                                            <input type="file" class="form-control-file" id="gambar"
                                                name="gambar" accept="image/png, image/jpeg , video/mp4"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL TAMBAH-->

                    <!-- MODAL UBAH -->
                    <div class="modal fade" id="ubahdata" tabindex="-1" role="dialog"
                        aria-labelledby="ubahdataLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahdataLabel">Ubah Home</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <svg> ... </svg>
                                    </button>
                                </div>
                                <form action="{{ route('edit home') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="idEdit" id="idEdit">
                                    <div class="modal-body">
                                        <div class="form-group mb-2">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" id="judulEdit" class="form-control"
                                                name="judul">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="gambar" class="form-label">Gambar</label> <br>
                                            <input type="file" class="form-control-file" id="gambar"
                                                name="gambar" accept="image/png, image/jpeg, video/mp4" />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /MODAL UBAH-->


                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-3 mb-4 ms-auto">
                                    <button type="button" class="btn btn-primary btn-lg col-12"
                                        data-bs-toggle="modal" data-bs-target="#tambahdata">
                                        Tambah Home
                                    </button>
                                </div>
                            </div>
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-3" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Judul</th>
                                                <th class="text-center">Gambar</th>
                                                <th class="text-center dt-no-sorting">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($konten as $k)
                                                <tr>
                                                    <td>{{ $k->judul }}</td>
                                                    <td class="text-center">
                                                            <img src="{{ asset($k->gambar_path) }}"
                                                                style="border-radius: 10%; max-width: 150px;">
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#ubahdata"
                                                                    href="javascript:void(0);" class="bs-tooltip"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Edit" data-original-title="Edit"
                                                                    onclick="editHome('{{ $k->id }}', '{{ $k->judul }}')"><svg
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
                                                                <form style="display:inline" name="deleteForm-{{ $k->id }}"
                                                                    action="{{ route('delete home') }}"
                                                                    method="post">
                                                                    <a href="javascript:void(0);" class="bs-tooltip"
                                                                        onclick="deleteHome('{{ $k->id }}')"><svg
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
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $k->id }}">
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
        c3 = $('#style-3').DataTable({
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

        multiCheck(c3);

        function editHome(id, judul) {
            document.getElementById("idEdit").value = id;
            document.getElementById("judulEdit").value = judul;
        }

        function deleteHome(id) {
            event.preventDefault(); // prevent form submit
            var form = document.forms['deleteForm-' + id]; // storing the form
            Swal.fire({
                title: 'APAKAH ANDA YAKIN MENGHAPUS TOPIK INI?',
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
