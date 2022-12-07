<?php

namespace App\Controllers;

use App\Products;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{

    public function index()
    {
        $products = $this->app->db()->all('products');

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku = $this->app->param('sku');

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }

        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);

        if (empty($productQuery)) {
            return $this->app->view('products');
        } else {
            $product = $productQuery[0];
        }

        $reviewSaved = $this->app->old('reviewSaved');

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);


        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved'  => $reviewSaved,
            'reviews' => $reviews
        ]);
    }

    public function saveReview()
    {
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');
        $product_id = $this->app->input('product_id');

        $this->app->db()->insert('reviews', [
            'sku' => $sku,
            'name' => $name,
            'review' => $review,
            'product_id' => $product_id
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }

    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('products/new', [
            'productSaved' => $productSaved,
            'sku' => $sku,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'name' => 'required',
            'sku' => 'required|alphaNumericDash',
            'description' => 'required',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric'
        ]);

        $this->app->db()->insert('products', $this->app->inputAll());

        $this->app->redirect('/product/new', [
            'productSaved' => true,
            'sku' => $this->app->input('sku')
        ]);
    }
}