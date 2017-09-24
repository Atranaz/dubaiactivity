
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Request List</small>
      </h1>
    </section>
    
    <section class="content">
        <!-- <div class="row"> -->
        	<div class="col-md-12 white-bg">
              
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Request Name</th>
                      <th>Date</th>
                      <th>Email</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

                    $delLink = '';
                    $rID = '';

                    //print_r($travelerlist);
                    $tcount = count($travelerlist);
                    for ($i=0; $i <$tcount ; $i++) { 

                      $status = $travelerlist[$i]->request_status;
                      if ($status == 1) {
                        $delLink = '| <a href="request_list/delRequest/'.$rID.'">delete</a>';
                      }
                
                      $rID = $travelerlist[$i]->request_id;
                      $body = '';
                      $body .= '<tr>';
                      $body .= '<td><a href="request/'.$rID.'">'.$travelerlist[$i]->destination.'</a></td>';
                      $body .= '<td>'.$travelerlist[$i]->date_created.'</td>';      
                      $body .= '<td>'.$travelerlist[$i]->email.'</td>';      
                      $body .= '<td><a href="request/'.$rID.'">view</a>   '.$delLink.' </td> </tr>'; 

                      print_r($body);     
                    }
                  ?>
                  
                  </tbody>
              </table>
              
          </div>
        	
        </div>
    </section>
</div>