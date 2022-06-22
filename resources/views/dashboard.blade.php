<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CALENDARIO DE ACTIVIDADES') }}
        </h2>
    </x-slot>
    
<body>
        <div class="py-6 mx-auto" style="width: 750px;">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FMazatlan&src=cjI5czBmbmVmbDhhdWYyMzRiYm9qYmE1ZzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZXMubWV4aWNhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%234285F4&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe> 
        </div>     
</body>
</x-app-layout>