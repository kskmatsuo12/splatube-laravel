<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap(){
        return response(file_get_contents(resource_path('views/admin/sitemap.xml')),200,['Content-Type'=>'application/xml']);
    }
}
