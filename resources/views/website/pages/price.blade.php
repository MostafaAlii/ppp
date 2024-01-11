@extends('website.layouts.website')
@section('pageTitle')
Price
@endsection

@section('css')

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- light  gllery -->
<link href="https://cdn.jsdelivr.net/npm/lightgallery/css/lightgallery.min.css" rel="stylesheet" />
<link href="{{ asset('website/resources/css/edits.css') }}" rel="stylesheet" />
<style>
  .boddy {
    width: 985px;
    margin: auto;
  }

  .pricing_section_wrapper {
    width: 1325px !important;
    margin-left: -180px;
  }
</style>
@endsection

@section('content')
<!-- Start Table -->
<div class="pricing_section_wrapper my-5">
  <div class="swiper pricingSwiper">
    <div class="swiper-wrapper">
      @foreach($prices as $price)
      <div class="swiper-slide">
        <div class="pricingTable">
          <div class="pricingTable-header">
            <h3 class="heading">{{ $price['name'] }}</h3>
            <span class="subtitle">{{ $price['name'] }}</span>
            <div class="price-value">
              {{ $price['price'] }}
              <span class="currency"> $</span>
              <span class="month">/mo</span>
            </div>
          </div>
          <div class="pricing_examples">
            @foreach($price['gallary'] as $img)
            <a href="{{ asset('dashboard/img/price/' . $img['filename']) }}" class="img_example">
              <img src="{{ asset('dashboard/img/price/' . $img['filename']) }}" alt="{{ $price['name'] }}" />
            </a>
            @endforeach
          </div>
          <a href="#" class="see_examples">
            <!--see examples -->
          </a>
          <ul class="pricing-content" style="min-height: 340px;">
            @foreach($price['advantages'] as $advantage)
            <li><span> ✓</span>{{ $advantage['note'] }}</li>
            @endforeach
          </ul>
          <a href="#" class="main_btn">order now</a>
        </div>
      </div>
      @endforeach

      <!-- Add more slides as needed -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<!-- End Table -->
@endsection

@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery/lightgallery.min.js"></script>
<script>
  let swiper = new Swiper(".pricingSwiper", {
  loop: true,
  // Default settings (for mobile devices)
  slidesPerView: 1,
  spaceBetween: 10,

  // Breakpoints
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
   
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

document.querySelectorAll(".pricing_examples").forEach((element) => {
  lightGallery(element, {
    selector: "a",
  });
});
</script>
@endsection