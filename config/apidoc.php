<?php

return [

    /*
     * The output path for the generated documentation.
     * This path should be relative to the root of your application.
     */
    'output' => 'public/docs',

    /*
     * The router to be used (Laravel or Dingo).
     */
    'router' => 'laravel',

    /*
     * The base URL to be used in examples and the Postman collection.
     * By default, this will be the value of config('app.url').
     */
    'base_url' => null,

    /*
     * Generate a Postman collection in addition to HTML docs.
     */
    'postman' => [
        /*
         * Specify whether the Postman collection should be generated.
         */
        'enabled' => true,

        /*
         * The name for the exported Postman collection. Default: config('app.name')." API"
         */
        'name' => null,

        /*
         * The description for the exported Postman collection.
         */
        'description' => null,
    ],

    /*
     * The routes for which documentation should be generated.
     * Each group contains rules defining which routes should be included ('match', 'include' and 'exclude' sections)
     * and rules which should be applied to them ('apply' section).
     */
    'routes' => [
        [
            /*
             * Specify conditions to determine what routes will be parsed in this group.
             * A route must fulfill ALL conditions to pass.
             */
            'match' => [

                /*
                 * Match only routes whose domains match this pattern (use * as a wildcard to match any characters).
                 */
                'domains' => [
                    '*',
                    // 'domain1.*',
                ],

                /*
                 * Match only routes whose paths match this pattern (use * as a wildcard to match any characters).
                 */
                'prefixes' => [
                    '*',
                    // 'users/*',
                ],

                /*
                 * Match only routes registered under this version. This option is ignored for Laravel router.
                 * Note that wildcards are not supported.
                 */
                'versions' => [
                    'v1',
                ],
            ],

            /*
             * Include these routes when generating documentation,
             * even if they did not match the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'include' => [
                // 'users.index', 'healthcheck*'
            ],

            /*
             * Exclude these routes when generating documentation,
             * even if they matched the rules above.
             * Note that the route must be referenced by name here (wildcards are supported).
             */
            'exclude' => [
                // 'users.create', 'admin.*'
            ],

            /*
             * Specify rules to be applied to all the routes in this group when generating documentation
             */
            'apply' => [
                /*
                 * Specify headers to be added to the example requests
                 */
                'headers' => [
                    'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2YTNmOTliYzBkZmE5MjA2Nzg0OTYwZGY1Njc1M2QxODk1OWQ0YWUyOWFkODg1YjJkNGUwOWY5N2E4YTRlZjEyNDE1YzAxNzg3OWQyNjljIn0.eyJhdWQiOiIyIiwianRpIjoiYzZhM2Y5OWJjMGRmYTkyMDY3ODQ5NjBkZjU2NzUzZDE4OTU5ZDRhZTI5YWQ4ODViMmQ0ZTA5Zjk3YThhNGVmMTI0MTVjMDE3ODc5ZDI2OWMiLCJpYXQiOjE1NjkzMzU1NzEsIm5iZiI6MTU2OTMzNTU3MSwiZXhwIjoxNjAwOTU3OTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QFUSWU7PoWhk3dtKVjQURZpnBxlC0-9oVOKs3dqh1tTO3j8UL_hqTll7TqMV84WoTN_QhhDLKPgvxpfo_1VEATcg7qjpBhfyj5jITtnVvMxARU-8l_Ho86hJXH5ZdWFhNCksQnSGVhd6eatmHcm6CJGrxlxnRkRaBcAXtJ_Iu01-RB6jUsVn5oZqMn9zDGp0TrgNp8K1tg-6LUZavi8RR2Ztx3dYv6t1h9dKJcGGFRD0xU7dz8UTWgV0HkTB_WWx8AM3odpsrvQ6ka2mO_Ifw_RW5Rd0B6kPt_qPIQJ-d_Rp9b6z-GU9XzirvN6TFBbI1MZ_8A7-w0NUoxjjUWCvwUV98cy86ism897qxolocs3SFfHwVvRbbpMzPFxotq4N1r-YQWBMsqvm4vrMYHbw___s8f6_icNOs4hYTxYE54NS5a8ogrCaeTe-gVAI2aQVl-uVpXwbH4lu0lZ9e1F4l9YSqWew9cQd2DmpkIcgsn2DU6TbDb2ZPPNN5_koAtnCBiXVXJiWkkrrOkYRrU69dm3ByJtqjGkzqrAIr1FqlJreZa_43pnbM_iu6t1B7GbXKEGfwSXVMWayQyZjM4wgbxWT3zGVMNy4mXe0IcJ1fUtZgyWJf-h4x65V8In-dVO3LhHOGdMtZDOhelYaEkLTEbi7qAccmL3HNDHDJDeuKFQ',
                    // 'Api-Version' => 'v2',
                ],

                /*
                 * If no @response or @transformer declarations are found for the route,
                 * we'll try to get a sample response by attempting an API call.
                 * Configure the settings for the API call here.
                 */
                'response_calls' => [
                    /*
                     * API calls will be made only for routes in this group matching these HTTP methods (GET, POST, etc).
                     * List the methods here or use '*' to mean all methods. Leave empty to disable API calls.
                     */
                    'methods' => ['GET'],

                    /*
                     * For URLs which have parameters (/users/{user}, /orders/{id?}),
                     * specify what values the parameters should be replaced with.
                     * Note that you must specify the full parameter,
                     * including curly brackets and question marks if any.
                     *
                     * You may also specify the preceding path, to allow for variations,
                     * for instance 'users/{id}' => 1 and 'apps/{id}' => 'htTviP'.
                     * However, there must only be one parameter per path.
                     */
                    'bindings' => [
                        // '{user}' => 1,
                    ],

                    /*
                     * Laravel config variables which should be set for the API call.
                     * This is a good place to ensure that notifications, emails
                     * and other external services are not triggered
                     * during the documentation API calls
                     */
                    'config' => [
                        'app.env' => 'documentation',
                        'app.debug' => false,
                        // 'service.key' => 'value',
                    ],

                    /*
                     * Headers which should be sent with the API call.
                     */
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                        // 'key' => 'value',
                    ],

                    /*
                     * Cookies which should be sent with the API call.
                     */
                    'cookies' => [
                        // 'name' => 'value'
                    ],

                    /*
                     * Query parameters which should be sent with the API call.
                     */
                    'query' => [
                        // 'key' => 'value',
                    ],

                    /*
                     * Body parameters which should be sent with the API call.
                     */
                    'body' => [
                        // 'key' => 'value',
                    ],
                ],
            ],
        ],
    ],

    'strategies' => [
        'metadata' => [
            \Mpociot\ApiDoc\Strategies\Metadata\GetFromDocBlocks::class,
        ],
        'bodyParameters' => [
            \Mpociot\ApiDoc\Strategies\BodyParameters\GetFromBodyParamTag::class,
        ],
        'queryParameters' => [
            \Mpociot\ApiDoc\Strategies\QueryParameters\GetFromQueryParamTag::class,
        ],
        'responses' => [
            \Mpociot\ApiDoc\Strategies\Responses\UseResponseTag::class,
            \Mpociot\ApiDoc\Strategies\Responses\UseResponseFileTag::class,
            \Mpociot\ApiDoc\Strategies\Responses\UseTransformerTags::class,
            \Mpociot\ApiDoc\Strategies\Responses\ResponseCalls::class,
        ],
    ],

    /*
     * Custom logo path. The logo will be copied from this location
     * during the generate process. Set this to false to use the default logo.
     *
     * Change to an absolute path to use your custom logo. For example:
     * 'logo' => resource_path('views') . '/api/logo.png'
     *
     * If you want to use this, please be aware of the following rules:
     * - the image size must be 230 x 52
     */
    'logo' => false,

    /*
     * Name for the group of routes which do not have a @group set.
     */
    'default_group' => 'general',

    /*
     * Example requests for each endpoint will be shown in each of these languages.
     * Supported options are: bash, javascript, php, python
     * You can add a language of your own, but you must publish the package's views
     * and define a corresponding view for it in the partials/example-requests directory.
     * See https://laravel-apidoc-generator.readthedocs.io/en/latest/generating-documentation.html
     *
     */
    'example_languages' => [
        'bash',
        'javascript',
    ],

    /*
     * Configure how responses are transformed using @transformer and @transformerCollection
     * Requires league/fractal package: composer require league/fractal
     *
     */
    'fractal' => [
        /* If you are using a custom serializer with league/fractal,
         * you can specify it here.
         *
         * Serializers included with league/fractal:
         * - \League\Fractal\Serializer\ArraySerializer::class
         * - \League\Fractal\Serializer\DataArraySerializer::class
         * - \League\Fractal\Serializer\JsonApiSerializer::class
         *
         * Leave as null to use no serializer or return a simple JSON.
         */
        'serializer' => null,
    ],

    /*
     * If you would like the package to generate the same example values for parameters on each run,
     * set this to any number (eg. 1234)
     *
     */
    'faker_seed' => null,
];
