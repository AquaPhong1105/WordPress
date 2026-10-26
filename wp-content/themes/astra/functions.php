<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.12.6' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.12.0' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-command-palette.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-memory-limit-notice.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-learn.php';
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-buddypress.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Abilities API integration.
 */
require_once ASTRA_THEME_DIR . 'inc/abilities/bootstrap.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';
/**
* ==================================================================================================================================================================
*                                                        SHORTCODE GIAO DIỆN
* ==================================================================================================================================================================
*/
/*




DÙNG CTRL H MÀ TÌM:


[icon_gio_hang] : Icon giỏ hàng
[giao_dien_gio_hang] : Trang giỏ hàng
[hien_thi_hoa_don] : Trang đơn mua
[hien_thi_tin_tuc] : Trang tin tức
[hien_thi_san_pham] : Trang sản phẩm
[form_yeu_cau_dong] : Trang dịch vụ
[form_lien_he_tu_code] : Trang liên hệ
[danh_sach_thanh_vien] : Trang thành viên



*/
/**
 * ==========================================
 * SHORTCODE HIỂN THỊ ICON GIỎ HÀNG 
 * Sử dụng: [icon_gio_hang]
 * ==========================================
 */
add_shortcode('icon_gio_hang', 'hien_thi_icon_gio_hang_shopee');
function hien_thi_icon_gio_hang_shopee() {
    global $wpdb;
    $count = 0;
    $tong_tien = 0;
    $items_html = '';

    if (isset($_SESSION['my_cart']) && !empty($_SESSION['my_cart'])) {
        foreach ($_SESSION['my_cart'] as $id => $qty) {
            $count += $qty;
            
            $row = $wpdb->get_row($wpdb->prepare("SELECT * FROM sanpham WHERE MaSanPham = %s", $id), ARRAY_A);
            
            if ($row) {
                $tien_item = $row['Gia'] * $qty;
                $tong_tien += $tien_item;
                $items_html .= '
                <div style="display:flex; align-items:center; gap:10px; padding:10px; border-bottom:1px solid #eee;">
                    <img src="'.esc_url($row['HinhAnh']).'" style="width:40px; height:40px; object-fit:contain; border-radius:3px;">
                    <div style="flex:1; text-align:left; font-size:12px; color:#333;">
                        <div style="font-weight:bold; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; width:150px;">'.esc_html($row['TenSanPham']).'</div>
                        <div style="color:#888;">'.$qty.' x <span style="color:#ee4d2d;">'.number_format($row['Gia'],0,',','.').'đ</span></div>
                    </div>
                </div>';
            }
        }
    }

    ob_start();
    ?>
    <div class="shopee-cart-container">
        <a href="<?php echo home_url('/gio-hang/'); ?>" class="cart-icon-main">
            <span style="font-size: 36px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));">🛒</span>
            <?php if ($count > 0): ?>
                <span class="cart-badge"><?php echo $count; ?></span>
            <?php endif; ?>
        </a>

        <div class="mini-cart-hover">
            <?php if ($count > 0): ?>
                <div style="padding:10px; font-weight:bold; color:#888; font-size:12px; text-align:left; border-bottom:1px solid #f5f5f5;">Sản phẩm mới thêm</div>
                <div class="mini-cart-list" style="max-height:300px; overflow-y:auto;">
                    <?php echo $items_html; ?>
                </div>
                <div style="padding:15px; text-align:right; background:#fafafa; border-radius: 0 0 4px 4px;">
                    <div style="margin-bottom:10px; font-size:14px;">Tổng tiền: <span style="color:#ee4d2d; font-weight:bold;"><?php echo number_format($tong_tien,0,',','.'); ?>đ</span></div>
                    <a href="<?php echo home_url('/gio-hang/'); ?>" style="background:#ee4d2d; color:#fff; padding:8px 15px; text-decoration:none; border-radius:2px; font-size:13px; display:inline-block;">Xem Giỏ Hàng</a>
                </div>
            <?php else: ?>
                <div style="padding:40px 20px; color:#888; text-align:center;">
                    <div style="font-size:40px; margin-bottom:10px;">🛒</div>
                    <div>Chưa có sản phẩm</div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <style>
        .shopee-cart-container { position: relative; display: inline-block; vertical-align: middle; z-index: 99999; margin-left: 20px; }
        .cart-icon-main { text-decoration: none; display: block; padding: 5px; transition: transform 0.2s; position: relative; }
        .cart-icon-main:hover { transform: scale(1.1); }
        
        .cart-badge { 
            position: absolute; 
            top: -5px;          
            right: -12px;       
            background: #ee4d2d; 
            color: #fff; 
            font-size: 11px;    
            font-weight: bold; 
            padding: 0 6px;    
            min-width: 20px;    
            height: 30px;       
            line-height: 25px;  
            border-radius: 10px;
            text-align: center;
            border: 2px solid #fff; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            white-space: nowrap;
            display: inline-block;
        }
        
        .mini-cart-hover { 
            position: absolute; top: 100%; right: 0; width: 300px; background: #fff; 
            box-shadow: 0 5px 25px rgba(0,0,0,0.2); border-radius: 4px;
            display: none; transform-origin: top right; animation: fadeIn 0.3s;
            z-index: 100000;
        }
        .shopee-cart-container:hover .mini-cart-hover { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: scale(0.9); } to { opacity: 1; transform: scale(1); } }
    </style>
    <?php
    return ob_get_clean();
}
/**
 * ==========================================
 * LOGIC ICON GIỎ HÀNG 
 * ==========================================
 */
/**
 * 1. Khởi tạo Session
 */
// --- ĐOẠN CODE XỬ LÝ REDIRECT  ---
add_action('init', function() {
    if (!session_id()) { session_start(); }
});
add_action('template_redirect', function() {
    if (isset($_GET['add_to_cart'])) {
        $id_sp = sanitize_text_field($_GET['add_to_cart']);
        if (!isset($_SESSION['my_cart'])) {
            $_SESSION['my_cart'] = array();
        }
        if (isset($_SESSION['my_cart'][$id_sp])) {
            $_SESSION['my_cart'][$id_sp]++;
        } else {
            $_SESSION['my_cart'][$id_sp] = 1;
        }
        wp_redirect('/thaolinhmateco/gio-hang/');
        exit;
    }
});


add_action('wp_footer', function() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(document).on('click', 'a[href*="add_to_cart"]', function(e) {
            e.preventDefault();
            var $this = $(this);
            var urlString = $this.attr('href');
            
            var url = new URL(urlString, window.location.origin);
            var id_sp = url.searchParams.get('add_to_cart');

            if(!id_sp) return;

            var originalText = $this.text();
            $this.text('...');

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'them_vao_gio_ajax',
                    id_sp: id_sp
                },
                success: function(response) {
                    $('.shopee-cart-container').replaceWith(response);
                    $this.text(originalText);
                    alert('Đã thêm sản phẩm vào giỏ hàng thành công! Hãy điều chỉnh số lượng sản phẩm trong trang giỏ hàng');
                }
            });
        });
    });
    </script>
    <?php
});


add_action('wp_ajax_them_vao_gio_ajax', 'xu_ly_them_gio_ajax');
add_action('wp_ajax_nopriv_them_vao_gio_ajax', 'xu_ly_them_gio_ajax');
function xu_ly_them_gio_ajax() {
    $id_sp = sanitize_text_field($_POST['id_sp']);
    if (!isset($_SESSION['my_cart'])) { $_SESSION['my_cart'] = array(); }
    
    if (isset($_SESSION['my_cart'][$id_sp])) {
        $_SESSION['my_cart'][$id_sp]++;
    } else {
        $_SESSION['my_cart'][$id_sp] = 1;
    }
    
    echo hien_thi_icon_gio_hang_shopee();
    wp_die();
}
































/**
 * ==========================================
 * SHORTCODE HIỂN THỊ TRANG GIỎ HÀNG 
 * Sử dụng: [giao_dien_gio_hang]
 * ==========================================
 */
add_shortcode('giao_dien_gio_hang', 'thaolinh_show_cart_advanced');

function thaolinh_show_cart_advanced() {
    if (!session_id()) { session_start(); }

    $conn = new mysqli("localhost", "root", "", "wordpress_db");
    $conn->set_charset("utf8mb4");

    if (isset($_GET['remove_item'])) {
        unset($_SESSION['my_cart'][$_GET['remove_item']]);
        echo "<script>window.location.href='".home_url('/gio-hang/')."';</script>";
        exit;
    }
    if (isset($_GET['empty_cart'])) {
        unset($_SESSION['my_cart']);
        echo "<script>window.location.href='".home_url('/gio-hang/')."';</script>";
        exit;
    }

    if (!isset($_SESSION['my_cart']) || empty($_SESSION['my_cart'])) {
        return '<div style="text-align:center; padding: 50px; border: 1px solid #ddd; border-radius: 10px;">
                    <h2 style="color: #555;">Giỏ hàng của bạn đang trống</h2>
                    <a href="'.home_url('/chi-tiet-san-pham/').'" style="display:inline-block; margin-top:20px; padding:10px 25px; background:#2980b9; color:#fff; text-decoration:none; border-radius:5px;">Quay lại cửa hàng</a>
                </div>';
    }

    $html = '<div class="cart-wrapper" style="max-width: 1000px; margin: 0 auto; font-family: Arial, sans-serif;">';
    $html .= '<h2 style="color: #003366; border-bottom: 2px solid #2980b9; padding-bottom: 10px; margin-bottom: 20px;">Giỏ hàng của bạn</h2>';
    
    $html .= '<table style="width: 100%; border-collapse: collapse; background: #fff; border: 1px solid #ddd;">';
    $html .= '<tr style="background: #2980b9; color: #fff;">
                <th style="padding: 12px; text-align: left; width: 40%;">Sản phẩm</th>
                <th style="padding: 12px; text-align: center; width: 15%;">Giá</th>
                <th style="padding: 12px; text-align: center; width: 15%;">Số lượng</th>
                <th style="padding: 12px; text-align: center; width: 20%;">Thành tiền</th>
                <th style="padding: 12px; text-align: center; width: 10%;">Xóa</th>
              </tr>';

    $tong_cong = 0;
    foreach ($_SESSION['my_cart'] as $id => $soluong) {
        $sql = "SELECT * FROM sanpham WHERE MaSanPham = '" . $conn->real_escape_string($id) . "'";
        $res = $conn->query($sql);
        if ($row = $res->fetch_assoc()) {
            $thanh_tien = (int)$row['Gia'] * $soluong;
            $tong_cong += $thanh_tien;
            
            $html .= '<tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px; text-align: left;">
                            <div style="display: inline-block; vertical-align: middle; margin-right: 15px;">
                                <img src="'.esc_url($row['HinhAnh']).'" style="width: 50px; height: auto;">
                            </div>
                            <div style="display: inline-block; vertical-align: middle;">
                                <strong>'.esc_html($row['TenSanPham']).'</strong><br>
                                <small style="color: #666;">Mã Sản Phẩm: '.$id.'</small>
                            </div>
                        </td>
                        <td style="padding: 12px; text-align: center;">'.number_format($row['Gia'], 0, ',', '.').'đ</td>
                        <td style="padding: 12px; text-align: center;">
                            <input type="number" class="update-qty" data-id="'.$id.'" value="'.$soluong.'" min="1" style="width: 60px; padding: 5px; text-align: center; border: 1px solid #ccc; border-radius: 4px;">
                        </td>
                        <td class="line-total-display" style="padding: 12px; text-align: center; font-weight: bold; color: #e74c3c;">'.number_format($thanh_tien, 0, ',', '.').'đ</td>
                        <td style="padding: 12px; text-align: center;">
                            <a href="?remove_item='.$id.'" style="color: #e74c3c; font-size: 18px; text-decoration: none;" title="Xóa">&times;</a>
                        </td>
                      </tr>';
        }
    }
    $html .= '</table>';

    $html .= '<div style="margin-top: 20px; text-align: right; padding: 20px; background: #f8f9fa; border: 1px solid #ddd;">';
    $html .= '<h3 style="margin: 0 0 15px 0; color: #333;">Tổng cộng: <span id="grand-total-display" style="color: #e74c3c; font-size: 24px;">' . number_format($tong_cong, 0, ',', '.') . ' VNĐ</span></h3>';
    $html .= '<a href="?empty_cart=1" style="color: #666; text-decoration: none; margin-right: 20px; font-size: 15px;">Xóa sạch giỏ hàng</a>';
    $html .= '<button type="button" id="btn-open-info" style="padding: 12px 30px; background: #27ae60; color: #fff; border: none; cursor: pointer; font-weight: bold; font-size: 16px; border-radius: 4px;">LẬP HOÁ ĐƠN</button>';
    $html .= '</div>';

    $html .= '
    <div id="info-modal" style="display:none; position:fixed; z-index:99999; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.5);">
        <div style="background:#fff; margin: 8% auto; width:400px; padding:25px; border-radius:8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
            <h3 style="margin-top:0; border-bottom: 1px solid #eee; padding-bottom: 10px;">Thông tin khách hàng</h3>
            <div style="margin-bottom: 10px;">
                <input type="text" id="cus-name" placeholder="Họ và tên" style="width:100%; padding:10px; box-sizing: border-box; border:1px solid #ccc; border-radius:4px;">
            </div>
            <div style="margin-bottom: 10px;">
                <input type="text" id="cus-phone" placeholder="Số điện thoại" style="width:100%; padding:10px; box-sizing: border-box; border:1px solid #ccc; border-radius:4px;">
            </div>
            <div style="margin-bottom: 10px;">
                <input type="text" id="cus-addr" placeholder="Địa chỉ giao hàng" style="width:100%; padding:10px; box-sizing: border-box; border:1px solid #ccc; border-radius:4px;">
            </div>
            <div style="margin-bottom: 15px;">
                <input type="email" id="cus-email" placeholder="Email" style="width:100%; padding:10px; box-sizing: border-box; border:1px solid #ccc; border-radius:4px;">
            </div>
            <button id="btn-confirm-final" style="background:#2980b9; color:white; padding:12px; width:100%; border:none; border-radius:4px; cursor:pointer; font-weight:bold; font-size: 15px;">Xác nhận</button>
            <button class="close-modal" style="margin-top:10px; width:100%; background:#f1f1f1; border:1px solid #ccc; padding:10px; border-radius:4px; cursor:pointer; color: #333;">Đóng</button>
        </div>
    </div>';

    $ajax_url = admin_url('admin-ajax.php');
    $redirect_url = home_url('/gio-hang/hoa-don/');

    $html .= '
    <script>
    jQuery(document).ready(function($){
        var wp_ajax_url = "' . $ajax_url . '";
        var invoice_url = "' . $redirect_url . '";

        function formatVND(n) {
            return n.toLocaleString("vi-VN");
        }

        $(".update-qty").on("change", function(){
            var input = $(this);
            var id = input.data("id");
            var qty = input.val();

            if(qty < 1 || qty === "") {
                alert("Số lượng phải lớn hơn 0");
                input.val(1);
                qty = 1;
            }

            input.prop("disabled", true);

            $.ajax({
                url: wp_ajax_url,
                type: "POST",
                data: {
                    action: "thaolinh_update_qty", 
                    product_id: id,
                    new_qty: qty
                },
                success: function(response) {
                    input.prop("disabled", false);
                    if(response.status === "success") {
                        input.closest("tr").find(".line-total-display").text(formatVND(response.line_total) + "đ");
                        $("#grand-total-display").text(formatVND(response.grand_total) + " VNĐ");
                    }
                },
                error: function(xhr, status, error) {
                    input.prop("disabled", false);
                    alert("Lỗi kết nối máy chủ WordPress!");
                }
            });
        });

        $("#btn-open-info").click(function(){ $("#info-modal").fadeIn(200); });
        $(".close-modal").click(function(){ $("#info-modal").fadeOut(200); });

        $("#btn-confirm-final").click(function(){
            var btn = $(this);
            var name = $("#cus-name").val().trim();
            var phone = $("#cus-phone").val().trim();
            var addr = $("#cus-addr").val().trim();
            var email = $("#cus-email").val().trim();

            if(!name || !phone || !addr || !email) {
                alert("Vui lòng điền đầy đủ tất cả thông tin!");
                return;
            }

            btn.text("Đang xử lý...").prop("disabled", true);

            $.post(wp_ajax_url, {
                action: "thaolinh_save_customer", 
                cus_name: name,
                cus_phone: phone,
                cus_addr: addr,
                cus_email: email
            }, function(response) {
                if(response.success) {
                    window.location.href = invoice_url;
                } else {
                    alert("Lỗi: " + (response.data ? response.data.message : "Vui lòng thử lại!"));
                    btn.text("Xác nhận").prop("disabled", false);
                }
            });
        });
    });
    </script></div>';

    $conn->close();
    return $html;
}
/**
 * ==========================================
 * LOGIC TRANG GIỎ HÀNG
 * ==========================================
 */
