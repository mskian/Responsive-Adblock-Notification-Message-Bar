/**
 * Responsive Adblocker Notification Bar 
 *
 * version 1.0
 * Developed by Santhoshveer (Allwebtuts.com)
 * 
 */
 
// Html Tags will Display in Below <body> Tag
function wp_after_body() {  
do_action('wp_after_body');
}

// Responsive Adblocker Notification Bar Notification Text
function abmsghead() {
?>
<div id='ab-msg'>Disable Adblocker For - <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
<?php
}
add_action( 'wp_after_body', 'abmsghead' );

// Responsive Adblocker Notification Bar CSS

add_action('wp_head','abcr_css');
function abcr_css() {

$output="<style>
#ab-msg{
background: #e74c3c;
color: #fff;
font-size:16px; 
position:absolute;
top: 0;
left: 0;
right: 0;
width: 100% !important;
padding: 10px 0px;
text-align: center;}
#ab-msg a {color: #ffffff; border-bottom: 1px dotted;}
</style>";

echo $output;

}

// Responsive Adblocker Notification Bar Js (Detect the Adblocker)
/**
 * onerror="adBlockFunction();" on your Adsense Externalscript File Ex - > <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" onerror="adBlockFunction();"></script> ( Don't add this on your all Ad slot's)
 * version 1.0
 * Developed by Santhoshveer (Allwebtuts.com)
 * 
 */

add_action( 'wp_head', 'ad_bb_message' );
function ad_bb_message() { ?>

<script type="text/javascript">
function adBlockFunction()
{
document.getElementById('ab-msg').style.display = 'block';
}
</script>

<?php
}
