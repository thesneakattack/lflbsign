@extends('layout')
{{-- {{Session::get('defaultTopic')}} --}}
@section('content')
@include('partials._subtopic_header')
{{-- @include('partials._subtopic_body') --}}
{{-- <h1>{{$topic['title']}}</h1>
@unless(empty($topic['mainImage']))
    <img src = "{{ asset("/assets/".$topic['mainImage']) }}" width="800" />
@else
    <img src = "{{ asset("/assets/".$topic['coverPhoto']) }}" width="800" />
@endunless --}}


{{-- <div class="flex flex-row items-start mb-4 overflow-y-auto gap-4 space-y-4 md:space-y-0 px-4 pb-12"> --}}
    <div id="contentArea" class="h-[1184px] overflow-y-auto w-full px-4 mt-4">
    <div class="gap-4 columns-2 pb-12">

@unless(count($stories) == 0)

    @foreach($stories as $story)  

        <!-- Column -->
        <div class="mb-8 px-4 w-full">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg border-gray-300 border-1 bg-laravel text-white" tabindex="-1">

                <a href="/stories/{{$story['_newid']}}" tabindex="-1">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ asset("/assets/".$story['image']) }}" />
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg font-semibold">
                        <a class="no-underline" href="/stories/{{$story['_newid']}}" tabindex="-1">
                            {{$story['title']}}
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        {{-- 11/1/19 --}}
                    </p>
                </header>

                <footer class="flex items-center justify-end leading-none p-2 md:p-4">
                    {{-- <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Author Name
                        </p>
                    </a> --}}
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#" tabindex="-1">
                        <a href="/stories/{{$story['_newid']}}" class="tabbable bg-buttonPrimary text-white font-bold uppercase rounded-lg text-sm px-5 py-2.5 text-center" tabindex="1">View Story</a>
                    </a>
                </footer>
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
    
    @endforeach

@else
    <p>No stories found</p>
@endunless

</div>
</div>
@endsection