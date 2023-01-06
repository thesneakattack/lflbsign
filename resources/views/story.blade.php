@extends('layout')

@section('content')    
    
    <div id="contentArea" class="h-[1744px] overflow-y-auto">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">    
                <h3 class="text-3xl font-bold my-2">{{$story['title']}}</h3>
                <div class="text-xl mb-4">{{$story['description']}}</div>
                {{-- <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> Daytona, FL
                </div> --}}
                {{-- <div class="border border-gray-200 w-full mb-6"></div> --}}
                <div>
                    {{-- <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3> --}}
                        @foreach($storyAssets as $storyAsset)
                            @if($storyAsset['type'] == 'TEXT')
                            <div class="segment-text flex flex-col items-justify text-justify text-2xl space-y-6 mx-8">
                                {!!strip_tags($storyAsset['cleanText'], ["<p>", "<span>", "<ul>", "<li>", "<em>", "<strong>", "<b>", "<i>", "<br>"])!!}
                                    {{-- {{$storyAsset['cleanText']}} --}}
                            </div>
                            @elseif($storyAsset['type'] == 'IMAGE')
                            <div class="segment-image flex flex-col items-center justify-center text-center">
                                <img class="w-fit my-6 max-h-[800px] mx-12" src="{{ asset("/assets/".$storyAsset['originalImage']) }}" alt="">
                                <p class="mb-6 text-xl font-semibold">{{$storyAsset['caption']}}</p>
                            </div>
                            @elseif($storyAsset['type'] == 'VIDEO')
                            <div class="segment-video flex flex-col items-center justify-center text-center">
                                <video class="w-fit my-6 max-h-[800px] mx-12" src="{{ asset("/assets/".$storyAsset['link']) }}" type="video/m4v" controls controlsList="nodownload nofullscreen">
                                </video>
                                <p class="mb-6 text-xl font-semibold">{{$storyAsset['caption']}}</p>
                            </div>
                            @elseif($storyAsset['type'] == 'YOUTUBE')
                            <div class="segment-youtube flex flex-col items-center justify-center text-center">
                                <iframe class="w-full aspect-video"
                                frameborder="0" 
                                allowfullscreen="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                {{-- title="Firemen fight fire at the Deer Path Inn in Lake Forest, Illinois with water hoses...HD Stock Footage"  --}}
                                width="100%" 
                                height="100%" 
                                src="{{ $storyAsset['link'] }}?autoplay=0&mute=0&controls=1&origin=https://lflbsign.webfoundry.dev&playsinline=1&showinfo=0&rel=0&iv_load_policy=3&modestbranding=1&enablejsapi=1"></iframe>
                                <p class="mb-6 text-xl font-semibold">{{$storyAsset['caption']}}</p>
                            </div>                                                           
                            @endif
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>

@endsection

{{-- @unless(count($stories) == 0)

    @foreach($stories as $story)
        <h2>
        <a href="/stories/{{$story['_newid']}}">{{$story['title']}}</a>
        </h2>
        <p>{{$story['description']}}</p>
    @endforeach

@else
    <p>No stories found</p>
@endunless --}}
