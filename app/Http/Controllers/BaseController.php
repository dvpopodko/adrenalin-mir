<?php

namespace App\Http\Controllers;
use App\Models\Blog\Blog;
use App\Models\Blog\ViewBlog;
use App\Models\Blog\ViewCategories;
use Filament\Forms\Components\Select;

class BaseController extends Controller
{
    protected function someCommonLogic()
    {

        // Пример общей логики
        return 'Общая логика выполнена';
    }
    public function getIndex()
    {
        // Вызов общей логики из BaseController
        $commonLogicResult = $this->someCommonLogic();

        // Логика для метода getIndex
        $url = 'home';
        $data = [
            'message' => "Добро пожаловать на страницу $url!",
            'commonLogic' => $commonLogicResult,
            'url' => $url,
        ];

        return view('/amir/home', compact('data'));
    }

    public function showBlogDetails($id)
    {
        // Используем where для выбора записи по полю id и firstOrFail для получения первой записи
        $article = ViewBlog::where('id', $id)->firstOrFail();

        // Замена пользовательского тега на HTML-код
        $article->article = str_replace(
            '<implement_twoimg>', // Две фотографии, доделать одну
            '<div class="blog-details-pic">
            <div class="blog-details-pic-item">
                <img src="' . asset($article->image_first) . '" alt="">
            </div>
            <div class="blog-details-pic-item">
                <img src="' . asset($article->image_second) . '" alt="">
            </div>
        </div>',
            $article->article
        );

        $article->article = str_replace(
            '<implement_important>', // важный момент !!!!
            '<div class="blog-details-quote">
                        <div class="quote-icon">
                            <img src="../img/blog/details/quote-left.png" alt="">
                        </div>
                            <h5>'.$article->important.'</h5>
                            <span>'.$article->author.'</span>
                        </div>',
            $article->article
        );

        $article->article = str_replace(
            '<figcaption class="attachment__caption attachment__caption--edited">logo</figcaption>', // важный момент !!!!
            '<img class="wm" src="../img/adrenalin_logo_vector.svg" alt="">',
            $article->article
        );


        $data = [
            'url' => 'blog-details',
        ];

        return view('/amir/blog-details', compact('article', 'data'));
    }


    public function getUrl($url)
    {
        // Вызов общей логики из BaseController
        $commonLogicResult = $this->someCommonLogic();
        $blogs = [];
        // Логика для метода getUrl
        if ($url === 'blog') {
            $blogs = ViewBlog::all();
            $categories = ViewCategories::all();
            return view("amir.$url", compact('blogs','categories'));
        } else {
            return view("amir.$url", compact('blogs'));
        }


        // Возвращаем представление на основе переданного URL


    }
}
