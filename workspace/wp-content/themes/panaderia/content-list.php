<?php
get_header();    
?>

<?php
    global $count;
    $count++;
if($post->post_type != 'page'){
    ?>
    <tr class="<?php echo ($count % 2 == 0) ? 'par' : 'impar'; ?>">
        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
        <td><?php echo get_the_author_posts_link(); ?></td>
        <td><?php the_time('j-m-Y'); ?></td>
    </tr>
    <?php
}else{
    ?>
    <tr class="<?php echo ($count % 2 == 0) ? 'par' : 'impar'; ?>">
        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
        <td>Page</td>
        <td><?php the_time('j-m-Y'); ?></td>
    </tr>
    <?php
}
?>