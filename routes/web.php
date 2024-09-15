<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/works', function () {
    return view('gallery');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/aircon', function () {
    return view('aircon');
});
Route::get('/price', function () {
    return view('price');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/brands', function () {
    return view('brands');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/plumbing', function () {
    return view('plumbing');
});
Route::get('/electric', function () {
    return view('electric');
});
Route::get('/handyman', function () {
    return view('handyman');
});
Route::get('/deepclean', function () {
    return view('deepclean');
});
Route::get('/floorpolish', function () {
    return view('floorpolish');
});
Route::get('/floorclean', function () {
    return view('floorclean');
});
Route::get('/wood', function () {
    return view('wood');
});
Route::get('/decking', function () {
    return view('decking');
});
Route::get('/searchPlumber', function () {
    return view('searchPlumber');
});
Route::get('/searchElectric', function () {
    return view('searchElectric');
});
Route::get('/searchHandyMan', function () {
    return view('searchHandyman');
});
Route::get('/searchDeepclean', function () {
    return view('searchDeepclean');
});
Route::get('/searchFloorPolish', function () {
    return view('searchFloorPolish');
});
Route::get('/searchFloorClean', function () {
    return view('searchFloorClean');
});
Route::get('/searchWood', function () {
    return view('searchWood');
});

Route::get('/searchDecking', function () {
    return view('searchDecking');
});
Route::get('/noSearch', function () {
    return view('noSearch');
});
Route::get('/balconyDeck', function () {
    return view('balconyDeck');
});

Route::get('/timberDeck', function () {
    return view('timberDeck');
});
Route::get('/parquetVarnish', function () {
    return view('parquetVarnish');
});
Route::get('/floorDeep', function () {
    return view('floorDeep');
});
Route::get('/vinylClean', function () {
    return view('vinylClean');
});
Route::get('/vinylFloorClean', function () {
    return view('vinylFloorClean');
});
Route::get('/vinylDeepFloorClean', function () {
    return view('vinylDeepFloorClean');
});
Route::get('/terrazzoClean', function () {
    return view('terrazzoClean');
});

Route::get('/marbleFloorPolish', function () {
    return view('marbleFloorPolish');
});
Route::get('/marblePolish', function () {
    return view('marblePolish');
});
Route::get('/parquetPolish', function () {
    return view('parquetPolishing');
});
Route::get('/woodPolish', function () {
    return view('woodPolishing');
});
Route::get('/vinylFloorPolish', function () {
    return view('vinylFloorPolish');
});
Route::get('/tileFloorPolish', function () {
    return view('tileFloorPolish');
});
Route::get('/matressClean', function () {
    return view('matressClean');
});
Route::get('/matressDeepClean', function () {
    return view('matressDeepClean');
});
Route::get('/matressstemClean', function () {
    return view('matressstemClean');
});
Route::get('/matrissStainClean', function () {
    return view('matrissStainClean');
});
Route::get('/sofaClean', function () {
    return view('sofaClean');
});

Route::get('/sofaDeepClean', function () {
    return view('sofaDeepClean');
});
Route::get('/sofaStain', function () {
    return view('sofaStain');
});
Route::get('/fabricSofaClean', function () {
    return view('fabricSofaClean');
});
Route::get('/unholsteryClean', function () {
    return view('unholsteryClean');
});
Route::get('/rubbishChute', function () {
    return view('rubbishChute');
});
Route::get('/cupboard', function () {
    return view('cupboard');
});
Route::get('/cabinetHinge', function () {
    return view('cabinetHinge');
});
Route::get('/hydraulic', function () {
    return view('hydraulic');
});
Route::get('/drilling', function () {
    return view('drilling');
});
Route::get('/tvBuaket', function () {
    return view('tvBacket');
});
Route::get('/wallMounting', function () {
    return view('wallMounting');
});
Route::get('/pullUp', function () {
    return view('pullUp');
});
Route::get('/electricalInstall', function () {
    return view('electricalInstall');
});
Route::get('/electricRepair', function () {
    return view('electricRepair');
});
Route::get('/lightService', function () {
    return view('lightService');
});
Route::get('/switchService', function () {
    return view('switchService');
});
Route::get('/powerSocket', function () {
    return view('powerSocket');
});
Route::get('/hdrElectric', function () {
    return view('hdrElectric');
});
Route::get('/smartSwitch', function () {
    return view('smartSwitch');
});

Route::get('/lightInstall', function () {
    return view('lightInstall');
});

Route::get('/lightReplace', function () {
    return view('lightReplace');
});
Route::get('/plumbingInstall', function () {
    return view('plumbingInstall');
});
Route::get('/plumbingChoke', function () {
    return view('plumbingChoke');
});
Route::get('/plumbingLeak', function () {
    return view('plumbingLeak');
});
Route::get('/waterHeater', function () {
    return view('waterHeater');
});
Route::get('/toiletBowl', function () {
    return view('toiletBowl');
});
Route::get('/showerService', function () {
    return view('showerService');
});
Route::get('/tapFaucet', function () {
    return view('tapFaucet');
});
Route::get('/bidetSpray', function () {
    return view('bidetSpray');
});

Route::get('/coomercialPlumber', function () {
    return view('coomercialPlumber');
});
Route::get('/pipeInstall', function () {
    return view('pipeInstall');
});
Route::get('/bathroomRack', function () {
    return view('bathroomRack');
});
Route::get('/tapLeak', function () {
    return view('tapLeak');
});
Route::get('/heaterLeak', function () {
    return view('heaterLeak');
});
Route::get('/heaterinstall', function () {
    return view('heaterinstall');
});

Route::get('/waterheaterLeak', function () {
    return view('waterheaterLeak');
});
Route::get('/heaterRepair', function () {
    return view('heaterRepair');
});
Route::get('/toiletRepair', function () {
    return view('toiletRepair');
});
Route::get('/showerInstall', function () {
    return view('showerInstall');
});
Route::get('/showerRepair', function () {
    return view('showerRepair');
});






Route::fallback(function () {
    return response()->view('404', [], 404);
});




Route::get('/test', function () {
    return view('test');
});
