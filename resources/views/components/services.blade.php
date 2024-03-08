@props(['services'])

@if($services->isNotEmpty())
    <section id="services" class="services">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon">
                                <i class="{{ $service->icon() }}"></i>
                            </div>
                            <h4 class="title">
                                <a href="{{ $service->link() }}">
                                    {{ $service->title() }}
                                </a>
                            </h4>
                            <p class="description">
                                {{ $service->description() }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
