<?php


  $seller_bid_free_text = $this->input->post('seller_bid_free_text');
  $seller_bid_condition_input =  $this->input->post('seller_bid_condition_input');
  $seller_bid_condition_checkbox = $this->input->post('seller_bid_condition_checkbox');
  $seller_bid_condition_input2 = $this->input->post('seller_bid_condition_input2');
  $seller_bid_condition_checkbox2 =  $this->input->post('seller_bid_condition_checkbox2');
  $seller_bid_img_upload = $this->input->post('seller_bid_img_upload');
  $seller_bid_location = $this->input->post('seller_bid_location');
  $seller_bid_working_hours =  $this->input->post('seller_bid_working_hours');
  $seller_bid_manufacturing_year = $this->input->post('seller_bid_manufacturing_year');
  $seller_bid_make = $this->input->post('seller_bid_make');
  $seller_bid_model =  $this->input->post('seller_bid_model');
  $seller_bid_part_no = $this->input->post('seller_bid_part_no');
  $working_hours = $this->input->post('working_hours');
  $included =  $this->input->post('included');
  $excluded = $this->input->post('excluded');
  $seller_bid_my_offer = $this->input->post('seller_bid_my_offer');
  $seller_bid_accept_terms =  $this->input->post('seller_bid_accept_terms');

  //$stringdatetime = new DateTime;
  //$valuedatetime = $stringdatetime->format( 'Y-m-d' );

  $this->auth->insert_seller_bid_user(
    $seller_bid_free_text, $seller_bid_condition_input, $seller_bid_condition_checkbox,
    $seller_bid_condition_input2, $seller_bid_condition_checkbox2, $seller_bid_img_upload,$seller_bid_location,
    $seller_bid_working_hours, $seller_bid_manufacturing_year,$seller_bid_make,
    $seller_bid_model, $seller_bid_part_no,$working_hours,$included, $excluded, $seller_bid_my_offer,$seller_bid_accept_terms
  );
  $this->session->set_flashdata( 'register_info', 'Bid Inserted Successfully' );
  redirect( 'sellerbid' );
?>
