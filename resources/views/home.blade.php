@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-bwtween">
    <div class="lg:w-1/6">@include('_sidebar-links')</div>

    <div class="lg:flex-1 lg:mx-10" >
        @include('_publish-tweet-panel')
        <div class="border border-gray-300 rounded-lg">
            @foreach($tweets as $tweet)
                @include('_tweet')
            @endforeach
        </div>
    </div>

    <div class="lg:w-1/6 bg-blue-100 raounded-lg p-4">@include('_frinds-list') </div>
</div>
@endsection