<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mainside extends Component
{
    public $selected_tab_a, $selected_tab_b, $selected_tab_c, $active_layout;

    public function mount()
    {
        $this->selected_tab_a = $this->selected_tab_b = $this->selected_tab_c = "#fff";
        $this->change_tab(1);
    }


    public function change_tab($num)
    {
        $this->selected_tab_a = $this->selected_tab_b = $this->selected_tab_c = "#fff";
        if($num == 1){
            $this->selected_tab_a = "skyblue";
        }elseif($num == 2){
            $this->selected_tab_b = "skyblue";
        }elseif($num == 3){
            $this->selected_tab_c = "skyblue";
        }
        $this->active_layout = $num;
    }
    public function render()
    {

        return view('livewire.mainside');
    }
}
