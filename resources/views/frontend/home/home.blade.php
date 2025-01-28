@extends('frontend.layouts.master')

@section('content')
    <!--Wrapper Start-->
    <main>
        @include('frontend.home.sections.sidebar')

        <div class="elementor elementor-2693">
                @include('frontend.home.sections.banner')
                {{-- @include('frontend.home.sections.surah') --}}

        </div>

    </main>
@endsection
