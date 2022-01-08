@extends('layouts.main')

@section('content')
    <div class="main-wrapper">
        <div class="content container-fluid mt-5">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Siswa</h4>
                        </div>
                        <div class="card-body">
                            <form action="/students/{{ $students->id }}/update" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <h4 class="card-title">Info Siswa</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('nisn') ? 'has-error' : '' }}">
                                            <label for="exampleInputEmail1">NISN</label>
                                            <input name="nisn" value="{{ $students->nisn }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan NISN">
                                            @error('nisn') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('nama_lengkap') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Nama Lengkap</label>
                                            <input name="nama_lengkap" value="{{ $students->nama_lengkap }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Nama Lengkap">
                                            @error('nama_lengkap') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('tmpt_lahir') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                            <input name="tmpt_lahir" value="{{ $students->tmpt_lahir }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Tempat Lahir">
                                            @error('tmpt_lahir') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('tgl_lahir') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            <input name="tgl_lahir" value="{{ $students->tgl_lahir }}" type="date"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Tanggal Lahir">
                                            @error('tgl_lahir') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                                            <label for="jenis_kelamin">Pilih Jenis Kelamin </label> <br>
                                            <div class="form-check form-check-inline">
                                                <label for="jenis_kelamin">
                                                    <input type="radio" name="jenis_kelamin" value="Pria"
                                                        {{ $students->jenis_kelamin == 'Pria' ? 'checked' : '' }}
                                                        id="jenis_kelamin">Pria
                                                    <input type="radio" name="jenis_kelamin" value="Wanita"
                                                        {{ $students->jenis_kelamin == 'Wanita' ? 'checked' : '' }}
                                                        id="jenis_kelamin">Wanita
                                                </label>
                                                @error('jenis_kelamin') <div class="invalid-feedback">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('agama') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Agama</label>
                                            <select id="agama" class="form-control" name="agama"
                                                placeholder="-- Pilih Agama --">
                                                <option disabled selected>-Pilih Agama-</option>
                                                <option value="Islam"
                                                    {{ $students->agama == 'Islam' ? 'selected' : '' }}>
                                                    Islam</option>
                                                <option value="Kristen"
                                                    {{ $students->agama == 'Kristen' ? 'selected' : '' }}>
                                                    Kristen
                                                </option>
                                                <option value="Katolik"
                                                    {{ $students->agama == 'Katolik' ? 'selected' : '' }}>
                                                    Katolik
                                                </option>
                                                <option value="Hindu"
                                                    {{ $students->agama == 'Hindu' ? 'selected' : '' }}>
                                                    Hindu</option>
                                                <option value="Budha"
                                                    {{ $students->agama == 'Budha' ? 'selected' : '' }}>
                                                    Budha</option>
                                                <option value="Konghucu"
                                                    {{ $students->agama == 'Konghucu' ? 'selected' : '' }}>
                                                    Konghucu
                                                </option>
                                            </select>
                                            @error('agama') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('nama_ibu') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Nama Ibu</label>
                                            <input name="nama_ibu" value="{{ $students->nama_ibu }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Nama Ibu">
                                            @error('nama_ibu') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('nama_ayah') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Nama Ayah</label>
                                            <input name="nama_ayah" value="{{ $students->nama_ayah }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Nama Ayah">
                                            @error('nama_ayah') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('pkrj_ibu') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                                            <select id="pkrj_ibu" class="form-control" name="pkrj_ibu"
                                                placeholder="-- Pilih Pekerjaan Ibu --" value="pkrj_ibu">
                                                <option disabled selected>-Pilih Pekerjaan-</option>
                                                <option value="TNI/Polri"
                                                    {{ $students->pkrj_ibu == 'TNI/Polri' ? 'selected' : '' }}>
                                                    TNI/Polri
                                                </option>
                                                <option value="PNS" {{ $students->pkrj_ibu == 'PNS' ? 'selected' : '' }}>
                                                    PNS</option>
                                                <option value="Pegawai_Swasta"
                                                    {{ $students->pkrj_ibu == 'Pegawai_swasta' ? 'selected' : '' }}>
                                                    Pegawai Swasta</option>
                                                <option value="Wiraswasta"
                                                    {{ $students->pkrj_ibu == 'Wiraswasta' ? 'selected' : '' }}>
                                                    Wiraswasta</option>
                                                <option value="Pensiunan"
                                                    {{ $students->pkrj_ibu == 'Pensiunan' ? 'selected' : '' }}>
                                                    Pensiunan
                                                </option>
                                                <option value="Lainnya"
                                                    {{ $students->pkrj_ibu == 'Lainnya' ? 'selected' : '' }}>
                                                    Lainnya
                                                </option>
                                            </select>
                                            @error('pkrj_ibu') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('pkrj_ayah') ? 'has-error' : '' }} ">
                                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                                            <select id="pkrj_ayah" class="form-control" name="pkrj_ayah"
                                                placeholder="-- Pilih Pekerjaan Ayah --">
                                                <option disabled selected>-Pilih Pekerjaan-</option>
                                                <option value="TNI/Polri"
                                                    {{ $students->pkrj_ayah == 'TNI/Polri' ? 'selected' : '' }}>
                                                    TNI/Polri</option>
                                                <option value="PNS"
                                                    {{ $students->pkrj_ayah == 'PNS' ? 'selected' : '' }}>
                                                    PNS
                                                </option>
                                                <option value="Pegawai_Swasta"
                                                    {{ $students->pkrj_ayah == 'Pegawai_swasta' ? 'selected' : '' }}>
                                                    Pegawai Swasta</option>
                                                <option value="Wiraswasta"
                                                    {{ $students->pkrj_ayah == 'Wiraswasta' ? 'selected' : '' }}>
                                                    Wiraswasta</option>
                                                <option value="Pensiunan"
                                                    {{ $students->pkrj_ayah == 'Pensiunan' ? 'selected' : '' }}>
                                                    Pensiunan</option>
                                                <option value="Lainnya"
                                                    {{ $students->pkrj_ayah == 'Lainnya' ? 'selected' : '' }}>
                                                    Lainnya
                                                </option>
                                            </select>
                                            @error('pkrj_ayah') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('nama_wali') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">Nama Wali</label>
                                            <input name="nama_wali" value="{{ $students->nama_wali }}" type="text"
                                                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Masukkan Nama Wali">
                                            @error('nama_wali') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('alamat') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" value="{{ $students->alamat }}"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="Alamat">{{ $students->alamat }}</textarea>
                                            @error('alamat') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('rt') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">RT</label>
                                            <input name="rt" value="{{ $students->rt }}" type="number"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="RT">
                                            @error('rt') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('rw') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">RW</label>
                                            <input name="rw" value="{{ $students->rw }}" type="number"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                placeholder="RW">
                                            @error('rw') <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('kelurahan') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">Kelurahan</label>
                                            <input name="kelurahan" value="{{ $students->kelurahan }}" type="text"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                aria-describedby="emailHelp" placeholder="Masukkan Nama Keluarahan">
                                            @error('kelurahan') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('kecamatan') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">Kecamatan</label>
                                            <input name="kecamatan" value="{{ $students->kecamatan }}" type="text"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                aria-describedby="emailHelp" placeholder="Masukkan Nama Kecamatan">
                                            @error('kecamatan') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group{{ $errors->has('no_telp') ? 'has-error' : '' }} ">
                                            <label for="exampleFormControlTextarea1">Nomor Telepon</label>
                                            <input name="no_telp" value="{{ $students->no_telp }}" type="text"
                                                class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon">
                                            @error('no_telp') <div class="invalid-feedback">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
