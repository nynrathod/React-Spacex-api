<?php
class Page {

    // GET Users
    public function getPageToken() {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
            CURLOPT_URL            => 'https://api.spacexdata.com/v4/landpads',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => '',
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'GET',
            )
        );

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}