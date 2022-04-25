<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/filter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12  m-t-4">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Voornaam</th>
                            <th>Tussenvoegsel</th>
                            <th>Achternaam</th>
                            <th>Email</th>
                            <th>tel</th>
                            <th>Berichtt</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            if (isset($_GET['opt'])) {
                                $donatie_id = $_GET['opt'];
                                $sql = "select * from donatie where id = '$donatie_id'";
                                $result = mysqli_query($conn, $sql) or die('error');

                                while ($row = mysqli_fetch_assoc($result)) {

                                    $voornaam = $row["voornaam"];
                                    $tussenvoegsel = $row["tussenvoegsel"];
                                    $achternaam = $row["achternaam"];
                                    $email = $row["email"];
                                    $tel = $row["tel"];
                                    $bericht = $row["bericht"];
                                } ?>

                                <td><?php echo $voornaam ?></td>
                                <td><?php echo $tussenvoegsel ?></td>
                                <td><?php echo $achternaam ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $tel ?></td>
                                <td><?php echo $bericht ?></td>
                            <?php
                            }

                            ?>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    </div>
</body>

</html>