<?php get_header(); ?>
<!-- 都度ページごとのID指定 -->

<body>
  <div class="Wrapper">
    <div class="Loading">
      <div class="Loading__Gif">
        <img src="/img/hc_loading_short.gif" alt="Loading..." width="300" height="300">
      </div>
    </div>
    <div class="TopHero">
      <h2 class="HeroLogo"><img src="/img/logo_hero.svg" alt="HandＣ"></h2>
      <!-- top動画 -->
      <div class="TopbgvWrapper pc">
        <!-- <div class="yt-video">
          <div id="player" class="yt-video"></div>
        </div> -->
      </div>
      <!--top動画ここまで -->
      <a href="#" class="VideoPlay sp">PLAY VIDEO</a>
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
