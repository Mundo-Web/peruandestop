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

    <main class="pb-24">
        <section>
            <div class="w-11/12 mx-auto pt-52">
                <h2
                    class="font-acehSemibold text-text40 md:text-text64 leading-none md:leading-tight text-center md:text-left text-[#141841]">
                    Recorrido Ciudad Histórica del Cusco
                </h2>

                <div class="flex flex-col md:flex-row md:items-center gap-5 my-5">
                    <div class="flex gap-2 items-center justify-center">
                        <img src="./images/svg/ubicacion.svg" alt="ubigeo" class="w-6 h-6" />
                        <p class="font-acehSemibold text-text28 md:text-text32">
                            Cusco <span class="font-acehMedium text-text16 md:text-text20">- Perú</span>
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <p>|</p>
                    </div>
                    <div class="flex gap-5 justify-between md:justify-start">
                        <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                        </div>
                        <p class="font-acehSemibold text-text28 md:text-text32">
                            2,343 <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
                        </p>
                    </div>
                </div>

                <div class="flex gap-2" data-aos="fade-up" data-aos-offset="150">
                    <div class="basis-1/6">
                        <img src="./images/img/cusco_disfraz.png" alt="disfraces" class="w-full h-full" />
                    </div>
                    <div class="grow basis-3/6">
                        <img src="./images/img/cusco_animales.png" alt="animales" class="w-full h-full" />
                    </div>
                    <div class="basis-2/6 flex flex-col gap-2">
                        <img src="./images/img/convento.png" alt="convento" class="w-full h-full" />

                        <div class="relative z-10">
                            <img src="./images/img/cusco_cerro_colores.png" alt="convento" class="w-full h-full" />
                            <a href="#"
                                class="hidden md:absolute bottom-[10px] right-[10px] bg-transparent p-2 text-white md:flex gap-2 items-center rounded-3xl border-2 font-acehSemibold text-text16 md:text-text20">
                                <span>Mostrar todas las fotos</span>

                                <img src="./images/svg/camara.svg" alt="camara" class="w-8" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-11/12 mx-auto py-12" data-aos="fade-up" data-aos-offset="150">
                <div class="flex flex-col 2lg:flex-row gap-10">
                    <div class="basis-4/6 flex flex-col gap-10">
                        <p class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium, amet eius deleniti temporibus ipsum dicta modi
                            eaque? Nihil earum.
                        </p>

                        <div class="grid gap-5 grid-cols-1 md:grid-cols-2   bg-[#FCFCFC]">

                            <div class="flex items-start gap-5">
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.63606 5.63606C6.47179 4.80032 7.46395 4.13738 8.55588 3.68509C9.64782 3.23279 10.8182 3 12.0001 3C13.182 3 14.3523 3.23279 15.4442 3.68509C16.5362 4.13738 17.5283 4.80032 18.3641 5.63605C19.1998 6.47179 19.8627 7.46395 20.315 8.55588C20.7673 9.64782 21.0001 10.8182 21.0001 12.0001C21.0001 13.182 20.7673 14.3523 20.315 15.4442C19.8627 16.5362 19.1998 17.5283 18.3641 18.3641C16.6762 20.0519 14.387 21.0001 12.0001 21.0001C9.61309 21.0001 7.32389 20.0519 5.63606 18.3641C3.94822 16.6762 3 14.387 3 12.0001C3 9.61309 3.94822 7.32389 5.63606 5.63606V5.63606Z"
                                            stroke="#3F76BB" stroke-width="2.7" stroke-linecap="round" />
                                        <path d="M6 6L18 18" stroke="#3F76BB" stroke-width="2.7" stroke-linecap="round" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Cancelación gratis
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5">
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.002 2H7.002C6.73678 2 6.48243 2.10536 6.29489 2.29289C6.10736 2.48043 6.002 2.73478 6.002 3V6.812C5.09094 7.33776 4.33418 8.09387 3.80762 9.00447C3.28106 9.91506 3.00323 10.9481 3.002 12V12.988L3 13L3.002 13.072V21C3.002 21.2652 3.10736 21.5196 3.29489 21.7071C3.48243 21.8946 3.73678 22 4.002 22H14.002C14.2672 22 14.5216 21.8946 14.7091 21.7071C14.8966 21.5196 15.002 21.2652 15.002 21V12C15.0007 10.9481 14.7228 9.91512 14.1962 9.00455C13.6697 8.09397 12.913 7.33784 12.002 6.812V3C12.002 2.73478 11.8966 2.48043 11.7091 2.29289C11.5216 2.10536 11.2672 2 11.002 2ZM8.002 6V4H10.002V6H8.002ZM13.003 20H5.003V14H13.003V20ZM5.002 12C5.002 9.794 6.796 8 9.002 8C11.208 8 13.002 9.794 13.002 12H5.002ZM13.003 3H15.003V5H13.003V3ZM16 3H18V5H16V3ZM16 6H18V8H16V6ZM19 3H21V5H19V3ZM19 6H21V8H19V6ZM19 9H21V11H19V9Z"
                                            fill="#3F76BB" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Precauciones de salud
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        Se aplican medidas especiales de salud y seguridad.
                                        Aprende más. Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.Cancele con hasta 24 horas de anticipación para recibir
                                        un reembolso.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5">
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.25 5.25H20.25V8.25H17.25V5.25Z" fill="#3F76BB" />
                                        <path d="M17.25 9.75H20.25V12.75H17.25V9.75Z" fill="#3F76BB" />
                                        <path d="M12.75 5.25H15.75V8.25H12.75V5.25Z" fill="#3F76BB" />
                                        <path d="M12.75 9.75H15.75V12.75H12.75V9.75Z" fill="#3F76BB" />
                                        <path
                                            d="M10.875 19.5C11.4963 19.5 12 18.9963 12 18.375C12 17.7537 11.4963 17.25 10.875 17.25C10.2537 17.25 9.75 17.7537 9.75 18.375C9.75 18.9963 10.2537 19.5 10.875 19.5Z"
                                            fill="#3F76BB" />
                                        <path
                                            d="M15.75 22.5H6C5.6023 22.4996 5.221 22.3414 4.93978 22.0602C4.65856 21.779 4.5004 21.3977 4.5 21V3C4.5004 2.6023 4.65856 2.221 4.93978 1.93978C5.221 1.65856 5.6023 1.5004 6 1.5H15.75V3H6V21H15.75V15H17.25V21C17.2496 21.3977 17.0914 21.779 16.8102 22.0602C16.529 22.3414 16.1477 22.4996 15.75 22.5Z"
                                            fill="#3F76BB" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Venta de billetes móviles
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        Utilice su teléfono o imprima su bono
                                    </p>
                                </div>
                            </div>


                            <div class="flex items-start gap-5">

                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.1492 9.65625H16.1492C16.0461 9.65625 15.9617 9.74062 15.9617 9.84375V10.9687C15.9617 11.0719 16.0461 11.1562 16.1492 11.1562H22.1492C22.2523 11.1562 22.3367 11.0719 22.3367 10.9687V9.84375C22.3367 9.74062 22.2523 9.65625 22.1492 9.65625ZM19.0086 12.8437H16.1492C16.0461 12.8437 15.9617 12.9281 15.9617 13.0312V14.1562C15.9617 14.2594 16.0461 14.3437 16.1492 14.3437H19.0086C19.1117 14.3437 19.1961 14.2594 19.1961 14.1562V13.0312C19.1961 12.9281 19.1117 12.8437 19.0086 12.8437ZM11.1875 7.55859H10.1727C10.0273 7.55859 9.91016 7.67578 9.91016 7.82109V13.6336C9.91016 13.718 9.95 13.7953 10.018 13.8445L13.5078 16.3898C13.625 16.4742 13.7891 16.4508 13.8734 16.3336L14.4758 15.5109V15.5086C14.5602 15.3914 14.5344 15.2273 14.4172 15.143L11.4477 12.9961V7.82109C11.45 7.67578 11.3305 7.55859 11.1875 7.55859Z"
                                            fill="#3F76BB" />
                                        <path
                                            d="M18.8625 15.7944H17.5078C17.3766 15.7944 17.2524 15.8623 17.182 15.9748C16.8844 16.4459 16.5375 16.8819 16.1391 17.2803C15.4524 17.967 14.6531 18.5061 13.7649 18.8811C12.8438 19.2701 11.8664 19.467 10.8586 19.467C9.84845 19.467 8.87111 19.2701 7.95236 18.8811C7.06408 18.5061 6.26486 17.967 5.57814 17.2803C4.89142 16.5936 4.35236 15.7944 3.97736 14.9061C3.5883 13.9873 3.39142 13.01 3.39142 11.9998C3.39142 10.9897 3.5883 10.0147 3.97736 9.09359C4.35236 8.2053 4.89142 7.40609 5.57814 6.71937C6.26486 6.03265 7.06408 5.49359 7.95236 5.11859C8.87111 4.72952 9.8508 4.53265 10.8586 4.53265C11.8688 4.53265 12.8461 4.72952 13.7649 5.11859C14.6531 5.49359 15.4524 6.03265 16.1391 6.71937C16.5375 7.11781 16.8844 7.55374 17.182 8.02484C17.2524 8.13734 17.3766 8.2053 17.5078 8.2053H18.8625C19.0242 8.2053 19.1274 8.03655 19.0547 7.89359C17.5266 4.85374 14.4281 2.87796 10.9688 2.83812C5.90392 2.77484 1.69689 6.92093 1.68752 11.9811C1.67814 17.0506 5.78674 21.1639 10.8563 21.1639C14.3602 21.1639 17.5102 19.1811 19.0547 16.1061C19.1274 15.9631 19.0219 15.7944 18.8625 15.7944Z"
                                            fill="#3F76BB" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Duración 3,5 horas
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        Consulta disponibilidad para ver horarios de inicio.
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-5">
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.53286 1.5C5.28842 1.50005 5.05064 1.57972 4.85551 1.72695C4.66037 1.87418 4.5185 2.08096 4.45136 2.316L1.66436 12.066C1.61651 12.2335 1.60822 12.4099 1.64015 12.5812C1.67207 12.7524 1.74335 12.914 1.84835 13.053C1.95336 13.192 2.08922 13.3048 2.24523 13.3824C2.40124 13.4599 2.57313 13.5002 2.74736 13.5H5.03936L3.02186 21.5685C2.98168 21.7295 2.99601 21.8992 3.0626 22.0512C3.12919 22.2031 3.24428 22.3287 3.38985 22.4083C3.53543 22.4878 3.70328 22.5169 3.86713 22.4909C4.03098 22.4648 4.18158 22.3852 4.29536 22.2645L7.93736 18.4095C7.51754 17.1771 7.39534 15.8629 7.58074 14.5743C7.76615 13.2857 8.25389 12.0592 9.00411 10.9952C9.75432 9.93115 10.7457 9.05978 11.8972 8.45231C13.0487 7.84484 14.3276 7.51851 15.6294 7.5H12.3324L14.0124 3.018C14.0758 2.84781 14.0971 2.6648 14.0744 2.48459C14.0518 2.30438 13.9858 2.13234 13.8822 1.98317C13.7786 1.834 13.6404 1.71214 13.4794 1.628C13.3184 1.54386 13.1395 1.49994 12.9579 1.5H5.53436H5.53286ZM15.7494 22.5C16.6358 22.5 17.5135 22.3254 18.3325 21.9862C19.1514 21.647 19.8955 21.1498 20.5223 20.523C21.1491 19.8962 21.6463 19.1521 21.9855 18.3331C22.3248 17.5142 22.4994 16.6364 22.4994 15.75C22.4994 14.8636 22.3248 13.9858 21.9855 13.1669C21.6463 12.3479 21.1491 11.6038 20.5223 10.977C19.8955 10.3502 19.1514 9.85303 18.3325 9.51381C17.5135 9.17459 16.6358 9 15.7494 9C13.9592 9 12.2423 9.71116 10.9764 10.977C9.71052 12.2429 8.99936 13.9598 8.99936 15.75C8.99936 17.5402 9.71052 19.2571 10.9764 20.523C12.2423 21.7888 13.9592 22.5 15.7494 22.5ZM19.2804 14.031L14.7804 18.531C14.6397 18.6716 14.449 18.7506 14.2501 18.7506C14.0512 18.7506 13.8605 18.6716 13.7199 18.531L12.2199 17.031C12.1501 16.9614 12.0948 16.8787 12.057 16.7877C12.0192 16.6966 11.9998 16.5991 11.9997 16.5005C11.9996 16.3015 12.0785 16.1106 12.2191 15.9697C12.3597 15.8289 12.5506 15.7497 12.7496 15.7496C12.9486 15.7494 13.1395 15.8284 13.2804 15.969L14.2494 16.9395L18.2184 12.969C18.3592 12.8282 18.5502 12.7491 18.7494 12.7491C18.9485 12.7491 19.1395 12.8282 19.2804 12.969C19.4212 13.1098 19.5003 13.3008 19.5003 13.5C19.5003 13.6992 19.4212 13.8902 19.2804 14.031Z"
                                            fill="#3F76BB" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Confirmación instantánea
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        ¡No esperes la confirmación!
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5">
                                <div>
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.7007 7.546C11.1404 7.62892 11.5527 7.8198 11.9004 8.10149C12.2481 8.38317 12.5204 8.74684 12.6928 9.15981C12.8652 9.57278 12.9322 10.0221 12.888 10.4674C12.8437 10.9127 12.6895 11.34 12.4392 11.711L19.3562 17.08C19.5815 16.9633 19.8396 16.9262 20.0886 16.9746C20.3377 17.0231 20.563 17.1543 20.7281 17.347C20.8931 17.5397 20.9882 17.7825 20.9979 18.036C21.0075 18.2896 20.9312 18.5389 20.7813 18.7436C20.6314 18.9483 20.4167 19.0963 20.1721 19.1636C19.9275 19.2309 19.6673 19.2135 19.4338 19.1143C19.2003 19.0151 19.0071 18.8399 18.8858 18.6171C18.7644 18.3943 18.7219 18.137 18.7652 17.887L11.7302 12.426C11.3989 12.653 11.0212 12.8033 10.6245 12.8658C10.2278 12.9284 9.8221 12.9017 9.43704 12.7876C9.05197 12.6735 8.69721 12.475 8.39858 12.2065C8.09996 11.9379 7.86499 11.6062 7.71081 11.2354C7.55663 10.8645 7.48712 10.464 7.50733 10.0629C7.52754 9.6618 7.63697 9.27027 7.82765 8.91682C8.01833 8.56338 8.28546 8.25692 8.60957 8.01978C8.93368 7.78263 9.3066 7.62078 9.70118 7.546L9.70018 3H10.7002V7.546H10.7007ZM11.1002 10.2C11.1002 10.3182 11.0769 10.4352 11.0317 10.5444C10.9864 10.6536 10.9201 10.7528 10.8366 10.8364C10.753 10.92 10.6538 10.9863 10.5446 11.0315C10.4354 11.0767 10.3184 11.1 10.2002 11.1C10.082 11.1 9.96496 11.0767 9.85577 11.0315C9.74657 10.9863 9.64736 10.92 9.56378 10.8364C9.48021 10.7528 9.41392 10.6536 9.36869 10.5444C9.32346 10.4352 9.30018 10.3182 9.30018 10.2C9.30018 9.96131 9.395 9.73239 9.56378 9.5636C9.73257 9.39482 9.96149 9.3 10.2002 9.3C10.4389 9.3 10.6678 9.39482 10.8366 9.5636C11.0054 9.73239 11.1002 9.96131 11.1002 10.2Z"
                                            fill="#3F76BB" />
                                        <path
                                            d="M13.8146 10.1917C13.8148 9.50011 13.6157 8.82308 13.2413 8.24159C12.8668 7.6601 12.3328 7.19876 11.7031 6.91273V3.05273C13.8476 3.24123 14.9616 3.91673 15.9591 4.84123C16.0091 4.88823 16.0591 4.93373 16.1071 4.97773V4.97823C16.5321 5.36823 16.8701 5.67873 17.0446 6.14373L19.1616 11.7797C19.2184 11.931 19.2376 12.0938 19.2176 12.2541C19.1977 12.4144 19.1392 12.5675 19.0471 12.7003C18.9551 12.8331 18.8322 12.9415 18.689 13.0164C18.5459 13.0913 18.3867 13.1303 18.2251 13.1302H17.4096V14.2997L13.6221 11.3582C13.7503 10.9829 13.8156 10.5889 13.8151 10.1922L13.8146 10.1917Z"
                                            fill="#3F76BB" />
                                        <path
                                            d="M8.7015 6.92311V3.12061C4.2065 3.79711 3 7.15061 3 8.98761C3 11.8711 4.8415 14.1076 5.705 15.0041V21.0001H14.261V17.7441H16.4075C16.5585 17.7441 16.7025 17.7101 16.8305 17.6501L11.538 13.5401C10.6633 13.9011 9.68155 13.9031 8.80531 13.5458C7.92907 13.1884 7.22876 12.5005 6.85592 11.6307C6.48308 10.7609 6.4677 9.77936 6.81309 8.89834C7.15849 8.01733 7.83689 7.30773 8.7015 6.92311Z"
                                            fill="#3F76BB" />
                                    </svg>

                                </div>
                                <div>
                                    <h2 class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C] leading-none">
                                        Guía turístico en vivo en inglés
                                    </h2>
                                    <p class="font-acehMedium text-text16 md:text-text20 text-[#495560]">
                                        Inglés
                                    </p>
                                </div>
                            </div>



                        </div>

                        <div class="border-b-2 border-[#F1F1F1]" data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-acehSemibold text-text32 md:text-text40 text-[#0F1B2C] mb-5">
                                Descripción
                            </h2>

                            <p class="font-acehRegular text-text18 md:text-text22 text-[#495560] pb-5">
                                Donec tincidunt turpis lacinia nulla ultricies, quis sagittis
                                nisl feugiat. Ut lobortis dui et risus vulputate, ut placerat
                                felis rhoncus. Proin iaculis tellus massa, non mattis nulla
                                malesuada ultrices. Nam a lorem ut dui ultrices efficitur
                                vitae et metus. Mauris quis vulputate orci, ac hendrerit
                                purus. Nunc sagittis lacus sem. Nam varius purus et urna
                                vehicula, eget dictum magna efficitur. Vestibulum facilisis
                                sapien id dolor suscipit malesuada. Cras tristique odio ipsum.
                                Morbi at accumsan lacus. Phasellus efficitur magna eget orci
                                posuere, at pretium metus ultricies. Proin sollicitudin at est
                                non imperdiet. Morbi rhoncus tortor et sapien hendrerit, vel
                                luctus ex feugiat. Ut leo dui, sollicitudin eu leo quis,
                                commodo eleifend lectus.
                            </p>
                        </div>

                        <div class="border-b-2 border-[#F1F1F1]" data-aos="fade-up" data-aos-offset="150">
                            <div>
                                <h2 class="font-acehSemibold text-text32 md:text-text40 text-[#0F1B2C]">
                                    Actividad
                                </h2>
                                <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">
                                    Qué harás
                                </p>
                            </div>
                            <div class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5">
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Lorem ipsum dolor sit amet conse, adipisicing elit fsfsd
                                        fsfs dfsf dsfd sdfsdfsdf.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit.</span>
                                </p>
                            </div>
                        </div>

                        <div class="border-b-2 border-[#F1F1F1]" data-aos="fade-up" data-aos-offset="150">
                            <div>
                                <h2
                                    class="font-acehSemibold text-text32 md:text-text40 text-[#0F1B2C] leading-none md:leading-tight">
                                    Que está incluido/no incluido
                                </h2>
                            </div>
                            <div class="flex gap-5 md:gap-10 flex-col md:flex-row">
                                <div
                                    class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5 flex flex-col gap-4">
                                    <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">
                                        Incluido
                                    </p>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                </div>
                                <div
                                    class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5 flex flex-col gap-4">
                                    <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">
                                        No incluido
                                    </p>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                    <div class="flex gap-5 items-start">
                                        <img src="./images/svg/circle.svg" alt="circle" class="pt-2" />
                                        <p class="leading-none">Lorem ipsum dolord sit amet consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b-2 border-[#F1F1F1]" data-aos="fade-up" data-aos-offset="150">
                            <div>
                                <h2 class="font-acehSemibold text-text32 md:text-text40 text-[#0F1B2C]">
                                    Seguridad
                                </h2>
                                <p class="font-acehSemibold text-text20 md:text-text24 text-[#0F1B2C]">
                                    Precauciones de salud
                                </p>
                            </div>
                            <div class="font-acehRegular text-text18 md:text-text22 text-[#495560] my-5">
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Se proporciona todo el equipo de protección
                                        necesario.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Todas las áreas que tocan los clientes se limpian con
                                        frecuencia.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Debes mantener la distancia social mientras estés en los
                                        vehículos.</span>
                                </p>
                                <p class="flex gap-5 items-center">
                                    <img src="./images/svg/circle.svg" alt="circle" />
                                    <span>Se limita el número de visitantes para reducir
                                        aglomeraciones.</span>
                                </p>
                            </div>
                        </div>

                        <div class="border-b-2 border-[#F1F1F1]" data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-acehSemibold text-text32 md:text-text40 text-[#0F1B2C]">
                                Detalles
                            </h2>
                            <div class="flex flex-col md:flex-row gap-5 md:gap-32 ">
                                <div>
                                    <h3 class="font-acehSemibold text-text24 md:text-text28 text-[#0F1B2C] my-2">
                                        Idioma
                                    </h3>
                                    <p class="flex gap-5 items-center">
                                        <img src="./images/svg/circle.svg" alt="circle" />
                                        <span
                                            class="font-acehRegular text-text18 md:text-text22 text-[#495560]">Español</span>
                                    </p>
                                    <p class="flex gap-5 items-center">
                                        <img src="./images/svg/circle.svg" alt="circle" />
                                        <span
                                            class="font-acehRegular text-text18 md:text-text22 text-[#495560]">Inglés</span>
                                    </p>
                                    <p class="flex gap-5 items-center">
                                        <img src="./images/svg/circle.svg" alt="circle" />
                                        <span
                                            class="font-acehRegular text-text18 md:text-text22 text-[#495560]">Francés</span>
                                    </p>
                                </div>

                                <div>
                                    <h3 class="font-acehSemibold text-text24 md:text-text28 text-[#0F1B2C] my-2">
                                        Duración
                                    </h3>
                                    <p class="flex gap-5 items-center">
                                        <img src="./images/svg/circle.svg" alt="circle" />
                                        <span class="font-acehRegular text-text18 md:text-text22 text-[#495560]">2
                                            horas</span>
                                    </p>
                                </div>

                                <div>
                                    <h3 class="font-acehSemibold text-text24 md:text-text28 text-[#0F1B2C] my-2">
                                        Número de personas
                                    </h3>
                                    <p class="flex gap-5 items-center">
                                        <img src="./images/svg/circle.svg" alt="circle" />
                                        <span class="font-acehRegular text-text18 md:text-text22 text-[#495560]">7
                                            personas</span>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3 class="font-acehSemibold text-text24 md:text-text28 text-[#495560] my-5">
                                    Dirección del punto de encuentro
                                </h3>

                                <p class="flex gap-5 items-start my-5">
                                    <img src="./images/svg/circle.svg" alt="circle" class="mt-2" />
                                    <span class="font-acehRegular text-text18 md:text-text22 text-[#495560]">In cursus
                                        molestie
                                        dui, eget interdum
                                        nisi ullamcorper
                                        nec. Vestibulum sed gravida nulla, vel posuere diam.
                                        Nullam nisi dolor, malesuada sed felis sit amet, laoreet
                                        eleifend neque. Duis ex nunc, vehicula non posuere sed,
                                        tristique id erat. In tincidunt euismod pretium. Cras eu
                                        tristique neque. Phasellus finibus diam vel odio accumsan
                                        pretium. Interdum et malesuada fames ac ante ipsum primis
                                        in faucibus.</span>
                                </p>

                                <a href="#"
                                    class="font-acehbold text-text18 md:text-text22 text-[#3F76BB] hover:text-[#20426b] md:duration-500">Abrir
                                    en
                                    Google Maps</a>
                            </div>
                        </div>
                    </div>

                    <div class="basis-2/6">
                        <div class="shadow-lg rounded-xl">
                            <div class=" border-b-2 border-[#F1F1F1] w-11/12 2lg:mx-auto">
                                <p
                                    class="font-acehSemibold text-text30 md:text-text34 text-[#3F76BB] py-5 text-center 2lg:text-left">
                                    Reservar
                                </p>
                            </div>

                            <div class="flex flex-col items-center gap-5 py-5">
                                <div class="flex flex-col gap-5 w-11/12">
                                    <div class="flex flex-col justify-center items-center">
                                        <p class="font-acehbold text-[#3F76BB] text-text40 md:text-text44">s/240.00</p>
                                    </div>
                                    <a href="#"
                                        class="rounded-3xl bg-colorBackgroundHeader px-4 py-3 w-full text-white hover:bg-colorBackgroundMainTop md:duration-500 font-acehSemibold text-text20 md:text-text24 text-center">Confirmar
                                        Reserva</a>
                                    <a href="#"
                                        class="flex justify-center items-center gap-5 px-4 py-3 w-full rounded-3xl border-2 border-[#F1F1F1]">
                                        <span
                                            class="text-[#C8C8C8] font-acehSemibold text-center text-text20 md:text-text24">
                                            Comparte la actividad
                                        </span>

                                        <img src="./images/svg/comparte_actividad.svg" alt="compartir" />
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- agregar efecto hover -->
            <div class="w-11/12 mx-auto my-10">
                <!-- mayor a  md -->
                <div class="image hidden 2md:block">
                    <img src="./images/img/tu_viaje_comienza.png" alt="tu viaje" class="w-full h-auto" />
                    <div class="text-white flex-col gap-5 contain flex">
                        <h3
                            class="font-acehbold md:text-[30px] 2md:text-[50px] xl:text-[60px] md:w-8/12 mx-auto text-center leading-none lg:leading-tight">
                            Tu viaje comienza aquí
                        </h3>
                        <p
                            class="font-acehMedium w-9/12 mx-auto md:text-[14px] 2md:text-[16px] xl:text-[18px] md:w-6/12 text-center">
                            Regístrese ahora para recibir consejos de viaje, itinerarios
                            personalizados e inspiración para las vacaciones directamente en
                            su bandeja de entrada.
                        </p>
                        <form action="#">
                            <div class="flex gap-5">
                                <input id="correo" type="email" placeholder="Correo Electrónico"
                                    class="rounded-[20px] border border-none px-3 py-3 focus:outline-none text-black w-80 text-center text-text20" />
                                <!-- ------ssss -->
                                <input type="submit" value="Inscribirse"
                                    class="rounded-[20px] bg-colorBackgroundHeader px-4 py-3 text-white hover:bg-colorBackgroundMainTop md:duration-500 font-acehSemibold text-text20" />
                            </div>
                        </form>
                    </div>
                </div>
                <!-- menor a md -->
                <div class="image-mobile block 2md:hidden">
                    <img src="./images/img/tu_viaje_mobile.png" alt="tu viaje" class="w-full" />
                    <div class="text-white flex-col gap-5 contain-mobile flex">
                        <h3 class="font-acehbold text-[30px] w-8/12 mx-auto text-center leading-none">
                            Tu viaje comienza aquí
                        </h3>
                        <p class="font-acehMedium mx-auto text-[18px] w-9/12 text-center">
                            Regístrese ahora para recibir consejos de viaje, itinerarios
                            personalizados e inspiración para las vacaciones directamente en
                            su bandeja de entrada.
                        </p>
                        <form action="#" class="mt-5">
                            <div class="flex flex-col gap-5 ">
                                <input id="hasta" type="email" placeholder="Correo Electrónico"
                                    class="rounded-[20px] border border-none px-3 py-2 focus:outline-none text-black w-80 text-center font-acehMedium
                                text-text20 " />
                                <!-- ------ssss -->
                                <input type="submit" value="Inscribirse"
                                    class="rounded-[20px] bg-colorBackgroundHeader px-3 py-2 text-white hover:text-[#3F76BB] hover:bg-white md:duration-500 font-acehSemibold text-text20 text-center " />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ------ -->
        </section>

        <section class="" data-aos="fade-up" data-aos-offset="150">
            <h2
                class="font-acehSemibold text-text40 md:text-text64 w-11/12 mx-auto py-8 md:py-5 leading-none md:leading-tight mb-5 text-[#141841]">
                Explorar Destinos Relacionados
            </h2>
            <div class="grid grid-cols-1  2lg:grid-cols-3 w-11/12 mx-auto gap-10 md:gap-4 2xl:gap-16">
                <!-- 1 -->
                <div data-aos="fade-up" data-aos-offset="150" class="flex flex-col gap-5">
                    <div class="img-container">
                        <div class="relative">
                            <img src="./images/img/cusco.png" alt="cusco" class="w-full shadow-lg" />
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-50 hover:opacity-100 rounded-[34px] md:rounded-[25px] lg:rounded-[20px] xl:rounded-[30px]">
                            </div>
                        </div>
                        <!-- ------ -->
                        <div class="newsletter flex justify-around text-center">
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                98 <span class="block font-acehMedium text-text12 md:text-text16">Actividades</span>
                            </p>
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                23,534
                                <span class="block font-acehMedium text-text12 md:text-text16">Tickets vendidos</span>
                            </p>
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                9,0/10
                                <span class="block font-acehMedium text-text12 md:text-text16">Valoraciones</span>
                            </p>
                        </div>
                    </div>

                    <!-- -- -->

                    <div class="flex flex-col gap-5 text-[#0F1B2C]">
                        <h3 class="font-acehSemibold text-text48 md:text-text52 leading-none">Cusco</h3>
                        <p class="font-acehMedium text-text18 md:text-text22">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloribus iste soluta dolore corrupti eos rerum ipsam.
                        </p>
                        <div class="flex gap-2 ">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                        </div>
                        <!-- corregir este div -->
                        <div class="flex justify-between items-center">
                            <p class="font-acehSemibold text-text28 md:text-text32">
                                2,343
                                <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
                            </p>
                            <a href="detalle_actividad.html"
                                class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader  py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">Ver
                                Destino</a>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div data-aos="fade-up" data-aos-offset="150" class="flex flex-col gap-5">
                    <div class="img-container">
                        <div class="relative">
                            <img src="./images/img/lisboa.png" alt="lisboa" class="w-full rounded-2xl" />
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-50 hover:opacity-100 rounded-[34px] md:rounded-[25px] lg:rounded-[20px] xl:rounded-[30px]">
                            </div>
                        </div>
                        <!-- ------ -->
                        <div class="newsletter flex justify-around text-center">
                            <p class="text-white font-acehSemibold text-[28px]">
                                98 <span class="block font-acehMedium text-text12 md:text-text16">Actividades</span>
                            </p>
                            <p class="text-white font-acehSemibold text-[28px]">
                                23,534
                                <span class="block font-acehMedium text-text12 md:text-text16">Tickets vendidos</span>
                            </p>
                            <p class="text-white font-acehSemibold text-[28px]">
                                9,0/10
                                <span class="block font-acehMedium text-text12 md:text-text16">Valoraciones</span>
                            </p>
                        </div>
                    </div>

                    <!-- -- -->

                    <div class="flex flex-col gap-5 text-[#0F1B2C]">
                        <h3 class="font-acehSemibold text-text48 md:text-text52 leading-none">Lisboa</h3>
                        <p class="font-acehMedium text-text18 md:text-text22">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloribus iste soluta dolore corrupti eos rerum ipsam.
                        </p>
                        <div class="flex gap-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-acehSemibold text-text28 md:text-text32">
                                2,343 <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
                            </p>
                            <a href="detalle_actividad.html"
                                class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader  py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">Ver
                                Destino</a>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div data-aos="fade-up" data-aos-offset="150" class="flex flex-col gap-5">
                    <div class="img-container">
                        <div class="relative">
                            <img src="./images/img/dubai.png" alt="dubai" class="w-full rounded-2xl" />
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 bg-black bg-opacity-50 hover:opacity-100 rounded-[34px] md:rounded-[25px] lg:rounded-[20px] xl:rounded-[30px]">
                            </div>
                        </div>
                        <!-- ------ -->
                        <div class="newsletter flex justify-around text-center">
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                98 <span class="block font-acehMedium text-text12 md:text-text16">Actividades</span>
                            </p>
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                23,534
                                <span class="block font-acehMedium text-text12 md:text-text16">Tickets vendidos</span>
                            </p>
                            <p class="text-white font-acehSemibold text-text28 md:text-text32">
                                9,0/10
                                <span class="block font-acehMedium text-text12 md:text-text16">Valoraciones</span>
                            </p>
                        </div>
                    </div>

                    <!-- -- -->

                    <div class="flex flex-col gap-5 text-[#0F1B2C]">
                        <h3 class="font-acehSemibold text-text48 md:text-text52 leading-none">Dubai</h3>
                        <p class="font-acehMedium text-text18 md:text-text22">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Doloribus iste soluta dolore corrupti eos rerum ipsam.
                        </p>
                        <div class="flex gap-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-acehSemibold text-text28 md:text-text32">
                                2,343 <span class="font-acehMedium text-text16 md:text-text20">Opiniones</span>
                            </p>
                            <a href="detalle_actividad.html"
                                class="font-acehMedium text-text16 md:text-text20 rounded-full bg-colorBackgroundHeader py-3 px-8 text-white hover:bg-colorBackgroundMainTop md:duration-500">Ver
                                Destino</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-11/12 mx-auto mt-10">
                <a href="destino.html"
                    class="font-acehSemibold text-text18 md:text-text22 rounded-[26px] border-colorBorder border-2 py-3 px-5 hover:bg-colorBackgroundHeader hover:text-white group md:duration-500 inline-block w-full md:w-auto text-center">
                    Ver más Destinos
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="inline-block">
                        <path
                            d="M11.043 15.7637C10.4437 15.918 9.81541 16 9.16797 16C5.02583 16 1.66797 12.6421 1.66797 8.5C1.66797 4.35786 5.02583 1 9.16797 1C12.9926 1 16.1486 3.86283 16.6099 7.5625M2.60547 11.3125H4.79297C5.65592 11.3125 6.35547 10.6129 6.35547 9.75V7.71875C6.35547 6.8558 7.05502 6.15625 7.91797 6.15625H9.48047C10.3434 6.15625 11.043 5.4567 11.043 4.59375V1.9375M15.7676 13.2048L17.9146 12.4625C18.3171 12.3233 18.3305 11.7591 17.9352 11.601L12.6122 9.47145C12.2419 9.32331 11.8714 9.6846 12.0103 10.0585L14.038 15.5181C14.1862 15.9171 14.7502 15.9179 14.8996 15.5194L15.7676 13.2048Z"
                            stroke="#0F1B2C" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"
                            class="group-hover:stroke-white md:duration-500" />
                    </svg>
                </a>
            </div>
        </section>
    </main>




@section('scripts_improtados')
    <script></script>
@stop

@stop
