@extends('layouts.base')

@title(__('Contact Us'))
@description(__('Contact Us Description'))

@section('body')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                        {{ __('Contact Us') }}
                    </h2>
                    <ol>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ __('Contact Us') }}
                        </li>
                    </ol>
                </div>

            </div>
        </section>

        <div class="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113312.1374524796!2d40.47736857407457!3d21.225598022217333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e98ed053c6ad33%3A0x841124c24726dea7!2z2KfZhNi02YfYr9in2KEg2KfZhNis2YbZiNio2YrYqdiMINin2YTYt9in2KbZgSAyNjUxM9iMINin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1709863385513!5m2!1sar!2seg"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>
                                        {{ __('Location:') }}
                                    </h4>
                                    <p>
                                        Ashuhada Aljanubiyyah Taif,
                                        <br>
                                        Saudi Arabia 26513
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>{{ __('Email:')}}</h4>
                                    <p>
                                        buildingcoods@gmail.com
                                    </p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>{{ __('Phone:') }}</h4>
                                    <p>
                                        +20 128 466 0589
                                        <br>
                                        +966 5448 480 20
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="{{ route('contact-us.store') }}" method="post" class="php-email-form">
                            @csrf
                            @method('POST')

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control"
                                           id="name" placeholder="{{ __('Your Name') }}" required/>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="{{ __('Your Email') }}" required/>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="{{ __('Subject') }}" required/>
                                @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5"
                                          placeholder="{{ __('Message') }}" required></textarea>
                                @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>

@endsection
