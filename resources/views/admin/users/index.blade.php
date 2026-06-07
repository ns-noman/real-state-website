@extends('admin.master')

@section('content')

@if(Auth::guard('web')->user()->roleid == 1)

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-users-cog mr-2 text-primary"></i> User Manage
                    </h4>
                    <a href="{{ url('usermanageCreate') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus mr-1"></i> Add New
                    </a>
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

                <!-- Table Card -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered table-hover mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" style="width:50px;">#</th>
                                        <th>Full Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Contact No.</th>
                                        <th>Reference Person</th>
                                        <th class="text-center">National ID</th>
                                        <th class="text-center">Agreement Paper</th>
                                        <th class="text-center" style="width:110px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <i class="fas fa-user mr-1 text-muted"></i>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                @if($user->roleid == 1)
                                                    <span class="badge badge-danger">
                                                        <i class="fas fa-shield-alt mr-1"></i>{{ $user->role_name }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-secondary">
                                                        <i class="fas fa-user mr-1"></i>{{ $user->role_name }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                            </td>
                                            <td>{{ $user->address ?? '—' }}</td>
                                            <td>
                                                @if($user->contact_no)
                                                    <a href="tel:{{ $user->contact_no }}">{{ $user->contact_no }}</a>
                                                @else
                                                    <span class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->reference_by ?? '—' }}</td>
                                            <td class="text-center">
                                                @if(!empty($user->nationalid))
                                                    <a href="{{ asset('public/upload/'.$user->nationalid) }}" target="_blank" rel="noopener noreferrer">
                                                        <img height="60" width="60"
                                                             src="{{ asset('public/upload/'.$user->nationalid) }}"
                                                             alt="National ID"
                                                             class="rounded border p-1">
                                                    </a>
                                                @else
                                                    <span class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if(!empty($user->agreement_paper))
                                                    <a href="{{ asset('public/upload/'.$user->agreement_paper) }}" target="_blank" rel="noopener noreferrer">
                                                        <img height="60" width="60"
                                                             src="{{ asset('public/upload/'.$user->agreement_paper) }}"
                                                             alt="Agreement Paper"
                                                             class="rounded border p-1">
                                                    </a>
                                                @else
                                                    <span class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap:4px;">
                                                    <!-- Edit -->
                                                    <a href="{{ url('usermanageEdit/'.$user->id) }}"
                                                       class="btn btn-sm btn-info"
                                                       title="Edit User">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>

                                                    <!-- Delete -->
                                                    @if($user->roleid == 1)
                                                        <button class="btn btn-sm btn-danger"
                                                                disabled
                                                                title="Admin cannot be deleted">
                                                            <i class="fas fa-lock"></i>
                                                        </button>
                                                    @else
                                                        <a href="{{ url('usermanageDestroy/'.$user->id) }}"
                                                           class="btn btn-sm btn-danger btn-delete"
                                                           data-name="{{ $user->name }}"
                                                           title="Delete User">
                                                            <i class="fas fa-trash-can"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center text-muted py-4">
                                                <i class="fas fa-users-slash fa-2x mb-2 d-block"></i>
                                                No users found.
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
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            const name = this.dataset.name;

            Swal.fire({
                title: 'Delete User?',
                html: `Are you sure you want to delete <strong>${name}</strong>?<br><small class="text-muted">This action cannot be undone.</small>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="fas fa-trash-can mr-1"></i> Yes, delete',
                cancelButtonText: '<i class="fas fa-times mr-1"></i> Cancel',
            }).then(function (result) {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });
        });
    });
</script>
@endsection