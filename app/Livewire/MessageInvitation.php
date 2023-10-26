<?php

namespace App\Livewire;

use App\Models\Weeding;
use App\Models\WeedingInvitation;
use Livewire\Component;
use Illuminate\Support\Str;

class MessageInvitation extends Component
{
    public $data, $is_created, $code, $name, $weeding, $message, $invitation, $no_name;

    protected $rules = [
        'no_name' => 'required',
        'message' => 'required',
    ];

    public function mount($code = null, $name = null)
    {
        $this->code = $code;
        $this->weeding = Weeding::where('code',$code)->first();
        $this->data = WeedingInvitation::where('weeding_id',$this->weeding->id)->whereNotNull('message')->orderBy('updated_at','desc')->get();
        $this->is_created = false;
        $this->name = $name;
        $slug = Str::slug(strtolower($name));
        $this->invitation = WeedingInvitation::where('weeding_id',$this->weeding->id)->where('slug',$slug)->first();
        $this->message = $this->invitation->message ?? '';
    }

    public function render()
    {
        return view('livewire.message-invitation');
    }

    public function write()
    {
        $this->is_created = !$this->is_created;
        $this->data = WeedingInvitation::where('weeding_id',$this->weeding->id)->whereNotNull('message')->orderBy('updated_at','desc')->get();
    }

    public function send()
    {
        if(!$this->invitation){
            if($this->no_name){
                $slug = Str::slug(strtolower($this->no_name));
                $this->invitation = WeedingInvitation::create([
                    'weeding_id' => $this->weeding->id,
                    'slug' => $slug,
                    'name' => $this->no_name,
                    'message' => $this->message
                ]);
                $this->is_created = false;
            }else{
                session()->flash('no_name', 'wajib diisi!');
                $this->is_created = true;
            }
        }else{
            $this->invitation->update([
                'message' => $this->message
            ]);
            $this->is_created = false;
        }

        $this->data = WeedingInvitation::where('weeding_id',$this->weeding->id)->whereNotNull('message')->orderBy('updated_at','desc')->get();
    }
}
