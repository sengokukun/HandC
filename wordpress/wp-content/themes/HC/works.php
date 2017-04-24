<?php
/*
Template Name: ABOUT
*/
?>

<?php get_header(); ?>

<div class="wrap">
  <?php get_template_part( 'global-head'); ?>
  <section class="about">
    <div class="container">
      <h1 class="about__title">1<span>にち</span>1<span>あお</span></h1>
      <p class="about__desc">をテーマに、1日に1個だけ「何か」を青に変化させて公開しています。
        <br class="pc-br">普段何気なく目にするであろう「青色」を他の色の物に変えると、
        <br>違和感を覚えたり新たな発見があると思います。
        <br>主にPhotoshopなどデジタルツールを使い、様々な視点で「青色」を表現し、色の大切さや青の大切さを再確認できるよう目指して活動しています。
      </p>
      <div id="before-after">
        <div class="view view--after"></div>
        <div class="view view--before"></div>
        <div class="dragme"></div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>
</div>
