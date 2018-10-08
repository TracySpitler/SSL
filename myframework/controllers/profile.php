<?

// profile controller

class profile extends AppController
{

    function __construct()
    {

        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {

        }
        else {
            header("Location:/welcome?msg=Welcome");

        }
    }

    public function index() {
        $this->displayNav("header");
        echo "<div class='alert'>You have successfully logged in! (this is a protected controller)</div>";
        $this->getView("welcome");
        $this->getView("footer");
    }

    public function displayNav($view) {

        // menu labels
        $nav = [0=>"welcome", 1=>"forms", 2=>"videos", 3=>"login", 4=>"contact", 5=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
