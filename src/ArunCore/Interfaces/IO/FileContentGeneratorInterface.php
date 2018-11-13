<?php
/**
 * Created by Angelo Fonzeca.
 * Date: 21/09/18
 * Time: 15.10
 */

namespace ArunCore\Interfaces\IO;

interface FileContentGeneratorInterface
{
    /**
     * Load code from a specified ClassDomain
     *
     * @param string $domainName
     * @return bool|null|string
     */
    public function loadDomainCode(string $domainName);

    /**
     * Load code from Schema file
     *
     * @param string $schemaName
     * @return bool|null|string
     */
    public function loadSchemaCode(string $schemaName);

    /**
     * Store/replaced code of a specified ClassDomain.
     *
     *
     * @param string $domainName
     * @param string $data
     * @param bool $force : allows to define if overwrite file or not
     * @return bool|int
     */
    public function storeDomainCode(string $domainName, string $data, bool $force = false);

}
