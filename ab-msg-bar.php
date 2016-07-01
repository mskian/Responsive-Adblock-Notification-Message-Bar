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
function abmsgh() {
?>
<div id='ab-msg' style='display: none;'>Please Disable Adblocker For <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
<?php
}
add_action( 'wp_after_body', 'abmsgh' );

// Responsive Adblocker Notification Bar CSS

add_action('wp_head','abcr_css');
function abcr_css() {

$output="<style>
#ab-msg {
display: none;
text-align: center;
position: fixed;
left: 0;
right: 0;
top: 0;
background: #e74c3c;
color: #FFF;
padding: 10px;
z-index: 999999;
font-size: 16px;
}
#ab-msg p {
margin: 0 20px;
display: inline-block;
}
#ab-msg a, #ab-msg a:visited {
text-decoration: none;
color: #FFC107;
border-bottom: 1px dotted;
transition: 200ms color;
}
#ab-msg a:hover, #ab-msg a:active {
color: #b2f7ff;
}
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
