<swiper-container class="rounded-lg mySwiper" style="--swiper-navigation-color: #11762B !important;" navigation="true"  space-between="30" slides-per-view="5" loop="true">
    @foreach ($items as $item)
        <swiper-slide><img src="{{ asset($path . '/' . $item) }}" class="object-cover rounded-lg h-52 w-52" /></swiper-slide>
    @endforeach
</swiper-container>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
