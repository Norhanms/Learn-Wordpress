<?php get_header('test'); //Loads header template. 
/*
get_header() for 'header.php'
get_header("test"); for 'header-test.php'
*/
//https://developer.wordpress.org/reference/functions/get_header/
?>
   <hr>
    <section>
        <p style="color:red;">test sample page</p>
        <?php if (have_posts()):?>
            <?php while (have_posts()): ?>
                <?php the_post();?>
                <article>
                    <h1><?php the_title();?></h1>
                            <span>
                        Published In :<?php the_date()?>
                        By: Author:<?php the_author_posts_link()?>
                 
                        
                    </span>
                    <?php the_content();?>
                    
                </article>
            <?php endwhile?>
        <?php else:?>
            <?php echo "there are No posts";?>
        <?php endif?>
        
    </section>


 <?php get_footer("test");

 
 ?>