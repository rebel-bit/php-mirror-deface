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
             
                        <?php 
                        $mirrorid = htmlentities($_GET['id']);
                        if (($mirrorid) && (is_numeric($mirrorid))) {
                        $q = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id WHERE mirror_id = '$mirrorid'");
                        $row = $q->fetchArray();
                        $url = $row['site']; $urlt = htmlspecialchars($url, ENT_QUOTES);
                        $date = $row['date'];
                        $ip = $row['ip'];
                        $ips = $row['ip'];
                        $aliastm = $row['15'];
                        $ipp = $db->query("SELECT * FROM mirror WHERE ip = '$ips'");
                        $count = 0;
                        while ($rip = $ipp->fetchArray()){
                        $count += 1;
                        }
                        $mas = '';
                        if ($count > 1) {
                        $mas = 'M';
                        }
                        $alias = $row['alias'];
                        $username = htmlspecialchars($row['username'], ENT_QUOTES);
                        $attip = $row['regip'];
                        $server = $row['server'];
                        $defacer = htmlspecialchars($row['username'], ENT_QUOTES);
                        $team = $row['teamname'];
                        if ($team) {
                        $team = htmlspecialchars($row['teamname'], ENT_QUOTES);
                        } else {
                        $team = '-';
                        }
                        $defid = $row['defacer'];
                        $teamid = $row['team'];
                        $vulnid = $row['vuln'];
                        if ($vulnid == "1") {
                        $vuln = "known vulnerability";
                        } else if ($vulnid == "2") {
                        $vuln = "undisclosed (new) vulnerability";
                        } else if ($vulnid == "3") {
                        $vuln = "configuration / admin. mistake";
                        } else if ($vulnid == "4") {
                        $vuln = "brute force attack";
                        } else if ($vulnid == "5") {
                        $vuln = "social engineering";
                        } else if ($vulnid == "6") {
                        $vuln = "Web Server intrusion";
                        } else if ($vulnid == "7") {
                        $vuln = "Web Server external module intrusion";
                        } else if ($vulnid == "8") {
                        $vuln = "Mail Server intrusion";
                        } else if ($vulnid == "9") {
                        $vuln = "FTP Server intrusion";
                        } else if ($vulnid == "10") {
                        $vuln = "SSH Server intrusion";
                        } else if ($vulnid == "11") {
                        $vuln = "Telnet Server intrusion";
                        } else if ($vulnid == "12") {
                        $vuln = "RPC Server intrusion)";
                        } else if ($vulnid == "13") {
                        $vuln = "Shares misconfiguration";
                        } else if ($vulnid == "14") {
                        $vuln = "Other Server intrusion";
                        } else if ($vulnid == "15") {
                        $vuln = "SQL Injection";
                        } else if ($vulnid == "16") {
                        $vuln = "URL Poisoning";
                        } else if ($vulnid == "17") {
                        $vuln = "File Inclusion";
                        } else if ($vulnid == "18") {
                        $vuln = "Dorking Shell";
                        } else if ($vulnid == "19") {
                        $vuln = "Dorking Uploader";
                        }
                        
                        $flag = $row['flag'];
                        $status = $row['status'];
                        if ($status == 0) {
                        $status = "Archived";
                        } else {
                        $status = "Onhold";
                        }
                        $special = $row['special'];
                        if ($special == 1) {
                        $special = "Ya";
                        } else {
                        $special = "Tidak";
                        }
                        $tampilmirror = htmlspecialchars($row['content'], ENT_QUOTES);
                        $special = $row['special'];
                        if ($special == 1) {
                        $special = "<i class=\"fa fa-star\" style=\"margin-top: 2px; color:gold;\" aria-hidden=\"true\">";
                        } else {
                        $special = "";
                        }
                        $home = $row['home'];
                        if ($home == 1) {
                        $home = "H";
                        } else {
                        $home = "";
                        }
                        } else {
                        header("Location: error.php");
                        }
                        ?>
                        
                        
                        <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-header">
                        <h5 class="h4 card-title  text-success mb-2">Information</h5>
                        </div>
                        <div class="card-body">
                        
                        Defacer : <a href="attacker.php?name=<? echo $alias; ?>"><? echo $defacer; ?></a><br>
                        Team : <a href="team.php?name=<? echo $aliastm; ?>"><? echo $team; ?></a><br>
                        Server : <? echo $server; ?><br>
                        IP : <? echo $ip; ?> <img src="flags/<? echo $flag; ?>.png"/><br>
                        Status : <? echo $status; ?> <br>
                        Date Submit : <? echo $date; ?><br>
                        <br>
                        <br>
                        <div class="alert alert-warning" role="alert">	<? echo $urlt; ?></div>
                        </div> 
                        </div>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-header">
                        <h5 class="h4 card-title  text-success mb-2"> Mirror</h5>
                        </div>
                        <div class="card-body">
                        <center>
                        <iframe src="scdeface.php?id=<? echo $mirrorid; ?>" allowtransparency="false" class="col-lg-12" style="height: 600px; width: 100%;" frameborder="0"></iframe>
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