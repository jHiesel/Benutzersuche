<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">


    </head>
    <body>
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                        <?php
                            foreach ($data as $key => $value){
                                if ($value['id'] == $_GET['userId'] ){
                                    echo "<tr>";
                                        echo '<td>'. $value['firstname']." ".$value['lastname'] ."</td>";
                                        echo "<td>". $value['email']."</td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                </table>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Birthdate</th>
                            <th>Phone</th>
                            <th>Street</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($data as $key => $value){
                            if ($value['id'] == $_GET['userId'] ){
                                echo "<tr>";
                                    echo "<td>". $value['birthdate']."</td>";
                                    echo "<td>". $value['phone']."</td>";
                                    echo "<td>". $value['street']."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
            </table>
            </div>
                <div>
                    <a href="/?currentSearch=<?= $searchBuffer ?>" class="btn btn-primary btn-block"> zurück </a>
                </div>
        </div>
    </body>
</html>