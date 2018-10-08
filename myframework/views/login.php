<!-- login.php -->
<div class="info">
    <h4>Log In Information:</h4>
    <p><strong>Email:</strong> tracy@gmail.com</p>
    <p><strong>Password:</strong> 1234</p>
</div>

<div class="container login-form">

    <?

    function create_image($cap)

    {

        unlink("./assets/image1.png");

        global $image;

        $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

        $background_color = imagecolorallocate($image, 255, 255, 255);

        $text_color = imagecolorallocate($image, 0, 255, 255);

        $line_color = imagecolorallocate($image, 64, 64, 64);

        $pixel_color = imagecolorallocate($image, 0, 0, 255);

        imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

        for ($i = 0; $i < 3; $i++) {

            imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);

        }

        for ($i = 0; $i < 1000; $i++) {

            imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);

        }

        $text_color = imagecolorallocate($image, 0, 0, 0);

        ImageString($image, 22, 30, 22, $cap, $text_color);

        /************************************/

        // Create your session variable that carries the data, you will check against this in your controller.
        //
        // Something like $_SESSION[..]=....;
        // Set session variables

        if (isset($_POST['submit'])) {
            $_SESSION['Email'] = $_POST['Email'];
            $_SESSION['Password'] = $_POST['Password'];
        }


        /*************************************/

        imagepng($image, "./assets/image1.png");

    }

    create_image($data["cap"]);

    echo "<img src='/assets/image1.png'>";

    ?>

    <form id="head-login" class="form navbar-form" method='post' action='/auth/login'>
        <h2>Log In</h2>

        <div class='input-wrapper'>
            <input type='email' id='Email' name='Email' class='form-control' placeholder='Your Email *' value='' required/>
            <i class=errorSpan></i>
        </div>

        <div class='input-wrapper'>
            <input type='password' id='Password' name='Password' class='form-control' minlength='4' placeholder='Password' * value='' required/>
            <i class='errorSpan'></i>
        </div>

        <div class='input-wrapper'>
            <button id='ajaxButton' type='submit' name='ajaxButton' class='btn'/>Log In</button>
        </div>

        <button class="navbar-toggler navbar-right" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div>

            <label for="exampleInputEmail1">Enter Captcha </label>

            <input name="captcha" type="captcha" id="captcha"  placeholder="">

        </div>
    </form>


</div>

<?



?>
