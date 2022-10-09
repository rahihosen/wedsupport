<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Image;


class MemberController extends Controller
{
    public function addInfo()
    {
        return view('profile.addinfo');
    }
    public function updateInfo()
    {
        return view('profile.updateinfo');
    }

    // public function saveInfo(Request $request)
    // {
        
    //     $user = Auth::user();
    //   if ($request->hasFile('varification_doc')) {
    //     if ($files2 = $request->file('varification_doc')) {
    //         $s = strtoupper(md5(uniqid($files2->getClientOriginalName(), true)));
    //         $varification_doc =
    //             substr($s, 0, 8) . '-' .
    //             substr($s, 8, 4) . '-' .
    //             substr($s, 12, 4) . '-' .
    //             substr($s, 16, 4) . '-' .
    //             substr($s, 20) . '.' . $files2->getClientOriginalExtension();
    //         // $photoName=time().uniqid().$files->getClientOriginalName();
    //         $files2->move(public_path('varification_doc/'), $varification_doc);


    //         if ($request->hasFile('imagePath')) {
    //             if ($files = $request->file('imagePath')) {


    //                 $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
    //                 $profileImageName =
    //                     substr($s, 0, 8) . '-' .
    //                     substr($s, 8, 4) . '-' .
    //                     substr($s, 12, 4) . '-' .
    //                     substr($s, 16, 4) . '-' .
    //                     substr($s, 20) . '.' . $files->getClientOriginalExtension();
    //                 // $photoName=time().uniqid().$files->getClientOriginalName();
    //                 $files->move(public_path('public/userImage/'), $profileImageName);
    //             }







    //             $oldProfileImage = public_path('userImage/') . $user->userprofile->imagePath;
    //             $oldvarification_doc = public_path('userImage1/') . $user->userprofile->varification_doc;


    //             if (file_exists($oldProfileImage)) {
    //                 @unlink($oldProfileImage); //delete from storage
    //                 // Storage::delete($file_path); //Or you can do it as well
    //             }

    //             if (file_exists($oldvarification_doc)) {
    //                 @unlink($oldvarification_doc); //delete from storage
    //                 // Storage::delete($file_path); //Or you can do it as well
    //             }
    //             $user->userprofile->update([
    //                 'b_date' => $request->b_date,
    //                 'country' => $request->country,
    //                 'state' => $request->state,
    //                 'city' => $request->city,
    //                 'religion' => $request->religion,
    //                 'status' => $request->status,
    //                 'profession' => $request->profession,
    //                 'gender' => $request->gender,
    //                 'school' => $request->school,
    //                 'college' => $request->college,
    //                 'university' => $request->university,
    //                 'subject' => $request->subject,
    //                 'h_edu' => $request->h_edu,
    //                 'height' => $request->height,
    //                 'phone_number' => $request->phone_number,
    //                 'weight' => $request->weight,
    //                 'blood_group' => $request->blood_group,
    //                 'drink' => $request->drink,
    //                 'smoke' => $request->smoke,
    //                 'place_of_birth' => $request->place_of_birth,
    //                 'annual_income' => $request->annual_income,
    //                 'fathers_occupation' => $request->fathers_occupation,
    //                 'mothers_occupation' => $request->mothers_occupation,
    //                 'no_of_brother' => $request->no_of_brother,
    //                 'no_of_sister' => $request->no_of_sister,
    //                 'p_country' => $request->p_country,
    //                 'p_state' => $request->p_state,
    //                 'p_city' => $request->p_city,
    //                 'p_religion' => $request->p_religion,
    //                 'p_status' => $request->p_status,
    //                 'p_profession' => $request->p_profession,
    //                 'p_gender' => $request->p_gender,
    //                 'from_age' => $request->from_age,
    //                 'to_age' => $request->to_age,
    //                 'comment' => $request->comment,
    //                 'varification_doc' => $request->varification_doc,
    //                 'varification_type' => $request->varification_type,
    //                 'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
    //                 'imagePath' => $profileImageName,
    //                 'created_by' => $request->created_by,
    //                 'blur' => $request->blur,
    //             ]);
    //         } else {
    //             $profileImageName = $user->userprofile->imagePath;
    //             $user->userprofile->update([
    //                 'b_date' => $request->b_date,
    //                 'country' => $request->country,
    //                 'state' => $request->state,
    //                 'city' => $request->city,
    //                 'religion' => $request->religion,
    //                 'status' => $request->status,
    //                 'profession' => $request->profession,
    //                 'gender' => $request->gender,
    //                 'school' => $request->school,
    //                 'h_edu' => $request->h_edu,
    //                 'college' => $request->college,
    //                 'university' => $request->university,
    //                 'subject' => $request->subject,
    //                 'height' => $request->height,
    //                 'phone_number' => $request->phone_number,
    //                 'weight' => $request->weight,
    //                 'blood_group' => $request->blood_group,
    //                 'drink' => $request->drink,
    //                 'smoke' => $request->smoke,
    //                 'place_of_birth' => $request->place_of_birth,
    //                 'annual_income' => $request->annual_income,
    //                 'fathers_occupation' => $request->fathers_occupation,
    //                 'mothers_occupation' => $request->mothers_occupation,
    //                 'no_of_brother' => $request->no_of_brother,
    //                 'no_of_sister' => $request->no_of_sister,
    //                 'p_country' => $request->p_country,
    //                 'p_state' => $request->p_state,
    //                 'p_city' => $request->p_city,
    //                 'p_religion' => $request->p_religion,
    //                 'p_status' => $request->p_status,
    //                 'p_profession' => $request->p_profession,
    //                 'p_gender' => $request->p_gender,
    //                 'from_age' => $request->from_age,
    //                 'varification_doc' => $varification_doc,
    //                 'varification_type' => $request->varification_type,
    //                 'to_age' => $request->to_age,
    //                 'comment' => $request->comment,
    //                 'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
    //                 'imagePath' => $profileImageName,
    //                 'created_by' => $request->created_by,
    //                 'blur' => $request->blur,
    //             ]);
    //             // dd("ok");
    //         }
    //     }
           
