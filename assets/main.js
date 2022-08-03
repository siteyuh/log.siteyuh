var infScroll = new InfiniteScroll('div.page', {
  append: '.post',
  path: 'a.next',
  hideNav: 'aside.page',
  button: '#more-button',
  scrollThreshold: false,
  status: '.scroller-status',
  history: 'push',
});

function toggle_menu() {
  var fMenu = document.getElementById('menu_win').style.display;
  if ( fMenu == 'block' ) {// block
    document.getElementById( 'menu_win' ).style.display = 'none';
    document.menu_btn.src = '/assets/menu.svg';
  } else {// none
    document.getElementById( 'menu_win' ).style.display = 'block'
    document.menu_btn.src = '/assets/close.svg';
  }
}

function close_menu() {
  document.getElementById( 'menu_win' ).style.display = 'none';
}

function close_window() {
  window.close();
}