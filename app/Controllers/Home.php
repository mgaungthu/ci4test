<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // JSON file path
        $jsonPath = WRITEPATH . 'data/data.json';

        // Read + decode JSON
        $data = [];
        if (file_exists($jsonPath)) {
            $data = json_decode(file_get_contents($jsonPath), true);
        }

        // Pass to view
        return view('landing', [
            'pageData' => $data
        ]);
    }
}