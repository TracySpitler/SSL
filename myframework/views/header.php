<!-- header.php -->

<div class="header">
<a class="logo" href=""><strong>SSL</strong></a>
<ul class="navbar">

<?

foreach ($data as $key => $value) {
    echo "<li><a>$value</a></li>";
}

?>

</ul>
</div>
