
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
        $nav = [0=>"welcome", 1=>"forms", 2=>"videos", 3=>"login", 4=>"crud", 5=>"api"];

        // send data to header view
        $this->getView($view, $nav);

    }
}


?>
