<?php

namespace App\Http\Controllers\Landerv2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->stash['stats'] = [
            'token' => 'pages.home.stats.title',
            'data' => [
                [ 'point' => 1234567, 'percent' => -23, 'token' => 'pages.home.stats.visits'],
                [ 'point' => 34654, 'percent' => -20, 'token' => 'pages.home.stats.views'],
                [ 'point' => 45666663, 'percent' => 75.78, 'token' => 'pages.home.stats.bounce_rate'],
            ]
        ];

        $this->stash['traffic'] = [
            'token' => 'pages.home.traffic.title',
            'visits' => 123456789,
            'u_visits' => 3456789,
            'sources' => [
                ['name' => 'Google.com',      'value' => 12345],
                ['name' => 'Facebook.com',    'value' => 45678],
                ['name' => 'direct',          'value' => 78912],
            ]
        ];

        $this->stash['today_income'] = [
            'value' => -156,
        ];

        return $this->_respond('landerv2.index');
    }

    public function widget()
    {
        return $this->_respond('landerv2.widget');
    }

}