// =================================================================
// 1. AJAX: CẬP NHẬT SỐ LƯỢNG TRONG GIỎ HÀNG
// =================================================================
add_action('wp_ajax_thaolinh_update_qty', 'thaolinh_ajax_update_qty');
add_action('wp_ajax_nopriv_thaolinh_update_qty', 'thaolinh_ajax_update_qty');

function thaolinh_ajax_update_qty() {
    if (!session_id()) { session_start(); }
    $conn = new mysqli("localhost", "root", "", "wordpress_db");
    $conn->set_charset("utf8mb4");

    $id = isset($_POST['product_id']) ? $_POST['product_id'] : '';
    $qty = isset($_POST['new_qty']) ? intval($_POST['new_qty']) : 0;
    
    if ($qty > 0) {
        $_SESSION['my_cart'][$id] = $qty;
    } else {
        unset($_SESSION['my_cart'][$id]);
    }

    $new_line_total = 0;
    $new_grand_total = 0;

    if (!empty($_SESSION['my_cart'])) {
        foreach ($_SESSION['my_cart'] as $pid => $pqty) {
            $sql = "SELECT Gia FROM sanpham WHERE MaSanPham = '" . $conn->real_escape_string($pid) . "'";
            $res = $conn->query($sql);
            if ($row = $res->fetch_assoc()) {
                $item_total = (int)$row['Gia'] * $pqty;
                $new_grand_total += $item_total;
                if ($pid == $id) { $new_line_total = $item_total; }
            }
        }
    }
    $conn->close();

    wp_send_json([
        'status'      => 'success',
        'line_total'  => $new_line_total,
        'grand_total' => $new_grand_total
    ]);
}
// =================================================================
// AJAX: LƯU THÔNG TIN KHÁCH HÀNG KHI LẬP HOÁ ĐƠN (TỪ POPUP)
// =================================================================
add_action('wp_ajax_thaolinh_save_customer', 'thaolinh_ajax_save_customer');
add_action('wp_ajax_nopriv_thaolinh_save_customer', 'thaolinh_ajax_save_customer');

function thaolinh_ajax_save_customer() {
    if (!session_id()) { session_start(); }

    $name  = isset($_POST['cus_name']) ? sanitize_text_field($_POST['cus_name']) : '';
    $phone = isset($_POST['cus_phone']) ? sanitize_text_field($_POST['cus_phone']) : '';
    $addr  = isset($_POST['cus_addr']) ? sanitize_text_field($_POST['cus_addr']) : '';
    $email = isset($_POST['cus_email']) ? sanitize_email($_POST['cus_email']) : '';

    if (empty($name) || empty($phone) || empty($addr) || empty($email)) {
        wp_send_json_error(['message' => 'Vui lòng điền đầy đủ thông tin!']);
        return;
    }

    $_SESSION['customer_data'] = [
        'name' => $name, 'phone' => $phone, 'addr' => $addr, 'email' => $email
    ];

    wp_send_json_success();
}













































/**
 * ==========================================
 * SHORTCODE HIỂN THỊ TRANG HOÁ ĐƠN 
 * Sử dụng: [hien_thi_hoa_don]
 * ==========================================
 */
add_shortcode('hien_thi_hoa_don', 'thaolinh_invoice_with_pro_popup');

