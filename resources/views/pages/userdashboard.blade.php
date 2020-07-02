@extends('layouts.base')
{{-- page title --}}
@section('PageTitle')
User Dashboard
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
  {{--  Main Navigation Text Color  --}}
  @section('MainNavigationTextColor')
  text-white
  @endsection
{{-- page body --}}
@section('PageBody')
<section class="relative flex items-stretch justify-between p-0 py-5 text-white divide-x bg-gradient-r-low-high min-h-vh70"> 
    {{-- Cards --}}
    <div class='flex flex-wrap items-start min-h-full justify-evenly w-vw80'>
        <div class="m-3  card w-vw15">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <div class="m-3  card w-vw15">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <div class="m-3  card w-vw15">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <div class="m-3  card w-vw15">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
    </div>
    {{-- Icons & Navigations --}}
    <div class='min-h-full w-vw20'>
    </div>
</section>
@endsection