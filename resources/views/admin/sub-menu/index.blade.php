@extends('admin.master')

@section('content')

<!-- Page Header / Breadcrumb -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Sub Menu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Sub Menu</li>
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
                        <i class="fas fa-list-ul mr-2 text-primary"></i> Sub Menu List
                    </h4>
                    <a href="{{ url('sub-menu/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-1"></i> Add New
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
                                        <th>Main Menu</th>
                                        <th>Sub Menu</th>
                                        <th>Title</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center" style="width:110px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sub_menu as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <span class="badge badge-primary">{{ $item->menuName }}</span>
                                            </td>
                                            <td>{{ $item->subMenuName }}</td>
                                            <td>{{ $item->title ?? '—' }}</td>
                                            <td class="text-center">
                                                @if($item->image)
                                                    <a href="{{ asset('public/upload/'.$item->image) }}" target="_blank" rel="noopener noreferrer">
                                                        <img height="50" width="50"
                                                             src="{{ asset('public/upload/'.$item->image) }}"
                                                             alt="Sub Menu Image"
                                                             class="rounded border p-1">
                                                    </a>
                                                @else
                                                    <span class="text-muted">—</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap:4px;">
                                                    <!-- Edit -->
                                                    <a href="{{ url('sub-menu/'.$item->id.'/edit') }}"
                                                       class="btn btn-sm btn-info"
                                                       title="Edit">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>
                                                    <!-- Delete -->
                                                    <form action="{{ url('sub-menu/'.$item->id) }}"
                                                          method="POST"
                                                          id="delete-form-{{ $item->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                                class="btn btn-sm btn-danger btn-delete"
                                                                data-id="{{ $item->id }}"
                                                                data-name="{{ $item->subMenuName }}"
                                                                title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">
                                                <i class="fas fa-folder-open fa-2x mb-2 d-block"></i>
                                                No sub menu items found.
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
                title: 'Delete Sub Menu?',
                html: `Are you sure you want to delete <strong>${name}</strong>?<br><small class="text-muted">This action cannot be undone.</small>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: '<i class="fas fa-trash mr-1"></i> Yes, delete it',
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