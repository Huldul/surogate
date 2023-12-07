<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
class PageControllerEn extends Controller
{
    public function index(){

        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $appeals = Appeal::All();
        $about = About::withTranslation('en')->first();
        $opportunity = Opportunity::firstOrFail();
        $partners = Partner::All();
        $contactus = ContactUsBlock::find(1);
        $questions = Question::orderBy('created_at')->take(6)->get();
        $applicationblock = ApplicationBlock::find(1);
        $seo = SeoToPage::where('slug', 'index')->first();
        $page = Page::where('slug', 'glavnaya')->first();
        
        $about = $about->translate('en');
        $opportunity = $opportunity->translate('en');
        $contactus = $contactus->translate('en');
        $applicationblock = $applicationblock->translate('en');
        $seo = $seo->translate('en');
        $page = $page->translate('en');

        $translatedPartners = [];
        $translatedappeals = [];
        $translatednews = [];
        $translatedquestions = [];

        foreach ($partners as $partner) {
            $translatedPartners[] = $partner->translate('en');
        }
        foreach ($appeals as $appeal) {
            $translatedappeals[] = $appeal->translate('en');
        }
        foreach ($news as $new) {
            $translatednews[] = $new->translate('en');
        }
        foreach ($questions as $question) {
            $translatedquestions[] = $question->translate('en');
        }

        return view('eng.index',[
            'news'=>$translatednews,
            'appeals'=>$translatedappeals,
            'about'=>$about,
            'opportunity'=>$opportunity,
            'partners'=>$translatedPartners,
            'contactus'=>$contactus,
            'questions'=>$translatedquestions,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
            'page'=>$page,

        ]);
    }
    
    public function about(){

        $about = About::firstOrFail();
        $seo = SeoToPage::where('slug', 'about')->first();
        $about = $about->translate('en');
        $seo = $seo->translate('en');

        return view('eng.about',[
            
            'about'=>$about,
            'seo'=>$seo
            
        ]);
    }
    public function employees(){
        $worker = Worker::All();
        $seo = SeoToPage::where('slug', 'employees')->first();
        $seo = $seo->translate('en');

        $translatedquestions = [];

        foreach ($worker as $worke) {
            $translatedquestions[] = $worke->translate('en');
        }
        return view('eng.employees',[
            'workers'=>$translatedquestions,
            'seo'=>$seo,
        ]);
    }
    public function documentation(){
        $licenses = License::All();
        $sertifications = Sertification::All();
        $letters = AppreciationLetter::All();
        $seo = SeoToPage::where('slug', 'documentation')->first();

        $seo = $seo->translate('en');

        $translatedlicenses = [];

        foreach ($licenses as $license) {
            $translatedlicenses[] = $license->translate('en');
        }
        $translatedsertifications = [];

        foreach ($sertifications as $sertification) {
            $translatedsertifications[] = $sertification->translate('en');
        }
        $translatedletters = [];

        foreach ($letters as $letter) {
            $translatedletters[] = $letter->translate('en');
        }
        return view('eng.documentation',[
            'licenses'=>$translatedlicenses,
            'sertifications'=>$translatedsertifications,
            'letters'=>$translatedletters,
            'seo'=>$seo,
        ]);
    }
    public function pricekz(){
        $price = KzPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'pricekz')->first();
        $seo = $seo->translate('en');
        $applicationblock = $applicationblock->translate('en');
        $translatedletters = [];

