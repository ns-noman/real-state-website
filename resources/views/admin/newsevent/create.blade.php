@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <!-- Page Header -->
                <div class="d-flex align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-pen mr-2 text-primary"></i> 
                        @if(isset($blog))
                            Edit Blog/News
                        @else
                            Create New Blog/News
                        @endif
                    </h4>
                </div>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Form Card -->
                <div class="card shadow-sm">
                    <div class="card-header bg-light border-bottom">
                        <h5 class="m-0">
                            <i class="fas fa-file-alt mr-2"></i> Blog/News Information
                        </h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" 
                              action="@if(isset($blog)){{ url('admin/blogs/'.$blog->id) }}@else{{ url('admin/blogs') }}@endif" 
                              enctype="multipart/form-data">
                            @csrf
                            @if(isset($blog))
                                @method('PUT')
                            @endif

                            <!-- Basic Information Section -->
                            <div class="form-section mb-4">
                                <h6 class="font-weight-bold text-secondary mb-3">
                                    <i class="fas fa-heading mr-2"></i> Basic Information
                                </h6>
                                
                                <div class="form-group">
                                    <label for="heading" class="font-weight-bold">Heading <span class="text-danger">*</span></label>
                                    <input type="text" 
                                           class="form-control @error('heading') is-invalid @enderror" 
                                           id="heading"
                                           name="heading" 
                                           placeholder="Enter blog/news heading"
                                           value="{{ old('heading', $blog->heading ?? '') }}"
                                           required>
                                    @error('heading')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="shortDescription" class="font-weight-bold">Short Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('shortDescription') is-invalid @enderror" 
                                              id="shortDescription" 
                                              name="shortDescription" 
                                              placeholder="Enter short description"
                                              required>{{ old('shortDescription', $blog->shortDescription ?? '') }}</textarea>
                                    <small class="form-text text-muted">This will appear as a preview</small>
                                    @error('shortDescription')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description" class="font-weight-bold">Full Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" 
                                              name="description" 
                                              placeholder="Enter full description"
                                              required>{{ old('description', $blog->description ?? '') }}</textarea>
                                    <small class="form-text text-muted">Detailed content for the blog/news</small>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Details Section -->
                            <div class="form-section mb-4">
                                <h6 class="font-weight-bold text-secondary mb-3">
                                    <i class="fas fa-info-circle mr-2"></i> Details
                                </h6>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="source" class="font-weight-bold">Source <span class="text-danger">*</span></label>
                                        <input type="text" 
                                               class="form-control @error('source') is-invalid @enderror" 
                                               id="source"
                                               name="source" 
                                               placeholder="e.g., Website, Magazine, etc."
                                               value="{{ old('source', $blog->source ?? '') }}"
                                               required>
                                        @error('source')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="writter" class="font-weight-bold">Writer <span class="text-danger">*</span></label>
                                        <input type="text" 
                                               class="form-control @error('writter') is-invalid @enderror" 
                                               id="writter"
                                               name="writter" 
                                               placeholder="Author name"
                                               value="{{ old('writter', $blog->writter ?? '') }}"
                                               required>
                                        @error('writter')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date" class="font-weight-bold">Date <span class="text-danger">*</span></label>
                                        <input type="date" 
                                               class="form-control @error('date') is-invalid @enderror" 
                                               id="date"
                                               name="date"
                                               value="{{ old('date', isset($blog) ? date('Y-m-d', strtotime($blog->date)) : '') }}"
                                               required>
                                        @error('date')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="type" class="font-weight-bold">Type <span class="text-danger">*</span></label>
                                        <select class="form-control @error('type') is-invalid @enderror" 
                                                id="type"
                                                name="type" 
                                                required>
                                            <option value="">-- Select Type --</option>
                                            <option value="1" @if(old('type', $blog->type ?? '') == 1) selected @endif>
                                                <i class="fas fa-bolt"></i> News
                                            </option>
                                            <option value="2" @if(old('type', $blog->type ?? '') == 2) selected @endif>
                                                <i class="fas fa-calendar"></i> Event
                                            </option>
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="link" class="font-weight-bold">External Link (Optional)</label>
                                        <input type="url" 
                                               class="form-control @error('link') is-invalid @enderror" 
                                               id="link"
                                               name="link" 
                                               placeholder="https://example.com"
                                               value="{{ old('link', $blog->link ?? '') }}">
                                        <small class="form-text text-muted">Link to external source or resource</small>
                                        @error('link')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Media Section -->
                            <div class="form-section mb-4">
                                <h6 class="font-weight-bold text-secondary mb-3">
                                    <i class="fas fa-image mr-2"></i> Images
                                </h6>

                                <div class="form-group">
                                    <label for="images" class="font-weight-bold">
                                        @if(isset($blog))
                                            Upload Additional Images (Optional)
                                        @else
                                            Upload Images <span class="text-danger">*</span>
                                        @endif
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" 
                                               class="custom-file-input @error('images') is-invalid @enderror" 
                                               id="images"
                                               name="images[]" 
                                               multiple 
                                               accept="image/*"
                                               @if(!isset($blog)) required @endif>
                                        <label class="custom-file-label" for="images">Choose images...</label>
                                    </div>
                                    <small class="form-text text-muted d-block mt-2">
                                        <i class="fas fa-info-circle mr-1"></i> 
                                        Recommended size: 1280x1280px. You can select multiple images.
                                    </small>
                                    @error('images')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                @if(isset($blog) && $blog->images)
                                    <div class="mt-4">
                                        <h6 class="font-weight-bold mb-3">Existing Images</h6>
                                        <div class="row">
                                            @foreach($blog->images as $image)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card">
                                                        <img src="{{ asset('public/upload/'.$image->image) }}" 
                                                             class="card-img-top" 
                                                             alt="Blog Image"
                                                             style="height: 150px; object-fit: cover;">
                                                        <div class="card-body p-2">
                                                            <a href="{{ url('admin/blogs/'.$blog->id.'/image/'.$image->id) }}" 
                                                               class="btn btn-sm btn-danger btn-block"
                                                               onclick="return confirm('Delete this image?')">
                                                                <i class="fas fa-trash mr-1"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <hr class="my-4">

                            <!-- Form Actions -->
                            <div class="form-actions d-flex gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-save mr-1"></i> 
                                    @if(isset($blog))
                                        Update Blog/News
                                    @else
                                        Create Blog/News
                                    @endif
                                </button>
                                <a href="{{ url('admin/blogs') }}" class="btn btn-secondary btn-lg">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize Summernote editors
        $('#shortDescription').summernote({
            placeholder: 'Enter short description',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('#description').summernote({
            placeholder: 'Enter full description',
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        // File input label update
        $('#images').on('change', function() {
            const files = this.files;
            if (files.length > 0) {
                const fileNames = Array.from(files).map(f => f.name).join(', ');
                $(this).next('.custom-file-label').text(fileNames);
            }
        });
    });
</script>
@endsection