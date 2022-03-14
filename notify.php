<?php
$db = new SQLite3('dxxnakajeh.db');

session_start();
@error_reporting(0);
@set_time_limit(0);

if(version_compare(PHP_VERSION, '5.3.0', '<')) {
  @set_magic_quotes_runtime(0);
}

@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, "'") || strpos($uri, "\"") || strpos($uri, "(") || strpos($uri, ")") || strpos($uri, ";") || strpos($uri, "%27") || strpos($uri, "%22") || strpos($uri, "%28") || strpos($uri, "%29") || strpos($uri, "%3B")) {
header("Location: ../.../../alfa.php");
}


$uri = $_SERVER['REQUEST_URI'];
$bck = "";
if($ur[2] == "") {
  $bck = "../";
} elseif($ur[2] != "" && !$ur[3]) {
  $bck = "/../../";
}

?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
if (NULL == $_REQUEST['q']) {
$cari = "";
}
$cariraw = $_REQUEST['q'];
$carit = htmlspecialchars($cariraw, ENT_QUOTES);
$carit = str_replace(" ", "-", $carit);
$team = $db->query("SELECT * FROM team WHERE alias = '$carit'");
$raw = $team->fetchArray();

$att = $db->query("SELECT * FROM user WHERE alias = '$carit'");
$rew = $att->fetchArray();
$page = (int)$_GET['page'];
if($page==''){$page=1;}
$curpage = $page - 1;
$sort = 10;
$hal = $sort * $curpage;
?>
<!doctype html>
<html lang="en">
  <head>  
    <!-- Primary Meta Tags -->
    <title>Home | Miror Archive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Home | tsec_team ">
    <meta name="description" content="This Site Provides A Free Online Tool Service That Can Assist You In Carrying Out Activities Related To This Sites Services. Not Only That This Site Also Has Articles Such As Information, Tutorials, Tips & Tricks And Others.">
    <meta name="author" content="faza Akbar">
    <meta name="keywords" content="tsec_team, tsec_team, tsec_team, online tools, informasi, ,mirror, mirror archive, berita, tutorial, tips & trik">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="iBdiDZ7E3hIjZ4Nc3wSCzjmQefzNO1mQydG3saWW4tQ" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Home | tsec_team">
    <meta property="og:description" content="This Site Provides A Free Online Tool Service That Can Assist You In Carrying Out Activities Related To This Sites Services. Not Only That This Site Also Has Articles Such As Information, Tutorials, Tips & Tricks And Others.">
    <meta property="og:image" content="">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Home | tsec_team">
    <meta property="twitter:description" content="This Site Provides A Free Online Tool Service That Can Assist You In Carrying Out Activities Related To This Sites Services. Not Only That This Site Also Has Articles Such As Information, Tutorials, Tips & Tricks And Others.">
    <meta property="twitter:image" content="">
    <link rel="canonical" href="">
    <!-- App favicon -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Bootstrap Css -->
      <link href="https://rebel-bit.github.io/assets/bostrap-dark.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="https://rasenmedia.my.id/assets/css/icons.min.css" rel="stylesheet" type="text/css">
      <!-- App Css-->
      <link href="https://rebel-bit.github.io/assets/app-dark.css" id="app-style" rel="stylesheet" type="text/css">
      <!-- Jquery js -->
    <script src="https://kit.fontawesome.com/c24d650c3d.js" crossorigin="anonymous"></script>
     <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="https://rasenmedia.my.id/assets/js/rasen.js"></script>
    <!-- Sweet Alerts -->
    <link href="https://fonts.googleapis.com/css2?family=Kelly+Slab&display=swap" rel="stylesheet">
    <!-- font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Kelly+Slab&display=swap" rel="stylesheet">
    <link href="https://rasenmedia.my.id/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" >
    <script src="https://rasenmedia.my.id/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://rasenmedia.my.id/assets/js/alert.js"></script>
    <link rel="stylesheet" href="http://localhost:8080/miror/assets/css/flash.css">
    
    <style> 
    body{
        font-family: Kelly Slab;
    }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-96BJ70B72M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-96BJ70B72M');
