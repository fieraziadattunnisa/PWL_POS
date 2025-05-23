@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Stok Barang</h3>
        <div class="card-tools">
            <button onclick="modalAction(`{{ url('stok/import') }}`)" class="btn btn-info">Import Stok</button>
            <a href="{{ url('stok/export_excel')}}" class="btn btn-primary"><i class="fas fa-file-excel"></i> Export Stok </a>
            <a href="{{ url('stok/export_pdf')}}" class="btn btn-primary"><i class="fas fa-file-pdf"></i> Export Stok </a>
            <button onclick="modalAction(`{{ url('stok/create_ajax') }}`)" class="btn btn-success">Tambah Ajax</button>
        </div>
    </div>
    <div class="card-body">
        <!-- untuk Filter data -->
        <div id="filter" class="form-horizontal filter-date p-2 border-bottom mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-sm row text-sm mb-0">
                        <label for="supplier_id" class="col-md-1 col-form-label">Filter</label>
                        <div class="col-md-3">
                            <select name="supplier_id" class="form-control form-control-sm" id="supplier_id">
                                <option value="">- Semua -</option>
                                @foreach ($supplier as $item)
                                    <option value="{{ $item->supplier_id}}">{{ $item->supplier_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Supplier Barang</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-bordered table-sm table-striped table-hover" id="data_stok">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Supplier</th>
                    <th>Barang</th>
                    <th>User</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>

    </div>
</div>

<div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection

@push('js')
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    var dataStok;
    $(document).ready(function () {
        dataStok = $('#data_stok').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('stok/list') }}",
                dataType: "json",
                type: "POST",
                data: function (d) {
                    d.supplier_id = $('#supplier_id').val();
                }
            },
            columns: [
                {
                    data: null,
                    className: "text-center",
                    width: "5%",
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { 
                    data: "supplier.supplier_nama", 
                    className: "", 
                    orderable: true, 
                    searchable: true 
                },
                { 
                    data: "barang.barang_nama", 
                    className: "", 
                    orderable: true, 
                    searchable: true },
                { 
                    data: "user.nama", 
                    className: "", 
                    orderable: true, 
                    searchable: true 
                },
                { 
                    data: "stok_tanggal", 
                    className: "", 
                    orderable: true, 
                    searchable: true 
                },
                { 
                    data: "stok_jumlah", 
                    className: "", 
                    orderable: true, 
                    searchable: true 
                },
                { 
                    data: "aksi", 
                    className: "text-center", 
                    orderable: false, 
                    searchable: false 
                }
            ]
        });

        $('#data_stok_filter input').unbind().bind().on('keyup', function(e) {
            if (e.keyCode == 13) {
                dataStok.search(this.value).draw();
            }
        });

        $('#supplier_id').on('change', function () {
            dataStok.ajax.reload();
        });
    });
</script>
@endpush
