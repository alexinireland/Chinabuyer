<?php
   	function filterFunction ( $var ) { 
		$var = str_replace( "[", "", $var );
		$var = str_replace( "]", "", $var );
		return $var;
	} 

   	// Edit upload location here
   	$destination_path = getcwd().DIRECTORY_SEPARATOR . 'uploads/';

   	$result = 0;

   	$file = basename( $_FILES['myfile']['name']);
   	$file = filterFunction( $file );
   	
   	$target_path = $destination_path . $file;

   	if ( @move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path) ) {
      	$result = $file;
   	}
   
   	sleep(1);
?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload('<?php echo $result; ?>');</script>   
