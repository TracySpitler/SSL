<!-- footer.php -->

<div class="footer">A Project created by <strong>Tracy Spitler</strong>.</div>

<?



?>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script>


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

    // AJAX
    $('#ajaxButton').click(function() {
        alert("Alert: footer.php line 35");

        $.ajax({
            method: "POST",
            url: "/index.php/welcome/ajaxParams",
            data: {Test: "this is a test for the data passing"},
            success: function(data) {
                console.log(data);
                if (data=="welcome") {
                    alert("Welcome! You have successfully loggd in!");
                }
                else {
                    alert("Bad login. Please try again.");
                }
            }
        });
    });


    // testing jquery
    //$("div").css("border", "3px solid red");

});


</script>


    </body>
</html>
