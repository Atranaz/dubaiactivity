<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>User List</small>
      </h1>
    </section>
    
    <section class="content">
        <!-- <div class="row"> -->
        	<div class="col-md-12 white-bg">
              
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php print_r($users); ?>
                 <!--  <?php 
                    //print_r($travelerlist);
                    $tcount = count($travelerlist);
                    for ($i=0; $i <$tcount ; $i++) { 
                
                      $rID = $travelerlist[$i]->request_id;
                      $body = '';
                      $body .= '<tr>';
                      $body .= '<td><a href="request/'.$rID.'">'.$travelerlist[$i]->destination.'</a></td>';
                      $body .= '<td>'.$travelerlist[$i]->date_created.'</td>';      
                      $body .= '<td>'.$travelerlist[$i]->email.'</td>';      
                      $body .= '<td><a href="request/'.$rID.'">view</a>  |  <a href="#">delete</a> </td> </tr>'; 

                      print_r($body);     
                    }
                  ?> -->
                  
                  </tbody>
              </table>
              
          </div>
        	
        </div>
    </section>
</div>