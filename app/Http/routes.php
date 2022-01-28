<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/about-us', function () {
return  view('about') . view('footer2');
});

// Demo test case
Route::get('/test', function () {
    return  view('test') . view('footer2');
});

// end

Route::get('/loanmoksha', function () {
return view('head') . view('loanmoksha') . view('footer2');
});


Route::get('/mobile-application-development-services', function () {
return view('head') . view('services.mobile_app_development') . view('footer2');
});
Route::get('/flutter-app-development-company', function () {
return view('tech.flutter-developer') . view('footer2');
});
Route::get('/mean-stack-development-services', function () {
return  view('tech.meanstack-developer') . view('footer2');
});
Route::get('/microsoft-dot-net-developer', function () {
return view('tech.net-developer') . view('footer2');
});
Route::get('/codeigniter-developer', function () {
return view('tech.codeigniter-developer') . view('footer2');
});
Route::get('/sitefinity-development', function () {
return  view('tech.sitefinity-developer') . view('footer2');
});
Route::get('/ios-app-development', function () {
return  view('tech.ios-developer') . view('footer2');
});

Route::get('/iot-software-development-services', function () {
return view('services.iot') . view('footer2');
});

Route::get('/business-intelligence-consulting', function () {
 return view('services.business_intelligence_consulting') . view('footer2');
 });


Route::get('/artificial-intelligence', function () {
return view('artificial-intelligence') . view('footer2');
});

Route::get('/data-analytics', function () {
    return view('data-analytics') . view('footer2');
    });

Route::get('/blognew', function () {
return view('head') . view('blognew') . view('footer2');
});

Route::get('/blogdetail', function () {
return view('head') . view('blogdetail') . view('footer2');
});



Route::get('/blockchain-software-development-services', function () {
return view('blockchain1') . view('footer2');
});






Route::get('/drupal-development-services', function() {
    return  view('tech.drupal-developer'). view('footer2');
    });
    Route::get('/magento-development-services', function() {
    return  view('tech.magento-developer'). view('footer2');
    });
Route::get('/java-development', function() {
    return  view('tech.java-developer'). view('footer2');
    });
Route::get('/angular-js-developers', function() {
    return  view('tech.angularjs-developer'). view('footer2');
    });
Route::get('/wordpress-development-services', function() {
    return  view('tech.wordpress-developer'). view('footer2');
    });
Route::get('/android-app-development', function() {
    return  view('tech.android-developer'). view('footer2');
    });

Route::get('/healthcare-software-development-services', function() {
	return  view('services.healthcare') . view('footer2');
	});

Route::get('/education-software-development-services', function(){
return view('services.education') . view('footer2');
});
Route::get('/manufacturing-software-development-services', function(){
return view('services.manufacturing') . view('footer2');

});

Route::get('/ecommerce-software-development-services', function(){
return  view('services.ecommerce') . view('footer2');
});
Route::get('/case-study', function(){
    return view('head') . view('case-study') . view('footer2');
});
Route::get('/portfoliofinal', function(){
    return view('head') . view('portfoliofinal') . view('footer2');
});

// Route::get('/portfolio' ,function(){
//     return view('head') . view('portfoliofinal2') . view('footer2');
// });

Route::get('/loanmoksha-case-study', function(){
    return view('head') . view('casestudy.loanmoksha-case-study') . view('footer2');
});
Route::get('/mdout-case-study', function(){
    return view('head') . view('casestudy.mdout1') . view('footer2');
});
// Route::get('/sigvaris-case-study', function(){
//     return view('head') . view('casestudy.mdout1') . view('footer2');
// });
Route::get('/syndify-case-study', function(){
    return view('head') . view('casestudy.syndify') . view('footer2');
});
Route::get('/sigvaris-case-study', function(){
    return view('head') . view('casestudy.sigvaris') . view('footer2');
});
Route::get('/sa-case-study', function(){
    return view('head') . view('casestudy.SA-case-study') .view('footer2');

});
Route::get('/bethite-case-study', function(){
    return view('head') . view('casestudy.bethite_case_study') .view('footer2');

});
Route::get('/my-thana-app-case-study', function(){
    return view('head') . view('casestudy.my-thana-app') .view('footer2');

});
Route::get('/finexchange-case-study', function(){
    return view('head') . view('casestudy.finexchange') .view('footer2');

});
Route::get('/scholly-me-case-study', function(){
    return view('head') . view('casestudy.SchollyMe_case_study') .view('footer2');

});
Route::get('/LLSTNT-Case-study', function(){
    return view('head') . view('casestudy.LLSTNT-Case-study') .view('footer2');

});

