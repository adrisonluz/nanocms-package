<?php
Route::group(['middleware' => 'web', 'prefix' => 'nanocms'], function () {
    Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/home', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSHomeController@index', 'as' => 'nano.cms.dashboard']);
    Route::get('/dashboard', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSHomeController@index', 'as' => 'nano.cms.dashboard']);

    /* Rotas organizadas para usuários */
    Route::group(['prefix' => 'usuarios', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@index', 'as' => 'nano.cms.usuarios.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@index', 'as' => 'nano.cms.usuarios.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@create', 'as' => 'nano.cms.usuarios.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@store', 'as' => 'nano.cms.usuarios.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@edit', 'as' => 'nano.cms.usuarios.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@update', 'as' => 'nano.cms.usuarios.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@lixeira', 'as' => 'nano.cms.usuarios.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@ativar', 'as' => 'nano.cms.usuarios.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSUserController@delete', 'as' => 'nano.cms.usuarios.delete']);
    });

    /* Rotas organizadas para páginas */
    Route::group(['prefix' => 'paginas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@index', 'as' => 'nano.cms.paginas.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@index', 'as' => 'nano.cms.paginas.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@create', 'as' => 'nano.cms.paginas.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@store', 'as' => 'nano.cms.paginas.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@edit', 'as' => 'nano.cms.paginas.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@update', 'as' => 'nano.cms.paginas.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@lixeira', 'as' => 'nano.cms.paginas.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@ativar', 'as' => 'nano.cms.paginas.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPaginasController@delete', 'as' => 'nano.cms.paginas.delete']);
    });

    /* Rotas organizadas para banners */
    Route::group(['prefix' => 'banners', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@index', 'as' => 'nano.cms.banners.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@index', 'as' => 'nano.cms.banners.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@create', 'as' => 'nano.cms.banners.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@store', 'as' => 'nano.cms.banners.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@edit', 'as' => 'nano.cms.banners.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@update', 'as' => 'nano.cms.banners.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@lixeira', 'as' => 'nano.cms.banners.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@ativar', 'as' => 'nano.cms.banners.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSBannersController@delete', 'as' => 'nano.cms.banners.delete']);
    });

    /* Rotas organizadas para menus */
    Route::group(['prefix' => 'menus', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@index', 'as' => 'nano.cms.menus.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@index', 'as' => 'nano.cms.menus.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@create', 'as' => 'nano.cms.menus.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@store', 'as' => 'nano.cms.menus.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@edit', 'as' => 'nano.cms.menus.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@update', 'as' => 'nano.cms.menus.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@lixeira', 'as' => 'nano.cms.menus.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@ativar', 'as' => 'nano.cms.menus.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusController@delete', 'as' => 'nano.cms.menus.delete']);
    });

    /* Rotas organizadas para itens de menus */
    Route::group(['prefix' => 'menus-itens', 'where' => ['id' => '[0-9]+']], function () {
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@store', 'as' => 'nano.cms.menus-itens.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@edit', 'as' => 'nano.cms.menus-itens.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@update', 'as' => 'nano.cms.menus-itens.update']);
        Route::post('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@lixeira', 'as' => 'nano.cms.menus-itens.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@ativar', 'as' => 'nano.cms.menus-itens.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSMenusItensController@delete', 'as' => 'nano.cms.menus-itens.delete']);
    });

    /* Rotas organizadas para forms */
    Route::group(['prefix' => 'forms', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@index', 'as' => 'nano.cms.forms.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@index', 'as' => 'nano.cms.forms.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@create', 'as' => 'nano.cms.forms.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@store', 'as' => 'nano.cms.forms.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@edit', 'as' => 'nano.cms.forms.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@update', 'as' => 'nano.cms.forms.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@lixeira', 'as' => 'nano.cms.forms.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@ativar', 'as' => 'nano.cms.forms.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFormsController@delete', 'as' => 'nano.cms.forms.delete']);
    });

    /* Rotas organizadas para itens de menus */
    Route::group(['prefix' => 'fields', 'where' => ['id' => '[0-9]+']], function () {
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@store', 'as' => 'nano.cms.fields.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@edit', 'as' => 'nano.cms.fields.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@update', 'as' => 'nano.cms.fields.update']);
        Route::post('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@lixeira', 'as' => 'nano.cms.fields.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@ativar', 'as' => 'nano.cms.fields.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSFieldsController@delete', 'as' => 'nano.cms.fields.delete']);
    });

    /* Rotas organizadas para posts */
    Route::group(['prefix' => 'posts', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@index', 'as' => 'nano.cms.posts.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@index', 'as' => 'nano.cms.posts.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@create', 'as' => 'nano.cms.posts.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@store', 'as' => 'nano.cms.posts.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@edit', 'as' => 'nano.cms.posts.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@update', 'as' => 'nano.cms.posts.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@lixeira', 'as' => 'nano.cms.posts.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@ativar', 'as' => 'nano.cms.posts.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSPostsController@delete', 'as' => 'nano.cms.posts.delete']);
    });

    /* Rotas organizadas para categorias */
    Route::group(['prefix' => 'categorias', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@index', 'as' => 'nano.cms.categorias.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@index', 'as' => 'nano.cms.categorias.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@create', 'as' => 'nano.cms.categorias.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@store', 'as' => 'nano.cms.categorias.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@edit', 'as' => 'nano.cms.categorias.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@update', 'as' => 'nano.cms.categorias.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@lixeira', 'as' => 'nano.cms.categorias.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@ativar', 'as' => 'nano.cms.categorias.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSCategoriasController@delete', 'as' => 'nano.cms.categorias.delete']);
    });

    /* Rotas organizadas para agendas */
    Route::group(['prefix' => 'agendas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@index', 'as' => 'nano.cms.agendas.index']);
        Route::get('index', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@index', 'as' => 'nano.cms.agendas.index']);
        Route::get('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@create', 'as' => 'nano.cms.agendas.create']);
        Route::post('inserir', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@store', 'as' => 'nano.cms.agendas.store']);
        Route::get('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@edit', 'as' => 'nano.cms.agendas.edit']);
        Route::post('{id}/editar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@update', 'as' => 'nano.cms.agendas.update']);
        Route::get('{id}/lixeira', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@lixeira', 'as' => 'nano.cms.agendas.lixeira']);
        Route::get('{id}/ativar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@ativar', 'as' => 'nano.cms.agendas.ativar']);
        Route::get('{id}/deletar', ['uses' => NanoCMS::_PATH_CONTROLLERS . '\NanoCMSAgendasController@delete', 'as' => 'nano.cms.agendas.delete']);
    });

    /* Rotas organizadas para configurações */
    Route::group(['prefix' => 'configs', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['uses' => NanoConfigs::_PATH_CONTROLLERS . '\NanoCMSConfigsController@index', 'as' => 'nano.configs.index']);
        Route::get('index', ['uses' => NanoConfigs::_PATH_CONTROLLERS . '\NanoCMSConfigsController@index', 'as' => 'nano.configs.index']);
        Route::get('/editar', ['uses' => NanoConfigs::_PATH_CONTROLLERS . '\NanoCMSConfigsController@edit', 'as' => 'nano.configs.edit']);
        Route::post('/editar', ['uses' => NanoConfigs::_PATH_CONTROLLERS . '\NanoCMSConfigsController@update', 'as' => 'nano.configs.update']);
    });
});