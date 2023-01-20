@extends('layout')

@section('content')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($topics) == 0)
    @foreach($topics as $topic)
    @unless(empty($topic['subCollections']) || $topic['title'] == 'Timeline')
    <div class="bg-gray-100 border border-gray-300 rounded p-6">
        <div class="flex">    
        @unless(empty($topic['mainImage']))
            <a href="/topics/{{$topic['id']}}"><img class="hidden w-48 mr-6 md:block" src = "{{ asset("/assets/".$topic['mainImage']) }}" /></a>
            @else
            {{-- <a href="/topics/{{$topic['id']}}"><img class="hidden w-48 mr-6 md:block" src = "{{ asset('/storage/no-image.png') }}" /></a> --}}
        @endunless
            <div>
            <h3 class="text-2xl font-bold">
                <a href="/topics/{{$topic['id']}}">{{$topic['title']}}</a>
            </h3>
            @unless(empty($topic['description']))
                <div class="text-lg mb-4">{{$topic['description']}}</div>
            @endunless
            </div>
        </div>
    </div>
    @endunless
    @endforeach

@else
    <p>No topics found</p>
@endunless

</div>

@endsection