<?php
    if(have_comments()):
    while(have_comments()): the_comment()
;?>
    <p>yoyo</p>
    <?php endwhile; ?>
    <?php endif; ?>
<?php comment_form(); ?>