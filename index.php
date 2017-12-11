<!DOCTYPE html>
<html>
<head>
    <title>Lazy Poll</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tom Klos">
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Lato|Ultra" rel="stylesheet">
    
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--jQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header class="jumbotron text-center lazy">
        <section id="logo" class="img_fluid">
            <img src="img/logo.png" no-repeat alt="logo">
            <h2>Lazy Poll</h2>
        </section>
        <p>The place to create instant polls for (always) free.</p>
    </header>
    <section class="container form-group">
        <form action="#" method="get">
            <input type="text" name="question" placeholder="Type your question here" class="form-control"><br>
            <input type="text" name="option_1" placeholder="Poll option" maxlength="200" tabindex="1" value autocomplete="off" class="form-control"><br>
            <input type="text" name="option_2" placeholder="Poll option" maxlength="200" tabindex="1" value autocomplete="off" class="form-control"><br>
            <input type="text" name="option_3" placeholder="Poll option" maxlength="200" tabindex="1" value autocomplete="off" class="form-control"><br>
            <label class="checkbox_wrapper">Allow multiple poll answers
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
            </label>
            <button type="submit" class="btn btn-primary">Create Poll</button>
        </form>
    </section>
    <footer>
        <ul>
            <li><a href="#">Term of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support</a></li>
        </ul>
    </footer>
</body>
</html>