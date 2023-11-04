<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Company;
use App\Models\Organigram;

class ViewController extends Controller
{
    function index () {
        return view('tampilanLandingPage');
    }

    function homeCleaning () {
        $services = Service::latest() -> get();
        $dataService = [];
        if ($services -> isNotEmpty()) {
            foreach ($services as $item) {
                $temp = [
                    'id' => $item -> id,
                    'logo' => asset('storage/' . $item -> image),
                    'nameTitle' => $item -> name,
                    'desk' => $item -> description,
                ];
                array_push($dataService, $temp);
            }
        }

        $organigram = Organigram::latest() -> get();
        $dataOrganigram = [];
        if ($organigram -> isNotEmpty()) {
            foreach ($organigram as $item) {
                $temp = [
                    'id' => $item -> id,
                    'profileImage' => asset('storage/' . $item -> image),
                    'profileName' => $item -> name,
                    'profileRole' => $item -> position,
                ];
                array_push($dataOrganigram, $temp);
            }
        }

        $companies = Company::latest() -> get();
        $dataCompanies = [];
        if ($companies -> isNotEmpty()) {
            foreach ($companies as $item) {
                $temp = [
                    'id' => $item -> id,
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCompanies, $temp);
            }
        }

        return view('tampilanHomeCleaning', ['dataService' => $dataService, 'dataOrganigram' => $dataOrganigram, 'dataCompanies' => $dataCompanies]);
    }

    function catering () {
        $companies = Company::latest() -> get();
        $dataCompanies = [];
        if ($companies -> isNotEmpty()) {
            foreach ($companies as $item) {
                $temp = [
                    'id' => $item -> id,
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCompanies, $temp);
            }
        }

        return view('tampilanCatering', ['dataCompanies' => $dataCompanies]);
    }
}
