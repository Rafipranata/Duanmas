@extends('./Template.Admin')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">DataTables /</span> Basic
            </h4>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Aduan</h5>
                </div>
                <div class="row row-bordered g-0">
                    <div class="card-body">
                        <form action="#">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"for="basic-default-name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $data->nama }}" readonly required
                                        name="nama" id="basic-default-name" placeholder="John Doe" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nik"
                                        id="basic-default-company" readonly value="{{ $data->nik }}"
                                        placeholder="ACME Inc." />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">No Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" id="basic-default-phone" required name="no_tlp" readonly
                                        value="{{ $data->no_tlp }}" class="form-control phone-mask"
                                        placeholder="658 799 8941" aria-label="658 799 8941"
                                        aria-describedby="basic-default-phone" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" readonly required name="alamat" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2">{{ $data->alamat }} </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Aduan</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" readonly required name="aduan" class="form-control"
                                        placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                        aria-describedby="basic-icon-default-message2" style="height: 100px">{{ $data->aduan }} </textarea>
                                </div>
                            </div>
                            @if ($respon != null)
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Aduan</label>
                                    <div class="col-sm-10">
                                        <textarea id="basic-default-message" readonly required name="aduan" class="form-control"
                                            placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                                            aria-describedby="basic-icon-default-message2" style="height: 100px">{{ $respon->respon }} </textarea>
                                    </div>
                                </div>
                            @else
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
