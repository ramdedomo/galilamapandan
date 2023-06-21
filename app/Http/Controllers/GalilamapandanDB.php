<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Administrator;
use PDO;

use function PHPSTORM_META\map;

class GalilamapandanDB extends Controller {

     function updateEvent(Request $request, $month, $id) {

          switch($month) {
               case 1:

               $c = 'jan_event_title' . $id;
               $b = 'jan_event_date' . $id;
               $a = 'jan_event_description' . $id;
  

                    $request->validate([
                         $a=>'required',
                         $b=>'required',
                         $c=>'required'
                    ]);

                    return back();
     
                 break;
     
               case 2:
      
                   
     
                 break;
     
               case 3:
     
                   
     
                 break;
     
               case 4:
                
     
     
                 break;
     
               case 5:
     
                    
     
     
                 break;
     
               case 6:
                  
                   
     
                 break;
     
               case 7:
                  
                   
     
                 break;
     
               case 8:
     

     
                 break;
     
               case 9:
     

     
     
                 break;
     
               case 10:

     
     
                 break;
               case 11:
                 

     
                 break;
     
               case 12:
                 

     
     
     
                 break;
               default:
                    return back()->with('fail_delete','Something went wrong, Try again later');
             }
     
         }


     function addImage(Request $request, $id){
          $request->validate([
               'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
               'title'=>'required'
          ]);

          $path = $request->file->getRealPath();
          $logo = file_get_contents($path);
          $base64 = base64_encode($logo);

          $insert = DB::table('campaign_images')->insert([
               'featured_id' =>  $id,
               'display_image_desc' =>  $request->title,
               'display_image' => $base64
          ]);

          if($insert){
               return back()->with('success', 'Image Added!');
          }else{
               return back()->with('fail','Something Went Wrong, Try Again.');
          }
     }

     function deleteImage(Request $request){

          $ids = $request->eventimage;

          foreach($ids as $id){
               $deleteImg= DB::table('campaign_images')->where('display_image_id', '=', $id)->delete();
          }
          
          if($deleteImg){
               return back()
               ->with('success','Deleted!');
          }else{
                return back()->with('fail','Something Went Wrong, Try Again.');
          }

     }

     function updateItem(Request $request, $id){

     
          $design = "design_update" . $id;
          $desc = "desc_update". $id;
          $header = "header_update" . $id;

          $url = "url_update" . $id;
          $buttonname = "buttonname_update" . $id;
          $_active = "active_update" . $id;

          //return $request->$design . $request->$desc . $request->$header . $request->$url . $request->$buttonname;


          if($request->$design == 3){

                    if(empty($request->file)){
                         
                         $update = DB::table('carousel_items')
                         ->where('carousel_item_id', $id)
                         ->update([
                              'carousel_item_header' => null,
                              'carousel_item_desc' => null,
                              'carousel_item_design' => $request->$design,
                              'carousel_item_button_name' => null,
                              'carousel_item_url' => null,
                         ]);
          
                         if($update){
                              return back()
                              ->with('success', 'Updated!');
                         }else{
                              return back()->with('fail','No Changes');
                         }

                    }else{

                         $request->validate([
                              'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
                         ]);
          
                         $path = $request->file->getRealPath();
                         $logo = file_get_contents($path);
                         $base64 = base64_encode($logo);
          
                         $update = DB::table('carousel_items')
                         ->where('carousel_item_id', $id)
                         ->update([
                              'carousel_item_header' => null,
                              'carousel_item_desc' => null,
                              'carousel_item_design' => $request->$design,
                              'carousel_item_button_name' => null,
                              'carousel_item_url' => null,
                              'carousel_item_bg' =>  $base64
                         ]);
          
                         if($update){
                              return back()
                              ->with('success', 'Updated!');
                         }else{
                              return back()->with('fail','No Changes');
                         }

                    }

               


          }else{

               if(empty($request->file)){

                    $request->validate([
                         $design=>'required',
                         $header=>'required',
                         $buttonname=>'required',
                         $url=>'required',
                         $desc=>'required'
                    ]);


                    $update = DB::table('carousel_items')
                    ->where('carousel_item_id', $id)
                    ->update([
                         'carousel_item_header' => $request->$header,
                         'carousel_item_desc' => $request->$desc,
                         'carousel_item_design' => $request->$design,
                         'carousel_item_button_name' => $request->$buttonname,
                         'carousel_item_url' => $request->$url,
                    ]);
          
                    if($update){
                         return back()
                         ->with('success', 'Updated!');
                    }else{
                          return back()->with('fail','No Changes');
                    }

               }else{

                    $request->validate([
                         $design=>'required',
                         $header=>'required',
                         $buttonname=>'required',
                         $url=>'required',
                         'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
                         $desc=>'required'
                    ]);
          
                    $path = $request->file->getRealPath();
                    $logo = file_get_contents($path);
                    $base64 = base64_encode($logo);
          
                    $update = DB::table('carousel_items')->insert([
                         'carousel_item_header' => $request->$header,
                         'carousel_item_desc' => $request->$desc,
                         'carousel_item_design' => $request->$design,
                         'carousel_item_button_name' => $request->$buttonname,
                         'carousel_item_url' => $request->$url,
                         'carousel_item_bg' =>  $base64
                    ]);
          
                    if($update){
                         return back()
                         ->with('success', 'Updated!');
                    }else{
                          return back()->with('fail','No Changes');
                    }
     

               }

          }
          
     }

     function deleteMessage($id){

          $deleteMessage= DB::table('receive_contacts')->where('sender_id', '=', $id)->delete();

          if($deleteMessage){
               return back()
               ->with('success','Deleted!');
           }else{
                return back()->with('fail','Something Went Wrong, Try Again.');
           }

     }

     function updateAdvocacyPhoto(Request $request, $id){

          $request->validate([
               'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
          ]);

          $path = $request->file->getRealPath();
          $logo = file_get_contents($path);
          $base64 = base64_encode($logo);

          $update = DB::table('advocacy_campaigns')
          ->where('campaign_id', $id)
          ->update(['display_picture' => $base64]);

          if($update){
               return back()
               ->with('success','Background Photo Updated!');
           }else{
                return back()->with('fail','No Changes');
           }

     }

     function updateYearPhoto(Request $request, $id){

          $request->validate([
               'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
          ]);

          $path = $request->file->getRealPath();
          $logo = file_get_contents($path);
          $base64 = base64_encode($logo);

          $update = DB::table('activitiesprogram_year')
          ->where('year_id', $id)
          ->update(['display_picture' => $base64]);

          if($update){
               return back()
               ->with('success','Background Photo Updated!');
           }else{
                return back()->with('fail','No Changes');
           }

     }

