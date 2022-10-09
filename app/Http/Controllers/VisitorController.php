<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DB;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function addInfo()
    {
        return view('profile.addinfo');
    }
    public function updateInfo()
    {
        return view('profile.updateinfo');
    }

    public function saveInfo(Request $request)
    {

        $this->validate($request, [
            'state' => ['required', 'string', 'max:255'],

        ]);



        $user = Auth::user();


        if ($request->hasFile('imagePath')) {
            if ($files = $request->file('imagePath')) {


                $s = strtoupper(md5(uniqid($files->getClientOriginalName(), true)));
                $profileImageName =
                    substr($s, 0, 8) . '-' .
                    substr($s, 8, 4) . '-' .
                    substr($s, 12, 4) . '-' .
                    substr($s, 16, 4) . '-' .
                    substr($s, 20) . '.' . $files->getClientOriginalExtension();
                // $photoName=time().uniqid().$files->getClientOriginalName();
                $files->move('userImage/', $profileImageName);
            }


            $oldProfileImage = public_path('userImage/') . $user->userprofile->imagePath;


            if (file_exists($oldProfileImage)) {
                @unlink($oldProfileImage); //delete from storage
                // Storage::delete($file_path); //Or you can do it as well
            }
            $user->userprofile()->update([
                'b_date' => $request->b_date,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'religion' => $request->religion,
                'status' => $request->status,
                'profession' => $request->profession,
                'gender' => $request->gender,
                'school' => $request->school,
                'college' => $request->college,
                'university' => $request->university,
                'subject' => $request->subject,
                'height' => $request->height,
                'phone_number' => $request->phone_number,
                'weight' => $request->weight,
                'blood_group' => $request->blood_group,
                'drink' => $request->drink,
                'smoke' => $request->smoke,
                'place_of_birth' => $request->place_of_birth,
                'annual_income' => $request->annual_income,
                'fathers_occupation' => $request->fathers_occupation,
                'mothers_occupation' => $request->mothers_occupation,
                'no_of_brother' => $request->no_of_brother,
                'no_of_sister' => $request->no_of_sister,
                'p_country' => $request->p_country,
                'p_state' => $request->p_state,
                'p_city' => $request->p_city,
                'p_religion' => $request->p_religion,
                'p_status' => $request->p_status,
                'p_profession' => $request->p_profession,
                'p_gender' => $request->p_gender,
                'from_age' => $request->from_age,
                'to_age' => $request->to_age,
                'comment' => $request->comment,
                'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
                'imagePath' => $profileImageName
            ]);
        } else {
            $profileImageName = $user->userprofile->imagePath;
            $user->userprofile()->update([
                'b_date' => $request->b_date,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'religion' => $request->religion,
                'status' => $request->status,
                'profession' => $request->profession,
                'gender' => $request->gender,
                'school' => $request->school,
                'college' => $request->college,
                'university' => $request->university,
                'subject' => $request->subject,
                'height' => $request->height,
                'phone_number' => $request->phone_number,
                'weight' => $request->weight,
                'blood_group' => $request->blood_group,
                'drink' => $request->drink,
                'smoke' => $request->smoke,
                'place_of_birth' => $request->place_of_birth,
                'annual_income' => $request->annual_income,
                'fathers_occupation' => $request->fathers_occupation,
                'mothers_occupation' => $request->mothers_occupation,
                'no_of_brother' => $request->no_of_brother,
                'no_of_sister' => $request->no_of_sister,
                'p_country' => $request->p_country,
                'p_state' => $request->p_state,
                'p_city' => $request->p_city,
                'p_religion' => $request->p_religion,
                'p_status' => $request->p_status,
                'p_profession' => $request->p_profession,
                'p_gender' => $request->p_gender,
                'from_age' => $request->from_age,
                'to_age' => $request->to_age,
                'comment' => $request->comment,
                'age' => Carbon::parse($request->b_date)->diff(Carbon::now())->y,
                'imagePath' => $profileImageName
            ]);
            // dd("ok");
        }

        return back()->with('success', 'We have received your data.');
    }



    public function info()
    {

        $data = Auth::user()->id;
        $datainfo = userprofile::all();
        //$datainfo=  $data->userprofile();


        return view('profile.information', compact("data", "datainfo"));
    }

    public function setting()
    {
        return view('profile.setting');
    }
}
