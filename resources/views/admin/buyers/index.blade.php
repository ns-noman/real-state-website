@extends('admin.master')
@section('content')
<section id="main-content">
<div class="card m-1 p-1">
    <h4>Buyers</h4>
    <div class="bootstrap-data-table-panel">
        <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered table-centre">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Cutomer Name</th>
                        <th>Profession</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Mailing Address</th>
                        <th>Prefered Loc</th>
                        <th>Prefered Size</th>
                        <th>Carparking Req</th>
                        <th>Expected Hand Over Time</th>
                        <th>Facing</th>
                        <th>Prefered Floor</th>
                        <th>Num Of Bed</th>
                        <th>Num Of Bath</th>
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
                            <td>{{ $item->profession }}</td>
                            <td>{{ $item->contactno }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->maillingAddress }}</td>
                            <td>{{ $item->preferedLoc }}</td>
                            <td>{{ $item->preferedSize }}</td>
                            <td>{{ $item->carparkingReq }}</td>
                            <td>{{ $item->expectedHOD }}</td>
                            <td>{{ $item->facing }}</td>
                            <td>{{ $item->preferedFlr }}</td>
                            <td>{{ $item->numOfbedRoom }}</td>
                            <td>{{ $item->numOfBathRoom }}</td>
                            <td>
                                @php
                                    $date = new DateTime($item->created_at);
                                    echo $date->format('Y/m/d h:i:s A') ;
                                @endphp
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    @if ($item->readStatus==0)
                                        <a href="{{ url('buyersMsg/'.$item->id.'/'.$item->readStatus) }}" class="btn btn-success">
                                            <i class="fa-solid fa-envelope"></i>
                                        </a>
                                    @else
                                        <a href="{{ url('buyersMsg/'.$item->id.'/'.$item->readStatus) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-envelope-open"></i>
                                        </a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <form action="{{url('admin/buyers/'.$item->id) }}" method="post">
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


