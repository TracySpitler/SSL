<!-- header.php -->

<nav id="header-navigation" class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href=""><strong>SSL</strong></a>
    <div class="navbar-nav">

<?

foreach ($data as $key => $value) {
    echo '<li class="',($_SERVER['PHP_SELF'] == "/index.php/welcome/$value" ? 'active current' : ''),'">';
    //echo '<li ',(@$page["pagename"]=="$value"?'class="active current"':''),' >';
    echo '<a class="nav-link" href="/welcome/'.$value.'">'.$value.'</a></li>';
    //echo '<a class="nav-link" href="/',($_SERVER['PHP_SELF'] == "/index.php/$value" ? 'active' : ''),''
    //echo "/index.php/$value";
}
//echo $_SERVER['PHP_SELF'];

?>

</div>
</nav>
