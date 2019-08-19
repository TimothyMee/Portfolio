<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function fetchProject($name)
    {
        $RMS = [
            'tag' => 'RMS',
            'name' => 'Result Management System',
            'details' => 'An Open Source Project On which some other product are based and built. A framework for Result Systems. (An Open Source Project)',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Open Source Project',
            'Url' => 'https://github.com/TimothyMee/RMS',
            'Client_name' => 'Timothy'
        ];

        $HotelAdmin = [
            'tag' => 'TheHomeApp',
            'name' => 'Hotel System',
            'details' => 'A software that manages the day to day effective running of a prestigious hotel in Lekki,Lagos',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'The Home Hotel',
            'Url' => 'Not available to the public'
        ];

        $HotelWebsite = [
            'tag' => 'TheHome',
            'name' => 'The Home Website',
            'details' => 'A website of a Prestigious hotel in Lekki, Lagos',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'The Home Hotel',
            'Url' => 'https://thehomeng.org/'
        ];

        $OGSADC = [
            'tag' => 'OGSADC',
            'name' => 'Ogun state accounting software',
            'details' => 'A accounting software for the ogun state ministry of agriculture.',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'Ogun state Ministry Of Agriculture',
            'Url' => 'Not available to the public'
        ];

        $Ecommerce = [
            'tag' => 'Finverse',
            'name' => 'Finverse',
            'details' => 'An Online Store for good and services',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'Finverse co.',
            'Url' => ''
        ];

        $ETH10K = [
            'tag' => 'ETH10K',
            'name' => 'Everything 10k and below',
            'details' => 'An Online Store for good and services',
            'Skills' => 'HTML and CSS, Design, Wordpress',
            'Project-Type' => 'Client',
            'Client_name' => 'ETH10k co.',
            'Url' => 'http://www.everythinghere10k.com/'
        ];

        $Give = [
            'tag' => 'Give',
            'name' => 'Give',
            'details' => 'A Charity Based Lottery / Raffle draw Platform',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'HSIT Lagos',
            'Url' => 'https://giveraffle.com/'
        ];

        $SteemSports = [
            'tag' => 'SteemSports',
            'name' => 'Steem Sports',
            'details' => 'A sport Application based on the "Steem" blockchain and the steemit platform (An Open Source Project)',
            'Skills' => 'Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Open Sourced Project',
            'Client_name' => 'Timothy',
            'Url' => 'https://steem-sports.com'
        ];

        $HesgesSynergy = [
            'tag' => 'Hesges',
            'name' => 'Hesges Synergy',
            'details' => 'A Web App For the company Hesges Synergy',
            'Skills' => 'Laravel, Vue.js, HTML and CSS, Bootstrap',
            'Project-Type' => 'Client',
            'Client_name' => 'Timothy',
            'Url' => 'https://hesgessynergy.com/'
        ];

        if($name == 'RMS'){
            return view('project-details')->with('data', $RMS);
        }

        if($name == 'HotelAdmin'){
            return view('project-details')->with('data', $HotelAdmin);
        }

        if($name == 'HotelWebsite'){
            return view('project-details')->with('data', $HotelWebsite);
        }

        if($name == 'OGSADC'){
            return view('project-details')->with('data', $OGSADC);
        }

        if($name == 'Ecommerce'){
            return view('project-details')->with('data', $Ecommerce);
        }

        if($name == 'ETH10K'){
            return view('project-details')->with('data', $ETH10K);
        }

        if($name == 'Give'){
            return view('project-details')->with('data', $Give);
        }

        if($name == 'SteemSports'){
            return view('project-details')->with('data', $SteemSports);
        }

        if($name == 'HesgesSynergy'){
            return view('project-details')->with('data', $HesgesSynergy);
        }

        else{
            abort(404);
        }
    }
}
