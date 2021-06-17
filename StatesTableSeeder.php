<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c447b200-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c447b4af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andhra Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c447b59c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arunachal Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c447b67f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Assam',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c447b761-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bihar',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c447b840-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chandigarh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c447b921-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chhattisgarh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c447ba01-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dadra and Nagar Haveli',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c447bae1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Daman and Diu',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c447bbc0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delhi',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c447bc8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Goa',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c447bd6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gujarat',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c447be49-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haryana',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c447bf26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Himachal Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c447c004-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jammu and Kashmir',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c447c0e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jharkhand',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c447c1c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karnataka',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c447c29e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kenmore',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c447c37d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerala',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c447c45b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lakshadweep',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c447c538-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madhya Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c447c67b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maharashtra',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c447c7c1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manipur',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c447c8a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meghalaya',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c447cabc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mizoram',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c447cc76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nagaland',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c447cd7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narora',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c447ce5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Natwar',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c447cf3a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Odisha',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c447d018-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paschim Medinipur',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c447d0f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pondicherry',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c447d1d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Punjab',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c447d2b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rajasthan',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c447d38e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sikkim',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c447d46b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tamil Nadu',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c447d548-cec4-11eb-a395-b05adaab2756',
                'name' => 'Telangana',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c447d627-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tripura',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c447d703-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uttar Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c447d7df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uttarakhand',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c447d8bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaishali',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c447d999-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Bengal',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c447da76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Badakhshan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c447db5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Badgis',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c447dc49-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baglan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c447dd28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balkh',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c447de09-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bamiyan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c447dee7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Farah',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c447dfc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Faryab',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c447e08e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gawr',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c447e16b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gazni',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c447e247-cec4-11eb-a395-b05adaab2756',
                'name' => 'Herat',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c447e325-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hilmand',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c447e40c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jawzjan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c447e4e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kabul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c447e5c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kapisa',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c447e6a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khawst',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c447e77f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kunar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c447e85c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lagman',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c447e938-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lawghar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c447ea16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nangarhar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c447eaf2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nimruz',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c447ebd0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nuristan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c447ecaf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paktika',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c447ed8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paktiya',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c447ee68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Parwan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c447ef4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qandahar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c447f02b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qunduz',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c447f110-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samangan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c447f1ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sar-e Pul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c447f2f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Takhar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c447f3d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uruzgan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c447f4b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wardak',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c447f590-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zabul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c447f66e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berat',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c447f74b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bulqize',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c447f828-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delvine',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c447f905-cec4-11eb-a395-b05adaab2756',
                'name' => 'Devoll',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c447f9e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dibre',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c447fac0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Durres',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c447fb9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Elbasan',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c447fc66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fier',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c447fd45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gjirokaster',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c447fe21-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gramsh',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c447feea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Has',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c447ffc8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kavaje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c44800a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kolonje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c4480183-cec4-11eb-a395-b05adaab2756',
                'name' => 'Korce',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c448025f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kruje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c4480344-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kucove',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c4480423-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kukes',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c4480506-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kurbin',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c44805e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lezhe',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c44806c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Librazhd',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c448079f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lushnje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c448087d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mallakaster',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c448095a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malsi e Madhe',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c4480a25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mat',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c4480b04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mirdite',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c4480bdf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Peqin',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c4480cbf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Permet',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c4480da7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pogradec',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c4480e72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puke',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c4480f50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sarande',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c448102c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shkoder',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c4481108-cec4-11eb-a395-b05adaab2756',
                'name' => 'Skrapar',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c44811e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tepelene',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c44812c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tirane',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c44813a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tropoje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c448147f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vlore',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c448155d-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Ayn Daflah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c4481639-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Ayn Tamushanat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c448171d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adrar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c44817fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Algiers',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c44818dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Annabah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c44819db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bashshar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c4481abd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batnah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c4481b9b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bijayah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c4481c78-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biskrah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c4481d55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Blidah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c4481e33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buirah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c4481f10-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bumardas',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c4481fee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burj Bu Arririj',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c44820cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghalizan',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c44821a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghardayah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c4482285-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilizi',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c4482362-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jijili',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c4482440-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jilfah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c448251c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khanshalah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c44825f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Masilah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c44826d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Midyah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c44827b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Milah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c4482892-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muaskar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c448296f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mustaghanam',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c4482a54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naama',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c4482b20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oran',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c4482c03-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouargla',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c4482ce0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qalmah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c4482dbe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qustantinah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c4482e9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sakikdah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c4482f7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c4483056-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sayda\'',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c4483134-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sidi ban-al-\'Abbas',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c4483211-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suq Ahras',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c44832ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tamanghasat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c44833cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tibazah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c44834aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tibissah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c4483586-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tilimsan',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c4483661-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tinduf',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c448373e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tisamsilt',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c4483826-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tiyarat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c4483902-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tizi Wazu',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c44839df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umm-al-Bawaghi',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c4483abd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wahran',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c4483b99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Warqla',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c4483c76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilaya d Alger',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c4483d53-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilaya de Bejaia',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c4483e37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilaya de Constantine',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c4483f1b-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Aghwat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c4484001-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Bayadh',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c44840fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jaza\'ir',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c44841e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Wad',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c44842c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shalif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c44843a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'at-Tarif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c4484480-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c448455e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manu\'a',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c448463b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Swains Island',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c4484717-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c44847f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andorra la Vella',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c44848d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canillo',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c44849af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Encamp',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c4484a8c-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Massana',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c4484b69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Les Escaldes',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c4484c46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ordino',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c4484d22-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sant Julia de Loria',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c4484e00-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bengo',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c4484edc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benguela',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c4484fa6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bie',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c4485083-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cabinda',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c4485167-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cunene',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c4485246-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huambo',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c4485325-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huila',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c4485402-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuando-Kubango',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c44854df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kwanza Norte',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c44855bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kwanza Sul',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c448569a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luanda',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c4485778-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lunda Norte',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c4485856-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lunda Sul',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c4485933-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malanje',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c4485a10-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moxico',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c4485aed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namibe',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c4485bb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uige',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c4485c92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zaire',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c4485d6f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Other Provinces',
                'country_id' => 'bc690c97-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c4485e4c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by Argentina/Ch',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c4485f2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by Argentina/UK',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c4486007-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by Australia',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c44860e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by France',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c44861ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by New Zealand',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c44862ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sector claimed by Norway',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c448638a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Unclaimed Sector',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c448646d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barbuda',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c448654a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c4486628-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c4486726-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mary',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c448680e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Paul',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c44868eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c44869c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Philip',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c4486aa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buenos Aires',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c4486b81-cec4-11eb-a395-b05adaab2756',
                'name' => 'Catamarca',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c4486c5e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chaco',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c4486d3a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chubut',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c4486e17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cordoba',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c4486ef3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Corrientes',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c4486fcf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Federal',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c44870ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Entre Rios',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c4487188-cec4-11eb-a395-b05adaab2756',
                'name' => 'Formosa',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c4487264-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jujuy',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c448733f-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Pampa',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c448741b-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Rioja',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c44874f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mendoza',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c44875d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Misiones',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c44876ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Neuquen',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c4487789-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio Negro',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c4487866-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salta',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c4487941-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Juan',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c4487a25-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Luis',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c4487b05-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Cruz',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c4487be5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Fe',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c4487cc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santiago del Estero',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c4487d9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tierra del Fuego',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c4487e7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tucuman',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c4487f5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aragatsotn',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c4488036-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ararat',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c4488114-cec4-11eb-a395-b05adaab2756',
                'name' => 'Armavir',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c44881f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gegharkunik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c44882cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kotaik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c4488395-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lori',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c4488473-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shirak',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c448854f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stepanakert',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c448862a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Syunik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c4488707-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tavush',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c44887e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vayots Dzor',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c44888be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yerevan',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c448899c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aruba',
                'country_id' => 'bc690f9f-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c4488a7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Auckland',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c4488b62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Australian Capital Territory',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c4488c40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balgowlah',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c4488d24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balmain',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c4488e24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bankstown',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c4488f0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baulkham Hills',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c4488feb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bonnet Bay',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c44890c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Camberwell',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c44891a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carole Park',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c4489283-cec4-11eb-a395-b05adaab2756',
                'name' => 'Castle Hill',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c448935f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caulfield',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c448943c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chatswood',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c448951c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cheltenham',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c44895f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cherrybrook',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c44896d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Clayton',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c44897b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Collingwood',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c448988f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Frenchs Forest',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c448996e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hawthorn',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c4489a4a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jannnali',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c4489b27-cec4-11eb-a395-b05adaab2756',
                'name' => 'Knoxfield',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c4489c03-cec4-11eb-a395-b05adaab2756',
                'name' => 'Melbourne',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c4489cdf-cec4-11eb-a395-b05adaab2756',
                'name' => 'New South Wales',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c4489dbd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Territory',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c4489e98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Perth',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c4489f75-cec4-11eb-a395-b05adaab2756',
                'name' => 'Queensland',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c448a051-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Australia',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c448a134-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tasmania',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c448a218-cec4-11eb-a395-b05adaab2756',
                'name' => 'Templestowe',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c448a2f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Victoria',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c448a3d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Werribee south',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c448a4ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Australia',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c448a58a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wheeler',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c448a667-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bundesland Salzburg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c448a744-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bundesland Steiermark',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c448a824-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bundesland Tirol',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c448a900-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burgenland',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c448a9dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carinthia',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c448aabb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karnten',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c448ab99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liezen',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c448ac77-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lower Austria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c448ad52-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niederosterreich',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c448ae31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oberosterreich',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c448af0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salzburg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c448afeb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schleswig-Holstein',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c448b0c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Steiermark',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c448b1a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Styria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c448b282-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tirol',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c448b35f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper Austria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c448b443-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vorarlberg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c448b54e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wien',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c448b74c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abseron',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c448b91e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baki Sahari',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c448bb06-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ganca',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c448bce4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ganja',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c448beb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalbacar',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c448c088-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lankaran',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c448c25d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mil-Qarabax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c448c41e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mugan-Salyan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c448c5df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nagorni-Qarabax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c448c758-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naxcivan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c448c8dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Priaraks',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c448ca93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qazax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c448cc31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saki',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c448cdc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sirvan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c448cf46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xacmaz',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c448d0b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abaco',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c448d253-cec4-11eb-a395-b05adaab2756',
                'name' => 'Acklins Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c448d34c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andros',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c448d431-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berry Islands',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c448d512-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biminis',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c448d5f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cat Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c448d6d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Crooked Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c448d7b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eleuthera',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c448d899-cec4-11eb-a395-b05adaab2756',
                'name' => 'Exuma and Cays',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c448d97b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Bahama',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c448da5d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Inagua Islands',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c448db3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Long Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c448dc89-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayaguana',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c448dd80-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Providence',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c448dedc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ragged Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c448dfa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rum Cay',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c448e069-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Salvador',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c448e11c-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Isa',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c448e1e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Badiyah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c448e294-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hidd',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c448e358-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jidd Hafs',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c448e41f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahama',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c448e4e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manama',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c448e5a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sitrah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c448e674-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Manamah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c448e73a-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Muharraq',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c448e80b-cec4-11eb-a395-b05adaab2756',
                'name' => 'ar-Rifa\'a',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c448e8d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bagar Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c448e99f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bandarban',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c448ea8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barguna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c448eb9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barisal',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c448ec6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bhola',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c448ed48-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bogora',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c448ee49-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brahman Bariya',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c448ef6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chandpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c448f1e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chattagam',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c448f35d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chittagong Division',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c448f5d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chuadanga',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c448f731-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhaka',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c448f86d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dinajpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c448fa19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Faridpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c448fba0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Feni',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c448fd43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaybanda',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c448fee2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gazipur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c449021c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gopalganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c449044e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Habiganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c449053e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jaipur Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c4490609-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jamalpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c44906d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jessor',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c4490795-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jhalakati',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c449085c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jhanaydah',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c4490924-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khagrachhari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c44909e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khulna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c4490aad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kishorganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c4490b8f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koks Bazar',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c4490c99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Komilla',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c4490d66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kurigram',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c4490e2d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kushtiya',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c4490ef5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lakshmipur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c4490fba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lalmanir Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c4491087-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madaripur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c449114d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magura',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c4491213-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maimansingh',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c44912d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manikganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c44914c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maulvi Bazar',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c4491581-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meherpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c4491640-cec4-11eb-a395-b05adaab2756',
                'name' => 'Munshiganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c44916fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naral',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c44917ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narayanganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c4491878-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narsingdi',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c4491937-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nator',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c44919f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naugaon',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c4491ab3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nawabganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c4491c2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Netrakona',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c4491cee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nilphamari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c4491dba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Noakhali',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c4491f18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pabna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c4491fe9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Panchagarh',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c44920b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Patuakhali',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c4492268-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pirojpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c4492422-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rajbari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c4492515-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rajshahi',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c4492673-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rangamati',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c4492744-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rangpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c449280b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satkhira',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c44928d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shariatpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c44929c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sherpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c4492a91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Silhat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c4492b54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sirajganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c4492c9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sunamganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c4492d5d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tangayal',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c4492e1a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thakurgaon',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c4492ed7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Christ Church',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c4492f95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrew',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c4493052-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c4493112-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint James',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c44931d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c449328d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Joseph',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c449334b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Lucy',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c4493410-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Michael',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c4493589-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c44936ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Philip',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c44937ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Thomas',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c449386b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brest',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c449392a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Homjel\'',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c44939e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hrodna',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c4493aa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahiljow',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c4493b62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahilyowskaya Voblasts',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c4493c21-cec4-11eb-a395-b05adaab2756',
                'name' => 'Minsk',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c4493cde-cec4-11eb-a395-b05adaab2756',
                'name' => 'Minskaja Voblasts\'',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c4493d9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Petrik',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c4493e5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vicebsk',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c4493f19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antwerpen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c4493fd7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berchem',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c4494094-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c4494151-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brabant Wallon',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c449420d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brussel',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c44942cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Flanders',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c4494389-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hainaut',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c4494446-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liege',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c4494504-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limburg',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c44945c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luxembourg',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c4494743-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namur',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c44948aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ontario',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c4494968-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oost-Vlaanderen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c4494a27-cec4-11eb-a395-b05adaab2756',
                'name' => 'Provincie Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c4494ae6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vlaams-Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c4494ba4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wallonne',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c4494c62-cec4-11eb-a395-b05adaab2756',
                'name' => 'West-Vlaanderen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c4494d2c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Belize',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c4494dda-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cayo',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c4494e98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Corozal',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c4494f56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orange Walk',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c4495013-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stann Creek',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c44950f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toledo',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c4495278-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alibori',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c44953d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atacora',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c44955e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atlantique',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c4495768-cec4-11eb-a395-b05adaab2756',
                'name' => 'Borgou',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c44958c1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Collines',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c4495983-cec4-11eb-a395-b05adaab2756',
                'name' => 'Couffo',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c4495a40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Donga',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c4495b00-cec4-11eb-a395-b05adaab2756',
                'name' => 'Littoral',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c4495bba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mono',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c4495d38-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oueme',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c4495e9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plateau',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c4495f4b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zou',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c4496009-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamilton',
                'country_id' => 'bc691ae2-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c44960c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc691ae2-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c4496184-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bumthang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c4496243-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chhukha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c4496301-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chirang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c44963ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Daga',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c449646c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Geylegphug',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c4496528-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c44965e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lhuntshi',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c44966a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mongar',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c4496761-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pemagatsel',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c449681e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Punakha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c44968db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rinpung',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c449699d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samchi',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c4496a5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samdrup Jongkhar',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c4496b19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shemgang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c4496bd6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tashigang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c4496c93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Timphu',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c4496d57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tongsa',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c4496ed6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wangdiphodrang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c4497029-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beni',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c44970e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chuquisaca',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c44971a7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cochabamba',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c4497265-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Paz',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c4497323-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oruro',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c44973e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pando',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c44974a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Potosi',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c449755e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Cruz',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c449761b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarija',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c44976da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Federacija Bosna i Hercegovina',
                'country_id' => 'bc691e40-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c44977a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Republika Srpska',
                'country_id' => 'bc691e40-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c449785f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Bobonong',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c449791d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Boteti',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c44979db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Mahalapye',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c4497a99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Serowe-Palapye',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c4497b56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Tutume',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c4497c13-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chobe',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c4497cd0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Francistown',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c4497db1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaborone',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c4497e71-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghanzi',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c4497f36-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jwaneng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c44980b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kgalagadi North',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c4498205-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kgalagadi South',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c44982cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kgatleng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c4498397-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kweneng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c449845d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lobatse',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c4498525-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngamiland',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c44985ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngwaketse',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c44986b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'North East',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c4498789-cec4-11eb-a395-b05adaab2756',
                'name' => 'Okavango',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c4498851-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orapa',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c449891f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Selibe Phikwe',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c44989e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'South East',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c4498aa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sowa',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c4498b68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bouvet Island',
                'country_id' => 'bc692043-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c4498c1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Acre',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c4498ce3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alagoas',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c4498da9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amapa',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c4498e71-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amazonas',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c4498f35-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bahia',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c4498ff9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ceara',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c44990bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Federal',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c4499183-cec4-11eb-a395-b05adaab2756',
                'name' => 'Espirito Santo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c4499249-cec4-11eb-a395-b05adaab2756',
                'name' => 'Estado de Sao Paulo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c449930d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Goias',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c44993d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maranhao',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c4499498-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mato Grosso',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c449955e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mato Grosso do Sul',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c449962b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Minas Gerais',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c449971f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Para',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c44997e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paraiba',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c44998ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Parana',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c4499972-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pernambuco',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c4499a37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piaui',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c4499afc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio Grande do Norte',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c4499bc2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio Grande do Sul',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c4499c88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio de Janeiro',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c4499d4c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rondonia',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c4499e1b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roraima',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c4499edf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Catarina',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c4499fa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sao Paulo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c449a068-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sergipe',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c449a12d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tocantins',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c449a1f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'British Indian Ocean Territory',
                'country_id' => 'bc69220a-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c449a2b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Belait',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c449a37b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brunei-Muara',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c449a469-cec4-11eb-a395-b05adaab2756',
                'name' => 'Temburong',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c449a534-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tutong',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c449a5fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Blagoevgrad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c449a6dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burgas',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c449a7cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dobrich',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c449a897-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gabrovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c449a95d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haskovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c449aa22-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jambol',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c449aae5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kardzhali',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c449aba8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kjustendil',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c449ac6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lovech',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c449ad31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montana',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c449adf6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oblast Sofiya-Grad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c449aebb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pazardzhik',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c449af80-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pernik',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c449b045-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pleven',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c449b10a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plovdiv',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c449b1cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Razgrad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c449b283-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ruse',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c449b34a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shumen',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c449b40e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Silistra',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c449b4d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sliven',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c449b599-cec4-11eb-a395-b05adaab2756',
                'name' => 'Smoljan',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c449b65f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sofija grad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c449b735-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sofijska oblast',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c449b832-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stara Zagora',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c449b8f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Targovishte',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c449b9be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Varna',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c449ba83-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veliko Tarnovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c449bb49-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vidin',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c449bc0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vraca',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c449bcd2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yablaniza',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c449bd85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bale',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c449be37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bam',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c449befc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bazega',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c449bfc2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bougouriba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c449c085-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boulgou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c449c149-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boulkiemde',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c449c20e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comoe',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c449c2d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ganzourgou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c449c399-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gnagna',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c449c466-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gourma',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c449c52c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Houet',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c449c5df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ioba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c449c6a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kadiogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c449c769-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kenedougou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c449c86e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Komandjari',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c449c936-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kompienga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c449c9fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kossi',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c449cac1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kouritenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c449cba4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kourweogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c449cc6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leraba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c449cd32-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mouhoun',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c449cdf7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nahouri',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c449cf3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namentenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c449cffb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Noumbiel',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c449d0b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oubritenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c449d176-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oudalan',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c449d233-cec4-11eb-a395-b05adaab2756',
                'name' => 'Passore',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c449d2e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Poni',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c449d39f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanguie',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c449d45c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanmatenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c449d50a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seno',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c449d5c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sissili',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c449d675-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soum',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c449d735-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sourou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c449d7f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tapoa',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c449d959-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tuy',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c449da26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yatenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c449db86-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zondoma',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c449dc46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zoundweogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c449dd05-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bubanza',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c449ddc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bujumbura',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c449de80-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bururi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c449df3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cankuzo',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c449dffb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cibitoke',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c449e0ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gitega',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c449e181-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karuzi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c449e23f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayanza',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c449e2fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirundo',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c449e3b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Makamba',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c449e476-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muramvya',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c449e534-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muyinga',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c449e5f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngozi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c449e6af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rutana',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c449e76b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ruyigi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c449e829-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banteay Mean Chey',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c449e8e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bat Dambang',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c449e9a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kampong Cham',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c449eb28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kampong Chhnang',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c449ec92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kampong Spoeu',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c449ed52-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kampong Thum',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c449eec6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kampot',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c449f037-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kandal',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c449f101-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaoh Kong',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c449f1c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kracheh',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c449f2b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krong Kaeb',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c449f378-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krong Pailin',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c449f4c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krong Preah Sihanouk',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c449f582-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mondol Kiri',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c449f643-cec4-11eb-a395-b05adaab2756',
                'name' => 'Otdar Mean Chey',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c449f700-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phnum Penh',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c449f7be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pousat',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c449f87c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Preah Vihear',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c449f93a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prey Veaeng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c449f9f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rotanak Kiri',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c449fab7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siem Reab',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c449fb75-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stueng Traeng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c449fc33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Svay Rieng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c449fcf2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Takaev',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c449fdb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adamaoua',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c449ff31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centre',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c44a0083-cec4-11eb-a395-b05adaab2756',
                'name' => 'Est',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c44a0143-cec4-11eb-a395-b05adaab2756',
                'name' => 'Littoral',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c44a01f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c44a02b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord Extreme',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c44a036c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nordouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c44a042a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c44a04d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c44a0595-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sudouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c44a0652-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alberta',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c44a0710-cec4-11eb-a395-b05adaab2756',
                'name' => 'British Columbia',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c44a07cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manitoba',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c44a088a-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Brunswick',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c44a094a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Newfoundland and Labrador',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c44a0a09-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northwest Territories',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c44a0ac6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nova Scotia',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c44a0b83-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nunavut',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c44a0c40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ontario',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c44a0cfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prince Edward Island',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c44a0dbc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quebec',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c44a0e7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saskatchewan',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c44a0f3f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yukon',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c44a1142-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boavista',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c44a1208-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brava',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c44a12bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fogo',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c44a1372-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maio',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c44a142e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sal',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c44a14f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santo Antao',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c44a1638-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sao Nicolau',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c44a16f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sao Tiago',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c44a17b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sao Vicente',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c44a1871-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Cayman',
                'country_id' => 'bc692a07-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c44a194b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bamingui-Bangoran',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c44a1a0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bangui',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c44a1aca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basse-Kotto',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c44a1b88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haut-Mbomou',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c44a1c47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Kotto',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c44a1cf3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kemo',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c44a1db2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lobaye',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c44a1e6f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mambere-Kadei',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c44a1f2d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mbomou',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c44a1fec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nana-Gribizi',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c44a20aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nana-Mambere',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c44a216e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ombella Mpoko',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c44a22ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouaka',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c44a244f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouham',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c44a250e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouham-Pende',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c44a25cc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sangha-Mbaere',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c44a268a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vakaga',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c44a2748-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batha',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c44a2807-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biltine',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c44a28c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bourkou-Ennedi-Tibesti',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c44a2983-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chari-Baguirmi',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c44a2a40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guera',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c44a2afd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanem',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c44a2bab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lac',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c44a2c68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Logone Occidental',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c44a2d24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Logone Oriental',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c44a2de2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayo-Kebbi',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c44a2ea1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moyen-Chari',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c44a2f5e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouaddai',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c44a301b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salamat',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c44a30d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tandjile',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c44a3196-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aisen',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c44a3254-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antofagasta',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c44a3317-cec4-11eb-a395-b05adaab2756',
                'name' => 'Araucania',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c44a3494-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atacama',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c44a35f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bio Bio',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c44a36b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coquimbo',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c44a3775-cec4-11eb-a395-b05adaab2756',
                'name' => 'Libertador General Bernardo O\'',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c44a3833-cec4-11eb-a395-b05adaab2756',
                'name' => 'Los Lagos',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c44a38f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magellanes',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c44a39ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maule',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c44a3a6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Metropolitana',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c44a3b2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Metropolitana de Santiago',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c44a3bf0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarapaca',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c44a3cad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valparaiso',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c44a3d6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anhui',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c44a3e2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anhui Province',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c44a3ee8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anhui Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c44a3fa8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aomen',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c44a4083-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beijing',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c44a4146-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beijing Shi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c44a4205-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chongqing',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c44a42c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fujian',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c44a4380-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fujian Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c44a443f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gansu',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c44a4504-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guangdong',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c44a4681-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guangdong Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c44a47e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guangxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c44a48a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guizhou',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c44a4961-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hainan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c44a4a1e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hebei',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c44a4add-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heilongjiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c44a4b9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Henan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c44a4c58-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hubei',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c44a4d16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hunan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c44a4dd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jiangsu',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c44a4e94-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jiangsu Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c44a4f51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jiangxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c44a5010-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jilin',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c44a50ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liaoning',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c44a518e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liaoning Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c44a524c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nei Monggol',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c44a530a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ningxia Hui',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c44a53c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qinghai',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c44a5486-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shaanxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c44a5544-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shandong',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c44a5601-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shandong Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c44a577a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shanghai',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c44a5849-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shanxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c44a59a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sichuan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c44a5a67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tianjin',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c44a5b24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xianggang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c44a5be2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xinjiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c44a5c9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xizang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c44a5d5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yunnan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c44a5e1c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zhejiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c44a5ee1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zhejiang Sheng',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c44a5f9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Christmas Island',
                'country_id' => 'bc692df8-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c44a605e-cec4-11eb-a395-b05adaab2756',
            'name' => 'Cocos (Keeling) Islands',
                'country_id' => 'bc692ec4-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c44a611c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amazonas',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c44a61da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antioquia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c44a629f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c44a635c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atlantico',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c44a641a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bogota',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c44a64d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolivar',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c44a6595-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boyaca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c44a6652-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caldas',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c44a67b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caqueta',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c44a687f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Casanare',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c44a69f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c44a6abd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cesar',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c44a6b82-cec4-11eb-a395-b05adaab2756',
                'name' => 'Choco',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c44a6ceb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cordoba',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c44a6db2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cundinamarca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c44a6e76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guainia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c44a6f3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guaviare',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c44a7003-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huila',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c44a70ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Guajira',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c44a7195-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magdalena',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c44a7248-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meta',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c44a738f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narino',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c44a744d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Norte de Santander',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c44a750a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Putumayo',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c44a75c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quindio',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c44a7685-cec4-11eb-a395-b05adaab2756',
                'name' => 'Risaralda',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c44a7743-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Andres y Providencia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c44a7801-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santander',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c44a78bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sucre',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c44a797e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tolima',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c44a7a3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valle del Cauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c44a7afa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaupes',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c44a7bb8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vichada',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c44a7c76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mwali',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c44a7d34-cec4-11eb-a395-b05adaab2756',
                'name' => 'Njazidja',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c44a7df5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nzwani',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c44a7eb3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bouenza',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c44a7f70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brazzaville',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c44a802e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cuvette',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c44a80eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kouilou',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c44a8265-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lekoumou',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c44a8332-cec4-11eb-a395-b05adaab2756',
                'name' => 'Likouala',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c44a8491-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niari',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c44a854e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plateaux',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c44a85fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pool',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c44a86bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sangha',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c44a877a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bandundu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c44a8838-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bas-Congo',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c44a88f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Equateur',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c44a89b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haut-Congo',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c44a8a7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kasai-Occidental',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c44a8b3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kasai-Oriental',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c44a8bfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Katanga',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c44a8cba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kinshasa',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c44a8d79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maniema',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c44a8e57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord-Kivu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c44a8f18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud-Kivu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c44a8fd6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aitutaki',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c44a9085-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atiu',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c44a9142-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mangaia',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c44a9200-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manihiki',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c44a92be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mauke',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c44a9438-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mitiaro',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c44a9504-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nassau',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c44a9662-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pukapuka',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c44a9721-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rakahanga',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c44a97df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rarotonga',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c44a989d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tongareva',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c44a995b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alajuela',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c44a9a18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cartago',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c44a9ad7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guanacaste',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c44a9b96-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heredia',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c44a9c55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limon',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c44a9d14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puntarenas',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c44a9dd2-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Jose',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c44a9e90-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abidjan',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c44a9f4f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agneby',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c44aa00c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bafing',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c44aa0c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Denguele',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c44aa187-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dix-huit Montagnes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c44aa246-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fromager',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c44aa304-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haut-Sassandra',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c44aa3b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lacs',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c44aa476-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lagunes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c44aa5ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marahoue',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c44aa6b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moyen-Cavally',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c44aa819-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moyen-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c44aa8de-cec4-11eb-a395-b05adaab2756',
                'name' => 'N\'zi-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c44aa9ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sassandra',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c44aaa74-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savanes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c44aac14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud-Bandama',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c44aadf3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c44aaf47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vallee du Bandama',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c44ab010-cec4-11eb-a395-b05adaab2756',
                'name' => 'Worodougou',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c44ab0d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zanzan',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c44ab19c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bjelovar-Bilogora',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c44ab262-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dubrovnik-Neretva',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c44ab32b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grad Zagreb',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c44ab3fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Istra',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c44ab4e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karlovac',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c44ab62f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koprivnica-Krizhevci',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c44ab6ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krapina-Zagorje',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c44ab7af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lika-Senj',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c44ab86d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Medhimurje',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c44ab92d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Medimurska Zupanija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c44ab9ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osijek-Baranja',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c44abaa8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osjecko-Baranjska Zupanija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c44abb65-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pozhega-Slavonija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c44abc24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Primorje-Gorski Kotar',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c44abce2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shibenik-Knin',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c44abda8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sisak-Moslavina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c44abf26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Slavonski Brod-Posavina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c44ac08b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Split-Dalmacija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c44ac14a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Varazhdin',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c44ac207-cec4-11eb-a395-b05adaab2756',
                'name' => 'Virovitica-Podravina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c44ac2c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vukovar-Srijem',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c44ac382-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zadar',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c44ac43f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zagreb',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c44ac4fe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Camaguey',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c44ac5bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ciego de Avila',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c44ac67c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cienfuegos',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c44ac73a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ciudad de la Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c44ac7f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Granma',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c44ac8b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guantanamo',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c44ac974-cec4-11eb-a395-b05adaab2756',
                'name' => 'Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c44aca34-cec4-11eb-a395-b05adaab2756',
                'name' => 'Holguin',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c44acaf1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isla de la Juventud',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c44acbaf-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c44acc6e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Las Tunas',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c44acd2c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matanzas',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c44acdea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pinar del Rio',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c44acea8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sancti Spiritus',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c44acf6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santiago de Cuba',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c44ad0ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Villa Clara',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c44ad252-cec4-11eb-a395-b05adaab2756',
                'name' => 'Government controlled area',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c44ad310-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limassol',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c44ad3cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nicosia District',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c44ad48b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paphos',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c44ad549-cec4-11eb-a395-b05adaab2756',
                'name' => 'Turkish controlled area',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c44ad607-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Bohemian',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c44ad6c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Frycovice',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c44ad781-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jihocesky Kraj',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c44ad83f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jihochesky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c44ad8fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jihomoravsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c44ad9ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karlovarsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c44ada79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Klecany',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c44adb45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kralovehradecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c44adcdb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liberecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c44adda6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lipov',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c44adf91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moravskoslezsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c44ae115-cec4-11eb-a395-b05adaab2756',
                'name' => 'Olomoucky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c44ae284-cec4-11eb-a395-b05adaab2756',
                'name' => 'Olomoucky Kraj',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c44ae346-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pardubicky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c44ae404-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plzensky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c44ae4cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Praha',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c44ae64a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rajhrad',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c44ae7ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Smirice',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c44ae86b-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Moravian',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c44ae928-cec4-11eb-a395-b05adaab2756',
                'name' => 'Straz nad Nisou',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c44ae9e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stredochesky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c44aeaa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Unicov',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c44aeb5f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ustecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c44aec1e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valletta',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c44aecdb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Velesin',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c44aed99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vysochina',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c44aee57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zlinsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c44aef14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arhus',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c44aefd2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bornholm',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c44af08f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Frederiksborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c44af13c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fyn',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c44af1f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hovedstaden',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c44af2b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kobenhavn',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c44af374-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kobenhavns Amt',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c44af432-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kobenhavns Kommune',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c44af4f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nordjylland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c44af59e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ribe',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c44af662-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ringkobing',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c44af7e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roervig',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c44af942-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roskilde',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c44afa01-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roslev',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c44afac0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sjaelland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c44afb7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soeborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c44afc3a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sonderjylland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c44afcf8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Storstrom',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c44afdb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Syddanmark',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c44afe74-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toelloese',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c44aff31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vejle',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c44affef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vestsjalland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c44b00ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c44b016a-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Ali Sabih',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c44b0228-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dikhil',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c44b02e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jibuti',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c44b03a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tajurah',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c44b0452-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ubuk',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c44b0510-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrew',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c44b05db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint David',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c44b0699-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c44b0776-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c44b094f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Joseph',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c44b0a66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Luke',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c44b0c11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mark',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c44b0d44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Patrick',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c44b0e66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Paul',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c44b0f83-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c44b1176-cec4-11eb-a395-b05adaab2756',
                'name' => 'Azua',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c44b12f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bahoruco',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c44b1453-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barahona',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c44b1571-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dajabon',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c44b167c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Nacional',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c44b1789-cec4-11eb-a395-b05adaab2756',
                'name' => 'Duarte',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c44b18a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'El Seybo',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c44b1969-cec4-11eb-a395-b05adaab2756',
                'name' => 'Elias Pina',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c44b1a26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Espaillat',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c44b1ae4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hato Mayor',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c44b1ba2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Independencia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c44b1c60-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Altagracia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c44b1d20-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Romana',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c44b1dde-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Vega',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c44b1e9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maria Trinidad Sanchez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c44b1f66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monsenor Nouel',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c44b20dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monte Cristi',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c44b2247-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monte Plata',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c44b2305-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pedernales',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c44b23c1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Peravia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c44b247e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puerto Plata',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c44b253c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salcedo',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c44b25f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samana',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c44b26b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Cristobal',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c44b2774-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Juan',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c44b2831-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Pedro de Macoris',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c44b28ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanchez Ramirez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c44b29aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santiago',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c44b2a67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santiago Rodriguez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c44b2b23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valverde',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c44b2be1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aileu',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c44b2c9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ainaro',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c44b2d59-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ambeno',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c44b2e15-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baucau',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c44b2ef6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bobonaro',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c44b2fb8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cova Lima',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c44b3065-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dili',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c44b3128-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ermera',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c44b332c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lautem',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c44b3404-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liquica',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c44b34c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manatuto',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c44b360e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manufahi',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c44b36cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viqueque',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c44b378a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Azuay',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c44b3846-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolivar',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c44b3902-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canar',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c44b39c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carchi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c44b3a7e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chimborazo',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c44b3b3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cotopaxi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c44b3bf8-cec4-11eb-a395-b05adaab2756',
                'name' => 'El Oro',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c44b3cb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Esmeraldas',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c44b3d71-cec4-11eb-a395-b05adaab2756',
                'name' => 'Galapagos',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c44b3e2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guayas',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c44b3eea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Imbabura',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c44b3f97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loja',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c44b4054-cec4-11eb-a395-b05adaab2756',
                'name' => 'Los Rios',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c44b4111-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manabi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c44b41ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morona Santiago',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c44b427a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Napo',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c44b433b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orellana',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c44b44b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pastaza',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c44b4617-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pichincha',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c44b46d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sucumbios',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c44b4792-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tungurahua',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c44b484f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zamora Chinchipe',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c44b490c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aswan',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c44b49c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asyut',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c44b4a86-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bani Suwayf',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c44b4b43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bur Sa\'id',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c44b4c00-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cairo',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c44b4cbd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dumyat',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c44b4d7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kafr-ash-Shaykh',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c44b4e38-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matruh',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c44b4ef6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhafazat ad Daqahliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c44b4fb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhafazat al Fayyum',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c44b5071-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhafazat al Gharbiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c44b512e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhafazat al Iskandariyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c44b51eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhafazat al Qahirah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c44b5299-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qina',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c44b5356-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sawhaj',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c44b5414-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sina al-Janubiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c44b54d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sina ash-Shamaliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c44b5673-cec4-11eb-a395-b05adaab2756',
                'name' => 'ad-Daqahliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c44b57d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c44b5896-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Buhayrah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c44b5952-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Fayyum',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c44b5a10-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Gharbiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c44b5ad5-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Iskandariyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c44b5b92-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Ismailiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c44b5c51-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jizah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c44b5d0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Minufiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c44b5dcc-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Minya',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c44b5e91-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qahira',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c44b5f4f-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qalyubiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c44b600c-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Uqsur',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c44b60ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Wadi al-Jadid',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c44b6189-cec4-11eb-a395-b05adaab2756',
                'name' => 'as-Suways',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c44b6245-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Sharqiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c44b6302-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ahuachapan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c44b63c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cabanas',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c44b647d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chalatenango',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c44b6539-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cuscatlan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c44b65f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Libertad',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c44b676c-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Paz',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c44b6839-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Union',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c44b6901-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morazan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c44b6a51-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Miguel',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c44b6b19-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Salvador',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c44b6be1-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Vicente',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c44b6ca9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Ana',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c44b6d72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sonsonate',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c44b6e3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Usulutan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c44b6f02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Annobon',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c44b6fc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bioko Norte',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c44b708d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bioko Sur',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c44b7152-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centro Sur',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c44b7216-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kie-Ntem',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c44b72db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Litoral',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c44b73a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wele-Nzas',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c44b7465-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anseba',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c44b752c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Debub',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c44b75f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Debub-Keih-Bahri',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c44b76c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gash-Barka',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c44b77b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maekel',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c44b7959-cec4-11eb-a395-b05adaab2756',
                'name' => 'Semien-Keih-Bahri',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c44b7ac7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Harju',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c44b7c04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hiiu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c44b7d47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ida-Viru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c44b7e72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jarva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c44b7fb8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jogeva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c44b80f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laane',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c44b824d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laane-Viru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c44b838d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Parnu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c44b84ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Polva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c44b8607-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rapla',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c44b8755-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saare',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c44b8881-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tartu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c44b89c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valga',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c44b8b18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viljandi',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c44b8c96-cec4-11eb-a395-b05adaab2756',
                'name' => 'Voru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c44b8e4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Addis Abeba',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c44b8fdd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Afar',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c44b9160-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amhara',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c44b93fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benishangul',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c44b9508-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diredawa',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c44b9613-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gambella',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c44b96f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Harar',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c44b97ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jigjiga',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c44b98b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mekele',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c44b9980-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oromia',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c44b9a46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Somali',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c44b9b0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c44b9be1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tigray',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c44b9cae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Christmas Island',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c44b9d75-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cocos Islands',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c44b9e3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coral Sea Islands',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c44b9f05-cec4-11eb-a395-b05adaab2756',
                'name' => 'Falkland Islands',
                'country_id' => 'bc69422a-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c44b9fcc-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Georgia',
                'country_id' => 'bc69422a-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c44ba092-cec4-11eb-a395-b05adaab2756',
                'name' => 'Klaksvik',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c44ba15c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nor ara Eysturoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c44ba22b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nor oy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c44ba2fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sandoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c44ba406-cec4-11eb-a395-b05adaab2756',
                'name' => 'Streymoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c44ba4e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Su uroy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c44ba5ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sy ra Eysturoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c44ba68b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Torshavn',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c44ba74e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaga',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c44ba824-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c44ba8f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c44ba9d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c44baaa7-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Pacific',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c44bab79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c44bac4b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ahvenanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c44bad23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Etela-Karjala',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c44bae14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Etela-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c44baeef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Etela-Savo',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c44bafd0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Etela-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c44bb0df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ita-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c44bb207-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ita-Uusimaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c44bb2d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kainuu',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c44bb3a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanta-Hame',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c44bb468-cec4-11eb-a395-b05adaab2756',
                'name' => 'Keski-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c44bb530-cec4-11eb-a395-b05adaab2756',
                'name' => 'Keski-Suomi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c44bb60d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kymenlaakso',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c44bb6d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lansi-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c44bb79c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lappi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c44bb862-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Savonia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c44bb929-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ostrobothnia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c44bb9f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oulun Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c44bbab8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paijat-Hame',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c44bbb7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pirkanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c44bbc47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c44bbe33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pohjois-Karjala',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c44bbef3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pohjois-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c44bbfb2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pohjois-Savo',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c44bc07a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saarijarvi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c44bc1f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satakunta',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c44bc35d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern Savonia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c44bc41d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tavastia Proper',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c44bc4db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uleaborgs Lan',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c44bc59c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uusimaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c44bc65b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Varsinais-Suomi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c44bc709-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ain',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c44bc7c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aisne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c44bc887-cec4-11eb-a395-b05adaab2756',
                'name' => 'Albi Le Sequestre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c44bc947-cec4-11eb-a395-b05adaab2756',
                'name' => 'Allier',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c44bca06-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alpes-Cote dAzur',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c44bcb85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alpes-Maritimes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c44bccea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alpes-de-Haute-Provence',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c44bcdac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alsace',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c44bce6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aquitaine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c44bcf2b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ardeche',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c44bcfeb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ardennes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c44bd0aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ariege',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c44bd158-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aube',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c44bd208-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aude',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c44bd2c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Auvergne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c44bd38c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aveyron',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c44bd50a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bas-Rhin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c44bd66f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basse-Normandie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c44bd72e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bouches-du-Rhone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c44bd7ee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bourgogne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c44bd8ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bretagne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c44bd96c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brittany',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c44bda2b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burgundy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c44bdaea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Calvados',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c44bdbaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cantal',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c44bdc6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cedex',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c44bdd2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c44bddea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Charente',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c44bdeaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Charente-Maritime',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c44bdf61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cher',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c44be022-cec4-11eb-a395-b05adaab2756',
                'name' => 'Correze',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c44be0e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Corse-du-Sud',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c44be1a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cote-d\'Or',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c44be260-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cotes-d\'Armor',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c44be320-cec4-11eb-a395-b05adaab2756',
                'name' => 'Creuse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c44be3df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Crolles',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c44be49d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Deux-Sevres',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c44be561-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dordogne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c44be6e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Doubs',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c44be846-cec4-11eb-a395-b05adaab2756',
                'name' => 'Drome',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c44be906-cec4-11eb-a395-b05adaab2756',
                'name' => 'Essonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c44be9b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eure',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c44bea73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eure-et-Loir',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c44beb3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Feucherolles',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c44bebfb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Finistere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c44becba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Franche-Comte',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c44bed69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gard',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c44bee17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gers',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c44beed7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gironde',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c44bef98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haut-Rhin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c44bf057-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Corse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c44bf116-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c44bf296-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c44bf5d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c44bf88b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Saone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c44bfa45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Savoie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c44bfb0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haute-Vienne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c44bfbcc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hautes-Alpes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c44bfc8c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hautes-Pyrenees',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c44bfd51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hauts-de-Seine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c44bfed2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Herault',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c44c0039-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ile-de-France',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c44c00f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ille-et-Vilaine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c44c01b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Indre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c44c0275-cec4-11eb-a395-b05adaab2756',
                'name' => 'Indre-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c44c0333-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c44c03e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jura',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c44c04a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Klagenfurt',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c44c0560-cec4-11eb-a395-b05adaab2756',
                'name' => 'Landes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c44c061f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Languedoc-Roussillon',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c44c06df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Larcay',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c44c079e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Le Castellet',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c44c085c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Le Creusot',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c44c091c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limousin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c44c09da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loir-et-Cher',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c44c0a9b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c44c0b5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loire-Atlantique',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c44c0c22-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loiret',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c44c0ce3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lorraine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c44c0d91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lot',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c44c0e50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lot-et-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c44c0f13-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lower Normandy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c44c1092-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lozere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c44c11f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maine-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c44c12b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manche',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c44c1375-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c44c1435-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayenne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c44c14f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meurthe-et-Moselle',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c44c15b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meuse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c44c1675-cec4-11eb-a395-b05adaab2756',
                'name' => 'Midi-Pyrenees',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c44c1733-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morbihan',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c44c17f2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moselle',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c44c196f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nievre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c44c1ac4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c44c1b85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord-Pas-de-Calais',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c44c1c33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c44c1ce2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c44c1da1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paris',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c44c1e5f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pas-de-Calais',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c44c1f1f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pays de la Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c44c1fdf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pays-de-la-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c44c209f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Picardy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c44c215e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puy-de-Dome',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c44c2224-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pyrenees-Atlantiques',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c44c23a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pyrenees-Orientales',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c44c2507-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quelmes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c44c25c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rhone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c44c2687-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rhone-Alpes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c44c2747-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Ouen',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c44c2806-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Viatre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c44c28c4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saone-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c44c2984-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sarthe',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c44c2a43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savoie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c44c2b02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seine-Maritime',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c44c2bc2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seine-Saint-Denis',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c44c2c81-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seine-et-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c44c2d40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Somme',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c44c2dff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sophia Antipolis',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c44c2ebf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Souvans',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c44c2f8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarn',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c44c321a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarn-et-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c44c3321-cec4-11eb-a395-b05adaab2756',
                'name' => 'Territoire de Belfort',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c44c3434-cec4-11eb-a395-b05adaab2756',
                'name' => 'Treignac',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c44c35c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper Normandy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c44c368d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Val-d\'Oise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c44c376e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Val-de-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c44c3827-cec4-11eb-a395-b05adaab2756',
                'name' => 'Var',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c44c3978-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaucluse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c44c3a43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vellise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c44c3b0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vendee',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c44c3bd5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vienne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c44c3c9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vosges',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c44c3d63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c44c3e2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yvelines',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c44c3ef0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cayenne',
                'country_id' => 'bc69462b-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c44c3fc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Laurent-du-Maroni',
                'country_id' => 'bc69462b-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c44c41b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iles du Vent',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c44c4270-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iles sous le Vent',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c44c4330-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marquesas',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c44c43f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tuamotu',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c44c44b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tubuai',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c44c456e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amsterdam',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c44c462f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Crozet Islands',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c44c46ee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerguelen',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c44c47ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Estuaire',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c44c4873-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haut-Ogooue',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c44c49ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moyen-Ogooue',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c44c4b53-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngounie',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c44c4c14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nyanga',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c44c4cd3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ogooue-Ivindo',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c44c4d93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ogooue-Lolo',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c44c4e52-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ogooue-Maritime',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c44c4f11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Woleu-Ntem',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c44c4fcf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banjul',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c44c508d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basse',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c44c514d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brikama',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c44c520c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Janjanbureh',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c44c52cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanifing',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c44c538c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerewan',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c44c544b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuntaur',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c44c550a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mansakonko',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c44c55ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abhasia',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c44c5689-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ajaria',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c44c5749-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guria',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c44c5809-cec4-11eb-a395-b05adaab2756',
                'name' => 'Imereti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c44c58ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaheti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c44c5989-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kvemo Kartli',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c44c5a4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mcheta-Mtianeti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c44c5bce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Racha',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c44c5d31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samagrelo-Zemo Svaneti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c44c5df1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samche-Zhavaheti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c44c5eb0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shida Kartli',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c44c5f70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tbilisi',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c44c602f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Auvergne',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c44c60f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baden-Wurttemberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c44c61b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bavaria',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c44c6275-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c44c6336-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beilstein Wurtt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c44c63f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berlin',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c44c64b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brandenburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c44c6574-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bremen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c44c6633-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dreisbach',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c44c67b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Freistaat Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c44c68c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c44c6bfe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hannover',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c44c6dec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heroldstatt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c44c6f58-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hessen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c44c7019-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kortenberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c44c70d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laasdorf',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c44c719e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Baden-Wurttemberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c44c73cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c44c7513-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Brandenburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c44c75d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Hessen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c44c76a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Mecklenburg-Vorpommern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c44c7762-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Nordrhein-Westfalen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c44c7821-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Rheinland-Pfalz',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c44c78df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Sachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c44c799f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Sachsen-Anhalt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c44c7a5f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Land Thuringen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c44c7b1e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lower Saxony',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c44c7bdd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mecklenburg-Vorpommern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c44c7c9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mulfingen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c44c7d5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Munich',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c44c7e1b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Neubeuern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c44c7eda-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niedersachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c44c7f99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Noord-Holland',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c44c8059-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nordrhein-Westfalen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c44c8119-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Rhine-Westphalia',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c44c81d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osterode',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c44c8296-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rheinland-Pfalz',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c44c8355-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rhineland-Palatinate',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c44c84cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saarland',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c44c859b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c44c86fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sachsen-Anhalt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c44c87bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saxony',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c44c887b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schleswig-Holstein',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c44c893a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thuringia',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c44c89f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Webling',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c44c8ab7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Weinstrabe',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c44c8b76-cec4-11eb-a395-b05adaab2756',
                'name' => 'schlobborn',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c44c8c37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ashanti',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c44c8cf6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brong-Ahafo',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c44c8dbe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c44c8e7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c44c8f3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Greater Accra',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c44c8ff9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c44c90b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper East',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c44c9178-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper West',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c44c9237-cec4-11eb-a395-b05adaab2756',
                'name' => 'Volta',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c44c92f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c44c93b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gibraltar',
                'country_id' => 'bc6949f4-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c44c9476-cec4-11eb-a395-b05adaab2756',
                'name' => 'Acharnes',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c44c969a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ahaia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c44c9768-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aitolia kai Akarnania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c44c982e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Argolis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c44c9977-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arkadia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c44c9a27-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arta',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c44c9ae5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Attica',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c44c9ba3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Attiki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c44c9c62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ayion Oros',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c44c9d20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Crete',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c44c9de0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dodekanisos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c44c9ea0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Drama',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c44c9f4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Evia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c44ca00c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Evritania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c44ca0cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Evros',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c44ca18a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Evvoia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c44ca249-cec4-11eb-a395-b05adaab2756',
                'name' => 'Florina',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c44ca307-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fokis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c44ca3c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fthiotis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c44ca485-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grevena',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c44ca543-cec4-11eb-a395-b05adaab2756',
                'name' => 'Halandri',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c44ca600-cec4-11eb-a395-b05adaab2756',
                'name' => 'Halkidiki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c44ca6c4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c44ca83f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heraklion',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c44ca97f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hios',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c44caa35-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c44caafb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Imathia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c44cac41-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ioannina',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c44cad00-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iraklion',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c44cadbe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karditsa',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c44cae80-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kastoria',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c44caf3f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kavala',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c44caffe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kefallinia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c44cb0bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerkira',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c44cb17b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kiklades',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c44cb23a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilkis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c44cb2f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Korinthia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c44cb3b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kozani',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c44cb479-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lakonia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c44cb540-cec4-11eb-a395-b05adaab2756',
                'name' => 'Larisa',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c44cb5ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lasithi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c44cb6c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lesvos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c44cb77f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Levkas',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c44cb83e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magnisia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c44cb902-cec4-11eb-a395-b05adaab2756',
                'name' => 'Messinia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c44cba80-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nomos Attikis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c44cbb47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nomos Zakynthou',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c44cbd3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pella',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c44cbdfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pieria',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c44cbebc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piraios',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c44cbf7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Preveza',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c44cc039-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rethimni',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c44cc0f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rodopi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c44cc1b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c44cc278-cec4-11eb-a395-b05adaab2756',
                'name' => 'Serrai',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c44cc336-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thesprotia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c44cc3f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thessaloniki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c44cc4b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trikala',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c44cc573-cec4-11eb-a395-b05adaab2756',
                'name' => 'Voiotia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c44cc631-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Greece',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c44cc6f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xanthi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c44cc7b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zakinthos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c44cc86f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aasiaat',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c44cc92d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ammassalik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c44cc9eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Illoqqortoormiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c44ccaa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilulissat',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c44ccb6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ivittuut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c44ccced-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kangaatsiaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c44cce52-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maniitsoq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c44ccf11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nanortalik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c44ccfd1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narsaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c44cd07f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nuuk',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c44cd13e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paamiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c44cd1fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qaanaaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c44cd2bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qaqortoq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c44cd37a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qasigiannguit',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c44cd439-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qeqertarsuaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c44cd4f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sisimiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c44cd5b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Udenfor kommunal inddeling',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c44cd676-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upernavik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c44cd736-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uummannaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c44cd7f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carriacou-Petite Martinique',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c44cd8b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrew',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c44cd973-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Davids',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c44cda32-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George\'s',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c44cdaf1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c44cdbb0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mark',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c44cdc77-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Patrick',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c44cdd3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basse-Terre',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c44cdebc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grande-Terre',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c44cdf83-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iles des Saintes',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c44ce049-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Desirade',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c44ce111-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marie-Galante',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c44ce1d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Barthelemy',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c44ce2a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Martin',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c44ce40d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agana Heights',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c44ce4be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agat',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c44ce57d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barrigada',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c44ce63c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chalan-Pago-Ordot',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c44ce6fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dededo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c44ce7bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hagatna',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c44ce87c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Inarajan',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c44ce93c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mangilao',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c44ce9fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Merizo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c44ceaba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mongmong-Toto-Maite',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c44ceb78-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Rita',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c44cec38-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sinajana',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c44cecf6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Talofofo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c44cedb5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tamuning',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c44cee63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yigo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c44cef17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yona',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c44cf094-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alta Verapaz',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c44cf314-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baja Verapaz',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c44cf3db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chimaltenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c44cf49a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiquimula',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c44cf559-cec4-11eb-a395-b05adaab2756',
                'name' => 'El Progreso',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c44cf618-cec4-11eb-a395-b05adaab2756',
                'name' => 'Escuintla',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c44cf6d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guatemala',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c44cf797-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huehuetenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c44cf855-cec4-11eb-a395-b05adaab2756',
                'name' => 'Izabal',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c44cf913-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jalapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c44cf9d2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jutiapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c44cfa91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Peten',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c44cfb4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quezaltenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c44cfc0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quiche',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c44cfccb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Retalhuleu',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c44cfd8a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sacatepequez',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c44cfe49-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Marcos',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c44cff08-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Rosa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c44cffc6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Solola',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c44d0085-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suchitepequez',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c44d0144-cec4-11eb-a395-b05adaab2756',
                'name' => 'Totonicapan',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c44d02bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zacapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c44d0387-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alderney',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c44d051c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Castel',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c44d0708-cec4-11eb-a395-b05adaab2756',
                'name' => 'Forest',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c44d07d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrew',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c44d089b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Martin',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c44d0a7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter Port',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c44d0be2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Pierre du Bois',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c44d0ca3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Sampson',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c44d0d62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Saviour',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c44d0e10-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sark',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c44d0ed0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Torteval',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c44d0f7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vale',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c44d103d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beyla',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c44d10fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boffa',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c44d11ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boke',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c44d126c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Conakry',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c44d132c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coyah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c44d13eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dabola',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c44d14aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dalaba',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c44d1568-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dinguiraye',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c44d1627-cec4-11eb-a395-b05adaab2756',
                'name' => 'Faranah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c44d16eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Forecariah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c44d1858-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fria',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c44d1a31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaoual',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c44d1af1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gueckedou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c44d1baf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kankan',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c44d1c6f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerouane',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c44d1d2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kindia',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c44d1dee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kissidougou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c44d1ead-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koubia',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c44d1f6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koundara',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c44d202a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kouroussa',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c44d20d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Labe',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c44d2185-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lola',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c44d2245-cec4-11eb-a395-b05adaab2756',
                'name' => 'Macenta',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c44d22f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mali',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c44d23b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mamou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c44d2471-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mandiana',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c44d2530-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nzerekore',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c44d25dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pita',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c44d269d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siguiri',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c44d275c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Telimele',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c44d281b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tougue',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c44d28de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yomou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c44d2a5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bafata',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c44d2b21-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bissau',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c44d2be6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolama',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c44d2cac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cacheu',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c44d2d63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gabu',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c44d2e19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oio',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c44d2ffc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quinara',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c44d3158-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tombali',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c44d329f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barima-Waini',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c44d3360-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cuyuni-Mazaruni',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c44d341f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Demerara-Mahaica',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c44d34df-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Berbice-Corentyne',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c44d359e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Essequibo Islands-West Demerar',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c44d365d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahaica-Berbice',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c44d371d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pomeroon-Supenaam',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c44d37dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Potaro-Siparuni',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c44d389b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper Demerara-Berbice',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c44d395a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Upper Takutu-Upper Essequibo',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c44d3a19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Artibonite',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c44d3ad7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centre',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c44d3b95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand\'Anse',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c44d3c47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c44d3dc0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord-Est',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c44d3fb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord-Ouest',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c44d4076-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ouest',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c44d4124-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c44d41e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud-Est',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c44d42a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heard and McDonald Islands',
                'country_id' => 'bc6950f6-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c44d4361-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atlantida',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c44d4420-cec4-11eb-a395-b05adaab2756',
                'name' => 'Choluteca',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c44d44de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colon',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c44d459b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comayagua',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c44d4659-cec4-11eb-a395-b05adaab2756',
                'name' => 'Copan',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c44d4717-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cortes',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c44d47d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Central',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c44d4893-cec4-11eb-a395-b05adaab2756',
                'name' => 'El Paraiso',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c44d4952-cec4-11eb-a395-b05adaab2756',
                'name' => 'Francisco Morazan',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c44d4a11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gracias a Dios',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c44d4acf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Intibuca',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c44d4b8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Islas de la Bahia',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c44d4c4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Paz',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c44d4d0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lempira',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c44d4dcc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ocotepeque',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c44d4e90-cec4-11eb-a395-b05adaab2756',
                'name' => 'Olancho',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c44d5010-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Barbara',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c44d5177-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valle',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c44d5227-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yoro',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c44d52e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hong Kong',
                'country_id' => 'bc6951df-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c44d53a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bacs-Kiskun',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c44d5463-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baranya',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c44d5522-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bekes',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c44d55e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Borsod-Abauj-Zemplen',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c44d56a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Budapest',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c44d5761-cec4-11eb-a395-b05adaab2756',
                'name' => 'Csongrad',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c44d58fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fejer',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c44d5f24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gyor-Moson-Sopron',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c44d6157-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hajdu-Bihar',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c44d62fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heves',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c44d64ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jasz-Nagykun-Szolnok',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c44d66e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Komarom-Esztergom',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c44d696e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nograd',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c44d6aa7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pest',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c44d6b7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Somogy',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c44d6c47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Szabolcs-Szatmar-Bereg',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c44d6d0b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tolna',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c44d6e4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vas',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c44d6fc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veszprem',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c44d711d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zala',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c44d71dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Austurland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c44d729b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gullbringusysla',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c44d7359-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hofu borgarsva i',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c44d7416-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nor urland eystra',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c44d74d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nor urland vestra',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c44d7590-cec4-11eb-a395-b05adaab2756',
                'name' => 'Su urland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c44d764d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Su urnes',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c44d7709-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vestfir ir',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c44d77c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vesturland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c44d7874-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aceh',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c44d7920-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bali',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c44d79de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bangka-Belitung',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c44d7a9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banten',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c44d7b58-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bengkulu',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c44d7c16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gandaria',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c44d7cd3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorontalo',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c44d7d92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jakarta',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c44d7f2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jambi',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c44d7ff3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jawa Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c44d8150-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jawa Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c44d822c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jawa Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c44d82f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalimantan Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c44d83b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalimantan Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c44d8479-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalimantan Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c44d853e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalimantan Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c44d8602-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kendal',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c44d86cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lampung',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c44d8794-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maluku',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c44d885a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maluku Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c44d8922-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c44d89e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c44d8aab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Papua',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c44d8b62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Riau',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c44d8c2b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Riau Kepulauan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c44d8ce6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Solo',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c44d8dac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sulawesi Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c44d8e70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sulawesi Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c44d8f35-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sulawesi Tenggara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c44d8ff8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sulawesi Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c44d90bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sumatera Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c44d9180-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sumatera Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c44d9246-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sumatera Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c44d9313-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yogyakarta',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c44d93d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ardabil',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c44d949e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Azarbayjan-e Bakhtari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c44d9563-cec4-11eb-a395-b05adaab2756',
                'name' => 'Azarbayjan-e Khavari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c44d9628-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bushehr',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c44d96ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chahar Mahal-e Bakhtiari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c44d97b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Esfahan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c44d9864-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fars',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c44d9929-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gilan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c44d99ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Golestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c44d9ab1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamadan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c44d9b9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hormozgan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c44d9c7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilam',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c44d9d41-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerman',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c44d9e05-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kermanshah',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c44d9ec8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khorasan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c44d9f8c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khuzestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c44da050-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kohgiluyeh-e Boyerahmad',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c44da114-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kordestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c44da1d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lorestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c44da29c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Markazi',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c44da361-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mazandaran',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c44da426-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ostan-e Esfahan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c44da4ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qazvin',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c44da5c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qom',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c44da687-cec4-11eb-a395-b05adaab2756',
                'name' => 'Semnan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c44da74e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sistan-e Baluchestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c44da812-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tehran',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c44da8c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yazd',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c44da98b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zanjan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c44daa50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Babil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c44dab14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baghdad',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c44dabd8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dahuk',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c44dace2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhi Qar',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c44dadaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diyala',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c44dae70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Erbil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c44daf36-cec4-11eb-a395-b05adaab2756',
                'name' => 'Irbil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c44daffb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karbala',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c44db0bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kurdistan',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c44db183-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maysan',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c44db248-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ninawa',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c44db30d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salah-ad-Din',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c44db3d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wasit',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c44db498-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Anbar',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c44db55d-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Basrah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c44db621-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Muthanna',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c44db6e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qadisiyah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c44db7ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'an-Najaf',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c44db879-cec4-11eb-a395-b05adaab2756',
                'name' => 'as-Sulaymaniyah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c44db93f-cec4-11eb-a395-b05adaab2756',
                'name' => 'at-Ta\'mim',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c44dba04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Armagh',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c44dbac8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carlow',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c44dbb8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cavan',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c44dbc53-cec4-11eb-a395-b05adaab2756',
                'name' => 'Clare',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c44dbd46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cork',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c44dbe12-cec4-11eb-a395-b05adaab2756',
                'name' => 'Donegal',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c44dbeda-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dublin',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c44dbf9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Galway',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c44dc0d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kerry',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c44dc23e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kildare',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c44dc318-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilkenny',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c44dc3e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laois',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c44dc4aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leinster',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c44dc570-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leitrim',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c44dc637-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limerick',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c44dc6fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loch Garman',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c44dc7c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Longford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c44dc887-cec4-11eb-a395-b05adaab2756',
                'name' => 'Louth',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c44dc93e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayo',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c44dca02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meath',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c44dcac8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monaghan',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c44dcb8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Offaly',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c44dcc7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roscommon',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c44dcd46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sligo',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c44dce0a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tipperary North Riding',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c44dcf19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tipperary South Riding',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c44dcfe1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ulster',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c44dd0a7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Waterford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c44dd16b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Westmeath',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c44dd230-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wexford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c44dd2f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wicklow',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c44dd3b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beit Hanania',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c44dd47e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ben Gurion Airport',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c44dd542-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bethlehem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c44dd606-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caesarea',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c44dd6cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centre',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c44dd77e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaza',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c44dd843-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hadaron',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c44dd909-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haifa District',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c44dd9d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamerkaz',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c44dda95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hazafon',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c44ddbdb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hebron',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c44ddc9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jaffa',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c44ddd59-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jerusalem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c44dde16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khefa',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c44ddedb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kiryat Yam',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c44de064-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lower Galilee',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c44de132-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qalqilya',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c44de291-cec4-11eb-a395-b05adaab2756',
                'name' => 'Talme Elazar',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c44de34f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tel Aviv',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c44de40c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tsafon',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c44de4ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umm El Fahem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c44de587-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yerushalayim',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c44de644-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abruzzi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c44de703-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abruzzo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c44de7c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agrigento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c44de87d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alessandria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c44de93b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ancona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c44de9f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arezzo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c44deab5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ascoli Piceno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c44deb61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asti',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c44dec20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Avellino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c44deccd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bari',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c44ded89-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basilicata',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c44dee48-cec4-11eb-a395-b05adaab2756',
                'name' => 'Belluno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c44def04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benevento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c44defc0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bergamo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c44df07d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biella',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c44df1f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bologna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c44df373-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolzano',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c44df43d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brescia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c44df502-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brindisi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c44df5d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Calabria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c44df73b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Campania',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c44df8ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cartoceto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c44df9a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caserta',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c44dfaed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Catania',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c44dfbab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chieti',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c44dfc58-cec4-11eb-a395-b05adaab2756',
                'name' => 'Como',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c44dfd17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cosenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c44dfdd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cremona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c44dfe91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cuneo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c44dff51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Emilia-Romagna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c44e0037-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ferrara',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c44e01b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Firenze',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c44e027f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Florence',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c44e0407-cec4-11eb-a395-b05adaab2756',
                'name' => 'Forli-Cesena ',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c44e05a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Friuli-Venezia Giulia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c44e07fe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Frosinone',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c44e094e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Genoa',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c44e0c3f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorizia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c44e0da7-cec4-11eb-a395-b05adaab2756',
                'name' => 'L\'Aquila',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c44e0f23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lazio',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c44e1007-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lecce',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c44e10d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lecco',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c44e1193-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lecco Province',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c44e1251-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liguria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c44e12fe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lodi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c44e13bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lombardia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c44e1478-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lombardy',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c44e1536-cec4-11eb-a395-b05adaab2756',
                'name' => 'Macerata',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c44e15f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mantova',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c44e16b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marche',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c44e176e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Messina',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c44e182c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Milan',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c44e18e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Modena',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c44e19a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Molise',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c44e1a8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Molteno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c44e1c0b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montenegro',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c44e1d6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monza and Brianza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c44e1e29-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naples',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c44e1fa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Novara',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c44e210d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Padova',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c44e21cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Parma',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c44e228a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pavia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c44e2348-cec4-11eb-a395-b05adaab2756',
                'name' => 'Perugia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c44e2405-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pesaro-Urbino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c44e24c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piacenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c44e257f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piedmont',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c44e263d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piemonte',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c44e26e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pisa',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c44e27a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pordenone',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c44e2862-cec4-11eb-a395-b05adaab2756',
                'name' => 'Potenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c44e291e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puglia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c44e29db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Reggio Emilia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c44e2a98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rimini',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c44e2b45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roma',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c44e2c02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salerno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c44e2cbf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sardegna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c44e2d7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sassari',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c44e2e3a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c44e2ef8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sicilia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c44e2fb5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siena',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c44e312f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sondrio',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c44e3281-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Tyrol',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c44e3345-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taranto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c44e3409-cec4-11eb-a395-b05adaab2756',
                'name' => 'Teramo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c44e34cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Torino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c44e3591-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toscana',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c44e36d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trapani',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c44e3793-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trentino-Alto Adige',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c44e3851-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c44e390e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Treviso',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c44e39d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Udine',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c44e3a93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umbria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c44e3b51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valle d\'Aosta',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c44e3c0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Varese',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c44e3ccc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veneto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c44e3d89-cec4-11eb-a395-b05adaab2756',
                'name' => 'Venezia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c44e3e46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Verbano-Cusio-Ossola',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c44e3f03-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vercelli',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c44e3fc0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Verona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c44e407c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vicenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c44e415a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viterbo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c44e4221-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buxoro Viloyati',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c44e439f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Clarendon',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c44e4503-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hanover',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c44e45c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kingston',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c44e467f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manchester',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c44e473c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Portland',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c44e47f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrews',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c44e48b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Ann',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c44e4973-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Catherine',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c44e4a2f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Elizabeth',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c44e4aec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint James',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c44e4ba8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mary',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c44e4c66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Thomas',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c44e4d24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trelawney',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c44e4de1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Westmoreland',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c44e4e9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aichi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c44e4f5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Akita',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c44e501a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aomori',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c44e50d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiba',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c44e5193-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ehime',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c44e524f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fukui',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c44e530c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fukuoka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c44e53ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fukushima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c44e553c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gifu',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c44e569e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gumma',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c44e575a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hiroshima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c44e5817-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hokkaido',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c44e58d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hyogo',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c44e5990-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ibaraki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c44e5a4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ishikawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c44e5b0a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iwate',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c44e5bc8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kagawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c44e5c85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kagoshima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c44e5d41-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanagawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c44e5dff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c44e5ebb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kochi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c44e5f79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kumamoto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c44e603e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyoto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c44e60ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mie',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c44e61aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miyagi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c44e6267-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miyazaki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c44e6324-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nagano',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c44e63e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nagasaki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c44e648d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nara',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c44e6550-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niigata',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c44e66b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oita',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c44e683c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Okayama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c44e68fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Okinawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c44e69b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osaka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c44e6a66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saga',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c44e6b23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saitama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c44e6bdf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shiga',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c44e6c9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shimane',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c44e6d5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shizuoka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c44e6e18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tochigi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c44e6ed5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tokushima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c44e6f91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tokyo',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c44e704e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tottori',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c44e710c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toyama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c44e71c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wakayama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c44e7287-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yamagata',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c44e7344-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yamaguchi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c44e7401-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yamanashi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c44e74bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grouville',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c44e757c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Brelade',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c44e7638-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Clement',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c44e76fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Helier',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c44e7876-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c44e79d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Lawrence',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c44e7a94-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Martin',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c44e7b50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mary',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c44e7c0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c44e7cca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Saviour',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c44e7d88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trinity',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c44e7e46-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Ajlun',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c44e7f02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amman',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c44e7fbf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Irbid',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c44e807c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jarash',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c44e8139-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ma\'an',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c44e81f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madaba',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c44e82b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-\'Aqabah',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c44e8373-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Balqa\'',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c44e8430-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Karak',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c44e84ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Mafraq',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c44e85ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'at-Tafilah',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c44e8670-cec4-11eb-a395-b05adaab2756',
                'name' => 'az-Zarqa\'',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c44e872d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Akmecet',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c44e87eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Akmola',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c44e88ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aktobe',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c44e8a2d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Almati',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c44e8b97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atirau',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c44e8c56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batis Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c44e8d14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burlinsky Region',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c44e8dd2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karagandi',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c44e8e8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kostanay',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c44e8f6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mankistau',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c44e90e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ontustik Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c44e924f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pavlodar',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c44e9316-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sigis Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c44e93da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soltustik Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c44e949e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taraz',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c44e9562-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c44e9626-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coast',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c44e976c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c44e982b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nairobi',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c44e98e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Eastern',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c44e99a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nyanza',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c44e9a63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rift Valley',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c44e9b1f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c44e9bdb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abaiang',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c44e9d54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abemana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c44e9ebc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aranuka',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c44e9f7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arorae',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c44ea03a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banaba',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c44ea0e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beru',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c44ea1a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Butaritari',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c44ea261-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kiritimati',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c44ea31e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuria',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c44ea3dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maiana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c44ea498-cec4-11eb-a395-b05adaab2756',
                'name' => 'Makin',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c44ea556-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marakei',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c44ea613-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nikunau',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c44ea6d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nonouti',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c44ea78d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Onotoa',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c44ea84a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phoenix Islands',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c44ea908-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabiteuea North',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c44ea9c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabiteuea South',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c44eaa82-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabuaeran',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c44eab40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tamana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c44eabfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarawa North',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c44eacbb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarawa South',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c44ead79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Teraina',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c44eaef2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chagangdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c44eb05d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamgyeongbukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c44eb124-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamgyeongnamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c44eb1e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hwanghaebukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c44eb29e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hwanghaenamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c44eb35b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaeseong',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c44eb418-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kangweon',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c44eb4d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nampo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c44eb591-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pyeonganbukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c44eb66d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pyeongannamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c44eb72c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pyeongyang',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c44eb7eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yanggang',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c44eb8a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Busan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c44eb965-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cheju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c44eba23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chollabuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c44ebae0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chollanam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c44ebb9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chungbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c44ebc59-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chungcheongbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c44ebd16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chungcheongnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c44ebdd2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chungnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c44ebe8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Daegu',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c44ebf50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gangwon-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c44ec0cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Goyang-si',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c44ec22f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gyeonggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c44ec2ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gyeongsang ',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c44ec3a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gyeongsangnam-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c44ec465-cec4-11eb-a395-b05adaab2756',
                'name' => 'Incheon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c44ec521-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jeju-Si',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c44ec5de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jeonbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c44ec69d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kangweon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c44ec759-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kwangju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c44ec816-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyeonggi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c44ec8d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyeongsangbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c44ec991-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyeongsangnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c44eca4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyonggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c44ecb0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyungbuk-Do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c44ecbca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyunggi-Do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c44ecc88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyunggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c44ecd44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pusan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c44ece02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seoul',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c44ecebf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sudogwon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c44ecf7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taegu',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c44ed03a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taejeon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c44ed0fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taejon-gwangyoksi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c44ed27c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ulsan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c44ed3de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wonju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c44ed49b-cec4-11eb-a395-b05adaab2756',
                'name' => 'gwangyoksi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c44ed558-cec4-11eb-a395-b05adaab2756',
                'name' => 'Al Asimah',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c44ed615-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hawalli',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c44ed6d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mishref',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c44ed798-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qadesiya',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c44ed855-cec4-11eb-a395-b05adaab2756',
                'name' => 'Safat',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c44ed911-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salmiya',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c44ed9ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Ahmadi',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c44eda8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Farwaniyah',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c44edb47-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jahra',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c44edc06-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Kuwayt',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c44edcc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batken',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c44ede4c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bishkek',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c44edefe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chui',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c44edfbc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Issyk-Kul',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c44ee07a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jalal-Abad',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c44ee138-cec4-11eb-a395-b05adaab2756',
                'name' => 'Naryn',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c44ee1e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osh',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c44ee2a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Talas',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c44ee417-cec4-11eb-a395-b05adaab2756',
                'name' => 'Attopu',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c44ee4e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bokeo',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c44ee641-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolikhamsay',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c44ee6ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Champasak',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c44ee7bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Houaphanh',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c44ee878-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khammouane',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c44ee935-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luang Nam Tha',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c44ee9f2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luang Prabang',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c44eeab0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oudomxay',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c44eeb6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phongsaly',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c44eec2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saravan',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c44eece8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savannakhet',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c44eeda5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sekong',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c44eee61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viangchan Prefecture',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c44eef1f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Viangchan Province',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c44eefdd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xaignabury',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c44ef09b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Xiang Khuang',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c44ef157-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aizkraukles',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c44ef214-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aluksnes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c44ef2d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balvu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c44ef38f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bauskas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c44ef43c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cesu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c44ef5b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Daugavpils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c44ef680-cec4-11eb-a395-b05adaab2756',
                'name' => 'Daugavpils City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c44ef7df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dobeles',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c44ef89c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gulbenes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c44ef95a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jekabspils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c44efa18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jelgava',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c44efad5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jelgavas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c44efb91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jurmala City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c44efc4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kraslavas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c44efd0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuldigas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c44efdca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liepaja',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c44efe91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Liepajas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c44eff4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limbazhu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c44f000a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ludzas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c44f00c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madonas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c44f0185-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ogres',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c44f0242-cec4-11eb-a395-b05adaab2756',
                'name' => 'Preilu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c44f02ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rezekne',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c44f03bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rezeknes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c44f0493-cec4-11eb-a395-b05adaab2756',
                'name' => 'Riga',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c44f0553-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rigas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c44f0611-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saldus',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c44f078c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Talsu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c44f0978-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tukuma',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c44f0a36-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valkas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c44f0af3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valmieras',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c44f0c73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ventspils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c44f0dcf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ventspils City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c44f0e94-cec4-11eb-a395-b05adaab2756',
                'name' => 'Beirut',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c44f0f57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jabal Lubnan',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c44f101c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mohafazat Liban-Nord',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c44f10e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mohafazat Mont-Liban',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c44f11a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sidon',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c44f1269-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Biqa',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c44f132d-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Janub',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c44f13f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'an-Nabatiyah',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c44f1538-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shamal',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c44f15f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berea',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c44f16b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Butha-Buthe',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c44f1770-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leribe',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c44f182d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mafeteng',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c44f18ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maseru',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c44f19a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mohale\'s Hoek',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c44f1a69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mokhotlong',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c44f1bdc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qacha\'s Nek',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c44f1d43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quthing',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c44f1e01-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thaba-Tseka',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c44f1eae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bomi',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c44f1f5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bong',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c44f2018-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Bassa',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c44f20d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Cape Mount',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c44f2191-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Gedeh',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c44f224e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loffa',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c44f230c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Margibi',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c44f23ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maryland and Grand Kru',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c44f248a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montserrado',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c44f2547-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nimba',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c44f2605-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rivercess',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c44f26c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sinoe',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c44f2788-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ajdabiya',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c44f2845-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fezzan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c44f2902-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banghazi',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c44f29bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Darnah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c44f2a7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghadamis',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c44f2b58-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharyan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c44f2c1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Misratah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c44f2d92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Murzuq',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c44f2ee5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sabha',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c44f2fa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sawfajjin',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c44f305c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Surt',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c44f319e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarabulus',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c44f325b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarhunah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c44f3318-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tripolitania',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c44f33d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tubruq',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c44f3491-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yafran',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c44f354d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zlitan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c44f3608-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-\'Aziziyah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c44f36c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Fatih',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c44f3782-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jabal al Akhdar',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c44f383f-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jufrah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c44f38fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Khums',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c44f39b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Kufrah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c44f3a75-cec4-11eb-a395-b05adaab2756',
                'name' => 'an-Nuqat al-Khams',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c44f3b31-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shati\'',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c44f3bef-cec4-11eb-a395-b05adaab2756',
                'name' => 'az-Zawiyah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c44f3cab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balzers',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c44f3d67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eschen',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c44f3e2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gamprin',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c44f3fa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mauren',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c44f4108-cec4-11eb-a395-b05adaab2756',
                'name' => 'Planken',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c44f41c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ruggell',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c44f4281-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schaan',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c44f433e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schellenberg',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c44f43fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Triesen',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c44f44b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Triesenberg',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c44f4574-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaduz',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c44f462f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alytaus',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c44f46eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anyksciai',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c44f47a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kauno',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c44f4865-cec4-11eb-a395-b05adaab2756',
                'name' => 'Klaipedos',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c44f49db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marijampoles',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c44f4b3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Panevezhio',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c44f4c04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Panevezys',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c44f4cc7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shiauliu',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c44f4d90-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taurages',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c44f4e56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Telshiu',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c44f4f2c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Telsiai',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c44f50af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Utenos',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c44f52a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vilniaus',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c44f53fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Capellen',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c44f5696-cec4-11eb-a395-b05adaab2756',
                'name' => 'Clervaux',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c44f57d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diekirch',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c44f590f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Echternach',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c44f5a4a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Esch-sur-Alzette',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c44f5b9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grevenmacher',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c44f5c6f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luxembourg',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c44f5d2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mersch',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c44f5ded-cec4-11eb-a395-b05adaab2756',
                'name' => 'Redange',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c44f5eac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Remich',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c44f5f69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vianden',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c44f6026-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wiltz',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c44f60e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Macau',
                'country_id' => 'bc6961c9-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c44f61a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c44f625f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bitola',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c44f630b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brod',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c44f63c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Debar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c44f6485-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delchevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c44f6543-cec4-11eb-a395-b05adaab2756',
                'name' => 'Demir Hisar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c44f6600-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gevgelija',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c44f66bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gostivar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c44f677b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kavadarci',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c44f68f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kichevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c44f69c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kochani',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c44f6b25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kratovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c44f6be3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kriva Palanka',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c44f6ca0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krushevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c44f6d5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kumanovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c44f6e18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Negotino',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c44f6ed5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ohrid',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c44f6f92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prilep',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c44f704f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Probishtip',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c44f710d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Radovish',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c44f71ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Resen',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c44f7288-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shtip',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c44f7344-cec4-11eb-a395-b05adaab2756',
                'name' => 'Skopje',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c44f7402-cec4-11eb-a395-b05adaab2756',
                'name' => 'Struga',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c44f74bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Strumica',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c44f757c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sveti Nikole',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c44f7639-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tetovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c44f76f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valandovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c44f77b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veles',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c44f7870-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vinica',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c44f7a17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antananarivo',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c44f7bcd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antsiranana',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c44f7dee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fianarantsoa',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c44f7ee8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahajanga',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c44f7fb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toamasina',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c44f807a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toliary',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c44f8143-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balaka',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c44f8211-cec4-11eb-a395-b05adaab2756',
                'name' => 'Blantyre City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c44f82da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chikwawa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c44f839e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiradzulu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c44f8466-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chitipa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c44f852b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dedza',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c44f85e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dowa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c44f86a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karonga',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c44f876b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kasungu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c44f8830-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lilongwe City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c44f88f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Machinga',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c44f89b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mangochi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c44f8a7e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mchinji',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c44f8b42-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mulanje',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c44f8c07-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mwanza',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c44f8ccc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mzimba',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c44f8ddb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mzuzu City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c44f8ea4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nkhata Bay',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c44f8f68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nkhotakota',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c44f902c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nsanje',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c44f90f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ntcheu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c44f91b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ntchisi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c44f927c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phalombe',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c44f9341-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rumphi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c44f9406-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salima',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c44f94c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thyolo',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c44f958e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zomba Municipality',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c44f965b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Johor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c44f971f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kedah',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c44f97e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kelantan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c44f98a7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuala Lumpur',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c44f996b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Labuan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c44f9a2d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Melaka',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c44f9af1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Negeri Johor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c44f9bb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Negeri Sembilan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c44f9c7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pahang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c44f9d3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Penang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c44f9e46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Perak',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c44f9f0f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Perlis',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c44f9fd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pulau Pinang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c44fa09a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sabah',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c44fa15e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sarawak',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c44fa224-cec4-11eb-a395-b05adaab2756',
                'name' => 'Selangor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c44fa2f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sembilan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c44fa3b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Terengganu',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c44fa49c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alif Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c44fa56d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alif Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c44fa622-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c44fa6e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c44fa79a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Faaf',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c44fa85e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaaf Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c44fa921-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaaf Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c44fa9e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c44faaa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haa Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c44fab6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Haa Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c44fac20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaaf',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c44facd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laam',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c44fad97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lhaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c44fae88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Male',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c44faf46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miim',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c44faffb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nuun',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c44fb0ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Raa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c44fb173-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c44fb227-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siin',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c44fb2d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thaa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c44fb38c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaav',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c44fb451-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bamako',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c44fb505-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gao',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c44fb5c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayes',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c44fb68e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kidal',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c44fb756-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koulikoro',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c44fb81b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mopti',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c44fb8e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Segou',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c44fb9a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sikasso',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c44fba6a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tombouctou',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c44fbb2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gozo and Comino',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c44fbbf3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Inner Harbour',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c44fbcb7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c44fbd7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Outer Harbour',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c44fbe40-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Eastern',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c44fbf47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valletta',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c44fc011-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c44fc0d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Castletown',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c44fc19b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Douglas',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c44fc25f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laxey',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c44fc323-cec4-11eb-a395-b05adaab2756',
                'name' => 'Onchan',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c44fc3d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Peel',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c44fc49c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Port Erin',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c44fc560-cec4-11eb-a395-b05adaab2756',
                'name' => 'Port Saint Mary',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c44fc624-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ramsey',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c44fc6e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ailinlaplap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c44fc7ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ailuk',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c44fc867-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arno',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c44fc9a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aur',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c44fcb0f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bikini',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c44fccbb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ebon',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c44fceae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Enewetak',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c44fcfe1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jabat',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c44fd0ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jaluit',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c44fd160-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kili',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c44fd224-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kwajalein',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c44fd358-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lae',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c44fd4c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lib',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c44fd62f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Likiep',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c44fd6ee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Majuro',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c44fd7aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maloelap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c44fd868-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mejit',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c44fd914-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mili',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c44fd9d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namorik',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c44fda7e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namu',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c44fdb3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rongelap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c44fdbe7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ujae',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c44fdca4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Utrik',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c44fdd60-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wotho',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c44fde1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wotje',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c44fded9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fort-de-France',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c44fdf96-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Trinite',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c44fe054-cec4-11eb-a395-b05adaab2756',
                'name' => 'Le Marin',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c44fe110-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c44fe1ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adrar',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c44fe28b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Assaba',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c44fe348-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brakna',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c44fe405-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhakhlat Nawadibu',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c44fe4c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hudh-al-Gharbi',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c44fe63c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hudh-ash-Sharqi',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c44fe7aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Inshiri',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c44fe86a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nawakshut',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c44fe926-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qidimagha',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c44fe9e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qurqul',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c44feaa0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taqant',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c44feb5e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tiris Zammur',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c44fec1b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trarza',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c44fecd9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Black River',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c44fed96-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eau Coulee',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c44fee53-cec4-11eb-a395-b05adaab2756',
                'name' => 'Flacq',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c44fef11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Floreal',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c44fefce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Port',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c44ff07a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moka',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c44ff139-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pamplempousses',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c44ff1f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plaines Wilhelm',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c44ff2dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Port Louis',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c44ff39e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Riviere du Rempart',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c44ff467-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rodrigues',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c44ff524-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rose Hill',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c44ff5e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savanne',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c44ff6a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayotte',
                'country_id' => 'bc69832f-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c44ff81f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pamanzi',
                'country_id' => 'bc69832f-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c44ff984-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aguascalientes',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c44ffa43-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baja California',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c44ffafe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Baja California Sur',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c44ffbbb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Campeche',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c44ffc79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiapas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c44ffd35-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chihuahua',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c44ffdf3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coahuila',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c44ffeaf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colima',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c44fff6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Federal',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c4500029-cec4-11eb-a395-b05adaab2756',
                'name' => 'Durango',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c45000e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Estado de Mexico',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c45001a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guanajuato',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c4500263-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guerrero',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c4500320-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hidalgo',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c45003de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jalisco',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c450049a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mexico',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c4500558-cec4-11eb-a395-b05adaab2756',
                'name' => 'Michoacan',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c4500615-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morelos',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c45006d2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nayarit',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c4500791-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nuevo Leon',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c4500853-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oaxaca',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c45009d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puebla',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c4500b31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Queretaro',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c4500bef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Quintana Roo',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c4500cac-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Luis Potosi',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c4500d6a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sinaloa',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c4500e28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sonora',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c4500ee5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabasco',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c4500fa2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tamaulipas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c4501060-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tlaxcala',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c450111d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veracruz',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c45011da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yucatan',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c4501298-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zacatecas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c4501356-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chuuk',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c4501413-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kusaie',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c45014d1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pohnpei',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c450157d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yap',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c4501639-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balti',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c45016f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cahul',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c45017b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chisinau',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c4501870-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chisinau Oras',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c4501952-cec4-11eb-a395-b05adaab2756',
                'name' => 'Edinet',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c4501acd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gagauzia',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c4501b9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lapusna',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c4501cf4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orhei',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c4501dbd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soroca',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c4501e86-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taraclia',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c4501f4c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tighina',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c4502010-cec4-11eb-a395-b05adaab2756',
                'name' => 'Transnistria',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c45020d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ungheni',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c450221a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fontvieille',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c45022d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Condamine',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c4502394-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monaco-Ville',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c4502451-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monte Carlo',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c450250d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arhangaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c45025cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bajan-Olgij',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c4502687-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bajanhongor',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c4502744-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bulgan',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c4502802-cec4-11eb-a395-b05adaab2756',
                'name' => 'Darhan-Uul',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c45028bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dornod',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c450297a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dornogovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c4502a37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dundgovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c4502af3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Govi-Altaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c4502baf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Govisumber',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c4502c6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hentij',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c4502d17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hovd',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c4502dd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hovsgol',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c4502e95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Omnogovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c4503010-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orhon',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c4503160-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ovorhangaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c4503226-cec4-11eb-a395-b05adaab2756',
                'name' => 'Selenge',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c45032e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suhbaatar',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c450341d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tov',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c45034db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ulaanbaatar',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c4503588-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uvs',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c4503645-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zavhan',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c4503702-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montserrat',
                'country_id' => 'bc6993ca-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c45037bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agadir',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c450387b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Casablanca',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c4503939-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chaouia-Ouardigha',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c45039f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Doukkala-Abda',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c4503ab3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fes-Boulemane',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c4503b70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharb-Chrarda-Beni Hssen',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c4503c2d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guelmim',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c4503ce9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kenitra',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c4503da5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marrakech-Tensift-Al Haouz',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c4503e64-cec4-11eb-a395-b05adaab2756',
                'name' => 'Meknes-Tafilalet',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c4503f21-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oriental',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c4503fde-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oujda',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c45040c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Province de Tanger',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c45042d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rabat-Sale-Zammour-Zaer',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c45043a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sala Al Jadida',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c4504469-cec4-11eb-a395-b05adaab2756',
                'name' => 'Settat',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c45045ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Souss Massa-Draa',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c450466c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tadla-Azilal',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c4504729-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tangier-Tetouan',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c45047e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taza-Al Hoceima-Taounate',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c45048a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilaya de Casablanca',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c450495f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilaya de Rabat-Sale',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c4504a1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cabo Delgado',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c4504ac8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaza',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c4504b87-cec4-11eb-a395-b05adaab2756',
                'name' => 'Inhambane',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c4504c44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manica',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c4504d00-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maputo',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c4504dbc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maputo Provincia',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c4504e79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nampula',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c4504f35-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niassa',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c4504ff1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sofala',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c450509d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tete',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c4505159-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zambezia',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c4505215-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ayeyarwady',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c45052c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bago',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c450542d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c4505594-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kachin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c4505653-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayah',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c4505710-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c45057cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magway',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c450588d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mandalay',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c450593a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mon',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c45059f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nay Pyi Taw',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c4505ab5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rakhine',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c4505b72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sagaing',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c4505c20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shan',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c4505cdf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tanintharyi',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c4505d9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yangon',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c4505e5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caprivi',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c4505f18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Erongo',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c4505fd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hardap',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c4506091-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karas',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c450614e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kavango',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c450620b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khomas',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c45062c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kunene',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c4506387-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ohangwena',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c450644a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Omaheke',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c45065c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Omusati',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c4506742-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oshana',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c4506805-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oshikoto',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c45068c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Otjozondjupa',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c4506982-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yaren',
                'country_id' => 'bc69abd4-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c4506a47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bagmati',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c4506b02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bheri',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c4506bc0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhawalagiri',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c4506c7e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gandaki',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c4506d3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Janakpur',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c4506df9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karnali',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c4506eb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koshi',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c4506f74-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lumbini',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c4507032-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mahakali',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c45070f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mechi',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c45071ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narayani',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c450726a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rapti',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c4507326-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sagarmatha',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c45073d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Seti',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c4507491-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bonaire',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c450754e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Curacao',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c4507601-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saba',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c4507779-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sint Eustatius',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c45078df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sint Maarten',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c450799e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amsterdam',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c4507a5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benelux',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c4507b1a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Drenthe',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c4507bd8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Flevoland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c4507c96-cec4-11eb-a395-b05adaab2756',
                'name' => 'Friesland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c4507d55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gelderland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c4507e12-cec4-11eb-a395-b05adaab2756',
                'name' => 'Groningen',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c4507ed0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limburg',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c4507f8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Noord-Brabant',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c450804b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Noord-Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c4508108-cec4-11eb-a395-b05adaab2756',
                'name' => 'Overijssel',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c45081c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c4508282-cec4-11eb-a395-b05adaab2756',
                'name' => 'Utrecht',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c4508340-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zeeland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c45083fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zuid-Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c45084aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iles',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c4508556-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c4508603-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sud',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c45086c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Area Outside Region',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c4508783-cec4-11eb-a395-b05adaab2756',
                'name' => 'Auckland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c45088fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bay of Plenty',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c4508a63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canterbury',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c4508b3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Christchurch',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c4508d47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gisborne',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c4508e32-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hawke\'s Bay',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c4508efa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manawatu-Wanganui',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c4509040-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marlborough',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c45090fe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nelson',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c45091bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c4509278-cec4-11eb-a395-b05adaab2756',
                'name' => 'Otago',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c450933e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rodney',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c45093fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c45094b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taranaki',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c4509628-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tasman',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c45096ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Waikato',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c45097b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wellington',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c4509916-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Coast',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c45099dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atlantico Norte',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c4509aa8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atlantico Sur',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c4509b6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boaco',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c4509c31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carazo',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c4509cfc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chinandega',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c4509dc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chontales',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c4509e8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Esteli',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c4509fd5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Granada',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c450a093-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jinotega',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c450a140-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leon',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c450a1fe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madriz',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c450a2ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Managua',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c450a378-cec4-11eb-a395-b05adaab2756',
                'name' => 'Masaya',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c450a434-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matagalpa',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c450a4f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nueva Segovia',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c450a5ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio San Juan',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c450a66b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rivas',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c450a728-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agadez',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c450a7e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diffa',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c450a8a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dosso',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c450a95f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maradi',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c450aa1c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niamey',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c450aad7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tahoua',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c450ab93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tillabery',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c450ac51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zinder',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c450acfc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abia',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c450adbf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abuja Federal Capital Territor',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c450af3c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adamawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c450b0a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Akwa Ibom',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c450b160-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anambra',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c450b21d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bauchi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c450b2dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bayelsa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c450b399-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benue',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c450b456-cec4-11eb-a395-b05adaab2756',
                'name' => 'Borno',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c450b533-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cross River',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c450b5f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delta',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c450b6b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ebonyi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c450b75f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Edo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c450b81c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ekiti',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c450b8da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Enugu',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c450b997-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gombe',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c450ba4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Imo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c450bb0a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jigawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c450bbc6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaduna',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c450bc73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kano',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c450bd2f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Katsina',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c450bdec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kebbi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c450be98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kogi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c450bf5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kwara',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c450c0d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lagos',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c450c23c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nassarawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c450c2fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niger',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c450c3aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ogun',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c450c457-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ondo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c450c503-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osun',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c450c5b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oyo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c450c66e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plateau',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c450c72c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rivers',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c450c7ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sokoto',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c450c8a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taraba',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c450c953-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yobe',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c450ca11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zamfara',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c450cabd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niue',
                'country_id' => 'bc69b8fe-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c450cb7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Norfolk Island',
                'country_id' => 'bc69b976-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c450cc37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Islands',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c450cce3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rota',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c450cd9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saipan',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c450ce5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tinian',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c450cf18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Akershus',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c450cfd5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aust Agder',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c450d093-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bergen',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c450d208-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buskerud',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c450d35d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Finnmark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c450d424-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hedmark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c450d4e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hordaland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c450d5ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moere og Romsdal',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c450d678-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nord Trondelag',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c450d788-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nordland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c450d914-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oestfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c450d9f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oppland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c450daac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oslo',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c450db75-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rogaland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c450dc65-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soer Troendelag',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c450dd31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sogn og Fjordane',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c450ddfa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stavern',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c450debe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sykkylven',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c450df87-cec4-11eb-a395-b05adaab2756',
                'name' => 'Telemark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c450e04b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Troms',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c450e193-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vest Agder',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c450e25e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vestfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c450e31c-cec4-11eb-a395-b05adaab2756',
                'name' => 'ÃƒÂ˜stfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c450e3db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Al Buraimi',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c450e499-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhufar',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c450e557-cec4-11eb-a395-b05adaab2756',
                'name' => 'Masqat',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c450e614-cec4-11eb-a395-b05adaab2756',
                'name' => 'Musandam',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c450e6d2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rusayl',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c450e78f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wadi Kabir',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c450e84d-cec4-11eb-a395-b05adaab2756',
                'name' => 'ad-Dakhiliyah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c450e912-cec4-11eb-a395-b05adaab2756',
                'name' => 'adh-Dhahirah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c450ea8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Batinah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c450ebf3-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Sharqiyah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c450ecb1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Azad kashmir',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c450ed70-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balochistan',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c450ee1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fata',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c450eedb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gilgit–baltistan',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c450ef99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Islamabad capital territory',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c450f056-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khyber Pakhtunkhwa',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c450f115-cec4-11eb-a395-b05adaab2756',
                'name' => 'Punjab',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c450f1d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sindh',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c450f291-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aimeliik',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c450f34f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Airai',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c450f40e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Angaur',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c450f4cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hatobohei',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c450f589-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayangel',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c450f647-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koror',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c450f704-cec4-11eb-a395-b05adaab2756',
                'name' => 'Melekeok',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c450f7c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngaraard',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c450f881-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngardmau',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c450f93e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngaremlengui',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c450f9fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngatpang',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c450fabe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngchesar',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c450fcc4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngerchelong',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c450fd8c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngiwal',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c450fe51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Peleliu',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c450ff99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sonsorol',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c4510058-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ariha',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c4510116-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bayt Lahm',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c45101d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bethlehem',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c4510292-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dayr-al-Balah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c4510426-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghazzah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c45104f2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ghazzah ash-Shamaliyah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c45106e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Janin',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c451086a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khan Yunis',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c45109d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nabulus',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c4510a97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qalqilyah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c4510b56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rafah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c4510c15-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ram Allah wal-Birah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c4510ce0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salfit',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c4510d9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tubas',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c4510e5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tulkarm',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c4510f19-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Khalil',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c4510fd6-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Quds',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c4511153-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bocas del Toro',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c45112a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiriqui',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c451136e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cocle',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c4511434-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colon',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c451157a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Darien',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c4511637-cec4-11eb-a395-b05adaab2756',
                'name' => 'Embera',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c45116f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Herrera',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c45117b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kuna Yala',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c4511870-cec4-11eb-a395-b05adaab2756',
                'name' => 'Los Santos',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c451192d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ngobe Bugle',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c45119e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Panama',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c4511aa7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Veraguas',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c4511b64-cec4-11eb-a395-b05adaab2756',
                'name' => 'East New Britain',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c4511c22-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Sepik',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c4511ce0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c4511d8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Enga',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c4511e4a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fly River',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c4511ef7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gulf',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c4511fb5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madang',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c451207b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manus',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c4512138-cec4-11eb-a395-b05adaab2756',
                'name' => 'Milne Bay',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c45121f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morobe',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c451236f-cec4-11eb-a395-b05adaab2756',
                'name' => 'National Capital District',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c45124d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Ireland',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c4512598-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Solomons',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c4512644-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oro',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c4512701-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sandaun',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c45127bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Simbu',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c451287a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c4512937-cec4-11eb-a395-b05adaab2756',
                'name' => 'West New Britain',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c45129f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c4512ab1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alto Paraguay',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c4512b6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alto Parana',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c4512c2b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amambay',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c4512ce7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asuncion',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c4512da3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boqueron',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c4512e60-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caaguazu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c4512f3f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caazapa',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c4513000-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canendiyu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c45130bd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c451317c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Concepcion',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c451323a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cordillera',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c45132f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guaira',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c45133c4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Itapua',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c451353d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Misiones',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c45136a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Neembucu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c4513763-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paraguari',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c4513820-cec4-11eb-a395-b05adaab2756',
                'name' => 'Presidente Hayes',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c45138de-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Pedro',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c451399e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amazonas',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c4513a5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ancash',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c4513b1a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Apurimac',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c4513bd7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arequipa',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c4513c95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ayacucho',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c4513d54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cajamarca',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c4513e12-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cusco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c4513ed0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huancavelica',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c4513f8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huanuco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c451403b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ica',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c45140f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Junin',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c45141b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Libertad',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c4514272-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lambayeque',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c4514330-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lima y Callao',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c45143ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loreto',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c45144a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madre de Dios',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c451456b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moquegua',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c45146e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pasco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c451484c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Piura',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c45148f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puno',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c45149b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Martin',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c4514a73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tacna',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c4514b30-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tumbes',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c4514bed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ucayali',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c4514cab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batangas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c4514d68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bicol',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c4514e25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bulacan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c4514ee2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cagayan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c4514fa1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caraga',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c451505f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Luzon',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c451511c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c45151db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c4515298-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cordillera',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c4515355-cec4-11eb-a395-b05adaab2756',
                'name' => 'Davao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c4515412-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c45154d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Greater Metropolitan Area',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c45155a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilocos',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c451566a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laguna',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c451572e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luzon',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c45158ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mactan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c4515a06-cec4-11eb-a395-b05adaab2756',
                'name' => 'Metropolitan Manila Area',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c4515ace-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muslim Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c4515b9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c4515c69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c4515d31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern Tagalog',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c4515dfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c4515ed1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c4515f9c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pitcairn Island',
                'country_id' => 'bc69c8bf-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c4516068-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biale Blota',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c451612e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dobroszyce',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c45161f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dolnoslaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c45162b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dziekanow Lesny',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c451637e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hopowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c4516444-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kartuzy',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c4516508-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koscian',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c45165cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krakow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c4516692-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kujawsko-Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c4516757-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lodzkie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c451681b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lubelskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c45168df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lubuskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c45169a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malomice',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c4516a67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malopolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c4516b2c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mazowieckie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c4516bef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mirkow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c4516cb3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Opolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c4516d77-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ostrowiec',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c4516e85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Podkarpackie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c4516f50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Podlaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c4517015-cec4-11eb-a395-b05adaab2756',
                'name' => 'Polska',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c45170da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c451719f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Poznan',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c4517263-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pruszkow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c4517329-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rymanowska',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c45173ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rzeszow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c45174b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Slaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c4517576-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stare Pole',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c4517639-cec4-11eb-a395-b05adaab2756',
                'name' => 'Swietokrzyskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c45176ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Warminsko-Mazurskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c45177c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Warsaw',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c4517888-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wejherowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c451794d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wielkopolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c4517a14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wroclaw',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c4517ada-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zachodnio-Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c4517b9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zukowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c4517c63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abrantes',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c4517d48-cec4-11eb-a395-b05adaab2756',
                'name' => 'Acores',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c4517e0f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alentejo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c4517f17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Algarve',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c4517fe2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Braga',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c45180a8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centro',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c451816d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito de Leiria',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c451823c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito de Viana do Castelo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c4518300-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito de Vila Real',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c45183c4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito do Porto',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c4518489-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lisboa e Vale do Tejo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c451854d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madeira',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c4518612-cec4-11eb-a395-b05adaab2756',
                'name' => 'Norte',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c45186d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paivas',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c451879b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arecibo',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c4518861-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bayamon',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c4518924-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carolina',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c45189e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Florida',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c4518aac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guayama',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c4518b6f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Humacao',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c4518c33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayaguez-Aguadilla',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c4518cf7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ponce',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c4518dbc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salinas',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c4518e90-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Juan',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c4518f7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Doha',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c4519041-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jarian-al-Batnah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c4519105-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umm Salal',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c45191c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'ad-Dawhah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c451928d-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Ghuwayriyah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c4519351-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jumayliyah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c4519415-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Khawr',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c45194d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Wakrah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c451959c-cec4-11eb-a395-b05adaab2756',
                'name' => 'ar-Rayyan',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c4519660-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shamal',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c4519726-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Benoit',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c45197f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Denis',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c45198b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Paul',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c451997c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c4519a2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alba',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c4519ae2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arad',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c4519ba6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arges',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c4519c6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bacau',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c4519d2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bihor',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c4519df2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bistrita-Nasaud',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c4519eb5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Botosani',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c4519fbc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Braila',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c451a084-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brasov',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c451a149-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bucuresti',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c451a20f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buzau',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c451a415-cec4-11eb-a395-b05adaab2756',
                'name' => 'Calarasi',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c451a4d6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caras-Severin',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c451a583-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cluj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c451a6f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Constanta',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c451a7bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Covasna',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c451a887-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dambovita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c451a9d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dolj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c451aa93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Galati',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c451ab57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Giurgiu',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c451ac88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c451ad47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Harghita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c451ae04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hunedoara',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c451aec0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ialomita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c451af6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iasi',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c451b029-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilfov',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c451b0e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maramures',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c451b1a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mehedinti',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c451b319-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mures',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c451b3e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Neamt',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c451b533-cec4-11eb-a395-b05adaab2756',
                'name' => 'Olt',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c451b5f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prahova',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c451b6b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salaj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c451b76d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satu Mare',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c451b82a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sibiu',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c451b8e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sondelor',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c451b9a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suceava',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c451ba63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Teleorman',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c451bb20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Timis',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c451bbdd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tulcea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c451bc9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valcea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c451bd55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaslui',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c451be12-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vrancea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c451becf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adygeja',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c451bf7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aga',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c451c036-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alanija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c451c0f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Altaj',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c451c1a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amur',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c451c25e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arhangelsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c451c31b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Astrahan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c451c3dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bashkortostan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c451c5e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Belgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c451c6a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brjansk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c451c76d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burjatija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c451c8b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chechenija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c451c970-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cheljabinsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c451ca2c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chita',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c451cb08-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chukotka',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c451cbca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chuvashija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c451cc87-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dagestan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c451cd44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Evenkija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c451ce02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorno-Altaj',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c451cebe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Habarovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c451cf7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hakasija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c451d038-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hanty-Mansija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c451d0fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ingusetija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c451d1b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Irkutsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c451d275-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ivanovo',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c451d332-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jamalo-Nenets',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c451d3ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jaroslavl',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c451d4ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jevrej',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c451d56a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kabardino-Balkarija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c451d6e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaliningrad',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c451d83d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalmykija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c451d901-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaluga',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c451d9c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kamchatka',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c451db0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karachaj-Cherkessija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c451dbca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karelija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c451dc87-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kemerovo',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c451dd44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khabarovskiy Kray',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c451de01-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c451deaf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Komi',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c451df6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Komi-Permjakija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c451e029-cec4-11eb-a395-b05adaab2756',
                'name' => 'Korjakija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c451e0e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kostroma',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c451e1a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krasnodar',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c451e25f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krasnojarsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c451e31e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krasnoyarskiy Kray',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c451e3da-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kurgan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c451e497-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kursk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c451e555-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leningrad',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c451e613-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lipeck',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c451e6d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Magadan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c451e78d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marij El',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c451e908-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mordovija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c451ea73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moscow',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c451eb32-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moskovskaja Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c451ebef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moskovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c451ecad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Moskva',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c451ed69-cec4-11eb-a395-b05adaab2756',
                'name' => 'Murmansk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c451ee26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nenets',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c451eee4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nizhnij Novgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c451efa2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Novgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c451f05f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Novokusnezk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c451f11b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Novosibirsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c451f1e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Omsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c451f2a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orenburg',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c451f364-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orjol',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c451f420-cec4-11eb-a395-b05adaab2756',
                'name' => 'Penza',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c451f4cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Perm',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c451f58a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Primorje',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c451f646-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pskov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c451f703-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pskovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c451f7c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rjazan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c451f884-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rostov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c451f931-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saha',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c451faa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sahalin',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c451fc11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samara',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c451fcd4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samarskaya',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c451fd91-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sankt-Peterburg',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c451fe4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saratov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c451ff0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Smolensk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c451ffc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stavropol',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c4520087-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sverdlovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c4520145-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tajmyrija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c4520203-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tambov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c45202c1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tatarstan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c452037e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tjumen',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c452043b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tomsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c45204e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tula',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c4520595-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tver',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c4520643-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tyva',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c45206ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Udmurtija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c45207bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uljanovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c4520879-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ulyanovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c4520938-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ust-Orda',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c45209f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vladimir',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c4520ab1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Volgograd',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c4520c26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vologda',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c4520cf2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Voronezh',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c4520e50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Butare',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c4520f0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Byumba',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c4520fca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cyangugu',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c4521087-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gikongoro',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c4521143-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gisenyi',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c4521201-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gitarama',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c45212bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kibungo',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c452137b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kibuye',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c4521438-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kigali-ngali',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c45214f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ruhengeri',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c45215b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ascension',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c452166f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gough Island',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c452172a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Helena',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c45217e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tristan da Cunha',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c45218c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Christ Church Nichola Town',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c4521988-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Anne Sandy Point',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c4521a47-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George Basseterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c4521b04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George Gingerland',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c4521bbf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint James Windward',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c4521c7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John Capesterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c4521df6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John Figtree',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c4521f67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Mary Cayon',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c4522026-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Paul Capesterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c45220e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Paul Charlestown',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c4522259-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Peter Basseterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c452231e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Thomas Lowland',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c4522491-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Thomas Middle Island',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c4522555-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trinity Palmetto Point',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c452261a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anse-la-Raye',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c45226df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canaries',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c45227a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Castries',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c452286b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Choiseul',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c452292f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dennery',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c45229f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gros Inlet',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c4522ab7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Laborie',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c4522b7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Micoud',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c4522c3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soufriere',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c4522d7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vieux Fort',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c4522e3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miquelon-Langlade',
                'country_id' => 'bc69ce9c-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c4522efc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc69ce9c-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c4522fba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Charlotte',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c452307d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grenadines',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c45231f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Andrew',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c452335b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint David',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c4523418-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c45234d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Patrick',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c4523592-cec4-11eb-a395-b05adaab2756',
                'name' => 'A\'ana',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c452364f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aiga-i-le-Tai',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c45236fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atua',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c45237b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fa\'asaleleaga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c4523877-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaga\'emauga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c4523935-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gagaifomauga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c45239f2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Palauli',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c4523aaf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satupa\'itea',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c4523b6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tuamasaga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c4523c28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Va\'a-o-Fonoti',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c4523ce4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaisigano',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c4523da1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Acquaviva',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c4523e5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Borgo Maggiore',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c4523f1a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiesanuova',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c4524126-cec4-11eb-a395-b05adaab2756',
                'name' => 'Domagnano',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c4524338-cec4-11eb-a395-b05adaab2756',
                'name' => 'Faetano',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c45244a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fiorentino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c4524695-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montegiardino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c4524825-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Marino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c4524968-cec4-11eb-a395-b05adaab2756',
                'name' => 'Serravalle',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c4524a3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agua Grande',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c4524b02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cantagalo',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c4524bc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lemba',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c4524ca3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lobata',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c4524d6a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Me-Zochi',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c4524e2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pague',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c4524f71-cec4-11eb-a395-b05adaab2756',
                'name' => 'Al Khobar',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c452502f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aseer',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c45250ed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ash Sharqiyah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c4525199-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asir',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c4525255-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c4525312-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c45253cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ha\'il',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c452547d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jawf',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c4525539-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jizan',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c45255f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Makkah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c45256b3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Najran',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c452576f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qasim',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c4525836-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabuk',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c45259b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c4525b17-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Bahah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c4525bd8-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Hudud-ash-Shamaliyah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c4525c96-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Madinah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c4525d55-cec4-11eb-a395-b05adaab2756',
                'name' => 'ar-Riyad',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c4525e13-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dakar',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c4525f85-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diourbel',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c452604b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fatick',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c4526111-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaolack',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c4526277-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kolda',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c4526342-cec4-11eb-a395-b05adaab2756',
                'name' => 'Louga',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c4526409-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint-Louis',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c45264d2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tambacounda',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c4526602-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thies',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c452688c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ziguinchor',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c45269df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Serbia',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c4526b24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kosovo and Metohija',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c4526c63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vojvodina',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c4526da2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anse Boileau',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c4526ee3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anse Royale',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c4527019-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cascade',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c4527154-cec4-11eb-a395-b05adaab2756',
                'name' => 'Takamaka',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c45272e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Victoria',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c4527447-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c4527506-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c45275c4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c4527683-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c4527741-cec4-11eb-a395-b05adaab2756',
                'name' => 'Singapore',
                'country_id' => 'bc69d33c-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c4527800-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banskobystricky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c45278bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bratislavsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c452797e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kosicky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c4527a3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nitriansky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c4527af9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Presovsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c4527bc4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trenciansky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c4527c82-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trnavsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c4527d3f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zilinsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c4527dfd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Benedikt',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c4527ebc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorenjska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c4527f7a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorishka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c4528038-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jugovzhodna Slovenija',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c45280f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Koroshka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c45281b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Notranjsko-krashka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c452826f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Obalno-krashka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c45283e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Obcina Domzale',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c45285c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Obcina Vitanje',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c452872d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osrednjeslovenska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c45287ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Podravska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c45288aa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pomurska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c4528968-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savinjska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c4528a25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Slovenian Littoral',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c4528ae4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Spodnjeposavska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c4528ba2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zasavska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c4528c5f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pitcairn',
                'country_id' => 'bc69eda3-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c4528d1c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c4528ebe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Choiseul',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c4528f8a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guadalcanal',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c4529178-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isabel',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c45292ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Makira and Ulawa',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c4529501-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malaita',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c45295c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rennell and Bellona',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c4529681-cec4-11eb-a395-b05adaab2756',
                'name' => 'Temotu',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c452973f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c45297fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Awdal',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c45298b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bakol',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c452997f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Banadir',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c4529ae8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bari',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c4529c40-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bay',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c4529cff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Galgudug',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c4529dac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gedo',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c4529e6a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hiran',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c4529f28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jubbada Hose',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c4529fe5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jubbadha Dexe',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c452a0a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mudug',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c452a160-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nugal',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c452a21c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanag',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c452a2db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shabellaha Dhexe',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c452a3a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shabellaha Hose',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c452a464-cec4-11eb-a395-b05adaab2756',
                'name' => 'Togdher',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c452a522-cec4-11eb-a395-b05adaab2756',
                'name' => 'Woqoyi Galbed',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c452a5de-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c452a69c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Free State',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c452a760-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gauteng',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c452a81e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kempton Park',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c452a8db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kramerville',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c452a998-cec4-11eb-a395-b05adaab2756',
                'name' => 'KwaZulu Natal',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c452aa55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Limpopo',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c452ab16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mpumalanga',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c452ad1b-cec4-11eb-a395-b05adaab2756',
                'name' => 'North West',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c452ade3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c452aea6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Parow',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c452afed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Table View',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c452b0ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umtentweni',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c452b168-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c452b226-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Georgia',
                'country_id' => 'bc69f0e1-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c452b2e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Equatoria',
                'country_id' => 'bc69f169-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c452b3a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'A Coruna',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c452b45e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alacant',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c452b51c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alava',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c452b5db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Albacete',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c452b699-cec4-11eb-a395-b05adaab2756',
                'name' => 'Almeria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c452b755-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andalucia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c452b813-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asturias',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c452b8d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Avila',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c452b9b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Badajoz',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c452ba72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balears',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c452bb30-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barcelona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c452bbed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bertamirans',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c452bcab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Biscay',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c452bd6e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burgos',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c452beea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caceres',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c452c04f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cadiz',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c452c10e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cantabria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c452c1cc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Castello',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c452c289-cec4-11eb-a395-b05adaab2756',
                'name' => 'Catalunya',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c452c348-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ceuta',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c452c404-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ciudad Real',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c452c4c3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Autonoma de Canarias',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c452c581-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Autonoma de Cataluna',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c452c63f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Autonoma de Galicia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c452c6fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Autonoma de las Isla',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c452c7ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Autonoma del Princip',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c452c876-cec4-11eb-a395-b05adaab2756',
                'name' => 'Comunidad Valenciana',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c452c934-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cordoba',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c452c9f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cuenca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c452caae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gipuzkoa',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c452cb6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Girona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c452cc2b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Granada',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c452cce8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guadalajara',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c452cda7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guipuzcoa',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c452ce6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huelva',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c452cf2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Huesca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c452d09c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jaen',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c452d1ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'La Rioja',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c452d2be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Las Palmas',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c452d36b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leon',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c452d428-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lerida',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c452d4e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lleida',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c452d593-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lugo',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c452d651-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madrid',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c452d70d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malaga',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c452d7cb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Melilla',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c452d888-cec4-11eb-a395-b05adaab2756',
                'name' => 'Murcia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c452d945-cec4-11eb-a395-b05adaab2756',
                'name' => 'Navarra',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c452da03-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ourense',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c452dabf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pais Vasco',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c452db7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Palencia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c452dc3c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pontevedra',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c452dcf9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salamanca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c452ddb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Santa Cruz de Tenerife',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c452de74-cec4-11eb-a395-b05adaab2756',
                'name' => 'Segovia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c452df32-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sevilla',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c452dff0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c452e0d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tarragona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c452e253-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tenerife',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c452e3b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Teruel',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c452e475-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toledo',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c452e532-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valencia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c452e5f0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valladolid',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c452e6ae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vizcaya',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c452e76c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zamora',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c452e82a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zaragoza',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c452e8ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amparai',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c452e9a6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anuradhapuraya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c452ea63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Badulla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c452eb20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Boralesgamuwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c452ebdd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colombo',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c452ec9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Galla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c452ed57-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gampaha',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c452ee14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hambantota',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c452eed2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalatura',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c452ef90-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kegalla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c452f04d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilinochchi',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c452f10a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kurunegala',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c452f1c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madakalpuwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c452f288-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maha Nuwara',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c452f407-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malwana',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c452f56a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mannarama',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c452f631-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matale',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c452f6ee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matara',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c452f7ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monaragala',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c452f869-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mullaitivu',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c452f925-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Eastern Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c452f9e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Western Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c452fa9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nuwara Eliya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c452fb5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Polonnaruwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c452fc18-cec4-11eb-a395-b05adaab2756',
                'name' => 'Puttalama',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c452fcd6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ratnapuraya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c452fd93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c452fe51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tirikunamalaya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c452ff0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tuscany',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c452ffcb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vavuniyawa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c4530088-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c4530145-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yapanaya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c4530202-cec4-11eb-a395-b05adaab2756',
                'name' => 'kadawatha',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c45302bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'A\'ali-an-Nil',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c453037c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bahr-al-Jabal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c4530440-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Equatoria',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c45305be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharb Bahr-al-Ghazal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c4530724-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharb Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c45307fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharb Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c45308bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gharb-al-Istiwa\'iyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c453097b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Janub Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c4530a37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Janub Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c4530af5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Junqali',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c4530bb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kassala',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c4530c71-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nahr-an-Nil',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c4530d2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shamal Bahr-al-Ghazal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c4530deb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shamal Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c4530eaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shamal Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c4530f67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sharq-al-Istiwa\'iyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c4531025-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sinnar',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c45310e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Warab',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c45311a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wilayat al Khartum',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c453125f-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c453131c-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Buhayrat',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c45313da-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jazirah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c4531498-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Khartum',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c4531555-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qadarif',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c45316ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Wahdah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c4531792-cec4-11eb-a395-b05adaab2756',
                'name' => 'an-Nil-al-Abyad',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c45318fc-cec4-11eb-a395-b05adaab2756',
                'name' => 'an-Nil-al-Azraq',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c45319d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shamaliyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c4531aa5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brokopondo',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c4531b80-cec4-11eb-a395-b05adaab2756',
                'name' => 'Commewijne',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c4531e82-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coronie',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c4531f6b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Marowijne',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c453203a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nickerie',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c45320eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Para',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c45321a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paramaribo',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c4532267-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saramacca',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c4532324-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wanica',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c45323e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Svalbard',
                'country_id' => 'bc69f3ed-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c453249f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hhohho',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c453255d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lubombo',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c453261a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manzini',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c45326d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shiselweni',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c4532796-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alvsborgs Lan',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c4532853-cec4-11eb-a395-b05adaab2756',
                'name' => 'Angermanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c4532910-cec4-11eb-a395-b05adaab2756',
                'name' => 'Blekinge',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c45329ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bohuslan',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c4532a8b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dalarna',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c4532b51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gavleborg',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c4532ce5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaza',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c4532e79-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c4532f8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Halland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c4533057-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jamtland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c453311e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jonkoping',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c45331e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalmar',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c45332ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kristianstads',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c4533371-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kronoberg',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c4533435-cec4-11eb-a395-b05adaab2756',
                'name' => 'Norrbotten',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c453357b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Orebro',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c453363a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ostergotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c45336f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saltsjo-Boo',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c45337b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Skane',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c4533872-cec4-11eb-a395-b05adaab2756',
                'name' => 'Smaland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c453392f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sodermanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c45339eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Stockholm',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c4533aa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uppsala',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c4533b67-cec4-11eb-a395-b05adaab2756',
                'name' => 'Varmland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c4533c23-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vasterbotten',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c4533ce1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vastergotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c4533d9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vasternorrland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c4533e5a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vastmanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c4533f1d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vastra Gotaland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c4534097-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aargau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c45341ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Appenzell Inner-Rhoden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c45342b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Appenzell-Ausser Rhoden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c453437b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basel-Landschaft',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c4534445-cec4-11eb-a395-b05adaab2756',
                'name' => 'Basel-Stadt',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c4534500-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bern',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c45345c6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canton Ticino',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c4534692-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fribourg',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c453476c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Geneve',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c4534849-cec4-11eb-a395-b05adaab2756',
                'name' => 'Glarus',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c4534913-cec4-11eb-a395-b05adaab2756',
                'name' => 'Graubunden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c45349d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Heerbrugg',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c4534a8a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jura',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c4534b50-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanton Aargau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c4534c14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luzern',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c4534cd9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morbio Inferiore',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c4534d9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Muhen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c4534e63-cec4-11eb-a395-b05adaab2756',
                'name' => 'Neuchatel',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c4534f28-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nidwalden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c4534feb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Obwalden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c45350b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sankt Gallen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c4535173-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schaffhausen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c4535237-cec4-11eb-a395-b05adaab2756',
                'name' => 'Schwyz',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c45352fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Solothurn',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c45353bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thurgau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c4535483-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ticino',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c453554a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uri',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c4535622-cec4-11eb-a395-b05adaab2756',
                'name' => 'Valais',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c4535711-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaud',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c45357d8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vauffelin',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c453588b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zug',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c4535952-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zurich',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c4535a15-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aleppo',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c4535ad9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dar\'a',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c4535b9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dayr-az-Zawr',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c4535c61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dimashq',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c4535d25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Halab',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c4535de9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hamah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c4535e9b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hims',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c4535f5e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Idlib',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c4536021-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madinat Dimashq',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c45360e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tartus',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c45361a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Hasakah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c453626d-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Ladhiqiyah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c4536330-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qunaytirah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c45363f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'ar-Raqqah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c45364b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'as-Suwayda',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c453657b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Changhwa',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c453663f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiayi Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c4536745-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiayi Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c453680b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern Taipei',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c45368cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hsinchu Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c4536992-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hsinchu Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c4536a56-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hualien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c4536b0a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ilan',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c4536bce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaohsiung Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c4536c93-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaohsiung Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c4536d60-cec4-11eb-a395-b05adaab2756',
                'name' => 'Keelung Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c4536e24-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kinmen',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c4536ee7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miaoli',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c4536faa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nantou',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c453706e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Taiwan',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c4537131-cec4-11eb-a395-b05adaab2756',
                'name' => 'Penghu',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c45371f6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pingtung',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c45372bb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taichung',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c4537381-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taichung Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c4537445-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taichung Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c4537509-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tainan Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c45375cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tainan Shih',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c4537698-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taipei Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c4537795-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taipei Shih / Taipei Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c453785c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taitung',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c4537921-cec4-11eb-a395-b05adaab2756',
                'name' => 'Taoyuan',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c45379e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yilan',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c4537aa9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yun-Lin Hsien',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c4537b6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yunlin',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c4537c6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dushanbe',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c4537d37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gorno-Badakhshan',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c4537dfb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karotegin',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c4537ebf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khatlon',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c4537f84-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sughd',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c4538046-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arusha',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c4538109-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dar es Salaam',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c45381cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dodoma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c4538292-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iringa',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c4538354-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kagera',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c4538418-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kigoma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c45384db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilimanjaro',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c453859f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lindi',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c4538652-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mara',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c4538731-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mbeya',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c4538823-cec4-11eb-a395-b05adaab2756',
                'name' => 'Morogoro',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c45388ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mtwara',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c45389b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mwanza',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c4538a77-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pwani',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c4538b3a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rukwa',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c4538bff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ruvuma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c4538cc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shinyanga',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c4538e05-cec4-11eb-a395-b05adaab2756',
                'name' => 'Singida',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c4538ec3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tabora',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c4538f7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tanga',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c453903d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zanzibar and Pemba',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c45390f9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amnat Charoen',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c45391b7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ang Thong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c4539275-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bangkok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c453933b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buri Ram',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c45393f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chachoengsao',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c45394b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chai Nat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c4539571-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chaiyaphum',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c453962d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Changwat Chaiyaphum',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c45396eb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chanthaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c45397b5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiang Mai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c4539933-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chiang Rai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c4539a95-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chon Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c4539b53-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chumphon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c4539c0e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kalasin',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c4539ccd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kamphaeng Phet',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c4539d89-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kanchanaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c4539e46-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khon Kaen',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c4539f04-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krabi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c4539fc1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krung Thep',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c453a07d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lampang',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c453a139-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lamphun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c453a1e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Loei',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c453a2a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lop Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c453a36d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mae Hong Son',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c453a42b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maha Sarakham',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c453a4e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mukdahan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c453a5a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Nayok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c453a660-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Pathom',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c453a71d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Phanom',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c453a7d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Ratchasima',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c453a896-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Sawan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c453aa11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nakhon Si Thammarat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c453aac6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c453ac21-cec4-11eb-a395-b05adaab2756',
                'name' => 'Narathiwat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c453ace6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nong Bua Lam Phu',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c453adaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nong Khai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c453ae6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nonthaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c453af2f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pathum Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c453affb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pattani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c453b0bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phangnga',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c453b188-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phatthalung',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c453b2d4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phayao',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c453b433-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phetchabun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c453b4f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phetchaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c453b5af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phichit',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c453b66c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phitsanulok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c453b729-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phra Nakhon Si Ayutthaya',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c453b7e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phrae',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c453b8a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Phuket',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c453b962-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prachin Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c453ba20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Prachuap Khiri Khan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c453bae6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ranong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c453bba3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ratchaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c453bc61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rayong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c453bd1e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roi Et',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c453bddb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sa Kaeo',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c453be98-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sakon Nakhon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c453bf54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samut Prakan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c453c012-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samut Sakhon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c453c0cf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samut Songkhran',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c453c18c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saraburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c453c303-cec4-11eb-a395-b05adaab2756',
                'name' => 'Satun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c453c45a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Si Sa Ket',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c453c51f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sing Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c453c665-cec4-11eb-a395-b05adaab2756',
                'name' => 'Songkhla',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c453c725-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sukhothai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c453c7e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suphan Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c453c89e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Surat Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c453c95c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Surin',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c453ca19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tak',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c453cad7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trang',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c453cb84-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c453cc42-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ubon Ratchathani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c453ccfe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Udon Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c453cdbb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uthai Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c453ce78-cec4-11eb-a395-b05adaab2756',
                'name' => 'Uttaradit',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c453cf25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yala',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c453cfe4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yasothon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c453d0a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Centre',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c453d150-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kara',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c453d20c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maritime',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c453d2ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Plateaux',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c453d388-cec4-11eb-a395-b05adaab2756',
                'name' => 'Savanes',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c453d44c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Atafu',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c453d5ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fakaofo',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c453d72b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nukunonu',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c453d7d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eua',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c453d897-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ha\'apai',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c453d954-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niuas',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c453da11-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tongatapu',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c453dace-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vava\'u',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c453db8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arima-Tunapuna-Piarco',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c453dc4a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Caroni',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c453dd07-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chaguanas',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c453ddc5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Couva-Tabaquite-Talparo',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c453de83-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diego Martin',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c453df41-cec4-11eb-a395-b05adaab2756',
                'name' => 'Glencoe',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c453dffe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Penal Debe',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c453e0bc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Point Fortin',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c453e181-cec4-11eb-a395-b05adaab2756',
                'name' => 'Port of Spain',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c453e23d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Princes Town',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c453e2fb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint George',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c453e3b8-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Fernando',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c453e475-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Juan',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c453e533-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sangre Grande',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c453e6ab-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siparia',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c453e76f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tobago',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c453e8ce-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aryanah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c453e993-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bajah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c453ea5b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bin \'Arus',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c453eb25-cec4-11eb-a395-b05adaab2756',
                'name' => 'Binzart',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c453ec99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gouvernorat de Ariana',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c453ee97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gouvernorat de Nabeul',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c453eff4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gouvernorat de Sousse',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c453f0c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hammamet Yasmine',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c453f1a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jundubah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c453f269-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madaniyin',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c453f32e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manubah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c453f3f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monastir',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c453f4b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nabul',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c453f57d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qabis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c453f641-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qafsah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c453f786-cec4-11eb-a395-b05adaab2756',
                'name' => 'Qibili',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c453f845-cec4-11eb-a395-b05adaab2756',
                'name' => 'Safaqis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c453f8f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sfax',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c453f9b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sidi Bu Zayd',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c453fa6e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Silyanah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c453fb2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Susah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c453fbe8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tatawin',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c453fca5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tawzar',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c453fd62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tunis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c453fe20-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zaghwan',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c453ff9a-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Kaf',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c4540065-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Mahdiyah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c45401c5-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Munastir',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c4540283-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qasrayn',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c4540341-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Qayrawan',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c4540400-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adana',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c45404bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Adiyaman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c454057d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Afyon',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c454062c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Agri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c45406ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aksaray',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c45407a9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amasya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c4540866-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ankara',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c4540923-cec4-11eb-a395-b05adaab2756',
                'name' => 'Antalya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c45409e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ardahan',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c4540a9e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Artvin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c4540b68-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aydin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c4540c27-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balikesir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c4540ce4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bartin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c4540da2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Batman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c4540e5f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bayburt',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c4540f1c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bilecik',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c4540fda-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bingol',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c4541153-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bitlis',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c45412ac-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c454136a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Burdur',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c4541426-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bursa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c45414e3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canakkale',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c45415a0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cankiri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c454165c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Corum',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c4541719-cec4-11eb-a395-b05adaab2756',
                'name' => 'Denizli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c45417f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Diyarbakir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c454196b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Duzce',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c4541a37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Edirne',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c4541cbe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Elazig',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c4541e3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Erzincan',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c4541f92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Erzurum',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c4542053-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eskisehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c4542111-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gaziantep',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c45421d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Giresun',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c454228d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gumushane',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c454234b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hakkari',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c4542409-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hatay',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c45424b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Icel',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c454257e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Igdir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c45426f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isparta',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c454285c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Istanbul',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c454291b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Izmir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c45429d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kahramanmaras',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c4542a99-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karabuk',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c4542b55-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karaman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c4542c01-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kars',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c4542cbe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Karsiyaka',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c4542d7c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kastamonu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c4542e39-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kayseri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c4542ef7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilis',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c4542fb3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirikkale',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c4543070-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirklareli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c454312c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirsehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c45431e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kocaeli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c45432a5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Konya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c4543362-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kutahya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c454341f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lefkosa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c45434dc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malatya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c4543599-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manisa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c4543664-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mardin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c4543727-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mugla',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c454391a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mus',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c45439e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nevsehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c4543aa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nigde',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c4543bd9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ordu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c4543c97-cec4-11eb-a395-b05adaab2756',
                'name' => 'Osmaniye',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c4543d45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rize',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c4543e02-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sakarya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c4543ebe-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samsun',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c4543f7b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanliurfa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c4544037-cec4-11eb-a395-b05adaab2756',
                'name' => 'Siirt',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c45440f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sinop',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c45441b2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sirnak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c454426e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sivas',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c454432a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tekirdag',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c4544406-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tokat',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c45444c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trabzon',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c4544586-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tunceli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c4544633-cec4-11eb-a395-b05adaab2756',
                'name' => 'Usak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c45446e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Van',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c454479d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yalova',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c454485b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yozgat',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c4544918-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zonguldak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c45449cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ahal',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c4544b4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Asgabat',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c4544cae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Balkan',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c4544d6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dasoguz',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c4544e2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lebap',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c4544ed8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mari',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c4544f96-cec4-11eb-a395-b05adaab2756',
                'name' => 'Grand Turk',
                'country_id' => 'bc69fc19-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c4545055-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Caicos and East Caicos',
                'country_id' => 'bc69fc19-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c4545113-cec4-11eb-a395-b05adaab2756',
                'name' => 'Funafuti',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c45451d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nanumanga',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c454528f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nanumea',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c454534d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Niutao',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c45453fa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nui',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'c45454b6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nukufetau',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'c4545575-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nukulaelae',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'c4545633-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vaitupu',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'c45456f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'c45457af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'c454586e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'c454592a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'c45459e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cherkas\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'c4545aa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chernihivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'c4545c17-cec4-11eb-a395-b05adaab2756',
                'name' => 'Chernivets\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'c4545ce6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Crimea',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'c4545e4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dnipropetrovska',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'c4545f0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Donets\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'c4545fca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ivano-Frankivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'c4546087-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kharkiv',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'c4546144-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kharkov',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'c4546202-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khersonska',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'c45462bf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khmel\'nyts\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'c454637d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kirovohrad',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'c454642a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Krym',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'c45464e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyyiv',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'c45465a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kyyivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'c4546661-cec4-11eb-a395-b05adaab2756',
                'name' => 'L\'vivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'c454671e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luhans\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'c45467dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mykolayivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'c454689a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Odes\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'c4546958-cec4-11eb-a395-b05adaab2756',
                'name' => 'Odessa',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'c4546a16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Poltavs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'c4546af2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rivnens\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'c4546bb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sevastopol\'',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'c4546c73-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sums\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'c4546d37-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ternopil\'s\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'c4546eb4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Volyns\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'c4547017-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vynnyts\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'c45470d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zakarpats\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'c4547194-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zaporizhia',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'c4547252-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zhytomyrs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'c4547311-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abu Zabi',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'c45473d0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ajman',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'c454748e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dubai',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'c454754c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ras al-Khaymah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'c454760a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sharjah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'c45476c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sharjha',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'c4547785-cec4-11eb-a395-b05adaab2756',
                'name' => 'Umm al Qaywayn',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'c4547843-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Fujayrah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'c4547900-cec4-11eb-a395-b05adaab2756',
                'name' => 'ash-Shariqah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'c45479be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aberdeen',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'c4547a7d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aberdeenshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'c4547b3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Argyll',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'c4547bf8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Armagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'c4547cb6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bedfordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'c4547d72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Belfast',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'c4547e30-cec4-11eb-a395-b05adaab2756',
                'name' => 'Berkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'c4547ef4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Birmingham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'c45480f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Brechin',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'c45481be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bridgnorth',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'c4548283-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bristol',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'c45483ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buckinghamshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'c4548489-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cambridge',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'c454854f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cambridgeshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'c454860d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Channel Islands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'c45486cc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cheshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'c454878a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cleveland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'c4548847-cec4-11eb-a395-b05adaab2756',
                'name' => 'Co Fermanagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'c4548904-cec4-11eb-a395-b05adaab2756',
                'name' => 'Conwy',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'c45489c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cornwall',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'c4548a7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Coventry',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'c4548b3c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Craven Arms',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'c4548bfb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cumbria',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'c4548cb9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Denbighshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'c4548d76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Derby',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'c4548e33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Derbyshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'c4548ef0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Devon',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'c4548faf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dial Code Dungannon',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'c454906d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Didcot',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'c4549130-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dorset',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'c45492ec-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dunbartonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'c45494ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Durham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'c4549797-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Dunbartonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'c45498c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Lothian',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'c45499e8-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Midlands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'c4549ad1-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'c4549b9d-cec4-11eb-a395-b05adaab2756',
                'name' => 'East Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'c4549c6a-cec4-11eb-a395-b05adaab2756',
                'name' => 'England',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'c4549d2e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Essex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'c4549df3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fermanagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'c4549ea7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fife',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'c4549fee-cec4-11eb-a395-b05adaab2756',
                'name' => 'Flintshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'c454a0af-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fulham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'c454a178-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gainsborough',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'c454a237-cec4-11eb-a395-b05adaab2756',
                'name' => 'Glocestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'c454a2f3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Gwent',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'c454a3b0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hampshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'c454a46d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hants',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'c454a529-cec4-11eb-a395-b05adaab2756',
                'name' => 'Herefordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'c454a5e7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hertfordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'c454a6a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ireland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'c454a767-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isle Of Man',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'c454a8df-cec4-11eb-a395-b05adaab2756',
                'name' => 'Isle of Wight',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'c454aa45-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kenford',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'c454aaf2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kent',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'c454abae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kilmarnock',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'c454ac6d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lanarkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'c454ad2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lancashire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'c454ade7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Leicestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'c454aea5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lincolnshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'c454af61-cec4-11eb-a395-b05adaab2756',
                'name' => 'Llanymynech',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'c454b01f-cec4-11eb-a395-b05adaab2756',
                'name' => 'London',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'c454b0e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ludlow',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'c454b1a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manchester',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'c454b25f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mayfair',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'c454b31b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Merseyside',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'c454b3d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mid Glamorgan',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'c454b496-cec4-11eb-a395-b05adaab2756',
                'name' => 'Middlesex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'c454b553-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mildenhall',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'c454b60f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monmouthshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'c454b6cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Newton Stewart',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'c454b78b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Norfolk',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'c454b848-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Humberside',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'c454b934-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'c454bab0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northamptonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'c454bb74-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northants',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'c454bcc3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern Ireland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'c454bd88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northumberland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'c454be54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nottinghamshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'c454bfa3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oxford',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'c454c104-cec4-11eb-a395-b05adaab2756',
                'name' => 'Powys',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'c454c1c1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Roos-shire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'c454c27e-cec4-11eb-a395-b05adaab2756',
                'name' => 'SUSSEX',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'c454c32b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sark',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'c454c3e9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Scotland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'c454c4a7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Scottish Borders',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'c454c565-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shropshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'c454c622-cec4-11eb-a395-b05adaab2756',
                'name' => 'Somerset',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'c454c6e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Glamorgan',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'c454c79e-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Wales',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'c454c85a-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'c454c917-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southwell',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'c454c9d5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Staffordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'c454ca92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Strabane',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'c454cb51-cec4-11eb-a395-b05adaab2756',
                'name' => 'Suffolk',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'c454cc0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Surrey',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'c454ccca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'c454cd88-cec4-11eb-a395-b05adaab2756',
                'name' => 'Twickenham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'c454ce44-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tyne and Wear',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'c454cfbb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tyrone',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'c454d078-cec4-11eb-a395-b05adaab2756',
                'name' => 'Utah',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'c454d1d7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wales',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'c454d294-cec4-11eb-a395-b05adaab2756',
                'name' => 'Warwickshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'c454d351-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Lothian',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'c454d410-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Midlands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'c454d4cc-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'c454d589-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'c454d647-cec4-11eb-a395-b05adaab2756',
                'name' => 'Whissendine',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'c454d705-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wiltshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'c454d7c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wokingham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'c454d887-cec4-11eb-a395-b05adaab2756',
                'name' => 'Worcestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'c454d944-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wrexham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'c454da03-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wurttemberg',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'c454dac1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'c454db7f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alabama',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'c454dc3d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alaska',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'c454dcfb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arizona',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'c454ddb9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Arkansas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'c454de76-cec4-11eb-a395-b05adaab2756',
                'name' => 'Byram',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'c454df34-cec4-11eb-a395-b05adaab2756',
                'name' => 'California',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'c454e014-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cokato',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'c454e18e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colorado',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'c454e2f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Connecticut',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'c454e3b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delaware',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'c454e473-cec4-11eb-a395-b05adaab2756',
                'name' => 'District of Columbia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'c454e531-cec4-11eb-a395-b05adaab2756',
                'name' => 'Florida',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'c454e5ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Georgia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'c454e6ad-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hawaii',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'c454e76a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Idaho',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'c454e827-cec4-11eb-a395-b05adaab2756',
                'name' => 'Illinois',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'c454e8e4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Indiana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'c454e991-cec4-11eb-a395-b05adaab2756',
                'name' => 'Iowa',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'c454ea4e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kansas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'c454eb0c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kentucky',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'c454ebc9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Louisiana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'c454ec75-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lowa',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'c454ed33-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maine',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'c454edf1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maryland',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'c454eeae-cec4-11eb-a395-b05adaab2756',
                'name' => 'Massachusetts',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'c454ef6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Medfield',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'c454f029-cec4-11eb-a395-b05adaab2756',
                'name' => 'Michigan',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'c454f0e6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Minnesota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'c454f1a3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mississippi',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'c454f31a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Missouri',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'c454f3e5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'c454f543-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nebraska',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'c454f600-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nevada',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'c454f6be-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Hampshire',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'c454f779-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Jersey',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'c454f835-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Jersy',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'c454f8f1-cec4-11eb-a395-b05adaab2756',
                'name' => 'New Mexico',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'c454f9af-cec4-11eb-a395-b05adaab2756',
                'name' => 'New York',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'c454fa6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Carolina',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'c454fb28-cec4-11eb-a395-b05adaab2756',
                'name' => 'North Dakota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'c454fbd6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ohio',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'c454fc92-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oklahoma',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'c454fd4f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ontario',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'c454fe0d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Oregon',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'c454fed2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Pennsylvania',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'c454ff90-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ramey',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'c455004c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rhode Island',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'c455010a-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Carolina',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'c45501c7-cec4-11eb-a395-b05adaab2756',
                'name' => 'South Dakota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'c4550284-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sublimity',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'c4550341-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tennessee',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'c4550404-cec4-11eb-a395-b05adaab2756',
                'name' => 'Texas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'c4550585-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trimble',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'c45506ef-cec4-11eb-a395-b05adaab2756',
                'name' => 'Utah',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'c45507b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vermont',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'c455086f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Virginia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'c455092c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Washington',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'c45509ea-cec4-11eb-a395-b05adaab2756',
                'name' => 'West Virginia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'c4550aa7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wisconsin',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'c4550b66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wyoming',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'c4550c23-cec4-11eb-a395-b05adaab2756',
                'name' => 'United States Minor Outlying I',
                'country_id' => 'bc69ffb9-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'c4550ce1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Artigas',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'c4550d9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Canelones',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'c4550e5c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cerro Largo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'c4550f1a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Colonia',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'c4550fd7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Durazno',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'c4551094-cec4-11eb-a395-b05adaab2756',
                'name' => 'FLorida',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'c4551151-cec4-11eb-a395-b05adaab2756',
                'name' => 'Flores',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'c455120d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lavalleja',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'c45512c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Maldonado',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'c4551386-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montevideo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'c4551442-cec4-11eb-a395-b05adaab2756',
                'name' => 'Paysandu',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'c4551500-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rio Negro',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'c45515c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rivera',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'c45517cd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Rocha',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'c4551892-cec4-11eb-a395-b05adaab2756',
                'name' => 'Salto',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'c4551956-cec4-11eb-a395-b05adaab2756',
                'name' => 'San Jose',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'c4551a9b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Soriano',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'c4551b59-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tacuarembo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'c4551c14-cec4-11eb-a395-b05adaab2756',
                'name' => 'Treinta y Tres',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'c4551cd0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Andijon',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'c4551d8e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buhoro',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'c4551e4d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Buxoro Viloyati',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'c4551f0a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cizah',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'c4551fc6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Fargona',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'c4552085-cec4-11eb-a395-b05adaab2756',
                'name' => 'Horazm',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'c4552142-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kaskadar',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'c45521ff-cec4-11eb-a395-b05adaab2756',
                'name' => 'Korakalpogiston',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'c45522be-cec4-11eb-a395-b05adaab2756',
                'name' => 'Namangan',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'c455237a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Navoi',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'c4552437-cec4-11eb-a395-b05adaab2756',
                'name' => 'Samarkand',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'c45524f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sirdare',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'c45525ba-cec4-11eb-a395-b05adaab2756',
                'name' => 'Surhondar',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'c4552678-cec4-11eb-a395-b05adaab2756',
                'name' => 'Toskent',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'c4552734-cec4-11eb-a395-b05adaab2756',
                'name' => 'Malampa',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'c45527f7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Penama',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'c4552972-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sanma',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'c4552a3e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shefa',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'c4552b8d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tafea',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'c4552c54-cec4-11eb-a395-b05adaab2756',
                'name' => 'Torba',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'c4552d22-cec4-11eb-a395-b05adaab2756',
            'name' => 'Vatican City State (Holy See)',
                'country_id' => 'bc6a01c9-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'c4552e09-cec4-11eb-a395-b05adaab2756',
                'name' => 'Amazonas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'c4552ed5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anzoategui',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'c4552fa8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Apure',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'c4553075-cec4-11eb-a395-b05adaab2756',
                'name' => 'Aragua',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'c455313f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Barinas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'c4553207-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bolivar',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'c45532ca-cec4-11eb-a395-b05adaab2756',
                'name' => 'Carabobo',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'c455338e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Cojedes',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'c4553452-cec4-11eb-a395-b05adaab2756',
                'name' => 'Delta Amacuro',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'c4553517-cec4-11eb-a395-b05adaab2756',
                'name' => 'Distrito Federal',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'c45535db-cec4-11eb-a395-b05adaab2756',
                'name' => 'Falcon',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'c45536a1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Guarico',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'c4553755-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lara',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'c4553819-cec4-11eb-a395-b05adaab2756',
                'name' => 'Merida',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'c45538dd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Miranda',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'c45539a2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Monagas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'c4553a66-cec4-11eb-a395-b05adaab2756',
                'name' => 'Nueva Esparta',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'c4553b2a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Portuguesa',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'c4553bed-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sucre',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'c4553cb3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tachira',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'c4553d77-cec4-11eb-a395-b05adaab2756',
                'name' => 'Trujillo',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'c4553e3b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vargas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'c4553f31-cec4-11eb-a395-b05adaab2756',
                'name' => 'Yaracuy',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'c455401a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Zulia',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'c45540e2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bac Giang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'c45541a7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Binh Dinh',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'c455426c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Binh Duong',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'c4554330-cec4-11eb-a395-b05adaab2756',
                'name' => 'Da Nang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'c45543f4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dong Bang Song Cuu Long',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'c45544b9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dong Bang Song Hong',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'c455457c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dong Nai',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'c4554641-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dong Nam Bo',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'c4554704-cec4-11eb-a395-b05adaab2756',
                'name' => 'Duyen Hai Mien Trung',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'c45547c9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hanoi',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'c455488c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hung Yen',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'c4554951-cec4-11eb-a395-b05adaab2756',
                'name' => 'Khu Bon Cu',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'c4554a16-cec4-11eb-a395-b05adaab2756',
                'name' => 'Long An',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'c4554ada-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mien Nui Va Trung Du',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'c4554b9f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thai Nguyen',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'c4554c65-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thanh Pho Ho Chi Minh',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'c4554d34-cec4-11eb-a395-b05adaab2756',
                'name' => 'Thu Do Ha Noi',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'c4554df8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tinh Can Tho',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'c4554ebc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tinh Da Nang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'c4554fa4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tinh Gia Lai',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'c455508f-cec4-11eb-a395-b05adaab2756',
                'name' => 'Anegada',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'c4555156-cec4-11eb-a395-b05adaab2756',
                'name' => 'Jost van Dyke',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'c455521b-cec4-11eb-a395-b05adaab2756',
                'name' => 'Tortola',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'c45552e0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Croix',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'c45553a4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint John',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'c4555467-cec4-11eb-a395-b05adaab2756',
                'name' => 'Saint Thomas',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'c455553a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Alo',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'c4555602-cec4-11eb-a395-b05adaab2756',
                'name' => 'Singave',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'c45556c8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wallis',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'c455578c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bu Jaydur',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'c4555850-cec4-11eb-a395-b05adaab2756',
                'name' => 'Wad-adh-Dhahab',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'c4555914-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-\'Ayun',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'c45559d9-cec4-11eb-a395-b05adaab2756',
                'name' => 'as-Samarah',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'c4555a9f-cec4-11eb-a395-b05adaab2756',
                'name' => '\'Adan',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'c4555b62-cec4-11eb-a395-b05adaab2756',
                'name' => 'Abyan',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'c4555c26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Dhamar',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'c4555ceb-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hadramaut',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'c4555daf-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hajjah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'c4555e72-cec4-11eb-a395-b05adaab2756',
                'name' => 'Hudaydah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'c4555f26-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ibb',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'c4555ffc-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lahij',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'c45560f8-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ma\'rib',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'c45561c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Madinat San\'a',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'c4556286-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sa\'dah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'c455633a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Sana',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'c45563fd-cec4-11eb-a395-b05adaab2756',
                'name' => 'Shabwah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'c45564c2-cec4-11eb-a395-b05adaab2756',
                'name' => 'Ta\'izz',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'c4556586-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Bayda',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'c455664a-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Hudaydah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'c455670f-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Jawf',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'c45567d3-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Mahrah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'c4556896-cec4-11eb-a395-b05adaab2756',
                'name' => 'al-Mahwit',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'c455695a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'c4556a1e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Kosovo and Metohija',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'c4556ae3-cec4-11eb-a395-b05adaab2756',
                'name' => 'Montenegro',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'c4556ba7-cec4-11eb-a395-b05adaab2756',
                'name' => 'Republic of Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'c4556c6c-cec4-11eb-a395-b05adaab2756',
                'name' => 'Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'c4556d30-cec4-11eb-a395-b05adaab2756',
                'name' => 'Vojvodina',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'c4556df6-cec4-11eb-a395-b05adaab2756',
                'name' => 'Central',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'c4556eb9-cec4-11eb-a395-b05adaab2756',
                'name' => 'Copperbelt',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'c4556f7e-cec4-11eb-a395-b05adaab2756',
                'name' => 'Eastern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'c4557049-cec4-11eb-a395-b05adaab2756',
                'name' => 'Luapala',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'c4557149-cec4-11eb-a395-b05adaab2756',
                'name' => 'Lusaka',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'c4557212-cec4-11eb-a395-b05adaab2756',
                'name' => 'North-Western',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'c45572e1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Northern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'c45573b1-cec4-11eb-a395-b05adaab2756',
                'name' => 'Southern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'c455747d-cec4-11eb-a395-b05adaab2756',
                'name' => 'Western',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'c45575b4-cec4-11eb-a395-b05adaab2756',
                'name' => 'Bulawayo',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'c455771a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Harare',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'c45577f5-cec4-11eb-a395-b05adaab2756',
                'name' => 'Manicaland',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c45578c0-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mashonaland Central',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c455798a-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mashonaland East',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c4557a52-cec4-11eb-a395-b05adaab2756',
                'name' => 'Mashonaland West',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c4557b19-cec4-11eb-a395-b05adaab2756',
                'name' => 'Masvingo',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c4557c10-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matabeleland North',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c4557d42-cec4-11eb-a395-b05adaab2756',
                'name' => 'Matabeleland South',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c4557eaa-cec4-11eb-a395-b05adaab2756',
                'name' => 'Midlands',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        
        
    }
}