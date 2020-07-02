@extends('layouts.base')
    {{-- page title --}}
    @section('PageTitle')
    Welcome Page
    @endsection

    
    {{-- page description --}}
@section('PageDescription')
Pariatur elit non reprehenderit sunt nisi amet sunt irure. Nostrud ea proident eiusmod reprehenderit in nulla id. Qui
culpa magna et sit anim consequat consequat eu sit do nulla amet commodo velit.
@endsection
{{-- page keywords --}}
@section('PageKeywords')
welcome, kuwait credit bank
@endsection
{{-- page body --}}
        {{--  Main Navigation Text Color  --}}
        @section('MainNavigationTextColor')
        text-white
        @endsection
@section('PageBody')
<section class="relative flex flex-col items-center justify-between text-white bg-gradient-r-low-high p-0">
    <div class="absolute right-0 flex-no-wrap items-center justify-center hidden w-auto p-2 rounded-l-lg h-32 xl:min-h-vh15 bg-brand lg:flex -top-3 " x-data="{ open: false,titleopen:true }">
        <span @click="open = true,titleopen = false" x-show="titleopen"  class="font-extrabold text-center cursor-pointer text-dark" style="text-orientation: sideways;writing-mode:vertical-rl;">
        تسجيل الدخول
        </span>
        <div x-show="open" x-transition:enter="transition ease duration-500"
        x-transition:enter-start="opacity-0 transform scale-0"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease duration-500"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-0" @click.away="open = false,titleopen = true" class="flex flex-col divide-y-2 divide-dark justify-center items-between w-auto ">
            <a href="#" class="text-decoration-none flex items-center text-dark justify-between w-full font-bold p-3 text-xs"> <img src="{{asset('/img/login.svg')}}" alt="" class="w-8 h-auto mr-2"/> <span>تسجيل الدخول</span></a>
            <a href="#" class="text-decoration-none flex items-center text-dark justify-between w-full font-bold p-3 text-xs"> <img src="{{asset('/img/register.svg')}}" alt="" class="w-8 h-auto mr-2"/> <span> الممارسات</span></a>
        </div>
    </div>
            <section class="items-stretch lg:items-center justify-between lg:min-h-vh70 d-flex flex-grow-1">
                @livewire('blocks.main-page-carousel')
                @livewire('blocks.main-menu')
            </section>
            @livewire('components.social-media-navigations')
            @livewire('blocks.main-page-news-carousel')
</section>
@endsection
