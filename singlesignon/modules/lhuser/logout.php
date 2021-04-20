<?php

$lhUser = erLhcoreClassUser::instance();

erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.logout',array('user' => & $lhUser));

$lhUser->logout();

erLhcoreClassChatEventDispatcher::getInstance()->dispatch('user.after_logout',array('user' => & $lhUser));

session_destroy();

setcookie('SimpleSAML', null, -1, '/','.'.$_SERVER['HTTP_HOST']);
setcookie('SimpleSAMLAuthToken', null, -1, '/','.'.$_SERVER['HTTP_HOST']);

// Modify me to point to correct logout URL
header('Location: https://login.windows.net/common/oauth2/logout');
exit;

?>