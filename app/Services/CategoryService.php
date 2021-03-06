<?php
namespace App\Services;

use App\User;
use App\Category;

class CategoryService
{
    public function details($uid)
    {
        return  \DB::table('user_stores')
                   ->select('*','navs.id as nid', 'user_stores.store_id as usid')
                   ->leftjoin('navs','navs.store_id', 'user_stores.store_id')
                   ->leftjoin('stores','stores.id', 'navs.store_id')
                   ->where('user_stores.user_id', $uid)
                   ->get();
    }
    public function destroy($nid)
    {
        \DB::table('navs')
           ->where('id', $nid)
           ->delete();
    }
}