@extends('layouts.base')

@title(__('Home'))
@description(__('We aim for projects with a strong reputation and a distinctive idea.'))

@section('body')

    <x-slider-home :$sliders/>

    <main id="main">

        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>
                            {!!
                                __(
                                    "We've created more than :count this :type",
                                    [
                                        'count' => "<span>200 ". __('project') ."</span>",
                                        'type'=> __('month')
                                    ]
                                   )
                            !!}
                        </h3>
                        <p>
                            {{ __('Our dream is to achieve any dream that becomes a tangible reality through technology with the best quality and lowest price. We aim for projects with a strong reputation and a distinctive idea.') }}
                        </p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">
                            {{ __('Contact Us') }}
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <x-services :$services/>

        <!-- ======= Portfolio Section ======= -->
        <x-portfolio :$portfolios :$categories/>

    </main>

@endsection
