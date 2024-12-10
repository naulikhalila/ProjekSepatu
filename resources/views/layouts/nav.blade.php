@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark " style="background-color: maroon
">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1" style="font-family: Georgia, 'Times New Roman', Times, serif">
            <i class="bi-hexagon-fill me-2"></i> Data Master</a>
        <button type="button" class="navbar-toggler" data-bstoggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                        class="nav-link @if ($currentRouteName == 'home') active @endif" style="font-family: Georgia, 'Times New Roman', Times, serif">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}"
                        class="nav-link
@if ($currentRouteName == 'employees.index') active @endif" style="font-family: Georgia, 'Times New Roman', Times, serif">Employee</a></li>
            </ul>
            <hr class="d-md-none text-white-50">
            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto">
                <i class="bi bi-balloon-heart" style="font-family: Georgia, 'Times New Roman', Times, serif"></i> My Profile</a>
        </div>
    </div>
</nav>
