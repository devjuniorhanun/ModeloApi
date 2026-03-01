<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            font-size: 15px;
            text-align: left;
            table-layout: fixed;

        }


        .testeTotal {
            border: 1px solid black;
            text-align: center;
            font-size: 18px;
        }

        .teste {
            border: 1px solid black;

        }

        .testeCentro {
            text-align: center;
            font-size: 18px;
        }

        .fundoFazenda {
            background-color: #fbef3c;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
        }

        .fundoNome {
            background-color: #DEEBF7;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
        }

        .fundoTitulo {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .ordem {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .tableControle {
            width: 395px;

            font-size: 14px;
            text-align: center;
            border: 1px solid black;

        }

        .textoCentro {
            text-align: center;
        }

        .textoDireito2 {
            text-align: right;
        }

        .textoEsquerda {
            text-align: left;
            padding-left: 6px;
        }
    </style>

    <title>Ordem de Serviço</title>
</head>

<body>

    <table>
        <tr>
            <th width=100% class="fundoFazenda teste">{{ $servico->fazenda->nome }}</th>
        </tr>
        <tr>
            <th width=100% class="fundoNome teste">{{ $servico->fazenda->proprietario->nome }}</th>
        </tr>

        <tr>
            <th width=100% class="fundoTitulo teste">ORDEM DE SERVIÇO DE APLICAÇÃO DE DEFENSIVOS AGRÍCOLA {{ $servico->safra->nome}} Nº {{ $servico->id}}
            </th>
        </tr>
        <tr>
            <td class="teste">
                <table class="ordem">

                    <tr>
                        <td><b>TALHÃO.:</b> {{ $servico->talhao->nome }}</td>
                        <td><b>ÁREA.:</b> {{ $servico->area }} Ha</td>
                        <td colspan="2"><b>VOLUME BOMBA.:</b> {{ $servico->volume_bomba }}</td>
                        <td><b>VAZÃO(LT).:</b> {{ $servico->vazao }}</td>


                    </tr>
                    <tr>
                        <td><b>CAP. BOMBA.:</b> {{ $servico->capacidade_bomba }}</td>
                        <td colspan="2"><b>OPERÃO.: </b> {{ $servico->tipoOperacaoAgricula->nome }}
                        </td>
                        <td colspan="2"><b>BOMBA RECOMENDADA</b>.: {{ $servico->bomba_recomendada }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>BOMBAS REAIS.: </b></td>
                        <td colspan="2"><b>DIFERENÇA(%).:</b></td>
                        <td><b>DATA.: </b> {{ Carbon\Carbon::parse($servico->data)->format('d/m/Y') }}</td>
                    </tr>
                </table>
            </td>

        </tr>
        <tr>
            <td class="teste">
                <table>
                    <tr>
                        <td class="teste testeCentro"><b>PRODUTOS</b></td>
                        <td class="testeTotal"><b>QTD. DE PRODUTOS POR BOMBA</b></td>
                    </tr>
                    @foreach($servico->produto() as $produto)
                    <tr>
                        <td class="teste"><span class="textoEsquerda">{{$loop->index + 1}} - </span><span class="testeCentro">{{$produto->nome}}</span></td>
                        <td class="testeTotal">{{ str_replace('.',',',$produto->dose_bomba)}} {{$produto->unidade}}</td>
                    </tr>
                    @endforeach
                    @for($i = count($servico->produto());$i < 10;$i++)
                        <tr>
                        <td class="teste">&nbsp;</td>
                        <td class="teste">&nbsp;</b></td>
        </tr>
        @endfor
    </table>
    </td>
    </tr>
    

    <tr>
        <td class="testeTotal"><b>CONTROLE DE APLICAÇÃO DATA {{Carbon\Carbon::parse($servico->data)->format('d/m/Y')}}<b></td>
    </tr>
    <tr>
        <td class="testeTotal"><b>TANQUEIRO.:</b>
            @foreach($servico->operador() as $operador)
            @if($operador->tipo_operador =="TANQUEIRO")
            {{ $operador->nome }}
            @endif
            @endforeach


        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>

                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.:</b> @foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 0)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 0)
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>

                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.: </b>@foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 1)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 1 )
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>


                </tr>

            </table>
        </td>

    </tr>
    
    <tr>
        <td class="testeTotal"><b>CONTROLE DE APLICAÇÃO DATA ___/___/_____<b></td>
    </tr>
    <tr>
        <td class="testeTotal"><b>TANQUEIRO.:</b>


        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>

                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.: </b>@foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 2)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 2)
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.: </b>@foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 3)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 3 )
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>



                </tr>

            </table>
        </td>

    </tr>
    
    <tr>
        <td class="testeTotal"><b>CONTROLE DE APLICAÇÃO DATA ___/___/_____<b></td>
    </tr>
    <tr>
        <td class="testeTotal"><b>TANQUEIRO.:</b>


        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.: </b>@foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 4)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 4)
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table class="tableControle">
                            <tr>
                                <td><b>Nº UNIPORT.: </b>@foreach($servico->operador() as $operador)

                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 5)
                                    @foreach (json_decode($servico->operadores) as $frota)
                                    @if($frota->operadores == $operador->id)
                                    {{ $frota->frota }}
                                    @endif


                                    @endforeach
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                                <td colspan="2"><b>OPERADOR.:</b>
                                    @foreach($servico->operador() as $operador)
                                    @if($operador->tipo_operador =="OPERADOR")
                                    @if($loop->index == 5 )
                                    {{ $operador->nome }}
                                    @endif

                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" class="textoCentro"><b>APLICAÇÕES ANTEIORES</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">O.S (ANTERIOR).: __________________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">TALHÃO (ANTERIOR).: _____________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="2"><b><span class="textoDireito">CALDAS(LT)(ANTERIOR).: __________</span> </b></td>

                            </tr>
                            <tr>
                                <td colspan="4" class="textoEsquerda"><b>1 ( ) 2 ( ) 3 ( ) 4 ( ) 5 ( ) 6 ( ) 7 ( ) 8 ( ) 9 ( ) 10 ( ) 11 ( ) 12 ( )</b></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>CALDA USADA (TALHÃO ATUAL).: _____________ </b></td>

                            </tr>
                            <tr>
                                <td colspan="3" class="textoEsquerda"><b>TOTAL DE BOMBAS APLICADAS.: ______________</b> </td>
                            </tr>
                        </table>
                    </td>

                </tr>


            </table>
        </td>

    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><b>TOTAL GERAL DE BOMBAS REIAS APLICADAS.: _____________________________________________________</b></td>
    </tr>
    <tr>
        <td><b>DATA FECHAMENTO O.S.: _____/_____/_______</b></td>
    </tr>
    </table>

    </div>

</body>


</html>