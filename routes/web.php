<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalilamapandanDB;

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

// Route::get('/', function () {
//     return view('galila_landing');
// });


Route::get('/about',[GalilamapandanDB::class, 'about_desc']);
Route::get('/contact',[GalilamapandanDB::class, 'contact_desc']);

// Route::get('/advocacy', function () {
//     return view('galila_advocacy');
// });


// Route::get('/activitiesandprograms', function () {
//     return view('galila_activities');
// });


// Route::get('/advocacy/campaigns', function () {
//     return view('galila_advocacy_campaigns');
// });

// Route::get('/advocacy/campaigns/0', function () {
//     return view('galila_advocacy_campaigns_campaign');
// });



Route::get('/logout', [GalilamapandanDB::class, 'logout'])->name('logout'); 
Route::post('logincheck', [GalilamapandanDB::class, 'logincheck'])->name('logincheck'); 



Route::get('/',[GalilamapandanDB::class, 'home_desc_view']);


Route::get('/theteam',[GalilamapandanDB::class, 'theteam_desc_view']);
Route::get('/advocacy',[GalilamapandanDB::class, 'advocacy_desc_view']);
Route::get('/advocacy/{id}',[GalilamapandanDB::class, 'campaigns_desc_view']);
Route::get('/advocacy/{id1}/{id}',[GalilamapandanDB::class, 'campaigns_campaign_desc_view']);
Route::get('/activitiesandprograms/{id}',[GalilamapandanDB::class, 'activities_activity_desc_view']);
Route::get('/activitiesandprograms',[GalilamapandanDB::class, 'activities_desc_view']);

Route::post('sendMessage', [GalilamapandanDB::class, 'sendMessage'])->name('sendMessage');

Route::group(['middleware'=>['sessionCheck']], function(){
    
    Route::get('/deleteMessage/{id}',[GalilamapandanDB::class, 'deleteMessage'])->name('deleteMessage');
    
    Route::post('updateYearPhoto/{id}', [GalilamapandanDB::class, 'updateYearPhoto'])->name('updateYearPhoto');
    Route::post('updateAdvocacyPhoto/{id}', [GalilamapandanDB::class, 'updateAdvocacyPhoto'])->name('updateAdvocacyPhoto');



    Route::post('updateAboutdesc', [GalilamapandanDB::class, 'updateAboutdesc'])->name('updateAboutdesc');
    Route::get('theteamdescUpdate', [GalilamapandanDB::class, 'theteamdescUpdate'])->name('theteamdescUpdate');
    Route::get('contactdescUpdate', [GalilamapandanDB::class, 'contactdescUpdate'])->name('contactdescUpdate');

    
    Route::post('addSocial', [GalilamapandanDB::class, 'addSocial'])->name('addSocial');
    Route::post('deleteSocial', [GalilamapandanDB::class, 'deleteSocial'])->name('deleteSocial');
    

    Route::get('removeMember/{id}', [GalilamapandanDB::class, 'removeMember'])->name('removeMember');
    Route::post('updateMember/{id}', [GalilamapandanDB::class, 'updateMember'])->name('updateMember');
    Route::post('addMember', [GalilamapandanDB::class, 'addMember'])->name('addMember');
    
    Route::post('/addEvent/{id}', [GalilamapandanDB::class, 'addEvent'])->name('addEvent');
    Route::get('/deleteEvent/{month}/{id}', [GalilamapandanDB::class, 'deleteEvent'])->name('deleteEvent');
    
    Route::get('/makeActivityFeatured/{id}', [GalilamapandanDB::class, 'makeActivityFeatured'])->name('makeActivityFeatured');
    Route::get('/makeActivityUnfeatured/{id}', [GalilamapandanDB::class, 'makeActivityUnfeatured'])->name('makeActivityUnfeatured');
    
    Route::get('/makeAdvocacyFeatured/{id}', [GalilamapandanDB::class, 'makeAdvocacyFeatured'])->name('makeAdvocacyFeatured');
    Route::get('/makeAdvocacyUnfeatured/{id}', [GalilamapandanDB::class, 'makeAdvocacyUnfeatured'])->name('makeAdvocacyUnfeatured');
    
    Route::post('/addCampaigns/{id}', [GalilamapandanDB::class, 'addCampaigns'])->name('addCampaigns'); 
    Route::get('/deleteCampaigns/{id}',[GalilamapandanDB::class, 'deleteCampaigns'])->name('deleteCampaigns');
    
    Route::post('updateCampaignscampaign/{id}', [GalilamapandanDB::class, 'updateCampaignscampaign'])->name('updateCampaignscampaign'); 
    
    Route::post('updateYear/{id}', [GalilamapandanDB::class, 'updateYear'])->name('updateYear'); 
    
    Route::post('/addAdvocacy', [GalilamapandanDB::class, 'addAdvocacy'])->name('addAdvocacy'); 
    Route::get('/deleteAdvocacy/{id}',[GalilamapandanDB::class, 'deleteAdvocacy'])->name('deleteAdvocacy');
    
    
    Route::post('updateAdvocacycampaigns/{id}', [GalilamapandanDB::class, 'updateAdvocacycampaigns'])->name('updateAdvocacycampaigns'); 
    Route::post('updateAdvocacydesc', [GalilamapandanDB::class, 'updateAdvocacydesc'])->name('updateAdvocacydesc'); 
    Route::post('updateActivitydesc', [GalilamapandanDB::class, 'updateActivitydesc'])->name('updateActivitydesc'); 


    Route::get('/activeItem/{id}',[GalilamapandanDB::class, 'activeItem'])->name('activeItem');
    Route::get('/deleteItem/{id}',[GalilamapandanDB::class, 'deleteItem'])->name('deleteItem');

    Route::get('/deleteYear/{id}',[GalilamapandanDB::class, 'deleteYear'])->name('deleteYear');
    Route::post('/addYear', [GalilamapandanDB::class, 'addYear'])->name('addYear'); 



    Route::post('/addItem', [GalilamapandanDB::class, 'addItem'])->name('addItem'); 

    Route::get('admin/about',[GalilamapandanDB::class, 'admin_about']);
    Route::get('admin/about/theteam',[GalilamapandanDB::class, 'admin_about_theteam']);

    Route::get('admin/about/contact',[GalilamapandanDB::class, 'admin_about_contact']);
    Route::get('admin/about/contact/messages',[GalilamapandanDB::class, 'admin_about_contact_messages']);

    Route::get('admin/carouselsettings', [GalilamapandanDB::class, 'carouselsettings'])->name('carouselsettings');

    Route::get('admin', [GalilamapandanDB::class, 'admin'])->name('admin');
    Route::get('admin/advocacy',[GalilamapandanDB::class, 'admin_advocacy_desc_view']);
    Route::get('admin/advocacy/{id}',[GalilamapandanDB::class, 'admin_campaigns_desc_view']);
    Route::get('admin/advocacy/{id1}/{id}',[GalilamapandanDB::class, 'admin_campaigns_campaign_desc_view']); 
    Route::get('admin/activitiesandprograms',[GalilamapandanDB::class, 'admin_activities_desc_view']);
    Route::get('admin/activitiesandprograms/{id}',[GalilamapandanDB::class, 'admin_activities_activity_desc_view']);
    Route::get('/login',[GalilamapandanDB::class, 'login']);



});

