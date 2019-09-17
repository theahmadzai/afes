<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\MorphOne;
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
     * The Single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'first_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'first_name', 'last_name', 'email'
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

            Text::make('First Name')->rules('required'),

            Text::make('Last Name')->rules('required'),

            Select::make('Gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ])
                ->rules('required')
                ->hideFromIndex(),

            Select::make('Marital Status')
                ->options([
                    'Single' => 'Single',
                    'Married' => 'Married',
                    'Widowed' => 'Widowed',
                    'Separated' => 'Separated',
                    'Divorced' => 'Divorced',
                ])
                ->rules('required')
                ->hideFromIndex(),

            Date::make('Birth Date')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Nid')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('City')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Address')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Contact Number')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Email')
                ->rules('required')
                ->hideFromIndex(),

            File::make('Resume', 'file.resume'),

            Trix::make('About Us'),

            Status::make('Status')->loadingWhen(['Pending'])->failedWhen(['Rejected'])->exceptOnForms(),

            BelongsTo::make('Job'),

            MorphOne::make('File'),
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