        foreach ($price as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.price',[
            'price'=>$translatedletters,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function priceru(){
        $price = RuPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'priceru')->first();
        $seo = $seo->translate('en');
        $applicationblock = $applicationblock->translate('en');
        $translatedletters = [];

        foreach ($price as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.priceRF',[
            'price'=>$translatedletters,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function pricech(){
        $price = ChPrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'pricech')->first();
        $seo = $seo->translate('en');
        $applicationblock = $applicationblock->translate('en');
        $translatedletters = [];

        foreach ($price as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.priceChine',[
            'price'=>$translatedletters,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function priceot(){
        $price = ElsePrice::All();
        $applicationblock = ApplicationBlock::find(2);
        $seo = SeoToPage::where('slug', 'priceot')->first();
        $seo = $seo->translate('en');
        $applicationblock = $applicationblock->translate('en');
        $translatedletters = [];

        foreach ($price as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.priceOther',[
            'price'=>$translatedletters,
            'applicationblock'=>$applicationblock,
            'seo'=>$seo,
        ]);
    }
    public function questions(){
        $questions = Question::All();
        $contactusblock = ContactUsBlock::find(5);
        $seo = SeoToPage::where('slug', 'questions')->first();
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $translatedletters = [];

        foreach ($questions as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.question',[
            'questions'=>$translatedletters,
            'contactus'=>$contactusblock,
            'seo'=>$seo,
        ]);
    }
    public function news(){
        $news = News::paginate(16);
        $seo = SeoToPage::where('slug', 'news')->first();
        $seo = $seo->translate('en');
        $translatedletters = [];

        foreach ($news as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.massmedia',[
            'news'=>$translatedletters,
            'seo'=>$seo,
        ]);
    }
    public function newspage($page) {
        $news = News::where('url', $page)->first();
        $contactusblock = ContactUsBlock::find(4);
        $news = $news->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $seo = (object)[];
    
        if ($news instanceof News) {
            $seo = (object)[
                'meta_title' => $news->meta_title,
                'meta_description' => $news->meta_description,
                'meta_keywords' => $news->meta_keywords,
            ];
        }
        
        return view('eng.internal', [
            'news' => $news,
            'contactus' => $contactusblock,
            'seo' => $seo,
        ]);
    }
    
    
    public function partners(){
        $partners = Partner::All();
        $contactusblock = ContactUsBlock::find(5);
        $seo = SeoToPage::where('slug', 'partners')->first();
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $translatedletters = [];

        foreach ($partners as $pric) {
            $translatedletters[] = $pric->translate('en');
        }
        return view('eng.partners',[
            'partners'=>$translatedletters,
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
        $translatedRecords = [];

        foreach ($allRecords as $pric) {
            $translatedRecords[] = $pric->translate('en')->toArray();
        }

        $totalRecords = count($translatedRecords);
        $leftBlockRecords = array_slice($translatedRecords, 0, ceil($totalRecords / 2));
        $rightBlockRecords = array_slice($translatedRecords, ceil($totalRecords / 2));

        $gars = Garanty::All();
        $contactusblock = ContactUsBlock::find(3);
        $contactusblock = $contactusblock->translate('en');
        $page = $page->translate('en');
        $seo = $seo->translate('en');
        $translatedreqs = [];

        foreach ($reqs as $pric) {
            $translatedreqs[] = $pric->translate('en');
        }
        $translateddocs = [];

        foreach ($docs as $pric) {
            $translateddocs[] = $pric->translate('en');
        }
        $translatedgars = [];

        foreach ($gars as $pric) {
            $translatedgars[] = $pric->translate('en');
        }
        return view('eng.questionnaire',[
            'page'=>$page,
            'reqs'=>$translatedreqs,
            'docs'=>$translateddocs,
            'leftBlockRecords'=>$leftBlockRecords,
            'rightBlockRecords'=>$rightBlockRecords,
            'gars'=>$translatedgars,
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

        $translatedRecords = [];
        foreach ($allRecords as $pric) {
            $translatedRecords[] = $pric->translate('en')->toArray();
        }

        $totalRecords = count($translatedRecords);
        $leftBlockRecords = array_slice($translatedRecords, 0, ceil($totalRecords / 2));
        $rightBlockRecords = array_slice($translatedRecords, ceil($totalRecords / 2));

        $translatedreqs = [];
        $page = $page->translate('en');

        foreach ($reqs as $pric) {
            $translatedreqs[] = $pric->translate('en');
        }
        $translateddocs = [];

        foreach ($docs as $pric) {
            $translateddocs[] = $pric->translate('en');
        }

        $comps = DonorCompensation::All();
        $contactusblock = ContactUsBlock::find(4);
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $translatedcomps = [];

        foreach ($comps as $pric) {
            $translatedcomps[] = $pric->translate('en');
        }
        return view('eng.questionnaire_donor',[
            'page'=>$page,
            'reqs'=>$translatedreqs,
            'docs'=>$translateddocs,
            'leftBlockRecords'=>$leftBlockRecords,
            'rightBlockRecords'=>$rightBlockRecords,
            'comps'=>$translatedcomps,
            'seo'=>$seo,
            'contactus'=>$contactusblock,
        ]);
    }
    public function donor(){
        $content = Page::where("slug", "donor")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();

        $seo = SeoToPage::where('slug', 'donor')->first();
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $content = $content->translate('en');

        $translatedcomps = [];

        foreach ($news as $pric) {
            $translatedcomps[] = $pric->translate('en');
        }
        return view('eng.donation',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$translatedcomps,
            'seo'=>$seo,
        ]);
    }
    public function surrogacy(){
        $content = Page::where("slug", "surrogacy")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $seo = SeoToPage::where('slug', 'surrogacy')->first();
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $content = $content->translate('en');

        $translatedcomps = [];

        foreach ($news as $pric) {
            $translatedcomps[] = $pric->translate('en');
        }
        return view('eng.surrogacy',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$translatedcomps,
            'seo'=>$seo,
        ]);
    }
    public function legislation(){
        $content = Page::where("slug", "legislation")->first();
        $contactusblock = ContactUsBlock::find(2);
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $seo = SeoToPage::where('slug', 'legislation')->first();
        $seo = $seo->translate('en');
        $contactusblock = $contactusblock->translate('en');
        $content = $content->translate('en');

        $translatedcomps = [];

        foreach ($news as $pric) {
            $translatedcomps[] = $pric->translate('en');
        }
        return view('eng.legislation',[
            'content'=>$content,
            'contactus'=>$contactusblock,
            'news'=>$translatedcomps,
            'seo'=>$seo,
        ]);
    }
    public function contacts(){

        $seo = SeoToPage::where('slug', 'contact')->first();
        $seo = $seo->translate('en');

        return view('eng.contact',[

            'seo'=>$seo,
        ]);
    }
}
