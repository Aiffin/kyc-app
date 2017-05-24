<?php
session_start();
/** Set default timezone (will throw a notice otherwise) */
date_default_timezone_set('Asia/Kolkata');

include 'PHPExcel/IOFactory.php';

if(isset($_FILES['file2']['name'])){
		
	$file_name = $_FILES['file2']['name'];
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
	
	//Checking the file extension
	if($ext == "xlsx"){
			
			$file_name = $_FILES['file2']['tmp_name'];
			$inputFileName = $file_name;

		//  Read your Excel workbook
		try {
			$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);
		} catch (Exception $e) {
			die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) 
			. '": ' . $e->getMessage());
		}

		//Table used to display the contents of the file
		echo '<center><table style="width:50%;" border=1>';
		
		//  Get worksheet dimensions
		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow();
		$highestColumn = $sheet->getHighestColumn();
		$highestColumn = "I";
		/*echo $highestColumn;*/
		

		
		//  Loop through each row of the worksheet in turn
		for ($row = 2; $row <= $highestRow; $row++) {
			//  Read a row of data into an array
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, 
			NULL, TRUE, FALSE);
			/*echo "<tr>";*/
			//echoing every cell in the selected row for simplicity. You can save the data in database too.
			$stack = ""; 
	
			foreach($rowData[0] as $k=>$v)
				/*echo "<td>".$v."</td>";*/
			    $stack=$stack.";".$v;
			/*echo "</tr>";*/
            echo "</br>";
            $stack = ltrim($stack, ';');
			print_r($stack);

            
			$url_search = 'https://kyc-application.herokuapp.com/import_users/';
			$options_search = array(
			  'http' => array(
			    'header'  => array(
			                  'ACCOUNT-TOKEN: '.$_SESSION['account_token'],
			                  'STRING: '.$stack,
			                ),
			    'method'  => 'GET',
			  ),
			);
			$context_search = stream_context_create($options_search);
			$output_search = file_get_contents($url_search, false,$context_search);
			
			$arr_search = json_decode($output_search,true);



		}
		
		echo '</table></center>';
        header("Location: admin_page.php");
        
       
		
	}

	else{
		echo '<p style="color:red;">Please upload file with xlsx extension only</p>'; 
	}	
		
}
?>