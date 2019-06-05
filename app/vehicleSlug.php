<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class vehicleSlug extends Model
{
    public function createSlug($title, $id = 0)
    {
        $slug = str_slug($title);
        $createSlugsAll = $this->getRelatedSlugs($slug, $id);
        if (! $createSlugsAll->contains('slug', $slug)){
            return $slug;
        }
        for ($i = 1; $i <= 10; $i++) {
            $makeSlug = $slug.'-'.$i;
            if (! $createSlugsAll->contains('slug', $makeSlug)) {
                return $makeSlug;
            }
        }
        throw new \Exception('Can not generate a unique slug');
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Vehicle::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
}
