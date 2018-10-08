<?php

namespace pointybeard\URIInfo\Lib;

/**
 * Checks a URL with cURL and returns info about it.
 */
class URIInfo
{
    /**
     * Holds the URL info once run() is called
     * @var array
     */
    private $info = [];

    /**
     * Headers returned by cURL
     * @var string
     */
    private $header;

    /**
     * The URL to probe
     * @var string
     */
    private $url;

    /**
     * Constructor for the class.
     *
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
        $this->run();
    }

    /**
     * Uses cURL to prob the specified URL. Sets internal class properties
     * on success.
     *
     * @return bool true on success, false on failure.
     */
    private function run()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_FILETIME, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        if ($result !== false) {
            $this->header = $result;
            $this->info = curl_getinfo($curl);
        }

        curl_close($curl);

        return ($result !== false);
    }

    /**
     * Accessor method to get properties from the info array after run() method
     * has been called
     *
     * @return mixed Value of the property or false if property doesnt exist
     */
    public function __get($name)
    {
        if (!isset($this->info[$name])) {
            return false;
        }
        return $this->info[$name];
    }
}
