<!DOCTYPE html>
<html lang="BR">
	<head>
    <meta charset="utf-8">
    <title>Monitor ICMP</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="apple-touch-icon" href="favicon.png" />
    <link href="static/plugin/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/plugin/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="static/plugin/bootstrap-multiselect/bootstrap-multiselect.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="static/plugin/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="static/plugin/twitter-bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="static/plugin/bootstrap-multiselect/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="static/js/scripts.js"></script>
    <script type="text/javascript" src="static/plugin/twitter-bootstrap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <style>
    .tab-content {
    display: block;
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    display: inline-block;
    }
    </style>
    </head>
<body data-spy="scroll" data-target=".subnav" data-offset="50" class="black_background">
<script>
    $(document).ready(function(){
        setInterval(function(){
            $("#count").load('frame.php')
        }, 15000);
    });
</script>
<div id="count">
<?php
        $mysqli = new mysqli("localhost", "root", "", "test");
        $queryy = "SELECT `server_id` AS 'ID', `ip` AS 'IP', `label` AS 'NOME', `type` AS 'TIPO', `active` AS 'ATIVO' FROM psm_servers ORDER BY `NOME` ASC ";
        $result=$mysqli->query($queryy);
          while($row=$result->fetch_array()){
            $ip = $row["IP"];
            $ping = exec ("ping -n 1 $ip", $output, $status);
            //$saida = implode(" ", $output);
            //echo $saida;
            if ($status == 0) {
                echo "<div class='tab-content'>
                <div id='flow-layout' class='tab-pane active'>
                    <div class='entity-container'>
                        <div class='online'>
                            <div class='entity'>
                                <center><h2>" .$row["NOME"]."</h2></center>
                                <p>Host: " .$row["TIPO"]." / " .$row["IP"]."</p>
                                <p>Active: on</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
            } else {
                echo "<script>play();</script>";
                echo "<script> jQuery(document).ready(play);</script>";
				echo "<div class='tab-content'>
                <div id='flow-layout' class='tab-pane active'>
                    <div class='entity-container'>
                        <div class='offline'>
                            <div class='entity'>
                                <center><h2>" .$row["NOME"]."</h2></center>
                                <p>Host: " .$row["TIPO"]." / " .$row["IP"]."</p>
                                <p>Active: off</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
            }
                       
        }
?>
<audio id="audio">
   <source src="sound/elc.mp3" type="audio/mp3" />
</audio>
<script type="text/javascript">
    audio = document.getElementById('audio');
        function play(){
        audio.play();
        }
</script>

    </body>
</html>
