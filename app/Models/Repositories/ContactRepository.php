<?php
namespace App\Models\Repositories;
use App\Models\Contact;
use Mail;



class ContactRepository  extends AbstractRepository
{
    public $model;
    protected $table                            = 'contact';
    
    

    /**
     * Creates a new model instance
     * @param App\Models\Contact $page
     *
     * @return void
     */
    public function __construct( Contact $contact ) 
    {
        $this->model   = $contact;
       
    }

    public function getcontactlist(){
        return  $getdetails = Contact::all();
    }

    public function add($data)
    {
        $insert                             = new $this->model;
        $insert->first_name                 = $data->first_name;
        $insert->last_name                  = $data->last_name;
        $insert->email_address              = $data->email_address;
        $insert->phone_number               = $data->phone_number;
        $insert->company                    = $data->company;
        $insert->subject                    = $data->subject;
        $insert->message                    = $data->message;
        $insert->save();

        // if($insert){
        //     Mail::send('emails.emailbase', [      
        //     ],
        //     function ($message) {
        //     $message->to('hamzaahmedansari95@gmail.com')
        //     ->cc('musharibdigitonics@gmail.com')
        //     ->subject('Subject Test');
        //     });
       
        return $insert->id;
    } 
    
}


