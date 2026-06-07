@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <!-- Page Header -->
                <div class="d-flex align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-pen mr-2 text-primary"></i> Edit Blog/News
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

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
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
                        @include('components.blog-form', ['blog' => $blog])
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@include('components.blog-form-scripts')
@endsection