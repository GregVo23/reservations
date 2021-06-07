<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmation') }}
        </h2>
    </x-slot>
    
    <div class="bg-no-repeat bg-left-bottom h-screen" style="background-image: url({{ asset('images/congrats.png') }});">
        <div class="flex items-center justify-center">
            <div class="p-10 mt-20 bg-white rounded-lg shadow-lg overflow-hidden">
                <h3><b>Votre réservation:</b></h3>
                <p>Vous avez réservé(e) avec succès {{ $qty }} place{{ ($qty>1) ? "s" : "" }} pour la pièce de théatre <b>{{ $title }}</b> qui aura lieu le {{ $date }}.</p>
                <p>Le total de la réservation s'élève à <b>{{ $price }}€</b>. Vous recevrez un e-mail contenant vos tickets qu'il vous faudra présenter à l'accueil du théatre.</p>
                <a href = "#"><b class="text-red-700">Télécharger votre reservation</b></a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/congratulation.js') }}"></script>
</x-app-layout>
