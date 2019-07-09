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

Route::get('/', function () {
    return view('login.home.home');
});
Route::get('test',function (){
   return view('adminPannel.vendormanagement.useradd') ;
});

//for dashbord view by login
//this is when user inter by login
Route::post('adminlogin','loginController@index')->name('adminlogin');

Route::group(['middleware'=>'check'],function (){
    //======================================================================
     //    this is for dashbord button action
    Route::get('dashbord','loginController@dashbord');
    //======================================================================
    //this is for when user already login and want to dashbord by url
    Route::get('adminlogin','loginController@dashbord')->name('adminlogin');
    //======================================================================
                //            Start usermanagemnt part
    //======================================================================
    //individual softwareuser view
    Route::get('admin/softuser/{id}','usermanagementController@indvidview')->name('individualuserview');
    //individual software user update
    Route::get('update/softuser/{id}','usermanagementController@indvidedit')->name('individualuseredit');
    //update inserted user
    Route::post('update/softwareuser/','usermanagementController@indvidupdate')->name('insertupdate');
    //delete user
    Route::delete('deleteuser/{id}','usermanagementController@deleteuser')->name('deleteuser');


    //software user creat
    Route::get('user/view','usermanagementController@useraddview')->name('useraddview');
    //add software user in database
    Route::post('softwareuser','usermanagementController@insertsofuser')->name('insertsoftwareuser');
    //userrole insert
    Route::post('softwareuser/role','usermanagementController@insertrole')->name('insertrole');
    //uerrole delete
    Route::get('userrole/{id}', 'usermanagementController@delete')->name('destroy');
    //customer insert
    Route::post('customer/insert','usermanagementController@insertcustomer')->name('insertcustomer');
    //individual customer view
    Route::get('indivicustomerview/{id}','usermanagementController@customindividual')->name('indivicustomerview');
    //update individual customer
    Route::post('customerupdate','usermanagementController@customerupdate')->name('customerupdate');
    Route::get('indicustupdate/{id}','usermanagementController@custupdview')->name('indicustupdate');
    Route::delete('deletecustomer/{id}','usermanagementController@deletecustomer')->name('deletecustomer');



    //software user list
    Route::get('user/list','usermanagementController@userlistview')->name('userlistview');
    Route::get('useralllist','usermanagementController@useralllist')->name('useralllist');

    //software user Role creat
    Route::get('user/role','usermanagementController@userroleview')->name('userroleview');
    //Customer Add form view
    Route::get('customer/view','usermanagementController@customeraddview')->name('customeraddview');
    //Customer view
    Route::get('customer/list','usermanagementController@customerlist')->name('customerlist');
    //======================================================================
    //            End usermanagemnt part
    //======================================================================
    //            Start Product Management Part
    //======================================================================
    //this is for when user already login and want to dashbord by url

    Route::get('admin/addproductview','productmanagementController@addproductview')->name('addproductview');

    Route::get('product/addwarrenty','productmanagementController@addproductwarrenty')->name('addproductwarrenty');

    Route::get('product/list','productmanagementController@viewproductlist')->name('viewproductlist');
    //======================================================================
    //              End Product Management Part
    //======================================================================
    //                Start Vendor Management
    //======================================================================
    Route::get('vendor/addview','vendormanagementController@vendoraddview')->name('vendoraddview');
    Route::get('vendor/List','vendormanagementController@vendorlist')->name('vendorlist');
    Route::get('vendor/Area','vendormanagementController@addvendorarea')->name('addvendorarea');
    //    insert vendor area

    Route::post('vendor/AddArea','vendormanagementController@vendorareainsert')->name('vendorareainsert');
    //======================================================================
    //                End Vendor Management
    //======================================================================
    //this is for when user already login and want to dashbord by url
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
