# Matomo WP
Matomo + WordPress, [By Robots](https://by-robots.dev)

[![Build Status](https://travis-ci.org/by-robots/Matomo-WP.svg?branch=master)](https://travis-ci.org/by-robots/Matomo-WP)

## Usage
After the plugin has been installed and activated add your `Site ID` and
`Tracking Domain` values in `Settings > General`. Both of these fields are 
required and if either are empty the tracking code will not be inserted.

## Tests
To run tests install dependencies with `composer install` and then run
`./vendor/bin/phpunit`. If prompted, follow the instruction to set up the test
environment.

## Code Style
### Check
To test the code style, install dev dependencies with `composer` and run
`./vendor/bin/phpcs`.

### Automatically Correct
To automatically correct errors run `./vendor/bin/phpcbf`.
