<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/style.css?ver='.G5_CSS_VER.'">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/custom.css?ver='.G5_CSS_VER.'">',0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) { ?>
<?php /*----- wrapper 시작 -----*/ ?>
<div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
    // 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/ ?>
    <header class="header">
        <div class="top-bar">
            <a href="#" class="logo">P2U</a>
            <div class="user-info">홍길동님 11,181,887 P2U</div>
            <nav class="nav-links">
                <a href="#">장바구니</a>
                <a href="#">위시리스트</a>
                <a href="#">주문/배송조회</a>
                <a href="#">이벤트</a>
                <a href="#">개인결제</a>
                <a href="#">사용후기</a>
                <a href="#">FAQ</a>
                <a href="#">1:1문의</a>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="상품명 검색">
                <button>🔍</button>
            </div>
            <button class="menu-toggle">☰</button>
        </div>

        <nav class="main-menu">
            <ul>
                <li><a href="#">전체상품</a></li>
                <li><a href="#">P2U소개</a></li>
                <li><a href="#">히트상품</a></li>
                <li><a href="#">브랜드관</a>
                    <ul class="dropdown">
                        <li><a href="#">뷰티/피부</a>
                            <ul class="submenu">
                                <li><a href="#">스킨케어</a></li>
                                <li><a href="#">메이크업</a></li>
                                <li><a href="#">헤어/바디</a></li>
                                <li><a href="#">남성전용 화장품</a></li>
                                <li><a href="#">향수</a></li>
                                <li><a href="#">뷰티기기/소품</a></li>
                            </ul>
                        </li>
                        <!-- Add other main categories similarly -->
                    </ul>
                </li>
                <li><a href="#">추석선물</a></li>
                <li><a href="#">이벤트</a></li>
                <li><a href="#">공모전</a></li>
            </ul>
        </nav>
    </header>
    <?php /*----- header 끝 -----*/ ?>

    <?php if(!defined('_INDEX_')) { // 메인이 아닐때 ?>
    <?php /*----- page title 시작 -----*/ ?>
    <div class="page-title-wrap">
        <div class="container">
        <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
            <h2>
                <?php if (!$it_id) { ?>
                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                <?php } else { ?>
                <span class="f-s-14r"><i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                <?php } ?>
            </h2>
            <?php if (!$it_id) { ?>
            <div class="sub-breadcrumb-wrap">
                <ul class="sub-breadcrumb hidden-xs">
                    <?php echo $subinfo['path']; ?>
                </ul>
            </div>
            <?php } ?>
        <?php } else { ?>
            <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
        <?php } ?>
        </div>
    </div>
    <?php /*----- page title 끝 -----*/ ?>
    <?php } ?>

    <div class="basic-body <?php if(!defined('_INDEX_')) { ?>page-body<?php } ?>">
        <?php if(defined('_INDEX_')) { ?>
        <div class="main-slider-top">
            <?php /* EB슬라이더 - basic */ ?>
            <?php echo eb_slider('1516512257'); ?>
        </div>
        <?php } ?>
        <div class="container">
            <?php if ($side_layout['use'] == 'yes') { ?>
            <div class="main-wrap">
                <?php
                if ($side_layout['pos'] == 'left') {
                    /* 사이드영역 시작 */
                    include_once(EYOOM_THEME_PATH . '/side.html.php');
                    /* 사이드영역 끝 */
                }
                ?>
                <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') { echo 'right'; } else { echo 'left'; }?>-main">
            <?php } else { ?>
            <div class="main-wrap">
                <main class="basic-body-main">
            <?php } ?>
<?php } // !$wmode ?>
