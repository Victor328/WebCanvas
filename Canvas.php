<html>

<body>
    <p id=loginTest>Rrrrrrrrrrrr!</p>
    <script  type="text/javascript">
        if (getCookie("Metafalus_Login_Token_ID").length!=0) {
            document.getElementById("loginTest").innerHTML = "Logined as"+getCookie("Metafalus_Login_Token_ID");
        } else {
            window.location="http://metafalus.tpddns.cn";
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

    </script>
</body>

</html>
