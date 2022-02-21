@extends('common.master')

@section('body')
    <section class="hero  is-large  is-bold is-primary"
            @hasSection('background')
                style="background: url('@yield('background')') no-repeat center center; background-size: cover;"
            @endif >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">@yield('title')</p>
                <p class="subtitle is-3">@yield('subtitle')</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                @yield('section')
            </div>
        </div>
    </section>
@endsection

