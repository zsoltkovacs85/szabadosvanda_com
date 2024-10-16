<?php

namespace App\Http\Controllers;

use App\Models\CharacterDesign;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

interface iCharacterDesignController
{

    public function index();

    public function show($url);

    public function getCruiseShip();

}

class CharacterDesignController extends Controller implements iCharacterDesignController
{
    public function index()
    {
        $concepts = [];
        $conceptDesigns = CharacterDesign::all();
        if(count($conceptDesigns) > 0 ){
            foreach($conceptDesigns as $conceptDesign){

                $entry = [];
                $entry['id'] = $conceptDesign->id;
                $entry['name'] = $conceptDesign->name;
                $entry['url'] = $conceptDesign->url;
                $entry['thumbnail'] = $conceptDesign->thumbnail;
                $entry['no_img'] = GalleryImage::where('concept_design_id',$conceptDesign->id )->count();

                if( $entry['no_img'] == 1){
                    $galleryImg = GalleryImage::where('concept_design_id',$conceptDesign->id )->first();
                    $entry['gallery_img'] =$galleryImg->path;
                }

                array_push( $concepts,$entry);

            }
        }
        //dd($concepts);



        return view('concept_design.index', [
            'conceptDesigns' => $concepts
        ]);
    }

    public function show($url)
    {
        $images = CharacterDesign::join('gallery_images', 'character_designs.id', '=', 'gallery_images.concept_design_id')
            ->where('character_designs.url', $url)
            ->get();

        return view('concept_design.show',[
            'images' => $images
        ]);
    }

    public function getCruiseShip()
    {

        return view('concept_design.cruise_ship',[

        ]);
    }
}
