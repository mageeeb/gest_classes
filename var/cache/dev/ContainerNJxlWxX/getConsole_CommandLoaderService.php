<?php

namespace ContainerNJxlWxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'console.command.about' => ['privates', '.console.command.about.lazy', 'get_Console_Command_About_LazyService', true],
            'console.command.assets_install' => ['privates', '.console.command.assets_install.lazy', 'get_Console_Command_AssetsInstall_LazyService', true],
            'console.command.cache_clear' => ['privates', '.console.command.cache_clear.lazy', 'get_Console_Command_CacheClear_LazyService', true],
            'console.command.cache_pool_clear' => ['privates', '.console.command.cache_pool_clear.lazy', 'get_Console_Command_CachePoolClear_LazyService', true],
            'console.command.cache_pool_prune' => ['privates', '.console.command.cache_pool_prune.lazy', 'get_Console_Command_CachePoolPrune_LazyService', true],
            'console.command.cache_pool_invalidate_tags' => ['privates', '.console.command.cache_pool_invalidate_tags.lazy', 'get_Console_Command_CachePoolInvalidateTags_LazyService', true],
            'console.command.cache_pool_delete' => ['privates', '.console.command.cache_pool_delete.lazy', 'get_Console_Command_CachePoolDelete_LazyService', true],
            'console.command.cache_pool_list' => ['privates', '.console.command.cache_pool_list.lazy', 'get_Console_Command_CachePoolList_LazyService', true],
            'console.command.cache_warmup' => ['privates', '.console.command.cache_warmup.lazy', 'get_Console_Command_CacheWarmup_LazyService', true],
            'console.command.config_debug' => ['privates', '.console.command.config_debug.lazy', 'get_Console_Command_ConfigDebug_LazyService', true],
            'console.command.config_dump_reference' => ['privates', '.console.command.config_dump_reference.lazy', 'get_Console_Command_ConfigDumpReference_LazyService', true],
            'console.command.container_debug' => ['privates', '.console.command.container_debug.lazy', 'get_Console_Command_ContainerDebug_LazyService', true],
            'console.command.container_lint' => ['privates', '.console.command.container_lint.lazy', 'get_Console_Command_ContainerLint_LazyService', true],
            'console.command.debug_autowiring' => ['privates', '.console.command.debug_autowiring.lazy', 'get_Console_Command_DebugAutowiring_LazyService', true],
            'console.command.dotenv_debug' => ['privates', '.console.command.dotenv_debug.lazy', 'get_Console_Command_DotenvDebug_LazyService', true],
            'console.command.event_dispatcher_debug' => ['privates', '.console.command.event_dispatcher_debug.lazy', 'get_Console_Command_EventDispatcherDebug_LazyService', true],
            'console.command.router_debug' => ['privates', '.console.command.router_debug.lazy', 'get_Console_Command_RouterDebug_LazyService', true],
            'console.command.router_match' => ['privates', '.console.command.router_match.lazy', 'get_Console_Command_RouterMatch_LazyService', true],
            'console.command.yaml_lint' => ['privates', '.console.command.yaml_lint.lazy', 'get_Console_Command_YamlLint_LazyService', true],
            'console.command.secrets_set' => ['privates', '.console.command.secrets_set.lazy', 'get_Console_Command_SecretsSet_LazyService', true],
            'console.command.secrets_remove' => ['privates', '.console.command.secrets_remove.lazy', 'get_Console_Command_SecretsRemove_LazyService', true],
            'console.command.secrets_generate_key' => ['privates', '.console.command.secrets_generate_key.lazy', 'get_Console_Command_SecretsGenerateKey_LazyService', true],
            'console.command.secrets_list' => ['privates', '.console.command.secrets_list.lazy', 'get_Console_Command_SecretsList_LazyService', true],
            'console.command.secrets_reveal' => ['privates', '.console.command.secrets_reveal.lazy', 'get_Console_Command_SecretsReveal_LazyService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', '.console.command.secrets_decrypt_to_local.lazy', 'get_Console_Command_SecretsDecryptToLocal_LazyService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', '.console.command.secrets_encrypt_from_local.lazy', 'get_Console_Command_SecretsEncryptFromLocal_LazyService', true],
        ], [
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_pool_invalidate_tags' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.dotenv_debug' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.yaml_lint' => '?',
            'console.command.secrets_set' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_reveal' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:invalidate-tags' => 'console.command.cache_pool_invalidate_tags', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:dotenv' => 'console.command.dotenv_debug', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:reveal' => 'console.command.secrets_reveal', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local']);
    }
}
