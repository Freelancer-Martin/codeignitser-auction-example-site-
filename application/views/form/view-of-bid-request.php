<?php
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('session');
$attributes = array('class' => 'form-signin');
echo form_open('BuyerRequestForBids', $attributes); ?>
    <div class="col-xs-12  col-sm-12  col-lg-12" >
      <h2 class="form-signin-heading text-center">View of a bid request  </h2>
      <div class="row" >
          <div class="col-xs-6 col-sm-6 col-lg-6" >

            <?php
                 $this->load->helper('url');
/*
                 $select_list = array( 'seller_bid_free_text ', 'seller_bid_condition_input ', 'seller_bid_condition_checkbox', 'seller_bid_condition_input2', ' 	seller_bid_condition_checkbox2',
                 'seller_bid_img_upload ', 'seller_bid_location ', 'seller_bid_working_hours', 'seller_bid_manufacturing_year', 'seller_bid_make', 'buy_req_kmseller_bid_model',
                 'seller_bid_part_no', 'working_hours', 'included', 'excluded', 'seller_bid_my_offer', 'seller_bid_accept_terms'
                  );
*/                  
                 $query = $this->db->from('tbl_seller_bid_input');


                 $site_url = current_url();
                 $auction_number = preg_replace( '/\D/', '', $site_url );
                 $fixed_nr = $auction_number;


                 $query = $this->db->get();

                 $auction_info = $query->row( $auction_number );

                ?>

                <ul style="font-size: 18px; background-color: blue;  padding: 25px; margin: 20px;" class="list-group card">
                    <li class="list-group-item">-Mark: <?php echo $auction_info->seller_bid_make ?></li>
                    <li class="list-group-item">-Model:  <?php echo $auction_info->seller_bid_model ?></li>
                    <li class="list-group-item">-Year of Manufacture: <?php echo $auction_info->seller_bid_manufacturing_year ?></li>
                    <li class="list-group-item">-Factory Code: <?php echo $auction_info->seller_bid_part_no ?></li>
                </ul>
                <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                  <p><?php echo $auction_info->seller_bid_condition_input  ?></p>
                </div>
                <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                  <p><?php echo $auction_info->seller_bid_condition_input2  ?></p>
                </div>
                <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
                  <p><?php echo $auction_info->seller_bid_condition_input2 ?></p>
                </div>
                <div style="font-size: 18px; background-color: blue;  padding: 15px; margin: 10px;" class="seller-bid-third-col col-xs-12 col-sm-12 col-lg-12" >
                  <p><?php echo $auction_info->seller_bid_condition_checkbox ?></p>
                  <p><?php echo $auction_info->seller_bid_condition_checkbox2 ?></p>
                </div>
          </div>

          <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
              <div class="col-lg-12"  >
                <a href="https://placeholder.com" ><img src="https://via.placeholder.com/340" ></a>
              </div>
              <div style="padding-top: 10px; padding-bottom: 10px; display: inline;" class="col-lg-6"  >
                <a href="https://placeholder.com" ><img style="padding-top: 5px; padding-bottom: 5px;" src="https://via.placeholder.com/170" ></a>
                <a href="https://placeholder.com" ><img style="padding-top: 5px; padding-bottom: 5px;" src="https://via.placeholder.com/170" ></a>
              </div>
              <div style="padding-top: 10px; padding-bottom: 10px; display: inline;" class="col-lg-6"  >
                <a href="https://placeholder.com" ><img style="padding-top: 5px; padding-bottom: 5px;" src="https://via.placeholder.com/170" ></a>
                <a href="https://placeholder.com" ><img style="padding-top: 5px; padding-bottom: 5px;" src="https://via.placeholder.com/170" ></a>
              </div>
              <ul style="font-size: 14px; background-color: blue;  padding: 15px; margin: 10px;" class="list-group card">
                  <li class="list-group-item">Bid 1</li>
                  <li class="list-group-item">Bid 2</li>
                  <li class="list-group-item">Bid 3</li>
                  <li class="list-group-item">Bid 4</li>
              </ul>
              <a href="<?php echo base_url()  . 'index.php';  ?>" class="btn btn-primary text-align">Place Bid</a>
          </div>

          <div class="seller-bid-third-col col-xs-3 col-sm-3 col-lg-3" >
              <div style="font-size: 18px; background-color: blue; width: 18rem; padding: 25px; margin: 20px;" class="card" >
                  <p>
                    About Buyer
                    Name : ayan haider
                    Company : Thecodlab
                  </p>
              </div>
              <div style="font-size: 22px; background-color: blue; width: 18rem; padding: 25px; margin: 20px;" class="card" >
                  <p>Ask Question</p>
              </div>
              <div style="font-size: 18px; background-color: blue; width: 18rem; padding: 25px; margin: 20px;" class="card" >
                <p><?php echo $auction_info->seller_bid_location  ?></p>
              </div>
          </div>


      </div>
    </div>
  <?php echo form_close(); ?>
