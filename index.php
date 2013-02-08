<?php
    include('system/db.php');
    spl_autoload_register(function ($class) {
        if (is_file('modules/' . strtolower($class) . '/init.php')) require_once 'modules/' . strtolower($class) . '/init.php';
        if (is_file('system/' . $class . '.php')) include 'system/' . $class . '.php';
        if ($class == 'Common') include 'common/init.php';
    });
        
    $db = new DB($pdo);
    
    $_GET['s1'] = 'alldocuments';
    switch ($_GET['s1']) {
        case 'alldocuments':
            $page = new ItemList($db);
            echo $page->outHTML();
            break;
        default:
            $page = new HomePage();
            echo $page->outHTML();
            break;
    }
?>