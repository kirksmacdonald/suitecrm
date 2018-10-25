<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Api\\Core\\Config\\ApiConfig' => $baseDir . '/Api/Core/Config/ApiConfig.php',
    'Api\\Core\\Loader\\ContainerLoader' => $baseDir . '/Api/Core/Loader/ContainerLoader.php',
    'Api\\Core\\Loader\\CustomLoader' => $baseDir . '/Api/Core/Loader/CustomLoader.php',
    'Api\\Core\\Loader\\RouteLoader' => $baseDir . '/Api/Core/Loader/RouteLoader.php',
    'Api\\Core\\Resolver\\ConfigResolver' => $baseDir . '/Api/Core/Resolver/ConfigResolver.php',
    'Api\\V8\\BeanDecorator\\BeanListRequest' => $baseDir . '/Api/V8/BeanDecorator/BeanListRequest.php',
    'Api\\V8\\BeanDecorator\\BeanListResponse' => $baseDir . '/Api/V8/BeanDecorator/BeanListResponse.php',
    'Api\\V8\\BeanDecorator\\BeanManager' => $baseDir . '/Api/V8/BeanDecorator/BeanManager.php',
    'Api\\V8\\Controller\\BaseController' => $baseDir . '/Api/V8/Controller/BaseController.php',
    'Api\\V8\\Controller\\InvocationStrategy\\SuiteInvocationStrategy' => $baseDir . '/Api/V8/Controller/InvocationStrategy/SuiteInvocationStrategy.php',
    'Api\\V8\\Controller\\ListViewController' => $baseDir . '/Api/V8/Controller/ListViewController.php',
    'Api\\V8\\Controller\\ListViewSearchController' => $baseDir . '/Api/V8/Controller/ListViewSearchController.php',
    'Api\\V8\\Controller\\LogoutController' => $baseDir . '/Api/V8/Controller/LogoutController.php',
    'Api\\V8\\Controller\\ModuleController' => $baseDir . '/Api/V8/Controller/ModuleController.php',
    'Api\\V8\\Controller\\RelationshipController' => $baseDir . '/Api/V8/Controller/RelationshipController.php',
    'Api\\V8\\Controller\\UserController' => $baseDir . '/Api/V8/Controller/UserController.php',
    'Api\\V8\\Controller\\UserPreferencesController' => $baseDir . '/Api/V8/Controller/UserPreferencesController.php',
    'Api\\V8\\Factory\\ParamsMiddlewareFactory' => $baseDir . '/Api/V8/Factory/ParamsMiddlewareFactory.php',
    'Api\\V8\\Factory\\ValidatorFactory' => $baseDir . '/Api/V8/Factory/ValidatorFactory.php',
    'Api\\V8\\Helper\\VarDefHelper' => $baseDir . '/Api/V8/Helper/VarDefHelper.php',
    'Api\\V8\\JsonApi\\Helper\\AttributeObjectHelper' => $baseDir . '/Api/V8/JsonApi/Helper/AttributeObjectHelper.php',
    'Api\\V8\\JsonApi\\Helper\\PaginationObjectHelper' => $baseDir . '/Api/V8/JsonApi/Helper/PaginationObjectHelper.php',
    'Api\\V8\\JsonApi\\Helper\\RelationshipObjectHelper' => $baseDir . '/Api/V8/JsonApi/Helper/RelationshipObjectHelper.php',
    'Api\\V8\\JsonApi\\Repository\\Filter' => $baseDir . '/Api/V8/JsonApi/Repository/Filter.php',
    'Api\\V8\\JsonApi\\Repository\\Sort' => $baseDir . '/Api/V8/JsonApi/Repository/Sort.php',
    'Api\\V8\\JsonApi\\Response\\AttributeResponse' => $baseDir . '/Api/V8/JsonApi/Response/AttributeResponse.php',
    'Api\\V8\\JsonApi\\Response\\DataResponse' => $baseDir . '/Api/V8/JsonApi/Response/DataResponse.php',
    'Api\\V8\\JsonApi\\Response\\DocumentResponse' => $baseDir . '/Api/V8/JsonApi/Response/DocumentResponse.php',
    'Api\\V8\\JsonApi\\Response\\ErrorResponse' => $baseDir . '/Api/V8/JsonApi/Response/ErrorResponse.php',
    'Api\\V8\\JsonApi\\Response\\LinksResponse' => $baseDir . '/Api/V8/JsonApi/Response/LinksResponse.php',
    'Api\\V8\\JsonApi\\Response\\MetaResponse' => $baseDir . '/Api/V8/JsonApi/Response/MetaResponse.php',
    'Api\\V8\\JsonApi\\Response\\PaginationResponse' => $baseDir . '/Api/V8/JsonApi/Response/PaginationResponse.php',
    'Api\\V8\\JsonApi\\Response\\RelationshipResponse' => $baseDir . '/Api/V8/JsonApi/Response/RelationshipResponse.php',
    'Api\\V8\\Middleware\\ParamsMiddleware' => $baseDir . '/Api/V8/Middleware/ParamsMiddleware.php',
    'Api\\V8\\OAuth2\\Entity\\AccessTokenEntity' => $baseDir . '/Api/V8/OAuth2/Entity/AccessTokenEntity.php',
    'Api\\V8\\OAuth2\\Entity\\ClientEntity' => $baseDir . '/Api/V8/OAuth2/Entity/ClientEntity.php',
    'Api\\V8\\OAuth2\\Entity\\RefreshTokenEntity' => $baseDir . '/Api/V8/OAuth2/Entity/RefreshTokenEntity.php',
    'Api\\V8\\OAuth2\\Entity\\UserEntity' => $baseDir . '/Api/V8/OAuth2/Entity/UserEntity.php',
    'Api\\V8\\OAuth2\\Repository\\AccessTokenRepository' => $baseDir . '/Api/V8/OAuth2/Repository/AccessTokenRepository.php',
    'Api\\V8\\OAuth2\\Repository\\ClientRepository' => $baseDir . '/Api/V8/OAuth2/Repository/ClientRepository.php',
    'Api\\V8\\OAuth2\\Repository\\RefreshTokenRepository' => $baseDir . '/Api/V8/OAuth2/Repository/RefreshTokenRepository.php',
    'Api\\V8\\OAuth2\\Repository\\ScopeRepository' => $baseDir . '/Api/V8/OAuth2/Repository/ScopeRepository.php',
    'Api\\V8\\OAuth2\\Repository\\UserRepository' => $baseDir . '/Api/V8/OAuth2/Repository/UserRepository.php',
    'Api\\V8\\Param\\BaseParam' => $baseDir . '/Api/V8/Param/BaseParam.php',
    'Api\\V8\\Param\\CreateModuleDataParams' => $baseDir . '/Api/V8/Param/CreateModuleDataParams.php',
    'Api\\V8\\Param\\CreateModuleParams' => $baseDir . '/Api/V8/Param/CreateModuleParams.php',
    'Api\\V8\\Param\\CreateRelationshipParams' => $baseDir . '/Api/V8/Param/CreateRelationshipParams.php',
    'Api\\V8\\Param\\DeleteModuleParams' => $baseDir . '/Api/V8/Param/DeleteModuleParams.php',
    'Api\\V8\\Param\\DeleteRelationshipParams' => $baseDir . '/Api/V8/Param/DeleteRelationshipParams.php',
    'Api\\V8\\Param\\GetModuleParams' => $baseDir . '/Api/V8/Param/GetModuleParams.php',
    'Api\\V8\\Param\\GetModulesParams' => $baseDir . '/Api/V8/Param/GetModulesParams.php',
    'Api\\V8\\Param\\GetRelationshipDataParams' => $baseDir . '/Api/V8/Param/GetRelationshipDataParams.php',
    'Api\\V8\\Param\\GetRelationshipParams' => $baseDir . '/Api/V8/Param/GetRelationshipParams.php',
    'Api\\V8\\Param\\GetUserPreferencesParams' => $baseDir . '/Api/V8/Param/GetUserPreferencesParams.php',
    'Api\\V8\\Param\\ListViewColumnsParams' => $baseDir . '/Api/V8/Param/ListViewColumnsParams.php',
    'Api\\V8\\Param\\ListViewSearchParams' => $baseDir . '/Api/V8/Param/ListViewSearchParams.php',
    'Api\\V8\\Param\\Options\\Attributes' => $baseDir . '/Api/V8/Param/Options/Attributes.php',
    'Api\\V8\\Param\\Options\\BaseOption' => $baseDir . '/Api/V8/Param/Options/BaseOption.php',
    'Api\\V8\\Param\\Options\\Fields' => $baseDir . '/Api/V8/Param/Options/Fields.php',
    'Api\\V8\\Param\\Options\\Filter' => $baseDir . '/Api/V8/Param/Options/Filter.php',
    'Api\\V8\\Param\\Options\\Id' => $baseDir . '/Api/V8/Param/Options/Id.php',
    'Api\\V8\\Param\\Options\\LinkFieldName' => $baseDir . '/Api/V8/Param/Options/LinkFieldName.php',
    'Api\\V8\\Param\\Options\\ModuleName' => $baseDir . '/Api/V8/Param/Options/ModuleName.php',
    'Api\\V8\\Param\\Options\\Page' => $baseDir . '/Api/V8/Param/Options/Page.php',
    'Api\\V8\\Param\\Options\\Sort' => $baseDir . '/Api/V8/Param/Options/Sort.php',
    'Api\\V8\\Param\\Options\\Type' => $baseDir . '/Api/V8/Param/Options/Type.php',
    'Api\\V8\\Param\\PageParams' => $baseDir . '/Api/V8/Param/PageParams.php',
    'Api\\V8\\Param\\UpdateModuleDataParams' => $baseDir . '/Api/V8/Param/UpdateModuleDataParams.php',
    'Api\\V8\\Param\\UpdateModuleParams' => $baseDir . '/Api/V8/Param/UpdateModuleParams.php',
    'Api\\V8\\Service\\ListViewSearchService' => $baseDir . '/Api/V8/Service/ListViewSearchService.php',
    'Api\\V8\\Service\\ListViewService' => $baseDir . '/Api/V8/Service/ListViewService.php',
    'Api\\V8\\Service\\LogoutService' => $baseDir . '/Api/V8/Service/LogoutService.php',
    'Api\\V8\\Service\\ModuleService' => $baseDir . '/Api/V8/Service/ModuleService.php',
    'Api\\V8\\Service\\RelationshipService' => $baseDir . '/Api/V8/Service/RelationshipService.php',
    'Api\\V8\\Service\\UserPreferencesService' => $baseDir . '/Api/V8/Service/UserPreferencesService.php',
    'Api\\V8\\Service\\UserService' => $baseDir . '/Api/V8/Service/UserService.php',
);
