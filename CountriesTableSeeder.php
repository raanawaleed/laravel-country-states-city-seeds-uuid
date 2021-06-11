<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 'bc62569a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AF',
                'iso_alpha3' => 'AFG',
                'name' => 'Afghanistan',
                'phonecode' => 93,
            ),
            1 => 
            array (
                'id' => 'bc6907e3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AL',
                'iso_alpha3' => 'ALB',
                'name' => 'Albania',
                'phonecode' => 355,
            ),
            2 => 
            array (
                'id' => 'bc6909b4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DZ',
                'iso_alpha3' => 'DZA',
                'name' => 'Algeria',
                'phonecode' => 213,
            ),
            3 => 
            array (
                'id' => 'bc690a77-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AS',
                'iso_alpha3' => 'ASM',
                'name' => 'American Samoa',
                'phonecode' => 1684,
            ),
            4 => 
            array (
                'id' => 'bc690b46-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AD',
                'iso_alpha3' => 'AND',
                'name' => 'Andorra',
                'phonecode' => 376,
            ),
            5 => 
            array (
                'id' => 'bc690bf8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AO',
                'iso_alpha3' => 'AGO',
                'name' => 'Angola',
                'phonecode' => 244,
            ),
            6 => 
            array (
                'id' => 'bc690c97-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AI',
                'iso_alpha3' => 'AIA',
                'name' => 'Anguilla',
                'phonecode' => 1264,
            ),
            7 => 
            array (
                'id' => 'bc690d27-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AQ',
                'iso_alpha3' => 'ATA',
                'name' => 'Antarctica',
                'phonecode' => 0,
            ),
            8 => 
            array (
                'id' => 'bc690dcf-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AG',
                'iso_alpha3' => 'ATG',
                'name' => 'Antigua And Barbuda',
                'phonecode' => 1268,
            ),
            9 => 
            array (
                'id' => 'bc690e68-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AR',
                'iso_alpha3' => 'ARG',
                'name' => 'Argentina',
                'phonecode' => 54,
            ),
            10 => 
            array (
                'id' => 'bc690ef5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AM',
                'iso_alpha3' => 'ARM',
                'name' => 'Armenia',
                'phonecode' => 374,
            ),
            11 => 
            array (
                'id' => 'bc690f9f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AW',
                'iso_alpha3' => 'ABW',
                'name' => 'Aruba',
                'phonecode' => 297,
            ),
            12 => 
            array (
                'id' => 'bc6910de-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AU',
                'iso_alpha3' => 'AUS',
                'name' => 'Australia',
                'phonecode' => 61,
            ),
            13 => 
            array (
                'id' => 'bc691198-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AT',
                'iso_alpha3' => 'AUT',
                'name' => 'Austria',
                'phonecode' => 43,
            ),
            14 => 
            array (
                'id' => 'bc6912fd-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AZ',
                'iso_alpha3' => 'AZE',
                'name' => 'Azerbaijan',
                'phonecode' => 994,
            ),
            15 => 
            array (
                'id' => 'bc6914fc-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BS',
                'iso_alpha3' => 'BHS',
                'name' => 'Bahamas',
                'phonecode' => 1242,
            ),
            16 => 
            array (
                'id' => 'bc6915b0-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BH',
                'iso_alpha3' => 'BHR',
                'name' => 'Bahrain',
                'phonecode' => 973,
            ),
            17 => 
            array (
                'id' => 'bc691659-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BD',
                'iso_alpha3' => 'BGD',
                'name' => 'Bangladesh',
                'phonecode' => 880,
            ),
            18 => 
            array (
                'id' => 'bc69173f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BB',
                'iso_alpha3' => 'BRB',
                'name' => 'Barbados',
                'phonecode' => 1246,
            ),
            19 => 
            array (
                'id' => 'bc691804-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BY',
                'iso_alpha3' => 'BLR',
                'name' => 'Belarus',
                'phonecode' => 375,
            ),
            20 => 
            array (
                'id' => 'bc6918ad-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BE',
                'iso_alpha3' => 'BEL',
                'name' => 'Belgium',
                'phonecode' => 32,
            ),
            21 => 
            array (
                'id' => 'bc691957-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BZ',
                'iso_alpha3' => 'BLZ',
                'name' => 'Belize',
                'phonecode' => 501,
            ),
            22 => 
            array (
                'id' => 'bc691a21-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BJ',
                'iso_alpha3' => 'BEN',
                'name' => 'Benin',
                'phonecode' => 229,
            ),
            23 => 
            array (
                'id' => 'bc691ae2-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BM',
                'iso_alpha3' => 'BMU',
                'name' => 'Bermuda',
                'phonecode' => 1441,
            ),
            24 => 
            array (
                'id' => 'bc691b87-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BT',
                'iso_alpha3' => 'BTN',
                'name' => 'Bhutan',
                'phonecode' => 975,
            ),
            25 => 
            array (
                'id' => 'bc691cf6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BO',
                'iso_alpha3' => 'BOL',
                'name' => 'Bolivia',
                'phonecode' => 591,
            ),
            26 => 
            array (
                'id' => 'bc691e40-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BA',
                'iso_alpha3' => 'BIH',
                'name' => 'Bosnia and Herzegovina',
                'phonecode' => 387,
            ),
            27 => 
            array (
                'id' => 'bc691f4a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BW',
                'iso_alpha3' => 'BWA',
                'name' => 'Botswana',
                'phonecode' => 267,
            ),
            28 => 
            array (
                'id' => 'bc692043-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BV',
                'iso_alpha3' => 'BVT',
                'name' => 'Bouvet Island',
                'phonecode' => 0,
            ),
            29 => 
            array (
                'id' => 'bc692126-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BR',
                'iso_alpha3' => 'BRA',
                'name' => 'Brazil',
                'phonecode' => 55,
            ),
            30 => 
            array (
                'id' => 'bc69220a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IO',
                'iso_alpha3' => 'IOT',
                'name' => 'British Indian Ocean Territory',
                'phonecode' => 246,
            ),
            31 => 
            array (
                'id' => 'bc69231a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BN',
                'iso_alpha3' => 'BRN',
                'name' => 'Brunei',
                'phonecode' => 673,
            ),
            32 => 
            array (
                'id' => 'bc6923e9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BG',
                'iso_alpha3' => 'BGR',
                'name' => 'Bulgaria',
                'phonecode' => 359,
            ),
            33 => 
            array (
                'id' => 'bc6924ad-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BF',
                'iso_alpha3' => 'BFA',
                'name' => 'Burkina Faso',
                'phonecode' => 226,
            ),
            34 => 
            array (
                'id' => 'bc69258c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'BI',
                'iso_alpha3' => 'BDI',
                'name' => 'Burundi',
                'phonecode' => 257,
            ),
            35 => 
            array (
                'id' => 'bc69266a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KH',
                'iso_alpha3' => 'KHM',
                'name' => 'Cambodia',
                'phonecode' => 855,
            ),
            36 => 
            array (
                'id' => 'bc692780-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CM',
                'iso_alpha3' => 'CMR',
                'name' => 'Cameroon',
                'phonecode' => 237,
            ),
            37 => 
            array (
                'id' => 'bc692862-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CA',
                'iso_alpha3' => 'CAN',
                'name' => 'Canada',
                'phonecode' => 1,
            ),
            38 => 
            array (
                'id' => 'bc692930-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CV',
                'iso_alpha3' => 'CPV',
                'name' => 'Cape Verde',
                'phonecode' => 238,
            ),
            39 => 
            array (
                'id' => 'bc692a07-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KY',
                'iso_alpha3' => 'CYM',
                'name' => 'Cayman Islands',
                'phonecode' => 1345,
            ),
            40 => 
            array (
                'id' => 'bc692ad4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CF',
                'iso_alpha3' => 'CAF',
                'name' => 'Central African Republic',
                'phonecode' => 236,
            ),
            41 => 
            array (
                'id' => 'bc692ba3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TD',
                'iso_alpha3' => 'TCD',
                'name' => 'Chad',
                'phonecode' => 235,
            ),
            42 => 
            array (
                'id' => 'bc692c7a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CL',
                'iso_alpha3' => 'CHL',
                'name' => 'Chile',
                'phonecode' => 56,
            ),
            43 => 
            array (
                'id' => 'bc692d34-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CN',
                'iso_alpha3' => 'CHN',
                'name' => 'China',
                'phonecode' => 86,
            ),
            44 => 
            array (
                'id' => 'bc692df8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CX',
                'iso_alpha3' => 'CXR',
                'name' => 'Christmas Island',
                'phonecode' => 61,
            ),
            45 => 
            array (
                'id' => 'bc692ec4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CC',
                'iso_alpha3' => 'CCK',
            'name' => 'Cocos (Keeling) Islands',
                'phonecode' => 672,
            ),
            46 => 
            array (
                'id' => 'bc692f95-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CO',
                'iso_alpha3' => 'COL',
                'name' => 'Colombia',
                'phonecode' => 57,
            ),
            47 => 
            array (
                'id' => 'bc69305c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KM',
                'iso_alpha3' => 'COM',
                'name' => 'Comoros',
                'phonecode' => 269,
            ),
            48 => 
            array (
                'id' => 'bc693117-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CG',
                'iso_alpha3' => 'COG',
                'name' => 'Republic Of The Congo',
                'phonecode' => 242,
            ),
            49 => 
            array (
                'id' => 'bc6931d4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CD',
                'iso_alpha3' => 'COD',
                'name' => 'Democratic Republic Of The Congo',
                'phonecode' => 242,
            ),
            50 => 
            array (
                'id' => 'bc6932c5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CK',
                'iso_alpha3' => 'COK',
                'name' => 'Cook Islands',
                'phonecode' => 682,
            ),
            51 => 
            array (
                'id' => 'bc69348c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CR',
                'iso_alpha3' => 'CRI',
                'name' => 'Costa Rica',
                'phonecode' => 506,
            ),
            52 => 
            array (
                'id' => 'bc693562-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CI',
                'iso_alpha3' => 'CIV',
                'name' => 'Ivory Coast',
                'phonecode' => 225,
            ),
            53 => 
            array (
                'id' => 'bc69366c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HR',
                'iso_alpha3' => 'HRV',
            'name' => 'Croatia (Hrvatska)',
                'phonecode' => 385,
            ),
            54 => 
            array (
                'id' => 'bc693736-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CU',
                'iso_alpha3' => 'CUB',
                'name' => 'Cuba',
                'phonecode' => 53,
            ),
            55 => 
            array (
                'id' => 'bc6937f4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CY',
                'iso_alpha3' => 'CYP',
                'name' => 'Cyprus',
                'phonecode' => 357,
            ),
            56 => 
            array (
                'id' => 'bc6938ba-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CZ',
                'iso_alpha3' => 'CZE',
                'name' => 'Czech Republic',
                'phonecode' => 420,
            ),
            57 => 
            array (
                'id' => 'bc693982-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DK',
                'iso_alpha3' => 'DNK',
                'name' => 'Denmark',
                'phonecode' => 45,
            ),
            58 => 
            array (
                'id' => 'bc693a4a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DJ',
                'iso_alpha3' => 'DJI',
                'name' => 'Djibouti',
                'phonecode' => 253,
            ),
            59 => 
            array (
                'id' => 'bc693b0c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DM',
                'iso_alpha3' => 'DMA',
                'name' => 'Dominica',
                'phonecode' => 1767,
            ),
            60 => 
            array (
                'id' => 'bc693b93-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DO',
                'iso_alpha3' => 'DOM',
                'name' => 'Dominican Republic',
                'phonecode' => 1809,
            ),
            61 => 
            array (
                'id' => 'bc693c0f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TP',
                'iso_alpha3' => 'TLS',
                'name' => 'East Timor',
                'phonecode' => 670,
            ),
            62 => 
            array (
                'id' => 'bc693c82-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'EC',
                'iso_alpha3' => 'ECU',
                'name' => 'Ecuador',
                'phonecode' => 593,
            ),
            63 => 
            array (
                'id' => 'bc693cf5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'EG',
                'iso_alpha3' => 'EGY',
                'name' => 'Egypt',
                'phonecode' => 20,
            ),
            64 => 
            array (
                'id' => 'bc693d79-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SV',
                'iso_alpha3' => 'SLV',
                'name' => 'El Salvador',
                'phonecode' => 503,
            ),
            65 => 
            array (
                'id' => 'bc693e2e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GQ',
                'iso_alpha3' => 'GNQ',
                'name' => 'Equatorial Guinea',
                'phonecode' => 240,
            ),
            66 => 
            array (
                'id' => 'bc693eea-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ER',
                'iso_alpha3' => 'ERI',
                'name' => 'Eritrea',
                'phonecode' => 291,
            ),
            67 => 
            array (
                'id' => 'bc693fb6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'EE',
                'iso_alpha3' => 'EST',
                'name' => 'Estonia',
                'phonecode' => 372,
            ),
            68 => 
            array (
                'id' => 'bc69408c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ET',
                'iso_alpha3' => 'ETH',
                'name' => 'Ethiopia',
                'phonecode' => 251,
            ),
            69 => 
            array (
                'id' => 'bc694152-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'XA',
                'iso_alpha3' => '',
                'name' => 'External Territories of Australia',
                'phonecode' => 61,
            ),
            70 => 
            array (
                'id' => 'bc69422a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FK',
                'iso_alpha3' => 'FLK',
                'name' => 'Falkland Islands',
                'phonecode' => 500,
            ),
            71 => 
            array (
                'id' => 'bc6942f4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FO',
                'iso_alpha3' => 'FRO',
                'name' => 'Faroe Islands',
                'phonecode' => 298,
            ),
            72 => 
            array (
                'id' => 'bc6943cc-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FJ',
                'iso_alpha3' => 'FJI',
                'name' => 'Fiji Islands',
                'phonecode' => 679,
            ),
            73 => 
            array (
                'id' => 'bc69449e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FI',
                'iso_alpha3' => 'FIN',
                'name' => 'Finland',
                'phonecode' => 358,
            ),
            74 => 
            array (
                'id' => 'bc69456f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FR',
                'iso_alpha3' => 'FRA',
                'name' => 'France',
                'phonecode' => 33,
            ),
            75 => 
            array (
                'id' => 'bc69462b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GF',
                'iso_alpha3' => 'GUF',
                'name' => 'French Guiana',
                'phonecode' => 594,
            ),
            76 => 
            array (
                'id' => 'bc6946aa-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PF',
                'iso_alpha3' => 'PYF',
                'name' => 'French Polynesia',
                'phonecode' => 689,
            ),
            77 => 
            array (
                'id' => 'bc694728-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TF',
                'iso_alpha3' => 'ATF',
                'name' => 'French Southern Territories',
                'phonecode' => 0,
            ),
            78 => 
            array (
                'id' => 'bc6947a3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GA',
                'iso_alpha3' => 'GAB',
                'name' => 'Gabon',
                'phonecode' => 241,
            ),
            79 => 
            array (
                'id' => 'bc694818-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GM',
                'iso_alpha3' => 'GMB',
                'name' => 'Gambia',
                'phonecode' => 220,
            ),
            80 => 
            array (
                'id' => 'bc694895-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GE',
                'iso_alpha3' => 'GEO',
                'name' => 'Georgia',
                'phonecode' => 995,
            ),
            81 => 
            array (
                'id' => 'bc69490a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'DE',
                'iso_alpha3' => 'DEU',
                'name' => 'Germany',
                'phonecode' => 49,
            ),
            82 => 
            array (
                'id' => 'bc69497f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GH',
                'iso_alpha3' => 'GHA',
                'name' => 'Ghana',
                'phonecode' => 233,
            ),
            83 => 
            array (
                'id' => 'bc6949f4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GI',
                'iso_alpha3' => 'GIB',
                'name' => 'Gibraltar',
                'phonecode' => 350,
            ),
            84 => 
            array (
                'id' => 'bc694a6c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GR',
                'iso_alpha3' => 'GRC',
                'name' => 'Greece',
                'phonecode' => 30,
            ),
            85 => 
            array (
                'id' => 'bc694ae4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GL',
                'iso_alpha3' => 'GRL',
                'name' => 'Greenland',
                'phonecode' => 299,
            ),
            86 => 
            array (
                'id' => 'bc694b9e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GD',
                'iso_alpha3' => 'GRD',
                'name' => 'Grenada',
                'phonecode' => 1473,
            ),
            87 => 
            array (
                'id' => 'bc694c6d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GP',
                'iso_alpha3' => 'GLP',
                'name' => 'Guadeloupe',
                'phonecode' => 590,
            ),
            88 => 
            array (
                'id' => 'bc694d3d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GU',
                'iso_alpha3' => 'GUM',
                'name' => 'Guam',
                'phonecode' => 1671,
            ),
            89 => 
            array (
                'id' => 'bc694e0f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GT',
                'iso_alpha3' => 'GTM',
                'name' => 'Guatemala',
                'phonecode' => 502,
            ),
            90 => 
            array (
                'id' => 'bc694ea9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'XU',
                'iso_alpha3' => '',
                'name' => 'Guernsey and Alderney',
                'phonecode' => 44,
            ),
            91 => 
            array (
                'id' => 'bc694f22-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GN',
                'iso_alpha3' => 'GIN',
                'name' => 'Guinea',
                'phonecode' => 224,
            ),
            92 => 
            array (
                'id' => 'bc694f98-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GW',
                'iso_alpha3' => 'GNB',
                'name' => 'Guinea-Bissau',
                'phonecode' => 245,
            ),
            93 => 
            array (
                'id' => 'bc695012-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GY',
                'iso_alpha3' => 'GUY',
                'name' => 'Guyana',
                'phonecode' => 592,
            ),
            94 => 
            array (
                'id' => 'bc695085-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HT',
                'iso_alpha3' => 'HTI',
                'name' => 'Haiti',
                'phonecode' => 509,
            ),
            95 => 
            array (
                'id' => 'bc6950f6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HM',
                'iso_alpha3' => 'HMD',
                'name' => 'Heard and McDonald Islands',
                'phonecode' => 0,
            ),
            96 => 
            array (
                'id' => 'bc69516d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HN',
                'iso_alpha3' => 'HND',
                'name' => 'Honduras',
                'phonecode' => 504,
            ),
            97 => 
            array (
                'id' => 'bc6951df-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HK',
                'iso_alpha3' => 'HKG',
                'name' => 'Hong Kong S.A.R.',
                'phonecode' => 852,
            ),
            98 => 
            array (
                'id' => 'bc695257-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'HU',
                'iso_alpha3' => 'HUN',
                'name' => 'Hungary',
                'phonecode' => 36,
            ),
            99 => 
            array (
                'id' => 'bc6952c7-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IS',
                'iso_alpha3' => 'ISL',
                'name' => 'Iceland',
                'phonecode' => 354,
            ),
            100 => 
            array (
                'id' => 'bc695341-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IN',
                'iso_alpha3' => 'IND',
                'name' => 'India',
                'phonecode' => 91,
            ),
            101 => 
            array (
                'id' => 'bc6953b5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ID',
                'iso_alpha3' => 'IDN',
                'name' => 'Indonesia',
                'phonecode' => 62,
            ),
            102 => 
            array (
                'id' => 'bc69542e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IR',
                'iso_alpha3' => 'TRN',
                'name' => 'Iran',
                'phonecode' => 98,
            ),
            103 => 
            array (
                'id' => 'bc6954a3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IQ',
                'iso_alpha3' => 'IRQ',
                'name' => 'Iraq',
                'phonecode' => 964,
            ),
            104 => 
            array (
                'id' => 'bc69551b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IE',
                'iso_alpha3' => 'IRL',
                'name' => 'Ireland',
                'phonecode' => 353,
            ),
            105 => 
            array (
                'id' => 'bc69559c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IL',
                'iso_alpha3' => 'ISR',
                'name' => 'Israel',
                'phonecode' => 972,
            ),
            106 => 
            array (
                'id' => 'bc695613-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'IT',
                'iso_alpha3' => 'ITA',
                'name' => 'Italy',
                'phonecode' => 39,
            ),
            107 => 
            array (
                'id' => 'bc695688-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'JM',
                'iso_alpha3' => 'JAM',
                'name' => 'Jamaica',
                'phonecode' => 1876,
            ),
            108 => 
            array (
                'id' => 'bc695702-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'JP',
                'iso_alpha3' => 'JPN',
                'name' => 'Japan',
                'phonecode' => 81,
            ),
            109 => 
            array (
                'id' => 'bc695773-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'XJ',
                'iso_alpha3' => 'JEY',
                'name' => 'Jersey',
                'phonecode' => 44,
            ),
            110 => 
            array (
                'id' => 'bc6957e9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'JO',
                'iso_alpha3' => 'JOR',
                'name' => 'Jordan',
                'phonecode' => 962,
            ),
            111 => 
            array (
                'id' => 'bc69585a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KZ',
                'iso_alpha3' => 'KAZ',
                'name' => 'Kazakhstan',
                'phonecode' => 7,
            ),
            112 => 
            array (
                'id' => 'bc6958cf-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KE',
                'iso_alpha3' => 'KEN',
                'name' => 'Kenya',
                'phonecode' => 254,
            ),
            113 => 
            array (
                'id' => 'bc695945-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KI',
                'iso_alpha3' => 'KIR',
                'name' => 'Kiribati',
                'phonecode' => 686,
            ),
            114 => 
            array (
                'id' => 'bc6959c1-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KP',
                'iso_alpha3' => 'PRK',
                'name' => 'North Korea',
                'phonecode' => 850,
            ),
            115 => 
            array (
                'id' => 'bc695a33-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KR',
                'iso_alpha3' => 'KOR',
                'name' => 'South Korea',
                'phonecode' => 82,
            ),
            116 => 
            array (
                'id' => 'bc695aac-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KW',
                'iso_alpha3' => 'KWT',
                'name' => 'Kuwait',
                'phonecode' => 965,
            ),
            117 => 
            array (
                'id' => 'bc695b26-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KG',
                'iso_alpha3' => 'KGZ',
                'name' => 'Kyrgyzstan',
                'phonecode' => 996,
            ),
            118 => 
            array (
                'id' => 'bc695b9d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LA',
                'iso_alpha3' => 'LAO',
                'name' => 'Laos',
                'phonecode' => 856,
            ),
            119 => 
            array (
                'id' => 'bc695c14-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LV',
                'iso_alpha3' => 'LVA',
                'name' => 'Latvia',
                'phonecode' => 371,
            ),
            120 => 
            array (
                'id' => 'bc695dda-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LB',
                'iso_alpha3' => 'LBN',
                'name' => 'Lebanon',
                'phonecode' => 961,
            ),
            121 => 
            array (
                'id' => 'bc695e6a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LS',
                'iso_alpha3' => 'LSO',
                'name' => 'Lesotho',
                'phonecode' => 266,
            ),
            122 => 
            array (
                'id' => 'bc695edd-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LR',
                'iso_alpha3' => 'LBR',
                'name' => 'Liberia',
                'phonecode' => 231,
            ),
            123 => 
            array (
                'id' => 'bc695f6b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LY',
                'iso_alpha3' => 'LBY',
                'name' => 'Libya',
                'phonecode' => 218,
            ),
            124 => 
            array (
                'id' => 'bc695fe6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LI',
                'iso_alpha3' => 'LIE',
                'name' => 'Liechtenstein',
                'phonecode' => 423,
            ),
            125 => 
            array (
                'id' => 'bc69605b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LT',
                'iso_alpha3' => 'LTU',
                'name' => 'Lithuania',
                'phonecode' => 370,
            ),
            126 => 
            array (
                'id' => 'bc696106-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LU',
                'iso_alpha3' => 'LUX',
                'name' => 'Luxembourg',
                'phonecode' => 352,
            ),
            127 => 
            array (
                'id' => 'bc6961c9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MO',
                'iso_alpha3' => 'MAC',
                'name' => 'Macau',
                'phonecode' => 853,
            ),
            128 => 
            array (
                'id' => 'bc69628d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MK',
                'iso_alpha3' => 'MKD',
                'name' => 'Macedonia',
                'phonecode' => 389,
            ),
            129 => 
            array (
                'id' => 'bc6965a8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MG',
                'iso_alpha3' => 'MDG',
                'name' => 'Madagascar',
                'phonecode' => 261,
            ),
            130 => 
            array (
                'id' => 'bc696d4e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MW',
                'iso_alpha3' => 'MWI',
                'name' => 'Malawi',
                'phonecode' => 265,
            ),
            131 => 
            array (
                'id' => 'bc696e5e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MY',
                'iso_alpha3' => 'MYS',
                'name' => 'Malaysia',
                'phonecode' => 60,
            ),
            132 => 
            array (
                'id' => 'bc696f41-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MV',
                'iso_alpha3' => 'MDV',
                'name' => 'Maldives',
                'phonecode' => 960,
            ),
            133 => 
            array (
                'id' => 'bc69700b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ML',
                'iso_alpha3' => 'MLI',
                'name' => 'Mali',
                'phonecode' => 223,
            ),
            134 => 
            array (
                'id' => 'bc6970e4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MT',
                'iso_alpha3' => 'MLT',
                'name' => 'Malta',
                'phonecode' => 356,
            ),
            135 => 
            array (
                'id' => 'bc6971aa-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'XM',
                'iso_alpha3' => '',
            'name' => 'Man (Isle of)',
                'phonecode' => 44,
            ),
            136 => 
            array (
                'id' => 'bc697376-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MH',
                'iso_alpha3' => 'MHL',
                'name' => 'Marshall Islands',
                'phonecode' => 692,
            ),
            137 => 
            array (
                'id' => 'bc6976f9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MQ',
                'iso_alpha3' => 'MTQ',
                'name' => 'Martinique',
                'phonecode' => 596,
            ),
            138 => 
            array (
                'id' => 'bc697e23-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MR',
                'iso_alpha3' => 'MRT',
                'name' => 'Mauritania',
                'phonecode' => 222,
            ),
            139 => 
            array (
                'id' => 'bc698097-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MU',
                'iso_alpha3' => 'MUS',
                'name' => 'Mauritius',
                'phonecode' => 230,
            ),
            140 => 
            array (
                'id' => 'bc69832f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'YT',
                'iso_alpha3' => 'MYT',
                'name' => 'Mayotte',
                'phonecode' => 269,
            ),
            141 => 
            array (
                'id' => 'bc698529-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MX',
                'iso_alpha3' => 'MEX',
                'name' => 'Mexico',
                'phonecode' => 52,
            ),
            142 => 
            array (
                'id' => 'bc6986dc-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'FM',
                'iso_alpha3' => 'FSM',
                'name' => 'Micronesia',
                'phonecode' => 691,
            ),
            143 => 
            array (
                'id' => 'bc6988de-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MD',
                'iso_alpha3' => 'MDA',
                'name' => 'Moldova',
                'phonecode' => 373,
            ),
            144 => 
            array (
                'id' => 'bc698a99-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MC',
                'iso_alpha3' => 'MCO',
                'name' => 'Monaco',
                'phonecode' => 377,
            ),
            145 => 
            array (
                'id' => 'bc698efd-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MN',
                'iso_alpha3' => 'MNG',
                'name' => 'Mongolia',
                'phonecode' => 976,
            ),
            146 => 
            array (
                'id' => 'bc6993ca-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MS',
                'iso_alpha3' => 'MSR',
                'name' => 'Montserrat',
                'phonecode' => 1664,
            ),
            147 => 
            array (
                'id' => 'bc699d08-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MA',
                'iso_alpha3' => 'MAR',
                'name' => 'Morocco',
                'phonecode' => 212,
            ),
            148 => 
            array (
                'id' => 'bc69a6f6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MZ',
                'iso_alpha3' => 'MOZ',
                'name' => 'Mozambique',
                'phonecode' => 258,
            ),
            149 => 
            array (
                'id' => 'bc69a948-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MM',
                'iso_alpha3' => 'MMR',
                'name' => 'Myanmar',
                'phonecode' => 95,
            ),
            150 => 
            array (
                'id' => 'bc69aacb-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NA',
                'iso_alpha3' => 'NAM',
                'name' => 'Namibia',
                'phonecode' => 264,
            ),
            151 => 
            array (
                'id' => 'bc69abd4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NR',
                'iso_alpha3' => 'NRU',
                'name' => 'Nauru',
                'phonecode' => 674,
            ),
            152 => 
            array (
                'id' => 'bc69adb9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NP',
                'iso_alpha3' => 'NPL',
                'name' => 'Nepal',
                'phonecode' => 977,
            ),
            153 => 
            array (
                'id' => 'bc69af5f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AN',
                'iso_alpha3' => 'ANT',
                'name' => 'Netherlands Antilles',
                'phonecode' => 599,
            ),
            154 => 
            array (
                'id' => 'bc69b169-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NL',
                'iso_alpha3' => 'NLD',
                'name' => 'Netherlands',
                'phonecode' => 31,
            ),
            155 => 
            array (
                'id' => 'bc69b2dd-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NC',
                'iso_alpha3' => 'NCL',
                'name' => 'New Caledonia',
                'phonecode' => 687,
            ),
            156 => 
            array (
                'id' => 'bc69b53b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NZ',
                'iso_alpha3' => 'NZL',
                'name' => 'New Zealand',
                'phonecode' => 64,
            ),
            157 => 
            array (
                'id' => 'bc69b722-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NI',
                'iso_alpha3' => 'NIC',
                'name' => 'Nicaragua',
                'phonecode' => 505,
            ),
            158 => 
            array (
                'id' => 'bc69b7f7-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NE',
                'iso_alpha3' => 'NER',
                'name' => 'Niger',
                'phonecode' => 227,
            ),
            159 => 
            array (
                'id' => 'bc69b87b-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NG',
                'iso_alpha3' => 'NGA',
                'name' => 'Nigeria',
                'phonecode' => 234,
            ),
            160 => 
            array (
                'id' => 'bc69b8fe-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NU',
                'iso_alpha3' => 'NIU',
                'name' => 'Niue',
                'phonecode' => 683,
            ),
            161 => 
            array (
                'id' => 'bc69b976-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NF',
                'iso_alpha3' => 'NFK',
                'name' => 'Norfolk Island',
                'phonecode' => 672,
            ),
            162 => 
            array (
                'id' => 'bc69b9eb-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'MP',
                'iso_alpha3' => 'MNP',
                'name' => 'Northern Mariana Islands',
                'phonecode' => 1670,
            ),
            163 => 
            array (
                'id' => 'bc69ba68-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'NO',
                'iso_alpha3' => 'NOR',
                'name' => 'Norway',
                'phonecode' => 47,
            ),
            164 => 
            array (
                'id' => 'bc69bade-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'OM',
                'iso_alpha3' => 'OMN',
                'name' => 'Oman',
                'phonecode' => 968,
            ),
            165 => 
            array (
                'id' => 'bc69bb52-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PK',
                'iso_alpha3' => 'PAK',
                'name' => 'Pakistan',
                'phonecode' => 92,
            ),
            166 => 
            array (
                'id' => 'bc69bbc8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PW',
                'iso_alpha3' => 'PLW',
                'name' => 'Palau',
                'phonecode' => 680,
            ),
            167 => 
            array (
                'id' => 'bc69bc3d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PS',
                'iso_alpha3' => 'PSE',
                'name' => 'Palestinian Territory Occupied',
                'phonecode' => 970,
            ),
            168 => 
            array (
                'id' => 'bc69bcb6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PA',
                'iso_alpha3' => 'PAN',
                'name' => 'Panama',
                'phonecode' => 507,
            ),
            169 => 
            array (
                'id' => 'bc69bd2d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PG',
                'iso_alpha3' => 'PNG',
                'name' => 'Papua new Guinea',
                'phonecode' => 675,
            ),
            170 => 
            array (
                'id' => 'bc69bda8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PY',
                'iso_alpha3' => 'PRY',
                'name' => 'Paraguay',
                'phonecode' => 595,
            ),
            171 => 
            array (
                'id' => 'bc69be20-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PE',
                'iso_alpha3' => 'PER',
                'name' => 'Peru',
                'phonecode' => 51,
            ),
            172 => 
            array (
                'id' => 'bc69be98-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PH',
                'iso_alpha3' => 'PHL',
                'name' => 'Philippines',
                'phonecode' => 63,
            ),
            173 => 
            array (
                'id' => 'bc69c8bf-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PN',
                'iso_alpha3' => 'PCN',
                'name' => 'Pitcairn Island',
                'phonecode' => 0,
            ),
            174 => 
            array (
                'id' => 'bc69c978-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PL',
                'iso_alpha3' => 'POL',
                'name' => 'Poland',
                'phonecode' => 48,
            ),
            175 => 
            array (
                'id' => 'bc69c9fa-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PT',
                'iso_alpha3' => 'PRT',
                'name' => 'Portugal',
                'phonecode' => 351,
            ),
            176 => 
            array (
                'id' => 'bc69ca76-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PR',
                'iso_alpha3' => 'PRI',
                'name' => 'Puerto Rico',
                'phonecode' => 1787,
            ),
            177 => 
            array (
                'id' => 'bc69cae7-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'QA',
                'iso_alpha3' => 'QAT',
                'name' => 'Qatar',
                'phonecode' => 974,
            ),
            178 => 
            array (
                'id' => 'bc69cb5e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'RE',
                'iso_alpha3' => 'REU',
                'name' => 'Reunion',
                'phonecode' => 262,
            ),
            179 => 
            array (
                'id' => 'bc69cbd3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'RO',
                'iso_alpha3' => 'ROU',
                'name' => 'Romania',
                'phonecode' => 40,
            ),
            180 => 
            array (
                'id' => 'bc69cc4a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'RU',
                'iso_alpha3' => 'RUS',
                'name' => 'Russia',
                'phonecode' => 70,
            ),
            181 => 
            array (
                'id' => 'bc69ccbe-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'RW',
                'iso_alpha3' => 'RWA',
                'name' => 'Rwanda',
                'phonecode' => 250,
            ),
            182 => 
            array (
                'id' => 'bc69cd30-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SH',
                'iso_alpha3' => 'SHN',
                'name' => 'Saint Helena',
                'phonecode' => 290,
            ),
            183 => 
            array (
                'id' => 'bc69cdad-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'KN',
                'iso_alpha3' => 'KNA',
                'name' => 'Saint Kitts And Nevis',
                'phonecode' => 1869,
            ),
            184 => 
            array (
                'id' => 'bc69ce27-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LC',
                'iso_alpha3' => 'LCA',
                'name' => 'Saint Lucia',
                'phonecode' => 1758,
            ),
            185 => 
            array (
                'id' => 'bc69ce9c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'PM',
                'iso_alpha3' => 'SPM',
                'name' => 'Saint Pierre and Miquelon',
                'phonecode' => 508,
            ),
            186 => 
            array (
                'id' => 'bc69cf18-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VC',
                'iso_alpha3' => 'VCT',
                'name' => 'Saint Vincent And The Grenadines',
                'phonecode' => 1784,
            ),
            187 => 
            array (
                'id' => 'bc69cf92-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'WS',
                'iso_alpha3' => 'WSM',
                'name' => 'Samoa',
                'phonecode' => 684,
            ),
            188 => 
            array (
                'id' => 'bc69d004-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SM',
                'iso_alpha3' => 'SMR',
                'name' => 'San Marino',
                'phonecode' => 378,
            ),
            189 => 
            array (
                'id' => 'bc69d077-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ST',
                'iso_alpha3' => 'STP',
                'name' => 'Sao Tome and Principe',
                'phonecode' => 239,
            ),
            190 => 
            array (
                'id' => 'bc69d0ec-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SA',
                'iso_alpha3' => 'SAU',
                'name' => 'Saudi Arabia',
                'phonecode' => 966,
            ),
            191 => 
            array (
                'id' => 'bc69d162-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SN',
                'iso_alpha3' => 'SEN',
                'name' => 'Senegal',
                'phonecode' => 221,
            ),
            192 => 
            array (
                'id' => 'bc69d1dc-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'RS',
                'iso_alpha3' => 'SRB',
                'name' => 'Serbia',
                'phonecode' => 381,
            ),
            193 => 
            array (
                'id' => 'bc69d250-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SC',
                'iso_alpha3' => 'SYC',
                'name' => 'Seychelles',
                'phonecode' => 248,
            ),
            194 => 
            array (
                'id' => 'bc69d2c6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SL',
                'iso_alpha3' => 'SLE',
                'name' => 'Sierra Leone',
                'phonecode' => 232,
            ),
            195 => 
            array (
                'id' => 'bc69d33c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SG',
                'iso_alpha3' => 'SGP',
                'name' => 'Singapore',
                'phonecode' => 65,
            ),
            196 => 
            array (
                'id' => 'bc69d3b5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SK',
                'iso_alpha3' => 'SVK',
                'name' => 'Slovakia',
                'phonecode' => 421,
            ),
            197 => 
            array (
                'id' => 'bc69d42a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SI',
                'iso_alpha3' => 'SVN',
                'name' => 'Slovenia',
                'phonecode' => 386,
            ),
            198 => 
            array (
                'id' => 'bc69eda3-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'XG',
                'iso_alpha3' => '',
                'name' => 'Smaller Territories of the UK',
                'phonecode' => 44,
            ),
            199 => 
            array (
                'id' => 'bc69eee4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SB',
                'iso_alpha3' => 'SLB',
                'name' => 'Solomon Islands',
                'phonecode' => 677,
            ),
            200 => 
            array (
                'id' => 'bc69ef94-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SO',
                'iso_alpha3' => 'SOM',
                'name' => 'Somalia',
                'phonecode' => 252,
            ),
            201 => 
            array (
                'id' => 'bc69f03c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ZA',
                'iso_alpha3' => 'ZAF',
                'name' => 'South Africa',
                'phonecode' => 27,
            ),
            202 => 
            array (
                'id' => 'bc69f0e1-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GS',
                'iso_alpha3' => 'SGS',
                'name' => 'South Georgia',
                'phonecode' => 0,
            ),
            203 => 
            array (
                'id' => 'bc69f169-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SS',
                'iso_alpha3' => 'SSD',
                'name' => 'South Sudan',
                'phonecode' => 211,
            ),
            204 => 
            array (
                'id' => 'bc69f1ea-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ES',
                'iso_alpha3' => 'ESP',
                'name' => 'Spain',
                'phonecode' => 34,
            ),
            205 => 
            array (
                'id' => 'bc69f26c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'LK',
                'iso_alpha3' => 'LKA',
                'name' => 'Sri Lanka',
                'phonecode' => 94,
            ),
            206 => 
            array (
                'id' => 'bc69f2ec-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SD',
                'iso_alpha3' => 'SDN',
                'name' => 'Sudan',
                'phonecode' => 249,
            ),
            207 => 
            array (
                'id' => 'bc69f36e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SR',
                'iso_alpha3' => 'SUR',
                'name' => 'Suriname',
                'phonecode' => 597,
            ),
            208 => 
            array (
                'id' => 'bc69f3ed-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SJ',
                'iso_alpha3' => 'SJM',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phonecode' => 47,
            ),
            209 => 
            array (
                'id' => 'bc69f475-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SZ',
                'iso_alpha3' => 'SWZ',
                'name' => 'Swaziland',
                'phonecode' => 268,
            ),
            210 => 
            array (
                'id' => 'bc69f4f6-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SE',
                'iso_alpha3' => 'SWE',
                'name' => 'Sweden',
                'phonecode' => 46,
            ),
            211 => 
            array (
                'id' => 'bc69f576-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'CH',
                'iso_alpha3' => 'CHE',
                'name' => 'Switzerland',
                'phonecode' => 41,
            ),
            212 => 
            array (
                'id' => 'bc69f5ef-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'SY',
                'iso_alpha3' => 'SYR',
                'name' => 'Syria',
                'phonecode' => 963,
            ),
            213 => 
            array (
                'id' => 'bc69f66c-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TW',
                'iso_alpha3' => 'TWN',
                'name' => 'Taiwan',
                'phonecode' => 886,
            ),
            214 => 
            array (
                'id' => 'bc69f6f4-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TJ',
                'iso_alpha3' => 'TJK',
                'name' => 'Tajikistan',
                'phonecode' => 992,
            ),
            215 => 
            array (
                'id' => 'bc69f776-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TZ',
                'iso_alpha3' => 'TZA',
                'name' => 'Tanzania',
                'phonecode' => 255,
            ),
            216 => 
            array (
                'id' => 'bc69f7f2-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TH',
                'iso_alpha3' => 'THA',
                'name' => 'Thailand',
                'phonecode' => 66,
            ),
            217 => 
            array (
                'id' => 'bc69f871-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TG',
                'iso_alpha3' => 'TGO',
                'name' => 'Togo',
                'phonecode' => 228,
            ),
            218 => 
            array (
                'id' => 'bc69f8f1-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TK',
                'iso_alpha3' => 'TJL',
                'name' => 'Tokelau',
                'phonecode' => 690,
            ),
            219 => 
            array (
                'id' => 'bc69f978-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TO',
                'iso_alpha3' => 'TON',
                'name' => 'Tonga',
                'phonecode' => 676,
            ),
            220 => 
            array (
                'id' => 'bc69f9fe-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TT',
                'iso_alpha3' => 'TTO',
                'name' => 'Trinidad And Tobago',
                'phonecode' => 1868,
            ),
            221 => 
            array (
                'id' => 'bc69fa7e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TN',
                'iso_alpha3' => 'TUN',
                'name' => 'Tunisia',
                'phonecode' => 216,
            ),
            222 => 
            array (
                'id' => 'bc69fafa-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TR',
                'iso_alpha3' => 'TRU',
                'name' => 'Turkey',
                'phonecode' => 90,
            ),
            223 => 
            array (
                'id' => 'bc69fb75-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TM',
                'iso_alpha3' => 'TKM',
                'name' => 'Turkmenistan',
                'phonecode' => 7370,
            ),
            224 => 
            array (
                'id' => 'bc69fc19-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TC',
                'iso_alpha3' => 'TCA',
                'name' => 'Turks And Caicos Islands',
                'phonecode' => 1649,
            ),
            225 => 
            array (
                'id' => 'bc69fc9d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'TV',
                'iso_alpha3' => 'TUV',
                'name' => 'Tuvalu',
                'phonecode' => 688,
            ),
            226 => 
            array (
                'id' => 'bc69fd20-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'UG',
                'iso_alpha3' => 'UGA',
                'name' => 'Uganda',
                'phonecode' => 256,
            ),
            227 => 
            array (
                'id' => 'bc69fda2-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'UA',
                'iso_alpha3' => 'UKR',
                'name' => 'Ukraine',
                'phonecode' => 380,
            ),
            228 => 
            array (
                'id' => 'bc69fe22-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'AE',
                'iso_alpha3' => 'ARE',
                'name' => 'United Arab Emirates',
                'phonecode' => 971,
            ),
            229 => 
            array (
                'id' => 'bc69fe9f-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'GB',
                'iso_alpha3' => 'GBR',
                'name' => 'United Kingdom',
                'phonecode' => 44,
            ),
            230 => 
            array (
                'id' => 'bc69ff24-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'US',
                'iso_alpha3' => 'USA',
                'name' => 'United States',
                'phonecode' => 1,
            ),
            231 => 
            array (
                'id' => 'bc69ffb9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'UM',
                'iso_alpha3' => 'UMI',
                'name' => 'United States Minor Outlying Islands',
                'phonecode' => 1,
            ),
            232 => 
            array (
                'id' => 'bc6a0048-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'UY',
                'iso_alpha3' => 'URY',
                'name' => 'Uruguay',
                'phonecode' => 598,
            ),
            233 => 
            array (
                'id' => 'bc6a00d0-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'UZ',
                'iso_alpha3' => 'UZB',
                'name' => 'Uzbekistan',
                'phonecode' => 998,
            ),
            234 => 
            array (
                'id' => 'bc6a014e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VU',
                'iso_alpha3' => 'VUT',
                'name' => 'Vanuatu',
                'phonecode' => 678,
            ),
            235 => 
            array (
                'id' => 'bc6a01c9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VA',
                'iso_alpha3' => 'VAT',
                'name' => 'Vatican City',
                'phonecode' => 39,
            ),
            236 => 
            array (
                'id' => 'bc6a024d-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VE',
                'iso_alpha3' => 'VEN',
                'name' => 'Venezuela',
                'phonecode' => 58,
            ),
            237 => 
            array (
                'id' => 'bc6a02cd-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VN',
                'iso_alpha3' => 'VNM',
                'name' => 'Vietnam',
                'phonecode' => 84,
            ),
            238 => 
            array (
                'id' => 'bc6a034e-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VG',
                'iso_alpha3' => 'VGB',
            'name' => 'Virgin Islands (British)',
                'phonecode' => 1284,
            ),
            239 => 
            array (
                'id' => 'bc6a03d2-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'VI',
                'iso_alpha3' => 'VIR',
            'name' => 'Virgin Islands (US)',
                'phonecode' => 1340,
            ),
            240 => 
            array (
                'id' => 'bc6a0454-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'WF',
                'iso_alpha3' => 'WLF',
                'name' => 'Wallis And Futuna Islands',
                'phonecode' => 681,
            ),
            241 => 
            array (
                'id' => 'bc6a04d5-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'EH',
                'iso_alpha3' => 'ESH',
                'name' => 'Western Sahara',
                'phonecode' => 212,
            ),
            242 => 
            array (
                'id' => 'bc6a055a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'YE',
                'iso_alpha3' => 'YEM',
                'name' => 'Yemen',
                'phonecode' => 967,
            ),
            243 => 
            array (
                'id' => 'bc6a05d9-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'YU',
                'iso_alpha3' => '',
                'name' => 'Yugoslavia',
                'phonecode' => 38,
            ),
            244 => 
            array (
                'id' => 'bc6a065a-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ZM',
                'iso_alpha3' => 'ZMB',
                'name' => 'Zambia',
                'phonecode' => 260,
            ),
            245 => 
            array (
                'id' => 'bc6a06d8-c9e6-11eb-baad-b05adaab2756',
                'iso_alpha2' => 'ZW',
                'iso_alpha3' => 'ZWE',
                'name' => 'Zimbabwe',
                'phonecode' => 263,
            ),
        ));
        
        
    }
}