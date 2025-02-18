@extends('admin.layout.app')
@section('content')
<style>
    div.dataTables_wrapper .card-header {
    display: none !important;
    align-items: center;
    justify-content: space-between;
}
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="card-header header-elements border-bottom mb-3">
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center row-gap-4 w-100">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Gallery List</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('gallery.create') }}"
                        class="btn btn-sm btn-primary waves-effect waves-light">
                        <span class="tf-icon ri-add-line me-1"></span> Add Gallery
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="datatables-basic table table-bordered" id="users-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" name="multipleselect[]" class="form-check-input m-auto" /></th>
                        <th class="sorting" data-col="image">Image</th>
                        <th class="sorting" data-col="name">Name</th>
                        <th class="sorting" data-col="status">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
        var oTable = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            responsive: true,
            autoWidth: false,

            ajax: {
                url: '{!! route('gallery.listing') !!}',
                data: function(d) {

                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'image'
                },
                {
                    data: 'name'
                },
                {
                    data: 'status'
                },
                {
                    data: 'action'
                },
            ]
        });

    </script>
@endsection
