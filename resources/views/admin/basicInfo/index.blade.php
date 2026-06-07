@extends('admin.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h4 class="m-0">
                        <i class="fas fa-cog mr-2 text-primary"></i> Basic Info
                    </h4>
                    <a href="{{ url('basicinfo/'.$basicInfo['id'].'/edit') }}" class="btn btn-info">
                        <i class="fas fa-pen-to-square mr-1"></i> Edit
                    </a>
                </div>

                <!-- Card -->
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <table class="table table-bordered table-striped mb-0">
                            <tbody>

                                <tr>
                                    <th style="width:200px;" class="bg-light">
                                        <i class="fas fa-heading mr-2 text-muted"></i> Title
                                    </th>
                                    <td>{{ $basicInfo['title'] }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-star mr-2 text-muted"></i> Fav Icon
                                    </th>
                                    <td>
                                        <img src="{{ asset('public/upload/' . $basicInfo['favIcon']) }}"
                                             alt="Favicon"
                                             height="50" width="50"
                                             class="rounded border p-1">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-image mr-2 text-muted"></i> Logo
                                    </th>
                                    <td>
                                        <img src="{{ asset('public/upload/' . $basicInfo['logo']) }}"
                                             alt="Logo"
                                             height="60"
                                             class="rounded border p-1">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-phone mr-2 text-muted"></i> Mobile
                                    </th>
                                    <td>
                                        <a href="tel:{{ $basicInfo['contact'] }}">{{ $basicInfo['contact'] }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-envelope mr-2 text-muted"></i> Email
                                    </th>
                                    <td>
                                        <a href="mailto:{{ $basicInfo['email'] }}">{{ $basicInfo['email'] }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fas fa-map-marker-alt mr-2 text-muted"></i> Address
                                    </th>
                                    <td>{{ $basicInfo['address'] }}</td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fab fa-facebook mr-2 text-muted"></i> Facebook
                                    </th>
                                    <td>
                                        @if($basicInfo['fbLink'])
                                            <a href="{{ $basicInfo['fbLink'] }}" target="_blank" rel="noopener noreferrer">
                                                {{ $basicInfo['fbLink'] }}
                                            </a>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fab fa-instagram mr-2 text-muted"></i> Instagram
                                    </th>
                                    <td>
                                        @if($basicInfo['instraLink'])
                                            <a href="{{ $basicInfo['instraLink'] }}" target="_blank" rel="noopener noreferrer">
                                                {{ $basicInfo['instraLink'] }}
                                            </a>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th class="bg-light">
                                        <i class="fab fa-youtube mr-2 text-muted"></i> YouTube
                                    </th>
                                    <td>
                                        @if($basicInfo['youTubeLink'])
                                            <a href="{{ $basicInfo['youTubeLink'] }}" target="_blank" rel="noopener noreferrer">
                                                {{ $basicInfo['youTubeLink'] }}
                                            </a>
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection