<?php

namespace App\Controllers;

use App\Products;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    private $productsObj;

    # Create a construct method to set up a productsObj property that can be used across different methods
    public function __construct($app)
    {
        parent::__construct($app);

        $this->productsObj = new Products($this->app->path('/database/products.json'));
    }

    public function index()
    {
        $products = $this->productsObj->getAll();

        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku = $this->app->param('sku');

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }

        $product = $this->productsObj->getBySku($sku);

        if (is_null($product)) {
            return $this->app->view('products');
        }

        $reviewSaved = $this->app->old('reviewSaved');


        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved'  => $reviewSaved
        ]);
    }

    public function saveReview()
    {
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        # TODO persist review to db

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }
}