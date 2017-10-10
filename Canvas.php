<html>

<body>
    <p id=loginTest>Rrrrrrrrrrrr!</p>
    <script>
        if (getCookie("Metafalus_Login_Token_ID").empty()) {
            alert("No Cookies");
            window.location("http://metafalus.tpddns.cn");
        } else {
            alert("Got Cookies");
            document.getElementById("loginTest").innerHTML="Logined as"+getCookie("Metafalus_Login_Token_ID");
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
