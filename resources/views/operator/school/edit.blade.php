@extends('layout.master')
@section('page_judul', 'Data Sekolah')
@section('content')
    <div class="card rounded p-3">
        <form action="{{ route('operator.update_schoolid', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="table-responsive">
                <table id="example" class="table">
                    <tbody>
                        <tr>
                            <th>Nama Sekolah</th>
                            <td><input type="text" class="form-control" name="nama_sekolah"
                                    value="{{ $item->nama_sekolah }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Npsn</th>
                            <td><input type="text" class="form-control" name="npsn" value="{{ $item->npsn }}"></td>
                        </tr>
                        {{-- <tr>
                            <th>nss</th>
                            <td><input type="text" class="form-control" name="nss" value="{{ $item->nss }}"></td>
                        </tr> --}}
                        <tr>
                            <th>Alamat Sekolah</th>
                            <td><input type="text" class="form-control" name="alamat_sekolah"
                                    value="{{ $item->alamat_sekolah }}"></td>
                        </tr>
                        <tr>
                            <th>Kode Pos</th>
                            <td><input type="text" class="form-control" name="kode_pos" value="{{ $item->kode_pos }}">
                            </td>
                        </tr>
                        <tr>
                            <th>No Telp</th>
                            <td><input type="text" class="form-control" name="no_telp" value="{{ $item->no_telp }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Kelurahan</th>
                            <td><input type="text" class="form-control" name="kelurahan" value="{{ $item->kelurahan }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td><input type="text" class="form-control" name="kecamatan" value="{{ $item->kecamatan }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Kota</th>
                            <td><input type="text" class="form-control" name="kota" value="{{ $item->kota }}"></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td><input type="text" class="form-control" name="provinsi" value="{{ $item->provinsi }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td><input type="text" class="form-control" name="website" value="{{ $item->website }}">
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" class="form-control" name="email" value="{{ $item->email }}"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="SUBMIT" class="btn btn-primary float-end ml-1">Update </button>
        </form>
    </div>
@endsection
