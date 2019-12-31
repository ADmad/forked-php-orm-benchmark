<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e846ef0f4122a1597374453411cfe55
{
    public static $files = array (
        '72142d7b40a3a0b14e91825290b5ad82' => __DIR__ . '/..' . '/cakephp/core/functions.php',
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
        '028fdea3165c4ba1ecccc83b7fec69fc' => __DIR__ . '/..' . '/cakephp/collection/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'C' => 
        array (
            'Cake\\Validation\\' => 16,
            'Cake\\Utility\\' => 13,
            'Cake\\ORM\\' => 9,
            'Cake\\Event\\' => 11,
            'Cake\\Datasource\\' => 16,
            'Cake\\Database\\' => 14,
            'Cake\\Core\\' => 10,
            'Cake\\Collection\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Cake\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/validation',
        ),
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
        'Cake\\ORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/orm',
        ),
        'Cake\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/event',
        ),
        'Cake\\Datasource\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/datasource',
        ),
        'Cake\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/database',
        ),
        'Cake\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/core',
        ),
        'Cake\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/collection',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Model\\Table\\AuthorTable' => __DIR__ . '/../..' . '/src/Model/Table/AuthorTable.php',
        'App\\Model\\Table\\BookTable' => __DIR__ . '/../..' . '/src/Model/Table/BookTable.php',
        'Cake\\Collection\\Collection' => __DIR__ . '/..' . '/cakephp/collection/Collection.php',
        'Cake\\Collection\\CollectionInterface' => __DIR__ . '/..' . '/cakephp/collection/CollectionInterface.php',
        'Cake\\Collection\\CollectionTrait' => __DIR__ . '/..' . '/cakephp/collection/CollectionTrait.php',
        'Cake\\Collection\\ExtractTrait' => __DIR__ . '/..' . '/cakephp/collection/ExtractTrait.php',
        'Cake\\Collection\\Iterator\\BufferedIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/BufferedIterator.php',
        'Cake\\Collection\\Iterator\\ExtractIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/ExtractIterator.php',
        'Cake\\Collection\\Iterator\\FilterIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/FilterIterator.php',
        'Cake\\Collection\\Iterator\\InsertIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/InsertIterator.php',
        'Cake\\Collection\\Iterator\\MapReduce' => __DIR__ . '/..' . '/cakephp/collection/Iterator/MapReduce.php',
        'Cake\\Collection\\Iterator\\NestIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/NestIterator.php',
        'Cake\\Collection\\Iterator\\NoChildrenIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/NoChildrenIterator.php',
        'Cake\\Collection\\Iterator\\ReplaceIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/ReplaceIterator.php',
        'Cake\\Collection\\Iterator\\SortIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/SortIterator.php',
        'Cake\\Collection\\Iterator\\StoppableIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/StoppableIterator.php',
        'Cake\\Collection\\Iterator\\TreeIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/TreeIterator.php',
        'Cake\\Collection\\Iterator\\TreePrinter' => __DIR__ . '/..' . '/cakephp/collection/Iterator/TreePrinter.php',
        'Cake\\Collection\\Iterator\\UnfoldIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/UnfoldIterator.php',
        'Cake\\Collection\\Iterator\\ZipIterator' => __DIR__ . '/..' . '/cakephp/collection/Iterator/ZipIterator.php',
        'Cake\\Core\\App' => __DIR__ . '/..' . '/cakephp/core/App.php',
        'Cake\\Core\\BasePlugin' => __DIR__ . '/..' . '/cakephp/core/BasePlugin.php',
        'Cake\\Core\\ClassLoader' => __DIR__ . '/..' . '/cakephp/core/ClassLoader.php',
        'Cake\\Core\\Configure' => __DIR__ . '/..' . '/cakephp/core/Configure.php',
        'Cake\\Core\\Configure\\ConfigEngineInterface' => __DIR__ . '/..' . '/cakephp/core/Configure/ConfigEngineInterface.php',
        'Cake\\Core\\Configure\\Engine\\IniConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/IniConfig.php',
        'Cake\\Core\\Configure\\Engine\\JsonConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/JsonConfig.php',
        'Cake\\Core\\Configure\\Engine\\PhpConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/PhpConfig.php',
        'Cake\\Core\\Configure\\FileConfigTrait' => __DIR__ . '/..' . '/cakephp/core/Configure/FileConfigTrait.php',
        'Cake\\Core\\ConsoleApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/ConsoleApplicationInterface.php',
        'Cake\\Core\\ConventionsTrait' => __DIR__ . '/..' . '/cakephp/core/ConventionsTrait.php',
        'Cake\\Core\\Exception\\Exception' => __DIR__ . '/..' . '/cakephp/core/Exception/Exception.php',
        'Cake\\Core\\Exception\\MissingPluginException' => __DIR__ . '/..' . '/cakephp/core/Exception/MissingPluginException.php',
        'Cake\\Core\\HttpApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/HttpApplicationInterface.php',
        'Cake\\Core\\InstanceConfigTrait' => __DIR__ . '/..' . '/cakephp/core/InstanceConfigTrait.php',
        'Cake\\Core\\ObjectRegistry' => __DIR__ . '/..' . '/cakephp/core/ObjectRegistry.php',
        'Cake\\Core\\Plugin' => __DIR__ . '/..' . '/cakephp/core/Plugin.php',
        'Cake\\Core\\PluginApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/PluginApplicationInterface.php',
        'Cake\\Core\\PluginCollection' => __DIR__ . '/..' . '/cakephp/core/PluginCollection.php',
        'Cake\\Core\\PluginInterface' => __DIR__ . '/..' . '/cakephp/core/PluginInterface.php',
        'Cake\\Core\\Retry\\CommandRetry' => __DIR__ . '/..' . '/cakephp/core/Retry/CommandRetry.php',
        'Cake\\Core\\Retry\\RetryStrategyInterface' => __DIR__ . '/..' . '/cakephp/core/Retry/RetryStrategyInterface.php',
        'Cake\\Core\\StaticConfigTrait' => __DIR__ . '/..' . '/cakephp/core/StaticConfigTrait.php',
        'Cake\\Database\\Connection' => __DIR__ . '/..' . '/cakephp/database/Connection.php',
        'Cake\\Database\\ConstraintsInterface' => __DIR__ . '/..' . '/cakephp/database/ConstraintsInterface.php',
        'Cake\\Database\\Dialect\\MysqlDialectTrait' => __DIR__ . '/..' . '/cakephp/database/Dialect/MysqlDialectTrait.php',
        'Cake\\Database\\Dialect\\PostgresDialectTrait' => __DIR__ . '/..' . '/cakephp/database/Dialect/PostgresDialectTrait.php',
        'Cake\\Database\\Dialect\\SqliteDialectTrait' => __DIR__ . '/..' . '/cakephp/database/Dialect/SqliteDialectTrait.php',
        'Cake\\Database\\Dialect\\SqlserverDialectTrait' => __DIR__ . '/..' . '/cakephp/database/Dialect/SqlserverDialectTrait.php',
        'Cake\\Database\\Dialect\\TupleComparisonTranslatorTrait' => __DIR__ . '/..' . '/cakephp/database/Dialect/TupleComparisonTranslatorTrait.php',
        'Cake\\Database\\Driver' => __DIR__ . '/..' . '/cakephp/database/Driver.php',
        'Cake\\Database\\DriverInterface' => __DIR__ . '/..' . '/cakephp/database/DriverInterface.php',
        'Cake\\Database\\Driver\\Mysql' => __DIR__ . '/..' . '/cakephp/database/Driver/Mysql.php',
        'Cake\\Database\\Driver\\Postgres' => __DIR__ . '/..' . '/cakephp/database/Driver/Postgres.php',
        'Cake\\Database\\Driver\\Sqlite' => __DIR__ . '/..' . '/cakephp/database/Driver/Sqlite.php',
        'Cake\\Database\\Driver\\Sqlserver' => __DIR__ . '/..' . '/cakephp/database/Driver/Sqlserver.php',
        'Cake\\Database\\Exception' => __DIR__ . '/..' . '/cakephp/database/Exception.php',
        'Cake\\Database\\Exception\\MissingConnectionException' => __DIR__ . '/..' . '/cakephp/database/Exception/MissingConnectionException.php',
        'Cake\\Database\\Exception\\MissingDriverException' => __DIR__ . '/..' . '/cakephp/database/Exception/MissingDriverException.php',
        'Cake\\Database\\Exception\\MissingExtensionException' => __DIR__ . '/..' . '/cakephp/database/Exception/MissingExtensionException.php',
        'Cake\\Database\\Exception\\NestedTransactionRollbackException' => __DIR__ . '/..' . '/cakephp/database/Exception/NestedTransactionRollbackException.php',
        'Cake\\Database\\ExpressionInterface' => __DIR__ . '/..' . '/cakephp/database/ExpressionInterface.php',
        'Cake\\Database\\Expression\\BetweenExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/BetweenExpression.php',
        'Cake\\Database\\Expression\\CaseExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/CaseExpression.php',
        'Cake\\Database\\Expression\\Comparison' => __DIR__ . '/..' . '/cakephp/database/Expression/Comparison.php',
        'Cake\\Database\\Expression\\FieldInterface' => __DIR__ . '/..' . '/cakephp/database/Expression/FieldInterface.php',
        'Cake\\Database\\Expression\\FieldTrait' => __DIR__ . '/..' . '/cakephp/database/Expression/FieldTrait.php',
        'Cake\\Database\\Expression\\FunctionExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/FunctionExpression.php',
        'Cake\\Database\\Expression\\IdentifierExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/IdentifierExpression.php',
        'Cake\\Database\\Expression\\OrderByExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/OrderByExpression.php',
        'Cake\\Database\\Expression\\OrderClauseExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/OrderClauseExpression.php',
        'Cake\\Database\\Expression\\QueryExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/QueryExpression.php',
        'Cake\\Database\\Expression\\TupleComparison' => __DIR__ . '/..' . '/cakephp/database/Expression/TupleComparison.php',
        'Cake\\Database\\Expression\\UnaryExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/UnaryExpression.php',
        'Cake\\Database\\Expression\\ValuesExpression' => __DIR__ . '/..' . '/cakephp/database/Expression/ValuesExpression.php',
        'Cake\\Database\\FieldTypeConverter' => __DIR__ . '/..' . '/cakephp/database/FieldTypeConverter.php',
        'Cake\\Database\\FunctionsBuilder' => __DIR__ . '/..' . '/cakephp/database/FunctionsBuilder.php',
        'Cake\\Database\\IdentifierQuoter' => __DIR__ . '/..' . '/cakephp/database/IdentifierQuoter.php',
        'Cake\\Database\\Log\\LoggedQuery' => __DIR__ . '/..' . '/cakephp/database/Log/LoggedQuery.php',
        'Cake\\Database\\Log\\LoggingStatement' => __DIR__ . '/..' . '/cakephp/database/Log/LoggingStatement.php',
        'Cake\\Database\\Log\\QueryLogger' => __DIR__ . '/..' . '/cakephp/database/Log/QueryLogger.php',
        'Cake\\Database\\Query' => __DIR__ . '/..' . '/cakephp/database/Query.php',
        'Cake\\Database\\QueryCompiler' => __DIR__ . '/..' . '/cakephp/database/QueryCompiler.php',
        'Cake\\Database\\Retry\\ReconnectStrategy' => __DIR__ . '/..' . '/cakephp/database/Retry/ReconnectStrategy.php',
        'Cake\\Database\\SchemaCache' => __DIR__ . '/..' . '/cakephp/database/SchemaCache.php',
        'Cake\\Database\\Schema\\BaseSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/BaseSchema.php',
        'Cake\\Database\\Schema\\CachedCollection' => __DIR__ . '/..' . '/cakephp/database/Schema/CachedCollection.php',
        'Cake\\Database\\Schema\\Collection' => __DIR__ . '/..' . '/cakephp/database/Schema/Collection.php',
        'Cake\\Database\\Schema\\CollectionInterface' => __DIR__ . '/..' . '/cakephp/database/Schema/CollectionInterface.php',
        'Cake\\Database\\Schema\\MysqlSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/MysqlSchema.php',
        'Cake\\Database\\Schema\\PostgresSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/PostgresSchema.php',
        'Cake\\Database\\Schema\\SqlGeneratorInterface' => __DIR__ . '/..' . '/cakephp/database/Schema/SqlGeneratorInterface.php',
        'Cake\\Database\\Schema\\SqliteSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/SqliteSchema.php',
        'Cake\\Database\\Schema\\SqlserverSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/SqlserverSchema.php',
        'Cake\\Database\\Schema\\TableSchema' => __DIR__ . '/..' . '/cakephp/database/Schema/TableSchema.php',
        'Cake\\Database\\Schema\\TableSchemaAwareInterface' => __DIR__ . '/..' . '/cakephp/database/Schema/TableSchemaAwareInterface.php',
        'Cake\\Database\\Schema\\TableSchemaInterface' => __DIR__ . '/..' . '/cakephp/database/Schema/TableSchemaInterface.php',
        'Cake\\Database\\SqlDialectTrait' => __DIR__ . '/..' . '/cakephp/database/SqlDialectTrait.php',
        'Cake\\Database\\SqliteCompiler' => __DIR__ . '/..' . '/cakephp/database/SqliteCompiler.php',
        'Cake\\Database\\SqlserverCompiler' => __DIR__ . '/..' . '/cakephp/database/SqlserverCompiler.php',
        'Cake\\Database\\StatementInterface' => __DIR__ . '/..' . '/cakephp/database/StatementInterface.php',
        'Cake\\Database\\Statement\\BufferResultsTrait' => __DIR__ . '/..' . '/cakephp/database/Statement/BufferResultsTrait.php',
        'Cake\\Database\\Statement\\BufferedStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/BufferedStatement.php',
        'Cake\\Database\\Statement\\CallbackStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/CallbackStatement.php',
        'Cake\\Database\\Statement\\MysqlStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/MysqlStatement.php',
        'Cake\\Database\\Statement\\PDOStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/PDOStatement.php',
        'Cake\\Database\\Statement\\SqliteStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/SqliteStatement.php',
        'Cake\\Database\\Statement\\SqlserverStatement' => __DIR__ . '/..' . '/cakephp/database/Statement/SqlserverStatement.php',
        'Cake\\Database\\Statement\\StatementDecorator' => __DIR__ . '/..' . '/cakephp/database/Statement/StatementDecorator.php',
        'Cake\\Database\\TypeConverterTrait' => __DIR__ . '/..' . '/cakephp/database/TypeConverterTrait.php',
        'Cake\\Database\\TypeFactory' => __DIR__ . '/..' . '/cakephp/database/TypeFactory.php',
        'Cake\\Database\\TypeInterface' => __DIR__ . '/..' . '/cakephp/database/TypeInterface.php',
        'Cake\\Database\\TypeMap' => __DIR__ . '/..' . '/cakephp/database/TypeMap.php',
        'Cake\\Database\\TypeMapTrait' => __DIR__ . '/..' . '/cakephp/database/TypeMapTrait.php',
        'Cake\\Database\\Type\\BaseType' => __DIR__ . '/..' . '/cakephp/database/Type/BaseType.php',
        'Cake\\Database\\Type\\BatchCastingInterface' => __DIR__ . '/..' . '/cakephp/database/Type/BatchCastingInterface.php',
        'Cake\\Database\\Type\\BinaryType' => __DIR__ . '/..' . '/cakephp/database/Type/BinaryType.php',
        'Cake\\Database\\Type\\BinaryUuidType' => __DIR__ . '/..' . '/cakephp/database/Type/BinaryUuidType.php',
        'Cake\\Database\\Type\\BoolType' => __DIR__ . '/..' . '/cakephp/database/Type/BoolType.php',
        'Cake\\Database\\Type\\DateTimeFractionalType' => __DIR__ . '/..' . '/cakephp/database/Type/DateTimeFractionalType.php',
        'Cake\\Database\\Type\\DateTimeTimezoneType' => __DIR__ . '/..' . '/cakephp/database/Type/DateTimeTimezoneType.php',
        'Cake\\Database\\Type\\DateTimeType' => __DIR__ . '/..' . '/cakephp/database/Type/DateTimeType.php',
        'Cake\\Database\\Type\\DateType' => __DIR__ . '/..' . '/cakephp/database/Type/DateType.php',
        'Cake\\Database\\Type\\DecimalType' => __DIR__ . '/..' . '/cakephp/database/Type/DecimalType.php',
        'Cake\\Database\\Type\\ExpressionTypeCasterTrait' => __DIR__ . '/..' . '/cakephp/database/Type/ExpressionTypeCasterTrait.php',
        'Cake\\Database\\Type\\ExpressionTypeInterface' => __DIR__ . '/..' . '/cakephp/database/Type/ExpressionTypeInterface.php',
        'Cake\\Database\\Type\\FloatType' => __DIR__ . '/..' . '/cakephp/database/Type/FloatType.php',
        'Cake\\Database\\Type\\IntegerType' => __DIR__ . '/..' . '/cakephp/database/Type/IntegerType.php',
        'Cake\\Database\\Type\\JsonType' => __DIR__ . '/..' . '/cakephp/database/Type/JsonType.php',
        'Cake\\Database\\Type\\OptionalConvertInterface' => __DIR__ . '/..' . '/cakephp/database/Type/OptionalConvertInterface.php',
        'Cake\\Database\\Type\\StringType' => __DIR__ . '/..' . '/cakephp/database/Type/StringType.php',
        'Cake\\Database\\Type\\TimeType' => __DIR__ . '/..' . '/cakephp/database/Type/TimeType.php',
        'Cake\\Database\\Type\\UuidType' => __DIR__ . '/..' . '/cakephp/database/Type/UuidType.php',
        'Cake\\Database\\TypedResultInterface' => __DIR__ . '/..' . '/cakephp/database/TypedResultInterface.php',
        'Cake\\Database\\TypedResultTrait' => __DIR__ . '/..' . '/cakephp/database/TypedResultTrait.php',
        'Cake\\Database\\ValueBinder' => __DIR__ . '/..' . '/cakephp/database/ValueBinder.php',
        'Cake\\Datasource\\ConnectionInterface' => __DIR__ . '/..' . '/cakephp/datasource/ConnectionInterface.php',
        'Cake\\Datasource\\ConnectionManager' => __DIR__ . '/..' . '/cakephp/datasource/ConnectionManager.php',
        'Cake\\Datasource\\ConnectionRegistry' => __DIR__ . '/..' . '/cakephp/datasource/ConnectionRegistry.php',
        'Cake\\Datasource\\EntityInterface' => __DIR__ . '/..' . '/cakephp/datasource/EntityInterface.php',
        'Cake\\Datasource\\EntityTrait' => __DIR__ . '/..' . '/cakephp/datasource/EntityTrait.php',
        'Cake\\Datasource\\Exception\\InvalidPrimaryKeyException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/InvalidPrimaryKeyException.php',
        'Cake\\Datasource\\Exception\\MissingDatasourceConfigException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/MissingDatasourceConfigException.php',
        'Cake\\Datasource\\Exception\\MissingDatasourceException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/MissingDatasourceException.php',
        'Cake\\Datasource\\Exception\\MissingModelException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/MissingModelException.php',
        'Cake\\Datasource\\Exception\\PageOutOfBoundsException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/PageOutOfBoundsException.php',
        'Cake\\Datasource\\Exception\\RecordNotFoundException' => __DIR__ . '/..' . '/cakephp/datasource/Exception/RecordNotFoundException.php',
        'Cake\\Datasource\\FactoryLocator' => __DIR__ . '/..' . '/cakephp/datasource/FactoryLocator.php',
        'Cake\\Datasource\\FixtureInterface' => __DIR__ . '/..' . '/cakephp/datasource/FixtureInterface.php',
        'Cake\\Datasource\\InvalidPropertyInterface' => __DIR__ . '/..' . '/cakephp/datasource/InvalidPropertyInterface.php',
        'Cake\\Datasource\\ModelAwareTrait' => __DIR__ . '/..' . '/cakephp/datasource/ModelAwareTrait.php',
        'Cake\\Datasource\\Paginator' => __DIR__ . '/..' . '/cakephp/datasource/Paginator.php',
        'Cake\\Datasource\\PaginatorInterface' => __DIR__ . '/..' . '/cakephp/datasource/PaginatorInterface.php',
        'Cake\\Datasource\\QueryCacher' => __DIR__ . '/..' . '/cakephp/datasource/QueryCacher.php',
        'Cake\\Datasource\\QueryInterface' => __DIR__ . '/..' . '/cakephp/datasource/QueryInterface.php',
        'Cake\\Datasource\\QueryTrait' => __DIR__ . '/..' . '/cakephp/datasource/QueryTrait.php',
        'Cake\\Datasource\\RepositoryInterface' => __DIR__ . '/..' . '/cakephp/datasource/RepositoryInterface.php',
        'Cake\\Datasource\\ResultSetDecorator' => __DIR__ . '/..' . '/cakephp/datasource/ResultSetDecorator.php',
        'Cake\\Datasource\\ResultSetInterface' => __DIR__ . '/..' . '/cakephp/datasource/ResultSetInterface.php',
        'Cake\\Datasource\\RuleInvoker' => __DIR__ . '/..' . '/cakephp/datasource/RuleInvoker.php',
        'Cake\\Datasource\\RulesAwareTrait' => __DIR__ . '/..' . '/cakephp/datasource/RulesAwareTrait.php',
        'Cake\\Datasource\\RulesChecker' => __DIR__ . '/..' . '/cakephp/datasource/RulesChecker.php',
        'Cake\\Datasource\\SchemaInterface' => __DIR__ . '/..' . '/cakephp/datasource/SchemaInterface.php',
        'Cake\\Datasource\\SimplePaginator' => __DIR__ . '/..' . '/cakephp/datasource/SimplePaginator.php',
        'Cake\\Event\\Decorator\\AbstractDecorator' => __DIR__ . '/..' . '/cakephp/event/Decorator/AbstractDecorator.php',
        'Cake\\Event\\Decorator\\ConditionDecorator' => __DIR__ . '/..' . '/cakephp/event/Decorator/ConditionDecorator.php',
        'Cake\\Event\\Decorator\\SubjectFilterDecorator' => __DIR__ . '/..' . '/cakephp/event/Decorator/SubjectFilterDecorator.php',
        'Cake\\Event\\Event' => __DIR__ . '/..' . '/cakephp/event/Event.php',
        'Cake\\Event\\EventDispatcherInterface' => __DIR__ . '/..' . '/cakephp/event/EventDispatcherInterface.php',
        'Cake\\Event\\EventDispatcherTrait' => __DIR__ . '/..' . '/cakephp/event/EventDispatcherTrait.php',
        'Cake\\Event\\EventInterface' => __DIR__ . '/..' . '/cakephp/event/EventInterface.php',
        'Cake\\Event\\EventList' => __DIR__ . '/..' . '/cakephp/event/EventList.php',
        'Cake\\Event\\EventListenerInterface' => __DIR__ . '/..' . '/cakephp/event/EventListenerInterface.php',
        'Cake\\Event\\EventManager' => __DIR__ . '/..' . '/cakephp/event/EventManager.php',
        'Cake\\Event\\EventManagerInterface' => __DIR__ . '/..' . '/cakephp/event/EventManagerInterface.php',
        'Cake\\ORM\\Association' => __DIR__ . '/..' . '/cakephp/orm/Association.php',
        'Cake\\ORM\\AssociationCollection' => __DIR__ . '/..' . '/cakephp/orm/AssociationCollection.php',
        'Cake\\ORM\\Association\\BelongsTo' => __DIR__ . '/..' . '/cakephp/orm/Association/BelongsTo.php',
        'Cake\\ORM\\Association\\BelongsToMany' => __DIR__ . '/..' . '/cakephp/orm/Association/BelongsToMany.php',
        'Cake\\ORM\\Association\\DependentDeleteHelper' => __DIR__ . '/..' . '/cakephp/orm/Association/DependentDeleteHelper.php',
        'Cake\\ORM\\Association\\HasMany' => __DIR__ . '/..' . '/cakephp/orm/Association/HasMany.php',
        'Cake\\ORM\\Association\\HasOne' => __DIR__ . '/..' . '/cakephp/orm/Association/HasOne.php',
        'Cake\\ORM\\Association\\Loader\\SelectLoader' => __DIR__ . '/..' . '/cakephp/orm/Association/Loader/SelectLoader.php',
        'Cake\\ORM\\Association\\Loader\\SelectWithPivotLoader' => __DIR__ . '/..' . '/cakephp/orm/Association/Loader/SelectWithPivotLoader.php',
        'Cake\\ORM\\AssociationsNormalizerTrait' => __DIR__ . '/..' . '/cakephp/orm/AssociationsNormalizerTrait.php',
        'Cake\\ORM\\Behavior' => __DIR__ . '/..' . '/cakephp/orm/Behavior.php',
        'Cake\\ORM\\BehaviorRegistry' => __DIR__ . '/..' . '/cakephp/orm/BehaviorRegistry.php',
        'Cake\\ORM\\Behavior\\CounterCacheBehavior' => __DIR__ . '/..' . '/cakephp/orm/Behavior/CounterCacheBehavior.php',
        'Cake\\ORM\\Behavior\\TimestampBehavior' => __DIR__ . '/..' . '/cakephp/orm/Behavior/TimestampBehavior.php',
        'Cake\\ORM\\Behavior\\TranslateBehavior' => __DIR__ . '/..' . '/cakephp/orm/Behavior/TranslateBehavior.php',
        'Cake\\ORM\\Behavior\\Translate\\EavStrategy' => __DIR__ . '/..' . '/cakephp/orm/Behavior/Translate/EavStrategy.php',
        'Cake\\ORM\\Behavior\\Translate\\ShadowTableStrategy' => __DIR__ . '/..' . '/cakephp/orm/Behavior/Translate/ShadowTableStrategy.php',
        'Cake\\ORM\\Behavior\\Translate\\TranslateStrategyInterface' => __DIR__ . '/..' . '/cakephp/orm/Behavior/Translate/TranslateStrategyInterface.php',
        'Cake\\ORM\\Behavior\\Translate\\TranslateStrategyTrait' => __DIR__ . '/..' . '/cakephp/orm/Behavior/Translate/TranslateStrategyTrait.php',
        'Cake\\ORM\\Behavior\\Translate\\TranslateTrait' => __DIR__ . '/..' . '/cakephp/orm/Behavior/Translate/TranslateTrait.php',
        'Cake\\ORM\\Behavior\\TreeBehavior' => __DIR__ . '/..' . '/cakephp/orm/Behavior/TreeBehavior.php',
        'Cake\\ORM\\EagerLoadable' => __DIR__ . '/..' . '/cakephp/orm/EagerLoadable.php',
        'Cake\\ORM\\EagerLoader' => __DIR__ . '/..' . '/cakephp/orm/EagerLoader.php',
        'Cake\\ORM\\Entity' => __DIR__ . '/..' . '/cakephp/orm/Entity.php',
        'Cake\\ORM\\Exception\\MissingBehaviorException' => __DIR__ . '/..' . '/cakephp/orm/Exception/MissingBehaviorException.php',
        'Cake\\ORM\\Exception\\MissingEntityException' => __DIR__ . '/..' . '/cakephp/orm/Exception/MissingEntityException.php',
        'Cake\\ORM\\Exception\\MissingTableClassException' => __DIR__ . '/..' . '/cakephp/orm/Exception/MissingTableClassException.php',
        'Cake\\ORM\\Exception\\PersistenceFailedException' => __DIR__ . '/..' . '/cakephp/orm/Exception/PersistenceFailedException.php',
        'Cake\\ORM\\Exception\\RolledbackTransactionException' => __DIR__ . '/..' . '/cakephp/orm/Exception/RolledbackTransactionException.php',
        'Cake\\ORM\\LazyEagerLoader' => __DIR__ . '/..' . '/cakephp/orm/LazyEagerLoader.php',
        'Cake\\ORM\\Locator\\LocatorAwareTrait' => __DIR__ . '/..' . '/cakephp/orm/Locator/LocatorAwareTrait.php',
        'Cake\\ORM\\Locator\\LocatorInterface' => __DIR__ . '/..' . '/cakephp/orm/Locator/LocatorInterface.php',
        'Cake\\ORM\\Locator\\TableLocator' => __DIR__ . '/..' . '/cakephp/orm/Locator/TableLocator.php',
        'Cake\\ORM\\Marshaller' => __DIR__ . '/..' . '/cakephp/orm/Marshaller.php',
        'Cake\\ORM\\PropertyMarshalInterface' => __DIR__ . '/..' . '/cakephp/orm/PropertyMarshalInterface.php',
        'Cake\\ORM\\Query' => __DIR__ . '/..' . '/cakephp/orm/Query.php',
        'Cake\\ORM\\ResultSet' => __DIR__ . '/..' . '/cakephp/orm/ResultSet.php',
        'Cake\\ORM\\Rule\\ExistsIn' => __DIR__ . '/..' . '/cakephp/orm/Rule/ExistsIn.php',
        'Cake\\ORM\\Rule\\IsUnique' => __DIR__ . '/..' . '/cakephp/orm/Rule/IsUnique.php',
        'Cake\\ORM\\Rule\\LinkConstraint' => __DIR__ . '/..' . '/cakephp/orm/Rule/LinkConstraint.php',
        'Cake\\ORM\\Rule\\ValidCount' => __DIR__ . '/..' . '/cakephp/orm/Rule/ValidCount.php',
        'Cake\\ORM\\RulesChecker' => __DIR__ . '/..' . '/cakephp/orm/RulesChecker.php',
        'Cake\\ORM\\SaveOptionsBuilder' => __DIR__ . '/..' . '/cakephp/orm/SaveOptionsBuilder.php',
        'Cake\\ORM\\Table' => __DIR__ . '/..' . '/cakephp/orm/Table.php',
        'Cake\\ORM\\TableRegistry' => __DIR__ . '/..' . '/cakephp/orm/TableRegistry.php',
        'Cake\\Utility\\CookieCryptTrait' => __DIR__ . '/..' . '/cakephp/utility/CookieCryptTrait.php',
        'Cake\\Utility\\Crypto\\OpenSsl' => __DIR__ . '/..' . '/cakephp/utility/Crypto/OpenSsl.php',
        'Cake\\Utility\\Exception\\XmlException' => __DIR__ . '/..' . '/cakephp/utility/Exception/XmlException.php',
        'Cake\\Utility\\Hash' => __DIR__ . '/..' . '/cakephp/utility/Hash.php',
        'Cake\\Utility\\Inflector' => __DIR__ . '/..' . '/cakephp/utility/Inflector.php',
        'Cake\\Utility\\MergeVariablesTrait' => __DIR__ . '/..' . '/cakephp/utility/MergeVariablesTrait.php',
        'Cake\\Utility\\Security' => __DIR__ . '/..' . '/cakephp/utility/Security.php',
        'Cake\\Utility\\Text' => __DIR__ . '/..' . '/cakephp/utility/Text.php',
        'Cake\\Utility\\Xml' => __DIR__ . '/..' . '/cakephp/utility/Xml.php',
        'Cake\\Validation\\RulesProvider' => __DIR__ . '/..' . '/cakephp/validation/RulesProvider.php',
        'Cake\\Validation\\ValidatableInterface' => __DIR__ . '/..' . '/cakephp/validation/ValidatableInterface.php',
        'Cake\\Validation\\Validation' => __DIR__ . '/..' . '/cakephp/validation/Validation.php',
        'Cake\\Validation\\ValidationRule' => __DIR__ . '/..' . '/cakephp/validation/ValidationRule.php',
        'Cake\\Validation\\ValidationSet' => __DIR__ . '/..' . '/cakephp/validation/ValidationSet.php',
        'Cake\\Validation\\Validator' => __DIR__ . '/..' . '/cakephp/validation/Validator.php',
        'Cake\\Validation\\ValidatorAwareInterface' => __DIR__ . '/..' . '/cakephp/validation/ValidatorAwareInterface.php',
        'Cake\\Validation\\ValidatorAwareTrait' => __DIR__ . '/..' . '/cakephp/validation/ValidatorAwareTrait.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e846ef0f4122a1597374453411cfe55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e846ef0f4122a1597374453411cfe55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e846ef0f4122a1597374453411cfe55::$classMap;

        }, null, ClassLoader::class);
    }
}
