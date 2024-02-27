<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use App\Enums\Diet;
use App\Models\Dish;
use Illuminate\Support\Facades\DB;

final class ProductTable extends PowerGridComponent
{

    public static $comparison = 'comparison';
    #[On('bulkDelete.{tableName}')]
    public function bulkDelete(): void
    {
        $selectedRow = count($this->checkboxValues);
        if($selectedRow >=2 && $selectedRow <=4)
        {
            $par = [];
            for ($i=1; $i <= count($this->checkboxValues) ; $i++) { 
                $par['product_'.$i] = $this->checkboxValues[$i-1];
            }
            $url = self::$comparison . "?" . http_build_query($par);
            $this->js('window.location.replace(\''.$url.'\')');
        }
        else
        {
            $this->js('alert.pgBulkActions.get(\'Not rnough\')');
        }
    }


    public function editProduct(array $data): void
    {
        dd('Jerry');
        dd('You are editing', $data);
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            // Button::make('comparison')
            //     ->slot('Comparison: '),
            //     // ->id()
            //     // ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
            //     // ->dispatch('edit', ['rowId' => $row->id])

            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Product::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('sku')
            ->add('product_name')

           /** Example of custom column using a closure **/
            ->add('product_name_lower', fn (Product $model) => strtolower(e($model->product_name)))

            ->add('weight')
            ->add('point_1')
            ->add('point_2')
            ->add('point_3')
            ->add('image')
            ->add('colour')
            ->add('material')
            ->add('range')
            ->add('size')
            ->add('type')
            ->add('overn_safe')
            ->add('dishwasher_safe')
            ->add('wash_by_hand')
            ->add('guarantee_period')
            ->add('proce')
            ->add('stock');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Sku', 'sku'),
            Column::make('Product name', 'product_name')
                ->sortable()
                ->searchable(),

            Column::make('Weight', 'weight'),
            Column::make('Point 1', 'point_1')
                ->sortable()
                ->searchable(),

            Column::make('Point 2', 'point_2')
                ->sortable()
                ->searchable(),

            Column::make('Point 3', 'point_3')
                ->sortable()
                ->searchable(),

            Column::make('Image', 'image')
                ->sortable()
                ->searchable(),

            Column::make('Colour', 'colour')
                ->sortable()
                ->searchable(),

            Column::make('Material', 'material')
                ->sortable()
                ->searchable(),

            Column::make('Range', 'range')
                ->sortable()
                ->searchable(),

            Column::make('Size', 'size')
                ->sortable()
                ->searchable(),

            Column::make('Type', 'type')
                ->sortable()
                ->searchable(),

            Column::make('Overn safe', 'overn_safe'),

            Column::make('Dishwasher safe', 'dishwasher_safe'),

            Column::make('Wash by hand', 'wash_by_hand'),

            Column::make('Guarantee period', 'guarantee_period'),
            Column::make('Proce', 'proce'),
            Column::make('Stock', 'stock')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('product_name')->operators(['contains']),
            Filter::inputText('point_1')->operators(['contains']),
            Filter::inputText('point_2')->operators(['contains']),
            Filter::inputText('point_3')->operators(['contains']),
            Filter::inputText('image')->operators(['contains']),
            Filter::inputText('colour')->operators(['contains']),
            Filter::inputText('material')->operators(['contains']),
            Filter::inputText('range')->operators(['contains']),
            Filter::inputText('size')->operators(['contains']),
            Filter::inputText('type')->operators(['contains']),
            Filter::boolean('overn_safe'),
            Filter::boolean('dishwasher_safe'),
            Filter::boolean('wash_by_hand'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }
    public function header(): array
    {
        return [
            Button::add('bulk-delete')
                ->slot(__('Bulk delete (<span x-text="window.pgBulkActions.count(\''.$this->tableName.'\')"></span>)'))
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('bulkDelete.'.$this->tableName, []),
        ];
    }
    // public function actions(Product $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit: '.$row->id)
    //             ->id()
    //             ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
    //             ->dispatch('edit', ['rowId' => $row->id])
    //     ];
    // }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
