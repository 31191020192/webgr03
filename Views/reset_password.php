<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../font/font.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/beac25d89a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/style-passrecover.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../logo/favicon.png">
    <title>HNT - Style</title>
</head>

<body>
    <script>
        $(function() {
            $("#header").load("../common/header.php");
            $("#footer").load("../common/footer.php");
        });
    </script>
    <div id="header"></div>
    <div class="container-fluid" style="margin-top: 60px">
        <?php if(isset($_POST['valid'])) {
            if(!$_POST['valid'] == 'true'){
                echo '<h2 id="dont-do-that" style="margin: 100px" class=" text-center text-danger">Bro, dont do that</h2>';
            }
            else{
                echo '<div class="form-container d-flex justify-content-center">
                <form action="" class="form-group">
                    <label for="name"><b>Your new password</b></label>
                    <input class="text-box form-control mx-auto" type="password" placeholder="Enter your new password" name="password" required>
                    
                    <label for="password"><b>Repeat your password</b></label>
                    <input class="text-box form-control mx-auto" type="password" placeholder="Repeat your password" name="repeatpassword" id="password" required>
        
                    <input class="btn" type="submit" id="btnsignin" value="Sign In" name="signin"></input>
                </form>
            </div>';
            }}
            else{
                echo '<h2 id="dont-do-that" style="margin: 100px" class=" text-center text-danger">Bro, dont do that</h2>';
            }
        ?>
    </div>
    <div id="footer"></div>
</body>

</html>