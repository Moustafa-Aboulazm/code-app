@extends('layouts.base')

@title(__('Portfolio'))
@description(__('All portfolio items are listed here.'))

@section('body')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>
                    {{ __('Portfolio') }}
                </h2>
                <ol>
                    <li>
                        <a href="{{ route('home') }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li>
                        {{ __('Portfolio') }}
                    </li>
                </ol>
            </div>

        </div>
    </section>

    <x-portfolio :$portfolios :$categories/>
@endsection
