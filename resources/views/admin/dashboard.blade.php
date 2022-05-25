<x-app-layout>
    <h1 class="page-title">Admin Panel</h1>
    <h2 class="section-title" id="Installation">Statut des exercices</h2>
    <div class="sub">
        <h3 class="sub-title">Exercice n°2</h3>
        <p class="text">   
            Vous pouvez activer ou désactiver un exercice !
        </p>
        @if ($exercices[0]->allow == 0)
            <a href="{{ route('active', 1) }}" class="btn m-0">Activer l'exercice 2</a>
        @else
            <a href="{{ route('desactive', 1) }}" class="btn btn-danger m-0">Désactiver l'exercice 2</a>
        @endif

    </div>


</x-app-layout>
