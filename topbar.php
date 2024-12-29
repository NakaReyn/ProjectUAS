<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav mr-auto">
        <!-- Menu Item - Home -->
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <!-- Menu Item - About -->
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <!-- Menu Item - Contact -->
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <!-- Button - Login Admin -->
        <li class="nav-item">
            <a class="btn btn-custom ml-2" href="admin/index.php">
                <i class="fas fa-user-shield"></i> Login Admin
            </a>
        </li>
        <!-- Button - Login Mahasiswa -->
        <li class="nav-item">
            <a class="btn btn-custom ml-2" href="mahasiswa/index.php">
                <i class="fas fa-user-graduate"></i> Login Mahasiswa
            </a>
        </li>
    </ul>
</nav>

<style>
    .btn-custom {
        background-color: #9e1aa0; /* Custom button color */
        color: white; /* Text color */
        border: none; /* Remove border */
    }

    .btn-custom:hover {
        background-color: #8a1a90; /* Darker shade on hover */
        color: white; /* Keep text color white on hover */
    }
</style>