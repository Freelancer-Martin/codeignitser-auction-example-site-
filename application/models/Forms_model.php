<?php

class Forms_model extends CI_Model
{

  public function InsertAjaxModel( $models  )
     {
     $query = $this->db->query("INSERT INTO tbl_models
       (
         models
       )
        VALUES
       (
         '$models'
       )");
  }


  public function InsertAjaxMark( $mark  )
     {
     $query = $this->db->query("INSERT INTO tbl_mark
       (
         mark
       )
        VALUES
       (
         '$mark'
       )");
  }

  public function InsertDashboardViewOfBidRequest( $view_of_bid_request,$accept_bids_username,$accept_bids_email, $accept_bids_userId  )
     {
     $query = $this->db->query("INSERT INTO tbl_accepted_bids (
         view_of_bid_request,
         accept_bids_username,
         accept_bids_email,
         accept_bids_userId


       )
        VALUES
       (
         '$view_of_bid_request',
         '$accept_bids_username',
         '$accept_bids_email',
         '$accept_bids_userId'

       )");
  }

  public function insert_seller_bid_user(
     $seller_bid_free_text, $seller_bid_condition_input, $seller_bid_condition_checkbox,
     $seller_bid_condition_input2, $seller_bid_condition_checkbox2, $seller_bid_img_upload,$seller_bid_location,
     $seller_bid_working_hours, $seller_bid_manufacturing_year,$seller_bid_make,
     $seller_bid_model, $seller_bid_part_no,$working_hours,$included, $excluded, $seller_bid_my_offer,$seller_bid_accept_terms )
     {
     $query = $this->db->query("INSERT INTO tbl_seller_bid_input (
         seller_bid_free_text,
         seller_bid_condition_input,
         seller_bid_condition_checkbox,
         seller_bid_condition_input2,
         seller_bid_condition_checkbox2,
         seller_bid_img_upload,
         seller_bid_location,
         seller_bid_working_hours,
         seller_bid_manufacturing_year,
         seller_bid_make,
         seller_bid_model,
         seller_bid_part_no,
         working_hours,
         included,
         excluded,
         seller_bid_my_offer,
         seller_bid_accept_terms

       )
        VALUES
       (
         '$seller_bid_free_text',
         '$seller_bid_condition_input',
         '$seller_bid_condition_checkbox',
         '$seller_bid_condition_input2',
         '$seller_bid_condition_checkbox2',
         '$seller_bid_img_upload',
         '$seller_bid_location',
         '$seller_bid_working_hours',
         '$seller_bid_manufacturing_year',
         '$seller_bid_make',
         '$seller_bid_model',
         '$seller_bid_part_no',
         '$working_hours',
         '$included',
         '$excluded',
         '$seller_bid_my_offer',
         '$seller_bid_accept_terms'
       )");
  }




  public function InsertIdentifyingBuyerVehicle(
     $ind_buy_vec_mark, $ind_buy_vec_model, $ind_buy_vec_cat,
     $ind_buy_vec_year_from, $ind_buy_vec_year_to, $ind_buy_vec_hour_min,$ind_buy_vec_hour_max)
     {
     $query = $this->db->query("INSERT INTO tbl_identifying_buyers_vechile (
         ind_buy_vec_mark,
         ind_buy_vec_model,
         ind_buy_vec_cat,
         ind_buy_vec_year_from,
         ind_buy_vec_year_to,
         ind_buy_vec_hour_min,
         ind_buy_vec_hour_max

       )
        VALUES
       (
         '$ind_buy_vec_mark',
         '$ind_buy_vec_model',
         '$ind_buy_vec_cat',
         '$ind_buy_vec_year_from',
         '$ind_buy_vec_year_to',
         '$ind_buy_vec_hour_min',
         '$ind_buy_vec_hour_max'


       )");
  }

  public function InsertBuyerRequestForBids (
     $buy_req_textarea, $buy_req_keyword_1, $buy_req_keyword_2,$buy_req_keyword_3,
     $buy_req_upload, $buy_req_condition_1, $buy_req_condition_2, $buy_req_compulsory_photos, $buy_req_shipping,
     $buy_req_address, $buy_req_km, $buy_req_postcode,$buy_req_working_hours,
     $buy_req_fast_days, $buy_req_fast, $buy_req_inspection
      )
     {
     $query = $this->db->query("INSERT INTO tbl_buyer_request_for_bids (
         buy_req_textarea,
         buy_req_keyword_1,
         buy_req_keyword_2,
         buy_req_keyword_3,
         buy_req_upload,
         buy_req_condition_1,
         buy_req_condition_2,
         buy_req_compulsory_photos,
         buy_req_shipping,
         buy_req_address,
         buy_req_km,
         buy_req_postcode,
         buy_req_working_hours,
         buy_req_fast_days,
         buy_req_fast,
         buy_req_inspection


       )
        VALUES
       (
         '$buy_req_textarea',
         '$buy_req_keyword_1',
         '$buy_req_keyword_2',
         '$buy_req_keyword_3',
         '$buy_req_upload',
         '$buy_req_condition_1',
         '$buy_req_condition_2',
         '$buy_req_compulsory_photos',
         '$buy_req_shipping',
         '$buy_req_address',
         '$buy_req_km',
         '$buy_req_postcode',
         '$buy_req_working_hours',
         '$buy_req_fast_days',
         '$buy_req_fast',
         '$buy_req_inspection'

       )");
    }



}
