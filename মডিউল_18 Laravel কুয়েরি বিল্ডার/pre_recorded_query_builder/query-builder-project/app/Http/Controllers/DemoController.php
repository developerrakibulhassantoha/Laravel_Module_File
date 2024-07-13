<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use LDAP\Result;

class DemoController extends Controller
{
    function DemoAction(){
        /*
        // all data find hoye cole asce get() method user korle
        $Result = DB::table('city')->get();

        //first() method use korle first data gula asbe 
        $Result = DB::table('city')->first();

        //find() method use korle id niye ja kono data koje ber kora jai
        $Result = DB::table('city')->find(5);

        // pluck() method use colum take data alada kora
        $Result = DB::table('city')->pluck('Population','District');
        $Result = DB::table('city')->get();
        return $Result;
//Aggregates start
        // Aggregates query count() method
        $count = DB::table('products')->count();
        return $count;

        // Aggregates query max() method
        $max = DB::table('products')->max('price');
        return $max;

        // Aggregates query min() method
        $min = DB::table('products')->min('price');
        return $min;

        // Aggregates query avg() method
        $avg = DB::table('products')->avg('price');
        return $avg;

        // Aggregates query sum() method
        $sum = DB::table('products')->sum('price');
        return $sum;
//Aggregates end
        
// select Clause method start
        // select method 
        $Products = DB::table('products')->select('title','price','discount')->get();
        return $Products;
        
        // select distinct method 
        $Products = DB::table('products')->select('title')->distinct()->get();
        return $Products;
// select Clause method end

        
        // inner join
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->get();
        return $products;

        // rightJoin
        $products = DB::table('products')
            ->rightJoin('categories', 'products.category_id', '=', 'categories.id')
            ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->get();
        return $products;

        //leftJoin
        $products = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->get();
        return $products;
        
        $result = DB::table('products')
            ->crossJoin('brands')
            ->get();
        return $result;
       
    //Advanced Join Clauses
        $result = DB::table('products')
            ->join('categories', function(JoinClause $join){
                $join->on('products.category_id', '=', "categories.id")
                    ->where('products.price', '>', 2000);
            })->get();

        return $result;
 
        $result = DB::table('products')
            ->join('categories', function(JoinClause $join){
                $join->on('products.category_id', '=', "categories.id")
                    ->where('categories.categoryName', '=', 'Electronics');
            })->get();

        return $result;
        
        // UNIONS QUERY
        $query1 = DB::table('products')->where('price', '>', 2000);
        $query2 = DB::table('products')->where('category_id', '=', 5);
            $result= $query1->union($query2)->get();
        return $result;
*/          
        //price id >=2 and <=12
                
    }
}
