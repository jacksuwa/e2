<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller
{
    private $productObj;
    public function __construct($app)
    {
        parent::__construct($app);
        $this->productObj = new Products($this->app->path('/database/products.json'));
    }
    public function index()
    {
        //dump($productObj);
        $products = $this->productObj->getAll();
        return $this->app->view('products/index', ['products' => $products]);
    }

    public function show()
    {
        $sku = $this->app->param('sku');

        if (is_null($sku)) {
            $this->app->redirect('/products');
        }

        $product =   $this->productObj->getBySku($sku);

        //this maybe part of the assisgnment
        if (is_null($product)) {
            return $this->app->view('products/missing'); //this is where you will add the page for the assignment
        }

        $reviewSaved = $this->app->old('reviewSaved');

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'sku' => 'required',
            'name' => 'required',
            'review' => 'required|minLength:200'
        ]);
        # If the above validation fails 
        # The user is redirected back to where they came from (/products)
        # None of the code that follows will work 

        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        # Todo: Perist review to database...

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }
}