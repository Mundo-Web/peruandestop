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


        <p class="MsoNormal" style="text-align: justify;"><strong><span lang="EN-US"
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: EN-US;">ESNNA POLICIES</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span lang="EN-US"
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: EN-US;">&ldquo;Prevention of Sexual
              Exploitation of Girls, Boys and Adolescents, in the field of tourism&rdquo;</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span lang="EN-US"
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: EN-US;">&nbsp;</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><strong><span
              style="font-size: 14.0pt; line-height: 107%; mso-ansi-language: ES;">&nbsp;</span></strong></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">"ESNNA" is the use of the body of
            minors for sexual, pornographic or erotic purposes in exchange for payment, promise of payment or other
            benefit such as, for example, food, clothing, cell phone, etc. In this context, the Ministry of Foreign Trade
            and Tourism (Mincetur) seeks to raise awareness among regional and local authorities, tourism service
            providers and the general public, through prevention actions aimed at eradicating this problem in the country,
            in PeruAndesTop, as a responsible company and aware of the tourist activities we carry out, we commit to
            respect, develop and abide by the actions that prevent said problems, in turn, we carry out actions with all
            our staff involved in carrying out our activities, below our main actions to help eradicate this bad
            practice:</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">In the specific case of travel
            agencies and tour operators, we adhere to this commitment by signing the Code of Conduct against SEC, before
            GERCETUR and we commit to comply with the principles and duties established in this document; as well as in
            compliance with the General Tourism Law and its regulations on the prevention of SEC.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">We carry out periodic training with
            all our staff, with the aim of identifying possible cases of exploitation against adolescents and minors, to
            be reported to the competent authority.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">We request the corresponding documents
            (Passport, identity documents and/or any document that proves the age of all our tourists), in order to carry
            out the corresponding issuance of tickets for buses, flights, activities, in this way, we guarantee that, If
            there is a minor, they must be accompanied by an adult family member. We do not issue tickets to minors, under
            any circumstances.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">We are totally unaware of any request
            related to human trafficking and sexual exploitation; on the contrary, we will report said request to the
            corresponding authority.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">Our entire work team (guides,
            transporters, office, restaurants, hotels, among others) receive talks regarding:</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">The use of boys, girls and adolescents
            in pornographic activities.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">Sex tourism.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">Trafficking in children and
            adolescents for the purposes of commercial sexual exploitation.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">So that in this way they know how to
            act with total judgment and professionalism, always safeguarding the integrity of travelers and the community
            (adolescents and minors).</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">Sign the Supplier Code of Conduct,
            through which all interest groups and the various activities throughout the value chain in our operations,
            commit to enforcing the five commitments established in the document; as well as comply with reporting ESNNA
            to the authorities as appropriate.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="EN-US"
            style="font-size: 12.0pt; line-height: 107%; mso-ansi-language: EN-US;">As an additional aspect to our
            commitment to our Corporate Social Responsibility Policy, we promote the well-being of children in our region
            and country, indirectly, through the generation of income for families in the destinations in which we develop
            our business. tourist activity. As well as, support rural communities with periodic oral cleaning campaigns,
            improvement of recreational spaces and schools, among others.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="ES-PE"
            style="font-size: 8.0pt; line-height: 107%;">&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span lang="ES-PE"
            style="font-size: 8.0pt; line-height: 107%;">&nbsp;</span></p>
      </div>
    </section>
  </main>




@section('scripts_improtados')

@stop

@stop
