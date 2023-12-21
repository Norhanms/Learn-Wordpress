<?php get_header('test'); //Loads header template. 
/*
get_header() for 'header.php'
get_header("test"); for 'header-test.php'
*/
//https://developer.wordpress.org/reference/functions/get_header/
?>
   <hr>
    <section>
        single post
        <?php if (have_posts()):?>
            <?php while (have_posts()): ?>
                <?php the_post();?>
                <article>
                    <h1><?php the_title();?></h1>
                     <span>
                        Published In :<?php the_date()?>
                        By: Author:<?php the_author_posts_link()?>
                        <?php the_tags('|',',','|')?>
                         in <?php the_category(',')?>
                        
                    </span>
                    <?php the_content();?>
                   
                    
                </article>
            <?php endwhile?>
        <?php else:?>
            <?php echo "there are No posts";?>
        <?php endif?>
        
    </section>
    <hr>
   <?php get_sidebar();?>

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

