<!-- header.php -->

<nav id="header-navigation" class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href=""><strong>SSL</strong></a>
    <div class="navbar-nav">

<?

foreach ($data as $key => $value) {
    echo '<li class="',($_SERVER['PHP_SELF'] == "/index.php/$value" ? 'current' : ''),'">';
    echo "<a class='nav-link' href='/$value'>$value</a></li>";
    //echo "/index.php/$value";
}
//echo $_SERVER['PHP_SELF'];

?>

</div>
</nav>
