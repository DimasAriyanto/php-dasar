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

function search($keyword){
    $query = "SELECT * FROM mahasiswa 
                WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            kelas LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            ealamat LIKE '%$keyword%'
            ";

    return query($query);
}

function registrasi($data) {
    global $connection;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connection, $data["password"]);
    $password2 = mysqli_real_escape_string($connection, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo " <script>
                alert('username sudah terdaftar');
                </script>";
                return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo " <script>
                alert ('konfirmasi password tidak sesuai');
                </script> ";
                return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // masukkan ke dalam database user
    mysqli_query($connection, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($connection);
}

?>