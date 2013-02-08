<?php
    class ItemList extends Common {
        public $db;
        public $dirpath = '/modules/itemlist/';
        
        function __constructor($db) {
            $this->db = $db;
            
            $page_settings = [
                'page_title' => 'Станочкиу'
            ];
            return $this;
        }
        
        function outHTML() {
            $out = '';
            $params = [
                'stanki' => $this->get_list()
                ];
            $out .= $this->render($this->dirpath.'tpl/base_tpl.php', $params);
            print_r($this->page_settings);
            return $this->display($out, $this->page_settings);
        }
        
        private function get_list($params = array()) {
            $stanki = array();
            $stanki = array(
                0 => array(
                    'id' => 0,
                    'group' => 'сверлильно-расточная',
                    'type' => 'сверлильная',
                    'year' => 2001,
                    'price' => 33000,
                    'params' => '20* 39` широкоуголный'
                ),
                1 => array(
                    'id' => 1,
                    'group' => 'токарная',
                    'type' => 'почти сверлильная',
                    'year' => 2011,
                    'price' => 100000,
                    'params' => '20* 39` широкоуголный'
                ),
                2 => array(
                    'id' => 2,
                    'group' => 'сверлильно-расточная',
                    'type' => 'сверлильная',
                    'year' => 1961,
                    'price' => 33000,
                    'params' => '20* 39` широкоуголный'
                ),
                3 => array(
                    'id' => 3,
                    'group' => 'сверлильно-расточная',
                    'type' => 'сверлильная',
                    'year' => 1951,
                    'price' => 33000,
                    'params' => '20* 39` широкоуголный'
                )
            );
            return $stanki;
        }
    }
?>