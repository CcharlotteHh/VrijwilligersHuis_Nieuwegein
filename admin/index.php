<?php
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="categorie" class="col-lg-2">Selecteer een categorie</label>
                    <select name="categorie" class="categorie">
                        <option>Select</option>
                        <?php
                        $sql = "select category_id, naam from categorie";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $row['category_id'] ?>"><?php echo $row['naam'] ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Email</th>
                        <th>categorie</th>
                    </tr>
                </thead>
           
            <tbody>
                <?php
                if (isset($_POST['submit'])){
                    $categorie = $_POST['categorie'];

                    if($categorie != ""){
                        $query = "select donatie.id, donatie.voornaam, donatie.tussenvoegsel, donatie.achternaam, donatie.email, donatie.category_id, categorie.naam as 'categorie.naam'
                        FROM donatie
                        INNER JOIN categorie ON donatie.category_id = categorie.category_id
                        where categorie.category_id = '$categorie';
                        
                        ";

                        $data = mysqli_query($conn, $query) or die('error');
                        
                        if(mysqli_num_rows($data)>0){
                                while($row = mysqli_fetch_assoc($data)){
                                    $voornaam = $row['voornaam'];
                                    $tussenvoegsel = $row['tussenvoegsel'];
                                    $achternaam = $row['achternaam'];
                                    $email = $row['email'];
                                    $categorie = $row['categorie.naam'];
                                    ?>
                                    <tr>
                                        <td><?php echo $voornaam; ?></td>
                                        <td><?php echo $tussenvoegsel; ?></td>
                                        <td><?php echo $achternaam; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $categorie; ?></td> 
                                    <tr>
                                    <?php
                                    
                                   
                                }
                        }
                        else{

                        }

                    }
                }
                ?>
            </tbody>
            </table>
        </div>

    </div>
</body>

</html>