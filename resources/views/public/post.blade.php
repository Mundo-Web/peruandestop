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
                    Donec non imperdiet nisi, et eleifend est. Proin lacinia efficitur
                    risus.
                </h1>
                <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">12 Abril, 2024</p>

                <p class="text-[#3F76BB]">////////////////////////////</p>

                <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                    Donec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl
                    feugiat. Ut lobortis dui et risus vulputate, ut placerat felis
                    rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada
                    ultrices. Nam a lorem ut dui ultrices efficitur vitae et metus.
                    Mauris quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                    sem. Nam varius purus et urna vehicula, eget dictum magna efficitur.
                    Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                    tristique odio ipsum. Morbi at accumsan lacus. Phasellus efficitur
                    magna eget orci posuere, at pretium metus ultricies. Proin
                    sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien
                    hendrerit, vel luctus ex feugiat. Ut leo dui, sollicitudin eu leo
                    quis, commodo eleifend lectus.
                </p>
            </div>

            <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text36 md:text-text44 text-[#141841] leading-none md:leading-tight">
                    Vestibulum vehicula urna arcu
                </h2>
                <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                    onec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl
                    feugiat. Ut lobortis dui et risus vulputate, ut placerat felis
                    rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada
                    ultrices. Nam a lorem ut dui ultrices efficitur vitae et metus.
                    Mauris quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                    sem. Nam varius purus et urna vehicula, eget dictum magna efficitur.
                </p>

                <ul class="list-disc pl-4 font-acehRegular text-text18 md:text-text22 text-[#495560]">
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-5">
                <h2 class="font-acehSemibold text-text36 md:text-text44 text-[#141841] leading-none md:leading-tight">
                    Nunc tincidunt sollicitudin lectus a ornare
                </h2>
                <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                    Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                    vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                    varius purus et urna vehicula, eget dictum magna efficitur.
                    Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                    tristique odio ipsum. Morbi at accumsan lacus. Phasellus efficitur
                    magna eget orci posuere, at pretium metus ultricies. Proin
                    sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien
                    hendrerit, vel luctus ex feugiat.
                </p>

                <div class="flex flex-wrap gap-4 justify-center font-acehMedium text-text20 md:text-text24 my-10">
                    <p
                        class="bg-[#FCFCFC] flex-grow text-black border-l-8 border-[#3F76BB] rounded-md px-3 py-2 w-full md:w-5/12 lg:w-3/12">
                        Phasellus efficitur magna eget orci posuere, at pretium metus
                        ultricies. Proin sollicitudin at est non imperdiet. Morbi rhoncus
                        tortor et sapien hendrerit, vel luctus ex feugiat.Phasellus
                        efficitur magna eget orci posuere, at pretium metus ultricies.
                        Proin sollicitudin at est non imperdiet. Morbi rhoncus tortor et
                        sapien hendrerit, vel luctus ex feugiat.
                    </p>
                </div>
                <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                    <img src="./images/img/post_image.png" alt="catedral" class="w-full" />
                </div>
            </div>

            <div>
                <div class="flex flex-col gap-5">
                    <h2 class="font-acehSemibold text-text36 md:text-text44 text-[#141841] leading-none md:leading-tight">
                        Mauris leo nibh, consequat pulvinar auctor
                    </h2>
                    <p class="font-acehRegular text-text18 md:text-text22 text-[#495560]">
                        Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                        vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                        varius purus et urna vehicula, eget dictum magna efficitur.
                        Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                        tristique odio ipsum. Morbi at accumsan lacus. Phasellus efficitur
                        magna eget orci posuere, at pretium metus ultricies. Proin
                        sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien
                        hendrerit, vel luctus ex feugiat. Donec elementum vestibulum
                        mauris, pharetra interdum risus mollis nec. Nam vitae venenatis
                        dolor, a consectetur nisl. Pellentesque vel mauris a ante laoreet
                        cursus vitae a orci. Nam condimentum, elit ut gravida congue, quam
                        metus dictum nulla.
                    </p>
                </div>
            </div>

            <div>
                <div class="mb-4 flex justify-between border-t-2 pt-5" aria-label="Pagination">
                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="/page/1">
                        <img src="./images/svg/previo.svg" alt="previo" />
                        <span class="font-acehbold text-text14 md:text-text22 text-[#3F76BB]">Previo</span>
                    </a>

                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="/page/1">
                        <span class="font-acehbold text-text14 md:text-text22 text-[#3F76BB]">Next</span>
                        <img src="./images/svg/next.svg" alt="next" />
                    </a>
                </div>
            </div>
        </section>
    </main>




@section('scripts_improtados')
    <script></script>
@stop

@stop
