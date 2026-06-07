@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-project-diagram mr-2 text-primary"></i> Projects
                    </h4>
                    <a href="{{ url('admin/projects/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-1"></i> New Project
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
                                        <th>Project Name</th>
                                        <th>Address</th>
                                        <th>Area</th>
                                        <th>Type</th>
                                        <th>Category</th>
                                        <th class="text-center" style="width:140px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->area }}</td>
                                            <td>
                                                <span class="badge badge-secondary">{{ $item->typeName }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->categoryName }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap:4px;">
                                                    <!-- Edit -->
                                                    <a href="{{ url('admin/projects/'.$item->id.'/edit') }}"
                                                       class="btn btn-sm btn-info"
                                                       title="Edit">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>
                                                    <!-- Images -->
                                                    <a href="{{ route('projects.show', $item->id) }}"
                                                       class="btn btn-sm btn-warning"
                                                       title="View Images">
                                                        <i class="fas fa-images"></i>
                                                    </a>
                                                    <!-- Delete -->
                                                    <form action="{{ url('admin/projects/'.$item->id) }}"
                                                          method="POST"
                                                          class="delete-form"
                                                          id="delete-form-{{ $item->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button"
                                                                class="btn btn-sm btn-danger btn-delete"
                                                                data-id="{{ $item->id }}"
                                                                data-name="{{ $item->name }}"
                                                                title="Delete">
                                                            <i class="fas fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted py-4">
                                                <i class="fas fa-folder-open fa-2x mb-2 d-block"></i>
                                                No projects found.
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
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const id   = this.dataset.id;
            const name = this.dataset.name;

            Swal.fire({
                title: 'Delete Project?',
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
</script>
@endsection