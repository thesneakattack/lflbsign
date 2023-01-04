<div
class="nav-bottom fixed bottom-0 left-0 w-full flex items-center justify-end font-bold bg-laravel text-xl text-white h-44 mt-24" onmousedown="this.blur();return false;" onclick="this.blur();return false;">
    <div class="w-1/2 grid grid-rows-2 grid-flow-col">
        <div class="w-full flex items-center justify-end mr-14">
            {{-- ACCESSIBILITY NAV --}}
            @if($navSettings['selectOk'] == true)
                <div class="flex flex-row text-center mr-6 gap-4 my-2">
                    <a href="#" tabindex="-1" class="bg-buttonPrimary text-white py-2 px-4 rounded tab-prev" onclick="$.tabPrev();return false;"><i class="fa-solid fa-caret-left"></i></a>
                    <a href="#" tabindex="-1" class="bg-buttonTertiary text-white py-2 px-4 rounded tab-select" onclick="return false;">GO</a>
                    <a href="#" tabindex="-1" class="bg-buttonPrimary text-white py-2 px-4 rounded tab-next" onclick="$.tabNext();return false;"><i class="fa-solid fa-caret-right"></i></a>
                </div>    
            @endif
            @if($navSettings['changeTopic'] == true)
                <div class="flex flex-row text-center mr-16 gap-4 my-2">
                    <a href="/" tabindex="-1" class="bg-buttonSecondary text-white py-2 px-4 rounded tab-select" onclick="location.href='/'"><i class="fa-solid fa-book"></i> Topics</a>
                </div>    
            @endif                 
        </div>    
        <div class="w-full flex items-center justify-end mr-14">
            {{-- BACK/HOME NAV --}}
            @if($navSettings['backHome'] == true)   
                <div class="flex flex-row text-center mr-16 gap-4 my-2">
                    <a
                        href="#"
                        tabindex="-1"
                        class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded"
                        onclick="history.back();return false;">
                        <i class="fa-solid fa-rotate-left"></i> <span class="inline-block">Back</span>
                    </a>
                    {{-- maybe remove this condition --}}
                    @if(request()->session()->has('userDefinedTopic'))
                        <a
                            tabindex="-1"
                            href="/topics/{{Session::get('userDefinedTopic')}}"
                            onclick="location.href='/topics/{{Session::get('userDefinedTopic')}}'"
                            class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded">
                            <i class="fa-solid fa-house"></i> <span class="inline-block">Home</span>
                        </a>
                    @endif
                </div>
            @endif
        </div>                  
    </div>
    @if($navSettings['scroll'] == true)
        <div class="absolute right-2 flex flex-col w-[32px] text-center text-xl gap-y-28">
            <i id="scrollUp" class="bg-buttonPrimary rounded fa-solid fa-caret-up cursor-pointer"></i>
            <i id="scrollDown" class="bg-buttonPrimary rounded fa-solid fa-caret-down cursor-pointer"></i>
        </div>
    @endif    
</div>