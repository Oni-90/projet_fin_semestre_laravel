<li class="nav-item">
    <a href="{{ route('etudiant.liste') }}"
       class="nav-link {{ Request::is('etudiant*') ? 'active' : '' }}">
        <p>Etudiants</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('filiere.liste_filiere') }}"
       class="nav-link {{ Request::is('filiere*') ? 'active' : '' }}">
        <p>Filieres</p>
    </a>
</li>


