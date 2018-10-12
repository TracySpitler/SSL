<?

// auth controller

class auth extends AppController
{

    function __construct()
    {

    }

    public function login() {

        if ((@$_POST['Email'] && @$_POST['Password']) || (@$_SESSION['Email'] && @$_SESSION['Password'])) {

            // get file contents of user information
            $result = array();
            $file = explode("\n\n", file_get_contents("./assets/users.txt"));
            foreach ( $file as $content ) {
                $result[] = array_filter(array_map("trim", explode("|", $content)));
            }

            for($i=0; $i< count($result); $i++){

                if((strtolower($result[$i][0]) === strtolower($_POST['Email']) && $result[$i][1] === $_POST['Password']) || (strtolower($result[$i][0]) === strtolower($_SESSION['Email']) && $result[$i][1] === $_SESSION['Password']))
                {
                    $_SESSION['Email'] = $_POST['Email'];
                    $_SESSION['Password'] = $_POST['Password'];
                    $_SESSION['desc'] = $result[$i][2];
                    $_SESSION['loggedin']=1;

                    header("Location:/profile?msg=Logged In!");

                }
                elseif ($_SESSION['loggedin']=1) {
                    header("Location:/profile?msg=Logged In!");
                }
                else {
                    header("Location:/welcome/login");
                }
            }
            //echo "<div class='alert'>".$result[1][1]."</div>";
            //echo "<div class='alert'>".file_get_contents("./assets/users.txt")."</div>";

        }
        else {
            header("Location:/welcome/login?msg=Bad Login");
        }

    }

    public function logout() {
        session_destroy();
        header("Location:/welcome");

    }

    public function displayNav($view) {

        // menu labels
        if (!isset($_SESSION['loggedin'])) {

            $nav = [0=>"welcome", 1=>"videos", 2=>"login", 3=>"signup", 4=>"contact", 5=>"api"];

            // send data to header view
            $this->getView($view, $nav);

        }

        else {

            $nav = [0=>"welcome", 1=>"videos", 2=>"contact", 3=>"api"];

            // send data to header view
            $this->getView($view, $nav);

        }

    }
}


?>
