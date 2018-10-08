<!-- welcome.php -->

<?
// default controller
class welcome extends AppController
{

    function __construct()
    {
        //$this->index();
        //$this->getView("header", array("pagename"=>"welcome"));

    }

    // default action for controller
    public function index()  {

        $this->displayNav("header");
        $this->getView("welcome");
        $this->getView("footer");

    }

    // videos
    public function videos() {
        $this->displayNav("header");
        $this->getView("videos");
        $this->getView("footer");
    }

    // login
    public function login() {
        $this->displayNav("header");
        $this->getView("login");
        $this->getView("footer");
    }

    // sign up
    public function signup() {
        $this->displayNav("header");
        $this->getView("signup");
        $this->getView("footer");
    }

    // contact
    // public function contact() {
    //     $this->displayNav("header");
    //     $this->getView("contact");
    //     $this->getView("footer");
    // }

    // api
    public function api() {
        $this->displayNav("header");
        $this->getView("api");
        $this->getView("footer");
    }


    // recieve contact information from form
    // public function contactRecv() {
    //     $this->displayNav("header");
    //     echo "<div class='alert'>You have successfully signed up!</div>";
    //     var_dump($_POST);
    //     if (!filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)) {
    //         echo "email invalid";
    //         return false;
    //     }
    //     else {
    //         echo "email valid";
    //         return true;
    //     }
    //
    // }

    public function contactRecv() {
        $this->displayNav("header");
        echo "<div class='alert'>You have successfully signed up!</div>";

        if ($_POST==$_SESSION) {
            if(!filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)){

                echo "Email invalid";
                echo "<br><a href='/welcome/login'>Click here to go back</a>";
            }
            else {
                echo "Email valid";
            }
        }
        else {
            echo "Invalid captcha";
            echo "<br><a href='/welcome/login'>Click here to go back</a>";
        }
    }


    // recieve ajax parameters
    public function ajaxParams() {
        var_dump($_REQUEST);
        $this->displayNav("header");
        if (@$_REQUEST["Email"]=="tracy@gmail.com" && @$_REQUEST["Password"]=="1234") {
            //echo "<script>alert('Welcome! You have successfully loggd in!')</script>";
            $this->getView("welcome");
        }
        else {
            //echo "<script>alert('Bad login. Please try again.')</script>";
            $this->getView("login");
        }

        $this->getView("footer");
    }

    public function contact(){

        $this->displayNav("header");

        $random = substr( md5(rand()), 0, 7);

        $this->getView("contact",array("cap"=>$random));

    }

    // pass array of label data to view
    public function displayNav($view) {

        // menu labels
        $nav = [0=>"welcome", 1=>"videos", 2=>"login", 3=>"signup", 4=>"contact", 5=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
