<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>LED Control</title>
</head>

<body>
    <center>
        LED Control:
        <form method="get" action="gpio.php">
            <input type="submit" value="ON" name="on">
            <input type="submit" value="OFF" name="off">
        </form>
        <?php
            $setmode4 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
            if(isset($_GET['on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 1");
                echo "LED is on";
            }
            else if(isset($_GET['off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 0");
                echo "LED is off";
            }
         ?>
    </center>	
	
</body>
</html>
