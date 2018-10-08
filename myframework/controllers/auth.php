<?

// auth controller

class auth extends AppController
{

    function __construct()
    {

    }

    public function login() {
        if (@$_REQUEST['Email'] && @$_REQUEST['Password']) {

            if (@$_REQUEST['Email']=='tracy@gmail.com' && @$_REQUEST['Password']=='1234') {

                @$_SESSION['loggedin']=1;
                header("Location:/profile/index");
                //header("Location:/welcome?msg=Welcome");

            }
            else {
                header("Location:/welcome/login?msg=Bad Login");
            }

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
        $nav = [0=>"welcome", 1=>"forms", 2=>"videos", 3=>"login", 4=>"contact", 5=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
