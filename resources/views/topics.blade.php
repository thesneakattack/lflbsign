@extends('layout')

@section('content')
@include('partials._topics_header')
    <div class="gap-4 columns-2">

        @unless(count($topics) == 0)

        @foreach($topics as $topic)
        @unless($topic->lflbSubCategories->count() === 0 || $topic['title'] == 'Timeline')
        <!-- Column -->
        <div class="w-full px-4 mb-8">

            <!-- Article -->
            <article class="overflow-hidden text-white border-gray-300 rounded-lg shadow-lg border-1 bg-laravel"
                tabindex="-1">
                {{-- {{$topic->lflbSubCategories->count()}} --}}
                <a href="/topics/{{$topic['id']}}" tabindex="-1">
                    <img alt="Placeholder" class="block w-full h-auto" src="{{ asset("/assets/".$topic['mainImage'])
                        }}" />
                </a>

                <header class="flex items-center justify-between p-2 leading-tight md:p-4">
                    <h1 class="text-lg font-semibold">
                        <a class="no-underline" href="/topics/{{$topic['id']}}" tabindex="-1">
                            {{$topic['title']}}
                        </a>
                    </h1>
                    <p class="text-sm text-grey-darker">
                        {{-- 11/1/19 --}}
                    </p>
                </header>

                <footer class="flex items-center justify-end p-2 leading-none md:p-4">
                    {{-- <a class="flex items-center text-black no-underline hover:underline" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Author Name
                        </p>
                    </a> --}}
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#" tabindex="-1">
                        <a href="/topics/{{$topic['id']}}"
                            class="tabbable bg-buttonPrimary text-white font-bold uppercase rounded-lg text-sm px-5 py-2.5 text-center"
                            tabindex="1">View Topic</a>
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
