<!--トップページやカテゴリ、タグ、エラーページなどの一覧ページを生成するためのファイル
「home.php」「category.php」「tag.php」「archive.php」が存在すればそっちが優先される-->
<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php get_template_part('loop-content'); ?>
    <?php endwhile; endif; ?><!--ループ終了-->

    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>'
      ) ); ?>
    </div>


  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