Route::get('/Telaqua-case-study', function(){
    return view('head') . view('casestudy.Telaqua-case-study') . view('footer2');
});

Route::get('/owl-case-study', function(){
    return view('head') . view('casestudy.owl-case-study') . view('footer2');
});

Route::get('/neuralmarker-case-study', function(){
    return view('head') . view('casestudy.NeuralMarker-case-study') . view('footer2');
});

// portfolio -route 

Route::get('/portfolio', function(){
    return view('head') . view('portfolio.portfoliolist') . view('footer2');
});

Route::get('/scholly-me-portfolio', function(){
    return view('head') . view('portfolio.SchollyMe_case_study') .view('footer2');

});
Route::get('/llstnt-portfolio', function(){
    return view('head') . view('portfolio.LLSTNT-Case-study') .view('footer2');

});

Route::get('/mdout-portfolio', function () {
    return view('head').view('portfolio.MDout_case_study'). view('footer2');
});

Route::get('/loanmoksha-portfolio', function(){
    return view('head') . view('portfolio.loanmoksha-case-study') . view('footer2');
});

Route::get('/sa-portfolio', function(){
    return view('head') . view('portfolio.SA-case-study') .view('footer2');

});
Route::get('/sa-portfolio-new', function(){
    return view('head') . view('portfolio.SA-case-study-new') .view('footer2');

});
Route::get('/sa-portfolio-background', function(){
    return view('head') . view('portfolio.SA-case-study-background') .view('footer2');

});
Route::get('/sa-portfolio-flutter-react-native', function(){
    return view('head') . view('portfolio.SA-case-study-flutter-react-native') .view('footer2');

});
Route::get('/sa-portfolio-carsbeat', function(){
    return view('head') . view('portfolio.SA-case-study-carsbeat') .view('footer2');

});
Route::get('/bethite-portfolio', function(){
    return view('head') . view('portfolio.bethite_case_study') .view('footer2');

});
Route::get('/my-thana-app-portfolio', function(){
    return view('head') . view('portfolio.my-thana-app') .view('footer2');

});
Route::get('/finexchange-portfolio', function(){
    return view('head') . view('portfolio.finexchange') .view('footer2');

});

//  end portfolio route

// Route::get('/demo', function(){
//     return view('blog1.7-technology-trends-to-watch-out-for-2020') . view('footer2');
// });



Route::get('/case-study-detail', function(){
    return view('head') . view('casestudy.case_study_detail_01') . view('footer2');
});
Route::get('/php-developer-india', function () {
return  view('tech.php-developer') . view('footer2');
});
Route::get('/laravel-development-company', function () {
return  view('tech.laravel-developer') . view('footer2');
});




Route::get('/specialties', function () {
return  view('services.service') . view('footer2');
});

// python old page
Route::get('/python-developer', function () {

return view('tech.python-developer') . view('footer2');
});

// python new page
Route::get('/python-developer-new', function () {

    return view('tech.python-developer-new') . view('footer2');
    });

// Thankyou page

Route::get('/feedback', function () {
    return  view('tech.thankyou-page') . view('footer2');
});

// end

Route::get('/node-js-development ', function () {
return view('tech.nodejs-developer') . view('footer2');
});


Route::get('/outsourcing-software-development-projects', function () {
return  view('tech.outsourcing-developer') . view('footer2');
});
Route::get('/events', function () {
    return view('head') . view('event') . view('footer2');
});

Route::get('/fintech-application-development-services ', function () {
    return  view('services.fintech_development') . view('footer2');
});
Route::get('/casestudy', function () {
    return  view('casestudy.casestudy'). view('footer2');
});



Route::get('/enterprise-software-solution', function () {
    return view('head') . view('enterpricesolution') . view('footer2');
});
Route::get('/portfolio2', function () {
    return view('head') . view('portfoliofinal2') . view('footer2');
});




