<?php

namespace App\Http\Livewire\Cars;

use Livewire\Component;
use App\Models\Car;
class Delete extends Component
{

    public $carId;
    public function getCarProperty() {
        return Car::select('id', 'car_name', 'car_brand', 'price', 'color')
            ->find($this->carId);
    }

    public function delete() {
        $this->car->delete();

        return redirect('/car')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/car');
    }
    public function render()
    {
        return view('livewire.cars.delete');
    }
}
