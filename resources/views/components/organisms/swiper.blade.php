<div id="my-keen-slider{{ $index }}" class="keen-slider">
    @foreach ($items as $item)
        <div class="keen-slider__slide number-slide{{ $loop->iteration + 1 }}"><img src="{{ asset($path . '/' . $item) }}" class="object-cover w-full rounded-lg h-52" /></div>
    @endforeach
</div>
<script>
    var slider = new KeenSlider(`#my-keen-slider{{ $index }}`, {
    loop: true,
    mode: "free",
    breakpoints: {
          "(min-width: 0px)": {
            slides: { perView: 1, spacing: 5 },
          },
          "(min-width: 400px)": {
            slides: { perView: 2, spacing: 5 },
          },
          "(min-width: 600px)": {
            slides: { perView: 3, spacing: 5 },
          },
          "(min-width: 950px)": {
            slides: { perView: 4, spacing: 10 },
          },
          "(min-width: 1200px)": {
            slides: { perView: 5, spacing: 10 },
          },
        },
    slides: {
        perView: 5,
        spacing: 15,
    },
    })
</script>
