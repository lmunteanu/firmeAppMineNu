<?php
/**
 * Created by PhpStorm.
 * User: Munteanu modified version easier to use elsewhere
 * Date: 1/23/2018
 * Time: 9:55 PM
 */

require_once('application/init.php');

// the 2 files need editing for use elsewhere!
$theFileIs = 'math';
$thePath = MATH_TEMPLATES_PATH;


session_start();

$_SESSION['came_from'] = $_SERVER['REQUEST_URI'];

$TEMPLATE_VARS = [];

$TEMPLATE_VARS['mainTemplateFile'] = 'components/index.php';

$page = isset($_GET['page']) ? $_GET['page'] : $theFileIs;


//if (!User::isLogged() && !in_array($page, array('login', 'register'))) {
//    redirect('/admin.php?page=login');
//}

if ($page === 'ajax') {
    $action = $_GET['action'];
    $filePath = APPLICATION_PATH . 'pages/' . $page . '/' . $action . '.php';
} else {
    $filePath = APPLICATION_PATH . 'pages/' . $theFileIs . '/' . $page . '.php';
}

if (file_exists($filePath)) {
    require_once $filePath;
} else {
    $TEMPLATE_VARS['templatePath'] = '../not-found.php';
}

$TEMPLATE_VARS['globalError'] = isset($_SESSION['globalError']) ? $_SESSION['globalError'] : null;
unset ($_SESSION['globalError']);
$TEMPLATE_VARS['loggedUser'] = User::getLogged();

if ($page !== 'ajax') {
    require_once($thePath . $TEMPLATE_VARS['mainTemplateFile']);
}
