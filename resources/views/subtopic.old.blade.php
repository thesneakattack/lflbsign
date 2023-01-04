@extends('layout')

@section('content')
@include('partials._subtopic_header')
{{-- @include('partials._subtopic_body') --}}
{{-- <h1>{{$topic['title']}}</h1>
@unless(empty($topic['mainImage']))
    <img src = "{{ asset("/assets/".$topic['mainImage']) }}" width="800" />
@else
    <img src = "{{ asset("/assets/".$topic['coverPhoto']) }}" width="800" />
@endunless --}}


<div class="h-[1216px] overflow-y-auto lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 px-4 pb-12">

@unless(count($stories) == 0)

    @foreach($stories as $story)

    <div class="bg-gray-100 border border-gray-300 rounded p-6">
        <div class="flex">
            @unless(empty($story['image']))
                <a href="/stories/{{$story['_newid']}}"><img class="hidden w-48 md:block" src = "{{ asset("/assets/".$story['image']) }}" /></a>
            @endunless            
            <div>
                <h3 class="text-2xl ml-6">
                    <a href="/stories/{{$story['_newid']}}">{{$story['title']}}</a>
                </h3>
            @unless(empty($story['description']))
                <div class="text-xl font-bold mb-4 ml-6"><a href="/stories/{{$story['_newid']}}">{{$story['description']}}</a></div>
            @endunless 
                {{-- <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Laravel</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">API</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Backend</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Vue</a>
                    </li>
                </ul>
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i> Boston,
                    MA
                </div> --}}
            </div>
        </div>
    </div>    
    
    @endforeach

@else
    <p>No subTopics found</p>
@endunless

</div>

@endsection