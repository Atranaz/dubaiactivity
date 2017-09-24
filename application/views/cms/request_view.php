<?php 
//user information 
// $name = $reqData[0]->fname;
// $email = $reqData[0]->email;
// $phone =  $reqData[0]->mobile;


// //travel details
// $trip_id = $reqData[0]->request_id;
// $destination = $reqData[0]->destination;
// $t_price = $reqData[0]->price_budget;
// $date_depart = $reqData[0]->date_depart;
// $date_return = $reqData[0]->date_return;
// $no_girls = $reqData[0]->no_girls;
// $no_boys = $reqData[0]->no_boys;
// $no_acomm = $reqData[0]->no_accopany;
// $b_simple = $reqData[0]->simple_room;
// $b_twins = $reqData[0]->twin_room;
// $b_multi = $reqData[0]->multi_room;
// $b_dor = $reqData[0]->dormitor_room;

//   // group status
//   switch ($reqData[0]->group_type) {
//     case '1':
//       $group_type = 'School or Student trip';
//       break;
//     case '2':
//       $group_type = 'Sport group';
//       break;
//     case '3':
//       $group_type = 'Family oe friend group';
//       break;
//     case '4':
//       $group_type = 'Leisure group';
//       break;
//     case '5':
//       $group_type = 'Convention, Seminars, Business travel';
//       break;
//     case '6':
//       $group_type = 'Association or religious';
//       break;
//     case '7':
//       $group_type = 'Incentive trip';
//       break;
//     case '8':
//       $group_type = 'Music Group';
//       break;
//     default:
//       $group_type = 'No Selection';
//       break;
//   }
//   // theme status
//   switch ($reqData[0]->theme_type) {
//     case '1':
//       $theme_type = 'Horticulture / Agriculture';
//       break;
//     case '2':
//       $theme_type = 'Environnement';
//       break;
//     case '3':
//       $theme_type = 'Art';
//       break;
//     case '4':
//       $theme_type = 'Sport';
//       break;
//     case '5':
//       $theme_type = 'Cours De Langue';
//       break;
//     case '6':
//       $theme_type = 'Évènements Majeurs';
//       break;
//     case '7':
//       $theme_type = 'Économie';
//       break;
//     case '8':
//       $theme_type = 'Social';
//       break;
//     default:
//       $theme_type = 'No Selection';
//       break;
//   }
//   // bed status
//   switch ($reqData[0]->room_type) {
//     case '1':
//       $room_type = 'Bed and breakfast';
//       break;
//     case '2':
//       $room_type = 'Half board';
//       break;
//     case '3':
//       $room_type = 'Full board';
//       break;
//     case '4':
//       $room_type = 'Room only';
//       break;
//     default:
//       $room_type = 'No Selection';
//       break;
//   }
//   // trans status
//   switch ($reqData[0]->trans_type) {
//     case '1':
//       $trans_type = 'Autocar';
//       break;
//     case '2':
//       $trans_type = 'Train';
//       break;
//     case '3':
//       $trans_type = 'Avion';
//       break;
//     case '4':
//       $trans_type = 'Transports en commun';
//       break;
//     case '4':
//       $trans_type = 'Sans transport';
//       break;
//     default:
//       $trans_type = 'No Selection';
//       break;
//   }

// $desc_text = $reqData[0]->price_budget;



