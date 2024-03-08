@extends('layouts.base')

@title(__('project Details for :name', ['name' => $portfolio->name()]))
@description(Str::limit($portfolio->description(), 160))

@section('body')
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('project Details') }}</h2>
                    <ol>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolios.index') }}">
                                {{ __('Portfolio') }}
                            </a>
                        </li>
                    </ol>
                </div>

            </div>
        </section>


        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach($portfolio->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ $image->ImageUrl(path: \App\Enum\Assets::Portfolio) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>
                                {{ __('Project Information') }}
                            </h3>
                            <ul>
                                <li><strong>{{ __('Category') }}</strong>: {{ $portfolio->category->name() }}</li>
                                <li><strong>{{ __('Client') }}</strong>: {{ $portfolio->client() }}</li>
                                <li><strong>{{ __('Project Date') }}</strong>: {{ $portfolio->date() }}</li>
                                <li><strong>{{ __('Project URLS') }}</strong>: <br>
                                    <div class="d-flex flex-column">
                                        @foreach($portfolio->links() as $link)
                                            <div class="d-flex">
                                                <a href="{{ $link['link'] }}" target="_blank" class="align-middle">
                                                    {{ $link['name'] }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>
                                {{ $portfolio->name() }}
                            </h2>
                            <p>
                                {!! $portfolio->description() !!}
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

@endsection
