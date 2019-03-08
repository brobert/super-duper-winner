<?php

namespace App\Http\Traits;

use App\Resources\MainMenuResource;
use Illuminate\Support\Facades\View;
use Auth;
use Faker;


trait AppResponse {

    protected $stash = [
        'user_name' => 'Jan Nowak'
    ];

    private $bread_crumbs = [
        [
            'name' => 'home'
        ]
    ];

    protected function _respond($view = '')
    {

        if ($this->request->format() === 'html')
        {
            $this->stash ['view'] = $view;
            $this->stash ['main_menu'] = MainMenuResource::get_menu_structure($this->scope);

            if (Auth::check())
            {
                $this->stash ['user'] = Auth::user();
            }

            $this->stash ['faker'] = Faker\Factory::create();

            $this->stash ['request'] = $this->request;

            $this->stash ['bread_crumbs'] = $this->bread_crumbs;

            // dump(Auth::user()->toArray());

            return view($this->get_view($view), $this->stash);
        }

        return [];
    }

    protected function add_crumb($crumb)
    {

        $this->bread_crumbs [] = $crumb;
    }

    private function get_view(String $view_path = '')
    {

        if (!$view_path || 1)
        {
            $caller = debug_backtrace() [2];
            $view_path_parts = array_slice(explode('\\', $caller ['class']), 3);
            $last = preg_replace([
                '/^Home/',
                '/Controller$/'
            ], '', array_pop($view_path_parts));
            if ($last !== '')
            {
                array_push($view_path_parts, $last);
            }
            array_push($view_path_parts, $caller ['function']);
            $view_path_tmp = strtolower(implode('.', $view_path_parts));

            // dump( [
            // 'caller' => $caller,
            // 'view_path_parts' => $view_path_parts,
            // 'view_path_tmp' => $view_path_tmp,
            // 'view_path' => $view_path
            // ]);

            $view_path = $view_path_tmp;
        }

        if (View::exists($view_path))
        {
            return $view_path;
        } else
        {
            return 'landerv2.page.error.404';
        }
    }
}