<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open('BuyerRequestForBids', $attributes); ?>

    <div class="col-xs-12 col-sm-12 col-lg-12" >
      <h2 class="form-signin-heading text-center">Auction List</h2>
      <div class="col-xs-6 col-sm-6 col-lg-6" >
        <?php

            $query = $this->db->query("SELECT seller_bid_free_text, seller_bid_make, seller_bid_model   FROM tbl_seller_bid_input");

            //$query = $this->db->query('SELECT title FROM my_table');

            foreach ($query->result() as $key => $row)
            {
                    //echo $key . '</br>';
                    //echo $row->buy_req_textarea . '</br>';


                    $html = '';
                    $html .= '<div class="card" style="width: 18rem; float: left; margin: 1%;">';
                      $html .= '<a href="https://placeholder.com" ><img src="https://via.placeholder.com/280" ></a>';
                      $html .= '<div class="card-body">';
                        $html .= '<h5 class="card-title">'.$row->seller_bid_make.' '.$row->seller_bid_model.'</h5>';
                        $html .= '<p class="card-text">'.$row->seller_bid_free_text.'</p>';
                        $html .= '<a href="'.base_url()  .'index.php/ViewOfBidRequestDashboard/auction-'.($key+1).'" >View Auction</a>';
                      $html .= '</div>';
                    $html .= '</div>';

                    print $html;

            }

            $query->free_result();  // The $query result object will no longer be available



        ?>
      </div>
      <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >



      </div>
      <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >



      </div>
    </div>
  <?php echo form_close(); ?>
