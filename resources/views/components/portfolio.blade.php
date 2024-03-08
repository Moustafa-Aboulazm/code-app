@props(['portfolios', 'categories'])

@if($portfolios->isNotEmpty())
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">{{ __('All') }}</li>
                        @foreach($categories as $category)
                            <li data-filter=".filter-{{ $category->id }}">
                                {{ $category->name() }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->category?->id }}">
                        <img src="{{ $portfolio->images->first()?->ImageUrl(\App\Enum\Assets::Portfolio) }}"
                             class="img-fluid w-75 h-75 portfolio-image rounded img-thumbnail img-fluid text-center mx-auto d-block"
                             alt="{{ $portfolio->name() }}">
                        <div class="portfolio-info">
                            <h4>
                                <a href="{{ route('portfolios.show', $portfolio->id) }}">
                                    {{ $portfolio->name() }}
                                </a>
                            </h4>
                            <p>
                                {{ $portfolio->category?->name() }}
                            </p>
                            <a data-gallery="portfolioGallery"
                               href="{{ $portfolio->images->first()?->ImageUrl(\App\Enum\Assets::Portfolio) }}"
                               class="portfolio-lightbox preview-link" title="{{ $portfolio->name() }}">
                                <i class="bx bx-plus"></i>
                            </a>
                            <a href="{{ route('portfolios.show', $portfolio->id) }}" class="details-link"
                               title="More Details">
                                <i class="bx bx-link"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endif
