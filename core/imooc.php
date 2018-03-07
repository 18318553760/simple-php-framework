<?php
namespace core;

class imooc
{
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        \core\lib\log::init();

        $route = new \core\lib\route();

        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlFile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';
        $ctrlClass = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';
        if(is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:' . $route->ctrl . '     ' . 'action:' . $action);
        } else {
            throw new \Exception('cannot find controller' . $ctrlClass);
        }
    }

    static public function load($class)
    {
        //自动加载类库
        if (isset($classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\', '/', $class);
            $file = IMOOC . '/' . $class . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $path = APP . '/views/' . $file;
        if (is_file($path)) {
            /*
            extract();
            include $file;
            */
            $loader = new \Twig_Loader_Filesystem(APP . '/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => IMOOC . '/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->load($file);
            $template->display($this->assign ? $this->assign : array());
        }
    }
}
