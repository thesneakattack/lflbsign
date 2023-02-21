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
        <div class="flex flex-wrap gap-4 place-content-center">

            @unless(count($subTopics) == 0)
                @foreach ($subTopics as $subTopic)
                    @unless(empty($subTopic['mainImage']))
                        <div class="h-64 max-w-sm pb-4 overflow-hidden rounded shadow-lg tabbable basis-80 bg-laravel" tabindex="1"
                            style="cursor: pointer" onclick="location.href='/subtopics/{{ $subTopic['id'] }}'">
                            <img class="object-cover w-full h-40" src="{{ asset('/assets/' . $subTopic['mainImage']) }}" />
                            <div class="px-2 pt-2 text-white">
                                <div class="mb-1 text-xl font-bold leading-tight">{{ $subTopic['title'] }}</div>
                                <p class="leading-tight text-white ">
                                    {{ $subTopic['subTitle'] }}
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center justify-center h-64 max-w-sm pb-4 overflow-hidden rounded shadow-lg tabbable basis-80 bg-laravel"
                            tabindex="1" onclick="location.href='/subtopics/{{ $subTopic['id'] }}'">
                            <div class="px-2 pt-2 text-white">
                                <div class="mb-1 text-2xl font-bold leading-tight">{{ $subTopic['title'] }}</div>
                                <p class="leading-tight text-white ">
                                    {{ $subTopic['subTitle'] }}
                                </p>
                            </div>
                        </div>
                    @endunless

                    {{-- <div class="px-6 pt-4 pb-2">
          <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
          <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
          <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
        </div> --}}
                @endforeach
            @else
                <p>No subTopics found</p>
            @endunless
        </div>
    </div>

@endsection
