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
                'id' => '00066822-ab72-4595-acaa-bc91a99f06a7',
                'name' => 'Gauteng',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '0025e21a-b031-41c2-a433-3f6ddd302d71',
                'name' => 'Omusati',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '004485e6-6e13-4cb2-afed-40cc9f1c9bb1',
                'name' => 'Penang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '00494f67-53a9-4136-9e19-191fc93523b2',
                'name' => 'Somme',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '0054f679-1dab-411c-b411-3f0ce8e08869',
                'name' => 'Cantagalo',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '007a8f0c-0a13-4ab4-9766-17d819b8685b',
                'name' => 'Vava\'u',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '008286d4-4cda-4d78-80e0-1470f196e6a5',
                'name' => 'Taejeon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '00b00094-88a8-400f-a069-e4acdf83c9ba',
                'name' => 'Tongareva',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '00c92328-7a87-43f8-980e-253e7685aa43',
                'name' => 'Tabiteuea North',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '00cc51f1-dad7-405b-a3ea-4bcea0f2e95e',
                'name' => 'Habarovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '00e1edec-5b8b-44bd-a19c-d07c23f1fbfa',
                'name' => 'Sandoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '00e8e7c0-3a13-4b2e-8b27-62b065ace732',
                'name' => 'San Juan',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '00f52d64-9b1a-4ec5-8271-0dd8ab0fa995',
                'name' => 'Triesenberg',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '00fe6670-fcc0-4ca8-a100-af7310fc74d2',
                'name' => 'Cambridge',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '010ce456-2f35-4a23-b9fb-d1b102a2cdd0',
                'name' => 'Orjol',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '013bcef1-4963-4677-8103-6e8cee3c5501',
                'name' => 'Lusaka',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '0151255b-c215-4478-bb05-ddba4f7d8fb4',
                'name' => 'Heroldstatt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '015d979d-f0ff-4a25-a44d-fc1da8c100e1',
                'name' => 'Kaluga',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '015ee470-a26f-432e-b28a-dcb46382676e',
                'name' => 'Jugovzhodna Slovenija',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '0160228d-45fb-4c27-b2a5-625ec7d5bf31',
                'name' => 'Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '017cb234-71ed-44cd-adb9-fda74cc2ee55',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc69ce9c-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '018e560b-6a08-43a5-a666-8b44f0a71c98',
                'name' => 'Auvergne',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '01919932-88e3-4de7-9015-e6dc791212a3',
                'name' => 'Salamanca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '01c3ad4f-3504-4d18-ac9f-977a66677098',
                'name' => 'Kigali-ngali',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '01d8b38c-f7dd-438a-b032-9574a95682e0',
                'name' => 'Vienne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '01eb85d0-a419-4866-b016-f5cd2d56d4cf',
                'name' => 'Aguascalientes',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '01fc2cf7-f876-448b-8319-f8dd27c604f7',
                'name' => 'Tillabery',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '01ff1cdc-8e7a-4806-849c-bfd98d31f87c',
                'name' => 'Lower Austria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '02010b60-6133-4954-931c-294216b90fca',
                'name' => 'Sankt Gallen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '02165c6a-fadc-47aa-b422-d3a2c42f9972',
                'name' => 'Coventry',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '0221308b-e299-4853-ac51-86ad4766fcb2',
                'name' => 'Tombouctou',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '02314546-6dbd-4634-99b8-250269629963',
                'name' => 'Rotanak Kiri',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '02315894-4a7c-4956-bda2-2276ec49bea0',
                'name' => 'Valais',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '023fbc1f-d428-4623-9a18-48ff25c92e80',
                'name' => 'Barcelona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '0241f970-2fea-4022-a10e-74ca2f3ea803',
                'name' => 'Tyva',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '025b68f0-d276-45a4-b640-b151700daf87',
                'name' => 'Sokoto',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '027ab751-4e56-4c4d-b150-436747654530',
                'name' => 'Yamagata',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '02882d76-9838-45ed-9e14-07305a9c7a50',
                'name' => 'as-Suwayda',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '02933200-f22f-4491-ab99-c074c6ea6cfa',
                'name' => 'Werribee south',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '0293563f-7c62-4b99-8994-79b11a31a742',
                'name' => 'Kildare',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '02a36ddb-d413-43a6-aff1-0e66a348947e',
                'name' => 'Estado de Mexico',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '031875e5-d159-40e0-97ba-3cc27e566626',
                'name' => 'Belluno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '031eab17-a7c7-4a41-bb65-8014eedc67f9',
                'name' => 'Syddanmark',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '03392730-8708-4487-abf9-c1ff8b7edab1',
                'name' => 'Conwy',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '0347dc26-3e1c-4c75-a799-a04ca4248e60',
                'name' => 'Nanortalik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '03485af3-5d74-4ea5-832e-382e48a6134f',
                'name' => 'Osh',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '034ba8e1-69b6-4321-92ec-c80c19e257f3',
                'name' => 'Khulna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '03545add-7a24-4f33-b6ff-62b22fd8abd0',
                'name' => 'Andhra Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '036cfc22-eeeb-4387-8209-a281ef354485',
                'name' => 'Uruzgan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '03a1c0a0-5d4d-461d-95e2-9ee6345d1df2',
                'name' => 'Paris',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '03b01561-c177-43c6-a632-5d0f6634bbbc',
                'name' => 'Chiriqui',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '03bb505e-e9cf-4499-941a-df9ddd7214cc',
                'name' => 'Namur',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '03d0785a-5aa9-412d-a144-c475f1144e29',
                'name' => 'Worcestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '03d6c1c6-7d51-4121-93af-547f800a5605',
                'name' => 'Novosibirsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '03da08de-bb59-4d05-8b15-8283b9a6c42f',
                'name' => 'Long An',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '03de8644-a894-460b-8649-52dad6b95536',
                'name' => 'Isle Of Man',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '03dfd534-1a63-4f0a-a6bd-2150b50b66bd',
                'name' => 'Akwa Ibom',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '03ed88e3-fe1b-4960-a6c5-63db9a8e4248',
                'name' => 'Wallonne',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '03fd8f86-8e07-430a-938d-105ce26b4e97',
                'name' => 'Oio',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '040fdc9c-53c7-4cf6-961f-c85af1aeec2b',
                'name' => 'Jura',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '04125689-2718-457e-a9e6-36b26e0687f4',
                'name' => 'Andijon',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '042137c0-46e2-4552-9f86-fe7d1487cddc',
                'name' => 'Norte',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '0425ec6d-2036-4e45-bab0-f146acd4cd2e',
                'name' => 'Herrera',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '04508d89-77bf-44f3-b8f3-f6db405b30a2',
                'name' => 'Vojvodina',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '0467c996-824a-4a3b-8da9-01507a76fb78',
                'name' => 'North Western Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '0470f496-e2df-4903-8564-ae72d2dc927a',
                'name' => 'Nimruz',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '04757813-e581-43f5-98c2-54f03354f616',
                'name' => 'Casablanca',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '047b9f24-140f-4b56-9ff8-0a66f1c6a1b8',
                'name' => 'Corozal',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '047ca6ba-8f07-4c8f-81fb-94e3a4af9596',
                'name' => 'Saint Pierre du Bois',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '04855ace-9fff-4f4c-8543-6b3dde8e2aad',
                'name' => 'Gharb Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '0491c81f-8b2b-4415-803f-29534952e94a',
                'name' => 'Maniema',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '04c67ca1-7bb9-4cee-bc21-496c52a1200c',
                'name' => 'Manufahi',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '04f6fa8b-9fde-4363-a2b9-ac4f752b1208',
                'name' => 'Appenzell-Ausser Rhoden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '05180da5-d050-4535-9d9a-5688a36a3a44',
                'name' => 'Mae Hong Son',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '0530906b-8f00-4e54-99c3-bd5112e515c7',
                'name' => 'Falcon',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '053bc56d-401c-4b57-b8d8-6ba05b8ef231',
                'name' => 'Ailuk',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '0559a3ca-21c3-4aa3-91eb-67e81c961679',
                'name' => 'Himachal Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '0568bc8a-9d44-4a60-ab35-2f92860883f9',
                'name' => 'Isla de la Juventud',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '0574d411-0ce4-4f17-8636-5b347ab9f353',
                'name' => 'Gullbringusysla',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '057a35e8-6a48-4ec5-a27d-1fbebb5369cb',
                'name' => 'Devoll',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '059829ab-5c5a-44c3-adf8-a356c36e1de5',
                'name' => 'Saint George',
                'country_id' => 'bc691ae2-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '05ac1d70-431b-4538-b719-e2823b529fb9',
                'name' => 'Paraguari',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '05b22120-b736-4e77-bbd0-01c67bcb28fb',
                'name' => 'Kirundo',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '05bb5a5a-5633-4ea8-948f-ba057d3061b6',
                'name' => 'Ouargla',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '05c697f0-8067-4595-ab1b-14b987c39677',
                'name' => 'Nagaland',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '05d1ebc3-3a43-4133-8ee8-b04d7f8336d3',
                'name' => 'National Capital District',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '05d3904e-82f9-41d5-b820-c9415fa80944',
                'name' => 'Wrexham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '05d8f8eb-505a-4fec-a4cc-97ce8c4960c7',
                'name' => 'North Eastern Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '05d96be8-4385-40eb-9b7b-fc36a0ab1f14',
                'name' => 'Stockholm',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '05dddc1f-25e6-4c23-88e8-0aef8dbd31b2',
                'name' => 'Kurgan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '05dfe975-1131-4d05-be7f-f8d95c8eec75',
                'name' => 'Shiselweni',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '05f4770b-488d-4e9e-8998-d5785394b53b',
                'name' => 'Moravskoslezsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '05f6537c-fc54-4cfb-8972-7fb3c9740380',
                'name' => 'Liege',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '06029279-debb-47d8-a1b6-36a94bc634a9',
                'name' => 'Neubeuern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '0642b535-a8d9-4171-a4f5-531943206ad3',
                'name' => 'Lagos',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '06442125-5396-4fe8-b843-5bd8ac6e225e',
                'name' => 'Primorje-Gorski Kotar',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => '064e2160-5d04-4340-9770-7da87b14dbb5',
                'name' => 'Alderney',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => '065a8578-1d1a-47f1-82ba-0814ff558167',
                'name' => 'Panchagarh',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => '06613320-4a10-4064-ac10-a274106b5c70',
                'name' => 'Sondrio',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => '0663f8cc-377a-4383-b89d-62b780172463',
                'name' => 'al-Kufrah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => '0667335a-709d-46e8-a7e4-c8eb071e1b2c',
                'name' => 'Nenets',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => '06919cd7-cb9b-4105-a95a-8cdde538e651',
                'name' => 'Sar-e Pul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => '0695aef3-4927-4805-afd3-b436169e7a0d',
                'name' => 'Oost-Vlaanderen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => '0699d5d5-1caa-4e0d-acab-38d4e15bad68',
                'name' => 'Liepaja',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => '06a1bdcf-d4bd-4214-a9c5-390070db9571',
                'name' => 'Gostivar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => '06ae456c-dfa1-45e3-9b69-5650371d63b5',
                'name' => 'Sanchez Ramirez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => '06b9f277-f3ef-427e-8287-89e8a60f9dac',
                'name' => 'Rodney',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => '06c31316-fd28-4baf-9c4a-c9b31255f7ce',
                'name' => 'Northern',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => '06d456c1-e1f2-45bf-883d-ae9ad9af4a08',
                'name' => 'Indre-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => '07024ab5-8b7e-42ae-954d-4d3e35129250',
                'name' => 'Tyrone',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => '0710ad4d-51ef-4149-8f52-9c0b9473fb67',
                'name' => 'Intibuca',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => '07192633-5f3e-48ec-b36a-6cb22de11d52',
                'name' => 'La Paz',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => '071a10c5-9323-41bc-9422-4939955f9c24',
                'name' => 'Azua',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => '0724ae4a-545d-434a-8ce0-ada8299464a6',
                'name' => 'Languedoc-Roussillon',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => '07353af7-a77d-48a2-b780-3d08371a42d1',
                'name' => 'Phayao',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => '07380c29-5b74-4507-9a00-5eac8127c4c0',
                'name' => 'Kermanshah',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => '0791ff7b-5118-45bb-aea1-ba8a7d43964e',
                'name' => 'Acklins Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => '07b3936b-0fba-415a-8466-2f000820507d',
                'name' => 'Illoqqortoormiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => '07b8de68-b46f-4522-8ba7-6d889461c45f',
                'name' => 'Jawa Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => '07bbf543-bdff-4086-89aa-61fde7776fce',
                'name' => 'al-Jufrah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => '07bd5c0a-fdff-4834-8d93-27ca89cd2ca3',
                'name' => 'Vesturland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => '07bd9c23-8835-4ece-8a54-78d64b0fcfae',
                'name' => 'Banten',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => '07d5f0d2-006a-4c80-9f60-8443d5e79f73',
                'name' => 'Agadir',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => '07d6e7a4-b1c7-4646-b9e3-dd64a91238a8',
                'name' => 'Guanajuato',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => '07f891cf-6cdb-49e1-a740-838f029ecfbe',
                'name' => 'Varazhdin',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => '07fe3b6a-dd95-4ee1-907a-399a09d4e6fc',
                'name' => 'Anseba',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => '07fe8193-c4f8-4edc-8a61-3bd336140657',
                'name' => 'Paamiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => '08062e44-477e-4d04-ba96-cc9df2ba1d1d',
                'name' => 'Keski-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => '081ebb2c-83df-4ef8-ae73-0ed85d08b4e6',
                'name' => 'Janin',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => '0824b72d-bd15-469c-88c4-3197a4303513',
                'name' => 'Shkoder',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => '0833d7c6-cd78-4f4e-9415-354186e869b2',
                'name' => 'Voronezh',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => '08723ace-4ce8-4b36-b563-3dc76382bfa6',
                'name' => 'Muaskar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => '0872f53b-b193-49d7-9f01-1da8a88b8334',
                'name' => 'Iowa',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => '087abfd3-08f0-4c61-b896-a5513ffff249',
                'name' => 'Satu Mare',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => '087e0a6c-02bf-4e2a-8014-011fcdc62640',
                'name' => 'Cienfuegos',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => '08bfafa7-df0a-4e08-b5ba-0946c1e7ed8d',
                'name' => 'al-Buhayrah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => '08daa00c-ab09-40b0-8ed3-339ad510f4e9',
                'name' => 'Awdal',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => '08e203cc-4729-4421-b9c8-eeb936a98e8f',
                'name' => 'Ventspils City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => '08e30370-afe9-4617-9cf4-3f629e2775f6',
                'name' => 'Xiang Khuang',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => '08eb4191-c609-48be-9967-63f4c7e3a043',
                'name' => 'Tilimsan',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => '090a3427-767e-45c9-95bb-a8d72b28db56',
                'name' => 'Aragatsotn',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => '0914df06-4f95-4eb8-9f93-d8e1b4fcd926',
                'name' => 'Tutong',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => '091fbde2-e259-43d8-89be-94d7a90ba180',
                'name' => 'Bolzano',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => '093da540-8eff-44ae-826b-7d9e6c22d9d5',
                'name' => 'Saint Peter Basseterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => '094aebf4-058c-4208-a786-1c01f19dcf7b',
                'name' => 'Saint John',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => '094fae7f-aba1-4673-b2b8-d53f7d8ce4f6',
                'name' => 'Tekirdag',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => '0962bc5a-e327-4e17-ada6-4fdecb865ce2',
                'name' => 'Pamanzi',
                'country_id' => 'bc69832f-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => '0978dfde-f5c1-4cbe-8de4-dfce4dc55956',
                'name' => 'Satif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => '0987a570-8dad-41d1-be4a-71772dae87f5',
                'name' => 'Western Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => '09aabfba-d741-43a1-a827-c47202a6573f',
                'name' => 'Bahr-al-Jabal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => '09abb472-a44a-4869-954a-ea54a1b050a5',
                'name' => 'Zilinsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => '09ae590f-1e94-4477-838a-33bff767ac87',
                'name' => 'Va\'a-o-Fonoti',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => '09c9c0d6-9df4-4a8e-9f9c-16a42d0c8b60',
                'name' => 'Aisen',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => '09ebac6b-e86c-4c3d-8994-c889208bc26f',
                'name' => 'Kanta-Hame',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => '0a2341dc-3f4c-42a3-b929-4e8c71d1e01d',
                'name' => 'Manchester',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => '0a2c222d-92a3-4253-b74b-2f174875aec6',
                'name' => 'Glencoe',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => '0a345ab0-a436-4a60-8e2a-75f727e3fef6',
                'name' => 'Aydin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => '0a399cd5-b4d7-4739-8594-6dfb0d0abcad',
                'name' => 'Kibungo',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => '0a3cd461-3646-4a99-b112-697bc95387ea',
                'name' => 'Saint David',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => '0a42ac97-a0ab-46a7-bcc7-a385edfb3f32',
                'name' => 'Madang',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => '0a46b7da-2aa8-4760-ab26-69fe6c031d7b',
                'name' => 'Malsi e Madhe',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => '0a5f783f-dbaf-45b5-bc70-72cbe239726c',
                'name' => 'Camaguey',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => '0a96c1b9-0a9b-435f-82be-35a19fcfc270',
                'name' => 'Palauli',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => '0aa217b5-e725-4225-a803-760397ff241d',
                'name' => 'Heves',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => '0aa47871-35f5-4324-ae66-7a9c48d97734',
                'name' => 'Omaheke',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => '0ac77c9b-d602-45e3-898b-e947f82329aa',
                'name' => 'Haa Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => '0ac9e89c-e486-4abf-a78d-f0d52955d6e6',
                'name' => 'Amhara',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => '0acc2e1d-7e43-4217-bdab-786fa56aeb49',
                'name' => 'Gikongoro',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => '0ad3df2b-5bf1-49ff-adf2-df3d416aefec',
                'name' => 'Ararat',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => '0b09e11f-aa6c-486d-bc51-a650613a4ec7',
                'name' => 'Noakhali',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => '0b306ba7-57dd-4d50-915f-6a9fedbfc663',
                'name' => 'Bern',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => '0b33ff53-550b-4d3b-bef0-6feac63bb5e8',
                'name' => 'Moxico',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => '0b3f5578-8e02-417e-886a-2fa716d04022',
                'name' => 'Shtip',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => '0b44aca7-e9bc-4343-ba17-abe5361a7eeb',
                'name' => 'Kosovo and Metohija',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => '0b4648b4-a116-4aba-942b-c13023e9ca75',
                'name' => 'Anegada',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => '0b50d836-339c-4ca5-8cbd-ce0d5652a112',
                'name' => 'Florina',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => '0b6c6e93-dc44-4c21-a69b-0ec9c945be95',
                'name' => 'Leribe',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => '0b8358ba-d9bc-47c0-8223-7bb8a0b554bf',
                'name' => 'Gorontalo',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => '0b885408-49c0-4b8d-998c-2ed5acf079c1',
                'name' => 'Chinandega',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => '0bcf7f2e-99ce-4390-9666-50891b6f765e',
                'name' => 'Sembilan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => '0bd243ae-90cb-4788-9559-fa1d42d192a4',
                'name' => 'Oestfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => '0bd2f1f5-cf5e-4644-a2d0-e1286f1e2edb',
                'name' => 'Dili',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => '0bf75113-addf-4e71-9f9b-116612dcba0b',
                'name' => 'Malaga',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => '0bfb9c5b-76a6-45ab-b03f-56823c889aa6',
                'name' => 'Sonderjylland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => '0c2644e6-e76f-40bc-9620-ed21748ee0df',
                'name' => 'an-Nil-al-Azraq',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => '0c2acd81-ec54-4bc9-bdb8-c406f0b483d0',
                'name' => 'Oita',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => '0c44fc40-7edb-40d6-8b42-0097b5a445d9',
                'name' => 'Oyo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => '0c5e53f3-fff3-4c9a-8af6-3c4576df0abd',
                'name' => 'al-Bahah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => '0c5fdd5a-42e5-49f9-af81-9ad0a1a30303',
                'name' => 'Koroshka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => '0c6aa401-6b4c-4428-a45b-217c04df1faa',
                'name' => 'Arges',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => '0c8ea06d-fe9d-4c4e-9fb3-d0cf5f2eff22',
                'name' => 'Carlow',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => '0cae972b-96da-498a-a14c-d60a8ecd72d5',
                'name' => 'Rumphi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => '0cb084d6-2f86-459c-b683-1d9d74012302',
                'name' => 'ar-Riyad',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => '0cb92238-2c9b-43fc-8ce3-b6af4c9b2434',
                'name' => 'Doukkala-Abda',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => '0cf5d285-747f-406d-8a14-ca9c4ac0c6cc',
                'name' => 'Logone Oriental',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => '0cf79fec-c157-410b-bacb-002ccf5bca55',
                'name' => 'Banaba',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => '0d02a345-9e28-4342-926d-a6b7f28d4529',
                'name' => 'Voiotia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => '0d049119-e4ef-4980-8537-aeb0732ab686',
                'name' => 'Saint George Gingerland',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => '0d120412-921c-4a92-a9c0-0071be92a55a',
                'name' => 'Ngounie',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => '0d36d411-1b19-4b6b-8233-d1dd7e82b7ea',
                'name' => 'Nsanje',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => '0d41bebd-18b6-413b-bbf1-9eeb9377df01',
                'name' => 'Guria',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => '0d55b34e-ad8e-477c-9c3d-4245ba196f27',
                'name' => 'Umm El Fahem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => '0d80cea9-1a29-4bfe-b303-a5d07340e3f8',
                'name' => 'Skopje',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => '0d9960eb-6efe-401d-9eaf-af4ffba63a4a',
                'name' => 'Iles du Vent',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => '0d9f93a9-4168-4d44-861b-afa306417e08',
                'name' => 'Hajjah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => '0dae746d-277d-426e-ac3f-b8857d210a6d',
                'name' => 'Ehime',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => '0daf5bf0-13bd-4832-941f-d2b1c91099c6',
                'name' => 'Distrito Central',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => '0dafa6b1-31d6-4360-9ad6-704e55ec0698',
                'name' => 'Hanoi',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => '0de09dee-e16e-4e91-93e3-164792eb2da4',
                'name' => 'Ziguinchor',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => '0df4ff92-2ce9-4b24-a544-3b6f3f523b03',
                'name' => 'Schwyz',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => '0e0bab6e-d85b-442e-af75-d8282ca3c390',
                'name' => 'Ningxia Hui',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => '0e1105ed-50c5-41c9-89ab-885e3c737402',
                'name' => 'Praha',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => '0e2a964c-8e62-4414-8999-ffc2a324fdcb',
                'name' => 'Vale',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => '0e3c6f31-15d0-40de-9dc3-20534cb9b657',
                'name' => 'Vas',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => '0e5511c0-ae79-460c-ad7b-d14ff08a6718',
                'name' => 'Quthing',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => '0e6abf0b-7cbe-4442-b6a5-cb5174855195',
                'name' => 'Maryland and Grand Kru',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => '0e8d7f30-e340-4781-b2a8-6eeb50866009',
                'name' => 'Tel Aviv',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => '0e9b3686-70cd-470c-b98e-e1ebed10a3e2',
                'name' => 'Budapest',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => '0e9c9abc-d2ba-4b70-8a9a-5796cf6a0212',
                'name' => 'Poltavs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => '0ea5df92-e2de-461e-9740-4a348248ecae',
                'name' => 'Vinica',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => '0ec6e3bb-3a7a-4283-a329-4e6dd8e40577',
                'name' => 'Iraklion',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => '0eeabef8-092b-4b91-a3c0-f540f958e625',
                'name' => 'Junqali',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => '0eefa141-db48-4368-b2e9-7a75e0731aa8',
                'name' => 'Montenegro',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => '0efc35d4-4966-46f1-b848-3b73ce71c66a',
                'name' => 'Bandundu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => '0f049c2c-7ca7-4622-9088-224d616815c5',
                'name' => 'Narathiwat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => '0f14438f-1845-4ec7-ad51-9d7ac1d8557e',
                'name' => 'al-Batinah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => '0f161718-17c8-4039-820f-02d8144c8f3d',
                'name' => 'Zamora Chinchipe',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => '0f1ccc94-d75f-493d-a697-f64e31bac4ca',
                'name' => 'Noord-Brabant',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => '0f223260-f022-4849-ba9f-c966446f2bc3',
                'name' => 'Picardy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => '0f2e9321-5983-43da-a3d3-9381073a9b89',
                'name' => 'North West',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => '0f31dfd1-0a8e-493d-bc06-ebc37c977408',
                'name' => 'Uttarakhand',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => '0f36bbe3-d96c-4361-871f-a85e48526263',
                'name' => 'Orapa',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => '0f40d650-b45b-4176-9cad-1e7525d8cdc5',
                'name' => 'Santiago Rodriguez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => '0f492e72-4ef8-4e06-a1e9-290276f5215f',
                'name' => 'Fly River',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => '0f5a76af-d8f5-4698-8d46-b08a9b0d27b3',
                'name' => 'Sachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => '0f847d8e-4a67-4006-a28d-fa6e6d7fc0fb',
                'name' => 'Bolikhamsay',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => '0fa7a7e1-af26-4d6f-86fc-f085508ec1a4',
                'name' => 'Rapti',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => '0fb94254-1094-468a-b965-1f15c28f609e',
                'name' => 'Upper Demerara-Berbice',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => '100b0f64-d764-484f-8be8-d3350d4f7ec2',
                'name' => 'Daman and Diu',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => '10129973-8f5d-42d4-9119-504fcbfcbfd3',
                'name' => 'Choiseul',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => '1012f9ba-542e-4e3d-98eb-abbb092109f9',
                'name' => 'Fthiotis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => '101719df-ac40-467b-817a-d93ba52d6365',
                'name' => 'Dordogne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => '1019a66f-2c55-4e09-97fd-b1c3319a0609',
                'name' => 'Jost van Dyke',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => '1029589d-96bb-472a-929a-aab0a57ac09c',
                'name' => 'Overijssel',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => '1035e9cf-3415-4831-abb3-3ab57c5d536b',
                'name' => 'Papua',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => '1058740a-f811-4ad9-adc1-8f46a82cbd09',
                'name' => 'Rezeknes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => '105ab4c0-5017-4f6a-b18c-47c68bf792a5',
                'name' => 'Haut-Sassandra',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => '1066e896-5af2-49fc-907a-435a7923091b',
                'name' => 'Lecco',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => '10981d38-ead3-4594-bcc5-b26c88e09526',
                'name' => 'Khmel\'nyts\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => '10a58672-bce7-450d-9379-f6fc9575f8ee',
                'name' => 'Fukuoka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => '10be96a5-5f6a-414b-85d5-d42e6b68e14e',
                'name' => 'Coral Sea Islands',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => '10c05ff6-1b1b-4dc7-bd7e-d4a7f6918b41',
                'name' => 'Ogooue-Maritime',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => '10c9c043-f7e1-4cb9-a64d-7d8a6c4cc0ee',
                'name' => 'Silistra',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => '10df0660-8b62-4c22-a989-57965f1354b8',
                'name' => 'Peravia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => '10e22049-072a-4900-89e3-727b7f07447b',
                'name' => 'Molise',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => '10f4d842-49a2-4c86-909e-80c1aef932c5',
                'name' => 'Anse Royale',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => '10f97f58-a8bb-4294-8387-21d784dd6b56',
                'name' => 'Boavista',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => '11006baf-0196-4cf2-b62b-d419e0b8a813',
                'name' => 'Mugla',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => '1104bff0-1c08-441e-bdb2-89a11862774c',
                'name' => 'Kanto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => '112da562-3d64-41a6-a8d0-26b1329175ff',
                'name' => 'Dikhil',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => '113938c3-b29f-4f72-84ec-00d8d6448575',
                'name' => 'al-\'Aqabah',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => '11453d6b-cec5-479d-9821-76896fbecf31',
                'name' => 'Rio Grande do Norte',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => '1156ebaa-1c68-422e-9494-d59f42a71c96',
                'name' => 'Scotland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => '115dba26-e55d-4ccf-868e-cca40827618e',
                'name' => 'Lempira',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => '1161f6ff-2e90-4ca1-ada9-284603b1f99b',
                'name' => 'Geylegphug',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => '11694ec4-700a-4cd8-a12a-2bf34cddedd7',
                'name' => 'South Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => '119756df-ddf0-4d0c-a972-3f37c4282a9a',
                'name' => 'Amambay',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => '119d1d51-29aa-48fe-a2a0-c7e60ba2772f',
                'name' => 'Maryland',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => '11d879c4-db09-4ac7-a27a-9790721bd7a6',
                'name' => 'Aomen',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => '11e2bcff-85ee-4a2b-a901-98e56f02366d',
                'name' => 'Sowa',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => '11e75af7-ce27-4a4c-9eb2-2fe01f638985',
                'name' => 'Samagrelo-Zemo Svaneti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => '11fb352a-542b-4e49-afdb-f142f1268676',
                'name' => 'A\'ali-an-Nil',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => '121773f8-71f9-440b-b42b-2a23c153bfc4',
                'name' => 'Saint Croix',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => '121b2125-59a3-4a33-99d8-db1016d3275e',
                'name' => 'Vlore',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => '12229d3d-788a-441a-9cc7-4f31e77eff51',
                'name' => 'Jambi',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => '1230a1aa-4381-4524-ab6b-fcc5da9c0f81',
                'name' => 'Kouilou',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => '124ff0a0-9335-4cd1-b603-e9a7bbd1e9df',
                'name' => 'Konya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => '12520ee2-1383-4203-aef7-3740a589ca32',
                'name' => 'Medimurska Zupanija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => '125302e2-fce0-41a8-a709-62c4cce292d6',
                'name' => 'Ashanti',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => '125425d1-386a-484c-955d-71f589629ffb',
                'name' => 'Comoe',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => '125fd1e3-d080-488b-b533-9d58d94ce1e3',
                'name' => 'Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => '1268756b-e412-4aea-ae75-6a6c164eedee',
                'name' => 'Ardennes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => '1273bcb7-04f9-4f77-bad2-a7c873d930c0',
                'name' => 'Canakkale',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => '12841a33-bacd-4617-8a29-966cd77938a1',
                'name' => 'Jaen',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => '1285c27d-c43e-4fc4-a870-d125c52bdc5c',
                'name' => 'Dobeles',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => '12c9aaa0-64ea-4906-b7bb-15c1ea905b20',
                'name' => 'Sagaing',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => '12c9f4b3-7ffa-4d38-938b-d54519a05419',
                'name' => 'Victoria',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => '12dceff0-bd00-4ef9-bd82-609d79fb94e9',
                'name' => 'Okayama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => '12e24ed3-816b-47e6-806e-bf2f93cc02e5',
                'name' => 'Marijampoles',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => '12e366dc-95ad-468c-99f4-574b5312db7c',
                'name' => 'Balgowlah',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => '13049f05-c736-4470-b7fc-c0b111532e57',
                'name' => 'Osjecko-Baranjska Zupanija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => '130d052d-d270-427f-93a2-6161e34bb59e',
                'name' => 'Kyunggi-Do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => '13341c1c-257c-4ddc-9ef4-a23cd488df34',
                'name' => 'Thuringia',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => '133df683-8181-4dad-bd7f-016c739d7374',
                'name' => 'Saint Thomas Middle Island',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => '133e4ea5-3eb7-4906-8751-3945f5aaf66b',
                'name' => 'Ita-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => '1346d12f-17c5-4044-b69d-3e570433ede3',
                'name' => 'Suphan Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => '135197c2-989b-403f-a34f-dc3071d81437',
                'name' => 'Jigawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => '1361a6d5-44c4-4ac3-935d-565082db2457',
                'name' => 'Kerala',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => '13641688-be4f-4e8d-ab02-6c23ef3dd924',
                'name' => 'Saint George',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => '137930a2-75c2-491f-b7f6-4a26fa3ced6a',
                'name' => 'Van',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => '138e41a0-732e-453f-be68-71d839301f33',
                'name' => 'Mwanza',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => '13aefe24-57d9-4d23-a901-74e620a2faf4',
                'name' => 'Mopti',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => '13cffe0f-93f0-48d0-a39d-640d68efb062',
                'name' => 'Rzeszow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => '13e41fa5-bf50-41eb-b032-302e0f1f355c',
                'name' => 'Shropshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => '14054335-d9af-4595-ae4f-4077691b7328',
                'name' => 'Wonju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => '1419bcf1-57bc-450c-9b29-5fe849899c26',
                'name' => 'Mayotte',
                'country_id' => 'bc69832f-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => '141c5701-d8ef-4e16-acf4-d3c05229466c',
                'name' => 'Bitlis',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => '14367f95-8ff1-4a7c-a73b-47bc2d8da21f',
                'name' => 'Pomeroon-Supenaam',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => '143e6867-a5a3-4541-b7a6-88ff5903e396',
                'name' => 'Tibissah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => '14411f27-3486-4434-bdb7-f679f452b139',
                'name' => 'Ostrobothnia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => '14460767-807d-42c1-a2f0-f0fbc64f00aa',
                'name' => 'Pernambuco',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => '146bf8a6-c629-4b35-b1da-9857b462ab96',
                'name' => 'Savoie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => '14714560-5ca1-49f7-a20b-8fa03fec6d8b',
                'name' => 'Western',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => '147dafd3-c9d5-4171-8b9b-343216e8123c',
                'name' => 'Seti',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => '147e1c65-deca-4b09-b8a1-aa6929e3b75b',
                'name' => 'Basilicata',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => '148a122a-842f-4b63-a5b9-d03ca87fb33a',
                'name' => 'Mahilyowskaya Voblasts',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => '14a07e43-82e7-4e3a-b5e9-741cb14246c3',
                'name' => 'Balmain',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => '14a3ce02-d067-431a-a990-3d7d900565ac',
                'name' => 'Novokusnezk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => '14a3f928-85e2-41a7-bf5e-58667a37d4c7',
                'name' => 'Pahang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => '14b8bc3c-4bf1-4316-b1ab-db0fc239d33b',
                'name' => 'Maloelap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => '14c4f686-acca-4237-b8ee-52241f037319',
                'name' => 'Salta',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => '14cf3f50-7f5f-4ad1-b230-0e45758fecb2',
                'name' => 'Niari',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => '14d026a0-d83f-4c92-9c3d-0619a6af9f8c',
                'name' => 'Ambeno',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => '14d137bb-2d9f-4d8c-9228-42d2df1a098d',
                'name' => 'Alba',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => '14d684af-de25-4fb6-8586-6755b4511ce6',
                'name' => 'Narsaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => '14dc5e1c-c160-4ccd-8bfe-c6a1f957d8f4',
                'name' => 'Ludlow',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => '150c4c60-4229-4142-9bc2-deecb031b1b4',
                'name' => 'Hamgyeongbukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => '150e22d0-a85b-469c-9c7c-f77c79075fc3',
                'name' => 'Azuay',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => '15120b1d-ff01-465b-b67e-a1d7618b0f15',
                'name' => 'Jwaneng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => '1516c723-2020-4464-9efe-c1c8ba32ed00',
                'name' => 'Styria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => '153b6ebf-5389-4b4a-9233-bce43f9ef583',
                'name' => 'Sharjha',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => '15424c6a-488a-4cfa-959e-e73e8713072d',
                'name' => 'Lamphun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => '1550d55a-a2f7-4b69-932e-dd73741a01ee',
                'name' => 'Tabasco',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => '15a83e98-264b-4cde-970e-d59016bfb195',
                'name' => '\'Ayn Tamushanat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => '15a91636-5ce8-407a-b4c3-9bb2708dba27',
                'name' => 'Olt',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => '15b9b34d-93cb-4275-9570-90bd087ea870',
                'name' => 'Saint Thomas Lowland',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => '15ba7ef0-14e8-42e0-9c8d-d5d2878e6bc7',
                'name' => 'Hadramaut',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => '15c2944f-0f35-418d-bd95-97bde5c8fa5e',
                'name' => 'Baluchistan',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => '15cf3c0b-0ceb-44ac-b532-128b9b496f87',
                'name' => 'Lower Galilee',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => '15d2d0ab-b36a-44b1-a35e-6aabadd4aea5',
                'name' => 'Perugia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => '15e02bee-7e04-4715-9414-7e41c7fdbc10',
                'name' => 'Osun',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => '15ed29d4-eba7-4900-ba4b-8ea167a61a94',
                'name' => 'Pennsylvania',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => '15f47f95-341f-468c-a820-f6f31bc72538',
                'name' => 'Gazipur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => '15fb9447-fe3d-46b3-8158-3a9ad9ceb247',
                'name' => 'Nukulaelae',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => '1604c438-7830-4d38-854a-b2a4923d327c',
                'name' => 'Gumushane',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => '16074cdc-fe32-41d0-8a15-1cc52bd98009',
                'name' => 'Paphos',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => '1608969e-c12f-42ea-b694-b84817fc7502',
                'name' => 'Carazo',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => '16232e4c-5b40-4a48-9792-134d4c6f55d0',
                'name' => 'Distrito de Vila Real',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => '162e2209-5410-4a53-9e1a-0f59540c6aa9',
                'name' => 'Cyangugu',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => '1664a33d-3af9-4b60-a60e-b6da7d93d856',
                'name' => 'Hamburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => '166b587d-92b9-4807-aa94-13f344074bac',
                'name' => 'Nord',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => '16861272-0e8a-41f9-8545-c764972e1c41',
                'name' => 'Lombardy',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => '16884a27-1d62-43e3-b118-991e9393d847',
                'name' => 'Khorasan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => '168a1350-2ac9-4760-a7f1-6cf9f4eab4ee',
                'name' => 'Colonia',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => '168e0dd1-030e-4fd0-9054-b66b3cdeb9b0',
                'name' => 'Akmola',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => '1697ca31-e650-426b-800e-884629f694fe',
                'name' => 'Ayeyarwady',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => '16bfc393-ff67-419c-adaa-b4a9345b8112',
                'name' => 'Gyeonggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => '16dad272-4b00-426c-9f83-94e49d40cabf',
                'name' => 'New South Wales',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => '16f03b97-6b54-41d3-a1f7-e78be0758fac',
                'name' => 'Tainan City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => '16f07304-2119-4635-b517-8dd840aeca77',
                'name' => 'Likiep',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => '171f6caa-ea94-4ded-9ab7-e6c1ab363236',
                'name' => 'Saint Andrew',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => '17229c1b-60a7-4c10-bafa-c8bb34870c71',
                'name' => 'Bulgan',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => '172fbf06-7924-404e-99b2-2088b42712fe',
                'name' => 'Mon',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => '1734783c-36af-4cd7-8863-74fcd5be37e0',
                'name' => 'Halab',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => '17804149-5461-4a81-98f2-6d4bbafc1fa4',
                'name' => 'San Pedro de Macoris',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => '17889648-c93e-4cb5-90d4-0fab3a4a12e2',
                'name' => 'Kavala',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => '17a45851-5de0-4275-8de6-49f5bc15ca62',
                'name' => 'Kuntaur',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => '17a7d489-24a1-4dcf-b498-609bd4fcbe15',
                'name' => 'Land Mecklenburg-Vorpommern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => '17b94c6a-2540-4ed4-8bcd-e563edf968e0',
                'name' => 'Salzburg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => '17d29c79-dbb4-4f0b-93da-ab2fe6ecc662',
                'name' => 'Pague',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => '17d65311-7dc8-40aa-a15d-789ac68543f4',
                'name' => 'Basse-Kotto',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => '17ebfabd-d9c5-408f-9c24-c4f8467d4d75',
                'name' => 'Zabul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => '18006727-03ee-4264-9c82-6a8a69985ad1',
                'name' => 'Grouville',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => '182fa85a-f785-4912-857c-644eb5266cbd',
                'name' => 'Agadez',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => '18403fc3-7501-4dc1-8291-5841ce8968be',
                'name' => 'Concepcion',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => '185f798c-91f5-4fe5-8a3d-56c45492fc70',
                'name' => 'Abu Zabi',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => '186b1976-ab52-483d-97be-0b5dbc717d50',
                'name' => 'Ghardayah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => '1875e85e-b962-43e8-ad01-08f2f30a1dd9',
                'name' => 'Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => '1880cbcd-78c4-4f5e-8022-2fa37e490bcc',
                'name' => 'Karsiyaka',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => '1884e29f-6c23-4697-b97d-58f401b844cf',
                'name' => 'Jutiapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => '18a09b40-0463-49d0-8d6d-a8214820bbbd',
                'name' => 'Sala Al Jadida',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => '18a80500-76c0-42f1-ae89-077072704333',
                'name' => 'Hambantota',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => '18c433d4-7814-4437-b2b5-99ad60dcb4cb',
                'name' => 'Enugu',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => '18d71560-045b-472d-8f23-d0df0b3fb0fc',
                'name' => 'Shumen',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => '1902f41f-c965-40df-9046-7ad0f4fe4f04',
                'name' => 'Guarico',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => '191b3c46-d6aa-4ae4-ad3a-8cd908c62f42',
                'name' => 'Beilstein Wurtt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => '1936a0f9-4812-4051-9a95-4b56b70226ef',
                'name' => 'Couva-Tabaquite-Talparo',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => '1941de3d-3e9a-439f-b421-104ac5a70380',
                'name' => 'Toledo',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => '196478eb-9481-4808-8e6e-022c82f480e9',
                'name' => 'Louth',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => '1977144a-34fb-4bf5-8ab3-ca5f75d2ec7c',
                'name' => 'Saint George',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => '198d978d-1573-4ad8-a98a-2280faf104a4',
                'name' => 'Jawzjan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => '19ae65d9-37a3-4132-ba7d-9f57d6127ee1',
                'name' => 'Sabah',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => '19af8a3e-5e45-4c4f-90b0-dd0358cffc84',
                'name' => 'Azarbayjan-e Bakhtari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => '19c511cd-2852-421b-a09e-0542988600c4',
                'name' => 'Arorae',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => '19d0f387-d49f-4399-ade0-30a04898c13d',
                'name' => 'Didcot',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => '19e49c1e-b0db-4903-83f2-4a5d7eac623a',
                'name' => 'Bujumbura',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => '19e76372-a858-4f26-bbc7-143546c5f03e',
                'name' => 'Arkadia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => '19ec2203-793b-4012-a65e-b9d64b91c076',
                'name' => 'Sofijska oblast',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => '19fd697d-2a02-49fd-8cd3-f9922db9adea',
                'name' => 'Schleswig-Holstein',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => '1a03db76-4ce4-46cc-a4a3-b15e885a00e8',
                'name' => 'Kerewan',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => '1a07e5ab-ea0e-43e8-9774-2b43950a72af',
                'name' => 'Mayo-Kebbi',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => '1a0b6747-1c33-4ba8-bee9-f35fa85ec0f1',
                'name' => 'Negotino',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => '1a0fb5a3-aa23-4148-88ea-bf5097bc9da7',
                'name' => 'Trang',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => '1a2877df-ee57-413d-b34b-1714919f5632',
                'name' => 'Carinthia',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => '1a3af21c-c4c6-4a72-b992-9399b2a15283',
                'name' => 'Almati',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => '1a3b4655-f2da-4d04-9b98-abbccfecd1ba',
                'name' => 'Kangweon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => '1a3f1078-3c73-4aaf-848d-4a8a9534b242',
                'name' => 'al-Aghwat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => '1a64995c-ba37-4355-bcff-a9e2be39e69c',
                'name' => 'Gouvernorat de Sousse',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => '1a6edcf6-c68c-4128-a0ce-c1db9ce95673',
                'name' => 'Casanare',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => '1a877c38-34a4-47f2-b416-958038f1095e',
                'name' => 'Kayah',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => '1a8eb1eb-4126-4a0f-a5bc-efffe05987e7',
                'name' => 'Saint John',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => '1a9adaab-22d6-4b69-bfed-4ff7e98f788a',
                'name' => 'Nunavut',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => '1ab56eed-1bb7-4f00-bf28-fb7901939485',
                'name' => 'Karelija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => '1ab681a9-97f0-4820-9741-c7371ed1947a',
                'name' => 'Tehran',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => '1ac673be-5106-471e-b552-7fa4d85a4b7e',
                'name' => 'El Oro',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => '1acc4e14-36fe-4baa-996f-ad2778834453',
                'name' => 'Podkarpackie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => '1b22062d-769b-40be-b3dd-5e938581237d',
                'name' => 'Seoul',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => '1b4f38ca-011b-469e-b434-04201a81be68',
                'name' => 'Chhukha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => '1b55dd6b-9688-4768-9476-835035b683ba',
                'name' => 'Ninawa',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => '1b6d7f60-b732-4a0d-b746-14591bef8ea1',
                'name' => 'Manu\'a',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => '1b814143-ca7e-41b9-8da9-e4e4e3576b14',
                'name' => 'Rapla',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => '1b8977e8-0f98-4a9e-9da6-b2f56770ac81',
                'name' => 'Ganja',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => '1b8da463-0d74-4f1f-96d6-b19acade22d3',
                'name' => 'Kunar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => '1bc73884-6bdc-4ddb-8c59-6eee7fd976aa',
                'name' => 'San Cristobal',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => '1bca31d2-8e76-4ae1-96fe-6619aed24864',
                'name' => 'San Juan',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => '1bdcaa92-2cef-4021-b931-04698edad19a',
                'name' => 'Var',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => '1be30c00-e41b-41d6-936c-7f3653c02402',
                'name' => 'Tatawin',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => '1be72cf0-d1a6-432b-9005-716f6e1b8286',
                'name' => 'Cordillera',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => '1be7a2f2-31c8-492e-8f0f-3b21f4f4a297',
                'name' => 'Jamtland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => '1beafbdc-e86e-4fb1-943a-92536c4dda30',
                'name' => 'Risaralda',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => '1bef8e5e-87e9-483b-bcfd-6520620950e3',
                'name' => 'Balkan',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => '1bf71d7a-97f5-4936-b626-3538e42a20ba',
                'name' => 'Lambayeque',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => '1bff66e4-b88d-425f-a132-07d1c3b3bf2f',
                'name' => 'Brittany',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => '1c0daa7d-5e2a-4550-9793-d90a1c113e51',
                'name' => 'Karas',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => '1c355d07-06c7-46cc-bdab-d6f14425ab9e',
                'name' => 'Bedfordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => '1c3564ab-3d3b-45e8-a306-cec4ec88b50d',
                'name' => 'Kwanza Sul',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => '1c605722-555d-4341-b417-5c4c3ceec8b5',
                'name' => 'Maine',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => '1c6556a9-ec27-468d-99ca-dbd71eca5268',
                'name' => 'Warminsko-Mazurskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => '1c665fd3-42b4-4234-895d-b6ba14fe2d3d',
                'name' => 'Saint Michael',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => '1c678d01-4fea-4e5d-8fe8-497a33eeebc2',
                'name' => 'Kagoshima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => '1c73e7cc-403e-441e-8934-668dfcdb42c1',
                'name' => 'Nei Monggol',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => '1ca1203b-180c-43f3-a5ef-e75f46350dd8',
                'name' => 'Baranya',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => '1cba2f67-9e54-4a87-b639-447145e27f43',
                'name' => 'Seine-Saint-Denis',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => '1cc16192-e943-4e10-9f45-9800b3eafc9f',
                'name' => 'Osmaniye',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => '1ce11d79-8c9d-4a1e-9d3a-431c5eb3b2eb',
                'name' => 'Orellana',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => '1cf4a3b1-d8bd-46c8-b284-73fd77a7ebc0',
                'name' => 'Dedza',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => '1d047973-8e91-4cdb-bb83-e5324c5bc4bb',
                'name' => 'Teleorman',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => '1d09d306-62ba-485d-89b4-dea7bff5854e',
                'name' => 'Pavia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => '1d16a3e6-d513-4fce-b63d-294c5563832b',
                'name' => 'Oise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => '1d4c3079-da38-40ac-9981-e1230e439913',
                'name' => 'Bie',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => '1d93b5bf-d009-46ad-a30c-cf0935e44789',
                'name' => 'Esteli',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => '1da1cbf2-c1c1-4a7a-8878-a320aea80ab5',
                'name' => 'Canillo',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => '1dbdf553-6976-4341-adef-7d4816765947',
                'name' => 'Kostroma',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => '1dc390bf-6bb9-4f93-9287-d1407fc56601',
                'name' => 'Saint John',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => '1dcde9a1-5b7f-4490-8c62-cff506f2575e',
                'name' => 'Sagarmatha',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => '1dd2eca2-a9a5-4e1b-b890-8395081fdfa1',
                'name' => 'Southland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => '1ddf0d9c-213d-4ad5-9eeb-81d9c435150a',
                'name' => 'Aragua',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => '1dfe20aa-4815-4dae-b5b1-b0f6bc434e84',
                'name' => 'Korinthia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => '1e0127fa-f241-4556-813a-042c91ea3b27',
                'name' => 'al-Jizah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => '1e17e169-4b55-4bbf-affb-77cf6cbe12d7',
                'name' => 'Thai Nguyen',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => '1e27167e-8cc4-4dd5-8671-0852b5554b41',
                'name' => 'Karonga',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => '1e2efd6d-4d6c-43f7-a751-da0924b5c0b7',
                'name' => 'Saint John',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => '1e4ac5fe-8c42-4aaf-b79e-e8497be94042',
                'name' => 'Gorenjska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => '1e5d13ca-8ce6-4531-8566-a81c47b2bc62',
                'name' => 'La Rioja',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => '1e611f75-055e-4f2d-8b7d-8b91f27d9f25',
                'name' => 'Manisa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => '1e767de6-1686-4146-8eb8-e4ccae6d8f36',
                'name' => 'Republika Srpska',
                'country_id' => 'bc691e40-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => '1e7e3553-36f8-4914-b3bd-b13059112685',
                'name' => 'Kissidougou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => '1ed3ca56-bef6-4561-816c-ea5621a57de9',
                'name' => 'Palencia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => '1ed90d5d-c9c9-4539-b0cb-8a02f9dce3ab',
                'name' => 'Saint Ann',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => '1effb6be-d4cf-4d1b-aa6b-49609e88ed0c',
                'name' => 'Janub Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => '1f083d43-fb50-46e3-b6fb-4d8a02d0c5e3',
                'name' => 'Bogora',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => '1f103265-0d62-408d-8da6-68e0ddc30efb',
                'name' => 'Komilla',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => '1f1ec26c-0e52-4c80-b91c-e36f62363b98',
                'name' => 'Long Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => '1f3989a1-2d6f-4ec7-b257-8c1bc42f2797',
                'name' => 'Sakon Nakhon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => '1f46a8c6-2f13-4eba-ac60-22a2e6bad99a',
                'name' => 'Temotu',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => '1f56c26e-58c3-4f3f-acfa-294323e56ad7',
                'name' => 'Mudug',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => '1f761103-015d-4785-b479-566e2eb0e938',
                'name' => 'Kurunegala',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => '1fbfa830-35a8-4b9a-877b-72c32e4efc12',
                'name' => 'Moskva',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => '1fbfb071-62de-4812-a4b5-3836e23b1a2f',
                'name' => 'Miquelon-Langlade',
                'country_id' => 'bc69ce9c-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => '1fd2841f-9482-4ecd-90a7-d4b1f5190752',
                'name' => 'Bulacan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => '1fda3185-25a6-4a86-986e-3cb4e19e7836',
                'name' => 'Mangochi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => '1fdc6f27-42f9-4bf3-9338-fd72604eb9c2',
                'name' => 'Varese',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => '1ff2141f-6d54-4b86-8e93-111cbbf80e79',
                'name' => 'at-Tarif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => '2001653d-7d37-4a86-b891-73831e0c7030',
                'name' => 'Managua',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => '20227b52-cf37-48bb-a47b-198ad00fd067',
                'name' => 'Algarve',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => '203b39e4-08e9-47f2-ab28-c5031f2f3679',
                'name' => '\'Adan',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => '20671d5e-ed7d-4129-8f60-5cf910f0d62e',
                'name' => 'Dinguiraye',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => '20695ce0-fe89-4a57-82b4-73d99e93a08d',
                'name' => 'al-Ladhiqiyah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => '2076dfa1-41fa-4750-bdfe-975599aa7c3e',
                'name' => 'Shefa',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => '207cc848-8751-4c91-b042-85ff5a3a8598',
                'name' => 'Blidah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => '20a1513d-1f98-4d44-bb54-21b7eeb2a49a',
            'name' => 'Cocos (Keeling) Islands',
                'country_id' => 'bc692ec4-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => '20adb671-5d5a-44e0-8b55-ee93843c859b',
                'name' => 'Para',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => '20b2d6c7-49d1-4a65-8154-3604c0a7b23a',
                'name' => 'Clayton',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => '20c22b99-cf07-4147-b0d6-b9a63d5a4652',
                'name' => 'Sulawesi Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => '20c5c2ca-6bc2-4044-b3c4-1180f70a4bfc',
                'name' => 'Central',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => '20d63c76-fa1a-4299-a212-bca14338a9a9',
                'name' => 'Afyon',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => '20e71056-ac0d-472f-8b15-64926b3fc087',
                'name' => 'Shaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => '20f5ca6c-4e3c-4a64-b838-10d66523be75',
                'name' => 'Marij El',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => '20f9e4b5-ecd7-4528-b142-488b8c8b1d2b',
                'name' => 'Heard and McDonald Islands',
                'country_id' => 'bc6950f6-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => '212abb0e-cbee-41ca-bc0b-88fd392b7e94',
                'name' => 'Ishikawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '2155d49b-1a45-48cc-b158-c833d5c798ce',
                'name' => 'Saint John',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '215aae21-7aee-45f4-9ed1-a3ab61003e4e',
                'name' => 'Mouhoun',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '21697246-a0ad-4736-8ac7-3e3e8f83ac86',
                'name' => 'Nievre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '21707483-a470-47ce-b4e2-ca7e20f19670',
                'name' => 'Saint George\'s',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '219231b1-ab23-467d-a7d7-428b423d2b4d',
                'name' => 'Tortola',
                'country_id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '219b66c9-cd3b-40e1-a829-0ee90efbb594',
                'name' => 'Province de Tanger',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '21aa7180-9124-4dc7-8f7f-82c5d226d5c6',
                'name' => 'Enga',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '21b89f80-d7f2-46b1-9262-43bfe6bfdd31',
                'name' => 'Caraga',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '21dd344c-81b8-4edc-b73c-2b942bbf5439',
                'name' => 'Brong-Ahafo',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '21e8fef4-7908-491a-a375-89546763368f',
                'name' => 'Kwajalein',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '2203c21b-3a49-437b-9933-d34c35ef6db8',
                'name' => 'Saraburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '220dbd84-4192-4f22-9593-2fbd8d1ea152',
                'name' => 'Florida',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '221271a1-8083-4b1a-a2b1-2e6fcdbe72a9',
                'name' => 'Adrar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '2214999a-7813-4132-85e5-3b6a52238fcb',
                'name' => 'Gelderland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '221594f4-c3e2-4b59-89e3-6311778401f1',
                'name' => 'Saint-Benoit',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '2219490e-ee73-41f9-82d9-4f519238aa29',
                'name' => 'Tsafon',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '221f4394-a417-4009-a16f-b4d746f40d5f',
                'name' => 'Montenegro',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '22211038-c708-46d3-a676-2bf46b360ecb',
                'name' => 'Jevrej',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '2258c352-8c17-4705-bfae-e6d0b71a593a',
                'name' => 'Oubritenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '22669f9e-4b21-4565-9f88-5e0a98b25961',
                'name' => 'Saint Patrick',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '226b353c-3655-469f-a925-a9734ecd3022',
                'name' => 'Western',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '226d660a-7a1d-4551-a8bb-9872f8c059f6',
                'name' => 'Northern Ireland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '227f2baa-af78-45e8-8255-d2b19841b04a',
                'name' => 'Kolda',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '22876b80-6535-4f4d-9143-de1b47ee3eb8',
                'name' => 'Belfast',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '2290c3ec-612d-4197-88a6-eac8a1c5ae7f',
                'name' => 'Enewetak',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '22969776-418f-4322-84c6-342831f9b2a5',
                'name' => 'Nigde',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '22dabee0-ba1c-497d-b7fb-36399b14fe3e',
                'name' => 'Makira and Ulawa',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '22f5a54d-18a6-4657-8a44-1d2270d64e29',
                'name' => 'Guanacaste',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '22f80b58-aa99-4786-aa28-0efa048d49e1',
                'name' => 'Kossi',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '2309a595-a3c2-4147-98e7-a72b92c91908',
                'name' => 'Sikasso',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '231468a6-e026-475c-b72d-091ff9842629',
                'name' => 'Wallis',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '23188252-7f4a-453f-8529-4b30376e5f8b',
                'name' => 'Etela-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '231ad8b8-af0b-4182-ba56-883e1c566071',
                'name' => 'Bucuresti',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '2320d5fd-ba46-48c0-ac81-296589215c60',
                'name' => 'Tubuai',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '23277eaf-2243-43f6-adcd-2027c69207f4',
                'name' => 'Soria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '232b5765-f313-49f2-8d9b-de72a7f9e648',
                'name' => 'Coyah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '2339a176-1663-481f-a7c8-5eac25828874',
                'name' => 'Austurland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '233c7133-10a1-4d2a-9bcc-b9671f55abdb',
                'name' => 'Murcia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '23485a3c-6f75-488a-bb56-c9a4f5fdb6ae',
                'name' => 'Cuvette',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '235359cc-bab4-47c6-aba5-629c139db7a9',
                'name' => 'Modena',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '2367c34f-8bfa-427b-b6e6-85ddd4ae111d',
                'name' => 'Nordrhein-Westfalen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '23694caf-996d-4eae-b556-a1498543a214',
                'name' => 'Kilmarnock',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '236c3919-d012-4304-a505-16d76dee71fa',
                'name' => 'Ilia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '2385d3aa-3de2-437e-b06b-5b631425f86a',
                'name' => 'Zamfara',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '23903949-1599-49d7-9a28-c4f35c72566e',
                'name' => 'al-Kaf',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '239ae788-1c1d-47ba-8fa8-78413be79505',
                'name' => 'Tatarstan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '23b22b8e-fb38-4232-930d-f1b78f6c75c6',
                'name' => 'Oudalan',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '23b605f7-ce9b-478b-bed1-d80d6554dfc2',
                'name' => 'Wejherowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '23b9a99e-ece0-45ba-934d-52f7fe23e95d',
                'name' => 'Mil-Qarabax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '23ba7931-8070-4010-84ae-3c9acf9ccf11',
                'name' => 'Douglas',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '23cb44db-59c0-4347-88d5-c0efb783086c',
                'name' => 'Batnah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '23e1cb81-af7e-4acd-810b-64d6f16457f3',
                'name' => 'Banteay Mean Chey',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '23e5c919-0db0-4192-bf5e-6749dcf0bec5',
                'name' => 'Central Mahalapye',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '23e858f4-e349-4eeb-acd4-a787c4fe0461',
                'name' => 'Madrid',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '23fab205-21c1-4fc1-af4c-6af261dc5207',
                'name' => 'Bayt Lahm',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '24092301-4aa2-4d4b-b8b3-36b2abbb4c1e',
                'name' => 'Chari-Baguirmi',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '2418f0d7-08de-4371-abb9-3343d4de64bd',
                'name' => 'Burgas',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '243376f5-dac1-4564-9db8-95ff7e317df1',
                'name' => 'Tjumen',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '2438012b-7bb4-4d92-b936-8391f790f6f3',
                'name' => 'Central Luzon',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '243a8304-e05b-403b-8a7b-3c6562630e07',
                'name' => 'Anyksciai',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '24424cc9-bb94-4bdd-9254-abb1ad4448c5',
                'name' => 'Alaska',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '24591e75-8734-49f2-9d76-ae72f8dbbff6',
                'name' => 'Hentij',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '246cc594-606e-445e-a975-32b31e7329f2',
                'name' => 'Bengo',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '24943154-7135-43b8-a5c2-d6b0a9adf8c4',
                'name' => 'Chechenija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '249f7ec8-24bc-456a-b178-bacdd33301e3',
                'name' => 'Rajshahi',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '24df9689-b83e-4f60-9ebf-c4bf8230693d',
                'name' => 'Junin',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '24f236ec-3104-4ce2-8170-84e1aeca4d77',
                'name' => 'Saint Andrew',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '250895bf-9875-445e-9aab-2c8e121f84f7',
                'name' => 'al-Anbar',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '25099663-2bdd-4000-ac19-4ffb5cc4c517',
                'name' => 'South Tyrol',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '250b0da1-f1db-4615-a738-3ec91fa829d1',
                'name' => 'Jasz-Nagykun-Szolnok',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '250e1f59-9a38-46dd-9819-050368ff4c0d',
                'name' => 'Fes-Boulemane',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '251ede0d-b063-4cc0-b9ce-3b373c711282',
                'name' => 'Yukon',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '252971e7-ba1d-42c2-bd43-bd2752856d67',
                'name' => 'Lunda Norte',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '252dbd60-1923-4773-a95b-d61250aeefa7',
                'name' => 'Provincie Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '253937f9-6cc8-4160-b1f9-c9fa108fdaac',
                'name' => 'Nayarit',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '25528582-ff30-42c6-a74f-78e5fe5aa5ad',
                'name' => 'Kronoberg',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '256d251f-44f2-4bd2-84d3-4667291e20fc',
                'name' => 'Piaui',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '25afe9f2-2993-461b-b065-a201771ad2da',
                'name' => 'Torba',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '25b9b751-065f-4e89-8bb3-869afa999ed3',
                'name' => 'Somogy',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '25c59ed4-4376-485a-8f40-7a6004eff814',
                'name' => 'Podravska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '25dbef16-d127-498e-b581-bdcdbafd1003',
                'name' => 'Ohio',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '25dc5177-bfee-4467-aaa3-6b43cb1e7049',
                'name' => 'Buirah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '25e6a681-4c5c-47cd-8fea-bf6f239f8e7d',
                'name' => 'Otdar Mean Chey',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '25fa3a41-e3d2-45cc-a894-c04ac449efd0',
                'name' => 'Yigo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '25ff0f52-7d87-427b-8644-f583a35fd8be',
                'name' => 'Micoud',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '260aacbe-51e9-4326-9653-96392cd6438f',
                'name' => 'Dong Bang Song Cuu Long',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '2624c949-8c1f-4c02-b80d-b02a6b526b19',
                'name' => 'Guatemala',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '262f197f-aed4-4d92-9a00-5d9959724be8',
                'name' => 'Avila',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '26354c0c-cc10-4640-8c93-97ad1d99941a',
                'name' => 'Bayamon',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '265b587b-9f6d-4786-b6a4-81ca2b61195d',
                'name' => 'Miyagi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '266bd4c1-a31f-4b5e-8840-d33843aa6189',
                'name' => 'Borgou',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '2672e16f-f48d-436c-9b6b-f48a0a9bf07c',
                'name' => 'Chisinau Oras',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '2689a1f2-ec14-451e-b326-2b2a1bc5a59f',
                'name' => 'Icel',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '26bbd016-da1b-428c-856d-dd6f99a57299',
                'name' => 'Ngozi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '26d38d72-f92f-4deb-884d-5150cc3719f5',
                'name' => 'Bavaria',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '26d5b39b-3a21-4115-ac44-e88fd02c2325',
                'name' => 'Naples',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => '26d7c292-d80f-46cf-ae5d-dab1ed4380a7',
                'name' => 'Nukunonu',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => '26e77424-661a-44cb-b07b-9e3abcdca82b',
                'name' => 'Hamgyeongnamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => '2722518e-109a-4d25-947e-17de81d17345',
                'name' => 'Somali',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => '27466805-5fc3-4d6f-b2cd-85d2cd649b20',
                'name' => 'Firenze',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => '274929fa-cd75-4179-b693-a0c9dafb3b43',
                'name' => 'Guaira',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => '274a9da9-a41d-4e10-b120-7c0b3afbdf4b',
                'name' => 'Homjel\'',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => '275c7bbb-91d2-40e9-a705-cee430da5ce1',
                'name' => 'Nor ara Eysturoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => '279b683b-96a0-42ca-acb2-352abb3aedfa',
                'name' => 'Kuando-Kubango',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => '27a6c353-d5f1-49c6-89b7-6ce6949c74af',
                'name' => 'Adana',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => '27c10b89-a0f4-4573-b561-f3f0188d85b6',
                'name' => 'Demir Hisar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => '27d6e7c4-fc32-4797-8f4f-dc0c6bd91786',
                'name' => 'Jakarta',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => '27e88bca-e5c8-436f-a4d1-98f695c95a84',
                'name' => 'Central',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => '27e927eb-3835-4a66-8a25-50df3754b3ad',
                'name' => 'Ngobe Bugle',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => '28109d47-6b2f-44a4-b94c-da9c839faa18',
                'name' => 'La Paz',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => '281830c3-bbd1-4d85-9dde-82c58532236a',
                'name' => 'Angaur',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => '2822ce83-7891-42da-be97-b3eeaafa0d57',
                'name' => 'Western Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => '2841d937-15bd-4c93-b844-4a3468d4b7a9',
                'name' => 'Niutao',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => '28491809-f081-4043-8cbf-3625640c8ef6',
                'name' => 'Darhan-Uul',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => '28957b90-e411-4af2-bb22-2dd33c9638e9',
                'name' => 'Goa',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => '289f132a-f546-4a27-b501-7d4b490398d8',
                'name' => 'Gros Inlet',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => '28c827cb-7c99-4b6c-8df1-0e10e9150623',
                'name' => 'Bhola',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => '28cb6f2c-610f-4a5a-b133-547a3a2e535a',
                'name' => 'Vaucluse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => '28cce9af-2c9f-4955-a5ed-512a153b11e2',
                'name' => 'Lunda Sul',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => '28e695d6-f91d-4d06-b318-9b0f5c5f814c',
                'name' => 'Jamalo-Nenets',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => '290819d3-5ccc-4c40-a3c6-f926019642fa',
                'name' => 'Lazio',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => '291eb369-61b5-42c0-870b-ec98a2070ea6',
                'name' => 'az-Zarqa\'',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => '2923505f-156f-489e-926f-8151ee4c6405',
                'name' => 'Mcheta-Mtianeti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => '292740fd-b4a7-427b-8eb6-8e01e71dff7f',
                'name' => 'Onchan',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => '29322718-29c0-4aee-a3e5-0fd759e622be',
                'name' => 'Saint Sampson',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => '294a2d06-f129-4e93-897a-b1dfeb088630',
                'name' => 'Sao Nicolau',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => '294dd33e-a560-456b-8a97-bd22de0cdea4',
                'name' => 'Dong Nam Bo',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => '2963e5f7-5ed7-4df1-91bc-280aab803e4c',
                'name' => 'Kendal',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => '29702df8-a152-4f83-a9c0-4d84d1334c99',
                'name' => 'Encamp',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => '29751b82-797e-4a35-96fd-ed6705ca962b',
                'name' => 'Gyeongsang ',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => '297e6ce8-a334-4a07-a044-091c426c065f',
                'name' => 'Sfax',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => '29903529-eeb6-4ee7-938c-a6a4a7980476',
                'name' => 'Para',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => '299a4206-31fc-4b0e-beb0-103b76d47f6f',
                'name' => 'Southern Savonia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => '29c0f55c-04c1-4f08-ae42-3524561dd0cd',
                'name' => 'Agua Grande',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => '29c4dc47-977a-48ae-96eb-07b8ee000881',
                'name' => 'Staffordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => '29cffeb5-5707-4f9e-8f6f-62f36daadb37',
                'name' => 'Central',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => '29ea557f-94f3-4aeb-b33a-5262bb0a7a37',
                'name' => 'Katanga',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => '29ed92ae-456f-4be0-aa25-621acc6498c7',
                'name' => 'Sinajana',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => '29f8c1fb-e0a3-4792-8629-7deaa26fb1a5',
                'name' => 'Cumbria',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => '2a02beb0-c767-4da5-b7e7-76426bca556c',
                'name' => 'Capellen',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => '2a197064-64be-4b94-888e-28015cd97e6a',
                'name' => 'Limburg',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => '2a246c9d-2423-4c44-b50c-838b8f91a79f',
                'name' => 'Lot',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => '2a25c5b1-f77f-4c46-9f86-717064158021',
                'name' => 'Sing Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => '2a26733e-7de5-4ec9-8529-caab66e15c10',
                'name' => 'Limerick',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => '2a29a63a-c5af-42f1-9338-c131c6d765dd',
                'name' => 'Varsinais-Suomi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => '2a35366e-b2fb-4df9-9d76-5c064d47cf5b',
                'name' => 'Apurimac',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => '2a3d124a-58fd-4b44-ad7e-082004290b9f',
                'name' => 'Colon',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => '2a5f4a90-c3b9-44fd-bd83-5106eacb50b5',
                'name' => 'Somerset',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => '2a8d46fa-ad52-4b63-9f7d-6255194c08b2',
                'name' => 'Trujillo',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => '2a8e56ad-c4ff-4020-9879-af483fec189b',
                'name' => 'Niigata',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => '2a901b99-6bc2-41b9-95f6-3ffb3bd80d46',
                'name' => 'Berchem',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => '2aa164e2-8a34-4128-92d2-48326cf64ba9',
                'name' => 'Trabzon',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => '2ac16366-43e4-4747-a97a-a1f495edba46',
                'name' => 'Ourense',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => '2ac6eb94-4d31-4cb1-8433-659e8f45bf07',
                'name' => 'Heilongjiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => '2aeaa2f2-236c-47e1-b901-7dd2ae5d76fd',
                'name' => 'Kedah',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => '2af2667d-c9f9-4931-aece-12dbda94b572',
                'name' => 'Channel Islands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => '2afbeda0-2d1a-412a-afa7-d7f0384548d5',
                'name' => 'Mzimba',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => '2afd2b61-fbb4-4a7b-a74e-9bf09b300669',
                'name' => 'Kramerville',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => '2b003b49-03e7-47d7-8dde-c74ed52fb751',
                'name' => 'Abia',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => '2b118e14-b86b-434c-b571-1cecdabe6131',
                'name' => 'Abuja Federal Capital Territor',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => '2b185a69-dae1-476a-a50d-369716e53383',
                'name' => 'Hampshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => '2b39aaa9-ce9e-4c7a-8dd9-086e8e4e9065',
                'name' => 'Toskent',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => '2b467495-022a-439f-8e8b-39ab02220e2e',
                'name' => 'Zanjan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => '2b4ec0c1-0cfd-48c0-a9ec-e3aaebbd5231',
                'name' => 'Taraclia',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => '2b55a8b2-a078-4689-bbfb-0cb813e4225d',
                'name' => 'Gorno-Altaj',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => '2b5e045c-1c16-4a0a-bccc-854fe3a0a75d',
                'name' => 'Ash Sharqiyah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => '2b67a2ff-ff29-45fb-9e8c-c232c69c7ecd',
                'name' => 'Alpes-Maritimes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => '2b67b797-4c0c-4d09-b81f-5395897b2eeb',
                'name' => 'Darien',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => '2b80add8-811c-49be-ac9b-a97df6951382',
                'name' => 'al-Balqa\'',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => '2bb42c82-61e1-4c61-9680-45267efc3dfa',
                'name' => 'Parow',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => '2bc78873-172b-4692-a249-8d412d29811a',
                'name' => 'Mokhotlong',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => '2be1c302-936e-48da-b5b4-778222e9267a',
                'name' => 'Lincolnshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => '2c1a6e93-de9e-4ebb-b4f7-19292148de58',
                'name' => 'Whissendine',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => '2c1d39d5-a116-46bf-b486-4bdd60b5024b',
                'name' => 'Lobaye',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => '2c2fb43d-0fec-44d0-82a8-c4ffa57e317c',
                'name' => 'Western',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => '2c3c8745-4739-425c-ad7a-e3e95794a43f',
                'name' => 'Paktiya',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => '2c4b0e92-0bcf-4966-8f43-f3d133fad9bb',
                'name' => 'Vastra Gotaland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => '2c5d4906-8d46-4dac-a1da-d83da5d1b6f2',
                'name' => 'Chollabuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => '2c6f81dd-ef80-4c86-a34c-ef41116c2118',
                'name' => 'Espaillat',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => '2c70c5f9-ae39-4cd4-8f4d-4745e233243f',
                'name' => 'Burjatija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => '2c8000a4-b719-4a9e-ba1e-ca1106ce003a',
                'name' => 'Strumica',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => '2c99b3b9-76dc-4891-b231-78954abd0355',
                'name' => 'Tianjin',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => '2ca51df3-9106-4a80-8660-858a633f1ae5',
                'name' => 'Molteno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => '2caab19b-d57f-44be-89a3-4a8d393d78fc',
                'name' => 'ad-Daqahliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => '2cbae85d-b76a-4aff-b58e-022c5b082e67',
                'name' => 'Tokushima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => '2cbc4efb-3ac3-4b68-95fb-43918ba7286a',
                'name' => 'Boffa',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => '2cbd1fe5-8190-43ce-ab89-f43d7774123d',
                'name' => 'Annabah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => '2ccd9668-a61e-4bd2-ac67-123b726fdf8d',
                'name' => 'Kerry',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => '2ccfd5ec-f57f-4900-864a-46144cb7156c',
                'name' => 'Tasman',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => '2ce01898-15af-4d43-bb50-cd7fe1cef41c',
                'name' => 'Brest',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => '2cf9bd21-d702-4a2b-9fe2-40f433eed412',
                'name' => 'Jharkhand',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => '2cfa9c5e-aaa8-41d0-87ba-b0fd3bb835c1',
                'name' => 'Pohnpei',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => '2d147b04-8da1-40f4-a8df-4210d3c8884b',
                'name' => 'Delvine',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => '2d494c68-4353-461f-b178-1126d7a0bfa0',
                'name' => 'Ocotepeque',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => '2d4f8461-84a2-428f-9ea5-39ad92336ed2',
                'name' => 'Paraiba',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => '2d75370d-34cf-4559-b437-b76e10b1fc4a',
                'name' => 'al-Hudaydah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => '2d8ce1e8-a502-47d1-8096-bae3bcb86569',
                'name' => 'Wheeler',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => '2d954385-6cd7-4e42-a3a4-ee963108b955',
                'name' => 'Gyeongsangnam-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => '2daee9a5-629b-44b4-add2-d3f47dbb6ca3',
                'name' => 'Hwanghaebukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => '2db514db-e780-4e82-a848-64ff6c929615',
                'name' => 'Hakkari',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => '2dd27b64-ab01-40ff-a9b0-7927d86cc278',
                'name' => 'Indre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => '2dd97a66-2015-43b0-8048-11c6c8294539',
                'name' => 'Ida-Viru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => '2ddc0b78-8de5-439b-a1ee-02b1984b1d14',
                'name' => 'Alacant',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => '2de87f5d-143b-4b24-b093-dfda3f0235f1',
                'name' => 'Valletta',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => '2e0f089c-c98d-42b1-a104-0399a1f25b1a',
                'name' => 'Syunik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => '2e143a3a-2781-44e6-92fc-ad510bdfd83d',
                'name' => 'Yanggang',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => '2e3371c5-d9cf-4693-a793-37d5838d8a25',
                'name' => 'Matagalpa',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => '2e4019bb-8552-4b95-bd8b-82ba6b602968',
                'name' => 'Gilan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => '2e413055-3941-40db-9211-8c8a221d9b94',
                'name' => 'Jekabspils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => '2e4708f1-778d-41e2-970d-20622a781ceb',
                'name' => 'Jarash',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => '2e55e8c3-e89a-4a91-b2ec-c80b793c4d09',
                'name' => 'Saint Helena',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => '2e78ca3b-9df6-46c7-87b9-3342ef207c24',
                'name' => 'Paramaribo',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => '2e7c8d88-8bd2-4001-af99-d2e53e5322d6',
                'name' => 'Kaohsiung City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => '2e926706-e2bc-4d46-baec-d7b0a85f2ca1',
                'name' => 'Sabha',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => '2e92ce59-5bb2-40db-9dfa-d6d2ff16e8de',
                'name' => 'Matabeleland North',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => '2e932385-34ef-46d3-9e9f-c287f598cc28',
                'name' => 'Mahaica-Berbice',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => '2ea4a7bb-1f8c-4af7-8609-321527b0ed96',
                'name' => 'Krapina-Zagorje',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => '2eabab87-ac5d-4e70-bcae-4955c60f07bf',
                'name' => 'Grevena',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => '2eb2dbe8-2a66-46e2-9ab0-d1da39b30e87',
                'name' => 'Pskovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => '2ec24f37-a641-48b2-aba0-7005407871ff',
                'name' => 'Pas-de-Calais',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => '2edef18d-67a7-4cc2-91b9-a08bfbaa5ec2',
                'name' => 'Taoyuan City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => '2f06f9d3-8560-4680-8131-fb1df5a8655e',
                'name' => 'Catania',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => '2f0ac3e8-e86c-48fb-bbe9-5936be8a9f7e',
                'name' => 'Zulia',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => '2f0c3e28-e546-4fca-9ea0-0d8336321c57',
                'name' => 'Southern',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => '2f0eabd4-4653-4887-860f-3dc53e62427b',
                'name' => 'Los Santos',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => '2f11c955-f93f-4dce-b092-86fab357b31c',
                'name' => 'Bacau',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => '2f286f77-675b-41b3-933c-82310d38eff2',
                'name' => 'Muhen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => '2f40f7ce-050a-4040-bd09-50f9858e51f0',
                'name' => 'Punjab',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => '2f44fdb9-8ce6-494d-8626-b1a1b0d2e0d8',
                'name' => 'Tombali',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => '2f58071f-3c80-497f-984e-d9bb063e6493',
                'name' => 'Nord Trondelag',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => '2fa3f63a-f66f-4b83-bb4c-f048772bd027',
                'name' => 'Jawa Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => '2fabd61c-3444-44b6-af48-1053070964eb',
                'name' => 'Sykkylven',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => '2fc9d52e-7c1b-4aee-bca5-aaa7b796e035',
                'name' => 'Northern Areas',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => '2fe8bec9-83f8-4bab-b382-79118b36a943',
                'name' => 'Oslo',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => '3006e370-1a0b-4692-9d69-09397c2cdaae',
                'name' => 'Kanem',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => '300f957f-a7f5-455a-8280-ceea855a8489',
                'name' => 'Bagar Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => '30127fe8-290a-4882-873b-a885dbdc06a3',
                'name' => 'Agana Heights',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => '301d8f11-c930-41b6-b936-cffe2e8a7404',
                'name' => 'Lappi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => '302053c2-7c31-40ad-8c61-3b7ec1f82cc3',
                'name' => 'Kasai-Oriental',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => '3029e6b5-3ff3-47dc-a5ac-fef7c09a577b',
                'name' => 'Svalbard',
                'country_id' => 'bc69f3ed-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => '30457f01-c8fe-42d3-a203-71244bea2b33',
                'name' => 'Delta Amacuro',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => '3045aca0-c324-4ebc-b126-49df35190706',
                'name' => 'Cedex',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => '3066adc3-034d-45ec-a1fe-6a473322fba5',
                'name' => 'Binh Duong',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => '30884cda-ae4b-44d5-ac16-a73600d43668',
                'name' => 'Kurdistan',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => '30b78278-7dd2-40b4-9f7d-0d77359511a5',
                'name' => 'Chiang Mai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => '30b90d75-cfa2-4065-a93b-e5735fc86493',
                'name' => 'Crimea',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => '30f98d4f-f0e2-48ea-be56-abfa12643336',
                'name' => 'Stara Zagora',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => '30fcaa9d-b9d9-4dbd-aea0-73a2c2b09068',
                'name' => 'Mus',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => '3120dda4-c8ee-4b10-bd76-9bf60aa92b4a',
                'name' => 'Tokyo',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => '314a2190-0237-4480-8096-3f864ea45d4c',
                'name' => 'Humacao',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => '314eac8a-7cfd-4919-bec2-752672caf52a',
                'name' => 'Fermanagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => '31536f9f-3727-42a4-a90d-c02106bb324f',
                'name' => 'Bilecik',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => '315b5ccf-6253-4e63-9583-ac77b115ddfe',
                'name' => 'Gandaria',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => '31627ea8-abb2-47c5-a82d-d733eb090b26',
                'name' => 'Auckland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => '3165f970-4222-4370-a524-e677d8b7a66c',
                'name' => 'Naxcivan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => '31a17165-c08b-40aa-a6a6-fb4f52c877a1',
                'name' => 'Brindisi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => '31ac492d-1ce1-4d59-ba76-3c0f81ff4973',
                'name' => 'Bokeo',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => '31c57037-30de-4ea3-97e3-ea76faa0cf96',
                'name' => 'Mongmong-Toto-Maite',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => '31c65990-f7af-40bd-b535-024916337f24',
                'name' => 'San Salvador',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => '31dc5ffd-f5f0-4fdc-827c-3e160d743926',
                'name' => 'Xizang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => '31dd6493-aff1-4010-b119-746738081f39',
                'name' => 'Lavalleja',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => '31e5f8d1-fbb7-4a4e-a92d-b6d19dac564d',
                'name' => 'Caras-Severin',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => '31ea35b1-02b4-474b-9075-6f95b305ab0b',
                'name' => 'Piura',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => '31f6cd4e-f428-41c2-8189-b523f559a8d5',
                'name' => 'Fogo',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => '320446be-07bc-496b-a20a-72495e27b028',
                'name' => 'Weinstrabe',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => '322bd159-a46c-47f6-81dd-6a97e818056e',
                'name' => 'South Eastern',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => '325756b7-5647-4625-8c33-18a57da6b987',
                'name' => 'Komarom-Esztergom',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => '32866543-273a-42d9-8bba-0a85cc33e9ad',
                'name' => 'Hualien County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => '32a5163c-fbd5-4dc3-9bdd-3f675f6e4656',
                'name' => 'Kaoh Kong',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => '32bc27dc-af0b-4db9-a404-c9ad08c4b36f',
                'name' => 'Yucatan',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => '32bddf4e-2c47-4321-8332-bc0ee22b6798',
                'name' => 'Kalbacar',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => '32c65bc1-cf07-4e7a-9452-284e1095048d',
                'name' => 'Mongar',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => '32d6aa40-792b-4cb9-b688-350297924466',
                'name' => 'Uri',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => '32dc48f9-d4db-48ee-a5bc-b56f7ffec8b7',
                'name' => 'Grevenmacher',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => '32e2abcc-18e2-46cd-8d5c-0f30d27f7172',
                'name' => 'Montserrado',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => '33261552-893f-4915-b414-04f05aa8da46',
                'name' => 'Bay',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => '335bd64a-b544-48c4-aea6-78017fbb2f3a',
                'name' => 'Plzensky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => '335d0313-4cd3-462a-9062-aebe8cd14225',
                'name' => 'Balvu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => '3364c91e-fe3a-4436-8f37-6cb8a86b550e',
                'name' => 'Schaan',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => '338f84be-fc25-42f9-83fa-0469464a085d',
                'name' => 'Bali',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => '3391cf3e-9f5d-48a0-b35d-8c88271060c2',
                'name' => 'Akita',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => '33a744f5-d1f3-4162-aba6-45476c2742be',
                'name' => 'Mbomou',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => '33a7b57a-2e34-4885-85c9-bbaa65567190',
                'name' => 'Fujian',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => '33ac0717-adad-47c3-a19a-e576ba4c8759',
                'name' => 'Khanshalah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => '33ac0bc6-08ee-4ca8-be52-0154f271c6e8',
                'name' => 'Preveza',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => '33ce08eb-49cc-496c-9daa-d86cae2b8d9d',
                'name' => 'Tamanghasat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => '33cf3264-47a5-4855-b794-e0a13e5c1db9',
                'name' => 'Delaware',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => '33d01189-d8dd-4758-9aad-bf4755bc1874',
                'name' => 'Puno',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => '33d3ace8-25aa-47e9-81b6-fb8dca1dbeee',
                'name' => 'Unclaimed Sector',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => '33df9113-c072-4169-a1f4-efe90a13610a',
                'name' => 'Sector claimed by Norway',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => '34066e8b-93fd-4eea-b4b6-3ffe98fa27a1',
                'name' => 'Taichung City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => '340a6667-93aa-4f60-9e17-1ef9e416a53a',
                'name' => 'Gandaki',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => '34149290-b259-4135-b3ca-c32f96138fbe',
                'name' => 'Northern Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => '34196c07-9ee4-4a36-882f-af82f1994fe6',
                'name' => 'Zala',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => '341e0fa8-2d66-41c1-a6c8-304c2f525df4',
                'name' => 'Hidalgo',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => '34264ae4-d88e-488f-b7e4-cd91594932ba',
                'name' => 'Fakaofo',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => '3428e910-bbb4-4ff7-8ba1-20c2f3d31827',
                'name' => 'Centro Sur',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => '3429f3ed-d4d4-49d8-8c74-8a6817a03a16',
                'name' => 'Tartu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => '343afaeb-e6dd-4675-b7b9-7cd0d36fdf5a',
                'name' => 'Montana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => '343f3f0b-2c6f-41d2-8d1c-6ba3401b42c5',
                'name' => 'Gavleborg',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => '344c6461-de9a-43b5-adfc-0c30e9ade60e',
                'name' => 'Copan',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => '346d712d-61cd-4007-8d5e-48818bb82a35',
                'name' => 'Shemgang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => '3479cd4d-ffb8-4832-bcbb-340fa536fc91',
                'name' => 'Kebbi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => '349d3cf7-89cd-4ba5-8f3f-da4b3de35798',
                'name' => 'Shan',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => '34a55f3e-cd4a-4d98-89c3-deaffb4e38de',
                'name' => 'Yaren',
                'country_id' => 'bc69abd4-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => '34a90216-7b99-457b-b804-15f7f04e7b3a',
                'name' => 'Tabiteuea South',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => '34ab0b45-65d9-4cf1-9abc-322a50eba59e',
                'name' => 'Zou',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => '34b9906b-3f11-4dc0-8162-6333308265c7',
                'name' => 'Swains Island',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => '34be20ad-2801-4fb8-be11-ff84546da894',
                'name' => 'Arhangelsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => '34c11293-292a-48c7-a213-2830977881b7',
                'name' => 'Moquegua',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => '34c48df2-383d-49f9-925a-d8b0c70f2bd3',
                'name' => 'Skrapar',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => '34cefada-e3e3-4d83-ad7a-55bc0da2cf71',
                'name' => 'Upper East',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => '34ea288e-55bb-427c-ad44-b3a47b42b42d',
                'name' => 'North Eastern',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => '34f94ff1-da3e-49ff-a237-e100c8ce7412',
                'name' => 'Gharb Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => '3503d462-b20b-42ec-99de-30b3f4689527',
                'name' => 'Yablaniza',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => '35299a56-0630-4c96-959c-80515acdb90a',
                'name' => 'Essequibo Islands-West Demerar',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => '35309ff5-bbef-42f9-887b-9155f0935883',
                'name' => 'Colorado',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => '353d564b-c9b2-4f43-bb1a-73691f5caf30',
                'name' => 'Sistan-e Baluchestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => '354dd3bc-b1d6-426c-8028-611de8c4912f',
                'name' => 'Diourbel',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => '355985c8-8ae8-48e0-9141-eb22a6853353',
                'name' => 'Mayaguana',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => '355ed0b5-4222-4ac3-8a89-ccd768c54de7',
                'name' => 'Duzce',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => '35738c05-315d-4ae2-a7a7-69d0883ee23a',
                'name' => 'Aiga-i-le-Tai',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => '357cf4b4-9ea4-47f3-974e-ab8ba8adeff3',
                'name' => 'Caserta',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => '35934a79-3b3b-47eb-a337-e7b225c5285b',
                'name' => 'Sigis Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => '35934da8-9f5d-4036-83cb-5e4ecd0c9769',
                'name' => 'Uige',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => '35992525-8534-4134-b610-70f8e4a2e759',
                'name' => 'Madhya Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => '35bdb0a7-aa0f-480a-8d4d-38df9736816a',
                'name' => 'Manama',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => '35e1f28d-f397-48d0-b9fe-6d3772834ab0',
                'name' => 'Hardap',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => '35ea7e1a-647f-42ed-bd55-a9c4d61b9ae3',
                'name' => 'Cavan',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => '35ebccbc-87fe-455d-a35e-af3f84016a55',
                'name' => 'Freistaat Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => '35fbe4b2-4f53-48b3-bd9a-0d4a9ec40719',
                'name' => 'Bandarban',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => '3614b3ad-1244-48d8-b5c4-ea6463b93d62',
                'name' => 'Ucayali',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => '3614b4f6-9805-42ea-b360-9c5b56fb047d',
                'name' => 'Jalapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => '36264de9-3189-433f-8630-a25ca68c9958',
                'name' => 'Khuzestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => '36311df1-1a2b-437f-a714-7039219e8a91',
                'name' => 'Toscana',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => '364a9c3d-caf0-4216-a21e-7c662633aba2',
                'name' => 'Catamarca',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => '365efbbb-ce27-411b-bef6-4880fc66bdc4',
                'name' => 'Morobe',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => '3665a42d-d47b-42ab-8c05-a2ec52cdb6bc',
                'name' => 'Saint George',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => '3697ea3f-5824-49e7-8de5-a5e33d41a3f1',
                'name' => 'Kenitra',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => '36a92d11-6138-45bb-9885-155023ad0531',
                'name' => 'Monaco-Ville',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => '36fbd6d1-8c2b-431b-8690-e37e4fbd0697',
                'name' => 'Petrik',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => '370b0f3a-c082-4a05-86e3-c0af72090f0c',
                'name' => 'Tinduf',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => '3712b45b-5611-4c48-a284-fa06012fd05e',
                'name' => 'Ailinlaplap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => '372096ff-005f-48ba-93d0-38afcf537fff',
                'name' => 'Qurqul',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => '372ff2e4-32c1-466f-822d-f03981cd912a',
                'name' => 'Ontustik Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => '37349077-47db-4c57-96b1-14c3fd95c1e4',
                'name' => 'Dajabon',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => '3739af71-b27e-4155-ad48-a3eaa25f06ca',
                'name' => 'Ahal',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => '374affed-ca8b-447f-a654-7b1de6652eb3',
                'name' => 'Manica',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => '374bb77e-71f9-4ab9-9363-054f02833f27',
                'name' => 'Pyrenees-Atlantiques',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => '376e2a7f-3179-4fc2-a113-bbf0eddcc270',
                'name' => 'Sint Eustatius',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => '3786702a-a2e0-4a85-87f4-42d567564f10',
                'name' => 'Loreto',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => '37b3ecfb-2826-4df6-81ea-3614ee99d332',
                'name' => 'Warwickshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => '37b78a93-5d30-4374-8d72-38632d8c8fef',
                'name' => 'Demerara-Mahaica',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => '37ba9a49-8ed8-47f4-b289-35ebee76a545',
                'name' => 'Telshiu',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => '37c19f6e-214f-4212-b5d6-020fc091e32c',
                'name' => 'Eastern',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => '37d748a2-40eb-4172-8c2c-d91e5ba97f99',
                'name' => 'Madre de Dios',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => '37daaf46-95e1-423b-b0eb-87da05382a4e',
                'name' => 'Manzini',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => '37e7a6a6-028b-4cfd-a148-cd45209050ae',
                'name' => 'Ngerchelong',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => '37f094f1-4156-49b6-8036-a852443a508d',
                'name' => 'Inarajan',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => '37f1955d-24f9-49bd-b5e4-fd2a91ed95fa',
                'name' => 'Ostrowiec',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => '37f3d731-ce9a-4ee4-8f19-adcfbb5a21ba',
                'name' => 'Haute-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => '3813253e-132c-4191-816e-f8eaa50205b3',
                'name' => 'Steiermark',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => '381b0db7-f5e1-4269-881b-ebff63050419',
                'name' => 'Rize',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => '381b613c-e4bc-4fe8-99ab-9b8c59005c00',
                'name' => '\'Ali Sabih',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => '3824369a-94d5-4ad6-aba4-6ee993877bc1',
                'name' => 'FLorida',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => '38407b54-b96c-46dd-8332-bcc5f6afd743',
                'name' => 'Sector claimed by Argentina/Ch',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => '384e28f6-da8a-46f6-8775-098fdf13a90a',
                'name' => 'Ibaraki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => '384f9a3b-30ae-4814-986b-3c113e4e5082',
                'name' => 'Luxembourg',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => '3858e300-0daf-42c5-850e-29358145003b',
                'name' => 'al-Khums',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => '385ea699-850e-42da-9f00-a97e5af2a05b',
                'name' => 'Balears',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => '3873f4cc-058a-4ddd-bae2-1b0a43a8c41f',
                'name' => 'Nukufetau',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => '3889e1dc-e870-4700-a164-e54dd153e6ca',
                'name' => 'Tuy',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => '3890dd2b-fe13-4c49-98c0-31eb2bc5d1ae',
                'name' => 'South Wales',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => '38b3fb89-1faf-4049-9a16-b06215f3252f',
                'name' => 'Baja California Sur',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => '38c65a4e-cabf-400f-8420-03053ff12a8b',
                'name' => 'Sud',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => '38d0365c-8202-4417-8c4f-5088cf59b91b',
                'name' => 'Jelgavas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => '38de5292-10bb-4f2d-83da-b0153d8735e6',
                'name' => 'Zoundweogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => '3909e0b5-89ed-4064-b514-7526a593d290',
                'name' => 'Aitutaki',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => '393b3be3-d6a6-4089-8a9c-f7a8cc318ac6',
                'name' => 'Lindi',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => '39513c96-0be5-4aea-951f-304ff98d38f0',
                'name' => 'Treinta y Tres',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => '395734cd-0166-4e83-b9d8-7a2d097a3e37',
                'name' => 'Sukhothai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => '39744f05-cce2-46f9-84a5-0792d51b9d17',
                'name' => 'Saint Andrew',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => '3975f531-2c4b-4bcc-877e-f400553f4f56',
                'name' => 'Mejit',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => '399ef552-95f0-426d-aa74-e3017bd6c598',
                'name' => 'Vaupes',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => '39b3248a-d60b-4dfe-81b1-47acd0c5f3de',
                'name' => 'Qasigiannguit',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => '39bd259e-1022-499b-b61b-1f20d07d8fb9',
                'name' => 'Brasov',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => '39d2a58d-0ebe-429e-b772-da3d8b52090e',
                'name' => 'Adygeja',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => '39dbe637-01d4-4cc2-9faf-600845324f35',
                'name' => 'Rafah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => '39e5f38b-84c1-4223-a2f2-1ed0d89d1654',
                'name' => 'Abemana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => '39e95127-3cbd-4707-b0bd-5038acd1beac',
                'name' => 'South Moravian',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => '39ef48ab-1798-401c-b9f3-42c6532c5a46',
                'name' => 'Pogradec',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => '39f3809a-ff1e-4c32-9f20-fea2bf2cbcdf',
                'name' => 'Qasim',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => '3a04538d-a0e6-4c9e-8797-689e96d16c54',
                'name' => 'Benelux',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => '3a1ad35e-ad3f-4bd2-b0e3-3825d83b547a',
                'name' => 'Beirut',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => '3a1b4d10-70dc-49f7-81e4-ab84af3a5085',
                'name' => 'Erzurum',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => '3a214f16-5ebb-4189-8aab-b43668eec690',
                'name' => 'at-Ta\'mim',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => '3a23762a-09eb-4441-b73d-862b5ea62b88',
                'name' => 'Kursk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => '3a30b4ee-7429-4574-b447-d50a6570baa3',
                'name' => 'Haute-Vienne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => '3a52c58e-3bf9-477f-aea8-2d1b463e719b',
                'name' => 'Saint Saviour',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => '3a594af6-8e92-4ba1-8b7d-424d914041ce',
                'name' => 'Kano',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => '3a5f1634-c10b-444b-b4b9-5d0c7846bf4c',
                'name' => 'Crolles',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => '3a838a13-87a0-4bca-a76d-caf7d6508c4e',
                'name' => 'Abrantes',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => '3a9449a9-4623-44f4-a7a2-b8ff61b9c45d',
                'name' => 'Bioko Sur',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => '3a96c972-2058-4bda-9663-7bdc56d2a8cd',
                'name' => 'Jilin',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => '3aa48b6f-3252-4983-8225-6642adf816a0',
                'name' => 'Saint Mary',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => '3aa7da86-2d76-43ea-8d33-9eb8c9189542',
                'name' => 'Kentucky',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => '3aa95bc1-bd4f-413a-9496-1d70c3ed68ed',
                'name' => 'West Virginia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => '3abe08c4-5523-4389-97ea-9ea683eacfda',
                'name' => 'Pontevedra',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => '3ac1aa10-926a-4b65-8fb6-9d3cb44a72a9',
                'name' => 'Lower Saxony',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => '3ac6bd64-0cc6-4930-9a54-4df01c5ba104',
                'name' => 'Kyonggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => '3aebbf38-5b6c-4d3b-a7c2-4ec76b6c56b1',
                'name' => 'Uummannaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => '3af85947-12e7-42ed-9b57-74964afadb32',
                'name' => 'Halkidiki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => '3af9e31f-9ecf-4532-a32a-0afd09481063',
                'name' => 'Caulfield',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => '3aff2ec9-1919-4a22-9a10-4174ec56af9a',
                'name' => 'Eastern',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => '3b3e5ab1-b5fe-4dc5-907e-d69ae5d256c7',
                'name' => 'Saint Martin',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => '3b424a26-5075-4f0d-90c5-47872c01e9a3',
                'name' => 'Ordino',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => '3b460188-2422-45f4-9864-9c59518d0936',
                'name' => 'Kanagawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => '3b46ae6c-3a1d-44a4-aa69-b739c003adbb',
                'name' => 'Zacapa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => '3b658282-179e-414f-93b8-44b48b0fb318',
                'name' => 'Hessen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => '3b7b6a82-d3f6-42cc-ac63-cb283f9915fb',
                'name' => 'Saint Lucy',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => '3b88656b-826d-482b-9a5b-078efef9ac7c',
                'name' => 'Bagmati',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => '3b9b6ebe-3835-4c4d-b4be-be53fd54d949',
                'name' => 'Nana-Mambere',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => '3bb20024-7478-4420-8158-d2ceaf58ee80',
                'name' => 'Hanty-Mansija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => '3bc818b6-fbab-4641-acfb-f98807c8657a',
                'name' => 'Zaragoza',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => '3bcace76-3367-48b0-8b18-1b63f863392f',
                'name' => 'Kumamoto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => '3bd35a92-eac4-4efe-9735-0f22bbd17411',
                'name' => 'Madinat San\'a',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => '3bd677d3-8eca-48bf-abe1-fb5e204152c8',
                'name' => 'Baden-Wurttemberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => '3be594be-20ff-4bfc-8ec9-69d82a9e0b85',
                'name' => 'Gujarat',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => '3bf6da15-7ee4-4f0e-b367-316385820ee7',
                'name' => 'Hauts-de-Seine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => '3c04c3fa-5e2f-4a37-b0a1-9957c3e37604',
                'name' => 'Calabria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => '3c0de412-ee6b-4030-b59a-bcd05b5e33a3',
                'name' => 'Taraz',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => '3c13ec2d-e918-437f-99f8-b9d73dedfdd7',
                'name' => 'Metropolitana de Santiago',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => '3c2c8e9b-0e02-44bc-985e-abe2cbd64e0e',
                'name' => 'Campeche',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => '3c63d12c-a1dc-4c8a-acc3-25dd7de3504a',
                'name' => 'Guaviare',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => '3c69ac7a-4ca2-4c41-b5b5-de5809abab90',
                'name' => 'Brabant Wallon',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => '3c7cf1ee-336e-48cb-802c-403ca654420a',
                'name' => 'Sud',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => '3c9beabb-d4ea-4692-9406-c3677e76363f',
                'name' => 'Azarbayjan-e Khavari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => '3ca10030-f026-4f10-94fb-26f55b92348a',
                'name' => 'Moscow',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => '3cb2db03-138e-4575-a7ab-b57b5c95055f',
                'name' => 'Huehuetenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => '3cbd0021-4251-4cfe-b0a4-a87830567a6f',
                'name' => 'Kyungbuk-Do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => '3cc9e766-1e50-4af3-b236-5d4bfe23d343',
                'name' => 'Sarawak',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => '3cd37d9e-cd58-442f-9ab6-fd7ea3ed57f7',
                'name' => 'Exuma and Cays',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => '3ce0c95c-7eb7-4637-8423-e7e02a691d1c',
                'name' => 'Cote-d\'Or',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => '3ceed1b4-fad5-4ea7-b488-5d30548dea54',
                'name' => 'Velesin',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => '3ceefe6f-1a69-4246-8dae-37aea5a5af42',
                'name' => 'Lorraine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => '3d00bbcd-2278-4e25-8685-2541bd09f706',
                'name' => 'Rinpung',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => '3d1a9b7a-507b-43a7-b12b-e64ef739f911',
                'name' => 'Montana',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => '3d246c71-eef0-4c82-984f-6aa904a19a4f',
                'name' => 'Orhon',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => '3d2770ed-def4-47a4-9bf2-55e0f839cd04',
                'name' => 'Santa Cruz',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => '3d395ba9-baf2-4fd4-9092-5adfb48fb7eb',
                'name' => 'Hants',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => '3d39cd4d-6692-466f-8e83-c120a5c5cf2c',
                'name' => 'Hhohho',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => '3d3c4dec-ae59-4c40-9484-916937f828ab',
                'name' => 'Natwar',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => '3d3f879c-d143-4c40-8858-c18f59f9a61c',
                'name' => 'Bashkortostan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => '3d45c99c-67ae-425a-9b84-887c0c251fc2',
                'name' => 'Portland',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => '3d47b3a8-655e-43e9-ab09-629035762b3e',
                'name' => 'Appenzell Inner-Rhoden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => '3d4af439-f359-479a-b219-f1e2a56be78e',
                'name' => 'Gawr',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => '3d743ce2-b5a0-4c36-ae89-ffc47e6b378d',
                'name' => 'Fife',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => '3d8f8ae0-6bf3-45ca-9f07-415fcd465983',
                'name' => 'Asyut',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => '3d990f5c-ee44-436d-8ad9-29245ac0d71c',
                'name' => 'Jarian-al-Batnah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => '3da810ee-2d66-4f5e-a403-926000446586',
                'name' => 'Obalno-krashka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => '3db6f15a-5373-43cb-8f8c-29b02768fe0e',
                'name' => 'Hania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => '3dc3a5c1-d542-4dac-a469-af45e714e55d',
                'name' => 'Karnataka',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => '3dc5a96c-2fdc-459a-9553-a30e5a7a5c64',
                'name' => 'Hagatna',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => '3ddde328-7c3a-42a6-972a-18180619e2ce',
                'name' => 'Sisak-Moslavina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => '3df8fb57-be65-4c2e-81fb-c38692f67c7b',
                'name' => 'Aargau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => '3dfcb81f-4063-465c-ae16-e43abd40276e',
                'name' => 'Padova',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => '3e007fa2-9aae-4d13-a77a-7334eb7201c5',
                'name' => 'Liepajas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => '3e00f14a-be07-4919-8761-7949e5231d68',
                'name' => 'Souvans',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => '3e08fce7-8ecc-4dd6-90b4-999d84e1a329',
                'name' => 'Artvin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => '3e2b8b18-642f-42e0-a2bc-3a67a526906e',
                'name' => 'Mulanje',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => '3e2c1c03-dfb6-472a-9036-af4867ae8b8c',
                'name' => 'Lop Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => '3e33d615-e80a-44d6-becd-0cbaffe9b745',
                'name' => 'Saldus',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => '3e41fc8e-bf05-44fb-ac3c-b0a2fdfa7945',
                'name' => 'Chumphon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => '3e57106d-507e-4681-be48-349e61ab8b1b',
                'name' => 'Quebec',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => '3e66de43-44ac-4bf9-b093-7996e8bd277a',
                'name' => 'Kogi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => '3e66fd07-21b4-4998-80cd-8af79fd0ec0f',
                'name' => 'Amparai',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => '3e6af9b1-7e96-4299-b4e9-c4c1c84aec74',
                'name' => 'Bauskas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => '3e6ec869-fb82-40ec-ac88-42809556fbe0',
                'name' => 'Nonthaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => '3e71e48d-52be-4e26-a558-d9527178d104',
                'name' => 'Santo Antao',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => '3e7ae72b-0331-429d-aadb-b0cdd66f5927',
                'name' => 'Paivas',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => '3e87f40d-9285-4c05-aa4f-2477e02e6436',
                'name' => 'Bioko Norte',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => '3eb05b34-a209-45bf-ae1b-a3a15b3d2def',
                'name' => 'Saint David',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => '3ebd6a3e-6667-405b-800f-03db888c31d0',
                'name' => 'Beni',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => '3ec5afd7-c46a-4381-8dd5-95a063754e8c',
                'name' => 'Haute-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => '3ee0d0bc-6525-4d27-8888-78cd34ee5b11',
                'name' => 'Aberdeenshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => '3f1f80c2-050d-48e9-bb90-79070114a2f3',
                'name' => 'Western Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => '3f21c57f-a108-4229-8a5a-10f8955a6ab9',
                'name' => 'Basse-Terre',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => '3f241ea7-e626-4a11-ac48-c24bc6228b79',
                'name' => 'Raa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => '3f247224-2b3d-4a67-8d6c-ee04ee30f215',
                'name' => 'Oxford',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => '3f3725d0-977c-4557-a193-b5a669109323',
                'name' => 'Wielkopolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => '3f558f46-7046-4629-acfd-4ebca8062a5c',
                'name' => 'Northern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => '3f56eec3-51f1-456c-8229-a4985c2748c8',
                'name' => 'Alsace',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => '3f5acb46-1cef-4b5b-ab5d-a073a83c7e88',
                'name' => 'Fulham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => '3f5c838f-3929-4511-b5f1-be9303eb6b4e',
                'name' => 'Guerrero',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => '3f6a0b60-3601-4a56-86d5-28cc4ab38385',
                'name' => 'Kompienga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => '3f7a32c7-d9a6-4749-931d-735a5f4ee3d5',
                'name' => 'Rivera',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => '3f81e9b5-65c3-4c3a-ad4c-b84405742f34',
                'name' => 'Rivers',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => '3f94598b-88f8-4c4a-97f0-111812f04067',
                'name' => 'New Mexico',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => '3fa1cb4f-41e4-428c-83d5-d545ac5b54c2',
                'name' => 'Andorra la Vella',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => '3fa4e676-2d68-4945-b460-9fdc15c5eb6f',
                'name' => 'Zlinsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '3fd586f3-5a5f-4533-a7f0-7fb1fc8a2b82',
                'name' => 'Norfolk',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '3fd6ceff-ac74-4663-b2f8-eb4878744d55',
                'name' => 'Choco',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '3fef2a69-1fde-439f-8894-12bc0d54fe53',
                'name' => 'Gao',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '3ff5b35e-a17e-45e0-9b66-c1da6ce91efb',
                'name' => 'Southern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '3ffc1535-73c1-4512-b222-1f8b89dad1c5',
                'name' => 'Santa Cruz de Tenerife',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '400de87d-8c8d-4251-a504-ca5bb4816fb5',
                'name' => 'Niamey',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '4019953f-fffc-4ca7-8077-3297d47f987e',
                'name' => 'Grand Bassa',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '40285163-e654-4b5c-b709-e4a7f0e91ae4',
                'name' => 'Vestfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '4028ef3a-dd4d-4bd2-b69e-914f62083ec3',
                'name' => 'Northern Savonia',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '403be81a-fa3f-4fb0-b48f-11fa0fcd3611',
                'name' => 'Talme Elazar',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '40869239-9186-474c-887b-480d09588ed3',
                'name' => 'Bobonaro',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '4092ba3f-548f-4907-8489-f0574991ae8f',
                'name' => 'Nahr-an-Nil',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '4093f61c-fc06-4e95-99ec-bf472d650d38',
                'name' => 'Silyanah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '40974dc6-01c8-4cd6-9e66-f56aab17f740',
                'name' => 'Nairobi',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '409ca40b-7515-4b2c-840b-9738d1b6c195',
                'name' => 'Camberwell',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '40b45657-0851-4886-a686-7137147fdf02',
                'name' => 'Kgalagadi South',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '40b75111-19f0-487d-9bc0-d85c7862788c',
                'name' => 'Kardzhali',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '40bc7190-3576-467f-812e-2c1219b00ce4',
                'name' => 'Jannnali',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '40d56eb5-f026-4581-a4ff-e6b6d19d230e',
                'name' => 'Cadiz',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '40e18b24-3259-4ff7-b418-734c38d024e2',
                'name' => 'Vysochina',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '40e35569-1219-483b-9ac9-764cbf3a03d8',
                'name' => 'Ebonyi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '40f837fd-426c-402e-8ce9-ce2f3ecc4a11',
                'name' => 'Escuintla',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '40fc4503-5536-439c-9c20-e28ca3835663',
                'name' => 'Wanica',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '41108982-d564-4c7f-a8c8-56fd73153dc5',
                'name' => 'Bologna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '413222c7-1907-4d0a-a070-d9a50ae0f7c9',
                'name' => 'Balikesir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '4138f9db-327e-4bd1-b9ef-903ca9e9798c',
                'name' => 'Aisne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '41390265-74ae-4eab-8d7d-0de0c02b8922',
                'name' => 'Maimansingh',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '41431c92-1848-4ce5-a212-4524e1885a11',
                'name' => 'Opolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '41500c7e-1742-4e10-85df-f5fa81d26e26',
                'name' => 'Teramo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '4157941c-e9d4-403c-96cb-3be4f68ce0fd',
                'name' => 'Rift Valley',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '416bfe94-5938-4b1c-931b-090b1063ab1d',
                'name' => 'Bihar',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '418d75bc-8802-4e76-b711-827104bb5b9f',
                'name' => 'Ticino',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '418e8311-2a9d-403d-a981-93229a497d07',
                'name' => 'Gharb Bahr-al-Ghazal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '41cfc2ae-5939-4b40-9352-58e625f578e3',
                'name' => 'La Condamine',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '41deb128-722a-4b37-a77a-54438ec4d6bd',
                'name' => 'al-Minya',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '41e23623-b287-43ef-b2f4-1c5ecbde5794',
                'name' => 'Ruggell',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '41e707c8-3a55-4351-8886-27db21faa3c0',
                'name' => 'Tirikunamalaya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '41ff099c-d6ab-47f9-a02c-a27ed16046ba',
                'name' => 'Cocos Islands',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '421ea2da-aa0a-498f-bf65-b1a5683198d4',
                'name' => 'Lot-et-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '421ecbf3-ba02-4e54-b6bf-ffc9924adbe4',
                'name' => 'Taegu',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '4227195c-feed-4626-9c68-13b0a4af110c',
                'name' => 'Panama',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '42288b65-d01b-4257-acf2-1ea06b14ff51',
                'name' => 'Estuaire',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '422e6901-383f-4f35-8b3c-e6e4c67cf9be',
                'name' => 'Malaita',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '42474548-8169-4207-acad-7c4f38a341ac',
                'name' => 'Georgia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '425b0677-9c58-4413-96a0-40fb873fc899',
                'name' => 'Chobe',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '426605a5-6ea7-420f-b091-93167a441cbc',
                'name' => 'Rakahanga',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '426e4a7f-e7a7-480a-92fb-f3ada909b917',
                'name' => 'Kampong Chhnang',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '4278f359-820f-4e46-8927-d875820ce1b8',
                'name' => 'Badiyah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '428e14fd-429a-4e29-b10f-272980bbd841',
                'name' => 'Belait',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '42960a6b-2970-433e-8b73-7cb116a30dc4',
                'name' => 'Eastern',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '42a30367-ec32-4dbe-abcf-4c57cac9f3f2',
                'name' => 'Melaka',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '42c06548-cedb-4ed4-87b7-44b958614537',
                'name' => 'Kilkis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '42d2dfdf-2369-4440-838e-2222f46c2704',
                'name' => 'Acores',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '42e9df64-2d65-4cd1-a07c-ebcb0b1b6782',
                'name' => 'Ohrid',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '42eb4b3b-3fe6-468c-968d-6fed67da9fca',
                'name' => 'Nor urland eystra',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '43115257-381e-4ad8-8db9-ab30777b7494',
                'name' => 'Valle',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '4320dd91-a791-4add-9d08-668806605fb2',
                'name' => 'Gaga\'emauga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '4329dc97-1cf5-44a4-ae44-249ac60b3ce8',
                'name' => 'Paysandu',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '43382d7c-5ea8-4f8e-92c6-58915c1f9103',
                'name' => 'Bangkok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '434a67dc-2bf7-48e0-925d-6e7a2e217d43',
                'name' => 'Phalombe',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '43506f95-0e61-4214-82c6-d0fb76330563',
                'name' => 'Messina',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '43827f72-4f7d-4e2b-8c4a-fb458cdd01e8',
                'name' => 'Banskobystricky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '4384d83f-5e64-4e47-844f-b2ac1361590f',
                'name' => 'Soeborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '438e2381-bc60-4908-990b-4735fa2bbc43',
                'name' => 'Komi',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '439559dc-9e41-45b4-99f3-0cc8fb656c8e',
                'name' => 'Rethimni',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '43c1d9ee-01d3-469c-a276-e62a6e370e62',
                'name' => 'Saint-Laurent-du-Maroni',
                'country_id' => 'bc69462b-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '43c1ee89-b46f-4849-9705-739a7b474138',
                'name' => 'Saint Patrick',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '43e63214-9525-4a2b-b818-c07aed38f22b',
                'name' => 'Kyeongsangnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '43eaefb6-b6c1-4c1d-8217-fe470b5c3e09',
                'name' => 'Stann Creek',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '43f456c5-1339-42dd-a4e8-98833e3c4918',
                'name' => 'Puglia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '43fe8b0e-a728-434c-b56f-2691a2846be5',
                'name' => 'Kent',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '4417fc91-8e56-464d-884f-fb073510a794',
                'name' => 'Qom',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '4427105c-fb41-4c06-adef-0fea90372a37',
                'name' => 'Huila',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '442c0b3f-304d-4294-a57b-d7aa8031c9e7',
                'name' => 'Tarragona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '4438f89d-1462-4bb4-b612-9466caf47c94',
                'name' => 'Amasya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '4445feed-d976-4ecf-816b-6bdc0183ae53',
                'name' => 'Sharjah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '444a654f-5116-46f0-a202-f46837c5906f',
                'name' => 'Moyen-Cavally',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '444f7475-8ede-42ff-b3a9-950875adf9eb',
                'name' => 'Nevada',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '4451de07-de21-45eb-ad04-9025f185e400',
                'name' => 'Fezzan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '4455ac82-cc51-4421-90ea-4367e155a329',
                'name' => 'Faranah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '4459ce52-9a8d-4855-a271-70c75cd0748e',
                'name' => 'Upper West',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '4466a6c6-8ac0-40f5-a651-7b38f5faa26b',
                'name' => 'Hakasija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '44753bd3-b48b-4b95-ac85-e390a5079bb2',
                'name' => 'Pais Vasco',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '447c9be8-742a-48c1-9914-935db08fbfd8',
                'name' => 'Canaries',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '448e020f-04b4-48cc-a1c4-a8b45f404647',
                'name' => 'Dayr-az-Zawr',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '4499f914-d1b2-4889-8ccf-9e20f0be84b2',
                'name' => 'Tangayal',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '44a2d5f5-9db6-4642-b585-20bd635c6444',
                'name' => 'Kyeongsangbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '44a6b4d3-d222-4171-8149-4ac89dfcb18e',
                'name' => 'Sissili',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '44bb328c-5efd-4381-8cdf-4cfdb3a56880',
                'name' => 'Fria',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '44d23b4a-cfcb-47c0-9b73-d7f18495d28a',
                'name' => 'Jhalakati',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '44d6d132-b847-4c80-9900-583123ba18cc',
                'name' => 'Kuala Lumpur',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '45257663-00af-4156-8d6b-78812ca0bcc4',
                'name' => 'San Miguel',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '454031bb-4898-4a0d-98fb-5dcd456505dd',
                'name' => 'Tafea',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '45442ccd-3505-4763-909a-d0fefc608b17',
                'name' => 'Allier',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '454abf3f-ea2d-4a55-b2ae-992ffc5df529',
                'name' => 'Limon',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '454d05b0-930f-445a-aa8f-bde8ad4e90ed',
                'name' => 'Vest Agder',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => '455de72b-1a33-41f4-ba42-ac087dc17a9f',
                'name' => 'Leraba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => '458d3be0-5912-4569-ba2d-00224ebd9b8c',
                'name' => 'Qandahar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => '4592bc69-2c78-459c-820b-f91a127f70de',
                'name' => 'Chaiyaphum',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => '4594fa6e-bcf2-44f7-9760-c5b17321aad2',
                'name' => 'Kharkov',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => '45a19489-16a1-4a46-af5e-a3fbf9c12323',
                'name' => 'Mishref',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => '45a2f314-342a-4298-a695-77c391ff6fab',
                'name' => 'Udmurtija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => '45a40e77-ad86-4c40-92c5-fd41b9ee79d1',
                'name' => 'Tamana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => '45cdcacf-3a5a-4c0b-a380-ceb998e301af',
                'name' => 'Saint Peter',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => '45d46017-2b64-4fb3-856d-6b1980cce8df',
                'name' => 'Essex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => '45d5514b-234f-4b6b-b8e3-922d5da66092',
                'name' => 'Preilu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => '45f4b849-655b-44c9-99a2-411f4b43a7c5',
                'name' => 'Ogooue-Lolo',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => '46153c35-7b41-4b14-9fda-3ce041b1599b',
                'name' => 'Chuuk',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => '463da15e-ce93-4538-9a41-390b79fa5340',
                'name' => 'Bjelovar-Bilogora',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => '4641f29d-e210-4a5a-94f8-3b6dc98a5502',
                'name' => 'Matale',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => '464e0599-76ef-4de2-9330-76fc31b3c965',
                'name' => 'Ngiwal',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => '46574a76-ceb8-434f-a5dd-46f824884fd8',
                'name' => 'Verbano-Cusio-Ossola',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => '465df44d-ae68-4bce-92e0-add45e2d7746',
                'name' => 'Istanbul',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => '465f2aef-6985-47a2-87bc-530a734498a7',
                'name' => 'Zonguldak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => '466f7b45-571c-4f43-a672-4e80cf13c643',
                'name' => 'South Caicos and East Caicos',
                'country_id' => 'bc69fc19-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => '468a1ffb-3041-4087-871a-ad2c64c6bafb',
                'name' => 'Tinh Gia Lai',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => '468e6ee3-681c-4d37-9876-826f9d1e1160',
                'name' => 'Aube',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => '46a20523-3c4b-4445-ac91-b8a26c8bd28c',
                'name' => 'Horazm',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => '46b18f9b-0da5-4309-9bde-317a6c69cce2',
                'name' => 'Niedersachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => '46b26d2e-5562-4ef1-8382-03f867745de6',
                'name' => 'Itapua',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => '46cd4ebe-af9c-4699-a131-8184d4cce82a',
                'name' => 'al-Hudud-ash-Shamaliyah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => '46ceb8b0-0b62-4ef9-8c04-14891bd8851d',
                'name' => 'Acharnes',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => '46d553b4-a28e-44ed-8c60-39cf56eb81ff',
                'name' => 'Aruba',
                'country_id' => 'bc690f9f-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => '46d7e90c-0e1d-4ae3-bf07-14897e5078cd',
                'name' => 'Alo',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => '46da6e5a-e499-405e-bff2-15e0f922becd',
                'name' => 'Ivano-Frankivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => '46ded3ef-0a57-4496-aecf-0af44a00d208',
                'name' => 'Xanthi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => '46fbb58e-c51f-4f5f-b31b-93f098247de0',
                'name' => 'Stepanakert',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => '4726a750-734f-4037-9b6a-e6d3f622e341',
                'name' => 'Priaraks',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => '47312c24-4072-4fad-922e-27a8eab35c03',
                'name' => 'Maiana',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => '47345c6f-431e-44db-90af-8a5c3b99fe9e',
                'name' => 'Central Serowe-Palapye',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => '4748d3a5-ad22-41d7-b29b-24c127edc59f',
                'name' => 'Pulau Pinang',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => '474c5241-a2fa-4fd3-af8e-5d72a64f6fe1',
                'name' => 'Kasai-Occidental',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => '475498db-3c54-4acd-928f-1528adec9208',
                'name' => 'Nomos Attikis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => '475b2300-a05b-4e0b-ab52-45ce46d84ccf',
                'name' => 'Khu Bon Cu',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => '4771f95b-5c3c-40b1-b217-4e25bdde07b4',
                'name' => 'Ancash',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => '477d12a5-3af1-422c-b2cd-cd7be8513d61',
                'name' => 'Groningen',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => '478588a2-7fcc-4b76-bc77-ed392d2a9c0b',
                'name' => 'Midlands',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => '479fa42b-392a-40f1-91c1-2ee7be054561',
                'name' => 'Central Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => '47a1aebb-b250-4638-ac43-f45b57f4f6b1',
                'name' => 'Olancho',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => '47b52170-2654-4ff4-bd8c-9ff1762fc7dd',
                'name' => 'Chongqing',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => '47bc8293-6f74-4f3e-9f71-b6588eb2f1d1',
                'name' => 'al-Jazirah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => '47bd3f90-0659-49d2-aa16-8030961cd586',
                'name' => 'Doubs',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => '47dc8a0d-6a3e-42f3-b25a-a44b5a022a14',
                'name' => 'Barima-Waini',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => '47e841a0-b4f9-40ea-9819-0b4820f3d45e',
                'name' => 'Phuket',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => '47fc4817-1fe1-4dad-a262-73f45063bc86',
                'name' => 'Sinoe',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => '48008b9b-ed37-4f21-a9eb-5088c830d42a',
                'name' => 'Loffa',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => '480b6171-91b5-4977-9471-84f2a0544d4f',
                'name' => 'KwaZulu Natal',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => '480b832c-123d-4e8c-867e-361daccc07ef',
                'name' => 'Edo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => '48206129-86e4-47e8-a1ca-c54d01b4143d',
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => '482d743f-0c0b-42dc-bbca-463dc740e4d0',
                'name' => 'Haryana',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => '483e5d61-db0d-4de0-990a-12ef92a61fcd',
                'name' => 'Jammu and Kashmir',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => '483fa1e0-a280-466a-81ad-c78039e05877',
                'name' => 'Victoria',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => '48454ab3-22fe-49cf-9748-49024d0be53c',
                'name' => 'Kolonje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => '4854178a-ec8a-407b-80c3-191d206b0cb1',
                'name' => 'Kurbin',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => '488fc7fa-be65-4c9a-8e12-1a4a86928f69',
                'name' => 'Basel-Landschaft',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => '4896f4d5-c60d-4c34-b14c-83a7df23dd93',
                'name' => 'Ariege',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => '48977c4c-bcde-4d91-80fe-299a24f0b95f',
                'name' => 'Ludzas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => '4898eb03-558e-43d6-bbd1-1fc35417f633',
                'name' => 'Brechin',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => '48be4aad-69b6-47bb-bd27-728c066d8a77',
                'name' => 'Ajdabiya',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => '48c5dcc4-2737-401a-ae4b-cba57a07d0ac',
                'name' => 'Pitcairn',
                'country_id' => 'bc69eda3-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => '48de45ad-34ce-42a8-ab2d-f183d2ee4a94',
                'name' => 'Central Equatoria',
                'country_id' => 'bc69f169-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => '48fca01b-af3c-451e-aaf5-994e0c79eddb',
                'name' => 'Telemark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => '49119814-f86b-43cf-b3f1-583dbca3feae',
                'name' => 'Prachin Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => '4929c02d-f8d2-4377-9375-1edb9298856d',
                'name' => 'Est',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => '492a095f-6e6e-42b6-baee-40b6d11843d5',
                'name' => 'Caaguazu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => '492aefd8-5b62-4338-aa51-513a2fb4a8c2',
                'name' => 'al-Iskandariyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => '492ddc8f-96b0-4439-95ef-b3d02d2cd50b',
                'name' => 'Ankara',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => '4932c183-6d74-4f3c-82ce-469becc60e88',
                'name' => 'Yasothon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => '4936631d-8751-4950-953c-db76f72368e3',
                'name' => 'Laois',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => '4939eaae-1ec7-42ee-bc6d-e3e7ab6c24b1',
                'name' => 'Oberosterreich',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => '494a6d31-6b53-4fc2-b753-67746883ca65',
                'name' => 'Qafsah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => '494cf92f-44a1-4132-91b8-f7de5f9df921',
                'name' => 'Abhasia',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => '498889e6-ef39-4263-83f9-c4e888edeb6e',
                'name' => 'Aktobe',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => '4989a08f-e5c8-4ced-b37b-7121b7583e68',
                'name' => 'Luang Prabang',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => '498e9163-9694-4572-8a0b-8e2c08f6c1a8',
                'name' => 'Akershus',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => '4998ec18-cc18-43d9-844e-550897179cae',
                'name' => 'Thesprotia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => '49b263db-a95d-40df-bb3e-b6444a160683',
                'name' => 'Sao Tiago',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => '49d35262-8336-430c-a0b5-7a96924d663d',
                'name' => 'Vilniaus',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => '49df95d4-c4b9-4702-8fe0-5d5ed26651f2',
                'name' => 'Sliven',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => '49eb3fbc-79af-4ed7-876e-11b73ad7104e',
                'name' => 'Aranuka',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => '49fdef3b-67e5-46e4-ab54-d5781e7ea4a9',
                'name' => 'New Brunswick',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => '4a21532f-e4de-4142-95aa-f06ff86cf27f',
                'name' => 'Bethlehem',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => '4a24c07e-556b-4ea9-858a-56c59b240aba',
                'name' => 'Hertfordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => '4a2ac3b8-9535-429b-9a36-5104d0a3ee83',
                'name' => 'Bonaire',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => '4a2cd8f5-d042-4eec-be92-41c61333524d',
                'name' => 'Chihuahua',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => '4a30ff0b-9b05-48b2-aa2d-d1568532e915',
                'name' => 'Sevilla',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => '4a433a72-d136-43c2-9dd1-7c62326f5c9c',
                'name' => 'Lori',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => '4a49b83d-c1c4-40a8-82f4-65fd5725e052',
                'name' => 'Thyolo',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => '4a6e47c6-5ab0-4b64-9a20-6c9b89bd8e9e',
                'name' => 'Nagasaki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => '4a6f39d3-bcf1-472e-85fc-b18437e29ce6',
                'name' => 'Yamaguchi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => '4a7355f4-1984-4851-b2a5-13cd07ab6bc7',
                'name' => 'Saitama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => '4a814911-cc94-41e6-9fe3-068f515f6351',
                'name' => 'Knoxfield',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => '4aa27caa-0287-495e-9eb6-584d8cdeec7e',
                'name' => 'Bulawayo',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => '4aa6dbd5-e175-4bf3-a307-d1f84be08ce0',
                'name' => 'Rocha',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => '4ab3d24e-2e83-4b08-823f-870de25280fc',
                'name' => 'Ruhengeri',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => '4ac282d6-2a09-4a34-8a9b-581e01430154',
                'name' => 'Potaro-Siparuni',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => '4ad8ff60-4874-4a60-a430-ce1052a666eb',
                'name' => 'Choiseul',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => '4b03d958-01b1-47a5-b4a0-72290f70ca5e',
                'name' => 'Isere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => '4b1445f8-a839-4152-9c66-84923cd0cb6e',
                'name' => 'Kabardino-Balkarija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => '4b2fe198-c822-48fb-920d-68f110db62a5',
                'name' => 'Bajah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => '4b3283f7-7a0e-4b4b-98da-314f7d88e4a4',
                'name' => 'Assam',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => '4b51966a-0114-4067-bcbe-309ff4352a70',
                'name' => 'Zhejiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => '4b52e3d5-2f70-4f57-beb5-9f4d645a6e21',
                'name' => 'Ponce',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => '4b5b9a65-2e52-4172-b4e8-4d8d285dd684',
                'name' => 'Verona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => '4b69ecd4-b85f-42a8-9697-dc322884f43f',
                'name' => 'Cesu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => '4b822dac-088b-4e8b-8c7e-50694e330970',
                'name' => 'Phongsaly',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => '4b85d4ee-0360-444f-8147-781d2a6fe44f',
                'name' => 'Missouri',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => '4b9fca64-4b20-4fb7-adb0-dc19d835a9a6',
                'name' => 'Collingwood',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => '4baafd37-c9bd-4313-9325-d160e2c8afcc',
                'name' => 'Castle Hill',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => '4bab31a9-8103-450f-8447-b9e5e646e8ce',
                'name' => 'Buenos Aires',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => '4bacdd43-6775-4d09-b34c-23eb3e86bd87',
                'name' => 'Zanzibar and Pemba',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => '4bb4e093-5795-46d7-b6ee-5770dcc8ab48',
                'name' => 'Ardahan',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => '4bc0686a-ed26-4207-8a6b-476cd82b0485',
                'name' => 'Galgudug',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => '4bc2f89a-2a23-47dd-a819-9559a1c0646f',
                'name' => 'Musandam',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => '4bc99c2f-4e13-49d0-92d9-10f0294539dd',
                'name' => 'Muhafazat al Gharbiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => '4bcff51d-e38d-49bf-b45d-5bbee53b7030',
                'name' => 'Vojvodina',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => '4bebec68-3015-498c-9978-42c9a5db1f4b',
                'name' => 'Huila',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => '4c045ad6-cacf-4cbc-87ec-0feb9918c3d7',
                'name' => 'ash-Shamal',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => '4c0acc5c-7a1f-4f44-8cfb-fb9b99b5682a',
                'name' => 'Gouvernorat de Nabeul',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => '4c1e0501-6cb2-4b6c-b319-905901bf1b36',
                'name' => 'Ang Thong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => '4c1e47dc-9d4a-4d24-914e-4fed20b95dd0',
                'name' => 'Riga',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => '4c34da7b-f934-4ecc-9613-fcf2468b4efc',
                'name' => 'adh-Dhahirah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => '4c45e5c9-6c94-47a0-a996-9888332b76b7',
                'name' => 'al-Fayyum',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => '4c475080-ca78-4148-8d9c-d1f3e8b5bb90',
                'name' => 'Tbilisi',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => '4c4fe41e-0f8c-4d1d-8106-39cbfc4e91f1',
                'name' => 'Champasak',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => '4c6a0732-202d-4677-8ee9-41524eceedaa',
                'name' => 'Gamprin',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => '4c7dee63-0ed3-41c2-aabd-5296effe0016',
                'name' => 'Nord',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => '4c8d83bf-7488-495e-ac66-473c56efb614',
                'name' => 'Redange',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => '4c8f4dfe-2d7c-4cca-8594-d43a1e6ec1e7',
                'name' => 'Roskilde',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => '4ca12c07-2b41-47a6-bfff-0e9259e9aa14',
                'name' => 'Inagua Islands',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => '4cb08480-b6cb-4e40-b089-76454c958960',
                'name' => 'Binzart',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => '4cb835f8-c73e-45cf-b79a-799953082fa0',
                'name' => 'Samut Songkhran',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => '4cc729cd-0363-413b-bce3-b30bccab5c80',
                'name' => 'Brod',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => '4cee3050-af36-408b-b7fe-4d1789be1704',
                'name' => 'Yomou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => '4cfa94da-4130-481a-8be2-aa1f35a53de6',
                'name' => 'Chui',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => '4d08a8ad-bdc2-471c-bed4-d2433f8dbe38',
                'name' => 'Zinder',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => '4d1bc1f0-db90-4ba7-a15c-0ab2a5506072',
                'name' => 'Munich',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => '4d4849f5-eb47-4e86-a55a-ef458236b732',
                'name' => 'Xacmaz',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => '4d74325d-f5d6-4c88-af4b-266ad6e904b1',
                'name' => 'Noumbiel',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => '4d8516d7-14c9-4302-962a-14563a2fe20e',
                'name' => 'Atlantique',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => '4d8e44dd-fa8f-4ba2-9388-728b66d6439e',
                'name' => 'Volgograd',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => '4d96a6e6-1bd4-446c-8fd5-e5e653281baf',
                'name' => 'North East',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => '4da16d7b-dee2-4450-90e9-c2a16c5af090',
                'name' => 'Osterode',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => '4da3c881-d9a4-4183-82dc-0d050ddf0fdc',
                'name' => 'Bangui',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => '4db8907f-9d27-41ff-8c2e-57749d53e115',
                'name' => 'Distrito Nacional',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => '4dc8be8f-dfb5-4d6b-8fba-f585949f3112',
                'name' => 'Pinar del Rio',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => '4dd5d10b-dd13-4483-873e-bd1bf84ce170',
                'name' => 'Shizuoka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => '4df878e6-730f-45e9-ad4c-4bbe3ff28ee0',
                'name' => 'Distrito de Viana do Castelo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => '4e0b6686-e392-4351-8f33-f43ce037b6bb',
                'name' => 'Trikala',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => '4e1ef804-3994-4efb-9632-7f95c7fefb6e',
                'name' => 'Janub Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => '4e2af69d-3a0b-4d33-82ee-e6d809d8d3ce',
                'name' => 'Punjab',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => '4e5d7397-7fd3-46d0-88bd-aac12e357704',
                'name' => 'Kostanay',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => '4e716559-c6c0-4539-84d6-fd456b9de49c',
                'name' => 'Istra',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => '4e7547f3-a98a-41f3-98a9-39c81b20f14c',
                'name' => 'East Flanders',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => '4e7bd901-9277-406e-952c-e4eb0ccd6973',
                'name' => 'Jibuti',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => '4ea487a5-b6cd-4e97-86d0-6b65290d2ea9',
                'name' => 'Berkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => '4eaeeefe-59d2-4578-a9bc-0d1093383033',
                'name' => 'Erongo',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => '4ec47e24-7090-43e4-80ee-1bdd44bb50d8',
                'name' => 'Dalaba',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => '4ed8ef88-2098-4c90-bf15-2855fe4255dd',
                'name' => 'Commewijne',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => '4ed99ef7-8a8a-49be-9d68-e02fcc7c9759',
                'name' => 'Libertador General Bernardo O\'',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => '4efc0173-9dbb-439b-bcbe-cf877e737d3d',
                'name' => 'Luanda',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => '4f015834-a857-43af-92d1-da1ea1398759',
                'name' => 'Haute-Kotto',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => '4f0b4342-fdeb-4122-b045-4dac6ea463fe',
                'name' => 'Sind',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => '4f1a3cd7-1cf3-4e3a-a291-99ea3b0a8a3c',
                'name' => 'Qaanaaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => '4f5014d3-1ee3-4eae-9edf-d250a2151f07',
                'name' => 'Jambol',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => '4f5504c6-ea7e-4d33-acff-bb61f11123ea',
                'name' => 'Maharashtra',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => '4f5e2eae-e544-4e48-a1b3-c0f4421617bf',
                'name' => 'Kandal',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => '4f6359ab-656f-439c-adb6-b5428a77d01e',
                'name' => 'Lola',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => '4f6f8708-cdac-4251-bc5e-0b9224633c1a',
                'name' => 'Mafeteng',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => '4f99b05a-316b-400b-8fc7-99c61f0398bb',
                'name' => '\'Ajlun',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => '4f9fab79-4b7a-4665-b4ca-ac85834441f8',
                'name' => 'Yoro',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => '4fa2c991-8c7e-4b7a-bb6a-fa963f89de32',
                'name' => 'Ayion Oros',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => '4fa5a8ef-35c2-4048-80f9-f18f37479579',
                'name' => 'Val-de-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => '4fbb9c10-2b86-4435-a125-67fb3d679c8c',
                'name' => 'al-Uqsur',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => '4fbf4734-4fed-4640-9130-41f51c2719c3',
                'name' => 'Sinop',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => '4fcdfa0c-207a-4e7d-996e-9d2ae6fa8443',
                'name' => 'Johor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => '4fd242be-3de9-4902-a002-083288b5ee21',
                'name' => 'Taranaki',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => '4fdc998b-ab83-4d1e-8b60-3d905531afbc',
                'name' => 'Hilmand',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => '4fe146c4-1cd1-48b1-a218-a31b72326d81',
                'name' => 'Split-Dalmacija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => '4ff0c5ad-db8e-433d-bd9a-757d8e931971',
                'name' => 'Central Boteti',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => '4ff0e67d-1384-4a0b-a024-e182323f0606',
                'name' => 'Brahman Bariya',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => '500577e9-f01f-4141-b722-074fda9a41d5',
                'name' => 'Cerro Largo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => '50098502-caab-432a-aa56-b1840f257466',
                'name' => 'San Luis',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => '502b6318-366d-4fd2-893f-918cfc925d65',
                'name' => 'Abyan',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => '502c353d-80bc-4dbc-81b7-cff1d7105b15',
                'name' => 'Stueng Traeng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => '502d6a31-cbf5-4eb4-b164-ef32e064fcfb',
                'name' => 'Salcedo',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => '502fdda8-2cd4-4f41-8dc5-6a10e07973e1',
                'name' => 'Pastaza',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => '505823cd-9123-4f03-8184-7e8684b0e6a1',
                'name' => 'Piemonte',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => '505bdfa6-d277-444d-895b-abc346d27eeb',
                'name' => 'Bahoruco',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => '5067a26b-2033-4f58-801e-c054e96620e2',
                'name' => 'Govisumber',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => '507c1a5c-dea0-4ab1-9dec-9ab4c0f0133c',
                'name' => 'Bouches-du-Rhone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => '509ffee8-18bc-4370-a4b1-8a8a891aed60',
                'name' => 'Samdrup Jongkhar',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => '50a6cb74-4bcf-4a9f-be64-3a60c7589b49',
                'name' => 'Khawst',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => '50bcc318-9d0d-4c09-bb64-f17f9365a900',
                'name' => 'Hsinchu City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => '50c776e0-8557-4656-b71f-e812f5681418',
                'name' => 'Batangas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => '50d3d201-7b3a-4600-9f4c-1cd4a3981057',
                'name' => 'Lumbini',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => '50d9aa07-50df-475c-bad7-fa999609c246',
                'name' => 'Sina ash-Shamaliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => '50da6ff8-c46d-4c16-b72b-edf0467aaff9',
                'name' => 'Altaj',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => '50fca7f0-e648-4d64-8ff9-7b8ab1592ee2',
                'name' => 'Braga',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => '51083fa6-27a0-48d0-9dcd-e913a86b5815',
                'name' => 'Denbighshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => '51172ec6-7f85-44b3-9737-c338bb399e7d',
                'name' => 'Dhamar',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => '5133e7bf-5f29-4946-ac4b-012843afd855',
                'name' => 'Thu Do Ha Noi',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => '51353ba6-fbc3-46aa-bc07-e23e11ea064c',
                'name' => 'Pando',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => '516a2234-293f-4f0c-88b3-2bcbdf4cb3f0',
                'name' => 'Baucau',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => '516d81d1-be23-4a3b-83c2-c3281b557d3d',
                'name' => 'Vaslui',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => '518b7c9c-850f-4949-b8b6-79a4dc705907',
                'name' => 'San Marino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => '518c499d-2f93-4560-bb60-b7ca90609562',
                'name' => 'Ventspils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => '518cc476-d956-48a9-96a8-cbca387dd442',
                'name' => 'Sandaun',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => '518fc7a6-8d83-4c7a-bc02-7375fa17149d',
                'name' => 'Alava',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => '5192d1aa-43f2-4dad-8054-c00ef7f7870d',
                'name' => 'Tobago',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => '51b65da8-7b8c-4dab-9018-9e070633883a',
                'name' => 'Port Louis',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => '51bfb0b7-12f9-4171-a8de-54f96e607eb2',
                'name' => 'Kirov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => '51da7117-3f07-42f0-92e7-2625fb2351cc',
                'name' => 'Jura',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => '51ed6668-5a75-41af-ac11-40e56f80678b',
                'name' => 'Burgundy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => '52286d6e-374c-40d9-ba17-4f8d805b796e',
                'name' => 'Batha',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => '52352d73-48e0-4aaa-a2d9-610e19abe42d',
                'name' => 'Ahuachapan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => '526a2a68-be35-4d22-9a42-8b3ada4674ec',
                'name' => 'Fukui',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => '5279f546-2d2b-44a1-bf15-9e9eb3454633',
                'name' => 'Berlin',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => '5280c06a-a2dd-4ab3-8e15-b31b59ac1579',
                'name' => 'Tarn',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => '52985cfb-dcef-4a58-a9d3-c71ff4884cac',
                'name' => 'Riau',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => '52a47599-4a9c-4c96-9633-766da17a2610',
                'name' => 'Tavastia Proper',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => '52a761df-a1b5-4d8f-bf6b-ae1d2a149979',
                'name' => 'Clervaux',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => '52aa990a-54af-4150-8d2e-6ef00c45f303',
                'name' => 'Saint Luke',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => '52ab82f7-9d71-49df-b85c-f6d892b86e7d',
                'name' => 'Bajanhongor',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => '52bddf93-0a2f-4db9-b783-3dd17c149d5a',
                'name' => 'as-Samarah',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => '52be2a09-84c6-4fa0-8a0b-6c20bace1afc',
                'name' => 'Asir',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => '52c5574b-6afb-426d-9a0c-6c45ef9c242f',
                'name' => 'Valparaiso',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => '52cdb388-5570-4106-a582-114222aa99df',
                'name' => 'Butha-Buthe',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => '53079509-b4ec-4a95-baca-40eb564851cf',
                'name' => 'Caceres',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => '53131365-0e3c-459d-b6e1-86bbb5284224',
                'name' => 'Liquica',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => '5317668a-6388-4a92-a657-98f8b23ed960',
                'name' => 'schlobborn',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => '5317787a-0bf7-416b-8fa5-f47f39ec3157',
                'name' => 'Chalatenango',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => '5325d892-d352-4d37-9a8d-53008d574bcc',
                'name' => 'Grenadines',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => '53376c31-ea9e-4cde-bb77-f3682ddaae0a',
                'name' => 'Lecce',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => '533c2d68-02e8-4e54-93a5-44fcec7e8fdb',
                'name' => 'Arequipa',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => '53474073-7576-4c2b-82a5-3806fa0c9f62',
                'name' => 'Monastir',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => '535b4348-5e62-457c-bef5-562e93e604b2',
                'name' => 'Oueme',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => '5376f3d5-70bd-47a0-959a-ee06386f16ff',
                'name' => 'Tabuk',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => '5382cfa4-8049-42eb-889a-5b76523a71c5',
                'name' => 'Dublin',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => '5385ae08-3405-4344-ac9e-80759cd5e8f7',
                'name' => 'Le Creusot',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => '53963255-8cca-49d9-90cd-de2a1d263786',
                'name' => 'Racha',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => '53abc203-22ce-450d-808c-a86077d52b49',
                'name' => 'Sector claimed by Australia',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => '53c2d6c7-b6f2-4a9d-a86a-435701c24517',
                'name' => 'Table View',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => '53c6107b-1d3e-4a0d-8426-a10f356ca45e',
                'name' => 'Seine-Maritime',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => '53d115fe-7884-413c-a5f8-a48affa90699',
                'name' => 'Attiki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => '540a15b3-998c-4f64-818d-efa39a9eb929',
                'name' => 'Berry Islands',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => '540cc3b8-0130-4c0b-a091-69f4e48f3b19',
                'name' => 'Coronie',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => '5410d481-c890-443e-9828-a8cd81017695',
                'name' => 'Greater Metropolitan Area',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => '54348fef-7015-45d9-814f-3e85e3abf1ba',
                'name' => 'Misiones',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => '544304c1-5e0d-48bb-836d-9db8a49ca3e4',
                'name' => 'Penama',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => '54783303-7d00-4e81-9de8-72d695fa8480',
                'name' => 'Talas',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => '547d882d-5022-4ca5-a392-4d96837e9a22',
                'name' => 'Centro',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => '54b7aeb8-3e33-4197-ac83-55aa2315fb3e',
                'name' => 'Kerguelen',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => '54d2268a-f0c4-4cf6-b58b-e80f6c0530c6',
                'name' => 'Hamah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => '54d5d2bf-66be-4e25-a744-771b6b4cc576',
                'name' => 'Dhawalagiri',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => '54e2f3e3-72c5-45f7-be28-a92e9b77eaaf',
                'name' => 'Babil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => '54f16075-b67b-44a3-8bd6-f22d654164c7',
                'name' => 'Monagas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => '54f2cfa7-aae6-4ac2-bd2a-5fa75afdea16',
                'name' => 'Siguiri',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => '55038d89-ca84-4766-a77b-5c2604916bdb',
                'name' => 'Qeqertarsuaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => '5531b81a-7da0-4666-b2a9-6393c49c4e19',
                'name' => 'Brjansk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => '5536c967-6c89-4428-8719-e7a21146193b',
                'name' => 'Vukovar-Srijem',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => '553c2c44-401f-4bb1-8f13-e0f1ecadc285',
                'name' => 'Kosicky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => '55468dbf-89be-4b72-8f66-1b108c6153b4',
                'name' => 'Sud-Kivu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => '555c6a76-f0ac-4dec-b8e3-7ece872d80a0',
                'name' => 'Wasit',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => '5562419c-685b-4da5-afa1-8326c8aea2bf',
                'name' => 'Antwerpen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => '557d27b6-bc23-453f-81c3-3d406c92ac5a',
                'name' => 'Sughd',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => '55a22d30-72fe-4590-bb67-d966f893f6fb',
                'name' => 'Vaud',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => '55b77e22-b2ae-4937-9b0f-1e2a4fd4089d',
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => '55c1c89e-b168-48ea-b71f-85caa6589354',
                'name' => 'Amapa',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => '55cca1b3-c1ff-4e42-b7a6-ce1805a51106',
                'name' => 'Boyaca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => '55d170cb-979c-46c4-a1f6-3f1b5c8648d4',
                'name' => 'Idlib',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => '55ee066a-2729-4102-ac03-6b4bc255cc4c',
                'name' => 'Minas Gerais',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => '55f09efa-f416-4969-9b66-36454215d8f4',
                'name' => 'Bakol',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => '55fe5b40-9d8e-4b4a-8622-8ed3768e7226',
                'name' => 'Batman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => '5602cd6e-dc45-4930-b62c-a3d9ba201c72',
                'name' => 'Hudh-ash-Sharqi',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => '560508af-d5c8-4ac8-8dfa-e0e4d5744b90',
                'name' => 'al-Qasrayn',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => '562752ec-9eef-4d24-86a8-22f8ba049f04',
                'name' => 'Manikganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => '5630679d-6f91-44c3-b0cc-0622b25e3094',
                'name' => 'Singida',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => '5646d669-0461-4ec3-83f4-dce5dba7a05f',
                'name' => 'Udenfor kommunal inddeling',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => '5658859a-661a-4de9-afb2-cc144db80f8a',
                'name' => 'Cuscatlan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => '5658f469-f02c-44ef-9553-89e9a063aa05',
                'name' => 'Milah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => '565c8140-2a9b-4dde-8ed8-557ea86bf162',
                'name' => 'Val-d\'Oise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => '565de676-ccef-4c1e-9a68-2be5c0a98675',
                'name' => 'Loch Garman',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => '566e3ae4-28c2-4f64-ba5e-2102e117cde5',
                'name' => 'Sidi Bu Zayd',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => '566fa1bd-b0c7-4ebd-a09f-f396a4a4cdd2',
                'name' => 'Samsun',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => '56720c0b-310a-4ad2-ac36-d64452228f63',
                'name' => 'Kalimantan Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => '5675060c-11f9-40bd-a04a-bef3c5120c61',
                'name' => '\'Isa',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => '5679f592-178f-482a-b98d-c0e3e1f471c2',
                'name' => 'Golestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => '567ddda1-3ffa-4f5f-ad93-47c476484f4c',
                'name' => 'Tyne and Wear',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => '569226b6-ad5f-4eb1-82f6-a5d679b97865',
                'name' => 'Boqueron',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => '56a4ea85-e32f-4159-b544-2299a7ddc82c',
                'name' => 'Dorset',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => '56a9d252-5fec-4676-862f-20548aa63343',
                'name' => 'Taranto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => '56d4e376-4b1d-4e3e-89c3-1463c4fde7f0',
                'name' => 'Tahoua',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => '56e2ecbf-c9ba-482f-8e29-22a5f6287e4f',
                'name' => 'Ioannina',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => '56e4fdec-6826-4704-acd9-ff5a4f27ae21',
                'name' => 'Co Fermanagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => '56ea3b1b-c1b5-4c6b-b41c-1b2c83ec0cec',
                'name' => 'Pyeongannamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => '56fcb7a5-088d-49fe-a914-c45cda45fa31',
                'name' => 'Imbabura',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => '57097ac3-7143-4399-986d-3304194d55f4',
                'name' => 'Northern Islands',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => '57266e23-28de-4db8-a17c-24fe32bbed44',
                'name' => 'Cornwall',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => '572acfb5-ccda-4235-b7f0-948ec21890b3',
                'name' => 'Kuna Yala',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => '573110f3-f90e-483f-936e-ba4955a01f20',
                'name' => 'Gansu',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => '5752a5d7-03bf-4ccd-b86c-49fcc5909f77',
                'name' => 'Haut-Ogooue',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => '5765a76e-02bf-4ed6-acbd-377cac1412cc',
                'name' => 'Kochi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => '576e95a9-02e2-4086-a7cd-9297a3c6a6f3',
                'name' => 'Hadaron',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => '578f1d30-6d88-419d-882c-aea5a31dd823',
                'name' => 'Covasna',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => '578f8f86-8200-482a-ab67-9f512c311f36',
                'name' => 'Lombardia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => '5798af95-fa32-403a-a025-82beec4f3362',
                'name' => 'Arhangaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => '579ad125-2b4b-4609-8eb0-1c70e3dbc592',
                'name' => 'Collines',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => '57a39bec-666a-4a5c-b3d6-59cfef07a85c',
                'name' => 'Gaaf Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => '57a5c603-9eef-4c9d-9c20-994099be0ce8',
                'name' => 'Caesarea',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => '57a682ca-821d-48cf-ae37-e23a799eed77',
                'name' => 'Bicol',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => '57ab6984-47f4-4178-9b4e-25096bd93f6a',
                'name' => 'Taza-Al Hoceima-Taounate',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => '57ed2b8a-4dcb-4f83-89c4-ab995be9b8b0',
                'name' => 'Dial Code Dungannon',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => '57eecc1e-feb9-49fb-a6e9-20a588429081',
                'name' => 'Struga',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => '5803e6f4-d7be-480c-b4c2-cc94da1d52ca',
                'name' => 'Chin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => '580c63be-b87d-4c9b-b7fa-7e3872c92820',
                'name' => 'Perth',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => '5816381e-d56c-4c85-83a5-54e4796c2512',
                'name' => 'Rajasthan',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => '5818e03a-aeaf-4877-abdc-6837d22e9834',
                'name' => 'Koks Bazar',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => '582bf09d-95e3-40e3-92c5-051db8c568d8',
                'name' => 'Phichit',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => '582c1a21-22d6-49a4-a429-1fa5bc045950',
                'name' => 'Omsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => '5841262e-5f0f-40d4-9aba-fd58c08ddba4',
                'name' => 'al-Fatih',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => '58457eed-e283-419c-8b97-3e4b114a05d4',
                'name' => 'Sangre Grande',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => '584c5ec8-73a4-48d5-ba0b-400cac1c4b6c',
                'name' => 'Estado de Sao Paulo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => '584d144b-6d01-4a21-8d38-c0a0db9ffcc1',
                'name' => 'Cizah',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => '587009f9-12c6-4c89-97a1-ff78f29ca2ad',
                'name' => 'Worodougou',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => '5872bcf4-0dd9-4040-8112-293b8d5af582',
                'name' => 'Saint James',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => '587c9a3a-0d04-4ec5-87b0-ed8933293ca7',
                'name' => 'Plateau',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => '587f1cc3-0fab-424a-b6f1-ecfc59ffa31e',
                'name' => 'Gabrovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => '5884f573-4e71-4da1-b59b-02987436591d',
                'name' => 'Pays-de-la-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => '588ef335-4c85-4d14-85e8-8297fdb0338c',
                'name' => 'Primorje',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => '5892e269-305f-4734-b0d5-b93ac80b9521',
                'name' => 'Nabul',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => '58a12dba-6cc5-4ff0-9deb-a4760d8c1d07',
                'name' => 'Araucania',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => '58baeba4-b4f4-4cf4-a165-4d86c521ba3e',
                'name' => 'Ngamiland',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => '58d0d086-9f4b-4e1b-afbb-0558d43e7215',
                'name' => 'Portuguesa',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => '58d1c9cc-828e-4ce4-a843-658bed558822',
                'name' => 'Northern',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => '58f0ba61-ce55-4ab5-a0a8-1f084fa7cf01',
                'name' => 'Pomurska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => '58f3ef15-4b68-4ec2-9264-5eb99f6ec805',
                'name' => 'Gaybanda',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => '590f55ba-9a76-4f69-a812-67de9a8ff2ad',
                'name' => 'Tennessee',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => '59100796-8058-4a90-8185-d1116f808132',
                'name' => 'Leitrim',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => '591cbafb-4d4b-49f1-b3ee-728255de8724',
                'name' => 'Butaritari',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => '5935241c-a24f-4428-9c0c-327b8c79c52a',
                'name' => 'Kalasin',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => '59360d75-ca33-42fb-acb6-7e83d7b5ec65',
                'name' => 'al-\'Ayun',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => '5938c1cb-46a7-4440-bf82-656c87539162',
                'name' => 'Meherpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => '5946ad78-f95e-4d1b-9f9e-a1db295b6464',
                'name' => 'Dundgovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => '5949f6c5-7fac-400b-9fb4-2d6bdcce24d8',
                'name' => 'Trimble',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => '594f1018-4be0-4301-9aa1-ec446580a7d6',
                'name' => 'Nay Pyi Taw',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => '595ac2e7-8a49-44e7-9585-5a0f95340a6f',
                'name' => 'Xaignabury',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => '595fbe9f-3dc1-4918-9cae-ba4944ce3f9d',
                'name' => 'Angermanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => '59801820-ae56-456a-85d3-5e51a75da98f',
                'name' => 'Savannakhet',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => '598fe6f5-112e-469f-9320-b58b3c03717c',
                'name' => 'Centre',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => '5991aff5-bcc2-40c0-b60a-8e7c64be17df',
                'name' => 'Donga',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => '59a53435-a067-48b0-9307-317085635399',
                'name' => 'ash-Sharqiyah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => '59b0e550-292a-4540-8704-0f147ed3ffc0',
                'name' => 'al-Jumayliyah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => '59f768cc-b568-4bb1-8ab2-3ebfdaa65479',
                'name' => 'Mardin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => '5a061160-4254-4eb8-96c3-cf5e5566bfa4',
                'name' => 'Cochabamba',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => '5a0a0843-5bc4-42f0-b1b7-e039080cee91',
                'name' => 'Bretagne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => '5a146cea-b1ee-40f0-881d-bbaa7b381dfd',
                'name' => 'Davao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => '5a171d9e-4e9c-45a6-a5fa-61788c1caa70',
                'name' => 'Su urnes',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => '5a1de3d8-cddd-4aa8-b838-3f84b0ac2246',
                'name' => 'Inhambane',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => '5a2a573f-d25b-4b1b-852d-43a348a3bd7e',
                'name' => 'Ulaanbaatar',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => '5a2a604e-8755-4167-b49a-d350acfb80a1',
                'name' => 'Changwat Chaiyaphum',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => '5a35ce57-e4b7-429c-b233-43713febb5ce',
                'name' => 'Galla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => '5a4009d4-d7ee-4224-9e89-5455ebabd642',
                'name' => 'Amsterdam',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => '5a503c98-7220-41d6-8b87-6dc6e3ab1ff5',
                'name' => 'Chaouia-Ouardigha',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => '5a518559-2a19-4f6d-9262-c8d2e362827d',
                'name' => 'Chandigarh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => '5a5b9692-db65-40ed-872f-893bd7128d22',
                'name' => 'Hudh-al-Gharbi',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => '5a5fbf2c-23d9-4af0-bc7d-a7a9011f2cd0',
                'name' => 'Bamingui-Bangoran',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => '5a723ff1-e4cf-46a2-9fae-6f111f7004f9',
                'name' => 'Cross River',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => '5a72ffed-53b9-4b24-b37a-eb0e7bee0463',
                'name' => 'Bumthang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => '5a776cba-28ab-4462-9b7a-eb25d601153b',
                'name' => 'Antananarivo',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => '5a93e567-b0a6-4b52-94d1-f77b8974ee2b',
                'name' => 'Chimborazo',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => '5a9e9bf6-c73a-42fe-976a-a39699264af0',
                'name' => 'Mwali',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => '5ad0af42-0cf0-4164-bbdd-7299c192041f',
                'name' => 'Siirt',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => '5aff4898-660a-4405-b125-f42cc037d139',
                'name' => 'Piacenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => '5affb1b3-0bac-4425-84b0-c495000ef891',
                'name' => 'Bas-Rhin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => '5b03768c-d3a4-4791-a167-9b7db936c65d',
                'name' => 'Quindio',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => '5b10f9f7-2e6a-413b-a7eb-92c5882dbb7e',
                'name' => 'Phetchabun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => '5b1137be-5a15-48bf-9da4-afe781aa72c6',
                'name' => 'Jilfah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => '5b2a810b-21e0-4391-91bd-4fb081db0b98',
                'name' => 'Tizi Wazu',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => '5b32796a-0385-41ba-971a-497bdf0dc71d',
                'name' => 'Saint-Paul',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => '5b39e921-5db1-4ef1-b4ec-ce9647720eee',
                'name' => 'Jubbadha Dexe',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => '5b3b4d3a-ef7b-4bf3-82d6-b09bcd8483a1',
                'name' => 'Upper Austria',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => '5b3cc496-6dfd-4e5d-92f2-aa97674ecfd4',
                'name' => 'Bundesland Salzburg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => '5b7310fc-feda-4ca3-9283-844ea641b5fd',
                'name' => 'Maputo',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => '5b99230f-589e-41c6-8a30-382abf3f7214',
                'name' => 'Mzuzu City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => '5bc8e690-3cd1-40e2-bb7d-9420bbfbaf65',
                'name' => 'Sanguie',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => '5bcd3816-a524-4803-9b63-fc0bb9ef1b11',
                'name' => 'Madaripur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => '5bf9eabf-68b4-424c-995b-d7b041ede56b',
                'name' => 'Calarasi',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => '5bfaee45-1318-4df6-8679-7db22aaf8b80',
                'name' => 'Kuria',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => '5c1a8c71-6faa-4fc9-861d-3756628aee09',
                'name' => 'Hedmark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => '5c25d4ad-b439-4e9d-b443-f42fa94261df',
                'name' => 'Lleida',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => '5c42eb5f-df87-48c3-ad34-a7816c72a415',
                'name' => 'Aceh',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => '5c4fd5f1-113c-4146-8780-52483a2ea436',
                'name' => 'Caqueta',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => '5c56b687-fc66-48f8-abea-6d0a6f7e38b1',
                'name' => 'Friesland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => '5c5b1746-e198-4cfb-9525-3763b4e8a288',
                'name' => 'Cascade',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => '5c9a7f1d-4e6d-4447-a09d-a8fb21f29d06',
                'name' => 'Zavhan',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => '5c9c7038-0efb-434d-ab1a-8bed1f009bbe',
                'name' => 'Settat',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => '5cb26e83-40e1-4dee-ac27-ae24bf908e2f',
                'name' => 'Manchester',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => '5cb32974-0602-42b3-acc0-9adf39b71a90',
                'name' => 'Chieti',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => '5d0a4b52-f554-49e5-aed1-6c1c7dd7882e',
                'name' => 'Bolama',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '5d0ad8fe-bcbd-4e6f-8d6b-46617c6924c7',
                'name' => 'Al Asimah',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '5d200bd2-f498-4176-a8e6-b2efe9077060',
                'name' => 'Vraca',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '5d24de6e-4b58-4c7d-8e3f-efb1567843b0',
                'name' => 'Newfoundland and Labrador',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '5d5eb123-c3d4-4ef4-b725-32e6d919232b',
                'name' => 'Ascoli Piceno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '5d68d837-5ff0-4ecc-8002-a291ccb9b4fd',
                'name' => 'Land Baden-Wurttemberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '5d6bbc03-80a9-4968-b697-35ec3683283d',
                'name' => 'Khan Yunis',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '5d761f45-be70-4698-8434-a62ca0b054f5',
                'name' => 'Tandjile',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '5d94cc1f-d9c2-4e39-8307-58b4f1be72ab',
                'name' => 'Sy ra Eysturoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '5da05ae1-b8f1-448c-a9e8-55ace77b375f',
                'name' => 'Bengkulu',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '5dd59785-e105-468b-bca4-3b673fc73512',
                'name' => 'North Solomons',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '5dd6e40f-7c6b-4715-a8c2-74858c42f2dc',
                'name' => 'Kaaf',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '5dee7444-6d19-4cc0-b37f-6d934b97457c',
                'name' => 'Kauno',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '5dfe40ac-d895-45ef-8fcd-bec97aa0f7b5',
                'name' => 'L\'Aquila',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '5e050911-52fb-4ead-bc57-3767a367a06e',
                'name' => 'Salah-ad-Din',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '5e11cb6a-50da-4de8-baa1-3a2d5f1e54ff',
                'name' => 'Miyazaki',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '5e1452c7-996e-4fdc-879a-f0d377557b25',
                'name' => 'Sichuan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '5e2db068-39f9-4509-a3ea-ff730ba06adc',
                'name' => 'Karuzi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '5e745e9d-2d39-4a24-a7c5-130e564f72bd',
                'name' => 'Kirikkale',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '5e79fd76-1576-4a83-a218-488b3bed2e3f',
                'name' => 'Quinara',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '5e859115-4282-4cfc-959b-670769dd3cca',
                'name' => 'Artibonite',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '5e9ed414-6aa4-4447-ac13-ec30b65f568a',
                'name' => 'Surrey',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '5ea2295e-1bb0-47fa-b820-2261ef884c59',
                'name' => 'North Rhine-Westphalia',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '5eb99de7-4f10-4d3c-93e2-56087d7f49b4',
                'name' => 'Marowijne',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '5ebd95d5-79aa-4be1-96ee-1be6116bdc8f',
                'name' => 'Sayda\'',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '5ec1cb12-ebf6-471f-89be-a6a495405bba',
                'name' => 'ar-Raqqah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '5ef89da0-a0b6-44f7-bbd0-c54ca7599284',
                'name' => 'Kujawsko-Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '5f001d20-9dd8-4564-8f68-dd22c42c963d',
                'name' => 'Basel-Stadt',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '5f2e8bc5-920a-4629-8bba-73d3be2f58d7',
                'name' => 'Eskisehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '5f2f684a-17a1-46b5-9c73-baf6903ddeae',
                'name' => 'Armavir',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '5f4c487c-f344-4e3d-8dda-e3c4447e2e1d',
                'name' => 'Hamerkaz',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '5f61542b-eb6d-4599-ba3b-66d8b7011592',
                'name' => 'Mildenhall',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '5f93e7b3-4907-4976-a567-1bfa4bca1294',
                'name' => 'Saint Mary',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '5fad2d27-cc78-49a6-8e1a-2a07e0931dd2',
                'name' => 'Bogota',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '5fb0b667-e5b4-4e7e-9fca-c0f25fc78aa0',
                'name' => 'Pyrenees-Orientales',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '5fb834ec-9451-4222-a473-79fd9a981a93',
                'name' => 'Smoljan',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '5fbbc1be-9a17-4452-a6ee-9fba9b6e607f',
                'name' => 'Ontario',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '5fd89d14-5664-40e3-8c6d-08031a8d0e14',
                'name' => 'Varmland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '5fe122c7-7ff4-475e-b3b3-2a3a5e31a92e',
                'name' => 'Drome',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '5fe3d629-38de-4318-91b0-903bf101de1c',
                'name' => 'Resen',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '5fe74e5b-264c-4bd4-990d-f1a03b709c4a',
                'name' => 'Northwest Territories',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '5fe82b0c-13ba-47e4-8ece-f2b0575ed524',
                'name' => 'Inshiri',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '5ffbd4a1-4c89-4110-b1b6-ad349b76fe12',
                'name' => 'Lorestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '60181117-06d4-4d13-8935-b9b83f0dee6f',
                'name' => 'Hatay',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '6020df06-af23-4559-823f-378c8476713c',
                'name' => 'Wexford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '6023889f-619a-408c-a7ed-7ea559575d9f',
                'name' => 'Lakonia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '602413d5-8f8d-4a7c-ae4b-85c820693733',
                'name' => 'Incheon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '6038f7a3-cc57-407e-8675-cf91fe39039b',
                'name' => 'Pool',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '603a7391-12ea-44cd-be51-14e2b77cd265',
                'name' => 'Mie',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '60527fd4-ae41-423f-acbe-f9aa00fae651',
                'name' => 'Jundubah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '606fa21e-e838-4d58-91f8-a22fa4670d06',
                'name' => 'Lac',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '608fada2-8309-47ab-ba5a-71300e09cddc',
                'name' => 'Keski-Suomi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '60a6e445-ea56-4da5-a0ea-1df7cca4f7a2',
                'name' => 'Cabinda',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '60bd553a-e278-44ef-b22b-23aade97daa3',
                'name' => 'Krushevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '60e6b0f2-3987-4b5e-affc-fae1bcea4099',
                'name' => 'Artigas',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '60e85382-cfa7-4ddb-9a73-7c8c318df7a7',
                'name' => 'Bratislavsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '6115d2cd-7751-40ed-95ac-f33dba920539',
                'name' => 'Laane-Viru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '6131bbdd-3289-4115-819b-6ab43f20ba31',
                'name' => 'Vicenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '613955c2-bcc6-43eb-8d1d-2a8aa0435978',
                'name' => 'Luhans\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '615c226b-2723-43c1-a570-42bead3208fe',
                'name' => 'Susah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '616b1f1f-6f89-4bc3-8f10-297bf6a57cac',
                'name' => 'Trinity',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '618e3f9c-1c3b-4690-acb9-067622f61ca2',
                'name' => 'Binh Dinh',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '6192ce67-f01e-4dc8-a132-a5070ae3cd51',
                'name' => 'Pozhega-Slavonija',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '6195864a-24ce-4575-8acc-de81b97f87bd',
                'name' => 'Saint-Denis',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '6196fbff-ba18-4a7f-ae9c-6a9eeeb2fc6b',
                'name' => 'Flintshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '61c2068a-bf60-4ffa-ab19-4a81ef85644b',
                'name' => 'Maekel',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '61d907b1-e7de-4505-bd14-ebffa1874dea',
                'name' => 'Maramures',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '620118d6-858f-4c6b-92ba-be63f430a4a8',
                'name' => 'Strabane',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '62176bc1-f011-4d80-bfbf-3e022f5bb281',
                'name' => 'Thurgau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '6230ce45-02ec-4013-ac41-6163e99b3834',
                'name' => 'Cordoba',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '6234e7a1-12de-4307-890f-5e588ff32cf7',
                'name' => 'Sassandra',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '62384f36-e23d-4001-8ae5-5565ffbd7129',
                'name' => 'Attica',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '623f5b9a-cfcf-4ec4-8b71-8aef7e361146',
                'name' => 'Moselle',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '625b1212-5831-4a58-9c6a-907a0cbc1229',
                'name' => 'Viangchan Province',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '625d9265-52df-48c4-9c69-18a3275cd88b',
                'name' => 'Tapoa',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '626cadfe-fb95-4f1b-9402-14584fa2df1f',
                'name' => 'Warab',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '62751576-e37e-4eca-a549-d585379d2443',
                'name' => 'Diekirch',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '6277af3b-08c9-48ce-a3d5-a6b2508d1363',
                'name' => 'Slavonski Brod-Posavina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '628a32a5-3b75-4b51-abfc-ab24d62d5b22',
                'name' => 'Nikunau',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '62917c0c-c219-4460-89a0-1683235ada35',
                'name' => 'Cordoba',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '62993edc-9ed9-4715-924c-e2888528c36e',
                'name' => 'Selenge',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '629b2ef9-02d8-4946-a144-61ee977164ee',
                'name' => 'Lubelskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '62a066f9-e5e3-4e1f-b0be-a08c0500cf64',
                'name' => 'Basse-Normandie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '62b93332-a8ea-4c71-b107-c111b64e6460',
                'name' => 'Notranjsko-krashka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '62ba1c9c-5b24-40bf-9af4-e947f2233f6f',
                'name' => 'Vaga',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '62c858cb-a7e6-497a-89dc-b176f623d519',
                'name' => 'Bartin',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '62d0c73f-bda7-4c44-a1fb-5786bbddf9ba',
                'name' => 'Kenedougou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '62d8bf24-ef36-4c0a-9ba6-6f2e3685442d',
                'name' => 'Retalhuleu',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '62e207cb-e4d4-48e6-b103-2a0a9cfe3650',
                'name' => 'Sekong',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '62fdd6f2-f3e3-408d-83f1-4e352524c4bf',
                'name' => 'Shiga',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '630fd400-b545-4d43-8da8-dee6e62260ad',
                'name' => 'Ostan-e Esfahan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '6324baa1-ed48-4791-9b17-c4ca359d0c5b',
                'name' => 'Najran',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '632fe6cf-222b-49b9-877f-154d0379ac30',
                'name' => 'Yaracuy',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '633720f9-ed86-4cdb-9e4a-64488aad2313',
                'name' => 'Mohafazat Liban-Nord',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '6353583c-dd0b-4321-bb87-54b0cbbda013',
                'name' => 'Asuncion',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '636f520b-89b3-495b-b51a-14949736b022',
                'name' => 'Arima-Tunapuna-Piarco',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '637aae3d-a391-4c05-89bb-e7c51f708375',
                'name' => 'Vaishali',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => '637bb104-7c77-4d0a-9d2b-fc086749c0bf',
                'name' => 'Lalmanir Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => '637fd115-899b-4cd6-96bb-2d7384e65515',
                'name' => 'Sinaloa',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => '63858299-3844-4a66-9e70-485116d3f410',
                'name' => 'Umm al Qaywayn',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => '63a3a298-c4af-4c51-99a0-0a6aca919a21',
                'name' => 'Patuakhali',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => '63b2024b-543a-44db-8656-79e811916710',
                'name' => 'Niederosterreich',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => '63b2a5aa-0fc5-4548-8a0f-a539e44093e1',
                'name' => 'Dahuk',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => '63d42f07-21dd-426d-ba49-2a6dea6e1a32',
                'name' => 'Muhafazat al Fayyum',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => '63e015ce-92f2-4856-ac01-00b6fc13c7a5',
                'name' => 'Boaco',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => '643b3ff3-265e-482b-80d0-c168e02fc956',
                'name' => 'Huelva',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => '64424214-58e1-41ab-8015-473cfdf7e9a3',
                'name' => 'Baglan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => '644a38ee-2238-4603-aa23-9e7bd1a2b125',
                'name' => 'Friuli-Venezia Giulia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => '644ee95b-3648-48fd-99f9-a6d36723b63a',
                'name' => 'Fatick',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => '64590c99-2124-4bbd-b60e-44bdb6210a7b',
                'name' => 'Malopolskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => '6463d37c-1ed1-4456-83d3-1cc5d382bbb7',
                'name' => 'Wotho',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => '646eb141-cf8b-4c32-a69a-8c4f718be7b3',
                'name' => 'Pita',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => '64866d5a-4b8c-4e9d-88f6-9744b582f3ae',
                'name' => 'Nuevo Leon',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => '648a2129-cb84-4e4e-830d-420a4097fec0',
                'name' => 'Wilayat al Khartum',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => '6498655c-5a2d-402a-bace-8420d7667eec',
                'name' => 'Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => '64a304af-509b-4503-a8ca-a9a1f23db265',
                'name' => 'Tanga',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => '64aa3cb7-9d92-4fac-b467-1f780e0b3bed',
                'name' => 'Ghazzah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => '64b09dde-ee0b-42e9-93ef-2f2a8cbdc78a',
                'name' => 'al-Janub',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => '64bce505-62a0-430e-aeb6-3cab334c4306',
                'name' => 'Parana',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => '64c1dfc5-85e2-4df8-aa82-820b79ad2a25',
                'name' => 'Ciudad Real',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => '64eced0b-20af-41de-b904-3e043d8a77eb',
                'name' => 'Blagoevgrad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => '6504ab31-ec9a-4323-989d-1a3ac72579bb',
                'name' => 'Kracheh',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => '65148b3a-4a1f-4249-a9b7-47ad9b6d9e3f',
                'name' => 'Grand Gedeh',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => '6534fe1a-99fe-4f1d-848e-dc0c39d43504',
                'name' => 'Atacora',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => '6547b80d-c80f-4cb9-a228-66197c29c47f',
                'name' => 'Tarawa North',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => '6558570e-8f0b-452e-9255-1b26d523ffb9',
                'name' => 'Baulkham Hills',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => '657048e2-fe58-4be2-b439-124229e6d318',
                'name' => 'al-Basrah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => '65711f09-ed1e-49b8-b420-ad5d6b13b561',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => '65747bab-1b06-45a3-8cd1-898bbf4c3e9f',
                'name' => 'Bahia',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => '658be9df-a47f-4ccf-b8d1-8b3f19fe5166',
                'name' => 'Barbuda',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => '658cd397-db9b-420c-9f8a-661829fe9301',
                'name' => 'Slaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => '659a33a3-c2d3-44ea-8b73-54ec58acd1e0',
                'name' => 'Saarland',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => '65a71b41-50ad-476d-af89-01b2dde91985',
                'name' => 'Al Buraimi',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => '65a82a96-c44e-4cd1-92dc-fb7cf49dfdc8',
                'name' => 'Lovech',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => '65b2435c-3a74-43fb-9282-a9e616ff5461',
                'name' => 'Eua',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => '65b42209-9e87-4800-8f37-51da78eb7564',
                'name' => 'Norte de Santander',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => '65b6fecb-6253-428a-810b-dd30510e0fac',
                'name' => 'Warqla',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => '65bf7289-c56d-4c06-93b1-2fa52c299d77',
                'name' => 'Oaxaca',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => '65ce796e-02c6-4747-a1b6-9522fa264c95',
                'name' => 'Sofija grad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => '65d3d7e1-2b29-44cf-9830-7e21beb62263',
                'name' => 'Lancashire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => '6603988c-093c-4d82-b7c7-491e5fa11ba8',
                'name' => 'Thakurgaon',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => '662a444e-95ab-44c9-b205-a83d491fa114',
                'name' => 'Daga',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => '663318f2-2e98-492e-829e-fa3b7fcb4f40',
                'name' => 'Edirne',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => '663d5248-bc8a-44b9-8aa7-abb6d982e505',
                'name' => 'Mchinji',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => '66470aaf-b2d6-4069-9b4b-50c2d93fe6ea',
                'name' => 'Alibori',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => '665fe474-136c-45ef-a6ae-e72ad24b6b73',
                'name' => 'Satkhira',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => '667b9ff5-d19c-4ad9-9777-31a89c0e99d9',
                'name' => 'Texas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => '6684c44a-49b9-432c-b838-a864c4ede9f8',
                'name' => 'Littoral',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => '668a1067-d3cb-4919-bde2-7bbcfd79131f',
                'name' => 'Qina',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => '669bf351-c811-4bbe-ac41-09a99e385a43',
                'name' => 'La Romana',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => '66a0927c-6509-4a4c-9d65-0082b3419414',
                'name' => 'South Georgia',
                'country_id' => 'bc69f0e1-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => '66a6cf56-11a3-4845-9b2f-c16226d834cd',
                'name' => 'Tarn-et-Garonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => '66aadd00-59e4-4038-84a2-6dad6c338b32',
                'name' => 'Kgalagadi North',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => '66afa320-398d-44d5-b532-1819a12a131d',
                'name' => 'Maniitsoq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => '66d9126e-16e0-4185-9ccd-36edab07ae12',
                'name' => 'Stavropol',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => '66db0d53-12c9-483d-ad01-37bc30f3ef68',
                'name' => 'Sligo',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => '66e6bdac-3790-4ead-8780-a46b32964535',
                'name' => 'Karlovac',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => '67010a10-e59c-4d12-9b40-459095020272',
                'name' => 'Central Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => '67041ba4-7ca4-46f3-bac4-19d5399d454a',
                'name' => 'Rio San Juan',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => '67095ed2-2a68-455c-afd2-4ad67c578d38',
                'name' => 'Merida',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => '6709c869-f58c-449b-9884-80421c11dcd5',
                'name' => 'Chahar Mahal-e Bakhtiari',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => '671b6be1-2d0e-441d-bece-0bd7a5697f85',
                'name' => 'Ciudad de la Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => '671e59a2-a9cf-4047-a53a-3ede06722d57',
                'name' => 'Heredia',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => '6725469f-43c9-4753-acca-204af1c85ae1',
                'name' => 'Ilizi',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => '6727c6c1-e7af-4650-9b59-ec3abd730a59',
                'name' => 'Qidimagha',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => '674e1e64-8730-49de-aeec-dc457e722d8a',
                'name' => 'Eastern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => '677f84bb-3a0e-4877-8fa1-db5690746fe9',
                'name' => 'Koscian',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => '6780033c-4940-4a8a-adcb-b0a2fa369579',
                'name' => 'Maluku Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => '67a801ee-2458-4a3b-95d4-5c886030575b',
                'name' => 'Tirane',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => '67a8251e-247a-47f7-bf14-536d6aa8035c',
                'name' => 'Sa\'dah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => '67acf60a-8c18-41f2-ac43-2ba31dada776',
                'name' => 'Dhaka',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => '67c6f4a5-480f-4260-842e-0893ff2af81c',
                'name' => 'Wyoming',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => '67d6a8cb-5526-40a4-b81b-9b6fe81ce7f2',
                'name' => 'Hawthorn',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => '67db3c5a-112b-4749-b0e9-6dae6066ac10',
                'name' => 'Ontario',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => '67fc83be-f8e5-4b77-b859-0654f6bb4396',
                'name' => 'Woqoyi Galbed',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => '67ffea19-3def-4125-88bc-fa6347574f88',
                'name' => 'West Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => '682af0a3-318b-433f-991f-fb92f960d901',
                'name' => 'Armagh',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => '683e207e-8c9d-42c5-86d4-014825a95e96',
                'name' => 'Ingusetija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => '684fece2-995a-4f2f-acc2-837c5566028b',
                'name' => 'Labuan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => '68702025-655d-4b54-84f0-3e1c8c8f0818',
                'name' => 'Tuamotu',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => '687bf017-b860-432c-9ffd-6fc3ac2d6211',
                'name' => 'Hazafon',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => '689f5fd3-ba24-4774-8b6c-7037ca76b8d4',
                'name' => 'El Progreso',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => '68abecaa-8c66-4f67-a76b-b937bdc23e42',
                'name' => 'Botosani',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => '68cfe887-ebc6-4228-9d61-34a67437de9a',
                'name' => 'Centre',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => '68db0209-4eb9-4cf8-99ef-d9dca5f6bcf1',
                'name' => 'Oujda',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => '68ed3003-e6c1-49b8-b5c0-b6460e35b0a0',
                'name' => 'Bouvet Island',
                'country_id' => 'bc692043-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => '691ee3f1-e443-4ba6-9fcf-9624b53df928',
                'name' => 'Penghu County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => '6934afd9-8bb0-486b-af40-d73cab8a6a8e',
                'name' => 'Gambella',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => '693672e4-c119-486c-9eb6-ccbb36e448b3',
                'name' => 'Takamaka',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => '693cb7fb-8fa2-403f-aeba-47a9e112b29c',
                'name' => 'Land Hessen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => '693f0a51-b412-4b68-8eae-1815c739dbf6',
                'name' => 'Tawzar',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => '69530e90-efa5-4194-b9dc-a56501e7b4bd',
                'name' => 'Kahramanmaras',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => '6956b45a-4a47-436c-8be6-180d8db444cf',
                'name' => 'Los Lagos',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => '695e22b7-c45d-4db0-8f40-84120559eaee',
                'name' => 'Varna',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => '69616776-cc4c-4f4f-b5ed-04ae0c454e07',
                'name' => 'Liezen',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => '69620ce0-0994-46d2-97a9-4c1a8678350a',
                'name' => 'Montserrat',
                'country_id' => 'bc6993ca-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => '6965a2aa-f230-40af-a618-a87707799ad5',
                'name' => 'Falkland Islands',
                'country_id' => 'bc69422a-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => '696bb800-91e7-4dec-bcec-2e5d1f73b720',
                'name' => 'Jujuy',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => '6973a2c3-0711-4ced-ae02-02e73282a1a8',
                'name' => 'Armagh',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => '69855862-de55-453b-8cc6-0bddc02f3b39',
                'name' => 'Semnan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => '6987d291-e439-46e4-b964-7fa6ab5642cb',
                'name' => 'Bitola',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => '6989cdfc-8635-4a1d-a60b-73d4981cb988',
                'name' => 'Bulqize',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => '699241d5-351c-4451-8374-ca806e49face',
                'name' => 'Sardegna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => '69b17806-c764-400b-bf41-75012f644330',
                'name' => 'Bougouriba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => '69c03daa-9924-40ef-a5b3-b122d2d1aa25',
                'name' => 'Saarijarvi',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => '69c5ac83-ef91-4e90-9ce7-7177747bc3c4',
                'name' => 'Semien-Keih-Bahri',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => '6a044505-5234-4cab-a78a-a5293363f506',
                'name' => 'Satun',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => '6a142349-b1cd-4c48-aa30-1dd390d28c27',
                'name' => 'Pesaro-Urbino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => '6a1ea6b2-e8c5-4acb-a808-56deabee4faa',
                'name' => 'Morazan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => '6a29cad8-e375-4e06-bb67-2281ef8ec4b7',
                'name' => 'Tocantins',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => '6a30f3dd-68e2-492a-a12b-b5616aa66df0',
                'name' => 'Nana-Gribizi',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => '6a38747f-afc0-4486-a3f0-bbcb87787b24',
                'name' => 'Ain',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => '6a6e34d3-19a9-4ed3-b029-1db18f20b30d',
                'name' => 'Ouham-Pende',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => '6a87123b-e6ca-49f2-8e82-9797650d3829',
                'name' => 'Hsinchu County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => '6a97a070-0b23-4f00-a09c-01c4fa465e65',
                'name' => 'Sina al-Janubiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => '6aab143a-2507-4bcd-bc93-68ba2d04d140',
                'name' => 'La Union',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => '6adce74c-f624-4345-8dda-4910694844be',
                'name' => 'Durango',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => '6afa683e-9059-4b74-8f6d-c118aec783ce',
                'name' => 'Tunceli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => '6b0744c1-6fe2-413e-8413-40dadf3e6fae',
                'name' => 'Atirau',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => '6b085ef7-8941-40f0-90aa-02bd3c2b15ef',
                'name' => 'Cartago',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => '6b1d1c31-9c22-4031-b47c-a778adf558e3',
                'name' => 'Carriacou-Petite Martinique',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => '6b267cbf-6f85-4b55-9fc6-e69919a7c0c8',
                'name' => 'Bayburt',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => '6b287169-2ab6-4c7d-ae62-7385fc69dea5',
                'name' => 'Gers',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => '6b2c8de1-10fa-4dfe-a8a4-21e7a310872e',
                'name' => 'Tottori',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => '6b405d55-ce40-45b4-b1cd-5f0e4f9fca27',
                'name' => 'Aimeliik',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => '6b44408e-d2d1-4b57-bcbb-99cf2b56ab24',
                'name' => 'Korjakija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => '6b803ac0-542e-4453-97d2-b51c4267789f',
                'name' => 'Laborie',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => '6b804a2e-cd60-4358-b253-6078bd4bd555',
                'name' => 'Monsenor Nouel',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => '6b903d25-9d8b-433d-8e5c-a94c6ef0902d',
                'name' => 'Mauke',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => '6b93beb7-a5c7-4e00-9b3d-b48d17c9de52',
                'name' => 'Limousin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => '6bad5946-7c93-44f3-8634-af482eba38cd',
                'name' => 'Sherpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => '6bb433bb-8ac8-4908-968b-e2ac5a415f98',
                'name' => 'Sitrah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => '6bb61d73-0868-4d2c-9fe7-672fb2d122af',
                'name' => 'Baghdad',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => '6bb9995c-4527-4252-a092-79e0427680fe',
                'name' => 'Mahajanga',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => '6bc3ad12-ba52-4ab0-a529-945e020642fb',
                'name' => 'Ngchesar',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => '6bc75239-2f8b-4219-925c-74df95de9eda',
                'name' => 'Dakar',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => '6bc87339-479c-4fda-9f97-076a70cd9ff9',
                'name' => 'Huesca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => '6bc95bda-6da0-4306-abcc-a15ceac38319',
                'name' => 'Diyala',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => '6bd10b21-8f42-4417-bb36-2f43e8f48a03',
                'name' => 'Trat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => '6bde504c-ba01-439c-85b2-d2c35d9e2778',
                'name' => 'Nicosia District',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => '6c0088b3-7da3-47d7-ada6-17c5021ef70b',
                'name' => 'Sark',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => '6c013b05-6151-452a-90d7-fa95e4538cad',
                'name' => 'Cherkas\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => '6c2bb74e-b60e-42e6-b863-1c853a9e1f1a',
                'name' => 'Abruzzi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => '6c420a99-48f9-45ac-a729-228870df1fcc',
                'name' => 'Jabal Lubnan',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => '6c4c5f28-6a2b-4171-957e-770e82469986',
                'name' => 'West Bengal',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => '6c4f9d04-492b-4d5e-a841-c565abf773ee',
                'name' => 'Qustantinah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => '6c510152-15d9-463f-baed-0f55873e6970',
                'name' => 'Yamanashi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => '6c5105a9-8340-4f5e-9551-5f8e49744dd3',
                'name' => 'Has',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => '6c63ca2f-5ea9-44fc-92bb-428874d4c36e',
                'name' => 'Feni',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => '6c71363f-a756-4cf9-ac03-17c2c67b351f',
                'name' => 'Katsina',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => '6c8b052c-8e8d-4c4d-8d3e-3076afca10da',
                'name' => 'England',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => '6c9ee77c-1672-4cdb-b146-af4804d772dc',
                'name' => 'Fianarantsoa',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => '6cab89be-8909-4746-89bf-e6045b0f1e31',
                'name' => 'Saint George',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => '6cc75bdd-d3da-4a0d-b5e4-0299f2a59b87',
                'name' => 'ash-Shariqah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => '6cdd1316-5061-48aa-b4f1-04342629132b',
                'name' => 'Marquesas',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => '6ce345df-2882-4954-869d-65d651ecb4e9',
                'name' => 'Ganzourgou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => '6d0b35ef-466e-4adf-a421-d2a06c087b3d',
                'name' => 'Tadla-Azilal',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => '6d1bc255-7724-4384-8e27-d528667f9267',
                'name' => 'Udine',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => '6d348415-ed96-4468-bb9a-286feadbd9a4',
                'name' => 'Beyla',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => '6d3881fc-a9da-4112-86b0-7c0f7fc014f1',
                'name' => 'Debar',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => '6d443ecb-5200-4884-b900-383feab10cb4',
                'name' => 'Suceava',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => '6d608542-3052-4607-893f-e4fbf5258f4a',
                'name' => 'Seno',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => '6d64b558-d4be-4c3e-9b7f-fb01be7b79eb',
                'name' => 'Ioba',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => '6d70377d-f3cc-42fc-95eb-6145c2790bd2',
                'name' => 'Saint Mark',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => '6d92c365-54a7-464e-b142-18b101648136',
                'name' => 'Hanover',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => '6dbdd7ff-3a8d-47a9-ab90-ec8c09c49a44',
                'name' => 'Mullaitivu',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => '6de7fd51-3ff7-4212-9265-92060efbdf64',
                'name' => 'Debub',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => '6dfafd0a-3357-485b-aaec-0e219a16120a',
                'name' => 'South East',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => '6e03e2d7-d382-40f2-bee2-a641edfba9d5',
                'name' => 'East New Britain',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => '6e2117a2-63d0-4c50-b68b-031bf5dc6158',
                'name' => 'Tuamasaga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => '6e3184da-062d-4931-aedb-48216f74fffe',
                'name' => 'San Juan',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => '6e32ac8e-77d9-42fe-9567-4b2eca713c24',
                'name' => 'Jessor',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => '6e437a2d-3de1-4011-9a4e-81c6880d2dcf',
                'name' => 'Northern',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => '6e50f5d7-8e6a-406b-972c-35eee9c09553',
                'name' => 'Ordu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => '6e5195d2-e38d-4b76-9bd4-c7602d2b5613',
                'name' => 'New York',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => '6e52d0b3-a0d0-4a04-81f1-97404362209c',
                'name' => 'Qabis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => '6e60cd17-e262-45e8-b7cf-caac40b1cf7e',
                'name' => 'Centre',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => '6e678f29-8a0e-41b6-be37-3a758fa346b8',
                'name' => 'Eau Coulee',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => '6e87ea7a-cb08-47d3-865d-b9060347443a',
                'name' => 'Arno',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => '6e8d232b-8594-434a-ae87-f67e28468ec0',
                'name' => 'Benedikt',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => '6eae5e39-7fb6-4066-aeeb-6c21366f436c',
                'name' => 'Bissau',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => '6ebf9a33-1eba-4b62-8bbc-5f698415e53e',
                'name' => 'Vayots Dzor',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => '6ec0bd3b-ddf5-42a5-969a-90ae0455532a',
                'name' => 'Tinian',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => '6ecd72e3-2aeb-40c2-bd3a-8b01b8e49870',
                'name' => 'Nueva Esparta',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => '6ee074b8-f45b-4ec0-b759-772d4f1703b9',
                'name' => 'Buskerud',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => '6ee0a43c-3b89-45f4-bebe-ea78c4c1c8d0',
                'name' => 'Nord',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => '6ee8d1cb-ac07-4e43-8d69-c68fd8edecc8',
                'name' => 'Sachsen-Anhalt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => '6eec88b8-20a5-4c06-99e4-52d9291228c7',
                'name' => 'Sofala',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => '6ef8f32e-85c6-46d5-951a-99bc5bb6bee5',
                'name' => 'Anse Boileau',
                'country_id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => '6f02b6ca-b523-46ae-b438-7eb543337830',
                'name' => 'Tartus',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => '6f09db43-d5c8-454a-bacd-cb82ec36695d',
                'name' => 'al-Mahdiyah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => '6f122b1d-06a2-4356-a3a3-c21fd6eee2c1',
                'name' => 'Saint Mark',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => '6f151a2e-d281-4da8-b23f-e90438126676',
                'name' => 'Kindia',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => '6f2d0298-0b61-4112-8453-f1a6f532bf7b',
                'name' => 'Usulutan',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => '6f3f40b9-ff02-4a1c-be18-c4545faf1d53',
                'name' => 'Maseru',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => '6f439c98-d446-49bc-82e2-f55866e682f3',
                'name' => 'Arta',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => '6f5095c0-d35c-43d8-af01-af20ac6bf606',
                'name' => 'Lipeck',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => '6f66b326-c0e7-4f35-9c0e-6f93673c47df',
                'name' => 'Obcina Domzale',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => '6f6ddad7-4518-4d1a-b686-70cc39f975b6',
                'name' => 'Le Castellet',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => '6f6ec9d3-21ea-41d6-94aa-02f63e75b419',
                'name' => 'El Paraiso',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => '6f7b8ade-a974-48b0-ae45-f814ab381618',
                'name' => 'Sophia Antipolis',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => '6f9bf058-890c-42f0-9fcb-ab7129ada4df',
                'name' => 'Guadalcanal',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => '6fc14873-df5e-47ec-ab5f-87d7cfcd4a25',
                'name' => 'Gouvernorat de Ariana',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => '6fe8091f-e66f-4cfc-8147-d4816afe6797',
                'name' => 'Okavango',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => '6feba993-b3a7-4439-90d0-0dcbb0f787e6',
                'name' => 'Fromager',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => '6ff415b9-4de9-48ac-b0e8-3ed232e0b74c',
                'name' => 'Ghaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => '6ffab98e-181a-4742-bed2-900f2f4dd810',
                'name' => 'Mukdahan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => '70127127-535f-4719-b379-7967904fd734',
                'name' => 'Sisimiut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => '70135826-f6df-4ed3-930f-9d068293c1b6',
                'name' => 'Mechi',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => '701fb197-be8e-4376-a478-592e1b23db4b',
                'name' => 'Las Tunas',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => '702480d7-184d-4d8f-8b2f-f3cfbb643d8b',
                'name' => 'Mustaghanam',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => '70772e57-3298-4cf0-9f50-617f0712e674',
                'name' => 'Virovitica-Podravina',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => '707b9342-991a-459d-8890-142e0b3a8e06',
                'name' => 'Amur',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => '707fc338-7757-448d-bf1e-b3afd8a07bfb',
                'name' => 'Port Erin',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => '70a75b42-8d04-41e3-b3ba-9a72604b8595',
                'name' => 'Christchurch',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => '70b46de4-a35f-42ce-b6b1-bb3f4471fdf1',
                'name' => 'Pohjois-Savo',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => '70b9e448-4077-49b0-a035-dfac73054d4a',
                'name' => 'Edinet',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => '70c0bf19-d357-4b64-a081-041abe182f24',
                'name' => 'Turkish controlled area',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => '70d4cbe5-5c51-48c3-96a9-7788c58ed1fb',
                'name' => 'al-Mahwit',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => '70d7d33b-632b-47b1-b3aa-bd7b237c9a82',
                'name' => 'Manabi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => '70ebd8fd-3fa9-4616-93a7-e55d8a521071',
                'name' => 'Mecklenburg-Vorpommern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => '70f7d1b5-785c-49c6-b4e0-726538888b26',
                'name' => 'Sidon',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => '710042e6-fe21-41ba-a48e-72d529c93d4c',
                'name' => 'Amazonas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => '710a3a87-d4ca-4617-b6f9-cb3cb3179155',
                'name' => 'Chungcheongbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => '71483af4-9d99-41b8-9507-8c4e82162037',
                'name' => 'Nakhon Pathom',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => '714e7af6-7e11-4008-a5d4-b4f86d654e8c',
                'name' => 'Guelmim',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => '71775436-0dcc-4a8f-b057-c647f71f7fd4',
                'name' => 'Gaborone',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => '7180e80f-d8d7-47ac-87bc-9b36ca893f0d',
                'name' => 'Beijing',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => '71a2c88f-e0b5-4bda-90aa-b38f1ba92562',
                'name' => 'Kara',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => '71a89ec2-3f12-4184-bb43-62aede140131',
                'name' => 'Qadesiya',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => '71d4a918-29e8-401b-bdee-d6f92e3633c4',
                'name' => 'Kaduna',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => '71e31c37-3822-40af-96ff-8cd83217a082',
                'name' => 'Pella',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => '71fa84f2-d31a-4a11-9a4a-9c2c616ec6d1',
                'name' => 'Kalimantan Timur',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => '71fbbc7b-772f-4bf0-9269-37e7c0e69c2c',
                'name' => '\'Ayn Daflah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => '72292f29-276b-4f2f-a4ec-f441341758f1',
                'name' => 'Zukowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => '7234ca8e-0145-4b17-98ea-1ccff9108d11',
                'name' => 'Lagman',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => '725a12ac-3925-4671-8016-4ea8631ba620',
                'name' => 'Jigjiga',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => '726292ce-0544-46e6-a8fb-012940b530d2',
                'name' => 'Nevsehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => '726ab21d-3dc1-4f62-abc1-2fcea9d24406',
                'name' => 'Brussel',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => '726c82dd-87d7-4534-99fe-c22660d964cc',
                'name' => 'al-Madinah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => '7277c990-a021-4648-937f-9dd127319eec',
                'name' => 'Boulgou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => '727cead2-2049-4df9-b785-c163f2b41c66',
                'name' => 'Kinshasa',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => '727d93f6-66c8-4339-9b9e-6269df1eaad1',
                'name' => 'La Pampa',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => '727e3243-df53-40b7-81f0-ce9c5e9cfba4',
                'name' => 'Sulawesi Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => '729042f5-09fc-48e1-9326-43f0bfd78775',
                'name' => 'Kyyivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => '72a138b0-aa57-4be2-9715-1de5a2bd6ac2',
                'name' => 'Sourou',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => '72bd6bc4-b9dd-4034-97e4-e09292a9c958',
                'name' => 'Cibitoke',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => '72bed50b-2991-4515-ab22-a69929869623',
                'name' => 'Makkah',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => '72c34901-d414-4390-a294-72b0300d4886',
                'name' => 'Telangana',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => '72ecad94-c53a-4faa-86df-fdab1fb5e340',
                'name' => 'Atacama',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => '72fa5f1c-e00f-4b8d-8f5e-c0545ca105b7',
                'name' => 'Salaj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => '731022ea-9343-4444-a287-8dea467d33f2',
                'name' => 'Midyah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => '7310be6f-296c-4bfe-9c8a-9d8ed659f58d',
                'name' => 'Dubai',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => '732f44ee-731c-4503-9959-11df747925b4',
                'name' => 'Floreal',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => '733d122f-d27a-4320-ba6c-0307ca467ac0',
                'name' => 'Aksaray',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => '733dcb98-335b-40d4-896c-203ed58d67bd',
                'name' => 'Chubut',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => '733e6e79-7be9-4900-88a5-0cad9a6e8658',
                'name' => 'Southern Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => '734766e2-a2f5-425a-97e8-b553ab4204f0',
                'name' => 'Treignac',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => '734aaae7-6a2f-4f63-a960-ddf799123945',
                'name' => 'Nzwani',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => '7357a826-4e28-433e-a0d5-4921ae68f880',
                'name' => 'Ilulissat',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => '73591703-5ec8-4eaf-8a31-f4df0a080ce9',
                'name' => 'Canelones',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => '7369e6f8-70be-48bb-b015-fd6a294d9158',
                'name' => 'Jidd Hafs',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => '736d137c-1b1f-4633-9a61-e309e3e9e823',
                'name' => 'Valladolid',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => '736ec716-4f71-4653-82a6-b90f3be4671e',
                'name' => 'Dobroszyce',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => '737cb169-6cf4-4a52-aeb7-62e6a3609954',
                'name' => 'Kortenberg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => '738268ec-8cdc-4f9e-b73d-423672dca8b6',
                'name' => 'gwangyoksi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => '73a6bb1f-16fe-45a0-bea9-a400bc5067d6',
                'name' => 'Zlitan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => '73aaeb3a-10d3-4a30-b959-0764ef30e070',
                'name' => 'Narayani',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => '73bd96a5-fe96-4c88-87a8-ccf22faa79b4',
                'name' => 'Dreisbach',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => '73c91c0e-8ef8-47af-9163-04a621bf653c',
                'name' => 'Qibili',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => '73d0cdc8-95a7-4323-a37b-8bcc85c0e76a',
                'name' => 'Lienchiang County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => '73dc2f23-3eac-4f04-9d01-70fb0a26f9cb',
                'name' => 'Tighina',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => '73f9de34-a25e-4267-a94a-eb54d38611ac',
                'name' => 'Saint George',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => '7401002b-cae6-4293-b0e6-34c49c981373',
                'name' => 'Durham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => '74149cf8-65b4-464f-894a-7d00a5564029',
                'name' => 'Goyang-si',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => '741f74f7-82b3-48fb-92b2-25e3a445786f',
                'name' => 'Graubunden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => '742b68b6-8f1c-420a-9a43-2f857dcf4f08',
                'name' => 'Port of Spain',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => '742d460f-66ac-425c-ac1a-e8af77fcf82d',
                'name' => 'Crete',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => '7438504e-13b5-428d-8a25-9eb08e9441e2',
                'name' => 'Norrbotten',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => '743893dd-e951-4cb9-a939-8f2c4f9bdc49',
                'name' => 'Isabel',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => '743ccf0f-eacc-4777-a007-142c145581b4',
                'name' => 'Tov',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => '743d2896-c376-4f43-839b-4705bdb269e3',
                'name' => 'al-Jaza\'ir',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => '746433b9-5931-41f3-84ac-5f2d16029eee',
                'name' => 'Domagnano',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => '7481902e-0eee-4be9-9008-00f8b334413e',
                'name' => 'Chhattisgarh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => '748e12be-1ab1-4162-b887-0005d929685c',
                'name' => 'Marakei',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => '74b8cc19-f9d7-4e75-93df-cc1a30e4720e',
                'name' => 'Vestfir ir',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => '74c05da6-b872-46b1-bfc0-1bc4d76b6022',
                'name' => 'San Jose',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => '74d37b34-2687-4f81-ae63-f36cb5efa324',
                'name' => 'Meknes-Tafilalet',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => '74f8e6c5-9281-4673-9d9a-67eca4625836',
                'name' => 'Utah',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => '74fa9e2a-4215-487b-ae9b-256abce0f2dd',
                'name' => 'Krasnojarsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => '74fd73f1-062e-4d8b-92cf-0d1e9cb1caed',
                'name' => 'Southern Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => '751039a2-f5cc-42fe-a756-7b7a907ba892',
                'name' => 'Zamora',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => '751be67f-05a5-41d1-a925-d2c9f3401670',
                'name' => 'Messinia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => '751cac62-e4fe-4f90-882c-bbd42db2f895',
                'name' => 'Ouaka',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => '751f9c1c-e85c-42fe-93f6-94a0dd668596',
                'name' => 'Kampong Thum',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => '75274739-69e6-44a3-9a8e-b7d030aa9593',
                'name' => 'Alto Paraguay',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => '7534b343-9b6e-4e98-bf57-6eb9b97912a3',
                'name' => 'Mazandaran',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => '7548964a-a27a-43e6-9f29-f0c7f2088cb4',
                'name' => 'Krung Thep',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => '75536c19-d735-46a6-bd52-272f0e7e7099',
                'name' => 'Brava',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => '755609b9-8360-4029-b314-a8bf3d1e959d',
                'name' => 'Dumyat',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => '7575d35e-9346-4ed1-9e6d-cb68cfcec9dc',
                'name' => 'Clarendon',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => '7578234e-c535-403a-a42d-54bb61b3c29d',
                'name' => 'Gnagna',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => '758a62c0-cef3-4165-9664-5522224dd812',
                'name' => 'Riau Kepulauan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => '7594e520-9ec4-412f-9a58-ffc2aeee145f',
                'name' => 'Veraguas',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => '75a014d2-a8b4-434c-8f04-a12f5cfba312',
                'name' => 'Masaya',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => '75b5a02c-f0a8-493d-8e69-9cdb12770b3a',
                'name' => 'South Georgia',
                'country_id' => 'bc69422a-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => '75b7885a-fe35-4033-b1b5-da60aee7e82c',
                'name' => 'Kouritenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => '75d4a9a8-f756-497c-89f8-52c12b032038',
                'name' => 'Maria Trinidad Sanchez',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => '75f130a6-f69b-4fdb-91b8-61ccd353df2d',
                'name' => 'Morogoro',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => '75f596a9-0b77-40cf-8026-94d93efb833a',
                'name' => 'Chalan-Pago-Ordot',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => '7608dc5a-3ede-4d9d-b4b4-ca98801cc7a5',
                'name' => 'Ogres',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => '763143cc-b1a0-4200-a14b-a9bfda091094',
                'name' => 'Sao Vicente',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => '763aee18-007e-4f7e-a59d-c106c8e737a8',
                'name' => 'Herat',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => '765b4bae-b60a-479c-8a9d-3cd623b3c433',
                'name' => 'Lhuntshi',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => '76a66d91-2335-4588-ada9-390f9253a5da',
                'name' => 'Toelloese',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => '76b0c75b-9343-4c47-8a5b-bca8ceb5ea68',
                'name' => 'Cotes-d\'Armor',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => '76bfdb42-d914-4da0-a599-69ccb22fd968',
                'name' => 'San Luis Potosi',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => '76c7a740-ae9e-43dd-9d84-bf880cacf602',
                'name' => 'Samchi',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => '76e0a753-dba4-4b04-8020-71b43c04f9e1',
                'name' => 'Guayama',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => '76ecdb2f-67ac-441b-8ac9-5ffdb5590f72',
                'name' => 'Eastern',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => '77003e28-8ff9-4edb-8da7-3d0638521fb1',
                'name' => 'Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => '7721d6b8-c175-4bd7-bc06-36fbb9086905',
                'name' => 'Mykolayivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => '7736be93-7faa-4bed-9061-5e04a42623aa',
                'name' => 'Cartoceto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => '773d6fee-f15a-47f4-915e-933a2b78e255',
                'name' => 'YunLin County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => '775a4c97-abf8-4d80-9326-27ebd777f861',
                'name' => 'Habiganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => '7762155e-3b30-4493-8ab1-bace03589cf4',
                'name' => 'Acre',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => '77807924-c29a-4897-817a-23e6aa8ec92a',
                'name' => 'Aleppo',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => '7795a912-4697-4755-a0d1-0ccca512a681',
                'name' => 'Nord-Est',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => '77ae45f0-88e3-4dcb-bcf6-161ab8343e22',
                'name' => 'Singapore',
                'country_id' => 'bc69d33c-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => '77c6ef24-5146-4aea-b2f4-501e94e4b43e',
                'name' => 'Nong Khai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => '77d2345a-1b46-4e83-8f17-1e10cd492d61',
                'name' => 'Cat Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => '77daac64-987c-408f-8d7d-d3584dc541fc',
                'name' => 'Njazidja',
                'country_id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => '77f2a873-99ea-458d-8b5c-597446bb366b',
                'name' => 'Paktika',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => '77f90f3f-3e34-4908-802b-e259d7c19074',
                'name' => 'Serrai',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => '780f083d-b998-45bc-a553-263fdaa82a3e',
                'name' => 'East Berbice-Corentyne',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => '7810e2e6-40c1-4946-ad60-374644343fbe',
                'name' => 'Kelantan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => '78416daf-0dd0-40fe-b050-48f95c0795ca',
                'name' => 'Limburg',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => '78510fd5-0ac2-4e19-914e-8933f636d295',
                'name' => 'Kalmar',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => '7864dd90-699d-4769-9659-d589517f2d81',
                'name' => 'Brescia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => '786834be-78e0-446a-9e9c-be2e1ea74d43',
                'name' => 'Rondonia',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => '786a25bb-1e50-4900-99de-7f121c0329b2',
                'name' => 'Atafu',
                'country_id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => '78a00ade-148e-4c6f-bcab-8546ddb4f604',
                'name' => 'Chon Buri',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => '78ac7bc3-244e-4eae-8e49-9696a53a342d',
                'name' => 'Denguele',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => '78ba916c-14c1-40ea-8d4e-1a92f00384ef',
                'name' => 'Bubanza',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => '78cc9009-1400-47ac-9835-8a102a67160e',
                'name' => 'Samos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => '78d15496-49c7-42df-9067-2aca6b24cd3a',
                'name' => 'Massachusetts',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => '78e290d3-d1ad-485d-beb5-d978ba01be62',
                'name' => 'Hofu borgarsva i',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => '790ab8cc-eb88-4329-8986-9e4e9e59697a',
                'name' => 'Wiltz',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => '790dcab0-d275-4e66-8686-7b8111e62e2d',
                'name' => 'Kurigram',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => '791af1ea-98f3-4dd0-a868-c8ffdedac157',
                'name' => 'Aur',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => '7931be85-519d-4b69-a89b-1cf9137c2f56',
                'name' => 'Kerouane',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => '7937892a-f32c-42d5-be0f-cd66eddcbbaa',
                'name' => 'Haut-Rhin',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => '794d4e5a-79d7-4af7-bd91-2304153c0c36',
                'name' => 'Luzern',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => '795413bd-d8c8-41f1-8fc5-cdbdb0b80de4',
                'name' => 'Bocas del Toro',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => '7955deea-3df2-4295-af78-d163dd6f398d',
                'name' => 'Naryn',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => '795b965e-cc01-4b46-a2d3-231155ea386c',
                'name' => 'Penal Debe',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => '7967c390-78d0-4bf6-a26a-30efe6d87de6',
                'name' => 'Taejon-gwangyoksi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => '796ce7fe-c08f-484d-933a-4f8e603adb22',
                'name' => 'Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => '7971bba0-4c47-4df2-92e8-8165a37a8f76',
                'name' => 'Cayo',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => '7972c2b3-1c38-4966-b44d-5329c96d5b9c',
                'name' => 'Yogyakarta',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => '79a1e0bc-f700-4352-9225-67398895d92b',
                'name' => 'Zakinthos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => '79b3c118-066b-4705-af2f-9484b2a9e80b',
                'name' => 'Malwana',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => '79b99e91-b47b-4bd0-86de-a827f5026c0b',
                'name' => 'Tukuma',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => '79bac5fd-b4ed-4dd3-9290-2231ee4d852a',
                'name' => 'Algiers',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => '79c630bd-9617-43e8-a149-278910a4124f',
                'name' => 'Gegharkunik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => '79cc6412-e952-4b5a-a656-81b270387d88',
                'name' => 'Tarawa South',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => '79e2c68b-70c2-4f25-8f0c-58c8436844b4',
                'name' => 'Mbeya',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => '79e4e95e-6e23-4894-8337-0284b6d0372a',
                'name' => 'Podlaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => '79fab8a8-8b2e-4306-a4ff-e3fc003133a7',
                'name' => 'Sawhaj',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => '79fac150-0926-4e2d-b68b-a0ec0d7b70b3',
                'name' => 'Sirvan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => '7a053fa6-5de5-4469-b6d5-10a81d4327aa',
                'name' => 'Agri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => '7a1f7fb6-45aa-4d58-8dff-fa10195c125a',
                'name' => 'Poznan',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => '7a23dfe0-999b-4f04-84f0-8b06ecba3c94',
                'name' => 'Chai Nat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => '7a35a8cd-03a5-42f5-a560-ff1045bd53f5',
                'name' => 'Mat',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => '7a35f968-61e1-47c9-8ea0-891e5e138085',
                'name' => 'Cheltenham',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => '7a5153cb-a92d-427e-a157-2b23794412f5',
                'name' => 'Nong Bua Lam Phu',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => '7a51b264-9585-4c08-8fa6-8c79f5da33a1',
                'name' => 'Merseyside',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => '7a60ec8e-8877-472d-9465-ab3de8796212',
                'name' => 'Bamiyan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => '7a80d28f-891c-43a6-895e-06bd4c435d5a',
                'name' => 'Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => '7a8ea7e3-9054-4a33-94c0-e7e44dadd0f7',
                'name' => 'Nakhon Phanom',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => '7ad3cee7-c8fa-44ac-9ff9-e5ba9c56efc0',
                'name' => 'Bergen',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => '7ad720cf-3621-4729-a049-7dd57d5091b2',
                'name' => 'La Vega',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => '7aecf03c-5e0b-4808-b990-6c972b5156b3',
                'name' => 'New Providence',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => '7aee4f80-73be-4060-9e6a-23e588668046',
                'name' => 'Tasmania',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => '7b09f77d-5e54-4b1c-a025-ab490e38272e',
                'name' => 'Ujae',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => '7b1d6df9-9b17-4a78-bf07-43cf11a2b942',
                'name' => 'Netrakona',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => '7b338ca1-fe3e-4ee3-8b27-82b81ef73084',
                'name' => 'Narora',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => '7b3577db-ffbf-4ddc-a0cb-2a4483a6211d',
                'name' => 'Jihocesky Kraj',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => '7b452c92-a9d4-4907-a671-54e88283cdc7',
                'name' => 'Limassol',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => '7b51e300-0ec3-4add-b0e3-c637fa600257',
                'name' => 'Pazardzhik',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => '7b5d3930-b249-4b26-b50c-8559cd9c04ed',
                'name' => 'Cunene',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => '7b8247a3-8bb3-4249-a6b9-aa04c33619cf',
                'name' => 'La Altagracia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => '7b88bb84-317d-446a-860e-5465820b0f34',
                'name' => 'al-Karak',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => '7b902629-2ed1-4c75-bcd7-bd0d7b6701a8',
                'name' => 'San Vicente',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => '7bb3d698-d6d4-4d14-8d5b-958c105973af',
                'name' => 'Machinga',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => '7bcf2183-c6ee-44b1-9fd5-c7e12a65fcf0',
                'name' => 'Saint Ouen',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => '7bec5298-baaa-43ef-97c0-255f713df06e',
                'name' => 'Tiyarat',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => '7bfc4691-a753-48b5-aa92-3ba7a0e3eabb',
                'name' => 'Kartuzy',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => '7c181e13-a0b5-410e-af71-af2432725f4a',
                'name' => 'Donets\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => '7c3e55db-0ba1-4fa7-8db2-623e401d1192',
                'name' => 'Kigoma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => '7c53db19-2bdb-45c0-8e4b-bcd1780dd44c',
                'name' => 'Saskatchewan',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '7c57c04e-6b15-4a1c-9c22-2e2f124ba74c',
                'name' => 'Butare',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '7c696859-50a2-439d-beda-8a09651b8856',
                'name' => 'Karlovarsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '7c774c0c-f9b5-421c-baaa-87ede2259265',
                'name' => 'Hordaland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '7c78ed42-1d15-4713-9210-cf1041193d72',
                'name' => 'Nidwalden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '7c79d96f-d087-4ebf-b9f9-c29e223ff5bb',
                'name' => 'Comayagua',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '7c80cfde-fa9c-4599-b5b6-588721e43293',
                'name' => 'Takhar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '7c9a0675-87c1-416e-bf31-f4a6075cc76f',
                'name' => 'Remich',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '7cdd4128-534a-4497-a1fa-d3809e7e78c1',
                'name' => 'Volyns\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '7cdfb01e-6f3f-446f-8f39-fccd5a612b03',
                'name' => 'Christmas Island',
                'country_id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '7cf597f7-6b86-41a2-bce4-4626cf98b25c',
                'name' => 'Giresun',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '7d0bc953-3210-4f3d-8788-706475802493',
                'name' => 'La Desirade',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '7d145a08-a54b-4b76-9dd8-f6fbe480278b',
                'name' => 'Pamplempousses',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '7d18f28a-439b-431b-9a1f-e2a0e26599ba',
                'name' => 'Kayseri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '7d370bb0-a2fd-4168-ae74-7f0191f316f3',
                'name' => 'Malatya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '7d37b34c-c891-4d3e-9cbf-52e133066c92',
                'name' => 'Sibiu',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '7d39f40e-aa36-43b6-a959-7ff69236fc3a',
                'name' => 'Kunene',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '7d3c1036-8462-46ee-a637-8806ae5729be',
                'name' => 'Henan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '7d83c9b3-baf5-49c1-8ebc-00a772af4631',
                'name' => 'Izabal',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '7da318e9-98e4-438b-b6c8-f4cf486d6553',
                'name' => 'Ntcheu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '7daa151d-a1c1-4e2f-8980-a6ff36ad3da6',
                'name' => 'Zuid-Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '7dace7be-a74e-437f-9f50-af630ca582ef',
                'name' => 'Ilam',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '7db0ab90-0358-4549-9231-7948c01e383f',
                'name' => 'Csongrad',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '7db6e5c5-8e52-40bb-88ee-94b11f74693c',
                'name' => 'Soriano',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '7dc6f3a6-ec9d-4125-badc-f93f2297bca2',
                'name' => 'Viqueque',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '7dd4f5df-3655-4494-b225-73cadf8ec0d8',
                'name' => 'Savanes',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '7de1432c-f7e0-45c6-9f4a-044e69c889fa',
                'name' => 'Aust Agder',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '7df0fd9c-93de-4946-a6ff-755d9aa62aaf',
                'name' => 'Kachin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '7dfa07af-4527-448c-888a-7d9e0a193471',
                'name' => 'Dnipropetrovska',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '7e07d357-9dff-4572-b832-7ead4d56798c',
                'name' => 'Kasungu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '7e143b2e-d219-4876-a72a-33a004e22646',
                'name' => 'Bundesland Tirol',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '7e16038f-fa6c-4dfb-b7ae-1d8d225d6753',
                'name' => 'al-Khartum',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '7e1754d7-4fcc-4569-bee0-db9d4259c615',
                'name' => 'Galati',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '7e1bd9ab-353e-4f58-a7a0-0998e2f80ed7',
                'name' => 'Kouroussa',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '7e2f1447-01a2-4c2b-9cb0-8df30eec6a66',
                'name' => 'Dededo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '7e2f28f3-b7bb-4957-8c0b-9fae9b40b234',
                'name' => 'Orebro',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '7e35f6c2-d382-40f7-9519-89bef96b8e87',
                'name' => 'Coquimbo',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '7e4426aa-0f38-4217-88c2-6c8a790203d8',
                'name' => 'Tungurahua',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '7e65fcee-8aab-4a17-a7b1-56cfba68135c',
                'name' => 'Loei',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '7e6e6eef-ae56-4963-bcf3-d19831f6101b',
                'name' => 'Riviere du Rempart',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '7e78eda7-137e-4e01-99af-6d417bbcb545',
                'name' => 'Meta',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '7e804188-ab69-46be-9120-6d15ff7e2965',
                'name' => 'South Dakota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '7ea1fbfc-abe8-409f-a00d-d35d2fab39d2',
                'name' => 'Herault',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '7ea88b95-f7e9-4828-b7d7-97e47848a0c1',
                'name' => 'Presidente Hayes',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '7ec45504-62b9-4556-8e93-b8132bed4ae1',
                'name' => 'Pasco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '7eca18a5-bd63-4ca1-9205-6418c3be3d41',
                'name' => 'Carole Park',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '7eee41ee-0c76-4782-81a9-abef21713ef9',
                'name' => 'Perm',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '7ef22e25-6e49-4385-b853-68fc33001260',
                'name' => 'Kanton Aargau',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '7f072bff-83bf-44dc-92ce-0d7a7b98846e',
                'name' => 'Chuadanga',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '7f11e303-cc49-4235-b886-4d0ce591837c',
                'name' => 'Constanta',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '7f1a42c9-2ea1-4e01-aea8-1500dab5ff67',
                'name' => 'Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '7f1c1d57-d284-47de-a35b-d62aae32c590',
                'name' => 'Ontario',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '7f2c4249-d72d-4473-9fc9-1a984366baba',
                'name' => 'Rajbari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '7f41247c-81ba-42d7-afca-a1a4f740c42b',
                'name' => 'Chaco',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '7f51ac55-e6e5-4039-8453-4787fd9a76e7',
                'name' => 'Rivnens\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '7f64bc77-7621-44b3-9faf-a6fbf9e6250e',
                'name' => 'Moka',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '7f8fba59-5429-49d2-a3a8-a7603d529799',
                'name' => 'Triesen',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '7f911718-cafc-4463-9c4d-e721885f58a5',
                'name' => 'Soum',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '7fa07ab3-0e84-4462-96b2-12f973c923ff',
                'name' => 'Jiangsu',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '7fad576b-0dc9-4cc8-86a7-926d042312e9',
                'name' => 'Hato Mayor',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '7faee456-264e-478c-81f2-f38cd1c5a490',
                'name' => 'Tiris Zammur',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '7fbfa910-35ef-4b0b-96a0-09de907d949f',
                'name' => 'West-Vlaanderen',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '7fc2929d-e224-4c9f-b0d7-a3b42eb13736',
                'name' => 'Laguna',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '7fc69f45-4922-4dd0-ac80-232bf424933b',
                'name' => 'Abidjan',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '7fc82c9d-a1c0-4f55-b3d5-121f05e63476',
                'name' => 'Ramsey',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '7fd11763-fb7a-4be2-8c0a-e54cd3f45101',
                'name' => 'Bashshar',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '7fd3e6bf-dd67-480a-b3bf-47c2391dafef',
                'name' => 'Chandpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '800fc017-e018-402d-bcdf-926226acc26f',
                'name' => 'Land Thuringen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '8039cd8b-4738-4fd5-af1b-34c8a67b78c8',
                'name' => 'Larisa',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '804e8441-9295-421d-b87f-0bc3d2f2264b',
            'name' => 'Vatican City State (Holy See)',
                'country_id' => 'bc6a01c9-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '805ae0e6-1f62-4986-964e-a6f20e82beb7',
                'name' => 'Maldonado',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '8075e9a7-f3ac-40d4-ac1b-b3387461dc8a',
                'name' => 'ash-Shati\'',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '80899e48-ab02-4c68-9b7f-f84634e27ce8',
                'name' => 'Saint Peter',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '80a0bef7-1f07-4bfd-983e-faff4e0d55a9',
                'name' => 'Macenta',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '80a8cca9-8d22-4e15-957d-8eabcb8f17b7',
                'name' => 'Sangha-Mbaere',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '80acf4c8-eaec-4aa5-a3b8-873fa655560e',
                'name' => 'Pondicherry',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '80c7453d-e70c-4299-9948-6b328639b846',
                'name' => 'Federally administered Tribal ',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '80cec561-2a1c-4730-b0ca-a963db3b3ea3',
                'name' => 'Medfield',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '80e79707-70a2-430c-a91d-62724d2066b4',
                'name' => 'Sanmatenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '80ee2e84-5f3f-4c5a-9410-9ca0679138ee',
                'name' => 'Distrito Federal',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '80eef851-29f9-4c68-b6cd-285bdc2b0fe3',
                'name' => 'Kayanza',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '80fe5c40-a479-497c-9076-bf9a4df960ca',
                'name' => 'Yona',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '81016a6a-f970-4f05-ad1e-21a948887830',
                'name' => 'Pwani',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '810e4081-cd4d-4245-a9da-0babdc8c7385',
                'name' => 'Finnmark',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '813e6bf1-8173-4937-89d4-6ddd97e9f3ec',
                'name' => 'Taqant',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '81412647-6ab9-4c45-a6d9-253e209a3fbf',
                'name' => 'Rio Negro',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '8144e1ca-7ce4-40cc-ac2b-48959bb36cc9',
                'name' => 'Vestsjalland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '815460cb-b191-4a5f-a1d9-6e703e0a2974',
                'name' => 'Bu Jaydur',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '81765eb4-2d3f-46b1-a267-4055a146cf16',
                'name' => 'Taraba',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '818c2d46-6817-43a8-89ec-96ccdc284c60',
                'name' => 'Echternach',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '81ba9839-e8bd-41f8-bbe6-f54183b01e8c',
                'name' => 'Gaza',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '81bb0317-a385-496e-bd05-aecd417626c3',
                'name' => 'Hovsgol',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '81bef898-3716-423d-83fc-7a451306eda5',
                'name' => 'Monte Carlo',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '81c3d2c6-0034-408e-8652-0e5dcfde699d',
                'name' => 'Limpopo',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '81c4ed01-8d84-4751-a03c-0ec100845cf5',
                'name' => 'West Lothian',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '81cd9874-488c-4505-b357-7a75f2079c4e',
                'name' => 'Bay of Plenty',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '81d519a7-0fc3-4012-9669-39023b788481',
                'name' => 'Gevgelija',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => '81df31fe-090b-475b-90e3-232d43cb5412',
                'name' => 'Hawaii',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => '81f2b4e9-2c57-4315-89de-184033081efd',
                'name' => 'Kalmykija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => '81fae44e-9efd-4219-a17d-9df4bc39aec3',
                'name' => 'Western Australia',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => '8204aa28-33f2-4424-b55d-2dc9d6fd7d46',
                'name' => 'British Indian Ocean Territory',
                'country_id' => 'bc69220a-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => '8209cb5f-2fa2-4344-a3a2-34c45d8894e3',
                'name' => 'Nottinghamshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => '8220a2b3-c26c-45d6-ad40-6f2417f4ba23',
                'name' => 'Mannarama',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => '82378641-8d71-4270-9cca-eb9ddd312ed4',
                'name' => 'Umtentweni',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => '8263db48-0d01-4f05-b931-9de65188eedb',
                'name' => 'Caazapa',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => '826d0e63-f774-4a42-8b06-907066eb6783',
                'name' => 'Ubon Ratchathani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => '82868e38-d1c8-467a-81bc-b465b8ed64b9',
                'name' => 'Rimini',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => '82cc2a2d-104d-447f-b967-e51c23538717',
                'name' => 'Jizan',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => '82e594da-a6e1-48e5-92e5-cecbddf9179c',
                'name' => 'Tinh Can Tho',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => '82ea38e5-769c-4714-b41e-5de70342c522',
                'name' => 'Napo',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => '82ecf9c4-9346-4901-89fe-9fd19cc12332',
                'name' => 'Tarapaca',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => '82f0c03a-1599-4eac-a6db-6e756b50fadc',
                'name' => 'Mayo',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => '82fe4ceb-506c-4871-a1b7-a4b9f104a764',
                'name' => 'Nassarawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => '82fe9138-7f22-4dd3-8a09-93b270eb62a3',
                'name' => 'Antalya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => '832ea91f-d794-4cc8-ad7f-f6bf414ee729',
                'name' => 'Saint Davids',
                'country_id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => '8336091b-dfae-4b51-bfc2-4f9cf69b022e',
                'name' => 'Boralesgamuwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => '8339cf0c-10ef-4623-a9ca-f5a58098f798',
                'name' => 'Yonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => '834aeb4d-c40a-471a-854d-b65140e61cce',
                'name' => 'Rheinland-Pfalz',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => '835e44b8-e87b-4bae-ac24-63f48816701f',
                'name' => 'Taurages',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => '836d9bea-96c7-4962-b200-281671ff9d4d',
                'name' => 'Barisal',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => '838946ac-5f74-4634-bacd-f119f5cb923d',
                'name' => 'Morbio Inferiore',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => '839c0b68-b28e-4aca-837c-b093036156ea',
                'name' => 'Hios',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => '83a78890-dc72-4499-8e55-2e65955ca48d',
                'name' => 'Maine-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => '83b09441-cbb3-4e47-896e-484b93211977',
                'name' => 'Sassari',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => '83bab53e-959f-4103-bc70-bd2459c80af1',
                'name' => 'Siena',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => '83c56faf-84ef-411f-86a2-059f99025bc0',
                'name' => 'Norfolk Island',
                'country_id' => 'bc69b976-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => '83dda122-0ec6-4381-a68a-380af69fdd14',
                'name' => 'Argyll',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => '83e831f5-9640-4541-a01e-3978feaf6b92',
                'name' => 'Port Saint Mary',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => '83feaf13-63f3-4027-92c7-50b6f8edc575',
                'name' => 'Yala',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => '841c641a-e546-4812-ac0c-7505067d6bad',
                'name' => 'Gard',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => '84320029-1a9c-414e-a0d0-85e44bfadd9c',
                'name' => 'Corse-du-Sud',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => '84354596-ec47-4d29-8424-65402674aff5',
                'name' => 'Woleu-Ntem',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => '844255ce-9283-4bcb-8110-8ccdfc4d8405',
                'name' => 'Rusayl',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => '84462fe2-820c-41a4-881e-276040d9502e',
                'name' => 'Samarskaya',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => '844c3455-5259-4b7d-9b1c-b8164a22e9f9',
                'name' => 'Phra Nakhon Si Ayutthaya',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => '84786cb5-670c-4cb8-92c2-3a609c25f3e1',
                'name' => 'Kotaik',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => '84a0392c-f9ac-41db-9618-6e9fac46d8a4',
                'name' => 'Airai',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => '84b5b828-dd48-47da-9baa-9b25f40a6379',
                'name' => 'Yozgat',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => '84bd328a-00da-4734-bcc1-44706fa23a61',
                'name' => 'Valga',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => '84c08c52-b33e-4820-9412-d9a6ff6a8665',
                'name' => 'Vermont',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => '84de349d-7949-448c-bdd2-173f02738e0c',
                'name' => 'Benevento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => '84ea5137-5187-4fb7-8a63-cb7766f3bf15',
                'name' => 'Storstrom',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => '850acef4-3690-4ab7-8200-6ec0ac6982b3',
                'name' => 'New Ireland',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => '852a7694-4568-4469-b517-6987f5911566',
                'name' => 'Obcina Vitanje',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => '8536f8d3-e811-4907-8cd5-2f1578bbc320',
                'name' => 'Sikkim',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => '85538d8e-066f-49fe-a257-5467baba4190',
                'name' => 'Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => '856b3762-801a-4189-9c40-ede4ba18963d',
                'name' => 'Astrahan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => '8571d4c5-aff0-4dd7-adbd-c9a9437552e2',
                'name' => 'Vallee du Bandama',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => '8575b530-8546-4533-abc4-2a89d77378e9',
                'name' => 'Ngaraard',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => '857f8f50-10d3-4b47-a9c6-b05b00534635',
                'name' => 'Magdalena',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => '8597e77e-0d88-4acf-8476-2e211ef42775',
                'name' => 'South Pacific',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => '85a7b7e6-c4be-4a28-8dcb-833b20ae420b',
                'name' => 'Vichada',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => '85b136f2-5460-49aa-990d-b67ad03579fc',
                'name' => 'Halandri',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => '85bd60f0-b96f-41ca-9a4b-3a55b7793fe5',
                'name' => 'Lahij',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => '85c5eda5-79b5-4c4d-abcd-2039aff86dd3',
                'name' => 'Straz nad Nisou',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => '85cd9630-24c7-4c3a-8f4d-500762bd4a23',
                'name' => 'Shinyanga',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => '85cfded6-2d1b-4193-b035-133f05eea4c3',
                'name' => 'Misratah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => '85dca955-7a5c-4e4b-985b-02c249b674be',
                'name' => 'Loir-et-Cher',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => '85dde306-2e04-4a17-9fc6-cb479e77d031',
                'name' => 'Kusaie',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => '85df37fc-8de2-48d9-9d20-033d52e11127',
                'name' => 'Saint-Pierre',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => '85fad87f-1bba-4624-afb2-9d16356dbe3d',
                'name' => 'Phetchaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => '85ff8dca-52aa-41dc-8338-0b8ebe583af2',
                'name' => 'Flacq',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => '8602025e-f04d-4fb6-ba46-f49c8ca5b36d',
                'name' => 'Bafata',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => '86090a55-2650-404b-a8c7-9b40a79410e7',
                'name' => 'Viborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => '86169e6c-9876-456e-b32d-36fc60689202',
                'name' => 'Guizhou',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => '8622c1c6-00d3-4460-be71-7d90df8dfc0c',
                'name' => 'Sondelor',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => '862cca27-2da1-485a-beb4-69773ce54b1b',
                'name' => 'Elazig',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => '864eec60-8be4-4000-bc3e-654e6a916274',
                'name' => 'L\'vivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => '865be1a1-0157-4e80-9e79-7746a349128b',
                'name' => 'Chiesanuova',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => '866ed8f3-d409-4869-bdfc-cb8a02cfe8d3',
                'name' => 'Delta',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => '867244f3-6afe-4e20-a890-639232b48bbc',
                'name' => 'Shanxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => '86769fdf-ed12-4619-b831-5dc1caae1750',
                'name' => 'Fejer',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => '868a8f4d-03f1-4570-b97f-84d9fac1d228',
                'name' => 'Hebron',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => '86abb4c9-4da4-4ef0-bc92-77d19849dd8a',
                'name' => 'Siem Reab',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => '86ad9f56-f92c-4d6e-89e1-28210387247e',
                'name' => 'Qazvin',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => '86c35e06-88fb-4eea-9485-83c3f940cdc0',
                'name' => 'Valkas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => '86c36f3f-a265-4208-98d4-137db9a7e7b5',
                'name' => 'Bat Dambang',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => '86dc7ce7-5823-43ba-b811-c7118424e079',
                'name' => 'Qinghai',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => '86e30ab1-48ed-4cad-95ac-99afb3918e30',
                'name' => 'Wilaya d Alger',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => '86e4c773-ac87-4ce8-b923-a5b4c59e7e47',
                'name' => 'Xianggang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => '86eec0e0-6865-41c9-85ed-6aa95802a787',
                'name' => 'Tamaulipas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => '86fe72ec-05be-44d0-a717-9ac055b6a4a4',
                'name' => 'Tokat',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => '871737cc-c874-4a45-adea-0712634b37e5',
                'name' => 'Imereti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => '871f0e27-ffc9-41a7-bb0a-a9bf0abf925a',
                'name' => 'Wisconsin',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => '873d95bd-0f9c-4e55-a2bd-f1b0a91bbf56',
                'name' => 'Kampot',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => '8743c67f-b7f9-49aa-bc16-dded5aa50525',
                'name' => 'Su uroy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => '875cd694-0cca-49e4-96f5-ad9ffda070b6',
                'name' => 'al-Qalyubiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => '8767b95f-db48-4c3e-bdb0-529824025e89',
                'name' => 'Mugan-Salyan',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => '876ac671-bbe6-4425-ad90-cf4822f404b1',
                'name' => 'Nakhon Nayok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => '876b9d09-6ad9-492b-90c6-e97b32e08329',
                'name' => 'Kweneng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => '877de2c2-5d00-4b22-8090-b968aba85055',
                'name' => 'Trentino-Alto Adige',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => '87aa0dc0-3103-4c94-8dfc-92363484c4ee',
                'name' => 'Jarva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => '87d3c323-2a53-430c-8cb4-0ae7c99e4ded',
                'name' => 'Mankistau',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => '87dc0584-386d-46dc-9542-88960e70e0a7',
                'name' => 'Republic of Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => '88056659-7057-4232-bf86-7fb0c9062c35',
                'name' => 'Lubombo',
                'country_id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => '880654e6-0089-446a-a2c7-d91843c13565',
                'name' => 'Tripura',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => '880d5439-bae5-444c-a371-d321bba032ec',
                'name' => 'Mures',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => '8812e452-daed-46c0-999b-02e9a69ef263',
                'name' => 'Carabobo',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => '881d3109-5f42-4709-a0e8-c39931af4172',
                'name' => 'Vakaga',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => '8821c854-d2fa-4a7e-ab56-3f86648f40fc',
                'name' => 'Hawke\'s Bay',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => '883d6acd-675f-4651-b4fe-e8cb3c2a5b85',
                'name' => 'Wakayama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => '884e8ed2-7031-4c38-a7f6-2824be663531',
                'name' => 'Lilongwe City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => '8869366c-a65b-473d-b8e3-35bcc46e9cb3',
                'name' => 'Nakhon Sawan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => '8886dbed-13fe-4bf5-b576-5db9dffbb4e8',
                'name' => 'Fa\'asaleleaga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => '888b6310-467c-4d12-ba43-97b3d3668b4a',
                'name' => 'Hunan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => '88c09fbb-cfd4-41df-a425-d783a9016617',
                'name' => 'Sonsonate',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => '88d04b1c-5358-4ca3-93f9-0e83c94f6cdd',
                'name' => 'Razgrad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => '88efad90-4007-4352-90d6-37c182514863',
                'name' => 'Uthai Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => '88f7f56c-7133-4f75-8c2e-a4322e5eabdb',
                'name' => 'Issyk-Kul',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => '8903144f-9cfa-4c14-a50b-73d0da19252c',
                'name' => 'East Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => '890962fc-3b5f-46c2-93b3-4b3e8dc31f29',
                'name' => 'Bornholm',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => '8918cd74-4320-47db-87ec-7fcebf7ef7bc',
                'name' => 'Veliko Tarnovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => '891a530b-2c77-47bc-8a99-2ae698b7edd1',
                'name' => 'Saint Joseph',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => '891ee45c-d0ad-47b0-8b8f-f96b33173424',
                'name' => 'Esfahan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => '89217803-403f-4458-ba74-8d891e6323a3',
                'name' => 'Saint Elizabeth',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => '892bcd26-b4ef-4aea-a115-a8eca4411098',
                'name' => 'Saravan',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => '894c957a-483a-42c0-b9c3-ec17aa56a96e',
                'name' => 'al-Wahdah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => '894d2ae8-8899-43ec-8578-95d8f4596ee1',
                'name' => 'Badgis',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => '8959b369-d396-4283-827a-c9f25edcd96a',
                'name' => 'Cuneo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => '8976ec6f-929f-49b2-bc35-ac4f32183b33',
                'name' => 'Svay Rieng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => '897e4f98-c0bc-4076-908b-71c15c5dc1ca',
                'name' => 'Batis Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => '8985b28e-87d1-4a0b-9ca8-163bae0e8d30',
                'name' => 'Gagaifomauga',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => '8998288a-ce32-49f8-a794-9c24f07e13db',
                'name' => 'Mandalay',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => '89b5e390-ed47-480a-ac35-841f82f184a0',
                'name' => 'Malomice',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => '89c7ccdf-6b49-428b-87e4-f2e6394fafb1',
                'name' => 'Ille-et-Vilaine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => '89ccb030-2216-4bf8-a431-0220597f4b1c',
                'name' => 'Brazzaville',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => '89d0d9cf-113b-45f0-a5ae-3b18ee5f295a',
                'name' => 'Niassa',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => '89d7fd34-096a-4c40-af5a-840f3eac52ee',
                'name' => 'Northumberland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => '89d9e09b-7578-41a3-afd9-a4147c5ff94f',
                'name' => 'Afar',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => '89dfb4b0-f1ff-4bde-a1c4-52514c14f711',
                'name' => 'Gumma',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => '89e49827-f3d6-4f5b-a6dc-ead7e9d5adb7',
                'name' => 'Phitsanulok',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => '89eabb96-f646-4a31-8d67-d3ebbe6cebe3',
                'name' => 'Nanumanga',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => '89f1d2b0-f1c8-4ac3-84b5-e2cb121e0420',
                'name' => 'Kichevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => '8a0bd821-8717-4775-9560-c313bcb352de',
                'name' => 'Saint Peter',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => '8a1a518b-ec3f-490f-b9a6-05358f259b83',
                'name' => 'Tomsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => '8a1c852a-ba76-434a-8377-3e12cee7f880',
                'name' => 'an-Nuqat al-Khams',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => '8a23d44f-3f7d-4b69-a4a9-bff390aee06b',
                'name' => 'Isparta',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => '8a3a3629-6ef0-41ca-a61c-6133ab6abd33',
                'name' => 'Cagayan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => '8a3bbfce-02cc-4475-a4ae-fffa9ba194ad',
                'name' => 'Saint-Louis',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => '8a5a88ee-7465-4824-a443-900de3bc12a5',
                'name' => 'Cuenca',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => '8a6a1bda-238f-4116-adc8-4c105f4520a2',
                'name' => 'Rongelap',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => '8a6e976c-f447-4a6f-8538-221fefc9556a',
                'name' => 'Pousat',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => '8a717ae2-1d61-4ea1-a82c-fc18c5d5424f',
                'name' => 'Voru',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => '8a73075e-c75f-4426-875d-e7773f911687',
                'name' => 'Nan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => '8a7799b9-017e-4a3d-8000-527dbcfb58e5',
                'name' => 'Karabuk',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => '8a94be6d-36dd-4994-9e13-83da6695d1d5',
                'name' => 'Twickenham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => '8a964e51-d5a2-4313-b76b-1a023dbf572d',
                'name' => 'Trarza',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => '8a9c2e4f-0575-40d4-88fa-d145f1f5890c',
                'name' => 'Ternopil\'s\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => '8ab0d14e-9c69-4963-9877-d6eebee762b0',
                'name' => 'Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => '8ab51326-5885-4af0-9c32-8fde466412e9',
                'name' => 'Viterbo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => '8ac040d6-1723-48c1-9ce8-ead8f5402c8e',
                'name' => 'Krakow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => '8ac50983-3cb4-42d2-a6af-c1fecb4d9e33',
                'name' => 'Balzers',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => '8ace920b-4d86-400b-ad83-2905cb69f7df',
                'name' => 'Slovenian Littoral',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => '8ade6ebd-21af-4bf0-b46a-8c08afa911e2',
                'name' => 'Houet',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => '8b2e839c-d0bc-49a2-83b1-f6ae60df2e8c',
                'name' => 'Gifu',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => '8b3c97d0-549b-41fe-bab9-628355a0d31a',
                'name' => 'Entre Rios',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => '8b3f1fc8-4662-4223-aae0-83ee9220e6da',
                'name' => 'East Lothian',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => '8b46b2cd-18da-4db5-b61b-e2ac917e6875',
                'name' => 'Oulun Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => '8b499912-6be1-4902-9f91-62fe8fe09625',
                'name' => 'Salmiya',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => '8b4eeaeb-8d0c-418d-aa51-e15cb03183f2',
                'name' => 'Schellenberg',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => '8b7cf05a-2061-4b71-9021-93a0cf8fb18c',
                'name' => 'Guainia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => '8b831b39-9173-4404-9f10-95cd498e8eea',
                'name' => 'Pieria',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => '8b8be89d-052d-4028-a5f8-77e2aca01cf1',
                'name' => 'Magway',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => '8b920e76-f18f-4526-81fa-533b961bcdf4',
                'name' => 'Badajoz',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => '8b947fd0-7da6-4bcd-9dfc-48e7310e77c7',
                'name' => 'Le Marin',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => '8b9908f3-fde0-421f-8a3c-488d23401866',
                'name' => 'Gisborne',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => '8b994403-891b-4664-bfbc-ff90c117fb41',
                'name' => 'Arhus',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => '8b9b38b3-72a6-48ca-a3f1-d174bcdb6294',
                'name' => 'Corrientes',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => '8b9e9581-bcc0-49d6-9481-a1114d9db190',
                'name' => 'Krasnoyarskiy Kray',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => '8baac751-6996-4af7-b204-cca58f33dc58',
                'name' => 'Alberta',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => '8baf9885-7366-42ef-9129-51679467bfdb',
                'name' => 'Labe',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => '8bdc6fd8-e5a4-4b89-8b2a-3c5905e80802',
                'name' => 'Lobatse',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => '8bf7749c-d799-4de5-85fa-dd9d29676609',
                'name' => 'Bur Sa\'id',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => '8bf99549-1aac-4039-90a3-a4a90d2889a8',
                'name' => 'Veneto',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => '8bffe5e7-00b4-449d-861e-831de384fc68',
                'name' => 'Charente-Maritime',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => '8c255fc1-d754-46bd-ba48-1b4e0ad6450c',
                'name' => 'Ondo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => '8c2e90c9-7ceb-4efa-9a1c-e9e2858c26e4',
                'name' => 'Krong Preah Sihanouk',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => '8c4642bb-3177-461f-b33a-40ba7c136af3',
                'name' => 'Nzerekore',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => '8c4e18d1-50f4-47b9-ba76-e5b2bc7c8ed5',
                'name' => 'Auckland',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => '8c5f8c07-7162-4700-93b4-70ae2079afa5',
                'name' => 'Samana',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => '8c66ad5a-eda9-47e1-9d7d-7361712b5cdf',
                'name' => 'Kassala',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => '8c6a5e37-cbf8-4572-9f10-7bfd30d5c450',
                'name' => 'Tak',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => '8c764bac-4845-4c29-a457-218f558b99a0',
                'name' => 'Talofofo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => '8c89d4be-d931-4cb8-be96-2e14f4978cbb',
                'name' => 'al-Qahira',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => '8c8d48da-2338-4f4b-8c4e-23241d732296',
                'name' => 'Souss Massa-Draa',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => '8caee8e0-7586-4db7-bf84-e71e5fa2d6bf',
                'name' => 'Northern Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => '8cbe0839-4ced-4365-a603-bde050c76eda',
                'name' => 'al-Wadi al-Jadid',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => '8cc47472-29c9-4bae-9009-9039f3586e0f',
                'name' => 'Fort-de-France',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => '8ce79daa-0f4f-430b-99c4-5f74685e8503',
                'name' => 'Sudouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => '8cf229bd-36d8-454d-bbae-287c98750eb8',
                'name' => 'Cher',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => '8d081c59-cd35-495b-b45c-24dc2cc4bf15',
                'name' => 'Territoire de Belfort',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => '8d0f22f2-9489-4ca5-a7ac-7e30bff67fa6',
                'name' => 'Samut Prakan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => '8d159dfc-ec0d-4701-9759-e0b9cae0cdba',
                'name' => 'Prahova',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => '8d1ffcf2-11d1-427d-8115-8033bbff639b',
                'name' => 'Ouaddai',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => '8d2757f3-8f33-42ca-b48e-cfd493f6f437',
                'name' => 'Mazowieckie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => '8d36ec09-c4a1-4243-b6b1-1c21eddefa8a',
                'name' => 'Khabarovskiy Kray',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => '8d401daf-dc00-49bc-8028-8924894cf44c',
                'name' => 'Madaba',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => '8d42876c-797f-47ae-ba34-67913f98fa13',
                'name' => 'Cotopaxi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => '8d6cb2a4-cf50-47cd-a882-3e1c9b39d11e',
                'name' => 'Al Khobar',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => '8d915d71-a89d-47e7-b156-95712a87235e',
                'name' => 'Ruse',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => '8d922915-449b-418d-ae25-788045489312',
                'name' => 'Caprivi',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => '8d9dfcd3-e688-4b98-b21c-17109404cf26',
                'name' => 'Hovedstaden',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => '8da7fd18-0963-4ead-a4e0-a494247a6a9b',
                'name' => 'Takaev',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => '8daeb9d2-feaa-4f39-8922-413e1380f222',
                'name' => 'Saint Clement',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => '8dbaf2f5-a333-431d-aa24-c1b3932a3416',
                'name' => 'Sumatera Utara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => '8dcf62ac-50f2-4e84-a373-a38552b9ae25',
                'name' => 'Hawalli',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => '8ddf6abb-73b4-4a03-b395-2e4eb8250b46',
                'name' => 'Guantanamo',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => '8e0e2d9a-2da5-4e6f-8bc1-453c0b06877f',
                'name' => 'Wokingham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => '8e11d0f1-275e-4f2e-bb9a-080d4ad807cc',
                'name' => 'Moyen-Ogooue',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => '8e306a4d-dc7e-4b1a-b918-9c346ea2a92a',
                'name' => 'Kalatura',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => '8e4d6be1-7b73-40a9-995c-6de175f4cc30',
                'name' => 'Perlis',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => '8e621b1f-1429-4a1b-a5cd-9bcf2b8da0e2',
                'name' => 'Heerbrugg',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => '8e679531-e538-4f4a-ae2c-efd5c9a3bc1a',
                'name' => 'Yalova',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => '8e80e383-694a-4614-9ea5-94a1bdafb7ed',
                'name' => 'Addis Abeba',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => '8e91f9e4-d8cd-4769-a22b-4743e1b935c9',
                'name' => 'Blantyre City',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => '8eb0e99b-2ab7-4fc5-9033-5ffc05d549cc',
                'name' => 'Ermera',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => '8edf968f-ca78-4a2d-8f42-3071818bd6dc',
                'name' => 'Naral',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => '8ee20233-4b34-4605-8d85-6fe7f9c79746',
                'name' => 'Olomoucky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => '8efd5abd-a882-428f-acbf-acd06c78a7c1',
                'name' => 'Dar\'a',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => '8f0704db-5458-47df-8cdc-26628eb8def0',
                'name' => 'Gracias a Dios',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => '8f082dc1-5c73-4b6d-89eb-1aa65dc97272',
                'name' => 'Ammassalik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => '8f1f7051-5861-4b3d-b39f-69333e5436a9',
                'name' => 'Karachaj-Cherkessija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => '8f35a06f-7918-450e-9dee-ce347ce9d078',
                'name' => 'Jawf',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => '8f35f5c3-92c6-498d-90c4-7c0be873ad3e',
                'name' => 'Jonkoping',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => '8f372de4-d2be-473d-b895-01b3bb8cd6fa',
                'name' => 'Gulf',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => '8f5410c8-9f9a-45b5-a48c-08e08d40592b',
                'name' => 'Tristan da Cunha',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => '8f5ad9b3-bb88-4003-9d57-16ca3f2d63b8',
                'name' => 'Sector claimed by Argentina/UK',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => '8f605030-d363-43e5-83ed-112ee7280f8c',
                'name' => 'Dambovita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => '8f62f8a1-2c46-49f1-a891-4b0093d0c662',
                'name' => 'Valencia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => '8f682041-88c1-4239-8ef2-c879d45d7a4a',
                'name' => 'Gharb-al-Istiwa\'iyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => '8f6b0fd4-399f-4592-8ccf-cb9638c8701f',
                'name' => 'Kgatleng',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => '8f75a04b-7901-4739-81f2-abec40db7eae',
                'name' => 'Torteval',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => '8f9c30f0-1966-4feb-b79a-da8ae635ef5a',
                'name' => 'Milan',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => '8fa78832-d6ab-46f5-8106-fae250cc797c',
                'name' => 'Permet',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => '8fe06d1b-d852-4501-94aa-c27da4fe34d5',
                'name' => 'Rjazan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => '8fee4a4d-c4f5-43dc-889b-2102cf2aa078',
                'name' => 'Centre',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => '8ff7c0f7-4331-497b-b210-488844627d0c',
                'name' => 'Nova Scotia',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => '8ffbf025-2d07-4e9a-aed0-0e09496d7144',
                'name' => 'Sicilia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => '9008ff21-ff39-4fc9-9a61-796a09060e94',
                'name' => 'al-Qunaytirah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => '9009a642-c83d-4ac3-8f64-da1771b68738',
                'name' => 'Nickerie',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => '901465e5-2b10-4944-b529-8360fc114da2',
                'name' => 'Namibe',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => '90213ab2-ec28-4152-bc49-e98b8151e017',
                'name' => 'Vologda',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => '90230cbd-65fa-45fe-8f19-57eed27e0cad',
                'name' => 'Adamaoua',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => '90295246-5dcf-440b-98b1-ca1237b95243',
                'name' => 'Roraima',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => '9040bafe-967f-4781-8b1e-ed82580f9c38',
                'name' => 'Cusco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => '9046d414-c437-4179-b3b9-75ebdfc89eb2',
                'name' => 'Kishorganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => '9060c184-6304-4ccd-9775-2190f897c25f',
                'name' => 'Yap',
                'country_id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => '90743e3b-379b-44f7-b3c3-1c81983cae23',
                'name' => 'Kastamonu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => '907e4a78-da84-47c3-962e-56bdb2ddcc3b',
                'name' => 'Albi Le Sequestre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => '90942186-766f-4a87-8e8c-a0a3024fdec0',
                'name' => 'Kabul',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => '90b80bea-ab44-4ca0-bede-ab3ca2f9c801',
                'name' => 'Dosso',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => '90d2d9e2-1f27-4070-a5b7-091f25e2b10b',
                'name' => 'Teraina',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => '90f037cf-6ffe-4d56-a6f2-aa6144381a36',
                'name' => 'Majuro',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => '911778bf-e73c-4a28-bef7-ca2ec2a383a3',
                'name' => 'Ita-Uusimaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => '914e3e81-7724-456e-86ce-864939b8a913',
                'name' => 'Nyanga',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => '9154662f-4541-4a58-9d7d-1252775cf508',
                'name' => 'Gorno-Badakhshan',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => '91660c94-5853-488e-8696-77d1aff576ce',
                'name' => 'Burgos',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => '918ecb20-d0a2-4dc4-9b12-bcf0917a484a',
                'name' => 'Bingol',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => '91978651-c59b-4fa5-936e-8b869b86fcb4',
                'name' => 'Cheljabinsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => '91a0aefb-b839-4698-9442-d2459f672940',
                'name' => 'Manus',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => '91d05369-b719-40b5-a035-a799c333a789',
                'name' => 'District of Columbia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => '91ddfee3-15f4-4e85-9648-2615196a0c64',
                'name' => 'Macau',
                'country_id' => 'bc6961c9-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => '91e0be23-d469-43bf-8c95-3c4e3f1989cd',
                'name' => 'Cokato',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => '91e70573-b94b-4f77-99ef-57917eb40644',
                'name' => 'Ram Allah wal-Birah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => '91ee5a5a-7691-4392-9f8d-ff0414cb9ea9',
                'name' => 'Songkhla',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => '91f6ae6e-cbd2-4885-825e-46ce4bf67697',
                'name' => 'Central Equatoria',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => '9223faf1-c85a-4bc0-b62f-b1de532c31ac',
                'name' => 'Ivittuut',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => '92609d22-45f0-468d-b423-10cbc56ad93e',
                'name' => 'Moskovskaja Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => '9265a619-f52d-4b0c-b447-d928813ea44a',
                'name' => 'Manche',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => '92857b00-59a0-42d0-b0c8-2bd90fa57d94',
                'name' => 'La Paz',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => '928dfb3e-1289-448d-a334-8084759680d8',
                'name' => 'Western Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => '92b94414-9f73-4de6-922b-4458361e6aa9',
                'name' => 'San Pedro',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => '92c51bdb-58a1-41c3-922e-52c0d78a62eb',
                'name' => 'San Martin',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => '92c860a0-8fae-4707-b2c2-8511f1032a3e',
                'name' => 'La Libertad',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => '92cdaa33-c80a-4814-ae29-365ecd6d6567',
                'name' => 'Dolnoslaskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => '92f6726a-a190-482c-add9-548435cdecfb',
                'name' => 'Guadalajara',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => '9303f01d-fc66-409e-802f-f62eaeb7afba',
                'name' => 'Prachuap Khiri Khan',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => '9306d0da-578e-493f-b29c-0473d8a13e21',
                'name' => 'Kukes',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => '93073b1e-2b2c-468b-a3c5-1d1c7da65cd8',
                'name' => 'Nawabganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => '932351a3-0544-4965-a289-f769f45bb8e4',
                'name' => 'Rio Negro',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => '933c3855-84a9-4541-9659-f55116e0136d',
                'name' => 'Manicaland',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => '93471769-dd50-4891-bc59-c619c0883dc2',
                'name' => 'Valle del Cauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => '93511666-3ff0-4742-b36f-8f917681922d',
                'name' => 'Tolima',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => '93590971-0c59-4fa2-b94f-5b6f63ce7d35',
                'name' => 'Birmingham',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => '9366130f-dda2-4806-99e0-ed2d720a18d5',
                'name' => 'Byram',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => '936a7d8b-484f-417d-be50-e38c2606cb6d',
                'name' => 'Phrae',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => '936ac5eb-cc28-4552-b148-2486dc40db1d',
                'name' => 'Neuquen',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => '93736e5c-1a99-4865-9cb2-ccd3ff80219a',
                'name' => 'Tajurah',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => '93773da6-b17f-4cb0-89e1-7a3f0f49d7bc',
                'name' => 'Yatenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => '93862a3e-9d80-447d-af84-616857a0c515',
                'name' => 'Vosges',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => '93873a92-71a3-4886-89cd-eb42f0370c43',
                'name' => 'Sanliurfa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => '9390b447-2dc2-42d4-a677-36f74c8e3f84',
                'name' => 'Soer Troendelag',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => '9391b153-992e-4d77-8923-b74e857e08e5',
                'name' => 'Evenkija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => '93931f38-591e-4431-9bc8-1ca098c126a8',
                'name' => 'Sector claimed by France',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => '93c68e17-8ac2-4337-abd1-429def2d3892',
                'name' => 'Couffo',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => '93c8b40c-e4ca-46a5-b504-55b4f18fdb1a',
                'name' => 'Bio Bio',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => '93de5ce6-d9ce-4230-b1ad-83f7a3e4ba68',
                'name' => 'Tirol',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => '93e10f04-2dbc-428a-8467-daebf1624425',
                'name' => 'Frosinone',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => '94123266-706f-493c-a2d5-e94f8288f7d0',
                'name' => 'Thanh Pho Ho Chi Minh',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => '9433569d-4cba-4b57-9caa-26990958bebf',
                'name' => 'Ibb',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => '94341180-8a09-479a-8f95-ec2057ce6deb',
                'name' => 'Creuse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => '9436f68a-c634-4570-babe-02b3cbe33a9e',
                'name' => 'Kochani',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => '94389a3e-d631-41f7-b377-ab48168bfe03',
                'name' => 'Malampa',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => '943e38b7-9aa1-4672-8014-a59ae14c221f',
                'name' => 'Troms',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => '94545a38-e61a-4c21-a419-74a08f13e693',
                'name' => 'Centre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => '9463f18c-b3d6-40db-9a3e-f7461e28efab',
                'name' => 'Zambezia',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => '94702de7-9171-4a6c-a5b3-78d87de704df',
                'name' => 'Ghazzah ash-Shamaliyah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => '94c72a3a-d431-4274-ab90-100dad3adba7',
                'name' => 'Hainaut',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => '94d0aeec-c51d-4264-9c85-fd4c90247754',
                'name' => 'Sucre',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => '94e03ce8-ae45-496f-9ed1-0e439977c36e',
                'name' => 'Uvs',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => '94e26183-8d53-47e1-a14a-587e0e2bf3bf',
                'name' => 'al-Manamah',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => '94f1bfef-b016-4cb3-b533-7d7a0d8e5887',
                'name' => 'Safat',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => '9505ba5f-a8e8-4390-b1fa-fb219af75c33',
                'name' => 'Ainaro',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => '9512651d-be04-4659-8f88-33a326e18f4f',
                'name' => 'Lebap',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => '951a8a0e-9085-46f4-adbf-f1d468e84ca0',
                'name' => 'Lowa',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => '956d94f7-9809-45ff-ac21-336f4e425738',
                'name' => 'Quintana Roo',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => '95772daf-0d83-4b7e-984d-09f0df7c1def',
                'name' => 'Dodoma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => '957fe31d-bd5b-46fb-9170-cb2bc5d69e70',
                'name' => 'Saint Viatre',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => '9588a06a-5b7f-42c3-b965-2bad0ca3c30a',
                'name' => 'Szabolcs-Szatmar-Bereg',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => '958970fc-7db7-46dc-ba62-32be67b9e4f8',
                'name' => 'Nor oy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => '95a01d75-4686-40ea-954e-b769c45b818e',
                'name' => 'Jawa Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => '95a19f7f-77e3-4503-b63c-e2e85c752ee6',
                'name' => 'al-Qadarif',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => '95b8c7eb-ad14-4025-a7bd-9b2f2b95956a',
                'name' => 'Savanne',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => '95c264bd-117f-4788-bfbe-ff871a40cb68',
                'name' => 'al-Wad',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => '95e77854-c3c6-4f35-aaab-c7a88980560d',
                'name' => 'Selangor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => '95e8fade-6191-40be-a607-1f8a18195237',
                'name' => 'Medhimurje',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => '95f5d140-7449-4e52-b469-d2d9f1b959a0',
                'name' => 'Daugavpils City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => '95fd2da6-55c3-45a7-8da7-c5ab944c8f2a',
                'name' => 'Kidal',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => '960650c1-8b1e-4b17-9be1-122cb20997e0',
                'name' => 'Tachira',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => '9619e612-b33d-4d1e-831e-fb1ef11358d6',
                'name' => 'Shibenik-Knin',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => '961a3bbc-6958-4581-a2a4-d581709d998f',
                'name' => 'Osrednjeslovenska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => '961ddf9a-23f2-4cc7-b746-7afced0c21ac',
                'name' => 'Munshiganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => '962db8d2-3fe2-45e2-97b9-bf048824953d',
                'name' => 'Marche',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => '963402c4-de71-4afc-a587-96602134991b',
                'name' => 'Kaheti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => '963ad616-e229-429e-9025-1117762a9371',
                'name' => 'Mississippi',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => '9642d69a-a619-4594-af78-a101e7d264d8',
                'name' => 'Lesvos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => '965715b8-8ebd-4d73-b117-4c419c09290a',
                'name' => 'Bururi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => '9658b1e5-6f96-4441-b9f0-85e4227de46f',
                'name' => 'Upper Normandy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => '96714657-c461-4232-86ad-9fbd89ceb1ee',
                'name' => 'Chiayi County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => '96746295-d671-4c0b-afac-bfa87437289b',
                'name' => 'Madeira',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => '9678dd51-1c27-4d54-9619-76b29e2b6b6a',
                'name' => 'Lacs',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => '96928b53-a72d-496a-9801-231f7ad9b113',
                'name' => 'Yerevan',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => '9693a8b0-309d-44f9-b447-1f52c37fa8f4',
                'name' => 'Burj Bu Arririj',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => '96988de8-2cca-43ce-9875-78ed5c5a8a91',
                'name' => 'Gisenyi',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => '969c8db0-b8df-49ee-ab32-3b012b4bb14d',
                'name' => 'Keelung City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => '96ba524a-76de-45f6-bcde-6ac242daa7c5',
                'name' => 'Okinawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => '96c30068-1c62-41f6-be61-e494621c1c8c',
                'name' => 'Alessandria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => '96d41933-0455-4aa2-8b48-9d063e2ebdfd',
                'name' => 'Bonnet Bay',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => '96e8c2bd-9aed-4b8f-9a10-82922908bb99',
                'name' => 'Ngaremlengui',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => '96fd2aab-c599-4ffd-9186-5f9bac80d3ba',
                'name' => 'Morbihan',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => '96fed03d-22e4-4c3f-9047-f9e9a1d18df0',
                'name' => 'Shimane',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => '9707bf7d-9a2e-42d8-bf11-a1e92241d33b',
                'name' => 'Pemagatsel',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => '971f9810-45d6-4b15-98d4-8ac44920c240',
                'name' => 'Eastern Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => '97272798-4e21-4fb2-b0ae-803be895eb00',
                'name' => 'Kemerovo',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => '97556b5d-6ffe-4178-b402-a27df290db42',
                'name' => 'Caroni',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => '975d7b28-ba9c-4f4c-9204-de3211cbedb7',
                'name' => 'Torshavn',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => '97757b2d-d08a-49c7-905a-770de98392b4',
                'name' => 'Alytaus',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => '97e2abbe-8831-4bb2-b8d6-479972676c11',
                'name' => 'Madriz',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => '97f34b07-3e73-4563-9c37-39a8f94432d8',
                'name' => 'Tongsa',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => '9818fcd4-76d9-43b0-aedb-53fb976c2e49',
                'name' => 'Chiquimula',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => '981d347e-467c-4476-88f6-db6e9ae292f6',
                'name' => 'ar-Rayyan',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => '981d9cc4-d0ba-4f2a-998b-833bcf82ae2c',
                'name' => 'Chiapas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => '981ee636-d081-4a32-b823-39df00f5ddb6',
                'name' => 'Central',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => '9868f788-c5bd-4556-862c-7a21510a087a',
                'name' => 'Jihochesky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => '987c12ea-867d-4e95-9e46-e8f811504755',
                'name' => 'Moyen-Chari',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => '988207c8-d615-4930-9642-2edd1b62fefe',
                'name' => 'Melbourne',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => '98909034-13dc-40fb-8401-9c3af1f8ea45',
                'name' => 'Tepelene',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => '98c8943e-96e7-4398-8b36-3b8b5cdbdfaa',
                'name' => 'Kirsehir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => '98e48bfc-a77a-463e-8e5c-c5c28fc5d810',
                'name' => 'Mara',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => '98e59ef0-5333-467a-be50-387a6c81648e',
                'name' => 'kadawatha',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => '98eabb89-cf1c-4341-86e5-f3cee7f66250',
                'name' => 'Vasternorrland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => '98ef65a3-25c7-430b-a651-3191f07fc42f',
                'name' => 'Hamilton',
                'country_id' => 'bc691ae2-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => '98fbd372-54ab-4634-901e-6f4133d37c80',
                'name' => 'Bouenza',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => '99020fdd-54a1-4c11-838f-519a768e3782',
                'name' => 'Donegal',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => '9923b1b0-a967-45a6-8d31-ff80904e6f45',
                'name' => 'Vastmanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => '99249c83-9b20-4677-adcf-6d9c2bd6f57c',
                'name' => 'Vavuniyawa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => '992ffd4e-9eef-4411-9bff-bc1a757f8bcb',
                'name' => 'Arecibo',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => '9939c6b9-75fc-471d-b3f2-522184b763b7',
                'name' => 'Central Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => '99433696-ef8e-4a0c-87b2-51ca2464a5a3',
                'name' => 'Mekele',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => '994cc31e-ce7b-4bc6-a717-5f24abd61f36',
                'name' => 'Sud-Est',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => '995ca9ef-edec-43ba-8364-3d8293705aa7',
                'name' => 'Arusha',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => '998297fa-db2c-4147-8899-67914be1288c',
                'name' => 'Balti',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => '9990e06b-05a3-4c67-8a1a-babe494940cd',
                'name' => 'Sjaelland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => '999190c2-5917-4f59-a006-37e32e23e10f',
                'name' => 'Amsterdam',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => '99b77aa6-f8c0-4702-b8bc-a844c4c2a38e',
                'name' => 'Wales',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => '99da05a0-34d8-4014-b93b-d3ae2663ed60',
                'name' => 'Cacheu',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => '99dd6351-6302-4d04-84de-f07637ebb2b0',
                'name' => 'Solo',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => '99e6b751-ce52-40bd-b326-063516c3e545',
                'name' => 'Ovorhangaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => '9a0a1560-cef3-46d3-9567-ecd9598f4933',
                'name' => 'ash-Shalif',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => '9a0b6301-57e6-4dc7-a6b5-7419aa34e85f',
                'name' => 'Kampong Spoeu',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => '9a0ca469-519d-4722-a956-e6aaf7eb20f9',
                'name' => 'Delhi',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => '9a30ec6d-1ba9-4c0d-8576-f6bf30661f40',
                'name' => 'Magellanes',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => '9a3d5f42-2d0a-419c-8e35-201120cab284',
                'name' => 'Solola',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => '9a46a9b8-3dc7-4c36-8306-ef8845a6b065',
                'name' => 'Nangarhar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => '9a5b683a-d92e-42a0-8eb3-eace544855c6',
                'name' => 'Saint Martin',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => '9a659f4d-0711-40e6-81dc-ec79d46074a2',
                'name' => 'Pyeonganbukto',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => '9a76eb78-b0d2-46cf-9029-4bc7982e721e',
                'name' => 'Taipei City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => '9a7a43c7-c3b1-4bda-b473-74122f08ca97',
                'name' => 'Nograd',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => '9a90c60b-e4ec-4ba0-aca4-98274c134585',
                'name' => 'ash-Sharqiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => '9a94ae1c-4b53-4e1d-bb2f-c08225ece093',
                'name' => 'Clare',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => '9ab3b4d2-92bc-4c95-8ab6-61f30c024ea3',
                'name' => 'Muhafazat ad Daqahliyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => '9ac973ab-107c-4eed-95f1-aed5eb613792',
                'name' => 'Parnu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => '9acaf791-0900-4791-9ea7-9e6f3f21725a',
                'name' => 'Muslim Mindanao',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => '9ad46bd1-7b50-4f1b-be25-1fcdd64d3db4',
                'name' => 'Tibazah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => '9ad91cce-6c09-48d7-8c83-1afe81034f29',
                'name' => 'Maio',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => '9ae13454-f71b-4b5a-a5b6-438c269a04a5',
                'name' => 'Manitoba',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => '9af0a3a4-116d-49a7-a8d5-7de39bcbfeac',
                'name' => 'Cluj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => '9b01f89a-c0a4-4476-85ae-673299da1e3d',
                'name' => 'Nuuk',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => '9b0686cb-011c-4d0b-a043-971f16e46278',
                'name' => 'Kriva Palanka',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => '9b105f58-2876-4fd4-bf3e-c17f70487f47',
                'name' => 'Ras al-Khaymah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => '9b106feb-2ffa-4f25-b12c-802e90992f1c',
                'name' => 'Kumanovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => '9b25cf07-949d-42dc-8298-484085717fa6',
                'name' => 'Gibraltar',
                'country_id' => 'bc6949f4-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => '9b321b38-87fb-41cb-8be7-ab7895634f8c',
                'name' => 'Sakikdah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => '9b341015-5848-40f9-9acc-b90d258176db',
                'name' => 'Karnten',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => '9b4f50a8-f653-472b-88ef-0a2b742137a7',
                'name' => 'Milne Bay',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => '9b6b53e7-1880-4aa9-83da-f161193280db',
                'name' => 'Atlantida',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => '9b85c242-ffa8-4a1f-80e2-d5a171aeeda4',
                'name' => 'ash-Shamaliyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => '9b926856-cdc0-4060-a30e-d3bfbc0f5960',
                'name' => 'Morelos',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => '9b9ecfeb-97f3-4f19-bc61-6e8421dd7a34',
                'name' => 'Zachodnio-Pomorskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => '9bac2b66-8076-4a98-ad02-74306e71558c',
                'name' => 'Virginia',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => '9bc1bd1c-97f2-489f-bafb-e8d413a67a20',
                'name' => 'Zagreb',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => '9bd26743-6f34-4623-b0bb-2ce5f7681676',
                'name' => 'Oran',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => '9be81a81-9e6c-40aa-9df8-80539db69faf',
                'name' => 'Khammouane',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => '9bebc12d-6365-47ab-8b9f-38fe61622c1f',
                'name' => 'ÃƒÂ˜stfold',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => '9bf53a64-d8b0-4930-ba8d-e2dd086b5ce4',
                'name' => 'Pavlodar',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => '9bf7795c-a147-4fa4-83a8-c3b4036df0d1',
                'name' => 'Jabat',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => '9bff684c-d41d-4d60-8b84-c8354a9af966',
                'name' => 'Badulla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => '9c04f453-51f1-422b-b462-cc98173855eb',
                'name' => 'Asgabat',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => '9c12473c-2aa2-411a-8132-93fc4a44535d',
                'name' => 'al-Jabal al Akhdar',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => '9c29e14b-00b0-4a3e-9872-e687315d8584',
                'name' => 'Totonicapan',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => '9c2ba6f9-968e-4ccd-aa54-03fbba4561c5',
                'name' => 'Anuradhapuraya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => '9c3baa82-5786-4c33-9780-3e792a3b1a7b',
                'name' => 'at-Tafilah',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => '9c4467b2-aa59-4525-9444-8c7912e52d54',
                'name' => 'Tropoje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => '9c5cb2e1-cde6-4f97-a1a3-417b5b0dbbd7',
                'name' => 'Auvergne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => '9c84000c-636c-4e19-b201-691b17897c2b',
                'name' => 'Canendiyu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => '9c984603-9ca8-41af-91b7-b126e99e67b1',
                'name' => 'Sinnar',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => '9ca88c79-3f46-4828-b94b-e9e85f3816d6',
                'name' => 'Bheri',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => '9cbe75df-9dc9-43af-a81e-6318fae9264f',
                'name' => 'al-Khawr',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => '9cbfb338-9ae6-40bd-aaa9-342c28cfcebd',
                'name' => 'Satakunta',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => '9ccc6877-dfbd-4ba0-a128-89b3364c6dcc',
                'name' => 'Tougue',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => '9cdd30f7-4e3a-4d84-bcb5-9c404e087baa',
                'name' => 'Land Sachsen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => '9ce9b450-1a30-4aaa-a7f7-45967b0a8342',
                'name' => 'A Coruna',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => '9ceff18c-29b5-47b4-b01b-0c2f9cfaf261',
                'name' => 'Rodopi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => '9d183b57-f86e-4f0b-8902-ffac96a24c87',
                'name' => 'Amazonas',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => '9d47f9c8-5e6e-4dcf-828f-bc4581e4be91',
                'name' => 'Formosa',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => '9d5ce311-539a-4ce5-88f1-ab51fda7d78b',
                'name' => 'Saint Helier',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => '9d5dcf49-5327-4811-b7ce-ba9e32663e15',
                'name' => 'Aquitaine',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => '9d653e81-e49c-4853-b7ed-8a14864e3d79',
                'name' => 'Vicebsk',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => '9d8db76a-a518-422c-828f-579d41a93b38',
                'name' => 'Jerusalem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => '9d916760-f683-47a0-ae4e-b212907ff774',
                'name' => 'Newton Stewart',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => '9d9b9fa9-32ff-456a-bb8f-7e22fba17aa1',
                'name' => 'Nampo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => '9d9f944f-35af-4bd5-a30a-db4270a412f6',
                'name' => 'Ouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => '9db5f10f-f953-4ab1-a6be-61b02b914334',
                'name' => 'Castletown',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => '9db83a93-cde5-4b1c-b4ec-f94aa5365807',
                'name' => 'Bajan-Olgij',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => '9db9ab11-b190-4609-a6c1-5f07c1b58a74',
                'name' => 'al-Qadisiyah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => '9dc81cf5-864a-485b-a157-e51fe29f14bf',
                'name' => 'al-Farwaniyah',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => '9dcb74a9-98e9-4d2b-95b5-5977bcd69ea3',
                'name' => 'Ivanovo',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => '9dcbf85b-163f-4f31-a14f-fb4eb9382a88',
                'name' => 'Nuun',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => '9e009895-a429-4b65-be5b-253e94fd19af',
                'name' => 'Ilfov',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => '9e174832-55b5-46f3-86dd-d4344d98de64',
                'name' => 'New Hampshire',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => '9e212d9d-df17-4757-b1c3-cf629e380dc0',
                'name' => 'La Guajira',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => '9e243bd0-5ac3-4d18-a4af-0b01234bd5d3',
                'name' => 'Hiran',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => '9e37c346-7f43-419d-9af5-5d966016450e',
                'name' => 'Oshana',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => '9e3dc3e6-c6f5-4bb1-86ed-9a0eb6a7349c',
                'name' => 'Ireland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => '9e45a373-fa02-40a4-bc9f-0909170227e6',
                'name' => 'Valmieras',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => '9e590bee-1f52-48ae-9f03-e65f4bc79ace',
                'name' => 'Mizoram',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => '9e5a9c78-5269-4830-b759-537a05367bfe',
                'name' => 'Kaolack',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => '9e5cfcd3-cb5c-4d54-855f-a258acf9e3da',
                'name' => 'Grand Port',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => '9e5ecef2-1785-4aeb-91b6-5f3b7940b53f',
                'name' => 'Saint Paul',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => '9e5f7503-6d2d-4125-8a2b-815a7541f33b',
                'name' => 'ad-Dakhiliyah',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => '9e5fb76d-c593-4f65-a1ec-8927969e0bba',
                'name' => 'Andros',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => '9e6836b2-b928-43f1-881a-2ab20ab93eac',
                'name' => 'Makamba',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => '9e69bde2-eb84-4118-aedd-dc80cf4ef698',
                'name' => 'Ubuk',
                'country_id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => '9e6ad6f1-2acf-46d3-ba48-17c149d2be59',
                'name' => 'Soroca',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => '9e743f09-958c-4b82-a447-a0fdb77b2130',
                'name' => 'Saltsjo-Boo',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => '9eaf3bfc-565e-4429-8f76-5f7cdb9786b6',
                'name' => 'Cherrybrook',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => '9ec869d2-63fb-4f85-8b01-afd3ddbf130e',
                'name' => 'Sucre',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => '9ed010bf-1a1b-4b30-a66f-219ee60ec465',
                'name' => 'Saint Paul Capesterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => '9ee4c72f-3314-4fd9-88cb-6ba7bd30cb17',
                'name' => 'Meurthe-et-Moselle',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => '9eff9898-a2c1-474d-8ec5-bde4ba5634bc',
                'name' => 'Vellise',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => '9f138331-d04b-476f-9a43-f154761d7f3f',
                'name' => 'Dunbartonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => '9f1de227-8d12-45a3-bb98-39f9598083d5',
                'name' => 'Berat',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => '9f24b7d0-0c5c-46e9-b591-6e9fe13bb1ec',
                'name' => 'Puy-de-Dome',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => '9f29f220-3898-462e-a313-bd8f0109727b',
                'name' => 'Ngardmau',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => '9f2e4dee-f3f8-471c-9d34-607c0957da32',
                'name' => 'Caldas',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => '9f391ada-931a-472c-bd5a-8188a8a3b448',
                'name' => 'Yafran',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => '9f4d0499-4802-4b0c-bd2d-45887f77b9b9',
                'name' => 'West New Britain',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => '9f55e80c-031f-444d-9f85-e9b1711bd116',
                'name' => 'Saone-et-Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => '9f6889ea-7b42-43d2-a2b7-9a89d2781c18',
                'name' => 'Hubei',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => '9f88ab04-792b-46a8-a187-71b6f047055f',
                'name' => 'Vaitupu',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => '9f8c95c0-3ab7-4049-982d-44a160e572b4',
                'name' => 'Koundara',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => '9f8e4693-8f7c-4480-8b54-07a5a513f108',
                'name' => 'Vercelli',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => '9f95f978-4677-4a0d-9ced-da86d1c02836',
                'name' => 'Sud',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => '9f9fd8bd-b4ba-4bee-8572-d0bfd76e1c05',
                'name' => 'Berea',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => '9ff2a88a-095a-46bb-a709-cb126c547bc1',
                'name' => 'Tubruq',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => '9ff439ba-3831-4ba3-bead-d3ea55a28923',
                'name' => 'Tajmyrija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => '9ff876ab-4207-4fa5-bdc9-8f09858c06e6',
                'name' => 'Krabi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'a006a92f-5c2a-46e0-aca1-6f8ce7137b4f',
                'name' => 'Tamuning',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'a05a3db0-10df-4679-8e0c-a427d736cdf8',
                'name' => 'al-Mahrah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'a0a59f2f-a957-4dcb-a327-c346f9bcba30',
                'name' => 'Haa Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'a0acc062-9e0f-43de-90b7-347719dc32a8',
                'name' => 'Sal',
                'country_id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'a0b2d951-5092-48bb-97eb-4efcf7d398a3',
                'name' => 'Jinotega',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'a0b3bb09-87c4-4a2a-b295-0d7abcf1aea0',
                'name' => 'Seine-et-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'a0b8756a-f04a-4ce8-8b7f-b54730acf347',
                'name' => 'Melekeok',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'a0beba7f-7056-4b74-a716-cd854cd201cf',
                'name' => 'Kavadarci',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'a0c91886-7ddc-465f-8734-c86e1a1199a0',
                'name' => 'South Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'a0ecaeb1-b23a-43df-8e4e-7593b48f2092',
                'name' => 'Derby',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'a1075139-96ee-4ad2-a798-e470a2d871b2',
                'name' => 'Frycovice',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'a1350381-203d-413f-9854-2f43cab09bbf',
                'name' => 'Gyor-Moson-Sopron',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'a1412690-b96f-4a2f-bdf5-bea7bcfa1cc0',
                'name' => 'Land Rheinland-Pfalz',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'a1477535-f841-4b3e-a8c3-c3a3a0005bac',
                'name' => 'Bangka-Belitung',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'a14f306f-de52-4c2a-b5af-257c72d186c4',
                'name' => 'Buxoro Viloyati',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'a16172f2-6cd6-44a8-9c98-056d9e2078e8',
                'name' => 'Kayes',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'a16bf31a-0575-4b06-b3e4-872553cd7919',
                'name' => 'Matabeleland South',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'a1840fe3-2775-4f8c-8c43-e9353b0a17e8',
                'name' => 'Tamil Nadu',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'a192ab8e-7903-43b2-9b0c-a587ee14818b',
                'name' => 'Batken',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'a1a3f569-f9d4-4e55-ada9-1fe0f5a7da5b',
                'name' => 'Jaroslavl',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'a1a707f3-467a-4b0d-9681-624ea8422610',
                'name' => 'Kayangel',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'a1ee72e0-2737-4a66-8129-5619bf8500e4',
                'name' => 'Saint Thomas',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'a1f3c548-f2cb-40cc-8296-b363c7fd1ef2',
                'name' => 'Sumatera Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'a1f9ab71-9022-401f-b34b-d17810ce72dd',
                'name' => 'Duarte',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'a252884d-6747-4c1a-bb61-1442bb1db12d',
                'name' => 'Eure',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'a2742775-4064-44bf-8620-4e8866ff9580',
                'name' => 'Atlantico Sur',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'a27e2161-9fba-4add-a63a-d1e8144118e1',
                'name' => 'al-Jawf',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'a2923c61-7650-4ddb-8dd8-f377fe17f0d4',
                'name' => 'as-Sulaymaniyah',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'a2942887-2792-4264-8d64-aeb05aca34d9',
                'name' => 'Amazonas',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'a2a10908-9a48-4c26-91c1-d518f9cbe8ac',
                'name' => 'Ratnapuraya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'a2a93bbd-89c1-4202-a6ee-66d3fcbb321a',
                'name' => 'Polonnaruwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'a2aaa368-5ad3-4098-89d6-d15cd915c88d',
                'name' => 'Muramvya',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'a2c31988-98a6-400f-a5ae-e3f5b0f92bea',
                'name' => 'Las Palmas',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'a2c71fa7-dca8-40e8-a178-fa178ba8f9c0',
                'name' => 'Flevoland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'a2ca1e98-0409-440b-afb1-9188d86d1cb7',
                'name' => 'Sud-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'a2cd4253-eb74-4596-a655-e544509db2c5',
                'name' => 'Kankan',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'a2e162da-4fce-4c6f-b242-2d54e8ef9d25',
                'name' => 'Westmoreland',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'a2e1bc8a-0d9e-4a43-be2c-91eada08b8e6',
                'name' => 'Agneby',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'a3158267-5fc7-4208-bcb4-ff9f36da7a4c',
                'name' => 'Khatlon',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'a332bf60-5744-4a95-879e-2223b92f6aa6',
                'name' => 'Kyunggi-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'a33c2a73-37e8-49c2-abdb-7505565b4333',
                'name' => 'Zasavska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'a37d4fe6-4b2c-4a76-ac58-8d23315dba7a',
                'name' => 'Pattani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'a38388d2-3c39-4d42-ac2c-5cb9157732cd',
                'name' => 'Rennell and Bellona',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'a387ab6a-0019-4104-b008-9815b19404dd',
                'name' => 'Malanje',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'a387d8fe-0c2a-4543-9d43-e1e836fb9507',
                'name' => 'Nakhon Si Thammarat',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'a38bc9fc-23d2-4584-8ab3-f2d9358fea48',
                'name' => 'Igdir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'a3a25376-caa2-480e-b6b5-b89a583fb36d',
                'name' => 'ash-Shamal',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'a3a80412-9063-4e46-8900-3b1af4cd6956',
                'name' => 'Tuscany',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'a3bee75e-f767-4232-a1cf-f115c9352ea8',
                'name' => 'Bourkou-Ennedi-Tibesti',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'a3c4f70d-75e4-4381-91ce-d56d1095002a',
                'name' => 'al-Wakrah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'a41c8f40-cfdc-4b4b-9b0b-48dfdbe8a807',
                'name' => 'Choluteca',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'a42eb3d8-8a92-48da-a84a-8b3937d8ef70',
                'name' => 'Muhafazat al Qahirah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'a445a6af-3919-4400-9322-d49f33f770b1',
                'name' => 'Roervig',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'a44c76ce-0d23-42a7-8bbf-94f2fca92c7f',
                'name' => 'Nampula',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'a453dd9b-d7aa-415f-a9fa-0874f24584ab',
                'name' => 'Diyarbakir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'a457fb00-a901-43dc-ba65-0c73a3b2c994',
                'name' => 'Eure-et-Loir',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'a4712ac0-d6c4-412f-be28-32b164917dad',
                'name' => 'Miranda',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'a48e7c8f-0f55-433d-86cc-dc3fe5b35998',
                'name' => 'Goias',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'a48fe935-51ca-446b-8a21-593dd05b1a9e',
                'name' => 'Oriental',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'a495fbc4-7373-4c33-a5da-f56f6047e8ec',
                'name' => 'Eleuthera',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'a4aae9c0-2fae-4611-a39d-74172812157d',
                'name' => 'Ialomita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'a4aea671-801f-46ef-a773-9eda7767ee6f',
                'name' => 'Llanymynech',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'a4db0fec-c61c-4155-aa13-75223a592dfd',
                'name' => 'Guangdong',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'a4f7d523-3e5d-4c55-a413-045a3313d22d',
                'name' => 'Tierra del Fuego',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'a4fda32b-46b9-41c1-97b3-e9f53b2d5846',
                'name' => 'Bari',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'a503ab8b-294b-463c-8cda-82fa2d7e35c8',
                'name' => 'Sanma',
                'country_id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'a512c160-ac16-4329-a855-098e30bb6981',
                'name' => 'Lodzkie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'a519213c-1368-43be-9b04-d6d93c1a008b',
                'name' => 'Mwanza',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'a536d968-ad3a-4062-b765-bc09a6b1a0eb',
                'name' => 'Hunedoara',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'a56843f9-cc66-4717-98f1-612c248a5f2b',
                'name' => 'Librazhd',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'a56eabfe-c437-4df3-a086-dcb70a2f71c4',
                'name' => 'Sidi ban-al-\'Abbas',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'a58dbe1f-2d8f-4601-bc42-e5b4c51113c2',
                'name' => 'al-Hasakah',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'a59455f7-4e28-4002-b69d-09581f11b131',
                'name' => 'Chagangdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'a595e1c2-2e30-46ca-a146-ae36c5d2164e',
                'name' => 'Nordouest',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'a5a5ebd9-9d01-47db-b4f5-9bb8e23b531b',
                'name' => 'Leicestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'a5b065c6-18c5-460b-9ba2-550e3dafa15d',
                'name' => 'Silhat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'a5b664b4-cf6b-4ebb-85e4-415556ed1b8a',
                'name' => 'Phangnga',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'a5ba034e-47bb-4579-bbb8-14e572f88b81',
                'name' => 'Beru',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'a5bc660a-d0e9-4ebf-a4db-7d2a91fa9104',
                'name' => 'Nonouti',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'a5c92671-60b3-434e-af19-0e87de565daf',
                'name' => 'Saint Thomas',
                'country_id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'a5ca59b9-8382-42c6-adaa-1788d4b98ce0',
                'name' => 'Hainan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'a5d7d18a-e0dc-46ae-acbb-2bf81b770a8e',
                'name' => 'Planken',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'a5dca446-9d27-4847-bb93-5159393e0326',
                'name' => 'an-Najaf',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'a5ee4947-64e3-40a9-8f93-0fece8f7b620',
                'name' => 'Sudogwon',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'a5ef9510-b8e5-4671-b5a1-bac218bad79f',
                'name' => 'Albacete',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'a60a31b2-af82-4f41-9df7-18aaae8828de',
                'name' => 'Grand Cape Mount',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'a61a6364-6d1c-4cd4-8927-48df2db5f2e4',
                'name' => 'Alajuela',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'a61b0cdf-85d6-4251-b191-e3e0e1e2539a',
                'name' => 'Shiauliu',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'a6260ffd-5488-4c03-a6d1-d6c5482cfbd5',
                'name' => 'Federacija Bosna i Hercegovina',
                'country_id' => 'bc691e40-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'a62a7bca-e1cb-40c4-8400-e3ec1a93e5f5',
                'name' => 'Duyen Hai Mien Trung',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'a64d6005-29ec-49e7-917b-564ae45ece9c',
                'name' => 'Hautes-Alpes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'a64f88f0-bfc4-4faa-91e3-9a1cffce7a01',
                'name' => 'Sonsorol',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'a650be11-ff07-44d7-b812-6425f819d0d7',
                'name' => 'Saint Andrew',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'a65377cd-b5c7-4a2c-83dd-63bd71754188',
                'name' => 'Lae',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'a653ecca-3c31-4c60-b456-c4e0677d7b48',
                'name' => 'Gaaf Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'a679c59f-5a6d-4477-894f-9eb1fcbd8a82',
                'name' => 'Mambere-Kadei',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'a67dc765-babf-4f13-9377-31e660fa677d',
                'name' => 'Santiago del Estero',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'a67f75fd-502a-4f99-a648-ff635be8a8e2',
                'name' => 'Santa Catarina',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'a6a9b3e2-9418-42aa-9c46-181bdbb96d8e',
                'name' => 'Saramacca',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'a6cb5de0-bd3f-41f9-bf10-4910b8aa7a65',
                'name' => 'Dziekanow Lesny',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'a6d65500-85df-465f-873f-0959710dff23',
                'name' => 'Sant Julia de Loria',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'a6e6c6f2-9c8f-4acb-b50b-8b58d378bedb',
                'name' => 'Offaly',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'a6eea519-b0d8-47f5-87f1-56d8e2c41c9c',
                'name' => 'Mien Nui Va Trung Du',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'a6f65391-16aa-4111-960f-343da2d9703e',
                'name' => 'Outer Harbour',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'a7190c33-30a7-4048-abcc-3c2c08c9f8a9',
                'name' => 'Bishkek',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'a71bbbb5-a1c7-4962-bc78-ef4ce63f7a59',
                'name' => 'Kili',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'a729c0de-10a8-43cf-b147-86d119b294db',
                'name' => 'Peleliu',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'a735ca57-94be-451a-8cab-f5c44f5d7a0d',
                'name' => 'Frederiksborg',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'a740cfd8-5ed0-4c58-aa0a-07e4ba4020a3',
                'name' => 'Panevezhio',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'a745953e-17b1-40af-a34e-7850ff6fddab',
                'name' => 'Kosovo and Metohija',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'a746a1d0-ded7-4573-8bbd-41ce868bda71',
                'name' => 'Koshi',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'a7489610-2bf6-4d31-8432-2c5edef9e9f8',
                'name' => 'Minskaja Voblasts\'',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'a758ce3c-2403-4c60-a078-b878f7bba1e9',
                'name' => 'Suq Ahras',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'a75c2648-e371-46ab-a65c-9f1c5cd32992',
                'name' => 'Pingtung County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'a76eb8f7-30ab-43f2-9034-a381abc5f86d',
                'name' => 'Peel',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'a77157b5-5f1d-40d5-9fde-394d82a898b9',
                'name' => 'Southern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'a777f86d-6055-4a8c-81a2-20dfdd665459',
                'name' => 'Kushtiya',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'a77beeb8-f686-462d-a57a-4113b6f5ddf8',
                'name' => 'Kharkiv',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'a77dbc06-8c06-474d-a0f1-3b4fb8afbb66',
                'name' => 'Balkh',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'a79de193-37d4-483f-b36a-61fafb38e7eb',
                'name' => 'Ribe',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'a7a6d1b0-6f7b-4a60-b491-51eef6223216',
                'name' => 'Utrik',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'a7b00152-62c5-4918-985d-5a61ca561aec',
                'name' => 'Valcea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'a7b675a0-f442-49bf-b874-5c63044f7f9e',
                'name' => 'Osijek-Baranja',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'a7b9a50e-17aa-4173-b943-2e853fe738c5',
                'name' => 'Rajhrad',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'a7d01e93-fd2f-40cf-b46a-80a27a5f515e',
                'name' => 'Western Province',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'a7d03534-3f66-4631-8bad-974d1047bbe7',
                'name' => 'Chisinau',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'a7fa2acf-222e-4b8f-94cb-2d7850335d38',
                'name' => 'Haute-Saone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'a801023a-b666-41fa-890e-66d25b85f4a4',
                'name' => 'Metropolitan Manila Area',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'a8070b40-66db-471c-9275-3fcb3dceda19',
                'name' => 'Sucumbios',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'a8097ef1-8fbd-434f-b786-87ccbce74444',
                'name' => 'Oudomxay',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'a80a1823-8023-4077-b42c-b6da04c1c469',
                'name' => 'Hrodna',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'a80a9bad-de97-4eae-841f-a4fe8ff7f2f4',
                'name' => 'Moere og Romsdal',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'a80dbdae-1e6d-4e81-923b-1f5bc5e06aa9',
                'name' => 'Essonne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'a8316c4e-41cb-498a-a118-0f96056a4ca5',
                'name' => 'Usak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'a83cc3e4-b066-493f-9c12-4281666f8edd',
                'name' => 'Saha',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'a85f0683-ef9d-4fba-a07b-99b2099e57c0',
                'name' => 'Bourgogne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'a869adb6-3695-4888-9545-eb643a5731ec',
                'name' => 'Barahona',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'a86e9956-80b0-4530-8f6b-f796d76ad740',
                'name' => 'Quezaltenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'a87639d9-fb03-4c33-b0d9-da7a8c0079fd',
                'name' => 'Chungnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'a87e2346-d05f-4de4-80a4-d5b1e0f39ac7',
                'name' => 'Sonora',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'a8867081-46d4-441d-90c8-236931d7f2f7',
                'name' => 'Iwate',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'a88f8c84-047a-4b1f-8920-dd4fc243e2ce',
                'name' => 'Loire-Atlantique',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'a8b0f7d4-9459-4bff-b188-e0b87ec60794',
                'name' => 'Wiltshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'a8bd6036-5e93-44bb-894f-4e56a34b8481',
                'name' => 'Gorizia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'a8d47deb-babd-4165-96ef-93a766deb474',
                'name' => 'Hatobohei',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'a8d82983-6fd2-4147-9fe6-82bb0a7b20fa',
                'name' => 'Singave',
                'country_id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'a902aa2c-dd35-4811-bcdc-07d7d7363abb',
                'name' => 'Lampang',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'a91c522a-d9ca-4976-afc4-45f7b4e04ae3',
                'name' => 'Shirak',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'a92585e4-8d86-4f45-8ed7-3b5f644fd6e9',
                'name' => 'Abaco',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'a926d2ff-7af6-429c-8bec-e1101b190e2f',
                'name' => 'Meghalaya',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'a94226b3-90b3-4f29-841b-4c260781e352',
                'name' => 'Flores',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'a9541360-2280-4188-b4bf-9f5640a02822',
                'name' => 'Baki Sahari',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'a96c4872-45bd-4f85-9c49-3546774684c7',
                'name' => 'Luxembourg',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'a96d4b6c-ca42-4052-b5ab-f8f320578791',
                'name' => 'Noord-Holland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'a96f6d4f-70be-4ddb-a57b-d47af840c886',
                'name' => 'Etela-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'a981f6a1-51d3-4825-bc3c-1301fb57249b',
                'name' => 'Midi-Pyrenees',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'a985e8b4-02d5-4d39-99ea-7607fe9c023b',
                'name' => 'Maradi',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'a9be77b7-74ea-4806-a156-e699607013b3',
                'name' => 'Nara',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'a9bfaf0e-4792-461c-b8d1-c819b265eb82',
                'name' => 'Gopalganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'a9c8ff0b-9464-409e-bbdd-75ec0f28fc2d',
                'name' => 'Telimele',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'a9d235ff-b178-44ea-a298-b5a8c8dc9cc7',
                'name' => 'Saint Andrews',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'a9dfa714-e5af-46a2-87f9-2556c7f377f0',
                'name' => 'Saint James',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'a9e351ff-6123-47c0-9147-a20a9e7eebef',
                'name' => 'al-Ismailiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'a9e35a4d-4e5d-4915-bac1-a1019b17d8de',
                'name' => 'Orhei',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'aa1b462d-52f1-411b-a1c9-b972e898343b',
                'name' => 'Saratov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'aa228a49-bca0-4855-9ae7-7f4170e266a6',
                'name' => 'Cova Lima',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'aa24958d-13c1-469c-bfbb-5c00b950a3a5',
                'name' => 'Vendee',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'aa2815e1-237e-4c9b-85cc-e4c990bb05b3',
                'name' => 'Namu',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'aa30fddc-3773-42a3-a818-0662739929ca',
                'name' => 'Nord Extreme',
                'country_id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'aa3260c8-fed3-4366-84bf-2bb604087d6f',
                'name' => 'Minsk',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'aa353514-f136-4c07-b518-7ffa1bd6a947',
                'name' => 'Castel',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'aa422edf-1255-4533-95ff-0526e312341f',
                'name' => 'Islas de la Bahia',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'aa4b7f8a-2d75-4327-9d61-aae590a6b450',
                'name' => 'Bijayah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'aa596033-7f4c-4961-8c83-618aed2faf11',
                'name' => 'Yunnan',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'aa6e18ae-ae54-47ef-9d58-db928084ab17',
                'name' => 'Doha',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'aa7223fa-a5af-458b-b1c7-f95019a62cfc',
                'name' => 'Saint George Basseterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'aa722c13-bc4c-4033-b724-cd674c574cb1',
                'name' => 'Chiba',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'aa7b3663-8247-4b1c-a30d-38fb3bf2e040',
                'name' => 'Salerno',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'aa848bd9-e2ad-4c01-9a4b-3c4dbce1d525',
                'name' => 'Northern Territory',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'aa910a58-3d8d-4aca-baff-2dc8c377aeda',
                'name' => 'Valandovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'aaaef9cb-cdc0-4602-8292-eba3bb59694d',
                'name' => 'Hims',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'aac6c783-05c8-4520-a66c-3ddc466f50b1',
                'name' => 'Ragged Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'aadac726-553c-409c-a79d-fa6b1b2f62c3',
                'name' => 'Kamphaeng Phet',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'aae3f72a-02ed-4535-8541-755609bd5b28',
                'name' => 'Fribourg',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'aaeadf0a-dd96-475f-89e9-718daaa26210',
                'name' => 'Pskov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'aaf6d728-a489-4d92-a937-e47392fb2463',
                'name' => 'Saint Andrew',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'ab19f2ac-2bf8-49cd-acbf-f6658cfb9850',
                'name' => 'Eastern',
                'country_id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'ab2b432c-74b4-4a76-8aba-5e370980aa4c',
                'name' => 'Nahouri',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'ab3392eb-6d35-4599-ae21-83ebe45cca98',
                'name' => 'Vauffelin',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'ab3ff35b-4670-4dc5-aec7-1096cdf3f283',
                'name' => 'Busan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'ab443130-09dd-4969-a5bb-5d55d3d4e402',
                'name' => 'Aryanah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'ab485c35-7384-4698-805a-0f8f3d1408c1',
                'name' => 'Madakalpuwa',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'ab54c68f-127b-46ca-b521-0a4bffb73e42',
                'name' => 'South Glamorgan',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'ab559051-4f85-4494-a5b4-5737613375e3',
                'name' => 'Atlantico',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'ab658301-d924-4467-aaf9-c248ea4d30a9',
                'name' => 'Mangaia',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'ab90d5fa-6c78-4e1e-b1ab-1c4d2f802fae',
                'name' => 'Aitolia kai Akarnania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'aba15067-a5ce-41a3-a247-bc075be78a11',
                'name' => 'Muhafazat al Iskandariyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'aba5ef0d-68cb-4358-b440-7aa054d8017b',
                'name' => 'Saxony',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'abb4b5a0-5934-48c3-abb1-c765bc8f4f6f',
                'name' => 'Salto',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'abc16d9e-0570-4312-8acd-f7f69296cca0',
                'name' => 'Hovd',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'abe43a26-1c16-4e40-95e9-bc887f833253',
                'name' => 'Bolivar',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'abec610e-c6ed-44a6-aebc-a1763ce37efd',
                'name' => 'Kyoto',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'abedb129-1c62-4f9b-8309-206f3e1c76ab',
                'name' => 'Tavush',
                'country_id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'abf2ac5e-4140-438c-88ea-1c6a6192d06a',
                'name' => 'Izmir',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'abfa8a9d-bb93-4b8c-92e7-b03fccd98978',
                'name' => 'Maha Sarakham',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'ac020501-6f50-4f5d-9bfc-a7920b06d6df',
                'name' => 'Bamako',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'ac05640a-68f4-4452-902f-6af4e5ccb7ec',
                'name' => 'Tubas',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'ac224411-59f1-4793-bee5-bd8df65aec67',
                'name' => 'Lezhe',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'ac279dcf-0c56-4881-adc9-6ae9e6ebac87',
                'name' => 'North Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'ac29a986-d723-470a-aa71-989e60eaf364',
                'name' => 'Hwanghaenamdo',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'ac350fd5-269b-4769-957d-a4235db55d1d',
                'name' => 'Central',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'ac3b4818-267f-44ca-b065-5b06d0d26342',
                'name' => 'Santiago',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'ac4927e2-f152-4ce9-be6c-9d078f4c6b9b',
                'name' => 'Klaipedos',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'ac517419-1609-46f8-99a7-a5d8600596b4',
                'name' => 'Shabwah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'ac755d89-2080-456a-bba6-734ea6f2b396',
                'name' => 'Genoa',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'ac92a686-ae99-4469-b920-48f9b9a02836',
                'name' => 'Daugavpils',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'ac931854-d592-47da-8bac-fe838c6328ee',
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'ac96db71-a890-4afb-b750-0306075484c9',
                'name' => 'Rio Grande do Sul',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'aca18448-1da2-4844-85a6-b4c30515e718',
                'name' => 'Kirovohrad',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'acbd92b6-de97-4a69-8fa4-7afa9fbbb1a1',
                'name' => 'Campania',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'acc7f6ac-7b81-409d-ab8d-2eedce716a5e',
                'name' => 'Dornod',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'acd1e6f9-f1c4-43db-8e58-adc14c4e3370',
                'name' => 'Heraklion',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'aceb38c1-24d0-403e-9c2e-4af2ab76cef3',
                'name' => 'Government controlled area',
                'country_id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'acfdd170-2220-4f39-88e1-7954f5cab4c5',
                'name' => 'Kozani',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'ad05b81f-209c-4546-8564-efb5e212eed7',
                'name' => 'Holguin',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'ad0b059c-7044-4223-aea7-a579b5829a55',
                'name' => 'Polska',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'ad0ef8ee-2c1d-45aa-bd0b-ad78bc0dc583',
                'name' => 'Borsod-Abauj-Zemplen',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'ad1e26fa-31dc-4395-ba10-5879a484480b',
                'name' => 'Sunamganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'ad3c38f1-317e-41b9-913b-5f15be723c5e',
                'name' => 'Yangon',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'ad41e8eb-ec64-4345-b943-69ce56e5adb1',
                'name' => 'Barinas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'ad4ca5cd-f01f-44ba-a224-beb02ae0441c',
                'name' => 'Lushnje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'ad50e649-bd70-4dfa-bff3-2868887f0749',
                'name' => 'Fier',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'ad5f34cb-1353-4792-b1c0-cb9be63a80d5',
                'name' => 'Alentejo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'ad684f30-8b6e-4130-b093-91068594438c',
                'name' => 'Leinster',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'ad71bef5-e2e9-4f83-bf3b-094e3ed54701',
                'name' => 'Embera',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'ad7e22f8-fddc-4718-bd73-056f7060c01f',
                'name' => 'Sao Paulo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'ad88ea7d-dc75-4ed8-bf02-5ed856418ef7',
                'name' => 'Govi-Altaj',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'ad93d374-90f1-4e2d-afc6-0e89c2bd86a1',
                'name' => 'Shandong',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'ad96b947-5733-4bbd-930f-f51bd5cf7ad4',
                'name' => 'Pirojpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'ada9b9ff-7f8c-4a43-b6bf-aa85b68adf3b',
                'name' => 'Lautem',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'adb4037c-83c6-4300-aae2-321bb717e767',
                'name' => 'Abaiang',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'adb75273-5a46-4967-9907-92fd64376e3d',
                'name' => 'Northland',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'adc1a6ef-80dc-4f2c-97f1-69b24890014c',
                'name' => 'Rhone-Alpes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'adc9adda-8375-4793-969d-4f8f12c8a4dc',
                'name' => 'Haskovo',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'adeff72c-b5fb-40bf-87ad-f51c56ed94ef',
                'name' => 'Hamadan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'adf92512-67b6-4c28-88c1-1ef861f2b604',
                'name' => 'Michigan',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'adffc32a-f3a2-41a2-b07c-26dd03ab6be3',
                'name' => 'Jaipur Hat',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'ae19a990-6378-49ba-9847-61aeb90b0a60',
                'name' => 'Western',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'ae1a1b40-9ce7-47ad-8ad3-e8b0329c2738',
                'name' => 'Namorik',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'ae21aa19-efb4-477d-9248-aeac9b0119a3',
                'name' => 'Pitcairn Island',
                'country_id' => 'bc69c8bf-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'ae21f58a-51d4-41b7-b957-ccff54a4616e',
                'name' => 'Cheju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'ae4897d9-6be2-4bee-814f-038a27c88a36',
                'name' => 'Avellino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'ae53eae2-ea57-4ba1-af85-94df9fd6891e',
                'name' => 'Brakna',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'ae6e661a-14ce-4cc8-95cc-f81892470e6d',
                'name' => 'Wardag',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'ae7272b2-4e4c-46d5-a014-bc2d04919ce8',
                'name' => 'Esch-sur-Alzette',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'ae959bae-16f3-4cef-b9c9-46940da5b649',
                'name' => 'Bridgnorth',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'ae9a31ec-6b66-48f2-95b6-2872bc34b1cf',
                'name' => 'Guangxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'ae9aa19b-3cdd-4dd9-92ea-4d8e88b20988',
                'name' => 'al-Munastir',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'aec5a1fb-bd09-4ee7-9244-16556c7713ac',
                'name' => 'Puntarenas',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'aed498bc-c9aa-4471-ae61-dc497ce79856',
                'name' => 'Qaqortoq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'aed600d1-ac8b-40ac-8fe5-cdfa1ec99d53',
                'name' => 'Alabama',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'aefd6020-71a5-4e42-a650-ba29d8beaa9b',
                'name' => 'Christ Church Nichola Town',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'af05f62f-f23d-474f-a4c8-b682429e38ba',
                'name' => 'Radovish',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'af0983f3-1da4-4c5c-9e6c-91b3b4e26a6f',
                'name' => 'Huancavelica',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'af1f508e-4a59-4dc0-80e1-58095354e66b',
                'name' => 'Samara',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'af300619-1fe6-49fc-8859-d0398b37a188',
                'name' => 'La Massana',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'af4f17f9-af9e-48de-a6fa-1383dd984458',
                'name' => 'Ferrara',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'af566788-eed6-4ed8-9b54-8b55b85bacbb',
                'name' => 'Nantou County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'af57f970-a901-474c-8ff5-3ae6a598bba0',
                'name' => 'Komandjari',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'af87ed0e-94c2-4575-8b2b-02e16e0a3194',
                'name' => 'Pest',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'af902bac-bb66-480f-9ca0-38eb50055484',
                'name' => 'as-Suways',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'af9e870f-eee1-4a09-8535-5e06b41fcd44',
                'name' => 'Neamt',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'afa5ce5e-7120-4c8d-ba6d-749ef721ea16',
                'name' => 'Manipur',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'afa93cdf-9d58-44d5-ae82-b720adbbc565',
                'name' => 'Novara',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'afabb5c2-77f4-484f-be6b-53890d36abfd',
                'name' => 'Kagawa',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'afc48126-4858-4791-8fc9-a15071c781ff',
                'name' => 'Borno',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'afd92391-d032-4cd1-ac07-0feb74d730db',
                'name' => 'Hyogo',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'afdb827f-04fc-4c19-94b7-7c85473ba348',
                'name' => 'Lampung',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'afe599ac-8ae8-4bfe-b5e2-e640d8a4f2b7',
                'name' => 'Benue',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'b013626b-ea98-4fa6-8631-567804bdd8a1',
                'name' => 'Zondoma',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'b01f0d3a-983e-4358-a84a-cf8cdc806909',
                'name' => 'Balaka',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'b03b42a8-1818-474c-81c9-824db34bd5d4',
                'name' => 'Bas-Congo',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'b06033d7-a9b8-48ae-8e9a-4f0f5dd6e975',
                'name' => 'Cabanas',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'b062a3cf-bc6b-4ab6-afd3-a4b8ec0bf437',
                'name' => 'Baja Verapaz',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'b064893d-0879-47f3-af6a-9ef4d83d6cd3',
                'name' => 'Zaghwan',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'b0719ed4-d6b6-4e4a-89f6-c95ede740e59',
                'name' => 'Land Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'b0771f44-37aa-443f-a63d-1f463e821754',
                'name' => 'Shariatpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'b07fc2fc-26c9-495a-8bfc-178cc49c92d9',
                'name' => 'Prince Edward Island',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'b09d32a1-c994-4f9c-95d3-1a62b449d212',
                'name' => 'Wien',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'b09faeab-7360-400a-af69-1362b47f0fdc',
                'name' => 'San Jose',
                'country_id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'b0b5432e-24e8-4bdc-af3b-4af081c42cdc',
                'name' => 'Abseron',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'b0def655-e692-45b2-b6ba-060228cdd94a',
                'name' => 'Warsaw',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'b0f7ec6c-7cfe-49a7-b4f8-0fc1e1910101',
                'name' => 'Dhakhlat Nawadibu',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'b0fe4286-69f3-4ea8-9a8b-1decc9108558',
                'name' => 'Peten',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'b14a44e9-0372-4d27-8c02-cdf548030024',
                'name' => 'Saint Paul',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'b1e42320-b650-42d5-ae17-a2457ab1be12',
                'name' => 'Bazega',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'b1efad98-6692-40c5-af68-c9fe9de1338d',
                'name' => 'Presovsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'b1efdf62-07c2-467c-8d24-3912fb7e0dc5',
                'name' => 'Cajamarca',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'b1f24dd7-5492-4b82-80cc-c31f98d49f02',
                'name' => 'Selibe Phikwe',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'b200450d-a1a9-4499-af39-a39d9f0d331f',
                'name' => 'Safaqis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'b224cb4b-a9c3-45e2-a0c0-acac4a404931',
                'name' => 'Da Nang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'b243b8d1-2c7a-44f1-819a-c2db6376780a',
                'name' => 'Vizcaya',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'b26f00d1-8265-451e-b101-16e21adb9eab',
                'name' => 'Louga',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'b29c1386-e266-44f1-b6b0-551d12e0e537',
                'name' => 'Tulcea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'b2b30512-7c3f-492a-ad40-2e742075c54e',
                'name' => 'Tongatapu',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'b2bd822b-a29e-40bb-b99c-bfdc6c24a693',
                'name' => 'Suhbaatar',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'b2c13612-518f-4de7-b479-d9cd4c6ca444',
                'name' => 'Nord-Pas-de-Calais',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'b2c7d78e-19ed-4858-ad6a-6aa029849191',
                'name' => 'Ringkobing',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'b2de6e37-25e3-494e-8554-d8ce483404b1',
                'name' => 'Hajdu-Bihar',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'b2ffa9ea-5b6e-48c7-871c-8f3369fe16fe',
                'name' => 'Toamasina',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'b30b1f79-8435-43b1-b4dc-f7a292d2c11c',
                'name' => 'Land Nordrhein-Westfalen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'b32f0911-4ca2-419a-a906-7666bad72fdf',
                'name' => 'Haut-Mbomou',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'b34c091d-0557-4803-b5dc-2c00709cb4b9',
                'name' => 'Parma',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'b365a55d-00b4-493d-88b5-edb677144aae',
                'name' => 'Meath',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'b387be0e-3271-4294-b0fe-c35236a71048',
                'name' => 'Castries',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'b3bf439b-071d-4315-bb82-da8e8e4cfdcf',
                'name' => 'Misiones',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'b3c2929c-fb42-4749-982d-e2d561e5fd1f',
                'name' => 'Powys',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'b3e0be59-02f9-459e-b451-7440fc1c2212',
                'name' => 'Chaguanas',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'b3f58542-712a-46c2-a6f7-b320b3a50285',
                'name' => 'Bago',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'b3fc87c7-03c6-4be5-b32e-336774c47ae7',
                'name' => 'Lubuskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'b3fcc73e-5765-419e-a73f-d74392df6f49',
                'name' => 'Anse-la-Raye',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'b4027c0e-090e-4c34-94db-e1b697e30385',
                'name' => 'Umm-al-Bawaghi',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'b423d62a-55d9-401a-81e8-127a90ec203f',
                'name' => 'Quiche',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'b463bae9-c06d-4513-a634-6cf21eda3372',
                'name' => 'Odes\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'b48e8e91-1010-4a45-ab2e-217e6679bc8d',
                'name' => 'al-\'Aziziyah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'b4955678-e3df-483e-842a-fc5de97aacf1',
                'name' => 'Noord-Holland',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'b49c04c3-1fd6-48ca-966e-495ab1988d4f',
                'name' => 'Alagoas',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'b4b0960b-c005-451b-8b92-0355930f4a8c',
                'name' => 'Jiangxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'b4b0fe2e-690e-49c4-b923-0a80de15d85a',
                'name' => 'Dolj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'b4d0dda1-5cc5-424b-a25a-acec4c25d795',
                'name' => 'Charlotte',
                'country_id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'b4d360a3-b045-432d-94aa-42ff2e32a96a',
                'name' => 'Sud-Bandama',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'b4ec94ff-2f47-4dc1-988a-0a46a4a7cf3b',
                'name' => 'Jalisco',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'b4ecacf5-2351-4993-8975-66d5ebbc8786',
                'name' => 'Area Outside Region',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'b5085244-fe4c-42d7-8240-34f0d78aa113',
                'name' => 'Saint Barthelemy',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'b51377cc-b4af-4601-91c1-ffe0f67661f4',
                'name' => 'Tipperary North Riding',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'b51cb511-5072-4a9a-9530-36b8ae8436b4',
                'name' => 'Saki',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'b525299d-4a6a-40af-ac68-c3c8a636a734',
                'name' => 'Soufriere',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'b5346e9e-30c7-49b0-a0ae-55c62e775163',
                'name' => 'Cankuzo',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'b54487a4-c35d-42ce-87b7-e8ff2eb027fd',
                'name' => 'Cleveland',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'b55edee0-0c86-49bd-bee8-8c93d4ea74c4',
                'name' => 'West Coast',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'b5652676-e241-4017-ae1c-4ccdc0fce09a',
                'name' => 'Yvelines',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'b567f476-2030-45d5-aac1-fbd437b4514d',
                'name' => 'Kafr-ash-Shaykh',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'b5696bea-e178-4d6a-b603-0d249e55023e',
                'name' => 'Evros',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'b570e871-d39a-4e21-a961-82ec144fa08c',
                'name' => 'Faridpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'b581c537-53a2-4361-ac59-df5f277c025a',
                'name' => 'Salinas',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'b5955300-923e-495b-86d4-9695a494379a',
                'name' => 'Giurgiu',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'b5958e29-84dc-4856-a6fd-8f5cd404e8e9',
                'name' => 'Grand Turk',
                'country_id' => 'bc69fc19-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'b5994c91-f25b-4daf-bdfe-df5c0f9c6ecc',
                'name' => 'Kavaje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'b5a6196b-0395-42f0-be3b-faa12f903163',
                'name' => 'Wilaya de Rabat-Sale',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'b5a831b9-5466-48fd-a6f6-a15f76fa6fb9',
                'name' => 'Potosi',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'b5ae2e7a-ed3a-4e0d-a874-1f88df75b804',
                'name' => 'Omnogovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'b5af1bac-58a1-4ff3-9c44-3d899e81f600',
                'name' => 'Gazni',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'b5b73b9d-4acc-4ffb-9b3e-b10e9dd4ed88',
                'name' => 'Nugal',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'b5c253c0-7d4d-4b93-b9c5-5c7edd8a200b',
                'name' => 'Tambov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'b5d213ac-7800-4005-9806-000c63d66836',
                'name' => 'Ustecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'b608be7b-5626-4881-9ebb-998c5da23a03',
                'name' => 'Neembucu',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'b6286362-d085-40e4-b083-00b1c16a0caf',
                'name' => 'Solothurn',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'b65c0355-1a26-489f-8a2d-27cd171c8d00',
                'name' => 'Roslev',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'b65f8012-ab15-41df-885f-dc92fff81426',
                'name' => 'Pukapuka',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'b664186a-de3a-4787-987c-5f49017cfa82',
                'name' => 'Namangan',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'b66ec1ff-f247-43b0-8fd3-2ae799493b59',
                'name' => 'Roi Et',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'b67d331d-e7d9-4130-b43d-98a73a738dc1',
                'name' => 'Rivas',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'b6822b78-0a1f-40b8-94b9-b0e2bdfa3754',
                'name' => 'Queretaro',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'b696b84d-5500-499f-9ee3-56f821398f08',
                'name' => 'Gorj',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'b69d6cb5-74e7-44bc-b0f5-420ee63ee54b',
                'name' => 'Fukushima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'b6b5c7ff-2265-403e-86b7-fe95976595ae',
                'name' => 'Copperbelt',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'b6b87f5b-8a27-4d6b-96db-de247586cc1c',
                'name' => 'Basse',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'b6bfbad3-eb7d-417d-90e8-48c4373f466b',
                'name' => 'Monte Plata',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'b6c56d41-606c-4a06-b28e-3269f45d710d',
                'name' => 'Smirice',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'b6c7c69e-6e7c-4c22-b401-e7faa9ea8d80',
                'name' => 'Dodekanisos',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'b6e20ee4-4d58-4b13-b2da-fadf9e75ae36',
                'name' => 'Barrigada',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'b6f2bbe4-7d7f-4c0c-bfff-aba7bcce0446',
                'name' => 'Wicklow',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'b6ff846c-ace4-496c-b77d-5594e6948298',
                'name' => 'Cremona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'b70c4d4f-4d17-4d97-b58a-7a15489cb03a',
                'name' => 'Kagera',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'b724f6cd-0141-493a-ae59-60a3cf3be447',
                'name' => 'Kilis',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'b728d351-b0ee-49de-b431-f096d02a0fb9',
                'name' => 'Aga',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'b733abff-c438-40fb-8647-815c0a268d5c',
                'name' => 'Segou',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'b7453aba-c871-47e8-8820-906e9e4d1739',
                'name' => 'Suffolk',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'b755347f-3a3c-4382-aff9-dd2f059bd203',
                'name' => 'Kastoria',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'b7665911-205f-423a-9393-ff0c20db89ba',
                'name' => 'Vlaams-Brabant',
                'country_id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'b770b030-9367-4bfa-a15a-a60780f006cb',
                'name' => 'Chontales',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'b788db95-6c4b-491a-948c-f346cedfcf3d',
                'name' => 'Deux-Sevres',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'b7a288bf-9c57-472c-b320-1f14cc673eb2',
                'name' => 'Tolna',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'b7ada2e5-55b6-4231-8c96-0965cb21f241',
                'name' => 'Marahoue',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'b7cdb189-fa52-4b8c-8b1d-21e2973da25a',
                'name' => 'Alanija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'b7ffd832-67b0-425a-aa06-5691ec54ffcc',
                'name' => 'Bergamo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'b8058df4-475e-42ea-9da7-38ce9dd3db20',
                'name' => 'Chiradzulu',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'b8063410-128d-4997-ad5e-19d0c5a2839c',
                'name' => 'Gharb-Chrarda-Beni Hssen',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'b8105b4c-6513-4a15-b168-72dc50763c42',
                'name' => 'an-Nabatiyah',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'b837f21d-448c-47e8-a3d8-3d1c8ca4223c',
                'name' => 'Wroclaw',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'b839df1b-174f-4c7f-9eda-8dac0a49a245',
                'name' => 'Harju',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'b83cae60-969c-489a-b998-d38720274741',
                'name' => 'Longford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'b83df692-8f19-480d-b771-da270209472c',
                'name' => 'Khomas',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'b84eae27-ff0d-40d9-a35d-9ba08f8b97bb',
                'name' => 'Beijing Shi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'b862a342-bcf1-41b6-9739-f563fbe46b61',
                'name' => 'Magadan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'b86761ab-6070-4a79-abe1-75fb07862604',
                'name' => 'Kadiogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'b879e4cb-6d91-4f99-9f03-abe30acbbf23',
                'name' => 'Zhytomyrs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'b87f5d85-2028-4900-9370-aee6e9ac74d4',
                'name' => 'Chimaltenango',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'b88cd402-f07a-4c61-8e13-9d32aaae36e7',
                'name' => 'Buri Ram',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'b892edb0-d614-402c-bf0b-ccc75dcb3e99',
                'name' => 'Klaksvik',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'b8a5cb18-14ff-4fcf-abc1-3a3e4975d853',
                'name' => 'Dong Nai',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'b8ac3ac5-39f2-42f9-b8f7-8dadbb5299b2',
                'name' => 'al-Jahra',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'b8d65850-f2ef-48f9-a091-a98f385cc884',
                'name' => 'Mehedinti',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'b8d7696f-a9de-452c-a09f-6fae5cb2c975',
                'name' => 'Dong Bang Song Hong',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'b90249b1-6e90-4a45-b559-789fbcac9491',
                'name' => 'Cork',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'b905bc65-7ce6-4400-ae3c-ac94cddcf6ac',
                'name' => 'Nor urland vestra',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'b9061bd9-273b-47d8-a822-d734bd1decf2',
                'name' => 'Paijat-Hame',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'b90860e3-41a0-4fe5-a3f1-de7abddbb824',
                'name' => 'Otago',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'b91ad127-3706-444b-876f-2478bfdd4450',
                'name' => 'Asturias',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'b941c2cc-8bed-4e1c-8b1e-2ed62701da18',
                'name' => 'Santa Fe',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'b966e5ca-42b6-481f-842f-c14f610fb386',
                'name' => 'Punakha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'b97ebe28-759a-4ee0-bcda-a4a31c4daf6d',
                'name' => 'Rose Hill',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'b9dc13b2-5aea-4015-9db9-4c67f3db4ad3',
                'name' => 'Como',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'b9e6d4f6-28a9-470a-8e14-cff59d1b2426',
                'name' => 'Meuse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'b9eabef2-703a-4115-b9cd-de3fc087ebe6',
                'name' => 'Orne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'ba0e920a-2c41-44e2-958d-2f7de3c9fa36',
                'name' => 'Arauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'ba122cc2-f50f-4b60-a555-5ed56f38655f',
                'name' => 'Uttaradit',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'ba187757-0c0d-4f85-8ceb-b69788af95c1',
                'name' => 'Alta Verapaz',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'ba26ca39-7faf-4dd0-b4e9-aecfbe32bdae',
                'name' => 'Roos-shire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'ba2db884-177f-4530-9f23-e967875b8cca',
                'name' => 'Krong Kaeb',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'ba3f8a02-bb12-490b-9ee6-36396ee6ee12',
                'name' => 'Lefkosa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'ba46ade4-05a3-44f3-adef-c34d5e5d7115',
                'name' => 'Kucove',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'ba5f1562-cd21-4ac6-990e-c7a0e93d5281',
                'name' => 'Ajaria',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'ba7edd25-01c2-4d62-b32c-ad3ec84f40d7',
                'name' => 'Umm Salal',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'ba894040-2dc7-4cde-bcaf-f736ea738582',
                'name' => 'Kangweon',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'ba899ca7-5035-4240-a530-15ead622763c',
                'name' => 'Assaba',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'ba9ad8d0-77b8-4b00-934b-fb32204a3c74',
                'name' => 'Tulkarm',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'baabff23-48c1-4ddc-9809-ce8d0b771334',
                'name' => 'Sawfajjin',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'badfd0a7-3ade-4b0f-972c-bab4960d1223',
                'name' => 'Lib',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'bae0ebd1-dacc-4275-bd9b-db81a0a30200',
                'name' => 'Chernihivs\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'bb35f1b4-246c-47c4-955a-dcc8a27f3465',
                'name' => 'Qacha\'s Nek',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'bb3dd282-25b2-4066-952d-f6e6c2854bd2',
                'name' => 'Denizli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'bb436f9c-b335-47f7-beba-4be890c0417f',
                'name' => 'Changhua County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'bb475721-83be-440f-ba7a-a54d13641d30',
                'name' => 'Iles',
                'country_id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'bb4c5e46-0d84-47c2-ac7e-7d5b7ed8e0b7',
                'name' => 'Mansakonko',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'bb50d464-2819-4fef-8552-9754084ce3d0',
                'name' => 'Sulawesi Tenggara',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'bb61ed5d-1ea1-457f-b247-4f03d284499c',
                'name' => 'Adiyaman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'bb6e4676-3c64-45fd-b0cb-3d47b365469a',
                'name' => 'Haute-Corse',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'bb9cf5a3-bba7-4ace-bc75-5f92ce5a2ba8',
                'name' => 'Mayaguez-Aguadilla',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'bba2a522-0d56-4e59-9ad0-f078eba4824b',
                'name' => 'Tangier-Tetouan',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'bba5d287-d99c-4749-92ef-63ab3b18fae1',
                'name' => 'Lisboa e Vale do Tejo',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'bbbd094a-28c1-40d3-a1d2-4cf81aa960bb',
                'name' => 'Chernivets\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'bbc8d638-20f3-4866-bd8a-42b0c1ccb90b',
                'name' => 'Biltine',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'bbd144f6-aafa-48ba-b03d-e986c487c3da',
                'name' => 'Dalarna',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'bbe5f28f-a465-441f-ace1-11d4e07c19f4',
                'name' => 'Sana',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'bbea3b1d-fd3e-47bf-83ad-8784c9faf834',
                'name' => 'Murmansk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'bbf7a905-d8d2-4681-9007-503727c5882a',
                'name' => 'Land Sachsen-Anhalt',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'bbfa0ddf-573d-494a-acd7-f781944d191f',
                'name' => 'Buhoro',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'bc24f73b-9f75-4d8a-94d6-fa352a2df78c',
                'name' => 'Hannover',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'bc4b8624-0a55-4163-b22c-91a53c360dbe',
                'name' => 'Peqin',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'bc5285dd-0cf3-4400-b1e5-f8463669260d',
                'name' => 'Santa Rita',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'bc5e7930-f889-4af6-9300-ef47db129317',
                'name' => 'Schaffhausen',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'bc6672d3-7b6a-4708-9af8-6c85ae4eeb8d',
                'name' => 'Karaman',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'bc6fd353-15de-428b-89d6-5600ca38ec79',
                'name' => 'al-Fujayrah',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'bc966887-2e3a-4991-9b38-340b26fca895',
                'name' => 'Veles',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'bca8adcd-6e37-44bb-8b93-7984f9842284',
                'name' => 'Gironde',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'bcb77b29-1e84-4e2e-a4d6-77767be0207a',
                'name' => 'Evia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'bcb78132-87ff-4768-adf9-be78a5535f65',
                'name' => 'Inner Harbour',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'bcc0356e-e763-4807-8bd3-a6ce3bf83e34',
                'name' => 'Pardubicky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'bcc4ec83-ae5f-4b43-a96f-764a875cfbc9',
                'name' => 'Saint Peter',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'bcd2f77a-7eb4-4312-9aac-e95fca370675',
                'name' => 'Sanag',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'bce9b322-08c8-4df6-9621-29f07dbee265',
                'name' => 'Nuristan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'bcf368d4-8cab-4417-9db2-a4c26c374a36',
                'name' => 'Delchevo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'bd0963b9-a1bd-4e54-9afd-8759a6e625d9',
                'name' => 'Ngatpang',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'bd11c512-d783-4dd9-b5e9-034844538145',
                'name' => 'Forli-Cesena ',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'bd123bd6-09ca-438e-a5cf-0debf5502efd',
                'name' => 'Karagandi',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'bd12da3a-12c8-424f-ac5a-1a1d47cd872f',
                'name' => 'Mid Glamorgan',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'bd15d96d-3ef3-432c-b0bc-1693d8c62c63',
                'name' => 'Kamchatka',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'bd20645b-bc94-4efe-a188-d0d49a7c153a',
                'name' => 'Guipuzcoa',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'bd278756-32c9-42fe-a9d2-1682ded289de',
                'name' => 'Mili',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'bd5be90a-532b-4bd3-bea9-d9fb258645d9',
                'name' => 'Mirkow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'bd5d36c3-2c31-43df-b51c-eaf68a3e0965',
                'name' => 'Kwanza Norte',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'bd766f64-9e2d-4a48-9a1d-0701dfb381c0',
                'name' => 'Magura',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'bd7b2da1-ec4b-4f17-9b6d-9b18714f8af4',
                'name' => 'Brokopondo',
                'country_id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'bd932f0e-d59a-4ee6-b3f2-499eb610c690',
                'name' => 'Templestowe',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'bda3cade-b263-4493-a851-7cae38464770',
                'name' => 'Valverde',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'bdad5f61-60f5-4f37-b8de-fe62d74a6cb0',
                'name' => 'Agat',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'bdbfc97e-af0d-4f67-984e-71197fa537ba',
                'name' => 'Pernik',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'bdc18942-c46a-4d29-b9e1-4e60c028349e',
                'name' => 'Mahiljow',
                'country_id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'bdc5185a-b090-4bb5-b11e-53f7ac12af2d',
                'name' => 'Stredochesky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'bdd07d74-d7f6-4e67-b34f-333dec741d89',
                'name' => 'Maysan',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'bdd241e8-59b5-4079-862a-66471e3eb086',
                'name' => 'Narayanganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'bdd34545-844c-4e09-898c-11f72cd0452e',
                'name' => 'Kraslavas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'bdd9b503-23bf-4464-9bc9-a1d8373a219e',
                'name' => 'Central Serbia',
                'country_id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'bde6946f-b18e-48c4-8d9c-2d1823da44d7',
                'name' => 'Cantal',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'bdf293b5-22dc-41cc-8d12-ffe49f9460bb',
                'name' => 'Xinjiang',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'bdf6cadf-fe09-4868-9504-7763ba17a23f',
                'name' => 'Ungheni',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'bdf9f553-3368-4fe8-8d1d-b8a9c552b2ad',
                'name' => 'Poni',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'bdfaf58a-60f0-4268-bda1-7ae85a808154',
                'name' => 'Surt',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'be03ada8-4b7f-45fd-8659-8f1772010e13',
                'name' => 'Alto Parana',
                'country_id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'be0c6d98-16f6-472e-bf7f-fe40f8fd7054',
                'name' => 'Pruszkow',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'be1e07c2-b1c9-4791-a188-c6fad899105a',
                'name' => 'Uusimaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'be44f369-c8e6-46f4-9f5e-ca55714ed438',
                'name' => 'East Yorkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'be479671-3506-41f8-bbde-2575d07ce5f0',
                'name' => 'Olomoucky Kraj',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'be4d4167-52ce-495b-b0ac-1e6e4dc9ae14',
                'name' => 'Harar',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'be51318d-72ec-4755-a925-233426886530',
                'name' => 'Ohangwena',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'be51a4fa-2719-4741-a9c5-868d36d6d966',
                'name' => 'Hammamet Yasmine',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'be58660d-554c-4003-bc6b-41c2ac323516',
                'name' => 'Zanzan',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'be80dc6e-0965-4ada-b87c-3d751be30fe2',
                'name' => 'Pathum Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'beb4e27b-add9-4ea7-87e9-402e913b7e7f',
                'name' => 'Isle of Wight',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'bed3240a-3e50-4759-86d6-3056df4389af',
                'name' => 'Sa Kaeo',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'bed727f3-dd6e-4666-944c-d0d1b32e9d71',
                'name' => 'Rum Cay',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'bee325c3-7b34-4bab-82d6-bffcabf8f782',
                'name' => 'Saint Martin',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'bee94c3d-6a07-4732-8918-5fbaee6db311',
                'name' => 'Almeria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'bef04c09-a31d-43a0-8495-b0f592c278d1',
                'name' => 'Lasithi',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'bf05931b-cee9-44f6-a053-aa41de815c33',
                'name' => 'Jelgava',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'bf2f6c2c-7254-432a-94c9-90d1cd5289dd',
                'name' => 'Pabna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'bf44ccfd-e5d4-43f4-83c8-48c3f54363ce',
                'name' => 'Guayas',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'bf608fa5-6a7a-4d5d-856f-1c3e24b66f55',
                'name' => 'Sangha',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'bf8441f5-e257-4978-88c1-6c31c2094491',
                'name' => 'Thies',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'bfa7ecbb-2a8e-47c1-b894-4750b33461ac',
                'name' => 'Baja California',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'bfb20c53-ae03-4f28-b18b-300e04eb13ee',
                'name' => 'Kourweogo',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'bfb6310f-77fc-4bff-b005-5a2828e7c190',
                'name' => 'Diredawa',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'bfc4b2a9-a348-4d0c-9b16-40441c313633',
                'name' => 'Alif Dhaal',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'bfd2fb82-343b-4a74-ae59-391034cbc825',
                'name' => 'Sacatepequez',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'bfd54401-19e5-4535-a01d-53da79044094',
                'name' => 'Gwent',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'bfecddc4-da2d-4e8f-a11f-49cc47df6ec6',
                'name' => 'Ghadamis',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'bff7f9b0-d007-4dbc-b8b9-c58835150977',
                'name' => 'Samche-Zhavaheti',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'c039be93-89ae-4ecb-96b2-ce4da0e7734a',
                'name' => 'Feucherolles',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'c0715ab0-5ca3-4fef-91d1-ad8eed9c3169',
                'name' => 'Miim',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'c077897e-e7a0-465b-b901-d508a21bc369',
                'name' => 'Sirdare',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'c081124b-d2c9-478e-b395-1774c6b029a3',
                'name' => 'Mexico',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'c086a936-d9c7-4077-ba3d-7ceae9bd75a9',
                'name' => 'Manatuto',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'c0b2ec7a-46ad-4849-9870-e7d38aba8310',
                'name' => 'Khefa',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'c0b2ec87-40dc-4834-b220-19cc1d5f2c5c',
                'name' => 'Castello',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'c0b3c3a4-af1f-4e44-ba4b-13803109f7b9',
                'name' => 'Greater Accra',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'c0d3aa02-b3d7-4cb1-b762-89b11d65422c',
                'name' => 'Iasi',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'c0d61b67-5f2c-46b2-9c8c-d827b5d1ebb0',
                'name' => 'Ntchisi',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'c0ed5436-1c7a-4bb8-8b1e-9c0d969e2177',
                'name' => 'Ceuta',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'c0f923d6-16aa-4ce5-ad34-5b4e7352de13',
                'name' => 'Francistown',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'c0fe9e69-b31a-4dae-87c6-5fde2fef186d',
                'name' => 'az-Zawiyah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'c10a79bf-2e86-41ce-a831-ab77150c5924',
                'name' => 'Zomba Municipality',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'c10e94c7-1f6d-4c6c-a40e-b01d63e6339e',
                'name' => 'Bursa',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'c1142f19-84ec-43c6-9558-97c2d23688b7',
                'name' => 'Luzon',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'c127e550-69aa-4d4b-b890-3d2265771b34',
                'name' => 'Jihomoravsky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'c143b4c2-4a6e-4a2b-8f4e-b4ccb6edc9cc',
                'name' => 'al-Khalil',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'c14575b3-1d30-4254-b3a9-3ed4cca19e69',
                'name' => 'Oromia',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'c14d46ad-8bcb-4b48-ab8a-b56e418f0130',
                'name' => 'Central Serbia',
                'country_id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'c157153e-ba1b-4b0e-8270-7ba421ebb323',
                'name' => 'Su urland',
                'country_id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'c188a223-32d2-47fe-889f-10ee9e109422',
                'name' => 'Chikwawa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'c1974dd7-ec0f-4b5e-8896-36af9c75ac99',
                'name' => 'Trento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'c19bd787-d8ed-48d3-95fa-4320ad71b1f9',
                'name' => 'al-Buhayrat',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'c1aa9f6a-c008-4ef9-a6c5-cce6c42d29b8',
                'name' => 'Argolis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'c1db8f1d-deed-4801-ab9c-168075ae706a',
                'name' => 'Savona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'c1ddb7c2-6e31-49c7-9c2b-6ab8c0123f10',
                'name' => 'Nator',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'c1f73b2e-3d1b-4383-ab79-869c43086a76',
                'name' => 'Suchitepequez',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'c2184540-fc36-4713-99f4-5a7aaefe48a9',
                'name' => 'Mato Grosso',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'c232d4b8-f9e2-4f35-985d-c56e47587d74',
                'name' => 'Oro',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'c2361d20-a100-46c1-b04d-cf66d2b952a9',
                'name' => 'Matanzas',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'c2809746-0f5d-46b8-9a36-1fb877535295',
                'name' => 'Chirang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'c29d91a5-e48c-4e96-8006-27d9e18e1623',
                'name' => 'Onotoa',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'c2b03d0e-91e6-46cd-bd85-4c4880fca20a',
                'name' => 'Zaporizhia',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'c2d72c32-287a-4714-9d9d-10c94a942e6c',
                'name' => 'Kaeseong',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'c2e0e505-f77f-4e89-9bee-9e47dada4dfd',
                'name' => 'Lozere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'c2ed88ca-bc13-442d-81b1-61595d0b0a3e',
                'name' => 'Northamptonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'c31166e5-8e3c-4d85-81bc-450e6290744f',
                'name' => 'Samarkand',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'c32ab595-2e51-44ae-92fe-c5ae8554a425',
                'name' => 'Vaisigano',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'c341d0b9-9da2-41d3-8752-bb8b04bfbb97',
                'name' => 'Maputo Provincia',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'c34384bc-3103-463f-9f04-dd58688b3ebe',
                'name' => 'Yapanaya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'c349001b-a08b-475f-947d-05e39769693a',
                'name' => 'Rhode Island',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'c35b4ec3-3c88-497f-af37-97f53769adf9',
                'name' => 'Black River',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'c36d0996-a329-48b4-99f1-205a5c60e26c',
                'name' => 'Tabuaeran',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'c3802049-2e44-49ee-8b65-8bec5b1794f3',
                'name' => 'Southern Tagalog',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'c3d489e8-70ca-4e37-9d41-6feb3a13efcc',
                'name' => 'Mato Grosso do Sul',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'c3ec7c80-b727-4ac0-a56e-bf69a94dccc8',
                'name' => 'Tisamsilt',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'c4063903-a9bd-4a23-b215-97c68101b4ec',
                'name' => 'Ruvuma',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'c41287cf-d2c9-4e6a-ac14-7ca67f5247f9',
                'name' => 'Mashonaland Central',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'c41ac53a-4cab-42b1-a3a6-85c51af3e10b',
                'name' => 'Rymanowska',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'c42ffe86-9a5a-4890-8d5b-03011999096a',
                'name' => 'Connecticut',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'c43388f9-062a-4b58-b1be-0b96e9866427',
                'name' => 'Granada',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'c45307c3-b276-4ea6-bc80-8a46fc12cf61',
                'name' => 'Shanghai',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'c45c8e37-46f3-41ab-ae61-7c02e5abb191',
                'name' => 'Chungcheongnam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'c46f3a9d-d2ef-44d9-b9a9-8398e1fb7147',
                'name' => 'Oruro',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'c4851866-ed66-4c5c-bde4-af8205c613e5',
                'name' => 'Fokis',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'c4bf5f40-6cc0-45b0-8fea-fb3e50fd926b',
                'name' => 'Webling',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'c4c614b5-8cf5-40e5-abf4-a2bd20ade8f7',
                'name' => 'El Seybo',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'c4fac1f9-d361-49e0-a8e1-efb0f1f8b9bd',
                'name' => 'Kratovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'c5078f3d-42c1-466d-aedb-1c840a618280',
                'name' => 'Moskovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'c510dd08-8b75-43ef-833d-9f3125962ffa',
                'name' => 'Cundinamarca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'c51fa142-9f68-45bb-a8a3-580c90bd5b56',
                'name' => 'Western',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'c52f46be-d631-4ab4-babd-b73a7cd4da28',
                'name' => 'Annobon',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'c54c4bd0-1c3d-4013-98c4-6a8859da13fd',
                'name' => 'Hudaydah',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'c55b851e-6c8b-4a89-bfd1-740e73dd9101',
                'name' => 'Tambacounda',
                'country_id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'c55dff59-43a4-4171-bde6-c6f99824f6fe',
                'name' => 'Laasdorf',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'c561bdbd-da05-4888-b66b-0a8c0a53d45a',
                'name' => 'Cosenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'c56fe594-8568-4694-81d4-2abbf5277bb1',
                'name' => 'Passore',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'c582ffe3-5068-4fc7-a20a-c8830642874f',
                'name' => 'Chiang Rai',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'c590b94c-aab1-486a-b2ea-c8d5674246ef',
                'name' => 'Reggio Emilia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'c59fc1b8-6050-4305-a768-61b022c05c69',
                'name' => 'Muyinga',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'c5ac8cb0-c41c-4047-a638-a7637519bbc8',
                'name' => 'Nagano',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'c5c9f030-f3a4-49d1-873a-65ffa7004d48',
                'name' => 'Charente',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'c5d1e1c6-5491-4c5a-b435-8b9d79b4720d',
                'name' => 'Fargona',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'c5de10ea-4a1e-4b3a-8126-0082589dab9c',
                'name' => 'Ogun',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'c5ded3d6-d12d-4652-ac0e-ab08f8d7d66a',
                'name' => 'La Trinite',
                'country_id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'c5e69019-c345-4cca-8855-9a857105f601',
                'name' => 'Wellington',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'c5ec5a69-593f-4ed0-8f59-78f750132475',
                'name' => 'Rigas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'c5f7e80c-aed7-497d-87c2-c6252a04b66d',
                'name' => 'Santa Cruz',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'c604455f-7db3-479f-b4a3-bce475ac65e8',
                'name' => 'Merizo',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'c60e3350-9833-4ef4-8390-5d744a14907c',
                'name' => 'Arad',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'c62ff3e5-4a2d-4974-bc29-048e33a90b12',
                'name' => 'Surin',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'c64863eb-d126-4991-8141-9364cbe56b10',
                'name' => 'Huanuco',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'c66ceecf-d2ac-4d57-9bec-a7148d675464',
                'name' => 'Polva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'c6883f78-b93e-4669-b4e2-1324786dfe0c',
                'name' => 'Metropolitana',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'c69d0ed3-d646-43ec-8caf-06d0c84248f1',
                'name' => 'Tochigi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'c69d0ef9-1417-4866-aa2e-ed806f07fc5f',
                'name' => 'Streymoy',
                'country_id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'c6a8265e-872b-4169-8e65-918d8bdb7368',
                'name' => 'Crozet Islands',
                'country_id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'c6a867ba-c062-4d4d-939a-216a08a77ba2',
                'name' => 'Ust-Orda',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'c6af071b-1ef9-4642-92e3-533f611dffff',
                'name' => 'Tigray',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'c6b9e60b-ba48-4d4b-9c6b-c2aa287f57b9',
                'name' => 'Nebraska',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'c6c3b5f8-2191-4960-a238-c297f6a58ca9',
                'name' => 'Tunis',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'c6df15d4-9f39-4a08-82b6-54a8508d6f0b',
                'name' => 'Daegu',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'c6e146b4-eb39-4e4b-82bc-c91472af6d62',
                'name' => 'Monaghan',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'c6e63359-5cff-4ab6-9541-7d3827e3e66a',
                'name' => 'Gash-Barka',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'c6e9dbb1-38ac-47a3-aeee-375d3f8bf36d',
                'name' => 'New Jersey',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'c700493b-16eb-4644-9716-002406585ad1',
                'name' => 'Cortes',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'c70ce438-aee7-4d93-bcfd-89e86d2231d8',
                'name' => 'Pohjois-Karjala',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'c71a9289-0c56-4626-ae14-3a03fca76f63',
                'name' => 'Pisa',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'c725b6c8-b301-42b1-b90e-d8c2811039d7',
                'name' => 'Gramsh',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'c740a59f-a306-41b2-8ec3-e86068ad99d0',
                'name' => 'al-Gharbiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'c746410c-9f6d-4860-a944-e03b59de829e',
                'name' => 'Ulster',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'c747a5be-f7d5-498f-a191-7b8e182952c5',
                'name' => 'Hautes-Pyrenees',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'c75efb71-2781-4307-bdfd-193b0dcadd50',
                'name' => 'Guera',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'c76402ca-5d16-497d-8845-a28aa7e8576a',
                'name' => 'Saint Anne Sandy Point',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'c775bd4b-af21-40aa-b2af-18990642d6e1',
                'name' => 'Chukotka',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'c7b751b1-29ad-4d71-8b8a-d2ac84c36572',
                'name' => 'La Habana',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'c7d2eaac-38c4-4b51-80a3-53365ff3d299',
                'name' => 'Cuyuni-Mazaruni',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'c7daae61-182f-42ca-a4a6-507baef46141',
                'name' => 'Franche-Comte',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'c7ecca43-1624-4260-a6e5-1e86f6af9d09',
                'name' => 'Cojedes',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'c7f3e323-d73d-4058-af02-e1e67cf85b15',
                'name' => 'Evvoia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'c7ffccbb-2a26-4acd-a8e3-83a6154b54b3',
                'name' => 'Vynnyts\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'c824e411-a518-4b45-82c9-15fa560039e6',
                'name' => 'San Andres y Providencia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'c83e712c-f60f-4c18-ae15-38b336331b9e',
                'name' => 'Yobe',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'c840fb1d-9f7e-44e0-9aba-d15fd5dab489',
                'name' => 'Ha',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'c844d3a7-94d2-4fe4-93d0-a89aee168d37',
                'name' => 'Saint John',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'c84b530a-eac1-48f2-9b69-437243cdc458',
                'name' => 'Qunduz',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'c858af64-822d-4e0f-885d-a37208492310',
                'name' => 'Kutahya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'c86c7af2-cdff-4b21-a7ef-1d81c1b75b60',
                'name' => 'Valletta',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'c8a7ed9e-9f66-4e13-a2d8-0947cec056e5',
                'name' => 'Maluku',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'c8ae8138-7b65-4ecd-b06c-d720c0694212',
                'name' => 'Saint Brelade',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'c8aec16b-409b-4949-abdf-e84e1a6ae0da',
                'name' => 'Bauchi',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'c8c3a163-7ea8-492b-a6ff-b7aaf4922b2d',
                'name' => 'Oblast Sofiya-Grad',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'c8ce6be1-a36d-4f06-ba6f-2dcc09560ce9',
                'name' => 'Putumayo',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'c8db47cb-32dd-44bb-95a0-de84e739b565',
                'name' => 'Ouest',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'c8ddb924-3e8e-4b3a-9dcc-620fd231a8cd',
                'name' => 'Chuvashija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'c8e17c1e-560d-47ba-93cf-fa6ed5750d46',
                'name' => 'Central Bohemian',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'c8e57171-8971-46a2-b67d-3d66802ffe6d',
                'name' => 'Hokkaido',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'c8f13bd7-df88-41c7-a0cb-5d5822e8618c',
                'name' => 'Diffa',
                'country_id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'c8f26de4-fdb0-4122-ac0e-f98ca364e1fc',
                'name' => 'al-Muthanna',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'c908b869-57de-445b-83ac-1bf29631fcbf',
                'name' => 'San Marcos',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'c921ecc3-1451-4166-968b-055df7d5a705',
                'name' => 'Kenford',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'c923910b-689b-4293-a8f4-983b0a841516',
                'name' => 'Derbyshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'c94f6938-1fb9-45ad-97af-098cb92374f3',
                'name' => 'Narsingdi',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'c96c7471-1f10-4275-b586-8ac7dc1bdfdc',
                'name' => 'Mohafazat Mont-Liban',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'c97d5e0b-9da6-47e6-9c07-70e1ef1bf811',
                'name' => 'Viangchan Prefecture',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'c97e1ae4-2b9c-4146-828d-6e10ff2c6d1a',
                'name' => 'Likouala',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'c97ea27d-31b5-4037-85c4-b89e113ee52b',
                'name' => 'Eschen',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'c9893007-2bc1-410f-9a15-c3acf6f80529',
                'name' => 'Ulyanovskaya Oblast',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'c98da514-9be4-48dd-9c4d-adf4313555ec',
                'name' => 'Chanthaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'c9a4a4cf-de94-40ba-8af2-a9535762365d',
                'name' => 'British Columbia',
                'country_id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'c9c1d1f6-53a3-4481-bf16-17ee0f769aee',
                'name' => 'Equateur',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'c9d97b02-f49b-4514-9295-fa2dfe5f4928',
                'name' => 'Ardeche',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'c9da5f29-5502-4796-8d89-3812b3202f2e',
                'name' => 'Craven Arms',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'c9ef4742-db66-4961-a5b1-3b290520091a',
                'name' => 'Zurich',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'ca14560f-36f9-42c3-bf88-22e009f07956',
                'name' => 'Independencia',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'ca2cf1ca-42e5-4f6a-9ca6-b8ab07dc0fc4',
                'name' => 'Naama',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'ca32253d-32b9-4b1e-96eb-2a99da271895',
                'name' => 'Masvingo',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'ca3ac979-4dfd-42c7-b42d-c77bbad72942',
                'name' => 'Taitung County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'ca426abe-fdca-4708-993f-28c78a9a2e27',
                'name' => 'Burgenland',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'ca4a3a88-4625-4971-bdd4-895bfdee2957',
                'name' => 'Madaniyin',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'ca52c002-4d9c-4016-85a9-3c05cc7f4a83',
                'name' => 'Makin',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'ca58422c-8b9b-4b93-b847-9c2a2c3fd35e',
                'name' => 'Western Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'ca5936d8-6b41-4973-b3f0-18e31e7add0a',
                'name' => 'Boke',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'ca5dbcf0-8c3f-4558-bb3b-b419f10bee5b',
                'name' => 'Klagenfurt',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'ca5e7781-229d-4d4b-a87c-70afde527d7e',
                'name' => 'Khersonska',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'ca7e9d2d-6117-4eb5-866e-8c5cfc20247b',
                'name' => 'Kerkira',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'caa11203-0d4d-4e20-bf27-0944b0008fce',
                'name' => 'Abruzzo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'caa2d442-dd11-4769-bf62-b46d782b95f6',
                'name' => 'Kiklades',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'caab7ca0-dd6d-4723-a5d5-f364349f9919',
                'name' => 'Ascension',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'cacc9f55-c4d1-4ef7-9c5c-51294f2c5048',
                'name' => 'Yerushalayim',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'cad78642-6b11-4405-9e5c-3ee0d402d4af',
                'name' => 'Biskrah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'cae05c9d-f312-4575-bd77-9449fc1d32a0',
                'name' => 'Gitarama',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'cae9b93e-9825-49e1-b9a3-86442738c828',
                'name' => 'Ica',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'caf665e4-c84c-4909-8687-019485376812',
                'name' => 'Kruje',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'caf8a431-2e8c-4acb-a8fe-b6a3aadcdcfc',
                'name' => 'Savinjska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'cb0df3ce-0af4-46b2-ac20-c96d1c02107f',
                'name' => 'Tipperary South Riding',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'cb429eb8-7b6e-4330-8062-f86a8a621338',
                'name' => 'Miaoli County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'cb54d02d-9a64-4768-a540-817bc49c0adc',
                'name' => 'Carolina',
                'country_id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'cb591e74-30c3-4421-95eb-7e879768d524',
                'name' => 'Princes Town',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'cb65852a-96cb-4f7b-a297-c5c5fe663f6b',
                'name' => 'Krym',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'cb70946e-b13e-49d1-89cd-4609cebccd43',
                'name' => 'Rakhine',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'cbabab2e-5c41-4135-b950-038e1ce3aaeb',
                'name' => 'Marrakech-Tensift-Al Haouz',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'cbafb644-705e-4523-a532-f3c4de462b23',
                'name' => 'Cauca',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'cbc88586-f593-4283-bfcd-a21bd31d9438',
                'name' => 'Dagestan',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'cbdf1f86-9ce4-48df-bf4a-60e4d522a7e0',
                'name' => 'Liguria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'cbeeffba-24c5-4932-b649-bafc95a44c4c',
                'name' => 'Bikini',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'cbf2520a-e702-49f2-9ffa-b03609121d2d',
                'name' => 'San Fernando',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'cc1a7244-08ad-4117-b213-7d2922a47f78',
                'name' => 'Aluksnes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'cc550ab1-8c06-4a12-a4ef-cad29c90d6a6',
                'name' => 'Ganca',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'cc595865-2f8d-4578-8f8a-138ed0fea049',
                'name' => 'Jurmala City',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'cc664e5e-6fbc-4c86-a80c-adfab8a5cbcc',
                'name' => 'Westmeath',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'cc6fd956-6614-4c21-8cff-9de25951a642',
                'name' => 'Rangpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'cc701c4d-0ee9-46da-9e32-b4de444ef152',
                'name' => 'Tarabulus',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'cc7e2fc0-6bba-47f2-8461-27c240d97839',
                'name' => 'Forest',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'cc864797-b81c-4ac7-8ed1-bef1ef6b49d0',
                'name' => 'Shamal Bahr-al-Ghazal',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'cc926e93-e409-497a-a252-0c173623c7ea',
                'name' => 'Sarthe',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'cc950090-afb4-4495-8828-2e950f64e189',
                'name' => 'Komi-Permjakija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'cca04c53-5e67-41f5-9d38-d3823da55a85',
                'name' => 'Toyama',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'cca8fa4f-055e-40c5-94da-1a060f9aca48',
                'name' => 'Northern',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'cccd02ec-bb4f-4b23-a1dd-4d1b31044c77',
                'name' => 'Me-Zochi',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'ccd1c613-decd-4975-bf30-323b587f6440',
                'name' => 'Preah Vihear',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'ccd6be92-9ba7-45f7-9493-bd93a88a9c50',
                'name' => 'Minnesota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'ccf46ce9-07bd-49dd-9b99-37883a4636c6',
                'name' => 'Vrancea',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'cd00b2c5-304d-4c5a-974b-4ef9a8e7fc3d',
                'name' => 'Masqat',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'cd4caf1d-6387-4509-8311-a7140b820365',
                'name' => 'Shabellaha Dhexe',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'cd71592a-eb62-46bf-bd2c-42b541ec302e',
                'name' => 'Rarotonga',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'cd71f837-3576-4fbd-aaf6-e25d9cd21cc9',
                'name' => 'Agrigento',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'cd81cd2a-8161-45b1-9028-df4d530840e9',
                'name' => 'West Greece',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'cd81d6d8-f55b-4367-8800-19a42f8154ec',
                'name' => 'Viljandi',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'cd96d157-7198-4af5-b73b-1575ad838a2d',
                'name' => 'Granma',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'cda65317-c6c7-4077-804d-aa5fac5e1e45',
                'name' => 'Rhone',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'cdb5240c-3ecb-4be1-b7b0-84a047509449',
                'name' => 'Distrito do Porto',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'cdd3b160-8891-4ebd-b24e-ca833d1baad0',
                'name' => 'Kefallinia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'cde3291c-3bea-4e94-83ae-906baafcc9a8',
                'name' => 'Obwalden',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'cdec748e-0127-4fac-babd-69894875b48b',
                'name' => 'San Juan',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'cdee0b5b-a862-41e9-94bb-1a5db0ff2526',
                'name' => 'Vaav',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'cdf2fdc8-3576-4c53-88b7-b1cf6e5db229',
                'name' => 'Tumbes',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'ce1a3422-64ad-4e9b-b7e2-6fb68b2ea296',
                'name' => 'Saba',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'ce2e0347-e4b2-4d64-96cb-f6ac10dab746',
                'name' => 'Pichincha',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'ce2f4c13-8934-46b2-b0f0-aa441f4bb2b7',
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'ce3e401c-1db7-4767-bf97-c2b26961c817',
                'name' => 'Scottish Borders',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'ce661e9e-dd96-42d2-84e5-5ca6494c6fc0',
                'name' => 'Utenos',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'ce734f21-02b0-4241-b933-e3d4df4325a2',
                'name' => 'Eastern Province',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'ce8d6fd5-5bf8-4621-87e1-f0e8c80a9b33',
                'name' => 'Gombe',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'ce990b16-cb16-4e0b-8939-bbe72224d659',
                'name' => 'Vieux Fort',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'cea97558-ebd2-45ec-a517-2bb7138dcd7b',
                'name' => 'Gourma',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'ceae7b8d-fdf8-41d5-ba1b-36b9afe19c3c',
                'name' => 'Targovishte',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'cec4fedd-da8b-484a-87c1-a70a4e414e5e',
                'name' => 'Dix-huit Montagnes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'ced38238-e9ed-45ee-bcff-8efc763fa4c4',
                'name' => 'Imathia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'ced93f45-7912-4583-9578-277fce5a83bf',
                'name' => 'Kocaeli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'cedbce04-81cc-4a76-b159-e14596a9d62e',
                'name' => 'Korce',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'cee42121-b9b4-433a-866f-3059781514cc',
                'name' => 'Gjirokaster',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'cee4d7a9-342c-48a9-9eb9-d51bc7357e68',
                'name' => 'Berovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'cf230ac6-5913-4c41-9e4f-82324a9731c7',
                'name' => 'Qalmah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'cf241d29-26bf-4d3e-b693-9231c5cc6a6d',
                'name' => 'Erbil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'cf35c3dc-f288-4fcc-ad98-2130e8d36fd7',
                'name' => 'Skane',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'cf41c4b9-c710-4aa6-8ca2-0cd76a2eefa9',
                'name' => 'Jaffa',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'cf483821-0425-4fcb-933f-dbfaad6c1941',
                'name' => 'Togdher',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'cf62d98b-e1d1-436c-bb50-1b36e0c8b0a6',
                'name' => 'Venezia',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'cf693ee5-7ba7-44c7-a83e-606717193637',
                'name' => 'Odessa',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'cf698ddd-c56c-483e-8a42-40d23e7cbd89',
                'name' => 'Lemba',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'cf9cdf29-ed93-422b-9dfd-20081b92051d',
                'name' => 'Bolivar',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'cfa31159-82d7-4d9c-be5e-61b536f2e18b',
                'name' => 'Wurttemberg',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'cfdcf27b-3ed4-4983-92cf-92fccab2ed84',
                'name' => 'Northern',
                'country_id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'cff4dccd-23b3-48ce-ba11-8a074a17ca94',
                'name' => 'Frenchs Forest',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'cffde9c2-da99-4aee-a324-5e1fd1a04986',
                'name' => 'Tacuarembo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'cffef33d-4494-4791-bcb8-8594f9ff36bf',
                'name' => 'Navarra',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'd0017b04-caad-4a48-86fc-dff35c93c618',
                'name' => 'Durazno',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'd010d1bf-9747-49cc-9a67-40d3194beabb',
                'name' => 'Nyanza',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'd01f49ce-9f7c-4f36-9795-81d21f4242fe',
                'name' => 'Jamalpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'd02673b6-e1d1-4a18-b8d6-f0901d5bb807',
                'name' => 'Central',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'd04bdd87-3cf7-465a-91da-2f2f51001dfe',
                'name' => 'Kars',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'd04f1694-60bc-41f4-958a-3bc957cdfc3b',
                'name' => 'Diego Martin',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'd05a5203-d21b-4685-a94e-f8b0e06d17aa',
                'name' => 'Bihor',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'd07214c5-8635-4e4b-abc3-e61de196a9dd',
                'name' => 'Kangaatsiaq',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'd08018ab-05ef-40e9-89ca-dc104e8356a3',
                'name' => 'Haut-Congo',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'd088d31b-30a4-407c-9463-d223f5106d10',
                'name' => 'Banjul',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'd0eed739-f68c-4480-868d-c0a129e15ea3',
                'name' => 'Hiroshima',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'd0f00fd9-6ef0-4c2e-b22a-2881dceca30e',
                'name' => 'Swietokrzyskie',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'd106f292-96e3-469e-a005-15f51a92c8ff',
                'name' => 'Nizhnij Novgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'd11b03b9-e3c6-4fc5-8be3-489ee049135c',
                'name' => 'Kyyiv',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'd127e5cf-ee63-4261-9c2a-a07a483cb377',
                'name' => 'Nord',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'd139a0a9-ca6f-4754-8a98-b1f54eec4f65',
                'name' => 'Laam',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'd13aa00c-218c-4f69-a4ce-0834c3a4008d',
                'name' => 'Toledo',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'd17c62a7-74b7-47e3-bd7a-41fdd9e12b32',
                'name' => 'Plateau',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'd1809745-67c6-4c2c-abfa-79d34a8af3aa',
                'name' => 'Monmouthshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'd185dd6c-429a-4a12-ab13-4f8f087160c8',
                'name' => 'Los Rios',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'd18ca23d-ef5d-487b-8ee6-2a14ca1bdc83',
                'name' => 'Byumba',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'd19d89f7-fbb0-4654-a0e0-cc598c6073a1',
                'name' => 'Darnah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'd1a779b0-bdef-4c18-8be0-14be740f4acd',
                'name' => 'Kaliningrad',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'd1baae5d-98e8-47f6-975b-75b249de8249',
                'name' => 'Adamawa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'd1d64bac-2587-4dff-8040-15442c4ad128',
                'name' => 'Barguna',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'd1f4bb50-e06a-4aa5-9b2f-defa47955354',
                'name' => 'Benguela',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'd2128e27-8fb6-4b8d-a0ae-bd48a6902685',
                'name' => 'Cheshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'd21a50af-41e3-44f5-9d24-de7312825f79',
                'name' => 'Eastern Visayas',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'd2242907-ba00-4b5d-88eb-84058ff80890',
                'name' => 'Mari',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'd22db53d-5ed2-4927-a291-2f478592695c',
                'name' => 'Murzuq',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'd2308a34-9e49-46d8-a8dd-4c4a41858f97',
                'name' => 'Lanarkshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'd2329d72-77ab-4096-8332-8099a80447c1',
                'name' => 'Mahama',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'd247c079-33b3-4ec9-9bb6-bcccac495670',
                'name' => 'Lakshadweep',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'd258c044-91d3-47c2-a406-84f6182af83b',
                'name' => 'Samangan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'd26648f4-3a18-4510-9b65-e19ff6411889',
                'name' => 'al-Mafraq',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'd268c5a3-6d72-41aa-b350-28c30d58f8a2',
                'name' => 'Morona Santiago',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'd276df6f-492f-4af4-adc7-1573fd34e5e0',
                'name' => 'Trenciansky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'd27d6bb6-5ca8-4074-a3c6-077e34ad1672',
                'name' => 'Pays de la Loire',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'd2836813-850d-4433-8647-216e2512dbf7',
                'name' => 'Luang Nam Tha',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'd28bcaa5-7dfa-4b87-be7a-9d9a39d27bbf',
                'name' => 'Telsiai',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'd293c16a-94eb-4a72-be9e-6ac133755f06',
                'name' => 'Loiret',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'd2a8b728-f3b8-49c6-8173-a25f9ae0090c',
                'name' => 'Apure',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'd2b70287-244a-4a85-8040-99235641b56a',
                'name' => 'Bong',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'd2c6ba11-3d54-4f3f-9519-2d5409eaa337',
                'name' => 'Umbria',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'd2d16ff2-5527-4e56-9230-4c6b0f5ca716',
                'name' => 'Surat Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'd2db4c9c-208a-4e74-ad71-50770bca8be1',
                'name' => 'Plaines Wilhelm',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'd2f3d623-4565-4ad1-860e-0989140e45c9',
                'name' => 'Sverdlovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'd3093e2c-37f1-49b2-a505-2cf07d05f027',
                'name' => 'Niue',
                'country_id' => 'bc69b8fe-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'd30dca2e-d323-4276-b44e-b0ec4dff237a',
                'name' => 'Schleswig-Holstein',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'd314931c-0c4a-468c-9ebd-f0cc2cb7094b',
                'name' => 'Utah',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'd31701ac-4f8b-47ae-8384-061877d3558a',
                'name' => 'Mondol Kiri',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'd33f5839-fcda-4fe4-b3fb-b329b38fe675',
                'name' => 'Grande-Terre',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'd34c0867-6325-4a6c-bab4-3db8132ef016',
                'name' => 'Logone Occidental',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'd35a8124-439f-4baf-ae3b-d040f3d603b5',
                'name' => 'Canar',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'd36aef1e-fb0a-4860-96ba-fa419c63252b',
                'name' => 'Markazi',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'd372e78a-395c-4849-ba25-53c51c80e50c',
                'name' => 'al-Biqa',
                'country_id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'd373d7bb-d131-45e5-93ca-5d22361e1d32',
                'name' => 'Pirkanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'd3ade084-be23-42a5-a17c-fc91c87fb2d0',
                'name' => 'Alif Alif',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'd3c0c506-f4d9-48f5-8b44-98d3fc0bb0b8',
                'name' => 'Irkutsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'd3c31ed8-f5de-4ea8-bdfb-242ffb82553e',
                'name' => 'Mayfair',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'd3c5cb46-c58a-4425-8b2c-5597a6b32d5f',
                'name' => 'Mulfingen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'd3da5f87-5724-472c-b5fc-effe44846e64',
                'name' => 'Kwara',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'd40930e0-2914-4224-9f01-0dbbc992843d',
                'name' => 'Jaluit',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'd43f0561-3517-47ee-b9d9-bb1b3bfa529c',
                'name' => 'Banadir',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'd46ea3b5-06af-4e49-8714-6fd70ce1aa19',
                'name' => 'La Libertad',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'd47e6fb6-9fa8-46bf-840c-3a62bb84454e',
                'name' => 'Les Escaldes',
                'country_id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'd48143f4-e21b-41ca-8440-7ce07773f336',
                'name' => 'Amman',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'd48778da-d8db-4ec9-a569-2e53e924a50f',
                'name' => 'Lapusna',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'd4b8bea8-a313-4fcc-b9c6-a112bba35c54',
                'name' => 'Cabo Delgado',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'd4c18b0c-ed50-4fc8-bd4a-43592cd96d02',
                'name' => 'Jijili',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'd4c2c5dd-8627-459f-9490-4eb86af93e30',
                'name' => 'Moyen-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'd4c6a2a9-5fdb-46d8-97d3-707287735dae',
                'name' => 'Amazonas',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'd4cc5310-0237-420c-83d9-2d693479f5e1',
                'name' => 'Grand Cayman',
                'country_id' => 'bc692a07-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'd4d1687c-6311-4e1f-8307-fd17caa4bcfb',
                'name' => 'Bomi',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'd4d5b2eb-49de-4893-9e2d-4e99d93c016f',
                'name' => 'Ulsan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'd4dc751c-e254-4fe1-ae13-aade2ffd47ff',
                'name' => 'Transnistria',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'd4f7508e-2b93-4497-88a4-ba8b4882a6c0',
                'name' => 'Si Sa Ket',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'd51818df-20ac-487c-933a-2969b89ae0aa',
                'name' => 'Lawghar',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'd51ee472-06c1-4909-9765-d893dc6006f0',
                'name' => 'Leon',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'd5208e32-a7b9-4a2f-9186-898dcfde8861',
                'name' => 'Crooked Island',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'd5331adf-ba98-4e5b-9ef2-3e0963adcd81',
                'name' => 'Gainsborough',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'd549c9ba-503f-4c5b-baef-c494d9c5d58b',
                'name' => 'East Dunbartonshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'd5703035-ed9f-4bd7-96ad-391a03c094f0',
                'name' => 'Siparia',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'd57fa568-db34-44e2-ad90-8fde44cf6a52',
                'name' => 'Mohale\'s Hoek',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'd592a960-d1f0-4954-958b-e8dda2931986',
                'name' => 'Tete',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'd5939fbb-9f7e-40eb-a6be-e2424235b49f',
                'name' => 'Satupa\'itea',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'd593cc3c-95c7-44e3-937b-a2eb6329ad19',
                'name' => 'Hong Kong',
                'country_id' => 'bc6951df-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'd5ac2d86-7993-4638-9e4a-4644237b4c0c',
                'name' => 'Carchi',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'd5b765e2-18a4-40e3-a40d-741c7d83c18d',
                'name' => 'Ratchaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'd5c68ba4-33db-4a7a-96c4-d7eb8eb46031',
                'name' => 'Arunachal Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'd5ca4c6a-ed92-4323-a0b6-ad60acb73325',
                'name' => 'Alvsborgs Lan',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'd6053de7-6bf1-4b0f-b5ab-a8707e95b296',
                'name' => 'Masilah',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'd60aa8c2-2edd-43ea-b610-3996251eaf0a',
                'name' => 'Ciego de Avila',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'd60d422d-1ae0-41f6-9d62-23d865395b14',
                'name' => 'Wele-Nzas',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'd6178b7c-d75c-4ffb-8e95-28249703e36d',
                'name' => 'Santa Barbara',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'd621ccfc-77d7-40a0-96f1-e7d7df082501',
                'name' => 'Krong Pailin',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'd6296f5f-b0e9-4cdf-a3e5-18cbc852d6a1',
                'name' => 'Elias Pina',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'd630cadb-8e83-4a54-b4a9-33af6d798a4e',
                'name' => 'Chollanam',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'd63e573f-a0ae-4758-b82d-7b8d07323521',
                'name' => 'Bumardas',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'd641ab36-0fe9-4675-809e-9131085d883c',
                'name' => 'Western',
                'country_id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'd6639e50-b9bf-4992-a870-5175b450c37a',
                'name' => 'Saint Lawrence',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'd66770b1-3c05-4dd5-9b1b-9f0f899ba7cc',
                'name' => 'Lara',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'd6932ecf-b928-425b-b217-00617ebc7b15',
                'name' => 'Ariha',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'd6962714-f4b7-44e6-8dc7-9cf033b47dc5',
                'name' => 'Salamat',
                'country_id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'd6aa5b9d-a0f1-45b9-bff6-4c9705b25638',
                'name' => 'Tripolitania',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'd6c4b593-bf9b-45af-9110-67111669a5fd',
                'name' => 'Litoral',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'd6cf159a-65c6-475c-b9d8-d6d7547eadf5',
                'name' => 'Lower Normandy',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'd6d713ed-7367-4e08-af14-a0d5bea437ec',
                'name' => 'Grand\'Anse',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'd6da631c-a3f3-40d1-89b6-c0fc115b3e55',
                'name' => 'an-Nil-al-Abyad',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'd6de77a7-f69d-4f0b-83af-4773409960e6',
                'name' => 'Buzau',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'd6f806ec-9c9c-430b-adba-c2d2590241ed',
                'name' => 'SUSSEX',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'd70d577f-0b1a-4c92-9f28-002ec2ab58db',
                'name' => 'Cairo',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'd710f3d8-b2c0-438f-bce6-9835371f06bf',
                'name' => 'Haute-Marne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'd71ccdd8-9f06-4616-807f-556e1f008389',
                'name' => 'Thaba-Tseka',
                'country_id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'd7299c8f-593a-4e9b-8b71-0d6071e058f2',
                'name' => 'Paschim Medinipur',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'd73db241-2376-464e-b2b8-4f9df6d275dd',
                'name' => 'Bushehr',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'd742fc39-ee89-49a7-9a42-3def0cc0f2ea',
                'name' => 'Potenza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'd76bf5d0-b337-4d87-89d2-01dce028cd48',
                'name' => 'Monte Cristi',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'd7cf0388-63f5-4d60-b737-93d47bd5d48b',
                'name' => 'Halland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'd7d2f296-6d42-4008-9652-fdcc8d665c04',
                'name' => 'East Sepik',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'd8032ca9-4756-4d62-a8ba-09f00889e380',
                'name' => 'al-Quds',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'd8143ed2-bf00-49a5-bf31-80ca136290d1',
                'name' => 'Tacna',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'd817cb20-d721-4d1e-b259-60f685c13e54',
                'name' => 'Pyeongyang',
                'country_id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'd82f2615-a7f8-44a4-8a0c-88cf62769b2c',
                'name' => 'Devon',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'd84544c9-7f48-44c2-9cf4-eb08589e5bdc',
                'name' => 'Cordillera',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'd8465242-6a9d-44fc-be51-7c26798dd875',
                'name' => 'Kayin',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'd8546023-911d-4e62-b234-93b6890304ba',
                'name' => 'Unicov',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'd86d0b48-df38-49ad-aee4-9070f6c18740',
                'name' => 'Attopu',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'd89889cc-ecdc-4e66-83da-d3eb0de3d03b',
                'name' => 'California',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'd8b4539b-83e0-4daa-98e6-ec6ba18cd1fb',
                'name' => 'Orange Walk',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'd8d4efe9-9704-4c30-881e-2402a8b4e603',
                'name' => 'Marie-Galante',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'd8d7574b-0f55-46e0-a673-74804d3447da',
                'name' => 'Bristol',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'd8f33e7a-5b47-4b25-bd7b-7d6045e14eae',
                'name' => 'Western',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'd8fcedb3-dd5f-48a3-8b91-a3c26ff5bc54',
                'name' => 'Oshikoto',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'd9209f38-6c18-4cc7-8ba0-041789077f13',
                'name' => 'al-Muharraq',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'd93e6234-232c-4cfb-a6ca-077fdfaf7a51',
                'name' => 'Kavango',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'd94425e0-c5a2-4d77-b6e6-7a3571360e12',
                'name' => 'Mpumalanga',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'd95118a7-9ee2-445e-9112-df92abe0ae13',
                'name' => 'Bayelsa',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'd9679026-b6c8-4c71-8ba7-f98e9c0f1969',
                'name' => 'Gorishka',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'd97c4434-e5b2-4fbe-bd67-dae10ab914a0',
                'name' => 'Antsiranana',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'd98300de-c296-4b7d-9b94-452233d2e342',
                'name' => 'Cahul',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'd990ef48-372c-464c-ace1-4bd67e3c4bc2',
                'name' => 'Ma\'rib',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'd9941c76-532a-4b63-b4a7-4015665216dc',
                'name' => 'Gough Island',
                'country_id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'd9a5f346-d4f9-4cc4-974b-117aec89db97',
                'name' => 'Ghalizan',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'd9aff8f7-ffb4-4261-99d1-15b4519e7e4b',
                'name' => 'Aileu',
                'country_id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'd9cb5b15-73ab-4064-9098-b387835c44e7',
                'name' => 'Saint Philip',
                'country_id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'd9e41454-de42-4d2a-98bb-5e268c7b3043',
                'name' => 'Drenthe',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'da019add-aae2-48b4-8d8f-7f341e86e37e',
                'name' => 'Nord-Kivu',
                'country_id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'da01f489-edcb-4f1e-8e36-846fa2653fc2',
                'name' => 'al-Ghuwayriyah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'da041e30-0c8b-4367-a1ff-37c07f9be03b',
                'name' => 'Magnisia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'da2afee4-b2ab-485f-a49e-6d45c10ed6bf',
                'name' => 'Spodnjeposavska',
                'country_id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'da2c2791-779d-4b00-8cd3-05db0cd8b507',
                'name' => 'Kaskadar',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'da4ed109-0f44-4476-b7ab-57a6cce63242',
                'name' => 'Dowa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'da5d353c-af25-4974-b907-6a16ae77bdde',
                'name' => 'Washington',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'da757758-e47a-4482-94c4-710cd7131eae',
                'name' => 'Biminis',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'da8ca28a-7b7c-4a30-baab-d0584fd77563',
                'name' => 'Colon',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'da920072-16df-4ea1-8f52-b971aecf9b52',
                'name' => 'Pleven',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'da980c9b-4ddc-4ff1-886c-0283359efcf2',
                'name' => 'Dhi Qar',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'dab36e57-7499-477a-ab9f-be6d244f5a30',
                'name' => 'Koror',
                'country_id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'dab470c0-156f-4b65-8846-5df62417fffe',
                'name' => 'Mtwara',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'dae5bcbc-0d8b-41d0-a2d3-40fd3354bca9',
                'name' => 'Lugo',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'db1e388a-0119-489f-919d-e3eb215f4aeb',
                'name' => 'al-Minufiyah',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'db30bb39-5b70-40c3-8151-6431c42861ef',
                'name' => 'Ardabil',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'db33d753-9afc-4339-b7d9-b04675b873e3',
                'name' => 'Shabellaha Hose',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'db357c49-2225-4874-890a-148bdd56ce6b',
                'name' => 'Loja',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'db46cecc-9eeb-44fd-b446-779386237428',
                'name' => 'Bethlehem',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'db4df250-0ecb-46bf-a5a7-70f727a8082b',
                'name' => 'Gotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'db68e75e-29cf-47c0-8375-b1e9dc5052bf',
                'name' => 'Sulawesi Tengah',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'db6f92c4-8584-4cd4-b05d-81b5b6d00e5a',
                'name' => 'Dibre',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'dba9c196-3e5a-4124-8a04-dce79510450b',
                'name' => 'Christmas Island',
                'country_id' => 'bc692df8-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'dbb16b6e-eb79-4141-8bb9-2cd319f32a3a',
                'name' => 'Qalqilyah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'dbbd738c-7611-4d63-b978-0464806f2092',
                'name' => 'Prey Veaeng',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'dbcc0a49-d844-4a83-95ff-0de8c51734ba',
                'name' => 'Salfit',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'dbd93e1c-d002-4a55-97f6-578e034d2462',
                'name' => 'Sirnak',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'dbdbf5cb-b815-489c-9d63-cc479e6f31e1',
                'name' => 'Tarija',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'dc0272e4-8123-4ed2-899f-6764bd6a2a8b',
                'name' => 'Ancona',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'dc2668a3-6b75-408e-b55c-c51e7e1064c7',
                'name' => 'Saint Patrick',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'dc47321b-0611-4025-866f-50bbbf5943df',
                'name' => 'Luapala',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'dc806366-0b3a-45e0-81d9-c663a694022c',
                'name' => 'Lipov',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'dc8af61e-0467-412a-9852-b67666cc6821',
                'name' => 'Badakhshan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'dc91caae-9496-49b7-8942-a819ea8f88a7',
                'name' => 'Sector claimed by New Zealand',
                'country_id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'dc936618-d44b-4fe1-9d87-dc5cf0f2de15',
                'name' => 'Iles sous le Vent',
                'country_id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'dc953db6-0979-4278-9fcf-a90691182834',
                'name' => 'Karotegin',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'dca78f2b-8f7b-4854-af69-1bba14791c14',
                'name' => 'Farah',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'dcc61aa8-6f8a-4192-a1fe-86d5375ccad7',
                'name' => 'Chita',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'dcdda923-e737-440e-a111-d6b4127c3a25',
                'name' => 'Phoenix Islands',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'dcee0239-19d9-40b1-b35b-0d61a8952659',
                'name' => 'Bayern',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'dd007d1c-d06a-44ba-9ca3-56617ebd8fd4',
                'name' => 'Atlantico Norte',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'dd07005c-32b4-4ce9-a8e2-3468020c2cfb',
                'name' => 'Ahvenanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'dd0a688c-396b-43df-81ab-b0ccc34b39f7',
                'name' => 'Veszprem',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'dd224275-a208-4572-b3a7-b091a212828a',
                'name' => 'Leon',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'dd26407d-47fd-4dc8-8e72-e20394d00d1e',
                'name' => 'Dasoguz',
                'country_id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'dd3d6272-e516-4c4b-9f47-7a0f2423097b',
                'name' => 'Saint Mary',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'dd609852-b2ad-4bca-8174-2bc6f18bb951',
                'name' => 'Vorarlberg',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'dd83246f-7190-4372-8a74-2838c5f38ffe',
                'name' => 'Lika-Senj',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'ddaae506-f91b-49e4-9e87-2877b29bcd7e',
                'name' => 'Kemo',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'ddb89371-acbf-4a6a-92fa-a909f8ba081c',
                'name' => 'Korakalpogiston',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'ddc89c0f-5354-4205-8f8f-e26d52e6c7d4',
                'name' => 'Toliary',
                'country_id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'ddcace42-9727-4609-abd4-5f2021e4a8cb',
                'name' => 'Treviso',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'dde25116-2a0c-4b60-9d58-1d827fc71994',
                'name' => 'Kristianstads',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'de084a9c-1755-46c6-88ee-a90a6256c14d',
                'name' => 'Koulikoro',
                'country_id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'de159e1b-6020-4a09-bcc1-1681469f1e8d',
                'name' => 'Negeri Sembilan',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'de37005d-086b-4e59-b696-0aabc08190d7',
                'name' => 'Kjustendil',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'de73cec8-5143-4e72-90e1-6db852c385c9',
                'name' => 'Vaduz',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'de75eb23-12fa-439a-b4b4-85113d6507b8',
                'name' => 'New Taipei City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'de7a2bb4-9124-4430-a2db-45e5af11f563',
                'name' => 'Gaza',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'de8027a9-60ee-4620-876f-b2eda9f4fe66',
                'name' => 'Antofagasta',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'de9895ce-b858-4400-abf1-df74972f4531',
                'name' => 'Kilinochchi',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'dea96332-6168-4c7c-bd9f-228e2b67865f',
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'dec0c634-d97a-4d56-a45a-1cb2233c0467',
                'name' => 'Alpes-Cote dAzur',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'def79247-c0f0-481f-be6b-79ecf068565d',
                'name' => 'Maritime',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'defeb0da-0771-45a2-a833-0c6b7b2e30ae',
                'name' => 'Maha Nuwara',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'df4579f9-0a64-4b21-bcf4-33359a59374e',
                'name' => 'Osaka',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'df583dd7-a31f-4574-b99b-0c47ffead1f7',
                'name' => 'Chungbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'df702b79-48a6-4bda-b5f1-23a74ce91fc4',
                'name' => 'Sumatera Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'dfa090a5-7368-4549-b7ac-d8df480b2dc4',
                'name' => 'Ta\'izz',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'dfb9f01f-1d5a-4bbe-b053-dda123434bd1',
                'name' => 'Negeri Johor',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'dfdadb08-aac2-4b5d-a679-3c0a4d2e8ac9',
                'name' => 'Lankaran',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'dfdbb9bc-31bd-41f8-a9ff-a5de22234d6e',
                'name' => 'Vidin',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'dfe67d4f-410f-4af8-9113-527bf50b5f36',
                'name' => 'Monaragala',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'dfe9498a-ce44-416d-b991-91edd8497e4a',
                'name' => 'Aizkraukles',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'e0165e48-2fbe-4216-9150-ae04a89077c3',
                'name' => 'Cantabria',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'e01776ee-ee9f-4f16-b57a-fc520448fc5a',
                'name' => 'Male',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'e0253c4e-7c34-4a0f-98eb-402209628256',
                'name' => 'Nitriansky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'e03d14c0-986b-418f-a917-28011821b5f9',
                'name' => 'Bundesland Steiermark',
                'country_id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'e03e342f-68c8-4394-9d3a-fdedb0de1cd7',
                'name' => 'Jeonbuk',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'e063b573-87a9-4cbd-bfa1-db75bf9c67f2',
                'name' => 'Correze',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'e063ceb6-2622-410d-a4e5-2c2200868922',
                'name' => 'Kobenhavns Kommune',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'e06b0772-8e65-417a-afb5-3909485abb74',
                'name' => 'Kanchanaburi',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'e06d4370-4305-41c1-b1d1-d8d559472357',
                'name' => 'Chiayi City',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'e075af01-c035-4d79-9d1c-c6cc94f982c2',
                'name' => 'Gozo and Comino',
                'country_id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'e0896af1-6162-473b-9db8-b832d0cc3f47',
                'name' => 'Nuwara Eliya',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'e0910b9d-9f17-4e8a-9080-7cdd63748177',
                'name' => 'Piraios',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'e0b553c6-0d2e-4a6b-80d2-b98d2be1f800',
                'name' => 'Dennery',
                'country_id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'e0b5f7ef-b4d3-4cce-8170-8cde3f41ec59',
                'name' => 'Coahuila',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'e0b8a774-fa66-4dcf-bcea-bbaf7a8d4d8e',
                'name' => 'Esmeraldas',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'e0bcb1a8-fd3f-4fd7-b18d-cae96828adf6',
                'name' => 'Borgo Maggiore',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'e0d3b3cd-aed3-4629-b96b-97cc917d1518',
                'name' => 'South Australia',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'e0eaa4ea-6c89-4a22-b99d-6af2c79ab608',
                'name' => 'Wangdiphodrang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            91 => 
            array (
                'id' => 'e0eb793a-1a47-4f03-a541-256b63fd498a',
                'name' => 'Other Provinces',
                'country_id' => 'bc690c97-c9e6-11eb-baad-b05adaab2756',
            ),
            92 => 
            array (
                'id' => 'e101b523-1812-4aeb-9136-5493d5d40461',
                'name' => 'Macerata',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            93 => 
            array (
                'id' => 'e11667b2-5962-4e03-87f4-9c4dffafe0cf',
                'name' => 'Lima y Callao',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            94 => 
            array (
                'id' => 'e12d984d-5a69-4a49-86a7-a14979760185',
                'name' => 'Kinmen County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            95 => 
            array (
                'id' => 'e145fe9d-dc7e-4ca6-9d90-2dc4d19ef6ac',
                'name' => 'Granada',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            96 => 
            array (
                'id' => 'e1533355-aea3-4d5c-ba99-9bbb62380eca',
                'name' => 'Puerto Plata',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            97 => 
            array (
                'id' => 'e19058df-29a1-4b6c-ab76-009f0bab776a',
                'name' => 'Utrecht',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            98 => 
            array (
                'id' => 'e193596f-4ce1-4589-93c9-e8ad12de01b9',
                'name' => 'Sark',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            99 => 
            array (
                'id' => 'e1945aad-d436-43d5-9107-ef205c8e957e',
                'name' => 'Mashonaland West',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            100 => 
            array (
                'id' => 'e1c0f643-5aae-4247-847b-d505fdbc7202',
                'name' => 'Nueva Segovia',
                'country_id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
            ),
            101 => 
            array (
                'id' => 'e1da2165-281e-48bd-99e8-d62923a02815',
                'name' => 'Aswan',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            102 => 
            array (
                'id' => 'e1dd9a35-ffbc-4abc-999f-ae947c449904',
                'name' => 'Fiorentino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            103 => 
            array (
                'id' => 'e1dea23e-14fb-4d6e-b95f-a7e48ea181df',
                'name' => 'Saint John Capesterre',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            104 => 
            array (
                'id' => 'e1e2048f-0b4e-449a-b47c-3fb9c49eb439',
                'name' => 'Matruh',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            105 => 
            array (
                'id' => 'e1f32762-63fe-44f1-b0e6-871d0120a736',
                'name' => 'Wotje',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            106 => 
            array (
                'id' => 'e2073f42-b911-4e7d-b3e4-b41dfff2cc1a',
                'name' => 'Christ Church',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            107 => 
            array (
                'id' => 'e21a8ff2-eeae-4eba-9ac5-34d26b742bcf',
                'name' => 'Roscommon',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            108 => 
            array (
                'id' => 'e2480b92-b07b-461e-b54d-e610831c34b4',
                'name' => 'Kingston',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            109 => 
            array (
                'id' => 'e24ae7f9-a95b-40e7-92f3-d75342de152a',
                'name' => 'Saint Mary Cayon',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            110 => 
            array (
                'id' => 'e24c710d-8d8b-4e2b-a067-342501dd120d',
                'name' => 'Khagrachhari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            111 => 
            array (
                'id' => 'e2716dac-c242-427f-9c47-703c04ec3201',
                'name' => 'Debub-Keih-Bahri',
                'country_id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
            ),
            112 => 
            array (
                'id' => 'e28adcb7-cf9f-43f4-92a9-66795c7a24e5',
                'name' => 'Timis',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            113 => 
            array (
                'id' => 'e2961348-0e7a-42af-803e-9928c7acccb3',
                'name' => 'Sankt-Peterburg',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            114 => 
            array (
                'id' => 'e29b3e25-5948-45d8-a322-af17f4a181cc',
                'name' => 'Saint Saviour',
                'country_id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
            ),
            115 => 
            array (
                'id' => 'e2b4a0b3-8c8f-457a-9cee-2969caef9ec2',
                'name' => 'Qalqilya',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            116 => 
            array (
                'id' => 'e2c42e27-2437-4b65-9586-78c743618c9c',
                'name' => 'Ramey',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            117 => 
            array (
                'id' => 'e2df4cc3-6e3b-4172-8d9c-13bc7cd4d0af',
                'name' => 'Tinh Da Nang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            118 => 
            array (
                'id' => 'e3030570-73e9-46ed-b532-1635787cc9a2',
                'name' => 'Saint James Windward',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            119 => 
            array (
                'id' => 'e308f796-045a-4a56-bdf5-abea244e10be',
                'name' => 'Nimba',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            120 => 
            array (
                'id' => 'e325ec54-5935-4644-84c9-81ec8aa57d4c',
                'name' => 'Rezekne',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            121 => 
            array (
                'id' => 'e329cc1b-07f4-4315-be39-dca5be47f9b3',
                'name' => 'Gaza',
                'country_id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
            ),
            122 => 
            array (
                'id' => 'e335370b-6cf2-49a9-8d76-bfde195de04f',
                'name' => 'Queensland',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            123 => 
            array (
                'id' => 'e33a5fb0-b298-4a69-9cf3-a4e66b2106fe',
                'name' => 'Point Fortin',
                'country_id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
            ),
            124 => 
            array (
                'id' => 'e3455d60-f5d3-4a41-b162-06ec7d43c648',
                'name' => 'Western',
                'country_id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
            ),
            125 => 
            array (
                'id' => 'e3559d4f-772d-4635-8e60-a8f0de535b5a',
                'name' => 'North Humberside',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            126 => 
            array (
                'id' => 'e35e5465-51d9-460c-a0e6-83ad8ce6f04e',
                'name' => 'Haifa District',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            127 => 
            array (
                'id' => 'e36b5b42-6e1d-4ab8-9bd9-01df69d5b272',
                'name' => 'Saint Paul Charlestown',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            128 => 
            array (
                'id' => 'e370c947-c524-491d-98f7-b18e9fd98aaf',
                'name' => 'Novgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            129 => 
            array (
                'id' => 'e376ae2b-801f-4bdc-985d-fe992304c1b2',
                'name' => 'Iringa',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            130 => 
            array (
                'id' => 'e380ccd4-bf53-49e4-8085-23b3a7854d10',
                'name' => 'Zeeland',
                'country_id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
            ),
            131 => 
            array (
                'id' => 'e385b6a2-5a4b-4633-a688-c0700ed04c12',
                'name' => 'Karnali',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            132 => 
            array (
                'id' => 'e3878a5d-0267-43df-8427-760f899866e1',
                'name' => 'Atiu',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            133 => 
            array (
                'id' => 'e3953c8c-3122-40d7-9316-e4721ac87503',
                'name' => 'Waterford',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            134 => 
            array (
                'id' => 'e39f91e3-4b6a-43ce-84a6-eecc18938656',
                'name' => 'Mashonaland East',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            135 => 
            array (
                'id' => 'e3adf301-cbe9-46cf-a7cd-9eb533252f4d',
                'name' => 'Dimashq',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            136 => 
            array (
                'id' => 'e3b9ad5e-04bd-4398-a785-35c20f6b240b',
                'name' => 'Biella',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            137 => 
            array (
                'id' => 'e3c32bb2-4f7c-4686-ae59-bd0968334d78',
                'name' => 'Sogn og Fjordane',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            138 => 
            array (
                'id' => 'e3d40bb3-10b0-4c44-9843-59e7197dcc17',
                'name' => 'Nelson',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            139 => 
            array (
                'id' => 'e3d84cb1-9d12-4113-b735-fa735f2eff1f',
                'name' => 'Ceara',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            140 => 
            array (
                'id' => 'e3e3bfb9-5d0c-493e-be43-e09037c626a6',
                'name' => 'Espirito Santo',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            141 => 
            array (
                'id' => 'e3ea93c4-1dfd-4e29-9c9d-4856e09bbe3c',
                'name' => 'Puebla',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            142 => 
            array (
                'id' => 'e41c5d8d-159f-4025-ab46-b28b38740d62',
                'name' => 'Laane',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            143 => 
            array (
                'id' => 'e42b2ff2-b754-4fdf-8863-05d03cf692ed',
                'name' => 'Shaanxi',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            144 => 
            array (
                'id' => 'e438320f-acb2-45ea-a965-7bff22a68843',
                'name' => 'Rodrigues',
                'country_id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
            ),
            145 => 
            array (
                'id' => 'e442cf81-10f1-4de6-8d24-d03b97f6f597',
                'name' => 'Thaa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            146 => 
            array (
                'id' => 'e46db51b-b81e-43b2-864b-ab84977ec076',
                'name' => 'Coast',
                'country_id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
            ),
            147 => 
            array (
                'id' => 'e4745825-a7b5-423f-ae5f-a6684edf79ef',
                'name' => 'Bin \'Arus',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            148 => 
            array (
                'id' => 'e49a52eb-8399-423f-a1b9-5967f09df06f',
                'name' => 'Kymenlaakso',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            149 => 
            array (
                'id' => 'e4a598c8-d329-438a-8823-12c5f79b8d68',
                'name' => 'Narino',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            150 => 
            array (
                'id' => 'e4aafa78-81e5-49c6-80b2-2a38b4e715d8',
                'name' => 'Mangilao',
                'country_id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
            ),
            151 => 
            array (
                'id' => 'e4c0e582-e2b4-4bc6-b343-93885141e645',
                'name' => 'Ayacucho',
                'country_id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
            ),
            152 => 
            array (
                'id' => 'e4c84d97-b126-4606-a32b-f36404dc4af1',
                'name' => 'Madonas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            153 => 
            array (
                'id' => 'e4cc7935-a83a-4989-b9e2-4abe4293c997',
                'name' => 'Conakry',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            154 => 
            array (
                'id' => 'e4d33018-7aa0-4f84-9589-6a7f97aca745',
                'name' => 'Siin',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            155 => 
            array (
                'id' => 'e4f342f1-3910-40db-b101-a235561b38e3',
                'name' => 'Upper Takutu-Upper Essequibo',
                'country_id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
            ),
            156 => 
            array (
                'id' => 'e4f466de-4880-4607-9f0b-14e6c08b560e',
                'name' => 'Bistrita-Nasaud',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            157 => 
            array (
                'id' => 'e4f7879a-eb49-4b8a-9679-e5ccdd8a61ac',
                'name' => 'Kilimanjaro',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            158 => 
            array (
                'id' => 'e4f9c5c4-305a-4c95-90f2-d9baf08e92be',
                'name' => 'Chitipa',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            159 => 
            array (
                'id' => 'e4fafa8f-4637-44aa-9cb3-72f6442d8430',
                'name' => 'Odisha',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            160 => 
            array (
                'id' => 'e513ccaf-8d74-4c8c-a7a6-8a9a655d76fb',
                'name' => 'Koubia',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            161 => 
            array (
                'id' => 'e526c72a-3989-4ef3-a86d-d118adef66cb',
                'name' => 'Blekinge',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            162 => 
            array (
                'id' => 'e55d70e3-7797-4bea-9c17-8e636f8ea682',
                'name' => 'Nui',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            163 => 
            array (
                'id' => 'e569b822-827e-4dcf-b793-53cf8930bb1e',
                'name' => 'Kirklareli',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            164 => 
            array (
                'id' => 'e58f7fe5-48e4-48e6-9b44-05611c07c814',
                'name' => 'Fars',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            165 => 
            array (
                'id' => 'e5a2e379-2941-4021-aaa0-db03f836633b',
                'name' => 'Laxey',
                'country_id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
            ),
            166 => 
            array (
                'id' => 'e5ad9373-ea86-4de0-90c4-50ea79d43870',
                'name' => 'Cesar',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            167 => 
            array (
                'id' => 'e5ec0547-6abf-4c4e-965d-47894f84a06b',
                'name' => 'Nomos Zakynthou',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            168 => 
            array (
                'id' => 'e5f7d1be-09a1-40e7-a2e9-f5cdb98e9cf5',
                'name' => 'Montegiardino',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            169 => 
            array (
                'id' => 'e5febf53-bab7-49c4-ba57-2c6fc0f1cad4',
                'name' => 'Ngwaketse',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            170 => 
            array (
                'id' => 'e604262b-019b-4d4c-91e3-45c5224162aa',
                'name' => 'Sakarya',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            171 => 
            array (
                'id' => 'e609f66c-84c8-4a78-b7a1-78a5da109174',
                'name' => 'Sivas',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            172 => 
            array (
                'id' => 'e631cb92-2c27-4ac4-afc6-5372f242f0df',
                'name' => 'Ostergotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            173 => 
            array (
                'id' => 'e63637b2-1ef4-421a-9fd3-4e47daf3a929',
                'name' => 'Gedo',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            174 => 
            array (
                'id' => 'e661fb86-9e97-4e94-8b65-bae1a2bccedc',
                'name' => 'Wilaya de Bejaia',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            175 => 
            array (
                'id' => 'e665eaa7-36c6-4346-96ae-da6a7841653f',
                'name' => 'Middlesex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            176 => 
            array (
                'id' => 'e67a405d-e972-4bc7-85cb-11a9c672859f',
                'name' => 'Sint Maarten',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            177 => 
            array (
                'id' => 'e6c219b2-9464-4271-a402-16a9e5def928',
                'name' => 'Kuldigas',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            178 => 
            array (
                'id' => 'e6cc154c-c631-477b-bf10-a2cab997f93c',
                'name' => 'Dobrich',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            179 => 
            array (
                'id' => 'e6cca42a-ebc5-4ab1-9981-efc400a389b2',
                'name' => 'Jeju-Si',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            180 => 
            array (
                'id' => 'e6ccaa54-e91f-49c9-b0c2-37f44c72ac0d',
                'name' => 'Kvemo Kartli',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            181 => 
            array (
                'id' => 'e6d70949-ed91-44f2-b8e9-0436c45a638c',
                'name' => 'Rukwa',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            182 => 
            array (
                'id' => 'e6db4d70-fc56-4c5f-9783-ccdb98b118e6',
                'name' => 'Burdur',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            183 => 
            array (
                'id' => 'e6e906ca-eee6-4449-b394-28825fc51297',
                'name' => 'Biale Blota',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            184 => 
            array (
                'id' => 'e6f2e546-43cc-4cb7-b383-546ed08e7e90',
                'name' => 'Wahran',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            185 => 
            array (
                'id' => 'e709491b-4831-4674-8e54-a22c5e4fd544',
                'name' => 'Rayong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            186 => 
            array (
                'id' => 'e70a8ce7-7e7d-4136-bd3b-63062da5c7e5',
                'name' => 'Santander',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            187 => 
            array (
                'id' => 'e723b34f-1c47-4e0e-90c0-0eba01d423a0',
                'name' => 'Shamal Kurdufan',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            188 => 
            array (
                'id' => 'e729e86b-a870-486f-9e7a-7aade1b97659',
                'name' => 'Upernavik',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            189 => 
            array (
                'id' => 'e75b2609-e933-493c-8986-6e1ed3c988d8',
                'name' => 'Akmecet',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            190 => 
            array (
                'id' => 'e7663d9e-1a4b-4a25-8389-7591a88c9c26',
                'name' => 'Rota',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            191 => 
            array (
                'id' => 'e77b99df-8a91-4fae-b7ad-f32a98759001',
                'name' => 'al-Kuwayt',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            192 => 
            array (
                'id' => 'e78545c9-f0b8-4c0b-add5-99f85c77e7d9',
                'name' => 'Uppsala',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            193 => 
            array (
                'id' => 'e7a4c0f5-e1cf-41d6-a5d6-1f6e9ac7553b',
                'name' => 'Elbasan',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            194 => 
            array (
                'id' => 'e7ad7979-48a3-4d94-a807-32a04b4ec6b1',
                'name' => 'Maule',
                'country_id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
            ),
            195 => 
            array (
                'id' => 'e7ba58d8-c6f6-45dc-becf-5feb6696bc18',
                'name' => 'Manawatu-Wanganui',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            196 => 
            array (
                'id' => 'e7bd7532-86bf-4815-aff0-5939b8cdf7fd',
                'name' => 'Ahaia',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            197 => 
            array (
                'id' => 'e7bdc798-84a4-4b05-9797-1bc65b4a62a8',
                'name' => 'Bani Suwayf',
                'country_id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
            ),
            198 => 
            array (
                'id' => 'e7d9be34-8d9a-4049-a9ce-1558d5eedf04',
                'name' => 'Gaoual',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            199 => 
            array (
                'id' => 'e7f4e592-d43c-4a56-91b8-8306b447df80',
                'name' => 'Serravalle',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            200 => 
            array (
                'id' => 'e7f67238-ba2a-4046-9b8e-ef3b847539bc',
                'name' => 'Hebei',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            201 => 
            array (
                'id' => 'e81f70ae-5674-4018-ad6d-3b1ae3c5ad11',
                'name' => 'Anzoategui',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            202 => 
            array (
                'id' => 'e8200b99-d3d5-469c-b543-1d6639932293',
                'name' => 'Drama',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            203 => 
            array (
                'id' => 'e821a179-9e45-4e25-bf8d-43fbbed8e76b',
                'name' => 'Plateaux',
                'country_id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
            ),
            204 => 
            array (
                'id' => 'e822f07d-c041-4640-8ba5-7bd5f09789ed',
                'name' => 'Bacs-Kiskun',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            205 => 
            array (
                'id' => 'e82add5c-3441-4f4c-b581-2642c88efcd9',
                'name' => 'Adrar',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            206 => 
            array (
                'id' => 'e8388053-e07e-4028-9ba2-b88ac500fe0b',
                'name' => 'Khon Kaen',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            207 => 
            array (
                'id' => 'e83af654-78a0-4957-aa7f-c6797aabd364',
                'name' => 'Grad Zagreb',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            208 => 
            array (
                'id' => 'e84797a3-b72f-484c-bf56-8cc2bb3ee011',
                'name' => 'Dabola',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            209 => 
            array (
                'id' => 'e84a2c0c-29b1-4c37-aff0-809d44da20a8',
                'name' => 'Colombo',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            210 => 
            array (
                'id' => 'e858007f-b44a-460a-8f27-0aa2f5fa81e6',
                'name' => 'Ogooue-Ivindo',
                'country_id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
            ),
            211 => 
            array (
                'id' => 'e85d3382-d8a5-450b-a978-902e0225b810',
                'name' => 'Western',
                'country_id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
            ),
            212 => 
            array (
                'id' => 'e864ea9b-0b51-48b5-af1a-0bcfcd5fdfa1',
                'name' => 'Pusan',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            213 => 
            array (
                'id' => 'e86a87fd-0a0e-4b9b-aa81-4033b7a71ff0',
                'name' => 'Chuquisaca',
                'country_id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
            ),
            214 => 
            array (
                'id' => 'e888b7a7-392c-4cac-b62f-470f9939403a',
                'name' => 'Lansi-Suomen Laani',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            215 => 
            array (
                'id' => 'e8a86aad-8023-4954-8952-2e0d027597fa',
                'name' => 'Houaphanh',
                'country_id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
            ),
            216 => 
            array (
                'id' => 'e8b6a812-caec-47ba-a581-66880c6ac2fb',
                'name' => 'Pedernales',
                'country_id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
            ),
            217 => 
            array (
                'id' => 'e8cdd93f-4cba-4457-9b08-5f8597100f76',
                'name' => 'Boulkiemde',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            218 => 
            array (
                'id' => 'e8d56d28-a8a1-4f22-95fc-6268242582b8',
                'name' => 'Florence',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            219 => 
            array (
                'id' => 'e8e3e575-04eb-443d-ae81-645ba956ae2a',
                'name' => 'Liaoning',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            220 => 
            array (
                'id' => 'e8f6a5d3-58a8-4631-87f0-90e9dc3809da',
                'name' => 'Kampong Cham',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            221 => 
            array (
                'id' => 'e9112c01-1eaa-4fdd-b6d2-3abc76d12110',
                'name' => 'Cayenne',
                'country_id' => 'bc69462b-c9e6-11eb-baad-b05adaab2756',
            ),
            222 => 
            array (
                'id' => 'e91ea5e8-0564-4bf1-80c5-ea418b4797f7',
                'name' => 'Aveyron',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            223 => 
            array (
                'id' => 'e921d86b-8199-4d85-9354-08cb666dc674',
                'name' => 'Illinois',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            224 => 
            array (
                'id' => 'e92c0e13-d9e9-4b91-aaba-276c8b4df6fc',
                'name' => 'Irbid',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            225 => 
            array (
                'id' => 'e92cceff-96fa-4376-8e2b-e7b8cb06faa0',
                'name' => 'Nabulus',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            226 => 
            array (
                'id' => 'e92fc732-5a91-45b8-b991-c688359bcaeb',
                'name' => 'Nkhata Bay',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            227 => 
            array (
                'id' => 'e945c9b8-b1e6-4a4b-9fc5-012708a239db',
                'name' => 'Buckinghamshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            228 => 
            array (
                'id' => 'e9713516-08d3-474f-b6f5-b3061ed0ec59',
                'name' => 'Free State',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            229 => 
            array (
                'id' => 'e9815fab-5a2d-45ca-8747-d8836c890039',
                'name' => 'Ekiti',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            230 => 
            array (
                'id' => 'e987042e-f30a-4a84-9bf2-b89242a34b97',
                'name' => 'Udon Thani',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            231 => 
            array (
                'id' => 'e9922c37-b601-40d1-8851-69d4a379c64b',
                'name' => 'Tlaxcala',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            232 => 
            array (
                'id' => 'e9af71b0-0e47-4637-a893-b17fa13df671',
                'name' => 'Gaziantep',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            233 => 
            array (
                'id' => 'e9cbaa58-7791-4f1c-b748-473c5f93b0ee',
                'name' => 'Santa Rosa',
                'country_id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
            ),
            234 => 
            array (
                'id' => 'e9d0aff4-eb3a-4d87-ab34-39ad96935a83',
                'name' => 'Penza',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            235 => 
            array (
                'id' => 'e9e3789c-d729-4118-b364-066b0b43a852',
                'name' => 'Simbu',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            236 => 
            array (
                'id' => 'e9f0adab-2ef5-4098-ba4e-949dde186ad2',
                'name' => 'Rhineland-Palatinate',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            237 => 
            array (
                'id' => 'e9fd01f9-7e05-4221-b33f-92307b989d10',
                'name' => 'Uleaborgs Lan',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            238 => 
            array (
                'id' => 'ea13919f-bdaa-4681-a04f-f7f00609fda3',
                'name' => 'Canton Ticino',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            239 => 
            array (
                'id' => 'ea185e1f-faf3-485f-8f77-f2083f84cecd',
                'name' => 'Faryab',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            240 => 
            array (
                'id' => 'ea321ac7-7c37-4efc-aa72-8c2d95160866',
                'name' => 'Harghita',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            241 => 
            array (
                'id' => 'ea47045a-afc3-48ca-b947-ed06cdb1233f',
                'name' => 'Saint Thomas',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            242 => 
            array (
                'id' => 'ea4c4e7f-cd4b-41da-b388-910170e77601',
                'name' => 'Santa Ana',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            243 => 
            array (
                'id' => 'ea5d9d69-417f-43fc-970b-4ebfe08c21c6',
                'name' => 'al-Ahmadi',
                'country_id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
            ),
            244 => 
            array (
                'id' => 'ea5da3fb-d894-405f-b080-0efc392e1cde',
                'name' => 'Zakarpats\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            245 => 
            array (
                'id' => 'ea62967e-3155-41f8-a657-eb344d4d7b4b',
                'name' => 'North-Western',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            246 => 
            array (
                'id' => 'ea6e33a5-018b-4093-8a94-9e8cb21a41d4',
                'name' => 'London',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            247 => 
            array (
                'id' => 'ea7b0478-f898-4882-8500-e7fe246785b9',
                'name' => 'South Carolina',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            248 => 
            array (
                'id' => 'ea7fcd27-4672-48ca-9160-18ae9b364710',
                'name' => 'Torino',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            249 => 
            array (
                'id' => 'ea888d88-9390-44c2-9583-63589daba95d',
                'name' => 'A\'ana',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            250 => 
            array (
                'id' => 'eaacb251-121d-4624-bbaf-b2f5a1e744cc',
                'name' => 'Phnum Penh',
                'country_id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
            ),
            251 => 
            array (
                'id' => 'eaaec28c-689b-4503-94b9-94962aca37d9',
                'name' => 'Uttar Pradesh',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            252 => 
            array (
                'id' => 'eab678af-8f11-4c66-97fc-5e12f836aa15',
                'name' => 'ar-Rifa\'a',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            253 => 
            array (
                'id' => 'eac57ce4-089f-4f78-b987-b7f8276408d1',
                'name' => 'Oklahoma',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            254 => 
            array (
                'id' => 'eaca22c0-8d06-46bf-855b-a82ef616a843',
                'name' => 'Orenburg',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            255 => 
            array (
                'id' => 'eae5bda8-985d-4e59-88e4-f7156fc8cacb',
                'name' => 'Irbil',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            256 => 
            array (
                'id' => 'eaf2762c-fd86-4ef9-9517-c6a4fd273001',
                'name' => 'Herefordshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            257 => 
            array (
                'id' => 'eb141219-805e-429a-a508-8db0989559ff',
                'name' => 'Plateaux',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            258 => 
            array (
                'id' => 'eb1d96e0-1b3f-4b25-896f-63da76482e01',
                'name' => 'Samut Sakhon',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            259 => 
            array (
                'id' => 'eb368a02-cec6-4cb8-a15b-1cfd4e8ede5c',
                'name' => 'Canterbury',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            260 => 
            array (
                'id' => 'eb397306-b8a0-4852-ac96-fd50511b569c',
                'name' => 'Maranhao',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            261 => 
            array (
                'id' => 'eb3c059c-3444-44a6-8219-39a99e004728',
                'name' => 'Lekoumou',
                'country_id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
            ),
            262 => 
            array (
                'id' => 'eb4e7e4b-20e9-4f00-a6e1-063e0f9bd529',
                'name' => 'Tanintharyi',
                'country_id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
            ),
            263 => 
            array (
                'id' => 'eb54679a-10be-4050-baee-cc64e2a965fe',
                'name' => 'Sveti Nikole',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            264 => 
            array (
                'id' => 'eb56f75c-7fce-45b4-a594-9eb2b7ea402a',
                'name' => 'Nordjylland',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            265 => 
            array (
                'id' => 'eb65ca4b-191b-4def-9657-6b55d184cee1',
                'name' => 'Jogeva',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            266 => 
            array (
                'id' => 'eb86ad8e-2d86-4df0-9163-68209bd2d390',
                'name' => 'Tetovo',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            267 => 
            array (
                'id' => 'eb89a591-34f7-4b98-8242-7abad211e72c',
                'name' => 'Marlborough',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            268 => 
            array (
                'id' => 'eb98fb20-acab-43ae-8002-aa89f77f8176',
                'name' => 'Sharq-al-Istiwa\'iyah',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            269 => 
            array (
                'id' => 'eb9c7d02-da2d-4a5c-a1db-3a27d0cf1d46',
                'name' => 'Idaho',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            270 => 
            array (
                'id' => 'eb9ef814-fd81-4c2e-8401-b6951fe3a83e',
                'name' => 'Fontvieille',
                'country_id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
            ),
            271 => 
            array (
                'id' => 'ebb832c3-1acf-4551-a77d-8f39a4de0719',
                'name' => 'Rogaland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            272 => 
            array (
                'id' => 'ebbd2005-a66d-4034-b94b-0f4f6c437e47',
                'name' => 'Bolivar',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            273 => 
            array (
                'id' => 'ebdbba08-6ca4-4da9-ad3f-07d17428b6eb',
                'name' => 'Littoral',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            274 => 
            array (
                'id' => 'ebdd49ae-2a4b-4783-936d-25f941e67e48',
                'name' => 'Trelawney',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            275 => 
            array (
                'id' => 'ebefac28-0199-4eae-8312-9379cc9cdba8',
                'name' => 'Eastern Cape',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            276 => 
            array (
                'id' => 'ebfa15a4-8ae7-4899-94bf-6efba903d626',
                'name' => 'Vianden',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            277 => 
            array (
                'id' => 'ec0956ed-35ec-4f7a-ae44-be71726c9d64',
                'name' => 'Phatthalung',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            278 => 
            array (
                'id' => 'ec2d26e0-79ba-45ad-8262-079cb04d68fa',
                'name' => 'Nawakshut',
                'country_id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
            ),
            279 => 
            array (
                'id' => 'ec4c2669-376c-4d36-9ef5-1671f1138391',
                'name' => 'Durres',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            280 => 
            array (
                'id' => 'ec4e3daa-6165-45b0-9c49-2f983b64e14c',
                'name' => 'Wilaya de Casablanca',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            281 => 
            array (
                'id' => 'ec57f963-0caa-449e-8077-68252bbc955b',
                'name' => 'Nkhotakota',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            282 => 
            array (
                'id' => 'ec804304-3ab9-4e63-83ba-af4f7ff7a26d',
                'name' => 'Sums\'ka',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            283 => 
            array (
                'id' => 'ec861a16-7a7b-4f1a-b45c-1c8be2d0a0f6',
                'name' => 'Sancti Spiritus',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            284 => 
            array (
                'id' => 'ec881d70-6156-4e60-aef2-548b17d34542',
                'name' => 'Mamou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            285 => 
            array (
                'id' => 'ecfdbc3b-dfa0-4472-868d-3108b4615516',
                'name' => 'Krasnodar',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            286 => 
            array (
                'id' => 'ed218f02-39c8-4685-917b-66a015f9e35a',
                'name' => 'Banghazi',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            287 => 
            array (
                'id' => 'ed21e249-b2f0-49e9-b1f8-5b1e4887eedb',
                'name' => 'Hopowo',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            288 => 
            array (
                'id' => 'ed46b82a-020b-4db2-a54b-6d5d85f6aa53',
                'name' => 'Rivercess',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            289 => 
            array (
                'id' => 'ed93e985-294c-46d2-b4b7-6872ade5839b',
                'name' => 'Klecany',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            290 => 
            array (
                'id' => 'ed960081-5199-43e6-b850-65ae8aa32f78',
                'name' => 'Teruel',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            291 => 
            array (
                'id' => 'eda94bb5-3843-4181-8f3c-d52b7d33a4d7',
                'name' => 'Arkansas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            292 => 
            array (
                'id' => 'edb21b18-91f5-4413-9e62-f142f4dedc4a',
                'name' => 'Sarande',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            293 => 
            array (
                'id' => 'eddac310-447b-4c7d-b07d-85dd0728e927',
                'name' => 'Bari',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            294 => 
            array (
                'id' => 'ee065cd3-8444-4daa-83e9-8893cb8e6e25',
                'name' => 'Ben Gurion Airport',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            295 => 
            array (
                'id' => 'ee0e0b6b-a492-4bd9-b06f-e8c7d6eeff01',
                'name' => 'al-Qayrawan',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            296 => 
            array (
                'id' => 'ee341a4c-2a10-4e86-bda9-639ce4fc0ab8',
                'name' => 'Haute-Savoie',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            297 => 
            array (
                'id' => 'ee40a4f0-30e8-4995-bd11-4a556a6dd26b',
                'name' => 'North Dakota',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            298 => 
            array (
                'id' => 'ee439ab0-3e2b-4be4-9eb6-ca9bf57fe124',
                'name' => 'Galapagos',
                'country_id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
            ),
            299 => 
            array (
                'id' => 'ee4b3889-a74f-4276-b959-d2f0c74242e5',
                'name' => 'Brandenburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            300 => 
            array (
                'id' => 'ee530d72-97b3-42c4-9eba-b0071fdb4e08',
                'name' => 'Janjanbureh',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            301 => 
            array (
                'id' => 'ee598a95-7f4f-4157-a945-bf2b4b889217',
                'name' => 'La Rioja',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            302 => 
            array (
                'id' => 'ee6a55ce-2583-4019-ac86-17cddd36cc2b',
                'name' => 'Wilaya de Constantine',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            303 => 
            array (
                'id' => 'ee751f16-80a6-4831-b249-707f87dab96e',
                'name' => 'Qazax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            304 => 
            array (
                'id' => 'ee7ddefc-b27e-4c60-b329-fca2470cc81a',
                'name' => 'Perak',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            305 => 
            array (
                'id' => 'ee90b108-103f-4fbf-b724-e2d4e77f5fae',
                'name' => 'Corum',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            306 => 
            array (
                'id' => 'ee934615-6c6c-4b5b-b55e-17abe6dc92d8',
                'name' => 'Dadra and Nagar Haveli',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            307 => 
            array (
                'id' => 'eea70c8e-7b2f-4c02-a79a-dfe8c2e18065',
                'name' => 'Karbala',
                'country_id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
            ),
            308 => 
            array (
                'id' => 'eeb137d4-606c-4213-a225-89b9f269b313',
                'name' => 'Namentenga',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            309 => 
            array (
                'id' => 'eebf174f-2ed5-4bb6-b187-49b7eaab0da1',
                'name' => 'Mayenne',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            310 => 
            array (
                'id' => 'eec24a14-6e11-4af9-83c7-dbae151c30b0',
                'name' => 'Francisco Morazan',
                'country_id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
            ),
            311 => 
            array (
                'id' => 'eecb68ec-fb72-4878-8cd4-51ce9d00b92a',
                'name' => 'Segovia',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            312 => 
            array (
                'id' => 'eee6c86d-b13e-471e-b516-5d1a7a471b8a',
                'name' => 'Shamal Darfur',
                'country_id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
            ),
            313 => 
            array (
                'id' => 'eef073bf-4183-48d0-ba1a-401857a1239c',
                'name' => 'Matara',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            314 => 
            array (
                'id' => 'eef6bfb7-123f-41c7-84c4-0a2a69ceceb1',
                'name' => 'Ghanzi',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            315 => 
            array (
                'id' => 'eefced10-44e6-415b-b410-edef6231b725',
                'name' => 'Jhanaydah',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            316 => 
            array (
                'id' => 'ef07f0cb-e81b-4884-8a33-64b4e0387e7b',
                'name' => 'Geneve',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            317 => 
            array (
                'id' => 'ef099cd3-400c-4b64-a8b1-03ac2f60a2ea',
                'name' => 'Mordovija',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            318 => 
            array (
                'id' => 'ef0da4b3-af35-406b-a6e9-10ed1a36ba0f',
                'name' => 'Gitega',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            319 => 
            array (
                'id' => 'ef239d88-6692-4f5c-8d69-b2f6185a7d74',
                'name' => 'Savanes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            320 => 
            array (
                'id' => 'ef250194-c0c2-4675-98e3-5d96be1f82f8',
                'name' => 'Girona',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            321 => 
            array (
                'id' => 'ef252c62-f9d2-4723-a7c1-a7e5488a6994',
                'name' => 'Dar es Salaam',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            322 => 
            array (
                'id' => 'ef43d19b-6fbe-42bd-a7a9-8b635584aea5',
                'name' => 'Distrito de Leiria',
                'country_id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
            ),
            323 => 
            array (
                'id' => 'ef4afdc4-38ce-456f-bb63-9c4014a6b82d',
                'name' => 'Vastergotland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            324 => 
            array (
                'id' => 'ef8858ce-1c83-4f0b-a681-e71e35ed26c7',
                'name' => 'Ha\'il',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            325 => 
            array (
                'id' => 'ef93c67a-8a63-4d8b-b800-4bf3715daad7',
                'name' => 'Saint Catherine',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            326 => 
            array (
                'id' => 'ef9688a7-e11a-45a4-8e33-cc9e158b636c',
                'name' => 'West Sussex',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            327 => 
            array (
                'id' => 'ef99e8c6-1cca-4c44-ac03-5b1c965131e4',
                'name' => 'Ilocos',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            328 => 
            array (
                'id' => 'efb5b92d-4967-4a73-9d82-ab4c77afdbbc',
                'name' => 'Smaland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            329 => 
            array (
                'id' => 'efda69dc-ec1d-40d3-94e7-2b55ae14c71d',
                'name' => 'Iles des Saintes',
                'country_id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
            ),
            330 => 
            array (
                'id' => 'eff61c89-f0f5-42df-8afe-5e8ccdb14d15',
                'name' => 'Chattagam',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            331 => 
            array (
                'id' => 'effd6bf6-5051-41bc-8af0-950f521b677a',
                'name' => 'Sirajganj',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            332 => 
            array (
                'id' => 'f0057961-01fb-4621-b952-d7e53e5428ef',
                'name' => 'Michoacan',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            333 => 
            array (
                'id' => 'f01143d8-2c14-4e0b-94bf-30e8ec682ac9',
                'name' => 'Kegalla',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            334 => 
            array (
                'id' => 'f01fa641-72d4-498f-ae5f-0dc1e73b4edf',
                'name' => 'Northants',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            335 => 
            array (
                'id' => 'f0223d24-703c-4dcc-be13-23f35a35d41d',
                'name' => 'Stavern',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            336 => 
            array (
                'id' => 'f02efa90-ba98-42ab-801b-39b1adf3e6a5',
                'name' => 'Kanifing',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            337 => 
            array (
                'id' => 'f03033ee-5e08-4e31-8aa5-306f743e6975',
                'name' => 'Glarus',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            338 => 
            array (
                'id' => 'f0506042-0893-4c76-8e52-41409aaea67f',
                'name' => 'al-Bayda',
                'country_id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
            ),
            339 => 
            array (
                'id' => 'f0509eee-daab-4524-b4a6-bf68b6d97318',
                'name' => 'Stare Pole',
                'country_id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
            ),
            340 => 
            array (
                'id' => 'f052f50a-be90-4679-bcb5-28f5f4c17740',
                'name' => 'Grand Bahama',
                'country_id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
            ),
            341 => 
            array (
                'id' => 'f0557563-3d23-4341-8244-892ab644d513',
                'name' => 'Central Bobonong',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            342 => 
            array (
                'id' => 'f05a4916-9942-4102-a707-b12c7b4daa08',
                'name' => 'Mahakali',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            343 => 
            array (
                'id' => 'f0641123-0960-4426-8597-388f6a09961c',
                'name' => 'Salima',
                'country_id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
            ),
            344 => 
            array (
                'id' => 'f065f292-e649-4869-b1c1-6eedc5ef5c2c',
                'name' => 'Maulvi Bazar',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            345 => 
            array (
                'id' => 'f074b607-3e4c-4443-9f07-361378d8f09e',
                'name' => 'Brunei-Muara',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            346 => 
            array (
                'id' => 'f07ab372-828b-411e-b0d9-89042a7f1718',
                'name' => 'Volta',
                'country_id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
            ),
            347 => 
            array (
                'id' => 'f0815bc4-fa75-4602-9d1e-cfde1af0e0c3',
                'name' => 'Mallakaster',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            348 => 
            array (
                'id' => 'f08334d0-2ce1-45ba-a4fd-2c169d3c82b3',
                'name' => 'Beit Hanania',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            349 => 
            array (
                'id' => 'f095d2f6-8a44-4476-a68f-5aab4868c067',
                'name' => 'Nordland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            350 => 
            array (
                'id' => 'f0c949f6-add3-4d9e-81d2-864dd40c1189',
                'name' => 'Oregon',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            351 => 
            array (
                'id' => 'f0d638f2-8254-42f3-b81e-b2ab69063fe3',
                'name' => 'Nilphamari',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            352 => 
            array (
                'id' => 'f0dfec1f-3af1-498c-8104-8efd308ab539',
                'name' => 'Tashigang',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            353 => 
            array (
                'id' => 'f10b9097-3bad-4c29-aa45-df6f3ec1aa03',
                'name' => 'ad-Dawhah',
                'country_id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
            ),
            354 => 
            array (
                'id' => 'f1141b92-61d5-42ae-bd4d-d6cbbacc1a43',
                'name' => 'Asti',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            355 => 
            array (
                'id' => 'f115baa5-ec79-42ab-a563-a451183b1936',
                'name' => 'Ouham',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            356 => 
            array (
                'id' => 'f12c8a6f-fd15-4390-9efb-198a42bc6099',
                'name' => 'Arezzo',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            357 => 
            array (
                'id' => 'f132c889-95ae-4d71-9061-c909e4b5a3e1',
                'name' => 'Imo',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            358 => 
            array (
                'id' => 'f1383d4b-c409-4a0c-a62c-25f33c84b12b',
                'name' => 'West Midlands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            359 => 
            array (
                'id' => 'f17e04a6-366f-4e1a-a165-cbec71327d27',
                'name' => 'Etela-Savo',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            360 => 
            array (
                'id' => 'f192bbcd-db68-4ebf-bf44-8e13997346c6',
                'name' => 'Benishangul',
                'country_id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
            ),
            361 => 
            array (
                'id' => 'f198190b-ba44-428e-b0b0-e36ae92588e2',
                'name' => 'San Salvador',
                'country_id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
            ),
            362 => 
            array (
                'id' => 'f1a65bba-9bf7-4a4a-b40d-ebd6f5266c69',
                'name' => 'Jalal-Abad',
                'country_id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
            ),
            363 => 
            array (
                'id' => 'f1af8f5a-f993-45d1-8257-ae0a0a5a3df7',
                'name' => 'East Midlands',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            364 => 
            array (
                'id' => 'f1c7cac3-f35c-4933-b445-086f4820404a',
                'name' => 'Ha\'apai',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            365 => 
            array (
                'id' => 'f1f9a472-b148-4266-831c-3498f6155251',
                'name' => 'Parwan',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            366 => 
            array (
                'id' => 'f21f1af5-9f64-46d6-ba66-c46854e79d1d',
                'name' => 'Chatswood',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            367 => 
            array (
                'id' => 'f2202d49-de94-48a8-9179-0ccf1f111b04',
                'name' => 'Oppland',
                'country_id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
            ),
            368 => 
            array (
                'id' => 'f22fe355-887f-4ea6-9192-f25112522853',
                'name' => 'Vladimir',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            369 => 
            array (
                'id' => 'f232b2e7-29c8-4274-92ba-1a8ce024c3be',
                'name' => 'Trinity Palmetto Point',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            370 => 
            array (
                'id' => 'f2451004-84dd-4fef-be93-8d6a5a209999',
                'name' => 'Bac Giang',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            371 => 
            array (
                'id' => 'f2536a0d-0424-4b3e-ad98-642276247ef6',
                'name' => 'Hidd',
                'country_id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
            ),
            372 => 
            array (
                'id' => 'f2550edf-4b60-41c9-beb7-71f4d9683c9f',
                'name' => 'Central',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            373 => 
            array (
                'id' => 'f25e05aa-7809-4bed-8224-868c5e881836',
                'name' => 'Baa',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            374 => 
            array (
                'id' => 'f265b48e-cdf4-4c9f-8e6c-2a6ac57ba194',
                'name' => 'Faetano',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
            375 => 
            array (
                'id' => 'f26a21de-560c-4d80-9cdf-88eb7677dfe3',
                'name' => 'Prilep',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            376 => 
            array (
                'id' => 'f26c7f9f-5f1d-4aaf-93fb-0f9ba147bd3d',
                'name' => 'Louisiana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            377 => 
            array (
                'id' => 'f299804a-6acf-4b32-862f-d9a096176246',
                'name' => 'Niuas',
                'country_id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
            ),
            378 => 
            array (
                'id' => 'f2afceef-bcd1-46a5-87f2-5f132bf9b360',
                'name' => 'Galway',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            379 => 
            array (
                'id' => 'f2b3e09e-8787-492a-8160-30f76e299e94',
                'name' => 'Rutana',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            380 => 
            array (
                'id' => 'f2c77945-d260-4cc7-b61d-b43e06169c87',
                'name' => 'Panevezys',
                'country_id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
            ),
            381 => 
            array (
                'id' => 'f2defc35-a39d-4a66-b13f-92bce4d9b9e1',
                'name' => 'Kempton Park',
                'country_id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
            ),
            382 => 
            array (
                'id' => 'f2e1a7d0-1e11-46be-935d-3be998baa649',
                'name' => 'Mactan',
                'country_id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
            ),
            383 => 
            array (
                'id' => 'f2ed96d4-6ec5-4710-a611-890addc5b6c8',
                'name' => 'Cambridgeshire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            384 => 
            array (
                'id' => 'f2f6024d-1c4b-44bb-a048-1ee0c7836ba0',
                'name' => 'Mauren',
                'country_id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
            ),
            385 => 
            array (
                'id' => 'f2fa2f38-54f7-45a8-bd0e-65cb7126d2d5',
                'name' => 'Manihiki',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            386 => 
            array (
                'id' => 'f2ffd676-a1bb-4cc8-b76d-7d9141f40d64',
                'name' => 'Waikato',
                'country_id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
            ),
            387 => 
            array (
                'id' => 'f30ce378-56b5-4624-bf8f-04ec42d9552c',
                'name' => 'Funafuti',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            388 => 
            array (
                'id' => 'f3253d82-45b7-48ee-a0c6-c1a89b825ee9',
                'name' => 'Trapani',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            389 => 
            array (
                'id' => 'f33181d7-2446-4d01-bf7b-654e03e1396c',
                'name' => 'Kordestan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            390 => 
            array (
                'id' => 'f33d2fa3-a74d-4695-8a0f-4c6aae29f6d3',
                'name' => 'Colima',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            391 => 
            array (
                'id' => 'f35ac4c2-7218-4872-b5c5-9c2336631e10',
                'name' => 'Calvados',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            392 => 
            array (
                'id' => 'f36a4b83-afa7-4e56-b555-6bffdfdcb83f',
                'name' => 'Amnat Charoen',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            393 => 
            array (
                'id' => 'f36c4e2f-10c1-4944-8fa2-8c501d577694',
                'name' => 'Rangamati',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            394 => 
            array (
                'id' => 'f376457d-b546-4570-9464-cedcaac8c5c9',
                'name' => 'Kie-Ntem',
                'country_id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
            ),
            395 => 
            array (
                'id' => 'f38350c9-f985-4b68-8748-398f8ff78a2b',
                'name' => 'Leningrad',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            396 => 
            array (
                'id' => 'f38a6ebc-484b-4305-8831-b012b01d7226',
                'name' => 'al-Bayadh',
                'country_id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
            ),
            397 => 
            array (
                'id' => 'f3aed47d-b19d-4d3f-bfef-dcf0dbee1365',
                'name' => 'Aude',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            398 => 
            array (
                'id' => 'f3bcb0b8-1243-4448-92e8-5458a1c796e7',
                'name' => 'Kainuu',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            399 => 
            array (
                'id' => 'f3cec57f-40b4-412c-8bed-0fc18dd2d7ac',
                'name' => 'Finistere',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            400 => 
            array (
                'id' => 'f3dbd9a5-fa15-4e96-9423-45ce7af7eafd',
                'name' => 'Madinat Dimashq',
                'country_id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
            ),
            401 => 
            array (
                'id' => 'f3e5cd91-64fb-492d-9861-395647c64b02',
                'name' => 'Chittagong Division',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            402 => 
            array (
                'id' => 'f3f82b83-a1f2-4555-a9bb-a0f8a10857cb',
                'name' => 'Montevideo',
                'country_id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
            ),
            403 => 
            array (
                'id' => 'f3fde547-a320-479a-b484-8d03407ab7af',
                'name' => 'Villa Clara',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            404 => 
            array (
                'id' => 'f3fe3e66-68f4-4f07-a313-34e0f695daf7',
                'name' => 'Hiiu',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            405 => 
            array (
                'id' => 'f3fe942a-4926-4bf2-86df-8bed60ad94fd',
                'name' => 'Tabora',
                'country_id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
            ),
            406 => 
            array (
                'id' => 'f41b3451-dc8f-46cf-b67d-b41375c559c6',
                'name' => 'Cordoba',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            407 => 
            array (
                'id' => 'f42cee5a-63cf-4f86-99da-b2530f81be11',
                'name' => 'Gangwon-do',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            408 => 
            array (
                'id' => 'f42e02f2-0589-4f64-bb85-d558d6cc5586',
                'name' => 'Dinajpur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            409 => 
            array (
                'id' => 'f4342fc4-9877-42c0-8de7-d7da3310928f',
                'name' => 'Piedmont',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            410 => 
            array (
                'id' => 'f4376d23-9e11-41df-a28f-8649e5c60484',
                'name' => 'Monza and Brianza',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            411 => 
            array (
                'id' => 'f43d60cc-7f02-4e7e-9094-8ffca389065c',
                'name' => 'Kohgiluyeh-e Boyerahmad',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            412 => 
            array (
                'id' => 'f43f6eb1-b397-4c6a-bdda-661bd7c25412',
                'name' => 'Indiana',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            413 => 
            array (
                'id' => 'f440b241-5afc-449d-a658-da4efa0d911f',
                'name' => 'Saare',
                'country_id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
            ),
            414 => 
            array (
                'id' => 'f44846cf-d817-4950-8e6f-9ad149897b66',
                'name' => 'Dornogovi',
                'country_id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
            ),
            415 => 
            array (
                'id' => 'f49a59c4-f3fc-44f3-bba6-1f5bd9b87357',
                'name' => 'Valle d\'Aosta',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            416 => 
            array (
                'id' => 'f4a1ba17-c185-4e33-88c3-9442c20a3bad',
                'name' => 'Yilan County',
                'country_id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
            ),
            417 => 
            array (
                'id' => 'f4b08d7c-2f59-4fc4-b3a3-69772953d777',
                'name' => 'Gueckedou',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            418 => 
            array (
                'id' => 'f4b6caea-5e30-4a10-a84a-a8056804f201',
                'name' => 'Santiago de Cuba',
                'country_id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
            ),
            419 => 
            array (
                'id' => 'f4b82e38-780c-43f9-b3a4-07917f90d40c',
                'name' => 'Levkas',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            420 => 
            array (
                'id' => 'f4bc7584-603e-4de4-be3f-d5e1ba014b95',
                'name' => 'Kiritimati',
                'country_id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
            ),
            421 => 
            array (
                'id' => 'f4deb0e4-125d-43cf-bbaa-43f520bd8eb9',
                'name' => 'Antioquia',
                'country_id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
            ),
            422 => 
            array (
                'id' => 'f5001966-56b9-4424-9f62-3263917b54a5',
                'name' => 'Aichi',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            423 => 
            array (
                'id' => 'f50530e4-d2db-443e-bf02-61a543bbf971',
                'name' => 'Kalimantan Barat',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            424 => 
            array (
                'id' => 'f5070957-23f6-471d-93e5-3f016830a2e9',
                'name' => 'Lagunes',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            425 => 
            array (
                'id' => 'f5079c00-e39d-4ed2-b29e-05a2f0a47e8a',
                'name' => 'Bremen',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            426 => 
            array (
                'id' => 'f50b74e8-acca-4fe5-8abf-3d2f28a74371',
                'name' => 'Nassau',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            427 => 
            array (
                'id' => 'f523469c-dd4d-4cb5-bb08-c6edddbe7d94',
                'name' => 'Larcay',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            428 => 
            array (
                'id' => 'f52af3f5-b72a-43e6-a0ef-5f8fdddf187b',
                'name' => 'Cocle',
                'country_id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
            ),
            429 => 
            array (
                'id' => 'f551adeb-eb82-415a-8d99-c77bf8967136',
                'name' => 'Land Brandenburg',
                'country_id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
            ),
            430 => 
            array (
                'id' => 'f55b5d63-da51-418e-9d31-70b207f1d2f4',
                'name' => 'Gagauzia',
                'country_id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
            ),
            431 => 
            array (
                'id' => 'f5747a9b-1827-4f94-afb6-10f2520301b8',
                'name' => 'Saga',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            432 => 
            array (
                'id' => 'f5759262-839c-424f-897d-3fd72bc5da06',
                'name' => 'Ruyigi',
                'country_id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
            ),
            433 => 
            array (
                'id' => 'f579d034-96be-41f5-b451-84efdb80cd6f',
                'name' => 'Dubrovnik-Neretva',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            434 => 
            array (
                'id' => 'f57d743d-6402-4835-ad14-b1cda80bb903',
                'name' => 'Hormozgan',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            435 => 
            array (
                'id' => 'f597d582-d80f-4efd-a5b4-e34daf2812a7',
                'name' => 'Tarhunah',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            436 => 
            array (
                'id' => 'f5a481a3-6331-4ed0-8e00-8fe504c78465',
                'name' => 'Saint John Figtree',
                'country_id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
            ),
            437 => 
            array (
                'id' => 'f5aa5561-3a73-4092-8c52-8800a48d1dc0',
                'name' => 'Shida Kartli',
                'country_id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
            ),
            438 => 
            array (
                'id' => 'f5b55d84-1bf7-4f66-be92-39bd3de3a397',
                'name' => 'Lodi',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            439 => 
            array (
                'id' => 'f5b90410-9f4d-4115-bf97-769c927a6d6b',
                'name' => 'United States Minor Outlying I',
                'country_id' => 'bc69ffb9-c9e6-11eb-baad-b05adaab2756',
            ),
            440 => 
            array (
                'id' => 'f5cadd41-1ef8-4cd3-b0cc-484eb40ccacb',
                'name' => 'Naugaon',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            441 => 
            array (
                'id' => 'f5d1738c-f95f-4a42-abee-f730b75525da',
                'name' => 'Lobata',
                'country_id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
            ),
            442 => 
            array (
                'id' => 'f5d2beea-7d30-414f-a861-6da8c68e5e12',
                'name' => 'Belgorod',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            443 => 
            array (
                'id' => 'f5dcc790-fb5e-4ff9-9400-c94922d7390f',
                'name' => 'Federal Capital Area',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            444 => 
            array (
                'id' => 'f5dd7c33-8c7c-4b1f-b447-4fbf5c6907c4',
                'name' => 'Aberdeen',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            445 => 
            array (
                'id' => 'f5e0a59f-2fe3-4753-b638-2c47ef715019',
                'name' => 'Manubah',
                'country_id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
            ),
            446 => 
            array (
                'id' => 'f600f94b-7d14-4aa4-aadd-5d4d718f234e',
                'name' => 'Aasiaat',
                'country_id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
            ),
            447 => 
            array (
                'id' => 'f60145fe-60bd-4bd0-82b8-f7ab2cef8e5b',
                'name' => 'Zadar',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            448 => 
            array (
                'id' => 'f61bcc80-145c-4996-aaf4-a426f7abafda',
                'name' => 'Vasterbotten',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            449 => 
            array (
                'id' => 'f6268c83-3a63-4945-86c7-e59c001b4b2e',
                'name' => 'Roma',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            450 => 
            array (
                'id' => 'f6349d08-7843-49a3-b856-eefcd24ff8b2',
                'name' => 'Southwell',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            451 => 
            array (
                'id' => 'f653b5fc-1206-4290-9996-910d921cb121',
                'name' => 'Kyeonggi',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            452 => 
            array (
                'id' => 'f658b850-544f-4499-888b-8d38f6127ef5',
                'name' => 'Hung Yen',
                'country_id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
            ),
            453 => 
            array (
                'id' => 'f676f1b7-0356-40eb-9888-77ee9655e0b5',
                'name' => 'Curacao',
                'country_id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
            ),
            454 => 
            array (
                'id' => 'f677a2f8-9298-42fc-8957-8b86aeed6e62',
                'name' => 'Faaf',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            455 => 
            array (
                'id' => 'f68e4d46-19e5-4d44-ac6f-bbfebadec813',
                'name' => 'Bekes',
                'country_id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
            ),
            456 => 
            array (
                'id' => 'f693480e-fed8-4ad7-9138-8d45b5624b28',
                'name' => 'Vargas',
                'country_id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
            ),
            457 => 
            array (
                'id' => 'f6987823-a16c-488f-8718-d424f280619a',
                'name' => 'Sergipe',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            458 => 
            array (
                'id' => 'f6a72906-ac8f-440d-b72b-bfe614c360ab',
                'name' => 'Glocestershire',
                'country_id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
            ),
            459 => 
            array (
                'id' => 'f6eabdd9-8297-4f7a-b25a-b81eccee12c2',
                'name' => 'Distrito Federal',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            460 => 
            array (
                'id' => 'f6f5a45c-c425-4f94-94c0-cc151dbee273',
                'name' => 'Soltustik Kazakstan',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            461 => 
            array (
                'id' => 'f7073aea-9ba2-49df-b74c-b2a8d8252c73',
                'name' => 'Ajman',
                'country_id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
            ),
            462 => 
            array (
                'id' => 'f70a6e96-62eb-4960-85f8-6c49e14bf36d',
                'name' => 'Mantova',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            463 => 
            array (
                'id' => 'f7300bd7-462e-42ea-b23c-1172f110f178',
                'name' => 'North Carolina',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            464 => 
            array (
                'id' => 'f739c64f-9ac9-479c-854d-88e39af7a333',
                'name' => 'Harare',
                'country_id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
            ),
            465 => 
            array (
                'id' => 'f739d6e5-b573-465c-8dea-0234ca67d67c',
                'name' => 'Southern Highlands',
                'country_id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
            ),
            466 => 
            array (
                'id' => 'f73da565-91d8-4759-89a4-90135032f6f9',
                'name' => 'Dhufar',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            467 => 
            array (
                'id' => 'f7563730-fd9a-4d09-98e1-07af60deb8d7',
                'name' => 'Buxoro Viloyati',
                'country_id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
            ),
            468 => 
            array (
                'id' => 'f76289fe-5880-4793-a67d-1d3a8618cb25',
                'name' => 'Saint Philip',
                'country_id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
            ),
            469 => 
            array (
                'id' => 'f7763efb-22b4-483f-9406-5e56ef293c04',
                'name' => 'Navoi',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            470 => 
            array (
                'id' => 'f78576b0-e609-462c-ab20-f71c9c7b6685',
                'name' => 'Wadi Kabir',
                'country_id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
            ),
            471 => 
            array (
                'id' => 'f789060d-29a8-4aad-839b-53d167e50bb8',
                'name' => 'Rio de Janeiro',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            472 => 
            array (
                'id' => 'f78b502c-6e70-4f53-9d0d-440fdaeaff4d',
                'name' => 'Landes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            473 => 
            array (
                'id' => 'f7a580c9-9c44-4152-958d-673852f55e6f',
                'name' => 'Rostov',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            474 => 
            array (
                'id' => 'f7b7ba3c-f117-4275-9450-169d8ab9290d',
                'name' => 'Lhaviyani',
                'country_id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
            ),
            475 => 
            array (
                'id' => 'f7c2465e-6866-461d-a569-715dace1eb70',
                'name' => 'Cankiri',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            476 => 
            array (
                'id' => 'f7c4cfaa-9a5a-483a-95c6-e09e75c65e2d',
                'name' => 'Huambo',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            477 => 
            array (
                'id' => 'f7e171b4-8692-45be-a44d-c90bcb3785e7',
                'name' => 'Aseer',
                'country_id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
            ),
            478 => 
            array (
                'id' => 'f7ef56f8-b525-41ca-8e90-a2ce33ac927c',
                'name' => 'Erzincan',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            479 => 
            array (
                'id' => 'f82959cc-75ac-4b0a-b211-2bb29cad6d16',
                'name' => 'Trnavsky',
                'country_id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
            ),
            480 => 
            array (
                'id' => 'f8520891-7fe0-4de2-9d34-83b6ae0b4fda',
                'name' => 'Zug',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            481 => 
            array (
                'id' => 'f8772381-f147-4e6f-8791-dfd87aaa24d8',
                'name' => 'Kapisa',
                'country_id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
            ),
            482 => 
            array (
                'id' => 'f879139a-c066-4d1a-bfeb-9c1e92737239',
                'name' => 'Gharyan',
                'country_id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
            ),
            483 => 
            array (
                'id' => 'f87c0185-52d3-4ab9-b3d4-863a0d884261',
                'name' => 'Rabat-Sale-Zammour-Zaer',
                'country_id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
            ),
            484 => 
            array (
                'id' => 'f880095c-f584-4816-9073-3ee240a265a4',
                'name' => 'Tucuman',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            485 => 
            array (
                'id' => 'f883d6c0-ce40-4941-b8df-c862081b03a9',
                'name' => 'New Jersy',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            486 => 
            array (
                'id' => 'f897202f-e288-4f2e-8bfc-1baef5d68be3',
                'name' => 'Kerman',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            487 => 
            array (
                'id' => 'f8a9054e-e7b4-4f72-864c-5f337d2a0286',
                'name' => 'Aomori',
                'country_id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
            ),
            488 => 
            array (
                'id' => 'f8d034c9-f15c-4dca-a1ed-17cce49de65e',
                'name' => 'Nagorni-Qarabax',
                'country_id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
            ),
            489 => 
            array (
                'id' => 'f8d8b818-6308-479f-9cb5-e7a260b3ec96',
                'name' => 'Dayr-al-Balah',
                'country_id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
            ),
            490 => 
            array (
                'id' => 'f90c1c93-da8c-43ce-89a1-e543915e01cb',
                'name' => 'Uljanovsk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            491 => 
            array (
                'id' => 'f91abfeb-2ea8-4de8-b807-7615fb8f591c',
                'name' => 'Pohjois-Pohjanmaa',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            492 => 
            array (
                'id' => 'f9433f3a-30b4-4f97-99e1-a6dcf61414fd',
                'name' => 'Puttalama',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            493 => 
            array (
                'id' => 'f95f1a55-5833-467a-9629-f6597006e30f',
                'name' => 'Australian Capital Territory',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            494 => 
            array (
                'id' => 'f977d924-9a2d-42ac-9b5c-d9ef8aa62821',
                'name' => 'Sublimity',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            495 => 
            array (
                'id' => 'f97a5187-3b6b-4006-97cf-567bb1e3f0f8',
                'name' => 'Bolu',
                'country_id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
            ),
            496 => 
            array (
                'id' => 'f9a1966d-9e50-4ae8-9a0e-455feb3f8222',
                'name' => 'Mandiana',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            497 => 
            array (
                'id' => 'f9aba695-b23c-4470-b3f7-397f3e6bb469',
                'name' => 'Mendoza',
                'country_id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
            ),
            498 => 
            array (
                'id' => 'f9bb3940-be75-44d4-82ce-5902a7b924f7',
                'name' => 'Mono',
                'country_id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
            ),
            499 => 
            array (
                'id' => 'f9c95e33-e108-4e60-ae97-7a65e4e69b42',
                'name' => 'Acquaviva',
                'country_id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 'f9ce7182-85f0-46b7-896e-9565ccdff82f',
                'name' => 'Braila',
                'country_id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
            ),
            1 => 
            array (
                'id' => 'f9d69fc2-9cf9-41a0-aeff-fe8ecfe21371',
                'name' => 'Central Tutume',
                'country_id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
            ),
            2 => 
            array (
                'id' => 'f9fd33f0-33e1-46e7-a010-2d97d3c6a61d',
                'name' => 'Kobenhavns Amt',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            3 => 
            array (
                'id' => 'fa0ec809-d518-49ae-ac0a-2acc0bdd105e',
                'name' => 'Bohuslan',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            4 => 
            array (
                'id' => 'fa13e152-3af2-4ffb-9f12-e382facf0a9c',
                'name' => 'Sodermanland',
                'country_id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
            ),
            5 => 
            array (
                'id' => 'fa1637de-96c3-4aeb-828b-b069383dc858',
                'name' => 'Fyn',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            6 => 
            array (
                'id' => 'fa1c0d16-6116-462a-8633-303016e27845',
                'name' => 'Koprivnica-Krizhevci',
                'country_id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
            ),
            7 => 
            array (
                'id' => 'fa7583b6-5019-4dd0-9bc7-4fb941dc1c95',
                'name' => 'Bale',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            8 => 
            array (
                'id' => 'fa83f10b-d4f2-44cb-aea3-e67a595ee5a0',
                'name' => 'Karditsa',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            9 => 
            array (
                'id' => 'faab318d-edb5-473a-a210-414fde02997a',
                'name' => 'Saint Joseph',
                'country_id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
            ),
            10 => 
            array (
                'id' => 'fac30d3f-b404-4c33-9ff8-4096fe58f5a5',
                'name' => 'Burlinsky Region',
                'country_id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
            ),
            11 => 
            array (
                'id' => 'fac7550e-a3bb-449e-a629-69c654b78d9a',
                'name' => 'Pordenone',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            12 => 
            array (
                'id' => 'facc82e3-ba6a-4737-93bf-7e98667959ee',
                'name' => 'Kansas',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            13 => 
            array (
                'id' => 'faccbf95-608f-46cf-8bd9-fe270d919ebd',
                'name' => 'Nakhon Ratchasima',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            14 => 
            array (
                'id' => 'fad4b050-da02-4f85-9204-de251ca57b08',
                'name' => 'Vejle',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            15 => 
            array (
                'id' => 'fad651d8-2536-415a-833d-e21c29814b02',
                'name' => 'Sahalin',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            16 => 
            array (
                'id' => 'fb0cc869-b0cb-4415-9cf7-5addc5f22fe6',
                'name' => 'Tula',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            17 => 
            array (
                'id' => 'fb108bd0-6cd0-4597-8517-093fec1eecb5',
                'name' => 'Limbazhu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            18 => 
            array (
                'id' => 'fb12254e-dd6a-4167-a690-25ec6d7ab8fa',
                'name' => 'Otjozondjupa',
                'country_id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
            ),
            19 => 
            array (
                'id' => 'fb288896-21ab-4fd6-86b3-97d08493fd98',
                'name' => 'Sevastopol\'',
                'country_id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
            ),
            20 => 
            array (
                'id' => 'fb2a3f3a-7423-4296-93cd-c651167a7dba',
                'name' => 'Janakpur',
                'country_id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
            ),
            21 => 
            array (
                'id' => 'fb31ecc8-97c3-4626-8b90-8214aa49fd6c',
                'name' => 'Kibuye',
                'country_id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
            ),
            22 => 
            array (
                'id' => 'fb3beb04-71de-4ef4-a09f-d7208a21e56b',
                'name' => 'Bankstown',
                'country_id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
            ),
            23 => 
            array (
                'id' => 'fb3df12b-acc4-42b9-b793-e9c5ca8e9755',
                'name' => 'Evritania',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            24 => 
            array (
                'id' => 'fb40f1bd-c85c-4c70-b4c9-845fff20b0d0',
                'name' => 'Kenmore',
                'country_id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
            ),
            25 => 
            array (
                'id' => 'fb42acbc-fc86-4e35-96b6-c71b35ec34f7',
                'name' => 'Probishtip',
                'country_id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
            ),
            26 => 
            array (
                'id' => 'fb49d992-b2c8-462e-b0af-5d2fd947f113',
                'name' => 'Alpes-de-Haute-Provence',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            27 => 
            array (
                'id' => 'fb50e56a-1a25-43f2-9108-e4155ea30105',
                'name' => 'Talsu',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            28 => 
            array (
                'id' => 'fb51867e-2818-4355-be15-327e1226efb0',
                'name' => 'Bafing',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            29 => 
            array (
                'id' => 'fb8a7d95-1a6a-4e95-8b71-7702c2fc6b6d',
                'name' => 'Temburong',
                'country_id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
            ),
            30 => 
            array (
                'id' => 'fb9dfb4d-7a38-4bf6-8e1c-f0251a38fabd',
                'name' => 'Ombella Mpoko',
                'country_id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
            ),
            31 => 
            array (
                'id' => 'fba2ad67-fbbb-4662-a9d4-77cac2c4fe6a',
                'name' => 'Saint Peter Port',
                'country_id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
            ),
            32 => 
            array (
                'id' => 'fbc3cfa9-4518-4632-bc58-a26e83203a94',
                'name' => 'Thessaloniki',
                'country_id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
            ),
            33 => 
            array (
                'id' => 'fbe33f1a-2240-4923-89db-9d19a616bfe2',
                'name' => 'Niger',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            34 => 
            array (
                'id' => 'fbe61bf5-51a4-4070-bc33-c13ae3347339',
                'name' => 'Smolensk',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            35 => 
            array (
                'id' => 'fbf4b917-d4f8-4e42-980e-7624da8cfa56',
                'name' => 'Margibi',
                'country_id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
            ),
            36 => 
            array (
                'id' => 'fbf7cfd6-e89e-4195-b960-e627f3de91a3',
                'name' => 'Mitiaro',
                'country_id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
            ),
            37 => 
            array (
                'id' => 'fbf8fc77-45ac-4481-bd97-7f216761edbf',
                'name' => 'Wad-adh-Dhahab',
                'country_id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
            ),
            38 => 
            array (
                'id' => 'fbfb2a3c-e38a-4bbd-ab7b-81c25caa8902',
                'name' => 'Zaire',
                'country_id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
            ),
            39 => 
            array (
                'id' => 'fc065f4d-754c-4751-bbc9-c4259eaaed85',
                'name' => 'Atua',
                'country_id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
            ),
            40 => 
            array (
                'id' => 'fc0919b1-79e6-4acf-91e7-87bbe96cb44e',
                'name' => 'Belize',
                'country_id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
            ),
            41 => 
            array (
                'id' => 'fc4e2eab-e693-4c64-ac21-6b445d3e9657',
                'name' => 'Distrito Federal',
                'country_id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
            ),
            42 => 
            array (
                'id' => 'fc6f73dc-cfb8-4ed8-a06c-6fae4c6297a2',
                'name' => 'Gabu',
                'country_id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
            ),
            43 => 
            array (
                'id' => 'fc9ff193-74b3-4937-8de5-315a92df56e9',
                'name' => 'Jubbada Hose',
                'country_id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
            ),
            44 => 
            array (
                'id' => 'fcbe46be-47f9-40e8-ac50-6af61eba762e',
                'name' => 'Ebon',
                'country_id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
            ),
            45 => 
            array (
                'id' => 'fcd41887-6853-4807-9830-11f5424820c8',
                'name' => 'Kwangju',
                'country_id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
            ),
            46 => 
            array (
                'id' => 'fd09c87c-0b18-40e1-9613-ac9aa25a22c0',
                'name' => 'Eastern',
                'country_id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
            ),
            47 => 
            array (
                'id' => 'fd19f557-0c8c-4a3f-892b-65abc8e1258f',
                'name' => 'Zacatecas',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            48 => 
            array (
                'id' => 'fd25f023-43c2-4b68-97b9-1ded0df537ff',
                'name' => 'Mali',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            49 => 
            array (
                'id' => 'fd2aa95c-1893-4466-a623-f046161c9ffd',
                'name' => 'Veracruz',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            50 => 
            array (
                'id' => 'fd2f2f63-8e96-4163-b35a-3f107b27249f',
                'name' => 'Melilla',
                'country_id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
            ),
            51 => 
            array (
                'id' => 'fd42dc23-b4df-4789-b5d0-0ecb2fc592ff',
                'name' => 'Mirdite',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            52 => 
            array (
                'id' => 'fd5743c2-8a9e-4b26-a4a2-eeb655d9f4ff',
                'name' => 'Yazd',
                'country_id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
            ),
            53 => 
            array (
                'id' => 'fd597604-83ba-4cb5-9985-01986493cb6d',
                'name' => 'Forecariah',
                'country_id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
            ),
            54 => 
            array (
                'id' => 'fd617213-b467-4c27-a54d-19e7a7fd0fe4',
                'name' => 'Emilia-Romagna',
                'country_id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
            ),
            55 => 
            array (
                'id' => 'fd628d5f-3f20-4399-8c29-6525dcd60cb0',
                'name' => 'Nord-Ouest',
                'country_id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
            ),
            56 => 
            array (
                'id' => 'fdb1041f-d6c6-4b9f-ad9e-3c392a88498f',
                'name' => 'Lakshmipur',
                'country_id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
            ),
            57 => 
            array (
                'id' => 'fdcb15d3-eb9f-40a9-b015-f6c504668ad6',
                'name' => 'Bam',
                'country_id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
            ),
            58 => 
            array (
                'id' => 'fdd25da9-2daf-4c62-aa8d-878947a67c15',
                'name' => 'Timphu',
                'country_id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
            ),
            59 => 
            array (
                'id' => 'fde43e36-4227-4b54-af36-b0fe764d2aa8',
                'name' => 'Ile-de-France',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
            60 => 
            array (
                'id' => 'fde87b1a-bf92-4bd6-aca2-6ece5b627e9b',
                'name' => 'Dushanbe',
                'country_id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
            ),
            61 => 
            array (
                'id' => 'fde8b092-397a-4905-828c-1f7df0576e5c',
                'name' => 'Gulbenes',
                'country_id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
            ),
            62 => 
            array (
                'id' => 'fdf0a65a-a858-4cc3-a220-40092e4d16df',
                'name' => 'Kralovehradecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            63 => 
            array (
                'id' => 'fdfd9ac4-3b15-43ac-a703-49d8b32132b7',
                'name' => 'Liberecky',
                'country_id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
            ),
            64 => 
            array (
                'id' => 'fe13038f-9127-496b-bac1-24ebb93ed9a2',
                'name' => 'Tver',
                'country_id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
            ),
            65 => 
            array (
                'id' => 'fe38515d-dc01-4189-9510-705820e28423',
                'name' => 'Plovdiv',
                'country_id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
            ),
            66 => 
            array (
                'id' => 'fe44204d-e8b0-49cf-808f-71955073cdd5',
                'name' => 'Mersch',
                'country_id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
            ),
            67 => 
            array (
                'id' => 'fe7387ce-1b30-4a0c-8d8d-50a770448fc0',
                'name' => 'Distrito Federal',
                'country_id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
            ),
            68 => 
            array (
                'id' => 'fe7f7a6f-5d17-41cd-8edf-af50230a7a48',
                'name' => 'Surhondar',
                'country_id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
            ),
            69 => 
            array (
                'id' => 'fe9fd47d-3300-4dca-9d76-bdbe6cd10d00',
                'name' => 'Arizona',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            70 => 
            array (
                'id' => 'fea4cbd5-804f-46c9-8832-fc6998878eb8',
                'name' => 'North-West Frontier',
                'country_id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
            ),
            71 => 
            array (
                'id' => 'febd9b49-6a43-443e-893e-a139e9b20549',
                'name' => 'Nanumea',
                'country_id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
            ),
            72 => 
            array (
                'id' => 'febe63bb-49d2-4795-9e2f-908db7ca390c',
                'name' => 'Florida',
                'country_id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
            ),
            73 => 
            array (
                'id' => 'fece7cbb-5831-4dea-9af5-dfe7f6ad45bb',
                'name' => 'Saipan',
                'country_id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
            ),
            74 => 
            array (
                'id' => 'ff2213af-07ef-4ad3-8226-31a53a1d5190',
                'name' => 'N\'zi-Comoe',
                'country_id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
            ),
            75 => 
            array (
                'id' => 'ff307b0c-525f-42aa-9c30-3e3d1deebe26',
                'name' => 'Brikama',
                'country_id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
            ),
            76 => 
            array (
                'id' => 'ff36079e-f012-44fe-9736-95d1a0ca2a93',
                'name' => 'Etela-Karjala',
                'country_id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
            ),
            77 => 
            array (
                'id' => 'ff362e69-fb2a-47d3-a36b-3c0971d3c371',
                'name' => 'Gampaha',
                'country_id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
            ),
            78 => 
            array (
                'id' => 'ff36a929-30c9-4e44-94fb-f88f0ac61a86',
                'name' => 'Anhui',
                'country_id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
            ),
            79 => 
            array (
                'id' => 'ff3a9052-a707-46d0-ba68-d9e7d7ab45c2',
                'name' => 'Kiryat Yam',
                'country_id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
            ),
            80 => 
            array (
                'id' => 'ff3dd6d2-25e8-4ec7-a066-be8f1fc05d02',
                'name' => 'Neuchatel',
                'country_id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
            ),
            81 => 
            array (
                'id' => 'ff5f36b4-7c2e-4130-9a61-ab71f8caba96',
                'name' => 'Kalimantan Selatan',
                'country_id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
            ),
            82 => 
            array (
                'id' => 'ff66a3c5-1f52-458b-a715-9b6800f0c170',
                'name' => 'Anambra',
                'country_id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
            ),
            83 => 
            array (
                'id' => 'ff869716-c48a-4b7c-a926-b456b99446bc',
                'name' => 'Ma\'an',
                'country_id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
            ),
            84 => 
            array (
                'id' => 'ff902ddc-7ec1-4f66-8aa6-e691d530cdd5',
                'name' => 'Kobenhavn',
                'country_id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
            ),
            85 => 
            array (
                'id' => 'ffbf3bd3-886f-4e21-a39b-9f0aebe99f28',
                'name' => 'Kilkenny',
                'country_id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
            ),
            86 => 
            array (
                'id' => 'ffdd4db3-14fe-413d-b4b4-41534607048b',
                'name' => 'Chachoengsao',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            87 => 
            array (
                'id' => 'ffe26241-4284-4ed0-a2fe-1a91d89450cb',
                'name' => 'Puke',
                'country_id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
            ),
            88 => 
            array (
                'id' => 'ffefb2a5-0797-4a33-9986-afa15b6100d0',
                'name' => 'Terengganu',
                'country_id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
            ),
            89 => 
            array (
                'id' => 'fff1b7df-2bdf-4950-a41b-3fa8f95c56e2',
                'name' => 'Ranong',
                'country_id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
            ),
            90 => 
            array (
                'id' => 'fff9d015-0096-42c3-81e9-b839fef5fa82',
                'name' => 'Quelmes',
                'country_id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
            ),
        ));
        
        
    }
}