<div class="container-fluid no-padding">
	<div class="full-image acount-image"></div>
	<div class="container category-view">
		<div class="col-md-10 col-md-offset-1">
			<?php 
				if ($catData < 1) {
					echo '<div class="alert alert-info"><strong>Oops</strong> No Offers Publish Yet!</div>';
				} else 
				{
					foreach ($catlist as $offer ) 
					{

						$catoffer = '';
						$catoffer .= '<div class="col-md-4 offer-box">';
						$catoffer .= '<a href="'.base_url().'detailpage/'.$offer->list_slug.'">';
						$catoffer .= '<div class="img-holder">';
						$catoffer .= '<img class="img-responsive" src="../uploads/'.$offer->image_name.'">';
						$catoffer .= '</div>';
						$catoffer .= '<div class="offer-details">';
						$catoffer .= '<h4 class="offer-title">'.$offer->list_title.'</h4>';
						$catoffer .= '<h4 class="offer-price">'.$offer->price.' AED</h4>';	
						$catoffer .= '</div></a></div>';

						print_r($catoffer);
					}	
				}
				
			 ?>
			

		</div>
	</div>
</div>