@extends('admin.master')

@section('content')

@if(Auth::guard('web')->user()->roleid == 1)

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-user-plus mr-2 text-primary"></i> Add New User
                    </h4>
                    <a href="{{ url('usermanage') }}" class="btn btn-secondary">
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
                        <form action="{{ url('usermanage') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- Full Name -->
                                <div class="form-group col-md-6">
                                    <label for="username">
                                        <i class="fas fa-user mr-1 text-muted"></i> Full Name <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           id="username"
                                           name="username"
                                           class="form-control @error('username') is-invalid @enderror"
                                           placeholder="Full Name"
                                           value="{{ old('username') }}"
                                           required>
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- User Role -->
                                <div class="form-group col-md-6">
                                    <label for="userrolle">
                                        <i class="fas fa-shield-alt mr-1 text-muted"></i> User Role <span class="text-danger">*</span>
                                    </label>
                                    <select id="userrolle"
                                            name="userrolle"
                                            class="form-control @error('userrolle') is-invalid @enderror"
                                            required>
                                        <option value="">— Select User Role —</option>
                                        @foreach ($role as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('userrolle') == $item->id ? 'selected' : '' }}>
                                                {{ $item->role }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('userrolle')
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
                                           placeholder="example@email.com"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email')
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
                                           value="{{ old('address') }}"
                                           required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Contact No -->
                                <div class="form-group col-md-6">
                                    <label for="contactno">
                                        <i class="fas fa-phone mr-1 text-muted"></i> Contact No. <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel"
                                           id="contactno"
                                           name="contactno"
                                           class="form-control @error('contactno') is-invalid @enderror"
                                           placeholder="01XXXXXXXXX"
                                           value="{{ old('contactno') }}"
                                           required>
                                    @error('contactno')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Reference Person -->
                                <div class="form-group col-md-6">
                                    <label for="referenceper">
                                        <i class="fas fa-user-friends mr-1 text-muted"></i> Reference Person
                                    </label>
                                    <input type="text"
                                           id="referenceper"
                                           name="referenceper"
                                           class="form-control @error('referenceper') is-invalid @enderror"
                                           placeholder="Reference Person"
                                           value="{{ old('referenceper') }}">
                                    @error('referenceper')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- National ID -->
                                <div class="form-group col-md-6">
                                    <label for="nationalid">
                                        <i class="fas fa-id-card mr-1 text-muted"></i> National ID
                                    </label>
                                    <div class="custom-file">
                                        <input type="file"
                                               id="nationalid"
                                               name="nationalid"
                                               class="custom-file-input @error('nationalid') is-invalid @enderror"
                                               accept="image/*,.pdf">
                                        <label class="custom-file-label" for="nationalid">Choose file</label>
                                        @error('nationalid')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Agreement Paper -->
                                <div class="form-group col-md-6">
                                    <label for="agreementpaper">
                                        <i class="fas fa-file-contract mr-1 text-muted"></i> Agreement Paper
                                    </label>
                                    <div class="custom-file">
                                        <input type="file"
                                               id="agreementpaper"
                                               name="agreementpaper"
                                               class="custom-file-input @error('agreementpaper') is-invalid @enderror"
                                               accept="image/*,.pdf">
                                        <label class="custom-file-label" for="agreementpaper">Choose file</label>
                                        @error('agreementpaper')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group col-md-6">
                                    <label for="password">
                                        <i class="fas fa-lock mr-1 text-muted"></i> Password <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password"
                                               id="password"
                                               name="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Password"
                                               required>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary toggle-password" data-target="password">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group col-md-6">
                                    <label for="conpassword">
                                        <i class="fas fa-lock mr-1 text-muted"></i> Confirm Password <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input type="password"
                                               id="conpassword"
                                               name="conpassword"
                                               class="form-control"
                                               placeholder="Confirm Password"
                                               onkeyup="checkPassword()"
                                               required>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary toggle-password" data-target="conpassword">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <small id="password-feedback" class="form-text"></small>
                                </div>

                            </div>

                            <hr>

                            <div class="d-flex justify-content-end">
                                <a href="{{ url('usermanage') }}" class="btn btn-secondary mr-2">
                                    <i class="fas fa-times mr-1"></i> Cancel
                                </a>
                                <button type="submit" id="submitBtn" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Save User
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@else

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
                <div class="card shadow-sm p-4">
                    <i class="fas fa-ban fa-4x text-danger mb-3"></i>
                    <h4 class="text-danger">Access Denied</h4>
                    <p class="text-muted">You do not have permission to view this page.</p>
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary mt-2">
                        <i class="fas fa-home mr-1"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endif

@endsection

@section('script')
<script>
    // Password match check
    function checkPassword() {
        const password  = document.getElementById('password').value;
        const confirm   = document.getElementById('conpassword').value;
        const feedback  = document.getElementById('password-feedback');
        const input     = document.getElementById('conpassword');
        const submitBtn = document.getElementById('submitBtn');

        if (confirm === '') {
            feedback.textContent = '';
            input.style.borderColor = '';
            return;
        }

        if (password === confirm) {
            input.style.borderColor = '#28a745';
            feedback.textContent    = '✓ Passwords match';
            feedback.style.color    = '#28a745';
            submitBtn.disabled      = false;
        } else {
            input.style.borderColor = '#dc3545';
            feedback.textContent    = '✗ Passwords do not match';
            feedback.style.color    = '#dc3545';
            submitBtn.disabled      = true;
        }
    }

    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const targetId = this.dataset.target;
            const input    = document.getElementById(targetId);
            const icon     = this.querySelector('i');

            if (input.type === 'password') {
                input.type      = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type      = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    });

    // Custom file input label update
    document.querySelectorAll('.custom-file-input').forEach(function (input) {
        input.addEventListener('change', function () {
            const fileName = this.files[0] ? this.files[0].name : 'Choose file';
            this.nextElementSibling.textContent = fileName;
        });
    });
</script>
@endsection