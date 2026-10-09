<?php
   echo $_COOKIE['test'];

   setcookie('str', 'eee');
   var_dump($_COOKIE['str']);

   setcookie('strr', 'ees');
   $_COOKIE['strr'] = 'ees';
   var_dump($_COOKIE['strr']);

   if(!isset($_COOKIE['str'])){
      setcookie('str', 'eee');
      $_COOKIE['str']= 'eee';
   }

   echo $_COOKIE['str'];

   if(!isset($_COOKIE['counter'])){
      setcookie('counter', 1);
      $_COOKIE['counter'] =1;
   }
   else{
      setcookie('counter', $_COOKIE['counter'] + 1);
      $_COOKIE['counter'] = $_COOKIE['counter'] +1;
   }

   echo $_COOKIE['counter'];

   if(!isset($_COOKIE['counter'])){
      setcookie('counter', 1);
      $_COOKIE['counter'] =1;
   }
   else{
      setcookie('counter', ++$_COOKIE['counter']);
   }

   echo $_COOKIE['counter'];

   setcookie('test', 'abcde', time() +3600);
   setcookie('test', 'abcde', time() +60 * 60 * 24);

   setcookie('test', 'abcde', time() +60 * 60 * 24 * 31);

   setcookie('test', 'abcde', time() +60 * 60 * 24 * 365);

   setcookie('test', 'abcde', time() +60 * 60 * 24  * 365 * 10);

   setcookie('test', '', time());

   var_dump($_COOKIE['test']);

   setcookie('test', '', time());
   unset($_COOKIE['test']);

   var_dump($_COOKIE['test']);

   if(isset($_COOKIE['test'])){
      setcookie('test', '', time());
      unset($_COOKIE['test']);
   }

   var_dump($_COOKIE['test']);
?>