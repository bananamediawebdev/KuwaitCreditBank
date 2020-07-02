 <section class="min-h-full overflow-hidden w-vw90 xl:min-h-vh60 lg:w-vw80 xl:w-vw85">
 
 <div id="HomepageSlick" class="" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/1.svg')}}">
        <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">مركز الاتصال</p>
  </div>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/2.svg')}}">
        <img src="{{asset('/img/Carousel/2.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">الربط الالكتروني</p>
  </div>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/3.svg')}}">
        <img src="{{asset('/img/Carousel/3.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">خدمة الرسائل النصية</p>
  </div>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/4.svg')}}">
        <img src="{{asset('/img/Carousel/4.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">التحويل الالي للدفعات</p>
  </div>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/5.svg')}}">
        <img src="{{asset('/img/Carousel/5.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">التطبيق الهاتفي</p>
  </div>
  
  <div class="flex flex-col items-center justify-between md:m-5 lg:m-8 xl:m-10 focus:outline-none Main__Carousel ">
    <object class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40" type="image/svg+xml" data="{{asset('/img/Carousel/6.svg')}}">
        <img src="{{asset('/img/Carousel/6.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/>
        {{-- <img src="{{asset('/img/Carousel/1.svg')}}" alt="" class="w-auto max-h-vh30 md:max-h-vh50 xl:max-h-vh40"/> --}}
    </object>
    <p class="Carousel__Caption my-3 text-center">خدمات الائتمان الالكتروني</p>
  </div>
  
</div>
</section>
@push('scripts')
<script src="{{ asset('assets/slick/slick.min.js') }}" defer></script>
<script src="{{ asset('/js/SlickCarousel.js') }}" defer></script>
@endpush