    //   } else {

    //         if ($request->hasFile('imagePath')) {
    //             if ($files = $request->file('imagePath')) {


    //                 $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
    //                 $profileImageName =
    //                     substr($s, 0, 8) . '-' .
    //                     substr($s, 8, 4) . '-' .
    //                     substr($s, 12, 4) . '-' .
    //                     substr($s, 16, 4) . '-' .
    //                     substr($s, 20) . '.' . $files->getClientOriginalExtension();
    //                 // $photoName=time().uniqid().$files->getClientOriginalName();
    //                 $files->move('public/userImage/', $profileImageName);
    //             }

    //             $oldProfileImage = public_path('userImage/') . $user->userprofile->imagePath;
    //             if (file_exists($oldProfileImage)) {
    //                 @unlink($oldProfileImage); //delete from storage
    //                 // Storage::delete($file_path); //Or you can do it as well
    //             }
    //             $user->userprofile->update([
    //                 'b_date' => $request->b_date,
    //                 'country' => $request->country,
    //                 'state' => $request->state,
    //                 'city' => $request->city,
    //                 'religion' => $request->religion,
    //                 'status' => $request->status,
    //                 'profession' => $request->profession,
    //                 'gender' => $request->gender,
    //                 'school' => $request->school,
    //                 'h_edu' => $request->h_edu,
    //                 'college' => $request->college,
    //                 'university' => $request->university,
    //                 'subject' => $request->subject,
    //                 'height' => $request->height,
    //                 'phone_number' => $request->phone_number,
    //                 'weight' => $request->weight,
    //                 'blood_group' => $request->blood_group,
    //                 'drink' => $request->drink,
    //                 'smoke' => $request->smoke,
    //                 'place_of_birth' => $request->place_of_birth,
    //                 'annual_income' => $request->annual_income,
    //                 'fathers_occupation' => $request->fathers_occupation,
    //                 'mothers_occupation' => $request->mothers_occupation,
    //                 'no_of_brother' => $request->no_of_brother,
    //                 'no_of_sister' => $request->no_of_sister,
    //                 'p_country' => $request->p_country,
    //                 'p_state' => $request->p_state,
    //                 'p_city' => $request->p_city,
    //                 'p_religion' => $request->p_religion,
    //                 'p_status' => $request->p_status,
    //                 'p_profession' => $request->p_profession,
    //                 'p_gender' => $request->p_gender,
    //                 'from_age' => $request->from_age,
    //                 'to_age' => $request->to_age,
    //                 'comment' => $request->comment,
    //               // 'varification_type' => $request->varification_type,
    //                 'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
    //                 'imagePath' => $profileImageName,
    //                 'created_by' => $request->created_by,
    //                 'blur' => $request->blur,
    //             ]);
    //              //dd("ok");
    //         } else {
    //             $profileImageName = $user->userprofile->imagePath;
    //             $user->userprofile->update([
    //                 'b_date' => $request->b_date,
    //                 'country' => $request->country,
    //                 'state' => $request->state,
    //                 'city' => $request->city,
    //                 'religion' => $request->religion,
    //                 'status' => $request->status,
    //                 'profession' => $request->profession,
    //                 'gender' => $request->gender,
    //                 'school' => $request->school,
    //                 'h_edu' => $request->h_edu,
    //                 'college' => $request->college,
    //                 'university' => $request->university,
    //                 'subject' => $request->subject,
    //                 'height' => $request->height,
    //                 'phone_number' => $request->phone_number,
    //                 'weight' => $request->weight,
    //                 'blood_group' => $request->blood_group,
    //                 'drink' => $request->drink,
    //                 'smoke' => $request->smoke,
    //                 'place_of_birth' => $request->place_of_birth,
    //                 'annual_income' => $request->annual_income,
    //                 'fathers_occupation' => $request->fathers_occupation,
    //                 'mothers_occupation' => $request->mothers_occupation,
    //                 'no_of_brother' => $request->no_of_brother,
    //                 'no_of_sister' => $request->no_of_sister,
    //                 'p_country' => $request->p_country,
    //                 'p_state' => $request->p_state,
    //                 'p_city' => $request->p_city,
    //                 'p_religion' => $request->p_religion,
    //                 'p_status' => $request->p_status,
    //                 'p_profession' => $request->p_profession,
    //                 'p_gender' => $request->p_gender,
    //                 'from_age' => $request->from_age,
    //                 'varification_type' => $request->varification_type,
    //                 'to_age' => $request->to_age,
    //                 'comment' => $request->comment,
    //                 'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
    //                 'imagePath' => $profileImageName,
    //                 'created_by' => $request->created_by,
    //                 'blur' => $request->blur,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('redirects')->with('success', 'Thanks for your information!');
    // }


