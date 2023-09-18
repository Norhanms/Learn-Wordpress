<?php get_header('test'); //Loads header template. 
/*
get_header() for 'header.php'
get_header("test"); for 'header-test.php'
*/
//https://developer.wordpress.org/reference/functions/get_header/
?>
    <section>
        <h2>Blog posts</h2>
        <article>
            <h3>Article 1</h3>
            <p>This is the content of article one</p>
        </article>
           <article>
            <h3>Article 2</h3>
            <p>This is the content of article one</p>
        </article>
           <article>
            <h3>Article 3</h3>
            <p>This is the content of article one</p>
        </article>
    </section>
    <aside>
        <p>About us: this is about us aside section</p>
    </aside>
    <?php 
    //isset() : Determine if a variable is declared and is different than null
    /*
    if (isset($_POST['username'])){
       echo $_POST['username'];
    }
    */
    $name=$_POST['username']??"placeholder";
    echo $name;
       
    ?>
<form method="post">
    <input type="text" name="username"/>
    <input type="submit" name="submit"/>

</form>

 <?php get_footer("test");
 // if footer.php does not exist or has a name aother than 'footer.php'
 //it will add the default footer of wordpress
 //if it has a name 'footer-test.php' for example (minus not underscore)
 //you have to write get_footer("test")
//the same for header
 
 ?>