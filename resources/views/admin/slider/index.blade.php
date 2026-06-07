@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-images mr-2 text-primary"></i> Project Slider
                    </h4>
                </div>

                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle mr-1"></i> {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Upload Card -->
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-light border-bottom">
                        <h5 class="m-0">
                            <i class="fas fa-upload mr-2"></i> Upload Images
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('slider') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="images" class="font-weight-bold mb-2">Select Images (700X467)</label>
                                        <input type="file" 
                                               class="form-control @error('images') is-invalid @enderror" 
                                               id="images"
                                               name="images[]" 
                                               multiple 
                                               accept="image/*"
                                               required>
                                        <small class="form-text text-muted d-block mt-2">
                                            <i class="fas fa-info-circle"></i> You can select multiple images at once
                                        </small>
                                        @error('images')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="font-weight-bold mb-2">&nbsp;</label>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fas fa-plus mr-1"></i> Upload Images
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Images Gallery Card -->
                <div class="card shadow-sm">
                    <div class="card-header bg-light border-bottom">
                        <h5 class="m-0">
                            <i class="fas fa-images mr-2"></i> Uploaded Images ({{ count($Slider) }})
                        </h5>
                    </div>
                    <div class="card-body">
                        @forelse ($Slider as $sldr)
                            <div class="row mb-4">
                                <div class="col-md-8">
                                    <div class="image-container" style="overflow: hidden; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                                        <img class="img-fluid" 
                                             src="{{ asset('public/upload/'.$sldr->image) }}" 
                                             alt="Slider Image"
                                             style="width: 100%; height: 300px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex flex-column justify-content-center">
                                    <div class="mb-3">
                                        <small class="text-muted d-block mb-2">
                                            <i class="fas fa-calendar-alt mr-1"></i> 
                                            @if(isset($sldr->created_at))
                                                {{ $sldr->created_at->format('M d, Y h:i A') }}
                                            @else
                                                Date not available
                                            @endif
                                        </small>
                                        <small class="text-muted d-block mb-3">
                                            <i class="fas fa-file-image mr-1"></i> 
                                            {{ $sldr->image }}
                                        </small>
                                    </div>
                                    <form action="{{ url('slider/'.$sldr->id) }}" 
                                          method="POST" 
                                          class="delete-form"
                                          id="delete-form-{{ $sldr->id }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" 
                                                class="btn btn-danger btn-block btn-delete"
                                                data-id="{{ $sldr->id }}"
                                                data-name="{{ $sldr->image }}">
                                            <i class="fas fa-trash-can mr-1"></i> Delete Image
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <hr class="my-4">
                        @empty
                            <div class="text-center text-muted py-5">
                                <i class="fas fa-image fa-3x mb-3 d-block opacity-50"></i>
                                <p class="lead">No images uploaded yet.</p>
                                <small>Upload images to get started</small>
                            </div>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Delete button handler
    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const id   = this.dataset.id;
            const name = this.dataset.name;

            Swal.fire({
                title: 'Delete Image?',
                html: `Are you sure you want to delete <strong>${name}</strong>?<br><small class="text-muted">This action cannot be undone.</small>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="fas fa-trash-can mr-1"></i> Yes, delete it',
                cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel',
            }).then(function (result) {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        });
    });

    // File input preview (optional enhancement)
    document.getElementById('images').addEventListener('change', function() {
        if (this.files.length > 0) {
            const fileNames = Array.from(this.files).map(f => f.name).join(', ');
            console.log('Selected files: ' + fileNames);
        }
    });
</script>
@endsection