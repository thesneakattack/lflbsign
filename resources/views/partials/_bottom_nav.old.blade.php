<div
class="nav-bottom fixed bottom-0 left-0 w-full flex gap-4 items-center justify-end font-bold bg-laravel text-xl text-white h-28 mt-24" onmousedown="this.blur();return false;" onclick="this.blur();return false;">
{{-- <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p> --}}
<div class="w-1/2 flex gap-4 items-center justify-end mr-14">
    @unless(isset($hideTabbableNav))
    <div class="flex flex-row text-center gap-4 mr-10">
        <a href="#" tabindex="-1" class="bg-buttonPrimary text-white py-2 px-4 rounded tab-prev" onclick="$.tabPrev();return false;"><i class="fa-solid fa-caret-left"></i></a>
        <a href="#" tabindex="-1" class="bg-buttonTertiary text-white py-2 px-4 rounded tab-select" onclick="return false;">OK</a>
        <a href="#" tabindex="-1" class="bg-buttonPrimary text-white py-2 px-4 rounded tab-next" onclick="$.tabNext();return false;"><i class="fa-solid fa-caret-right"></i></a>
    </div>    
    @endunless        
    @if(!isset($homePage))        
    <a
        href="#"
        tabindex="-1"
        class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded"
        onclick="history.back();return false;">
        <i class="fa-solid fa-rotate-left"></i> <span class="inline-block">Back</span>
    </a>
        @if(request()->session()->has('userDefinedTopic'))
        <a
            tabindex="-1"
            href="/topics/{{Session::get('userDefinedTopic')}}"
            onclick="location.href='/topics/{{Session::get('userDefinedTopic')}}'"
            class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded">
            <i class="fa-solid fa-house"></i> <span class="inline-block">Home</span>
        </a>
        @endif    
    @else
    <a
        href="#"
        tabindex="-1"
        class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded opacity-0"
        onclick="history.back();return false;">
        <i class="fa-solid fa-rotate-left"></i> <span class="inline-block">Back</span>
    </a>
        {{-- @if(request()->session()->has('userDefinedTopic')) --}}
        <a
            tabindex="-1"
            href="/topics/{{Session::get('userDefinedTopic')}}"
            onclick="location.href='/topics/{{Session::get('userDefinedTopic')}}'"
            class="top-1/4 bg-buttonSecondary text-white py-2 px-4 rounded opacity-0">
            <i class="fa-solid fa-house"></i> <span class="inline-block">Home</span>
        </a>
        {{-- @endif               --}}
    @endif
</div>            
<div class="absolute right-2 flex flex-col w-[32px] text-center text-xl gap-12">
    <i id="scrollUp" class="bg-buttonPrimary rounded fa-solid fa-caret-up"></i>
    <i id="scrollDown" class="bg-buttonPrimary rounded fa-solid fa-caret-down"></i>
</div>
</div>