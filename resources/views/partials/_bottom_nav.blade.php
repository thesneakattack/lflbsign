<div class="fixed bottom-0 left-0 flex items-center justify-end w-full mt-24 text-xl font-bold text-white nav-bottom bg-laravel h-44"
    onmousedown="this.blur();return false;" onclick="this.blur();return false;">
    <div class="grid w-1/2 grid-flow-col grid-rows-2">
        <div class="flex items-center justify-end w-full mr-14">
            {{-- ACCESSIBILITY NAV --}}
            @if($navSettings['selectOk'] == true)
            <div class="flex flex-row gap-4 my-2 mr-16 text-center">
                <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonPrimary tab-prev"
                    onclick="$.tabPrev();return false;"><i class="fa-solid fa-caret-left"></i></a>
                <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonTertiary tab-select"
                    onclick="return false;">GO</a>
                <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonPrimary tab-next"
                    onclick="$.tabNext();return false;"><i class="fa-solid fa-caret-right"></i></a>
                @if($navSettings['changeTopic'] == true)
                <a href="/" tabindex="-1" class="px-4 py-2 text-white rounded bg-buttonSecondary tab-select"
                    onclick="location.href='/'"><i class="fa-solid fa-book"></i> Topics</a>
                @endif
            </div>
            @endif
        </div>
        <div class="flex items-center justify-end w-full mr-14">
            {{-- BACK/HOME NAV --}}
            @if($navSettings['backHome'] == true)
            <div class="flex flex-row gap-4 my-2 mr-16 text-center">
                <a href="#" tabindex="-1" class="px-4 py-2 text-white rounded top-1/4 bg-buttonSecondary"
                    onclick="history.back();return false;">
                    <i class="fa-solid fa-rotate-left"></i> <span class="inline-block">Back</span>
                </a>
                {{-- maybe remove this condition --}}
                @if(request()->session()->has('userDefinedTopic'))

                <a tabindex="-1" href="/topics/{{Session::get('userDefinedTopic')}}"
                    onclick="location.href='/topics/{{Session::get('userDefinedTopic')}}'"
                    class="px-4 py-2 text-white rounded top-1/4 bg-buttonSecondary">
                    <i class="fa-solid fa-house"></i> <span class="inline-block">Home</span>
                </a>
                @endif
            </div>
            @endif
        </div>
    </div>
    @if($navSettings['scroll'] == true)
    <div class="absolute right-2 flex flex-col w-[32px] text-center text-xl gap-y-28">
        <i id="scrollUp" class="rounded cursor-pointer bg-buttonPrimary fa-solid fa-caret-up"></i>
        <i id="scrollDown" class="rounded cursor-pointer bg-buttonPrimary fa-solid fa-caret-down"></i>
    </div>
    @endif
</div>
