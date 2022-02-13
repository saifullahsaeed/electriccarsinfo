@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->

    <div class="header bg-primary pb-6 mt--10">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--26">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">User Quiries</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="email">Email</th>
                                    <th scope="col" class="sort" data-sort="status">Phone</th>
                                    <th scope="col" class="sort" data-sort="completion">Message</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>




                            <tbody class="list">
                                @if (count($data) > 0)
                                @foreach ($data as $line)
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{ $line->name }}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <span class="status">{{ $line->email }}</span>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <span class="status">{{ $line->phone }}</span>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <span class="status">{{ $line->query }}</span>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>


        @include('layouts.footers.auth')
    </div>
</div>

@push('js')
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
<script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.2.0"></script>
@endpush
@endsection