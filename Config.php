<?php
    
    namespace App\newFUT;
    
    trait Config {
        
        public $headers = [
            'ios' => [],
            'and' => [],
            'web' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36',
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Encoding' => 'gzip,deflate,sdch, br',
                'Accept-Language' => 'en-US,en;q=0.8',
                'DNT' => '1'
            ]
        ];
        
        public $fut_host = [
            'pc' => 'utas.external.s2.fut.ea.com:443',
            'ps3' => 'utas.external.s2.fut.ea.com:443',
            'ps4' => 'utas.external.s2.fut.ea.com:443',
            'xbox' => 'utas.external.s3.fut.ea.com:443'
        ];
        
        public $auth_url = 'utas.mob.v4.fut.ea.com:443';
        
        public $pin_url = 'https://pin-river.data.ea.com/pinEvents';
        
        public $client_id = 'FIFA-18-WEBCLIENT';
        
        public $fun_captcha_public_key = 'A4EECF77-AC87-8C8D-5754-BF882F72063B';
        
        public $v = '18.0.0';
        
    }
    
?>