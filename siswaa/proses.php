<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['aksi'])){

    // ambil data dari formulir
    if($_POST['aksi'] =='add'){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jk'];
    $agama= $_POST['agama'];
    $sekolah_asal = $_POST['sekolah'];
    $tanggal_lahir = $_POST['tanggal'];
    $NoTelp = $_POST['no_telepon'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kodePos = $_POST['kode_pos'];
    $jurusan = $_POST['jurusan'];

    $tanggal_mysql =date("Y-m-d", strtotime($tanggal));
    



    // buat query
    $sql = "INSERT INTO pendaftaran (id_pendaftaran,nama, alamat,jk,agama,sekolah,tanggal,no_telepon,email,desa,kecamatan,kota,provinsi,kode_pos) VALUE ('$nama','$alamat', '$kelamis', '$agama','$sekolah_asal','$tanggal_mysql','$tanggal_lahir','$NoTelp','$email','$desa','$kecamatan','$kabupaten','$provinsi','$kodePos','$jurusan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else if ($_POST['aksi'] =='edit'){
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelamin = $_POST['jk'];
    $agama= $_POST['agama'];
    $sekolah_asal = $_POST['sekolah'];
    $tanggal_lahir = $_POST['tanggal'];
    $NoTelp = $_POST['no_telepon'];
    $email = $_POST['email'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kodePos = $_POST['kode_pos'];
    $jrusan = $_POST['jurusan'];
    $tanggal_mysql =date("Y-m-d", strtotime($tanggal));
    $sql="UPDATE siswaa SET nama ='$nama', alamat ='$alamat', jk ='$kelamin', agama ='$agama', sekolah ='$sekolah_asal', tanggal='$tanggal_mysql',
    No_telepon='$NoTelp', email ='$email', desa ='$desa', kecamatan ='$kecamatan', kabupaten ='$kabupaten', kota ='$provinsi', kode_pos ='$kodePos',jurusan ='$jurusan'
    WHERE id_pendaftaran='$id_pendaftaran'";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}
}
if(isset($_GET['hapus'])){
    $id_pendaftaran = $_GET['hapus'];

    $sql ="DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}

?>
