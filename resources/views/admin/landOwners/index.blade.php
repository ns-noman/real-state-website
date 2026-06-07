@extends('admin.master')
@section('content')
<section id="main-content">
<div class="card m-1 p-1">
    <h4>Land Owner</h4>
    <div class="bootstrap-data-table-panel">
        <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered table-centre">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Land Owner</th>
                        <th>Contact Person</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Locality</th>
                        <th>Address</th>
                        <th>Land Size</th>
                        <th>Road Width</th>
                        <th>Land Category</th>
                        <th>Facing</th>
                        <th>Features</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->contactperson }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->contactno }}</td>
                            <td>{{ $item->locality }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->landsize }}</td>
                            <td>{{ $item->roadwidth }}</td>
                            <td>{{ $item->landCategory }}</td>
                            <td>{{ $item->facing }}</td>
                            <td>{{ $item->features }}</td>
                            <td>
                                @php
                                    $date = new DateTime($item->created_at);
                                    echo $date->format('Y/m/d h:i:s A') ;
                                @endphp
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    @if ($item->readStatus==0)
                                        <a href="{{ url('landOwnerMsg/'.$item->id.'/'.$item->readStatus) }}" class="btn btn-success">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>
                                    @else
                                        <a href="{{ url('landOwnerMsg/'.$item->id.'/'.$item->readStatus) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <form action="{{url('admin/landowners/'.$item->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endsection


