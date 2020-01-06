<?php
    function http($url,$header,$data=[],$method='get'){
        $ch = curl_init();
        $chOpts = [
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_HEADER=>false,
            CURLOPT_FOLLOWLOCATION=>true,
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_CONNECTTIMEOUT =>8,
            CURLOPT_TIMEOUT => 16,
            CURLOPT_HTTPHEADER => $header
        ];
        if($method=='post'){
            $chOpts[CURLOPT_POST]=true;
            $chOpts[CURLOPT_POSTFIELDS]=$data;
            $chOpts[CURLOPT_URL]=$url;

        }
        else{
            $url.='?'.is_array($data)?http_build_query($data):$data;
            $chOpts[CURLOPT_URL]=$url;
        }
        curl_setopt_array($ch, $chOpts);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
?>