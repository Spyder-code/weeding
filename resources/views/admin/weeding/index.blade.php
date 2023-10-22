@extends('layouts.dashboard')
@section('title','List Weeding')
@section('content')
<div class="row w-100">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-success btn-sm" onclick="addForm()">Tambah Weeding</button>
                <hr class="m-2">
                <table class="table table-sm" style="white-space:nowrap">
                    <thead>
                        <th>No</th>
                        <th>Code</th>
                        <th>Groom</th>
                        <th>Bride</th>
                        <th>Ceremony_date</th>
                        <th>Ceremony_address</th>
                        <th>Ceremony_maps</th>
                        <th>Reception_date</th>
                        <th>Reception_address</th>
                        <th>Reception_maps</th>
                        <th>Is_live</th>
                        <th>Status</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="form-title" aria-hidden="true">
    <div class="modal-dialog">
        <form id="form" class="modal-content">
            @csrf
            @method('post')
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="error-messages" class="text-danger my-2"></ul>
                @include('admin.weeding.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    $("select").selectize({
        sortField:{field:"text",direction:"asc"},
        dropdownParent:"body",
        onDropdownClose: function(dd) {
            this.refreshOptions(false);
        }
    })
    let table = $('.table').DataTable({
        processing: true,
        responsive:true,
        ajax: {
            url: '{{ route('weeding.data') }}',
            method:"POST",
            data:{
                '_token': @json(csrf_token()),
            }
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'code'},
            {data: 'groom'},
            {data: 'bride'},
            {data: 'ceremony_date'},
            {data: 'ceremony_address'},
            {data: 'ceremony_maps'},
            {data: 'reception_date'},
            {data: 'reception_address'},
            {data: 'reception_maps'},
            {data: 'is_live'},
            {data: 'status'},
            {data: 'aksi', searchable: false, sortable: false},
        ],
        dom: 'Bfrtip',
        lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
        buttons: [
            'pageLength','copy', 'csv', 'excel', 'pdf', 'print','colvis'
        ]
    });

    $('#form').submit(function (e) {
        e.preventDefault();
        $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
        .done((response) => {
            $('#modal-form').modal('hide');
            table.ajax.reload();
            $.toast({
                heading:'Well Done!',
                text:'Data berhasil disimpan!',
                icon: 'success',
                position:'top-right',
                bgColor:'#5ba035'
            });
        })
        .fail((errors) => {
            $.toast({
                heading:'Warning!',
                text:'Data tidak valid!',
                icon: 'error',
                position:'top-right',
                bgColor:'#bf441d'
            });
            $('#error-messages').html('');
            $.each(errors.responseJSON, function (idx, item) {
                $('#error-messages').append('<li>'+item+'</li>');
            });
            return;
        });
    });

    function addForm() {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Tambah Weeding');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', @json(route('weeding.store')));
        $('#modal-form [name=_method]').val('post');
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Weeding');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');

        $.get(url)
            .done((response) => {
                $('#modal-form [name=code]').val(response.data.code);
                $('#modal-form [name=groom]').val(response.data.groom);
                $('#modal-form [name=bride]').val(response.data.bride);
                $('#modal-form [name=ceremony_date]').val(response.data.ceremony_date);
                $('#modal-form [name=ceremony_address]').val(response.data.ceremony_address);
                $('#modal-form [name=ceremony_maps]').val(response.data.ceremony_maps);
                $('#modal-form [name=reception_date]').val(response.data.reception_date);
                $('#modal-form [name=reception_address]').val(response.data.reception_address);
                $('#modal-form [name=reception_maps]').val(response.data.reception_maps);
                $('#modal-form [name=is_live]').val(response.data.is_live);
                $('#modal-form [name=status]').val(response.data.status);
            })
            .fail((errors) => {
                alert('Tidak dapat menampilkan data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Yakin ingin menghapus data terpilih?')) {
            $.post(url, {
                    '_token': @json(csrf_token()),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                    $.toast({
                        heading:'Well Done!',
                        text:'Data berhasil dihapus!',
                        icon: 'success',
                        position:'top-right',
                        bgColor:'#5ba035'
                    });
                })
                .fail((errors) => {
                    alert('Tidak dapat menghapus data');
                    return;
                });
        }
    }
</script>
@endpush