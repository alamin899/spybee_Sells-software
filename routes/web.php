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

Route::get('/test1', function () {
    return view('mulitipledatainsert');
});

//for dashbord view by login
//this is when user inter by login
Route::post('adminlogin','loginController@index')->name('adminlogin');

Route::group(['middleware'=>'check'],function(){
    //======================================================================
     //    this is for dashbord button action
    Route::get('dashbord','loginController@dashbord');
    //======================================================================
    //this is for when user already login and want to dashbord by url
    Route::get('adminlogin','loginController@dashbord')->name('adminlogin');


    //======================================================================
                //            Start usermanagemnt part
    //======================================================================
    //userid check
    Route::post('userid_available','usermanagementController@userid_available')->name('userid_available');
   // Route::post('useremailcheck','usermanagementController@useremailcheck')->name('useremailcheck');
    //individual softwareuser view
    Route::get('admin/softuser/{id}','usermanagementController@indvidview')->name('individualuserview');
    //individual software user update
    Route::get('update/softuser/{id}','usermanagementController@indvidedit')->name('individualuseredit');
    //update inserted user
    Route::post('update/softwareuser/','usermanagementController@indvidupdate')->name('insertupdate');
    //delete user
//    Route::delete('deleteuser/{id}','usermanagementController@deleteuser')->name('deleteuser');
    Route::get('deleteuser/{id}','usermanagementController@deleteuser')->name('deleteuser');
    //search customerlist
    Route::post('searchcustomer','usermanagementController@searchcustomer')->name('searchcustomer');
    //search software usere
    Route::post('searchuser','usermanagementController@searchuser')->name('searchuser');

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
//    yajra data tables
    Route::get('yajradatatables','usermanagementController@yajradataTables')->name('yajradataTables');
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



    //======================================================================
    //            Start Product Management Part
    //======================================================================
    //    after select user show text area of custer information
    Route::get('customerinfo/{id}','productmanagementController@customerinfo')->name('customerinfo');
   Route::get('productdropdown/{id}','productmanagementController@productdropdown')->name('productdropdown');

    Route::post('productinfo','productmanagementController@productinfo')->name('productinfo');
    Route::post('email_available','vendormanagementController@email_available')->name('email_available');
    //Phone number availability check
    Route::post('phone_available','vendormanagementController@phone_available')->name('phone_available');
    //sells product view
    Route::get('sells','productmanagementController@viewsell')->name('viewsell');
    //    product sells
    Route::post('sellsproduct','productmanagementController@sellsproduct')->name('sellsproduct');
    //this is for when user already login and want to dashbord by url
    Route::post('admin/addproduct','productmanagementController@addproduct')->name('addproduct');

    Route::get('admin/addproductview','productmanagementController@addproductview')->name('addproductview');

    Route::get('product/addwarrenty','productmanagementController@addproductwarrenty')->name('addproductwarrenty');

    Route::get('product/list','productmanagementController@viewproductlist')->name('viewproductlist');
    //======================================================================
    //              End Product Management Part
    //======================================================================



    //======================================================================
    //                Start Vendor Management
    //======================================================================
    Route::get('vendorareainsert','vendormanagementController@vendoraddview')->name('vendoraddview');
    Route::get('vendor/List','vendormanagementController@vendorlist')->name('vendorlist');
    Route::get('vendor/Area','vendormanagementController@addvendorarea')->name('addvendorarea');
    //vendor insert
    Route::post('vendor/add','vendormanagementController@vendorinsert')->name('vendorinsert');
    //individual vendor view
    Route::get('vendor/indview/{id}','vendormanagementController@indivivendorview')->name('individualvendor');
    //individual vendor update view
    Route::get('indvendorupdate/{id}','vendormanagementController@updatevendorview')->name('indvendorupdate');
    //vendor delete
    Route::delete('deletevendor/{id}','vendormanagementController@deltevendor')->name('deletevendor');
    //delete vendor area
    Route::delete('deletevendorarea/{id}','vendormanagementController@deletearea')->name('deletevendorarea');
    //updated vendor
    Route::post('vendorupdate','vendormanagementController@vendorupdate')->name('vendorupdate');

    //    insert vendor area
    Route::post('vendor/AddArea','vendormanagementController@vendorareainsert')->name('vendorareainsert');
    //======================================================================
    //                End Vendor Management
    //======================================================================
    //this is for when user already login and want to dashbord by url
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('test','loginController@indexs')->name('test');
Route::post('testing','loginController@testing')->name('testing');
Route::get('test','loginController@test')->name('test');