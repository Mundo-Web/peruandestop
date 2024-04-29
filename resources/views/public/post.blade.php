@extends('components.public.matrix')

@section('css_improtados')
  <style>
    [type="text"]:focus,
    input:where(:not([type])):focus,
    [type="email"]:focus,
    [type="url"]:focus,
    [type="password"]:focus,
    [type="number"]:focus,
    [type="date"]:focus,
    [type="datetime-local"]:focus,
    [type="month"]:focus,
    [type="search"]:focus,
    [type="tel"]:focus,
    [type="time"]:focus,
    [type="week"]:focus,
    [multiple]:focus,
    textarea:focus,
    select:focus {
      outline: none;
      box-shadow: none;
      border-color: initial;
      /* o tu color deseado */
    }

    .bg__destino-header {
      background-color: #0F1B2C;
    }
  </style>
@stop

@section('content')
  <main class="pb-12">
    <section class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-10 pt-60 pb-16" data-aos="fade-up" data-aos-offset="150">
      <div class="flex flex-col gap-5">
        <h2 class="font-acehSemibold text-text28 md:text-text32 text-[#3F76BB]">Blog</h2>
        <h1 class="font-acehSemibold text-text44 md:text-text56 text-[#141841] leading-none md:leading-tight">
          {{ $blog->title }}
        </h1>
        <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">12 Abril, 2024</p>

        <p class="text-[#3F76BB]">////////////////////////////</p>

        <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
          {!! $blog->description !!}
        </p>
      </div>



      <div>
        <div class="mb-4 flex justify-between border-t-2 pt-5" aria-label="Pagination">



        </div>
      </div>
    </section>
  </main>




@section('scripts_improtados')
  <script></script>
@stop

@stop