   public function saveInfo(Request $request){
              //dd("ok");
              $user = Auth::user()->id;
              $userprofile = Userprofile::where('user_id',$user)->first();
             //dd($userprofile);
        $image = $request->file('imagePath');
        if ($image) {
            $old_image = $request->imagePathOld;
            $image_name=  md5(time() . '_' . $image) . '.' . $image->getClientOriginalExtension();
            $path = public_path('/userImage/');
            
                //     $image->text('Wedsupport.com', 1500, 2000, function($font) {
                //     $font->file(public_path('watermark/RobotoCondensed-Regular.ttf'));
                //     $font->size(200);
                //     $font->color('#ffffff');
                //     $font->align('center');
                //     $font->valign('bottom');
                //     $font->angle(45);
                // });

           
            $image->move($path, $image_name);
            $input['imagePath'] = $image_name;// change your request image name here
            $userprofile->imagePath  = $image_name;
            
           
                // if($old_image){
                //     dd($path);
                //     unlink($path.$old_image);
                // }
          }
           
            $varification_doc = $request->file('varification_doc');
        if ($varification_doc) {
            $old_image = $request->imagePathOld;
            $image_name=  md5(time() . '_' . $varification_doc) . '.' . $varification_doc->getClientOriginalExtension();
            $path = public_path('/varification_doc/');
            $varification_doc->move($path, $image_name);
            $input['varification_doc'] = $image_name; // change your request image name here
            $userprofile->varification_doc  = $image_name;
                // if($old_image){
                //     dd($path);
                //     unlink($path.$old_image);
                // }
          }

        //all data
                            $userprofile->b_date = $request->b_date;
                            $userprofile->country  =  $request->country;
                            $userprofile->state  =  $request->state;
                            $userprofile->city  =  $request->city;
                            $userprofile->religion  =  $request->religion;
                            $userprofile->status  =  $request->status;
                            $userprofile->profession  =  $request->profession;
                            $userprofile->gender  =  $request->gender;
                            $userprofile->school  =  $request->school;
                            $userprofile->h_edu  =  $request->h_edu;
                            $userprofile->college  =  $request->college;
                            $userprofile->university  =  $request->university;
                            $userprofile->subject  =  $request->subject;
                            $userprofile->height  =  $request->height;
                            $userprofile->phone_number  =  $request->phone_number;
                            $userprofile->weight  =  $request->weight;
                            $userprofile->blood_group  =  $request->blood_group;
                            $userprofile->drink  =  $request->drink;
                            $userprofile->smoke =  $request->smoke;
                            $userprofile->place_of_birth  =  $request->place_of_birth;
                            $userprofile->annual_income  =  $request->annual_income;
                            $userprofile->fathers_occupation  =  $request->fathers_occupation;
                            $userprofile->mothers_occupation  =  $request->mothers_occupation;
                            $userprofile->no_of_brother  =  $request->no_of_brother;
                            $userprofile->no_of_sister  =  $request->no_of_sister;
                            $userprofile->p_country  =  $request->p_country;
                            $userprofile->p_state  =  $request->p_state;
                            $userprofile->p_city  =  $request->p_city;
                            $userprofile->p_religion  =  $request->p_religion;
                            $userprofile->p_status  =  $request->p_status;
                            $userprofile->p_profession  =  $request->p_profession;
                            $userprofile->p_gender  =  $request->p_gender;
                            $userprofile->from_age  =  $request->from_age;
                            $userprofile->varification_type  =  $request->varification_type;
                            $userprofile->to_age  =  $request->to_age;
                            $userprofile->comment  =  $request->comment;
                            $userprofile->age  = Carbon::parse($request->b_date)->diff(Carbon::now())->y;
                            $userprofile->created_by  =  $request->created_by;
                            $userprofile->blur  =  $request->blur;
                            $update = $userprofile->update();
                            
              if($update){
                //   dd($user);
                  return redirect()->route('redirects')->with('success', 'Thanks for your information!');
              }
           
          }

          
    public function info()
    {

        $data = Auth::user()->id;
        $datainfo = userprofile::all();
        // $datainfo=  $data->userprofile();


        return view('profile.information', compact("data", "datainfo"));
    }

