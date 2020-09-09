@extends('layouts.app')

    @section('content')

        <section class="clients-section" style="min-height: 100vh;">

            @include('inc.clients-page.intro')

            @include('inc.clients-page.client-jolocs')

            @include('inc.clients-page.client-hostfront')

            @include('inc.clients-page.client-one')

            @include('inc.clients-page.client-two')

        </section>

    @endsection


