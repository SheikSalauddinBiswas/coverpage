<?php
include 'inc/header.php';
?>

<video autoplay muted loop id="myVideo">
        <source src="pictures/video2.mp4" type="video/mp4">
</video>

<div class="d-grid gap-2 position-absolute top-50 start-50 translate-middle ">
        <a href="makecoverpage.php"><button class="btn btn-lg btn-outline-secondary custom" type="button">Make New Cover Page</button></a>
        <a href="librarycoverpage.php"><button class="btn btn-lg btn-outline-success custom" type="button">Print Library Cover Page</button></a>
        <a href=""><button class="btn btn-lg btn-outline-danger custom" type="button">Other</button></a>
</div>






<?php
include 'inc/footer.php';
?>