<?

// crud controller

class contact extends AppController
{

    function __construct()
    {
        $this->displayNav("header");
        $this->getView("contact");
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
