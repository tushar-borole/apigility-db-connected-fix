<?php
return array(
    'router' => array(
        'routes' => array(
            'talentqapi.rest.abouts' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/abouts[/:abouts_id]',
                    'defaults' => array(
                        'controller' => 'talentqapi\\V1\\Rest\\Abouts\\Controller',
                    ),
                ),
            ),
            'talentqapi.rest.categories' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/categories[/:categories_id]',
                    'defaults' => array(
                        'controller' => 'talentqapi\\V1\\Rest\\Categories\\Controller',
                    ),
                ),
            ),
            'talentqapi.rest.achievements' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/achievements[/:achievements_id]',
                    'defaults' => array(
                        'controller' => 'talentqapi\\V1\\Rest\\Achievements\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'talentqapi.rest.abouts',
            1 => 'talentqapi.rest.categories',
            2 => 'talentqapi.rest.achievements',
        ),
    ),
    'zf-rest' => array(
        'talentqapi\\V1\\Rest\\Abouts\\Controller' => array(
            'listener' => 'talentqapi\\V1\\Rest\\Abouts\\AboutsResource',
            'route_name' => 'talentqapi.rest.abouts',
            'route_identifier_name' => 'abouts_id',
            'collection_name' => 'abouts',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'talentqapi\\V1\\Rest\\Abouts\\AboutsEntity',
            'collection_class' => 'talentqapi\\V1\\Rest\\Abouts\\AboutsCollection',
            'service_name' => 'abouts',
        ),
        'talentqapi\\V1\\Rest\\Categories\\Controller' => array(
            'listener' => 'talentqapi\\V1\\Rest\\Categories\\CategoriesResource',
            'route_name' => 'talentqapi.rest.categories',
            'route_identifier_name' => 'categories_id',
            'collection_name' => 'categories',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'talentqapi\\V1\\Rest\\Categories\\CategoriesEntity',
            'collection_class' => 'talentqapi\\V1\\Rest\\Categories\\CategoriesCollection',
            'service_name' => 'categories',
        ),
        'talentqapi\\V1\\Rest\\Achievements\\Controller' => array(
            'listener' => 'talentqapi\\V1\\Rest\\Achievements\\AchievementsResource',
            'route_name' => 'talentqapi.rest.achievements',
            'route_identifier_name' => 'achievements_id',
            'collection_name' => 'achievements',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'talentqapi\\V1\\Rest\\Achievements\\AchievementsEntity',
            'collection_class' => 'talentqapi\\V1\\Rest\\Achievements\\AchievementsCollection',
            'service_name' => 'achievements',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'talentqapi\\V1\\Rest\\Abouts\\Controller' => 'HalJson',
            'talentqapi\\V1\\Rest\\Categories\\Controller' => 'HalJson',
            'talentqapi\\V1\\Rest\\Achievements\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'talentqapi\\V1\\Rest\\Abouts\\Controller' => array(
                0 => 'application/json',
            ),
            'talentqapi\\V1\\Rest\\Categories\\Controller' => array(
                0 => 'application/vnd.talentqapi.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'talentqapi\\V1\\Rest\\Achievements\\Controller' => array(
                0 => 'application/vnd.talentqapi.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'talentqapi\\V1\\Rest\\Abouts\\Controller' => array(
                0 => 'application/json',
            ),
            'talentqapi\\V1\\Rest\\Categories\\Controller' => array(
                0 => 'application/vnd.talentqapi.v1+json',
                1 => 'application/json',
            ),
            'talentqapi\\V1\\Rest\\Achievements\\Controller' => array(
                0 => 'application/vnd.talentqapi.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'talentqapi\\V1\\Rest\\Abouts\\AboutsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.abouts',
                'route_identifier_name' => 'abouts_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'talentqapi\\V1\\Rest\\Abouts\\AboutsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.abouts',
                'route_identifier_name' => 'abouts_id',
                'is_collection' => true,
            ),
            'talentqapi\\V1\\Rest\\Categories\\CategoriesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.categories',
                'route_identifier_name' => 'categories_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'talentqapi\\V1\\Rest\\Categories\\CategoriesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.categories',
                'route_identifier_name' => 'categories_id',
                'is_collection' => true,
            ),
            'talentqapi\\V1\\Rest\\Achievements\\AchievementsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.achievements',
                'route_identifier_name' => 'achievements_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'talentqapi\\V1\\Rest\\Achievements\\AchievementsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentqapi.rest.achievements',
                'route_identifier_name' => 'achievements_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'talentqapi\\V1\\Rest\\Abouts\\AboutsResource' => array(
                'adapter_name' => 'talentq',
                'table_name' => 'abouts',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'talentqapi\\V1\\Rest\\Abouts\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'talentqapi\\V1\\Rest\\Abouts\\AboutsResource\\Table',
            ),
            'talentqapi\\V1\\Rest\\Categories\\CategoriesResource' => array(
                'adapter_name' => 'talentq',
                'table_name' => 'categories',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'talentqapi\\V1\\Rest\\Categories\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'talentqapi\\V1\\Rest\\Achievements\\AchievementsResource' => array(
                'adapter_name' => 'talentq',
                'table_name' => 'achievements',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'talentqapi\\V1\\Rest\\Achievements\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'talentqapi\\V1\\Rest\\Abouts\\Controller' => array(
            'input_filter' => 'talentqapi\\V1\\Rest\\Abouts\\Validator',
        ),
        'talentqapi\\V1\\Rest\\Categories\\Controller' => array(
            'input_filter' => 'talentqapi\\V1\\Rest\\Categories\\Validator',
        ),
        'talentqapi\\V1\\Rest\\Achievements\\Controller' => array(
            'input_filter' => 'talentqapi\\V1\\Rest\\Achievements\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'talentqapi\\V1\\Rest\\Abouts\\Validator' => array(
            0 => array(
                'name' => 'title',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '5000',
                        ),
                    ),
                ),
            ),
        ),
        'talentqapi\\V1\\Rest\\Categories\\Validator' => array(
            0 => array(
                'name' => 'category_name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'created',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'status',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'talentqapi\\V1\\Rest\\Achievements\\Validator' => array(
            0 => array(
                'name' => 'achievement',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
