<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Backend\layouts\master;
use App\View\Components\Backend\partials\sidebar;
use App\View\Components\Backend\partials\header;
use App\View\Components\Backend\partials\content;
use App\View\Components\Backend\partials\footer;
use App\View\Components\Backend\card\table;
use App\View\Components\Backend\card\td;
use App\View\Components\Backend\card\cardHeader;
use App\View\Components\Backend\form\form;
use App\View\Components\Backend\form\inputText;
use App\View\Components\Backend\form\btn;
use App\View\Components\Backend\form\label;
use App\View\Components\backend\form\textArea;
use App\View\Components\backend\form\select;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('master', master::class);
        Blade::component('sidebar', sidebar::class);
        Blade::component('header', header::class);
        Blade::component('content', content::class);
        Blade::component('footer', footer::class);
        Blade::component('table', table::class);
        Blade::component('card-header', cardHeader::class);
        Blade::component('td', td::class);
        Blade::component('form', form::class);
        Blade::component('input-text', inputText::class);
        Blade::component('btn', btn::class);
        Blade::component('label', label::class);
        Blade::component('text-area', textArea::class);
        Blade::component('select', select::class);
    }
}
