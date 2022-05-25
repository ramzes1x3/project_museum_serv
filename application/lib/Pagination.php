<?php

namespace application\lib;

class Pagination {
    
    private $max = 16;
    private $route;
    private $index = '';
    private $current_page;
    private $total;
    private $limit;

    public function __construct($route, $total, $limit = 16) {
        $this->route = $route;
        $this->total = $total;
        $this->limit = $limit;
        $this->amount = $this->amount();
        $this->setCurrentPage();
    }
   
    public function get() {
        $links = null;
        $limits = $this->limits();
        $html = '<nav><ul class="pagination-list-expo">';
        if ($this->amount > 1) {
            $links .= $this->before(1, '<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5975 2L2 12.2827L14 22" stroke="#003268" stroke-width="3.5" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>');
        }
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            if ($page == $this->current_page) {
                $links .= '<li class="pagination-list-expo__item _active"><span><b>'.$page.'</blo></span></li>';
            } else {
                $links .= $this->generateHtml($page);
            }
        }
        if (!is_null($links)) {
            if ($this->current_page < $this->amount) {
                $links .= $this->generateHtml($this->amount, '<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.40249 2L14 12.2827L2 22" stroke="#003268" stroke-width="3.5" stroke-miterlimit="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>');
            }
        }
        $html .= $links.' </ul></nav>';
        return $html;
    }

    private function generateHtml($page, $img_ = null) {
        if (!$img_) {
            $img_ = $page;
        }
        return '<li class="pagination-list-expo__item"><a href="/'.$this->route['controller'].'/'.$this->route['action'].'/'.$page.'">'.$img_.'</a></li>';
    }

    private function limits() {
        $left = $this->current_page - round($this->max / 2);
        $start = $left > 0 ? $left : 1;
        if ($start + $this->max <= $this->amount) {
            $end = $start > 1 ? $start + $this->max : $this->max;
        }
        else {
            $end = $this->amount;
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }
        return array($start, $end);
    }

    private function setCurrentPage() {
        if (isset($this->route['page'])) {
            $currentPage = $this->route['page'];
        } else {
            $currentPage = 1;
        }
        $this->current_page = $currentPage;
        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount) {
                $this->current_page = $this->amount;
            }
        } else {
            $this->current_page = 1;
        }
    }

    private function amount() {
        return ceil($this->total / $this->limit);
    }

    private function before($page, $img_){
        if($page <= 1){
            return '<li class="pagination-list-expo__item"><a href="/'.$this->route['action'].'">'.$img_.'</a></li>';
        }
        else{
            $page--;
            return '<li class="pagination-list-expo__item"><a href="/'.$this->route['controller'].'/'.$this->route['action'].'/'.$page.'">'.$img_.'</a></li>';
        }
    }
}