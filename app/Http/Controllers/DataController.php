<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function flot(Request $request)
    {
        $chart_data = [
            'bar'           => [["label" => "Population","color" => "#00B1E1","data" => [["Jan", 75], ["Feb", 82], ["Mar", 15], ["Apr", 78], ["May", 90], ["Jun", 24], ["Jul", 31], ["Aug", 51], ["Sep", 42], ["Oct", 16], ["Nov", 40], ["Dec", 55] ] ] ],
            'barstacked'    => [["label" => "Facebook","color" => "#3b5998","data" => [["Jan", 59],["Feb", 20],["Mar", 129],["Apr", 85],["May", 131],["Jun", 100],["Jul", 150],["Aug", 45],["Sep", 19],["Oct", 63],["Nov", 26],["Dec", 88]]],["label" => "Twitter","color" => "#55acee","data" => [["Jan", 27],["Feb", 61],["Mar", 45],["Apr", 91],["May", 18],["Jun", 96],["Jul", 76],["Aug", 27],["Sep", 30],["Oct", 19],["Nov", 17],["Dec", 56]]]],
            'area'          => [["label" => "Visits","color" => "#7CA951","data" => [["Jan", 16],["Feb", 87],["Mar", 120],["Apr", 104],["May", 43],["Jun", 31],["Jul", 37]]],["label" => "Hit","color" => "#46C8C8","data" => [["Jan", 33],["Feb", 52],["Mar", 98],["Apr", 34],["May", 46],["Jun", 98],["Jul", 81]]]],
            'areaspline'    => [["label" => "Visits","color" => "#DC554F","data" => [["Jan", 147],["Feb", 82],["Mar", 148],["Apr", 100],["May", 119],["Jun", 129],["Jul", 31]]],["label" => "Hit","color" => "#9365B8","data" => [["Jan", 50],["Feb", 64],["Mar", 53],["Apr", 73],["May", 18],["Jun", 85],["Jul", 37]]]],
            'line'          => [["label" => "Return","color" => "#ac92ed","data" => [["Jan", 181],["Feb", 204],["Mar", 186],["Apr", 190],["May", 199],["Jun", 207],["Jul", 197],["Aug", 181],["Sep", 192]]],["label" => "Visits","color" => "#ed5466","data" => [["Jan", 132],["Feb", 138],["Mar", 146],["Apr", 142],["May", 135],["Jun", 124],["Jul", 130],["Aug", 152],["Sep", 163]]],["label" => "Hit","color" => "#4fc0e8","data" => [["Jan", 109],["Feb", 101],["Mar", 97],["Apr", 86],["May", 90],["Jun", 93],["Jul", 83],["Aug", 103],["Sep", 88]]]],
            'linespline'    => [["label" => "Return","color" => "#ac92ed","data" => [["Jan", 193],["Feb", 209],["Mar", 190],["Apr", 191],["May", 192],["Jun", 188],["Jul", 205],["Aug", 208],["Sep", 190],["Oct", 209],["Nov", 186],["Dec", 205],["Jan", 196],["Feb", 196],["Mar", 194],["Apr", 203],["May", 200],["Jun", 207],["Jul", 191],["Aug", 210],["Sep", 201],["Oct", 190],["Nov", 186],["Dec", 196],["Jan", 183],["Feb", 196],["Mar", 180],["Apr", 206],["May", 182],["Jun", 195],["Jul", 207],["Aug", 200],["Sep", 202],["Oct", 195],["Nov", 188],["Dec", 193],["Jan", 188],["Feb", 200],["Mar", 194],["Apr", 181],["May", 190],["Jun", 196],["Jul", 195],["Aug", 202],["Sep", 202],["Oct", 210],["Nov", 188],["Dec", 186],["Jan", 201],["Feb", 183],["Mar", 195],["Apr", 194],["May", 193],["Jun", 197],["Jul", 191],["Aug", 210],["Sep", 208],["Oct", 186],["Nov", 199],["Dec", 191],["Jan", 206],["Feb", 180],["Mar", 194],["Apr", 209],["May", 180],["Jun", 205],["Jul", 207],["Aug", 194],["Sep", 186],["Oct", 199],["Nov", 201],["Dec", 203],["Jan", 190],["Feb", 209],["Mar", 189],["Apr", 182],["May", 189],["Jun", 187],["Jul", 182],["Aug", 196],["Sep", 201],["Oct", 182],["Nov", 185],["Dec", 191],["Jan", 188],["Feb", 187],["Mar", 187],["Apr", 186],["May", 190],["Jun", 188]]],["label" => "Visits","color" => "#ed5466","data" => [["Jan", 131],["Feb", 152],["Mar", 155],["Apr", 170],["May", 167],["Jun", 136],["Jul", 164],["Aug", 131],["Sep", 145],["Oct", 151],["Nov", 156],["Dec", 151],["Jan", 164],["Feb", 136],["Mar", 149],["Apr", 140],["May", 145],["Jun", 162],["Jul", 132],["Aug", 141],["Sep", 139],["Oct", 159],["Nov", 124],["Dec", 158],["Jan", 159],["Feb", 128],["Mar", 163],["Apr", 139],["May", 161],["Jun", 148],["Jul", 134],["Aug", 130],["Sep", 168],["Oct", 131],["Nov", 120],["Dec", 133],["Jan", 134],["Feb", 168],["Mar", 145],["Apr", 141],["May", 138],["Jun", 170],["Jul", 168],["Aug", 126],["Sep", 161],["Oct", 151],["Nov", 167],["Dec", 133],["Jan", 142],["Feb", 156],["Mar", 145],["Apr", 127],["May", 143],["Jun", 145],["Jul", 121],["Aug", 162],["Sep", 123],["Oct", 149],["Nov", 158],["Dec", 139],["Jan", 123],["Feb", 123],["Mar", 150],["Apr", 151],["May", 137],["Jun", 160],["Jul", 131],["Aug", 167],["Sep", 162],["Oct", 142],["Nov", 128],["Dec", 139],["Jan", 124],["Feb", 130],["Mar", 165],["Apr", 168],["May", 120],["Jun", 169],["Jul", 126],["Aug", 167],["Sep", 125],["Oct", 126],["Nov", 128],["Dec", 153],["Jan", 125],["Feb", 149],["Mar", 164],["Apr", 123],["May", 158],["Jun", 152]]],["label" => "Hit","color" => "#4fc0e8","data" => [["Jan", 83],["Feb", 108],["Mar", 87],["Apr", 93],["May", 88],["Jun", 105],["Jul", 82],["Aug", 90],["Sep", 93],["Oct", 85],["Nov", 109],["Dec", 92],["Jan", 90],["Feb", 100],["Mar", 80],["Apr", 92],["May", 101],["Jun", 96],["Jul", 93],["Aug", 103],["Sep", 102],["Oct", 108],["Nov", 103],["Dec", 88],["Jan", 104],["Feb", 87],["Mar", 80],["Apr", 100],["May", 97],["Jun", 108],["Jul", 108],["Aug", 99],["Sep", 109],["Oct", 85],["Nov", 101],["Dec", 104],["Jan", 90],["Feb", 90],["Mar", 85],["Apr", 88],["May", 104],["Jun", 100],["Jul", 89],["Aug", 81],["Sep", 96],["Oct", 104],["Nov", 87],["Dec", 95],["Jan", 85],["Feb", 99],["Mar", 100],["Apr", 110],["May", 96],["Jun", 80],["Jul", 102],["Aug", 94],["Sep", 93],["Oct", 101],["Nov", 108],["Dec", 98],["Jan", 102],["Feb", 86],["Mar", 101],["Apr", 84],["May", 101],["Jun", 81],["Jul", 81],["Aug", 109],["Sep", 84],["Oct", 104],["Nov", 85],["Dec", 80],["Jan", 81],["Feb", 95],["Mar", 94],["Apr", 94],["May", 89],["Jun", 86],["Jul", 100],["Aug", 107],["Sep", 95],["Oct", 85],["Nov", 108],["Dec", 88],["Jan", 87],["Feb", 96],["Mar", 98],["Apr", 108],["May", 85],["Jun", 87]]]],
            'pie'           => [["label" => "United States","color" => "#00B1E1","data" => 10],["label" => "Indonesia","color" => "#91C854","data" => 30],["label" => "India","color" => "#63D3E9","data" => 90],["label" => "United Kingdom","color" => "#FFD66A","data" => 70],["label" => "Mexico","color" => "#ED5466","data" => 80],["label" => "Spain","color" => "#6BCCB4","data" => 110]],
        ];

        $type = $request->get('type', 'bar');

        $res = [];
        if (isset($chart_data[$type])) {
            $res = $chart_data[$type];
        }
        return $res;
    }

    public function datatable(Request $request)
    {
        return [
            "aaData" => [
                ["Trident","Internet Explorer 4.0","Win 95+","4","X"],
                ["Trident","Internet Explorer 5.0","Win 95+","5","C"],
                ["Trident","Internet Explorer 5.5","Win 95+","5.5","A"],
                ["Trident","Internet Explorer 6","Win 98+","6","A"],
                ["AAATrident","Internet Explorer 7","Win XP SP2+","7","A"],
                ["Trident","AOL browser (AOL desktop)","Win XP","6","A"],
                ["Gecko","Firefox 1.0","Win 98+ / OSX.2+","1.7","A"],
                ["Gecko","Firefox 1.5","Win 98+ / OSX.2+","1.8","A"],
                ["Gecko","Firefox 2.0","Win 98+ / OSX.2+","1.8","A"],
                ["Gecko","Firefox 3.0","Win 2k+ / OSX.3+","1.9","A"],
                ["Gecko","Camino 1.0","OSX.2+","1.8","A"],
                ["Gecko","Camino 1.5","OSX.3+","1.8","A"],
                ["Gecko","Netscape 7.2","Win 95+ / Mac OS 8.6-9.2","1.7","A"],
                ["Gecko","Netscape Browser 8","Win 98SE+","1.7","A"],
                ["Gecko","Netscape Navigator 9","Win 98+ / OSX.2+","1.8","A"],
                ["Gecko","Mozilla 1.0","Win 95+ / OSX.1+",1,"A"],
                ["Gecko","Mozilla 1.1","Win 95+ / OSX.1+",1.1,"A"],
                ["Gecko","Mozilla 1.2","Win 95+ / OSX.1+",1.2,"A"],
                ["Gecko","Mozilla 1.3","Win 95+ / OSX.1+",1.3,"A"],
                ["Gecko","Mozilla 1.4","Win 95+ / OSX.1+",1.4,"A"],
                ["Gecko","Mozilla 1.5","Win 95+ / OSX.1+",1.5,"A"],
                ["Gecko","Mozilla 1.6","Win 95+ / OSX.1+",1.6,"A"],
                ["Gecko","Mozilla 1.7","Win 98+ / OSX.1+",1.7,"A"],
                ["Gecko","Mozilla 1.8","Win 98+ / OSX.1+",1.8,"A"],
                ["Gecko","Seamonkey 1.1","Win 98+ / OSX.2+","1.8","A"],
                ["Gecko","Epiphany 2.20","Gnome","1.8","A"],
                ["Webkit","Safari 1.2","OSX.3","125.5","A"],
                ["Webkit","Safari 1.3","OSX.3","312.8","A"],
                ["Webkit","Safari 2.0","OSX.4+","419.3","A"],
                ["Webkit","Safari 3.0","OSX.4+","522.1","A"],
                ["Webkit","OmniWeb 5.5","OSX.4+","420","A"],
                ["Webkit","iPod Touch / iPhone","iPod","420.1","A"],
                ["Webkit","S60","S60","413","A"],
                ["Presto","Opera 7.0","Win 95+ / OSX.1+","-","A"],
                ["Presto","Opera 7.5","Win 95+ / OSX.2+","-","A"],
                ["Presto","Opera 8.0","Win 95+ / OSX.2+","-","A"],
                ["Presto","Opera 8.5","Win 95+ / OSX.2+","-","A"],
                ["Presto","Opera 9.0","Win 95+ / OSX.3+","-","A"],
                ["Presto","Opera 9.2","Win 88+ / OSX.3+","-","A"],
                ["Presto","Opera 9.5","Win 88+ / OSX.3+","-","A"],
                ["Presto","Opera for Wii","Wii","-","A"],
                ["Presto","Nokia N800","N800","-","A"],
                ["Presto","Nintendo DS browser","Nintendo DS","8.5","C/A<sup>1</sup>"],
                ["KHTML","Konqureror 3.1","KDE 3.1","3.1","C"],
                ["KHTML","Konqureror 3.3","KDE 3.3","3.3","A"],
                ["KHTML","Konqureror 3.5","KDE 3.5","3.5","A"],
                ["Tasman","Internet Explorer 4.5","Mac OS 8-9","-","X"],
                ["Tasman","Internet Explorer 5.1","Mac OS 7.6-9","1","C"],
                ["Tasman","Internet Explorer 5.2","Mac OS 8-X","1","C"],
                ["Misc","NetFront 3.1","Embedded devices","-","C"],
                ["Misc","NetFront 3.4","Embedded devices","-","A"],
                ["Misc","Dillo 0.8","Embedded devices","-","X"],
                ["Misc","Links","Text only","-","X"],
                ["Misc","Lynx","Text only","-","X"],
                ["Misc","IE Mobile","Windows Mobile 6","-","C"],
                ["Misc","PSP browser","PSP","-","C"],
                ["Other browsers","All others","-","-","U"]
            ]
        ];
    }
}
