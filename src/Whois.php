<?php

namespace sokolnikov911\Whois;

class Whois {
    protected $dataArray;

    /**
     * @param string $address domain name or IP address
     */
    public function __construct($address)
    {
        $command = "whois " . $address;
        exec($command, $output);

        foreach ($output as $line) {
            $line = trim($line);

            if ((substr($line, 0, 1) != "#") and ((substr($line, 0, 1) != "%")) and ($line != "")) {
                $values = explode(":", $line);
                if (isset($values[1])) $dataArray[strtolower(trim($values[0]))] = trim($values[1]);
            }
        }

        if (isset($dataArray)) $this->dataArray = $dataArray;
    }


    /**
     * @param string $property name of needle property
     * @return string property value
     */
	public function getProperty($property) {
        if (isset($this->dataArray[$property])) return $this->dataArray[$property];

        return false;
    }
}
