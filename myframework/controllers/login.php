<?

// login controller

class login extends AppController
{

    function __construct()
    {
        $this->displayNav("header");
        $this->getView("login");
        $this->getView("footer");
    }

    public function displayNav($view) {

        // menu labels
        $nav = [0=>"welcome", 1=>"forms", 2=>"videos", 3=>"login", 4=>"crud", 5=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
