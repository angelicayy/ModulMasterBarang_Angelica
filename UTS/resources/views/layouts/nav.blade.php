@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2C3E50;">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-book me-2"></i>Booksshop</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-4 col-md-auto"><a href="{{ route('home') }}"
                        class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a></li>
                <li class="nav-item col-4 col-md-auto"><a href="{{ route('items.index') }}"
                        class="nav-link @if ($currentRouteName == 'items.index') active @endif">Books</a></li>
                <li class="nav-item col-4 col-md-auto">
                    <a href="{{ url('/') }}" class="nav-link @if ($currentRouteName == 'reviews') active @endif">Reviews</a>
                </li>
            </ul>

            <hr class="d-md-none text-white-50">

            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                    class="bi-person-circle me-1"></i> My Profile</a>
        </div>
    </div>
</nav>

