<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'uvdesk/community-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.2@295082d3750987065912816a9d536c2df735f637',
  'doctrine/data-fixtures' => '1.5.2@51c1890e8c5467c421c7cab4579f059ebf720278',
  'doctrine/dbal' => '2.13.8@dc9b3c3c8592c935a6e590441f9abc0f9eba335b',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.6.1@b7002752b555cb61cc9ca8d4c89a5b6e8200f765',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => '2.2.3@0a081b55a88259a887af7be654743a8c5f703e99',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '2.3.5@28d92a34348fee5daeb80879e56461b2e862fc05',
  'doctrine/orm' => '2.11.2@9c351e044478135aec1755e2c0c0493a4b6309db',
  'doctrine/persistence' => '2.4.1@092a52b71410ac1795287bb5135704ef07d18dd0',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.7@c828ced1f932094ab79e4120a106a666565e4d9c',
  'google/recaptcha' => '1.2.4@614f25a9038be4f3f2da7cbfd778dc5b357d2419',
  'iamcal/lib_autolink' => 'v1.7@b3a86d8437e5d635fb85b155a86288d94f6a924d',
  'knplabs/knp-components' => 'v3.4.0@d990ef101bab58a078b6eb7250e57f5c68af5604',
  'knplabs/knp-paginator-bundle' => 'v5.8.0@216b9d5708001788321916c5b7632da9fb9ef6ca',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'monolog/monolog' => '2.4.0@d7fd7450628561ba697b7097d86db72662f54aef',
  'php-mime-mail-parser/php-mime-mail-parser' => '7.1.0@cad0267d8a5e7195d344f3842b452f1fdf6a5021',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpstan/phpdoc-parser' => '1.4.2@4cb3021a4e10ffe3d5f94a4c34cf4b3f6de2fa3d',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v5.4.7@4affdca3da5f380caa27a338269b36ac288b3981',
  'symfony/cache' => 'v5.4.7@ba06841ed293fcaf79a592f59fdaba471f7c756c',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.7@05624c386afa1b4ccc1357463d830fade8d9d404',
  'symfony/console' => 'v5.4.7@900275254f0a1a2afff1ab0e11abd5587a10e1d6',
  'symfony/dependency-injection' => 'v5.4.7@35588b2afb08ea3a142d62fefdcad4cb09be06ed',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.4.7@8293adcd47c2a3195cfa5f511feebb12832c47b4',
  'symfony/dotenv' => 'v5.4.5@83a2310904a4f5d4f42526227b5a578ac82232a9',
  'symfony/error-handler' => 'v5.4.7@060bc01856a1846e3e4385261bc9ed11a1dd7b6a',
  'symfony/event-dispatcher' => 'v5.4.3@dec8a9f58d20df252b9cd89f1c6c1530f747685d',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/expression-language' => 'v5.4.7@2ab2550b48ee6e88137f69967a5ded0852741549',
  'symfony/filesystem' => 'v5.4.7@3a4442138d80c9f7b600fb297534ac718b61d37f',
  'symfony/finder' => 'v5.4.3@231313534dded84c7ecaa79d14bc5da4ccb69b7d',
  'symfony/flex' => 'v1.18.5@10e438f53a972439675dc720706f0cd5c0ed94f1',
  'symfony/form' => 'v5.4.7@75267931833e98f82bc39fb20f54251b7516680b',
  'symfony/framework-bundle' => 'v5.4.7@7520f553c7a7721652c1b7ac95c09dae62a1676e',
  'symfony/http-client' => 'v5.4.7@88b6909f74fd1f2147e068411f71870a3b27ac56',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.4.6@34e89bc147633c0f9dd6caaaf56da3b806a21465',
  'symfony/http-kernel' => 'v5.4.7@509243b9b3656db966284c45dffce9316c1ecc5c',
  'symfony/intl' => 'v5.4.5@47a1413da15ff840d7c419fa704d32caba3276ac',
  'symfony/mailer' => 'v5.4.7@03332035eef89557db9eb7ead4e899685d5962b9',
  'symfony/mime' => 'v5.4.7@92d27a34dea2e199fa9b687e3fff3a7d169b7b1c',
  'symfony/monolog-bridge' => 'v5.4.3@4b56e17c443e7092895477f047f2a70f324f984c',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.4.6@cf926e6ffc3d3c4aba412f722dd61faf39944eaa',
  'symfony/options-resolver' => 'v5.4.3@cc1147cb11af1b43f503ac18f31aa3bec213aba8',
  'symfony/password-hasher' => 'v5.4.3@b5ed59c4536d8386cd37bb86df2b7bd5fbbd46d4',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.25.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.25.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.25.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.25.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-php81' => 'v1.25.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v5.4.7@38a44b2517b470a436e1c944bf9b9ba3961137fb',
  'symfony/property-access' => 'v5.4.7@57196a19211baa36087e6fc06254d3b39ff0f369',
  'symfony/property-info' => 'v5.4.7@0fc07795712972b9792f203d0fe0e77c26c3281d',
  'symfony/proxy-manager-bridge' => 'v5.4.6@e6936de1cc8f4e6e3b2264aef186ca21695aee8e',
  'symfony/routing' => 'v5.4.3@44b29c7a94e867ccde1da604792f11a469958981',
  'symfony/runtime' => 'v5.4.7@dc22a2876de3a3dc26b686570d9e638d443b575e',
  'symfony/security-bundle' => 'v5.4.5@d6ae2f605fa8e4e0860c1a6574271af2bb4ba16c',
  'symfony/security-core' => 'v5.4.7@8d622c29dd018a5fb4a3994c9eeae2e9dfe68e96',
  'symfony/security-csrf' => 'v5.4.3@57c1c252ca756289c2b61327e08fb10be3936956',
  'symfony/security-guard' => 'v5.4.3@3d68d9f8e162f6655eb0a0237b9f333a82a19da9',
  'symfony/security-http' => 'v5.4.5@53d572f06fc438faae3713cc97d186d941919748',
  'symfony/serializer' => 'v5.4.7@d1bc37090edabada161b6490d1be14e8cb4891d4',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.4.5@4d04b5c24f3c9a1a168a131f6cbe297155bc0d30',
  'symfony/string' => 'v5.4.3@92043b7d8383e48104e411bc9434b260dbeb5a10',
  'symfony/swiftmailer-bundle' => 'v3.5.4@9daab339f226ac958192bf89836cb3378cc0e652',
  'symfony/translation' => 'v5.4.7@e1eb790575202ee3ac2659f55b93b05853726f8e',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.4.7@b43e9bdb57a39ffffb4c44a7ef0a47d338e9f1da',
  'symfony/twig-bundle' => 'v5.4.3@45ae3ee8155f93042a1033b166a7a3ed57b96a92',
  'symfony/validator' => 'v5.4.7@f6402ff65e23b7a701d6938809c6451a8a125a8b',
  'symfony/var-dumper' => 'v5.4.6@294e9da6e2e0dd404e983daa5aa74253d92c05d0',
  'symfony/var-exporter' => 'v5.4.7@7eacaa588c9b27f2738575adb4a8457a80d9c807',
  'symfony/web-link' => 'v5.4.3@8b9b073390359549fec5f5d797f23bbe9e2997a5',
  'symfony/yaml' => 'v5.4.3@e80f87d2c9495966768310fc531b487ce64237a2',
  'twig/extra-bundle' => 'v3.3.8@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.3.9@6ff9b0e440fa66f97f207e181c41340ddfa5683d',
  'uvdesk/automation-bundle' => 'v1.1.0@1e1dfc9f26bc2247cef38944b12a4b9f6119dee5',
  'uvdesk/composer-plugin' => 'v1.1.0@c6e64a4701873fe9ae3e846f0b148ea5f799a6da',
  'uvdesk/core-framework' => 'v1.1.0@cd3eed5d84869ba5fa31aa206039c9cb10f4b3b7',
  'uvdesk/extension-framework' => 'v1.1.0@fdc9f57f170f28984d92c5d341c5b144128615c5',
  'uvdesk/mailbox-component' => 'v1.1.0@7922a2a81ab3dad8c9892a4e70ce80ca84bd652e',
  'uvdesk/support-center-bundle' => 'v1.1.0@e246467db08f44e23584416542247123d5a52a3b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.20@12bc8879fb65aef2138b26fc633cb1e3620cffba',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.0.0@b233b84bc4465aff7b57cf1c4bc75c86d00d6dad',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.4.3@18e73179c6a33d520de1b644941eba108dd811ad',
  'symfony/css-selector' => 'v5.4.3@b0a190285cd95cb019237851205b8140ef6e368e',
  'symfony/debug-bundle' => 'v5.4.3@6f508169752ed2c0d0d8a6641c4cca39a8f1dfcb',
  'symfony/dom-crawler' => 'v5.4.6@c0bda97480d96337bd3866026159a8b358665457',
  'symfony/maker-bundle' => 'v1.38.0@143024ab0e426285d3d9b7f6a3ce51e12a9d8ec5',
  'symfony/phpunit-bridge' => 'v6.0.7@924f44f1c682473453a502f8f01d4904a7761dcc',
  'symfony/web-profiler-bundle' => 'v5.4.6@1497b1d22c2807a77563439f8ec489407a989d59',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'uvdesk/community-skeleton' => 'v1.1.0@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
