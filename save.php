<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "scanai");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$patient_id = $_POST['patient_id'];
$name       = $_POST['name'];
$birthdate  = $_POST['birthdate'];
$gender     = $_POST['gender'];

// Upload gambar
$image_name = null;
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Biar nama file unik + aman
    $ext = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);
    $image_name = uniqid('img_') . "." . $ext;
    $target_file = $target_dir . $image_name;

    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
}

// Simpan ke database
$sql = "INSERT INTO pasien (patient_id, name, birthdate, gender, image) 
        VALUES ('$patient_id', '$name', '$birthdate', '$gender', '$image_name')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data pasien berhasil disimpan!'); window.location='index.html';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
