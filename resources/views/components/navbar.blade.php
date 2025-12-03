<header class="navbar-container">
    <nav class="navbar">
        <!-- Logo -->
        <a href="/" class="navbar-logo">
            <img src="{{ asset('Assets/logo.png') }}" alt="StarRoom">
            <span>StarRoom</span>
        </a>

        <!-- Menu Button (Mobile) -->
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Links -->
        <div class="navbar-links" id="navbarLinks">
            <a href="/" class="nav-link">Beranda</a>
            <a href="/HomePage/pilihkota" class="nav-link">Kota</a>
            <a href="/HomePage/pilihhotel" class="nav-link">Hotel</a>
            <a href="/dashboard" class="nav-link">Dashboard</a>

            @guest
                <a href="/login" class="nav-btn">Login</a>
            @endguest
        </div>

        @auth
            <!-- User Dropdown Menu -->
            <div class="nav-user-dropdown" id="userDropdown">
                <button type="button" class="user-trigger" id="userTrigger" aria-haspopup="true"
                    aria-controls="dropdownMenu" aria-expanded="false">

                    <div class="user-avatar">{{ substr(Auth::user()->name, 0, 1) }}</div>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                    <svg class="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>

                <div class="dropdown-menu" id="dropdownMenu">
                    <div class="dropdown-header">
                        <div class="dropdown-user-info">
                            <div class="dropdown-avatar">{{ substr(Auth::user()->name, 0, 1) }}</div>
                            <div>
                                <p class="dropdown-username">{{ Auth::user()->name }}</p>
                                <p class="dropdown-email">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a href="/dashboard" class="dropdown-link">
                        <span class="dropdown-icon">📊</span>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('profile.edit') }}" class="dropdown-link">
                        <span class="dropdown-icon">👤</span>
                        <span>Edit Profile</span>
                    </a>
                    <div class="dropdown-divider"></div>

                    <a href="#" class="dropdown-link logout-link" id="logoutLink">
                        <span class="dropdown-icon">🚪</span>
                        <span>Logout</span>
                    </a>

                    <form id="logoutForm" method="POST" action="{{ route('logout') }}" class="d-none" aria-hidden="true">
                        @csrf
                    </form>
                </div>
            </div>
        @endauth
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navbarLinks = document.getElementById('navbarLinks');

        if (menuToggle && navbarLinks) {
            menuToggle.addEventListener('click', () => {
                navbarLinks.classList.toggle('active');
            });

            // Close mobile menu when link is clicked
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    navbarLinks.classList.remove('active');
                });
            });
        }

        // User Dropdown Menu
        const userTrigger = document.getElementById('userTrigger');
        const dropdownMenu = document.getElementById('dropdownMenu');

        if (userTrigger && dropdownMenu) {
            userTrigger.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdownMenu.classList.toggle('active');

                // Rotate arrow
                const arrow = userTrigger.querySelector('.dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdownMenu.classList.contains('active') ?
                        'rotate(180deg)' : '';
                }
            });

            // Prevent clicks inside dropdown from closing it
            dropdownMenu.addEventListener('click', (e) => {
                e.stopPropagation();
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', () => {
                dropdownMenu.classList.remove('active');
                const arrow = userTrigger.querySelector('.dropdown-arrow');
                if (arrow) arrow.style.transform = '';
            });

            // Close dropdown when clicking dropdown links
            dropdownMenu.querySelectorAll('.dropdown-link').forEach(link => {
                link.addEventListener('click', () => {
                    dropdownMenu.classList.remove('active');
                    const arrow = userTrigger.querySelector('.dropdown-arrow');
                    if (arrow) arrow.style.transform = '';
                });
            });

            // Logout functionality
            const logoutLink = document.getElementById('logoutLink');
            const logoutForm = document.getElementById('logoutForm');
            if (logoutLink && logoutForm) {
                logoutLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    dropdownMenu.classList.remove('active');
                    const arrow = userTrigger.querySelector('.dropdown-arrow');
                    if (arrow) arrow.style.transform = '';
                    logoutForm.submit();
                });
            }
        }
    });
</script>
