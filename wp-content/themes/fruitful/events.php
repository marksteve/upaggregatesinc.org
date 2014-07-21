<?php
/*
        Template Name: Events
        */
$temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query('cat=3&showposts=4'.'&paged='.$paged);
?>
 
<?php
        $temp = $wp_query;
        $wp_query= null;
        $wp_query = new WP_Query();
        $wp_query->query('cat=3&showposts=4'.'&paged='.$paged);
        ?>
 
<div class="navigation">
        <div><?php next_posts_link('&laquo; Older Entries'); ?></div>
        <div><?php previous_posts_link('Newer Entries &raquo;'); ?></div>
        </div>
 
 
<?php get_header(); ?>
<?php get_sidebar(); ?>
 
<div id="main">
    <!--Begin main -->
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="xfolkentry">
        <h2><a href="<?php the_permalink() ?>" class="taggedlink entry-title" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="date"><abbr class="published updated" title="<?php the_time('Y-m-d\TH:i:s\Z'); ?>"><?php the_time('F jS, Y') ?></abbr></div>
    <span class="vcard author">by<span class="fn"> <?php the_author() ?></span></span>
                <div class="description">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div><!-- End description -->  
                <?php if ('open' == $post->comment_status) : ?>
         
        <!--comments are open -->
        <p class="details"><a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a><?php edit_post_link('Edit', ' | ', ''); ?></p>
        <?php else: ?>
        <!--comments are closed -->
        <?php /*check to see if there are any comments*/
           
            if ($comments) : ?>
            <p class="details"><a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a><?php edit_post_link('Edit', ' | ', ''); ?></p>
            <?php else: /* Any detail should not be shown because no comments and comments are closed*/?>
            <!-- <p class="details"><a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a><?php edit_post_link('Edit', ' | ', ''); ?></p> -->
            <?php endif; ?>
        <?php endif; ?>
         
<?php comments_template(); ?>
      </div><!-- div post-<?php the_ID(); ?> ends here -->
<?php endwhile; else : ?>
<div class="navigation">
 <?php  
 $has_subpages = false;  
 // Check to see if the current page has any subpages  
 $children = wp_list_pages('&child_of='.$post->ID.'&echo=0');  
 if($children) {  
     $has_subpages = true;  
 }  
 // Reseting $children  
# $children = "";  
 
 // Fetching the right thing depending on if we're on a subpage or on a parent page (that has subpages)  
 if(is_page() && $post->post_parent) {  
     // This is a subpage  
     $children = wp_list_pages("title_li=&include=".$post->post_parent ."&echo=0");  
     $children .= wp_list_pages("title_li=&child_of=".$post->post_parent ."&echo=0");  
 } else if($has_subpages) {  
     // This is a parent page that have subpages  
     $children = wp_list_pages("title_li=&include=".$post->ID ."&echo=0");  
     $children .= wp_list_pages("title_li=&child_of=".$post->ID ."&echo=0");  
 }  
 ?>  
 <?php // Check to see if we have anything to output ?>  
 <?php if ($children) { ?>  
 <ul class="submenu">  
     <?php echo $children; ?>  
 </ul>  
 <?php } >
        <div><?php next_posts_link('&laquo; Older Entries'); ?></div>
        <div><?php previous_posts_link('Newer Entries &raquo;'); ?></div>
 
</div>
 
                <h1>Not Found</h1>
                <p>We respect your curiosity! But, what you are looking is not present here. Don't be disappointed, keep the spirit spirits high, keep learning, keep finding! Curiosity is good, first step towards innovation.</p>
 
        <?php endif; ?>
 
</div><!--End main -->
</div><!-- End center -->
</div><!--End primary-->
 
<?php get_footer(); ?>