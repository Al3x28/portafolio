<x-mail::message>
    # Nuevo Mensaje de Contacto

    Has recibido un nuevo mensaje desde tu portafolio web.

    ## Información del Remitente

    **Nombre:** {{ $nombre }}
    **Email:** {{ $email }}
    **Asunto:** {{ $asunto }}

    ---

    ## Mensaje

    {{ $mensaje }}

    ---

    <x-mail::button :url="'mailto:' . $email">
        Responder a {{ $nombre }}
    </x-mail::button>

    Saludos,<br>
    Sistema de Contacto - {{ config('app.name') }}
</x-mail::message>