</script>
 </head>  
 <body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <?php
    $q = $db->query("SELECT * FROM berita WHERE id = '1'");
    $row = $q->fetchArray();
    ?>
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
              <i class="fa fa-bars fa-2x text-success"></i>
            </button>           
          </div>
         <nav class="navbar navbar-dark mx-auto">
            <span class="navbar-brand fs-5 fw-bold fst-italic text-uppercase text-success"></span>
           </nav>       
            
            <!--search --->
            <form class="search-form" method="REQUEST" action="search.php?q=">
            <input type="search" name="q" id="icon_prefix2" class="form-control" value="Deface" placeholder="search">
            </form>
          <div class="d-flex">
            <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell fa-2x text-success"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="m-0"> Notifications </h6>
                    </div>
                  </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                  <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                      <div class="avatar-xs me-3">
                        <span class="avatar-title bg-light bg-gradient rounded-circle font-size-16">
                          <i class="fa fa-info-circle text-info"></i>
                        </span>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">Website ready to use</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">If you want request tools, you can contact me</p>
                        </div>
                      </div>
                    </div>
                  </a>                
                  <a href="javascript: void(0);" class="text-reset notification-item">
                    <div class="d-flex">
                      <div class="avatar-xs me-3">
                        <span class="avatar-title bg-light bg-gradient rounded-circle font-size-16">
                          <i class="fa fa-info-circle text-info"></i>
                        </span>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="mb-1">What is new?</h6>
                        <div class="font-size-12 text-muted">
                          <p class="mb-1">New design and tools</p>                          
                        </div>
                      </div>
                    </div>
                  </a>                  
                </div>
                <div class="p-2 border-top d-grid">
                  <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                    <i class="fa fa-x"></i>
                    <span>Close</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle fa-2x text-success me-1"></i>
                <span class="d-none d-xl-inline-block ms-1">Guest</span>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="/docs">
                  <i class="fa fa-user fa-lg font-size-16 align-middle me-1"></i>
                  <span>Rest Api</span>
                </a>                
            </div>
          </div>
        </div>
      </header>      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
      <div data-simplebar class="h-100">
      <!--- Sidemenu -->
      <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
      <li class="menu-title">Menu</li>
      <li>
      <a href="index.php" class="waves-effect">
      <i class="fa fa-home-alt text-success"></i>
      <span>Homepage</span>
      </a>
      </li>
      <li class="menu-title">soop</li>
      <li>
      <a href="archive.php" class="waves-effect">
      <i class="fa  fa-archive text-success"></i>
      <span>Archive</span>
      </a>
      </li>
      <li>
      <a href="special.php" class="waves-effect">
      <i class="fa fa-star text-success"></i>
      <span>special</span>
      </a>
      </li>
      <li>
      <a href="onhoald.php" class="waves-effect">
      <i class="fas fa-inbox text-success"></i>
      <span>Onhoald</span>
      </a>
      </li>
      <li class="menu-title">Rank</li>
      <li>
      <a href="defacer-rank.php" class="waves-effect">
      <i class="fas fa-user-secret text-success"></i>
      <span>Defacer rank</span>
      </a>
      </li>
      <li>
      <a href="team-rank.php" class="waves-effect">
      <i class="fas fa-users text-success"></i>
      <span>Team Rank</span>
      </a>
      </li>
      <li class="menu-title">Notify</li>
      <li>
      <a href="notify.php" class="waves-effect">
      <i class="fas fa-street-view text-success"></i>
      <span>Single notify</span>
      </a>
      </li>
      <li>
      <a href="about.php" class="waves-effect">
      <i class="fa-solid fa-info text-success"></i>
      <span>About</span>
      </a>
      </li>
      </ul>
      </div>
      <!-- Sidebar -->
      </div>
      </div>
      <!-- Left Sidebar End -->
      <div class="main-content">
         <div class="page-content">
           <div class="container-fluid">            
            <div class="row">
            <?php
            $ipg = $_GET['ip'];
            // Config Pagnatin
            $page = (int)$_GET['page'];
            if($page==''){$page=1;}
            $curpage = $page - 1;
            $sort = 20;
            $hal = $sort * $curpage;
            $sel = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id WHERE mirror.ip = '$ipg' ORDER BY date DESC");
            $num = 0;
            while($rw = $sel->fetchArray()){$num++; $ip=$rw['ip'];}
            $coun = round($num / $sort);
            if($page>$coun){$page=$coun+1;}
            // End Nya Cok
            $q = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id WHERE mirror.ip = '$ipg' ORDER BY date DESC LIMIT $hal, $sort");
            ?>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <p class="text-muted fw-bolder fw-medium">Web Visitor</p>
                        <h4 class="mb-0">
                        <?php
                        $filename = 'counter.txt';
                        
                        function counter(){		
                        global $filename;	
                        
                        if(file_exists($filename)){		
                        $value = file_get_contents($filename);	
                        }else{		
                        $value = 0;		
                        }
                        
                        file_put_contents($filename, ++$value);		
                        }
                        
                        counter();	
                        
                        echo ''.file_get_contents($filename);	
                        ?>
                        </h4>
                      </div>
                      <div class="flex-shrink-0 align-self-center ">
                        <div class="avatar-sm rounded-circle">
                          <span class="avatar-title bg-light bg-gradient rounded-circle">
                            <i class="fa fa-ghost text-primary font-size-24"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <p class="text-muted fw-bolder fw-medium">Tools</p>
                        <h4 class="mb-0">63</h4>
                      </div>
                      <div class="flex-shrink-0 align-self-center ">
                        <div class="avatar-sm rounded-circle">
                          <span class="avatar-title bg-light bg-gradient rounded-circle">
                            <i class="fa fa-wrench text-success font-size-24"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <p class="text-muted fw-bolder fw-medium">Your IP</p>                        
                        <h4 class="mb-0">103.105.35.122</h4>
                      </div>
                      <div class="flex-shrink-0 align-self-center ">
                        <div class="avatar-sm rounded-circle">
                          <span class="avatar-title bg-light bg-gradient rounded-circle">
                            <i class="fa fa-microchip text-danger font-size-24"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header">
            <h5 class="h4 card-title  text-success mb-2"> Disclaimer</h5>
            </div>
            <div class="card-body">
            
            All the information contained in Defacer-Pro Hacked Website Archive were either collected online from public sources or directly notified anonymously to us. Defacer-Pro is neither responsible for the reported computer crimes nor it is directly or indirectly involved with them. You might find some offensive contents in the mirrored defacements. Defacer-Pro didn't produce them so we cannot be responsible for such contents. If you are the administrator of an hacked website which is mirrored in Defacer-Pro, please note that Defacer-Pro is not related at all with the defacements itself.
            <br>
            </div> 
            </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header">
            <h5 class="h4 card-title  text-success mb-2">Information</h5>
            </div>
            <div class="card-body">
            1. Make sure Before Notify, Script deface must contain of the hacked words as example : 'hacked by me' , 'Touched', and other<br>
            2. URL contain '~ < > [ ] { }' is not accepted.<br>
            3. Only government, military and education domain will get special defacement.<br>
            4. URL without following path will be homepage defacements<br>
            5. Same IP server with different domain will be mass defacements.<br>
            </div> 
            </div>
            </div>
            </div>
            
            
            
            
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-header">
            <h5 class="h4 card-title  text-success mb-2"> Notify</h5>
            </div>
            <div class="card-body">
            <center>
            <form class="col s12" method="post" action="">
            
            <p class="text-muted card-title mb-0 text-left">Attacker</p>
            <br>
            <input class="form-control" id="first_name" name="defacer" type="text" placeholder="Nickname">
            <br><p class="text-muted card-title mb-0 text-left">Team</p><br>
            <input class="form-control"id="last_name" name="team" type="text" placeholder="Team Name">
            
            
            
            <br><p class="text-muted card-title mb-0 text-left">Proof On Concept</p><br>
            <select class="form-control" name="poc" required>
            <option selected="true">Choose</option>
            <option value="1">known vulnerability</option>
            <option value="2">undisclosed (new) vulnerability</option>
            <option value="3">configuration / admin. mistake</option>
            <option value="4">brute force attack</option>
            <option value="5">social engineering</option>
            <option value="6">Web Server intrusion</option>
            <option value="7">Web Server external module intrusion</option>
            <option value="8">Mail Server intrusion</option>
            <option value="9">FTP Server intrusion</option>
            <option value="10">SSH Server intrusion</option>
            <option value="11">Telnet Server intrusion</option>
            <option value="12">RPC Server intrusion</option>
            <option value="13">Shares misconfiguration</option>
            <option value="14">Other Server intrusion</option>
            <option value="15">SQL Injection</option>
            <option value="16">URL Poisoning</option>
            <option value="17">File Inclusion</option>
            <option value="18">Dorking Shell</option>
            <option value="19">Dorking Uploader</option>
            </select>
            
            <br><p class="text-muted card-title mb-0 text-left">Url</p><br>
            <textarea id="textarea1" cols="10" rows="10" placeholder="example.com" name="web" class="form-control"></textarea>
            <br>
            
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
            <div class="alert"style="padding: 5px; overflow: auto; white-space: pre;" id="output"></div>
            </form>
            
            <?php
            set_time_limit(0);
            $defacer = $_POST['defacer'];
            $team = $_POST['team'];
            $defacers = SQLite3::escapeString($_POST['defacer']);
            $teams = SQLite3::escapeString($_POST['team']);
            $poc = $_POST['poc'];
            $urlb = $_POST['web'];
            $regip = $_SERVER['REMOTE_ADDR'];
            $ldefacer = strtolower($defacer);
            $udefacer = strtoupper($defacer);
            
            if (strpos($defacer, "'") || strpos($defacer, "(") || strpos($defacer, ")") || strpos($defacer, ";") || strpos($defacer, "%27") || strpos($defacer, "%22") || strpos($defacer, "%28") || strpos($defacer, "%29") || strpos($defacer, "%3B") || strpos($defacer, "<") || strpos($defacer, ">") || strpos($defacer, "%22") || strpos($defacer, "Pe Gan") || strpos($defacer, "pppp")  || strpos($defacer, "papepape")) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\"></p><a class=\"alert-link\" href=\"#\">url contains prohibited characters</a>
            </div>
            </div>";
            exit;
            } else if (strpos($team, "'") || strpos($team, "(") || strpos($team, ")") || strpos($team, ";") || strpos($team, "%27") || strpos($team, "%22") || strpos($team, "%28") || strpos($team, "%29") || strpos($team, "%3B") || strpos($team, "<") || strpos($team, ">") || strpos($team, "%22") || strpos($team, "hmm")) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\"></p><a class=\"alert-link\" href=\"#\">url contains prohibited characters</a>
            </div>
            </div>";
            exit;
            }
            
            if(strlen($defacer) > 16) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Error</p><a class=\"alert-link\" href=\"#\">Maximum Character 16</a>
            </div>
            </div>";
            } else {
            if(strlen($team) > 30) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Error</p><a class=\"alert-link\" href=\"#\">Maximum Character 30</a>
            </div>
            </div>";
            } else {
            if (strpos($urlb, "'") || strpos($urlb, "(") || strpos($urlb, ")") || strpos($urlb, ";") || strpos($urlb, "%27") || strpos($urlb, "%22") || strpos($urlb, "%28") || strpos($urlb, "%29") || strpos($urlb, "%3B") || strpos($urlb, ">") 
            || strpos($urlb, "eu5.org")
            || strpos($urlb, "6te.net")
            || strpos($urlb, "coolpage.biz")
            || strpos($urlb, "xp3.biz")
            || strpos($urlb, "ueuo.com")
            || strpos($urlb, "ogfree.com")
            || strpos($urlb, "noads.biz")
            || strpos($urlb, "freeoda.com")
            || strpos($urlb, "freevar.com")
            || strpos($urlb, "freetzi.com")
            || strpos($urlb, "eu.org")
            || strpos($urlb, "blogspot.com")
            || strpos($urlb, "triweb.id")
            || strpos($urlb, "wix.com")
            || strpos($urlb, "atwebpages.com")
            || strpos($urlb, "atwebpages.org")
            || strpos($urlb, "000webhost.com")
            || strpos($urlb, "google.com")
            || strpos($urlb, "youtube.com")
            || strpos($urlb, "wordpress.org")
            || strpos($urlb, "wordpress.com")
            || strpos($urlb, ".ga")
            || strpos($urlb, ".tk")
            || strpos($urlb, ".ml")
            || strpos($urlb, ".gq")
            || strpos($urlb, ".cf")
            || strpos($urlb, ".lisa.my.id")
            || strpos($urlb, ".clarionet.in")
            || strpos($urlb, ".infinityfree.com")
            || strpos($urlb, ".dx.am")
            || strpos($urlb, ".zyro.com")
            || strpos($urlb, ".im-lisa.net")
            || strpos($urlb, ".kironcakehouse.co.za")
            || strpos($urlb, ".dsmsol.com/untitled.html")
            || strpos($urlb, ".dsmsol.com")
            || strpos($urlb, ".sabunmandi.my.id")
            || strpos($urlb, ".anakperawan.com")
            || strpos($urlb, ".ctuet.edu.vn")
            || strpos($urlb, "defacer.pro")
            
            
            ) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-warning\">
            <p style=\"float:right;\">Error!</p><a class=\"alert-link\" href=\"#\">Cant Submit This URL</a>
            </div>
            </div>";
            } else {
            
            if ($defacer) {
            
            function extract_domain($domain) {
            if (preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i", $domain, $matches)) {
            return $matches['domain'];
            } else {
            return $domain;
            }
            }
            
            $aliasd = str_replace(" ", "-", $defacer);
            if (strpos($aliasd, "/")){$aliasd = str_replace("/", "", $aliasd);}
            $aliast = str_replace(" ", "-", $team);
            if (strpos($aliast, "/")){$aliast = str_replace("/", "", $aliast);}
            
            function extract_subdomains($domain) {
            $subdomains = $domain;
            $domain = extract_domain($subdomains);
            $subdomains = rtrim(strstr($subdomains, $domain, true), '.');
            return $subdomains;
            } // thx https://stackoverflow.com/a/12372310
            
            $arr = explode("\r\n", trim($urlb));
            for ($i6 = 0; $i6 < count($arr); $i6++) {
            $site = $arr[$i6];
            
            if ($site) {
            
            $q = $db->query("SELECT COUNT(*) FROM team WHERE teamname = '$team'");
            $row = $q->fetchArray();
            $cekteam = $row[0];
            if (!$cekteam > 0) {
            $teamsc = str_replace("'", "''", $teams);
            $db->exec("INSERT INTO team (team_id, alias, teamname) VALUES (NULL, '$aliast', '$teamsc')");
            } // cekteam
            
            $q = $db->query("SELECT COUNT(*) FROM user WHERE username = '$defacer'");
            $row = $q->fetchArray();
            $cekuser = $row[0];
            if (!$cekuser > 0) {
            $defacersc = str_replace("'", "''", $defacers);
            $db->exec("INSERT INTO user (user_id, alias, username) VALUES (NULL, '$aliasd', '$defacersc')");
            } // cekuser
            
            if ($site) {
            $protokol = preg_match_all("%^((http://)|(https://))%", $site);
            if ($protokol) {
            $url = $site;
            } else {
            $url = "http://".$site;
            } // cek protokol
            
            
            $parse = parse_url($url);
            $host = $parse['host']; // cek domain
            $path = $parse['path']; // cek path
            $domain = $host;
            
            $usra = array('http' => array('user_agent' => 'h'));
            $context  = stream_context_create($usra);
            $content = file_get_contents("http://ip-api.com/json/$domain", false, $context);
            $match = preg_match_all("/success/i", $content, $count);
            $data = json_decode($content, true);
            $query = $data['query'];
            $country = $data['country'];
            $countrycode = $data['countryCode'];
            //Get flag
            if (strpos($countrycode, "'") 
            || strpos($countrycode, "(") 
            || strpos($countrycode, ")") 
            || strpos($countrycode, ";") 
            || strpos($countrycode, "%27") 
            || strpos($countrycode, "%22") 
            || strpos($countrycode, "%28") 
            || strpos($countrycode, "%29") 
            || strpos($countrycode, "%3B") 
            || strpos($countrycode, "<") 
            || strpos($countrycode, ">") 
            || strpos($countrycoder, "%22") 
            
            ) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\"></p><a class=\"alert-link\" href=\"#\">url contains prohibited characters</a>
            </div>
            </div>";
            exit;
            }
            
            if ((strstr($domain, ".go")) || (strstr($domain, ".gov")) || (strstr($domain, ".mil")) || (strstr($domain, ".ac")) || (strstr($domain, ".edu")) || (strstr($domain, ".sch"))) {
            $special = 1;
            $qcekdomspecexist = $db->query("SELECT COUNT(*) FROM mirror WHERE site = '$domain'");
            $row = $qcekdomspecexist->fetchArray();
            $cekdomspec = $row[0];
            if ($cekdomspec > 0) {
            $cekdomspec = 0;
            }
            else {
            $cekdomspec = 1;
            }
            } else {
            $special = 0;
            } // cek special
            
            $subdo = extract_subdomains($domain);
            if ($subdo) {
            $jmlsubdo = (strlen($subdo)+1);
            } else {
            $jmlsubdo = (strlen($subdo));
            }
            $domainutama = substr($domain, $jmlsubdo);
            
            $qcekdomexist = $db->query("SELECT COUNT(*) FROM mirror WHERE site LIKE '%$domainutama%'");
            $row = $qcekdomexist->fetchArray();
            $cekdeface = $row[0];
            if ($cekdeface > 0) {
            $cekwww = substr($domain , 3);
            $cekwwwd = (strlen($cekwww)+1);
            $cekdomain = substr($domain, $cekwwwd);
            if ($cekdomain == $domainutama) {
            $cekdfc = 0;
            } else {
            $cekdfc = 1;
            } // cek www
            } else {
            $cekdfc = 0;
            } // cek dup domain
            $tempfile = fopen('php://temp', 'r+');
            $cinit = curl_init();
            curl_setopt($cinit, CURLOPT_TIMEOUT, "300");
            curl_setopt($cinit, CURLOPT_USERAGENT, "");
            curl_setopt($cinit, CURLOPT_URL, "$url");
            curl_setopt($cinit, CURLOPT_HEADER, true);
            curl_setopt($cinit, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cinit, CURLOPT_VERBOSE, true);
            curl_setopt($cinit, CURLOPT_STDERR, $tempfile);
            curl_setopt($cinit, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($cinit, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cinit, CURLOPT_HEADER, true);
            
            $response = curl_exec($cinit);
            $header_size = curl_getinfo($cinit, CURLINFO_HEADER_SIZE);
            $header = substr($response, 0, $header_size);
            $body = substr($response, $header_size);
            $content = SQLite3::escapeString($body);
            $bodyc = str_replace("'", "''", $content);
            $mime = curl_getinfo($cinit, CURLINFO_CONTENT_TYPE);
            curl_close($cinit);
            fclose($tempfile);
            if ($body == "") {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Gagal</p><a class=\"alert-link\" href=\"#\">Blank page / Domain error
            </div>
            </div>";
            } else {
            $cekdefacer = array("$ldefacer", "$udefacer", "$defacer");
            $hitung = count($cekdefacer);
            for ($i = 0; $i < $hitung; $i++) {
            if (stristr($body, $cekdefacer[$i])) {
            $cekdnm = 0;
            } else {
            $cekdnm = 1;
            }
            } // cek blank page
            
            $cekmime = preg_match("/text\/html/i" , $mime);
            $cekpwn = array("hacked","pwned" ,"pwneed","stamped","locked","defaced","pawned", "hack","kissed" ,"touched","LOCKED");
            $lowbod = strtolower($body);
            $cekp = 0;
            
            for ($i = 0; $i < count($cekpwn); $i++) {
            if (stristr($lowbod, $cekpwn[$i])) {
            $cekp = 1;
            }
            }
            if (!$cekmime || $cekp == 0) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">".htmlspecialchars($url)." invalid</p>
            </div>
            </div>";
            } else {
            
            // Cek SC Deface
            $encode_content = mb_strlen($content, 'utf8'); 
            $ceksizedfc = ($encode_content > 4096000);
            if ($ceksizedfc == 1) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">".htmlspecialchars($url)." invalid</p>
            </div>
            </div>";
            } else {
            $content = base64_encode($content);
            $q = $db->query("SELECT COUNT(*) FROM scdeface WHERE sc = '$content'");
            $row = $q->fetchArray();
            $ceksc = $row[0];
            if (!$ceksc > 0) {
            $db->exec("INSERT INTO scdeface (sc_id, sc) VALUES (NULL, '$content')");
            } // cek sc deface end
            
            
            $q = $db->query("SELECT * FROM scdeface WHERE sc = '$content'");
            $row = $q->fetchArray();
            $contentid = $row['sc_id'];
            
            if ($cekdfc == 0 && $cekdnm == 0) {
            $status = 0;
            } else if ($cekdfc == 1 && $cekdnm == 0) {
            if (($special == 1) && ($cekdomspec == 1) && ($cekdnm == 0)) {
            $status = 0;
            } else if (($special == 1) && ($cekdomspec == 0) && ($cekdnm == 1)) {
            $status = 1;
            } else if (($special == 1) && ($cekdomspec == 0) && ($cekdnm == 0)) {
            $status = 1;
            } else {
            $status = 1;
            }
            } else if ($cekdfc == 0 && $cekdnm == 1) {
            $status = 1;
            } else if ($cekdfc == 1 && $cekdnm == 1) {
            $status = 1;
            } // cek onhold
            
            $home = 1;
            if ($path) {
            $hkpath = (strlen($path) > 1);
            if ($hkpath) {
            $home = 0;
            if (strstr($path, ".asp") || strstr($path, ".aspx") || strstr($path, ".htm") || strstr($path, ".html") || strstr($path, ".php") || strstr($path, ".txt") || strstr(substr($path, -1), "/")) {
            $cekext = 1;
            } else {
            $cekext = 0;
            }
            }
            } // cek home defacement
            if (($cekext == 0) && ($hkpath)) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Gagal</p><a class=\"alert-link\" href=\"#\">Invalid
            </div>
            </div>";
            } else {
            
            
            $qcekexist = $db->query("SELECT COUNT(*) FROM mirror WHERE site = '$url'");
            $row = $qcekexist->fetchArray();
            $cekurl = $row[0];
            if ($cekurl > 0) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Gagal</p><a class=\"alert-link\" href=\"#\">already submitted
            </div>
            </div>";
            }
            else
            {
            $ip = gethostbyname($host);
            if (preg_match_all("/apache/i", $header)) {
            $server = 'Apache';
            } else if (preg_match_all("/nginx/i", $header)) {
            $server = 'nginx';
            } else if (preg_match_all("/iis/i", $header)) {
            $server = 'Microsoft-IIS';
            } else if (preg_match_all("/cloudflare/i", $header)) {
            $server = 'Cloudflare Server';
            } else if (preg_match_all("/litespeed/i", $header)) {
            $server = 'LiteSpeed';
            } else if (preg_match_all("/tengine/i", $header)) {
            $server = 'Tengine';
            } else if (preg_match_all("/(google)|(gws)|(ghs)/i", $header)) {
            $server = 'Google Server';
            } else { $server = "unknown"; } // cek server
            
            if(strpos($url, "http://")){$url = str_replace("http://", "", $url);}
            elseif(strpos($url, "https://")){$url = str_replace("https://", "", $url);}
            $url = SQLite3::escapeString($url); // final url
            if (isset($_POST['submit'])) {
            $date = date("Y-m-d⠀H:i:s");
            }
            $q = $db->query("SELECT user_id FROM user WHERE username = '$defacers'");
            $row = $q->fetchArray();
            $defacerid = $row[0];
            if (strlen($team) == 0) {
            $teamid = 0;
            } else {
            $q = $db->query("SELECT team_id FROM team WHERE teamname = '$teams'");
            $row = $q->fetchArray();
            $teamid = $row[0];
            if (!$teamid) {
            $teamid = 0;
            }
            }
            
            $submit = $db->exec("INSERT INTO mirror (mirror_id, site, content, poc, defacer, flag, team, ip, regip, server, status, special, home, date) VALUES (NULL, '$url', '$contentid', $poc, $defacerid, '$countrycode', $teamid, '$ip', '$regip', '$server', $status, $special, $home, '$date')");
            
            if ($submit) {
            if ($status == 0) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-success\">
            <p style=\"float:right;\">Archive</p><a class=\"alert-link\" href=\"#\">Success! URL:".$url."
            </div>
            </div>";
            } else if ($status == 1) {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-success\">
            <p style=\"float:right;\">Onhold</p><a class=\"alert-link\" href=\"#\">Success! URL:".$url."
            </div>
            </div>";
            } // notify
            } else {
            echo "<br><div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">failed to submit</p><a class=\"alert-link\" href=\"#\">URL:".$url."
            </div>
            </div>";
            } // submit // imahere
            
            // tidak ada yg berurutan dibawah ini, abaikan comments
            // mungkin ada lebih dari satu junk variable, biarkanlah apa adanya :)
            } // cek ekstensi sc deface
            } // cek path
            } // cek size sc deface
            } // cek valid sc deface
            } // cek url db
            } // curl get content
            } else { echo "<div class=\"bs-component container\">
            <div class=\"alert alert-danger\">
            <p style=\"float:right;\">Gagal</p><a class=\"alert-link\" href=\"#\">Please enter the website URL
            </div>
            </div>"; } // site
            } // mass deface, thx https://www.askingbox.com/question/php-read-textarea-line-by-line-as-array
            } // defacer
            }
            }
            }
            ?>
            </center>              
            </div> 
            </div>
            </div>
            </div>
            </div>
            <br>
            <br>
            
      <!-- End Page-content -->
        <!---<footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear())
                </script> © tsec_team .
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block"> Support By SkullXploit </div>
              </div>
            </div>
          </div>
        </footer>--->
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
     <script src="https://rebel-bit.github.io/assets/validasi.js"></script>
     <script src="https://rebel-bit.github.io/assets/bostrap-bundle.js"></script>
     <script src="https://rebel-bit.github.io/assets/metisMenu.js"></script>
     <script src="https://rebel-bit.github.io/assets/simplebar.js"></script>
     <script src="https://rebel-bit.github.io/assets/waves.min.js"></script>
     <script src="https://rebel-bit.github.io/assets/app.js"></script>    
     </body>
</html>