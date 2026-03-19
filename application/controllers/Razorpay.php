<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Razorpay extends CI_Controller {
    // construct
    public function __construct() {
        parent::__construct();
    }

    // index page
    public function index() {
        $data['title'] = 'Razorpay | DawaJunction';  
        //$data['productInfo'] = $this->site->getProduct();           
        $this->load->view('razorpay/index', $data);
    }
 
    // checkout page
    public function checkout($id="") {
        $data['title'] = 'Checkout payment | DawaJunction';  
        //$this->site->setProductID($id);
        //$data['itemInfo'] = $this->site->getProductDetails(); 
        $data['return_url'] = site_url().'razorpay/callback';
        $data['surl'] = site_url().'razorpay/success';
        $data['furl'] = site_url().'razorpay/failed';
        //$data['currency_code'] = 'INR';
        //$this->load->view('razorpay/checkout', $data);
		$this->load->view('razorpay_view', $data);
    }
 
    //private $response_array = array();
    // initialized cURL Request

	
    private function get_curl_handle($payment_id, $amount)  {

        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
		$key_id = "rzp_test_R5vXLMgcOxTe68";
        $key_secret = "qNAC1fZkfDIahPVEVoSTA6kT";
        $fields_string = "amount=$amount";

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        return $ch;

    }   
        
    public function callback() {   
		
		//print_r($_POST); die;
		
		//print_r($_SESSION); die;
		date_default_timezone_set("Asia/Kolkata"); 
		$this->load->model('Transaction_page') ;
		$session_id=session_id();
		$userID=$this->session->user_id;
		
		$txnid =time();
		$this->session->set_userdata('txnid', $txnid);  
		//echo $txnid; die;
		// $ordered_item_arr=$this->Transaction_page->get_cart_details($session_id);
		//  $totalShipping=0; $TotalCodCharge=0; $TotalCast=0; $SubTotal=0;
		// 	 foreach($ordered_item_arr as $vcart) 
		// 	   {
		// 			$shipcharge=$vcart['ShippingCharge'];
		// 			$totalShipping=$totalShipping+$shipcharge;
		// 			$p=$vcart['Price']*$vcart['Quantity'];
		// 			$CodCharge=$vcart['CODCharges']*$vcart['Quantity'];
		// 			$TotalCodCharge=$TotalCodCharge+$CodCharge;			
		// 			$TotalCast=$TotalCast+$p;
		// 			$SubTotal=$SubTotal+$p;
		// 	   }
		// 	$totalShipping=$this->session->ShippingCharges;
		// 	$againtotalmaont =$TotalCast+$totalShipping-$this->session->DIS;  
		//   		$data_in['user_loginid']=$userID; 
		// 		$data_in['order_date']=date('Y-m-d H:i:s');
		// 		$data_in['order_last_update']=date('Y-m-d H:i:s'); 
		// 		$data_in['order_status'] ='NP';
		// 		$data_in['CompanyName']=$this->session->CompanyName; 
		// 		$data_in['order_shipping_first_name']=$this->session->ShippingFirstName; 
		// 		$data_in['order_shipping_last_name']=''; 
		// 		$data_in['order_shipping_address1']=$this->session->ShippingAddress1; 
		// 		$data_in['NearestSeaport']=$this->session->NearestSeaport; 
		// 		$data_in['NearestAirport']=$this->session->NearestAirport; 
		// 		$data_in['LandmarksA']=$this->session->LandmarksA; 
		// 		$data_in['LandmarksB']=$this->session->LandmarksB; 
		// 		$data_in['order_shipping_phone']=$this->session->ShippingPhone;  
		// 		$data_in['order_shipping_city']=$this->session->ShippingCity;  
		// 		$data_in['order_shipping_state']=$this->session->ShippingState;  
		// 		$data_in['order_shipping_postal_code']=$this->session->ShippingPostalCode;   
		// 		$data_in['PaymentType']='O'; 
		// 		$data_in['order_coupanDiscount'] =0;
		// 		$data_in['TotalAmount']=$this->session->pyamount; 
		// 		$data_in['AddressID']=$this->session->AddressID;
		// 		$data_in['txnid']=$this->session->txnid;
		// 		$data_in['ShipmentIdentificationNumber']=$this->session->ShipmentIdentificationNumber;
		// 		$data_in['TrackingNumber']=$this->session->TrackingNumber;
		// 		$data_in['TotalShippingCharges']=$this->session->ShippingCharges;
		// 		$orderId=$this->Transaction_page->order_add($data_in);	
		// 		$data_st['OrderID']=$orderId; 
		// 		$data_st['VendorID']=0;
		// 		$data_st['StatusID']=8;
		// 		$data_st['StatusUpdateDate']=date('Y-m-d H:i:s'); 
		// 		$data_st['UpdatedBy']=$userID;
		// 		$data_st['StatusCode']='NP'; 
				
		// 		$this->session->set_userdata('orderId', $orderId);  
				
		// 	$Orderstatus=$this->Transaction_page->order_status_add($data_st);	
		// 	 foreach($ordered_item_arr as $cartItemDetail)
		// 	{
			
		// 			$totalVendorPrice=$this->Transaction_page->get_vendor_price($cartItemDetail['ProductID'],$cartItemDetail['Quantity']); 
		// 			$totalgst=$this->Transaction_page->get_vendor_gst($totalVendorPrice);
			
		// 			$data_item['order_id']=$orderId;
		// 			$data_item['product_id']=$cartItemDetail['ProductID'];
		// 			$data_item['ProductName']=$cartItemDetail['ProductName'];
		// 			$data_item['ProductCode']=$cartItemDetail['ProductCode'];
		// 			$data_item['Price']=$cartItemDetail['Price'];
		// 			$data_item['order_qty']=$cartItemDetail['Quantity'];
		// 			$data_item['Coler']=$cartItemDetail['Coler'];
		// 			$data_item['Size']=$cartItemDetail['Size'];
		// 			$data_item['vendor_id']=$cartItemDetail['VendorID'];
		// 			$data_item['ProductMRP']=$cartItemDetail['PriceWithoutDiscount'];
		// 			$data_item['Discount']=$cartItemDetail['Discount'];
		// 			$data_item['ShippingCharge']=$cartItemDetail['ShippingCharge'];
		// 			$data_item['NoDays']=$cartItemDetail['NoDays'];
		// 			$data_item['ShippingMethod']=$cartItemDetail['ShippingMethod'];
		// 			$data_item['product_weight']=$cartItemDetail['product_weight'];
		// 			$data_item['category_id']= $cartItemDetail['category_id'];
		// 			$data_item['ImageName']=$cartItemDetail['image'];
		// 			$data_item['CODCharges']=$cartItemDetail['CODCharges'];
		// 			$data_item['product_unit_price']=$totalVendorPrice;
		// 			$data_item['GST']=$totalgst;
		// 			$ordered_item=$this->Transaction_page->order_item_add($data_item);
					
		// 	}
        if (!empty($this->input->post('razorpay_payment_id'))) {
			
			//echo "<pre>"; print_r($_POST); die;
			
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
			$orderId = '101';
           	$merchant_order_id = $orderId;
            $currency_code = 'INR';
            $amount =  $this->input->post('merchant_total');			
            $success = false;

            $error = '';
            try {  
                      
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
				
                $result = curl_exec($ch);
                $response_array = json_decode($result, true);

				//echo "<pre>"; print_r($result); die;

             //  echo $transactionId = $response_array['id'];
             //  echo $status = $response_array['status'];


                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				//echo $http_status; die;
                if ($result === false)
                {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                }
                else
                {
                    if ($http_status === 200 and isset($response_array['error']) === false) {
						//echo "hi"; die;
                        $success = true;
                    } else {
                        $success = false;
                        if (!empty($response_array['error']['code'])) {
                            $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                        } else {
                            $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                        }
                    }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
			//echo $success; die;
            if ($success === true) {

                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                 }
                 $this->processPayment($response_array); 
            } else {
                $this->processPayment($response_array);
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    }

    private function processPayment($response_array)
    {
        $data['responseData'] = $response_array;		
		
		//print_r($data['responseData']); die;

		$paymentId = ($data['responseData']['id']);
		$status = $data['responseData']['status'];
	
		$amount = ($data['responseData']['amount']);
		
		$pyamount=$this->session->pyamount;
		$mytxnid=$this->session->txnid;
	  	$userID=$this->session->user_id;
		$proid = $this->session->proid;
		$orderId = $this->session->orderId;
		$firstname =$this->session->user_fname;
		
		//$orderStatus = 'CD';
		//	$this->load->model('Transaction_page'); 
			
			$data1['payment_id'] = $paymentId;
			$data1['PayuStatus']='success';
			//$data1['order_status']='CD';
			$data1['txnid']= $mytxnid;
			
			$data1['pay_amount']= $amount;
			
			print_r($data1); die;
			
		
			$this->Transaction_page->update_data($data1,$orderId,$userID);
			$cid=$this->session->customer_id;
			
			$status = 'successfull';
			
			$session_user=$this->session->user_id;;
			$ResTrackID=$orderId;
			$session_id=session_id();
			
			 $ordered_update1=$this->Transaction_page->get_ordered_item_stock($ResTrackID);
			
			$this->Transaction_page->delete_cart_data($session_id);
			$this->Transaction_page->delete_cart_items_size($session_id);
			/*print_r($this->session->set_flashdata);*/
			//print_r($session); die;
			
		$this->session->set_flashdata('payment', "Thank You, " . $firstname .".Your payment status is ". $status ."<br><br>Your Transaction ID for this transaction is ".$mytxnid);
		  redirect(base_url('thankyou/view/'.$orderId));	
		
    }
}
?>
