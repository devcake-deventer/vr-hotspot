Lighthouse GraphQL Hotspot package
==================================

GraphQL mutations and queries to easily store and retrieve hotspots for VR videos.

## Instructions
The entire package is quite opinionated, meaning that we do not offer any configuration. Everything is handled from within your vendor folder. 

## Features
This package comes with default models and migrations on which we have based the GraphQL schema. Because of this we do not enable package users to configure the different models and tabelnames.

- Models and migrations for hotspot and video tables (including relationships)
- Automated migration when running `php artisan migrate`
- Automatically adds the hotspot and video types to the GraphQL schema

**For the automated adding to the GraphQL schema we rely on the `BuildSchemaString` event provided by Lighthouse**

## License

The MIT License (MIT)