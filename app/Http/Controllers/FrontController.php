<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Tag;
use View;

use Illuminate\Http\Request;

class FrontController extends Controller {
    
     /**
	 * Constructeur du controller
	 *
	 */
    public function __construct()
    {
        View::composer('layouts.master', function($view){
            $view->with('tags', Tag::all());
        });
        
    }
    
    /**
	 * Show view index du repertoire front
	 *
	 * @return Response
	 */
	public function index()
	{
        $questions = Question::paginate(4);
		return view('front.index', compact('questions', 'tags'));
	}
    
    /**
	 * Show questions
	 *
	 * @return Response
	 */
	public function showSingle($id)
	{
        $question = Question::find($id);
        $tags = Question::find($id)->tag;
        return view('front.single', compact('question', 'tags'));
	}
    
    /**
	 * Show Tag
	 *
	 * @return Response
	 */
    public function showTag($id)
    {
        $tagName = Tag::find($id);
        $questions = Tag::find($id)->question;
        return view('front.tag', compact('questions', 'tagName'));
    }
}
