<?php 

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['submit'])) { 

    $input_nama_minuman = inputData($_POST['nama_minuman']); 
    $input_daerah_minuman = inputData($_POST['daerah_minuman']); 

    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman); 
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman); 

    // Validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) { 
        echo "<script>
                alert('Field is required');
                window.location='?page=minumanAdd';
              </script>"; 

    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) { 
        echo "<script>
                alert('Only letters and white space allowed');
                window.location='?page=minumanAdd';
              </script>"; 

    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) { 
        echo "<script>
                alert('Field is required');
                window.location='?page=minumanAdd';
              </script>"; 

    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) { 
        echo "<script>
                alert('Only letters and white space allowed');
                window.location='?page=minumanAdd';
              </script>"; 

    } else { 

        // Validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));
        if ($cek > 0) { 
            echo "<script>
                    alert('Data sudah tersedia');
                    window.location='?page=minumanAdd';
                  </script>"; 
        } else { 

            // Buat query
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) 
                      VALUES ('$nama_minuman', '$daerah_minuman')"; 

            $sql = mysqli_query($conn, $query); 

            // Apakah proses simpan berhasil?
            if ($sql) { 
                echo "<script>
                        alert('Data berhasil ditambah!');
                        window.location='?page=minuman';
                      </script>"; 
            } else { 
                echo "<script>
                        alert('Gagal menambah data!');
                        window.location='?page=minuman';
                      </script>"; 
            } 
        } 
    } 
} 
?>