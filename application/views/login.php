<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="David B. Montecillo">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() . 'css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'css/bootstrap-theme.min.css'; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() . 'css/login.css'; ?>" rel="stylesheet">
   
   <!-- Jquery Validator -->
   <script src="<?php echo base_url() . 'js/jquery-1.9.1.js'; ?>" ></script>
   <script src="<?php echo base_url() . 'js/jquery.validate.min.js'; ?>" ></script>
   <script src="<?php echo base_url() . 'js/additional-methods.min.js'; ?>" ></script>  
   <script type="text/javascript">
    $(function(){
        var validCharactersRegex = /^[a-z][- a-z]*[- ][- a-z]*[a-z]$/i;
        function fullname_valid(value) {
            return validCharactersRegex.test(value);
        }

        $.validator.addMethod("custom_fullname", function(value, element) {
            return fullname_valid(value);
        }, 'Your Name should be entered like: "John Doe"');



        $('.form-signin').validate({
            rules : {
                fullname : {
                  required: true,
                  custom_fullname: true
                },
                password: {
                  required: true,
                  minlength:5
                }

            },
            messages:{
                fullname : {
                  required: 'Fullname must be filled up.',
                  custom_fullname : 'Fullname must be like for example eg., John Doe.'
                },
                password: {
                  required: 'Password must be filled up.',
                  minlength:'Minimum characters of 5.'
                }
            },
            beforeSend:function(){
              console.log('test');
            },
            submitHandler: function(form){
              $.ajax({
                  type:'post',
                  url:'login/check_credentials',
                  data:$(form).serialize(),
                  dataType:'json',
                  success:function(data){
                    console.log(data);
                    if(data.status == 'success'){
                        window.location.href = 'home';
                    }else if(data.status == 'error'){
                      if(!$('.alert').length){
                        var str = "<div class='alert alert-danger' style='text-align:center;'>Oh snap! Either fullname or password is wrong!</div>";
                        $('.container').prepend(str);
                      }
                    }
                    
                  }
              });
              event.preventDefault();
              
            }
        });



    });
   </script>
   
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
     
      <form class="form-signin">
        <h2 class="form-signin-heading"><span style="margin-right:1em;"> <img src="<?php echo base_url(). 'images/logo.png'; ?>" style="width:40px;height:40px;"/></span>Please sign in</h2>
        <input type="text" name="fullname" class="input-block-level" placeholder="Fullname">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <button id="btn_submit" class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>


</html>
