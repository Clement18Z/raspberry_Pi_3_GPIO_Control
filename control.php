<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->

    <!-- Slider ================================================== -->
    <!-- <link href="css/owl.carousel.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/owl.theme.css" rel="stylesheet" media="screen"> -->
    <!-- <script type="text/javascript" src="js/jquery.1.11.1.js"></script> -->
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <!-- <script type="text/javascript" src="js/SmoothScroll.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.isotope.js"></script> -->
    <!-- <script type="text/javascript" src="js/jquery.video-ui.js"></script> -->
    <!-- <script src="js/owl.carousel.js"></script> -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
    <!-- Stylesheet
================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/responsive.css"> -->
    <link rel="stylesheet" href="css/buttons.css">
    <script>
    //$(document).ready(function(){});

    $(function() {
       //檢查瀏覽器是否支援 WebStorage
       if (typeof(Storage) == "undefined")
         console.log('無支援');
       else {
        console.log('支援');
        console.log(typeof Storage);
        if (typeof(localStorage.getItem('cbflag')) == 'undefined')
        {
           console.log('set cbflag');
           //localstorage["cbflag"] = "000000";
           localStorage.setItem('cbflag', '000000');
           $('#cb1').attr("checked"); //設定 Checkbox 不打勾
           $('#cb2').attr("checked");
           $('#cb3').attr("checked");
           $('#cb4').attr("checked");
           $('#cb5').attr("checked");
           $('#cb6').attr("checked");
        }
        else{
           console.log('get cbflag');
           console.log(localStorage.getItem('cbflag'));
           for (var i = 0; i < localStorage.getItem('cbflag').length; i++) {
               console.log(i);
               var cb = document.getElementById("cb" + (i+1) );
               console.log(cb);
               if (localStorage.getItem('cbflag').substr(i,1) == "1")
                  //$(cb).prop("checked",true);
                  cb.checked = true;
               else
                  //$(cb).prop("checked",false);\
                  cb.checked = false;
           }
        }
       }
    });

    function sub() {
        var ch = "1";
        var ch2 = "0";
        command = document.getElementById("cmd");
        check_val = [];

        // if ($('#cb1').attr("checked")) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }


        for (var i=1; i <= 6; i++) {
           var cb1 = document.getElementById("cb" + i );
           console.log(cb1);
           if (cb1.checked) {
               check_val.push(ch);
           } else {
               check_val.push(ch2);
           }
        }

        // if (document.getElementById("cb1").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }
        // if (document.getElementById("cb2").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }
        // if (document.getElementById("cb3").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }
        // if (document.getElementById("cb4").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }
        // if (document.getElementById("cb5").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }
        // if (document.getElementById("cb6").checked) {
        //     check_val.push(ch);
        // } else {
        //     check_val.push(ch2);
        // }

        command.value = check_val[0] + check_val[1] + check_val[2] + check_val[3] + check_val[4] + check_val[5];

        localStorage.setItem('cbflag', command.value);
        document.getElementById("add").submit(check_val)
        // $('#add').submit(function(){
        //    $('#cmd').val(check_val);
        //    return;
        // });

        //return true;
    }

    </script>
</head>

<body>
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="$">控制中心</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/control/" class="page-scroll">Control Panel</a></li>
                    <li><a href="/video/" class="page-scroll">Video Monitor</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <p></p>
    <div id="tf-ee">
        <div class="container">
            <!-- Container -->
            <div class="section-title-black center">
                <h1 style="text-color=#000000;text-align: center;"><strong>Control Panel</strong></h1>
                <div class="line">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: -60px; margin-bottom: 60px">
        <section class="main">
            <div class="row">
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">LED 1</h2>
                    <div class="switch demo3">
                        <input id="cb1" type="checkbox">
                        <label><i></i></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">LED 2</h2>
                    <div class="switch demo3">
                        <input id="cb2" type="checkbox">
                        <label><i></i></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">LED 3</h2>
                    <div class="switch demo3">
                        <input id="cb3" type="checkbox">
                        <label><i></i></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">Fan </h2>
                    <div class="switch demo1">
                        <input id="cb4" type="checkbox">
                        <label></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">Reserver 1</h2>
                    <div class="switch demo1">
                        <input id="cb5" type="checkbox">
                        <label></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-4">
                    <hr>
                    <h2 class="text-center">Reserver 2</h2>
                    <div class="switch demo1">
                        <input id="cb6" type="checkbox">
                        <label></label>
                    </div>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                    <form id="add" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                            <input id="cmd" style="display:none" type="text" name="a">
                            <input type="button" class="button button-action" onclick="sub()" value="SUBMIT">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <nav id="footer">
        <div class="container">
            <div class="fnav">
                <p>Copyright &copy; 2018. <a href=mailto:allen@example.com>Allen</a> All rights reserved.</p>
            </div>
        </div>
    </nav>
            <?php
if (isset($_POST['a'])) {
    if (substr($_POST['a'], 0, 1)) {
        $setmode4 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
        $setmode4 = shell_exec("/usr/local/bin/gpio -g write 4 1");
    } else {
        $setmode4 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
        $setmode4 = shell_exec("/usr/local/bin/gpio -g write 4 0");
    }

    if (substr($_POST['a'], 1, 1)) {
        $setmode27 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
        $setmode27 = shell_exec("/usr/local/bin/gpio -g write 27 1");
    } else {
        $setmode27 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
        $setmode27 = shell_exec("/usr/local/bin/gpio -g write 27 0");
    }

    if (substr($_POST['a'], 2, 1)) {
        $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
        $setmode22 = shell_exec("/usr/local/bin/gpio -g write 22 1");
    } else {
        $setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
        $setmode22 = shell_exec("/usr/local/bin/gpio -g write 22 0");
    }

    if (substr($_POST['a'], 3, 1)) {
        $setmode23 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        $setmode23 = shell_exec("/usr/local/bin/gpio -g write 23 1");
    } else {
        $setmode23 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        $setmode23 = shell_exec("/usr/local/bin/gpio -g write 23 0");
    }
}
?>
</body>

</html>
