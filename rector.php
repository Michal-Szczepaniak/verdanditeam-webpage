<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\FuncCall\InlineIsAInstanceOfRector;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\If_\RemoveDeadInstanceOfRector;
use Rector\EarlyReturn\Rector\If_\ChangeOrIfContinueToMultiContinueRector;
use Rector\Instanceof_\Rector\Ternary\FlipNegatedTernaryInstanceofRector;
use Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector;
use Rector\Strict\Rector\Ternary\DisallowedShortTernaryRuleFixerRector;
use Rector\Symfony\Configs\Rector\Closure\MergeServiceNameTypeRector;
use Rector\TypeDeclaration\Rector\BooleanAnd\BinaryOpNullableToInstanceofRector;
use Rector\TypeDeclaration\Rector\Empty_\EmptyOnNullableObjectToInstanceOfRector;
use Rector\TypeDeclaration\Rector\While_\WhileNullableToInstanceofRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/src',
    ])
    ->withRules([
        DisallowedShortTernaryRuleFixerRector::class,
        DisallowedEmptyRuleFixerRector::class,
    ])
    ->withPhpSets()
    ->withPreparedSets(
        true,
        true,
        true,
        false,
        true,
        false,
        false,
        true,
        true,
        false,
        true,
        true,
        true,
        true,
        true,
        true,
        true,
    )
    ->withSkip([
        FlipTypeControlToUseExclusiveTypeRector::class,
        ChangeOrIfContinueToMultiContinueRector::class
    ])
    ->withTypeCoverageLevel(0);
