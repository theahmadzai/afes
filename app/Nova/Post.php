<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\MorphToMany;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Actions\Publish;
use App\Nova\Filters\PublishedPosts;
use App\Nova\Filters\SlidePosts;
use Storage;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';

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
        'id', 'title',
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

            Avatar::make('Image', 'image.filename')->preview(function($filename) {
                return Storage::disk('public')->url('images/' . $filename);
            })->thumbnail(function($filename) {
                return Storage::disk('public')->url('thumbnails/' . $filename);
            }),

            Text::make('Title')->rules('required'),

            Trix::make('Body'),

            Boolean::make('Slide'),

            Boolean::make('Is Published'),

            DateTime::make('Published At')->onlyOnDetail(),

            BelongsTo::make('User')->hideWhenCreating()->hideWhenUpdating(),

            MorphOne::make('Image'),

            MorphToMany::make('Tags'),
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
        return [
            new PublishedPosts,
            new SlidePosts,
        ];
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
            new Publish,
        ];
    }
}
