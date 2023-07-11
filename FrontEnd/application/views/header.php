<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 50px;
        margin-right: 10px;
    }

    nav ul {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav ul li:last-child {
        margin-right: 0;
    }

    nav ul li a {
        display: flex;
        align-items: center;
        color: #333;
        text-decoration: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        transition: background-color 0.3s ease;
        justify-content: center;
    }

    nav ul li a:hover {
        background-color: #f0f0f0;
    }

    nav ul li a i {
        font-size: 25px;
    }

    nav ul li a:not(:last-child) {
        margin-right: 10px;
    }

    nav ul li a span {
        display: none;
    }

    @media screen and (min-width: 768px) {
        .logo {
            margin-right: auto;
        }

        nav ul li a i {
            display: none;
        }

        nav ul li a span {
            display: inline;
            margin-left: 5px;
        }
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        border-radius: 5px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

</style>

<head>   
    <link href="<?php echo site_url('assets/font/css/all.css') ?>" rel="stylesheet">
</head>

<header>
  <div class="logo">
    <img src="logo.png" alt="Logo de l'entreprise">
    <h1>Nom de l'entreprise</h1>
  </div>
  <nav>
    <ul>
      <li><a href="#" title="home"><i class="fas fa-home"></i></a></li>
      <li><a href="#" title="infos entreprise"><i class="fas fa-user-circle"></i></a></li>
      <li><a href="#" title="ecriture"><i class="fas fa-pen"></i></a></li>
      <li><a href="<?php echo site_url('index.php/Log/logout') ?>" title="log out"><i class="fas fa-sign-out-alt"></i></a></li>
      <li></li>
      <li class="dropdown">
        <a href="#" title="menu déroulant"><i class="fas fa-ellipsis-v"></i></a>
        <div class="dropdown-content">
            <a href="#" title="compte général"><i class="fas fa-table"></i></a>
            <a href="#" title="code journal"><i class="fas fa-book"></i></a>
        </div>
      </li>
    </ul>
  </nav>
</header>

