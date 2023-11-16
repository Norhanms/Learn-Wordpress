<?php get_header('test'); //Loads header template. 
/*
get_header() for 'header.php'
get_header("test"); for 'header-test.php'
*/
//https://developer.wordpress.org/reference/functions/get_header/
?>
   <hr>
    <section>
        
        <h2>Blog posts</h2>
        <?php if (have_posts()):?>
            <?php while (have_posts()): ?>
                <?php the_post();?>
                <article>
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <span>
                        Published In :<?php the_date()?>
                        By: Author:<?php the_author_posts_link()?>
                        <?php the_tags('|',',','|')?>
                         in <?php the_category(',')?>
                        
                    </span>
                    <?php the_excerpt();?>
                    
                </article>
            <?php endwhile?>
        <?php else:?>
            <?php echo "there are No posts";?>
        <?php endif?>
        
    </section>
    <hr>
   <?php get_sidebar();?>



 <?php get_footer("test");
 // if footer.php does not exist or has a name aother than 'footer.php'
 //it will add the default footer of wordpress
 //if it has a name 'footer-test.php' for example (minus not underscore)
 //you have to write get_footer("test")
//the same for header
 
 ?>