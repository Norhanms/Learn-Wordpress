<?php get_header('test'); //Loads header template. 
/*
get_header() for 'header.php'
get_header("test"); for 'header-test.php'
*/
//https://developer.wordpress.org/reference/functions/get_header/
?>
<section>

<h1>Page Not Found</h1>
<a href="index.php"> home page</a>
<?php get_search_form();?>
</section>

 <?php get_footer("test");?>
