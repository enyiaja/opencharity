<?php
    function Assessment(){
        $items = array();
        
        //create custom user-login.tpl.php
        $items['user_login'] = array(
            'render element' => 'form',
            'path' => drupal_get_path('theme', 'Assessment'). '/templates',
            'template' => 'user-login',
            'preprocess functions' => array(
                'Assessment_preprocess_user_login'
            ),
        );
        return $items;
    }
?>