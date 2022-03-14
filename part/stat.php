<div class="row">
        <div class="col-md-12 grid-margin stretch-card">
           <div class="card">
             <div class="card-header">
                  <h5 class="h4 card-title  mb-2"> Statistik</h5>
               </div>
               <div class="card-body">
  <center>
								<div class="table-responsive pt-3 table-striped">
								    <table class="table text-success">

		      		<thead>
		      			<tr>
		      				<th>Attacker</th>
						  	<th>Team</th>
						    <th>Archive</th>
						    <th>Special</th>
						    <th>Onhold</th>
						    <th>Today</th>
						    <th>Total</th>
		      			</tr>
		      		</thead>
		      		<tbody>
		      			<tr>
		      				<td><? $q = $db->query("SELECT COUNT(*) FROM user");
		                    $row = $q->fetchArray();
		                    $totaldef = $row[0];
		                    echo $totaldef; ?></td>
			      			<td><?php
		                    $q = $db->query("SELECT COUNT(*) FROM team");
		                    $row = $q->fetchArray();
		                    $totaltm = $row[0];
		                    echo $totaltm;
		                    ?></td>
			      			<td><?php
		                    $q = $db->query("SELECT COUNT(*) FROM mirror WHERE status = '0' and special = '0'");
		                    $row = $q->fetchArray();
		                    $totalarc = $row[0];
		                    echo $totalarc;
		                    ?></td>
			      			<td><?php
		                    $q = $db->query("SELECT COUNT(*) FROM mirror WHERE special = '1'");
		                    $row = $q->fetchArray();
		                    $totalspc = $row[0];
		                    echo $totalspc;
		                    ?></td>
			      			<td><?php
		                    $q = $db->query("SELECT COUNT(*) FROM mirror WHERE status = '1'");
		                    $row = $q->fetchArray();
		                    $totaloh = $row[0];
		                    echo $totaloh;
		                    ?></td>
			      			<td><?php
		                    $tglh = date("Y-m-d");
		                    $q = $db->query("SELECT COUNT(*) FROM mirror WHERE date LIKE '$tglh%'");
		                    $row = $q->fetchArray();
		                    $dfchariini = $row[0];
		                    echo $dfchariini;
		                    ?></td>
			      			<td><?php
		                    $q = $db->query("SELECT COUNT(*) FROM mirror");
		                    $row = $q->fetchArray();
		                    $totaldef = $row[0];
		                    echo $totaldef;
		                    ?></td>
		      			</tr>
		      		</tbody></table>
</div>
  </center>              
             </div> 
           </div>
        </div>
      </div>