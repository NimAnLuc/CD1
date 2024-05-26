<header class="header">
    <div class="logo">
        <img src="{{ asset('images/anh.png') }}" alt="Logo">
    </div>
    <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li>
                <a href="#">Category</a>
                    <ul class="sub-menu">
                        <li><a href="#">Subcategory</a></li>
                        <li><a href="#">Subcategory</a></li>

                    </ul>
            </li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="user-options">
        <a href="#">Login |</a>
        <a href="#">| Cart</a>
        <form action="#" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>
</header>
