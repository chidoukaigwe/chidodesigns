@extends('layouts.app')

    @section('content')

        <section class="work-experience-section" style="min-height: 100vh;">

            @include('inc.work-experience-page.intro')

            @include('inc.work-experience-page.experience-one')

            @include('inc.work-experience-page.experience-two')

            @include('inc.work-experience-page.experience-three')

            @include('inc.work-experience-page.experience-four')

            @include('inc.work-experience-page.outro')

        </section>

    @endsection


