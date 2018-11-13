<?php
/**
 * Created by Angelo Fonzeca.
 * Date: 21/09/18
 * Time: 13.04
 */

namespace ArunCore\Core\IO;

use ArunCore\Interfaces\IO\FileContentGeneratorInterface;
use ArunCore\Core\Domain\DomainActionNameGenerator;

class FileContentGenerator implements FileContentGeneratorInterface
{
    /**
     * Path to ClassDomain files
     *
     * @var string $domainsPath
     */
    private $domainsPath;

    /**
     * Path to .skm files
     *
     * @var string $schemasPath
     */
    private $schemasPath;

    /**
     * FileContentGenerator constructor.
     * @param string $domainsPath
     * @param string $schemasPath
     */
    public function __construct(string $domainsPath, string $schemasPath)
    {
        $this->domainsPath = $domainsPath;
        $this->schemasPath = $schemasPath;
    }

    /**
     * Load a file from a specified path
     *
     * @param string $fullFilenamePath
     * @return bool|null|string
     */
    private function load(string $fullFilenamePath)
    {
        if (file_exists($fullFilenamePath)) {
            return file_get_contents($fullFilenamePath);
        }

        return null;
    }

    /**
     * Store a file to specified path
     *
     * @param string $fullFilenamePath
     * @param string $data
     * @return bool|int
     */
    private function store(string $fullFilenamePath, string $data)
    {
        return file_put_contents($fullFilenamePath, $data);
    }

    /**
     * Load code from a specified ClassDomain
     *
     * @param string $domainName
     * @return bool|null|string
     */
    public function loadDomainCode(string $domainName)
    {
        $domainClassName = DomainActionNameGenerator::getDomainClassName($domainName);

        return $this->load($this->domainsPath . "/" . $domainClassName.".php");
    }

    /**
     * Load code from Schema file
     *
     * @param string $schemaName
     * @return bool|null|string
     */
    public function loadSchemaCode(string $schemaName)
    {
        return $this->load($this->schemasPath . "/" . ucfirst($schemaName) . ".skm");
    }

    /**
     * Store/replaced code of a specified ClassDomain.
     *
     *
     * @param string $domainName
     * @param string $data
     * @param bool $force : allows to define if overwrite file or not
     * @return bool|int
     */
    public function storeDomainCode(string $domainName, string $data, bool $force = false)
    {
        $domainClassName = DomainActionNameGenerator::getDomainClassName($domainName);
        $domainClassCodeFullPath = $this->domainsPath . "/" . $domainClassName.".php";

        if (file_exists($domainClassCodeFullPath) && !$force) {
            return false;
        }

        return $this->store($domainClassCodeFullPath, $data);
    }

    /**
     * RESERVED
     *
     * @param string $schemaName
     * @param string $data
     */
    private function storeSchemaCode(string $schemaName, string $data)
    {
        $this->store($this->schemasPath . "/" . ucfirst($schemaName).".skm", $data);
    }
}
