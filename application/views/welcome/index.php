<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITENAME ?> | <?php echo $data['description'] ?> </title>
    <style>
    body{
        width: 80%;
        margin: auto;
    }
    .header{
        margin-top:30px;
        font-size: 50px;
        font-weight: bold;
        text-align: center;
    }
    </style>
</head>
<body>  
    <div class="header">
        <?php echo $data['title'] ?>  microframework
    </div>
    <div class="content-description">
    <p   align="center">A microframework for building web application with PHP.  To use this framework kindly <a href="https://github.com/OMENSAH/barePHP/blob/master/README.md#how-to-use--barephp">use the docs</a></p>

    </div>

    
</body>
</html>