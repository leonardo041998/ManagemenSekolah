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
                                    <th>Email</th>
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
                                    <th>Kelas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($params as $students)
                                <tr>
                                    <td hidden class="id">{{ $students->id }}</td>
                                        <td>{{ $students->nisn }}</td>
                                        <td><a
                                                href="/students/{{ $students->id }}/profile">{{ $students->nama_lengkap }}</a>
                                        </td>
                                        <td>{{ $students->email }}</td>
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
                                        <td>{{ $students->kelas }} {{ $students->jurusan }}</td>
                                        <td>{{ $students->status_siswa }}</td>
                                        <td>
                                            <a href="/students/{{ $students->id }}/edit"><i
                                                    class="fas fa-pencil-alt m-r-5" style="color: yellowgreen"></i></a>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-2 {{ $errors->has('nisn') ? 'has-error' : '' }}">
                                    <input name="nisn" value="{{ old('nisn') }}" type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NISN">
                                    @error('nisn') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">NISN</label>
                                </div>

                                 <div class="form-floating mb-2 {{ $errors->has('email') ? 'has-error' : '' }} ">
                                    <input name="email" value="{{ old('email') }}" type="email"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan Email">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Email</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('nama_lengkap') ? 'has-error' : '' }} ">
                                    <input name="nama_lengkap" value="{{ old('nama_lengkap') }}" type="text"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Nama Lengkap">
                                    @error('nama_lengkap') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Nama Lengkap</label>
                                </div>
                                

                                <div class="form-floating mb-2 {{ $errors->has('tmpt_lahir') ? 'has-error' : '' }} ">
                                    <input name="tmpt_lahir" value="{{ old('tmpt_lahir') }}" type="text"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Tempat Lahir">
                                    @error('tmpt_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Tempat Lahir</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('tgl_lahir') ? 'has-error' : '' }} ">
                                    <input name="tgl_lahir" value="{{ old('tgl_lahir') }}" type="date"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Tanggal Lahir">
                                    @error('tgl_lahir') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                </div>

                                <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                                    <label for="jenis_kelamin">Pilih Jenis Kelamin </label> <br>
                                    <div class="form-check form-check-inline">
                                        <label for="jenis_kelamin">
                                            <input type="radio" name="jenis_kelamin" value="Pria"
                                                {{ old('jenis_kelamin') == 'Pria' ? 'checked' : '' }}
                                                id="jenis_kelamin">Pria
                                            <input type="radio" name="jenis_kelamin" value="Wanita"
                                                {{ old('jenis_kelamin') == 'Wanita' ? 'checked' : '' }}
                                                id="jenis_kelamin">Wanita
                                        </label>
                                        @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('agama') ? 'has-error' : '' }} ">
                                    <select id="agama" class="form-select" name="agama" placeholder="-- Pilih Agama --">
                                        <option disabled selected>-Pilih Agama-</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Agama</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('nama_ibu') ? 'has-error' : '' }} ">
                                    <input name="nama_ibu" value="{{ old('nama_ibu') }}" type="text"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Nama Ibu">
                                    @error('nama_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Nama Ibu</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('nama_ayah') ? 'has-error' : '' }} ">
                                    <input name="nama_ayah" value="{{ old('nama_ayah') }}" type="text"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Nama Ayah">
                                    @error('nama_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleInputEmail1">Nama Ayah</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('pkrj_ibu') ? 'has-error' : '' }} ">
                                    <select id="pkrj_ibu" class="form-select" name="pkrj_ibu"
                                    placeholder="-- Pilih Pekerjaan Ibu --">
                                    <option disabled selected>-Pilih Pekerjaan-</option>
                                    <option value="TNI/Polri">TNI/POLRI</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('pkrj_ibu') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('pkrj_ayah') ? 'has-error' : '' }} ">
                                    <select id="pkrj_ayah" class="form-select" name="pkrj_ayah"
                                    placeholder="-- Pilih Pekerjaan Ayah --">
                                    <option disabled selected>-Pilih Pekerjaan-</option>
                                    <option value="TNI/Polri">TNI/POLRI</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('pkrj_ayah') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-2 {{ $errors->has('nama_wali') ? 'has-error' : '' }} ">
                                    <input name="nama_wali" value="{{ old('nama_wali') }}" type="text"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Masukkan Nama Wali ">
                                    @error('nama_wali') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">Nama Wali</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('alamat') ? 'has-error' : '' }} ">
                                    <textarea name="alamat" value="{{ old('alamat') }}" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                                    @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">Alamat</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('rt') ? 'has-error' : '' }} ">
                                    <input name="rt" value="{{ old('rt') }}" type="number" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="RT">
                                    @error('rt') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">RT</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('rw') ? 'has-error' : '' }} ">
                                    <input name="rw" value="{{ old('rw') }}" type="number" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="RW">
                                    @error('rw') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">RW</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('kelurahan') ? 'has-error' : '' }} ">
                                    <input name="kelurahan" value="{{ old('kelurahan') }}" type="text"
                                    class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    aria-describedby="emailHelp" placeholder="Masukkan Nama Keluarahan">
                                    @error('kelurahan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">Kelurahan</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('kecamatan') ? 'has-error' : '' }} ">
                                    <input name="kecamatan" value="{{ old('kecamatan') }}" type="text"
                                    class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    aria-describedby="emailHelp" placeholder="Masukkan Nama Kecamatan">
                                    @error('kecamatan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for=" exampleFormControlTextarea1">Kecamatan</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('no_telp') ? 'has-error' : '' }} ">
                                    <input name="no_telp" value="{{ old('no_telp') }}" type="text" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3" aria-describedby="emailHelp"
                                    placeholder="Masukkan Nomor Telepon">
                                    @error('no_telp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleFormControlTextarea1">Nomor Telepon</label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('kelas') ? 'has-error' : '' }} ">
                                    <select id="kelas" class="form-select" name="kelas"
                                    placeholder="-- Pilih Kelas --">
                                    <option disabled selected>-Pilih Kelas-</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                                @error('kelas') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <label for="exampleInputEmail1"> Kelas </label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('jurusan') ? 'has-error' : '' }} ">
                                    <select id="jurusan" class="form-select" name="jurusan"
                                    placeholder="-- Pilih Jurusan --">
                                    <option disabled selected>-Pilih Jurusan-</option>
                                    <option value="IPA 1">IPA 1</option>
                                    <option value="IPA 2">IPA 2</option>
                                    <option value="IPA 3">IPA 3</option>
                                    <option value="IPA 4">IPA 4</option>
                                    <option value="IPS 1">IPS 1</option>
                                    <option value="IPS 2">IPS 2</option>
                                    <option value="IPS 3">IPS 3</option>
                                    <option value="IPS 4">IPS 4</option>
                                </select>
                                @error('jurusan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <label for="exampleInputEmail1"> Jurusan </label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('status_siswa') ? 'has-error' : '' }} ">
                                    <select id="status_siswa" class="form-select" name="status_siswa"
                                    placeholder="-- Pilih Status --">
                                    <option disabled selected>-Pilih Status-</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="Tidak Lulus">Tidak Lulus</option>
                                </select>
                                @error('status_siswa') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <label for="exampleInputEmail1"> Status </label>
                                </div>

                                <div class="form-floating mb-2 {{ $errors->has('avatar') ? 'has-error' : '' }} ">
                                    <input name="avatar" value="{{ old('avatar') }}" type="file" class="form-control"
                                    id="exampleFormControlTextarea1" rows="3" aria-describedby="emailHelp">
                                    @error('avatar') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <label for="exampleFormControlTextarea1">Avatar</label>
                                </div>

                            </div>
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

@endsection