<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <x-partials.head/>
       <style type="text/css">
       
       .st0{fill:#0acf83}.st1{fill:#a259ff}.st2{fill:#f24e1e}.st3{fill:#ff7262}.st4{fill:#1abcfe}
       
       </style>
    </head>
    <body class="font-sans antialiased">
           <x-partials.nav/>

            <x-ui.alert/>
            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
<x-partials.footer/>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

        @stack('modals')

        @livewireScripts
    </body>
</html>
