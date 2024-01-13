@extends('layouts.common');
@include('layouts.header')

@section('content')
<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="aspect-square w-96 bg-white" alt="hero" src="{{asset('img/IMG_20230524_210016.jpg')}}">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">福祉にかかわる人たちのサードプレイスを目指して</h1>
      <p class="mb-8 leading-relaxed">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>    
    </div>
  </div>
</section>
    
@endsection
@include('layouts.footer')