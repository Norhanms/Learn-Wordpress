 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name');?></title>
    <?php wp_head(); ?>
   
 </head>
 <style>
   .blog__title a{
      color:#F05941;
   }
 </style>
 <body>
    <header>
      <!-- 
         https://developer.wordpress.org/reference/functions/bloginfo/
      -->
      <?php if( is_front_page() || is_home()):?>
         <h1 class="blog__title"><a href="<?php bloginfo('wpurl');?>">
               <?php bloginfo('name');?>
               </a>
         </h1>
      <?php else: ?>
         <p> 
            <a href="<?php bloginfo('wpurl');?>"> <?php bloginfo('name');?></a>
       </p>
      <?php endif ?>
      <h4><?php bloginfo('description');?></h4>
      <p><?php  echo "Today is " . date("Y/m/d/l") . "<br>";?></p>
      <h5><?php echo get_bloginfo();?></h5>
      <?php get_search_form();?>
      

    </header>