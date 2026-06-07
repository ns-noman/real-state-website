@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-newspaper mr-2 text-primary"></i> Blogs & News
                    </h4>
                    <a href="{{ url('admin/blogs/create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-1"></i> New Blog/News
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
                                        <th>Heading</th>
                                        <th>Writer</th>
                                        <th>Source</th>
                                        <th>Date</th>
                                        <th class="text-center" style="width:100px;">Type</th>
                                        <th class="text-center" style="width:150px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($newsevent as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <strong>{{ Str::limit($item->heading, 50) }}</strong>
                                            </td>
                                            <td>
                                                <small class="text-muted">{{ $item->writter }}</small>
                                            </td>
                                            <td>
                                                <small class="text-muted">{{ Str::limit($item->source, 30) }}</small>
                                            </td>
                                            <td>
                                                <small class="text-secondary">
                                                    @if($item->date)
                                                        {{ \Carbon\Carbon::parse($item->date)->format('M d, Y') }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </small>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->type == 1)
                                                    <span class="badge badge-danger">
                                                        <i class="fas fa-bolt mr-1"></i> News
                                                    </span>
                                                @else
                                                    <span class="badge badge-info">
                                                        <i class="fas fa-pen mr-1"></i> Blog
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap:4px;">
                                                    <!-- Edit -->
                                                    <a href="{{ url('admin/blogs/'.$item->id.'/edit') }}"
                                                       class="btn btn-sm btn-info"
                                                       title="Edit">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>
                                                    <!-- Delete -->
                                                    <form action="{{ url('admin/blogs/'.$item->id) }}"
                                                          method="POST"
                                                          class="delete-form"
                                                          id="delete-form-{{ $item->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button"
                                                                class="btn btn-sm btn-danger btn-delete"
                                                                data-id="{{ $item->id }}"
                                                                data-title="{{ $item->heading }}"
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
                                                <i class="fas fa-newspaper fa-2x mb-2 d-block"></i>
                                                No blogs or news found.
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
            const id    = this.dataset.id;
            const title = this.dataset.title;

            Swal.fire({
                title: 'Delete Blog/News?',
                html: `Are you sure you want to delete <strong>${title}</strong>?<br><small class="text-muted">This action cannot be undone.</small>`,
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