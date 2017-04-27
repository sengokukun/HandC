<?php get_header(); ?>
<!-- 都度ページごとのID指定 -->

<body>
  <div class="Wrapper">
    <div class="Loading">
      <div class="Loading__Gif">
        <img src="/img/hc_loading_short.gif" alt="Loading..." width="300" height="300">
      </div>
    </div>
    <div class="Gloval">
      <div class="Top">
        <?php get_template_part('global-head'); ?>
        <?php get_footer(); ?>
      </div>
    </div>
  </div>
  <!-- SCRIPTS -->
  <script src="/js/style.js"></script>
</body>

</html>
