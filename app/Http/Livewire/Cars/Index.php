<?php

namespace App\Http\Livewire\Cars;

use Livewire\Component;
use App\Models\Car;

class Index extends Component
{

    public function loadCars() {
        $cars = Car::orderBy('car_name')->get();

        return compact('cars');
    }

    public function render()
    {
        return view('livewire.cars.index', $this->loadCars());
    }
}
