<?php
    require "koneksi.php";

    if(isset($_POST['submit'])){
        $namaBarang = $_POST['namaBarang'];
        $harga = $_POST['harga'];
        $stokBarang = $_POST['stokBarang'];
        $kategori = $_POST['kategori'];

        $query = mysqli_query($conn, "INSERT INTO tbbarang VALUES('', '$namaBarang', '$harga', '$stokBarang', '$kategori')");
        header('location:index.php?av=databarang');
    }
?>

<div class="container vstack gap-2">
    <div>   
        <h3 style="float:left">Barang</h3>
        <nav aria-label="breadcrumb" style="float:right">
            <ol class="breadcrumb" >
                <li class="breadcrumb-item"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="index.php?av=beranda">Beranda</a></li>
                <li class="breadcrumb-item"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="index.php?av=databarang">Data Barang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
    </div>
    <div class="shadow-sm bg-body-light rounded-top border-top border-3 border-danger-subtle">
        <p class="fs-5 pt-2 ms-3">Tambah Data Barang</p>
        <hr>
        <div class="m-4">
            <form action="" method="post">
                <div class="pt-2">
                    <div class="mb-3 row">
                        <label for="namaBarang" class="col-sm-2 col-form-label"><b>Nama Barang</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="namaBarang" type="text" placeholder="Nama Barang" aria-label="default input example">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label"><b>Harga</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="harga" type="number" placeholder="Harga" aria-label="default input example">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label"><b>Stok Barang</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="stokBarang" type="number" placeholder="Stok Barang" aria-label="default input example">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label"><b>Kategori</b></label>
                        <div class="col-sm-10">
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option value="">Pilih Kategori</option>
                                <option value="Pakain Wanita">Pakain Wanita</option>
                                <option value="Pakaian Pria">Pakaian Pria</option>
                                <option value="Tas Wanita">Tas Wanita</option>
                                <option value="Tas Pria">Tas Pria</option>
                                <option value="Sepatu Wanita">Sepatu Wanita</option>
                                <option value="Sepatu Pria">Sepatu Pria</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn text-white" style="background-color:plum;" name="submit" type="submit">Tambah</button>
                        <button class="btn btn-secondary" name="reset" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>