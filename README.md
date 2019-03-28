  # Laravel Pusher Chat
  
  This laravel pusher chat is a free, open source and one to one chat software designed for demo and learning. It is built with modern technologies such as Laravel, Bootstrap, jQuery, Pusher etc. Thanks to webmobtuts who is provided the tutorials for it, This provides an awesome chat system for users and developers.
  
  ## Requirements
  
  * PHP 5.6.4 or higher
  * Database (eg: MySQL, PostgreSQL, SQLite)
  * Web Server (eg: Apache, Nginx, IIS)
  
  ## Framework
  
  Laravel Pusher Chat uses [Laravel](http://laravel.com), the best existing PHP framework, as the foundation framework and [Modules](https://nwidart.com/laravel-modules) package for Apps.
  
  ## Installation
  
   * Install [Composer](https://getcomposer.org/download)
   * Download the [repository](https://github.com/dekts/laravel-pusher-chat/archive/master.zip) and unzip into your server
   * Open and point your command line to the directory you unzipped Laravel Pusher Chat
   * Run the following command: `composer install`
   * Set the .env file with required information with pusher API credential
   * Run the project through Laravel way or create the virtual host and execute in different browsers
   * Finally, launch the [web app](http://localhost:8000)
   
  ## Note
  
  If the websocket is not working or note connected the the pusher then try to provide direct api info into `/app/Lib/PusherFactory.php` and clear the `config:cache` and then reload the project again. 
   
  ## Contributing
  
  Fork the repository, make the code changes then submit a pull request.
  
  Please, be very clear on your commit messages and pull requests, empty pull request messages may be rejected without reason.
  
  When contributing code to Laravel Pusher Chat, you must follow the PSR coding standards. The golden rule is: Imitate the existing Laravel Pusher Chat code.
  
  ## Security
  
  If you discover any security related issues, please email devat.karetha@viitor.cloud instead of using the issue tracker.
  
  ## License
  
  Laravel Pusher Chat is released under the [MIT License](LICENSE.txt).