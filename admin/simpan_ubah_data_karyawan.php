<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_guru = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$no_tlpn = $_POST['no_tlpn'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_karyawan set nama_guru='$nama_karyawan', no_tlpn='$no_tlpn' where id_karyawan=$id_karyawan");
if ($update_data) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di Ubah');
}