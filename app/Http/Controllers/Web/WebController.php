<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use App\Models\Quarto;
use App\Models\Sanitize;
use Illuminate\Http\Request;

class WebController extends Controller
{
    protected $cliente;
    protected $quarto;

    public function __construct(Cliente $cliente, Quarto $quarto)
    {
        $this->cliente = $cliente;
        $this->quarto = $quarto;
    }

    public function home(){
        return view('web.home');
    }

    public function login(){
        return view('web.login');
    }

    public function register(){
        return view('web.register');
    }

    public function storeRegister(ClienteRequest $request){
        try{
            $request->merge([
                'id' => app(Sanitize::class)->generateUniqueId(),
                'password' => $request->password?bcrypt($request->password):null
            ]);
            $this->cliente->create($request->all());
            $notification = array(
                'title'=> "Sucesso!",
                'message'=> "Parabéns, seu cadastro foi efetuado com sucesso!",
                'alert-type' => 'success'
            );
            return redirect()->route('web.home')->with($notification);
        }
        catch(\Exception $e){
            $notification = array(
                'title'=> "Aviso!",
                'message'=> "Sua tentativa de registro falhou, tente novamente!",
                'alert-type' => 'warning'
            );
            return back()->with($notification)->withInput();
        }

    }

    public function sobreNos(){
        return view('web.sobre-nos');
    }

    public function contato(){
        return view('web.contato');
    }

    public function acomodacao(){
        $quartos = $this->quarto->all();
        return view('web.acomodacao', compact('quartos'));
    }

    public function acomodacaoDetail(int $quarto){
        $quarto = Quarto::where('id', $quarto)->first();
        return view('web.acomodacao-detail', compact('quarto'));
    }

    public function pagamentoReserva(){
        return view ('web.pagamento-reserva');
    }


}
