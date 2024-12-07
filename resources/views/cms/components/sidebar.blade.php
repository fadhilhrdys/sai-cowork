<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
        <a class="nav-link " href="{{ ('/cms/dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('media.index') }}">
                <i class="bi bi-card-image"></i>
                <span>Media</span>
            </a>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#article-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-newspaper"></i><span>Article</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="article-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('article.index') }}">
                        <i class="bi bi-circle"></i><span>List of Article</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('article.create') }}">
                        <i class="bi bi-plus-lg"></i><span>Add New Article</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#cities-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-pin-map"></i><span>Cities</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="cities-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>List of City</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-plus-lg"></i><span>Add New City</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#places-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-building"></i><span>Places</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="places-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>List of Place</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-plus-lg"></i><span>Add New Place</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#workspaces-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Workspaces</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="workspaces-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>List of Workspace</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-plus-lg"></i><span>Add New Workspace</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin_logout') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside>