Route::post('/contact', 'HomeController@contact');
Route::post('/feedback', 'HomeController@feedback');


Route::get('/feedback', function () {

    return  view('tech.thankyou-page') . view('footer2');
});

Route::get('/contact', function () {

    return  view('contact1') . view('footer2');
});


Route::get('/testimonial', function () {
    return  view('testimonial') . view('footer2');
});
// Route::get('/logistics-software-development-services', function () {
//     return  view('services.logistics') . view('footer2');
// });
Route::get('/manufacturing-software-development', function () {
    return  view('services.manufacturing'). view('footer2');
});



Route::get('/angularjs', function () {
    return  view('tech.angularjs-developer'). view('footer2');

});





Route::get('/it-technology', function () {
    return  view('tech.technology-developer'). view('footer2');
});

Route::get('/enterprise-software-solution', function () {
    return view('head').view('enterpricesolution'). view('footer');
});


Route::get('/bethite', function () {
    return view('head').view('casestudy.bethite_case_study'). view('footer2');
});


Route::get('/finexchange', function () {
    return view('head').view('casestudy.finexchange'). view('footer2');
});




Route::get('/loanmoksha-case-study', function(){
    return view('head') . view('casestudy.loanmoksha-case-study') .view('footer');
    });
// Route::get('/mdout-case-study', function () {
//     return view('head').view('casestudy.MDout_case_study'). view('footer2');
// });
Route::get('/MyThanaApp', function () {
    return view('head').view('casestudy.MyThanaApp'). view('footer');
});
Route::get('/SchollyMe', function () {
    return view('head').view('casestudy.SchollyMe_case_study'). view('footer2');
});
Route::get('/screen-builder-case-study', function(){
    return view('head') . view('casestudy.ScreenBuilder-case-study') .view('footer');
    });
Route::get('/llstnt-case-study', function(){
    return view('head') . view('casestudy.LLSTNT-Case-study') .view('footer');
    });
Route::get('/bethite', function(){
    return view('head') . view('casestudy.bethite_case_study') .view('footer');
    });

Route::get('/syndicationdesk', function () {
    return view('head').view('casestudy.online_syndication_desk'). view('footer2');
});


Route::get('/financexchange', function () {
    return view('head').view('casestudy.finexchange'). view('footer2');
});
Route::get('/online-exam-software', function () {
    return view('casestudy.online-exam-software'). view('footer2');
});

Route::get('/testimonial', function () {
    return  view('testimonial'). view('footer2');
});
Route::get('/logistics-software-development-services', function () {
return view('services.logistics') . view('footer2');
});
Route::get('/front-end-development', function () {
return  view('tech.front-end-developer') . view('footer2');
});
Route::get('/drupal-development-services', function () {
return  view('tech.drupal-developer') . view('footer2');
});
Route::get('/fantasy-sports-app-development', function () {
return view('tech.fantasy-sports-developer') . view('footer2');
});
Route::get('/sports-betting-software-development', function () {
return  view('tech.sports-betting-developer') . view('footer2');
});
Route::get('/woocomerce-developer', function () {
return  view('tech.woocomerce-developer') . view('footer2');
});
Route::get('/react-js-developer', function () {
return  view('tech.react-js-developer') . view('footer2');
});
Route::get('/enterprise-software-development', function () {
return  view('tech.enterprise-software-development') . view('footer2');
});


Route::get('/laravel-app-development', function () {
return view('head') . view('tech.laravel-developer') . view('footer');
});
Route::get('/bootstrap-app-development', function () {
return view('tech.bootstrap-developer') . view('footer2');
});



Route::get('/development-process', function () {
return  view('tech.development-process') . view('footer2');
    });
Route::get('/joomla-development-company', function () {
return view('tech.joomla-developer') . view('footer2');
});
Route::get('/ux-ui-developer', function () {
return  view('tech.ux-ui-developer') . view('footer');
});
Route::get('/hire-dedicated-developer', function () {
return view('tech.hire-dedicated-developer') . view('footer');
});
Route::get('/web-designer', function () {
return view('tech.web-designer') . view('footer2');
});
Route::get('/enterprise-analytics' , function(){
return  view('tech.enterprise-analytics') .view('footer');
});
Route::get('/home' , function(){
return view('head') . view('tech.home') .view('footer');
});