function thaolinh_invoice_with_pro_popup() {
    if (!session_id()) { session_start(); }
    $cart = isset($_SESSION['my_cart']) ? $_SESSION['my_cart'] : [];
    $cus  = isset($_SESSION['customer_data']) ? $_SESSION['customer_data'] : [];

    if (empty($cart)) { return "Dữ liệu giỏ hàng trống."; }

    $conn = new mysqli("localhost", "root", "", "wordpress_db");
    $conn->set_charset("utf8mb4");

    ob_start();
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    
    <style>
        .preview-area { background: #525659; padding: 40px 0; min-height: 100vh; font-family: sans-serif; }
        
        #invoice-box {
            background: #fff; width: 210mm; min-height: 296mm; margin: 0 auto;
            padding: 20mm; box-sizing: border-box; font-family: "Times New Roman", serif;
            color: #000; line-height: 1.4; box-shadow: 0 0 15px rgba(0,0,0,0.5); overflow: hidden;
        }

        .inv-table { width: 100%; border-collapse: collapse; margin-top: 20px; border: 1px solid #000; }
        .inv-table th, .inv-table td { border: 1px solid #000; padding: 10px; text-align: center; font-size: 11pt; }
        .header-section { text-align: right; margin-bottom: 25px; }
        .title-section { text-align: center; margin-bottom: 30px; }
        .title-section h2 { margin: 0; font-size: 16pt; font-weight: bold; }
        .signature-grid { margin-top: 60px; width: 100%; display: table; }
        .signature-col { display: table-cell; width: 50%; text-align: center; vertical-align: top; }

        .control-btns { text-align: center; margin-top: 30px; }
        .btn-invoice { 
            color: #fff; padding: 12px 30px; border: none; border-radius: 5px; 
            cursor: pointer; font-weight: bold; font-size: 16px; margin: 0 10px;
            display: inline-block; text-decoration: none; transition: 0.2s;
        }
        .btn-pay-trigger { background: #27ae60; }
        .btn-pdf-download { background: #e74c3c; }
        
        .btn-home { background: #2980b9; color: #fff; }
        .btn-home:hover { color: #40FF00 !important; } 
        
        .btn-invoice:hover { opacity: 0.9; }

        #payment-modal {
            display:none; position:fixed; z-index:99999; left:0; top:0; width:100%; height:100%; 
            background:rgba(0,0,0,0.6); align-items: center; justify-content: center;
        }
        .modal-content {
            background:#fff; width:400px; border-radius:10px; overflow:hidden; 
            box-shadow:0 5px 20px rgba(0,0,0,0.3); font-family: sans-serif;
        }
        .modal-header {
            padding:15px; border-bottom:1px solid #eee; display:flex; 
            justify-content:space-between; font-weight:bold; color:#333;
        }
        .modal-body { padding:30px; text-align:center; }
        .modal-body img { margin-bottom:20px; border:1px solid #eee; padding:5px; }
        .modal-footer {
            padding:15px; background:#f8f9fa; display:flex; justify-content:center; gap:10px;
        }
        .btn-final { background:#5cb8ff; color:white; border:none; padding:10px 20px; border-radius:4px; cursor:pointer; font-weight:bold; }
        .btn-close { background:#6c757d; color:white; border:none; padding:10px 20px; border-radius:4px; cursor:pointer; }
    </style>

    <div class="preview-area">
        <div id="invoice-box">
            <div class="header-container" style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
        <div class="logo-section">
            <img src="http://localhost/thaolinhmateco/images/logo/logo.png" alt="Logo" style="max-height: 70px; width: auto;margin-top: -10px;">
        </div>
        <div class="header-section" style="text-align: right;">
            <strong>Mẫu số: MH-01</strong><br>
            <i style="font-size: 10pt;">(Ban hành nội bộ)</i>
        </div>
    </div>

    <div class="title-section" style="text-align: center;">
        <h2>BẢNG KÊ THU MUA HÀNG HÓA, DỊCH VỤ</h2>
        <h3 style="margin:5px 0;">ĐƠN MUA</h3>
        <p>Ngày <?php echo date('d'); ?> tháng <?php echo date('m'); ?> năm <?php echo date('Y'); ?></p>
    </div>

            <div style="font-size: 12pt; line-height: 2;">
                - Tên doanh nghiệp: <strong>CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ HÀNG HẢI THẢO LINH</strong><br>
                - Mã số thuế: 0201288490<br>
                - Địa chỉ doanh nghiệp: Số 36, BT 3, khu biệt thự Anh Dũng 8, Hải Phòng<br>
                - Tên người mua hàng: <strong><?php echo esc_html($cus['name'] ?? '...'); ?></strong><br>
                - Địa chỉ nơi thu mua: <?php echo esc_html($cus['addr'] ?? '...'); ?><br>
                - Số điện thoại người mua: <?php echo esc_html($cus['phone'] ?? '...'); ?><br>
                - Email người mua: <?php echo esc_html($cus['email'] ?? '...'); ?><br>
                - Trạng thái: <strong id="payment-status" style="color: #e74c3c;">Chưa thanh toán</strong>
            </div>

            <table class="inv-table">
                <thead>
                    <tr style="font-weight: bold; background: #f2f2f2;">
                        <th width="5%">STT</th>
                        <th width="35%">Tên hàng hóa, dịch vụ</th>
                        <th width="25%">Thời gian bảo hành</th>
                        <th width="5%">SL</th>
                        <th width="12%">Đơn giá</th>
                        <th width="18%">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $stt = 1; $total = 0;
                    foreach ($cart as $id => $sl): 
                        $sql = "SELECT sp.*, dm.ThoiGianBaoHanh 
                                FROM sanpham sp 
                                LEFT JOIN danhmucsanpham dm ON sp.MaLoaiSanPham = dm.MaLoaiSanPham 
                                WHERE sp.MaSanPham = '".$conn->real_escape_string($id)."'";
                        $res = $conn->query($sql);
                        $sp = $res->fetch_assoc();
                        $sub = $sp['Gia'] * $sl; $total += $sub;
                        $thang_bh = isset($sp['ThoiGianBaoHanh']) ? (int)$sp['ThoiGianBaoHanh'] : 0;
                    ?>
                    <tr>
                        <td><?php echo $stt++; ?></td>
                        <td style="text-align: left; padding: 5px 10px;"><?php echo esc_html($sp['TenSanPham']); ?></td>
                        <td style="text-align: center;">
                            <?php 
                            if($thang_bh > 0) {
                                $time_target = strtotime("+$thang_bh months");
                                echo "{$thang_bh} tháng<br><i style='font-size: 10pt; color: #555;'>(Đến hết ngày ".date('d', $time_target)." tháng ".date('m', $time_target)." năm ".date('Y', $time_target).")</i>";
                            } else {
                                echo "Không bảo hành";
                            }
                            ?>
                        </td>
                        <td><?php echo $sl; ?></td>
                        <td style="text-align: center;"><?php echo number_format($sp['Gia'], 0, ',', '.'); ?></td>
                        <td style="text-align: center; font-weight: bold;"><?php echo number_format($sub, 0, ',', '.'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr style="font-weight: bold;">
                        <td colspan="5" style="text-align: right; padding-right: 15px;">Tổng cộng (VNĐ):</td>
                        <td style="color: red; text-align: center;"><?php echo number_format($total, 0, ',', '.'); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="signature-grid">
                <div class="signature-col"><strong>Người lập bảng kê</strong><br><i>(Ký tên)</i><br><br><br><br></div>
                <div class="signature-col"><strong>Đại diện doanh nghiệp</strong><br><i>(Đóng dấu)</i></div>
            </div>
        </div>

        <div class="control-btns">
            <button onclick="openQR()" class="btn-invoice btn-pay-trigger" id="btn-show-qr">THANH TOÁN</button>
            <button onclick="downloadHardCopy()" class="btn-invoice btn-pdf-download">TẢI HÓA ĐƠN VỀ</button>
            <a href="<?php echo home_url(); ?>" class="btn-invoice btn-home">QUAY LẠI TRANG CHỦ</a>
        </div>
    </div>

    <div id="payment-modal">
        <div class="modal-content">
            <div class="modal-header">
                <span>Xác nhận thanh toán giỏ hàng</span>
                <span onclick="closeQR()" style="cursor:pointer; font-size:20px;">&times;</span>
            </div>
            <div class="modal-body">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=220x220&data=ThanhToan_TOL_<?php echo $total; ?>" style="width:220px; height:220px;">
                <p style="margin:5px 0; font-size:15px;">Số tiền thanh toán: <strong style="color:#e74c3c;"><?php echo number_format($total, 0, ',', '.'); ?> đ</strong></p>
                <p style="margin:5px 0; font-size:14px; color:#555;">Ngân hàng: <strong>Ngân hàng TMCP Sài Gòn - Hà Nội (SHB)</strong></p>
            </div>
            <div class="modal-footer">
                <button onclick="finishOrder()" class="btn-final">Xác nhận thanh toán</button>
                <button onclick="closeQR()" class="btn-close">Đóng</button>
            </div>
        </div>
    </div>

    <script>
    function openQR() { document.getElementById('payment-modal').style.display = 'flex'; }
    function closeQR() { document.getElementById('payment-modal').style.display = 'none'; }

    function finishOrder() {
        var btn = document.querySelector('.btn-final');
        btn.innerText = "Đang xử lý...";
        btn.disabled = true;

        jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', {
            action: 'thaolinh_update_payment_status'
        }, function(response) {
            if(response.success) {
                alert("Cảm ơn bạn! Bạn đã hoàn thành quá trình thanh toán! Đơn hàng đã được lưu.");
                
                const statusElement = document.getElementById('payment-status');
                if(statusElement) {
                    statusElement.innerText = "Đã thanh toán";
                    statusElement.style.color = "#27ae60"; 
                }
                
                document.getElementById('btn-show-qr').style.display = 'none';
                closeQR();
            } else {
                alert(response.data ? response.data.message : "Có lỗi xảy ra, vui lòng thử lại!");
                btn.innerText = "Xác nhận thanh toán";
                btn.disabled = false;
            }
        }).fail(function() {
            alert("Lỗi kết nối máy chủ! Vui lòng thử lại.");
            btn.innerText = "Xác nhận thanh toán";
            btn.disabled = false;
        });
    }

    function downloadHardCopy() {
        const element = document.getElementById('invoice-box');
        const opt = {
            margin: 0,
            filename: 'hoa-don-thaolinh.pdf',
            image: { type: 'jpeg', quality: 1 },
            html2canvas: { scale: 2, useCORS: true, scrollX: 0, scrollY: 0, width: element.clientWidth, height: element.clientHeight },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };
        html2pdf().set(opt).from(element).save();
    }
    </script>
    <?php
    $conn->close();
    return ob_get_clean();
}
/**
 * ==========================================
 * LOGIC TRANG HOÁ ĐƠN 
 * ==========================================
 */
// ===============================================================================================
// AJAX: XÁC NHẬN ĐƠN MUA LƯU VÀO DATABASE VÀ TRẢ VỀ MÃ ĐƠN KHI KHÁCH HÀNG XÁC NHẬN THANH TOÁN
// =================================================================================================
add_action('wp_ajax_thaolinh_update_payment_status', 'thaolinh_update_payment_status');
add_action('wp_ajax_nopriv_thaolinh_update_payment_status', 'thaolinh_update_payment_status');

function thaolinh_update_payment_status() {
    if (!session_id()) { session_start(); }

    $cart = isset($_SESSION['my_cart']) ? $_SESSION['my_cart'] : [];
    $cus  = isset($_SESSION['customer_data']) ? $_SESSION['customer_data'] : [];

    if (empty($cart) || empty($cus)) {
        wp_send_json_error(['message' => 'Dữ liệu giỏ hàng trống hoặc đã hết hạn!']);
        return;
    }

    $conn = new mysqli("localhost", "root", "", "wordpress_db");
    $conn->set_charset("utf8mb4");

    if ($conn->connect_error) {
        wp_send_json_error(['message' => 'Lỗi kết nối CSDL.']);
        return;
    }

    $tong_tien = 0;
    $order_items = [];

    foreach ($cart as $id_sp => $qty) {
        $sql = "SELECT Gia FROM sanpham WHERE MaSanPham = '" . $conn->real_escape_string($id_sp) . "'";
        $res = $conn->query($sql);
        if ($row = $res->fetch_assoc()) {
            $price = floatval($row['Gia']);
            $thanh_tien = $price * $qty;
            $tong_tien += $thanh_tien;
            
            $order_items[] = [
                'id_sp' => $id_sp, 'qty' => $qty, 'price' => $price, 'thanh_tien' => $thanh_tien
            ];
        }
    }

    $ngay_lap = date('Y-m-d');
    $trang_thai = 'Đã thanh toán'; 

    $stmt = $conn->prepare("INSERT INTO donmua (TenKhachHang, NoiNhan, NgayLap, Gmail, SDT, TongTien, TrangThai) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssds", $cus['name'], $cus['addr'], $ngay_lap, $cus['email'], $cus['phone'], $tong_tien, $trang_thai);

    if ($stmt->execute()) {
        $ma_don_mua = $stmt->insert_id;

        $stmt_detail = $conn->prepare("INSERT INTO chitietdonmua (MaDonMua, MaSanPham, SoLuong, DonGia, ThanhTien) VALUES (?, ?, ?, ?, ?)");
        foreach ($order_items as $item) {
            $stmt_detail->bind_param("isidd", $ma_don_mua, $item['id_sp'], $item['qty'], $item['price'], $item['thanh_tien']);
            $stmt_detail->execute();
        }

        unset($_SESSION['my_cart']);
        unset($_SESSION['customer_data']); 

        wp_send_json_success(['order_id' => $ma_don_mua]);
    } else {
        wp_send_json_error(['message' => 'Lỗi lưu dữ liệu: ' . $stmt->error]);
    }
    
    $conn->close();
}



















































/**
 * ==========================================
 * SHORTCODE HIỂN THỊ TẤT CẢ TIN TỨC
 * Sử dụng: [hien_thi_tin_tuc]
 * ==========================================
 */

add_shortcode('hien_thi_tin_tuc', 'shortcode_display_tintuc_clickable');
function shortcode_display_tintuc_clickable() {
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM tintuc ORDER BY NgayDang DESC");

    if (!$results) return '<p>Chưa có bài viết nào.</p>';

    $html = '<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; font-family: Arial, sans-serif; margin-top: 20px;">';

    foreach ($results as $row) {
        $hinhAnhUrl = '';
        if (!empty($row->HinhAnh)) {
            if (preg_match('/src="([^"]+)"/', $row->HinhAnh, $match)) { $hinhAnhUrl = $match[1]; } 
            else { $hinhAnhUrl = $row->HinhAnh; }
        }

        $slug = sanitize_title($row->Title);
        $link = home_url('/tin-tuc/' . $slug . '/');

        $html .= '<a href="' . esc_url($link) . '" class="news-card" style="text-decoration: none; color: inherit; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; width: 300px; background: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.05); display: flex; flex-direction: column; text-align: left; transition: transform 0.2s, box-shadow 0.2s;">';
        
        if ($hinhAnhUrl) {
            $html .= '<img src="' . esc_url($hinhAnhUrl) . '" style="width: 100%; height: 180px; object-fit: cover; border-radius: 4px; margin-bottom: 15px;" />';
        }

        $html .= '<h3 style="font-size: 18px; color: #003366; margin: 0 0 10px 0; line-height: 1.4; height: 50px; overflow: hidden;">' . esc_html($row->Title) . '</h3>';
        $html .= '<span style="font-size: 13px; color: #7f8c8d; margin-bottom: 10px; display: block;">⏳ ' . date("d/m/Y", strtotime($row->NgayDang)) . '</span>';
        
        $mo_ta = !empty($row->MoTaNgan) ? $row->MoTaNgan : $row->MoTa;
        $html .= '<p style="color: #555; font-size: 14px; margin: 0; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; flex-grow: 1;">' . wp_trim_words(esc_html($mo_ta), 25) . '</p>';
        
        $html .= '<div style="display: inline-block; margin-top: 15px; padding: 10px 16px; background-color: #3498db; color: #ffffff; border-radius: 4px; font-weight: bold; font-size: 14px; text-align: center;">Xem chi tiết</div>';

        $html .= '</a>';
    }

    $html .= '</div>';
    
    $html .= '<style>.news-card:hover { transform: translateY(-5px); box-shadow: 0 8px 15px rgba(0,0,0,0.1) !important; border-color: #3498db !important; }</style>';
    
    return $html;
}




































/**
 * ==========================================
 * SHORTCODE TRANG SẢN PHẨM 
 * Sử dụng: [hien_thi_san_pham]
 * ==========================================
 */

add_shortcode('hien_thi_san_pham', 'shortcode_display_sanpham_thaolinh_v3');
function shortcode_display_sanpham_thaolinh_v3() {
    global $wpdb;
    $table_name = 'sanpham';
    
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY MaSanPham DESC");

    if (!$results) {
        return '<p style="text-align:center;">Chưa có sản phẩm nào.</p>';
    }

    $html = '<style>
        .sp-card { 
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #f0f0f0 !important;
        }
        .sp-card:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
            border-color: #007bff !important;
        }
        .btn-xem {
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            border-radius: 50px !important; /* Bo tròn hoàn toàn */
            transition: 0.3s;
        }
        .btn-mua {
            background: linear-gradient(135deg, #56ab2f, #a8e063);
            border-radius: 50px !important; /* Bo tròn hoàn toàn */
            transition: 0.3s;
        }
        .btn-xem:hover, .btn-mua:hover {
            filter: brightness(1.1);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    </style>';

    $html .= '<div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding: 30px; background-color: #f9f9f9;">';

    foreach ($results as $row) {
        $slug_san_pham = sanitize_title($row->TenSanPham);
        $link_san_pham = home_url('/chi-tiet-san-pham/' . $slug_san_pham . '/');
        $id_sp = $row->MaSanPham;
        $link_gio_hang = '/thaolinhmateco/gio-hang/?add_to_cart=' . $id_sp;

        $html .= '<div class="sp-card" style="border-radius: 20px; padding: 15px; width: 300px; background: #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.05); display: flex; flex-direction: column; align-items: center; text-align: center;">';

        if (!empty($row->HinhAnh)) {
            $html .= '<div style="width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <img src="' . esc_url($row->HinhAnh) . '" alt="' . esc_attr($row->TenSanPham) . '" style="max-width: 100%; max-height: 100%; object-fit: contain;" />
                      </div>';
        }

        $html .= '<h3 style="font-size: 17px; color: #2c3e50; margin: 0 0 12px 0; min-height: 50px; line-height: 1.4; font-weight: 700;">' . esc_html($row->TenSanPham) . '</h3>';
        

        $html .= '<span style="background: #ebf5ff; padding: 5px 15px; border-radius: 50px; font-size: 11px; margin-bottom: 15px; color: #007bff; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Mã loại: ' . esc_html($row->MaLoaiSanPham) . '</span>';

  
        $html .= '<p style="color: #d63031; font-weight: 800; font-size: 22px; margin: 0;">' . number_format($row->Gia, 0, ',', '.') . ' <span style="font-size: 14px;">VNĐ</span></p>';
        
 
        $html .= '<div style="display: flex; gap: 10px; margin-top: 20px; width: 100%;">';
            
            $html .= '<a href="' . esc_url($link_san_pham) . '" class="btn-xem" style="flex: 1.2; padding: 12px 5px; color: #fff; text-decoration: none; font-weight: bold; font-size: 13px; text-align: center;">Xem mô tả</a>';
            
            $html .= '<a href="' . esc_url($link_gio_hang) . '" class="btn-mua" style="flex: 1; padding: 12px 5px; color: #fff; text-decoration: none; font-weight: bold; font-size: 13px; text-align: center;">Mua ngay</a>';

        $html .= '</div>';
        $html .= '</div>'; 
    }

    $html .= '</div>'; 

    return $html;
}







































/**
 * ==========================================
 * SHORTCODE HIỂN THỊ BẢNG DỊCH VỤ
 * Sử dụng: [form_yeu_cau_dong]
 * ==========================================
 */
add_shortcode('form_yeu_cau_dong', 'create_custom_service_form');

function create_custom_service_form() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');

    $ds_dichvu = $mydb->get_results("SELECT MaDichVu, TenDichVu FROM dichvu");

    if (isset($_POST['action_submit_request'])) {
        $mydb->insert('yeucaudichvu', array(
            'MaDichVu' => sanitize_text_field($_POST['select_service']),
            'TenKhach' => sanitize_text_field($_POST['txt_name']),
            'SDT'      => sanitize_text_field($_POST['txt_phone']),
            'DiaChi'   => sanitize_text_field($_POST['txt_address']),
            'MoTa'     => sanitize_textarea_field($_POST['txt_message']), 
        ));
        echo '<script>alert("Gửi yêu cầu thành công!");</script>';
    }

    ob_start(); ?>
    <div style="background: #f9f9f9; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <form method="post">
            <input type="text" name="txt_name" placeholder="Tên của bạn" style="width:100%; margin-bottom:15px; padding:10px;" required>
            
            <div style="display: flex; gap: 10px; margin-bottom:15px;">
                <input type="text" name="txt_phone" placeholder="Số điện thoại" style="flex:1; padding:10px;" required>
                <input type="text" name="txt_address" placeholder="Địa chỉ của bạn" style="flex:1; padding:10px;">
            </div>
            
            <label style="display:block; margin-bottom:5px; font-weight:bold;">Lựa chọn dịch vụ:</label>
            <select name="select_service" style="width:100%; margin-bottom:15px; padding:10px;" required>
                <option value="">-- Chọn dịch vụ --</option>
                <?php foreach ($ds_dichvu as $dv) : ?>
                    <option value="<?php echo esc_attr($dv->MaDichVu); ?>"><?php echo esc_html($dv->TenDichVu); ?></option>
                <?php endforeach; ?>
            </select>

            <textarea name="txt_message" placeholder="Nội dung mô tả chi tiết..." style="width:100%; margin-bottom:15px; padding:10px; height:100px;"></textarea>
            
            <button type="submit" name="action_submit_request" 
                    style="background: #8bc34a; color: #fff; border: none; padding: 12px 30px; cursor: pointer; font-weight:bold; width:100%; border-radius:4px;">
                GỬI YÊU CẦU
            </button>
        </form>
    </div>
    <?php
    return ob_get_clean();
}









































/**
 * ========================================================================
 * SHORTCODE HIỂN THỊ BẢNG LIÊN HỆ
 * Sử dụng: [form_lien_he_tu_code]
 * ========================================================================
 */

add_shortcode('form_lien_he_tu_code', 'custom_contact_form_html');

function custom_contact_form_html() {
    global $wpdb;
    $output = '';

    if ( isset($_POST['action']) && $_POST['action'] == 'gui_lien_he_ngay' ) {
        
        if ( !isset($_POST['lienhe_nonce']) || !wp_verify_nonce($_POST['lienhe_nonce'], 'gui_lien_he_action') ) {
             $output .= '<div style="color:red; padding:10px; border:1px solid red; margin-bottom:20px;">Lỗi bảo mật, vui lòng thử lại!</div>';
        } else {
            $ho_ten   = sanitize_text_field($_POST['fullname']);
            $email    = sanitize_email($_POST['email']);
            $sdt      = sanitize_text_field($_POST['phone']);
            $dia_chi  = sanitize_text_field($_POST['address']);
            $noi_dung = sanitize_textarea_field($_POST['message']);
            // **************************************************************************************************************************************
            $inserted = $wpdb->insert(
                'lienhe',
                array(
                    'HoTen'   => $ho_ten,
                    'Email'   => $email,
                    'SDT'     => $sdt,
                    'DiaChi'  => $dia_chi,
                    'NoiDung' => $noi_dung
                ),
                array( '%s', '%s', '%s', '%s', '%s' )
            );

            if ( $inserted ) {
                $output .= '<div style="color:green; background:#e7f5ec; padding:15px; border-radius:5px; margin-bottom:20px;">Cảm ơn bạn! Thông tin liên hệ đã được gửi thành công.</div>';
            } else {
                $output .= '<div style="color:red; padding:15px; border:1px solid red; margin-bottom:20px;">Lỗi hệ thống: Không thể lưu dữ liệu.</div>';
            }
        }
    }

    $output .= '
    <form action="" method="POST" style="background:#f9f9f9; padding:20px; border-radius:8px; border:1px solid #ddd;">
        ' . wp_nonce_field('gui_lien_he_action', 'lienhe_nonce', true, false) . '
        <input type="hidden" name="action" value="gui_lien_he_ngay">
        
        <div style="margin-bottom:15px;">
            <label>Họ và tên *</label><br>
            <input type="text" name="fullname" style="width:100%; padding:8px;" required>
        </div>

        <div style="margin-bottom:15px;">
            <label>Số điện thoại *</label><br>
            <input type="text" name="phone" style="width:100%; padding:8px;" required>
        </div>

        <div style="margin-bottom:15px;">
            <label>Email *</label><br>
            <input type="email" name="email" style="width:100%; padding:8px;" required>
        </div>

        <div style="margin-bottom:15px;">
            <label>Địa chỉ</label><br>
            <input type="text" name="address" style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Nội dung cần tư vấn</label><br>
            <textarea name="message" rows="5" style="width:100%; padding:8px;"></textarea>
        </div>

        <button type="submit" style="background:#0073aa; color:#fff; border:none; padding:10px 20px; border-radius:4px; cursor:pointer;">GỬI LIÊN HỆ</button>
    </form>
    ';

    return $output;
}




































/**
 * ==========================================
 * SHORTCODE HIỂN THỊ THÀNH VIÊN
 * Sử dụng: [danh_sach_thanh_vien]
 * ==========================================
 */
add_shortcode('danh_sach_thanh_vien', 'display_thanhvien_full_profile');

function display_thanhvien_full_profile() {
    global $wpdb;
    $table_name = 'thanhvien'; 
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

    if (empty($results)) {
        return '<p>Chưa có dữ liệu thành viên.</p>';
    }

    ob_start(); 
    ?>
    <style>
        .profile-container {
            max-width: 1000px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        .profile-item {
            display: flex;
            background: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .profile-sidebar {
            width: 250px;
            background: #f9f9f9;
            padding: 20px;
            text-align: center;
            border-right: 1px solid #eee;
        }
        .profile-sidebar img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .profile-sidebar h2 {
            font-size: 1.2rem;
            margin: 15px 0 5px;
            color: #d32f2f;
            text-transform: uppercase;
        }
        .profile-sidebar .job-title {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }

        .profile-content {
            flex: 1;
            padding: 20px 30px;
        }
        .profile-section-title {
            font-size: 1.1rem;
            color: #0056b3;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 5px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .profile-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }
        .info-row {
            display: flex;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .info-label {
            width: 100px;
            color: #666;
            flex-shrink: 0;
        }
        .info-value {
            color: #000;
            font-weight: 500;
        }
        .full-description {
            background: #fffdf5;
            padding: 15px;
            border-left: 4px solid #f1c40f;
            font-size: 0.95rem;
            line-height: 1.7;
            color: #444;
            white-space: pre-line; 
        }
        
        @media (max-width: 768px) {
            .profile-item { flex-direction: column; }
            .profile-sidebar { width: 100%; border-right: none; border-bottom: 1px solid #eee; }
            .profile-grid { grid-template-columns: 1fr; }
        }
    </style>

    <div class="profile-container">
        <?php foreach ($results as $row) : ?>
            <div class="profile-item">
                <div class="profile-sidebar">
                    <img src="<?php echo !empty($row->HinhAnh) ? esc_url($row->HinhAnh) : 'https://via.placeholder.com/150'; ?>" alt="Avatar">
                    <h2><?php echo esc_html($row->HoTen); ?></h2>
                    <span class="job-title"><?php echo esc_html($row->ChucVu); ?></span>
                </div>

                <div class="profile-content">
                    <div class="profile-section-title">Thông tin cá nhân</div>
                    <div class="profile-grid">
                        <div class="info-row">
                            <span class="info-label">Giới tính:</span>
                            <span class="info-value"><?php echo esc_html($row->GioiTinh); ?></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Năm sinh:</span>
                            <span class="info-value"><?php echo esc_html($row->NamSinh); ?></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Số ĐT:</span>
                            <span class="info-value"><?php echo esc_html($row->SDT); ?></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Ngày vào:</span>
                            <span class="info-value"><?php echo !empty($row->ThoiGian) ? date('d/m/Y', strtotime($row->ThoiGian)) : '---'; ?></span>
                        </div>
                    </div>

                    <div class="profile-section-title">Mô tả chi tiết</div>
                    <div class="full-description">
                        <?php echo nl2br(esc_html($row->MoTa)); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}





























/**
 * * ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
*                                                                    DASHBOARD QUẢN LÝ  
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
* ==================================================================================================================================================================
*/
add_action('admin_menu', 'remove_default_post_type');
function remove_default_post_type() {
    remove_menu_page('edit.php'); 
}






























// ============================================
// DASHBOARD ĐỊNH DẠNG CHUNG NÚT BẤM
// ============================================
add_action('admin_head', 'custom_admin_buttons_css');
function custom_admin_buttons_css() {
    ?>
    <style>
        .btn-action-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 5px 15px;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            border-radius: 20px;
            transition: all 0.2s ease;
            border: none;
            box-sizing: border-box;
        }
        
        .btn-edit-custom {
            background-color: #2271b1; 
            color: #fff !important;
        }
        .btn-edit-custom:hover {
            background-color: #135e96;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(34, 113, 177, 0.3);
        }

        .btn-delete-custom {
            background-color: #d63638;
            color: #fff !important;
        }
        .btn-delete-custom:hover {
            background-color: #b32d2e;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(214, 54, 56, 0.3);
        }
        .btn-add-custom {
            background-color: #28a745; 
            color: #fff !important;
            border: none !important; 
        }
        .btn-add-custom:hover {
            background-color: #218838; 
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(40, 167, 69, 0.3);
        }
    </style>
    <?php
}











































// ============================================
// DASHBOARD QUẢN LÝ THÀNH VIÊN
// ============================================
add_action('admin_menu', 'custom_thanhvien_admin_menu');
function custom_thanhvien_admin_menu() {
    add_menu_page('Quản lý Thành viên', 'Thành viên', 'manage_options', 'quan-ly-thanhvien', 'display_thanhvien_page', 'dashicons-groups', 6);
}

add_action('admin_enqueue_scripts', function($hook) {
    if ($hook == 'toplevel_page_quan-ly-thanhvien') {
        wp_enqueue_media();
    }
});

function display_thanhvien_page() {
    global $wpdb; 
    $table_name = 'thanhvien'; 
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if (isset($_POST['save_thanhvien'])) {
        $data = array(
            'HoTen'    => sanitize_text_field($_POST['HoTen']),
            'GioiTinh' => sanitize_text_field($_POST['GioiTinh']),
            'NamSinh'  => intval($_POST['NamSinh']),
            'SDT'      => sanitize_text_field($_POST['SDT']), 
            'ChucVu'   => sanitize_text_field($_POST['ChucVu']),
            'ThoiGian' => $_POST['ThoiGian'],
            'MoTa'     => sanitize_textarea_field($_POST['MoTa']),
            'HinhAnh'  => esc_url_raw($_POST['HinhAnh']),
        );
        
        if ($id > 0) {
            $wpdb->update($table_name, $data, array('id' => $id));
            echo '<div class="updated"><p>Đã cập nhật thông tin thành viên!</p></div>';
        } else {
            $wpdb->insert($table_name, $data);
            echo '<div class="updated"><p>Đã thêm thành viên mới!</p></div>';
        }
        $action = 'list';
    }

    if ($action == 'delete' && $id > 0) {
        $wpdb->delete($table_name, array('id' => $id));
        echo '<div class="updated"><p>Đã xóa thành viên thành công!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap">';
    
    if ($action == 'add' || $action == 'edit') {
        $item = ($id > 0) ? $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id)) : null;
        ?>
        <h1><?php echo $id > 0 ? 'Chỉnh sửa thành viên' : 'Thêm thành viên mới'; ?></h1>
        <form method="post">
            <table class="form-table">
                <tr><th>Họ tên</th><td><input type="text" name="HoTen" value="<?php echo $item ? esc_attr($item->HoTen) : ''; ?>" class="regular-text" required></td></tr>
                <tr><th>Giới tính</th><td>
                    <select name="GioiTinh">
                        <option value="Nam" <?php selected($item ? $item->GioiTinh : '', 'Nam'); ?>>Nam</option>
                        <option value="Nữ" <?php selected($item ? $item->GioiTinh : '', 'Nữ'); ?>>Nữ</option>
                    </select>
                </td></tr>
                <tr><th>Năm sinh</th><td><input type="number" name="NamSinh" value="<?php echo $item ? $item->NamSinh : ''; ?>" class="small-text"></td></tr>
                
                <tr><th>Số điện thoại</th><td><input type="text" name="SDT" value="<?php echo $item ? esc_attr($item->SDT) : ''; ?>" class="regular-text" placeholder="Ví dụ: 090xxxxxxx"></td></tr>
                
                <tr><th>Chức vụ</th><td><input type="text" name="ChucVu" value="<?php echo $item ? esc_attr($item->ChucVu) : ''; ?>" class="regular-text"></td></tr>
                <tr><th>Thời gian vào</th><td><input type="date" name="ThoiGian" value="<?php echo $item ? $item->ThoiGian : ''; ?>"></td></tr>
                <tr><th>Hình ảnh</th><td>
                    <input type="text" name="HinhAnh" id="hinh_anh_url" value="<?php echo $item ? esc_url($item->HinhAnh) : ''; ?>" class="regular-text">
                    <input type="button" id="upload_image_button" class="button" value="Chọn từ tệp">
                    <div id="image_preview" style="margin-top:10px;"><img src="<?php echo $item ? esc_url($item->HinhAnh) : ''; ?>" style="max-width:150px; border:1px solid #ccc;"></div>
                </td></tr>
                <tr><th>Mô tả</th><td><textarea name="MoTa" rows="5" class="large-text"><?php echo $item ? esc_textarea($item->MoTa) : ''; ?></textarea></td></tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_thanhvien" class="button button-primary" value="Lưu dữ liệu">
                <a href="?page=quan-ly-thanhvien" class="button">Hủy bỏ</a>
            </p>
        </form>
        <script>
            jQuery(document).ready(function($){
                $('#upload_image_button').click(function(e) {
                    e.preventDefault();
                    var image = wp.media({ title: 'Chọn ảnh thành viên', multiple: false }).open()
                    .on('select', function(e){
                        var uploaded_image = image.state().get('selection').first();
                        var image_url = uploaded_image.toJSON().url;
                        $('#hinh_anh_url').val(image_url);
                        $('#image_preview img').attr('src', image_url);
                    });
                });
            });
        </script>
        <?php
    } 
    else {
        $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
        ?>
        <h1 class="wp-heading-inline">Danh sách Thành viên</h1>
        
        <hr class="wp-header-end">
        <div style="margin-top: 10px; margin-bottom: 15px;">
            <a href="?page=quan-ly-thanhvien&action=add" class="btn-action-custom btn-add-custom">Thêm thành viên mới</a>
        </div>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th width="70">Ảnh</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Chức vụ</th>
                    <th>Năm sinh</th>
                    <th width="150">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results): foreach ($results as $row): ?>
                <tr>
                    <td>
                        <?php if($row->HinhAnh): ?>
                            <img src="<?php echo esc_url($row->HinhAnh); ?>" style="width:50px; height:50px; object-fit:cover; border-radius:4px;">
                        <?php endif; ?>
                    </td>
                    <td><strong><?php echo esc_html($row->HoTen); ?></strong></td>
                    <td><?php echo esc_html($row->SDT); ?></td>
                    <td><?php echo esc_html($row->ChucVu); ?></td>
                    <td><?php echo esc_html($row->NamSinh); ?></td>
                    <td>
                        <a href="?page=quan-ly-thanhvien&action=edit&id=<?php echo $row->id; ?>" class="btn-action-custom btn-edit-custom">Sửa</a>
                        <a href="?page=quan-ly-thanhvien&action=delete&id=<?php echo $row->id; ?>" class="btn-action-custom btn-delete-custom" style="color:#a00" onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên này?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="6">Chưa có thành viên nào được tạo.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }
    echo '</div>';
}






















































/**
 * ==========================================
 * QUẢN LÝ TIN TỨC
 * ==========================================
 */


add_action('admin_menu', 'custom_tintuc_admin_menu');
function custom_tintuc_admin_menu() {
    add_menu_page('Quản lý Tin tức', 'Quản lý tin tức', 'manage_options', 'quan-ly-tintuc', 'display_tintuc_page', 'dashicons-megaphone', 6,1);
}

function display_tintuc_page() {
    global $wpdb;
    $table_name = 'tintuc';
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if (isset($_POST['save_tintuc'])) {
        $data = array(
            'Title'    => sanitize_text_field($_POST['Title']),
            'NgayDang' => sanitize_text_field($_POST['NgayDang']),
            'HinhAnh'  => esc_url_raw($_POST['HinhAnh']),
            'MoTa'     => sanitize_textarea_field($_POST['MoTa']),
            'NoiDung'  => wp_kses_post($_POST['NoiDung']),
        );
        // *******************************************************************************************************************************************
        if ($id > 0) {
            $wpdb->update($table_name, $data, array('id' => $id));
            echo '<div class="updated"><p>Đã cập nhật tin tức thành công!</p></div>';
        } else {
            $wpdb->insert($table_name, $data);
            echo '<div class="updated"><p>Đã thêm tin tức mới thành công!</p></div>';
        }
        $action = 'list'; 
    }

    if ($action == 'delete' && $id > 0) {
        $wpdb->delete($table_name, array('id' => $id));
        echo '<div class="updated"><p>Đã xóa dữ liệu khỏi bảng tintuc!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap">';
    
    if ($action == 'add' || $action == 'edit') {
        $item = ($id > 0) ? $wpdb->get_row("SELECT * FROM $table_name WHERE id = $id") : null;
        $title_page = ($id > 0) ? 'Chỉnh sửa tin tức' : 'Thêm tin tức mới';
        ?>
        <h1><?php echo $title_page; ?></h1>
        <form method="post" style="margin-top:20px; background:#fff; padding:20px; border:1px solid #ccc;">
            <table class="form-table">
                <tr>
                    <th>Tiêu đề</th>
                    <td><input type="text" name="Title" value="<?php echo $item ? esc_attr($item->Title) : ''; ?>" class="large-text" required></td>
                </tr>
                <tr>
                    <th>Ngày đăng</th>
                    <td><input type="date" name="NgayDang" value="<?php echo $item ? $item->NgayDang : date('Y-m-d'); ?>"></td>
                </tr>
                <tr>
                    <th>Hình ảnh</th><td>
                    <input type="text" name="HinhAnh" id="hinh_anh_url" value="<?php echo $item?$item->HinhAnh:''; ?>" class="regular-text">
                    <input type="button" id="upload_image_button" class="button" value="Chọn từ tệp">
                    <div id="image_preview" style="margin-top:10px;"><img src="<?php echo $item?$item->HinhAnh:''; ?>" style="max-width:150px;"></div>
                    </td>
                </tr>
                <tr>
                    <th>Mô tả ngắn</th>
                    <td><textarea name="MoTa" rows="3" class="large-text"><?php echo $item ? esc_textarea($item->MoTa) : ''; ?></textarea></td>
                </tr>
                <tr>
                    <th>Nội dung chi tiết</th>
                    <td><?php wp_editor($item ? $item->NoiDung : '', 'NoiDung'); ?></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_tintuc" class="button button-primary" value="Lưu dữ liệu">
                <a href="?page=quan-ly-tintuc" class="button">Hủy bỏ</a>
            </p>
        </form>
        <?php
    } else {
        $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
        ?>
        <h1 class="wp-heading-inline">Danh sách Tin tức (Bảng: tintuc)</h1>

        <div style="margin-top: 10px; margin-bottom: 15px;">
            <a href="?page=quan-ly-tintuc&action=add" class="btn-action-custom btn-add-custom">Thêm tin tức mới</a>
        </div>
        
        <hr class="wp-header-end">

        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th width="80">Ảnh</th>
                    <th>Tiêu đề</th>
                    <th width="100">Ngày đăng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><img src="<?php echo $row->HinhAnh; ?>" style="width:50px; height:auto;"></td>
                    <td><strong><?php echo esc_html($row->Title); ?></strong></td>
                    <td><?php echo $row->NgayDang; ?></td>
                    <td>
                        <a href="?page=quan-ly-tintuc&action=edit&id=<?php echo $row->id; ?>" class="btn-action-custom btn-edit-custom">Sửa</a>
                        <a href="?page=quan-ly-tintuc&action=delete&id=<?php echo $row->id; ?>" class="btn-action-custom btn-delete-custom" style="color:red" onclick="return confirm('Xóa vĩnh viễn dòng này?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
    }
    echo '</div>';
}












































/**
 * ==========================================
 * QUẢN LÝ DANH MỤC SẢN PHẨM (LOẠI SẢN PHẨM)
 * ==========================================
 */

add_action('admin_menu', 'custom_danhmuc_admin_menu');
function custom_danhmuc_admin_menu() {
    add_menu_page('Danh mục sản phẩm', 'Loại sản phẩm', 'manage_options', 'quan-ly-danhmuc', 'display_danhmuc_page', 'dashicons-category', 6,5);
}

function display_danhmuc_page() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');
    
    $table_name = 'danhmucsanpham';
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? sanitize_text_field($_GET['id']) : '';

    if (isset($_POST['save_danhmuc'])) {
        $data = array(
            'MaLoaiSanPham'   => sanitize_text_field($_POST['MaLoaiSanPham']),
            'TenLoaiSanPham'  => sanitize_text_field($_POST['TenLoaiSanPham']),
            'ThoiGianBaoHanh' => intval($_POST['ThoiGianBaoHanh']),
        );
        // ******************************************************************************************************************************************
        if ($_GET['action'] == 'edit') {
            $mydb->update($table_name, $data, array('MaLoaiSanPham' => $id));
            echo '<div class="updated"><p>Đã cập nhật danh mục thành công!</p></div>';
        } else {
            $mydb->insert($table_name, $data);
            echo '<div class="updated"><p>Đã thêm danh mục mới thành công!</p></div>';
        }
        $action = 'list';
    }

    if ($action == 'delete' && !empty($id)) {
        $mydb->delete($table_name, array('MaLoaiSanPham' => $id));
        echo '<div class="updated"><p>Đã xóa danh mục!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap"><h1>Quản lý Danh mục sản phẩm</h1>';
    
    if ($action == 'add' || $action == 'edit') {
        $item = ($action == 'edit') ? $mydb->get_row($mydb->prepare("SELECT * FROM $table_name WHERE MaLoaiSanPham = %s", $id)) : null;
        ?>
        <form method="post" style="background:#fff; padding:20px; border:1px solid #ccc; margin-top:20px;">
            <table class="form-table">
                <tr>
                    <th>Mã Loại (VD: HT, LK)</th>
                    <td><input type="text" name="MaLoaiSanPham" value="<?php echo $item ? $item->MaLoaiSanPham : ''; ?>" required <?php echo ($action == 'edit') ? 'readonly' : ''; ?> class="regular-text"></td>
                </tr>
                <tr>
                    <th>Tên Loại sản phẩm</th>
                    <td><input type="text" name="TenLoaiSanPham" value="<?php echo $item ? $item->TenLoaiSanPham : ''; ?>" class="large-text" required></td>
                </tr>
                <tr>
                    <th>Thời gian bảo hành (tháng)</th>
                    <td><input type="number" name="ThoiGianBaoHanh" value="<?php echo $item ? $item->ThoiGianBaoHanh : ''; ?>" class="small-text"> tháng</td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_danhmuc" class="button button-primary" value="Lưu danh mục">
                <a href="?page=quan-ly-danhmuc" class="button">Hủy bỏ</a>
            </p>
        </form>
        <?php
    } else {
        $results = $mydb->get_results("SELECT * FROM $table_name");
        
        echo '<div style="margin-top: 10px; margin-bottom: 15px;">
                <a href="?page=quan-ly-danhmuc&action=add" class="btn-action-custom btn-add-custom">Thêm danh mục mới</a>
            </div>';
        echo '<table class="wp-list-table widefat fixed striped" style="margin-top:20px;">
                <thead>
                    <tr>
                        <th>Mã Loại</th>
                        <th>Tên Loại sản phẩm</th>
                        <th>Thời gian bảo hành</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>';
        
        if ($results) {
            foreach ($results as $row) {
                echo "<tr>
                    <td><code>{$row->MaLoaiSanPham}</code></td>
                    <td><strong>{$row->TenLoaiSanPham}</strong></td>
                    <td>{$row->ThoiGianBaoHanh} tháng</td>
                    <td>
                        <a href='?page=quan-ly-danhmuc&action=edit&id={$row->MaLoaiSanPham}' class='btn-action-custom btn-edit-custom'>Sửa</a> 
                        <a href='?page=quan-ly-danhmuc&action=delete&id={$row->MaLoaiSanPham}' class='btn-action-custom btn-delete-custom' style='color:red' onclick='return confirm(\"Bạn có chắc muốn xóa danh mục {$row->MaLoaiSanPham}?\")'>Xóa</a>
                    </td>
                </tr>";
            }
        } else {
            echo '<tr><td colspan="4">Không tìm thấy dữ liệu trong bảng danhmucsanpham.</td></tr>';
        }
        echo '</tbody></table>';
    }
    echo '</div>';
}













































/**
 * ==========================================
 * QUẢN LÝ SẢN PHẨM
 * ==========================================
 */
add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'toplevel_page_quan-ly-sanpham') return;
    wp_enqueue_media();
});

add_action('admin_menu', 'custom_sanpham_admin_menu');
function custom_sanpham_admin_menu() {
    add_menu_page('Quản lý sản phẩm', 'Quản lý sản phẩm', 'manage_options', 'quan-ly-sanpham', 'display_sanpham_page', 'dashicons-cart', 7);
}

function display_sanpham_page() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');
    $table_name = 'sanpham';
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? sanitize_text_field($_GET['id']) : '';

    if (isset($_POST['save_sanpham'])) {
        $data = array(
            'TenSanPham'    => sanitize_text_field($_POST['TenSanPham']),
            'HinhAnh'       => sanitize_text_field($_POST['HinhAnh']),
            'Gia'           => floatval($_POST['Gia']),
            'MaLoaiSanPham' => sanitize_text_field($_POST['MaLoaiSanPham']),
            'MoTaNgan'      => sanitize_textarea_field($_POST['MoTaNgan']),
            'MoTa'          => wp_kses_post($_POST['MoTa']),
        );

        if ($_POST['mode'] == 'edit') {
            $mydb->update($table_name, $data, array('MaSanPham' => $_POST['old_id']));
            echo '<div class="updated"><p>Cập nhật thành công!</p></div>';
        } else {
            $mydb->insert($table_name, $data);
            echo '<div class="updated"><p>Thêm mới thành công!</p></div>';
        }
        $action = 'list';
    }

    if ($action == 'delete' && !empty($id)) {
        $mydb->delete($table_name, array('MaSanPham' => $id));
        $action = 'list';
    }

    echo '<div class="wrap"><h1>Quản lý Sản phẩm</h1>';

    if ($action == 'add' || $action == 'edit') {
        $item = (!empty($id)) ? $mydb->get_row($mydb->prepare("SELECT * FROM $table_name WHERE MaSanPham = %s", $id)) : null;
        $danhmucs = $mydb->get_results("SELECT MaLoaiSanPham, TenLoaiSanPham FROM danhmucsanpham");
        ?>
        <form method="post" style="background:#fff; padding:20px; border:1px solid #ccc; margin-top:20px;">
            <input type="hidden" name="mode" value="<?php echo $action; ?>">
            <input type="hidden" name="old_id" value="<?php echo $id; ?>">
            
            <table class="form-table">
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <td><input type="text" name="TenSanPham" value="<?php echo $item ? $item->TenSanPham : ''; ?>" class="large-text" required></td>
                </tr>
                <tr>
                    <th>Danh mục</th>
                    <td>
                        <select name="MaLoaiSanPham">
                            <?php foreach($danhmucs as $dm): ?>
                                <option value="<?php echo $dm->MaLoaiSanPham; ?>" <?php echo ($item && $item->MaLoaiSanPham == $dm->MaLoaiSanPham) ? 'selected' : ''; ?>>
                                    <?php echo $dm->TenLoaiSanPham; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Hình ảnh sản phẩm</th>
                    <td>
                        <div id="image_preview" style="margin-bottom:10px;">
                            <?php if ($item && $item->HinhAnh): ?>
                                <img src="<?php echo esc_url($item->HinhAnh); ?>" style="max-width:150px; border:1px solid #ccc; padding:5px;">
                            <?php endif; ?>
                        </div>
                        <input type="hidden" name="HinhAnh" id="product_image_url" value="<?php echo $item ? $item->HinhAnh : ''; ?>">
                        <button type="button" class="button button-secondary" id="upload_image_btn">Chọn ảnh từ thư viện</button>
                        <button type="button" class="button button-link-delete" id="remove_image_btn" style="<?php echo ($item && $item->HinhAnh) ? '' : 'display:none;'; ?>color:red;">Xóa ảnh</button>
                    </td>
                </tr>
                <tr>
                    <th>Giá bán (VNĐ)</th>
                    <td><input type="number" name="Gia" value="<?php echo $item ? $item->Gia : ''; ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th>Chi tiết sản phẩm</th>
                    <td><?php wp_editor($item ? $item->MoTa : '', 'MoTa'); ?></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_sanpham" class="button button-primary" value="Lưu sản phẩm">
                <a href="?page=quan-ly-sanpham" class="button">Hủy</a>
            </p>
        </form>

        <script>
        jQuery(document).ready(function($){
            var mediaUploader;
            $('#upload_image_btn').click(function(e) {
                e.preventDefault();
                if (mediaUploader) { mediaUploader.open(); return; }
                mediaUploader = wp.media({
                    title: 'Chọn hình ảnh sản phẩm',
                    button: { text: 'Sử dụng ảnh này' },
                    multiple: false
                });
                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#product_image_url').val(attachment.url);
                    $('#image_preview').html('<img src="'+attachment.url+'" style="max-width:150px; border:1px solid #ccc; padding:5px;">');
                    $('#remove_image_btn').show();
                });
                mediaUploader.open();
            });
            $('#remove_image_btn').click(function() {
                $('#product_image_url').val('');
                $('#image_preview').html('');
                $(this).hide();
            });
        });
        </script>
        <?php
    } else {
        $results = $mydb->get_results("SELECT s.*, d.TenLoaiSanPham FROM $table_name s LEFT JOIN danhmucsanpham d ON s.MaLoaiSanPham = d.MaLoaiSanPham ORDER BY s.MaSanPham DESC");
        echo '<div style="margin-top: 10px; margin-bottom: 15px;">
                <a href="?page=quan-ly-sanpham&action=add" class="btn-action-custom btn-add-custom">Thêm sản phẩm mới</a>
            </div>';
        echo '<table class="wp-list-table widefat fixed striped" style="margin-top:20px;">
        <thead><tr><th width="100">Mã SP</th><th width="80">Ảnh</th><th>Tên Sản phẩm</th><th width="120">Giá tiền</th><th width="150">Loại</th><th width="120">Thao tác</th></tr></thead><tbody>';
        if ($results): foreach ($results as $row): ?>
            <tr>
                <td><code><?php echo $row->MaSanPham; ?></code></td>
                <td><img src="<?php echo $row->HinhAnh; ?>" style="width:50px; height:50px; object-fit:cover; border-radius:4px;"></td>
                <td><strong><?php echo esc_html($row->TenSanPham); ?></strong></td>
                <td style="color:#d63638;"><?php echo number_format($row->Gia); ?>đ</td>
                <td><?php echo esc_html($row->TenLoaiSanPham); ?></td>
                <td>
                    <a href="?page=quan-ly-sanpham&action=edit&id=<?php echo $row->MaSanPham; ?>" class="btn-action-custom btn-edit-custom">Sửa</a> 
                    <a href="?page=quan-ly-sanpham&action=delete&id=<?php echo $row->MaSanPham; ?>" class="btn-action-custom btn-delete-custom" style="color:red" onclick="return confirm('Xóa?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody></table>
        <?php
    }
    echo '</div>';
}




































































/**
 * ==========================================
 * QUẢN LÝ HOÁ ĐƠN (ĐƠN MUA)
 * ==========================================
 */

add_action('admin_menu', 'custom_donmua_admin_menu');
function custom_donmua_admin_menu() {
    add_menu_page(
        'Quản lý Đơn mua', 
        'Quản lý đơn mua', 
        'manage_options', 
        'quan-ly-donmua', 
        'display_donmua_page', 
        'dashicons-cart', 
        7,5
    );
}

function display_donmua_page() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');
    
    $table_donmua = 'donmua'; 
    $table_chitiet = 'chitietdonmua'; 
    $table_sanpham = 'sanpham';
    
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if (isset($_POST['save_donmua'])) {
        $tong_tien_final = floatval($_POST['TongTien']);
        $data_donmua = array(
            'TenKhachHang' => sanitize_text_field($_POST['TenKhachHang']),
            'NoiNhan'      => sanitize_textarea_field($_POST['NoiNhan']),
            'NgayLap'      => $_POST['NgayLap'],
            'Gmail'        => sanitize_email($_POST['Gmail']),
            'SDT'          => sanitize_text_field($_POST['SDT']),
            'TongTien'     => $tong_tien_final,
            'TrangThai'    => sanitize_text_field($_POST['TrangThai']),
        );

        if ($id > 0) {
            $mydb->update($table_donmua, $data_donmua, array('MaDonMua' => $id));
            $ma_don_mua = $id;
            $mydb->delete($table_chitiet, array('MaDonMua' => $ma_don_mua));
        } else {
            $mydb->insert($table_donmua, $data_donmua);
            $ma_don_mua = $mydb->insert_id;
        }

        $chi_tiet_data = json_decode(stripslashes($_POST['chi_tiet_don_hang']), true);
        if (!empty($chi_tiet_data)) {
            foreach ($chi_tiet_data as $item) {
                $don_gia = floatval($item['price']);
                $thanh_tien = $don_gia * intval($item['qty']); 
                $mydb->insert($table_chitiet, array(
                    'MaDonMua'  => $ma_don_mua, 
                    'MaSanPham' => sanitize_text_field($item['id_sp']), 
                    'SoLuong'   => intval($item['qty']), 
                    'DonGia'    => $don_gia, 
                    'ThanhTien' => $thanh_tien
                ));
            }
        }
        echo '<div class="updated"><p>Đã lưu đơn hàng thành công!</p></div>'; 
        $action = 'list';
    }

    if ($action == 'delete' && $id > 0) {
        $mydb->delete($table_chitiet, array('MaDonMua' => $id)); 
        $mydb->delete($table_donmua, array('MaDonMua' => $id)); 
        echo '<div class="updated"><p>Đã xóa đơn hàng thành công!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap">';
    
    if ($action == 'add' || $action == 'edit') {
        $item = ($id >= 0) ? $mydb->get_row("SELECT * FROM $table_donmua WHERE MaDonMua = $id") : null;
        $all_products = $mydb->get_results("SELECT MaSanPham, TenSanPham, Gia FROM $table_sanpham");
        $current_details = ($id >= 0) ? $mydb->get_results($mydb->prepare("SELECT * FROM $table_chitiet WHERE MaDonMua = %d", $id)) : [];
        ?>
        <h1><?php echo ($id > 0) ? 'Sửa đơn hàng' : 'Thêm đơn hàng mới'; ?></h1>
        <form method="post" id="order-form">
            <div style="display: flex; gap: 20px;">
                <div style="flex: 1; background: #fff; padding: 20px; border: 1px solid #ccc;">
                    <h3>Thông tin khách hàng</h3>
                    <table class="form-table">
                        <tr><th>Tên khách</th><td><input type="text" name="TenKhachHang" value="<?php echo $item?$item->TenKhachHang:''; ?>" required class="large-text"></td></tr>
                        <tr><th>SĐT</th><td><input type="text" name="SDT" value="<?php echo $item?$item->SDT:''; ?>" required></td></tr>
                        <tr><th>Gmail</th><td><input type="email" name="Gmail" value="<?php echo $item?$item->Gmail:''; ?>" required></td></tr>
                        <tr><th>Ngày lập</th><td><input type="date" name="NgayLap" value="<?php echo $item?$item->NgayLap:date('Y-m-d'); ?>"></td></tr>
                        <tr><th>Nơi nhận</th><td><textarea name="NoiNhan" required class="large-text"><?php echo $item?$item->NoiNhan:''; ?></textarea></td></tr>
                        <tr><th>Trạng thái</th><td>
                            <select name="TrangThai">
                                <option value="Chưa thanh toán" <?php selected($item?$item->TrangThai:'', 'Chưa thanh toán'); ?>>Chưa thanh toán</option>
                                <option value="Đã thanh toán" <?php selected($item?$item->TrangThai:'', 'Đã thanh toán'); ?>>Đã thanh toán</option>
                            </select>
                        </td></tr>
                    </table>
                </div>
                <div style="flex: 1.5; background: #fff; padding: 20px; border: 1px solid #ccc;">
                    <h3>Sản phẩm trong đơn hàng</h3>
                    <table id="order-items-table" class="wp-list-table widefat fixed striped">
                        <thead><tr><th>Sản phẩm</th><th width="100">Giá</th><th width="80">SL</th><th width="120">Thành tiền</th><th width="50"></th></tr></thead>
                        <tbody id="order-items-body"></tbody>
                    </table>
                    <div style="margin-top: 15px;"><button type="button" id="add-item-btn" class="button button-primary">+ Thêm sản phẩm</button></div>
                    <div style="text-align: right; margin-top: 20px; font-size: 1.5em;">Tổng cộng: <span id="display-total">0</span>đ<input type="hidden" name="TongTien" id="input-tong-tien" value="0"></div>
                </div>
            </div>
            <input type="hidden" name="chi_tiet_don_hang" id="chi-tiet-don-hang-data">
            <p class="submit">
                <input type="submit" name="save_donmua" class="button button-primary button-large" value="LƯU ĐƠN HÀNG">
                <a href="?page=quan-ly-donmua" class="button" style="margin-left: 10px;">Quay lại</a>
            </p>
        </form>
        
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const products = <?php echo json_encode($all_products); ?>; 
            const existingDetails = <?php echo json_encode($current_details); ?>;
            const tbody = document.getElementById('order-items-body'); 
            const totalDisplay = document.getElementById('display-total'); 
            const totalInput = document.getElementById('input-tong-tien'); 
            const hiddenData = document.getElementById('chi-tiet-don-hang-data');
            
            function addRow(data = null) {
                const row = document.createElement('tr'); 
                let options = '<option value="">-- Chọn sản phẩm --</option>';
                products.forEach(p => { 
                    let selected = (data && data.MaSanPham == p.MaSanPham) ? 'selected' : ''; 
                    options += `<option value="${p.MaSanPham}" data-price="${p.Gia}" ${selected}>${p.TenSanPham}</option>`; 
                });
                row.innerHTML = `<td><select class="sp-select" style="width:100%">${options}</select></td><td><input type="number" class="sp-price" value="${data ? data.DonGia : 0}" style="width:100%"></td><td><input type="number" class="sp-qty" value="${data ? data.SoLuong : 1}" min="1" style="width:100%"></td><td class="sp-subtotal" style="font-weight:bold">0</td><td><button type="button" class="remove-row" style="color:red; cursor:pointer">X</button></td>`;
                tbody.appendChild(row); 
                calculateAll();
            }
            
            if(existingDetails.length > 0) { existingDetails.forEach(d => addRow(d)); }
            document.getElementById('add-item-btn').addEventListener('click', () => addRow());
            
            tbody.addEventListener('input', function(e) { 
                if(e.target.classList.contains('sp-select')) { 
                    e.target.closest('tr').querySelector('.sp-price').value = e.target.selectedOptions[0].dataset.price || 0; 
                } 
                calculateAll(); 
            });
            
            tbody.addEventListener('click', function(e) { 
                if(e.target.classList.contains('remove-row')) { 
                    e.target.closest('tr').remove(); 
                    calculateAll(); 
                } 
            });
            
            function calculateAll() {
                let grandTotal = 0; let jsonData = [];
                document.querySelectorAll('#order-items-body tr').forEach(tr => {
                    const idSp = tr.querySelector('.sp-select').value; 
                    const price = parseFloat(tr.querySelector('.sp-price').value) || 0; 
                    const qty = parseInt(tr.querySelector('.sp-qty').value) || 0; 
                    const subtotal = price * qty;
                    
                    tr.querySelector('.sp-subtotal').innerText = subtotal.toLocaleString(); 
                    grandTotal += subtotal;
                    
                    if(idSp) { jsonData.push({ id_sp: idSp, price: price, qty: qty }); }
                });
                totalDisplay.innerText = grandTotal.toLocaleString(); 
                totalInput.value = grandTotal; 
                hiddenData.value = JSON.stringify(jsonData);
            }
            document.getElementById('order-form').onsubmit = function() { calculateAll(); };
        });
        </script>
        <?php
        
    } else {
        $results = $mydb->get_results("SELECT * FROM $table_donmua ORDER BY MaDonMua DESC");
        ?>
         <h1>Danh sách Đơn mua</h1>
            <a href="?page=quan-ly-donmua&action=add" class="btn-action-custom btn-add-custom">Thêm đơn mới thủ công</a>
         <table class="wp-list-table widefat fixed striped" style="margin-top: 15px;">
            <thead>
                <tr>
                    <th width="60">Mã Đơn</th>
                    <th width="180">Thông tin Khách hàng</th>
                    <th>Chi tiết Sản phẩm đã mua</th>
                    <th width="100">Ngày lập</th>
                    <th width="120">Tổng tiền</th>
                    <th width="120">Trạng thái</th>
                    <th width="200">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if($results): foreach($results as $r): 
                    $details = $mydb->get_results($mydb->prepare("SELECT c.SoLuong, c.ThanhTien, s.TenSanPham FROM $table_chitiet c JOIN $table_sanpham s ON c.MaSanPham = s.MaSanPham WHERE c.MaDonMua = %d", $r->MaDonMua));
                    $chi_tiet_html = '';
                    if($details) { 
                        $chi_tiet_html .= '<ul style="margin: 0; padding-left: 15px; font-size: 13px;">'; 
                        foreach($details as $d) { 
                            $chi_tiet_html .= '<li><strong>' . esc_html($d->TenSanPham) . '</strong> (SL: ' . $d->SoLuong . ') - <span style="color:#e74c3c">' . number_format($d->ThanhTien, 0, ',', '.') . 'đ</span></li>'; 
                        } 
                        $chi_tiet_html .= '</ul>'; 
                    } else { 
                        $chi_tiet_html = '<span style="color:#999; font-style:italic;">Chưa có sản phẩm</span>'; 
                    }
                ?>
                <tr>
                    <td><strong>#<?php echo $r->MaDonMua; ?></strong></td>
                    <td><strong><?php echo esc_html($r->TenKhachHang); ?></strong><br><small>📞 <?php echo esc_html($r->SDT); ?></small><br><small>📧 <?php echo esc_html($r->Gmail); ?></small></td>
                    <td><?php echo $chi_tiet_html; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($r->NgayLap)); ?></td>
                    <td style="font-weight:bold; color:#e74c3c; font-size: 14px;"><?php echo number_format($r->TongTien, 0, ',', '.'); ?>đ</td>
                    <td>
                        <?php if($r->TrangThai == 'Đã thanh toán'): ?>
                            <span style="background:#d4edda; color:#155724; padding:4px 8px; border-radius:4px; font-size:12px; font-weight:bold;">Đã thanh toán</span>
                        <?php else: ?>
                            <span style="background:#f8d7da; color:#721c24; padding:4px 8px; border-radius:4px; font-size:12px;">Chưa thanh toán</span>
                        <?php endif; ?>
                    </td>
                    <td style="white-space: nowrap; width: 150px; text-align: center;">
                        <div style="display: flex; gap: 8px; justify-content: center; align-items: center;">
                            <a href="?page=quan-ly-donmua&action=add" class="btn-action-custom btn-add-custom">Thêm</a>
                            <a href="?page=quan-ly-donmua&action=edit&id=<?php echo $r->MaDonMua; ?>" 
                            class="btn-action-custom btn-edit-custom" style="margin: 0;">
                            Sửa
                            </a> 

                            <a href="?page=quan-ly-donmua&action=delete&id=<?php echo $r->MaDonMua; ?>" 
                            class="btn-action-custom btn-delete-custom" 
                            style="margin: 0;"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa vĩnh viễn đơn hàng này?')">
                            Xóa
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                    <tr><td colspan="7" style="text-align:center;">Chưa có đơn hàng nào.</td></tr>
                <?php endif; ?>
            </tbody>
         </table>
        <?php
    }
    echo '</div>';
}


































































/**
 * ==========================================
 * QUẢN LÝ DANH MỤC (LOẠI) DỊCH VỤ
 * ==========================================
 */
add_action('admin_menu', 'custom_dichvu_admin_menu');
function custom_dichvu_admin_menu() {
    add_menu_page(
        'Danh mục Dịch vụ',
        'Loại dịch vụ',
        'manage_options',
        'quan-ly-dichvu',
        'display_dichvu_page',
        'dashicons-hammer',
        8
    );
}

function display_dichvu_page() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');
    $table_name = 'dichvu';
    
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? sanitize_text_field($_GET['id']) : '';

    echo '<style>
        .badge-type { padding: 4px 8px; border-radius: 4px; font-weight: 500; font-size: 12px; }
        .type-sanpham { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .type-tudo { background: #fff3cd; color: #856404; border: 1px solid #ffeeba; }
        .price-tag { color: #28a745; font-weight: bold; }
    </style>';

    if (isset($_POST['save_dichvu'])) {
        $data = array(
            'MaDichVu'     => sanitize_text_field($_POST['MaDichVu']),
            'TenDichVu'    => sanitize_text_field($_POST['TenDichVu']),
            'LoaiHinh'     => sanitize_text_field($_POST['LoaiHinh']),
            'DonGiaCoBan'  => intval($_POST['DonGiaCoBan']), 
        );

        if ($_POST['mode'] == 'edit') {
            $mydb->update($table_name, $data, array('MaDichVu' => $_POST['old_id']));
            echo '<div class="updated"><p>Cập nhật dịch vụ thành công!</p></div>';
        } else {
            $mydb->insert($table_name, $data);
            echo '<div class="updated"><p>Thêm dịch vụ mới thành công!</p></div>';
        }
        $action = 'list';
    }

    if ($action == 'delete' && !empty($id)) {
        $mydb->delete($table_name, array('MaDichVu' => $id));
        echo '<div class="updated"><p>Đã xóa dịch vụ thành công!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap">';

    if ($action == 'add' || $action == 'edit') {
        $item = ($action == 'edit') ? $mydb->get_row($mydb->prepare("SELECT * FROM $table_name WHERE MaDichVu = %s", $id)) : null;
        ?>
        <h1><?php echo $action == 'edit' ? 'Chỉnh sửa dịch vụ' : 'Thêm dịch vụ mới'; ?></h1>
        <form method="post">
            <input type="hidden" name="mode" value="<?php echo $action; ?>">
            <input type="hidden" name="old_id" value="<?php echo $id; ?>">
            <table class="form-table">
                <tr>
                    <th>Mã dịch vụ</th>
                    <td>
                        <input type="text" name="MaDichVu" value="<?php echo $item ? $item->MaDichVu : ''; ?>" class="regular-text" required <?php echo $item ? 'readonly' : ''; ?>>
                        <p class="description">Ví dụ: bh, lapdat, scd (Không dấu, không khoảng cách)</p>
                    </td>
                </tr>
                <tr>
                    <th>Tên dịch vụ</th>
                    <td><input type="text" name="TenDichVu" value="<?php echo $item ? $item->TenDichVu : ''; ?>" class="large-text" required placeholder="Ví dụ: Bảo hành hệ thống"></td>
                </tr>
                <tr>
                    <th>Loại hình</th>
                    <td>
                        <select name="LoaiHinh" class="regular-text">
                            <option value="Dịch vụ sản phẩm" <?php selected($item ? $item->LoaiHinh : '', 'Dịch vụ sản phẩm'); ?>>Dịch vụ sản phẩm (Đi kèm hàng hóa)</option>
                            <option value="Dịch vụ tự do" <?php selected($item ? $item->LoaiHinh : '', 'Dịch vụ tự do'); ?>>Dịch vụ tự do (Khách gọi lẻ)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Đơn giá cơ bản (VNĐ)</th>
                    <td>
                        <input type="number" name="DonGiaCoBan" value="<?php echo $item ? $item->DonGiaCoBan : '0'; ?>" class="regular-text">
                        <p class="description">Giá tham khảo. Đối với bảo hành có thể để là 0.</p>
                    </td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_dichvu" class="button button-primary" value="Lưu dịch vụ">
                <a href="?page=quan-ly-dichvu" class="button">Quay lại danh sách</a>
            </p>
        </form>
        <?php
    } 
    else {
        $results = $mydb->get_results("SELECT * FROM $table_name");
        ?>
        <h1 class="wp-heading-inline">Quản lý Danh mục Dịch vụ</h1>
        <div style="margin-top: 10px; margin-bottom: 15px;">
            <a href="?page=quan-ly-dichvu&action=add" class="btn-action-custom btn-add-custom">Thêm dịch vụ mới</a>
        </div>

        <hr class="wp-header-end">

        <table class="wp-list-table widefat fixed striped" style="margin-top:10px;">
            <thead>
                <tr>
                    <th width="100">Mã ID</th>
                    <th>Tên dịch vụ</th>
                    <th width="180">Loại hình</th>
                    <th width="150">Đơn giá cơ bản</th>
                    <th width="120">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results): foreach ($results as $row): 
                    $type_class = ($row->LoaiHinh == 'Dịch vụ tự do') ? 'type-tudo' : 'type-sanpham';
                ?>
                <tr>
                    <td><code><?php echo esc_html($row->MaDichVu); ?></code></td>
                    <td><strong><?php echo esc_html($row->TenDichVu); ?></strong></td>
                    <td><span class="badge-type <?php echo $type_class; ?>"><?php echo esc_html($row->LoaiHinh); ?></span></td>
                    <td><span class="price-tag"><?php echo number_format($row->DonGiaCoBan, 0, ',', '.'); ?> VNĐ</span></td>
                    <td>
                        <a href="?page=quan-ly-dichvu&action=edit&id=<?php echo $row->MaDichVu; ?>" class="btn-action-custom btn-edit-custom">Sửa</a>
                        <a href="?page=quan-ly-dichvu&action=delete&id=<?php echo $row->MaDichVu; ?>" 
                           class="btn-action-custom btn-delete-custom" style="color:#a00;" 
                           onclick="return confirm('Xóa dịch vụ này?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="5">Chưa có dữ liệu dịch vụ.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }
    echo '</div>';
}


























































/**
 * ==========================================
 * DASHBOARD QUẢN LÝ DỊCH VỤ
 * ==========================================
 */

add_action('admin_menu', 'custom_yeucau_admin_menu');
function custom_yeucau_admin_menu() {
    add_menu_page(
        'Quản lý dịch vụ',
        'Quản lý dịch vụ',
        'manage_options',
        'quan-ly-yeucau',
        'display_yeucau_page',
        'dashicons-clipboard', 
        8,5
    );
}

function display_yeucau_page() {
    $mydb = new wpdb('root', '', 'wordpress_db', 'localhost');
    $table_yeucau = 'yeucaudichvu';
    $table_dichvu = 'dichvu';
    
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if (isset($_POST['save_yeucau'])) {
        $data = array(
            'MaDichVu'  => sanitize_text_field($_POST['MaDichVu']),
            'TenKhach'  => sanitize_text_field($_POST['TenKhach']),
            'SDT'       => sanitize_text_field($_POST['SDT']),
            'DiaChi'    => sanitize_text_field($_POST['DiaChi']),
            'MoTa'      => sanitize_textarea_field($_POST['MoTa']),
        );

        if ($id > 0) {
            $mydb->update($table_yeucau, $data, array('MaYeuCau' => $id));
            echo '<div class="updated"><p>Cập nhật yêu cầu thành công!</p></div>';
        } else {
            $mydb->insert($table_yeucau, $data);
            echo '<div class="updated"><p>Thêm yêu cầu mới thành công!</p></div>';
        }
        $action = 'list';
    }

    if ($action == 'delete' && $id > 0) {
        $mydb->delete($table_yeucau, array('MaYeuCau' => $id));
        echo '<div class="updated"><p>Đã xóa yêu cầu!</p></div>';
        $action = 'list';
    }

    echo '<div class="wrap">';

    if ($action == 'add' || $action == 'edit') {
        $item = ($id > 0) ? $mydb->get_row($mydb->prepare("SELECT * FROM $table_yeucau WHERE MaYeuCau = %d", $id)) : null;
        $ds_dichvu = $mydb->get_results("SELECT MaDichVu, TenDichVu FROM $table_dichvu");
        ?>
        <h1><?php echo $id > 0 ? 'Sửa yêu cầu' : 'Thêm yêu cầu mới'; ?></h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th>Dịch vụ yêu cầu</th>
                    <td>
                        <select name="MaDichVu" required>
                            <option value="">-- Chọn dịch vụ --</option>
                            <?php foreach ($ds_dichvu as $dv): ?>
                                <option value="<?php echo $dv->MaDichVu; ?>" <?php selected($item ? $item->MaDichVu : '', $dv->MaDichVu); ?>>
                                    <?php echo esc_html($dv->TenDichVu); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Tên khách hàng</th>
                    <td><input type="text" name="TenKhach" value="<?php echo $item ? $item->TenKhach : ''; ?>" class="regular-text" required></td>
                </tr>
                <tr>
                    <th>Số điện thoại</th>
                    <td><input type="text" name="SDT" value="<?php echo $item ? $item->SDT : ''; ?>" class="regular-text" required></td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td><input type="text" name="DiaChi" value="<?php echo $item ? $item->DiaChi : ''; ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th>Mô tả chi tiết</th>
                    <td><textarea name="MoTa" rows="5" class="large-text"><?php echo $item ? $item->MoTa : ''; ?></textarea></td>
                </tr>
            </table>
            <p class="submit">
                <input type="submit" name="save_yeucau" class="button button-primary" value="Lưu yêu cầu">
                <a href="?page=quan-ly-yeucau" class="button">Quay lại</a>
            </p>
        </form>
        <?php
    } 
    else {
        $query = "SELECT y.*, d.TenDichVu 
                  FROM $table_yeucau y 
                  LEFT JOIN $table_dichvu d ON y.MaDichVu = d.MaDichVu 
                  ORDER BY y.MaYeuCau DESC";
        $results = $mydb->get_results($query);
        ?>
        <h1 class="wp-heading-inline">Danh sách Yêu cầu dịch vụ</h1>
        <div style="margin-top: 10px; margin-bottom: 15px;">
            <a href="?page=quan-ly-yeucau&action=add" class="btn-action-custom btn-add-custom">Thêm yêu cầu</a>
        </div>
        <hr class="wp-header-end">

        <table class="wp-list-table widefat fixed striped" style="margin-top:10px;">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th>Khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Dịch vụ</th>
                    <th>Nội dung mô tả</th>
                    <th width="120">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results): foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row->MaYeuCau; ?></td>
                    <td>
                        <strong><?php echo esc_html($row->TenKhach); ?></strong><br>
                        <small>SĐT: <?php echo esc_html($row->SDT); ?></small>
                    </td>
                    <td><?php echo esc_html($row->DiaChi); ?></td> 
                    <td>
                        <span style="background:#2271b1; color:#fff; padding:2px 6px; border-radius:3px; font-size:11px;">
                            <?php echo esc_html($row->TenDichVu ? $row->TenDichVu : 'N/A'); ?>
                        </span>
                    </td>
                    <td><?php echo nl2br(esc_html($row->MoTa)); ?></td>
                    <td>
                        <a href="?page=quan-ly-yeucau&action=edit&id=<?php echo $row->MaYeuCau; ?>" class="btn-action-custom btn-edit-custom">Sửa</a>
                        <a href="?page=quan-ly-yeucau&action=delete&id=<?php echo $row->MaYeuCau; ?>" 
                           class="btn-action-custom btn-delete-custom" style="color:red" 
                           onclick="return confirm('Xóa yêu cầu này?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="6">Chưa có yêu cầu dịch vụ nào.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }
    echo '</div>';
}













































// ==========================================
//  DASHBOARD QUẢN LÝ LIÊN HỆ
// ==========================================
add_action('admin_menu', 'custom_lienhe_admin_menu');
function custom_lienhe_admin_menu() {
    add_menu_page(
        'Quản lý liên hệ', 
        'Quản lý liên hệ', 
        'manage_options', 
        'quan-ly-lien-he', 
        'display_lienhe_page', 
        'dashicons-email-alt', 
        9
    );
}

function display_lienhe_page() {
    global $wpdb;
    $table_name = 'lienhe';
    
    $action = isset($_GET['action']) ? $_GET['action'] : 'list';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $message = '';

    if (isset($_POST['save_lienhe'])) {
        $data = array(
            'HoTen'   => sanitize_text_field($_POST['HoTen']),
            'SDT'     => sanitize_text_field($_POST['SDT']),
            'Email'   => sanitize_email($_POST['Email']),
            'DiaChi'  => sanitize_text_field($_POST['DiaChi']),
            'NoiDung' => sanitize_textarea_field($_POST['NoiDung']),
        );

        if ($id > 0) {
            $wpdb->update($table_name, $data, array('id' => $id));
            $message = 'Đã cập nhật liên hệ thành công!';
        } else {
            $wpdb->insert($table_name, $data);
            $message = 'Đã thêm liên hệ mới thành công!';
        }
        $action = 'list'; 
    }

    if ($action == 'delete' && $id > 0) {
        $wpdb->delete($table_name, array('id' => $id));
        $message = 'Đã xóa liên hệ thành công!';
        $action = 'list';
    }

    echo '<div class="wrap">';
    echo '<h1 class="wp-heading-inline">' . ($action == 'edit' ? 'Sửa Liên Hệ' : ($action == 'add' ? 'Thêm Liên Hệ Mới' : 'Danh sách Liên hệ')) . '</h1>';
    
    echo '<div style="margin-top: 10px; margin-bottom: 15px;">
            <a href="?page=quan-ly-lien-he&action=add" class="btn-action-custom btn-add-custom">Thêm liên hệ mới</a>
            </div>';
    echo '<hr class="wp-header-end">';

    if ($message) {
        echo '<div class="updated"><p>' . $message . '</p></div>';
    }

    if ($action == 'add' || $action == 'edit') {
        $row = ($id > 0) ? $wpdb->get_row("SELECT * FROM $table_name WHERE id = $id") : null;
        ?>
        <div class="card" style="max-width: 800px; padding: 20px; margin-top: 5px;">
            <form method="post" action="">
                <table class="form-table">
                    <tr>
                        <th><label>Họ và Tên</label></th>
                        <td><input type="text" name="HoTen" value="<?php echo $row ? esc_attr($row->HoTen) : ''; ?>" class="regular-text" required></td>
                    </tr>
                    <tr>
                        <th><label>Số điện thoại</label></th>
                        <td><input type="text" name="SDT" value="<?php echo $row ? esc_attr($row->SDT) : ''; ?>" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label>Email</label></th>
                        <td><input type="email" name="Email" value="<?php echo $row ? esc_attr($row->Email) : ''; ?>" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label>Địa chỉ</label></th>
                        <td><input type="text" name="DiaChi" value="<?php echo $row ? esc_attr($row->DiaChi) : ''; ?>" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label>Nội dung</label></th>
                        <td><textarea name="NoiDung" rows="5" class="large-text"><?php echo $row ? esc_textarea($row->NoiDung) : ''; ?></textarea></td>
                    </tr>
                </table>
                <p class="submit">
                    <input type="submit" name="save_lienhe" class="button button-primary" value="Lưu dữ liệu">
                    <a href="?page=quan-ly-lien-he" class="button">Quay lại</a>
                </p>
            </form>
        </div>
        <?php
    } 
    else {
        $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
        ?>
        <table class="wp-list-table widefat fixed striped" style="margin-top:20px;">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th>Họ và Tên</th>
                    <th>Thông tin liên hệ</th>
                    <th>Địa chỉ</th>
                    <th>Nội dung gửi</th>
                    <th width="120">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results): foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><strong><?php echo esc_html($row->HoTen); ?></strong></td>
                    <td>
                        SĐT: <strong><?php echo esc_html($row->SDT); ?></strong><br>
                        Email: <?php echo esc_html($row->Email); ?>
                    </td>
                    <td><?php echo esc_html($row->DiaChi); ?></td>
                    <td><?php echo nl2br(esc_html($row->NoiDung)); ?></td>
                    <td>
                        <a href="?page=quan-ly-lien-he&action=edit&id=<?php echo $row->id; ?>" class="btn-action-custom btn-edit-custom">Sửa</a>
                        <a href="?page=quan-ly-lien-he&action=delete&id=<?php echo $row->id; ?>" 
                           class="btn-action-custom btn-delete-custom" style="color:red;" 
                           onclick="return confirm('Xóa liên hệ này?')">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="6">Chưa có liên hệ nào.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php
    }
    echo '</div>';
}