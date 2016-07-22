<?php


function wp_after_body() {  
do_action('wp_after_body');
}

function abmsgh() {
?>
<div id='ab-msg' style='display: none;'>Disable Adblocker For <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
<?php
}
add_action( 'wp_after_body', 'abmsgh' );

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


add_action( 'wp_head', 'ad_bb_message' );
function ad_bb_message() { ?>

<script>
function adBlockFunction()
{
// Google Analytics Tracking 
setTimeout(function() { 
ga('send', 'event', 'Blocker', 'click','Blocker');
},2000);
// Google Analytics End

document.getElementById('ab-msg').style.display = 'block';
}
</script>

<?php
}
