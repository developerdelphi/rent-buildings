<ul class="nav nav-pills flex-column bg-light shadow-sm border-top">
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('/')) ? 'active' : ''}}" href="{{ route('dashboard') }}">
            <i class="fas fa-cogs"></i>
            <span class="d-inline-block">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('users*')) ? 'active' : ''}}" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i>
            <span class="d-inline-block">Usuários</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (request()->is('admin/species*')) ? 'active' : ''}}" href="{{ route('species.index') }}">
            <i class="fas fa-city"></i>
            <span class="d-inline-block">Espécies</span>
        </a>
    </li>
</ul>
