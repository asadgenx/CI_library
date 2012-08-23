<?php


class ssvparser

{
		
	 public function parser($value_delimiter,$line_delimiter,$filepath,$line1=TRUE)
	 {

		$file = fopen($filepath,"r");
		$file_content=fread($file,filesize($filepath));
		fclose($file);
		$file_content=str_replace("'","",$file_content);
		$file_content=str_replace("\"","",$file_content);
		$file_content=rtrim($file_content,$line_delimiter);
		$line_array=explode($line_delimiter,$file_content);
		if($line1==TRUE) 
		{
		$line_array=array_slice($line_array, 1); 
		}
		foreach($line_array as $row)
		{
		
                     $column_array = explode($value_delimiter,$row);
		    
		     $value_array[] = $column_array;

	
		}
	 
		return $value_array;
			
	}

}



?>
