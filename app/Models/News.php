<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = ['id'];

    public static function filter($request)
    {

      if(!empty($request['filter']['category'])) {
          $searching_article_id_list = [];
          if(Category::where('name', 'LIKE', '%'.$request['filter']['category'].'%')->count() > 0) {
              $category_id = Category::where('name', 'LIKE', '%'.$request['filter']['category'].'%')->firstOrFail()->id;

              if($category_id) {
                  $article_categories_list = NewsCategory::where('category_id', $category_id)->get();
                  foreach($article_categories_list as $item) {
                      $searching_article_id_list[] = $item->article_id;
                  }
              }
          }

          return self::whereIn('id', $searching_article_id_list)->get();
      }
      return self::all();
    }
}