    public function setting()
    {
        return view('profile.setting');
    }



    public function saveImage(Request $request)
    {
        $this->validate($request, []);


        $user = Auth::user();


        $this->validate($request, []);

        if ($request->hasFile('imagePath1')) {
            if ($files = $request->file('imagePath')) {
                $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
                $profileImageName1 =
                    substr($s, 0, 8) . '-' .
                    substr($s, 8, 4) . '-' .
                    substr($s, 12, 4) . '-' .
                    substr($s, 16, 4) . '-' .
                    substr($s, 20) . '.' . $files->getClientOriginalExtension();
                // $photoName=time().uniqid().$files->getClientOriginalName();
                $files->move('userImage/', $profileImageName1);
            }


            $oldProfileImage1 = public_path('/') . $user->userprofile->imagePath1;


            if (file_exists($oldProfileImage1)) {
                @unlink($oldProfileImage1); //delete from storage
                // Storage::delete($file_path); //Or you can do it as well
            }
            $user->userprofile->update([
                'imagePath1' => $profileImageName1
            ]);
        }



        if ($request->hasFile('imagePath2')) {
            if ($files = $request->file('imagePath2')) {


                $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
                $profileImageName2 =
                    substr($s, 0, 8) . '-' .
                    substr($s, 8, 4) . '-' .
                    substr($s, 12, 4) . '-' .
                    substr($s, 16, 4) . '-' .
                    substr($s, 20) . '.' . $files->getClientOriginalExtension();
                // $photoName=time().uniqid().$files->getClientOriginalName();
                $files->move('userImage/', $profileImageName2);
            }


            $oldProfileImage2 = public_path('userImage/') . $user->userprofile->imagePath2;


            if (file_exists($oldProfileImage2)) {
                @unlink($oldProfileImage2); //delete from storage
                // Storage::delete($file_path); //Or you can do it as well
            }
            $user->userprofile->update([
                'imagePath2' => $profileImageName2
            ]);
        }

        if ($request->hasFile('imagePath3')) {
            if ($files = $request->file('imagePath3')) {


                $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
                $profileImageName3 =
                    substr($s, 0, 8) . '-' .
                    substr($s, 8, 4) . '-' .
                    substr($s, 12, 4) . '-' .
                    substr($s, 16, 4) . '-' .
                    substr($s, 20) . '.' . $files->getClientOriginalExtension();
                // $photoName=time().uniqid().$files->getClientOriginalName();
                $files->move('userImage/', $profileImageName3);
            }


            $oldProfileImage3 = public_path('userImage/') . $user->userprofile->imagePath3;


            if (file_exists($oldProfileImage3)) {
                @unlink($oldProfileImage3); //delete from storage
                // Storage::delete($file_path); //Or you can do it as well
            }
            $user->userprofile->update([
                'imagePath3' => $profileImageName3
            ]);
        }



        return back()->with('success', 'Thanks for your photos!');
    }

