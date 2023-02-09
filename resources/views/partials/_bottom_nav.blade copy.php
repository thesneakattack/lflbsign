<div class="fixed bottom-0 left-0 flex items-center justify-end w-full gap-4 mt-24 text-xl font-bold text-white nav-bottom bg-laravel h-36" onmousedown="this.blur();return false;" onclick="this.blur();return false;">

    <div class="flex items-center justify-end w-1/2 gap-4 mr-14">
        @if($navSettings['selectOk'] == true)
        <div class="flex flex-row gap-4 mr-10 text-center">
            <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonPrimary tab-prev" onclick="$.tabPrev();return false;"><i class="fa-solid fa-caret-left"></i></a>
            <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonTertiary tab-select" onclick="return false;">OK</a>
            <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonPrimary tab-next" onclick="$.tabNext();return false;"><i class="fa-solid fa-caret-right"></i></a>
        </div>
        @endif

        @if($navSettings['backHome'] == true)
        <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded top-1/4 bg-buttonSecondary" onclick="history.back();return false;">
            <i class="fa-solid fa-rotate-left"></i> <span class="inline-block">Back</span>
        </a>
        {{-- maybe remove this condition --}}
        @if(request()->session()->has('userDefinedTopic'))
        <a tabindex="-1" href="/topics/{{Session::get('userDefinedTopic')}}" onclick="location.href='/topics/{{Session::get('userDefinedTopic')}}'" class="px-4 py-2 text-white rounded top-1/4 bg-buttonSecondary">
            <i class="fa-solid fa-house"></i> <span class="inline-block">Home</span>
        </a>
        @endif
        @endif

    </div>
    @if($navSettings['scroll'] == true)
    <div class="absolute right-2 flex flex-col w-[32px] text-center text-xl gap-12">
        <i id="scrollUp" class="rounded bg-buttonPrimary fa-solid fa-caret-up"></i>
        <i id="scrollDown" class="rounded bg-buttonPrimary fa-solid fa-caret-down"></i>
    </div>
    @endif
</div>
