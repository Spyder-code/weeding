<div>
    <div class="row my-2">
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-lg-8" style="border-right: #f4e2be 1px solid;">
            @if ($is_created)
            <textarea wire:model="message" class="avander p-3" autofocus cols="30" rows="10" style="background: transparent; color: #f4e2be; border: 1px #f4e2be dashed;list-style-type: none; letter-spacing:2px; font-weight:bold"></textarea>
            <div class="d-flex gap-3">
                <div wire:click="send" class="avander ls box px-5 py-3 w-100" style="color: #cbf4be;"><b>Kirim</b></div>
                <div wire:click="write" class="avander ls box px-5 py-3 w-100" style="color: #f4c4be;"><b>Batal</b></div>
            </div>
            @else
            <ul class="chats">
                @foreach ($data as $item)
                <li class="avander fw-bold text-start my-2" style="padding:15px; color: #f4e2be; border: 1px #f4e2be dashed;list-style-type: none; letter-spacing:2px">"{{ $item->message }}"</li>
                @endforeach
            </ul>
            <div wire:click="write" class="avander ls box px-5 py-3 w-100" style="color: #f4e2be;"><b>Tulis Ucapan</b></div>
            @endif
        </div>
    </div>
</div>
