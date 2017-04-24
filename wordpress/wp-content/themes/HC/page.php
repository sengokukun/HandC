<?php
/*
Template Name: 固定ページの新規テンプレート１
*/
?>

<?php get_header(); ?>

<div class="Wrapper">
  <div class="Loading">
    <div class="Loading__Gif">
      <img src="../img/hc_loading_short.gif" alt="Loading..." width="300" height="300">
    </div>
  </div>
  <div class="Gloval">
    <div class="Sub">
      <?php get_template_part('global-head'); ?>

      <?php get_footer(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<!-- SCRIPTS -->
<script src="../js/style.js"></script>
