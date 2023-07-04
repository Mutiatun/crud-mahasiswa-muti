<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "delete from mahasiswa where id=$id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
                
        header('Location: index.php');
        // echo '<script> alert("Berhasil Menghapus Data"); window.location = index.php </script>';   

    } else {
        die(mysqli_error($koneksi));
    }
}

?>