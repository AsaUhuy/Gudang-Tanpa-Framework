<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Asavan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/jquery.js"></script>
    <script src="nav.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i>  <a href="index.php?"><img src="img/logo.png" alt="" width="80px"></a></div>
       
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="index.php?" class="nav_logo"> 
                    <i class='nav_logo-icon'><img src="img/logoA.png" alt="" width="30px"></i> 
                    <span class="nav_logo-name">Asa 18329</span> 
                </a>
                <div class="nav_list"> 
                    <a href="index.php?av=beranda" class="nav_link active" >  
                        <i class='bx bx-home nav_icon' ></i> 
                        <span class="nav_name">Beranda</span>
                    </a> 
                    <a href="index.php?av=profil" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Profil</span> 
                    </a> 
                    <a href="index.php?av=databarang" class="nav_link"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Data Barang</span> 
                    </a> 
                </div>
            </div> 
        </nav>
    </div>

    
    <div class="container pt-3 mt-3">
        <?php
            switch (@$_GET['av']) {
                case 'beranda':
                    require "beranda.php";
                    break;

                case 'profil':
                    require "profil.php";
                    break;

                case 'databarang':
                    require "databarang.php";
                    break;

                case 'tambahdata':
                    require "tambahdata.php";
                    break;
                
                case 'editdata':
                    require "editdata.php";
                    break;

                case 'hapusdata':
                    require "hapusdata.php";
                    break;

                default:
                    require "beranda.php";
                    break;
            }
        ?>
    </div>

    <footer class="fixed-bottom p-2" style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #00C1FE 96.69%);">
        <div class="">
            <span class="ms-4" style="float:left">
                <span class="fw-semibold">Copyright &copy; <?php echo date('Y') ?><a style="color:white;" href="index.php?"> Asa 18329</a></span>. All right reserved.
            </span> 
            <span class="text-uppercase fw-semibold me-4"style="float:right">
                pplg smkn 1 bawang
            </span>
        </div>
    </footer>
</body>
</html>