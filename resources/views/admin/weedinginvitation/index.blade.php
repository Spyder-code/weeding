@extends('layouts.dashboard')
@section('title','List WeedingInvitation')
@section('content')
<div class="row w-100">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-success btn-sm" onclick="addForm()">Tambah WeedingInvitation</button>
                <hr class="m-2">
                <table class="table table-sm" style="white-space:nowrap">
                    <thead>
                        <th>No</th>
                        <th>Weeding_id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Send_message_status</th>
                        <th>Attended</th>
                        <th>Message</th>
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
                @include('admin.weedinginvitation.form')
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
            url: '{{ route('weedinginvitation.data') }}',
            method:"POST",
            data:{
                '_token': @json(csrf_token()),
            }
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'weeding_id'},
            {data: 'name'},
            {data: 'phone'},
            {data: 'address'},
            {data: 'send_message_status'},
            {data: 'attended'},
            {data: 'message'},
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
        $('#modal-form .modal-title').text('Tambah WeedingInvitation');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', @json(route('weedinginvitation.store')));
        $('#modal-form [name=_method]').val('post');
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit WeedingInvitation');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');

        $.get(url)
            .done((response) => {
                $('#modal-form [name=weeding_id]').val(response.data.weeding_id);
                $('#modal-form [name=name]').val(response.data.name);
                $('#modal-form [name=phone]').val(response.data.phone);
                $('#modal-form [name=address]').val(response.data.address);
                $('#modal-form [name=send_message_status]').val(response.data.send_message_status);
                $('#modal-form [name=attended]').val(response.data.attended);
                $('#modal-form [name=message]').val(response.data.message);
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