    public function photos()
    {
        return view('profile.photo');
    }

    // view profile of others

    public function showProfile($id)
    {
        $data = user::find($id);
        return view('profile.showprofile', compact('data'));
    }

    public function searchPeople(Request $request)
    {
        // dd($request->all());
        $country = $request->country;
        $gender = $request->gender;
        // dd($country);
        $state = $request->state;
        $min_age = $request->min_age;
        $max_age = $request->max_age;
        if ($state != null) {
            $users = User::with('userprofile')->whereHas('userprofile', function ($q) use ($country, $state, $gender, $min_age, $max_age) {
                $q->where('country', '=', $country)->where('state', '=', $state)->where('gender', '=', $gender)->whereBetween('age', [$min_age, $max_age]);
            })->where('usertype', '=', '1')->get();
            return view('searchmember')->with('users', $users);
        } elseif ($state == null && $min_age == null) {
            $users = User::with('userprofile')->whereHas('userprofile', function ($q) use ($country, $state, $gender, $min_age, $max_age) {
                $q->where('country', '=', $country)->where('gender', '=', $gender)->whereBetween('age', [0, $max_age]);
            })->where('usertype', '=', '1')->get();
            return view('searchmember')->with('users', $users);
        } elseif ($state == null && $max_age == null) {
            $users = User::with('userprofile')->whereHas('userprofile', function ($q) use ($country, $state, $gender, $min_age, $max_age) {
                $q->where('country', '=', $country)->where('gender', '=', $gender)->whereBetween('age', [$min_age, 100]);
            })->where('usertype', '=', '1')->get();
            return view('searchmember')->with('users', $users);
        } elseif ($state == null) {
            $users = User::with('userprofile')->whereHas('userprofile', function ($q) use ($country, $state, $gender, $min_age, $max_age) {
                $q->where('country', '=', $country)->where('gender', '=', $gender)->whereBetween('age', [$min_age, $max_age]);
            })->where('usertype', '=', '1')->get();
            return view('searchmember')->with('users', $users);
        }
    }





    public function addlike(Request $request)
    {
        $id = Auth::user()->id;
        $findlike = DB::table('likes')->where('id_stuff', $request->Input('id_stuff'))->where('id_user', $id)->where('type_action', 1)->value('id');
        //dd($findlike);
        if ($findlike == null) {
            $data = array();
            $data['id_user'] = Auth::user()->id;
            $data['time'] = date('Y-m-d');
            $data['type_action'] = 1;
            $data['id_stuff'] = $request->Input('id_stuff');
            DB::table('likes')->insert($data);
            return redirect()->route('redirects')->with('success', 'like added successfully!!');
        } else
            return redirect()->route('redirects')->with('success', 'like added successfully!!');
    }



