<?php

	class Fetcher
	{
		private $_json_file = '';
		private $_error_message = null;
		private $_include_path = "json/";

		/**
		 * On insantiation set target filename.  
		 * @param String $json_file_name Name of json file.
		 */
		function __construct($json_file_name)
		{
			$this->_json_file = $json_file_name;
		}

		/**
		 * Get and json_decode contents of target file.
		 * @return Object $json
		 */
		public function fetch()
		{
			$json = new stdClass();
			if(strlen($this->_json_file) > 0)
			{
				try
				{
					$json = json_decode(file_get_contents($this->_include_path . $this->_json_file . ".js"));				
				}
				catch (Exception $e)
				{
					$this->_error_message = $e->message;
				}				
			}
			else 
			{
				$this->_error_message = "No file name provided.";
			}
			return $json;
		}


		public function error()
		{
			return $this->_error_message;
		}
	}
?>