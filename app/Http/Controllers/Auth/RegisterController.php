<?php

namespace App\Http\Controllers\Auth;

use App\Handlers\SubscribeUserToNewsletter;
use App\Http\Controllers\Controller;
use App\Registration\Events\UserHasRegistered;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;
use NZTim\Mailchimp\Mailchimp;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    public $mailchimp;
    public $listId = '4fd935ef45';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Mailchimp $mailchimp)
    {
        $this->middleware('guest');
        $this->mailchimp = $mailchimp;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'avatar' => 'mimes:jpeg,jpg,bmp,png,giff',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // dd($data);
        $validator = $this->validator($data);
        if ($validator->passes()) {
            if(isset($data['avatar'])) {
                $avatar = Input::file('avatar');
                $filename = date('Y-m-d-H-i-s')."_".$avatar->getClientOriginalName();
                $fullPath = 'users/'.date('F').date('Y').'/'.$filename;
                $this->avatarUpload($avatar, $filename, $fullPath);

                //Image::make($avatar->getRealPath())->resize(80, 80)->save(public_path('users'.$filename));


                // $path = public_path('users/'.$filename);
                // Image::make($avatar->getRealPath())->resize(80, 80)->save($path);
                // $avatar->getRealPath()->resize(80, 80)->move('users/', $filename);
            }
            // if (isset($data['opt_newsletter']) && isset($data['email'])) {
            //     try {
            //         if(!$this->mailchimp->check($this->listId, $data['email'])) {
            //             $this->mailchimp->subscribe($this->listId, $data['email'], $mergeFields = [], $confirm = false);
            //             return $status ='Email Subscribed successfully';
            //         } else {
            //              return $status ='Error: Email is Already Subscribed';
            //         }
            //     } catch (\Exception $e) {
            //         return redirect()->back()->with('error','Error from MailChimp: ' . $e->getMassage());
            //     }
            // }
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'opt_newsletter' => isset($data['opt_newsletter']) ? 1 : 0,
                'avatar' => isset($data['avatar']) ? $fullPath : config('voyager.user.default_avatar', 'users/default.png'),
                // 'avatar' => isset($data['avatar']) ? 'users/' . $filename : config('voyager.user.default_avatar', 'users/default.png'),
            ]);

            event(new UserHasRegistered($user));
            dispatch(new SubscribeUserToNewsletter($this->mailchimp)); 

            // $user->raise(new UserHasRegistered($user));
            // $this->dispatchEventsFor($user);

            return $user;
            // return Redirect::to('dashboard')
            //         ->with('message', 'Thank you for creating a new account.');
        }

        return Redirect::to('register')
            ->with('message', 'Something went wrong. Please, try again.')
            ->withErrors($validator)
            ->withInput();
    }

    public function avatarUpload($avatar, $filename, $fullPath)
    {
        $fullFilename = null;
        $resizeWidth = 80;
        $resizeHeight = 80;
        // $fullPath = 'users/'.date('F').date('Y').'/'.$filename.'.'.$avatar->getClientOriginalExtension();
        // $fullPath = 'users/'.date('F').date('Y').'/'.$filename;

        // $ext = $avatar->guessClientExtension();

        // if (in_array($ext, ['jpeg', 'jpg', 'png', 'gif'])) {
            $image = Image::make($avatar)
                ->resize($resizeWidth, $resizeHeight, function (Constraint $constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode($avatar->getClientOriginalExtension(), 75);

            // move uploaded file from temp to uploads directory
            if (Storage::disk(config('voyager.storage.disk'))->put($fullPath, (string) $image, 'public')) {
                $status = 'Image successfully uploaded!';
                $fullFilename = $fullPath;
            } else {
                $status = 'Upload Fail: Unknown error occurred!';
            }

            return $status;
        // } else {
        //     $status = 'Upload Fail: Unsupported file format or It is too large to upload!';
        // }
    }
}
