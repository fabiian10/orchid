<?php

namespace App\Orchid\Resources;

use App\Models\Aspirante;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;

class AspiranteResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Aspirante::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('nombre')
                ->title('Nombre')
                ->placeholder('Ingresa tu nombre'),
            Input::make('apellido')
                ->title('Apellido')
                ->placeholder('Ingresa tu apellido'),
            Input::make('telefono')
                ->title('Teléfono')
                ->placeholder('Ingresa tu teléfono'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('nombre', 'Nombre'),
            TD::make('apellido', 'Apellido'),
            TD::make('telefono', 'Teléfono'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id', 'ID'),
            Sight::make('nombre', 'Nombre'),
            Sight::make('apellido', 'Apellido'),
            Sight::make('telefono', 'Teléfono'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
