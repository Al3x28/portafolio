<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function store(ContactRequest $request): JsonResponse
    {
        try {
            // Send email to your address
            Mail::to('alejandrogirardi99@gmail.com')->send(
                new ContactMail(
                    nombre: $request->nombre,
                    email: $request->email,
                    asunto: $request->asunto,
                    mensaje: $request->mensaje
                )
            );

            return response()->json([
                'success' => true,
                'message' => '¡Mensaje enviado con éxito! Te responderé pronto.',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error al enviar el mensaje. Por favor, intenta nuevamente o contáctame directamente por email.',
            ], 500);
        }
    }
}
