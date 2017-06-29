@extends('nano.layout')
@section('content')

<div class="container">
    @if(isset($mensagem))
    <ul class="alert {{ $mensagem['class'] }}">
        <li>{{ $mensagem['text'] }}</li>
    </ul>
    @endif

    @if ($errors->any())
    <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <div class="row">
        <div class="col-md-12">
            <h1>Menus / Inserir</h1>
        </div>

        <form name="frm" action="{{ route("nano.cms.menus.store")}}" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="titulo" class="col-sm-3 control-label">Título:</label>
                    <div class="col-sm-9">
                        <input name="titulo" type="text" value="@if(isset($request['titulo'])) {{$request['titulo']}} @endif" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="col-md-6">                
                <div class="form-group">
                    <label for="tipo" class="col-sm-3 control-label">Tipo:</label>
                    <div class="col-sm-9">
                        <select name="tipo" class="form-control">
                            <option value="">Selecione um:</option>
                            <option value="top"  @if(isset($request)) {{ $request['tipo'] == 'top' ? 'selected=selected' : '' }} @endif>Top</option>
                            <option value="bottom"  @if(isset($request)) {{ $request['tipo'] == 'bottom' ? 'selected=selected' : '' }} @endif>Bottom</option>
                            <option value="lateral"  @if(isset($request)) {{ $request['tipo'] == 'lateral' ? 'selected=selected' : '' }} @endif>Lateral</option>
                            <option value="sitemap"  @if(isset($request)) {{ $request['tipo'] == 'sitemap' ? 'selected=selected' : '' }} @endif>Sitemap</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <div class="pull-right ">
                        <br>
                        <a href="javascript:history.back(-1)">
                            <button type="button" class="btn btn-default">Voltar</button>
                        </a>
                        <button type="submit"  class="btn btn-primary">SALVAR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
