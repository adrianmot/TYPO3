<?php
namespace LS\Shopware\Api;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Marc Scherer <mail@loewenstall.de>, LÖWENSTALL
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * CategoryController
 */
class Client {

	const METHODE_GET    = 'GET';

	const METHODE_POST   = 'POST';

	protected $validMethods = array(
        self::METHODE_GET,
        self::METHODE_POST
    );

	public $apiUrl;

	public $cURL;

	protected $debug = false;

	/**
	 * @param array $settings
	 */
	function initialize($settings) {
		$this->apiUrl = rtrim($settings['apiUrl'], '/') . '/';
		 //Initializes the cURL instance
		$this->cURL = curl_init();

		curl_setopt($this->cURL, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->cURL, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($this->cURL, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);
		curl_setopt($this->cURL, CURLOPT_USERPWD, $settings['username'] . ':' . $settings['apiKey']);
		curl_setopt($this->cURL, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
		));
	}

	/**
	 * @param string $url
	 * @param string $method
	 * @param array $data
	 * @param array $params
	 *
	 * @return mixed
	 * @throws Exception
	 */
	public function call($url, $method = self::METHODE_GET, $data = array(), $params = array()) {
        if (!in_array($method, $this->validMethods)) {
            throw new Exception('Invalid HTTP-Methode: ' . $method);
        }

        $queryString = '';

        if (!empty($params)) {
            $queryString = http_build_query($params);
        }

        $url = rtrim($url, '?') . '?';
        $url = $this->apiUrl . $url . $queryString;

        $dataString = json_encode($data);

        curl_setopt($this->cURL, CURLOPT_URL, $url);
        curl_setopt($this->cURL, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($this->cURL, CURLOPT_POSTFIELDS, $dataString);

        $result   = curl_exec($this->cURL);
        $httpCode = curl_getinfo($this->cURL, CURLINFO_HTTP_CODE);

		if ($this->debug === true) {
			return $this->prepareResponse($result, $httpCode);
		} else {
			return json_decode($result, true);
		}
    }

	/**
	 * @param string $url
	 * @param array $params
	 *
	 * @return mixed
	 */
	public function get($url, $params = array()) {
        return $this->call($url, self::METHODE_GET, array(), $params);
    }

	/**
	 * @param string $url
	 * @param array $data
	 * @param array $params
	 *
	 * @return mixed
	 */
	public function post($url, $data = array(), $params = array()) {
        return $this->call($url, self::METHODE_POST, $data, $params);
    }

	/**
	 * @param $result
	 * @param $httpCode
	 *
	 * @return mixed
	 */
	protected function prepareResponse($result, $httpCode) {
        echo "<h2>HTTP: $httpCode</h2>";

        if (null === $decodedResult = json_decode($result, true)) {
            $jsonErrors = array(
                JSON_ERROR_NONE => 'Es ist kein Fehler aufgetreten',
                JSON_ERROR_DEPTH => 'Die maximale Stacktiefe wurde erreicht',
                JSON_ERROR_CTRL_CHAR => 'Steuerzeichenfehler, möglicherweise fehlerhaft kodiert',
                JSON_ERROR_SYNTAX => 'Syntaxfehler',
            );

            echo "<h2>Could not decode json</h2>";
            echo "json_last_error: " . $jsonErrors[json_last_error()];
            echo "<br>Raw:<br>";
            echo "<pre>" . print_r($result, true) . "</pre>";

            return;
        }

        if (!isset($decodedResult['success'])) {
            echo "Invalid Response";

            return;
        }

        if (!$decodedResult['success']) {
            echo "<h2>No Success</h2>";
            echo "<p>" . $decodedResult['message'] . "</p>";

            return;
        }

		echo "<h2>Success</h2>";

		if (isset($decodedResult['data'])) {
			echo "<pre>" . print_r($decodedResult['data'], true) . "</pre>";
		}

		return $decodedResult;
    }
}
