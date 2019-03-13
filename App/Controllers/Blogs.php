<?php

namespace App\Controllers;

use Zest\View\View;

class Blogs extends \Zest\Controller\Controller
{

    public function blog()
    {
         $page = $this->route_params['page'];
         $args = ['page' => $page];
         View::view('blogs/blogs',$args);
    }
    public function view()
    {
         $slug = $this->route_params['slug'];
         if (model('Pages')->isBlog($slug) !== 0) {
            $pages = model('Pages')->pageWhere('slug',$slug);
            View::view('blogs/view',$pages[0],false);
         } else {
            View::View("errors/404");
         }
    }     
}
