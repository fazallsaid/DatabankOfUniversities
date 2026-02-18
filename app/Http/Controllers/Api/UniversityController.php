<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
   function get_all(){
    $univ = University::join('user','user.user_id','=','university.user_id')->select('*')->get();
    $univcount = University::join('user','user.user_id','=','university.user_id')->count();

    if($univcount > 0){
    return response()->json([
        'success' => true,
        'message' => 'All Universities of Indonesia (' . $univcount . ' Universities)',
        'data' => $univ,
    ], 200);
    }else{
        return response()->json([
        'success' => false,
        'message' => 'Universitas Tidak Ditemukan',
    ], 404);
    }
   }

   function add_university(Request $request){
    $validatedData = $request->validate([
        'university_name' => 'required',
        'university_acronym' => 'required',
        'university_address' => 'required',
        'university_acreditation' => 'required',
        'university_website' => 'required',
        'user_id' => 'required|integer'
    ]);

    $univ = University::create($validatedData);

    if($univ){
        // Add data to CSV file
        $csvFile = database_path('csv/seeder.csv');

        // Get current row count from CSV
        $rowCount = 0;
        if (file_exists($csvFile)) {
            $fp = fopen($csvFile, 'r');
            while(fgetcsv($fp)) {
                $rowCount++;
            }
            fclose($fp);
        }

        // Set timezone to Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        $csvData = [
            $rowCount + 1, // Add sequential number
            $univ->university_name,
            $univ->university_acronym,
            $univ->university_address,
            $univ->university_acreditation,
            $univ->university_website,
            $univ->user_id,
            date('Y-m-d H:i:s'), // created_at
            date('Y-m-d H:i:s')  // updated_at
        ];

        $fp = fopen($csvFile, 'a');
        fputcsv($fp, $csvData);
        fclose($fp);

        return response()->json([
            'success' => true,
            'message' => 'Universitas Berhasil Ditambahkan',
            'data' => $univ,
        ], 200);
    }else{
        return response()->json([
            'status' => 'success',
            'info' => 'Universitas gagal ditambahkan.'
        ], 400);
    }
   }

   function update_university(Request $request, $id){
    $univid = University::findOrFail($id);
    if($univid){
        $university_name = $request->input('university_name');
        $university_acronym = $request->input('university_acronym');
        $university_address = $request->input('university_address');

        $univid->university_name = $university_name;
        $univid->university_acronym = $university_acronym;
        $univid->university_address = $university_address;

        $univid->save();

        return response()->json([
            'success' => true,
            'message' => 'Universitas Berhasil Diupdate',
            'data' => $univid,
        ], 200);
    }else{
        return response()->json([
            'success' => false,
            'message' => 'Universitas Tidak Ditemukan',
        ], 404);
    }
   }

   function delete_university($id){
        $finduniv = University::findOrFail($id);

        $univname = $finduniv->university_name;

        $finduniv->delete();

        if($finduniv){
            return response()->json([
                'success' => true,
                'message' => 'Universitas ' . $univname . ' Berhasil Dihapus',
            ], 200);
        }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Universitas Tidak Ditemukan',
                ], 404);
        }
    }

    function search_university_by_address(Request $request){
        $province = $request->input('provinces');

        $univ = University::where('university_address', 'LIKE', "%$province%")->get();

        $univcount = University::where('university_address', 'LIKE', "%$province%")->count();

        if($univcount > 0){
            return response()->json([
                'success' => true,
                'message' => 'Universitas di Provinsi ' . $province . ' (' . $univcount . ' Universitas)',
                'data' => $univ,
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Universitas Tidak Ditemukan',
            ], 404);
        }
    }

    function search_university_by_univ(Request $request){
        $univ_name = $request->input('university_name');

        $univ = University::where('university_name', 'LIKE', "%$univ_name%")->get();

        $univcount = University::where('university_name', 'LIKE', "%$univ_name%")->count();

        if($univcount > 0){
            return response()->json([
                'success' => true,
                'message' => 'Universitas dengan kata kunci ' . $univ_name . ' (' . $univcount . ' Universitas)',
                'data' => $univ,
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Universitas Tidak Ditemukan',
            ], 404);
        }
    }
}