    public function addfvrt(Request $request)
    {
        $id = Auth::user()->id;
        $findlike = DB::table('likes')->where('id_stuff', $request->Input('id_stuff'))->where('id_user', $id)->where('type_action', 2)->value('id');
        //dd($findlike);
        if ($findlike == null) {
            $data = array();
            $data['id_user'] = Auth::user()->id;
            $data['time'] = date('Y-m-d');
            $data['type_action'] = 2;
            $data['id_stuff'] = $request->Input('id_stuff');
            DB::table('likes')->insert($data);
            return redirect()->route('redirects')->with('success', 'like added successfully!!');
        } else
            return redirect()->route('redirects')->with('success', 'like added successfully!!');
    }


    public function likepage()

    {

        $data = Auth::user()->id;

        $userdata = Auth::user();
        $datainfo = userprofile::all();
        $likedprofile = DB::table('likes')->where('id_stuff', $data)->get('id_user')->first();

        $data22 = json_decode(json_encode($likedprofile), true);

        $myLikedProfile = DB::table('likes')->where('id_user', $data)->get('id_stuff')->first();
        $data3 = json_decode(json_encode($myLikedProfile), true);

        $profilelike = DB::table('users')
            ->join('userprofiles', 'users.id', '=', 'userprofiles.user_id', 'left')
            ->where('user_id', $data22)
            ->get();

        //dd($profilelike2);

        $mylike =  DB::table('users')
            ->join('userprofiles', 'users.id', '=', 'userprofiles.user_id', 'left')
            ->get();
        //dd($mylike);

        $mylikedprofileID = DB::table('likes')->where('id_user', $data)->where('type_action', 1)->groupBy('id_stuff')->get('id_stuff');
        //dd($mylikedprofileID);
        $likedMeProfileID = DB::table('likes')->where('id_stuff', $data)->where('type_action', 1)->groupBy('id_user')->get('id_user');
        // dd($likedMeProfileID);
        return view('pages.likedme', compact("data", "datainfo", "profilelike", "userdata", "mylike", "mylikedprofileID", "likedMeProfileID"));
    }



    public function fvrtpage()

    {

        $data = Auth::user()->id;
        $datainfo = userprofile::all();


        $fvrtprofile = DB::table('likes')->where('type_action', 2)->where('id_stuff', $data)->get('id_user')->first();
        $data22 = json_decode(json_encode($fvrtprofile), true);

        //dd($data22);
        $imfvrt =  DB::table('users')
            ->join('userprofiles', 'users.id', '=', 'userprofiles.user_id', 'left')
            ->where('user_id', $data22)
            ->get();

        $myfvrtprofile = DB::table('likes')->where('type_action', 2)->where('id_stuff', $data)->get('id_user');
        // $data3 = json_decode( json_encode($myfvrtprofile), true);
        //dd($myfvrtprofile);

        $myFvrtProfileID = DB::table('likes')->where('id_user', $data)->where('type_action', 2)->groupBy('id_stuff')->get('id_stuff');
        //dd($myFvrtProfileID);
        $imTheirFvrt = DB::table('likes')->where('id_stuff', $data)->where('type_action', 2)->groupBy('id_user')->get('id_user');
        return view('pages.fvrtpage', compact("data", "datainfo", "imfvrt", "myFvrtProfileID", "imTheirFvrt"));
    }

    public function profileviewpage()

    {

        $data = Auth::user()->id;
        $datainfo = userprofile::all();
        return view('pages.profileviewpage', compact("data", "datainfo"));
    }


    public function showlike($id_staff)
    {



        $like = DB::table('likes')->where('id_stuff', $id_staff)->where('type_action', 1)->count('id_stuff');

        return response()->json($like);

        //dd(request());




    }

    public function showfvrt($id_staff)
    {



        $like = DB::table('likes')->where('id_stuff', $id_staff)->where('type_action', 2)->count('id_stuff');

        return response()->json($like);

        //dd(request());

    }

}
