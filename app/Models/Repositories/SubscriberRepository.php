<?php
namespace App\Models\Repositories;
use App\Models\Subscriber;
use Mail;



class SubscriberRepository  extends AbstractRepository
{
    public $model;
    protected $table                            = 'subscribers';



    /**
     * Creates a new model instance
     * @param App\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct( Subscriber $subscriber )
    {
        $this->model   = $subscriber;

    }

    public function getsubscriberlist(){
        return  $getdetails = Subscriber::all();
    }

    public function add($data)
    {
        $insert                             = new $this->model;
        $insert->email                      = $data->email;
        $insert->save();

        return $insert->id;
    }

}


