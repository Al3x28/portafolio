# Configuración del Formulario de Contacto

## 📧 Configuración de Correo Electrónico

Para que el formulario de contacto funcione, necesitas configurar el envío de correos en tu archivo `.env`.

### Opción 1: Mailtrap (Recomendado para Desarrollo)

Mailtrap es un servicio gratuito para probar el envío de correos sin enviarlos realmente.

1. Crea una cuenta en [Mailtrap.io](https://mailtrap.io)
2. Crea un inbox y copia las credenciales SMTP
3. Actualiza tu `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=tu_username_de_mailtrap
MAIL_PASSWORD=tu_password_de_mailtrap
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@portafolio.test
MAIL_FROM_NAME="${APP_NAME}"
```

### Opción 2: Gmail (Para Producción)

Para usar Gmail necesitas crear una "Contraseña de Aplicación":

1. Ve a tu cuenta de Google → Seguridad
2. Activa la verificación en 2 pasos
3. Genera una "Contraseña de aplicación"
4. Actualiza tu `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=alejandrogirardi99@gmail.com
MAIL_PASSWORD=tu_contraseña_de_aplicacion
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=alejandrogirardi99@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Opción 3: Otros Servicios

También puedes usar:
- **SendGrid**: Hasta 100 correos/día gratis
- **Mailgun**: Hasta 5,000 correos/mes gratis
- **Amazon SES**: Muy económico para grandes volúmenes

## 🧪 Probar el Formulario

### 1. Verificar la configuración

```bash
php artisan route:list | grep contact
```

Deberías ver:
```
POST   contact .............. contact.store › ContactController@store
```

### 2. Probar localmente

1. Inicia el servidor de desarrollo:
```bash
php artisan serve
```

2. Abre tu navegador en `http://localhost:8000`

3. Ve a la sección de contacto y llena el formulario

4. Envía el mensaje y verifica:
   - ✅ Aparece el mensaje "¡Mensaje enviado con éxito!"
   - ✅ El formulario se limpia automáticamente
   - ✅ El correo llega a tu inbox (Mailtrap o Gmail)

### 3. Probar validación

Intenta enviar el formulario con:
- Campos vacíos → Deberías ver mensajes de error en rojo
- Email inválido → Deberías ver "Debes proporcionar un correo electrónico válido"
- Mensaje muy corto → Deberías ver "El mensaje debe tener al menos 10 caracteres"

## 🔒 Seguridad Implementada

✅ **CSRF Protection**: Token de seguridad en cada envío  
✅ **Rate Limiting**: Máximo 5 envíos por minuto  
✅ **Validación**: Todos los campos son validados en el servidor  
✅ **Sanitización**: Laravel sanitiza automáticamente los datos

## 📝 Estructura del Email

Los correos que recibirás tendrán este formato:

```
Asunto: Nuevo mensaje de contacto: [Asunto del usuario]

Nombre: [Nombre del usuario]
Email: [Email del usuario]
Asunto: [Asunto]

Mensaje:
[Mensaje del usuario]

[Botón: Responder a {nombre}]
```

El botón "Responder" abrirá tu cliente de correo con la dirección del remitente pre-cargada.

## 🚀 Despliegue a Producción

Cuando despliegues tu aplicación:

1. **Actualiza las variables de entorno** en tu servidor con las credenciales de producción
2. **Usa un servicio de correo confiable** (Gmail, SendGrid, Mailgun)
3. **Verifica que el dominio esté configurado** correctamente
4. **Prueba el formulario** después del despliegue

## ❓ Solución de Problemas

### El correo no se envía

1. Verifica las credenciales en `.env`
2. Ejecuta: `php artisan config:clear`
3. Revisa los logs: `storage/logs/laravel.log`

### Error 419 (CSRF Token Mismatch)

1. Limpia la caché: `php artisan cache:clear`
2. Verifica que el formulario tenga `@csrf`

### Error 429 (Too Many Requests)

Has excedido el límite de 5 envíos por minuto. Espera un momento e intenta nuevamente.

## 📧 Correo de Destino

Todos los mensajes se envían a: **alejandrogirardi99@gmail.com**

Para cambiar el correo de destino, edita:
`app/Http/Controllers/ContactController.php` línea 19
