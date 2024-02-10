<!-- Developer Challenge #1
Please use PHP and our API to output a list of domains that customer #293785 has onto a
page which is viewable via a web browser. The SSH details required should have already
been emailed to you.
This is an open book test so please feel free to use the internet. Good luck.
Demo API:
API Server: https://api.demo.sitehost.co.nz
API Version: 1.0
API Key: d17261d51ff7046b760bd95b4ce781ac
Client ID: 293785
Formats: json or xml
API calls are made up of the following parts:
{api_server}/{api_version}/{method}.{format}?{args}&apikey={api_key}
Here is an example of a complete API call that lists all registered domains:
https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?
client_id={client_id}&apikey={api_key} -->

Hi Michael,
Thank you for your email.
I was involved with deploying the web server and ssh,by 1:55pm, so I would appreciate it if you consider my exam time from 1:55 pm.

I couldn't see the result, I think it was because I wasn't connected with the SiteHost web server.   
here is my code:

<?php
// API details
$api_server = "https://api.demo.sitehost.co.nz";
$api_version = "1.0";
$api_key = "d17261d51ff7046b760bd95b4ce781ac";
$client_id = "293785";
$format = "json";

// API endpoint URL
$api_url = "$api_server/$api_version/srs/list_domains.$format?client_id=$client_id&apikey=$api_key";

// Set up cURL options
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
    exit;
}

// Close cURL session
curl_close($ch);

// Process the API response
if ($format === "json") {
    $domains = json_decode($response, true);

    // Output the list of domains
    if (isset($domains['domains']) && is_array($domains['domains']) && count($domains['domains']) > 0) {
        echo "<h1>List of Domains for Customer #$client_id</h1>";
        echo "<ul>";
        foreach ($domains['domains'] as $domain) {
            echo "<li>{$domain['name']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No domains found for Customer #$client_id";
    }
} else if ($format === "xml") {
    // Use PHP SimpleXML to process XML response if needed
    // $xml = simplexml_load_string($response);
    // $domains = ... // Process XML response
}
?>


On Mon, Jul 31, 2023 at 1:25 PM Michael <michael@sitehost.co.nz> wrote:
Hi Sue,


Please connect to the server provided below:


Server IP Address: sr20230731.120.138.30.206.sth.nz


SSH Username: sr20230731


SSH Password: Vsq5UdbQ


Once on the server please use your browser to access the ‘developer-challenge-1.pdf’ file for instructions which is located here:


http://sr20230731.120.138.30.206.sth.nz/developer-challenge-1.pdf


This should take 30 minutes but you have up to 1 hour to complete the test, after which the connection to the server may be stopped.


Please email your code and your results to codingtest@sitehost.co.nz when you’ve completed the test, I will confirm receipt of the email within 30 minutes of it arriving.


This is an open book test so please feel free to use the internet. 


If you run into any issues connecting to the server please let me know as soon as possible. Good luck.


Best regards,

Mike


http://sr20230731.120.138.30.206.sth.nz/developer-challenge-1.pdf


http://sr20230731.120.138.30.206.sth.nz/developer-challenge-1.pdf

