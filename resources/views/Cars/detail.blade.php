@extends('layouts.public', ['class' => 'bg-default'])

@section('content')
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4><strong class="text-primary">${{ $car->price }}</strong></h4>
                        <h2>{{ $car->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($car->images as $image)
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('storage/' . $image->path) }}"
                                            alt="First slide">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('storage/' . $image->path) }}"
                                            alt="First slide">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>

                                    <strong class="pull-right" style="float: right;"> New Car</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Made By</span>

                                    <strong class="pull-right"
                                        style="float: right;">{{ $car->company->name }}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right" style="float: right;">{{ $car->year }}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Price</span>

                                    <strong class="pull-right" style="float: right;">${{ $car->price }}</strong>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right" style="float: right;">Electrcity</strong>
                                </div>
                            </li>


                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Vehicle Description</h2>
                    </div>

                    <div class="left-content">
                        {!! $car->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.front')
@endsection
