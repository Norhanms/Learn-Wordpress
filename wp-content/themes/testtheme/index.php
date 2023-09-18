<?php get_header(); //Loads header template.
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

    <footer>copy right to codestep theme</footer>
    
    <?php wp_footer();?>
 </body>
 </html>