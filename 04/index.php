<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lesson 04</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="header center">Lesson 04</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control" id="photo">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required placeholder="Name" value="<?=$_POST['name']?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required placeholder="Confirm Password">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
        <?php
            $arrUsers = [];

            $fileContent = file_get_contents('users.txt');
            if($fileContent != ''){
                $arrUsers = unserialize($fileContent);
            }
            if(isset($_POST['submit'])){
                if($_POST['name']){
                    if($_POST['password'] === $_POST['confirm_password']){
                        $user = [
                            'name' => $_POST['name'],
                            'password' => md5($_POST['password'])
                        ];
                        if($_FILES['photo']['size'] != 0){
                            $filename = 'images/' . basename($_FILES['photo']['name']);
                            if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){
                                $user['photo'] = $filename;
                            }else{
                                $user['photo'] = 'images/default.jpg';
                            }
                        }
                        $arrUsers[] = $user;
                        $usersStr = serialize($arrUsers);
                        file_put_contents('users.txt', $usersStr);
                    }else{
                        #confirm password error
                    }
                }else{
                    #error name is required
                }

/*                echo "<pre>";
                print_r($_GET);
                echo "<br>";
                print_r($_POST);
                echo "<br>";
                print_r($_REQUEST);
                echo "<br>";
                print_r($_FILES);*/

            }

            echo "<pre>";
            print_r($arrUsers);
        ?>
    </div>


    <?php
    ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>