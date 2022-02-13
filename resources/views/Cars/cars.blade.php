@extends('layouts.public', ['class' => 'bg-default'])

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h2>Cars</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        @if (count($cars) > 0)
                            @foreach ($cars as $car)
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-item">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" style="height: 200px">
                                                @foreach ($car->images as $image)
                                                    @if ($loop->first)
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('storage/' . $image->path) }}"
                                                                alt="First slide">
                                                        </div>
                                                    @else
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100"
                                                                src="{{ asset('storage/' . $image->path) }}"
                                                                alt="First slide">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="down-content">
                                            <a href="{{ route('cardetails', $car->id) }}">
                                                <h4>{{ $car->name }}</h4>
                                            </a>

                                            <h6>${{ $car->price }}</h6>

                                            <p>&nbsp; {{ $car->company->name }} &nbsp;/&nbsp; {{ $car->year }} &nbsp;
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="col-md-12">
                            <ul class="pages">
                                @if ($cars->currentPage() > 1)
                                    <li><a href="{{ $cars->previousPageUrl() }}">&laquo;</a></li>
                                @endif
                                @for ($i = 1; $i <= $cars->lastPage(); $i++)
                                    @if ($cars->currentPage() == $i)
                                        <li class="active"><a href="{{ $cars->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @else
                                        <li><a href="{{ $cars->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor
                                @if ($cars->currentPage() < $cars->lastPage())
                                    <li><a href="{{ $cars->nextPageUrl() }}">&raquo;</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.front')
@endsection
