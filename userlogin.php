<?php 

if($_SERVER["REQUEST_METHOD"]== "POST"){
  
  include ('dbconnect.php');
  $cust_email = $_POST['cust_email'];
  $cust_pass= $_POST['cust_password'];
  
  
$sql = "Select * from customers where cust_email='$cust_email' AND cust_password='$cust_pass'";
$res = $con->query($sql);
$rowCount = $res->rowCount();
$user = $res->fetch(PDO::FETCH_ASSOC);
if($rowCount == 1){
 
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['cust_email'] = $cust_email;
  $_SESSION['user'] = $user;
  
  header("location:index.php");

}else{
  echo "invalid";
}

}



?>


<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from colorlib.com/etc/lf/Login_v18/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 19:12:33 GMT -->
  <head>
    <title>Login Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/vendor/bootstrap/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />

    <link rel="stylesheet" type="text/css" href="LoginCSS/vendor/animate/animate.css" />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/vendor/css-hamburgers/hamburgers.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/vendor/animsition/css/animsition.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/vendor/select2/select2.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="LoginCSS/vendor/daterangepicker/daterangepicker.css"
    />

    <link rel="stylesheet" type="text/css" href="LoginCSS/css/util.css" />
    <link rel="stylesheet" type="text/css" href="LoginCSS/css/main.css" />

    <meta name="robots" content="noindex, follow" />
    <script nonce="e1f1a098-cf1e-4332-8d0c-9a0f0f12b646">
      (function (w, d) {
        !(function (eK, eL, eM, eN) {
          eK.zarazData = eK.zarazData || {};
          eK.zarazData.executed = [];
          eK.zaraz = { deferred: [], listeners: [] };
          eK.zaraz.q = [];
          eK.zaraz._f = function (eO) {
            return function () {
              var eP = Array.prototype.slice.call(arguments);
              eK.zaraz.q.push({ m: eO, a: eP });
            };
          };
          for (const eQ of ["track", "set", "debug"])
            eK.zaraz[eQ] = eK.zaraz._f(eQ);
          eK.zaraz.init = () => {
            var eR = eL.getElementsByTagName(eN)[0],
              eS = eL.createElement(eN),
              eT = eL.getElementsByTagName("title")[0];
            eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
            eK.zarazData.x = Math.random();
            eK.zarazData.w = eK.screen.width;
            eK.zarazData.h = eK.screen.height;
            eK.zarazData.j = eK.innerHeight;
            eK.zarazData.e = eK.innerWidth;
            eK.zarazData.l = eK.location.href;
            eK.zarazData.r = eL.referrer;
            eK.zarazData.k = eK.screen.colorDepth;
            eK.zarazData.n = eL.characterSet;
            eK.zarazData.o = new Date().getTimezoneOffset();
            if (eK.dataLayer)
              for (const eX of Object.entries(
                Object.entries(dataLayer).reduce((eY, eZ) => ({
                  ...eY[1],
                  ...eZ[1],
                }))
              ))
                zaraz.set(eX[0], eX[1], { scope: "page" });
            eK.zarazData.q = [];
            for (; eK.zaraz.q.length; ) {
              const e_ = eK.zaraz.q.shift();
              eK.zarazData.q.push(e_);
            }
            eS.defer = !0;
            for (const fa of [localStorage, sessionStorage])
              Object.keys(fa || {})
                .filter((fc) => fc.startsWith("_zaraz_"))
                .forEach((fb) => {
                  try {
                    eK.zarazData["z_" + fb.slice(7)] = JSON.parse(
                      fa.getItem(fb)
                    );
                  } catch {
                    eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb);
                  }
                });
            eS.referrerPolicy = "origin";
            eS.src =
              "../../../cdn-cgi/zaraz/sd0d9.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
            eR.parentNode.insertBefore(eS, eR);
          };
          ["complete", "interactive"].includes(eL.readyState)
            ? zaraz.init()
            : eK.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, 0, "script");
      })(window, document);
    </script>
  </head>
  <body style="background-color: #666666">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <form class="login100-form validate-form" method="post">
            <span class="login100-form-title p-b-43"> Login </span>
            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input class="input100" name="cust_email" type="email" />
              <span class="focus-input100"></span>
              <span class="label-input100">Email</span>
            </div>
            <div
              class="wrap-input100 validate-input"
              data-validate="Password is required"
            >
              <input class="input100" name="cust_password" type="password" />
              <span class="focus-input100"></span>
              <span class="label-input100">Password</span>
            </div>
            <div class="flex-sb-m w-full p-t-3 p-b-32">
              <div class="contact100-form-checkbox">
                <input
                  class="input-checkbox100"
                  id="ckb1"
                  type="checkbox"
                  name="remember-me"
                />
                
              </div>
              <div>
                
              </div>
            </div>
            <div class="container-login100-form-btn">
              <button type="submit" class="login100-form-btn">Login</button>
            </div>
            
            </div>
          </form>
          <div class="login100-more" style="background-image:url('./LoginCSS/images/loginpic.jpg')"></div>
        </div>
      </div>
    </div>

    <script src="LoginCSS/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="LoginCSS/vendor/animsition/js/animsition.min.js"></script>

    <script src="LoginCSS/vendor/bootstrap/js/popper.js"></script>
    <script src="LoginCSS/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="LoginCSS/vendor/select2/select2.min.js"></script>

    <script src="LoginCSS/vendor/daterangepicker/moment.min.js"></script>
    <script src="LoginCSS/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="LoginCSS/vendor/countdowntime/countdowntime.js"></script>

    <script src="LoginCSS/js/main.js"></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
      integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
      data-cf-beacon='{"rayId":"77a17dd51f02c8f4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
      crossorigin="anonymous"
    ></script>
  </body>

  <!-- Mirrored from colorlib.com/etc/lf/Login_v18/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 19:12:42 GMT -->
</html>
