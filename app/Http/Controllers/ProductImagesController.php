<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductImagesRequest;
use App\Http\Requests\UpdateProductImagesRequest;
use App\Repositories\ProductImagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ProductImagesController extends AppBaseController
{
    /** @var  ProductImagesRepository */
    private $productImagesRepository;

    public function __construct(ProductImagesRepository $productImagesRepo)
    {
        $this->productImagesRepository = $productImagesRepo;
    }

    /**
     * Display a listing of the ProductImages.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productImagesRepository->pushCriteria(new RequestCriteria($request));
        $productImages = $this->productImagesRepository->all();

        return view('product_images.index')
            ->with('productImages', $productImages);
    }

    /**
     * Show the form for creating a new ProductImages.
     *
     * @return Response
     */
    public function create()
    {
        return view('product_images.create');
    }

    /**
     * Store a newly created ProductImages in storage.
     *
     * @param CreateProductImagesRequest $request
     *
     * @return Response
     */
    public function store(CreateProductImagesRequest $request)
    {
        $input = $request->all();

        $productImages = $this->productImagesRepository->create($input);

        Flash::success('Product Images saved successfully.');

        return redirect(route('productImages.index'));
    }

    /**
     * Display the specified ProductImages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productImages = $this->productImagesRepository->findWithoutFail($id);

        if (empty($productImages)) {
            Flash::error('Product Images not found');

            return redirect(route('productImages.index'));
        }

        return view('product_images.show')->with('productImages', $productImages);
    }

    /**
     * Show the form for editing the specified ProductImages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $productImages = $this->productImagesRepository->findWithoutFail($id);

        if (empty($productImages)) {
            Flash::error('Product Images not found');

            return redirect(route('productImages.index'));
        }

        return view('product_images.edit')->with('productImages', $productImages);
    }

    /**
     * Update the specified ProductImages in storage.
     *
     * @param  int              $id
     * @param UpdateProductImagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductImagesRequest $request)
    {
        $productImages = $this->productImagesRepository->findWithoutFail($id);

        if (empty($productImages)) {
            Flash::error('Product Images not found');

            return redirect(route('productImages.index'));
        }

        $productImages = $this->productImagesRepository->update($request->all(), $id);

        Flash::success('Product Images updated successfully.');

        return redirect(route('productImages.index'));
    }

    /**
     * Remove the specified ProductImages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productImages = $this->productImagesRepository->findWithoutFail($id);

        if (empty($productImages)) {
            Flash::error('Product Images not found');

            return redirect(route('productImages.index'));
        }

        $this->productImagesRepository->delete($id);

        Flash::success('Product Images deleted successfully.');

        return redirect(route('productImages.index'));
    }
}
