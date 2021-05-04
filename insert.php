<?php

include 'koneksi.php';

if (isset($_REQUEST['simpan'])) {
                    $semester = $_REQUEST['semester'];
                    $ipk   = $_REQUEST['ipk'];

                    $query = mysqli_query($conn,"INSERT INTO `indeks`(
                                                `id`,
                                                `semester`,
                                                `ipk`,
                                                `level`)
                                                 VALUES (
                                                 '',
                                                 '$semester',
                                                 '$ipk',
                                                 'pengguna')");
                    if ($query) {
                        echo "<b>Data berhasil diinput | Silahkan login</b>";
                    }else{
                         echo "<b>Data gagal diinputkan</b>";
                    }
                }
?>