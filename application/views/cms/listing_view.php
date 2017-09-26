
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Activity Listing</small>
      </h1>
    </section>
    
    <section class="content">
        <!-- <div class="row"> -->
        	<div class="col-md-12 white-bg">
              
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Activity Name</th>
                      <th>Date</th>
                      <!-- <th>Category</th> -->
                      <th>Price</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

                    $delLink = '';
                    $lID = '';
                    $catName = '';

                    //print_r($travelerlist);
                    $tcount = count($travelerlist);
                    for ($i=0; $i <$tcount ; $i++) { 



                      $status = $travelerlist[$i]->is_active;
                      if ($status == 1) {
                        $delLink = '| <a href="request_list/delRequest/'.$lID.'">delete</a>';
                      }
                
                      $lID = $travelerlist[$i]->list_id;
                      $body = '';
                      $body .= '<tr>';
                      $body .= '<td><a href="list/'.$lID.'">'.$travelerlist[$i]->list_title.'</a></td>';
                      $body .= '<td>'.$travelerlist[$i]->created_at.'</td>'; 
                      // $body .= '<td>'.$travelerlist[$i]->category_id.'</td>';     
                      $body .= '<td>'.$travelerlist[$i]->price.'</td>';      
                      $body .= '<td><a href="list/'.$lID.'">view</a>   '.$delLink.' </td> </tr>'; 

                      print_r($body);     
                    }
                  ?>
                  
                  </tbody>
              </table>
              
          </div>
        	
        </div>
    </section>
</div>