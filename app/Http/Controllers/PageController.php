<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Translatable\Translatable;

use App\Models\News;
use App\Models\Appeal;
use App\Models\About;
use App\Models\Opportunity;
use App\Models\Partner;
use App\Models\ContactUsBlock;
use App\Models\Question;
use App\Models\ApplicationBlock;
use App\Models\Worker;
use App\Models\License;
use App\Models\Sertification;
use App\Models\AppreciationLetter;

use App\Models\KzPrice;
use App\Models\RuPrice;
use App\Models\ChPrice;
use App\Models\DonorAnalize;
use App\Models\DonorCompensation;
use App\Models\DonorDocument;
use App\Models\DonorInnerRequirement;
use App\Models\DonorRequirement;
use App\Models\ElsePrice;
use App\Models\Garanty;

use App\Models\Requirement;
use App\Models\InnerRequirement;
use App\Models\Analize;
use App\Models\Document;

class PageController extends Controller
{
    public function index(){

        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $appeals = Appeal::All();
        $about = About::firstOrFail();
        $opportunity = Opportunity::firstOrFail();
        $partners = Partner::All();
        $contactus = ContactUsBlock::find(1);
        $questions = Question::orderBy('created_at')->take(6)->get();
        $applicationblock = ApplicationBlock::find(1);

        return view('index',[
            'news'=>$news,
            'appeals'=>$appeals,
            'about'=>$about,
            'opportunity'=>$opportunity,
            'partners'=>$partners,
            'contactus'=>$contactus,
            'questions'=>$questions,
            'applicationblock'=>$applicationblock,

        ]);
    }
    public function indexEn()
{
    $news = News::orderBy('created_at', 'desc')->take(4)->get();

    // Получаем все записи Appeal
    // $appeals = Appeal::all();

    // // Далее, для каждого объекта Appeal применяем перевод на английский язык
    // $appeals->each(function ($appeal) {
    //     $appeal->setLocale('en');
    // });
    // $appeals = Appeal::withTranslation('en')->get();
    $appeals = Appeal::all();
    $appeals->load('translations');
    // dd($posts);
    return view('index', [
        'news' => $news,
        'appeals' => $appeals
    ]);
}
    public function about(){

        $about = About::firstOrFail();

        return view('about',[
            
            'about'=>$about,
            
            
        ]);
    }
    public function employees(){
        $worker = Worker::All();
        return view('employees',[
            'workers'=>$worker,
        ]);
    }
    public function documentation(){
        $licenses = License::All();
        $sertifications = Sertification::All();
        $letters = AppreciationLetter::All();
        return view('documentation',[
            'licenses'=>$licenses,
            'sertifications'=>$sertifications,
            'letters'=>$letters,
        ]);
    }
    public function pricekz(){
        $price = KzPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        return view('price',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
        ]);
    }
    public function priceru(){
        $price = RuPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        return view('priceRF',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
        ]);
    }
    public function pricech(){
        $price = ChPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        return view('priceChine',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
        ]);
    }
    public function priceot(){
        $price = ElsePrice::All();
        $applicationblock = ApplicationBlock::find(2);
        return view('priceOther',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
        ]);
    }
    public function questions(){
        $questions = Question::All();
        $contactusblock = ContactUsBlock::find(5);
        return view('question',[
            'questions'=>$questions,
            'contactus'=>$contactusblock,
        ]);
    }
    public function news(){
        $news = News::paginate(16);
        return view('massmedia',[
            'news'=>$news,
        ]);
    }
    public function newspage($page){
        $news = News::Where('url', $page)->first();
        $contactusblock = ContactUsBlock::find(4);
        return view('internal',[
            'news'=>$news,
            'contactus'=>$contactusblock,
        ]);
    }
    public function partners(){
        $partners = Partner::All();
        $contactusblock = ContactUsBlock::find(5);
        return view('partners',[
            'partners'=>$partners,
            'contactus'=>$contactusblock,
        ]);
    }

    public function requirements(){
        $page = Requirement::find(1);
        $reqs = InnerRequirement::All();
        $docs = Document::All();

        $allRecords = Analize::all(); // Получение всех записей из БД

        $totalRecords = count($allRecords);
        $leftBlockRecords = array_slice($allRecords->toArray(), 0, ceil($totalRecords / 2));
        $rightBlockRecords = array_slice($allRecords->toArray(), ceil($totalRecords / 2));

        $gars = Garanty::All();
        $contactusblock = ContactUsBlock::find(3);
        return view('questionnaire',[
            'page'=>$page,
            'reqs'=>$reqs,
            'docs'=>$docs,
            'leftBlockRecords'=>$leftBlockRecords,
            'rightBlockRecords'=>$rightBlockRecords,
            'gars'=>$gars,

            'contactus'=>$contactusblock,
        ]);
    }
    public function requirements_donor(){
        $page = DonorRequirement::find(1);
        $reqs = DonorInnerRequirement::All();
        $docs = DonorDocument::All();

        $allRecords = DonorAnalize::all(); // Получение всех записей из БД

        $totalRecords = count($allRecords);
        $leftBlockRecords = array_slice($allRecords->toArray(), 0, ceil($totalRecords / 2));
        $rightBlockRecords = array_slice($allRecords->toArray(), ceil($totalRecords / 2));

        $comps = DonorCompensation::All();
        $contactusblock = ContactUsBlock::find(4);
        return view('questionnaire_donor',[
            'page'=>$page,
            'reqs'=>$reqs,
            'docs'=>$docs,
            'leftBlockRecords'=>$leftBlockRecords,
            'rightBlockRecords'=>$rightBlockRecords,
            'comps'=>$comps,

            'contactus'=>$contactusblock,
        ]);
    }
}
