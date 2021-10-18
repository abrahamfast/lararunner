<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/register', function(Request $request){
    $data = $request->all();
    $data['password'] = hash::make($data['password']);
    $user = App\Models\User::create($data);

    return $user->createToken($request->device_name)->plainTextToken;
});

Route::post('/user/login', function(Request $request){
    $dataJson = $request->json();

    $user = App\Models\User::where('email', $dataJson->get('email'))->first();


    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
    dd($dataJson);
});

Route::get('/resturant', function(Request $request){
    $resturants = App\Models\Resturant::all();

    $resturants->map(function($item){
        $item->cover = "https://france.pelk.io/storage/restaurant/cover/{$item->cover_image}";
        $item->logo = "https://france.pelk.io/storage/restaurant/logo/{$item->main_image}";
        return $item;
    });

    return $resturants;
});

Route::get('/resturant/{id}', function(Request $request, $id){
    return App\Models\Resturant::findOrfail($id);
});
