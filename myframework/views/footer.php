<!-- footer.php -->

<div class="footer">A Project created by <strong>Tracy Spitler</strong>.</div>

<?



?>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

    // Carousel
    $('.carousel').carousel({
      interval: 6000,
      pause: "false"
    });

    // Popover
    $("body").popover({
    selector: "[data-toggle='popover']",
    container: "body",
    html: true
  });

  // testing jquery
  // $("div").css("border", "3px solid red");

});


</script>


    </body>
</html>
