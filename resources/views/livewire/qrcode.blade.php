<div>
    <x-modal id="qrcodeModal">
        <x-slot name="title">
            Ubah QrCode
        </x-slot>
        <x-slot name="body">
            <form action="{{ route('qrcode.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mb-3">
                    <input type="text" name="qrcode" value="{{ $qrcode }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </x-slot>
    </x-modal>

    <div class="card rounded p-3 mt-3">
        <p class="fs-4">QR Code Setting</p>
        <table>
            <tr>
                <th>QRCODE</th>
                <th>{{ $qrcode }}</th>
                <th>
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                        data-bs-target="#qrcodeModal">
                        Ubah QR
                    </button>
                    <a target="_blank"
                        href="https://api.qrserver.com/v1/create-qr-code/?size=500x500&margin=20&data={{ $qrcode }}"
                        download="filename" class="btn btn-sm btn-outline-success">Save QR</a>
                </th>
            </tr>
        </table>
    </div>
</div>
