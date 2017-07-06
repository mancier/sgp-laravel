<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('clientes')->insert([
     	'nome'=>'Victor Augusto de Souza e Silva',
     	'email'=>'victor.silva452@outlook.com',
     	'telefone'=> '(14) 3239-3184',
     	'celular'=> '(14) 99731-7927',
     	'documento'=>'456.408.508-50',
     	'rg'=>'50.421.448-2',
     	'cep'=>'17020-313',
     	'municipio'=>'Bauru',
     	'uf'=>'São Paulo',
     	'endereco'=>'Alameda Antônio Bueno Netto',
         'cliente_directory'=>'/home/victor'
    ]);

    DB::table('processos')->insert([
        'numero_processo'=>'12354679',
        'nome_processo'=>'Processo para Teste',
        'clientes_id'=> 1,
        'requerendo'=>'Sérgio Vital',
        'requerendo_tipo'=>'Advogado',
        'vara'=>'5ª Vara dos Programadores',
        'comarca'=>'Bauru e Região',
        'valor_causa'=>'R$ 1.000,00'
    ]);
    }
}
