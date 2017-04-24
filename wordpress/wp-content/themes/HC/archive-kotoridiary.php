<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div class="entry"><?php the_content(); ?></div>
<div class="data"><?php the_time('Y/m/d'); ?></div>
<?php endwhile; endif; ?>
