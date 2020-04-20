<?php
class SessionManager
{
    function __construct()
    {
        session_start();
    }
    public function set($name, $value)
    { $_SESSION[$name] = $value;
        return $this;
    }
    public function get($name, $def=false)
    {if(isset($_SESSION[$name]))
        return $_SESSION[$name];
    else
        return ($def !== false)? $def : false;
    }
    public function remove($name)
    {unset($_SESSION[$name]);
        return $this;
    }
}
$ses = new SessionManager;
$ses->set('foo', 'bar');
var_dump($ses->get('cat'));
var_dump($ses->get('foo'));
$ses->remove('foo');
var_dump($ses->get('foo'));


