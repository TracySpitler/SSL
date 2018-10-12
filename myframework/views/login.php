<!-- login.php -->
<div class="main">

<div class="container login-form">

    <?

    function create_image($captcha)

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

        ImageString($image, 22, 30, 22, $captcha, $text_color);

        /************************************/

        // Create your session variable that carries the data, you will check against this in your controller.
        //
        // Something like $_SESSION[..]=....;
        // Set session variable


        /*************************************/

        imagepng($image, "./assets/image1.png");

    }

    create_image($data["captcha"]);

    // record digits in session variable
    $_SESSION = $data;




    ?>

    <form id="head-login" class="form navbar-form" method='post' action='/welcome/contactRecv'>
        <div class="h2">
            <h2>Log In</h2>
        </div>

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

        <div class="wrapper">
            <img src='/assets/image1.png'>
        </div>

        <div class="wrapper">
            <label for="captcha">Enter Captcha:</label><br>
            <input name="captcha" type="captcha" id="captcha"  placeholder="">
        </div>


    </form>


</div>

<?



?>

</div>