Route::get('/home1' , function(){
return view('head') . view('home11') .view('footer');
});

Route::get('/customer-experience-transformation' , function(){
return  view('tech.customer-experience-transformation') .view('footer2');
});
Route::get('/software-cunsulting-services' , function(){
return view('tech.software-cunsulting-services') . view('footer2');
});
Route::get('/food-delivery-app-development' , function(){
return  view('tech.food-delivery-app-development').view('footer2');
}) ;
Route::get('/customer-service-strategy-transformation' , function(){
return view('tech.customer-service-strategy-transformation'). view('footer2');
});
Route::get('/testing-and-qa-management' , function(){
    return view('tech.testing-and-qa-management'). view('footer2');
});

Route::get('/software-engineering-service' , function(){
return view('tech.software-engineering-service'). view('footer2');
});

Route::get('career' , function(){
return view('head') . view('tech.career'). view('footer2');
});

Route::post('/apply-now', 'HomeController@apply_now');

Route::get('/apply-now' , function(){
return view('head_apply') . view('tech.apply'). view('footer2');
});

Route::post('/request-meeting', 'HomeController@meetings');
Route::post('/home', 'HomeController@requestMeetings');

// Route::get('/contect-us' , function(){
// return view('contect1-us');
// }); 


// Route::get('primaplus' , function(){
// return view('head') . view('tech.primaplus'). view('footer');
// });


Route::get('loanmoksha' , function(){
// return view('head') . view('tech.loanmoksha'). view('footer');
return view('head') . view('casestudy.loanmoksha-case-study') . view('footer');
});
// Route::get('mdout' , function(){
// // return view('head') . view('tech.mdout'). view('footer');
// return view('head') . view('casestudy.MDout_case_study') . view('footer');
// });
// Route::get('fintech-portfolio-detail01' , function(){
// return view('head') . view('tech.fintech-portfolio-detail01'). view('footer');
// });
// Route::get('teaching-bharat' , function(){
// return view('head') . view('tech.teaching-bharat'). view('footer');
// });
Route::get('telaqua' , function(){
return view('head') . view('tech.telaqua'). view('footer');
});




Route::get('iot-portfolio-detail02' , function(){
    return view('head') . view('home') .view('footer');
    });

Route::get('P2P-Lending-Platforms' , function(){
    return view('head') . view('home') .view('footer');
     });
     
Route::get('logistic-portfolio' , function(){
    return view('head') . view('portfoliofinal2') . view('footer2');
     });

Route::get('manufacture-portfolio-detail01' , function(){
    return view('head') . view('home') .view('footer');
     });

Route::get('website-design-and-development-company-in-newyork' , function(){
     return view('head') . view('home') .view('footer');
    });
        
Route::get('healthcare-portfolio-detail03' , function(){
    return view('head') . view('portfoliofinal2') . view('footer2');
     });

Route::get('iot-portfolio-detail02' , function(){
    return view('head') . view('portfoliofinal2') . view('footer2');
     });

Route::get('industries' ,function(){
    // return view('head') . view('home') . view('footer');
    return  view('services.service') . view('footer2');
});

Route::get('contact-us' ,function(){
    return view('head') .view('contact1') . view('footer2');
});

Route::get('fintech-development-Services' ,function(){
    return view('head') .view('services.fintech_development') .view('footer2');
});

Route::get('schollyme' ,function(){
    return view('head') .view('home') .view('footer2');
});

Route::get('cloud-service' ,function(){
    return view('services.cloudservice') .view('footer2');
});

Route::get('/demo', function () {
    return  view('tech.demo'). view('footer2');
});
     
/**
* Blog Route
*/
Route::group(['prefix' => 'blog-list'], function() {
    Route::get('/', 'BlogsController@index');
});

Route::group(['prefix' => 'blogs'], function() {
    Route::get('/{slug}', 'BlogsController@findBySlug');
});
 


    
// / ================== Homepage + Admin Routes ================== /

require __DIR__.'/admin_routes.php';