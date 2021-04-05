<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsModel;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController extends Controller
{
    public function getNews(){
        $pageObjectArray = new NewsModel();
        $contentList = $pageObjectArray->getNewsList();
        // return view('news', [
        //     "header"=>$contentList[$pageId - 1]->getHeader(),
        //     "desc"=>$contentList[$pageId - 1]->getDesc(),
        // ]);
        // $newsPages = $contentList->paginate(20);
        // return view('news', ['newsPages' => $newsPages]); 
        $data = $this->paginate($contentList);
   
        return view('news', compact('data'));   
    }

    public function paginate($items, $perPage = 1, $page = null, $options = [])
    {
        $page = Paginator::resolveCurrentPage() ?: 1;
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => url('/news/')]);
    }
}
