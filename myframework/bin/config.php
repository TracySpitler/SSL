<div class='url-div'>

<?

$config = array(
'defaultController' => 'welcome',
'dbname' => 'fruits',
'dbpass' => 'root',
'dbuser' =>'root',
'baseurl' => 'http://127.0.0.1'
);


$str=$config["baseurl"]."/".$_SERVER['REQUEST_URI'];

$urlPathParts = explode('/', ltrim(parse_url($str, PHP_URL_PATH), '/'));

include 'router.php';

echo "<p class='url-message'>URL Path Parts: (hover over to display)</p>";
echo "<div class='overlay'>";
echo "<span class='url-span'>127.0.0.1</span>";

foreach ($urlPathParts as $key => $value) {
    echo "<p class='url-links'>/$value</p> ";
}
echo "</div></div>";

$route = new router($urlPathParts,$config);

?>
