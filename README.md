# EC-MAV-v1.0

To run this project:

Intall req(in order):
1.VS Code
2.Xampp https://www.apachefriends.org/index.html
3.Composer https://getcomposer.org/download/
4.Git bash https://git-scm.com/downloads

Follow the steps:
1.Install git hub extensions in vs code:
 a.Git blame
 b.GitLens-Git Supercharge
 c.Git History
 
 Additional:
 a.Laravel Snippets
 b.Laravel Artisan
 c.Laravel Blade Snipets
 d.Laravel-Blade
2. You must clone this in your C:\xampp\htdocs ex(mine): C:\xampp\htdocs\Github\EC-MAV-v1.0\maveson
3. Create a file in C:\xampp\htdocs\Github\EC-MAV-v1.0\maveson name it '.env'

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:svBpWGolZzkEdix76vWj/ZlPoo01Xxyk3JjnGaZASig=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

5.Make git bash default integrated terminal on your VS Code(search)
6.Run Integrated terminal in VS Code (git bash) and type 'composer update'
7.Run 'php artisan serve'
