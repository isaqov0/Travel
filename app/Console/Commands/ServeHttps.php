<?php
// app/Console/Commands/ServeHttps.php
	namespace App\Console\Commands;
	
	use Illuminate\Console\Command;
	
	class ServeHttps extends Command
	{
		protected $signature = 'serve:https';
		protected $description = 'Serve the application with HTTPS';
		
		public function __construct()
		{
			parent ::__construct();
		}
		
		public function handle()
		{
			$this -> info('Starting Laravel development server with HTTPS...');
			passthru(sprintf(
				'php -S %s:%s -t %s --cert %s --key %s %s',
				'127.0.0.1',
				'8000',
				public_path(),
				base_path('ssl/localhost.pem'),
				base_path('ssl/localhost-key.pem'),
				base_path('server.php')
			));
		}
	}
