<?php
    class Common extends Lib{
        function display($content, $params=[]) {
            $params['content'] = $content;
            return $this->render('/common/tpl/base_tpl.php', $params);
        }
    }

?>