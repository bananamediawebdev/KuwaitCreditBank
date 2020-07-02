<nav class="flex-no-wrap items-start justify-around text-white md:justify-start lg:justify-start nav bg-gradient-r-low-high">
<a href="" class="relative flex flex-col items-center w-auto lg:w-1/6 lg:mx-2 text-white PageNavigationLinks hover:text-white lg:w-24 xl:w-20 nav-link" href="#">
@include('Svgs.tendor')
    <p 
    class="break-words text-center font-semibold text-xs absolute top-14 z-40 
    @if(View::hasSection('MainNavigationTextColor'))
        @yield('MainNavigationTextColor')
    @else
        text-brand
    @endif 
    hidden lg:inline">
    إعلانات
    المناقصات
    والممارسات
    </p>
</a>

<a class="relative flex flex-col items-center w-auto lg:w-1/6 lg:mx-2 text-white PageNavigationLinks hover:text-white lg:w-24 xl:w-20 nav-link" href="#">
@include('Svgs.sms')
<p class="break-words text-center font-semibold text-xs absolute top-14 z-40 @if(View::hasSection('MainNavigationTextColor'))
@yield('MainNavigationTextColor')
@else
text-brand
@endif hidden lg:inline">
التسجيل بنظام
SMS
</p>
</a>
<a class="relative flex flex-col items-center w-auto lg:w-1/6 lg:mx-2 text-white PageNavigationLinks hover:text-white lg:w-24 xl:w-20 nav-link" href="#">
@include('Svgs.payment')
<p class="break-words text-center font-semibold text-xs absolute top-14 z-40 @if(View::hasSection('MainNavigationTextColor'))
@yield('MainNavigationTextColor')
@else
text-brand
@endif hidden lg:inline">
خدمة الدفع
الإلكتروني
</p>
</a>
<a class="relative flex flex-col items-center w-auto lg:w-1/6 lg:mx-2 text-white PageNavigationLinks hover:text-white lg:w-24 xl:w-20 nav-link" href="#">
@include('Svgs.statistics')
<p class="break-words text-center font-semibold text-xs absolute top-14 z-40 @if(View::hasSection('MainNavigationTextColor'))
@yield('MainNavigationTextColor')
@else
text-brand
@endif hidden lg:inline">
إحصائيات
القروض
</p>
</a>
<a class="relative flex flex-col items-center w-auto lg:w-1/6 lg:px-0 lg:mx-5 text-white PageNavigationLinks hover:text-white lg:w-24 xl:w-20 nav-link" href="#">
@include('Svgs.home')
</a>
</nav>
