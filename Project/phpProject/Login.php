<?php
$email = '';
$pass = '';
$errors = array('email' =>  '', 'pass'=>'', 'total'=>'');
if (isset($_POST['submit'])){
    // checking username input filled 
    if (empty($_POST['user'])){
        $error['user'] = "Username required <br>";
    }
    else {
        $user = $_POST['user'];
        if (!preg_match('/^[a-zA-Z\w]+$/', $user)){
            $error['user'] = "Username must be include just lettes, numbers or underscore <br>";
        }
    }
    // checking Password input filled 
    if (empty($_POST['pass'])){
        $error['pass'] = "Password required <br>";
    }
    else {
        $pass = $_POST['pass'];
        if (!preg_match('/^[a-zA-Z\w]+$/', $pass)){
            $error['pass'] = "Password must be include just lettes, numbers or underscore <br>";
        }
    }

    if (array_filter($error)){
        $error['total'] = "There are some errors in your sign-up form";
    }
    else {
        header("Location: project.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">

    <style>
        html,
        body {

            width: 100%;
            background-color: #594789;
            height: 100vh;
            color: #fbe4d8;
        }
    </style>
</head>

<body>
    <div >
        <p><?php echo $error['total'];  ?></p>
    </div>
    <div >
        <p><?php echo $error['user'];  ?></p>
    </div>
    <div >
        <p><?php echo $error['pass'];  ?></p>
    </div>
    <div class="container-fluid  h-100 d-flex flex-column justify-content-center align-items-center">

        <div  style="border-radius: 10px; border: whitesmoke solid 5px;  padding-top: 50px !important;padding-bottom: 100px !important; padding-left: 30px !important; padding-right: 30px !important;  display: flex;  padding: 10px; flex-direction: column;">
            <form action="#" method="post">
                <h1 style="text-align: center; font-family: mistral; font-size: 4rem; color: #ccad18;">anbe</h1>
                <h5> ورود | ثبت نام</h5>
                <p>سلام!</p>
                <p></p>


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ایمیل خود را وارد کنید</label>
                    <input type="Email" class="form-control" name="Email" >


                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">رمز عبور</label>
                    <input type="password" class="form-control" name="Password" >


                </div>

                <button type="submit" name="submit"  class="btn btn-warning w-100 " style="color: aliceblue;">ورود</button>

            </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>