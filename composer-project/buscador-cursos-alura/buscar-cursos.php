$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $response->getBody();