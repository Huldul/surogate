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
use App\Models\SeoToPage;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function contacts(){

        $seo = SeoToPage::where('slug', 'contact')->first();

        return view('contact',[

            'seo'=>$seo,
        ]);
    }
    public function changeRu(){
        return redirect("/eng/");
    }
    public function changeEn(){
        return redirect("/");
    }
    public function index(){

        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $appeals = Appeal::All();
        $about = About::firstOrFail();
        $opportunity = Opportunity::firstOrFail();
        $partners = Partner::All();
        $contactus = ContactUsBlock::find(1);
        $questions = Question::orderBy('created_at')->take(6)->get();
        $applicationblock = ApplicationBlock::find(1);
        $seo = SeoToPage::where('slug', 'index')->first();
        $page = Page::where('slug', 'glavnaya')->first();

        return view('index',[
            'news'=>$news,
            'appeals'=>$appeals,
            'about'=>$about,
            'opportunity'=>$opportunity,
            'partners'=>$partners,
            'contactus'=>$contactus,
            'questions'=>$questions,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
            'page'=>$page,

        ]);
    }
    public function about(){

        $about = About::firstOrFail();
        $seo = SeoToPage::where('slug', 'about')->first();

        return view('about',[
            
            'about'=>$about,
            'seo'=>$seo
            
        ]);
    }
    public function employees(){
        $worker = Worker::All();
        $seo = SeoToPage::where('slug', 'employees')->first();
        return view('employees',[
            'workers'=>$worker,
            'seo'=>$seo,
        ]);
    }
    public function documentation(){
        $licenses = License::All();
        $sertifications = Sertification::All();
        $letters = AppreciationLetter::All();
        $seo = SeoToPage::where('slug', 'documentation')->first();
        return view('documentation',[
            'licenses'=>$licenses,
            'sertifications'=>$sertifications,
            'letters'=>$letters,
            'seo'=>$seo,
        ]);
    }
    public function pricekz(){
        $price = KzPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'pricekz')->first();
        return view('price',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function priceru(){
        $price = RuPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'priceru')->first();
        return view('priceRF',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function pricech(){
        $price = ChPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'pricech')->first();
        return view('priceChine',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function priceot(){
        $price = ElsePrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'priceot')->first();
        return view('priceOther',[
            'price'=>$price,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function questions(){
        $questions = Question::All();
        $contactusblock = ContactUsBlock::find(5);
        $seo = SeoToPage::where('slug', 'questions')->first();
        return view('question',[
            'questions'=>$questions,
            'contactus'=>$contactusblock,
            'seo'=>$seo,
        ]);
    }
    public function news(){
        $news = News::paginate(16);
        $seo = SeoToPage::where('slug', 'news')->first();
        return view('massmedia',[
            'news'=>$news,
            'seo'=>$seo,
        ]);
    }
    public function newspage($page) {
        $news = News::where('url', $page)->first();
        $contactusblock = ContactUsBlock::find(4);
        $seo = (object)[];
    
        if ($news instanceof News) {
            $seo = (object)[
                'meta_title' => $news->meta_title,
                'meta_description' => $news->meta_description,
                'meta_keywords' => $news->meta_keywords,
            ];
        }
    
        return view('internal', [
            'news' => $news,
            'contactus' => $contactusblock,
            'seo' => $seo,
        ]);
    }
    
    
    public function partners(){
        $partners = Partner::All();
        $contactusblock = ContactUsBlock::find(5);
        $seo = SeoToPage::where('slug', 'partners')->first();
        return view('partners',[
            'partners'=>$partners,
            'contactus'=>$contactusblock,
            'seo'=>$seo,
        ]);
    }

    public function requirements(){
        $page = Requirement::find(1);
        $reqs = InnerRequirement::All();
        $docs = Document::All();

        $seo = SeoToPage::where('slug', 'requirements')->first();

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
            'seo'=>$seo,
            'contactus'=>$contactusblock,
        ]);
    }
    public function requirements_donor(){
        $page = DonorRequirement::find(1);
        $reqs = DonorInnerRequirement::All();
        $docs = DonorDocument::All();

        $seo = SeoToPage::where('slug', 'requirements_donor')->first();

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
            'seo'=>$seo,
            'contactus'=>$contactusblock,
        ]);
    }
    public function donor(){
        $content = Page::where("slug", "donor")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();

        $seo = SeoToPage::where('slug', 'donor')->first();

        return view('donation',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$news,
            'seo'=>$seo,
        ]);
    }
    public function surrogacy(){
        $content = Page::where("slug", "surrogacy")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $seo = SeoToPage::where('slug', 'surrogacy')->first();
        return view('surrogacy',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$news,
            'seo'=>$seo,
        ]);
    }
    public function legislation(){
        $content = Page::where("slug", "legislation")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $seo = SeoToPage::where('slug', 'legislation')->first();
        return view('legislation',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$news,
            'seo'=>$seo,
        ]);
    }
}
