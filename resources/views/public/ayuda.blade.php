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

    <main>
        <section>
            <div class="bg-ayuda__mobile md:bg-ayuda bg-cover bg-center bg-no-repeat sm:w-full h-full pt-60 pb-24 md:pb-0">
                <div class="w-full md:w-6/12 mx-auto flex flex-col justify-center items-center md:pt-36 md:pb-60  text-center gap-5"
                    data-aos="fade-up" data-aos-offset="150">
                    <p class="font-acehMedium text-text28 md:text-text44 text-[#3F76BB]">FAQs</p>
                    <h1 class="font-acehSemibold text-text64 md:text-text68 text-[#141841] leading-none md:leading-tight">
                        Centro de Ayuda
                    </h1>
                    <p class="font-acehMedium text-text18 md:text-text22 text-[#495560]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                        dolore deserunt. Totam eius quidem officia veritati.
                    </p>
                </div>
            </div>
        </section>
        <section data-aos="fade-up" data-aos-offset="150">
            <div class="w-11/12 mx-auto flex flex-col md:flex-row gap-10 pt-24">
                <div class="basis-2/6 text-center flex flex-col gap-5">
                    <h2 class="font-acehSemibold text-text36 md:text-text40 text-[#141841] leading-none md:leading-tight text-left">
                        Preguntas frecuentes
                    </h2>

                    <p class="font-acehRegular text-text20 md:text-text24 text-[#495560] text-left">
                        Todo lo que necesitas saber sobre nuestro servicio.
                    </p>
                </div>

                <div class="basis-4/6">
                    <div class="relative  ring-gray-900/5 sm:mx-auto sm:rounded-lg">
                        <div class="mx-auto">
                            <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>


                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>

                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>

                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>

                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>


                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>


                                <div class="py-5">
                                    <details class="group">
                                        <summary
                                            class="flex cursor-pointer list-none items-center justify-between font-acehMedium">
                                            <span class="text-text20 md:text-text24 text-[#151515]">
                                                ¿Proin varius dui non sodales molestie?</span>
                                            <span class="transition group-open:rotate-180">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                                                        stroke="#3F76BB" stroke-width="3.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </summary>
                                        <p class="group-open:animate-fadeIn mt-3 text-[#495560] text-text16 md:text-text20 font-acehRegular">
                                            Springerdata offers a variety of billing options,
                                            including monthly and annual subscription plans, as well
                                            as pay-as-you-go pricing for certain services. Payment
                                            is typically made through a credit card or other secure
                                            online payment method.
                                        </p>
                                    </details>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F5FAFF] w-11/12 mx-auto">
            <div class="text-center py-24 my-32" data-aos="fade-up" data-aos-offset="150">
                <div class="flex justify-center items-center">
                    <img src="./images/img/Avatar group.png" alt="" />
                </div>
                <h2 class="font-acehMedium text-text24 md:text-text28 text-[#101828] mt-5">
                    ¿Aún tiene preguntas?
                </h2>
                <p class="font-acehRegular text-text18 md:text-text22 text-[#667085] mt-2 mb-12">
                    ¿No encuentras la respuesta que buscas? Por favor chatee con nuestro
                    amigable equipo.
                </p>
                <div class="flex justify-center items-center">
                    <a href="#"
                        class="text-white bg-[#3F76BB] py-3 px-5 rounded-3xl cursor-pointer border-2 font-acehSemibold text-text20 md:text-text24
                         text-center border-none inline-block">
                        Ponerse en contacto
                    </a>
                </div>
            </div>
        </section>
    </main>


@section('scripts_improtados')
    <script></script>
@stop

@stop