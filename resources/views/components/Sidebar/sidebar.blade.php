<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="{{ (request()->is('home')) ? 'nav-link collapsed' : 'nav-link' }}" href="{{route('home')}}">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->
        <li class="nav-item">
            <a class="{{ (request()->is('application')) ? 'nav-link collapsed' : 'nav-link' }}"
                href="{{route('application')}}">
                <i class="bi bi-file-earmark-text"></i>
                <span>Application</span>
            </a>
        </li><!-- End Home Nav -->
    </ul>

</aside><!-- End Sidebar-->