<?php
namespace App\Http\Controllers\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Repositories\HotelRepository;
use App\Models\Repositories\AmenityRepository;
use App\Models\Repositories\FacilityRepository;
use App\Models\Repositories\ServiceRepository;
use App\Models\Repositories\RecreationalActivityRepository;
use App\Models\Repositories\VenueAccessRepository;
use App\Models\Repositories\EquipmentRepository;
use App\Models\Repositories\RoomFacillityRepository;
use App\Models\Repositories\TagRepository;
use App\Models\Repositories\UserRepository;
use App\Http\Requests\HotelRequest;
use Sentinel;

class HotelController extends Controller
{
    protected $model;
    protected $amenities;
    protected $facilities;
    protected $services;
    protected $recreational_activities;
    protected $venue_accesses;
    protected $equipments;
    protected $room_facilities;
    protected $tags;
    protected $users;

    public function __construct(
        HotelRepository $hotel,
        AmenityRepository $amenities,
        FacilityRepository $facilities,
        ServiceRepository $services,
        RecreationalActivityRepository $recreational_activities,
        VenueAccessRepository $venue_accesses,
        EquipmentRepository $equipments,
        RoomFacillityRepository $room_facilities,
        TagRepository $tags,
        UserRepository $users
    )
    {
        $this->model                    = $hotel;
        $this->amenities                = $amenities;
        $this->facilities               = $facilities;
        $this->services                 = $services;
        $this->recreational_activities  = $recreational_activities;
        $this->venue_accesses           = $venue_accesses;
        $this->equipments               = $equipments;
        $this->room_facilities          = $room_facilities;
        $this->tags                     = $tags;
        $this->users                    = $users;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        /*
        $amenities                  = $this->amenities->getList();
        $facilities                 = $this->facilities->getList();
        $services                   = $this->services->getList();
        $recreational_activities    = $this->recreational_activities->getList();
        $venue_accesses             = $this->venue_accesses->getList();
        $equipments                 = $this->equipments->getList();
        $room_facilities            = $this->room_facilities->getList();
        return view('user.add-hotel',compact('amenities','facilities','services','recreational_activities','venue_accesses','equipments','room_facilities');
        */
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function add()
    {
        $role = Sentinel::getUser()->roles()->get()->first()->slug;

        $get_role       = Sentinel::findRoleByName('Hotel');
        $hotel_users    = $get_role->users;

        $amenities                  = $this->amenities->getList()->get();
        $facilities                 = $this->facilities->getList()->get();
        $services                   = $this->services->getList()->get();
        $recreational_activities    = $this->recreational_activities->getList()->get();
        $venue_accesses             = $this->venue_accesses->getList()->get();
        $equipments                 = $this->equipments->getList()->get();
        $room_facilities            = $this->room_facilities->getList()->get();
        $tags                       = $this->tags->getList()->get();

        if($role != 'hotel')
            return view('user.add-hotel',compact('amenities','facilities','services','recreational_activities','venue_accesses','equipments','room_facilities','tags','hotel_users') );
        else
            return view('hotel.add-hotel',compact('amenities','facilities','services','recreational_activities','venue_accesses','equipments','room_facilities','tags') );
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function addProcess(HotelRequest $request)
    {
        $user                       = isUserLoggedIn();
        $created_by                 = ($user) ? $user['user_id'] : 1;
        /*$allowedfileExtension       = ['jpg','png','bmp'];
        $files                      = $request->file('hotel_gallery');*/
        $role                       = Sentinel::getUser()->roles()->get()->first()->slug;

        if($role == 'admin')
            $user_id = $request->user;
        else
            $user_id = $created_by;

        $get_user = $this->users->model::find($user_id);

        if($get_user->HotelsLimit() < 1)
        {
            if($role == 'admin')
                $error_msg = 'Hotels limit exceed for selected user!';
            else
                $error_msg = 'Hotels limit exceed, Upgrade your package to add more Hotels!';

            return redirect()->back()->withInput()->withErrors($error_msg);
        }

        /*foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);


            if($check == false)
            {
                return redirect()->back()->withInput()->withErrors('Hotel Gallery Files must be image files.');
            }
        }*/

        $add_data = $this->model->add($request);

        if($add_data)
        {

            $get_user->number_hotels = $get_user->number_hotels - 1;
            $get_user->save();

            return redirect()->route('manage_hotels')->with('success','Record has been updated successfully!');
        }
        else
        {
            return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function edit($id)
    {
        $user           = isUserLoggedIn();
        $created_by     = ($user) ? $user['user_id'] : 1;
        $hotel_repo     = $this->model;
        $hotel          = $hotel_repo->getByCol( $id );

        $role = Sentinel::getUser()->roles()->get()->first()->slug;

        $get_role       = Sentinel::findRoleByName('Hotel');
        $hotel_users    = $get_role->users;


        if( ($hotel->created_by == $created_by) || $role == 'admin' ) // add or condition if current user is admin so that admin can manage the hotels too.
        {
            $amenities                  = $this->amenities->getList()->get();
            $facilities                 = $this->facilities->getList()->get();
            $services                   = $this->services->getList()->get();
            $recreational_activities    = $this->recreational_activities->getList()->get();
            $venue_accesses             = $this->venue_accesses->getList()->get();
            $equipments                 = $this->equipments->getList()->get();
            $room_facilities            = $this->room_facilities->getList()->get();
            $tags                       = $this->tags->getList()->get();

            if($role != 'hotel')
                return view('user.edit-hotel',compact('hotel' ,'hotel_repo', 'amenities','facilities','services','recreational_activities','venue_accesses','equipments','room_facilities','tags','hotel_users') );
            else
                return view('hotel.edit-hotel',compact('hotel' ,'hotel_repo', 'amenities','facilities','services','recreational_activities','venue_accesses','equipments','room_facilities','tags') );
        }
        else
            return page_404();
    }

    /**
     * Process the Form Data.
     *
     * @return redirect
     */
    public function editProcess(HotelRequest $request,$id)
    {
        $user           = isUserLoggedIn();
        $created_by     = ($user) ? $user['user_id'] : 1;
        $hotel          = $this->model->getByCol( $id );
        $role           = Sentinel::getUser()->roles()->get()->first()->slug;

        $get_role       = Sentinel::findRoleByName('Hotel');
        $hotel_users    = $get_role->users;

        if($hotel)
        {
            if( ($hotel->created_by == $created_by) || $role == 'admin' ) // add or condition if current user is admin so that admin can manage the hotels too.
            {
                $edit = $this->model->update($request,$id);
                if($edit)
                {
                    return redirect()->route('manage_hotels')->with('success','Record has been updated successfully!');
                }
                else
                {
                    return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
                }
            }
            else
            {
                return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
            }

        }
        else
        {
            return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
        }
    }

    public function details($slug) {
        $language_id = getlanguage()->id;
        $details = $this->model->hotelDetails($slug);
        if(empty($details))
            abort(404);
        return view('frontend.template.hotel-detail',compact('details','language_id'));
    }

    public function uploadHotelGallery(Request $request,$id=0,$type='')
    {
        if($file = $request->file('file'))
        {
            $fileName        = $file->getClientOriginalName();
            $extension       = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = '/uploads/hotels/temp/';

            if($id != 0)
            {
                $hotel_dir = public_path() . '/uploads/hotels/' . $id;

                if (!file_exists($hotel_dir)) {
                    mkdir($hotel_dir, 0777, true);
                }

                $folderName      = '/uploads/hotels/' . $id . '/';
            }

            $destinationPath = public_path() . $folderName;

            if($request->floor_plans)
                $safeName        = $fileName;
            else
                $safeName        = Str::random(10).'.'.$extension;//$fileName;

            $file->move($destinationPath, $safeName);

            if($id != 0)
            {
                if($type == 'gallery')
                {
                    $gallery              = new $this->model->hotel_gallery_model;//::where('hotel_id',$id)->where('file',$request->file_name)->delete();
                    $gallery->hotel_id    =  $id;
                    $gallery->file        =  $safeName;
                    $gallery->type        =  'image';
                    $gallery->save();
                }

                if($type == 'floor_plans')
                {
                    $floor_plan             = new $this->model->meeting_space_floor_plan_model;//::where('hotel_id',$id)->where('file',$request->file_name)->delete();
                    $floor_plan->hotel_id   = $id;
                    $floor_plan->file       = $safeName;
                    $floor_plan->save();
                }
            }

            $data  = array(
                'file_name' =>  $safeName,
                'file_path' =>  asset($folderName.$safeName)
            );

            echo json_encode($data);
        }
    }

    public function removeHotelFiles(Request $request,$id=0,$type='')
    {
        if($request->file_name)
        {
            $folderName      = '/uploads/hotels/temp/';

            if($id != 0)
            {
                $folderName      = '/uploads/hotels/'.$id.'/';

                if($type == 'gallery')
                {
                    $this->model->hotel_gallery_model::where('hotel_id',$id)->where('file',$request->file_name)->delete();
                }

                if($type == 'floor_plans')
                {
                    $this->model->meeting_space_floor_plan_model::where('hotel_id',$id)->where('file',$request->file_name)->delete();
                }

                if($type == 'catering')
                {
                    $this->model->model::where('id',$id)->where('catering_service_image',$request->file_name)->update([
                        'catering_service_image'    =>  NULL
                    ]);
                }

                if($type == 'guest_room')
                {
                    $this->model->hotel_guest_room_detail_model::where('id',$id)->where('image',$request->file_name)->update([
                        'image'    =>  NULL
                    ]);
                }

                if($type == 'restaurant_bar')
                {
                    $this->model->resturant_bar_model::where('id',$id)->where('image',$request->file_name)->update([
                        'image'    =>  NULL
                    ]);
                }
            }

            $destinationPath = public_path() . $folderName;
            $file_path       = $destinationPath . $request->file_name;
            unlink($file_path);
            echo json_encode('done');
        }
    }

    public function HotelsList() {

        $user = Sentinel::getUser();
        $role = $user->roles()->get()->first()->slug;

        if($role != 'hotel')
            $hotels = $this->model->getAllhotels();
        else
            $hotels = $this->model->getAllhotels($user->id);

        if($role != 'hotel')
            return view('user.manage-hotels', compact('hotels'));
        else
            return view('hotel.manage-hotels', compact('hotels'));
    }

    public function delete($id)
    {
        $user           = Sentinel::getUser();
        $role           = $user->roles()->get()->first()->slug;
        $hotel          = $this->model->getByCol( $id );

        if($hotel)
        {
            if($role == 'admin')
            {
                $delete = $this->model->remove($id);
                if($delete)
                    return redirect()->route('manage_hotels')->with('success','Record has been deleted successfully!');
                else
                    return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
            }
            else
            {
                return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
            }
        }
        else
        {
            return redirect()->back()->withInput()->with('error','Ops Something went wrong!');
        }
    }
}
