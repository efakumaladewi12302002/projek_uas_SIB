<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_karyawan = $_POST['nama_karyawan'];
$no_tlpn = $_POST['no_tlpn'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_karyawan (nama_karyawan,no_tlpn)
values ('$nama_karyawan','$no_tlpn')");
if ($insert_data) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di simpan');
}