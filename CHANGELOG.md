# CHANGELOG

### 2018-11-08 - Version 3.0.5

- [[PR #17](https://github.com/sonnenglas/amazon-mws-laravel/pull/17)] Fix to include relationships including additional ns2 attributes
- [[PR #16](https://github.com/sonnenglas/amazon-mws-laravel/pull/16)] Fixed timestamp format to truly follow ISO8601
- [[PR #13](https://github.com/sonnenglas/amazon-mws-laravel/pull/13)] Fix ineffective muteLog config setting
- [[PR #9](https://github.com/sonnenglas/amazon-mws-laravel/pull/9)] added proxy support and some fixes

### 2018-07-25 - Version 3.0.4

- added `setMarketPlaceId()` to AmazonFulfillmentOrderCreator class

### 2018-07-24 - Version 3.0.3

- [[PR #11](https://github.com/sonnenglas/amazon-mws-laravel/pull/11/)] added all missing order / orderitem fields that were declared in the API spec
- [[PR #8](https://github.com/sonnenglas/amazon-mws-laravel/pull/8/)] added `authToken` to configuration file. MWSAuthToken is used to make requests on behalf of other amazon users
- [[PR #7](https://github.com/sonnenglas/amazon-mws-laravel/pull/7/)] Backported Financial APIs from https://github.com/CPIGroup/phpAmazonMWS