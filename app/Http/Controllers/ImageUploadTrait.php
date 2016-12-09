<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\File;

trait ImageUploadTrait {


    /**
     * @param array $attributes
     * @throws \Exception
     */
    public function imageUpload(array $attributes)
    {

        //Check if we have all attrs in model
        foreach($attributes as $attr) {
            if (!$this->hasAttribute($attr)) {
                throw new \Exception(class_basename($this).' has no attribute '.$attr);
            }
        }

        $dir = strtolower($this->getMediaPath());
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        foreach($attributes as $attr) {
            if(!Input::hasFile($attr)) return;
            $file = Input::file($attr);
            $name = sprintf('%s.%s', uniqid(), $file->getClientOriginalExtension());
            $file->move($dir, $name);
            
            $this->$attr = $this->getMediaUrl() . $name;
        }

    }




    public function multiUpload(array $attributes)
    {
//        dd(Input::file('path'));
//        dd(Input::allFiles());

        //Check if we have all attrs in model
        foreach($attributes as $attr) {
            if (!$this->hasAttribute($attr)) {
                throw new \Exception(class_basename($this).' has no attribute '.$attr);
            }
        }

        $dir = strtolower($this->getMediaPath());
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }


        $arr = [];

        foreach($attributes as $attr) {
            if(!Input::hasFile($attr)) return;
            $files = Input::file($attr);
            foreach($files as $file) {
//                dd($file);
//                $model = $this->model->newInstance($attributes);
//                dd($model);

//                if(!Input::hasFile($attr)) return;
//                $file = Input::file($attr);
                $name = sprintf('%s.%s', uniqid(), $file->getClientOriginalExtension());
                $file->move($dir, $name);
//
//                $this->$attr = $this->getMediaUrl() . $name;

                $arr[] = [$attr => $this->getMediaUrl() . $name];
            }
        }

        return $arr;
    }


    public function getMediaPath()
    {
        return base_path() . '/public/media/'.strtolower(class_basename($this)).'/';//or $this::tableName
    }

    public function getMediaUrl()
    {
        return 'media/'.strtolower(class_basename($this)).'/';
    }

    public function hasAttribute($attr)
    {

        return \Schema::hasColumn($this->getTable(), $attr);
        return array_key_exists($attr, $this->attributes);
    }

    public function deleteImage($attr)
    {
        //Check if we have all attrs in model
        if (!$this->hasAttribute($attr)) {
            throw new \Exception(class_basename($this).' has no attribute '.$attr);
        }

        if(file_exists(base_path().'/public/'.$this->$attr) && !is_dir(base_path().'/public/'.$this->$attr)) {
            unlink(base_path().'/public/'.$this->$attr);
        }

    }


    protected static function boot() {
        parent::boot();
        
        static::deleting(function($model) { // before delete() method call this
            //check if has ->images
            if($model->images) {
                foreach($model->images()->get() as $image) {
                    $image->delete();
                }
            }
            foreach($model::$rules as $key => $rule) {
                if(strpos($rule, 'image') !== false) {
                    if(file_exists(base_path().'/public/'.$model->$key) && !is_dir(base_path().'/public/'.$model->$key)) {
                        unlink(base_path().'/public/'.$model->$key);
                    }
                }
            }
        });
    }

}