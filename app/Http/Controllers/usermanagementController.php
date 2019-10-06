<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\User;

class usermanagementController extends Controller
{
//    public function index(){
//        $roles = DB::table('userroles')->get();
//        return view('adminPannel.usrmanagement.softwareuser',['roles'=>$roles]);
//    }
    public function useraddview(){
        $roles = DB::table('userroles')->get();
//        return view('user.index', ['users' => $users]);
        return view('adminPannel.usrmanagement.softwareuser',['roles'=>$roles]);
    }
    public function userlistview(){

        $users=DB::table('users')->orderBy('id', 'desc')->get();
        return view('adminPannel.usrmanagement.softwareuserlist',['users'=>$users]);
    }
    public function userroleview(){
        $roles = DB::table('userroles')->get();
        return view('adminPannel.usrmanagement.userrole',['roles'=>$roles]);
    }
    public function customeraddview(){
        return view('adminPannel.usrmanagement.addcustomer');
    }
    public function customerlist(){
        $customers = DB::table('customers')->get();
        return view('adminPannel.usrmanagement.viewcustomer',['customers'=>$customers]);
    }

    protected function image($image){

        //return $imgurl;
    }

    public function insertsofuser(Request $request){

       $insert=DB::table('users')->insert(
           [
               'name'=>$request->name,
               'email'=>$request->email,
               'role'=>$request->role,
               'id_no'=>$request->id_no,
               'phone'=>$request->phone,
               'password'=>bcrypt($request->password),
               'address'=>$request->address,
               'profile_image'=>$request->profile_image,

           ]
       );
       if ($insert){
           return response()->json("success");
       }
       else
           return response()->json("error");


    }

    public function insertrole(Request $request){
        $insert=DB::table('userroles')->insert(
            [
                'userrole'=>$request->userrole,

            ]
        );
        if ($insert){
            return response()->json("success");
        }
        else
            return response()->json("error");


    }
    
    public function insertcustomer(Request $request){
        $insert=DB::table('customers')->insert(
            [
                'customername'=>$request->customername,
                'customercompany'=>$request->customercompany,
                'customeremail'=>$request->customeremail,
                'customercontact'=>$request->customercontact,
                'customeraltcontact'=>$request->customeraltcontact,
                'phone'=>$request->phone,
                'phone1'=>$request->phone1,
                'customeraddress'=>$request->customeraddress,
                'profileimage'=>$request->profileimage,

            ]
        );
        if ($insert){
            return response()->json("success");
        }
        else
            return response()->json("error");
    }

    public function delete($id){
        $delete=DB::table('userroles')->where('id',$id)->delete();
        if ($delete){
            return response()->json("success");
        }
        else
            return response()->json("error");

    }

    public function indvidview($id){
        $users=DB::table('users')->where('id',$id)->first();
        return view('adminPannel.usrmanagement.individualsoftusrview',['users'=>$users]);
    }
    public function indvidedit($id){
        $roles = DB::table('userroles')->get();
        $users=DB::table('users')->where('id',$id)->first();
        return view('adminPannel.usrmanagement.updateuser',['users'=>$users],['roles'=>$roles]);
    }
    public function indvidupdate(Request $request){
        $id=$request->id;

        $update=DB::table('users')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'id_no'=>$request->id_no,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'profile_image'=>$request->profile_image,
        ]);
        if ($update){
            return response()->json("success");
        }
        else
            return response()->json("error");
}

public function deleteuser($id){

        $delete=DB::table('users')->where('id',$id)->delete();
        if ($delete){
            return view('adminPannel.usrmanagement.softwareuserlist');
        }
//    if ($delete){
//        return response()->json("success");
//    }
//    else
//        return response()->json("error");
}

public function useralllist(){
    $users=DB::table('users')->orderBy('id', 'desc')->get();
    return view('adminPannel.usrmanagement.softwareuserlist',['users'=>$users]);
}

public function customindividual($id){
    $customers=DB::table('customers')->where('id',$id)->first();
    return view('adminPannel.usrmanagement.individualcustomer',['customers'=>$customers]);
}

