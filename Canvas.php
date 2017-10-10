<html>

<body>
    <p id=loginTest></p>
    <script>
        if (getCookie("Metafalus_Login_Token_ID").empty()) {
            window.location("http://metafalus.tpddns.cn");
        } else {
            document.getElementById("loginTest").innerHTML="Logined as"+getCookie("Metafalus_Login_Token_ID");
        }

    </script>
    <script>
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
