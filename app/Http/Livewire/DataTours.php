<?php

namespace App\Http\Livewire;

use App\Exports\ToursExport;
use App\Models\Tour;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class DataTours extends Component
{

    public $count_enequen;
    public $count_milpa;
    public $count_azul;
    public $count_puuc;
    public $data=[];

    public function mount(){
        $this->count_enequen = Tour::where('tour_route','henequen')->count();
        $this->count_milpa = Tour::where('tour_route','milpa')->count();
        $this->count_azul = Tour::where('tour_route','azul')->count();
        $this->count_puuc = Tour::where('tour_route','puuc')->count();
    }

    public function selectTour($tour_route) {
        $this->data = Tour::where('tour_route',$tour_route)->get();
    }

    public function export(){
        return  Excel::download(new ToursExport, 'users_register.'.Carbon::now() .'.xlsx');
    }

    public function render()
    {
        return view('livewire.data-tours');
    }
}
