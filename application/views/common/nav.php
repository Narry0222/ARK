<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() . 'home'; ?>">
            <img src="<?= config_item('root_dir'); ?>assets/images/maq.JPG" width="125" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item" id="106a6c241b8797f52e1e77317b96a201">
                    <a class="nav-link" href="<?= base_url() . 'home'; ?>">Home</a>
                </li>
                <li class="nav-item" id="46b3931b9959c927df4fc65fdee94b07">
                    <a class="nav-link" href="<?= base_url() . 'about'; ?>">About Us</a>
                </li>
                <li class="nav-item" id="10cd395cf71c18328c863c08e78f3fd0">
                    <a class="nav-link" href="<?= base_url() . 'services'; ?>">Services</a>
                </li>
                <li class="nav-item" id="fac04ca68a48af91f0290001604a2463">
                    <a class="nav-link" href="<?= base_url() . 'clients'; ?>">
                        Clients
                    </a>
                </li>
                <li class="nav-item" id="adf78c4508138a91472dcc053ab8eed4">
                    <a class="nav-link" href="<?= base_url() . 'careers'; ?>">Careers</a>
                </li>
                <li class="nav-item" id="2f8a6bf31f3bd67bd2d9720c58b19c9a">
                    <a class="nav-link" href="<?= base_url() . 'contact'; ?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() . 'register_exp'; ?>">Experienced</a>
                        <a class="dropdown-item" href="<?= base_url() . 'register_fshr'; ?>">Freshers</a>
                        <a class="dropdown-item" href="#">Student</a>
                        <a class="dropdown-item" href="#">Business</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

