@extends('layouts.main')

@section('content')

    <div class="content container-fluid">
        <div class="page-header mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#"> <img class="rounded-circle" alt="User Image" src="{{ $students->getAvatar() }}">
                            </a>
                        </div>
                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-3">{{ $students->nama_lengkap }}</h4>
                            <h6 class="text-muted mt-1">{{ $students->kelas }} {{ $students->jurusan }}</h6>
                            <h6 class="text-muted mt-1">{{ $students->status_siswa }}</h6>
                        </div>

                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                href="#per_details_tab">Info Siswa</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#nilai_tab">Nilai </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab"
                                href="#aktivitas_tab">Aktivitas </a> </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Data Diri</span>
                                            <a class="edit-link" href="/students/{{ $students->id }}/edit"><i
                                                    class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>

                                        <div class="row mt-5">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">NISN :
                                            </p>
                                            <p class="col-sm-9">{{ $students->nisn }}</p>
                                        </div>


                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Nama
                                                Lengkap :</p>
                                            <p class="col-sm-9">{{ $students->nama_lengkap }}</p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Tempat
                                                Lahir :</p>
                                            <p class="col-sm-9">{{ $students->tmpt_lahir }}</p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Tanggal
                                                Lahir :</p>
                                            <p class="col-sm-9">{{ $students->tgl_lahir }}</p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Alamat :
                                            </p>
                                            <p class="col-sm-9">{{ $students->alamat }}</p>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Agama :
                                            </p>
                                            <p class="col-sm-9">{{ $students->agama }}</p>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Jenis
                                                Kelamin :</p>
                                            <p class="col-sm-9">{{ $students->jenis_kelamin }}</p>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Nama
                                                Ayah :</p>
                                            <p class="col-sm-9">{{ $students->nama_ayah }}</p>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p style="font-weight:bold" class="col-sm-3 text-sm-right mb-0 mb-sm-3">Nama Ibu
                                                :</p>
                                            <p class="col-sm-9">{{ $students->nama_ibu }}</p>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="nilai_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Nilai</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
