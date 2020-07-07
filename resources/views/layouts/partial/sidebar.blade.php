<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
        Mamma's Kitchen
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/slider') }}">
                <i class="material-icons">slideshow</i>
                <p>Sliders</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/category*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/category') }}">
                <i class="material-icons">content_paste</i>
                <p>Categories</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/item') }}">
                <i class="material-icons">library_books</i>
                <p>Items</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/reservation') }}">
                <i class="material-icons">chrome_reader_mode</i>
                <p>Reservations</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}">
                <a class="nav-link" href="{{ url('admin/contact') }}">
                <i class="material-icons">message</i>
                <p>Contact Message</p>
                </a>
            </li>
        </ul>
    </div><!--sidebar-wapper -->
</div><!--sidebar-->