     function activeItem($id){

          $update = DB::table('carousel_items')
          ->update(['carousel_item_active' => 0]);
          
          $update = DB::table('carousel_items')
          ->where('carousel_item_id', $id)
          ->update(['carousel_item_active' => 1]);

          if($update){
               return back()
               ->with('success','Item Updated!');
           }else{
                return back()->with('fail','No Changes');
           }
          
     }

     function deleteItem($id){

          $deleteItem= DB::table('carousel_items')->where('carousel_item_id', '=', $id)->delete();

          if($deleteItem){
               return back()
               ->with('success','Deleted!');
           }else{
                return back()->with('fail','Something Went Wrong, Try Again.');
           }

     }

     function addItem(Request $request){

          $active = 0;

          if(!empty($request->active)){
               $active = $request->active;
          }

          if($request->design == 3){

               if(!empty($request->header) || !empty($request->buttonname) || !empty($request->url) || !empty($request->description)){
                    return back()->with('fail','You Selected Image Only!');
               }else{

                    $request->validate([
                         'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
                    ]);
     
                    $path = $request->file->getRealPath();
                    $logo = file_get_contents($path);
                    $base64 = base64_encode($logo);
     
                    $insert = DB::table('carousel_items')->insert([
                         'carousel_item_design' => $request->design,
                         'carousel_item_active' => $active,
                         'carousel_item_bg' =>  $base64
                    ]);
     
                    if($insert){
                         return back()
                         ->with('success', 'New Item Added!');
                    }else{
                          return back()->with('fail','Something went wrong, Try again later');
                    }
               }



          }else{

               $request->validate([
                    'design'=>'required',
                    'header'=>'required',
                    'buttonname'=>'required',
                    'url'=>'required',
                    'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768',
                    'description'=>'required'
               ]);
     
               $path = $request->file->getRealPath();
               $logo = file_get_contents($path);
               $base64 = base64_encode($logo);
     
     
               $insert = DB::table('carousel_items')->insert([
                    'carousel_item_header' => $request->header,
                    'carousel_item_desc' => $request->description,
                    'carousel_item_design' => $request->design,
                    'carousel_item_active' => $active,
                    'carousel_item_button_name' => $request->buttonname,
                    'carousel_item_url' => $request->url,
                    'carousel_item_bg' =>  $base64
               ]);
     
     
               if($insert){
                    return back()
                    ->with('success', 'New Item Added!');
               }else{
                     return back()->with('fail','Something went wrong, Try again later');
               }

          }


          
     }

     function carouselsettings(){

          $desc = DB::table('carousel_items')
          ->select("*")
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          return view('admin.admin_carousel_settings',  ['desc'=>$desc, 'socials'=>$socials]);
     }

     function admin_about_contact_messages(){

          $desc = DB::table('receive_contacts')
          ->select("*")
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          return view('admin.admin_about_contact_messages', ['desc'=>$desc, 'socials'=>$socials]);
     }

     function sendMessage(Request $request) {
         
          $request->validate([
               'sender_name'=>'required',
               'sender_email'=>'required|email',
               'sender_message'=>'required'
          ]);


          $date = date_default_timezone_set('Asia/Manila');
          $insert_date = date('Y-m-d H:i:s');

          $insert = DB::table('receive_contacts')->insert([
               'sender_name' => $request->sender_name,
               'sender_email' => $request->sender_email,
               'sender_message' => $request->sender_message,
               'date_sended' => $insert_date,
           ]);


          if($insert){
               return back()
               ->with('success', 'Message Sent!. Check your email for further response. Thank You!');
          }else{
                return back()->with('fail','Something went wrong, Try again later');
          }


     }


     function contact_desc(){

          $desc = DB::table('about')
          ->select("*")
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();


          return view('galila_contact', ['desc'=>$desc, 'socials'=>$socials]);
     }

     function deleteSocial(Request $request){

          $ids = $request->socials;

          foreach($ids as $id){
               $deleteSocials= DB::table('social_medias')->where('social_id', '=', $id)->delete();
          }
          
          if($deleteSocials){
               return back()
               ->with('success_add','Deleted!');
           }else{
                return back()->with('fail_add','Something Went Wrong, Try Again.');
           }

     }


     function addSocial(Request $request){

          $request->validate([
               'social_link'=>'required|url',
               'social_name'=>'required|unique:social_medias,social_name|in:tiktok,facebook,reddit,youtube,instagram,twitter',
          ]);


          $insert = DB::table('social_medias')->insert([
               'social_link' => $request->social_link,
               'social_name' => $request->social_name,
           ]);


               if($insert){
                   return back()
                   ->with('success_add', 'Social Media Added!');
               }else{
                    return back()->with('fail_add','Something went wrong, Try again later');
               }



     }

     function updateMember(Request $request, $id){


          if(empty($request->file)){

               $request->validate([
                    'memberName'=>'required',
                    'memberPosition'=>'required',
                    'memberOrder'=>'required',
                    'memberBio'=>'required',
               ]);

               
               $member = DB::table('about_members')
               ->where('member_id', $id)
               ->select("*")
               ->get();


               $update_social = DB::table('member_socialmedia')
               ->where('member_social_id', $member[0]->member_social_id)
               ->update([
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
               ]);


               $update = DB::table('about_members')
               ->where('member_id', $id)
               ->update([
                    'member_name' => $request->memberName,
                    'member_position' => $request->memberPosition,
                    'member_order' => $request->memberOrder,
                    'member_bio' => $request->memberBio
               ]);


               if($update || $update_social){
                    return back()
                    ->with('success_update','Member Info Updated!');
                }else{
                     return back()->with('fail_update','No Changes');
                }

          }else{

               $request->validate([
                    'memberName'=>'required',
                    'memberPosition'=>'required',
                    'memberOrder'=>'required',
                    'memberBio'=>'required',
                    'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768'
               ]);


               $member = DB::table('about_members')
               ->where('member_id', $id)
               ->select("*")
               ->get();


               $update_social = DB::table('member_socialmedia')
               ->where('member_social_id', $member[0]->member_social_id)
               ->update([
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'twitter' => $request->twitter,
               ]);

               //'requiredmax:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'

               $path = $request->file->getRealPath();
               $logo = file_get_contents($path);
               $base64 = base64_encode($logo);

               $update = DB::table('about_members')
               ->where('member_id', $id)
               ->update(['member_name' => $request->memberName,
               'member_position' => $request->memberPosition,
               'member_order' => $request->memberOrder,
               'member_bio' => $request->memberBio,
               'display_picture' => $base64,
               ]);
     
               if($update || $update_social){
                    return back()
                    ->with('success_update','Member Info Updated!');
                }else{
                     return back()->with('fail_update','No Changes');
                }

          }


     }


