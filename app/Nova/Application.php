<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\BelongsTo;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Actions\AcceptApplication;
use App\Nova\Actions\RejectApplication;

class Application extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Application';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            Text::make('First Name'),
            Text::make('Last Name'),
            Select::make('Gender')->options([
                'Male' => 'Male',
                'Female' => 'Female',
            ])->hideFromIndex(),
            Select::make('Marital Status')->options([
                'SINGLE' => 'SINGLE',
                'MARRIED' => 'MARRIED',
                'WIDOWED' => 'WIDOWED',
                'SEPARATED' => 'SEPARATED',
                'DIVORCED' => 'DIVORCED',
            ])->hideFromIndex(),
            Date::make('Birth Date')->hideFromIndex(),
            Text::make('Cnic')->hideFromIndex(),
            Text::make('City')->hideFromIndex(),
            Text::make('Address')->hideFromIndex(),
            Text::make('Contact Number')->hideFromIndex(),
            Text::make('Email')->hideFromIndex(),
            Trix::make('About Us'),
            Status::make('Status')->loadingWhen(['Pending'])->failedWhen(['Rejected'])->exceptOnForms(),
            BelongsTo::make('Job'),
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
            new AcceptApplication,
            new RejectApplication
        ];
    }
}
