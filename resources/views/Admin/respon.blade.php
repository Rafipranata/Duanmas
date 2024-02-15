@extends('./Template.Admin')
@section('title')
    Respon - Admin
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}">
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }}" />
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">DataTables /</span> Basic
            </h4>
            <div class="card">
                <h5 class="card-header">Complex Headers</h5>
                <div class="card-datatable text-nowrap">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select
                                            name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"
                                            class="form-select">
                                            <option value="7">7</option>
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                <div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control" placeholder=""
                                            aria-controls="DataTables_Table_1"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="dt-complex-header table table-bordered dataTable no-footer"
                                id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info" style="width: 1333px;">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="sorting sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_1" colspan="1"
                                            aria-label="Name: activate to sort column descending" style="width: 158.333px;"
                                            aria-sort="ascending">NAMA</th>

                                        <th rowspan="2" class="sorting_disabled" colspan="1" aria-label="Actions"
                                            style="width: 61px;">NIK</th>
                                    </tr>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            aria-label="E-mail: activate to sort column ascending"
                                            style="width: 225.667px;">STATUS</th>

                                        <th class="border-1 sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                            rowspan="1" colspan="1"
                                            aria-label="Status: activate to sort column ascending"
                                            style="width: 112.667px;">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                        <tr class="odd">
                                            <td class="sorting_1">{{ $item->nama }} </td>
                                            <td>{{ $item->nik }} </td>

                                            @if ($item->status == 'Pending')
                                                <td><span class="badge  bg-label-warning">{{ $item->status }} </span></td>
                                            @elseif ($item->status == 'Diterima')
                                                <td><span class="badge  bg-label-success">{{ $item->status }} </span></td>
                                            @else
                                                <td><span class="badge  bg-label-danger">{{ $item->status }} </span></td>
                                            @endif


                                            <td>
                                                <div class="d-inline-block"><a href="javascript:;"
                                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown"><i
                                                            class="bx bx-dots-vertical-rounded"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                            href="/admin/detail/aduan/{{ $item->id }}"
                                                            class="dropdown-item">Details</a>
                                                        <a href="#" class="dropdown-item"
                                                            onclick="tolakPembelian({{ $item->id }})">Tolak</a>
                                                        <div class="dropdown-divider"></div><a href="javascript:;"
                                                            class="dropdown-item text-danger delete-record">Delete</a>
                                                    </div>
                                                </div>
                                                @if ($item->status == 'Pending')
                                                    <a href="/admin/respon/aduan/{{ $item->id }}"
                                                        class="btn btn-sm btn-icon item-edit">
                                                        <i class='bx bx-pencil'></i></a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_1_info" role="status"
                                    aria-live="polite">
                                    Showing 1 to 7 of 100 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_1_previous"><a aria-controls="DataTables_Table_1"
                                                aria-disabled="true" role="link" data-dt-idx="previous"
                                                tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" aria-current="page"
                                                data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" data-dt-idx="1"
                                                tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" data-dt-idx="2"
                                                tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" data-dt-idx="3"
                                                tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" data-dt-idx="4"
                                                tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item disabled" id="DataTables_Table_1_ellipsis"><a
                                                aria-controls="DataTables_Table_1" aria-disabled="true" role="link"
                                                data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="DataTables_Table_1" role="link" data-dt-idx="14"
                                                tabindex="0" class="page-link">15</a></li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_1_next"><a
                                                href="#" aria-controls="DataTables_Table_1" role="link"
                                                data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../demo/assets/js/tables-datatables-basic.js"></script>
    <!-- Form Validation -->
    <script src="../../demo/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
    <script src="../../demo/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="../../demo/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="../../demo/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b"></script>

    <script>
        function tolakPembelian(id) {
            // Kirim permintaan POST menggunakan AJAX
            $.ajax({
                type: 'POST',
                url: '/admin/tolak/' + id,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Tambahkan logika setelah permintaan berhasil
                    location.reload();
                },
                error: function(error) {
                    // Tambahkan logika jika permintaan gagal
                    console.log(error);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#DataTables_Table_1').DataTable({
                "paging": true, // aktifkan paging
                "searching": true, // aktifkan pencarian
                // tentukan ID dari elemen pencarian
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search..."
                }
            });
        });
    </script>
@endsection
