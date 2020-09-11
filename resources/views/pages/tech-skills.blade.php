@extends('layouts.app')

    @section('content')

        <section class="tech-skills-section" style="min-height: 100vh;">

            @include('inc.tech-skills-page.intro')

            @include('inc.tech-skills-page.front-end')

            @include('inc.tech-skills-page.back-end')

            @include('inc.tech-skills-page.devops')

            @include('inc.tech-skills-page.tools')

            @include('inc.tech-skills-page.cms')

            @include('inc.tech-skills-page.outro')

        </section>

    @endsection


