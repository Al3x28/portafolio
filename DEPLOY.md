# 🚀 Guía de Despliegue - Render.com

Esta guía te explica paso a paso cómo desplegar tu portafolio Laravel en Render.com **completamente GRATIS**.

---

## 📋 Requisitos Previos

- ✅ Proyecto Laravel configurado con Docker (ya está listo)
- ✅ Cuenta de GitHub (gratis)
- ✅ Cuenta de Render.com (gratis)

---

## 🔧 Paso 1: Preparar el Proyecto Localmente

### 1.1 Generar lockfile de pnpm (si no existe)

Si aún no tienes un archivo `pnpm-lock.yaml`, generalo ejecutando:

```bash
pnpm install
```

### 1.2 Crear base de datos SQLite (si no existe)

```bash
# En PowerShell
New-Item -ItemType File -Path "database\database.sqlite" -Force
```

```bash
# O en Git Bash
touch database/database.sqlite
```

### 1.3 Verificar archivo .gitignore

Asegúrate de que tu `.gitignore` **NO ignore** los siguientes archivos:
- ✅ `Dockerfile`
- ✅ `render.yaml`
- ✅ `docker/` (carpeta completa)
- ⚠️ Pero **SÍ debe ignorar**: `.env`, `vendor/`, `node_modules/`, `public/build/`

---

## 📤 Paso 2: Subir el Proyecto a GitHub

### 2.1 Crear repositorio en GitHub

1. Ve a [github.com](https://github.com) e inicia sesión
2. Haz clic en el botón **"+"** → **"New repository"**
3. Nombre del repositorio: `portafolio` (o el que prefieras)
4. Configura como **público** o **privado** (ambos funcionan)
5. **NO** inicialices con README ni .gitignore (ya los tienes)
6. Haz clic en **"Create repository"**

### 2.2 Inicializar Git localmente (si no está inicializado)

```bash
cd c:\laragon\www\Portafolio

# Inicializar repositorio git (si NO existe .git)
git init

# Agregar todos los archivos
git add .

# Hacer commit inicial
git commit -m "Initial commit - Laravel portfolio with Docker"
```

### 2.3 Conectar con GitHub y subir

Reemplaza `TU_USUARIO` y `TU_REPOSITORIO` con tus datos:

```bash
# Agregar el repositorio remoto
git remote add origin https://github.com/TU_USUARIO/TU_REPOSITORIO.git

# Subir código a GitHub
git branch -M main
git push -u origin main
```

---

## 🌐 Paso 3: Desplegar en Render.com

### 3.1 Crear cuenta en Render.com

1. Ve a [render.com](https://render.com)
2. Haz clic en **"Get Started"**
3. Registrate con tu cuenta de **GitHub** (más fácil)

### 3.2 Conectar repositorio de GitHub

1. En el dashboard de Render, haz clic en **"New +"** → **"Web Service"**
2. Haz clic en **"Connect a repository"**
3. Autoriza el acceso a GitHub
4. Selecciona tu repositorio `portafolio`

### 3.3 Configurar el servicio

Render debería detectar automáticamente tu `render.yaml`, pero verifica:

- **Name**: `portafolio` (o el que prefieras)
- **Environment**: `Docker`
- **Plan**: **Free** ⭐
- **Branch**: `main`

### 3.4 Configurar variables de entorno

Render debería cargarlas del `render.yaml`, pero asegúrate de que estén:

| Variable | Valor |
|----------|-------|
| `APP_NAME` | Portafolio |
| `APP_ENV` | production |
| `APP_DEBUG` | false |
| `APP_KEY` | **(Auto-generado)** |
| `APP_URL` | **(Se completa solo con tu URL de Render)** |
| `DB_CONNECTION` | sqlite |
| `LOG_CHANNEL` | stderr |

> **⚠️ IMPORTANTE**: La variable `APP_KEY` debe generarse automáticamente. Si no se genera, puedes crear una ejecutando localmente `php artisan key:generate --show` y copiarla.

### 3.5 Desplegar

1. Revisa toda la configuración
2. Haz clic en **"Create Web Service"**
3. **¡Espera!** El despliegue tarda entre 5-10 minutos la primera vez

---

## ✅ Paso 4: Verificar el Despliegue

Una vez finalizado:

1. Render te dará una URL como: `https://portafolio-xxxx.onrender.com`
2. Haz clic en la URL para ver tu portafolio en vivo
3. ✨ **¡Felicidades! Tu portafolio está en la nube**

---

## 🔄 Actualizar tu Portafolio

Para actualizar tu sitio después de hacer cambios:

```bash
# Hacer cambios en tu código...

# Agregar cambios
git add .

# Commit
git commit -m "Descripción de los cambios"

# Push a GitHub
git push

# ¡Render desplegará automáticamente! 🚀
```

---

## ⚠️ Limitaciones del Plan Gratuito

- El sitio "duerme" después de **15 minutos** sin visitas
- Al despertar tarda **~30 segundos** en cargar (primera visita)
- Una vez despierto, funciona normal
- **Perfecto para portafolios** - cuando alguien lo visite, se activa automáticamente

---

## 🆘 Solución de Problemas

### Error: "Build failed"

- Verifica que el `Dockerfile` esté en la raíz del proyecto
- Revisa los logs de build en Render
- Asegúrate de que `pnpm-lock.yaml` exista en el repositorio

### Error: "Application Error"

- Verifica que `APP_KEY` esté configurado
- Revisa los logs de aplicación en Render
- Confirma que las migraciones se ejecutaron (revisa logs de startup)

### El sitio no carga

- Espera 30-60 segundos (está despertando del modo sleep)
- Refresca la página
- Revisa los logs en el dashboard de Render

---

## 📞 Soporte

Si encuentras problemas, puedes:
- Revisar los logs en el dashboard de Render
- Consultar la documentación: [render.com/docs](https://render.com/docs)
- Revisar el código en tu repositorio de GitHub

---

**¡Buena suerte con tu portafolio! 🎉**
