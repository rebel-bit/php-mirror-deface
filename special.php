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
           include('part/stat.php');
           ?>
           
           <div class="row">
           <div class="col-md-12 grid-margin stretch-card">
           <div class="card">
           <div class="card-header">
           <h5 class="h4 card-title  text-success mb-2"> Recent Special</h5>
           </div>
           <div class="card-body">
           <center>
           <div class="table-responsive pt-3 table-striped">
           <table class="table text-success">
           <thead class="center">
           <th colspan="2">Defacer</th>
           <th colspan="2">Team</th>
           <th colspan="3">Date⠀&⠀Time</th>
           <th colspan="2">Website</th>
           <th>M</th>
           <th>H</th>
           <th>L</th>
           <th>IP</th>
           <th><i class="fa fa-star" style="color:gold;" aria-hidden="true"></i></th>
           <th>Mirror</th>
           </thead>
           <tbody>
           <?php
           // Config Pagnatin
           $page = (int)$_GET['page'];
           if($page==''){$page=1;}
           $curpage = $page - 1;
           $sort = 20;
           $hal = $sort * $curpage;
           $sel = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id WHERE mirror.special = '0' and mirror.status = '0' ORDER BY date DESC");
           $num = 0;
           while($rw = $sel->fetchArray()){$num++;}
           $coun = round($num / $sort);
           if($page>$coun){$page=$coun+1;}
           // End Nya Cok
           
           // Db Select
           $q = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id WHERE mirror.special = '1' and mirror.status = '0' ORDER BY date DESC LIMIT $hal, $sort");
           echo "<tr>";
           $i = 1;
           while ($row = $q->fetchArray()) {
           $url = htmlspecialchars($row['site'], ENT_QUOTES);
           if (preg_match("/(https:)/", $site)) {
           $url = substr($url, 8);
           } else if (preg_match("/(http:)/", $url)) {
           $url = substr($url, 7);
           }
           $url = (strlen($url) > 20) ? substr($url,0,20).'...' : $url;
           $team = $row['teamname'];
           $aliastm = $row['15'];
           if ($team) {
           $team = "<a href=\"team.php?name=$aliastm\">".htmlspecialchars($row['teamname'], ENT_QUOTES)."</a>";
           } else {
           $team = 'none';
           }
           $ips = $row['ip'];
           $ip = $db->query("SELECT * FROM mirror WHERE ip = '$ips'");
           $count = 0;
           while ($rip = $ip->fetchArray()){
           $count += 1;
           }
           $mas = '';
           if ($count > 1) {
           $mas = "<span class=\"badge badge-danger\" ><i class=\"fa fa-layer-group\" style=\"color:white;\" aria-hidden=\"true\"></span>";
           }
           $special = $row['special'];
           if ($special == 1) {
           $special = "<span class=\"badge badge-warning\"><i class=\"fa fa-star\" style=\"color:white;\" aria-hidden=\"true\"></span>";
           } else {
           $special = "";
           }
           $home = $row['home'];
           if ($home == 1) {
           $home = "<span class=\"badge badge-success\" ><i class=\"fa fa-home\" style=\"color:white;\" aria-hidden=\"true\"></span>";
           } else {
           $home = "";
           }
           $flag = $row['flag'];
           if ($flag == "") {
           $flag = "not";
           }
           $mirrorshow = "<span class=\"badge badge-primary\" style=\"font-weight:bold; color:white\"><i class=\"fa fa-desktop\" style=\"color:white;\" aria-hidden=\"true\"></span>";
           $date = $row['date'];
           $ip = $row['ip'];
           $mirrorid = $row['mirror_id'];
           $alias = $row['alias'];
           $username = htmlspecialchars($row['username'], ENT_QUOTES);
           $defid = $row['defacer'];
           $teamid = $row['team'];
           echo "<td colspan=\"2\"><a href=\"attacker.php?name=$alias\">$username</a></td><td colspan=\"2\">$team</td><td colspan=\"3\">$date</td><td colspan=\"2\">$url</td><td><a href='ip.php?ip=$ip'>$mas</a></td><td>$home</td><td><img src=\"flags/$flag.png\" style=\"margin-top: 5px; \" /></td><td>$ip</td><td>$special</td><td><a href=\"notif.php?id=$mirrorid\">$mirrorshow</td></tr>";
           
           } // while
           
           ?>
           </tbody>
           </table>
           </div>
           <br>
           </center>      
           <ul class="pagination justify-content-center">
           <?php
           $neg = $page - 1;
           $pos = $page + 1;
           
           if($page == 1){echo '<li class="page-item disabled" ><a class="page-link" disabled="disabled" href="?page="#"><i class="material-icons">Previous</i></a></li>';}
           else{echo '<li class="page-item"><a class="page-link" href="?page='.$neg.'">Previous</a></li>';}
           
           echo '<li class="page-item active"><a class="page-link" href="">'.$page.'</a></li>';
           
           if($page == $coun){echo '<li class="page-item disabled"><a class="page-link" disabled="disabled" onclick="page()>Next</a></li>';}
           else{echo '<li class="page-item"><a class="page-link" href="?page='.$pos.'">Next</a></li>';}
           ?>
           </ul>
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