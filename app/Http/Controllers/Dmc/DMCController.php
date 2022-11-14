<?php
namespace App\Http\Controllers\DMC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Repositories\UserRepository;
use App\Models\Repositories\DmcRepository;
use App\Http\Requests\AddDMCRequest;
use App\Http\Requests\HotelRequest;
use App\Models\Languages;
use Sentinel;

class DMCController extends Controller
{
    protected $model;
    protected $users;

    public function __construct(
        UserRepository $users,
        DmcRepository $dmc
    )
    {
        $this->model                    = $dmc;
        $this->users                    = $users;
    }

    /**
     * Display a View of the resource.
     *
     * @return View
     */
    public function index()
    {
        $user = isUserLoggedIn();
        $language_id = getlanguage()->id;
        $dmcs = $this->model->getDMCByUserID($user['user_id']);
        return view('dmc.dmc',compact('dmcs','language_id'));
    }

    public function add()
    {
        return view('dmc.add-dmc' );
    }

    public function Addprocess(AddDMCRequest $request) {
        $cities = $this->model->getHotelsCities();
        foreach ($cities as $key => $value) {
            $city[] = $value['city'];
        }
        if( in_array($request->city, $city) ) {
             return redirect()->back()->withInput()->withErrors('DMC already added for city '.$request->city);
        }
        $this->model->add( $request );
        return redirect()->route('dmc_dmc')->with('success','DMC Added Successfully!');
    }

    public function getDMCs() {
        $user = isUserLoggedIn();
        $cities = $this->model->getDMCByUserID($user['id']);
    }

    public function edit($id) {
        $dmc = $this->model->getByCol($id);
        return view('dmc.edit-dmc',compact('dmc'));
    }

    public function editProcess(Request $request, $id) {
        $dmc = $this->model->update($request, $id);
        // return view('dmc.edit-dmc',compact('dmc'));
    }
    
}
