<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostBookDescriptionRequest;
use App\Http\Requests\UpdateBookDescriptionRequest;
use App\Http\Resources\BookDecriptionCollection;
use App\Http\Resources\BookDecriptionResource;
use App\Models\BookDescription;
use Illuminate\Http\Request;
use Exception;

class BookDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //ger all data 
    public function index()
    {
        try {
            $data = BookDescription::all();
            $results = new BookDecriptionCollection($data);
            return response()->json([
                "message" => "Successfull",
                "data" => $results
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    //post data to database
    public function store(PostBookDescriptionRequest $request)
    {
        $validReq = $request->validated();
        try {
            $data = BookDescription::create($validReq);
            $result = new BookDecriptionResource($data);
            return response()->json([
                "message" => "Successful",
                "data" => $result
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = BookDescription::findorfail($id);
            $result = new BookDecriptionResource($data);
            return response()->json([
                "message" => "Successful",
                "data" => $result
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookDescriptionRequest $request, string $id)
    {
        $validReq = $request->validated();
        try {
            $data = BookDescription::findorfail($id);
            $data->update($validReq);
            $data->save();
            $result = new BookDecriptionResource($data);
            return response()->json([
                "message" => "successfull",
                "data" => $result
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = BookDescription::findorfail($id);
            $data->delete();
            $result = new BookDecriptionResource($data);
            return response()->json(
                [
                    "message" => "successfull",
                    "data" => $result
                ],
                200
            );
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