?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Request View</small>
      </h1>
    </section>
    
    <section class="content"> 
        <!-- <div class="row"> -->
        	<div class="col-md-8 white-bg">
              	<div class="row">
                	<div class="col-md-10">
                    	<h1 class="trip-heading"><?php echo $destination ?> 
                      <small class="trip-budget"><?php echo $t_price ?> AED</small></h1>
                	</div>
              	</div>
  	            <div class="row">
  	            	<div class="col-md-10"><hr style="margin-top: 0"></div>
  	            </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Date Departure</strong>
                      <span> <?php echo $date_depart; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Date Return</strong>
                      <span> <?php echo $date_return; ?></span></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Number of girls</strong>
                      <span> <?php echo $no_girls; ?></span></p>
                  </div>
                  <div class="col-md-4">
                    <p><strong>Number of boys</strong>
                      <span> <?php echo $no_boys; ?></span></p>
                  </div>
                  <div class="col-md-4 ">
                    <p><strong>Number of accopamny</strong>
                      <span> <?php echo $no_acomm; ?></span></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="trip-head">Heading of Section</h4>
                  </div>
                  <div class="col-md-3">
                    <p><strong>Simples</strong>
                      <span> <?php echo $b_simple; ?></span></p>
                  </div>
                  <div class="col-md-3">
                    <p><strong>Twins</strong>
                      <span> <?php echo $b_twins; ?></span></p>
                  </div>
                  <div class="col-md-3 ">
                    <p><strong>Multiple Triples</strong>
                      <span> <?php echo $b_multi; ?></span></p>
                  </div>
                  <div class="col-md-3 ">
                    <p><strong>Dormitories</strong>
                      <span> <?php echo $b_dor; ?></span></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="trip-head">Heading of Section</h4>
                  </div>
                  <div class="col-md-6">
                    <p><strong>Group Type</strong>
                      <span> <?php echo $group_type; ?></span></p>
                  </div>
                  <div class="col-md-6">
                    <p><strong>Thème de Voyage</strong>
                      <span> <?php echo $theme_type; ?></span></p>
                  </div>
                  <div class="col-md-6">
                    <p><strong>Choix du repas</strong>
                      <span> <?php echo $room_type; ?></span></p>
                  </div>
                  
                  <div class="col-md-6">
                    <p><strong>Choix du transport</strong>
                      <span> <?php echo $trans_type; ?></span></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="trip-head">Heading of Section</h4>
                  </div>
                  <div class="col-md-6">
                    <p><strong>Remarques / Programme souhaité</strong><br>
                      <span> <?php echo $desc_text; ?></span></p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <h3>Document Uplaod Section</h3>
                    <form enctype="multipart/form-data" class="jNice" accept-charset="utf-8" method="post" action="<?php echo base_url(); ?>admin/request_list/uploadDoc">
                      
                      <div class="form-group">
                        <label for="doc-file"></label><br>
                        <span class="wpcf7-form-control-wrap req-bedtwins">
                          <input type="file" name="userfile[]" multiple class="form-control reqcheck" >
                        </span>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                          <input type="radio" name="optradio">My Documents
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="optradio">My Request
                        </label>
                      </div>
                      <div class="form-group">
                          <input class="btn btn-default" type="submit" value="Uplaod" name="Uplaod">
                      </div>

                    </form>
                    <!-- document preview table -->
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Document Name</th>
                            <th>Preview</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>File Name</td>
                            <td><img class="img-view" src="https://d13dcw7qo4xgly.cloudfront.net/wp-content/uploads/2017/03/Thumb15.png"></td>
                            <td><a href="">Print</a></td>
                          </tr>
                        </tbody>
                    </table>

                  </div>
                </div>
          </div>
        	<div class="col-md-4">
        		<div class="panel panel-success">
        			<div class="panel-heading">
                        <span class="glyphicon glyphicon-user"></span> Person Detail
                    </div>
                    <div class="panel-body">
                    	<div class="person-details">
        					       <h3><?php echo $name ?></h3>
        					       <p class="person-email"><a href="#"><?php echo $email ?></a></p>
        					       <p class="person-phone"><?php echo $phone ?></p>
        				      </div>
                    </div>
        		</div>
        		<div class="panel panel-primary">
                          <div class="panel-heading">
                              <span class="glyphicon glyphicon-comment"></span> Chat Activity
                          </div>
                          <div class="panel-body">
                              <ul class="chat">
                                <?php 
                                  $msgcount = count($msgs);
                                  for ($i=0; $i < $msgcount; $i++) { 

                                    if ($msgs[$i]->is_admin >= 1) {
                                      $email = 'admin@yaslem.net';
                                      $classchk = 'grayone';
                                    } else {
                                      $email = $reqData[0]->email;
                                      $classchk = 'whiteone';
                                    }
                                    $chatBody = '';

                                    $chatBody .= '<li class="'.$classchk.' clearfix">';
                                    $chatBody .= '<div class="chat-body clearfix">';
                                    $chatBody .= '<div class="header">';
                                    $chatBody .= '<strong class="primary-font"> '.$email.'  </strong></div><p>';
                                    $chatBody .= $msgs[$i]->msg_txt;;
                                    $chatBody .= '</p></div></li>';

                                    echo $chatBody;



                                    // echo '<li class="'.$classchk.' clearfix">';
                                    // echo '<div class="chat-body clearfix">';
                                    // echo '<div class="header">';
                                    // echo '<strong class="primary-font"> '.$email.'  </strong></div><p>';
                                    // echo $msgs[$i]->msg_txt;
                                    // echo '</p></div></li>';
                                  }
                                ?>
                              </ul>
                          </div>
                          <div class="panel-footer">
                              <form class="form-request" action="<?php echo base_url(); ?>admin/request_list/sentMsg" method="post" name="tripChat">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." name="chatmsg">
                                    <input type="hidden" name="tripID" value="<?php echo $trip_id; ?>">
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="btn-chat">
                                            Send</button>
                                    </span>
                                </div>
                              </form>
                          </div>
                </div>
        	</div>
          
          
        </div>
    </section>
</div>