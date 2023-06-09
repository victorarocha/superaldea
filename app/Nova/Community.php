<?php

namespace App\Nova;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use YieldStudio\NovaGoogleAutocomplete\GoogleAutocomplete;

/**
 * @property mixed $name
 */
class Community extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Community>
     */
    public static $model = \App\Models\Community::class;

    public static $tableStyle = 'tight';
    public static $showColumnBorders = false;
    public static $clickAction = 'default'; // default, select, preview, ignore
    public static $perPageOptions = [50, 100, 150];


    /**
    * Group for the menu.
    **/
    public static $group = 'Communities';


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
     * Add query to the query result of Nova.
     * @param NovaRequest $request
     * @param $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->withCount('areas')->withCount('people')->withCount('homes'); // add number of areas to the query
    }

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
            Text::make('Name'),
            Text::make('Phone')->hideFromIndex(),
            Text::make('hc_id'),
            BelongsToMany::make('People')->searchable(),
            Text::make('Address')->readonly()->onlyOnForms()->hideWhenCreating(),
            GoogleAutocomplete::make('Address')->hideFromIndex(),
            HasMany::make('Areas'),
            HasMany::make('Homes'),
            Number::make('# of Areas','areas_count')->onlyOnIndex()->textAlign('center'),
            Number::make('# of People','people_count')->onlyOnIndex()->textAlign('center'),
            Number::make('# of Homes','homes_count')->onlyOnIndex()->textAlign('center'),

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
        return $this->name;
    }
}
