<?php
require "koneksi.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stokBarang = $_POST['stokBarang'];
    $kategori = $_POST['kategori'];

    $query = mysqli_query($conn, "UPDATE tbbarang SET namabarang = '$namabarang', Harga = '$harga', Stok = '$stokBarang', Kategori = '$kategori' WHERE  id = '$id' ");
    header('location: index.php?av=databarang');
} else {
    $id = $_GET['id'];
    $querytampil = mysqli_query($conn, "SELECT * FROM tbbarang WHERE id = '$id' ");
    while ($data = mysqli_fetch_array($querytampil)) {
        $namabarang = $data['namabarang'];
        $harga = $data['Harga'];
        $stokBarang = $data['Stok'];
        $kategori = $data['Kategori'];
    }
}
?>

<div class="container vstack gap-2">
    <div>
        <h3 style="float:left">Barang</h3>
        <nav aria-label="breadcrumb" style="float:right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="index.php?av=beranda">Beranda</a></li>
                <li class="breadcrumb-item"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="index.php?av=databarang">Data Barang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
    </div>
    <div class="shadow-sm p-4 mb-3 bg-body-light rounded-top border-top border-3">
        <h5>Edit Data Barang</h5>
        <div>
            <hr>
            <form action="" method="post">
                <div class="pt-2">
                    <input type="text" name="id" class="form-control" value="<?php echo $id ?>" hidden>
                    <div class="mb-3 row">
                        <label for="namabarang" class="col-sm-2 col-form-label"><b>Nama Barang</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="namabarang" type="text" placeholder="Nama Barang" aria-label="default input example" value="<?php echo $namabarang ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label"><b>Harga</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="harga" type="number" placeholder="Harga" aria-label="default input example" value="<?php echo $harga ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stokBarang" class="col-sm-2 col-form-label"><b>Stok Barang</b></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="stokBarang" type="number" placeholder="Stok Barang" aria-label="default input example" value="<?php echo $stokBarang ?>">
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
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn text-white" style="background-color:plum;" name="submit" type="submit">Simpan</button>
                        <button class="btn btn-secondary" name="reset" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>