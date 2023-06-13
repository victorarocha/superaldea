<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = collect([
            [ '002', 'BANAMEX', 'Banco Nacional de México, S.A.' ],
            [ '006', 'BANCOMEXT', 'Banco Nacional de Comercio Exterior' ],
            [ '009', 'BANOBRAS', 'Banco Nacional de Obras y Servicios Públicos' ],
            [ '012', 'BBVA BANCOMER', 'BBVA Bancomer, S.A.' ],
            [ '014', 'SANTANDER', 'Banco Santander, S.A.' ],
            [ '019', 'BANJERCITO', 'Banco Nacional del Ejército, Fuerza Aérea y Armada' ],
            [ '021', 'HSBC', 'HSBC México, S.A.' ],
            [ '030', 'BAJÍO', 'Banco del Bajío, S.A.' ],
            [ '036', 'INBURSA', 'Banco Inbursa, S.A.' ],
            [ '042', 'MIFEL', 'Banca Mifel, S.A.' ],
            [ '044', 'SCOTIABANK', 'Scotiabank Inverlat, S.A.' ],
            [ '058', 'BANREGIO', 'Banco Regional de Monterrey, S.A.' ],
            [ '059', 'INVEX', 'Banco Invex, S.A.' ],
            [ '060', 'BANSI', 'Bansi, S.A.' ],
            [ '062', 'AFIRME', 'Banca Afirme, S.A.' ],
            [ '072', 'BANORTE', 'Banco Mercantil del Norte, S.A.' ],
            [ '106', 'BANK OF AMERICA', 'Bank of America México, S.A.' ],
            [ '108', 'MUFG', 'MUFG Bank México, S.A., Institución de Banca Múltiple Filial' ],
            [ '110', 'JP MORGAN', 'Banco J.P. Morgan, S.A.' ],
            [ '112', 'BMONEX', 'Banco Monex, S.A.' ],
            [ '113', 'VE POR MAS', 'Banco Ve por Mas, S.A.' ],
            [ '126', 'CREDIT SUISSE', 'Banco Credit Suisse (México), S.A.' ],
            [ '127', 'AZTECA', 'Banco Azteca, S.A.' ],
            [ '128', 'AUTOFIN', 'Banco Autofin México, S.A.' ],
            [ '129', 'BARCLAYS', 'Barclays Bank México, S.A.' ],
            [ '130', 'COMPARTAMOS', 'Banco Compartamos, S.A.' ],
            [ '132', 'MULTIVA BANCO', 'Banco Multiva, S.A.' ],
            [ '133', 'ACTINVER', 'Banco Actinver, S.A.' ],
            [ '135', 'NAFIN', 'Nacional Financiera, S.N.C.' ],
            [ '136', 'INTERCAM BANCO', 'Intercam Banco, S.A., Institución de Banca Múltiple, Intercam Grupo Financiero' ],
            [ '137', 'BANCOPPEL', 'BanCoppel, S.A.' ],
            [ '138', 'ABC CAPITAL', 'ABC Capital, S.A. I.B.M.' ],
            [ '140', 'CONSUBANCO', 'Consubanco, S.A.' ],
            [ '141', 'VOLKSWAGEN', 'Volkswagen Bank S.A. Institución de Banca Múltiple' ],
            [ '143', 'CIBanco', 'Consultoría Internacional Banco, S.A.' ],
            [ '145', 'BBASE', 'Banco BASE, S.A. de I.B.M.' ],
            [ '147', 'BANKAOOL', 'Bankaool, S.A., Institución de Banca Múltiple' ],
            [ '148', 'PagaTodo', 'Banco PagaTodo S.A., Institución de Banca Múltiple' ],
            [ '150', 'INMOBILIARIO', 'Banco Inmobiliario Mexicano, S.A., Institución de Banca Múltiple' ],
            [ '152', 'BANCREA', 'Banco Bancrea, S.A., Institución de Banca Múltiple' ],
            [ '154', 'BANCO COVALTO', 'Banco Covalto, S.A., Institución de Banca Múltiple' ],
            [ '155', 'ICBC', 'Industrial and Commercial Bank of China, S.A., Institución de Banca Múltiple' ],
            [ '156', 'SABADELL', 'Banco Sabadell, S.A. I.B.M.' ],
            [ '157', 'SHINHAN', 'Banco Shinhan de México, S.A., Institución de Banca Múltiple' ],
            [ '158', 'MIZUHO BANK', 'Mizuho Bank México, S.A., Institución de Banca Múltiple' ],
            [ '159', 'BANK OF CHINA', 'Bank of China México, S.A., Institución de Banca Múltiple' ],
            [ '160', 'BANCO S3', 'Banco S3 Caceis México, S.A., Institución de Banca Múltiple' ],
            [ '166', 'Banco del Bienestar', 'Banco del Bienestar, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo' ],
            [ '168', 'HIPOTECARIA FEDERAL', 'Sociedad Hipotecaria Federal, S.N.C.' ],
            [ '600', 'MONEXCB', 'Monex Casa de Bolsa, S.A. de C.V.' ],
            [ '601', 'GBM', 'GBM Grupo Bursátil Mexicano, S.A. de C.V.' ],
            [ '602', 'MASARI CB', 'Masari Casa de Bolsa, S.A.' ],
            [ '605', 'VALUÉ', 'Valué, S.A. de C.V., Casa de Bolsa' ],
            [ '608', 'VECTOR', 'Vector Casa de Bolsa, S.A. de C.V.' ],
            [ '610', 'B&B', 'B y B Casa de Cambio, S.A. de C.V.' ],
            [ '613', 'MULTIVA CBOLSA', 'Banco Multiva, S.A. Institución de Banca Múltiple, Grupo Financiero Multiva' ],
            [ '616', 'FINAMEX', 'Casa de Bolsa Finamex, S.A. de C.V.' ],
            [ '617', 'VALMEX', 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.' ],
            [ '618', 'ÚNICA', 'Única Casa de Cambio, S.A. de C.V.' ],
            [ '619', 'MAPFRE', 'MAPFRE Tepeyac S.A.' ],
            [ '620', 'PROFUTURO', 'Profuturo G.N.P., S.A. de C.V.' ],
            [ '621', 'CB ACTINBER', 'Actinver Casa de Bolsa, S.A. de C.V.' ],
            [ '622', 'OACTIN', 'OPERADORA ACTINVER, S.A. DE C.V.' ],
            [ '623', 'SKANDIA', 'Skandia Vida S.A. de C.V.' ],
            [ '626', 'CBDEUTSCHE', 'Deutsche Securities, S.A. de C.V.' ],
            [ '627', 'ZURICH', 'Zúrich Compañía de Seguros, S.A.' ],
            [ '628', 'ZURICHVI', 'Zúrich Vida, Compañía de Seguros, S.A.' ],
            [ '629', 'SU CASITA', 'Hipotecaria su Casita, S.A. de C.V.' ],
            [ '630', 'C.B. INTERCAM', 'Intercam Casa de Bolsa, S.A. de C.V.' ],
            [ '631', 'C.I. BOLSA', 'CI Casa de Bolsa, S.A. de C.V.' ],
            [ '632', 'BULLTICK C.B.', 'Bulltick Casa de Bolsa, S.A. de C.V.' ],
            [ '633', 'STERLING', 'Sterling Casa de Cambio, S.A. de C.V.' ],
            [ '634', 'FINCOMUN', 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.' ],
            [ '636', 'HDI SEGUROS', 'HDI Seguros, S.A. de C.V.' ],
            [ '637', 'ORDER', 'OrderExpress Casa de Cambio , S.A. de C.V. AAC' ],
            [ '638', 'AKALA', 'Akala, S.A. de C.V., Sociedad Financiera Popular' ],
            [ '640', 'C.B. JP MORGAN', 'J.P. Morgan Casa de Bolsa, S.A. de C.V.' ],
            [ '642', 'REFORMA', 'Operadora de Recursos Reforma, S.A. de C.V.' ],
            [ '646', 'STP', 'Sistema de Transferencias y Pagos STP, S.A. de C.V., SOFOM E.N.R.' ],
            [ '647', 'TELECOMM', 'Telecomunicaciones de México' ],
            [ '648', 'EVERCORE', 'Evercore Casa de Bolsa, S.A. de C.V.' ],
            [ '649', 'SKANDIA', 'Skandia Operadora S.A. de C.V.' ],
            [ '651', 'SEGMTY', 'Seguros Monterrey New York Life, S.A de C.V.' ],
            [ '652', 'ASEA', 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular' ],
            [ '653', 'KUSPIT', 'Kuspit Casa de Bolsa, S.A. de C.V.' ],
            [ '655', 'SOFIEXPRESS', 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.' ],
            [ '656', 'UNAGRA', 'UNAGRA, S.A. de C.V., S.F.P.' ],
            [ '659', 'OPCIONES EMPRESARIALES DEL NOROESTE', 'Opciones Empresariales Del Noreste, S.A. DE C.V.' ],
            [ '670', 'LIBERTAD', 'Libertad Servicios Financieros, S.A. De C.V.' ],
            [ '674', 'AXA', 'AXA Seguros, S.A. De C.V.' ],
            [ '677', 'CAJA POP MEXICA', 'Caja Popular Mexicana, S.C. de A.P. de R.L. De C.V.' ],
            [ '679', 'FND', 'Financiera Nacional De Desarrollo Agropecuario, Rural, F y P.' ],
            [ '684', 'TRANSFER', 'Operadora De Pagos Móviles De México, S.A. De C.V.' ],
            [ '901', 'CLS', 'CLS Bank International' ],
            [ '902', 'INDEVAL', 'SD. INDEVAL, S.A. de C.V.' ],
        ]);

        $collection->eachSpread(function ($abm_number, $short_name, $long_name) {
            DB::table('banks')->insert([
                'abm_number' => $abm_number,
                'short_name' => $short_name,
                'long_name' => $long_name,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        });
    }
}
