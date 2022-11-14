<?php
namespace App\Models\Repositories;
use App\Models\Package;
use App\Models\PackageDescription;
use App\Models\Languages;



class PackageRepository extends AbstractRepository
{
    public $model;
    protected $table                            = 'packages';
    protected $description_table                = 'packages_description';
    protected $foriegn_key                      = 'package_id';
    protected $primary_key                      = 'id';

    /**
     * Creates a new model instance
     * @param App\Models\Package $Package
     *
     * @return void
     */
    public function __construct(
        Package $package,
        PackageDescription $packageDescription

    ) {
        $this->model                                = $package;
        $this->description_model                    = $packageDescription;

    }

    public function getPackageById( $id=0 ) {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        $package_description = $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->table.'.id',$id)
            ->select(['packages.*', 'packages_description.*'])->first();

        return $package_description;
    }

    public function getDescriptionById($id,$language_id)
    {
        //$language_id = getlanguage()->id;
        $package_description = PackageDescription::where('package_id',$id)
            ->where('language_id',$language_id)
            ->first();
        // dd($blog_description->toArray());
        return $package_description;
    }

    public function getPackageList()
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            ->select(['packages.id','packages.type', 'packages.status','packages.created_at', 'packages_description.title', 'packages_description.short_title','packages.price','packages_description.details']);
    }


    public function add($data)
    {
        $language               = getlanguage();
        $language_id            = $language->id;
        $user                   = isUserLoggedIn();
        // dd($user);
        // $is_feature = ($data->{'is_feature-'.$language->id}) ? $data->{'is_feature-'.$language->id} : 0;

        $insert                             = new $this->model;
        $insert->price                      = $data->price;
        $insert->week_deal_posting          = $data->week_deal_posting;
        $insert->email_blast                = $data->email_blast;
        $insert->promo_article              = $data->promo_article;
        $insert->landing_page_posting       = $data->landing_page_posting;
        $insert->type                       = $data->type;
        $insert->status                     = $data->status;
        $insert->created_by                 = ($user) ? $user['user_id'] : 0;
        $insert->save();


       $languages = Languages::where('status','Active')->get();


        foreach($languages as $language)
        {
            $package_id                             = $insert->id;
            $title                                  = $data->{'title-'.$language->id};
            $short_title                            = $data->{'short_title-'.$language->id};
            $details                                = $data->{'details-'.$language->id};

            $insert_description                     = new $this->description_model;
            $insert_description->package_id         = $package_id;
            $insert_description->title              = $title;
            $insert_description->short_title        = $short_title;
            $insert_description->language_id        = $language->id;
            $insert_description->details            = $details;
            $insert_description->save();
        }

        return $package_id;
    }

    public function update($data,$package_id)
    {
        $languages = Languages::where('status','Active')->get();

        $insert                             = $this->model::where('id',$package_id)->first();
        $insert->price                      = $data->price;
        $insert->week_deal_posting          = $data->week_deal_posting;
        $insert->email_blast                = $data->email_blast;
        $insert->promo_article              = $data->promo_article;
        $insert->landing_page_posting       = $data->landing_page_posting;
        $insert->type                       = $data->type;
        $insert->status                     = $data->status;
        $insert->save();

        foreach($languages as $language)
        {

            $language_id = $language->id;

            $insert_description                     = $this->description_model::where('package_id',$package_id)->where('language_id',$language_id)->first();

            $insert_description->package_id         = $package_id;
            $insert_description->language_id        = $language_id;

            $title                                  = $data->{'title-'.$language->id};
            $short_title                            = $data->{'short_title-'.$language->id};
            $details                                = $data->{'details-'.$language->id};

            $insert_description->short_title         = $short_title;
            $insert_description->title               = $title;
            $insert_description->details             = $details;
            $insert_description->save();

        }

        return $package_id;
    }

    public function remove($id)
    {
        $delete         = $this->model::where($this->primary_key,$id)->delete();
        $delete_desc    = $this->description_model::where($this->foriegn_key,$id)->delete();

        if($delete && $delete_desc)
            return TRUE;
        else
            return FALSE;
    }


    public function getPackageListforpage($type='Hotel')
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            ->where($this->table.'.type',$type)
            ->select(['packages.id','packages.type', 'packages.status','packages.created_at', 'packages_description.title', 'packages_description.short_title','packages.price','packages_description.details'])->get();
    }


    public function getPackageListByType($type)
    {
        $language_id = getlanguage()->id;

        $joinParm   = $this->description_table.'.'.$this->foriegn_key;
        $joinParm2  = $this->table.'.'.$this->primary_key;

        return $this->model::join(
            $this->description_table,
            $joinParm,
            '=',
            $joinParm2
        )
            ->where($this->description_table.'.language_id',$language_id)
            // ->where($this->table.'.type',$language_id)
            ->where($this->table.'.type',$type)
            ->select(['packages.id','packages.type', 'packages.status','packages.created_at', 'packages_description.title', 'packages_description.short_title','packages.price','packages_description.details']);
    }

}
