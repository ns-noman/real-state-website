@extends('admin.master')

@section('content')

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Content</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="fas fa-home mr-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active">Content</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-file-alt mr-2 text-primary"></i> Content Management
                    </h4>
                    <a href="{{ url('contents/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle mr-1"></i> Add New Content
                    </a>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle mr-1"></i>
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Table Card -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="contentTable" class="table table-striped table-bordered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 60px;">
                                            <i class="fas fa-hashtag mr-1 text-muted"></i> SN
                                        </th>
                                        <th>
                                            <i class="fas fa-bars mr-1 text-muted"></i> Main Menu
                                        </th>
                                        <th>
                                            <i class="fas fa-list-ul mr-1 text-muted"></i> Sub Menu
                                        </th>
                                        <th>
                                            <i class="fas fa-heading mr-1 text-muted"></i> Title
                                        </th>
                                        <th style="width: 120px;">
                                            <i class="fas fa-image mr-1 text-muted"></i> Image
                                        </th>
                                        <th style="width: 120px;">
                                            <i class="fas fa-cogs mr-1 text-muted"></i> Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class="font-weight-bold text-primary">{{ $loop->iteration }}</td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->mainMenuName }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary">{{ $item->subMenuName }}</span>
                                            </td>
                                            <td>
                                                <strong>{{ $item->title }}</strong>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->image)
                                                    <a href="{{ asset('public/upload/'.$item->image) }}" target="_blank" rel="noopener noreferrer">
                                                        <img height="50px" 
                                                             width="50px" 
                                                             src="{{ asset('public/upload/'.$item->image) }}" 
                                                             alt="Content Image"
                                                             class="rounded border p-1"
                                                             style="object-fit: cover; cursor: pointer;">
                                                    </a>
                                                @else
                                                    <span class="text-muted">
                                                        <i class="fas fa-image mr-1"></i> No Image
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a href="{{ url('contents/'.$item->id.'/edit') }}" 
                                                       class="btn btn-sm btn-info" 
                                                       title="Edit"
                                                       data-toggle="tooltip">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>
                                                    <form id="deleteForm{{ $item->id }}"
                                                          action="{{ url('contents/'.$item->id) }}" 
                                                          method="POST" 
                                                          style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" 
                                                                class="btn btn-sm btn-danger delete-btn" 
                                                                title="Delete"
                                                                data-toggle="tooltip"
                                                                data-id="{{ $item->id }}"
                                                                data-title="{{ $item->title }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">
                                                <i class="fas fa-inbox fa-2x mb-2"></i>
                                                <p>No content found. <a href="{{ url('contents/create') }}">Create one now</a></p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<!-- DataTables CSS & JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<!-- SweetAlert2 CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function () {
        
        // DataTables initialization with error handling
        try {
            $('#contentTable').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
                language: {
                    lengthMenu: "Show _MENU_ entries",
                    search: "Search:",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    emptyTable: "No data available",
                    zeroRecords: "No matching content found",
                    infoEmpty: "No entries to show",
                    infoFiltered: "(filtered from _MAX_ total entries)"
                },
                columnDefs: [
                    { orderable: false, targets: 5 }, // Disable sorting on action column
                    { orderable: false, targets: 0 }  // Disable sorting on SN column
                ],
                order: [[1, 'asc']] // Default sort by Main Menu
            });
        } catch (error) {
            console.log('DataTables not initialized. Error: ', error);
        }

        // Initialize tooltips
        $('[data-toggle="tooltip"]').tooltip();

        // SweetAlert Delete Confirmation
        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            
            const itemId = $(this).data('id');
            const itemTitle = $(this).data('title');
            const formId = '#deleteForm' + itemId;

            Swal.fire({
                title: 'Are you sure?',
                html: `<p>You are about to delete:</p><strong>"${itemTitle}"</strong><p class="mt-2 text-muted">This action cannot be undone.</p>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="fas fa-trash-alt mr-1"></i> Delete',
                cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel',
                reverseButtons: false,
                allowOutsideClick: false,
                allowEscapeKey: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading state
                    Swal.fire({
                        title: 'Deleting...',
                        html: 'Please wait while we delete the content.',
                        icon: 'info',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    
                    // Submit the form
                    setTimeout(() => {
                        $(formId).submit();
                    }, 500);
                }
            });
        });

        // Smooth fade out for success message
        setTimeout(function() {
            $('.alert-success').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);

    });
</script>

@endsection