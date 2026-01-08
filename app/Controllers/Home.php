<?php

namespace App\Controllers;

/**
 * Home Controller
 * 
 * Handles the main pages of the IronPDF website.
 */
class Home extends BaseController
{
    /**
     * Load JSON data from a file
     *
     * @param string $filename The JSON file name (without .json extension)
     * @return array The decoded JSON data
     */
    protected function loadJsonData(string $filename): array
    {
        $filePath = APPPATH . 'Data/' . $filename . '.json';
        
        if (!file_exists($filePath)) {
            throw new \RuntimeException("Data file not found: {$filePath}");
        }

        $jsonContent = file_get_contents($filePath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Invalid JSON in file: {$filePath}");
        }

        return $data;
    }

    /**
     * Display the home page
     *
     * @return string
     */
    public function index(): string
    {
        $siteData = $this->loadJsonData('site_data');

        $data = [
            'title' => $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'hero' => $siteData['hero'],
            'early_access' => $siteData['early_access'],
            'features' => $siteData['features'],
            'why_section' => $siteData['why_section'],
            'products' => $siteData['products'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('home/index', $data);
    }

    /**
     * Display the features page
     *
     * @return string
     */
    public function features(): string
    {
        $siteData = $this->loadJsonData('site_data');

        $data = [
            'title' => 'Features - ' . $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'features' => $siteData['features'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('home/features', $data);
    }

    /**
     * Display the about page
     *
     * @return string
     */
    public function about(): string
    {
        $siteData = $this->loadJsonData('site_data');

        $data = [
            'title' => 'About Us - ' . $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'why_section' => $siteData['why_section'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('home/about', $data);
    }

    /**
     * Display the career page
     *
     * @return string
     */
    public function career(): string
    {
        $siteData = $this->loadJsonData('site_data');

        $data = [
            'title' => 'Careers - ' . $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('home/career', $data);
    }
}
