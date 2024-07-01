<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use DB;

class SecondaryTables extends Model
{   
    // function update_secondary_tables(){
    //     $data = [

    //     ['specific_career' => 'small / startup', 'name' => 'Other'],
    //     ['specific_career' => 'progressive / growing', 'name' => 'Other'],
    //     ['specific_career' => 'progressive / growing', 'name' => 'Other']

    //     ];

    //     DB::table('general_fields')->insert($data);
    // }

    // function autoupdate($general_careers, $specific_careers, $general_fields, $specific_fields){
    //     $this->update_general_careers($general_careers);
    //     $this->update_specific_careers($specific_careers);
    //     $this->update_general_fields($general_fields);
    //     $this->update_specific_fields($specific_fields);
    // }

    // function general_careers(){
    //     return DB::table('general_careers')->where('status', 'active')->orderBy('name', 'asc')->get();
    // }

    // function get_general_careers(){
    //     $location = resource_path()."/xml/general_careers.xml";
    //     $size = filesize($location);

    //     if ($size == 0){
    //         return abort(404);
    //     } else {
    //         $xml=simplexml_load_file($location);
    //         $rows = count($xml);
    //         $response = array();
            
    //         for ($i=0; $i<$rows; $i++){
    //             $temp = (object) array(
    //                 'id' => $i,
    //                 'name' => (string) $xml->general_career[$i]->name
    //             );
    //             $response[$i] = $temp;
    //         }

    //         if ($i > 0){
    //             return $response;
    //         } else {
    //             return abort(404);
    //         }
    //     }
        
    // }

   

    // function specific_careers(){
    //     return DB::table('specific_careers')->orderBy('name', 'asc')->get();
    // }

    // function get_specific_careers(){
    //     $location = resource_path()."/xml/specific_careers.xml";
    //     $size = filesize($location);

    //     if ($size == 0){
    //         return abort(404);
    //     } else {
    //         $xml=simplexml_load_file($location);
    //         $rows = count($xml);
    //         $response = array();
            
    //         for ($i=0; $i<$rows; $i++){
    //             $temp = (object) array(
    //                 'id' => $i,
    //                 'name' => (string) $xml->specific_career[$i]->name,
    //                 'general_career' => (string) $xml->specific_career[$i]->general_career
    //             );
    //             $response[$i] = $temp;
    //         }

    //         if ($i > 0){
    //             return $response;
    //         } else {
    //             return abort(404);
    //         }
    //     }
        
    // }

    

    // function general_fields(){
    //     return DB::table('general_fields')->orderBy('name', 'asc')->get();
    // }

    // function get_general_fields(){
    //     $location = resource_path()."/xml/general_fields.xml";
    //     $size = filesize($location);

    //     if ($size == 0){
    //         return abort(404);
    //     } else {
    //         $xml=simplexml_load_file($location);
    //         $rows = count($xml);
    //         $response = array();
            
    //         for ($i=0; $i<$rows; $i++){
    //             $temp = (object) array(
    //                 'id' => $i,
    //                 'name' => (string) $xml->general_field[$i]->name,
    //                 'specific_career' => (string) $xml->general_field[$i]->specific_career
    //             );
    //             $response[$i] = $temp;
    //         }

    //         if ($i > 0){
    //             return $response;
    //         } else {
    //             return abort(404);
    //         }
    //     }
        
    // }

   

    // function get_specific_fields(){
    //     $location = resource_path()."/xml/specific_fields.xml";
    //     $size = filesize($location);

    //     if ($size == 0){
    //         return abort(404);
    //     } else {
    //         $xml=simplexml_load_file($location);
    //         $rows = count($xml);
    //         $response = array();
            
    //         for ($i=0; $i<$rows; $i++){
    //             $temp = (object) array(
    //                 'id' => $i,
    //                 'name' => (string) $xml->specific_field[$i]->name,
    //                 'general_field' => (string) $xml->specific_field[$i]->general_field
    //             );
    //             $response[$i] = $temp;
    //         }

    //         if ($i > 0){
    //             return $response;
    //         } else {
    //             return abort(404);
    //         }
    //     }
        
    // }

  

}
