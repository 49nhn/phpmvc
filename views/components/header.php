<header>
    <nav class="navbar bg-blue-800 text-white fixed z-30 ">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-blue-800 rounded-box w-52">
                    <li><a class="text">Item 1</a></li>
                    <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-2xl">NamNguyenStore</a>
        </div>
        <div class="navbar-center hidden lg:flex ">
            <ul class="menu menu-horizontal  menu-md px-1">
                <li class=""><a class="focus:text-white">About</a></li>
                <li tabindex="0" class=" hover:text-white">
                    <details>
                        <summary>Categories</summary>
                        <ul class="p-2 text-white" style="background-color:#2563EB;">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Contact</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="/login">Login</a>
        </div>
    </nav>
    <?php
    if (isset($_SERVER['REQUEST_URI']) && ($_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/')) {
      include_once 'hero.php';
    }
    ?>
</header>