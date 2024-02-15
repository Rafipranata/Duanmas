@extends('./Template/Admin')
@section('title')
    Dashboard - Admin
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-dark fw-bold">Dashboard</span>
        </h4>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary">
                                    <i class='bx bx-user'></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $jumlahSemua }} </h4>
                        </div>
                        <p class="mb-1">Jumlah Aduan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-success h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-success">
                                    <i class='bx bx-check'></i>
                                </span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $diterima }} </h4>
                        </div>
                        <p class="mb-1">Diterima</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger">
                                    <i class='bx bx-x'></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $cancel }}</h4>
                        </div>
                        <p class="mb-1">Gagal</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-warning">
                                    <i class='bx bx-time'></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">{{ $pending }} </h4>
                        </div>
                        <p class="mb-1">Pending</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
