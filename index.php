<?php
require_once './scripts/dbconect.php';
require_once './render/app.php';
$conn = db_connect() or die ("error");
title_header($brand." | guestbook" );

render("header","php");
?>
<body>

<style>

</style>


<header class="header"> 
<div class="header-top">
<div class="header-logo"><h1>GuestBook</h1></div>
</div>
</header>



<main role="main" class="container">
<h2 class="mt-5">Leave a Comment</h2>

<?php
render("comment_box","html");
get_query($conn);
?>
</main>
<?php render("footer","php");
 ?>
</body>
</html>