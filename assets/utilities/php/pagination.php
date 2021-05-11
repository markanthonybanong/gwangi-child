<?php
    class Pagination{
        private $_limit;
        private $_page;
        private $_query;
        private $_total;
        private $_wpdb;
     
        public function __construct($query){
            global $wpdb;
            $this->_query = $query;
            $this->_wpdb  = $wpdb;
            $this->_total = count($wpdb->get_results($query));
        }

        public function get_data($limit = 6, $page = 1){
            $this->_limit  = $limit;
            $this->_page   = $page;
            $query         = $this->_query . " LIMIT " . ( ( $this->_page - 1 ) * $this->_limit ) . ", $this->_limit";
            $result        = new stdClass();
            $result->page  = $this->_page;
            $result->limit = $this->_limit;
            $result->total = $this->_total;
            $result->data  = $this->_wpdb->get_results( $query );
            return $result;
        }

        public function create_links($page_name, $template_name){
            $links      = 3; //number of links to display below and above the current page
            $last       = ceil( $this->_total / $this->_limit );
            $start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
            $end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links: $last;
            
            $html       = "<ul class='pagination'>";
            $class      = ( $this->_page == 1 ) ? "disabled" : "";
            $page_link  = add_query_arg(array($page_name  => $this->_page - 1  ), $template_name);
            $html      .= "<li class='$class'><a href='$page_link'>&laquo;</a></li>";
            if ( $start > 1 ) {
                $page_link  = add_query_arg(array($page_name => 1), $template_name);
                $html   .= "<li><a href='$page_link'>1</a></li>";
                $html   .= '<li class="disabled"><span>...</span></li>';
            }
            for ( $i = $start ; $i <= $end; $i++ ) {
                $class     = ( $this->_page == $i ) ? "active" : "";
                $page_link = add_query_arg(array($page_name  => $i), $template_name);
                $html     .= "<li class='$class'><a href='$page_link'>$i</a></li>";
            }
            if ( $end < $last ) {
                $html   .= '<li class="disabled"><span>...</span></li>';
                $page_link = add_query_arg(array($page_name  => $last), $template_name);
                $html   .= "<li><a href='$page_link'>$last</a></li>";
            }
            $class     = ( $this->_page == $last ) ? "disabled" : "";
            $page_link = add_query_arg(array($page_name => $this->_page + 1));
            $html     .= "<li class='$class'><a href='$page_link'>&raquo;</a></li>";
            $html     .= '</ul>';
            return $html;

        }
    }

?>