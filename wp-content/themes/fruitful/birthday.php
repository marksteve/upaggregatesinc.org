<?php
/*
Template Name: Birthday
*/

get_header("bday"); ?>

<body>
<div class="container">
	<div class="content">
		<div class="title">
		</div>
		<div class="comments"><?php echo do_shortcode('[fbcomments]'); ?></div>
	</div>
</div>

<?php get_footer("bday"); ?>