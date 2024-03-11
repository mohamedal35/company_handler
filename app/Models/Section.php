<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public function get_sections_in_order($page = 'index')
    {
        return $this->select('sections.*', 'sections_templates.number_of_placeholders', 'sections_templates.number_of_imgs', 'sections_templates.template')
            ->join('sections_templates', 'sections_templates.id', '=', 'sections.type')
            ->where('page', $page)
            ->orderBy('order', 'ASC')->get()->toArray();
    }
    public function get_total_sections() {
        return $this->selectRaw('COUNT(*) as stats')->first();
    }
    public function get_all_sections() {
        return $this->get();
    }
    public function get_section($id) {
        return $this->where('id', $id)->first();
    }
    
}
