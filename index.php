<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
        <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="#" class="navbar-brand">PHP 1 Exercise</a>
        <ul class="navbar-nav">
            <?php
            $links = ['Home', 'About', 'Galery', 'Contact'];
            // for ($i = 0; $i < count($links); $i++) {
            //     echo '<li class="nav-item"><a href="" class="nav-link">' . $links[$i] . '</a></li>';
            // }
            ?>

            <?php for ($i = 0; $i < count($links); $i++) : ?>
                <li class="nav-item"><a href="#" class="nav-link"><?php echo $links[$i] ?></a></li>
            <?php endfor; ?>

        </ul>
    </nav>
    <div class="jumbotron text-center">
        <h2>Form Validation</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="validate.php" method="post">
                    <input type="text" name="username" placeholder="username" class="form-control" required><br>
                    <input type="email" name="email" placeholder="email" class="form-control" required><br>
                    <select name="year">
                        <?php for ($i = 1965; $i < 2005; $i++) : ?>
                            <option value=" <?php echo $i ?>  ">Year of birth <?php echo $i ?></option>
                        <?php endfor; ?>
                    </select>
                    <input type="radio" name="gender" value="male" required>Male
                    <input type="radio" name="gender" value="female">Female <br><br>

                    <p>Programing languages</p>
                    <input type="checkbox" name="languages[]" value="php">Php
                    <input type="checkbox" name="languages[]" value="js">Js
                    <input type="checkbox" name="languages[]" value="java">Java

                    <button type="submit" name="subBtn" class="btn btn-info form-control">Save</button>
            </div>
        </div>
    </div>
</body>

</html>
