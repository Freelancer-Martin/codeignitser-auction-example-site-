<?php


  $view_of_bid_request = $this->input->post('view_of_bid_request');
  $accept_bids_username = $this->input->post('accept_bids_username');
  $accept_bids_email = $this->input->post('accept_bids_email');
  $accept_bids_userId = $this->input->post('accept_bids_userId');



  $this->auth->InsertDashboardViewOfBidRequest(
    $view_of_bid_request,$accept_bids_username,$accept_bids_email, $accept_bids_userId
  );
  $this->session->set_flashdata( 'register_info', 'Bid Accepted Successfully' );
  //redirect( 'IdentifyingBuyerVehicle' );
  redirect( 'dashboard/DashboardViewOfBidRequest/auction-'.$view_of_bid_request.'' );
?>