public function customerupdate(Request $request){
    $id=$request->id;

    $update=DB::table('customers')->where('id',$id)->update([
        'customername'=>$request->customername,
        'customercompany'=>$request->customercompany,
        'customeremail'=>$request->customeremail,
        'customercontact'=>$request->customercontact,
        'customeraltcontact'=>$request->customeraltcontact,
        'phone'=>$request->phone,
        'phone1'=>$request->phone1,
        'customeraddress'=>$request->customeraddress,

    ]);
    if ($update){
        return response()->json("success");
    }
    else
        return response()->json("error");

}

public function custupdview($id){
    $users=DB::table('customers')->where('id',$id)->first();
    return view('adminPannel.usrmanagement.updatecustomer',['customers'=>$users]);
}
public function deletecustomer($id){
    $delete=DB::table('customers')->where('id',$id)->delete();
    if ($delete){
        return response()->json("success");
    }
    else
        return response()->json("error");
}

//customer search

public function searchcustomer(Request $request){
        if ($request->search){
            $searchs=DB::table('customers')->where('customername','like','%'.$request->customername)
                ->orwhere('customercompany','like','%'.$request->customercompany.'%')
                ->orwhere('customercontact','like','%'.$request->customercontact.'%')
                ->get();
            if ($searchs){
                foreach ($searchs as $key=>$search){
                    echo '<tr><td>'.$search->customername.'</td><td>'.
                        $search->customercompany.'</td><td>'.$search->customeremail.'</td><td>'.$search->customercontact.'</td><td>'.
                        $search->phone.'</td><td>'.$search->customeraddress.'</td><td>'.
                        '<a href="{{route(\'indivicustomerview\',[\'id\'=>$customer->id])}}" name="view" class="btn btn-success btn-sm">view</a>'.
                        '<input type="submit" class="deletecustomer btn btn-danger btn-sm" data-id="{{$customer->id}}" value="delete">'.
                        '<a href="{{route(\'indicustupdate\',[\'id\'=>$customer->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>'.
                        '</td></tr>';
                }
            }
        }
}

    public function searchuser(Request $request){
        if ($request->search){
            $searchs=DB::table('users')->where('name','like','%'.$request->name)
                ->orwhere('email','like','%'.$request->email.'%')
                ->orwhere('phone','like','%'.$request->phone.'%')
                ->get();
            if ($searchs){
                foreach ($searchs as $key=>$search){
                    echo '<tr><td>'.$search->name.'</td><td>'.
                        $search->email.'</td><td>'.$search->role.'</td><td>'.$search->phone.'</td><td>'.
                        $search->id_no.'</td><td>'.$search->address.'</td><td>'.
                        '<a href="{{route(\'indivicustomerview\',[\'id\'=>$customer->id])}}" name="view" class="btn btn-success btn-sm">view</a>'.
                        '<input type="submit" class="deletecustomer btn btn-danger btn-sm" data-id="{{$customer->id}}" value="delete">'.
                        '<a href="{{route(\'indicustupdate\',[\'id\'=>$customer->id])}}" name="edit" class="btn btn-primary btn-sm">edit</a>'.
                        '</td></tr>';
                }
            }
        }
    }

//    User id available

    public function userid_available(Request $request){
        if($request->get('id_no'))
        {
            $userid = $request->get('id_no');
            $data = DB::table("users")->where('id_no', $userid)->count();
            if($data > 0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }
    public function yajradataTables(){
        $user=User::all();
//        return Datatables::of($user)
//            ->addColumn('action', 'action_button')
//            ->rawColumns(['action'])
//            ->addIndexColumn()
//            ->make(true);
        return Datatables::of($user)
            ->addColumn('action', function ($user) {
//                '. route('admin.faculty.destroy', $faculties->id) .'
                return '<a href="'.route('deleteuser',['id'=>$user->id]).'"  onclick="return confirm()" class="delete btn btn-danger btn-sm">
    Delete</a>
                        <a href="'.route('individualuseredit',['id'=>$user->id]).'" class="btn btn-sm btn-primary"> Edit</a>
                        <a href="'. route('individualuserview',['id'=>$user->id]) .'" class="btn btn-sm btn-success"> View</a>  ';})
            ->make(true);



    }





}
