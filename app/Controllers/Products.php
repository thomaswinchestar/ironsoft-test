<?php

namespace App\Controllers;

/**
 * Products Controller
 * 
 * Handles product-related pages.
 */
class Products extends BaseController
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
     * Display all products
     *
     * @return string
     */
    public function index(): string
    {
        $siteData = $this->loadJsonData('site_data');

        $data = [
            'title' => 'Products - ' . $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'products' => $siteData['products'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('products/index', $data);
    }

    /**
     * Display a single product
     *
     * @param string $productId The product identifier
     * @return string
     */
    public function show(string $productId): string
    {
        $siteData = $this->loadJsonData('site_data');

        // Find the specific product
        $product = null;
        foreach ($siteData['products']['product_list'] as $p) {
            if ($p['id'] === $productId) {
                $product = $p;
                break;
            }
        }

        if ($product === null) {
            // Product not found, redirect to products page
            return redirect()->to('/products');
        }

        $data = [
            'title' => $product['name'] . ' - ' . $siteData['site']['title'],
            'meta' => $siteData['site'],
            'navigation' => $siteData['navigation'],
            'product' => $product,
            'all_products' => $siteData['products']['product_list'],
            'footer_cta' => $siteData['footer_cta'],
        ];

        return view('products/show', $data);
    }
}
