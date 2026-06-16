@extends('admin.master')

@section('content')

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Projects</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="fas fa-home mr-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active">Projects</li>
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
                        <i class="fas fa-project-diagram mr-2 text-primary"></i> Projects Management
                    </h4>
                    <a href="{{ url('admin/projects/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle mr-1"></i> New Project
                    </a>
                </div>

                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle mr-1"></i>
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle mr-1"></i>
                        <strong>Error!</strong> {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Table Card -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="projectsTable" class="table table-striped table-bordered table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" style="width: 60px;">
                                            <i class="fas fa-hashtag mr-1 text-muted"></i> #
                                        </th>
                                        <th>
                                            <i class="fas fa-heading mr-1 text-muted"></i> Project Name
                                        </th>
                                        <th>
                                            <i class="fas fa-map-marker-alt mr-1 text-muted"></i> Address
                                        </th>
                                        <th>
                                            <i class="fas fa-ruler-combined mr-1 text-muted"></i> Area
                                        </th>
                                        <th>
                                            <i class="fas fa-tag mr-1 text-muted"></i> Type
                                        </th>
                                        <th>
                                            <i class="fas fa-tags mr-1 text-muted"></i> Category
                                        </th>
                                        <th class="text-center">
                                            <i class="fas fa-images mr-1 text-muted"></i> Project Images
                                        </th>
                                        <th class="text-center" style="width: 160px;">
                                            <i class="fas fa-cogs mr-1 text-muted"></i> Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center font-weight-bold text-primary">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                <strong>{{ $item->name }}</strong>
                                            </td>
                                            <td>
                                                <small class="text-muted">{{ $item->address }}</small>
                                            </td>
                                            <td>
                                                <span class="badge badge-light border">{{ $item->area }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary">
                                                    <i class="fas fa-folder mr-1"></i>
                                                    {{ $item->typeName ?? 'N/A' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">
                                                    <i class="fas fa-folder-open mr-1"></i>
                                                    {{ $item->categoryName }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center flex-wrap" style="gap: 6px;">
                                                    <!-- Thumbnail Image -->
                                                    @if(!empty($item->thumbnail_img))
                                                        <a href="{{ asset('public/upload/projects/'.$item->thumbnail_img) }}" 
                                                           class="image-preview-link"
                                                           data-lightbox="project-{{ $item->id }}"
                                                           title="Thumbnail Image"
                                                           data-toggle="tooltip">
                                                            <img src="{{ asset('public/upload/projects/'.$item->thumbnail_img) }}" 
                                                                 alt="Thumbnail"
                                                                 class="rounded border"
                                                                 style="height: 45px; width: 45px; object-fit: cover; cursor: pointer;">
                                                        </a>
                                                    @else
                                                        <span class="badge badge-light border" title="No Thumbnail">
                                                            <i class="fas fa-image-slash text-muted"></i>
                                                        </span>
                                                    @endif

                                                    <!-- Background Image -->
                                                    @if(!empty($item->background_img))
                                                        <a href="{{ asset('public/upload/projects/'.$item->background_img) }}" 
                                                           class="image-preview-link"
                                                           data-lightbox="project-{{ $item->id }}"
                                                           title="Background Image"
                                                           data-toggle="tooltip">
                                                            <img src="{{ asset('public/upload/projects/'.$item->background_img) }}" 
                                                                 alt="Background"
                                                                 class="rounded border"
                                                                 style="height: 45px; width: 45px; object-fit: cover; cursor: pointer;">
                                                        </a>
                                                    @else
                                                        <span class="badge badge-light border" title="No Background">
                                                            <i class="fas fa-image-slash text-muted"></i>
                                                        </span>
                                                    @endif

                                                    <!-- At A Glance Image -->
                                                    @if(!empty($item->ataglance_img))
                                                        <a href="{{ asset('public/upload/projects/'.$item->ataglance_img) }}" 
                                                           class="image-preview-link"
                                                           data-lightbox="project-{{ $item->id }}"
                                                           title="At A Glance Image"
                                                           data-toggle="tooltip">
                                                            <img src="{{ asset('public/upload/projects/'.$item->ataglance_img) }}" 
                                                                 alt="At A Glance"
                                                                 class="rounded border"
                                                                 style="height: 45px; width: 45px; object-fit: cover; cursor: pointer;">
                                                        </a>
                                                    @else
                                                        <span class="badge badge-light border" title="No At A Glance">
                                                            <i class="fas fa-image-slash text-muted"></i>
                                                        </span>
                                                    @endif

                                                    <!-- Features Image -->
                                                    @if(!empty($item->features_img))
                                                        <a href="{{ asset('public/upload/projects/'.$item->features_img) }}" 
                                                           class="image-preview-link"
                                                           data-lightbox="project-{{ $item->id }}"
                                                           title="Features Image"
                                                           data-toggle="tooltip">
                                                            <img src="{{ asset('public/upload/projects/'.$item->features_img) }}" 
                                                                 alt="Features"
                                                                 class="rounded border"
                                                                 style="height: 45px; width: 45px; object-fit: cover; cursor: pointer;">
                                                        </a>
                                                    @else
                                                        <span class="badge badge-light border" title="No Features">
                                                            <i class="fas fa-image-slash text-muted"></i>
                                                        </span>
                                                    @endif

                                                    <!-- Book Now Image -->
                                                    @if(!empty($item->booknow_img))
                                                        <a href="{{ asset('public/upload/projects/'.$item->booknow_img) }}" 
                                                           class="image-preview-link"
                                                           data-lightbox="project-{{ $item->id }}"
                                                           title="Book Now Image"
                                                           data-toggle="tooltip">
                                                            <img src="{{ asset('public/upload/projects/'.$item->booknow_img) }}" 
                                                                 alt="Book Now"
                                                                 class="rounded border"
                                                                 style="height: 45px; width: 45px; object-fit: cover; cursor: pointer;">
                                                        </a>
                                                    @else
                                                        <span class="badge badge-light border" title="No Book Now">
                                                            <i class="fas fa-image-slash text-muted"></i>
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap: 6px;">
                                                    <!-- Edit Button -->
                                                    <a href="{{ url('admin/projects/'.$item->id.'/edit') }}"
                                                       class="btn btn-sm btn-info"
                                                       title="Edit Project"
                                                       data-toggle="tooltip">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>

                                                    <!-- View Gallery Button -->
                                                    <a href="{{ route('projects.show', $item->id) }}"
                                                       class="btn btn-sm btn-warning"
                                                       title="View Gallery Images"
                                                       data-toggle="tooltip">
                                                        <i class="fas fa-images"></i>
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ url('admin/projects/'.$item->id) }}"
                                                          method="POST"
                                                          class="delete-form"
                                                          id="delete-form-{{ $item->id }}"
                                                          style="display: inline;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button"
                                                                class="btn btn-sm btn-danger btn-delete"
                                                                data-id="{{ $item->id }}"
                                                                data-name="{{ $item->name }}"
                                                                title="Delete Project"
                                                                data-toggle="tooltip">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center text-muted py-5">
                                                <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                                <p class="mb-2">No projects found.</p>
                                                <a href="{{ url('admin/projects/create') }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-plus-circle mr-1"></i> Create your first project
                                                </a>
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

<!-- Lightbox CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<style>
    .image-preview-link {
        display: inline-block;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .image-preview-link:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .image-preview-link img {
        transition: all 0.2s ease;
    }
</style>

<script>
    $(document).ready(function () {

        // Initialize DataTables
        try {
            $('#projectsTable').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
                language: {
                    lengthMenu: "Show _MENU_ entries",
                    search: "Search:",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    emptyTable: "No data available",
                    zeroRecords: "No matching projects found",
                    infoEmpty: "No entries to show",
                    infoFiltered: "(filtered from _MAX_ total entries)"
                },
                columnDefs: [
                    { orderable: false, targets: 7 }, // Disable sorting on actions column
                    { orderable: false, targets: 6 }, // Disable sorting on images column
                    { orderable: false, targets: 0 }  // Disable sorting on # column
                ],
                order: [[1, 'asc']] // Default sort by project name
            });
        } catch (error) {
            console.log('DataTables not initialized. Error: ', error);
        }

        // Initialize tooltips
        $('[data-toggle="tooltip"]').tooltip();

        // SweetAlert Delete Confirmation
        document.querySelectorAll('.btn-delete').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                
                const id   = this.dataset.id;
                const name = this.dataset.name;

                Swal.fire({
                    title: 'Delete Project?',
                    html: `<p>You are about to delete:</p><strong>"${name}"</strong><p class="mt-2 text-muted" style="font-size: 14px;">This action cannot be undone. All associated images will be deleted.</p>`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: '<i class="fas fa-trash-alt mr-1"></i> Yes, delete',
                    cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel',
                    reverseButtons: false,
                    allowOutsideClick: false,
                    allowEscapeKey: true
                }).then(function (result) {
                    if (result.isConfirmed) {
                        // Show loading state
                        Swal.fire({
                            title: 'Deleting...',
                            html: 'Please wait while we delete the project.',
                            icon: 'info',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });

                        // Submit the form
                        setTimeout(() => {
                            document.getElementById('delete-form-' + id).submit();
                        }, 500);
                    }
                });
            });
        });

        // Auto-dismiss success and error messages
        setTimeout(function() {
            $('.alert-success, .alert-danger').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);

    });
</script>

@endsection