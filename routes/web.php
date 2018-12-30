<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
	'namespace'  => 'Front',
	'prefix'     => config('larapen.admin.route_prefix', ''),
], function ($router) {
    Route::get('/homepage', 'HomeController@index');
    Route::get('/', 'HomeController@index');
    Route::get('/faq', 'FAQController@getList');
    Route::get('/shop', 'HomeController@Shop');
    Route::get('/contactus', 'HomeController@Contactus');
    Route::get('/account/membership', 'AccountController@ViewProfile');
    Route::get('/account/single', 'AccountController@SingleView');
    Route::get('/account/certification', 'AccountController@ViewCertification');
    Route::get('/account/downloadcenter', 'AccountController@ViewDownload');
    Route::get('/center/accreditation', 'CenterController@Accreditation');
    Route::get('/center/authorized', 'CenterController@Authorized');
    Route::get('/center/verification', 'CenterController@Verification');
    Route::get('/center/knowledge', 'CenterController@Knowledge');
    Route::get('signout', 'AccountController@Signout');
    Route::get('account/myaccount', 'AccountController@MyAccount');
    Route::post('account/updateProfile', 'AccountController@updateProfile');
    Route::post('account/updateEducation', 'AccountController@updateEducation');
    Route::post('account/updateExperience', 'AccountController@updateExperience');
    Route::post('account/ApplyMasterBookID', 'AccountController@ApplyMasterBookID');
    Route::post('account/updateAccountInfo', 'AccountController@updateAccountInfo');
    Route::post('blog/postNew', 'BlogController@postNew');
    Route::get('profile/{slug}', 'AccountController@ViewTabs');
    Route::get('blog', 'BlogController@getBlogs');
    Route::get('blog/single/{id}', 'BlogController@SingleView');
    Route::get('blog/next/{id}', 'BlogController@NextView');
    Route::get('blog/prev/{id}', 'BlogController@PrevView');
    Route::post('blog/postComment', 'BlogController@PostComment');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('register', 'Auth\LoginController@ShowRegisterForm');
    Route::post('register', 'Auth\RegisterController@create');
});

Route::group([
	'namespace'  => 'Admin',
	'prefix'     => config('larapen.admin.route_prefix', 'admin'),
], function ($router) {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/', 'DashboardController@index');
    Route::get('/signout', 'UserController@Signout');
    Route::get('/userslist', 'UserController@getUsersList');
    Route::get('/manage_list', 'CertificatesController@Manage_certificates');
    Route::post('/certificates/getAll', 'CertificatesController@getAllCertificates');
    Route::post('/certificates/postNew', 'CertificatesController@postNewCertificate');
    Route::post('/certificates/get', 'CertificatesController@getCertificate');
    Route::post('/certificates/edit', 'CertificatesController@EditCertificate');
    Route::get('/certificates/delete/{id}', 'CertificatesController@DeleteCertificate');
    Route::get('/assign_list', 'CertificatesController@Assign_certificates');
    Route::post('/certificates/getAllAssigns', 'CertificatesController@getUserCertificates');
    Route::post('/certificates/assignNew', 'CertificatesController@assignNewCertificate');
    Route::post('/users/postNew', 'UserController@postNewUser');
    Route::post('users/getinfo/', 'UserController@getUserInfo');
    Route::post('/users/edit/', 'UserController@EditUserInfo');
    Route::get('/users/updatestatus/{id}', 'UserController@UdateStatus');
    Route::get('/users/delete/{id}', 'UserController@DeleteUser');
    Route::post('/certificates/getPersonalAssigns/{id}', 'CertificatesController@getPersonalAssigns');

    Route::get('application_list', 'CertificatesController@getApplications');
    Route::post('certificates/create_idu_application', 'CertificatesController@Create_IDU_Application');
    Route::post('certificates/getAllApplications', 'CertificatesController@getAllApplications');
    Route::post('applications/get', 'CertificatesController@getApplication');
    Route::get('blogs', 'BlogsController@getBlogs');
    Route::post('blog/postNew', 'BlogsController@newBlog');
    Route::get('blogs/updatestatus/{id}', 'BlogsController@updateStatus');
    Route::get('blogs/disable/{id}', 'BlogsController@Disable');
    Route::get('blogs/publish/{id}', 'BlogsController@Publish');
    Route::get('blogs/delete/{id}', 'BlogsController@Delete');
    Route::post('blogs/getinfo', 'BlogsController@getInfo');

    Route::post('blogs/edit', 'BlogsController@EditBlog');
    Route::get('pages', 'PagesController@getPages');

    Route::post('pages/postNew', 'PagesController@postNewPage');
    Route::get('pages/delete/{id}', 'PagesController@Delete');
    Route::post('pages/getinfo', 'PagesController@getInfo');
    Route::post('pages/edit', 'PagesController@EditPage');

    Route::get('masterbookids', 'MasterbookIDController@getMSBIDs');
    Route::post('masterbookid/postNew', 'MasterbookIDController@postNew');
    Route::get('credentials', 'UserCredentialController@getCredentials');
    Route::get('newsletters', 'NewsletterController@getNewsletters');

    Route::post('faq/getinfo', 'FAQController@getInfo');
    Route::post('faq/edit', 'FAQController@EditFAQ');
    Route::get('faq/disable/{id}', 'FAQController@Disable');
    Route::get('faq/delete/{id}', 'FAQController@Delete');
    Route::get('faq', 'FAQController@getFAQList');
    Route::post('faq/postNew', 'FAQController@postNew');

    Route::get('seo', 'SEOController@getSEOList');
    Route::post('seo/postNew', 'SEOController@postNew');
    Route::post('seo/getinfo', 'SEOController@getInfo');
    Route::post('seo/edit', 'SEOController@EditSEO');
    Route::get('seo/delete/{id}', 'SEOController@Delete');

    
    Route::get('produce_list', 'CertificatesController@getProduceList');
    Route::get('certificates/produce/{id}', 'CertificatesController@producePDF');
});
