
<?
// default controller
class welcome extends AppController
{

    function __construct()
    {

        //$this->getView("header", array("pagename"=>"welcome"));
        $this->displayNav("header");
        $this->getView("welcome");
        $this->getView("footer");
    }

    public function displayNav($view) {

        // menu labels
        $nav = [0=>"welcome", 1=>"home", 2=>"forms", 3=>"captcha", 4=>"login", 5=>"crud", 6=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
