<?php
namespace Composer\Installers;
class KorpusInstaller extends BaseInstaller
{
    protected $locations = array(
        'pages' => 'data2/pages/',
        'templates' => 'data2/templates/',
        'shared' => 'data2/shared/',
        'cache' => 'data2/cache/',
    );
}
