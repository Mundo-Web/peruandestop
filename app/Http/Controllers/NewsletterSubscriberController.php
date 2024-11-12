<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Models\NewsletterSubscriber;
use App\Http\Requests\StoreNewsletterSubscriberRequest;
use App\Http\Requests\UpdateNewsletterSubscriberRequest;
use App\Models\General;
use Illuminate\Http\Request;

class NewsletterSubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsletterSubscriber $newsletterSubscriber)
    {
        //
    }

    public function showSubscripciones()
    {
        $subscripciones = NewsletterSubscriber::orderBy('created_at', 'desc')->get();

        return view('pages.subscripciones.index', compact('subscripciones'));
    }

    public function guardarUserNewsLetter(Request $request)
    {
        NewsletterSubscriber::updateOrCreate($request->all());
        $data = $request->all();
        $data['nombre'] = '';
        $this->envioCorreo($data);
        $this->envioCorreoInterno($data);
        return response()->json(['message' => 'Subscripcion guardada ']);
    }

    private function envioCorreo($data)
    {
      
      
        $name = '';
        $mensaje = 'Gracias por comunicarte con MIC&JC';
        $mail = EmailConfig::config($name, $mensaje);
        $general = General::all()->first();
        // dd($mail);
        try {
            $mail->addAddress($data['email']);
            $mail->Body =
                '<html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fit2finance</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
        />
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
        </style>
      </head>
      <body>
        <main>
          <table
            style="
              width: 600px;
              margin: 0 auto;
              text-align: center;
              background-image: url(https://peruandestop.com/public/images/peruandesmail/Fondo_600px.png);
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
            "
          >
            <thead>
              <tr>
                <th style="text-align: center; padding-top: 50px">
                  <img src="https://peruandestop.com/public/images/peruandesmail/logo.png" alt="Peruandes" />
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #e38533;
                      font-size: 40px;
                      line-height: 20px;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      font-size: 40px;
                      line-height: 70px;
                      font-family: Montserrat, sans-serif;
                      font-weight: bold;
                    "
                  >
                    <span style="color: #ffffff">¡Gracias por escribirnos!</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    !Hola '.$name.'
                  </p>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    En breve estaremos comunicandonos contigo.
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <a
                    target="_blank"
                    href="https://peruandestop.com/public/"
                    style="
                      text-decoration: none;
                      background-color: #fffffff3;
                      color: rgb(101, 110, 226);
                      padding: 12px 16px;
                      display: inline-flex;
                      justify-content: center;
                      align-items: center;
                      gap: 10px;
                      font-weight: 600;
                      font-family: Montserrat, sans-serif;
                      font-size: 16px;
                      border-radius: 10px;
                    "
                  >
                    <span>Visita nuestra Web</span>
                  </a>
                </td>
              </tr>
              <tr style="height: 300px">
                <td style="text-align: center">
                  <img src="https://peruandestop.com/public/images/peruandesmail/Face.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Insta.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/X.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Linkedin(2).svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Youtube.svg" alt="" srcset="" />
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </body>
    </html>
';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
            // dump($th);
        }
    }

    private function envioCorreoInterno($data)
    {
        /* $name = $data['full_name']; */
        $name = 'Tienes un nuevo mensaje,';
        $mensaje = 'MIC&JS';
        $mail = EmailConfig::config($name, $mensaje);
        $emailCliente = General::all()->first();
        $general = General::all()->first();

        try {
            $mail->addAddress($emailCliente->email);
            $mail->Body =
                '<html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fit2finance</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet"
        />
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
        </style>
      </head>
      <body>
        <main>
          <table
            style="
              width: 600px;
              margin: 0 auto;
              text-align: center;
              background-image: url(https://peruandestop.com/public/images/peruandesmail/Fondo_600px.png);
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
            "
          >
            <thead>
              <tr>
                <th style="text-align: center; padding-top: 50px">
                  <img src="https://peruandestop.com/public/images/peruandesmail/logo.png" alt="Peruandes" />
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #e38533;
                      font-size: 40px;
                      line-height: 20px;
                      font-family: Montserrat, sans-serif;
                    "
                  ></p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      font-size: 40px;
                      line-height: 70px;
                      font-family: Montserrat, sans-serif;
                      font-weight: bold;
                    "
                  >
                    <span style="color: #ffffff">¡Gracias por escribirnos!</span>
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    !Hola Tienes un nuevo mensaje
                  </p>
                  <p
                    style="
                      color: #ffffff;
                      font-weight: 500;
                      font-size: 18px;
                      text-align: center;
                      width: 500px;
                      margin: 0 auto;
                      padding: 20px 0;
                      font-family: Montserrat, sans-serif;
                    "
                  >
                    
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <a
                    target="_blank"
                    href="https://peruandestop.com/public/"
                    style="
                      text-decoration: none;
                      background-color: #fffffff3;
                      color: rgb(101, 110, 226);
                      padding: 12px 16px;
                      display: inline-flex;
                      justify-content: center;
                      align-items: center;
                      gap: 10px;
                      font-weight: 600;
                      font-family: Montserrat, sans-serif;
                      font-size: 16px;
                      border-radius: 10px;
                    "
                  >
                    <span>Visita nuestra Web</span>
                  </a>
                </td>
              </tr>
              <tr style="height: 300px">
                <td style="text-align: center">
                  <img src="https://peruandestop.com/public/images/peruandesmail/Face.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Insta.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/X.svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Linkedin(2).svg" alt="" srcset="" />
                  <img src="https://peruandestop.com/public/images/peruandesmail/Youtube.svg" alt="" srcset="" />
                </td>
              </tr>
            </tbody>
          </table>
        </main>
      </body>
    </html>';
            $mail->isHTML(true);
            $mail->send();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}