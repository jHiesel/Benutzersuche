<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<?php


?>


</head>
<body>

<div class="container">
    <h1>Benutzerdaten Suchen</h1>

    <div class = "row">
<div>
    <p>Suche:</p>
</div>

<form method="post" action="/">
        <div class="col-sm-6 mt-5">
            <input name = "filter"
               type="text"
               placeholder="suche"
               class="form-control"
            >
        </div>

        <div class = "col-sm-3 ">
            <input name = "submit"
               type="submit"
               class="btn btn-primary btn-block"

            >

            <a
                    href="/"
                    class="btn btn-secondary btn-block"
            >
                löschen
            </a>
        </div>
</form>
    </div>
    <div class="row">
        <div>
            <div>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Birthdate</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $key => $value){


                        if (str_contains($value['email'],$filter)){
                            tableController::tableFromArray($value, $filter);
                        }
                    }

                    ?>


                </table>
            </div>
        </div>
    </div>



</div>
</body>
</html>