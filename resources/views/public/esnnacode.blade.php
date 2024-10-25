@extends('components.public.matrix')

@section('css_improtados')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


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
    <section class="w-11/12 mx-auto gap-5 grid grid-cols-1 grid-rows-1  pt-60 px-10 lg:px-40">
      <div class="flex flex-col items-center gap-5 col-span-1 row-span-1 leading-relaxed pb-10" data-aos="fade-up"
        data-aos-offset="150">


        <p class="MsoNormal" style="text-align: center;" align="center"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">POLITICAS ESNNA</span></strong></p>
        <p class="MsoNormal" style="text-align: center;" align="center"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;"><img
                src="{{ asset('images\esnna\1.png') }}"></span></strong></p>
        <p class="MsoNormal" style="text-align: center;" align="center"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;"><img
                src="{{ asset('images\esnna\afiche-esnna-49x69-29ago_orig.webp') }}"></span></strong></p>
        <p class="MsoNormal" style="text-align: center;" align="center"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;"><img
                src="{{ asset('images\esnna\ESNNA _1.jpg') }}"></span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">La ESNNA es el uso del cuerpo de
              menores de edad con fines sexuales, pornogr&aacute;ficos o er&oacute;ticos a cambio de un pago, promesa de
              pago u otro beneficio como, por ejemplo, comida, ropa, celular, etc. En ese contexto, el Ministerio de
              Comercio Exterior y Turismo (Mincetur) busca sensibilizar a las autoridades regionales y locales,
              prestadores de servicios tur&iacute;sticos y p&uacute;blico en general, a trav&eacute;s de acciones de
              prevenci&oacute;n destinadas a la erradicaci&oacute;n de esta problem&aacute;tica en el pa&iacute;s, en
              PeruAndesTop, como empresa responsable y conscientes de las actividades tur&iacute;sticas que realizamos,
              nos comprometemos a respetar, desarrollar y acatar las acciones que prevengan dicha problem&aacute;tica, a
              su vez, realizamos acciones con todo nuestro personal involucrado en la realizaci&oacute;n de nuestras
              actividades, a continuaci&oacute;n nuestras principales acciones para ayudar a erradicar esta mala
              pr&aacute;ctica:</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">&nbsp;</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">En el caso espec&iacute;fico de las
              agencias de viajes y tour operadores, nos adherirnos a este compromiso a la firma del C&oacute;digo de
              Conducta contra la ESNNA, ante la GERCETUR y nos comprometemos a cumplir con los principios y deberes
              establecidos en este documento; as&iacute; como en cumplimiento a la Ley General del Turismo y su reglamento
              en materia de prevenci&oacute;n de la ESNNA.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Realizamos capacitaciones
              peri&oacute;dicas con todo nuestro personal, con la finalidad de identificar posibles casos de
              explotaci&oacute;n en contra de adolescentes y menores de edad, para ser denunciados ante la autoridad
              competente.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Solicitamos los documentos
              correspondientes (Pasaporte, documentos de identidad y/o alg&uacute;n documento que acredite la edad de
              todos nuestros turistas), con la finalidad de realizar la emisi&oacute;n correspondiente de tickets de
              buses, a&eacute;reos, actividades, de esta manera, garantizamos que, de haber un menor de edad, este debe de
              estar acompa&ntilde;ado por un familiar adulto, no realizamos emisiones de tickets a menores de edad, bajo
              ninguna circunstancia.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Somos totalmente ajenos a cualquier
              solicitud relacionada a la trata de personas y explotaci&oacute;n sexual, por el contrario, denunciaremos
              ante la autoridad correspondiente dicha solicitud.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Todo nuestro equipo de trabajo
              (gu&iacute;as. Transportistas, oficina, restaurantes, hoteles, entre otros) reciben charlas referentes
              a:</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">La utilizaci&oacute;n de ni&ntilde;os,
              ni&ntilde;as y adolescentes en actividades pornogr&aacute;ficas.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">El turismo sexual.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Trata de ni&ntilde;os, ni&ntilde;as y
              adolescentes con fines de explotaci&oacute;n sexual comercial.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Para que de esta manera sepan actuar
              con total criterio y profesionalismo, siempre salvaguardando la integridad de los viajeros y comunidad
              (adolescentes y menores de edad).</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">&nbsp;</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Firmar el C&oacute;digo de Conducta de
              Proveedores, a trav&eacute;s del cual todos los grupos de inter&eacute;s y las diversas actividades a lo
              largo de la cadena de valor en nuestras operaciones, nos comprometemos en hacer cumplir los cinco
              compromisos establecidos en el documento; as&iacute; como cumplir con denunciar la ESNNA ante las
              autoridades seg&uacute;n corresponda.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">Como un aspecto adicional al compromiso
              con nuestra Pol&iacute;tica de Responsabilidad Social Empresarial, promovemos el bienestar de la
              ni&ntilde;ez en nuestra regi&oacute;n y pa&iacute;s, de manera indirecta, a trav&eacute;s de la
              generaci&oacute;n de ingresos en favor de las familias en los destinos en los que desarrollamos nuestra
              actividad tur&iacute;stica. As&iacute; como tambi&eacute;n, apoyar a las comunidades rurales con
              campa&ntilde;as peri&oacute;dicas de limpieza bucal, mejoramiento de espacios recreativos y escuelas, entre
              otros.</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong style="mso-bidi-font-weight: normal;"><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES; mso-no-proof: yes;"><img
                src="{{ asset('images\esnna\ruta-amigable-guia-atencion-ESNNA_page-0001.jpg') }}"><br><!--[endif]--></span></strong>
        </p>
        <p class="MsoNormal" style="text-align: justify;"><strong style="mso-bidi-font-weight: normal;"><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES; mso-no-proof: yes;"><img
                src="{{ asset('images\esnna\ruta-amigable-guia-atencion-ESNNA_page-0002.jpg') }}"></span></strong></p>
      </div>
    </section>
  </main>




@section('scripts_improtados')

@stop

@stop
