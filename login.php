<html>

<body>
    <button type="button" value="log out"></button>
    <p>Login
    <?php
     $QueryCMD="SELECT password FROM login WHERE username = '";
     $QueryCMD=$QueryCMD.$_POST['id']."'";
     $mysqli=mysqli_connect("localhost","php_server","melodies","web_metafalus");
     $res=mysqli_query($mysqli,$QueryCMD);
     $row=mysqli_fetch_assoc($res);
     if(strcmp($row['password'],$_POST['pwd'])==0)
     {
	echo 'Success, Redirecting...';
     }
     else
     {
	echo 'Failed, Redirecting...';
     }
 ?>
    </p>
    <script type="text/javascript">
        if (localStorage.loginCridentials) {
            //	document.write(localStorage.loginCridentials);
        } else {
            //	document.write("No Cookies!");
        }
        localStorage.loginCridentials = "COOKIES!!";

    </script>
</body>

</html>
