<?php

	class emailer extends settings 
	{
		private $msg;
		private $subj;
		public function __construct()
		{
			parent::__construct();
		}

		public function GenerateMsg($msg, $subj)
		{
			$this->Msg=$msg;
			$this->Subj=$subj;
		}
		public function SendMsg()
		{
			if(!empty($this->Msg))
				return "Message from: {$this->site_name}
			<br /> User ID: {$this->user_id}";
			else
				return "Nothing was typed";
		}
	}

?>