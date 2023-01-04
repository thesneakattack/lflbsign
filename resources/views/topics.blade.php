@extends('layout')

@section('content')
@include('partials._topics_header')

<div id="contentArea" class="h-[1162px] overflow-y-auto w-full px-4 mt-4">
    <div class="gap-4 columns-2">

@unless(count($topics) == 0)

    @foreach($topics as $topic)  
    @unless(empty($topic['subCollections']) || $topic['title'] == 'Timeline')
        <!-- Column -->
        <div class="mb-8 px-4 w-full">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg border-gray-300 border-1 bg-laravel text-white" tabindex="-1">

                <a href="/topics/{{$topic['_newid']}}" tabindex="-1">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ asset("/assets/".$topic['mainImage']) }}" />
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg font-semibold">
                        <a class="no-underline" href="/topics/{{$topic['_newid']}}" tabindex="-1">
                            {{$topic['title']}}
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
                        <a href="/topics/{{$topic['_newid']}}" class="tabbable bg-buttonPrimary text-white font-bold uppercase rounded-lg text-sm px-5 py-2.5 text-center" tabindex="1">View Topic</a>
                    </a>
                </footer>
            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
    @endunless
    @endforeach

@else
    <p>No topics found</p>
@endunless

</div>
</div>

@endsection