<?php

namespace App\Livewire;

use App\Models\Weeding;
use App\Models\WeedingInvitation;
use Livewire\Component;
use Illuminate\Support\Str;

class MessageInvitation extends Component
{
    public $data, $is_created, $code, $name, $weeding, $message, $invitation;

    public function mount($code = null, $name = null)
    {
        $this->code = $code;
        $this->weeding = Weeding::where('code',$code)->first();
        $this->data = WeedingInvitation::where('weeding_id',$this->weeding->id)->whereNotNull('message')->orderBy('updated_at','desc')->get();
        $this->is_created = false;
        $slug = Str::slug($name);
        $this->invitation = WeedingInvitation::where('weeding_id',$this->weeding->id)->where('slug',$slug)->first();
        if(!$this->invitation){
            $this->invitation = WeedingInvitation::create([
                'weeding_id' => $this->weeding->id,
                'slug' => $slug,
                'name' => str_replace('-',' ',$slug)
            ]);
        }
        $this->message = $this->invitation->message;
    }

    public function render()
    {
        return view('livewire.message-invitation');
    }

    public function write()
    {
        $this->is_created = !$this->is_created;
    }

    public function send()
    {
        $this->invitation->update([
            'message' => $this->message
        ]);

        $this->data = WeedingInvitation::where('weeding_id',$this->weeding->id)->whereNotNull('message')->orderBy('updated_at','desc')->get();
        $this->is_created = false;
    }
}
