@extends('admin.master')

@section('content')

<!-- Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Settings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}"><i class="fas fa-home mr-1"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active">Basic Info</li>
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
                        <i class="fas fa-cog mr-2 text-primary"></i> Basic Information
                    </h4>
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

                <!-- Form Card -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ url('basicinfo/'.$basicInfo->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row">

                                <!-- Title -->
                                <div class="form-group col-12">
                                    <label for="title">
                                        <i class="fas fa-heading mr-1 text-muted"></i> Website Title <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="title"
                                           name="title"
                                           class="form-control @error('title') is-invalid @enderror"
                                           placeholder="Website Title"
                                           value="{{ old('title', $basicInfo->title) }}"
                                           required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Favicon Upload -->
                                <div class="form-group col-md-6">
                                    <label for="favicon">
                                        <i class="fas fa-image mr-1 text-muted"></i> Favicon
                                    </label>
                                    <small class="d-block text-muted mb-2">
                                        <i class="fas fa-info-circle mr-1"></i> Recommended: 16×16 or 32×32 pixels (ICO format)
                                    </small>

                                    @if(!empty($basicInfo->favIcon))
                                        <div id="currentFaviconWrapper" class="mb-2">
                                            <p class="text-muted mb-1">
                                                <i class="fas fa-image mr-1"></i> Current Favicon:
                                            </p>
                                            <div class="border rounded p-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
                                                <img src="{{ asset('public/upload/'.$basicInfo->favIcon) }}"
                                                     id="currentFavicon"
                                                     alt="Current Favicon"
                                                     style="max-height: 50px; max-width: 50px; object-fit: contain;">
                                            </div>
                                        </div>
                                    @endif

                                    <div class="custom-file">
                                        <input type="file"
                                               id="favicon"
                                               name="favicon"
                                               class="custom-file-input @error('favicon') is-invalid @enderror"
                                               accept="image/*">
                                        <label class="custom-file-label" for="favicon">Choose favicon</label>
                                        @error('favicon')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div id="faviconPreviewWrapper" class="mt-3 d-none">
                                        <p class="text-muted mb-1">
                                            <i class="fas fa-eye mr-1"></i> New Favicon Preview:
                                        </p>
                                        <div class="border rounded p-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
                                            <img id="faviconPreview"
                                                 src="#"
                                                 alt="Favicon Preview"
                                                 style="max-height: 50px; max-width: 50px; object-fit: contain;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Logo Upload -->
                                <div class="form-group col-md-6">
                                    <label for="logo">
                                        <i class="fas fa-image mr-1 text-muted"></i> Logo
                                    </label>
                                    <small class="d-block text-muted mb-2">
                                        <i class="fas fa-info-circle mr-1"></i> Recommended: 270×110 pixels (PNG with transparency)
                                    </small>

                                    @if(!empty($basicInfo->logo))
                                        <div id="currentLogoWrapper" class="mb-2">
                                            <p class="text-muted mb-1">
                                                <i class="fas fa-image mr-1"></i> Current Logo:
                                            </p>
                                            <a href="{{ asset('public/upload/'.$basicInfo->logo) }}" target="_blank" rel="noopener noreferrer">
                                                <img src="{{ asset('public/upload/'.$basicInfo->logo) }}"
                                                     id="currentLogo"
                                                     alt="Current Logo"
                                                     class="rounded border p-1"
                                                     style="max-height: 80px; max-width: 100%; object-fit: contain;">
                                            </a>
                                        </div>
                                    @endif

                                    <div class="custom-file">
                                        <input type="file"
                                               id="logo"
                                               name="logo"
                                               class="custom-file-input @error('logo') is-invalid @enderror"
                                               accept="image/*">
                                        <label class="custom-file-label" for="logo">Choose logo</label>
                                        @error('logo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div id="logoPreviewWrapper" class="mt-3 d-none">
                                        <p class="text-muted mb-1">
                                            <i class="fas fa-eye mr-1"></i> New Logo Preview:
                                        </p>
                                        <img id="logoPreview"
                                             src="#"
                                             alt="Logo Preview"
                                             class="rounded border p-1"
                                             style="max-height: 80px; max-width: 100%; object-fit: contain;">
                                    </div>
                                </div>

                                <!-- Contact Information Section -->
                                <div class="col-12 mt-3 mb-2">
                                    <h5 class="text-primary">
                                        <i class="fas fa-address-book mr-2"></i> Contact Information
                                    </h5>
                                    <hr>
                                </div>

                                <!-- Phone -->
                                <div class="form-group col-md-6">
                                    <label for="phone">
                                        <i class="fas fa-phone mr-1 text-muted"></i> Phone <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="phone"
                                           name="phone"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           placeholder="+1 (555) 000-0000"
                                           value="{{ old('phone', $basicInfo->contact) }}"
                                           required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="form-group col-md-6">
                                    <label for="email">
                                        <i class="fas fa-envelope mr-1 text-muted"></i> Email <span class="text-danger">*</span>
                                    </label>
                                    <input type="email"
                                           id="email"
                                           name="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="info@example.com"
                                           value="{{ old('email', $basicInfo->email) }}"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Address -->
                                <div class="form-group col-12">
                                    <label for="address">
                                        <i class="fas fa-map-marker-alt mr-1 text-muted"></i> Address <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="address"
                                           name="address"
                                           class="form-control @error('address') is-invalid @enderror"
                                           placeholder="123 Main Street, City, Country"
                                           value="{{ old('address', $basicInfo->address) }}"
                                           required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Social Media Section -->
                                <div class="col-12 mt-3 mb-2">
                                    <h5 class="text-primary">
                                        <i class="fas fa-share-alt mr-2"></i> Social Media Links
                                    </h5>
                                    <hr>
                                </div>

                                <!-- Facebook Link -->
                                <div class="form-group col-md-6">
                                    <label for="fbLink">
                                        <i class="fab fa-facebook mr-1 text-primary"></i> Facebook URL
                                    </label>
                                    <input type="url"
                                           id="fbLink"
                                           name="fbLink"
                                           class="form-control @error('fbLink') is-invalid @enderror"
                                           placeholder="https://facebook.com/yourpage"
                                           value="{{ old('fbLink', $basicInfo->fbLink) }}">
                                    @error('fbLink')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Instagram Link -->
                                <div class="form-group col-md-6">
                                    <label for="instraLink">
                                        <i class="fab fa-instagram mr-1" style="color: #E4405F;"></i> Instagram URL
                                    </label>
                                    <input type="url"
                                           id="instraLink"
                                           name="instraLink"
                                           class="form-control @error('instraLink') is-invalid @enderror"
                                           placeholder="https://instagram.com/yourprofile"
                                           value="{{ old('instraLink', $basicInfo->instraLink) }}">
                                    @error('instraLink')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- YouTube Link -->
                                <div class="form-group col-md-6">
                                    <label for="youtubeLink">
                                        <i class="fab fa-youtube mr-1" style="color: #FF0000;"></i> YouTube URL
                                    </label>
                                    <input type="url"
                                           id="youtubeLink"
                                           name="youtubeLink"
                                           class="form-control @error('youtubeLink') is-invalid @enderror"
                                           placeholder="https://youtube.com/@yourchannel"
                                           value="{{ old('youtubeLink', $basicInfo->youTubeLink) }}">
                                    @error('youtubeLink')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <hr class="mt-4">

                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/dashboard') }}" class="btn btn-secondary mr-2">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Update Settings
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

        // Favicon preview on file selection
        $('#favicon').on('change', function () {
            const file = this.files[0];
            const label = $(this).next('.custom-file-label');
            const preview = $('#faviconPreview');
            const wrapper = $('#faviconPreviewWrapper');
            const current = $('#currentFaviconWrapper');

            if (file) {
                label.text(file.name);
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                    wrapper.removeClass('d-none');
                    if (current.length) {
                        current.css('opacity', '0.4');
                    }
                };
                reader.readAsDataURL(file);
            } else {
                label.text('Choose favicon');
                preview.attr('src', '#');
                wrapper.addClass('d-none');
                if (current.length) {
                    current.css('opacity', '1');
                }
            }
        });

        // Logo preview on file selection
        $('#logo').on('change', function () {
            const file = this.files[0];
            const label = $(this).next('.custom-file-label');
            const preview = $('#logoPreview');
            const wrapper = $('#logoPreviewWrapper');
            const current = $('#currentLogoWrapper');

            if (file) {
                label.text(file.name);
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.attr('src', e.target.result);
                    wrapper.removeClass('d-none');
                    if (current.length) {
                        current.css('opacity', '0.4');
                    }
                };
                reader.readAsDataURL(file);
            } else {
                label.text('Choose logo');
                preview.attr('src', '#');
                wrapper.addClass('d-none');
                if (current.length) {
                    current.css('opacity', '1');
                }
            }
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