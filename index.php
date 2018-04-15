<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
Tanzeel Khan
</title><link rel="stylesheet" type="text/css" href="kashan.css" 
media="all,black.css"/><link rel="shortcut icon" href="http://www.gfxmag.com/wp-content/uploads/2016/07/facebook-like-vector-logo.png">
<?php 
session_start();
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Sherbano khan',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<a href="https://fast-cmnt.herokuapp.com/"</a>;}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<h2>
<ul>

Welcome Back To Your BoT : <font color="White">'.$nm.'</font>

<form action="index.php" method="post"><input type="hidden" name="logout"  value="'.$id.'">
<input type="submit" class="button button1" value="Logout Bot"></form>

<form action="index.php" method="post">
<select name="likes" class="button button1">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'" class="button button1">
'.$ak.'
</option>
<option value="off" class="button button1">
Like Only</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'" class="button button1">
'.$ak.'
</option>
<option value="on" class="button button1">
Like And Comment</option>
</select>';
}
echo'

<select name="emot" class="button button1">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'" class="button button1">
'.$ik.'
</option>
<option value="off" class="button button1">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'" class="button button1">
'.$ik.'
</option>
<option value="on" class="button button1">
Bot emo</option>
</select>';
}
echo'

<select name="target" class="button button1">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'" class="button button1">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'" class="button button1">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'
';
        if($empat=='on'){
        echo'
<select name="opsi" class="button button1">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off" class="button button1">
writle your comment</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
<FONT face="Arial ,Tahoma" size="4" color="#FFFFFF">
</a>
<a class="" href=""><font color="" size="0"></font></a></b><font size="0" 
<br><br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'

</ul>

<form action="index.php" method="post">
<input type="submit" class="button button1" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="kashan.js"></script>
</h6></marquee><br>
';
} 

public function home(){
echo'
<div id="content">
<br>
<center>
<div class="AK">
<center><a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#bf51c6; padding: 0px;" width="200" height="200" title=""></a>


<a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="300" height="300" title=""></a>


<a href="https://www.facebook.com/100023952990858" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023952990858/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#2bbbce; padding: 0px;" width="200" height="200" title=""></a>
<br>
';
}


public function showlogin(){
		 echo '
';
	}





public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '

<center>
<center>
<ul>
<center>
<a href="http://onlybot.us/" target="_blank">

<input class="button button1" type="button" value="iOS Token"> </a>
<a href="http://onlybot.us/" target="_blank">

<input class="button button1" type="button" value="iPhone Token"> </a>
<a href="https://facebook.com/Sherbanokhan7861" target="_blank">
<input class="button button1" type="button" value="My FaCeBOok"> </a>
</center>
<font face="Orbitron" size="6" 
<br></ul></div></div>
<font color="White" size="5">Submit Your Token Here!</font></a>

<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text"
placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste your Token Here !" st name="token"> <br>
<input class="button button1" id="sbmt" class="inp-btn" type="submit"  value="SUBMIT"></form>
</div></div></div></font>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="content">
<center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="white"> Active Botters:</font> <font color=#aa00ff>'.count($user).'</font>
';
}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>