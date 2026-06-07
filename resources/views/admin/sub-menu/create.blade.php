@extends('admin.master')

@section('content')

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Sub Menu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="fas fa-home mr-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('sub-menu') }}">Sub Menu</a>
                    </li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-plus-circle mr-2 text-primary"></i> Create Sub Menu
                    </h4>
                    <a href="{{ url('sub-menu') }}" class="btn btn-secondary">
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
                        <form action="{{ url('sub-menu') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- Select Menu -->
                                <div class="form-group col-md-6">
                                    <label for="menu">
                                        <i class="fas fa-bars mr-1 text-muted"></i> Main Menu <span class="text-danger">*</span>
                                    </label>
                                    <select name="menu"
                                            class="form-control @error('menu') is-invalid @enderror"
                                            required>
                                        <option value="">— Select Menu —</option>
                                        @foreach ($menus as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('menu') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('menu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sub Menu Name -->
                                <div class="form-group col-md-6">
                                    <label for="submenu">
                                        <i class="fas fa-list-ul mr-1 text-muted"></i> Sub Menu Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="submenu"
                                           name="submenu"
                                           class="form-control @error('submenu') is-invalid @enderror"
                                           placeholder="Sub Menu Name"
                                           value="{{ old('submenu') }}"
                                           required>
                                    @error('submenu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Title -->
                                <div class="form-group col-12">
                                    <label for="title">
                                        <i class="fas fa-heading mr-1 text-muted"></i> Title
                                    </label>
                                    <input type="text"
                                           id="title"
                                           name="title"
                                           class="form-control @error('title') is-invalid @enderror"
                                           placeholder="Title"
                                           value="{{ old('title') }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Short Description -->
                                <div class="form-group col-12">
                                    <label for="shortDescription">
                                        <i class="fas fa-align-left mr-1 text-muted"></i> Short Description
                                    </label>
                                    <textarea id="shortDescription"
                                              name="shortDescription"
                                              class="form-control @error('shortDescription') is-invalid @enderror">{{ old('shortDescription') }}</textarea>
                                    @error('shortDescription')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Long Description -->
                                <div class="form-group col-12">
                                    <label for="longDescription">
                                        <i class="fas fa-align-justify mr-1 text-muted"></i> Long Description
                                    </label>
                                    <textarea id="longDescription"
                                              name="longDescription"
                                              class="form-control @error('longDescription') is-invalid @enderror">{{ old('longDescription') }}</textarea>
                                    @error('longDescription')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image Upload with Preview -->
                                <div class="form-group col-12">
                                    <label for="img">
                                        <i class="fas fa-image mr-1 text-muted"></i> Image
                                    </label>
                                    <div class="custom-file">
                                        <input type="file"
                                               id="img"
                                               name="img"
                                               class="custom-file-input @error('img') is-invalid @enderror"
                                               accept="image/*">
                                        <label class="custom-file-label" for="img">Choose image</label>
                                        @error('img')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Image Preview -->
                                    <div id="imagePreviewWrapper" class="mt-3 d-none">
                                        <p class="text-muted mb-1">
                                            <i class="fas fa-eye mr-1"></i> Preview:
                                        </p>
                                        <img id="imagePreview"
                                             src="#"
                                             alt="Image Preview"
                                             class="rounded border p-1"
                                             style="max-height:180px; max-width:100%; object-fit:contain;">
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="d-flex justify-content-end">
                                <a href="{{ url('sub-menu') }}" class="btn btn-secondary mr-2">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Save
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

        // Selectize on menu dropdown
        $('#menu').selectize();

        // Summernote editors
        $('#shortDescription').summernote({
            placeholder: 'Enter short description...',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para',  ['ul', 'ol', 'paragraph']],
                ['view',  ['codeview']]
            ]
        });

        $('#longDescription').summernote({
            placeholder: 'Enter long description...',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font',  ['strikethrough']],
                ['para',  ['ul', 'ol', 'paragraph']],
                ['insert',['link', 'picture', 'hr']],
                ['view',  ['codeview']]
            ]
        });

        // Custom file input label
        $('#img').on('change', function () {
            const file     = this.files[0];
            const label    = $(this).next('.custom-file-label');
            const preview  = $('#imagePreview');
            const wrapper  = $('#imagePreviewWrapper');

            if (file) {
                label.text(file.name);
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                    wrapper.removeClass('d-none');
                };
                reader.readAsDataURL(file);
            } else {
                label.text('Choose image');
                preview.attr('src', '#');
                wrapper.addClass('d-none');
            }
        });

    });
</script>
@endsection