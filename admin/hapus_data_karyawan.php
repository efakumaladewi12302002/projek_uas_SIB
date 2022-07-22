<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_guru = $_GET['id_karyawan'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM tbl_karyawan where id_karyawan=$id_karyawan");
if ($hapus_data) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di Ubah');
}