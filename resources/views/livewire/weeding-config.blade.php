<div>
    <div class="row">
        <div class="col-12 mb-2">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="col-12 mb-2 col-md-6">
            <b>Buat link undangan</b>
            <hr>
            <input type="text" name="name" wire:model="name" id="name" placeholder="Nama tamu undangan" class="form-control mb-2">
            <input type="text" name="phone" wire:model="phone" id="phone" placeholder="Nomor Whatsapp 08xxxxx" class="form-control mb-2">
            <button class="btn btn-primary mb-2" onclick="reload()" wire:click="addInvitation" type="button">Buat Link</button>
        </div>
        <div class="col-12 mb-2 col-md-6">
            <div class="card p-3 shadow-lg">
                <div class="mb-2">
                    <label for="reception_date">Tanggal Resepsi</label>
                    <input type="datetime-local" class="form-control" name="reception_date" id="reception_date" wire:model="data.reception_date" value="{{ date('Y-m-d\TH:i', strtotime($weeding->reception_date)); }}">
                </div>
                <div class="mb-2">
                    <label for="reception_address">Alamat Resepsi</label>
                    <input type="text" class="form-control" name="reception_address" id="reception_address" wire:model="data.reception_address" value="{{ $weeding->reception_address }}">
                </div>
                <div class="mb-2">
                    <label for="reception_maps">Google Maps</label>
                    <input type="text" class="form-control" name="reception_maps" id="reception_maps" wire:model="data.reception_maps" value="{{ $weeding->reception_maps }}">
                </div>
                <div class="mb-2">
                    <button type="button" class="btn btn-success" wire:click="updateWeeding">Update Data</button>
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <div class="card p-3 shadow-lg">
                <b>List Tamu Undangan</b>
                <hr>
                <table class="table w-100 dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. Whatsapp</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invitations as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td><a target="d_blank" href="{{ url($weeding->code.'/'.$item->slug) }}">{{ url($weeding->code.'/'.$item->slug) }}</a></td>
                            <td>
                                <div class="d-flex gap-1 flex-wrap">
                                    <button type="button" onclick="copyLink('{{ url($weeding->code.'/'.$item->slug) }}')" class="btn btn-xs btn-secondary">Copy Link</button>
                                    <a target="d_blank" href="https://wa.me/{{ $item->wa() }}?text=Yth.%20{{ ucwords($item->name) }}%0A%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%20untuk%20menghadiri%20acara%20kami.%20Berikut%20link%20undangan%20kami%2C%20untuk%20info%20lengkap%20dari%20acara%20bisa%20kunjungi%3A%0A%0A{{ url('') }}%2F{{ $weeding->code }}%2F{{ $item->slug }}%0A%0AMerupakan%20suatu%20kehormatan%20dan%20kebahagiaan%20bagi%20kami%20atas%20do%27a%20restunya%20kami%20ucapkan%20terimakasih.%0A" class="btn btn-xs btn-success">Send WA</a>
                                    <button type="button" onclick="reload()" wire:click="deleteInvitation({{ $item->id }})" class="btn btn-xs btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $('table').dataTable();

    function reload(){
        setTimeout(() => {
            $('table').dataTable();
        }, 2000);
    }

    function copyLink(url) {
        // Get the link you want to copy
        var linkToCopy = document.createElement('input');
        linkToCopy.value = url;
        document.body.appendChild(linkToCopy);

        // Select the text in the input element
        linkToCopy.select();
        linkToCopy.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the text to the clipboard
        document.execCommand('copy');

        // Remove the input element
        document.body.removeChild(linkToCopy);

        alert('Link copied to clipboard!');
    }
</script>
@endpush
