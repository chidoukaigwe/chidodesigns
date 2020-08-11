@extends('layouts.app')

    @section('content')

        <section class="about-section" style="min-height: 100vh;">

            @include('inc.about.intro')
            @include('inc.about.interests')
            @include('inc.about.outro')

        </section>

    @endsection


