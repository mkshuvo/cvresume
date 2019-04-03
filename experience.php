<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <title>Experience</title>         
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>     
    <body> 
        <?php
        require('db.php');
        //require('auth.php');
    ?> 
        <div class="container">
            <div class="row">
                <div class="offset-3 col-md-6 ">
                    <h3>Experience Information Form</h3>
                    <form role="form"> 
                        <div class="form-group"> 
                            <label for="exampleInputEmail1">Email address</label>                             

                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="exampleInputPassword1">Password</label>                             

                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="exampleInputFile">File input</label>                             

                            <input type="file" id="exampleInputFile"> 
                            <p class="form-text">Example block-level help text here.</p> 
                        </div>                         

                        <div class="form-check"> 
                            <input class="form-check-input" type="checkbox" value="" id="exampleInputCheck1"> 
                            <label class="form-check-label" for="exampleInputCheck1">                        Check me out                    </label>                             
                        </div>                         

                        <button type="submit" class="btn btn-primary">Submit</button>                         
                    </form>                                          
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>     
</html>