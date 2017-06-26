<?php
Route::group(['middleware' => 'web', 'prefix' => 'nanocms'], function () {
    Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/home', ['uses' => '\nanosoluctions\nanocms\controllers\CMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/dashboard', ['uses' => '\nanosoluctions\nanocms\controllers\CMSHomeController@index', 'as' => 'nano.cms.dashboard']);

    /* Rotas organizadas para usuários */
    Route::group(['prefix' => 'usuarios', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@index', 'as' => 'nano.cms.usuarios.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@index', 'as' => 'nano.cms.usuarios.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@create', 'as' => 'nano.cms.usuarios.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@store', 'as' => 'nano.cms.usuarios.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@edit', 'as' => 'nano.cms.usuarios.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@update', 'as' => 'nano.cms.usuarios.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@lixeira', 'as' => 'nano.cms.usuarios.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@ativar', 'as' => 'nano.cms.usuarios.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSUserController@delete', 'as' => 'nano.cms.usuarios.delete']);
    });

    /* Rotas organizadas para páginas */
    Route::group(['prefix' => 'paginas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@index', 'as' => 'nano.cms.paginas.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@index', 'as' => 'nano.cms.paginas.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@create', 'as' => 'nano.cms.paginas.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@store', 'as' => 'nano.cms.paginas.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@edit', 'as' => 'nano.cms.paginas.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@update', 'as' => 'nano.cms.paginas.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@lixeira', 'as' => 'nano.cms.paginas.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@ativar', 'as' => 'nano.cms.paginas.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPaginasController@delete', 'as' => 'nano.cms.paginas.delete']);
    });

    /* Rotas organizadas para banners */
    Route::group(['prefix' => 'banners', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@index', 'as' => 'nano.cms.banners.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@index', 'as' => 'nano.cms.banners.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@create', 'as' => 'nano.cms.banners.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@store', 'as' => 'nano.cms.banners.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@edit', 'as' => 'nano.cms.banners.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@update', 'as' => 'nano.cms.banners.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@lixeira', 'as' => 'nano.cms.banners.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@ativar', 'as' => 'nano.cms.banners.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSBannersController@delete', 'as' => 'nano.cms.banners.delete']);
    });

    /* Rotas organizadas para menus */
    Route::group(['prefix' => 'menus', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@index', 'as' => 'nano.cms.menus.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@index', 'as' => 'nano.cms.menus.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@create', 'as' => 'nano.cms.menus.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@store', 'as' => 'nano.cms.menus.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@edit', 'as' => 'nano.cms.menus.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@update', 'as' => 'nano.cms.menus.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@lixeira', 'as' => 'nano.cms.menus.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@ativar', 'as' => 'nano.cms.menus.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusController@delete', 'as' => 'nano.cms.menus.delete']);
    });

    /* Rotas organizadas para itens de menus */
    Route::group(['prefix' => 'menus-itens', 'where' => ['id' => '[0-9]+']], function () {
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@store', 'as' => 'nano.cms.menus-itens.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@edit', 'as' => 'nano.cms.menus-itens.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@update', 'as' => 'nano.cms.menus-itens.update']);
        Route::post('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@lixeira', 'as' => 'nano.cms.menus-itens.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@ativar', 'as' => 'nano.cms.menus-itens.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSMenusItensController@delete', 'as' => 'nano.cms.menus-itens.delete']);
    });

    /* Rotas organizadas para forms */
    Route::group(['prefix' => 'forms', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@index', 'as' => 'nano.cms.forms.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@index', 'as' => 'nano.cms.forms.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@create', 'as' => 'nano.cms.forms.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@store', 'as' => 'nano.cms.forms.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@edit', 'as' => 'nano.cms.forms.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@update', 'as' => 'nano.cms.forms.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@lixeira', 'as' => 'nano.cms.forms.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@ativar', 'as' => 'nano.cms.forms.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFormsController@delete', 'as' => 'nano.cms.forms.delete']);
    });

    /* Rotas organizadas para itens de menus */
    Route::group(['prefix' => 'fields', 'where' => ['id' => '[0-9]+']], function () {
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@store', 'as' => 'nano.cms.fields.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@edit', 'as' => 'nano.cms.fields.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@update', 'as' => 'nano.cms.fields.update']);
        Route::post('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@lixeira', 'as' => 'nano.cms.fields.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@ativar', 'as' => 'nano.cms.fields.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSFieldsController@delete', 'as' => 'nano.cms.fields.delete']);
    });

    /* Rotas organizadas para posts */
    Route::group(['prefix' => 'posts', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@index', 'as' => 'nano.cms.posts.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@index', 'as' => 'nano.cms.posts.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@create', 'as' => 'nano.cms.posts.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@store', 'as' => 'nano.cms.posts.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@edit', 'as' => 'nano.cms.posts.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@update', 'as' => 'nano.cms.posts.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@lixeira', 'as' => 'nano.cms.posts.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@ativar', 'as' => 'nano.cms.posts.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSPostsController@delete', 'as' => 'nano.cms.posts.delete']);
    });

    /* Rotas organizadas para categorias */
    Route::group(['prefix' => 'categorias', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@index', 'as' => 'nano.cms.categorias.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@index', 'as' => 'nano.cms.categorias.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@create', 'as' => 'nano.cms.categorias.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@store', 'as' => 'nano.cms.categorias.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@edit', 'as' => 'nano.cms.categorias.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@update', 'as' => 'nano.cms.categorias.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@lixeira', 'as' => 'nano.cms.categorias.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@ativar', 'as' => 'nano.cms.categorias.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSCategoriasController@delete', 'as' => 'nano.cms.categorias.delete']);
    });

    /* Rotas organizadas para agendas */
    Route::group(['prefix' => 'agendas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@index', 'as' => 'nano.cms.agendas.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@index', 'as' => 'nano.cms.agendas.index']);
        Route::get('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@create', 'as' => 'nano.cms.agendas.create']);
        Route::post('inserir', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@store', 'as' => 'nano.cms.agendas.store']);
        Route::get('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@edit', 'as' => 'nano.cms.agendas.edit']);
        Route::post('{id}/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@update', 'as' => 'nano.cms.agendas.update']);
        Route::get('{id}/lixeira', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@lixeira', 'as' => 'nano.cms.agendas.lixeira']);
        Route::get('{id}/ativar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@ativar', 'as' => 'nano.cms.agendas.ativar']);
        Route::get('{id}/deletar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSAgendasController@delete', 'as' => 'nano.cms.agendas.delete']);
    });

    /* Rotas organizadas para configurações */
    Route::group(['prefix' => 'configs', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => '\nanosoluctions\nanocms\controllers\CMSConfigsController@index', 'as' => 'nano.cms.configs.index']);
        Route::get('index', ['uses' => '\nanosoluctions\nanocms\controllers\CMSConfigsController@index', 'as' => 'nano.cms.configs.index']);
        Route::get('/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSConfigsController@edit', 'as' => 'nano.cms.configs.edit']);
        Route::post('/editar', ['uses' => '\nanosoluctions\nanocms\controllers\CMSConfigsController@update', 'as' => 'nano.cms.configs.update']);
    });

    /* Rotas organizadas para niveis */
	Route::group(['prefix' => 'nivel', 'where' => ['id' => '[0-9]+']], function () {
	    Route::post('{id}/lixeira', ['uses' => 'NiveisController@lixeira', 'as' => 'nivel.lixeira']);
	    Route::post('/inserir', ['uses' => 'NiveisController@store', 'as' => 'nivel.store']);
	});
});