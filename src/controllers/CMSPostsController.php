<?php namespace NanoSoluctions\NanoCMS\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use NanoCMSPost;
use NanoCMSCategoria;
use NanoSoluctions\NanoConfigs\Models\NanoConfig;

class NanoNanoCMSPostsController extends NanoConfigs::_PATH_CONTROLLER . '\NanoController {

    public function __construct(Request $request) {
        parent::__construct();
        parent::checkAcess('accessPosts');

        $this->middleware('auth');
        $this->area = 'nano.cms.posts';
        $this->retorno = array();
        $this->request = $request->except('_token');
        $this->retorno['categorias'] = NanoCMSCategoria::ativos()->get();

        if (Session::has('mensagem')) {
            $this->retorno['mensagem'] = Session::get('mensagem');
            Session::pull('mensagem');
        }
    }

    /**
     *   Listagem dos Post
     */
    public function index() {
        $posts = NanoCMSPost::ativos()
                ->paginate(env('25'));

        $this->retorno['posts'] = $posts;
        return view($this->area . ".index", $this->retorno);
    }

    /**
     * 	Cadastro de Post
     */
    public function create() {
        return view($this->area . ".inserir", $this->retorno);
    }

    /**
     * 	Inserir usuário no banco
     */
    public function store() {
        $rules = array(
            'titulo' => 'required',
            'conteudo' => 'required',
        );

        $validator = Validator($this->request, $rules);
        if ($validator->fails()) {
            $this->retorno['errors'] = $validator->errors();
            $this->retorno['request'] = $this->request;
            return view($this->area . '.inserir')->with($this->retorno);
        } else {
            $post = new NanoCMSPost;
            $post->titulo = $this->request['titulo'];            
            $post->url = $this->request['url'];
            //$post->data = $this->request['data'];
            $post->conteudo = $this->request['conteudo'];
            
            if(isset($this->request['categoria_id']))
                $post->categoria_id;
            
            $post->destaque = $this->request['destaque'];
            $post->ordem = $this->request['ordem'];
            $post->ativo = 'sim';
            $post->agent_id = $this->usuario_logado->id;

            if (Input::hasFile('imagem')) {
                $ext = Input::file('imagem')->getClientOriginalExtension();
                $post->imagem = setUri($post->titulo) . '.' . $ext;
                Input::file('imagem')->move('NanoCMS/img/posts', setUri($post->titulo));
            }

            if ($post->save()) {
                Session::put('mensagem', [
                    'class' => 'alert-success',
                    'text' => 'Post criado com sucesso!'
                ]);
                return redirect()->route($this->area . '.index')->with($this->retorno);
            }

            $this->retorno['mensagem'] = [
                'class' => 'alert-danger',
                'text' => 'Houve algum erro durante o processo. Por favor, tente mais tarde.'
            ];
            return view($this->area . '.inserir')->with($this->retorno);
        }
    }

    /**
     * 	Edição de Post
     */
    public function edit($id) {
        $this->retorno['post'] = NanoCMSPost::find($id);

        return view($this->area . '.editar', $this->retorno);
    }

    /**
     * 	Editar usuário no banco
     */
    public function update($id) {
        $rules = array(
            'titulo' => 'required',
            'conteudo' => 'required',
        );

        $validator = Validator($this->request, $rules);
        if ($validator->fails()) {
            $this->retorno['errors'] = $validator->errors();
            $this->retorno['request'] = $this->request;
            return view($this->area . '.inserir')->with($this->retorno);
        } else {
            $post = NanoCMSPost::find($id);
            $post->titulo = $this->request['titulo'];            
            $post->url = $this->request['url'];
            //$post->data = $this->request['data'];
            $post->conteudo = $this->request['conteudo'];

            if(isset($this->request['categoria_id']))
                $post->categoria_id = $this->request['categoria_id'];
            
            $post->destaque = $this->request['destaque'];
            $post->ordem = $this->request['ordem'];
            $post->agent_id = $this->usuario_logado->id;

            if (Input::hasFile('imagem')) {
                $ext = Input::file('imagem')->getClientOriginalExtension();
                $post->imagem = setUri($post->titulo) . '.' . $ext;
                Input::file('imagem')->move('NanoCMS/img/posts', setUri($post->titulo));
            }

            if ($post->save()) {
                Session::put('mensagem', [
                    'class' => 'alert-success',
                    'text' => 'Post editado com sucesso!'
                ]);
                return redirect()->route($this->area . '.index')->with($this->retorno);
            }

            $this->retorno['mensagem'] = [
                'class' => 'alert-danger',
                'text' => 'Houve algum erro durante o processo. Por favor, tente mais tarde.'
            ];
            return view($this->area . '.inserir')->with($this->retorno);
        }
    }

    /**
     * Desativar Post
     */
    public function lixeira($id) {
        $post = NanoCMSPost::find($id);
        $post->lixeira = 'sim';

        if ($post->save()) {
            Session::put('mensagem', [
                'class' => 'alert-success',
                'text' => 'Post enviad0 para a lixeira'
            ]);
        } else {
            Session::put('mensagem', [
                'class' => 'alert-danger',
                'text' => 'Houve algum erro durante o processo. Por favor, tente mais tarde.'
            ]);
        }

        return redirect()->route($this->area . '.index')->with($this->retorno);
    }

    /**
     * Ativar Post
     */
    public function ativar($id) {
        $post = NanoCMSPost::find($id);
        $post->lixeira = '';

        if ($post->save()) {
            Session::put('mensagem', [
                'class' => 'alert-success',
                'text' => 'Post restaurado com sucesso!'
            ]);
        } else {
            Session::put('mensagem', [
                'class' => 'alert-danger',
                'text' => 'Houve algum erro durante o processo. Por favor, tente mais tarde.'
            ]);
        }

        return redirect()->route($this->area . '.index')->with($this->retorno);
    }

    /**
     * 	Deletar Post
     */
    public function delete($id) {
        if (NanoCMSPost::find($id)->delete()) {
            Session::put('mensagem', [
                'class' => 'alert-success',
                'text' => '`Post excluído com sucesso!'
            ]);
        } else {
            Session::put('mensagem', [
                'class' => 'alert-danger',
                'text' => 'Houve algum erro durante o processo. Por favor, tente mais tarde.'
            ]);
        }

        return redirect()->route($this->area . '.index')->with($this->retorno);
    }

}
