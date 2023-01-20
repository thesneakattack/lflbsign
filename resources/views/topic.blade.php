@extends('layout')
{{-- {{Request::getRequestUri()}} --}}
@section('content')
@include('partials._topic_header')
@include('partials._topic_body')
{{-- <h1>{{$topic['title']}}</h1>
@unless(empty($topic['mainImage']))
    <img src = "{{ asset("/assets/".$topic['mainImage']) }}" width="800" />
@else
    <img src = "{{ asset("/assets/".$topic['coverPhoto']) }}" width="800" />
@endunless --}}


<div class="absolute bottom-[12rem] w-full">
    <div class="place-content-center lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($subTopics) == 0)

    @foreach($subTopics as $subTopic)

    @unless(empty($subTopic['mainImage']))
        <div class="tabbable bg-laravel h-64 max-w-sm rounded overflow-hidden shadow-lg pb-4" onclick="location.href='/subtopics/{{$subTopic['id']}}'" style="cursor: pointer" tabindex="1">
            <img class="object-cover w-full h-40" src = "{{ asset("/assets/".$subTopic['mainImage']) }}" />
            <div class="px-2 pt-2 text-white">
                <div class="font-bold text-xl mb-1 leading-tight">{{$subTopic['title']}}</div>
                <p class="text-white leading-tight ">
                    {{$subTopic['subTitle']}}
                </p>
            </div>
        </div>
    @else
        <div class="tabbable flex justify-center items-center bg-laravel h-64 max-w-sm rounded overflow-hidden shadow-lg pb-4" onclick="location.href='/subtopics/{{$subTopic['id']}}'" tabindex="1">
            <div class="px-2 pt-2 text-white">
                <div class="font-bold text-3xl mb-1 leading-tight">{{$subTopic['title']}}</div>
                <p class="text-white leading-tight ">
                    {{$subTopic['subTitle']}}
                </p>
            </div>
        </div>    
    @endunless

        {{-- <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div> --}}
    @endforeach

@else
    <p>No subTopics found</p>
@endunless
    </div>
</div>

@endsection

