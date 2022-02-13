@extends('layouts.public', ['class' => 'bg-default'])

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div
                    style="
                                                                                                                                                                    position: inherit;
                                                                                                                                                                    height: 200px;
                                                                                                                                                                    width: 100%;
                                                                                                                                                                    background: #00000087;
                                                                                                                                                                    filter: blur(15px);
                                                                                                                                                                ">
                </div>
                <div class="text-content">
                    <h4>Find your car today!</h4>
                    <h2>New Technology in markeet</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div
                    style="
                                                                                                                                                                    position: inherit;
                                                                                                                                                                    height: 200px;
                                                                                                                                                                    width: 100%;
                                                                                                                                                                    background: #00000087;
                                                                                                                                                                    filter: blur(15px);
                                                                                                                                                                ">
                </div>
                <div class="text-content">
                    <h4>Pollution</h4>
                    <h2>Less Global Warming </h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div
                    style="
                                                                                                                                                                    position: inherit;
                                                                                                                                                                    height: 200px;
                                                                                                                                                                    width: 100%;
                                                                                                                                                                    background: #00000087;
                                                                                                                                                                    filter: blur(15px);
                                                                                                                                                                ">
                </div>
                <div class="text-content">
                    <h4>Power Saver</h4>
                    <h2>Save About 40% power and mony</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Featured Cars</h2>
                        <a href="{{ route('carslist') }}">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
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
                                                        src="{{ asset('storage/' . $image->path) }}" alt="First slide">
                                                </div>
                                            @endif
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{ asset('storage/' . $image->path) }}"
                                                    alt="First slide">
                                            </div>
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

                                    <p>&nbsp; {{ $car->company->name }} &nbsp;/&nbsp; {{ $car->year }} &nbsp;</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        {{-- Random text abou cars and stuff --}}

                        <p>Welcome to EVIS, your number one source for all things [product]. We're dedicated to providing
                            you
                            the very best of [product], with an emphasis on [store characteristic 1], [store characteristic
                            2],
                            [store characteristic 3].


                            Founded in [year] by [founder name], EVIS has come a long way from its beginnings in [starting
                            location]. When [founder name] first started out, [his/her/their] passion for [brand message -
                            e.g.
                            "eco-friendly cleaning products"] drove them to start their own business.


                            We hope you enjoy our products as much as we enjoy offering them to you. If you have any
                            questions
                            or comments, please don't hesitate to contact us.


                            Sincerely,

                            Bc190401729</p>


                        <a href="about-us.html" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ @asset('front') }}/images/about-1-570x350.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>We would Love to hear from you</h4>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="{{ route('contact') }}" class="filled-button">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.front')
@endsection
