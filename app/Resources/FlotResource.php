<?php
namespace App\Resources;

use Carbon\Carbon;
use Faker\Factory as Faker;

class FlotResource {
    
    /**
     *
     * @method get_data_by_type
     * FlotResource
     * @param unknown $type
     * @return unknown|string[][]|number[][]
     */
    public function get_data_by_type( $type )
    {
        
        $action = "flot_$type";
        
        if ( method_exists( $this, $action ) )
        {
            return $this->$action();
        }
        
        return null;
    }
    
    /**
     *
     * @method get_serie_data
     * FlotResource
     * @param number $around
     * @param number $scope
     * @param number $months
     * @return number[][]|NULL[][]
     */
    private function get_serie_data($around=50, $scope=30, $months = 12)
    {
        $faker = Faker::create();
        
        $data = [];
        for ($m_id = 1; $m_id <=$months; $m_id ++)
        {
            $date = Carbon::createFromDate(null, $m_id, null);
            $data[] = [$date->format('M'), $around + $faker->numberBetween(-$scope,$scope)];
        }
        return $data;
    }
    
    /**
     *
     * @method flot_bar
     * FlotResource
     * @return string[][]|array[][]
     */
    private function flot_bar()
    {
        return [
            [ "label" => "Population", "color" => "#00A1E1", "data" => $this->get_serie_data(), ]
        ];
    }
    
    /**
     *
     * @method flot_barstacked
     * FlotResource
     * @return string[][]|array[][]
     */
    private function flot_barstacked()
    {
        return [
            [ "label" => "Facebook", "color" => "#3b5998", "data" =>  $this->get_serie_data(30,15), ],
            [ "label" => "Twitter",  "color" => "#55acee", "data" =>  $this->get_serie_data(50,15), ],
        ];
    }
    
    /**
     *
     * @method flot_area
     * FlotResource
     * @return string[][]|array[][]
     */
    private function flot_area()
    {
        return [
            ["label" => "Visits",   "color" => "#7CA951","data" => $this->get_serie_data(60,15)],
            ["label" => "Hit",      "color" => "#46C8C8","data" => $this->get_serie_data(30,15)],
        ];
    }
    
    /**
     *
     * @method flot_areaspline
     * FlotResource
     * @return string[][]|array[][]
     */
    private function flot_areaspline()
    {
        return [
            ["label" => "Return",   "color" => "#7CA951","data" => $this->get_serie_data(30,15)],
            ["label" => "Visit",    "color" => "#3b5998","data" => $this->get_serie_data(60,15)],
            ["label" => "Hit",      "color" => "#46C8C8","data" => $this->get_serie_data(90,15)],
        ];
    }
    
    /**
     *
     * @method flot_line
     * FlotResource
     * @return string[][]|array[][]
     */
    private function flot_line()
    {
        return [
            ["label" => "Visits",   "color" => "#7CA951","data" => $this->get_serie_data(60,15)],
            ["label" => "Hit",      "color" => "#46C8C8","data" => $this->get_serie_data(40,15)],
        ];
    }
    
    /**
     *
     * @method flot_linespline
     * FlotResource
     * @return string[][]|string[][][][]|number[][][][]
     */
    private function flot_linespline()
    {
        return [
            [
                "label" => "Return",
                "color" => "#ac92ed",
                "data" => array_merge(
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15),
                    $this->get_serie_data(190,15)
                    ),
            ],
            [
                "label" => "Visits",
                "color" => "#ed5466",
                "data" => array_merge(
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15),
                    $this->get_serie_data(150,15)
                    ),
            ],
            [
                "label" => "Hit",
                "color" => "#4fc0e8",
                "data" => array_merge(
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15),
                    $this->get_serie_data(110,15)
                    ),
            ]
        ];
    }
    
    public function flot_pie()
    {
        $faker = Faker::create();
        
        $scope = 0;
        
        return [
            ["label" => $faker->countryCode(), "color" => "#00B1E1", "data" => $faker->numberBetween($scope,$scope + 30)],
            ["label" => $faker->countryCode(), "color" => "#91C854", "data" => $faker->numberBetween($scope,$scope + 30)],
            ["label" => $faker->countryCode(), "color" => "#63D3E9", "data" => $faker->numberBetween($scope,$scope + 30)],
            ["label" => $faker->countryCode(), "color" => "#FFD66A", "data" => $faker->numberBetween($scope,$scope + 30)],
            ["label" => $faker->countryCode(), "color" => "#ED5466", "data" => $faker->numberBetween($scope,$scope + 30)],
            ["label" => $faker->countryCode(), "color" => "#6BCCB4", "data" => $faker->numberBetween($scope,$scope + 30)]
        ];
        
    }
    
    public function flot_audience()
    {
        return [
            [ "label" => "Facebook", "color" => "#3b5998", "data" =>  $this->get_serie_data(50,50), ],
            [ "label" => "Twitter",  "color" => "#55acee", "data" =>  $this->get_serie_data(50,50), ],
        ];
    }
    
    public function flot_today_income()
    {
        $faker = Faker::create();
        $max = 15;
        return [
            [
                'color' => '#DC554F',
                'data' => [
                    ['Mon', $faker->numberBetween(0, $max)],
                    ['Tue', $faker->numberBetween(0, $max)],
                    ['Wed', $faker->numberBetween(0, $max)],
                    ['Thu', $faker->numberBetween(0, $max)],
                    ['Fri', $faker->numberBetween(0, $max)]
                ]
            ]
        ];
    }
}