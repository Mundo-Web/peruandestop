<?php

namespace App\Http\Controllers;

use App\Helpers\EmailConfig;
use App\Models\MailingAnswer;
use App\Http\Requests\StoreMailingAnswerRequest;
use App\Http\Requests\UpdateMailingAnswerRequest;
use App\Models\Message;
use Error;
use Illuminate\Http\Request;
use Throwable;

class MailingAnswerController extends Controller
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
    public function replyMailing(Request $request)
    {
        $message = Message::findOrFail($request->messageId);

        $mail = EmailConfig::config();

        try {
            $mail->addAddress($message->email, $message->full_name);
            $mail->addBCC('agencias@peruandestop.com', 'PeruAndesTop');
            $mail->Body = $request->content;
            $mail->isHTML(true);
            $mail->send();

            MailingAnswer::create([
                'mailing_id' => $message->id,
                'subject' => $request->subject,
                'content' => $request->content
            ]);

            return \redirect()->route('mensajes.show', $message->id);
        } catch (Throwable $th) {
            dump($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MailingAnswer $mailingAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MailingAnswer $mailingAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMailingAnswerRequest $request, MailingAnswer $mailingAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MailingAnswer $mailingAnswer)
    {
        //
    }
}
