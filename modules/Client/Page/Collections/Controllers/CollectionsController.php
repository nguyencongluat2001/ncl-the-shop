<?php

namespace Modules\Client\Page\Collections\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\Collections\Services\CollectionsService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Product\Services\ProductService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Illuminate\Support\Facades\Http;
use DB;
/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class CollectionsController extends Controller
{

    public function __construct(
        CateService $cateService,
        CategoryService $categoryService,
        CollectionsService $CollectionsService,
        BlogService $blogService,
        ProductService $ProductService
    ){
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->CollectionsService = $CollectionsService;
        $this->ProductService = $ProductService;
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $dataSearch = '';
        $objResult = $this->ProductService->where('status',1)->get()->take(8);
        $datas['datas']= $objResult;
        return view('client.collections.home',$datas);
    }
    
    
     /**
     * load màn hình danh sách lấy chỉ số thị trường
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadList(Request $request)
    { 
        $arrInput = $request->input();
        $data = $this->CollectionsService->loadList($arrInput);
        return view("client.Collections.loadlist", $data);
    }
     
    /**
     * load màn hình danh sách
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadListBlog(Request $request)
    { 
        $arrInput = $request->input();
        $data = array();
        $param = $arrInput;
        // if($param['category'] == '' || $param['category'] == null){
        //     unset($param['category']);
        // }
        $objResult = $this->blogService->where('status',1)->get()->take(4);
        foreach($objResult as $key => $value){
            $category = $this->categoryService->where('code_category', $value->code_category)->first();
            if(!empty($category)){
                $objResult[$key]->cate_name = $category->name_category;
            }
        }
        $data['datas']= $objResult;
        return view("client.Collections.loadlist-blog", $data);
    }
}