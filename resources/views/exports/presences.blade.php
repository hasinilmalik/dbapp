<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Telat</th>
            <th>Tepat Waktu</th>
            <th>Sakit</th>
            <th>Izin</th>
        </tr>
    </thead>
    <tbody>
        @php
            // dd($presences);
        @endphp
        @foreach ($presences as $presence)
            @php
                $tanggal = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->first();
                // dd($pre);
                
                // convert ke bulan dan tahun
                Carbon\Carbon::setLocale('id');
                $date = Carbon\Carbon::parse($tanggal->created_at);
                $bulan = $date->month;
                $tahun = $date->year;
                
                // lalu cari jumlah sakitnya id ini
                $sakit = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->whereMonth('created_at', $bulan)
                    ->whereYear('created_at', $tahun)
                    ->where('note', 'sakit')
                    ->count();
                
                $izin = DB::table('presences')
                    ->where('teacher_id', $presence->teacher->id)
                    ->whereMonth('created_at', $bulan)
                    ->whereYear('created_at', $tahun)
                    ->where('note', 'izin')
                    ->count();
            @endphp
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $presence->teacher->nama }}</td>
                <td>{{ $presence->total_telat }}</td>
                <td>{{ $presence->total_kehadiran - $presence->total_telat - $sakit - $izin }}</td>
                <td>{{ $sakit }}</td>
                <td>{{ $izin }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