     function removeMember($id) {

          $members= DB::table('about_members')
          ->where('member_id', $id)
          ->select("*")
          ->get();

          if(!empty($members[0]->member_social_id)){
           $removeMember = DB::table('about_members')->where('member_id', '=', $id)->delete();
           DB::table('member_socialmedia')->where('member_social_id', '=', $members[0]->member_social_id)->delete();
          }else{
               $removeMember = DB::table('about_members')->where('member_id', '=', $id)->delete();
          }

          if($removeMember){
               return back()
               ->with('success_delete','Deleted!');
           }else{
                return back()->with('fail_delete','Something Went Wrong, Try Again.');
           }
     }


     function addMember(Request $request){


          if(empty($request->fileadd)){

               $request->validate([
                    'memberNameadd'=>'required',
                    'memberPositionadd'=>'required',
                    'memberOrderadd'=>'required',
                    'memberBioadd'=>'required'
               ]);


                $insert = DB::table('member_socialmedia')->insert([
                    'facebook'=>$request->facebook,
                    'twitter'=>$request->twitter,
                    'instagram'=>$request->instagram,
                ]);

               $newlyadded= DB::table('member_socialmedia')
               ->select("*")
               ->orderByRaw('member_social_id DESC')
               ->first('member_social_id');

               $member_social_id = $newlyadded->member_social_id;

               $base64 = 'iVBORw0KGgoAAAANSUhEUgAAA+gAAAPoCAIAAADCwUOzAAAACXBIWXMAAArEAAAKxAFmbYLUAAAGZmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDIgNzkuMTY0NDYwLCAyMDIwLzA1LzEyLTE2OjA0OjE3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIyLTA2LTA2VDA5OjQ4OjQxKzA4OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIyLTA2LTA2VDA5OjQ4OjQxKzA4OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wNi0wNlQwOTo0ODo0MSswODowMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4NzI1YzgxYy1iMDA1LTQzNDEtOGZmYS1hY2IzNzQ5ZGY3ZDIiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDpjZTUwNjNiNy03MDA4LTI3NGEtYjQ3ZS05ZTg0ZjU4NjNhNTQiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpkOWViNDcxNy03MTkyLTY3NGItODY0NS1lNTQzYTY3YzZkNzYiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpkOWViNDcxNy03MTkyLTY3NGItODY0NS1lNTQzYTY3YzZkNzYiIHN0RXZ0OndoZW49IjIwMjItMDYtMDZUMDk6NDg6NDErMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMS4yIChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ODcyNWM4MWMtYjAwNS00MzQxLThmZmEtYWNiMzc0OWRmN2QyIiBzdEV2dDp3aGVuPSIyMDIyLTA2LTA2VDA5OjQ4OjQxKzA4OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMiAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDxwaG90b3Nob3A6RG9jdW1lbnRBbmNlc3RvcnM+IDxyZGY6QmFnPiA8cmRmOmxpPmFkb2JlOmRvY2lkOnBob3Rvc2hvcDpkMTc0N2VmMy1kMWY0LTExNDAtYjEwYy1iMGE2MDNhM2ZiMTU8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz63ZC9CAAB3PUlEQVR4nO39d5xk13nYeT/npgpd3RN6AgZhBjnnTAQCYAJJUVRiEIMCLREWRSvYa9OUJWu93s/q9draXWlt02tJlux9bcmSLFESM5hJkAAIgMg5DDAYYHLs7go3nLN/3OpCdaWu7q66Vaf697U8rK4Oc4fs6f71meecqw4ePCgAAAAAxpsz6gsAAAAAsDzCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAA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FiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsADhDgAAAFiAcAcAAAAsQLgDAAAAFiDcAQAAAAsQ7gAAAIAFCHcAAADAAoQ7AAAAYAHCHQAAALAA4Q4AAABYgHAHAAAALEC4AwAAABYg3AEAAAALEO4AAACABQh3AAAAwAKEOwAAAGABwh0AAACwAOEOAAAAWIBwBwAAACxAuAMAAAAWINwBAAAACxDuAAAAgAUIdwAAAMAChDsAAABgAcIdAAAAsMD/B3zRqfqtdhcOAAAAAElFTkSuQmCC';  
               $insert = DB::table('about_members')->insert([
                    'member_bio' => $request->memberBioadd,
                    'member_name' => $request->memberNameadd,
                    'member_position' => $request->memberPositionadd,
                    'member_order' => $request->memberOrderadd,
                    'display_picture' => $base64,
                    'member_social_id' => $member_social_id,
                ]);


                    if($insert){
                        return back()
                        ->with('success_modal', 'New Member Added!', ['status'=>0]);
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }

          }else{

               
               $request->validate([
                    'memberNameadd'=>'required',
                    'memberPositionadd'=>'required',
                    'memberOrderadd'=>'required',
                    'memberBioadd'=>'required',
                    'fileadd'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768'
               ]);

               $insert = DB::table('member_socialmedia')->insert([
                    'facebook'=>$request->facebook,
                    'twitter'=>$request->twitter,
                    'instagram'=>$request->instagram,
                ]);

               $newlyadded= DB::table('member_socialmedia')
               ->select("*")
               ->orderByRaw('member_social_id DESC')
               ->first('member_social_id');

               $member_social_id = $newlyadded->member_social_id;


                    $path = $request->fileadd->getRealPath();
                    $logo = file_get_contents($path);
                    $base64 = base64_encode($logo);
                    
                    $insert = DB::table('about_members')->insert([
                         'member_bio' => $request->memberBioadd,
                         'member_name' => $request->memberNameadd,
                         'member_position' => $request->memberPositionadd,
                         'member_order' => $request->memberOrderadd,
                         'display_picture' => $base64,
                         'member_social_id' => $member_social_id
                     ]);
          
          
                         if($insert){
                             return back()
                             ->with('success_modal', 'New Member Added!', ['status'=>0]);
                         }else{
                              return back()->with('fail_modal','Something went wrong, Try again later');
                         }


          }


     }

     function makeActivityFeatured($id){

          $update = DB::table('activitiesprogram_year')
          ->where('year_id', $id)
          ->update(['home_featured' => 1]);

          if($update){
               return back()
               ->with('success_update','Activity Featured!');
           }else{
                return back()->with('fail_update','No Changes');
           }

     }

