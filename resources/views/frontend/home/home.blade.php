@extends('frontend.layouts.master')

@section('content')
    <!--Wrapper Start-->
    <main>
        @include('frontend.home.sections.sidebar')

        <div class="elementor elementor-2693">
                @include('frontend.home.sections.banner')
                @include('frontend.home.sections.quranPara')
                @include('frontend.home.sections.time')

        </div>

    </main>
@endsection
