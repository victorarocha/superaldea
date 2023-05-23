<?php

namespace App\Nova;

use Ctessier\NovaAdvancedImageField\AdvancedImage;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use YieldStudio\NovaGoogleAutocomplete\AddressMetadata;
use YieldStudio\NovaGoogleAutocomplete\GoogleAutocomplete;
use Laravel\Nova\Fields\Image;
use ZiffMedia\NovaSelectPlus\SelectPlus;

/**
 * @property mixed $name
 * @property mixed $lastname
 */
class Person extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Person>
     */
    public static $model = \App\Models\Person::class;


    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'lastname'
    ];

    /**
     * Change the style of the index table.
     */
    public static $tableStyle = 'tight';
    public static $showColumnBorders = false;
    public static $clickAction = 'default'; // default, select, preview, ignore
    public static $perPageOptions = [50, 100, 150];


    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     * @throws \Exception
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')->showOnPreview()->sortable(),
            Text::make('Lastname')->showOnPreview()->sortable(),
            //Avatar::make('Photo', 'photo_path')->showOnPreview(),
            AdvancedImage::make('Photo', 'photo_path')->croppable(1)->quality(100)->rounded(),
            Email::make('Email')->showOnPreview(),
            Date::make('Birthdate'),
            Text::make('hc_id')->showOnPreview()
                ->hideFromIndex()
                ->help('ID en HikCentral'),
            Text::make('Address')->readonly()->onlyOnForms()->hideWhenCreating(),
            // Autocomplete field
            GoogleAutocomplete::make('Address')
                ->countries('MX')
                ->hideFromIndex()
                ->showOnPreview(),

            SelectPlus::make('Communities')


        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

    public function title()
    {
        return $this->name." ".$this->lastname;
    }
}
