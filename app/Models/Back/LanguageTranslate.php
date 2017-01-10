<?php

namespace App\Models\Back;

use Eloquent as Model;

/**
 * Class LanguageTranslate
 *
 * @package App\Models\Back
 * @version November 23, 2016, 10:42 pm UTC
 * @property integer $id
 * @property \App\Models\Back\Language $language
 * @property string $translation
 * @property-read \App\Models\Back\LanguageSource $languageSource
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\LanguageTranslate whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\LanguageTranslate whereLanguage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Back\LanguageTranslate whereTranslation($value)
 * @mixin \Eloquent
 */
class LanguageTranslate extends Model
{

    public $table = 'language_translate';
    public $timestamps = false;
    protected $primaryKey = ['id', 'language'];
    public $incrementing = false;



    public $fillable = [
        'id',
        'language',
        'translation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language' => 'string',
        'translation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function languageSource()
    {
        return $this->belongsTo(\App\Models\Back\LanguageSource::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function language()
    {
        return $this->belongsTo(\App\Models\Back\Language::class);
    }


    /**
     * Set the keys for a save update query.
     * This is a fix for tables with composite keys
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(\Illuminate\Database\Eloquent\Builder $query) {
        if (is_array($this->primaryKey)) {
            foreach ($this->primaryKey as $pk) {
                $query->where($pk, '=', $this->original[$pk]);
            }
            return $query;
        }else{
            return parent::setKeysForSaveQuery($query);
        }
    }
}
