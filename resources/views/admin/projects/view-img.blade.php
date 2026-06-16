@extends('admin.master')

@section('content')

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gallery</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="fas fa-home mr-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/projects') }}"><i class="fas fa-project-diagram mr-1"></i> Projects</a>
                    </li>
                    <li class="breadcrumb-item active">Gallery</li>
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
                        <i class="fas fa-images mr-2 text-primary"></i> Project Gallery Images
                    </h4>
                    <a href="{{ url('admin/projects') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-1"></i> Back to Projects
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

                <!-- Gallery Grid -->
                @if($data->count() > 0)
                    <div class="row">
                        @foreach ($data as $item)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                <div class="card shadow-sm h-100 overflow-hidden gallery-card">
                                    <!-- Image Container -->
                                    <div class="position-relative gallery-image-container" style="height: 250px; overflow: hidden; background-color: #f8f9fa;">
                                        <a href="{{ asset('public/upload/projects/'.$item->image ) }}" 
                                           class="gallery-image-link"
                                           data-lightbox="gallery" 
                                           data-title="{{ 'Gallery Image #' . $loop->iteration }}"
                                           title="Click to enlarge">
                                            <img src="{{ asset('public/upload/projects/'.$item->image ) }}" 
                                                 alt="Gallery Image {{ $loop->iteration }}"
                                                 class="w-100 h-100"
                                                 style="object-fit: cover; object-position: center;">
                                            <div class="overlay-hover position-absolute d-none d-sm-flex" 
                                                 style="top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); align-items: center; justify-content: center;">
                                                <i class="fas fa-search-plus fa-2x text-white"></i>
                                            </div>
                                        </a>
                                        <!-- Image Badge -->
                                        <span class="badge badge-primary position-absolute" 
                                              style="top: 8px; left: 8px; font-size: 11px;">
                                            <i class="fas fa-image mr-1"></i> {{ $loop->iteration }}
                                        </span>
                                    </div>

                                    <!-- Card Body -->
                                    <div class="card-body pt-2 pb-2">
                                        <div class="mb-2">
                                            <small class="text-muted d-block">
                                                <i class="fas fa-file-image mr-1"></i> 
                                                <span class="image-name" title="{{ $item->image }}">
                                                    {{ Str::limit($item->image, 25, '...') }}
                                                </span>
                                            </small>
                                        </div>

                                        <!-- Action Buttons -->
                                        <div class="d-flex gap-2">
                                            <a href="{{ asset('public/upload/projects/'.$item->image ) }}" 
                                               target="_blank"
                                               rel="noopener noreferrer"
                                               class="btn btn-sm btn-info flex-fill"
                                               title="View Full Size"
                                               data-toggle="tooltip">
                                                <i class="fas fa-external-link-alt"></i> View
                                            </a>
                                            <form action="{{ url('proImgDel/'.$item->id) }}" 
                                                  method="GET"
                                                  class="delete-form flex-fill"
                                                  id="delete-form-{{ $item->id }}"
                                                  style="display: inline;">
                                                <button type="button"
                                                        class="btn btn-sm btn-danger w-100 btn-delete-image"
                                                        data-id="{{ $item->id }}"
                                                        title="Delete Image"
                                                        data-toggle="tooltip">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="card shadow-sm">
                        <div class="card-body text-center py-5">
                            <i class="fas fa-image fa-4x text-muted mb-3 d-block"></i>
                            <h5 class="text-muted mb-2">No Gallery Images</h5>
                            <p class="text-muted mb-3">This project doesn't have any gallery images yet.</p>
                            <a href="{{ url('admin/projects') }}" class="btn btn-primary">
                                <i class="fas fa-arrow-left mr-1"></i> Back to Projects
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<!-- Lightbox CSS & JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<style>
    .gallery-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .gallery-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15) !important;
    }

    .gallery-image-container {
        position: relative;
        cursor: pointer;
    }

    .gallery-image-link {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
    }

    .overlay-hover {
        transition: background 0.3s ease;
    }

    .gallery-image-container:hover .overlay-hover {
        background: rgba(0, 0, 0, 0.6) !important;
    }

    .gap-2 {
        gap: 8px;
    }

    @media (max-width: 576px) {
        .gallery-image-container {
            height: 200px;
        }
        
        .card-body {
            padding: 0.75rem !important;
        }
    }
</style>

<script>
    $(document).ready(function () {

        // Initialize tooltips
        $('[data-toggle="tooltip"]').tooltip();

        // SweetAlert Delete Confirmation
        document.querySelectorAll('.btn-delete-image').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                
                const id = this.dataset.id;

                Swal.fire({
                    title: 'Delete Image?',
                    html: '<p>Are you sure you want to delete this image?</p><small class="text-muted">This action cannot be undone.</small>',
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
                            html: 'Please wait while we delete the image.',
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

        // Auto-dismiss messages
        setTimeout(function() {
            $('.alert-success, .alert-danger').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);

    });
</script>

@endsection