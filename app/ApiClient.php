<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client(['verify' => false ]);
    }

    public function search(int $regNumber): BuisnessInfo
    {
        $id = 'resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9';
        $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q={$regNumber}&{$id}";

        $response = $this->client->request('GET', $url);
        $companyInfo = json_decode($response->getBody()->getContents());

        $buisness = new BuisnessInfo
        (
            $companyInfo->result->records->name,
            $companyInfo->result->records->regcode,
            $companyInfo->result->records->regtype_text,
            $companyInfo->result->records->address
        );
        return $buisness;
    }
}