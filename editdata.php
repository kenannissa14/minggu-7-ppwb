<?php
include('koneksi.php');

// Cek apakah parameter "edit" telah dikirimkan melalui URL
if (isset($_GET['edit'])) {
    $nimToEdit = $_GET['edit'];

    // Query untuk mengambil data mahasiswa berdasarkan NIM
    $query = "SELECT * FROM mahasiswa WHERE nim = '$nimToEdit'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Ambil data mahasiswa dari hasil query
        $mahasiswa = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    // Redirect ke halaman utama jika parameter "edit" tidak ada
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <style>
        /* Style CSS sesuai kebutuhan */
    </style>
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="proses_edit.php" method="post" onsubmit="showSuccessPopup()">
    <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim']; ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" required>

    <label for="nim">NIM:</label>
    <input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>" required readonly>

    <label for="program_studi">Program Studi:</label>
    <input type="text" name="program_studi" value="<?php echo $mahasiswa['program_studi']; ?>" required>

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
