<?php
		
	class settings {
		protected function __construct()
		{
			self::Make();
		}

		public function Make()
		{
			$this->site_email = 'monumental@monumental.com';
			$this->site_name = 'Monumental';
			$this->user_id = '12345678';
		}
	}

	?>