<?php get_header(); ?>

	<?php get_template_part('template-parts/pickup'); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

      <?php
      //記事があればentriesブロック以下を表示
      if (have_posts()): ?>

				<!-- entries -->
				<div class="entries">
					<?php get_template_part('template-parts/entry-item'); ?>
				</div><!-- /entries -->

      <?php endif; ?>

			<?php get_template_part('template-parts/pagination'); ?>

			</main><!-- /primary -->

			<?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

 <?php get_footer(); ?>