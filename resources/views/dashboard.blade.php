@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <!-- Check For alerts  -->
   
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Add New Menu</h6>
                                <h2 class="text-white mb-0">Insert Data</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('menus.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Company Name" required>
                                </div>
                                </div>                       
                            </div>
                            <div class="form-group">
                                <!-- button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Companies</h6>
                                <h2 class="mb-0">Total Menus</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Id</th>
                                        <th scope="col" class="sort" data-sort="email">Name</th>
                                        <th scope="col" class="sort" data-sort="status">Delete</th>
                                    </tr>
                                </thead>
    
    
    
    
                                <tbody class="list">
                                    @if (count($menus) > 0)
                                    @foreach ($menus as $line)
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $line->id }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <span class="status"> <strong>{{ $line->name }} </strong> </span>
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a class="btn btn-sm btn-icon-only text-light bg-red" href="{{ route('menus.delete',$line->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fas fa-trash text-light" ></i>
                                                </a>
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
        </div>
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                    <div class="card bg-gradient-default shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-light ls-1 mb-1">Add New Company</h6>
                                    <h2 class="text-white mb-0">Insert Data</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('company.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Company Name" required>
                                    </div>
                                    </div>                       
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="A Little Discription About Company" required></textarea>
                            </div>
                                <div class="form-group">
                                    <!-- button -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Companies</h6>
                                <h2 class="mb-0">Total Companies</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">Id</th>
                                        <th scope="col" class="sort" data-sort="email">Name</th>
                                        <th scope="col" class="sort" data-sort="status">Delete</th>
                                    </tr>
                                </thead>
    
    
    
    
                                <tbody class="list">
                                    @if (count($companies) > 0)
                                    @foreach ($companies as $line)
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{ $line->id }}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <span class="status"> <strong>{{ $line->name }} </strong> </span>
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <a class="btn btn-sm btn-icon-only text-light bg-red" href="{{ route('company.delete',$line->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fas fa-trash text-light" ></i>
                                                </a>
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
        </div>
        

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush