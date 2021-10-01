<div id="5" class="tabcontent">
    <br />
    <div class="clearfix">
        <h4 class="float-left">Diklat</h4>
        <a class="btn btn-primary float-right" href="{{ route('guru.tambah_diklat') }}">Tambah</a>
    </div>
    <hr class="text-primary" />
    <table class="table table-striped tab-content" id="5">
        <thead>
            <tr>
                <th>Jenis Diklat</th>
                <th>Nama Diklat</th>
                <th>Penyelenggara</th>
                <th>Tahun</th>
                <th>Peran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($item->trainings as $item)
                <tr>
                    <td>{{ $item->jenis_diklat }}</td>
                    <td>{{ $item->nama_diklat }}</td>
                    <td>{{ $item->penyelenggara }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->peran }}</td>
                    <form action="{{ route('guru.hapus_diklat', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" onClick="confirm('Yakin mau di hapus?')" class="btn btn-primary">
                                <span><i class="las la-trash"></i></span>
                            </button>
                        </td>
                    </form>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>