<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Company;
use App\Models\Organigram;
use App\Models\CateringPacket;
use App\Models\CateringPhotoGalery;

class ViewController extends Controller
{
    function index () {
        return view('tampilanLandingPage');
    }

    function about () {
        $companies = Company::latest() -> get();
        $dataCompanies = [];
        if ($companies -> isNotEmpty()) {
            foreach ($companies as $item) {
                $temp = [
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCompanies, $temp);
            }
        }

        return view('tampilanTentangPerusahaan', ['dataCompanies' => $dataCompanies]);
    }

    function homeCleaning () {
        $services = Service::latest() -> get();
        $dataService = [];
        if ($services -> isNotEmpty()) {
            foreach ($services as $item) {
                $temp = [
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
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCompanies, $temp);
            }
        }

        return view('tampilanHomeCleaning', ['dataService' => $dataService, 'dataOrganigram' => $dataOrganigram, 'dataCompanies' => $dataCompanies]);
    }

    function catering () {
        $catering = CateringPacket::latest() -> get();
        $dataCatering = [];
        if ($catering -> isNotEmpty()) {
            foreach ($catering as $item) {
                $temp = [
                    'name' => $item -> name, 
                    'description' => $item -> description,
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCatering, $temp);
            }
        }

        $photoGalery = CateringPhotoGalery::latest() -> get();
        $dataPhotoGalery = [];
        if ($photoGalery -> isNotEmpty()) {
            foreach ($photoGalery as $item) {
                $temp = [
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataPhotoGalery, $temp);
            }
        }

        $companies = Company::latest() -> get();
        $dataCompanies = [];
        if ($companies -> isNotEmpty()) {
            foreach ($companies as $item) {
                $temp = [
                    'logo' => asset('storage/' . $item -> image),
                ];
                array_push($dataCompanies, $temp);
            }
        }

        return view('tampilanCatering', ['dataCatering' => $dataCatering, 'dataPhotoGalery' => $dataPhotoGalery, 'dataCompanies' => $dataCompanies]);
    }
}
