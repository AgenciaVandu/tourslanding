<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;

class DataTours extends Component
{

    public $count_enequen;
    public $count_milpa;
    public $count_azul;
    public $count_puuc;
    public $data=[];

    public function mount(){
        $this->count_enequen = Tour::where('tour_route','enequen')->count();
        $this->count_milpa = Tour::where('tour_route','milpa')->count();
        $this->count_azul = Tour::where('tour_route','azul')->count();
        $this->count_puuc = Tour::where('tour_route','puuc')->count();
    }

    public function selectTour($tour_route) {
        $this->data = Tour::where('tour_route',$tour_route)->get();
    }

    public function render()
    {
        return view('livewire.data-tours');
    }
}
