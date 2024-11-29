<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open('BuyerRequestForBids', $attributes); ?>

    <div class="dashboard-form-container col-xs-12 col-sm-12 col-lg-12" >
      <h2 class="form-signin-heading text-center">Auction List</h2>
      <?php
            $query = $this->db->query("SELECT buy_req_textarea  FROM tbl_buyer_request_for_bids ");

            foreach ($query->result() as $key => $row)
            {

                    $html = '';
                    $html .= '<div class="card" style="width: 18rem; float: left; margin: 1%;">';
                      $html .= '<a href="https://placeholder.com" ><img src="https://via.placeholder.com/280" ></a>';
                      $html .= '<div class="card-body">';
                        $html .= '<h5 class="card-title"></h5>';
                        $html .= '<p class="card-text">'.$row->buy_req_textarea.'</p>';
                        $html .= '<a href="'.base_url()  .'index.php/dashboard/DashboardViewOfBidRequest/auction-'.($key+1).'" >View Auction</a>';
                      $html .= '</div>';
                    $html .= '</div>';

                    print $html;
            }

            $query->free_result();
            ?>
    </div>
  <?php echo form_close(); ?>
