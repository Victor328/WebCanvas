<html>

<head>
    <div class="banner">
        <p class="title-text">Metafalus/Canvas</p>
        <p class="user-text" id="username-textbox">default_user</p>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet" type="text/css">
</head>

<body>
    <style type="text/css">
        div.banner {
            left: 0%;
            top: 0%;
            position: absolute;
            height: 5%;
            width: 100%;
            background-color: blanchedalmond;
            z-index: -1;
        }

        p.title-text {
            position: absolute;
            font-family: "Berkshire Swash";
            color: rgb(221, 61, 61);
            font-size: 150%;
            top: -50%;
            left: 2%;
        }

        p.user-text {
            position: relative;
            font-family: "Berkshire Swash";
            color: rgb(221, 61, 61);
            font-size: 150%;
            top: -50%;
            text-align-last: right;
            margin-right: 2%;
        }

    </style>

    <script  type="text/javascript">
        if (getCookie("Metafalus_Login_Token_ID").length!=0) {
            document.getElementById("username-textbox").innerHTML = getCookie("Metafalus_Login_Token_ID");
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
