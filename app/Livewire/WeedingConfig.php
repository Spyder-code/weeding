<?php

namespace App\Livewire;

use App\Models\Weeding;
use App\Models\WeedingInvitation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;

class WeedingConfig extends Component
{
    public $weeding, $invitations, $data, $name, $phone;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
    ];

    public function mount()
    {
        $this->weeding = Weeding::where('user_id',Auth::id())->first();
        $this->invitations = WeedingInvitation::where('weeding_id',$this->weeding->id)->orderBy('name')->get();
        $this->data['reception_address'] = $this->weeding->reception_address;
        $this->data['reception_date'] = $this->weeding->reception_date;
        $this->data['reception_maps'] = $this->weeding->reception_maps;
    }

    public function render()
    {
        return view('livewire.weeding-config');
    }

    public function updateWeeding()
    {
        $this->weeding->update($this->data);
        session()->flash('success', 'Data berhasil diupdate!');
    }

    public function addInvitation()
    {
        $this->validate();
        $name = strtolower($this->name);
        WeedingInvitation::create([
            'weeding_id' => $this->weeding->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'phone' => $this->phone
        ]);
        $this->name = '';
        $this->phone = '';
        $this->invitations = WeedingInvitation::where('weeding_id',$this->weeding->id)->orderBy('name')->get();
        session()->flash('success', 'Data berhasil ditambahkan!');
    }

    public function deleteInvitation($id)
    {
        WeedingInvitation::destroy($id);
        $this->invitations = WeedingInvitation::where('weeding_id',$this->weeding->id)->orderBy('name')->get();
        session()->flash('success', 'Undangan berhasil dihapus!');
    }

    public function sendApi($id)
    {
        $us = WeedingInvitation::find($id);
        $res = Http::post('http://192.168.28.11:3100/send',[
            'number' => $us->wa(),
            'message' => "Yth. ".ucwords(strtolower($us->name))."\r\n\r\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Saudara/i untuk menghadiri acara kami. Berikut link undangan kami:\r\n\r\nhttps://mediku.id/A-N/".$us->slug."\r\n\r\nMerupakan suatu kehormatan dan kebahagiaan bagi kami atas do'a restunya kami ucapkan terimakasih 😇"
        ]);
        $us->update([
            'send_message_status' => $res
        ]);
    }

    public function sendGreeting($id)
    {
        $us = WeedingInvitation::find($id);
        $res = Http::post('http://192.168.28.11:3100/send',[
            'number' => $us->wa(),
            'message' => "Yth. ".ucwords(strtolower($us->name))."\r\n\r\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Saudara/i untuk menghadiri acara kami. Berikut link undangan kami:\r\n\r\nhttps://mediku.id/A-N/".$us->slug."\r\n\r\nMerupakan suatu kehormatan dan kebahagiaan bagi kami atas do'a restunya kami ucapkan terimakasih 🙏"
        ]);
    }
}
