<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Helper;
use App\Models\Holiday;
use App\Models\User;
use App\Models\ProductAttributeValue;
use App\Models\ProductVarrientHistory;
use App\Models\Categorys;
use App\Models\ProductAttributes;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\ProductAdditionalImg;
use App\Models\ProductVarrient;
use App\Models\AttributeValues;
use Illuminate\Support\Str;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

class ProductController extends Controller
{
    protected $userid;
    public function __construct()
    {
        $this->middleware('auth:api');
        $id = auth('api')->user();
        $user = User::find($id->id);
        $this->userid = $user->id;
    }

    public function productUpdate(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('name'))));

        $data = array(
            'name'                       => $request->name,
            'slug'                       => $slug,
            'description'                => $request->description ?? "",
            'meta_description'           => $request->meta_description ?? "",
            'meta_keywords'              => $request->meta_keywords ?? "",
            'status'                     => !empty($request->status) ? $request->status : 1,
            'entry_by'                   => $this->userid
        );

        if (!empty($request->file('thumbnail'))) {
            $files = $request->file('thumbnail');
            $fileName = Str::random(20);
            $ext = strtolower($files->getClientOriginalExtension());
            $path = $fileName . '.' . $ext;
            $uploadPath = '/backend/slider_imaes/';
            $upload_url = $uploadPath . $path;
            $files->move(public_path('/backend/slider_imaes/'), $upload_url);
            $file_url = $uploadPath . $path;
            $data['thumbnail'] = $file_url;
        }

        if (!empty($request->file('mobile_image'))) {
            $files = $request->file('mobile_image');
            $fileName = Str::random(20);
            $ext = strtolower($files->getClientOriginalExtension());
            $path = $fileName . '.' . $ext;
            $uploadPath = '/backend/slider_imaes/';
            $upload_url = $uploadPath . $path;
            $files->move(public_path('/backend/slider_imaes/'), $upload_url);
            $file_url = $uploadPath . $path;
            $data['mobile_image'] = $file_url;
        }
        Product::where('id', $request->id)->update($data);
        // $product   = Product::create($data);
        $productId = $request->id;

        if (!empty($request->file('files'))) {
            $files = $request->file('files');
            $fileUrls = []; // Store uploaded file URLs
            foreach ($files as $file) {
                $fileName = Str::random(20);
                $ext = strtolower($file->getClientOriginalExtension());
                $path = $fileName . '.' . $ext;
                $uploadPath = '/backend/files/';
                $file->move(public_path($uploadPath), $path);

                // Prepare data for insertion
                $slider = [
                    'images'     => $uploadPath . $path,
                    'product_id' => $productId, // Make sure $productId exists
                    'created_at' => now(),
                    'updated_at' => now()
                ];

                // Insert the image record
                ProductAdditionalImg::create($slider);
            }
        }
        return response()->json(['id' => $productId], 200);
    }

    public function save(Request $request)
    {
        //  dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            //   'status'         => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('name'))));

        $data = array(
            'name'                       => $request->name,
            'slug'                       => $slug,
            'description'                => $request->description ?? "",
            'meta_description'           => $request->meta_description ?? "",
            'meta_keywords'              => $request->meta_keywords ?? "",
            'status'                     => !empty($request->status) ? $request->status : 1,
            'entry_by'                   => $this->userid,
        );



        if (!empty($request->file('thumbnail'))) {
            $files = $request->file('thumbnail');
            $fileName = Str::random(20);
            $ext = strtolower($files->getClientOriginalExtension());
            $path = $fileName . '.' . $ext;
            $uploadPath = '/backend/slider_imaes/';
            $upload_url = $uploadPath . $path;
            $files->move(public_path('/backend/slider_imaes/'), $upload_url);
            $file_url = $uploadPath . $path;
            $data['thumbnail'] = $file_url;
        }


        if (!empty($request->file('mobile_image'))) {
            $files = $request->file('mobile_image');
            $fileName = Str::random(20);
            $ext = strtolower($files->getClientOriginalExtension());
            $path = $fileName . '.' . $ext;
            $uploadPath = '/backend/slider_imaes/';
            $upload_url = $uploadPath . $path;
            $files->move(public_path('/backend/slider_imaes/'), $upload_url);
            $file_url = $uploadPath . $path;
            $data['mobile_image'] = $file_url;
        }

        $product   = Product::create($data);
        $productId = $product->id;


        if (!empty($request->file('files'))) {
            $files = $request->file('files');
            $fileUrls = []; // Store uploaded file URLs
            foreach ($files as $file) {
                $fileName = Str::random(20);
                $ext = strtolower($file->getClientOriginalExtension());
                $path = $fileName . '.' . $ext;
                $uploadPath = '/backend/files/';
                $file->move(public_path($uploadPath), $path);

                // Prepare data for insertion
                $slider = [
                    'images'     => $uploadPath . $path,
                    'product_id' => $productId, // Make sure $productId exists
                    'created_at' => now(),
                    'updated_at' => now()
                ];

                // Insert the image record
                ProductAdditionalImg::create($slider);
            }
        }
        return response()->json(['id' => $productId]);
    }



    function generateUnique4DigitNumber($existingNumbers = [])
    {
        do {
            $uniqueNumber = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (in_array($uniqueNumber, $existingNumbers));

        return $uniqueNumber;
    }


    public function deleteValrient(Request $request)
    {

        $data = ProductVarrient::find($request->varient_id);
        $data->delete();

        ProductVarrientHistory::where('pro_varient_id', $request->varient_id)->delete();
        return response()->json("Delete Varient");
    }

    public function additionaIMagesDelete(Request $request)
    {
        $images_id =  $request->images_id;
        ProductAdditionalImg::where('id', $images_id)->delete();
        return response()->json("Delete Images");
    }

    public function deleteCategory(Request $request)
    {

        // dd($request->all());
        $dynamicArray = explode(',', $request->item); // Convert the string to an array
        $lastElement  = trim(end($dynamicArray));
        $category_id  = Categorys::where('name', $lastElement)->select('id')->first();
        $row          = ProductCategory::where('category_id', $category_id->id)->where('product_id', $request->product_id)->first();

        if (!empty($row->category_id)) {
            ProductCategory::where('category_id', $row->category_id)->delete();
        }
        return response()->json("Delete Category Category ID: $row->category_id ");
    }

    public function productrow($id)
    {


        $prodimages    = ProductAdditionalImg::where('product_id', $id)->select('images', 'id')->get();
        $prodImages    = Product::find($id);

        $addiImg = [];
        foreach ($prodimages as $v) {
            $addiImg[] = [
                'images'       => url($v->images),
                'id'           => $v->id,
            ];
        }

        //dd($resulting_string);
        $responseData['thumbnail']         = !empty($prodImages) ? url($prodImages->thumbnail) : "";
        $responseData['mobile_image']      = !empty($prodImages) ? url($prodImages->mobile_image) : "";
        $responseData['product']           = Product::where('product.id', $id)->first();
        //dd($responseData['product']);
        $responseData['product_imgs']      = $addiImg;
        $responseData['description']       = !empty($prodImages) ? $prodImages->description : "";
        $responseData['meta_description']  = !empty($prodImages) ? $prodImages->meta_description : "";
        $responseData['meta_keywords']     = !empty($prodImages) ? $prodImages->meta_keywords : "";
        $responseData['status']            = !empty($prodImages) ? $prodImages->status : "";
        //dd($responseData);
        return response()->json($responseData);
    }

    public function getProductList()
    {
        $data = Product::orderBy('id', 'desc')->get();
        $collection = collect($data);
        $modifiedCollection = $collection->map(function ($item) {
            return [
                'id'        => $item['id'],
                'name'      => substr($item['name'], 0, 250),
                'download_link' => $item['download_link'],
                'status'    => $item['status'],

            ];
        });
        //dd($modifiedCollection);
        return response()->json($modifiedCollection, 200);
    }

    public function removeProducts($id)
    {
        //echo $id;exit; 
        if (!empty($id)) {
            // Product::where('id', $id)->delete();
            // ProductAttributes::where('product_id', $id)->delete();
            // ProductAttributeValue::where('product_id', $id)->delete();
            // ProductVarrient::where('product_id', $id)->delete();
            // ProductVarrientHistory::where('product_id', $id)->delete();
            // ProductCategory::where('product_id', $id)->delete();
            // ProductAdditionalImg::where('product_id', $id)->delete();
        }
        return response()->json("successfully delete product", 200);
    }
}
