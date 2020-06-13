<?php
// ***************************************************************************
// ROUTE TEST CON ITERAZIONI A 10 ***************
Route::get('/', function () {

    $test = 'FUSILLI';

    $test2 = 'MACCHERONI';

    $iterazioni = 10;

    return view('welcome', compact("test", "test2", "iterazioni"));
})->name("welcome");
// ***************************************************************************
// ROUTE TEST CON ITERAZIONI A 20 ***************
Route::get('/home20', function () {

    $test = 'CORTA';

    $test2 = 'LUNGA';

    $iterazioni = 20;

    return view('welcome', compact("test", "test2", "iterazioni"));
})->name('home20');


// ***************************************************************************
// ROUTE PASTA GENERICA ***************
Route::get('/listaPastaGen', function () {

    $pastaGenerica = config('pasta');
    $count = count($pastaGenerica);

    return view('listaPasta', compact("pastaGenerica","count"));
})->name('pasta');
// ***************************************************************************
// ROUTE SOLO PASTA LUNGA ***************
Route::get('/listaPastaLunga', function () {

    $pastaGenerica = config('pasta');

    $pastaLunga = [];

    foreach ($pastaGenerica as $pasta) {
      $tipo = $pasta["tipo"];
      if ($tipo == "lunga") {
        $pastaLunga[] = $pasta;
      }
    }
    $count = count($pastaLunga);
    return view('pastaLunga', compact("pastaLunga", "count"));
})->name('pastaLunga');

// ***************************************************************************
// ROUTE SOLO PASTA CORTA ***************
Route::get('/listaPastaCorta', function () {

    $pastaGenerica = config('pasta');

    $pastaCorta = [];
    foreach ($pastaGenerica as $pasta) {
      $tipo = $pasta["tipo"];
      if ($tipo == "corta") {
        $pastaCorta[] = $pasta;
      }
    }
    $count = count($pastaCorta);
    return view('pastaCorta', compact("pastaCorta", "count"));
})->name('pastaCorta');

// ***************************************************************************
// ROUTE SOLO PASTA CORTISSIMA ***************
Route::get('/listaPastaCortissima', function () {

    $pastaGenerica = config('pasta');

    $pastaCortissima = [];
    foreach ($pastaGenerica as $pasta) {
      $tipo = $pasta["tipo"];
      if ($tipo == "cortissima") {
        $pastaCortissima[] = $pasta;
      }
    }
    $count = count($pastaCortissima);
    return view('pastaCortissima', compact("pastaCortissima","count"));
})->name('pastaCortissima');


// ***************************************************************************
// PROVA ALL ***************
Route::get('/lungaImg', function () {
  $pastaGenerica = config('pasta');
  $pastaLunga = [];
  foreach ($pastaGenerica as $pasta) {
    if ($pasta["tipo"] === "lunga") {
      $pastaLunga[] = $pasta;
    }
  }
  return view('all', compact("pastaLunga"));
})->name("allLunga");
// ***************************************************************************
// PROVA ALL ***************
Route::get('/cortaImg', function () {
  $pastaGenerica = config('pasta');
  $pastaCorta = [];
  foreach ($pastaGenerica as $pasta) {
    if ($pasta["tipo"] === "corta") {
      $pastaCorta[] = $pasta;
    }
  }
  return view('all', compact("pastaCorta"));
})->name("allCorta");
// ***************************************************************************
// PROVA ALL ***************
Route::get('/allCortissima', function () {
  $pastaGenerica = config('pasta');
  $pastaCortissima = [];
  foreach ($pastaGenerica as $pasta) {
    if ($pasta["tipo"] === "cortissima") {
      $pastaCortissima[] = $pasta;
    }
  }
    return view('all', compact('pastaCortissima'));
})->name("allCortissima");
