<!-- profile.php -->



<div class="main">

    <div class="container profile">

        <div class="card" style="width: 30vw;">

            <?

            // get file contents of user information
            $result = array();
            $file = explode("\n\n", file_get_contents("./assets/users.txt"));
            foreach ( $file as $content ) {
                $result[] = array_filter(array_map("trim", explode("|", $content)));
            }

            //echo "<div class='alert'>".$result[0][0]."</div>";
            //echo "<div class='alert'>".$result[0][1]."</div>";



            $image = "/assets/purplebot.png";


            if (isset($_SESSION['photo'])) {
                $image = $_SESSION['photo'];
                echo "<img id='img' src='$image' alt='Profile Image' class='card-img-top img-thumbnail picture hidden-xs'>";
            }
            else {
                $image = "/assets/purplebot.png";
                echo "<img id='img' src='$image' alt='Profile Image' class='card-img-top img-thumbnail picture hidden-xs'>";
            }

            ?>

            <div class="card-body">

                <?

                if (isset($_SESSION['Email'])) {
                    echo "<h3 class='card-title'>".$_SESSION['Email']."</h3>";
                }
                else {
                    echo "<h3 class='card-title'>Tracy Spitler</h3>";
                }

                ?>

                <span class="card-desc">Web Developer</span>

                <?

                if (isset($_SESSION['desc'])) {
                    echo "<p class='card-text'>".$_SESSION['desc']."</p>";
                }
                else {
                    echo "<p class='card-text'>This will be the descrition sentence about this person and their profile.</p>";
                }

                ?>

                <form class="profile-form" action="/profile/update" method="post" enctype="multipart/form-data">
                    <label class="btn btn-default btn-file" style="width: 110px;">Browse
                        <input type="file" name="img" style="display: none;">
                    </label>
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>



</div>

</div>