     function makeActivityUnfeatured($id){

          $update = DB::table('activitiesprogram_year')
          ->where('year_id', $id)
          ->update(['home_featured' => 0]);

          if($update){
               return back()
               ->with('success_update','Activity Unfeatured!');
           }else{
                return back()->with('fail_update','No Changes');
           }
          
     }

     function about_desc() {

          $desc = DB::table('about')
          ->select("*")
          ->get();

          $desc2 = DB::table('about_members')
          ->select('*')
          ->get();

          
          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          return view('galila_about', ['desc'=>$desc, 'desc2'=>$desc2, 'socials'=>$socials]);
     }

     function updateAboutdesc(Request $request){
          
          $request->validate([
               'aboutdescription'=>'required',
          ]);

          $update = DB::table('about')
          ->update(['about_desc' => $request->aboutdescription]);

          if($update){
               return back()
               ->with('success_update','About Description Updated!');
           }else{
                return back()->with('fail_update','No Changes');
           }

     }

     function theteamdescUpdate(Request $request){
          
          $request->validate([
               'theteamdescription'=>'required',
          ]);

          $update = DB::table('about')
          ->update(['the_team_desc' => $request->theteamdescription]);

          if($update){
               return back()
               ->with('success_update_desc','The Team Description Updated!');
           }else{
                return back()->with('fail_update_desc','No Changes');
           }

     }

     function contactdescUpdate(Request $request){
          
          $request->validate([
               'contactdescription'=>'required',
          ]);

          $update = DB::table('about')
          ->update(['contact_desc' => $request->contactdescription]);

          if($update){
               return back()
               ->with('success_update_desc','Contact Description Updated!');
           }else{
                return back()->with('fail_update_desc','No Changes');
           }

     }

     

     function admin_about() {

          $desc = DB::table('about')
          ->select("*")
          ->get();

          $desc2 = DB::table('about_members')
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select('*')
          ->get();

          return view('admin.admin_about', ['desc'=>$desc, 'desc2'=>$desc2, 'socials'=>$socials]);
     }

     function admin_about_contact() {

          $desc = DB::table('about')
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select('*')
          ->get();

          return view('admin.admin_about_contact', ['desc'=>$desc,  'socials'=>$socials]);
     }

     function admin_about_theteam() {


          $member_socials = DB::table('member_socialmedia')
          ->select("*")
          ->get();


          $desc = DB::table('about_members')
          ->select('*')
          ->get();

          $desc2 = DB::table('about')
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select('*')
          ->get();

          return view('admin.admin_about_theteam', ['member_socials'=>$member_socials, 'desc'=>$desc, 'desc2'=>$desc2, 'socials'=>$socials]);
     }
     
     function theteam_desc_view(){

          $desc = DB::table('about_members')
          ->select('*')
          ->get();

          $member_socials = DB::table('member_socialmedia')
          ->select("*")
          ->get();

          $desc4 = DB::table('about')
          ->select("*")
          ->get();
                    
          $socials = DB::table('social_medias')
          ->select("*")
          ->get();


          return view('galila_theteam', ['member_socials'=>$member_socials, 'desc'=>$desc, 'desc4'=>$desc4, 'socials'=>$socials]);


     }


     function makeAdvocacyFeatured($id){

          $update = DB::table('advocacy_campaigns')
          ->where('campaign_id', $id)
          ->update(['home_featured_camp' => 1]);

          if($update){
               return back()
               ->with('success_advocacy_update','Advocacy Featured!');
           }else{
                return back()->with('fail_advocacy_update','No Changes');
           }

     }

     function makeAdvocacyUnfeatured($id){

          $update = DB::table('advocacy_campaigns')
          ->where('campaign_id', $id)
          ->update(['home_featured_camp' => 0]);

          if($update){
               return back()
               ->with('success_advocacy_update','Advocacy Unfeatured!');
           }else{
                return back()->with('fail_advocacy_update','No Changes');
           }
          
     }

