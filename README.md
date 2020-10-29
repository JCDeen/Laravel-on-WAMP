# Laravel-on-WAMP
experience gained while exploring Laravel on a Windows 10 WAMP dev system

I had to make these changes to get it to run the "php artisan migrate" without errors.

The error message before the changes was:
    D:\wamp64-320\www\laraveltest\blog\vendor\laravel\framework\src\Illuminate\Database\Connection.php:464
   	PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes")
