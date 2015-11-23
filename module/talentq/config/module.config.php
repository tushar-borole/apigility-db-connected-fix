<?php
return array(
    'router' => array(
        'routes' => array(
            'talentq.rest.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test[/:test_id]',
                    'defaults' => array(
                        'controller' => 'talentq\\V1\\Rest\\Test\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'talentq.rest.test',
        ),
    ),
    'zf-rest' => array(
        'talentq\\V1\\Rest\\Test\\Controller' => array(
            'listener' => 'talentq\\V1\\Rest\\Test\\TestResource',
            'route_name' => 'talentq.rest.test',
            'route_identifier_name' => 'test_id',
            'collection_name' => 'test',
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
            'entity_class' => 'talentq\\V1\\Rest\\Test\\TestEntity',
            'collection_class' => 'talentq\\V1\\Rest\\Test\\TestCollection',
            'service_name' => 'test',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'talentq\\V1\\Rest\\Test\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'talentq\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.talentq.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'talentq\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.talentq.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'talentq\\V1\\Rest\\Test\\TestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentq.rest.test',
                'route_identifier_name' => 'test_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'talentq\\V1\\Rest\\Test\\TestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'talentq.rest.test',
                'route_identifier_name' => 'test_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'talentq\\V1\\Rest\\Test\\TestResource' => array(
                'adapter_name' => 'talentq',
                'table_name' => 'test',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'talentq\\V1\\Rest\\Test\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'talentq\\V1\\Rest\\Test\\Controller' => array(
            'input_filter' => 'talentq\\V1\\Rest\\Test\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'talentq\\V1\\Rest\\Test\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => false,
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
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
