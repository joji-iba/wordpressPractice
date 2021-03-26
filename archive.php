<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
					<?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
				</div><!-- /breadcrumb -->


				<div class="archive-head m_description">
					<div class="archive-lead">ARCHIVE</div>
					<h1 class="archive-title m_category"><?php the_archive_title(); //一覧ページ名を表示 ?></h1><!-- /archive-title -->
					<div class="archive-description">
						<?php the_archive_description(); //説明を表示 ?>
					</div><!-- /archive-description -->
				</div><!-- /archive-head -->

				<?php if(have_posts()): ?>

					<!-- entries -->
					<div class="entries m_horizontal">
						<?php get_template_part('template-parts/entry-item'); ?>
					</div><!-- /entries -->

				<?php endif; ?>

				<?php get_template_part('template-parts/pagination'); ?>

			</main><!-- /primary -->

			<?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

 <?php get_footer(); ?>