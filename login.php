<html>

<body>
    <p>Login
        <?php
        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }
        $QueryCMD="SELECT password FROM login WHERE username = '";
        $QueryCMD=$QueryCMD.$_POST['id']."'";
        $mysqli=mysqli_connect("localhost","php_server","melodies","web_metafalus");
        $res=mysqli_query($mysqli,$QueryCMD);
        $row=mysqli_fetch_assoc($res);
        if(strcmp($row['password'],$_POST['pwd'])==0)
        {
            echo 'Success, Redirecting...';
            echo '<script> setCookie("Metafalus_Login_Token_ID",'.$_POST['id'].');</script>';
            //Redirect('http://metafalus.tpddns.cn/Canvas.php',false);
        }
        else
        {
            echo 'Failed, Redirecting...';
            //Redirect('http://metafalus.tpddns.cn/');
        }
 ?>
    </p>
    <script type="text/javascript">
        function setCookie(cname, cvalue) {
            var d = new Date();
            d.setTime(d.getTime() + 86400000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

    </script>
</body>

</html>
