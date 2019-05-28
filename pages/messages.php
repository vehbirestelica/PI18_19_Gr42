<?php

	class messages extends settings
	{
		private $post;
		public function __construct(){
			parnt::__construct();
		}

		public function CreateMsg($str)
		{
			$this->post = $str;
		}

		public function PostMsg()
		{
			return "{$this->site_name}/{$this->site_email}/{$this->user_id}:{$this->post}";
		}
	}

?>