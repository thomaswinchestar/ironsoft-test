<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

/**
 * API Controller
 * 
 * Handles API endpoints for JSON data.
 */
class Api extends BaseController
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
     * Return site data as JSON
     *
     * @return ResponseInterface
     */
    public function siteData(): ResponseInterface
    {
        $siteData = $this->loadJsonData('site_data');

        return $this->response->setJSON([
            'success' => true,
            'data' => $siteData
        ]);
    }
}
