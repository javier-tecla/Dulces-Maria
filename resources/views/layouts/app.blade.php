<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dulces Maria - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-pink-500 text-3xl font-black">
                    Dulces Maria
                </h1>

                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Crear Cuenta</a>
                </nav>

            </div>
        </header>
            <div class="container mx-auto flex justify-center items-center">
                <nav class="flex gap-8 items-center">
                    <a class="font-bold pt-3 uppercase text-gray-600 text-base" href="/">Principal</a>
                    <a class="font-bold pt-3 uppercase text-gray-600 text-base" href="/nosotros">Nosotros</a>
                    <a class="font-bold pt-3 uppercase text-gray-600 text-base" href="/productos">Productos</a>
                    <a class="font-bold pt-3 uppercase text-gray-600 text-base" href="/contacto">Contacto</a>
                </nav>
                
            </div>
        <main>
            <h2>
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold">
            Dulces Maria - Todos los derechos reservados 
            {{ now()->year }}
        </footer>
        

       

    </body>
    
</html>