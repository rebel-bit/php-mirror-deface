<?php
$mirrorid = $_GET['id'];
if (($mirrorid) && (is_numeric($mirrorid))) {
$db = new SQLite3('dxxnakajeh.db');
$q = $db->query("SELECT * FROM mirror LEFT JOIN team ON mirror.team = team.team_id INNER JOIN user ON mirror.defacer = user.user_id INNER JOIN scdeface ON mirror.content = scdeface.sc_id WHERE mirror_id = '$mirrorid'");
$row = $q->fetchArray();
$tampilmirror = $row['sc'];

echo (str_replace("prompt","","prompt".base64_decode($tampilmirror)));
} else {
    header("Location: error.php");
}