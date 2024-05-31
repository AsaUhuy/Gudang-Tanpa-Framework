<div class="container vstack gap-2">
    <div>   
        <p class="fs-3" style="float:left">Barang</p>
        <nav aria-label="breadcrumb" style="float:right">
            <ol class="breadcrumb" >
                <li class="breadcrumb-item"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="index.php?av=beranda">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
            </ol>
        </nav>
    </div>
    <div class="shadow-sm bg-body-light rounded border-top border-3 vstack gap-2">
        <div class="container-fluid">
            <div class="m-3">
                <span style="float:left">
                    <p class="fs-5">Data Barang</p>
                </span>
                <span style="float:right">
                    <a class="btn text-white" style="background-color:#00C1FE;" href="index.php?av=tambahdata">Tambah Data</a>
                </span>
            </div>
        </div>
        <span class="border-top"></span>
        <div>
            <div class="m-3">
                <table class="table table-striped">
                    <tr>
                        <th>NO</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>OPSI</th>
                    </tr>

                    <?php
                    require "koneksi.php";
                    $no = 1;
                    $sql = mysqli_query($conn, "select * from tbbarang");

                    while($data = mysqli_fetch_array($sql)){
                    ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['namabarang']; ?></td>
                            <td><?php echo $data['Harga']; ?></td>
                            <td><?php echo $data['Stok']; ?></td>
                            <td><?php echo $data['Kategori']; ?></td>
                            <td class="fs-5">
                                <a href="index.php?av=editdata&id=<?php echo $data['id'] ?>" class="text-warning"><i class='bx bxs-edit'></i></a>
                                <a href="index.php?av=hapusdata&id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin data ini akan dihapus?')" class="text-danger"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                    
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