    public function advocacy_desc_view() {
        
       $desc = DB::table('advocacy')
            ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
            ->select("*")
            ->get();
    

            $socials = DB::table('social_medias')
            ->select("*")
            ->get();

            return view('galila_advocacy',['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials]);
       
    }

    public function login() {
         return view('admin_login', ['session'=>session('sessionUser')]);
    }

    function logout(){
          if(session()->has('sessionUser')){
               session()->pull('sessionUser');
               return redirect('login');
          }
     }


    public function logincheck(Request $request) {

     $request->validate([
          'username'=>'required',
          'password'=>'required'
     ]);
     
     $adminInfo = Administrator::where('username','=', $request->username)->first();

     if(!$adminInfo){
         return back()->with('fail','Incorrect username or password');
     }else{
         if($request->password == $adminInfo->password){
             $request->session()->put('sessionUser', $adminInfo->username);
             return redirect('admin');
         }else{
             return back()->with('fail','Incorrect username or password');
         }

     }

    }

    function admin(){

     $desc = DB::table('activityprograms')
     ->join('activitiesprogram_year', 'activityprograms.activitiesprograms_id', '=', 'activitiesprogram_year.activitiesprograms_id')
     ->select('*')
     ->get();


     $desc2 = DB::table('advocacy')
          ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
          ->select('*')
          ->get();

     $desc3 = DB::table('about_members')
          ->select('*')
          ->get();
     
          
     $desc4 = DB::table('about')
          ->select("*")
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          $items = DB::table('carousel_items')
          ->select("*")
          ->get()->toArray();


     return view('admin.admin_index', ['desc'=>$desc, 'desc2'=>$desc2, 'desc3'=>$desc3, 'desc4'=>$desc4, 'socials'=>$socials, 'items'=>$items]);

    }

    function admin_advocacy_desc_view(){

          $desc = DB::table('advocacy')
          ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
          ->select("*")
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          return view('admin.admin_advocacy',['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials]);

    }

    function admin_campaigns_desc_view($id){

     $desc = DB::table('advocacy')
     ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
     ->join('campaign_details', 'advocacy_campaigns.campaign_id', '=', 'campaign_details.campaign_id')
     ->where('advocacy_campaigns.campaign_id', '=', $id)
     ->select('*')
     ->get();


     $isExist = DB::table('advocacy_campaigns')
     ->where('campaign_id', '=', $id)
     ->select('*')
     ->get();

     $socials = DB::table('social_medias')
     ->select("*")
     ->get();


     if(!$isExist->isEmpty() && !$desc->isEmpty()){
          return view('admin.admin_advocacy_campaigns', ['desc'=>$desc, 'desc2'=>$desc, 'status'=>0, 'socials'=>$socials]);
     }elseif(!$isExist->isEmpty() && $desc->isEmpty()){
          return view('admin.admin_advocacy_campaigns', ['desc'=>$isExist, 'desc2'=>$isExist, 'status'=>1, 'socials'=>$socials]);
     }else{
          return abort(404);
     }

    }


    function admin_campaigns_campaign_desc_view($id, $id1){

          $desc = DB::table('advocacy')
          ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
          ->join('campaign_details', 'advocacy_campaigns.campaign_id', '=', 'campaign_details.campaign_id')
          ->where('campaign_details.featured_id', '=', $id1)
          ->where('campaign_details.campaign_id', '=', $id)
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          $images =  DB::table('campaign_images')
          ->where('featured_id', '=', $id1)
          ->select("*")
          ->get();

          if(!$desc->isEmpty()){
               return view('admin.admin_advocacy_campaigns_campaign', ['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials, 'images'=>$images]);
          }else{
               return abort(404);
          }
    

    }

    function deleteAdvocacy($id) {

          $deleteCampaigns = DB::table('campaign_details')->where('campaign_id', '=', $id)->delete();
          $deleteAdvocacy = DB::table('advocacy_campaigns')->where('campaign_id', '=', $id)->delete();

          if($deleteAdvocacy){
               return back()
               ->with('success_delete','Deleted!');
           }else{
                return back()->with('fail_delete','Something Went Wrong, Try Again.');
           }

    }

    function deleteCampaigns($id) {

          $deleteCampaigns = DB::table('campaign_details')->where('featured_id', '=', $id)->delete();

          if($deleteCampaigns){
               return back()
               ->with('success_delete','Deleted!');
          }else{
               return back()->with('fail_delete','Something Went Wrong, Try Again.');
          }
     

     }

    function updateAdvocacydesc(Request $request){

          $request->validate([
               'advocacydescription'=>'required',
          ]);

          $update = DB::table('advocacy')
          ->where('advocacy_id', 1)
          ->update(['advocacy_desc' => $request->advocacydescription]);

          if($update){
               return back()
               ->with('success','Advocacy Description Updated!');
           }else{
                return back()->with('fail','No Changes');
           }

    }

    function updateActivitydesc(Request $request){

          $request->validate([
               'activitiesdescription'=>'required',
          ]);

          $update = DB::table('activityprograms')
          ->where('activitiesprograms_id', 1)
          ->update(['activitiesprograms_desc' => $request->activitiesdescription]);

          if($update){
               return back()
               ->with('success','Activities and Programs Description Updated!');
          }else{
               return back()->with('fail','No Changes');
          }

     }



    function updateAdvocacycampaigns(Request $request, $id){

          $request->validate([
               'advocacyTitledesc'=>'required',
               'advocacyTitle'=>'required',
               'advocacyTitleest'=>'required'
          ]);


          $update = DB::table('advocacy_campaigns')
          ->where('campaign_id', $id)
          ->update(['campaign_name' => $request->advocacyTitle, 'campaign_established' => $request->advocacyTitleest,'campaign_desc' => $request->advocacyTitledesc]);
          

          if($update){
               return back()
               ->with('success','All Changes are Updated!');
          }else{
               return back()->with('fail','No Changes');
          }

    }


    function updateCampaignscampaign(Request $request, $id) {

           $request->validate([
               'campaignTitle'=>'required',
               'campaignTitleest'=>'required',
               'campaignTitledesc'=>'required'
          ]);


          $update = DB::table('campaign_details')
          ->where('featured_id', $id)
          ->update(['featured_name' => $request->campaignTitle, 'date_established' => $request->campaignTitleest,'featured_desc' => $request->campaignTitledesc]);
          

          if($update){
               return back()
               ->with('success','All Changes are Updated!');
          }else{
               return back()->with('fail','No Changes');
          }

    }



    function addCampaigns(Request $request, $id){

          $request->validate([
               'campaignname'=>'required',
               'campaignest'=>'required',
               'campaigndesc'=>'required'
          ]);

          $insert = DB::table('campaign_details')->insert([
               'featured_name' => $request->campaignname,
               'date_established' => $request->campaignest,
               'featured_desc' => $request->campaigndesc,
               'campaign_id' => $id,
               'home_featured' => 0
           ]);


               
               if($insert){
                   return back()
                   ->with('success_modal', $request->campaignname . ' Added!', ['status'=>0]);
               }else{
                    return back()->with('fail_modal','Something went wrong, Try again later');
               }


    }

    function addAdvocacy(Request $request){

          $request->validate([
               'advocacytitle'=>'required',
               'advocacydesc'=>'required',
               'advocacyest'=>'required',
               'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768'
          ]);


          $path = $request->file->getRealPath();
          $logo = file_get_contents($path);
          $base64 = base64_encode($logo);

          $insert = DB::table('advocacy_campaigns')->insert([
               'campaign_name' => $request->advocacytitle,
               'campaign_desc' => $request->advocacydesc,
               'campaign_established' => $request->advocacyest,
               'advocacy_id' => 1,
               'home_featured_camp' => 0,
               'display_picture' => $base64

           ]);
               
               if($insert){
                   return back()
                   ->with('success_modal', $request->advocacytitle . ' Added!');
               }else{
                    return back()->with('fail_modal','Something went wrong, Try again later');
               }

    }




    function addYear(Request $request){

          $request->validate([
               'whatyear'=>'required|digits:4|integer|min:2020|max:'.(date('Y')+1),
               'yeardesc'=>'required',
               'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:768'
          ]);

          $path = $request->file->getRealPath();
          $logo = file_get_contents($path);
          $base64 = base64_encode($logo);

          $insert = DB::table('activitiesprogram_year')->insert([
               'year' => $request->whatyear,
               'year_desc' => $request->yeardesc,
               'activitiesprograms_id' => 1,
               'home_featured' => 0,
               'display_picture' => $base64 
          ]);
               
               if($insert){
               return back()
               ->with('success_modal', $request->advocacytitle . ' Added!');
               }else{
                    return back()->with('fail_modal','Something went wrong, Try again later');
               }
    }



    function deleteYear($id){

          $deleteYear = DB::table('activitiesprogram_year')->where('year_id', '=', $id)->delete();

          if($deleteYear){
               return back()
               ->with('success_delete','Deleted!');
          }else{
               return back()->with('fail_delete','Something Went Wrong, Try Again.');
          }
     

    }

    function deleteEvent($month, $id) {

     switch($month) {
          case 1:

               $deleteEvent = DB::table('a_january')->where('jan_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }


            break;

          case 2:
 
               $deleteEvent = DB::table('b_february')->where('feb_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 3:

               $deleteEvent = DB::table('c_march')->where('mar_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 4:
           
               $deleteEvent = DB::table('d_april')->where('apr_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }


            break;

          case 5:

               $deleteEvent = DB::table('e_may')->where('may_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }


            break;

          case 6:
             
               $deleteEvent = DB::table('f_june')->where('june_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 7:
             
               $deleteEvent = DB::table('g_july')->where('july_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 8:

               $deleteEvent = DB::table('h_august')->where('aug_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 9:

               $deleteEvent = DB::table('i_september')->where('sept_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }


            break;

          case 10:

               $deleteEvent = DB::table('j_october')->where('oct_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }


            break;
          case 11:
            
               $deleteEvent = DB::table('k_november')->where('nov_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }

            break;

          case 12:
            
               $deleteEvent = DB::table('l_december')->where('dec_event_id', '=', $id)->delete();

               if($deleteEvent){
                    return back()
                    ->with('success_delete','Deleted!');
               }else{
                    return back()->with('fail_delete','Something Went Wrong, Try Again.');
               }



            break;
          default:
               return back()->with('fail_delete','Something went wrong, Try again later');
        }

    }

    function addEvent(Request $request, $id){


     $request->validate([
          'eventTitle'=>'required',
          'eventDate'=>'required|Date',
          'eventDesc'=>'required'
     ]);


     $timestamp = strtotime($request->eventDate);
     $month = date('n', $timestamp);
     $day = date('j', $timestamp);


     switch($month) {
          case 1:

               $insert = DB::table('a_january')->insert([
                    'jan_event_title' => $request->eventTitle,
                    'jan_event_description' => $request->eventDesc,
                    'jan_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in January Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 2:
               $insert = DB::table('b_february')->insert([
                    'feb_event_title' => $request->eventTitle,
                    'feb_event_description' => $request->eventDesc,
                    'feb_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in February Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 3:
               $insert = DB::table('c_march')->insert([
                    'mar_event_title' => $request->eventTitle,
                    'mar_event_description' => $request->eventDesc,
                    'mar_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in March Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 4:
               $insert = DB::table('d_april')->insert([
                    'apr_event_title' => $request->eventTitle,
                    'apr_event_description' => $request->eventDesc,
                    'apr_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in April Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 5:
               $insert = DB::table('e_may')->insert([
                    'may_event_title' => $request->eventTitle,
                    'may_event_description' => $request->eventDesc,
                    'may_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in May Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 6:
               $insert = DB::table('f_june')->insert([
                    'june_event_title' => $request->eventTitle,
                    'june_event_description' => $request->eventDesc,
                    'june_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in June Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 7:
               $insert = DB::table('g_july')->insert([
                    'july_event_title' => $request->eventTitle,
                    'july_event_description' => $request->eventDesc,
                    'july_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in July Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 8:
               $insert = DB::table('h_august')->insert([
                    'aug_event_title' => $request->eventTitle,
                    'aug_event_description' => $request->eventDesc,
                    'aug_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in August Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;

          case 9:
               $insert = DB::table('i_september')->insert([
                    'sept_event_title' => $request->eventTitle,
                    'sept_event_description' => $request->eventDesc,
                    'sept_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in September Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;
          case 10:
               $insert = DB::table('j_october')->insert([
                    'oct_event_title' => $request->eventTitle,
                    'oct_event_description' => $request->eventDesc,
                    'oct_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in October Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;
          case 11:
               $insert = DB::table('k_november')->insert([
                    'nov_event_title' => $request->eventTitle,
                    'nov_event_description' => $request->eventDesc,
                    'nov_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in November Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;
          case 12:
               $insert = DB::table('l_december')->insert([
                    'dec_event_title' => $request->eventTitle,
                    'dec_event_description' => $request->eventDesc,
                    'dec_event_date' => $request->eventDate,
                    'year_id' => $id
               ]);
                    
                    if($insert){
                    return back()
                    ->with('success_modal', $request->eventTitle . ' in December Added!');
                    }else{
                         return back()->with('fail_modal','Something went wrong, Try again later');
                    }
            break;
          default:
               return back()->with('fail_modal','Something went wrong, Try again later');
        }
  




    }


    function updateYear(Request $request, $id){

          $request->validate([
               'year'=>'required|digits:4|integer|min:2020|max:'.(date('Y')+1),
               'yeardescription'=>'required',
          ]);


          $update = DB::table('activitiesprogram_year')
          ->where('year_id', $id)
          ->update(['year' => $request->year,
          'year_desc' => $request->yeardescription
          ]);
          

          if($update){
               return back()
               ->with('success','All Changes are Updated!');
          }else{
               return back()->with('fail','No Changes');
          }

    }


    public function activities_desc_view() {
        
      $desc = DB::table('activityprograms')
           ->join('activitiesprogram_year', 'activityprograms.activitiesprograms_id', '=', 'activitiesprogram_year.activitiesprograms_id')
           ->select('*')
           ->get();

           
          $socials = DB::table('social_medias')
          ->select("*")
          ->get();


      return view('galila_activities',['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials]);
      
   }


   public function admin_activities_desc_view() {
        
     $desc = DB::table('activityprograms')
          ->join('activitiesprogram_year', 'activityprograms.activitiesprograms_id', '=', 'activitiesprogram_year.activitiesprograms_id')
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

     return view('admin.admin_activities',['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials]);
     
  }

   function activities_activity_desc_view($id){

     $checkExistID = DB::table('activitiesprogram_year')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $jan = DB::table('activitiesprogram_year')
     ->join('a_january', 'activitiesprogram_year.year_id', '=', 'a_january.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $feb = DB::table('activitiesprogram_year')
     ->join('b_february', 'activitiesprogram_year.year_id', '=', 'b_february.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $mar = DB::table('activitiesprogram_year')
     ->join('c_march', 'activitiesprogram_year.year_id', '=', 'c_march.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $apr = DB::table('activitiesprogram_year')
     ->join('d_april', 'activitiesprogram_year.year_id', '=', 'd_april.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $may = DB::table('activitiesprogram_year')
     ->join('e_may', 'activitiesprogram_year.year_id', '=', 'e_may.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $june = DB::table('activitiesprogram_year')
     ->join('f_june', 'activitiesprogram_year.year_id', '=', 'f_june.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $july = DB::table('activitiesprogram_year')
     ->join('g_july', 'activitiesprogram_year.year_id', '=', 'g_july.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $aug = DB::table('activitiesprogram_year')
     ->join('h_august', 'activitiesprogram_year.year_id', '=', 'h_august.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $sept = DB::table('activitiesprogram_year')
     ->join('i_september', 'activitiesprogram_year.year_id', '=', 'i_september.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $oct = DB::table('activitiesprogram_year')
     ->join('j_october', 'activitiesprogram_year.year_id', '=', 'j_october.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $nov = DB::table('activitiesprogram_year')
     ->join('k_november', 'activitiesprogram_year.year_id', '=', 'k_november.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $dec = DB::table('activitiesprogram_year')
     ->join('l_december', 'activitiesprogram_year.year_id', '=', 'l_december.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();





     if(!$jan->isEmpty() || 
     !$feb->isEmpty() ||
     !$mar->isEmpty() || 
     !$apr->isEmpty() || 
     !$may->isEmpty() || 
     !$june->isEmpty() || 
     !$july->isEmpty() || 
     !$aug->isEmpty() || 
     !$sept->isEmpty() || 
     !$oct->isEmpty() || 
     !$nov->isEmpty() || 
     !$dec->isEmpty() && 
     !$checkExistID->isEmpty()){

          $jan = DB::table('activitiesprogram_year')
          ->join('a_january', 'activitiesprogram_year.year_id', '=', 'a_january.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('jan_event_date')
          ->select('*')
          ->get();
     
          $feb = DB::table('activitiesprogram_year')
          ->join('b_february', 'activitiesprogram_year.year_id', '=', 'b_february.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('feb_event_date')
          ->select('*')
          ->get();
     
          $mar = DB::table('activitiesprogram_year')
          ->join('c_march', 'activitiesprogram_year.year_id', '=', 'c_march.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('mar_event_date')
          ->select('*')
          ->get();
     
          $apr = DB::table('activitiesprogram_year')
          ->join('d_april', 'activitiesprogram_year.year_id', '=', 'd_april.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('apr_event_date')
          ->select('*')
          ->get();
     
          $may = DB::table('activitiesprogram_year')
          ->join('e_may', 'activitiesprogram_year.year_id', '=', 'e_may.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('may_event_date')
          ->select('*')
          ->get();
     
          $june = DB::table('activitiesprogram_year')
          ->join('f_june', 'activitiesprogram_year.year_id', '=', 'f_june.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('june_event_date')
          ->select('*')
          ->get();
     
          $july = DB::table('activitiesprogram_year')
          ->join('g_july', 'activitiesprogram_year.year_id', '=', 'g_july.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('july_event_date')
          ->select('*')
          ->get();
     
          $aug = DB::table('activitiesprogram_year')
          ->join('h_august', 'activitiesprogram_year.year_id', '=', 'h_august.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('aug_event_date')
          ->select('*')
          ->get();
     
          $sept = DB::table('activitiesprogram_year')
          ->join('i_september', 'activitiesprogram_year.year_id', '=', 'i_september.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('sept_event_date')
          ->select('*')
          ->get();
     
          $oct = DB::table('activitiesprogram_year')
          ->join('j_october', 'activitiesprogram_year.year_id', '=', 'j_october.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('oct_event_date')
          ->select('*')
          ->get();
     
          $nov = DB::table('activitiesprogram_year')
          ->join('k_november', 'activitiesprogram_year.year_id', '=', 'k_november.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('nov_event_date')
          ->select('*')
          ->get();
     
          $dec = DB::table('activitiesprogram_year')
          ->join('l_december', 'activitiesprogram_year.year_id', '=', 'l_december.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('dec_event_date')
          ->select('*')
          ->get();

          $desc = DB::table('activitiesprogram_year')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          //1 means months has values
          return view('galila_activities_year',
          [
          'desc'=>$desc, 
          'jan'=>$jan, 
          'feb'=>$feb,
          'mar'=>$mar,
          'apr'=>$apr,
          'may'=>$may,
          'june'=>$june,
          'july'=>$july,
          'aug'=>$aug,
          'sept'=>$sept,
          'oct'=>$oct,
          'nov'=>$nov,
          'dec'=>$dec,
          'socials'=>$socials
          ], 
          
          ['status'=>'1'], );
     }

     elseif(($jan->isEmpty() || $feb->isEmpty()) && !$checkExistID->isEmpty())
     {
          $desc = DB::table('activitiesprogram_year')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          //0 means months does not have value
          return view('galila_activities_year', ['desc'=>$desc], ['status'=>'0', 'socials'=>$socials]);
     }
     else
     {
          return abort(404);
     }



   }


   function admin_activities_activity_desc_view($id) {

     $checkExistID = DB::table('activitiesprogram_year')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $jan = DB::table('activitiesprogram_year')
     ->join('a_january', 'activitiesprogram_year.year_id', '=', 'a_january.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $feb = DB::table('activitiesprogram_year')
     ->join('b_february', 'activitiesprogram_year.year_id', '=', 'b_february.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $mar = DB::table('activitiesprogram_year')
     ->join('c_march', 'activitiesprogram_year.year_id', '=', 'c_march.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $apr = DB::table('activitiesprogram_year')
     ->join('d_april', 'activitiesprogram_year.year_id', '=', 'd_april.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $may = DB::table('activitiesprogram_year')
     ->join('e_may', 'activitiesprogram_year.year_id', '=', 'e_may.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $june = DB::table('activitiesprogram_year')
     ->join('f_june', 'activitiesprogram_year.year_id', '=', 'f_june.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $july = DB::table('activitiesprogram_year')
     ->join('g_july', 'activitiesprogram_year.year_id', '=', 'g_july.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $aug = DB::table('activitiesprogram_year')
     ->join('h_august', 'activitiesprogram_year.year_id', '=', 'h_august.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $sept = DB::table('activitiesprogram_year')
     ->join('i_september', 'activitiesprogram_year.year_id', '=', 'i_september.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $oct = DB::table('activitiesprogram_year')
     ->join('j_october', 'activitiesprogram_year.year_id', '=', 'j_october.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $nov = DB::table('activitiesprogram_year')
     ->join('k_november', 'activitiesprogram_year.year_id', '=', 'k_november.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();

     $dec = DB::table('activitiesprogram_year')
     ->join('l_december', 'activitiesprogram_year.year_id', '=', 'l_december.year_id')
     ->where('activitiesprogram_year.year_id', '=', $id)
     ->select('*')
     ->get();





     if(!$jan->isEmpty() || 
     !$feb->isEmpty() ||
     !$mar->isEmpty() || 
     !$apr->isEmpty() || 
     !$may->isEmpty() || 
     !$june->isEmpty() || 
     !$july->isEmpty() || 
     !$aug->isEmpty() || 
     !$sept->isEmpty() || 
     !$oct->isEmpty() || 
     !$nov->isEmpty() || 
     !$dec->isEmpty() && 
     !$checkExistID->isEmpty()){

          $jan = DB::table('activitiesprogram_year')
          ->join('a_january', 'activitiesprogram_year.year_id', '=', 'a_january.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('jan_event_date')
          ->select('*')
          ->get();
     
          $feb = DB::table('activitiesprogram_year')
          ->join('b_february', 'activitiesprogram_year.year_id', '=', 'b_february.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('feb_event_date')
          ->select('*')
          ->get();
     
          $mar = DB::table('activitiesprogram_year')
          ->join('c_march', 'activitiesprogram_year.year_id', '=', 'c_march.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('mar_event_date')
          ->select('*')
          ->get();
     
          $apr = DB::table('activitiesprogram_year')
          ->join('d_april', 'activitiesprogram_year.year_id', '=', 'd_april.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('apr_event_date')
          ->select('*')
          ->get();
     
          $may = DB::table('activitiesprogram_year')
          ->join('e_may', 'activitiesprogram_year.year_id', '=', 'e_may.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('may_event_date')
          ->select('*')
          ->get();
     
          $june = DB::table('activitiesprogram_year')
          ->join('f_june', 'activitiesprogram_year.year_id', '=', 'f_june.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('june_event_date')
          ->select('*')
          ->get();
     
          $july = DB::table('activitiesprogram_year')
          ->join('g_july', 'activitiesprogram_year.year_id', '=', 'g_july.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('july_event_date')
          ->select('*')
          ->get();
     
          $aug = DB::table('activitiesprogram_year')
          ->join('h_august', 'activitiesprogram_year.year_id', '=', 'h_august.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('aug_event_date')
          ->select('*')
          ->get();
     
          $sept = DB::table('activitiesprogram_year')
          ->join('i_september', 'activitiesprogram_year.year_id', '=', 'i_september.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('sept_event_date')
          ->select('*')
          ->get();
     
          $oct = DB::table('activitiesprogram_year')
          ->join('j_october', 'activitiesprogram_year.year_id', '=', 'j_october.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('oct_event_date')
          ->select('*')
          ->get();
     
          $nov = DB::table('activitiesprogram_year')
          ->join('k_november', 'activitiesprogram_year.year_id', '=', 'k_november.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('nov_event_date')
          ->select('*')
          ->get();
     
          $dec = DB::table('activitiesprogram_year')
          ->join('l_december', 'activitiesprogram_year.year_id', '=', 'l_december.year_id')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->orderBy('dec_event_date')
          ->select('*')
          ->get();

          $desc = DB::table('activitiesprogram_year')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->select('*')
          ->get();


          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

         
          //1 means months has values
          return view('admin.admin_activities_year',
          [
          'desc'=>$desc, 
          'jan'=>$jan, 
          'feb'=>$feb,
          'mar'=>$mar,
          'apr'=>$apr,
          'may'=>$may,
          'june'=>$june,
          'july'=>$july,
          'aug'=>$aug,
          'sept'=>$sept,
          'oct'=>$oct,
          'nov'=>$nov,
          'dec'=>$dec,
          'socials'=>$socials
          ], 
          
          ['status'=>'1'], );
     }

     elseif(($jan->isEmpty() || $feb->isEmpty()) && !$checkExistID->isEmpty())
     {
          $desc = DB::table('activitiesprogram_year')
          ->where('activitiesprogram_year.year_id', '=', $id)
          ->select('*')
          ->get();

          $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          //0 means months does not have value
          return view('admin.admin_activities_year', ['desc'=>$desc], ['status'=>'0', 'socials'=>$socials]);
     }
     else
     {
          return abort(404);
     }



   }
   

   public function home_desc_view() {

      
      $desc = DB::table('activityprograms')
           ->join('activitiesprogram_year', 'activityprograms.activitiesprograms_id', '=', 'activitiesprogram_year.activitiesprograms_id')
           ->select('*')
           ->where('activitiesprogram_year.home_featured', '=', 1)
           ->get();

      $desc2 = DB::table('advocacy')
           ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
           ->where('advocacy_campaigns.home_featured_camp', '=', 1)
           ->select('*')
           ->get();

      $desc3 = DB::table('about_members')
           ->select('*')
           ->get();

      $desc4 = DB::table('about')
          ->select("*")
          ->get();

           $socials = DB::table('social_medias')
          ->select("*")
          ->get();

          $items = DB::table('carousel_items')
          ->select("*")
          ->get()->toArray();

      return view('galila_landing', compact('desc', 'desc2', 'desc3', 'desc4', 'socials', 'items'));

   }


   public function campaigns_desc_view($id) {
      
     $desc = DB::table('advocacy')
     ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
     ->join('campaign_details', 'advocacy_campaigns.campaign_id', '=', 'campaign_details.campaign_id')
     ->where('advocacy_campaigns.campaign_id', '=', $id)
     ->select('*')
     ->get();


     $isExist = DB::table('advocacy_campaigns')
     ->where('campaign_id', '=', $id)
     ->select('*')
     ->get();

     $socials = DB::table('social_medias')
     ->select("*")
     ->get();


     if(!$isExist->isEmpty() && !$desc->isEmpty()){
          return view('galila_advocacy_campaigns', ['desc'=>$desc, 'desc2'=>$desc, 'status'=>0, 'socials'=>$socials]);
     }elseif(!$isExist->isEmpty() && $desc->isEmpty()){
          return view('galila_advocacy_campaigns', ['desc'=>$isExist, 'desc2'=>$isExist, 'status'=>1, 'socials'=>$socials]);
     }else{
          return abort(404);
     }
         
   }

   
   public function campaigns_campaign_desc_view($id, $id1) {

     $desc = DB::table('advocacy')
     ->join('advocacy_campaigns', 'advocacy.advocacy_id', '=', 'advocacy_campaigns.advocacy_id')
     ->join('campaign_details', 'advocacy_campaigns.campaign_id', '=', 'campaign_details.campaign_id')
     ->where('campaign_details.featured_id', '=', $id1)
     ->where('campaign_details.campaign_id', '=', $id)
     ->select('*')
     ->get();

     $socials = DB::table('social_medias')
     ->select("*")
     ->get();

     
     $images =  DB::table('campaign_images')
     ->where('featured_id', '=', $id1)
     ->select("*")
     ->get();

     if(!$desc->isEmpty()){
          return view('galila_advocacy_campaigns_campaign', ['desc'=>$desc], ['desc2'=>$desc, 'socials'=>$socials, 'images'=>$images]);
     }else{
          return abort(404);
     }
    

   }

 

     
    
 }
 