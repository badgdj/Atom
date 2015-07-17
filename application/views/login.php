<?php
echo "<link rel='stylesheet' type='text/css' href='".base_url('issets/bootstrap/bootstrap.min.css')."'>";
echo "<script src='".base_url('issets/bootstrap/bootstrap.min.js')."'></script>";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo ?></title>
</head>
<body style="background: #2E9AFE">

<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h1 style="color: #fff">Bem Vindo</h1>
            <form method="POST" action="">
            <input type="text" id="Nome" name="Nome" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="text" id="Senha" name="Senha" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button class="btn btn-primary btn-md" type="submit">login <i class="fa fa-sign-in"></i></button> 
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>
</body>
</html>