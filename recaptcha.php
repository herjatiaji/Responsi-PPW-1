<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Captcha Generator</title>
    <link rel="stylesheet" href="stylecaptcha.css" />
  <script >
  let captcha = new Array();

function createCaptcha() {
  const activeCaptcha = document.getElementById("captcha");
  for (q = 0; q < 6; q++) {
    if (q % 2 == 0) {
      captcha[q] = String.fromCharCode(Math.floor(Math.random() * 26 + 65));
    } else {
      captcha[q] = Math.floor(Math.random() * 10 + 0);
    }
  }
  theCaptcha = captcha.join("");
  activeCaptcha.innerHTML = `${theCaptcha}`;
}
function validateCaptcha() {
    const errCaptcha = document.getElementById("errCaptcha");
    const reCaptcha = document.getElementById("reCaptcha");
    recaptcha = reCaptcha.value;
    let validateCaptcha = 0;
    for (var z = 0; z < 6; z++) {
      if (recaptcha.charAt(z) != captcha[z]) {
        validateCaptcha++;
      }
    }
    if (recaptcha == "") {
      errCaptcha.innerHTML = "Re-Captcha must be filled";
    } else if (validateCaptcha > 0 || recaptcha.length > 6) {
      errCaptcha.innerHTML = "Wrong captcha";
      window.alert('captcha salah');
      window.location.href="recaptcha.php";
    
    } else {
      errCaptcha.innerHTML = "Done";
      <?php
      session_start();
      $_SESSION['cpth'] = 1;
       ?>
      window.alert('benar');
      window.location.href="portfolio.php";

    }
  }
    </script>
  </head>
  <body>
    
    <div class="container">
        <h1>RECAPTCHA</h1>
        <div id="captcha" class="captcha"><script>createCaptcha();</script></div>
        <div class="restart">
            <a href="#" onclick="createCaptcha()">CHANGE</a>
          </div>
      <div class="input">
        <input
          type="text"
          name="reCaptcha"
          id="reCaptcha"
          placeholder="Type The Captcha"
        />
      </div>
      <div>
        <input type="button" value="Submit" onclick="validateCaptcha()" />
    <div>
      <div id="errCaptcha" class="errmsg"></div>
    </div>
  </body>
</html>