<aside class="menu">
  <button class="toggle-menu" onclick="toggle_menu()"><img src="https://motebody.siteyuh.com/assets/menu.svg" alt="open menu"></button>
  <div id="menu_win" style="display:none;">
    <div class="close" onclick="close_menu()"><img src="https://motebody.siteyuh.com/assets/close.svg" alt="close menu"></div>
    <?php get_search_form(); ?>
    <div class="tag">
      <h3 class="menu_title">Tags</h3>
      <p class="sep">
      <?php
        wp_tag_cloud( 'smallest=8&largest=20' );
      ?>
      </p>
    </div>
    <div class="cat">
      <h3 class="menu_title">Categories</h3>
      <p class="sep">
      <?php
        $categories = get_categories('pad_counts=1&hide_empty=1');
        foreach( $categories as $category ) {
          echo '<a href="'.get_category_link($category->term_id).'">';
          echo $category->name.'</a>'.PHP_EOL;
        }
      ?>
      </p>
    </div>
    <div class="link">
      <h3 class="menu-title">Links</h3>
      <p class="sep">
        <a href="https://twitter.com/GeorgeKawaii" target="_blank" onclick="gtag('event', 'click', {'event_category':'link', 'event_label':'twitter', 'value':'1'})">
          <img src="https://motebody.siteyuh.com/assets/twitter.svg" alt="">妄想ッター</a>
        <a href="https://siteyuh.com" onclick="gtag('event', 'click', {'event_category':'link', 'event_label':'siteyuh', 'value':'1'})">
        プロフィールサイト</a>
        <a href="/q/" target="_blank" onclick="gtag('event', 'click', {'event_category':'link', 'event_label':'questionnaire', 'value':'1'})">
        アンケート</a>
      </p>
    </div>
  </div>
</aside>