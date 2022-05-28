<x-app-layout>
    <h1 class="page-title">Admin Panel</h1>
    <h2 class="section-title" id="Installation">Statut des exercices</h2>
    <div class="sub">
        <h3 class="sub-title">Activité 1</h3>
        <p class="text">   
            Vous pouvez activer ou désactiver un exercice !
        </p>
        @if ($exercices[0]->allow == 0)
            <a href="{{ route('active', 1) }}" class="btn m-0">Activer l'activité 1</a>
        @else
            <a href="{{ route('desactive', 1) }}" class="btn btn-danger m-0">Désactiver l'activité 1</a>
        @endif
    </div>
    <div class="sub">
        <h3 class="sub-title">Exercice : Points sur la courbe</h3>
        <p class="text">   
            Vous pouvez activer ou désactiver un exercice !
        </p>
        @if ($exercices[2]->allow == 0)
            <a href="{{ route('active', 3) }}" class="btn m-0">Activer l'exercice des points</a>
        @else
            <a href="{{ route('desactive', 3) }}" class="btn btn-danger m-0">Désactiver l'exercice des points</a>
        @endif
    </div>


</x-app-layout>
