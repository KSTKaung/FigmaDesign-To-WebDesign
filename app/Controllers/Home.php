<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Load nav.json and pass to every view via $navData.
     */
    private function loadNavData(): array
    {
        $path = FCPATH . 'assets/json/products.json';

        if (! file_exists($path)) {
            log_message('error', 'nav.json not found at: ' . $path);
            return [];
        }

        $data = json_decode(file_get_contents($path), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            log_message('error', 'nav.json parse error: ' . json_last_error_msg());
            return [];
        }

        return $data;
    }

    // ── Pages ──────────────────────────────────────

    public function index(): string
    {
        return view('pages/home', [
            'title'   => 'IronSoftware — IronPDF for C++',
            'navData' => $this->loadNavData(),
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title'   => 'About Us — IronSoftware',
            'navData' => $this->loadNavData(),
        ]);
    }

    public function career(): string
    {
        return view('pages/career', [
            'title'   => 'Career — IronSoftware',
            'navData' => $this->loadNavData(),
        ]);
    }
}