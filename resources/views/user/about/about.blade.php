@extends('layouts.base')

@title(__('About Us'))
@description(__('All You Need to Know About Us'))

@section('body')

    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>
                        {{ __('About Us') }}
                    </h2>
                    <ol>
                        <li>
                            <a href="{{ route('home') }}">
                                {{ __('Home') }}
                            </a>
                        </li>
                        <li>
                            {{ __('About Us') }}
                        </li>
                    </ol>
                </div>

            </div>
        </section>

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div
                        class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">
                                {{ __(':name Is Company For All Your Needs', ['name' => config('app.name')]) }}
                            </h3>
                            <p data-aos="fade-up">
                                {{ __('We are a team of developers, designers, and marketers. We aim for projects with a strong reputation and a distinctive idea.') }}
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bx bx-receipt"></i>
                                    <h4>
                                        {{ __('System Design') }}
                                    </h4>
                                    <p>
                                        {{ __('We design systems that are easy to use and have a high level of security.') }}
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>
                                        {{ __('Best Performance') }}
                                    </h4>
                                    <p>
                                        {{ __('We aim to provide the best performance for your system.') }}
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-images"></i>
                                    <h4>
                                        {{ __('Marketing') }}
                                    </h4>
                                    <p>
                                        {{ __('We provide marketing services for your system.') }}
                                    </p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-support"></i>
                                    <h4>
                                        {{ __('Technical Support') }}
                                    </h4>
                                    <p>
                                        {{ __('We provide technical support for your system.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>
                        {{ __('Our Team') }}
                    </h2>
                    <p>
                        {{ __('Our team is made up of experienced and professional people.') }}
                    </p>
                </div>

                <div class="row">

                    @foreach($teams as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ $team->ImageUrl() }}" class="img-fluid" alt="{{ $team->name() }}">
                                    @if($team->socials())
                                        <div class="social">
                                            @foreach($team->socials() as $social)
                                                <a href="{{ $social["url"] }}" target="_blank">
                                                    <i class={{ $social["icon"] }}></i>
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="member-info">
                                    <h4>
                                        {{ $team->name() }}
                                    </h4>
                                    <span>
                                    {{ $team->job() }}
                                </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>
                        {{ __('Our Skills') }}
                    </h2>
                    <p>
                        {{ __('We use the latest technologies to provide the best service.') }}
                    </p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">

                        <div class="progress">
                            <span class="skill">
                                HTML
                                <i class="val">100%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                CSS
                                <i class="val">90%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                JavaScript
                                <i class="val">75%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                Vue.js
                                <i class="val">80%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                React.js
                                <i class="val">60%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">
                                PHP
                                <i class="val">80%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                Laravel
                                <i class="val">90%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                UI/UX
                                <i class="val">55%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">
                                Flutter
                                <i class="val">100%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </main>

@endsection
