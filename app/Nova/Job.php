<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Job extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Job';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Title'),
            Trix::make('Job Profile'),
            Trix::make('Skills'),
            Trix::make('Tools'),
            Text::make('Department'),
            Text::make('Minimum Education')->hideFromIndex(),
            Place::make('Location')->onlyCities()->countries(['AF'])->hideFromIndex(),
            Text::make('Required Languages')->hideFromIndex(),
            Number::make('Total Positions')->hideFromIndex(),
            Select::make('Shift')->options([
                'Morning' => 'Morning',
                'Evening' => 'Evening',
            ]),
            Select::make('Gender')->options([
                'Male' => 'Male',
                'Female' => 'Female',
                'Any' => 'Any',
            ])->hideFromIndex(),
            Select::make('Work Type')->options([
                'Part-Time' => 'Part-Time',
                'Full-Time' => 'Full-Time'
            ])->hideFromIndex(),
            Select::make('Experience')->options([
                'Fresh' => 'Fresh',
                '1-2 Years' => '1-2 Years',
                '3-4 Years' => '3-4 Years',
                '5 > Years' => '5 > Years'
            ])->hideFromIndex(),
            Status::make('Status')->loadingWhen(['Open'])->failedWhen(['Closed'])->exceptOnForms(),
            DateTime::make('Date Posted')->onlyOnDetail(),
            DateTime::make('Closing Date')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new Actions\CloseJob,
        ];
    }
}
