<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use YieldStudio\NovaGoogleAutocomplete\GoogleAutocomplete;
use ZiffMedia\NovaSelectPlus\SelectPlus;

class Home extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Home>
     */
    public static $model = \App\Models\Home::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /*
    * Group for the menu.
    */
    public static $group = 'Communities';

    public static $tableStyle = 'tight';
    public static $showColumnBorders = false;
    public static $clickAction = 'default'; // default, select, preview, ignore
    public static $perPageOptions = [50, 100, 150];

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')
                ->required(),
            Text::make('Address')
                ->readonly()
                ->onlyOnForms()
                ->hideWhenCreating(),
            GoogleAutocomplete::make('Address')
                ->hideFromIndex(),
            BelongsTo::make('Home Type'),
            BelongsTo::make('Community'),
            SelectPlus::make('People')
                ->label(fn($person) => $person->name." ".$person->lastname),
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
}
