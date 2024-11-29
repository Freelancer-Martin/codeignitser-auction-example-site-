<?php


  $buy_req_textarea = $this->input->post('buy_req_textarea');
  $buy_req_keyword_1 =  $this->input->post('buy_req_keyword_1');
  $buy_req_keyword_2 = $this->input->post('buy_req_keyword_2');
  $buy_req_keyword_3 = $this->input->post('buy_req_keyword_3');
  $buy_req_upload =  $this->input->post('buy_req_upload');
  $buy_req_condition_1 = $this->input->post('buy_req_condition_1');
  $buy_req_condition_2 = $this->input->post('buy_req_condition_2');
  $buy_req_compulsory_photos = $this->input->post('buy_req_compulsory_photos');
  $buy_req_shipping = $this->input->post('buy_req_shipping');
  $buy_req_address =  $this->input->post('buy_req_address');
  $buy_req_km = $this->input->post('buy_req_km');
  $buy_req_postcode = $this->input->post('buy_req_postcode');
  $buy_req_working_hours =  $this->input->post('buy_req_working_hours');
  $buy_req_fast_days = $this->input->post('buy_req_fast_days');
  $buy_req_fast = $this->input->post('buy_req_fast');
  $buy_req_inspection = $this->input->post('buy_req_inspection');


  $this->auth->InsertBuyerRequestForBids(
    $buy_req_textarea, $buy_req_keyword_1, $buy_req_keyword_2,$buy_req_keyword_3,
    $buy_req_upload, $buy_req_condition_1, $buy_req_condition_2,$buy_req_compulsory_photos,$buy_req_shipping,
    $buy_req_address, $buy_req_km, $buy_req_postcode,$buy_req_working_hours,
    $buy_req_fast_days, $buy_req_fast, $buy_req_inspection
   );

  $this->session->set_flashdata( 'register_info', 'Request For Bids Inserted' );
  redirect( 'BuyerRequestForBids' );
?>
