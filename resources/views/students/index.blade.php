@extends('layouts.main')

@section('content')
    {{-- message --}}
    <div class="main-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h3 class="panel-title">DATA SISWA SMAN 365 CIBINONG</h3>
                        <div class="right">
                            <button type="button" class="btn btn-default float-right" data-toggle="modal"
                                data-target="#addstudent"><i class="fa fa-plus-square"></i>
                                Tambah Data </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Nama Ibu</th>
                                    <th>Nama Ayah</th>
                                    <th>Pekerjaan Ibu</th>
                                    <th>Pekerjaan Ayah</th>
                                    <th>Nama Wali</th>
                                    <th>Alamat</th>
                                    <th>RT</th>
                                    <th>RW</th>
                                    <th>Kelurahan</th>
                                    <th>Kecamatan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($params as $students)
                                    <tr>
                                        <td hidden class="id">{{ $students->id }}</td>
                                        <td>{{ $students->nisn }}</td>
                                        <td><a
                                                href="/student/{{ $students->id }}/profile">{{ $students->nama_lengkap }}</a>
                                        </td>
                                        <td>{{ $students->tmpt_lahir }}</td>
                                        <td>{{ $students->tgl_lahir }}</td>
                                        <td>{{ $students->jenis_kelamin }}</td>
                                        <td>{{ $students->agama }}</td>
                                        <td>{{ $students->nama_ibu }}</td>
                                        <td>{{ $students->nama_ayah }}</td>
                                        <td>{{ $students->pkrj_ibu }}</td>
                                        <td>{{ $students->pkrj_ayah }}</td>
                                        <td>{{ $students->nama_wali }}</td>
                                        <td>{{ $students->alamat }}</td>
                                        <td>{{ $students->rt }}</td>
                                        <td>{{ $students->rw }}</td>
                                        <td>{{ $students->kelurahan }}</td>
                                        <td>{{ $students->kecamatan }}</td>
                                        <td>{{ $students->no_telp }}</td>
                                        <td>
                                            <a href="/students/{{ $students->id }}/edit"><i
                                                    class="btn fas fa-pencil-alt m-r-5" style="color: yellowgreen"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#delete"><i
                                                    class="fas fa-trash-alt m-r-5 delete" id="{{ $students->id }}"
                                                    name="{{ $students->nama_lengkap }}" style="color: red"></i></a>
                                            {{-- <a href="/students/{{ $students->id }}/edit"
                                                            class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="/students/{{ $students->id }}/delete"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin Mau Dihapus')">Delete</a> --}}
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

    <div class="modal fade" id="addstudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Siswa</h5>
                    <button type="button" class="btn btn-close float-right" data-dismiss="modal"
                        data-target="#exampleModal"><i class="fa fa-window-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/students/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="exampleInputEmail1">NISN</label>
                        <div class="form-floating{{ $errors->has('nisn') ? 'has-error' : '' }}">
                            <input name="nisn" value="{{ old('nisn') }}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NISN">
                            @error('nisn') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('nama_lengkap') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name="nama_lengkap" value="{{ old('nama_lengkap') }}" type="text"
                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Masukkan Nama Lengkap">
                            @error('nama_lengkap') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('tmpt_lahir') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input name="tmpt_lahir" value="{{ old('tmpt_lahir') }}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir">
                            @error('tmpt_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('tgl_lahir') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tgl_lahir" value="{{ old('tgl_lahir') }}" type="date" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tanggal Lahir">
                            @error('tgl_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                            <label for="jenis_kelamin">Pilih Jenis Kelamin </label> <br>
                            <div class="form-check form-check-inline">
                                <label for="jenis_kelamin">
                                    <input type="radio" name="jenis_kelamin" value="Pria"
                                        {{ old('jenis_kelamin') == 'Pria' ? 'checked' : '' }} id="jenis_kelamin">Pria
                                    <input type="radio" name="jenis_kelamin" value="Wanita"
                                        {{ old('jenis_kelamin') == 'Wanita' ? 'checked' : '' }} id="jenis_kelamin">Wanita
                                </label>
                                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-floating {{ $errors->has('agama') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Agama</label>
                            <select id="agama" class="form-control" name="agama" placeholder="-- Pilih Agama --">
                                <option disabled selected>-Pilih Agama-</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                            @error('agama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('nama_ibu') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input name="nama_ibu" value="{{ old('nama_ibu') }}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Ibu">
                            @error('nama_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('nama_ayah') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input name="nama_ayah" value="{{ old('nama_ayah') }}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Ayah">
                            @error('nama_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('pkrj_ibu') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                            <select id="pkrj_ibu" class="form-control" name="pkrj_ibu"
                                placeholder="-- Pilih Pekerjaan Ibu --">
                                <option disabled selected>-Pilih Pekerjaan-</option>
                                <option value="TNI/Polri">TNI/POLRI</option>
                                <option value="PNS">PNS</option>
                                <option value="Pegawai_Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('pkrj_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('pkrj_ayah') ? 'has-error' : '' }} ">
                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                            <select id="pkrj_ayah" class="form-control" name="pkrj_ayah"
                                placeholder="-- Pilih Pekerjaan Ayah --">
                                <option disabled selected>-Pilih Pekerjaan-</option>
                                <option value="TNI/Polri">TNI/POLRI</option>
                                <option value="PNS">PNS</option>
                                <option value="Pegawai_Swasta">Pegawai Swasta</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('pkrj_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('nama_wali') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">Nama Wali</label>
                            <input name="nama_wali" value="{{ old('nama_wali') }}" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Wali ">
                            @error('nama_wali') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('alamat') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" value="{{ old('alamat') }}" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                            @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('rt') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">RT</label>
                            <input name="rt" value="{{ old('rt') }}" type="number" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" placeholder="RT">
                            @error('rt') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('rw') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">RW</label>
                            <input name="rw" value="{{ old('rw') }}" type="number" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" placeholder="RW">
                            @error('rw') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('kelurahan') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">Kelurahan</label>
                            <input name="kelurahan" value="{{ old('kelurahan') }}" type="text" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" aria-describedby="emailHelp"
                                placeholder="Masukkan Nama Keluarahan">
                            @error('kelurahan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('kecamatan') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">Kecamatan</label>
                            <input name="kecamatan" value="{{ old('kecamatan') }}" type="text" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" aria-describedby="emailHelp"
                                placeholder="Masukkan Nama Kecamatan">
                            @error('kecamatan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="form-floating {{ $errors->has('no_telp') ? 'has-error' : '' }} ">
                            <label for="exampleFormControlTextarea1">Nomor Telepon</label>
                            <input name="no_telp" value="{{ old('no_telp') }}" type="text" class="form-control"
                                id="exampleFormControlTextarea1" rows="3" aria-describedby="emailHelp"
                                placeholder="Masukkan Nomor Telepon">
                            @error('no_telp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop