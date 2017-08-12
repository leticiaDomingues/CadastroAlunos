<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index')->with(['alunos'=>$alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'nome' => 'required|max:100',
                'serie' => 'required|numeric|between:1,9',
                'dataNasc' => 'required|date_format:"Y-m-d"',
                'rua' => 'required|max:120',
                'numero' => 'required|numeric|between:0,9999',
                'bairro' => 'required|max:100',
                'complemento' => 'nullable|max:50',
                'cidade' => 'required|max:100',
                'estado' => 'required|size:2',
                'cep' => 'required|regex:/^[0-9]{8}$/',
                'nomeMae' => 'required|max:100',
                'cpfMae' => 'required|regex:/^[0-9]{11}$/',
                'dataPagamento' => 'required|date_format:"Y-m-d"'
            ]);

        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->serie = $request->serie;
        $aluno->dataNasc = $request->dataNasc;
        $aluno->rua = $request->rua;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->complemento = $request->complemento;
        $aluno->cidade = $request->cidade;
        $aluno->estado = $request->estado;
        $aluno->cep = $request->cep;
        $aluno->nomeMae = $request->nomeMae;
        $aluno->cpfMae = $request->cpfMae;
        $aluno->dataPagamento = $request->dataPagamento;

        $aluno->save();
        session()->flash('message','Aluno(a) cadastrado(a) com sucesso.');
        return redirect('aluno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('aluno.show')->with(['aluno'=>$aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $estados = array(
            array("AC","Acre"),
            array("AL","Alagoas"),
            array("AP","Amapá"),
            array("AM","Amazonas"),
            array("BA","Bahia"),
            array("CE","Ceará"),
            array("DF","Distrito Federal"),
            array("ES","Espírito Santo"),
            array("GO","Goiás"),
            array("MA","Maranhão"),
            array("MT","Mato Grosso"),
            array("MS","Mato Grosso do Sul"),
            array("MG","Minas Gerais"),
            array("PA","Pará"),
            array("PB","Paraíba"),
            array("PR","Paraná"),
            array("PE","Pernambuco"),
            array("PI","Piauí"),
            array("RJ","Rio de Janeiro"),
            array("RN","Rio Grande do Norte"),
            array("RS","Rio Grande do Sul"),
            array("RO","Rondônia"),
            array("RR","Roraima"),
            array("SC","Santa Catarina"),
            array("SP","São Paulo"),
            array("SE","Sergipe"),
            array("SP","São Paulo")
        );
        return view('aluno.edit')->with(['aluno'=>$aluno, 'estados'=>$estados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'nome' => 'required|max:100',
                'serie' => 'required|numeric|between:1,9',
                'dataNasc' => 'required|date_format:"Y-m-d"',
                'rua' => 'required|max:120',
                'numero' => 'required|numeric|between:0,9999',
                'bairro' => 'required|max:100',
                'complemento' => 'nullable|max:50',
                'cidade' => 'required|max:100',
                'estado' => 'required|size:2',
                'cep' => 'required|regex:/^[0-9]{8}$/',
                'nomeMae' => 'required|max:100',
                'cpfMae' => 'required|regex:/^[0-9]{11}$/',
                'dataPagamento' => 'required|date_format:"Y-m-d"'
            ]);
        $aluno = Aluno::find($id);
        $aluno->nome = $request->nome;
        $aluno->serie = $request->serie;
        $aluno->dataNasc = $request->dataNasc;
        $aluno->rua = $request->rua;
        $aluno->numero = $request->numero;
        $aluno->bairro = $request->bairro;
        $aluno->complemento = $request->complemento;
        $aluno->cidade = $request->cidade;
        $aluno->estado = $request->estado;
        $aluno->cep = $request->cep;
        $aluno->nomeMae = $request->nomeMae;
        $aluno->cpfMae = $request->cpfMae;
        $aluno->dataPagamento = $request->dataPagamento;

        $aluno->save();
        session()->flash('message','Dados do(a) aluno(a) alterados com sucesso.');
        return redirect('aluno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        session()->flash('message','Aluno(a) excluído(a) com sucesso.');
        return redirect('aluno');
    }
}
