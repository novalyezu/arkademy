<?php
include "enam.php";

$db = new mysqli('localhost','root','','gudang');
$hasil = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <title>Soal 7</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Noval-7</a>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Products</h4>
                    </div>
                    <div class="card-body">
                        <table class="table thead-light table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($hasil->num_rows > 0) {
                                    while($data = $hasil->fetch_array()) { ?> 
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['category_name']; ?></td>
                                        <td><?php echo $data['products']; ?></td>
                                    </tr>
                                    <?php 
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>