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
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/projects') }}">Projects</a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-pen-to-square mr-2 text-primary"></i> Edit Project
                    </h4>
                    <a href="{{ url('admin/projects') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left mr-1"></i> Back
                    </a>
                </div>

                <!-- Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-triangle mr-1"></i>
                        <strong>Please fix the following errors:</strong>
                        <ul class="mb-0 mt-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Card -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/projects/'.$project->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row">

                                <!-- Project Name -->
                                <div class="form-group col-md-6">
                                    <label for="projectname">
                                        <i class="fas fa-project-diagram mr-1 text-muted"></i> Project Name / Title <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="projectname"
                                           name="projectname"
                                           class="form-control @error('projectname') is-invalid @enderror"
                                           placeholder="Project Name"
                                           value="{{ old('projectname', $project->name) }}"
                                           required>
                                    @error('projectname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="form-group col-md-6">
                                    <label for="address">
                                        <i class="fas fa-map-marker-alt mr-1 text-muted"></i> Address <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="address"
                                           name="address"
                                           class="form-control @error('address') is-invalid @enderror"
                                           placeholder="Address"
                                           value="{{ old('address', $project->address) }}"
                                           required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Area -->
                                <div class="form-group col-md-6">
                                    <label for="area">
                                        <i class="fas fa-ruler-combined mr-1 text-muted"></i> Area <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="area"
                                           name="area"
                                           class="form-control @error('area') is-invalid @enderror"
                                           placeholder="e.g. 1200 sqft"
                                           value="{{ old('area', $project->area) }}"
                                           required>
                                    @error('area')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Location Link -->
                                <div class="form-group col-md-6">
                                    <label for="location">
                                        <i class="fas fa-location-dot mr-1 text-muted"></i> Location Link
                                    </label>
                                    <input type="url"
                                           id="location"
                                           name="location"
                                           class="form-control @error('location') is-invalid @enderror"
                                           placeholder="https://maps.google.com/..."
                                           value="{{ old('location', $project->locationLink) }}">
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sub Category -->
                                <div class="form-group col-md-6">
                                    <label for="status">
                                        <i class="fas fa-tags mr-1 text-muted"></i> Sub Category <span class="text-danger">*</span>
                                    </label>
                                    <select id="status"
                                            name="status"
                                            class="form-control @error('status') is-invalid @enderror"
                                            required>
                                        <option value="">— Select Category —</option>
                                        @foreach ($projectMenu as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('status', $project->categoryID) == $item->id ? 'selected' : '' }}>
                                                {{ $item->subMenuName }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Quote -->
                                <div class="form-group col-md-6">
                                    <label for="qoute">
                                        <i class="fas fa-quote-left mr-1 text-muted"></i> Quote <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="qoute"
                                           name="qoute"
                                           class="form-control @error('qoute') is-invalid @enderror"
                                           placeholder="Project quote or tagline"
                                           value="{{ old('qoute', $project->qoute) }}"
                                           required>
                                    @error('qoute')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Details -->
                                <div class="form-group col-12">
                                    <label for="details">
                                        <i class="fas fa-align-left mr-1 text-muted"></i> Details <span class="text-danger">*</span>
                                    </label>
                                    <textarea id="details"
                                              name="details"
                                              class="form-control @error('details') is-invalid @enderror"
                                              required>{{ old('details', $project->details) }}</textarea>
                                    @error('details')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Features -->
                                <div class="form-group col-12">
                                    <label for="feature">
                                        <i class="fas fa-list-check mr-1 text-muted"></i> Features <span class="text-danger">*</span>
                                    </label>
                                    <textarea id="feature"
                                              name="feature"
                                              class="form-control @error('feature') is-invalid @enderror"
                                              required>{{ old('feature', $project->features) }}</textarea>
                                    @error('feature')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Existing Images -->
                                @if($project->images && count($project->images) > 0)
                                <div class="form-group col-12">
                                    <label>
                                        <i class="fas fa-images mr-1 text-muted"></i> Current Images
                                        <span class="badge badge-secondary ml-1">{{ count($project->images) }}</span>
                                    </label>
                                    <div class="d-flex flex-wrap mt-1" style="gap:8px;">
                                        @foreach($project->images as $index => $image)
                                            <div class="position-relative">
                                                <a href="{{ asset('public/upload/'.$image->image) }}" target="_blank" rel="noopener noreferrer">
                                                    <img src="{{ asset('public/upload/'.$image->image) }}"
                                                         alt="Project Image {{ $index + 1 }}"
                                                         class="rounded border p-1"
                                                         style="height:100px; width:100px; object-fit:cover;">
                                                </a>
                                                <span class="badge badge-dark"
                                                      style="position:absolute; bottom:6px; right:6px; font-size:10px;">
                                                    {{ $index + 1 }}
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <small class="text-muted mt-1 d-block">
                                        <i class="fas fa-info-circle mr-1"></i> Upload new images below to add or replace.
                                    </small>
                                </div>
                                @endif

                                <!-- New Images Upload -->
                                <div class="form-group col-12">
                                    <label for="images">
                                        <i class="fas fa-cloud-upload-alt mr-1 text-muted"></i> Upload New Images
                                        <small class="text-muted ml-1">(Recommended: 1280×1280px, multiple allowed)</small>
                                    </label>
                                    <div class="custom-file">
                                        <input type="file"
                                               id="images"
                                               name="images[]"
                                               class="custom-file-input @error('images') is-invalid @enderror"
                                               accept="image/*"
                                               multiple>
                                        <label class="custom-file-label" for="images">Choose images...</label>
                                        @error('images')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- New Image Previews -->
                                    <div id="imagePreviewGrid" class="mt-3 d-none">
                                        <p class="text-muted mb-2">
                                            <i class="fas fa-eye mr-1"></i> New Image Preview:
                                            <span id="imageCount" class="badge badge-primary ml-1"></span>
                                        </p>
                                        <div id="previewContainer"
                                             class="d-flex flex-wrap"
                                             style="gap:8px;"></div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="d-flex justify-content-end">
                                <a href="{{ url('admin/projects') }}" class="btn btn-secondary mr-2">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Update Project
                                </button>
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
<script>
    $(document).ready(function () {

        // Summernote — Details
        $('#details').summernote({
            placeholder: 'Enter project details...',
            tabsize: 2,
            height: 180,
            toolbar: [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['para',  ['ul', 'ol', 'paragraph']],
                ['insert',['link', 'hr']],
                ['view',  ['codeview']]
            ]
        });

        // Summernote — Features
        $('#feature').summernote({
            placeholder: 'Enter project features...',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para',  ['ul', 'ol', 'paragraph']],
                ['view',  ['codeview']]
            ]
        });

        // Multiple image preview
        $('#images').on('change', function () {
            const files      = this.files;
            const label      = $(this).next('.custom-file-label');
            const grid       = $('#imagePreviewGrid');
            const container  = $('#previewContainer');
            const countBadge = $('#imageCount');

            container.empty();

            if (files.length === 0) {
                label.text('Choose images...');
                grid.addClass('d-none');
                return;
            }

            label.text(files.length + ' image(s) selected');
            countBadge.text(files.length + ' image' + (files.length > 1 ? 's' : ''));
            grid.removeClass('d-none');

            Array.from(files).forEach(function (file, index) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const wrapper = $('<div>').css({ position: 'relative', display: 'inline-block' });
                    const img = $('<img>')
                        .attr('src', e.target.result)
                        .attr('alt', 'Preview ' + (index + 1))
                        .addClass('rounded border p-1')
                        .css({ height: '100px', width: '100px', objectFit: 'cover' });
                    const badge = $('<span>')
                        .addClass('badge badge-primary')
                        .css({ position: 'absolute', bottom: '6px', right: '6px', fontSize: '10px' })
                        .text(index + 1);
                    wrapper.append(img).append(badge);
                    container.append(wrapper);
                };
                reader.readAsDataURL(file);
            });
        });

    });
</script>
@endsection