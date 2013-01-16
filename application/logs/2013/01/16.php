<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-16 12:27:00 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php:67
2013-01-16 12:27:00 --- DEBUG: #0 /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /home/blackscorp/kohana/3.3/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /home/blackscorp/kohana/applications/opentribes/public/index.php(119): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php:67
2013-01-16 12:36:01 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php:67
2013-01-16 12:36:01 --- DEBUG: #0 /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__utma', NULL)
#1 /home/blackscorp/kohana/3.3/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('__utma')
#2 /home/blackscorp/kohana/applications/opentribes/public/index.php(119): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/blackscorp/kohana/3.3/system/classes/Kohana/Cookie.php:67
2013-01-16 20:40:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: icons ~ APPPATH/views/template.php [ 16 ] in /home/blackscorp/kohana/applications/application/application/views/template.php:16
2013-01-16 20:40:45 --- DEBUG: #0 /home/blackscorp/kohana/applications/application/application/views/template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/blackscor...', 16, Array)
#1 /home/blackscorp/kohana/3.3/system/classes/Kohana/View.php(61): include('/home/blackscor...')
#2 /home/blackscorp/kohana/3.3/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/blackscor...', Array)
#3 /home/blackscorp/kohana/3.3/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/blackscorp/kohana/applications/application/application/classes/Controller/Index.php(59): Kohana_Controller_Template->after()
#5 /home/blackscorp/kohana/3.3/system/classes/Kohana/Controller.php(87): Controller_Index->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/blackscorp/kohana/3.3/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 /home/blackscorp/kohana/3.3/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/blackscorp/kohana/3.3/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/blackscorp/kohana/applications/application/public/index.php(120): Kohana_Request->execute()
#11 {main} in /home/blackscorp/kohana/applications/application/application/views/template.php:16