@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-envelope mr-2 text-primary"></i> Messages
                    </h4>
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
                                        <th>Sender Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th class="text-center" style="width:80px;">Status</th>
                                        <th class="text-center" style="width:140px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                <strong>{{ $item->name }}</strong>
                                            </td>
                                            <td>
                                                <a href="mailto:{{ $item->email }}" class="text-decoration-none">
                                                    {{ $item->email }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="tel:{{ $item->phone }}" class="text-decoration-none">
                                                    {{ $item->phone }}
                                                </a>
                                            </td>
                                            <td>
                                                <span title="{{ $item->subject }}">
                                                    {{ Str::limit($item->subject, 30) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span title="{{ $item->message }}" class="text-muted">
                                                    {{ Str::limit($item->message, 50) }}
                                                </span>
                                                <br>
                                                <small class="text-secondary">
                                                    {{ $item->created_at->format('Y/m/d h:i A') }}
                                                </small>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('message.toggle', ['id' => $item->id]) }}"
                                                   class="btn btn-sm {{ $item->readStatus == 0 ? 'btn-success' : 'btn-warning' }}"
                                                   title="{{ $item->readStatus == 0 ? 'Mark as Read' : 'Mark as Unread' }}">
                                                    <i class="fas fa-{{ $item->readStatus == 0 ? 'envelope' : 'envelope-open' }}"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center" style="gap:4px;">
                                                    <!-- Delete -->
                                                    <form action="{{ route('message.destroy', $item->id) }}"
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
                                            <td colspan="8" class="text-center text-muted py-4">
                                                <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                                                No messages found.
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
                title: 'Delete Message?',
                html: `Are you sure you want to delete the message from <strong>${name}</strong>?<br><small class="text-muted">This action cannot be undone.</small>`,
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