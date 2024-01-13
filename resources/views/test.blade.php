
@extends('layouts.common');
@include('layouts.header')

@section('content')

        <div 
          id="home"
          class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full"
        >
          <div class="flex flex-wrap md:flex-nowrap">
            <div class="md:my-30 lg:ml-20 justify-center md:justify-start mx-auto max-w-xl">
              <div class="container mx-auto md:my-40 lg:ml-20 flex flex-wrap" >
                <h1 class="font-bold text-5xl text-center md:text-left lg:text-8xl md:text-5xl md:mx-auto max-w-xl  ml-16">
                  介護の世界に<br />
                  新しい形を  <br />
                </h1>
                
              </div>
              <img src="{{asset('img/usagi3.jpg')}}" alt="img"  class="md:absolute lg:top-44 lg:right-5 md:w-1/2 w-10/12 md:mt-0 right-5 mx-auto top-96 aspect-video -z-20"/>
          </div>
        </div>
@endsection
@include('layouts.footer')