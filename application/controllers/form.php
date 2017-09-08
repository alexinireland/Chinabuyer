<?php

class Form_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_validate() {

		$form = Input::all();

		$rules = array(
			'name' 				=> 'required|min:5',
			'gender' 			=> 'required|integer',
			'origin' 			=> 'required|min:2',
			'date-of-birth' 	=> 'required|min:6',
			'pps' 				=> 'required|min:8|max:8',
			'address' 			=> 'required',
			'email' 			=> 'required|email',
			'mobile' 			=> 'required',
			'file' 				=> 'required|min:2',
			'rent' 				=> 'required',
			'market-location' 	=> 'required',
			'management' 		=> 'required',
			'brand' 			=> 'required'
		);

		$validator = Validator::make( $form, $rules );
		

		if ( $validator->fails() ) {
			echo 'validation';
		}
		else {
			
			$todayDate = date('d-M-Y');

			$gender = $form['gender'] == 1 ? '先生Mr. ' : '小姐Miss ';
			$expIndustry = $form['exp-in-industry'] == 'yes' ? '有' : '无';
			$management = $form['management'] == 'yes' ? '会' : '否';
			$phone = self::notProvided( $form['phone'] );
			$qq = self::notProvided( $form['qq'] );

			switch ( $form['brand'] ) {
				case '0': $brand = 'Other'; break;
				case '1': $brand = '0086.ie'; break;
				case '2': $brand = '新岛报'; break;
				case '3': $brand = '朋友介绍'; break;
				case '4': $brand = '店铺'; break;
			}

			switch ( $form['rent'] ) {
				case '0': $rent = 'ANY'; break;
				case '1': $rent = '&euro;2000 or less'; break;
				case '2': $rent = '&euro;2,000 - &euro;3,000'; break;
				case '3': $rent = '&euro;3,000 - &euro;4,000'; break;
				case '4': $rent = '&euro;5,000 or more'; break;
			}


			$my_file = $form['file'];
			$my_path = $_SERVER['DOCUMENT_ROOT'] . "/public/uploads/";
			$my_name = $form['name'];
			$my_mail = $form['email'];
			$my_replyto = "franchise@funtech.ie";
			$my_subject = "Form Submited: " . $form['name'];
			$my_message = "
				<html>
				<head>
				  <title>加盟商申请表 | Franchise Application Form</title>
				</head>
				<body>
					<div style=\"display: block; background-color: #f5f5f5; padding: 20px;\">
						<div style=\"width: 500px; border: 1px solid #eee; background-color: #fff; padding: 20px; margin-left: auto; margin-right: auto; line-height: 1.5;\">
							<img src=\"http://funtech.ie/themes/funtech/img/logo.png\">
							<br />
							<h3>加盟商申请表 | Franchise Application Form</h3>

							<br /><br />

							<h4>一、基本资料 | Basic information</h4>

							<p>申请人姓名 | Name ： <b>{$gender} {$form['name']}</b></p>
							<p>籍贯 | Origin ： <b>{$form['origin']}</b></p>
							<p>出生日期 | Date of Birth : <b>{$form['date-of-birth']}</b></p>
							<p>税号 | PPS No. ： <b>{$form['pps']}</b></p>
							<p>现住址 | Address ： <b>{$form['address']}</b></p>
							<p>QQ : {$qq}</p>
							<p>eMail : <b>{$form['email']}</b></p>
							<p>电话 | Phone ： {$phone}</p>
							<p>移动电话 | Mobile ： <b>{$form['mobile']}</b></p>
							      
							<p>有无同行业经验 | Experience in this industry ： <b>{$expIndustry}</b></p>

							<p>二、偏爱经营市场位置 | Market location : <b>{$form['market-location']}</b></p>

							<br />

							<h4>三、资金与管理 | Funding and management</h4>

							<p>1. 可承受租金 | Funds available for rent. ： <b>{$rent}</b></p>

							<p>2. 是否亲自管理该店铺 | Are you going to personally manage the shop? : <b>{$management}</b></p>

							<p>3. 从何处了解到公司品牌 | Where did you hear about us? : <b>{$brand}</b></p>

							<br />

							<p>申请人签名 Applicant Signature: <b>{$form['name']}</b></p>

							<br /><br />                     

							<p>申请日期 | Date ： <b>{$todayDate}</b></p>
						</div>
					</div>
				</body>
				</html>
			";
			
			self::send( $my_file, $my_path, "franchise@funtech.ie", $my_mail, $my_name, $my_replyto, $my_subject, $my_message );
		}
	}

	private function send( $filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message ) {
	    $file = $path.$filename;
	    $file_size = filesize($file);
	    $handle = fopen($file, "r");
	    $content = fread($handle, $file_size);
	    fclose( $handle );
	    $content = chunk_split(base64_encode($content));
	    $uid = md5( uniqid(time()) );
	    $name = basename($file);
	    $header = "From: ".$from_name." <".$from_mail.">\r\n";
	    $header .= "Reply-To: ".$replyto."\r\n";
	    $header .= "MIME-Version: 1.0\r\n";
	    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
	    $header .= "This is a multi-part message in MIME format.\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-type:text/html; charset=iso-8859-1\r\n";
	    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
	    $header .= $message."\r\n\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
	    $header .= "Content-Transfer-Encoding: base64\r\n";
	    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
	    $header .= $content."\r\n\r\n";
	    $header .= "--".$uid."--";

	    if ( mail($mailto, $subject, "", $header) ) {
	        echo 'sent';
	    } else {
	        echo 'not sent';
	    }

	    // delete file
	    unlink( $file );
	}

	private static function notProvided( $var ) {

		if ( strlen($var) > 0 ) {
			return '<b>' . $var . '</b>';
		}

		return '<span style="color:#ccc;font-style:italic;">not provided</span>';

	}

}