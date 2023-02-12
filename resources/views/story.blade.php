@extends('layout')

@section('content')
    <div class="h-[1744px] overflow-y-auto" id="contentArea">
        <div class="p-10 border border-gray-200 rounded bg-gray-50">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="my-2 text-3xl font-bold">{{ $story['title'] }}</h3>
                <div class="mb-4 text-xl">{{ $story['description'] }}</div>
                {{-- <div class="my-4 text-lg">
                <i class="fa-solid fa-location-dot"></i> Daytona, FL
            </div> --}}
                {{-- <div class="w-full mb-6 border border-gray-200"></div> --}}
                {{-- <h3 class="mb-4 text-3xl font-bold">
                    Job Description
                </h3> --}}
                @foreach ($storyAssets as $storyAsset)
                    @if ($storyAsset['type'] == 'TEXT')
                        <div class="flex flex-col mx-8 mb-6 space-y-6 text-2xl text-justify segment-text items-justify">
                            {{-- {!!strip_tags($storyAsset['cleanText'], ["<p>", "<span>", "<ul>", "<li>", "<em>", "<strong>",
                                            "<b>",
                                                "<i>", "<br>"])!!} --}}
                            <div class="prose prose-2xl max-w-none">
                                {!! $storyAsset['cleanText'] !!}
                            </div>
                        </div>
                    @elseif($storyAsset['type'] == 'IMAGE')
                        <div class="flex flex-col items-center justify-center mb-6 text-center segment-image">
                            <img class="w-fit my-6 max-h-[800px] mx-12" src="{{ asset('/assets/' . $storyAsset['link']) }}"
                                alt="">
                            <div class="prose prose-xl max-w-none">{{ $storyAsset['caption'] }}</div>
                        </div>
                    @elseif($storyAsset['type'] == 'VIDEO')
                        <div class="flex flex-col items-center justify-center mb-6 text-center segment-video">
                            <div class="prose prose-2xl max-w-none">{{ $storyAsset['name'] }}</div>
                            <video class="w-fit my-6 max-h-[800px] mx-12"
                                src="{{ asset('/assets/' . $storyAsset['link']) }}" type="video/m4v" controls
                                controlsList="nodownload nofullscreen">
                            </video>
                            <div class="prose prose-xl max-w-none">{{ $storyAsset['caption'] }}</div>
                        </div>
                    @elseif($storyAsset['type'] == 'YOUTUBE')
                        <div class="flex flex-col items-center justify-center mb-6 text-center segment-youtube">
                            <iframe class="w-full aspect-video"
                                src="{{ $storyAsset['link'] }}?autoplay=0&mute=0&controls=1&origin=https://lflbsign.webfoundry.dev&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1"
                                frameborder="0" allowfullscreen="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                width="100%" height="100%"></iframe>
                            <p class="text-xl font-semibold">{{ $storyAsset['caption'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- @unless(count($stories) == 0)

@foreach ($stories as $story)
<h2>
    <a href="/stories/{{$story['id']}}">{{$story['title']}}</a>
</h2>
<p>{{$story['description']}}</p>
@endforeach

@else
<p>No stories found</p>
@endunless --}}
