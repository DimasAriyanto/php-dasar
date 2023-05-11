<?php 

// ambil data dari database
$connection = mysqli_connect("localhost", "root", "", "phpdasar");

// menampilkan database
function query($query) {
    // mengambil variable connection dari global scope
    global $connection;

    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function add($data) {
    // mengambil variable connection dari global scope
    global $connection;

     // ambil data dari tiap element dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // query insert database
    $query = "INSERT INTO mahasiswa VALUES  ('','$nama','$nim','$kelas','$email','$alamat')";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);

}

function delete($id) {
    global $connection;

    mysqli_query($connection, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($connection);
}

function edit($data) {
    // mengambil variable connection dari global scope
    global $connection;

     // ambil data dari tiap element dalam form
    $id = $data['id'];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // query insert database
    $query = "UPDATE mahasiswa SET 
            nama = '$nama',
            nim = '$nim',
            kelas = '$kelas',
            email = '$email',
            alamat = '$alamat'
            WHERE id = '$id'";"
            ";
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

?>