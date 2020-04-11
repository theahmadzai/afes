<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Image as ImageField;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\MorphOne;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Intervention\Image\Facades\Image as InterventionImage;
use Storage;

class Image extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Image';

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

            ImageField::make('Image', 'filename')->store(function(Request $request, $model) {

                $filename = basename(Storage::disk('public')->putFile('images', $request->file('filename')));

                $thumbnail = InterventionImage::make($request->file('filename'))->fit(200, 200, function ($constraint) {
                    $constraint->upsize();
                    $constraint->aspectRatio();
                })->encode();

                Storage::disk('public')->put('thumbnails/' . $filename, $thumbnail);

                return [
                    'filename' => $filename,
                ];
            })->preview(function($filename) {
                return Storage::disk('public')->url('images/' . $filename);
            })->thumbnail(function($filename) {
                return Storage::disk('public')->url('thumbnails/' . $filename);
            }),

            MorphTo::make('For', 'imageable')->types([
                Post::class,
            ])->searchable()->sortable(),
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
        return [];
    }
}
