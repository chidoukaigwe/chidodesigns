@extends('layouts.app')

    @section('content')

        <section class="projects-section" style="min-height: 100vh;">

            @include('inc.projects-page.intro')

            @include('inc.projects-page.shareposts-app')

            @include('inc.projects-page.flashcard-app')
         
        </section>

    @endsection


